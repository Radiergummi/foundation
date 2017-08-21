<?php

/**
 * HashUtil tests
 */

use Radiergummi\Foundation\Framework\Utils\Exception\HashAlgorithmUnknownException;
use Radiergummi\Foundation\Framework\Utils\HashUtil;

describe( 'HashUtil', function() {
    describe( 'hashing strings', function() {
        it( 'should hash a string', function() {
            /** @noinspection SpellCheckingInspection */
            expect( HashUtil::hash( 'foo' ) )
                ->to->equal( '3rabh10' );
        } );

        it( 'should hash a string using MurmurHash3', function() {
            /** @noinspection SpellCheckingInspection */
            expect( HashUtil::hash( 'foo' ) )
                ->to->equal( '3rabh10' );
        } );

        it( 'should hash a string using CRC32', function() {
            expect( HashUtil::hash( 'foo', HashUtil::METHOD_CRC32 ) )
                ->to->equal( '2356372769' );
        } );

        it( 'should hash a string using MD5', function() {
            /** @noinspection SpellCheckingInspection */
            expect( HashUtil::hash( 'foo', HashUtil::METHOD_MD5 ) )
                ->to->equal( 'acbd18db4cc2f85cedef654fccc4a4d8' );
        } );

        it( 'should hash a string using SHA1', function() {
            /** @noinspection SpellCheckingInspection */
            expect( HashUtil::hash( 'foo', HashUtil::METHOD_SHA1 ) )
                ->to->equal( '0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33' );
        } );

        it( 'should hash a string using SHA512', function() {
            /** @noinspection SpellCheckingInspection */
            expect( HashUtil::hash( 'foo', HashUtil::METHOD_SHA512 ) )
                ->to->equal( 'f7fbba6e0636f890e56fbbf3283e524c6fa3204ae298382d624741d0dc6638326e282c41be5e4254d8820772c5518a2c5a8c0c7f7eda19594a7eb539453e1ed7' );
        } );

        it( 'should not throw on using alias algorithm names', function() {
            HashUtil::hash( 'foo', HashUtil::METHOD_FAST );
            HashUtil::hash( 'foo', HashUtil::METHOD_SAFE );
            HashUtil::hash( 'foo', HashUtil::METHOD_PREFERRED );
        } );

        it( 'should throw on using an unknown algorithm', function() {
            /** @noinspection PhpParamsInspection */
            /** @noinspection PhpMethodParametersCountMismatchInspection */
            expect( [ HashUtil::class, 'hash' ] )
                ->with( 'foo', 'unknown' )
                ->to->throw( HashAlgorithmUnknownException::class );
        } );
    } );

    describe( 'generating random data', function() {

        // don't need to test randomness here, that's covered by PHP tests
        it( 'should generate a random ASCII string', function() {
            expect( HashUtil::random( 100 ) )
                ->to->match( '/^([a-zA-Z0-9]+)$/' );
        } );

        it( 'should generate a random binary string', function() {
            expect( HashUtil::random( 42, true ) )
                ->to->have->length( 42 );
        } );
        // TODO: Create test case for a lack of entropy to check if it throws correctly. I don't know how this would be possible other than manually depleting /dev/urandom or /dev/arandom.
    } );
} );
