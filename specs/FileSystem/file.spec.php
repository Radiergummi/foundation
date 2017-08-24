<?php

use Radiergummi\Foundation\Framework\FileSystem\Exception\FileSystemException;
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

    it( 'should throw upon reading a virtual file', function() {
        $file = new File( __DIR__ . '/foo/bar/baz' );

        expect( [ $file, 'read' ] )
            ->to->throw( FileSystemException::class );
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

    it( 'should throw upon trying to delete a virtual file', function() {
        $file = new File( __DIR__ . '/foo/bar/baz' );

        expect( [ $file, 'delete' ] )
            ->to->throw( FileSystemException::class );
    } );

    it( 'should append to a new file', function() {
        $file      = new File( PathUtil::join( $this->testFileDirectory, 'text.temporary.txt' ) );
        $testValue = (string) time();

        $file->append( $testValue );

        expect( $file->read() )
            ->to->equal( $testValue );

        $file->delete();
    } );

    it( 'should move a file', function() {
        $file = new File( PathUtil::join( $this->testFileDirectory, 'text.txt' ) );

        $file->move( PathUtil::join( $this->testFileDirectory, 'text.moved.txt' ) );

        expect( $file->getPath() )
            ->to->equal(
                PathUtil::normalize( PathUtil::join( $this->testFileDirectory, 'text.moved.txt' ) )
            );

        $file->move( PathUtil::join( $this->testFileDirectory, '..' ) );

        expect( $file->getPath() )
            ->to->equal(
                PathUtil::normalize( PathUtil::join( $this->testFileDirectory, '..', 'text.moved.txt' ) )
            );

        $file->move( PathUtil::join( $this->testFileDirectory, 'text.txt' ) );
    } );

    it( 'should throw upon trying to move a virtual file', function() {
        $file = new File( __DIR__ . '/foo/bar/baz' );

        /** @noinspection PhpParamsInspection */
        expect( [ $file, 'move' ] )
            ->with( PathUtil::join( $this->testFileDirectory, 'previously.not.existing' ) )
            ->to->throw( FileSystemException::class );
    } );

    it( 'should copy a file', function() {
        $file = new File( PathUtil::join( $this->testFileDirectory, 'text.txt' ) );

        $copiedFile = $file->copy( PathUtil::join( $this->testFileDirectory, 'text.duplicate.txt' ) );

        expect( $copiedFile->isVirtual() )
            ->to->be->false();

        expect( $copiedFile->read() )
            ->to->equal( $file->read() );

        $copiedFile->delete();
    } );

    it( 'should throw upon trying to copy a virtual file', function() {
        $file = new File( __DIR__ . '/foo/bar/baz' );

        /** @noinspection PhpParamsInspection */
        expect( [ $file, 'copy' ] )
            ->with( PathUtil::join( $this->testFileDirectory, 'text.duplicate.txt' ) )
            ->to->throw( FileSystemException::class );
    } );

    it( 'should rename a file', function() {
        $file = new File( PathUtil::join( $this->testFileDirectory, 'text.txt' ) );

        $file->rename( 'text.renamed.txt' );

        expect( $file->getPath() )
            ->to->equal(
                PathUtil::normalize( PathUtil::join( $this->testFileDirectory, 'text.renamed.txt' ) )
            );

        $file->rename( 'text.txt' );
    } );

    it( 'should determine the type of a file', function() {
        $physicalFile = new File( PathUtil::join( $this->testFileDirectory, '1.webp' ) );
        $virtualFile  = new File( __DIR__ . '/foo/bar/baz' );

        expect( $physicalFile->determineType() )
            ->to->equal( 'webp' );

        expect( $physicalFile->getExtension() )
            ->to->equal( 'webp' );

        expect( $physicalFile->getMimeType() )
            ->to->equal( 'image/webp' );

        expect( $virtualFile->determineType() )
            ->to->equal( 'none' );

        expect( $virtualFile->getExtension() )
            ->to->equal( '' );

        expect( $virtualFile->getMimeType() )
            ->to->equal( 'application/octet-stream' );
    } );

    it( 'should determine the size of a file', function() {
        // TODO: Larger test file to properly test the larger units

        $physicalFile = new File( PathUtil::join( $this->testFileDirectory, '1.webp' ) );
        $virtualFile  = new File( __DIR__ . '/foo/bar/baz' );

        expect( $physicalFile->getSize() )
            ->to->equal( (float) 10474 );

        expect( $physicalFile->getSize( File::SIZE_KIBIBYTE ) )
            ->to->equal( 10.23 );

        expect( $physicalFile->getSize( File::SIZE_MEBIBYTE ) )
            ->to->equal( 0.01 );

        expect( $physicalFile->getSize( File::SIZE_GIBIBYTE ) )
            ->to->equal( (float) 0 );

        expect( $physicalFile->getSize( File::SIZE_TEBIBYTE ) )
            ->to->equal( (float) 0 );

        expect( $physicalFile->getSize( File::SIZE_PEBIBYTE ) )
            ->to->equal( (float) 0 );

        expect( $physicalFile->getSize( File::SIZE_EXBIBYTE ) )
            ->to->equal( (float) 0 );

        expect( $virtualFile->getSize() )
            ->to->equal( (float) 0 );
    } );

    it( 'should determine the filename', function() {
        $physicalFile = new File( PathUtil::join( $this->testFileDirectory, '1.webp' ) );
        $virtualFile  = new File( '/foo/bar/baz.test' );

        expect( $physicalFile->getName() )
            ->to->equal( '1.webp' );

        expect( $virtualFile->getName() )
            ->to->equal( 'baz.test' );
    } );

    it( 'should determine the file extension', function() {
        $physicalFile = new File( PathUtil::join( $this->testFileDirectory, 'executable.sh' ) );
        $virtualFile  = new File( '/foo/bar/baz.test' );

        expect( $physicalFile->getExtension() )
            ->to->equal( 'sh' );

        expect( $virtualFile->getExtension() )
            ->to->equal( 'test' );
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
