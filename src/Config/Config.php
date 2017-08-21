<?php

namespace Radiergummi\Foundation\Framework\Config;

use ArrayAccess;
use Radiergummi\Foundation\Framework\FileSystem\File;
use Radiergummi\Foundation\Framework\Utils\ArrayUtil;

/**
 * Config class
 *
 * @package Radiergummi\Foundation\Framework\Config
 */
class Config implements ArrayAccess {

    /**
     * holds the config data
     *
     * @var array
     */
    protected $data = [];

    /**
     * holds the config file path
     *
     * @var string
     */
    protected $path = '';

    /**
     * holds the configuration file
     *
     * @var File
     */
    protected $file;

    /**
     * Config constructor
     *
     * @param array $data
     */
    public function __construct( array $data = [] ) {
        $this->data = $data;
    }

    /**
     * retrieves the config file path
     *
     * @return string
     */
    public function getPath(): string {
        return $this->path;
    }

    /**
     * sets the config file path
     *
     * @param string $path
     *
     * @return void
     */
    public function setPath( string $path ) {
        $this->path = $path;
    }

    /**
     * retrieves the config data
     *
     * @return array
     */
    public function getData(): array {
        return $this->data;
    }

    /**
     * retrieves the config file path
     *
     * @return \Radiergummi\Foundation\Framework\FileSystem\File
     */
    public function getFile(): File {
        return $this->file ?? new File();
    }

    /**
     * sets the configuration file on the file system
     *
     * @param \Radiergummi\Foundation\Framework\FileSystem\File $file
     *
     * @return void
     */
    public function setFile( File $file ) {
        $this->file = $file;
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
    public function __set( string $key, $value ) {
        $this->set( $key, $value );
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
     * @param mixed  $value
     *
     * @return void
     */
    public function set( string $key, $value ) {
        ArrayUtil::set( $this->data, $key, $value );
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
     * @return bool
     */
    public function has( string $key ): bool {
        return ArrayUtil::has( $this->data, $key );
    }

    /**
     * @param string $key
     *
     * @return void
     */
    public function __unset( string $key ) {
        $this->remove( $key );
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
     * @param mixed $offset
     *
     * @return bool
     */
    public function offsetExists( $offset ) {
        return $this->has( $offset );
    }

    /**
     * @param mixed $offset
     *
     * @return mixed|null
     */
    public function offsetGet( $offset ) {
        return $this->get( $offset );
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     *
     * @return void
     */
    public function offsetSet( $offset, $value ) {
        $this->set( $offset, $value );
    }

    /**
     * @param mixed $offset
     *
     * @return void
     */
    public function offsetUnset( $offset ) {
        $this->remove( $offset );
    }
}
