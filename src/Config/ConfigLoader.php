<?php

namespace Radiergummi\Foundation\Framework\Config;

use function array_key_exists;
use function is_file;
use Radiergummi\Foundation\Framework\ClassCollector;
use Radiergummi\Foundation\Framework\Config\Exceptions\ConfigFileNotFoundException;
use Radiergummi\Foundation\Framework\Config\Exceptions\UnknownConfigFileFormatException;
use function array_merge;
use function file_get_contents;
use function realpath;
use function pathinfo;
use function sprintf;
use function strtolower;

/**
 * ConfigLoader class
 *
 * @property string rootPath
 * @package Radiergummi\Foundation\Framework\Config
 */
class ConfigLoader {
    use ClassCollector;

    /**
     * holds all adapters
     *
     * @var array
     */
    private $adapters = [];

    public function __construct() {
        $this->rootPath = realpath( __DIR__ . '/../..' ) . '/';

        // load configuration adapters
        $frameworkAdapters   = $this->getClassesInNamespace( __NAMESPACE__ . '\\Adapters' );
        $applicationAdapters = $this->getClassesInNamespace( 'App\\Config\\Adapters' );

        $adapters = array_merge( $frameworkAdapters, $applicationAdapters );

        // store adapters as [ "format" => "adapter" ]
        foreach ( $adapters as $adapter ) {
            /** @var \Radiergummi\Foundation\Framework\Config\Adapter $adapter */
            $this->adapters[ $adapter::getSupportedFileFormat() ] = $adapter;
        }
    }

    /**
     * loads a configuration file
     *
     * @param string $path
     *
     * @return \Radiergummi\Foundation\Framework\Config\Config
     * @throws \Radiergummi\Foundation\Framework\Config\Exceptions\InvalidConfigFileException
     * @throws \Radiergummi\Foundation\Framework\Config\Exceptions\UnknownConfigFileFormatException
     * @throws \Radiergummi\Foundation\Framework\Config\Exceptions\ConfigFileNotFoundException
     */
    public function loadFile( string $path ): Config {

        if ( ! is_file( $path ) ) {
            throw new ConfigFileNotFoundException( 'No config file found at ' . $path );
        }

        // retrieve the file extension
        $extension = strtolower( pathinfo( $path, PATHINFO_EXTENSION ) );

        if ( array_key_exists( $extension, $this->adapters ) ) {

            // decode the configuration data
            $data = $this->adapters[ $extension ]::decode( file_get_contents( $path ) );

            // create the configuration instance
            return new Config( $data );
        }

        throw new UnknownConfigFileFormatException(
            sprintf( 'No adapter available for .%s files', $extension )
        );
    }

    /**
     * retrieves all available adapters
     *
     * @return array
     */
    public function getAdapters(): array {
        return $this->adapters;
    }
}
