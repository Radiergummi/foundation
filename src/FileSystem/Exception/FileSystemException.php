<?php

namespace Radiergummi\Foundation\Framework\FileSystem\Exception;

use Radiergummi\Foundation\Framework\Exception\FoundationException;
use Throwable;
use function str_replace;
use function strrchr;
use function substr;
use function ucwords;

/**
 * FileSystemException class
 *
 * @package Radiergummi\Foundation\Framework\FileSystem\Exception
 */
class FileSystemException extends FoundationException {

    /**
     * FileSystemException constructor
     * Tries to construct a matching exception for the filesystem error thrown
     *
     * @param string          $message
     * @param int             $code
     * @param \Throwable|null $previous
     * @param null            $file
     * @param null            $line
     *
     * @throws \Throwable
     */
    public function __construct(
        string $message,
        int $code = 0,
        Throwable $previous = null,
        $file = null,
        $line = null
    ) {
        parent::__construct( $message, $code, $previous, $file, $line );

        // TODO: Retrieve error code
        #        $this->code = Error::;
    }

    /**
     * parses the original warning message
     *
     * @return string
     */
    private function parseMessage(): string {
        return str_replace( ' ', '', ucwords( substr( strrchr( $this->getPrevious()->getMessage(), ': ' ), 2 ) ) );
    }
}
