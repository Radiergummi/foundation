<?php

/**
 * debugging dump - prints the data
 *
 * @param array ...$data data to print
 *
 * @return void
 */
function dd( ...$data ) {

    $backtrace = debug_backtrace()[1];
    $origin    = sprintf(
        "\e[1;33mDEBUG @ %s:%s\e[0m \t",
        $backtrace['file'],
        $backtrace['line']
    );

    // if we're in a CI environment, this will be checked to fail the build manually
    $GLOBALS['__debug_called'] = $origin;

    foreach ( $data as $key => $item ) {
        if ( is_object( $item ) ) {
            $reflectionItem = new ReflectionClass( get_class( $item ) );
            $properties     = [];

            foreach ( $reflectionItem->getProperties() as $property ) {
                $reflectionProperty = $reflectionItem->getProperty( $property->getName() );
                $reflectionProperty->setAccessible( true );
                $value         = $reflectionProperty->getValue( $item );
                $accessibility = 'public';
                $static        = false;
                $type          = '';

                if ( preg_match( '/@var\s+([^\s]+)/', $property->getDocComment(), $matches ) ) {
                    list( , $type ) = $matches;
                }

                if ( $property->isPublic() || $property->isDefault() ) {
                    $accessibility = 'public';
                }
                if ( $property->isPrivate() ) {
                    $accessibility = 'private';
                }
                if ( $property->isProtected() ) {
                    $accessibility = 'protected';
                }
                if ( $property->isStatic() ) {
                    $static = true;
                }

                if ( is_array( $value ) ) {
                    foreach ( $value as $key => $content ) {
                        $value[ $key . ' (' . gettype( $content ) . ')' ] = $content;
                        unset( $value[ $key ] );
                    }
                }

                $properties[ sprintf(
                    "%s %s%s%s",
                    $accessibility,
                    ( $static ? 'static ' : '' ),
                    $property->getName(),
                    ( strlen( $type ) > 0 ? ' (' . $type . ')' : '' )
                ) ] = $value;
            }

            $data[ ( class_exists( get_class( $item ) ) ? get_class( $item ) : 'stdObject' ) ] = $properties;
        }
    }

    if ( count( $data ) === 1 ) {
        $data = $data[0];

        if ( is_string( $data ) || is_numeric( $data ) || is_null( $data ) ) {
            echo sprintf( "%s\e[36m%s\e[0m", $origin, $data ) . PHP_EOL;

            return;
        }
    }

    try {
        $encoded = json_encode( $data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
        if ( $encoded === false ) {
            throw new Exception( json_last_error() );
        }
    }
    catch ( Exception $jsonException ) {
        $encoded = var_export( $data, true );
    }

    echo sprintf( "%s\n\033[31m%s\033[0m", $origin, $encoded );
}

/**
 * debugging breakpoint - prints the data and exits the process with an exit code of 2 to indicate debugging.
 *
 * @param array ...$data data to print
 *
 * @return void
 */
function db( ...$data ) {
    dd( ...$data );
    exit( 2 );
}
