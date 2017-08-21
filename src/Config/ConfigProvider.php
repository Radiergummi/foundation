<?php

namespace Radiergummi\Foundation\Framework\Config;

use Radiergummi\Foundation\Framework\ClassCollector;
use Radiergummi\Foundation\Framework\ComposerData;
use Radiergummi\Foundation\Framework\Config\Exception\ConfigFileNotFoundException;
use Radiergummi\Foundation\Framework\Config\Exception\UnknownConfigFileFormatException;
use Radiergummi\Foundation\Framework\FileSystem\Exception\FileSystemException;
use Radiergummi\Foundation\Framework\FileSystem\File;
use Radiergummi\Foundation\Framework\Utils\PathUtil;
use function array_key_exists;
use function array_merge;
use function file_get_contents;
use function is_file;
use function sprintf;

/**
 * ConfigProvider class
 *
 * @property string composerConfig
 * @package Radiergummi\Foundation\Framework\Config
 */
class ConfigProvider {
    use ClassCollector;

    /**
     * holds all adapters
     *
     * @var array
     */
    private $adapters = [];

    /**
     * ConfigProvider constructor
     */
    public function __construct() {
        $this->composerConfig = new ComposerData( PathUtil::normalize( '../../composer.json' ) );

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
     * @throws \Radiergummi\Foundation\Framework\Config\Exception\InvalidConfigFileException
     * @throws \Radiergummi\Foundation\Framework\Config\Exception\UnknownConfigFileFormatException
     * @throws \Radiergummi\Foundation\Framework\Config\Exception\ConfigFileNotFoundException
     */
    public function loadFile( string $path ): Config {

        if ( ! is_file( $path ) ) {
            throw new ConfigFileNotFoundException( 'No config file found at ' . $path );
        }

        $file      = new File( $path );
        $extension = $file->getExtension();

        if ( array_key_exists( $extension, $this->adapters ) ) {

            // decode the configuration data
            $data = $this->adapters[ $extension ]::decode( file_get_contents( $path ) );

            // create the configuration instance
            $config = new Config( $data );
            $config->setFile( $file );
            $config->setPath( $path );

            return $config;
        }

        throw new UnknownConfigFileFormatException(
            sprintf( 'No adapter available for .%s files', $extension )
        );
    }

    /**
     * saves a configuration file
     *
     * @param \Radiergummi\Foundation\Framework\Config\Config $config
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\Exception\FoundationException
     */
    public function saveFile( Config $config ) {

        // retrieve the file extension
        $extension = $config->getFile()->getExtension();

        if ( array_key_exists( $extension, $this->adapters ) ) {

            // encode the configuration data
            $encodedData = $this->adapters[ $extension ]::encode( $config->getData() );

            try {
                $config->getFile()->write( $encodedData );
            }
            catch ( FileSystemException $exception ) {

                // TODO: Handle error
                echo 'could not write config file';
            }
        }
    }

    /**
     * retrieves all available adapters
     *
     * @return array
     */
    public function getAdapters(): array {
        return $this->adapters;
    }

    public function getSupportedFileFormats(): array {
        return array_keys( $this->adapters );
    }
}
