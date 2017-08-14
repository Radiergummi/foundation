<?php

namespace Radiergummi\Foundation\Framework\Utils;

use function array_key_exists;
use function array_shift;
use function count;
use function current;
use function end;
use function explode;
use function is_array;
use function shuffle;

/**
 * ArrayUtil class
 *
 * @package Radiergummi\Foundation\Framework\Utils
 */
class ArrayUtil {

    /**
     * current stack
     *
     * @var array
     */
    protected $stack = [];

    /**
     * retrieve an element from an array
     *
     * @static
     *
     * @param array  $array    array to retrieve an element from
     * @param string $key      key to retrieve
     * @param null   $fallback fallback value
     *
     * @return mixed|null found value or fallback
     */
    public static function get( array $array, string $key, $fallback = null ) {

        // search the array using the dot character to access nested array values
        foreach ( $keys = explode( '.', $key ) as $key ) {

            // when a key is not found or we didn't get an array to search return a fallback value
            if ( ! is_array( $array ) or ! array_key_exists( $key, $array ) ) {
                return $fallback;
            }

            $array =& $array[ $key ];
        }

        return $array;
    }

    /**
     * sets a value in an array
     *
     * @static
     *
     * @param array  $array array to set a value to
     * @param string $key   key to set
     * @param mixed  $value value to set
     *
     * @return void
     */
    public static function set( array &$array, string $key, $value ) {
        $keys = explode( '.', $key );

        // traverse the array into the second last key
        while ( count( $keys ) > 1 ) {
            $key = array_shift( $keys );

            // make sure we have a array to set our new key in
            if ( ! array_key_exists( $key, $array ) ) {
                $array[ $key ] = [];
            }

            $array =& $array[ $key ];
        }

        $array[ array_shift( $keys ) ] = $value;
    }

    /**
     * checks whether an element exists in an array
     *
     * @static
     *
     * @param array  $array array to check existence of an element on
     * @param string $key   key to check for
     *
     * @return bool whether the element exists in an array
     */
    public static function has( array $array, string $key ): bool {

        // search the array using the dot character to access nested array values
        foreach ( $keys = explode( '.', $key ) as $key ) {

            // when a key is not found or we didn't get an array to search return a fallback value
            if ( ! is_array( $array ) or ! array_key_exists( $key, $array ) ) {
                return false;
            }

            $array =& $array[ $key ];
        }

        return true;
    }

    /**
     * removes an item from an array
     *
     * @static
     *
     * @param array  $array array to remove an item from
     * @param string $key   key to remove
     *
     * @return void
     */
    public static function remove( array &$array, string $key ) {
        $keys = explode( '.', $key );

        // traverse the array into the second last key
        while ( count( $keys ) > 1 ) {
            $key = array_shift( $keys );

            if ( array_key_exists( $key, $array ) ) {
                $array =& $array[ $key ];
            }
        }

        // if the last key exists unset it
        if ( array_key_exists( $key = array_shift( $keys ), $array ) ) {
            unset( $array[ $key ] );
        }
    }

    /**
     * creates a new instance
     *
     * @param array array to clone
     *
     * @return \Radiergummi\Foundation\Framework\Utils\ArrayUtil
     */
    public static function create( array $stack = [] ): ArrayUtil {
        return new static( $stack );
    }

    /**
     * ArrayUtil constructor
     *
     * @param array array to create a util for
     */
    public function __construct( array $stack = [] ) {
        $this->stack = $stack;
    }

    /**
     * shuffle the array elements in the stack
     *
     * @return \Radiergummi\Foundation\Framework\Utils\ArrayUtil self for chaining
     */
    public function shuffle(): ArrayUtil {
        shuffle( $this->stack );

        return $this;
    }

    /**
     * retrieves the first element in the stack
     *
     * @return mixed
     */
    public function first() {
        return current( $this->stack );
    }

    /**
     * retrieves the last element in the stack
     *
     * @return mixed
     */
    public function last() {
        return end( $this->stack );
    }
}
