<?php

/**
 * Config tests
 */

use Radiergummi\Foundation\Framework\Config\Adapters\IniAdapter;
use Radiergummi\Foundation\Framework\Config\Adapters\JsonAdapter;
use Radiergummi\Foundation\Framework\Config\Adapters\PhpAdapter;
use Radiergummi\Foundation\Framework\Config\Adapters\YamlAdapter;
use Radiergummi\Foundation\Framework\Config\Config;
use Radiergummi\Foundation\Framework\Config\ConfigLoader;
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
            $keyName       = 'first_string';
            $expectedValue = 'foo';

            assert( $this->config->get( $keyName ) === $expectedValue );
        } );

        it( 'should get a nested value', function() {
            $keyName       = 'fourth_nested.first_float';
            $expectedValue = 3.14;

            assert( $this->config->get( $keyName ) === $expectedValue );
        } );

        it( 'should return the fallback on wrong key name', function() {
            $expectedValue = 'not_existing_value';

            assert( $this->config->get( 'not_existing', $expectedValue ) === $expectedValue );
        } );

        it( 'should return null on wrong key name without fallback', function() {
            assert( $this->config->get( 'not_existing' ) === null );
        } );
    } );

    // has
    describe( 'has', function() {
        it( 'should determine whether a key exists', function() {
            $keyName = 'third_int';

            assert( $this->config->has( $keyName ) === true );
        } );

        it( 'should determine whether a nested key exists', function() {
            $keyName = 'fourth_nested.second_bool';

            assert( $this->config->has( $keyName ) === true );
        } );

        it( 'should return false on a non existent key', function() {
            $keyName = 'not_existing';

            assert( $this->config->has( $keyName ) === false );
        } );

        it( 'should return false on a non existent nested key', function() {
            $keyName = 'foo.bar.baz.quz';

            assert( $this->config->has( $keyName ) === false );
        } );
    } );

    // set
    describe( 'set', function() {
        it( 'should set a value on a non existent key', function() {
            $keyName = 'not_existing_previously';
            $value   = time();

            $this->config->set( $keyName, $value );

            assert( $this->config->get( $keyName ) === $value );
        } );

        it( 'should set a value on an existent key', function() {
            $keyName = 'first_string';
            $value   = 'bar';

            $this->config->set( $keyName, $value );

            assert( $this->config->get( $keyName ) === $value );
        } );

        it( 'should set a value on a non existent nested key', function() {
            $keyName = 'not.existing.previously';
            $value   = time();

            $this->config->set( $keyName, $value );

            assert( $this->config->get( $keyName ) === $value );
        } );

        it( 'should set a value on an existent nested key', function() {
            $keyName = 'fourth_nested.second_bool';
            $value   = time();

            $this->config->set( $keyName, $value );

            assert( $this->config->get( $keyName ) === $value );
        } );
    } );

    // remove
    describe( 'remove', function() {
        it( 'should remove a key', function() {
            $keyName = 'first_string';

            $this->config->remove( $keyName );

            assert( $this->config->get( $keyName ) === null );
        } );

        it( 'should remove a nested key', function() {
            $keyName = 'fourth_nested.third_nested.first_string';

            $this->config->remove( $keyName );

            assert( $this->config->get( $keyName ) === null );
        } );
    } );

    // magic methods
    describe( 'magic methods', function() {

        it( 'should get a value using __get', function() {
            $keyName       = 'first_string';
            $expectedValue = 'foo';

            assert( $this->config->$keyName === $expectedValue );
        } );

        it( 'should get a nested value using __get', function() {
            $keyName       = 'fourth_nested.third_nested.first_string';
            $expectedValue = 'bar';

            assert( $this->config->$keyName === $expectedValue );
        } );

        it( 'should set a value using __set', function() {
            $keyName       = 'first_string';
            $expectedValue = time();

            $this->config->$keyName = $expectedValue;

            assert( $this->config->$keyName === $expectedValue );
        } );

        it( 'should set a nested value using __set', function() {
            $keyName       = 'fourth_nested.third_nested.first_string';
            $expectedValue = time();

            $this->config->$keyName = $expectedValue;

            assert( $this->config->$keyName === $expectedValue );
        } );

        it( 'should determine whether a key exists using __isset', function() {
            $keyName = 'first_string';

            assert( isset( $this->config->$keyName ) );
        } );

        it( 'should determine whether a nested key exists using __isset', function() {
            $keyName = 'fourth_nested.third_nested.first_string';

            assert( isset( $this->config->$keyName ) );
        } );

        it( 'should return false on a non existent key using __isset', function() {
            $keyName = 'not_existing';

            assert( isset( $this->config->$keyName ) === false );
        } );

        it( 'should return false on a non existent nested key using __isset', function() {
            $keyName = 'foo.bar.baz.quz';

            assert( isset( $this->config->$keyName ) === false );
        } );

        it( 'should remove a key using __unset', function() {
            $keyName = 'first_string';

            unset( $this->config->$keyName );

            assert( $this->config->get( $keyName ) === null );
        } );

        it( 'should remove a nested key using __unset', function() {
            $keyName = 'fourth_nested.third_nested.first_string';

            unset( $this->config->$keyName );

            assert( $this->config->get( $keyName ) === null );
        } );
    } );

    // array access
    describe( 'array access', function() {
        it( 'should get a value using array syntax', function() {
            $keyName       = 'first_string';
            $expectedValue = 'foo';

            assert( $this->config[ $keyName ] === $expectedValue );
        } );

        it( 'should get a nested value using array syntax', function() {
            $keyName       = 'fourth_nested.third_nested.first_string';
            $expectedValue = 'bar';

            assert( $this->config[ $keyName ] === $expectedValue );
        } );

        it( 'should set a value using array syntax', function() {
            $keyName       = 'first_string';
            $expectedValue = time();

            $this->config[ $keyName ] = $expectedValue;

            assert( $this->config[ $keyName ] === $expectedValue );
        } );

        it( 'should set a nested value using array syntax', function() {
            $keyName       = 'fourth_nested.third_nested.first_string';
            $expectedValue = time();

            $this->config[ $keyName ] = $expectedValue;

            assert( $this->config[ $keyName ] === $expectedValue );
        } );

        it( 'should determine whether a key exists using array syntax', function() {
            $keyName = 'first_string';

            assert( isset( $this->config[ $keyName ] ) );
        } );

        it( 'should determine whether a nested key exists using array syntax', function() {
            $keyName = 'fourth_nested.third_nested.first_string';

            assert( isset( $this->config[ $keyName ] ) );
        } );

        it( 'should return false on a non existent key using array syntax', function() {
            $keyName = 'not_existing';

            assert( isset( $this->config[ $keyName ] ) === false );
        } );

        it( 'should return false on a non existent nested key using array syntax', function() {
            $keyName = 'foo.bar.baz.quz';

            assert( isset( $this->config[ $keyName ] ) === false );
        } );

        it( 'should remove a key using array syntax', function() {
            $keyName = 'first_string';

            unset( $this->config[ $keyName ] );

            assert( $this->config->get( $keyName ) === null );
        } );

        it( 'should remove a nested key using array syntax', function() {
            $keyName = 'fourth_nested.third_nested.first_string';

            unset( $this->config[ $keyName ] );

            assert( $this->config->get( $keyName ) === null );
        } );
    } );
} );

describe( 'ConfigLoader', function() {
    describe( 'Adapters', function() {
        describe( 'JSON adapter', function() {
            it( 'should support .json files', function() {
                assert( JsonAdapter::getSupportedFileFormat() === 'json' );
            } );

            it( 'should decode JSON strings', function() {
                $data          = '{"foo":"bar"}';
                $expectedValue = [ 'foo' => 'bar' ];

                assert( JsonAdapter::decode( $data ) === $expectedValue );
            } );

            it( 'should throw on malformed JSON', function() {
                $malformed = '{foo:`bar`}';
                $exception = null;

                try {
                    JsonAdapter::decode( $malformed );
                }
                catch ( InvalidConfigFileException $configFileException ) {
                    $exception = $configFileException;
                }

                assert( $exception instanceof InvalidConfigFileException );
            } );

            it( 'should encode arrays', function() {
                $data          = [ 'foo' => 'bar' ];
                $expectedValue = "{\n    \"foo\": \"bar\"\n}";

                assert( JsonAdapter::encode( $data ) === $expectedValue );
            } );
        } );

        describe( 'YAML adapter', function() {
            it( 'should support .yml files', function() {
                assert( YamlAdapter::getSupportedFileFormat() === 'yml' );
            } );

            it( 'should decode YAML strings', function() {
                $data          = 'foo: bar';
                $expectedValue = [ 'foo' => 'bar' ];

                assert( YamlAdapter::decode( $data ) === $expectedValue );
            } );

            it( 'should throw on malformed YAML', function() {
                $malformed = '{foo:`bar`}';
                $exception = null;

                try {
                    YamlAdapter::decode( $malformed );
                }
                catch ( InvalidConfigFileException $configFileException ) {
                    $exception = $configFileException;
                }

                assert( $exception instanceof InvalidConfigFileException );
            } );

            it( 'should encode arrays', function() {
                $data          = [ 'foo' => 'bar' ];
                $expectedValue = "foo: bar\n";

                assert( YamlAdapter::encode( $data ) === $expectedValue );
            } );
        } );

        describe( 'INI adapter', function() {
            it( 'should support .ini files', function() {
                assert( IniAdapter::getSupportedFileFormat() === 'ini' );
            } );

            it( 'should decode INI strings', function() {
                $data          = 'foo="bar"';
                $expectedValue = [ 'foo' => 'bar' ];

                assert( IniAdapter::decode( $data ) === $expectedValue );
            } );

            it( 'should throw on malformed INI', function() {
                $malformed = 'foo="bar';
                $exception = null;

                try {
                    IniAdapter::decode( $malformed );
                }
                catch ( InvalidConfigFileException $configFileException ) {
                    $exception = $configFileException;
                }

                assert( $exception instanceof InvalidConfigFileException );
            } );

            it( 'should encode arrays', function() {
                $data          = [ 'foo' => 'bar' ];
                $expectedValue = "foo=bar\n";

                assert( IniAdapter::encode( $data ) === $expectedValue );
            } );
        } );

        describe( 'PHP adapter', function() {
            it( 'should support .php files', function() {
                assert( PhpAdapter::getSupportedFileFormat() === 'php' );
            } );

            it( 'should decode PHP strings', function() {
                $data          = '<?php return [ "foo" => "bar"];';
                $expectedValue = [ 'foo' => 'bar' ];

                assert( PhpAdapter::decode( $data ) === $expectedValue );
            } );

            it( 'should throw on malformed PHP', function() {
                $malformed = '<?php throw new "nope";';
                $exception = null;

                try {
                    PhpAdapter::decode( $malformed );
                }
                catch ( InvalidConfigFileException $configFileException ) {
                    $exception = $configFileException;
                }

                assert( $exception instanceof InvalidConfigFileException );
            } );

            it( 'should encode arrays', function() {
                $data          = [ 'foo' => 'bar' ];
                $expectedValue = "<?php return array (\n  'foo' => 'bar',\n);";

                assert( PhpAdapter::encode( $data ) === $expectedValue );
            } );
        } );
    } );

    describe( 'Loader', function() {
        beforeEach( function() {
            $this->loader = new ConfigLoader();
        } );

        it( 'should instantiate', function() {
            assert( $this->loader instanceof ConfigLoader );
        } );

        it( 'should discover the default JSON adapter', function() {
            $loaders = $this->loader->getAdapters();

            assert( $loaders[ JsonAdapter::getSupportedFileFormat() ] === JsonAdapter::class );
        } );

        it( 'should discover the default YAML adapter', function() {
            $loaders = $this->loader->getAdapters();

            assert( $loaders[ YamlAdapter::getSupportedFileFormat() ] === YamlAdapter::class );
        } );

        it( 'should discover the default INI adapter', function() {
            $loaders = $this->loader->getAdapters();

            assert( $loaders[ IniAdapter::getSupportedFileFormat() ] === IniAdapter::class );
        } );

        it( 'should discover the default PHP adapter', function() {
            $loaders = $this->loader->getAdapters();

            assert( $loaders[ PhpAdapter::getSupportedFileFormat() ] === PhpAdapter::class );
        } );

        it( 'should return a Config object', function() {
            $testFile = realpath( __DIR__ . '/../../composer.json' );

            assert( $this->loader->loadFile( $testFile ) instanceof Config );
        } );

        it( 'should throw on non existent file', function() {
            $exception = null;

            try {
                $this->loader->loadFile( 'nope' );
            }
            catch ( ConfigFileNotFoundException $configFileNotFoundException ) {
                $exception = $configFileNotFoundException;
            }
            assert( $exception instanceof ConfigFileNotFoundException );
        } );

        it( 'should throw on unknown config file format', function() {
            $unknownFormatFilePath = realpath( __DIR__ . '/../../README.md' );
            $exception             = null;

            try {
                $this->loader->loadFile( $unknownFormatFilePath );
            }
            catch ( UnknownConfigFileFormatException $configFileFormatException ) {
                $exception = $configFileFormatException;
            }

            assert( $exception instanceof UnknownConfigFileFormatException );
        } );
    } );
} );
