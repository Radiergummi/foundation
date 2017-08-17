<?php

namespace Radiergummi\Foundation\Framework\Dependencies;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\TransferException;
use Radiergummi\Foundation\Framework\Dependencies\Exception\DependencyDownloadException;
use Radiergummi\Foundation\Framework\FileSystem\File;
use function is_string;
use function realpath;
use function sprintf;

/**
 * Dependency Manager
 * Keeps track of dependencies
 *
 * @package Radiergummi\Foundation\Framework\Dependencies
 */
class Manager {

    /**
     * holds the http client
     *
     * @var \GuzzleHttp\Client
     */
    protected $httpClient;

    /**
     * holds the cache path
     *
     * @var string
     */
    protected $cachePath = __DIR__ . '/../../cache';

    /**
     * holds the storage path
     *
     * @var string
     */
    protected $storagePath = __DIR__ . '/../../app/dependencies';

    /**
     * Creates the Dependency manager instance
     *
     * @param string $storagePath
     * @param string $cachePath
     */
    public function __construct( string $storagePath = null, string $cachePath = null ) {
        if ( is_string( $storagePath ) ) {
            $this->storagePath = $storagePath;
        }

        if ( is_string( $cachePath ) ) {
            $this->cachePath = $cachePath;
        }

        $this->httpClient = new HttpClient();
    }

    /**
     * adds a new dependency
     *
     * @param \Radiergummi\Foundation\Framework\Dependencies\Dependency $dependency
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\Dependencies\Exception\DependencyDownloadException
     */
    public function add( Dependency $dependency ) {
        $this->download( $dependency );
    }

    /**
     * downloads a dependency
     *
     * @param \Radiergummi\Foundation\Framework\Dependencies\Dependency $dependency dependency to download
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\Dependencies\Exception\DependencyDownloadException
     */
    protected function download( Dependency $dependency ) {
        $response          = null;
        $temporaryFileName = $dependency->getName() . time();
        $temporaryFilePath = realpath( $this->getCachePath() ) . '/' . $temporaryFileName;

        try {
            $response = $this->httpClient->request(
                'GET',
                $dependency->getRemote(),
                [
                    'sink' => $temporaryFilePath
                ]
            );
        }
        catch ( TransferException $transferException ) {
            throw new DependencyDownloadException(
                'Could not download dependency: ' . $transferException->getMessage()
            );
        }

        $dependencyFile = new File( $temporaryFilePath );
        $dependencyFile->setMimeType( $response->getHeader( 'Content-Type' ) );
        $dependencyFile->move( sprintf( '%s/%s/%s.%s'),
            realpath( $this->getStoragePath() . '/' . $dependency->getType() ) . '/' . $dependency->getName() . '.' . $dependencyFile->getExtensionByMimeType() );

        # var_dump( $response );
        # var_dump( stat( $temporaryFilePath ));
    }

    /**
     * retrieves the dependency cache path
     *
     * @return string
     */
    public function getCachePath(): string {
        return $this->cachePath;
    }

    /**
     * sets the dependency cache path
     *
     * @param string $cachePath
     */
    public function setCachePath( string $cachePath ) {
        $this->cachePath = $cachePath;
    }

    /**
     * retrieves the dependency storage path
     *
     * @return string
     */
    public function getStoragePath(): string {
        return $this->storagePath;
    }

    /**
     * sets the dependency storage path
     *
     * @param string $storagePath
     */
    public function setStoragePath( string $storagePath ) {
        $this->storagePath = $storagePath;
    }

    /**
     * removes a dependency
     *
     * @param \Radiergummi\Foundation\Framework\Dependencies\Dependency $dependency dependency to remove
     *
     * @return void
     */
    public function remove( Dependency $dependency ) {

    }
}
