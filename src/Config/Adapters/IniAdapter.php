<?php

namespace Radiergummi\Foundation\Framework\Config\Adapters;

use function addslashes;
use const E_WARNING;
use function is_array;
use function is_bool;
use function is_int;
use function parse_ini_string;
use ParseError;
use function preg_match;
use Radiergummi\Foundation\Framework\Config\Adapter;
use Radiergummi\Foundation\Framework\Config\Exception\InvalidConfigFileException;
use function restore_error_handler;
use function set_error_handler;

/**
 * INI adapter
 * Encodes and decodes INI configuration files
 *
 * @package Radiergummi\Foundation\Framework\Config\Adapters
 */
class IniAdapter implements Adapter {

    /**
     * @inheritdoc
     */
    public static function getSupportedFileFormat(): string {
        return 'ini';
    }

    /**
     * @inheritdoc
     */
    public static function decode( string $data ): array {
        try {
            // set an intermediate error handler to catch PHP warnings. PHP throws an E_WARNING on INI parser errors,
            // so we rethrow that as an ordinary ParseError which we can catch.
            /** @noinspection PhpUnusedParameterInspection */
            set_error_handler( function( $code, $message ) {
                throw new ParseError( $message );
            }, E_WARNING );

            $decodedData = parse_ini_string( $data, true, INI_SCANNER_TYPED );

            // restore the original error handler
            restore_error_handler();
        }
        catch ( ParseError $parseError ) {
            throw new InvalidConfigFileException( $parseError->getMessage() );
        }

        return $decodedData;
    }

    /**
     * @inheritdoc
     */
    public static function encode( array $data ): string {
        $encodedData = '';

        foreach ( $data as $key => $value ) {
            if ( is_array( $value ) ) {
                $encodedData .= static::createSection( $key );

                foreach ( $value as $sectionKey => $sectionValue ) {
                    $encodedData .= static::createPair(
                        $sectionKey,
                        static::stringifyValue( $sectionValue )
                    );
                }

                $encodedData .= PHP_EOL;
            } else {
                $encodedData .= static::createPair(
                    $key,
                    static::stringifyValue( $value )
                );
            }
        }

        return $encodedData;
    }

    /**
     * creates an INI section
     *
     * @param string $sectionName
     *
     * @return string
     */
    private static function createSection( string $sectionName ): string {
        return sprintf( "[%s]\n", $sectionName );
    }

    /**
     * creates an INI pair
     *
     * @param string $key
     * @param string $value
     *
     * @return string
     */
    private static function createPair( string $key, string $value ): string {
        return sprintf( "%s=%s\n", $key, $value );
    }

    /**
     * stringifies a value
     *
     * @param $rawValue
     *
     * @return string
     */
    private static function stringifyValue( $rawValue ): string {
        $value = addslashes( $rawValue );

        if ( is_bool( $value ) ) {
            return ( $value ? 'on' : 'off' );
        }

        if ( is_int( $value ) || is_float( $value ) ) {
            return $value;
        }

        if ( is_array( $value ) ) {
            return sprintf( '"%s"', join( ',', $value ) );
        }

        if ( preg_match( '/\s/i', $value ) || preg_match( '/(.*)(\\\\|")(.*)/', $value ) ) {
            return sprintf( '"%s"', $value );
        }

        return $value;
    }
}
