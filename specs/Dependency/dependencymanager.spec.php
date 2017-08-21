<?php

use Radiergummi\Foundation\Framework\Dependencies\Dependency;
use Radiergummi\Foundation\Framework\Dependencies\Exception\DependencyDownloadException;
use Radiergummi\Foundation\Framework\Dependencies\Manager as DependencyManager;
use Radiergummi\Foundation\Framework\FileSystem\Exception\FileSystemException;

xdescribe( 'DependencyManager', function() {
    beforeEach( function() {
        /** @noinspection SpellCheckingInspection */
        $this->testFileSource = 'http://ipv4.download.thinkbroadband.com/5MB.zip';
        $this->storagePath    = __DIR__ . '/../fixtures/storage';
        $this->cachePath      = __DIR__ . '/../fixtures/cache';
    } );

    it( 'should instantiate', function() {
        expect( new DependencyManager() )
            ->to->be->an->instanceof( DependencyManager::class );
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

        expect( $manager->has( $testDependency ) )
            ->to->be->true();

        resetTemporaryDirectories( $this->storagePath, $testDependency->getType() );
    } );

    it( 'should throw on adding a dependency with a non existent remote', function() {
        $manager = new DependencyManager(
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

        /** @noinspection PhpParamsInspection */
        expect( [ $manager, 'add' ] )
            ->with( $testDependency )
            ->to->throw( DependencyDownloadException::class );

        resetTemporaryDirectories( $this->storagePath, $testDependency->getType() );
    } );

    it( 'should throw on non-writable directories', function() {
        $manager = new DependencyManager(
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

        /** @noinspection PhpParamsInspection */
        expect( [ $manager, 'add' ] )
            ->with( $testDependency )
            ->to->throw( FileSystemException::class );

        resetTemporaryDirectories( $this->storagePath, $testDependency->getType() );
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

        expect( $manager->getVersion( $newTestDependency ) )->to->equal( '2.0.0' );
        expect( $newTestDependency->getLocal() )->to->satisfy( 'is_file' );

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
