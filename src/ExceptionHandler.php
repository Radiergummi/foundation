<?php

namespace Radiergummi\Foundation\Framework;

use Radiergummi\Foundation\Framework\Exception\FoundationException;
use Throwable;

/**
 * ExceptionHandler class
 * Blatantly stolen from AnchorCMS and the ingenious Rwarasaurus
 *
 * @package Radiergummi\Foundation\Framework
 */
class ExceptionHandler {

    /**
     * handlers
     *
     * @var array
     */
    protected $handlers;

    /**
     * ExceptionHandler constructor
     *
     * @param array $handlers
     */
    public function __construct( array $handlers = [] ) {
        $this->handlers = $handlers;
    }

    /**
     * @return void
     */
    public function register() {
        set_error_handler( [ $this, 'native' ] );
        set_exception_handler( [ $this, 'exception' ] );
    }

    /**
     * @return void
     */
    public function unregister() {
        restore_error_handler();
        restore_exception_handler();
    }

    /**
     * @param callable $callback
     *
     * @return void
     */
    public function handler( callable $callback ) {
        $this->handlers[] = $callback;
    }

    /**
     * @param string $code
     * @param string $message
     * @param string $file
     * @param int    $line
     *
     * @return bool
     */
    public function native( string $code, string $message, string $file, int $line ) {
        if ( $code & error_reporting() ) {
            $this->exception( new FoundationException( $message, $code, null, $file, $line ) );
        }

        return false;
    }

    /**
     * @param \Throwable $exception
     *
     * @return void
     */
    public function exception( Throwable $exception ) {

        // filter handlers that match the exception
        $handlers = array_filter( $this->handlers, function( $handler ) use ( $exception ) {
            return $this->matches( $exception, $handler );
        } );

        // call filtered handlers
        foreach ( $handlers as $handler ) {
            $handler( $exception );
        }
    }

    /**
     * @param \Throwable $exception
     * @param callable   $handler
     *
     * @return bool
     */
    public function matches( Throwable $exception, callable $handler ): bool {

        // reflect on the handler
        $reflection = new \ReflectionFunction( $handler );

        // no params to check type hint
        if ( $reflection->getNumberOfParameters() === 0 ) {
            return false;
        }

        // get the first
        $param = $reflection->getParameters()[0];

        // does the first param have a type
        if ( $param->hasType() === false ) {
            return false;
        }

        // invoke toString method on ReflectionType class
        $type = (string) $param->getType();

        return $exception instanceof $type;
    }
}
