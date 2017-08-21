<?php

namespace Radiergummi\Foundation\Framework\Dependencies;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\TransferException;
use Radiergummi\Foundation\Framework\Dependencies\Exception\DependencyDownloadException;
use Radiergummi\Foundation\Framework\Exception\FoundationException;
use Radiergummi\Foundation\Framework\FileSystem\Exception\FileSystemException;
use Radiergummi\Foundation\Framework\FileSystem\File;
use Radiergummi\Foundation\Framework\Utils\PathUtil;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\OutputInterface;
use const FILEINFO_MIME_TYPE;
use const PHP_EOL;
use function finfo_open;
use function is_string;

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
     * holds the dependency index
     *
     * @var \Radiergummi\Foundation\Framework\Dependencies\Index
     */
    protected $index;

    /**
     * holds the console output stream
     *
     * @var OutputInterface
     */
    protected $output;

    /**
     * Creates the Dependency manager instance
     *
     * @param string $storagePath path to application storage
     * @param string $cachePath   path to download cache
     *
     * @throws \Radiergummi\Foundation\Framework\Config\Exception\ConfigFileNotFoundException
     * @throws \Radiergummi\Foundation\Framework\Config\Exception\InvalidConfigFileException
     * @throws \Radiergummi\Foundation\Framework\Config\Exception\UnknownConfigFileFormatException
     */
    public function __construct( string $storagePath = null, string $cachePath = null ) {
        if ( is_string( $storagePath ) ) {
            $this->storagePath = $storagePath;
        }

        if ( is_string( $cachePath ) ) {
            $this->cachePath = $cachePath;
        }

        $this->httpClient = new HttpClient();

        $this->index = new Index( $this->storagePath );

        // try to load the dependency index configuration file
        $this->index->load();
    }

    /**
     * retrieves the version of an available dependency
     *
     * @param \Radiergummi\Foundation\Framework\Dependencies\Dependency $dependency
     *
     * @return mixed|null
     */
    public function getVersion( Dependency $dependency ): string {
        if ( $this->has( $dependency ) ) {
            return $this->getIndex()->get( sprintf( '%s.version', $dependency->getName() ) );
        }

        return '0.0.0';
    }

    /**
     * checks whether a dependency is already available
     *
     * @param \Radiergummi\Foundation\Framework\Dependencies\Dependency $dependency
     *
     * @return bool
     */
    public function has( Dependency $dependency ) {
        return $this->getIndex()->has( $dependency->getName() );
    }

    /**
     * retrieves the Manager Index
     *
     * @return \Radiergummi\Foundation\Framework\Dependencies\Index
     */
    public function getIndex(): Index {
        return $this->index;
    }

    /**
     * updates a dependency by removing the old data and downloading the new
     *
     * @param \Radiergummi\Foundation\Framework\Dependencies\Dependency $dependency
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\Dependencies\Exception\DependencyDownloadException
     * @throws \Radiergummi\Foundation\Framework\Exception\FoundationException
     * @throws \Radiergummi\Foundation\Framework\FileSystem\Exception\FileSystemException
     */
    public function update( Dependency $dependency ) {
        // TODO: Update dependency

        $oldFile = new File( $this->getIndex()->get( $dependency->getName() . '.local' ) );

        $oldFile->delete();

        $this->add( $dependency );
    }

    /**
     * adds a new dependency
     *
     * @param \Radiergummi\Foundation\Framework\Dependencies\Dependency $dependency
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\Dependencies\Exception\DependencyDownloadException
     * @throws \Radiergummi\Foundation\Framework\Exception\FoundationException
     */
    public function add( Dependency $dependency ) {

        // download the dependency
        $this->download( $dependency );

        // add the dependency to the index
        $this->getIndex()->set( $dependency->getName(), [
            'version' => $dependency->getVersion(),
            'local'   => $dependency->getLocal(),
            'remote'  => $dependency->getRemote(),
            'type'    => $dependency->getType()
        ] );

        // save the index to disk
        $this->getIndex()->save();
    }

    /**
     * downloads a dependency
     *
     * @param \Radiergummi\Foundation\Framework\Dependencies\Dependency $dependency dependency to download
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\Dependencies\Exception\DependencyDownloadException
     * @throws \Radiergummi\Foundation\Framework\Exception\FoundationException
     * @throws \Radiergummi\Foundation\Framework\FileSystem\Exception\FileSystemException
     */
    protected function download( Dependency $dependency ) {
        $response          = null;
        $temporaryFileName = $dependency->getName() . time();
        $temporaryFilePath = PathUtil::join( $this->getCachePath(), $temporaryFileName );

        // create a reference for the progress bar - we can't instantiate it outside of the
        // progress callback, because the Symfony ProgressBar does not allow for changing the
        // maximum later on.
        /** @var \Symfony\Component\Console\Helper\ProgressBar $progressBar */
        $progressBar = null;
        $output      = $this->output;
        $remote      = $dependency->getRemote();

        if ( ! PathUtil::isWritable( $this->getCachePath() ) ) {
            throw new FileSystemException( 'cache directory is not writable: ' . $this->getCachePath() );
        }

        try {
            // request the file, stream to the temporary path
            $response = $this->httpClient->request(
                'GET',
                $dependency->getRemote(),
                [
                    'sink'     => $temporaryFilePath,
                    'progress' => function( int $total, int $progress ) use ( &$progressBar, $output, $remote ) {
                        #if ( ! $output ) {
                        #    return;
                        #}

                        if ( ! $progressBar ) {

                            // the progress callback gets called before the actual download starts
                            // resulting in total being 0 so we need to check for that
                            if ( $total === 0 ) {
                                return;
                            }

                            $progressBar = new ProgressBar( $output, $total );
                            $progressBar->setEmptyBarCharacter( ' ' );
                            $progressBar->setMessage( 'Downloading ' . $remote );
                            $progressBar->setFormat( "%current%/%max% [%bar%] %percent:3s%% %remaining:6s%\t%message%" );
                            $progressBar->start();
                        }

                        $progressBar->setProgress( $progress );

                        if ( $progress === $total ) {
                            $progressBar->finish();
                        }
                    }
                ]
            );
        }
        catch ( TransferException $transferException ) {
            throw new DependencyDownloadException(
                'Could not download dependency: ' . $transferException->getMessage()
            );
        }

        $dependencyFile = new File( $temporaryFilePath );

        // guessing the file extension
        // we have at least some possibilities here. among these are:
        // 1. filename from remote URL:                 PathUtil::extension
        // 2. filename from Content-Disposition header: PathUtil::extension
        // 3. mime type from file:                      finfo_open(FILEINFO_MIME);
        // 4. mime type from Content-Type header:       <table lookup>

        $fileType = finfo_file( finfo_open( FILEINFO_MIME_TYPE ), $temporaryFilePath );

        $dependencyFile->setMimeType( $response->getHeader( 'Content-Type' )[0] ?? $fileType );

        try {
            PathUtil::create( PathUtil::join(
                $this->getStoragePath(),
                $dependency->getType()
            ) );

            $dependencyFile->move( PathUtil::join(
                $this->getStoragePath(),
                $dependency->getType(),
                sprintf( '%s-%s.%s',
                         $dependency->getName(),
                         $dependency->getVersion(),
                         $dependencyFile->getExtension()
                )
            ) );

            $dependency->setLocal( $dependencyFile->getPath() );
        }

        catch ( FoundationException $exception ) {
            // TODO: Handle errors
            echo PHP_EOL . 'would throw here.';
            throw new FoundationException( 'Could not store the remote file locally', 1, $exception );
        }

        finally {

            // if something has gone wrong creating the storage path and moving the file there,
            // we'll want to clean up the cache
            if ( $dependencyFile->getPath() === $temporaryFilePath ) {
                try {
                    $dependencyFile->delete();
                }
                catch ( FoundationException $exception ) {
                    // TODO: The cache could not be cleaned up - the user will need to know about this.
                }
            }
        }
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

    public function list() {
        return $this->index->getAll();
    }

    public function setOutputStream( OutputInterface $output ) {
        $this->output = $output;
    }

    /**
     * removes a dependency
     *
     * @param \Radiergummi\Foundation\Framework\Dependencies\Dependency $dependency dependency to remove
     *
     * @return void
     */
    public function remove( Dependency $dependency ) {
        $this->getIndex()->get( sprintf( '%s.local', $dependency->getName() ) );
    }
}
