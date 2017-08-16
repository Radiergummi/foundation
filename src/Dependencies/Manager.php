<?php

namespace Radiergummi\Foundation\Framework\Dependencies;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\TransferException;
use Radiergummi\Foundation\Framework\Dependencies\Exception\DependencyDownloadException;
use function realpath;

/**
 * Dependency Manager
 * Keeps track of dependencies
 *
 * @package Radiergummi\Foundation\Framework\Dependencies
 */
class Manager {

    protected $httpClient;

    /**
     * Creates the Dependency manager instance
     */
    public function __construct() {
        $this->httpClient = new HttpClient();
    }

    /**
     * adds a new dependency
     *
     * @param \Radiergummi\Foundation\Framework\Dependencies\Dependency $dependency dependency to add
     *
     * @return void
     */
    public function add( Dependency $dependency ) {

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

    /**
     * downloads a dependency
     *
     * @param \Radiergummi\Foundation\Framework\Dependencies\Dependency $dependency dependency to download
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\Dependencies\Exception\DependencyDownloadException
     */
    protected function download( Dependency $dependency ) {
        $response = null;
        $temporaryFileName = $dependency->getName() . time();
        $temporaryFilePath = realpath( __DIR__ . '/../../cache/' . $temporaryFileName);

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
            throw new DependencyDownloadException('Could not download dependency: ' . $transferException->getMessage());
        }

        echo stat($temporaryFilePath);
    }
}
