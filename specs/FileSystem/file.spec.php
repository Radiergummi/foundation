<?php

use Radiergummi\Foundation\Framework\FileSystem\File;
use Radiergummi\Foundation\Framework\Utils\PathUtil;

describe( 'File', function() {

    /** @noinspection SpellCheckingInspection */
    $this->testFileDirectory = PathUtil::join( __DIR__, '..', 'fixtures', 'testfiles' );

    it( 'should instantiate', function() {
        $file = new File();

        expect( $file )
            ->to->be->an->instanceof( File::class );
    } );

    it( 'should normalize its path', function() {
        $file = new File( '/foo//../bar/baz.test' );

        expect( $file->getPath() )
            ->to->equal( '/bar/baz.test' );
    } );

    it( 'should read a file', function() {
        $file = new File( PathUtil::join( $this->testFileDirectory, 'text.txt' ) );

        expect( $file->read() )
            ->to->equal( "foo\nbar\nbaz\n" );
    } );

    it( 'should overwrite an existing file', function() {
        $file      = new File( PathUtil::join( $this->testFileDirectory, 'text.txt' ) );
        $testValue = (string) time();

        $file->write( $testValue );

        expect( $file->read() )
            ->to->equal( $testValue );

        $file->write( "foo\nbar\nbaz\n" );
    } );

    it( 'should append to an existing file', function() {
        $file      = new File( PathUtil::join( $this->testFileDirectory, 'text.txt' ) );
        $testValue = (string) time();

        $file->append( $testValue );

        expect( $file->read() )
            ->to->equal( "foo\nbar\nbaz\n" . $testValue );

        $file->write( "foo\nbar\nbaz\n" );
    } );

    it( 'should write a new file', function() {
        $file      = new File( PathUtil::join( $this->testFileDirectory, 'text.temporary.txt' ) );
        $testValue = (string) time();

        $file->write( $testValue );

        expect( $file->read() )
            ->to->equal( $testValue );

        $file->write( "foo\nbar\nbaz\n" );

        unlink( $file->getPath() );
    } );

    it( 'should delete a file', function() {
        $file = new File( PathUtil::join( $this->testFileDirectory, 'text.temporary.txt' ) );

        $file->write( 'foo' );

        expect( $file->exists() )
            ->to->be->true();

        $file->delete();

        expect( $file->exists() )
            ->to->be->false();
    } );

    it( 'should append to a new file', function() {
        $file      = new File( PathUtil::join( $this->testFileDirectory, 'text.temporary.txt' ) );
        $testValue = (string) time();

        $file->append( $testValue );

        expect( $file->read() )
            ->to->equal( $testValue );

        $file->delete();
    } );

    it( 'should determine the type of a physical file', function() {
        $file = new File( PathUtil::join( $this->testFileDirectory, '1.webp' ) );

        expect( $file->determineType() )
            ->to->equal( 'webp' );

        expect( $file->getExtension() )
            ->to->equal( 'webp' );

        expect( $file->getMimeType() )
            ->to->equal( 'image/webp' );
    } );

    it( 'should determine the size of a physical file', function() {
        // TODO: Larger test file to properly test the larger units

        $file = new File( PathUtil::join( $this->testFileDirectory, '1.webp' ) );

        expect( $file->getSize() )
            ->to->equal( (float) 10474 );

        expect( $file->getSize( File::SIZE_KIBIBYTE ) )
            ->to->equal( 10.23 );

        expect( $file->getSize( File::SIZE_MEBIBYTE ) )
            ->to->equal( 0.01 );

        expect( $file->getSize( File::SIZE_GIBIBYTE ) )
            ->to->equal( (float) 0 );

        expect( $file->getSize( File::SIZE_TEBIBYTE ) )
            ->to->equal( (float) 0 );

        expect( $file->getSize( File::SIZE_PEBIBYTE ) )
            ->to->equal( (float) 0 );

        expect( $file->getSize( File::SIZE_EXBIBYTE ) )
            ->to->equal( (float) 0 );
    } );

    it( 'should determine the type of a physical file', function() {
        $file = new File( PathUtil::join( $this->testFileDirectory, '1.webp' ) );

        expect( $file->determineType() )
            ->to->equal( 'webp' );

        expect( $file->getExtension() )
            ->to->equal( 'webp' );

        expect( $file->getMimeType() )
            ->to->equal( 'image/webp' );
    } );

    it( 'should determine the filename', function() {
        $physicalFile = new File( PathUtil::join( $this->testFileDirectory, '1.webp' ) );
        $virtualFile  = new File( '/foo/bar/baz.test' );

        expect( $physicalFile->getName() )
            ->to->equal( '1.webp' );

        expect( $virtualFile->getName() )
            ->to->equal( 'baz.test' );
    } );

    it( 'should determine whether a file is executable', function() {
        if ( strtolower( PHP_SHLIB_SUFFIX ) === 'dll' ) {
            $physicalFile = new File ( PathUtil::join( 'C:', 'Windows', 'notepad.exe' ) );
        } else {
            $physicalFile = new File( PathUtil::join( $this->testFileDirectory, 'executable.sh' ) );
        }

        $virtualFile = new File( '/foo/bar/baz.test' );

        expect( $physicalFile->isExecutable() )
            ->to->be->true();

        expect( $virtualFile->isExecutable() )
            ->to->be->false();
    } );

    it( 'should determine whether a file is readable', function() {
        $physicalFile = new File( PathUtil::join( $this->testFileDirectory, 'executable.sh' ) );
        $virtualFile  = new File( '/foo/bar/baz.test' );

        expect( $physicalFile->isReadable() )
            ->to->be->true();

        expect( $virtualFile->isReadable() )
            ->to->be->false();

        $newFile = new File( PathUtil::join( $this->testFileDirectory, 'temporary.bin' ) );

        expect( $newFile->isReadable() )
            ->to->be->false();

        $newFile->write( 'foo' );

        expect( $newFile->isReadable() )
            ->to->be->true();

        $newFile->delete();

        expect( $newFile->isReadable() )
            ->to->be->false();
    } );
} );
