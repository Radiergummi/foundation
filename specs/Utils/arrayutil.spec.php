<?php

/**
 * ArrayUtil tests
 */

use Radiergummi\Foundation\Framework\Utils\ArrayUtil;

describe( 'ArrayUtil', function() {
    beforeEach( function() {
        $this->data = [
            'first_string'          => 'foo',
            'second_bool'           => true,
            'third_int'             => 42,
            'fourth_nested'         => [
                'first_float'  => 3.14,
                'second_bool'  => false,
                'third_nested' => [
                    'first_string' => 'bar'
                ]
            ],
            'sixth key with spaces' => 'foo',
            'seventh nested'        => [
                'first nested string' => 'bar'
            ],
            'eighth_array'          => [ 10, 20, 30 ]
        ];
    } );

    describe( 'get', function() {
        it( 'should get a value', function() {
            expect( ArrayUtil::get( $this->data, 'first_string' ) )
                ->to->equal( 'foo' );
        } );

        it( 'should get a value with a space in the key name', function() {
            expect( ArrayUtil::get( $this->data, 'sixth key with spaces' ) )
                ->to->equal( 'foo' );
        } );

        it( 'should get a nested value', function() {
            expect( ArrayUtil::get( $this->data, 'fourth_nested.first_float' ) )
                ->to->equal( 3.14 );
        } );

        it( 'should get a nested value with a space in the key name', function() {
            expect( ArrayUtil::get( $this->data, 'seventh nested.first nested string' ) )
                ->to->equal( 'bar' );
        } );

        it( 'should return the fallback on wrong key name', function() {
            expect( ArrayUtil::get( $this->data, 'not_existing', 'not_existing_value' ) )
                ->to->equal( 'not_existing_value' );
        } );

        it( 'should return null on wrong key name without fallback', function() {
            expect( ArrayUtil::get( $this->data, 'not_existing' ) )
                ->to->be->null();
        } );
    } );

    describe( 'has', function() {
        it( 'should determine whether a key exists', function() {
            expect( ArrayUtil::has( $this->data, 'third_int' ) )
                ->to->be->true();
        } );

        it( 'should determine whether a nested key exists', function() {
            expect( ArrayUtil::has( $this->data, 'fourth_nested.second_bool' ) )
                ->to->be->true();
        } );

        it( 'should return false on a non existent key', function() {
            expect( ArrayUtil::has( $this->data, 'not_existing' ) )
                ->to->be->false();
        } );

        it( 'should return false on a non existent key value', function() {
            expect( ArrayUtil::has( $this->data, 'foo.bar.baz.quz' ) )
                ->to->be->false();
        } );
    } );

    describe( 'set', function() {
        it( 'should set a value on a non existent key', function() {
            $expectedValue = time();

            ArrayUtil::set( $this->data, 'not_existing_previously', $expectedValue );

            expect( ArrayUtil::get( $this->data, 'not_existing_previously' ) )
                ->to->equal( $expectedValue );
        } );

        it( 'should set a value on an existent key', function() {
            ArrayUtil::set( $this->data, 'first_string', 'bar' );

            expect( ArrayUtil::get( $this->data, 'first_string' ) )
                ->to->equal( 'bar' );
        } );

        it( 'should set a value on a non existent nested key', function() {
            $expectedValue = time();

            ArrayUtil::set( $this->data, 'not.existing.previously', $expectedValue );

            expect( ArrayUtil::get( $this->data, 'not.existing.previously' ) )
                ->to->equal( $expectedValue );
        } );

        it( 'should set a value on an existent nested key', function() {
            $expectedValue = time();

            ArrayUtil::set( $this->data, 'fourth_nested.second_bool', $expectedValue );

            expect( ArrayUtil::get( $this->data, 'fourth_nested.second_bool' ) )
                ->to->equal( $expectedValue );
        } );
    } );

    describe( 'remove', function() {
        it( 'should remove a key', function() {
            ArrayUtil::remove( $this->data, 'first_string' );

            expect( ArrayUtil::get( $this->data, 'first_string' ) )
                ->to->be->null();
        } );

        it( 'should remove a nested key', function() {
            ArrayUtil::remove( $this->data, 'fourth_nested.third_nested.first_string' );

            expect( ArrayUtil::get( $this->data, 'fourth_nested.third_nested.first_string' ) )
                ->to->be->null();
        } );
    } );

    describe( 'create', function() {
        it( 'should create an instance', function() {
            expect( ArrayUtil::create() )->is->an->instanceof( ArrayUtil::class );
        } );
    } );

    describe( 'first', function() {
        it( 'should return the first key', function() {
            expect( ( ArrayUtil::create( $this->data ) )->first() )
                ->to->equal( 'foo' );
        } );
    } );

    describe( 'last', function() {
        it( 'should return the last key', function() {
            expect( ( ArrayUtil::create( $this->data ) )->last() )
                ->to->equal( [ 10, 20, 30 ] );
        } );
    } );
} );
