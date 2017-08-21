<?php

namespace Radiergummi\Foundation\Framework\Dependencies;

use Radiergummi\Foundation\Framework\Config\Config;
use Radiergummi\Foundation\Framework\Config\ConfigProvider;
use Radiergummi\Foundation\Framework\FileSystem\File;
use Radiergummi\Foundation\Framework\Utils\PathUtil;
use function is_file;

/**
 * Index class
 *
 * @package Radiergummi\Foundation\Framework\Dependencies
 */
class Index {

    /**
     * dependency index
     *
     * @var Config
     */
    protected $index;

    /**
     * dependency path
     *
     * @var string
     */
    protected $path = '';

    /**
     * config file provider
     *
     * @var \Radiergummi\Foundation\Framework\Config\ConfigProvider
     */
    protected $configProvider;

    /**
     * Index constructor
     *
     * @param string $path
     */
    public function __construct( string $path ) {
        $this->path           = $path;
        $this->configProvider = new ConfigProvider();
    }

    /**
     * retrieves a value from index
     *
     * @param string $key
     *
     * @return mixed|null
     */
    public function get( string $key ) {
        return $this->index->get( $key );
    }

    public function getLength() {
        return count( $this->getAll() );
    }

    public function getAll() {
        return $this->index->getData();
    }

    public function has( string $key ): bool {
        return $this->index->has( $key );
    }

    public function set( string $key, $value ) {
        $this->index->set( $key, $value );
    }

    public function remove( string $key ) {
        $this->index->remove( $key );
    }

    /**
     * loads the index file
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\Config\Exception\ConfigFileNotFoundException
     * @throws \Radiergummi\Foundation\Framework\Config\Exception\InvalidConfigFileException
     * @throws \Radiergummi\Foundation\Framework\Config\Exception\UnknownConfigFileFormatException
     */
    public function load() {
        foreach ( $this->configProvider->getSupportedFileFormats() as $format ) {
            $possibleFilePath = PathUtil::join( $this->path, 'index.' . $format );

            if ( is_file( $possibleFilePath ) ) {
                $this->index = $this->configProvider->loadFile( $possibleFilePath );

                return;
            }
        }

        // no config file yet, create a new one
        $this->index = new Config();
        $this->index->setFile( new File( PathUtil::join( $this->path, 'index.json' ) ) );
    }

    /**
     * saves the dependency index to file
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\Exception\FoundationException
     */
    public function save() {
        $this->configProvider->saveFile( $this->index );
    }
}
