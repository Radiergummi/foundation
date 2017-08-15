<?php

namespace Radiergummi\Foundation\Framework\Exception;

use Exception;
use JsonSerializable;
use Radiergummi\Foundation\Framework\Utils\HashUtil;
use Throwable;

/**
 * FoundationException class
 *
 * @package Radiergummi\Foundation\Framework\Exception
 */
class FoundationException extends Exception implements JsonSerializable {
    public function __construct( string $message, int $code = 0, Exception $previous = null ) {
        parent::__construct( $message, $code, $previous );
    }

    public function jsonSerialize() {
        return [
            'exception' => [
                'type'    => __CLASS__,
                'message' => $this->getMessage(),
                'errorId' => $this->getErrorId(),
                'code'    => $this->getCode(),
                'origin'  => [
                    'file' => $this->getFile(),
                    'line' => $this->getLine(),
                ],
                'trace'   => $this->getTraceAsString(),
                'stack'   => $this->getTrace()
            ]
        ];
    }

    /**
     * generates a "unique" error ID by building the MD5 hash for "{Class path}{File name}". This should stay pretty
     * static across releases, so documentation pages for commonly thrown exceptions can be created. Even if the file
     * changes (new/removed lines, other code layout changes), the error ID will stay the same.
     * If, for some occult reason, the hashing should fail, it will simply return an empty error code (in which case
     * you know where to look ;-) )
     *
     * @return string
     */
    public function getErrorId(): string {
        try {
            return HashUtil::hash( __CLASS__ . $this->getFile(), HashUtil::METHOD_MD5 );
        }
            /** @noinspection PhpUndefinedClassInspection */
        catch ( Throwable $exception ) {
            return '';
        }
    }
}
