<?php

namespace Radiergummi\Foundation\Framework\Config\Adapters;

use function preg_match;
use Radiergummi\Foundation\Framework\Config\Adapter;
use Radiergummi\Foundation\Framework\Config\Exception\InvalidConfigFileException;
use /** @noinspection PhpUndefinedClassInspection */
    Throwable;
use function var_export;

/**
 * PHP adapter
 * Encodes and decodes PHP configuration files that return an array.
 * This currently uses `eval()` to decode the data, which is bad.
 *
 * @package Radiergummi\Foundation\Framework\Config\Adapters
 */
class PhpAdapter implements Adapter {

    /**
     * @inheritdoc
     */
    public static function getSupportedFileFormat(): string {
        return 'php';
    }

    /**
     * @inheritdoc
     */
    public static function decode( string $data ): array {

        // make sure config files return an array only
        if ( ! preg_match( '/<\?php([\s|\n]+)return (array\(|\[)\n?.*(\]|\));/ms', $data ) ) {
            throw new InvalidConfigFileException( 'Config files are expected to return an array only' );
        }

        try {
            // evaluate the config string, which is raw PHP code. The closing tag is necessary since PHP
            // inlines eval calls.
            $decodedData = eval( '?> ' . $data );
        }
            /** @noinspection PhpUndefinedClassInspection */
        catch ( Throwable $exception ) {
            throw new InvalidConfigFileException( $exception->getMessage() );
        }

        return $decodedData;
    }

    /**
     * @inheritdoc
     */
    public static function encode( array $data ): string {

        // use var_export to create an array
        return '<?php return ' . var_export( $data, true ) . ';';
    }
}
