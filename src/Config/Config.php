<?php

namespace Radiergummi\Foundation\Framework\Config;

use ArrayAccess;
use Radiergummi\Foundation\Framework\Utils\ArrayUtil;

/**
 * Config class
 *
 * @package Radiergummi\Foundation\Framework\Config
 */
class Config implements ArrayAccess {
    private $data = [];

    /**
     * Config constructor
     *
     * @param array $data
     */
    public function __construct( array $data = [] ) {
        $this->data = $data;
    }

    /**
     * @param string $key
     * @param null   $fallback
     *
     * @return mixed|null
     */
    public function get( string $key, $fallback = null ) {
        return ArrayUtil::get( $this->data, $key, $fallback );
    }

    /**
     * @param string $key
     *
     * @return mixed|null
     */
    public function __get( string $key ) {
        return $this->get( $key );
    }

    /**
     * @param string $key
     * @param mixed  $value
     *
     * @return void
     */
    public function set( string $key, $value ) {
        ArrayUtil::set( $this->data, $key, $value );
    }

    /**
     * @param string $key
     * @param mixed  $value
     *
     * @return void
     */
    public function __set( string $key, $value ) {
        $this->set( $key, $value );
    }

    /**
     * @param string $key
     *
     * @return bool
     */
    public function has( string $key ): bool {
        return ArrayUtil::has( $this->data, $key );
    }

    /**
     * @param string $key
     *
     * @return bool
     */
    public function __isset( string $key ) {
        return $this->has( $key );
    }

    /**
     * @param string $key
     *
     * @return void
     */
    public function remove( string $key ) {
        ArrayUtil::remove( $this->data, $key );
    }

    /**
     * @param string $key
     *
     * @return void
     */
    public function __unset( string $key ) {
        $this->remove( $key );
    }

    public function offsetGet( $offset ) {
        return $this->get( $offset );
    }

    public function offsetSet( $offset, $value ) {
        $this->set( $offset, $value );
    }

    public function offsetExists( $offset ) {
        return $this->has( $offset );
    }

    public function offsetUnset( $offset ) {
        $this->remove( $offset );
    }
}
