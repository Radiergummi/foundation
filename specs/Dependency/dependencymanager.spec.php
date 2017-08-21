<?php

use Radiergummi\Foundation\Framework\Dependencies\Dependency;
use Radiergummi\Foundation\Framework\Dependencies\Exception\DependencyDownloadException;
use Radiergummi\Foundation\Framework\Dependencies\Manager as DependencyManager;
use Radiergummi\Foundation\Framework\FileSystem\Exception\FileSystemException;

describe( 'DependencyManager', function() {
    beforeEach( function() {
        /** @noinspection SpellCheckingInspection */
        $this->testFileSource = 'http://ipv4.download.thinkbroadband.com/5MB.zip';
        $this->storagePath    = __DIR__ . '/../fixtures/storage';
        $this->cachePath      = __DIR__ . '/../fixtures/cache';
    } );

    it( 'should instantiate', function() {
        $manager = new DependencyManager();

        assert( $manager instanceof DependencyManager );
    } );

    it( 'should add a new dependency', function() {
        $manager = new DependencyManager(
            $this->storagePath,
            $this->cachePath
        );

        // add in a mock outputInterface
        $manager->setOutputStream( new Symfony\Component\Console\Output\NullOutput() );

        $testDependency = new Dependency(
            'test',
            '1.0.0',
            $this->testFileSource
        );

        $manager->add( $testDependency );

        assert( $manager->has( $testDependency ) );

        resetTemporaryDirectories( $this->storagePath, $testDependency->getType() );
    } );

    it( 'should throw on adding a dependency with a non existent remote', function() {
        $exception = null;
        $manager   = new DependencyManager(
            $this->storagePath,
            $this->cachePath
        );

        // add in a mock outputInterface
        $manager->setOutputStream( new Symfony\Component\Console\Output\NullOutput() );

        // this is a statically available test file - should be replaced with something I put more trust in.
        /** @noinspection SpellCheckingInspection */
        $testDependency = new Dependency(
            'test',
            '1.0.0',
            'http://i.dont.exist'
        );

        try {
            $manager->add( $testDependency );
        }
        catch ( Throwable $downloadException ) {
            $exception = $downloadException;
        }

        assert( $exception instanceof DependencyDownloadException );

        resetTemporaryDirectories( $this->storagePath, $testDependency->getType() );
    } );

    it( 'should throw on non-writable directories', function() {
        $exception = null;
        $manager   = new DependencyManager(
            __DIR__ . '/foo/bar/baz',
            __DIR__ . '/foo/bar/baz'
        );

        // add in a mock outputInterface
        $manager->setOutputStream( new Symfony\Component\Console\Output\NullOutput() );

        $testDependency = new Dependency(
            'test',
            '1.0.0',
            $this->testFileSource
        );

        try {
            $manager->add( $testDependency );
        }
        catch ( Throwable $filesystemException ) {
            $exception = $filesystemException;
        }

        assert( $exception instanceof FileSystemException );
    } );

    it( 'should update an existing dependency', function() {
        $manager = new DependencyManager(
            $this->storagePath,
            $this->cachePath
        );

        // add in a mock outputInterface
        $manager->setOutputStream( new Symfony\Component\Console\Output\NullOutput() );

        $oldTestDependency = new Dependency(
            'test',
            '1.0.0',
            $this->testFileSource
        );
        $newTestDependency = new Dependency(
            'test',
            '2.0.0',
            $this->testFileSource
        );

        $manager->add( $oldTestDependency );
        $manager->update( $newTestDependency );

        assert( $manager->getVersion( $newTestDependency ) === '2.0.0' );
        assert( is_file( $newTestDependency->getLocal() ) );

        resetTemporaryDirectories( $this->storagePath, $newTestDependency->getType() );
    } );
} );

function resetTemporaryDirectories( string $storagePath, string $dependencyType ) {

    // reset fixtures
    array_map(
        'unlink',
        @glob( sprintf( '%s/%s/*.*', $storagePath, $dependencyType ) )
    );
    @rmdir( sprintf( '%s/%s', $storagePath, $dependencyType ) );
    @unlink( sprintf( '%s/index.json', $storagePath ) );
}
