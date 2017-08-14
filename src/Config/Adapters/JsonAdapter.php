<?php

namespace Radiergummi\Foundation\Framework\Config\Adapters;

use function json_decode;
use function json_encode;
use function json_last_error;
use function json_last_error_msg;
use const JSON_PRETTY_PRINT;
use Radiergummi\Foundation\Framework\Config\Adapter;
use Radiergummi\Foundation\Framework\Config\Exceptions\InvalidConfigFileException;

/**
 * JSON adapter
 * Encodes and decodes JSON configuration files
 *
 * @package Radiergummi\Foundation\Framework\Config\Adapters
 */
class JsonAdapter implements Adapter {

    /**
     * @inheritdoc
     */
    public static function getSupportedFileFormat(): string {
        return 'json';
    }

    /**
     * @inheritdoc
     */
    public static function decode( string $data ): array {
        $decodedData = json_decode( $data, true );

        if ( json_last_error() ) {
            throw new InvalidConfigFileException( json_last_error_msg() );
        }

        return $decodedData;
    }

    /**
     * @inheritdoc
     */
    public static function encode( array $data ): string {
        return json_encode( $data, JSON_PRETTY_PRINT );
    }
}
