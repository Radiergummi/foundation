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
use function explode;
use function is_readable;
use function is_string;
use function is_writable;
use function pathinfo;
use function str_replace;
use function strlen;
use function substr;

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

    public static function parse( string $path ) {
        $parsed = [
            'root'      => '',
            'directory' => '',
            'basename'  => '',
            'extension' => '',
            'name'      => ''
        ];

        $pathLength = strlen( $path );

        if ( $pathLength === 0 ) {
            return $parsed;
        }

        $rootEnd = 0;
        $code    = ord( substr( $path, 0, 1 ) );

        if ( $pathLength > 1 ) {
            if ( $code === 47 || $code === 92 ) {

                // Possible UNC root
                $code    = ord( substr( $path, 1, 1 ) );
                $rootEnd = 1;

                if ( $code === 47 || $code === 92 ) {

                    // Matched double path separator at beginning
                    $j    = 2;
                    $last = $j;

                    // Match 1 or more non-path separators
                    for ( ; $j < $pathLength; $j ++ ) {
                        $code = ord( substr( $path, $j, 1 ) );

                        if ( $code === 47 || $code === 92 ) {
                            break;
                        }
                    }

                    if ( $j < $pathLength && $j !== $last ) {

                        // Matched!
                        $last = $j;

                        // Match 1 or more path separators
                        for ( ; $j < $pathLength; $j ++ ) {
                            $code = ord( substr( $path, $j, 1 ) );

                            if ( $code !== 47 && $code !== 92 ) {
                                break;
                            }
                        }

                        if ( $j < $pathLength && $j !== $last ) {

                            // Matched!
                            $last = $j;

                            // Match 1 or more non-path separators
                            for ( ; $j < $pathLength; $j ++ ) {
                                $code = ord( substr( $path, $j, 1 ) );

                                if ( $code === 47 || $code === 92 ) {
                                    break;
                                }
                            }

                            if ( $j === $pathLength ) {

                                // We matched a UNC root only
                                $rootEnd = $j;
                            } else if ( $j !== $last ) {

                                // We matched a UNC root with leftovers
                                $rootEnd = $j + 1;
                            }
                        }
                    }
                }
            } else if (
                ( $code >= 65/*A*/ && $code <= 90/*Z*/ ) ||
                ( $code >= 97/*a*/ && $code <= 122/*z*/ )
            ) {
                // Possible device root
                $code = ord( substr( $path, 1, 1 ) );

                if ( $code === 58/*:*/ ) {
                    $rootEnd = 2;

                    if ( $pathLength > 2 ) {
                        $code = ord( substr( $path, 2, 1 ) );
                        if ( $code === 47/*/*/ || $code === 92/*\*/ ) {
                            if ( $pathLength === 3 ) {


                                // `path` contains just a drive root, exit early to avoid
                                // unnecessary work
                                $parsed['root'] = $parsed['directory'] = $path;

                                return $parsed;
                            }

                            $rootEnd = 3;
                        }
                    } else {

                        // `path` contains just a drive root, exit early to avoid
                        // unnecessary work
                        $parsed['root'] = $parsed['directory'] = $path;

                        return $parsed;
                    }
                }
            }
        } else if ( $code === 47 || $code === 92 ) {

            // `path` contains just a path separator, exit early to avoid
            // unnecessary work
            $parsed['root'] = $parsed['directory'] = $path;

            return $parsed;
        }

        if ( $rootEnd > 0 ) {
            $parsed['root'] = substr( $path, 0, $rootEnd );
        }

        $startDot     = - 1;
        $startPart    = $rootEnd;
        $end          = - 1;
        $matchedSlash = true;
        $i            = strlen( $path ) - 1;

        // Track the state of characters (if any) we see before our first dot and
        // after any path separator we find
        $preDotState = 0;

        // Get non-dir info
        for ( ; $i >= $rootEnd; -- $i ) {
            $code = ord( substr( $path, $i, 1 ) );

            if ( $code === 47 || $code === 92 ) {

                // If we reached a path separator that was not part of a set of path
                // separators at the end of the string, stop now
                if ( ! $matchedSlash ) {
                    $startPart = $i + 1;

                    break;
                }

                continue;
            }

            if ( $end === - 1 ) {

                // We saw the first non-path separator, mark this as the end of our
                // extension
                $matchedSlash = false;
                $end          = $i + 1;
            }

            if ( $code === 46/*.*/ ) {

                // If this is our first dot, mark it as the start of our extension
                if ( $startDot === - 1 ) {
                    $startDot = $i;
                } else if ( $preDotState !== 1 ) {
                    $preDotState = 1;
                }
            } else if ( $startDot !== - 1 ) {

                // We saw a non-dot and non-path separator before our dot, so we should
                // have a good chance at having a non-empty extension
                $preDotState = - 1;
            }
        }

        if (
            $startDot === - 1 ||
            $end === - 1 ||

            // We saw a non-dot character immediately before the dot
            $preDotState === 0 ||

            // The (right-most) trimmed path component is exactly '..'
            (
                $preDotState === 1 &&
                $startDot === $end - 1 &&
                $startDot === $startPart + 1
            )
        ) {
            if ( $end !== - 1 ) {
                $parsed['basename'] = $parsed['name'] = substr( $path, $startPart, $end );
            }
        } else {
            $parsed['name']      = substr( $path, $startPart, $startDot );
            $parsed['basename']  = substr( $path, $startPart, $end );
            $parsed['extension'] = substr( $path, $startDot + 1, $end );
        }

        // If the directory is the root, use the entire root as the `dir` including
        // the trailing slash if any (`C:\abc` -> `C:\`). Otherwise, strip out the
        // trailing slash (`C:\abc\def` -> `C:\abc`).
        if ( $startPart > 0 && $startPart !== $rootEnd ) {
            $parsed['directory'] = substr( $path, 0, $startPart - 1 );
        } else {
            $parsed['directory'] = $parsed['root'];
        }

        return $parsed;
    }
}
