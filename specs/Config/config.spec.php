<?php

/**
 * Config tests
 */

use Radiergummi\Foundation\Framework\Config\Adapters\IniAdapter;
use Radiergummi\Foundation\Framework\Config\Adapters\JsonAdapter;
use Radiergummi\Foundation\Framework\Config\Adapters\PhpAdapter;
use Radiergummi\Foundation\Framework\Config\Adapters\YamlAdapter;
use Radiergummi\Foundation\Framework\Config\Config;
use Radiergummi\Foundation\Framework\Config\ConfigProvider;
use Radiergummi\Foundation\Framework\Config\Exception\ConfigFileNotFoundException;
use Radiergummi\Foundation\Framework\Config\Exception\InvalidConfigFileException;
use Radiergummi\Foundation\Framework\Config\Exception\UnknownConfigFileFormatException;

describe( 'Config', function() {
    beforeEach( function() {
        $this->config = new Config( [
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
                                        'fifth_array'   => [ 10, 20, 30 ]
                                    ] );
    } );

    // get
    describe( 'get', function() {
        it( 'should get a value', function() {
            expect( $this->config->get( 'first_string' ) )
                ->to->equal( 'foo' );
        } );

        it( 'should get a nested value', function() {
            expect( $this->config->get( 'fourth_nested.first_float' ) )
                ->to->equal( 3.14 );
        } );

        it( 'should return the fallback on wrong key name', function() {
            expect( $this->config->get( 'not_existing', 'not_existing_value' ) )
                ->to->equal( 'not_existing_value' );
        } );

        it( 'should return null on wrong key name without fallback', function() {
            expect( $this->config->get( 'not_existing' ) )
                ->to->be->null();
        } );
    } );

    // has
    describe( 'has', function() {
        it( 'should determine whether a key exists', function() {
            expect( $this->config->has( 'third_int' ) )
                ->to->be->true();
        } );

        it( 'should determine whether a nested key exists', function() {
            expect( $this->config->has( 'fourth_nested.second_bool' ) )
                ->to->be->true();
        } );

        it( 'should return false on a non existent key', function() {
            expect( $this->config->has( 'not_existing' ) )
                ->to->be->false();
        } );

        it( 'should return false on a non existent nested key', function() {
            expect( $this->config->has( 'foo.bar.baz.quz' ) )
                ->to->be->false();
        } );
    } );

    // set
    describe( 'set', function() {
        it( 'should set a value on a non existent key', function() {
            $expectedValue = time();

            $this->config->set( 'not_existing_previously', $expectedValue );

            expect( $this->config->get( 'not_existing_previously' ) )
                ->to->equal( $expectedValue );
        } );

        it( 'should set a value on an existent key', function() {
            $this->config->set( 'first_string', 'bar' );

            expect( $this->config->get( 'first_string' ) )
                ->to->equal( 'bar' );
        } );

        it( 'should set a value on a non existent nested key', function() {
            $expectedValue = time();

            $this->config->set( 'not.existing.previously', $expectedValue );

            expect( $this->config->get( 'not.existing.previously' ) )
                ->to->equal( $expectedValue );
        } );

        it( 'should set a value on an existent nested key', function() {
            $expectedValue = time();

            $this->config->set( 'fourth_nested.second_bool', $expectedValue );

            expect( $this->config->get( 'fourth_nested.second_bool' ) )
                ->to->equal( $expectedValue );
        } );
    } );

    // remove
    describe( 'remove', function() {
        it( 'should remove a key', function() {
            $this->config->remove( 'first_string' );

            expect( $this->config->get( 'first_string' ) )
                ->to->be->null();
        } );

        it( 'should remove a nested key', function() {
            $this->config->remove( 'fourth_nested.third_nested.first_string' );

            expect( $this->config->get( 'fourth_nested.third_nested.first_string' ) )
                ->to->be->null();
        } );
    } );

    // magic methods
    describe( 'magic methods', function() {

        it( 'should get a value using __get', function() {
            expect( $this->config->{'first_string'} )
                ->to->equal( 'foo' );
        } );

        it( 'should get a nested value using __get', function() {
            expect( $this->config->{'fourth_nested.third_nested.first_string'} )
                ->to->equal( 'bar' );
        } );

        it( 'should set a value using __set', function() {
            $expectedValue = time();

            $this->config->{'first_string'} = $expectedValue;

            expect( $this->config->{'first_string'} )
                ->to->equal( $expectedValue );
        } );

        it( 'should set a nested value using __set', function() {
            $expectedValue = time();

            $this->config->{'fourth_nested.third_nested.first_string'} = $expectedValue;

            expect( $this->config->{'fourth_nested.third_nested.first_string'} )
                ->to->equal( $expectedValue );
        } );

        it( 'should determine whether a key exists using __isset', function() {
            expect( isset( $this->config->{'first_string'} ) )
                ->to->be->true();
        } );

        it( 'should determine whether a nested key exists using __isset', function() {
            expect( isset( $this->config->{'fourth_nested.third_nested.first_string'} ) )
                ->to->be->true();
        } );

        it( 'should return false on a non existent key using __isset', function() {
            expect( isset( $this->config->{'not_existing'} ) )
                ->to->be->false();
        } );

        it( 'should return false on a non existent nested key using __isset', function() {
            expect( isset( $this->config->{'foo.bar.baz.quz'} ) )
                ->to->be->false();
        } );

        it( 'should remove a key using __unset', function() {
            unset( $this->config->{'first_string'} );

            expect( $this->config->get( 'first_string' ) )
                ->to->be->null();
        } );

        it( 'should remove a nested key using __unset', function() {
            unset( $this->config->{'fourth_nested.third_nested.first_string'} );

            expect( $this->config->get( 'fourth_nested.third_nested.first_string' ) )
                ->to->be->null();
        } );
    } );

    // array access
    describe( 'array access', function() {
        it( 'should get a value using array syntax', function() {
            expect( $this->config['first_string'] )
                ->to->equal( 'foo' );
        } );

        it( 'should get a nested value using array syntax', function() {
            expect( $this->config['fourth_nested.third_nested.first_string'] )
                ->to->equal( 'bar' );
        } );

        it( 'should set a value using array syntax', function() {
            $expectedValue = time();

            $this->config['first_string'] = $expectedValue;

            expect( $this->config['first_string'] )
                ->to->equal( $expectedValue );
        } );

        it( 'should set a nested value using array syntax', function() {
            $expectedValue = time();

            $this->config['fourth_nested.third_nested.first_string'] = $expectedValue;

            expect( $this->config['fourth_nested.third_nested.first_string'] )
                ->to->equal( $expectedValue );
        } );

        it( 'should determine whether a key exists using array syntax', function() {
            expect( isset( $this->config['first_string'] ) )
                ->to->be->true();
        } );

        it( 'should determine whether a nested key exists using array syntax', function() {
            expect( isset( $this->config['fourth_nested.third_nested.first_string'] ) )
                ->to->be->true();
        } );

        it( 'should return false on a non existent key using array syntax', function() {
            expect( isset( $this->config['not_existing'] ) )
                ->to->be->false();
        } );

        it( 'should return false on a non existent nested key using array syntax', function() {
            expect( isset( $this->config['foo.bar.baz.quz'] ) )
                ->to->be->false();
        } );

        it( 'should remove a key using array syntax', function() {
            unset( $this->config['first_string'] );

            expect( $this->config->get( 'first_string' ) )
                ->to->be->null();
        } );

        it( 'should remove a nested key using array syntax', function() {
            unset( $this->config['fourth_nested.third_nested.first_string'] );

            expect( $this->config->get( 'fourth_nested.third_nested.first_string' ) )
                ->to->be->null();
        } );
    } );
} );

describe( 'ConfigProvider', function() {
    describe( 'Adapters', function() {
        describe( 'JSON adapter', function() {
            it( 'should support .json files', function() {
                expect( JsonAdapter::getSupportedFileFormat() )
                    ->to->equal( 'json' );
            } );

            it( 'should decode JSON strings', function() {
                expect( JsonAdapter::decode( '{"foo":"bar"}' ) )
                    ->to->equal( [ 'foo' => 'bar' ] );
            } );

            it( 'should throw on malformed JSON', function() {

                /** @noinspection PhpParamsInspection */
                expect( [ JsonAdapter::class, 'decode' ] )
                    ->with( '{foo:`bar`}' )
                    ->to->throw( InvalidConfigFileException::class );
            } );

            it( 'should encode arrays', function() {

                /** @noinspection PhpParamsInspection */
                expect( JsonAdapter::encode( [ 'foo' => 'bar' ] ) )
                    ->to->equal( "{\n    \"foo\": \"bar\"\n}" );
            } );
        } );

        describe( 'YAML adapter', function() {
            it( 'should support .yml files', function() {
                expect( YamlAdapter::getSupportedFileFormat() )
                    ->to->equal( 'yml' );
            } );

            it( 'should decode YAML strings', function() {
                expect( YamlAdapter::decode( 'foo: bar' ) )
                    ->to->equal( [ 'foo' => 'bar' ] );
            } );

            it( 'should throw on malformed YAML', function() {

                /** @noinspection PhpParamsInspection */
                expect( [ YamlAdapter::class, 'decode' ] )
                    ->with( '{foo:`bar`}' )
                    ->to->throw( InvalidConfigFileException::class );
            } );

            it( 'should encode arrays', function() {
                expect( YamlAdapter::encode( [ 'foo' => 'bar' ] ) )
                    ->to->equal( "foo: bar\n" );
            } );
        } );

        describe( 'INI adapter', function() {
            it( 'should support .ini files', function() {
                expect( IniAdapter::getSupportedFileFormat() )
                    ->to->equal( 'ini' );
            } );

            it( 'should decode INI strings', function() {
                expect( IniAdapter::decode( 'foo="bar"' ) )
                    ->to->equal( [ 'foo' => 'bar' ] );
            } );

            it( 'should throw on malformed INI', function() {

                /** @noinspection PhpParamsInspection */
                expect( [ IniAdapter::class, 'decode' ] )
                    ->with( 'foo="bar' )
                    ->to->throw( InvalidConfigFileException::class );
            } );

            it( 'should encode arrays', function() {
                expect( IniAdapter::encode( [ 'foo' => 'bar' ] ) )
                    ->to->equal( "foo=bar\n" );
            } );
        } );

        describe( 'PHP adapter', function() {
            it( 'should support .php files', function() {
                expect( PhpAdapter::getSupportedFileFormat() )
                    ->to->equal( 'php' );
            } );

            it( 'should decode PHP strings', function() {
                expect( PhpAdapter::decode( '<?php return [ "foo" => "bar"];' ) )
                    ->to->equal( [ 'foo' => 'bar' ] );

                it( 'should throw on malformed PHP', function() {

                    /** @noinspection PhpParamsInspection */
                    expect( [ PhpAdapter::class, 'decode' ] )
                        ->with( '<?php throw new "nope";' )
                        ->to->throw( InvalidConfigFileException::class );
                } );

                it( 'should encode arrays', function() {
                    expect( PhpAdapter::encode( [ 'foo' => 'bar' ] ) )
                        ->to->equal( "<?php return array (\n  'foo' => 'bar',\n);" );
                } );
            } );
        } );

        describe( 'Loader', function() {
            beforeEach( function() {
                $this->loader = new ConfigProvider();
            } );

            it( 'should instantiate', function() {
                expect( $this->loader )
                    ->to->be->an->instanceof( ConfigProvider::class );
            } );

            it( 'should discover the default JSON adapter', function() {
                $loaders = $this->loader->getAdapters();

                expect( $loaders )
                    ->to->have->a->property( JsonAdapter::getSupportedFileFormat(), JsonAdapter::class );
            } );

            it( 'should discover the default YAML adapter', function() {
                $loaders = $this->loader->getAdapters();

                expect( $loaders )
                    ->to->have->a->property( YamlAdapter::getSupportedFileFormat(), YamlAdapter::class );
            } );

            it( 'should discover the default INI adapter', function() {
                $loaders = $this->loader->getAdapters();

                expect( $loaders )
                    ->to->have->a->property( IniAdapter::getSupportedFileFormat(), IniAdapter::class );
            } );

            it( 'should discover the default PHP adapter', function() {
                $loaders = $this->loader->getAdapters();

                expect( $loaders )
                    ->to->have->a->property( PhpAdapter::getSupportedFileFormat(), PhpAdapter::class );
            } );

            it( 'should return a Config object', function() {
                $testFile = __DIR__ . '/../../composer.json';

                expect( $this->loader->loadFile( $testFile ) )
                    ->to->be->an->instanceof( Config::class );
            } );

            it( 'should throw on non existent file', function() {

                /** @noinspection PhpParamsInspection */
                expect( [ $this->loader, 'loadFile' ] )
                    ->with( 'nope' )
                    ->to->throw( ConfigFileNotFoundException::class );
            } );

            it( 'should throw on unknown config file format', function() {
                $unknownFormatFilePath = realpath( __DIR__ . '/../../README.md' );

                /** @noinspection PhpParamsInspection */
                expect( [ $this->loader, 'loadFile' ] )
                    ->with( $unknownFormatFilePath )
                    ->to->throw( UnknownConfigFileFormatException::class );
            } );
        } );
    } );
} );
