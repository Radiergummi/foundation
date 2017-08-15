<?php

namespace Radiergummi\Foundation\Framework\Config\Adapters;

use Radiergummi\Foundation\Framework\Config\Adapter;
use Radiergummi\Foundation\Framework\Config\Exception\InvalidConfigFileException;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;

/**
 * YAML adapter
 * Encodes and decodes YAML (.yml) configuration files
 *
 * @package Radiergummi\Foundation\Framework\Config\Adapters
 */
class YamlAdapter implements Adapter {

    /**
     * @inheritdoc
     */
    public static function getSupportedFileFormat(): string {
        return 'yml';
    }

    /**
     * @inheritdoc
     */
    public static function decode( string $data ): array {
        try {
            $decodedData = Yaml::parse( $data );
        }
        catch ( ParseException $parseException ) {
            throw new InvalidConfigFileException( $parseException->getMessage() );
        }

        return $decodedData;
    }

    /**
     * @inheritdoc
     */
    public static function encode( array $data ): string {
        return Yaml::dump( $data, 2 );
    }
}
