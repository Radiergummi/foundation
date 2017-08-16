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

    public function __construct() {
        $this->httpClient = new HttpClient();
    }

    public function add( Dependency $dependency ) {

    }

    public function remove( Dependency $dependency ) {

    }

    protected function download( Dependency $dependency ) {
        $response = null;

        try {
            $response = $this->httpClient->request(
                'GET',
                $dependency->getRemote(),
                [
                    'sink' => realpath( __DIR__ . '/../../cache')
                ]
            );
        }
        catch ( TransferException $transferException ) {
            throw new DependencyDownloadException();
        }


    }
}
