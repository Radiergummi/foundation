<?php

use Radiergummi\Foundation\Framework\Utils\PathUtil;

describe( 'PathUtil', function() {
    it( 'should determine the basename', function() {
        $path          = '/foo/bar/baz/quz.log';
        $expectedValue = 'quz.log';

        assert( PathUtil::basename( $path ) === $expectedValue );
    } );

    it( 'should determine the basename without extension', function() {
        $path          = '/foo/bar/baz/quz.log';
        $extension     = '.log';
        $expectedValue = 'quz';

        assert( PathUtil::basename( $path, $extension ) === $expectedValue );
    } );

    it( 'should join path segments', function() {
        $segments      = [
            '/foo',
            'bar',
            'baz/quz',
            'test/'
        ];
        $expectedValue = '/foo/bar/baz/quz/test';

        assert( PathUtil::join( ...$segments ) === $expectedValue );
    } );

    it( 'should determine whether a path is absolute', function() {
        $absolutePath = '/foo/bar/baz';
        $relativePath = 'baz/quz/test/';

        assert( PathUtil::isAbsolute( $absolutePath ) === true );
        assert( PathUtil::isAbsolute( $relativePath ) === false );
    } );

    it( 'should determine the directory of a path', function() {
        $path          = '/foo/bar/baz/quz.log';
        $expectedValue = '/foo/bar/baz';

        assert( PathUtil::directory( $path ) === $expectedValue );
    } );

    it( 'should normalize a path', function() {
        $path          = '/foo//bar/.././baz////quz.log';
        $expectedValue = '/foo/baz/quz.log';

        assert( PathUtil::normalize( $path ) === $expectedValue );
    } );

    it( 'should build a relative path', function() {
        $from          = '/foo/bar/buz/test/';
        $to            = '/foo/bar/test/quz';
        $expectedValue = '../../test/quz';

        assert( PathUtil::relative( $from, $to ) === $expectedValue );
    } );

    it( 'should determine a file extension', function() {
        $path          = '/foo/bar/buz/test.zip';
        $expectedValue = 'zip';

        assert( PathUtil::extension( $path ) === $expectedValue );
    } );

    it( 'should determine a file extension from a URL', function() {
        $path          = 'https://example.com/foo/bar/buz/test.zip';
        $expectedValue = 'zip';

        assert( PathUtil::extension( $path ) === $expectedValue );
    } );

    it( 'should determine whether a path is writable', function() {
        assert( PathUtil::isWritable( __DIR__ . '/../fixtures/cache' ) === true );
        assert( PathUtil::isWritable( __DIR__ . '/foo/bar/baz' ) === false );
    } );
} );
