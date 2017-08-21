<?php

namespace Radiergummi\Foundation\Framework\Utils;

use FilesystemIterator;
use Radiergummi\Foundation\Framework\Exception\FoundationException;
use Radiergummi\Foundation\Framework\FileSystem\Exception\FileSystemException;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use const DIRECTORY_SEPARATOR;
use const PATHINFO_BASENAME;
use const PATHINFO_DIRNAME;
use const PATHINFO_EXTENSION;
use function chmod;
use function is_readable;
use function is_string;
use function is_writable;
use function pathinfo;
use function str_replace;

/**
 * PathUtil class
 *
 * @package Radiergummi\Foundation\Framework\Utils
 */
class PathUtil {

    /**
     * flag to iterate a directory non-recursive
     *
     * @var bool
     */
    const ITERATE_FLAT = false;

    /**
     * flag to iterate a directory recursive
     *
     * @var bool
     */
    const ITERATE_RECURSIVE = true;

    /**
     * joins multiple paths
     *
     * @param string[] ...$paths
     *
     * @return string
     */
    public static function join( string ...$paths ): string {
        $segments = [];

        foreach ( $paths as $path ) {
            $segments = array_merge( $segments, (array) $path );
        }

        $segments = array_map( function( $path ) {
            return trim( $path, '/' );
        }, $segments );

        $path = join( DIRECTORY_SEPARATOR, array_filter( $segments ) );

        // TODO: This is Windows incompatible
        if ( static::isAbsolute( $paths[0] ) ) {
            $path = DIRECTORY_SEPARATOR . $path;
        }

        return $path;
    }

    /**
     * checks whether a path is absolute
     *
     * @param string $path path to check
     *
     * @return bool
     */
    public static function isAbsolute( string $path ): bool {

        // check if this is a windows system
        if ( strtolower( PHP_SHLIB_SUFFIX ) === 'dll' ) {
            return preg_match( '/\A[A-Z]:(?![^/\\\\])/i', $path ) > 0;
        }

        if ( $path{0} === '/' ) {
            return true;
        }

        return false;
    }

    /**
     * retrieves the basename from a path
     *
     * @param string      $path      path to retrieve the basename for
     * @param string|null $extension optional file extension to remove
     *
     * @return string basename
     */
    public static function basename( string $path, string $extension = null ): string {
        $basename = pathinfo( $path, PATHINFO_BASENAME );

        if ( is_string( $extension ) ) {
            return str_replace( $extension, '', $basename );
        }

        return $basename;
    }

    /**
     * retrieves the file extension
     *
     * @param string $path path to retrieve the extension for
     *
     * @return string file extension
     */
    public static function extension( string $path ): string {
        return pathinfo( $path, PATHINFO_EXTENSION );
    }

    /**
     * retrieves the relative path between two absolute paths
     *
     * @param string $source      source or "from" path
     * @param string $destination destination or "to" path
     *
     * @return string relative path
     */
    public static function relative( string $source, string $destination ): string {
        $from         = explode( DIRECTORY_SEPARATOR, $source );
        $to           = explode( DIRECTORY_SEPARATOR, $destination );
        $relativePath = '';

        $i = 0;

        // Find how far the path is the same
        while ( isset( $from[ $i ] ) && isset( $to[ $i ] ) ) {
            if ( $from[ $i ] !== $to[ $i ] ) {
                break;
            }

            $i ++;
        }

        $j = count( $from ) - 1;

        // Add '..' until the path is the same
        while ( $i <= $j ) {
            if ( ! empty( $from[ $j ] ) ) {
                $relativePath .= '..' . DIRECTORY_SEPARATOR;
            }

            $j --;
        }

        // Go to folder from where it starts differing
        while ( isset( $to[ $i ] ) ) {
            if ( ! empty( $to[ $i ] ) ) {
                $relativePath .= $to[ $i ] . DIRECTORY_SEPARATOR;
            }

            $i ++;
        }

        // Strip last separator
        return substr( $relativePath, 0, - 1 );
    }

    /**
     * creates a path. this will make the directory and apply permissions on it, defaulting to 755.
     *
     * @param string $path path to create
     * @param int    $mode permissions to set for the new directory
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\FileSystem\Exception\FileSystemException
     */
    public static function create( string $path, int $mode = 0755 ) {
        $directory = static::normalize( $path );

        if ( ! is_dir( $directory ) ) {
            try {
                mkdir( $directory, $mode, true );
                chmod( $directory, $mode );
            }
            catch ( FoundationException $exception ) {
                throw new FileSystemException(
                    'could not create directory ' . $path,
                    1,
                    $exception,
                    __FILE__,
                    __LINE__
                );
            }
        }
    }

    /**
     * normalizes a path. this will remove any occurrences of dots or multiple slashes from the path.
     *
     * @param string $path
     *
     * @return string
     */
    public static function normalize( string $path ): string {
        $patterns     = [ '~/{2,}~', '~/(\./)+~', '~([^/\.]+/(?R)*\.{2,}/)~', '~\.\./~' ];
        $replacements = [ DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR, '', '' ];

        return preg_replace( $patterns, $replacements, $path );
    }

    /**
     * iterates over a directory and applies a callback to each found file.
     * The files are gathered recursively by default.
     *
     * @param string   $path      path to iterate over
     * @param callable $callback  callback to run on all items. will receive SPLFileInfo and $path as arguments
     * @param bool     $recursive whether to iterate recursively use ITERATE_RECURSIVE (default) or ITERATE_FLAT
     *
     * @return void
     */
    public static function iterate( string $path, callable $callback, bool $recursive = PathUtil::ITERATE_RECURSIVE ) {
        $iterator = ( $recursive
            ? new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator( $path, RecursiveDirectoryIterator::SKIP_DOTS ),
                RecursiveIteratorIterator::SELF_FIRST,
                RecursiveIteratorIterator::CATCH_GET_CHILD
            )
            : new FilesystemIterator( $path,
                                      FilesystemIterator::SKIP_DOTS |
                                      FilesystemIterator::NEW_CURRENT_AND_KEY |
                                      FilesystemIterator::FOLLOW_SYMLINKS
            )
        );

        // Ideally, this should use array_walk but that won't work with Iterators. While we could transform the
        // iterator into an array, I think it might be best to stick with foreach. RFC on this.
        foreach ( $iterator as $path => $file ) {
            $callback( $file, $path );
        }
    }

    /**
     * checks if a path is writable.
     *
     * @param string $path
     *
     * @return bool
     */
    public static function isWritable( string $path ): bool {
        return is_writable( $path );
    }

    /**
     * checks if a path exists.
     * alias to isReadable.
     *
     * @param string $path
     *
     * @return bool
     */
    public static function exists( string $path ): bool {
        return PathUtil::isReadable( $path );
    }

    /**
     * checks if a path is readable.
     *
     * @param string $path
     *
     * @return bool
     */
    public static function isReadable( string $path ): bool {
        return is_readable( $path );
    }

    /**
     * retrieves the directory name of a path
     *
     * @param string $path path to retrieve a directory name for
     *
     * @return string directory name
     */
    public static function directory( string $path ): string {
        if ( substr( $path, - 1 ) === DIRECTORY_SEPARATOR ) {
            return pathinfo( $path, PATHINFO_BASENAME );
        }

        return pathinfo( $path, PATHINFO_DIRNAME );
    }
}
