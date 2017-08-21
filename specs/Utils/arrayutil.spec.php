<?php

/**
 * ArrayUtil tests
 */

use Radiergummi\Foundation\Framework\Utils\ArrayUtil;

describe( 'ArrayUtil', function() {
    beforeEach( function() {
        $this->data = [
            'first_string'  => 'foo',
            'second_bool'   => true,
            'third_int'     => 42,
            'fourth_nested' => [
                'first_float'  => 3.14,
                'second_bool'  => false,
                'third_nested' => [
                    'first_string' => 'bar'
                ]
            ],
            'sixth key with spaces' => 'foo',
            'seventh nested' => [
                'first nested string' => 'bar'
            ],
            'eighth_array'   => [ 10, 20, 30 ]
        ];
    } );

    describe( 'get', function() {
        it( 'should get a value', function() {
            $keyName       = 'first_string';
            $expectedValue = 'foo';

            assert( ArrayUtil::get( $this->data, $keyName ) === $expectedValue );
        } );


        it( 'should get a value with a space in the key name', function() {
            $keyName       = 'sixth key with spaces';
            $expectedValue = 'foo';

            assert( ArrayUtil::get( $this->data, $keyName ) === $expectedValue );
        } );

        it( 'should get a nested value', function() {
            $keyName       = 'fourth_nested.first_float';
            $expectedValue = 3.14;

            assert( ArrayUtil::get( $this->data, $keyName ) === $expectedValue );
        } );

        it( 'should get a nested value with a space in the key name', function() {
            $keyName       = 'seventh nested.first nested string';
            $expectedValue = 'bar';

            assert( ArrayUtil::get( $this->data, $keyName ) === $expectedValue );
        } );

        it( 'should return the fallback on wrong key name', function() {
            $expectedValue = 'not_existing_value';

            assert( ArrayUtil::get( $this->data, 'not_existing', $expectedValue ) === $expectedValue );
        } );

        it( 'should return null on wrong key name without fallback', function() {
            assert( ArrayUtil::get( $this->data, 'not_existing' ) === null );
        } );
    } );

    describe( 'has', function() {
        it( 'should determine whether a key exists', function() {
            $keyName = 'third_int';

            assert( ArrayUtil::has( $this->data, $keyName ) === true );
        } );

        it( 'should determine whether a nested key exists', function() {
            $keyName = 'fourth_nested.second_bool';

            assert( ArrayUtil::has( $this->data, $keyName ) === true );
        } );

        it( 'should return false on a non existent key', function() {
            $keyName = 'not_existing';

            assert( ArrayUtil::has( $this->data, $keyName ) === false );
        } );

        it( 'should return false on a non existent key value', function() {
            $keyName = 'foo.bar.baz.quz';

            assert( ArrayUtil::has( $this->data, $keyName ) === false );
        } );
    } );

    describe( 'set', function() {
        it( 'should set a value on a non existent key', function() {
            $keyName = 'not_existing_previously';
            $value   = time();

            ArrayUtil::set( $this->data, $keyName, $value );

            assert( ArrayUtil::get( $this->data, $keyName ) === $value );
        } );

        it( 'should set a value on an existent key', function() {
            $keyName = 'first_string';
            $value   = 'bar';

            ArrayUtil::set( $this->data, $keyName, $value );

            assert( ArrayUtil::get( $this->data, $keyName ) === $value );
        } );

        it( 'should set a value on a non existent nested key', function() {
            $keyName = 'not.existing.previously';
            $value   = time();

            ArrayUtil::set( $this->data, $keyName, $value );

            assert( ArrayUtil::get( $this->data, $keyName ) === $value );
        } );

        it( 'should set a value on an existent nested key', function() {
            $keyName = 'fourth_nested.second_bool';
            $value   = time();

            ArrayUtil::set( $this->data, $keyName, $value );

            assert( ArrayUtil::get( $this->data, $keyName ) === $value );
        } );
    } );

    describe( 'remove', function() {
        it( 'should remove a key', function() {
            $keyName = 'first_string';

            ArrayUtil::remove( $this->data, $keyName );

            assert( ArrayUtil::get( $this->data, $keyName ) === null );
        } );

        it( 'should remove a nested key', function() {
            $keyName = 'fourth_nested.third_nested.first_string';

            ArrayUtil::remove( $this->data, $keyName );

            assert( ArrayUtil::get( $this->data, $keyName ) === null );
        } );
    } );

    describe( 'create', function() {
        it( 'should create an instance', function() {
            $instance = ArrayUtil::create();

            assert( $instance instanceof ArrayUtil );
        } );
    } );

    describe( 'first', function() {
        it( 'should return the first key', function() {
            $instance      = ArrayUtil::create( $this->data );
            $expectedValue = 'foo';

            assert( $instance->first() === $expectedValue );
        } );
    } );

    describe( 'last', function() {
        it( 'should return the last key', function() {
            $instance      = ArrayUtil::create( $this->data );
            $expectedValue = [ 10, 20, 30 ];

            assert( $instance->last() === $expectedValue );
        } );
    } );
} );
