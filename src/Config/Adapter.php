<?php

namespace Radiergummi\Foundation\Framework\Config;

/**
 * Adapter interface
 *
 * @package Radiergummi\Foundation\Framework\Config
 */
interface Adapter {

    /**
     * returns the supported file format
     *
     * @return string
     */
    public static function getSupportedFileFormat(): string;

    /**
     * encodes data to be stored in the adapter format
     *
     * @param array $data
     *
     * @return string
     */
    public static function encode( array $data ): string;

    /**
     * decodes data read from the adapter format
     *
     * @param string $data
     *
     * @return array
     * @throws \Radiergummi\Foundation\Framework\Config\Exception\InvalidConfigFileException
     */
    public static function decode( string $data ): array;
}
