<?php

/**
 * Debugging dump - prints the passed data. Any variable given to dd() is parsed. In case of objects,
 * reflection is used to retrieve all instance properties (name, value, visibility and type).
 * All array values are type checked and the type gets attached to the array key. This works up to a
 * depth of 2. All items are JSON encoded to enable nicely indented output of complex structures.
 * If single variables are passed who are one of string, number or null, they will be printed straight
 * to the output without JSON wrapping.
 *
 * @param array ...$data data to print
 *
 * @return void
 */
function dd( ...$data ) {

    // retrieve the call origin
    $backtrace = debug_backtrace();
    $origin    = sprintf(
        "\e[1;33mDEBUG @ %s:%s\e[0m \t",
        $backtrace[1]['file'] ?? $backtrace[0]['file'] ?? '{unknown}',
        $backtrace[1]['line'] ?? $backtrace[0]['line'] ?? '{unknown}'
    );

    // if we're in a CI environment, this will be checked to fail the build manually with code 2
    // by hooking into Peridot's event "peridot.end". This prevents accidentally leftover debugging
    // statements before pushing to production.
    $GLOBALS['__debug_called'] = $origin;

    /**
     * Iterate over all parameters given and try to extract information from them.
     * This focuses mainly on objects by using reflection to acquire all properties,
     * including those with limited visibility, and their type.
     */
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

            // insert the properties as key-value into data[{class name}]
            $data[ ( class_exists( get_class( $item ) ) ? get_class( $item ) : 'stdObject' ) ] = $properties;
        }
    }

    // check to see if only a single argument has been passed, in which case we don't want that
    // to be wrapped in a useless array
    if ( count( $data ) === 1 ) {
        $data = $data[0];

        // check if this is a "simple" data type perfectly fine with being displayed on the console
        if ( is_string( $data ) || is_numeric( $data ) || is_null( $data ) ) {
            $length = strlen( (string) $data );
            $type   = gettype( $data );

            if ( is_null( $data ) ) {
                $length = 0;
            }

            echo sprintf(
                     "%s\e[36m(%s) %s\e[0m",
                     $origin,
                     $type . ( $length ? ', length ' . $length : '' ),
                     (string) $data
                 ) . PHP_EOL;

            return;
        }
    }

    try {

        // encode the parsed data to JSON to ensure it is displayed properly.
        // the flags serve to preserve most characters and align the rows.
        $encoded = json_encode( $data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

        // if there happens an error during encoding, we'll throw an exception
        // and catch it straight away.
        if ( $encoded === false ) {
            throw new Exception( json_last_error() );
        }
    }
    catch ( Exception $jsonException ) {

        // fall back to var_export
        $encoded = var_export( $data, true );
    }

    // output the colored string
    echo sprintf( "%s\n\033[31m%s\033[0m", $origin, $encoded );
}

/**
 * Debugging breakpoint - prints the data and exits the process with an exit code of 2 to indicate debugging.
 * This will immediately halt execution of the script.
 *
 * @param array ...$data data to print
 *
 * @return void
 */
function db( ...$data ) {
    dd( ...$data );
    exit( 2 );
}
