<?php

namespace Radiergummi\Foundation\Framework;

use InvalidArgumentException;
use Radiergummi\Foundation\Framework\FileSystem\File;
use Radiergummi\Foundation\Framework\Utils\ArrayUtil;
use function is_file;
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
     *
     * @throws \InvalidArgumentException
     * @throws \Radiergummi\Foundation\Framework\Exception\FoundationException
     */
    public function __construct( string $composerJsonPath ) {
        if ( ! is_file( $composerJsonPath ) ) {
            throw new InvalidArgumentException( 'Error: ' . $composerJsonPath . ': no such file or directory' );
        }

        $composerFile = new File( $composerJsonPath );

        $this->config = $this->load( $composerFile );
    }

    /**
     * loads a composer.json file
     *
     * @param File $file file holding the composer.json
     *
     * @return array
     * @throws \Radiergummi\Foundation\Framework\Exception\FoundationException
     */
    public function load( File $file ): array {
        return json_decode( $file->read(), true );
    }

    /**
     * retrieves a value from the composer.json file
     *
     * @param string $key
     * @param null   $fallback
     *
     * @return mixed|null
     */
    public function get( string $key, $fallback = null ) {
        return ArrayUtil::get( $this->config, $key, $fallback );
    }
}
