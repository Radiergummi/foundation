<?php

namespace Radiergummi\Foundation\Framework;

use InvalidArgumentException;
use function is_file;
use Radiergummi\Foundation\Framework\Utils\ArrayUtil;
use function file_get_contents;
use function json_decode;

/**
 * ComposerData class
 *
 * @package Radiergummi\Foundation\Framework
 */
class ComposerData {

    /**
     * holds the composer config
     *
     * @var array
     */
    protected $config;

    /**
     * ComposerData constructor
     *
     * @param string $composerJsonPath
     * @throws \InvalidArgumentException
     */
    public function __construct( string $composerJsonPath ) {
        if (!is_file( $composerJsonPath)) {
        throw new InvalidArgumentException('Error: ' . $composerJsonPath . ': no such file or directory');
        }

        $this->config = $this->load( $composerJsonPath );
    }

    /**
     * loads a composer.json file
     *
     * @param string $path path to composer.json
     *
     * @return array
     */
    public function load( string $path ): array {
        return json_decode( file_get_contents( $path ), true );
    }

    public function get( string $key, $fallback = null ) {
        return ArrayUtil::get( $this->config, $key, $fallback );
    }
}
