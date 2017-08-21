<?php

namespace Radiergummi\Foundation\Framework;

use Radiergummi\Foundation\Framework\Utils\PathUtil;
use SplFileInfo;
use function array_filter;
use function array_key_exists;
use function array_map;
use function array_pop;
use function array_reverse;
use function class_exists;
use function explode;
use function implode;
use function is_dir;
use function str_replace;

/**
 * ClassCollector trait
 * Returns the FQCN of all classes in a given namespace, resolved by the PSR-4 definitions
 * in the composer.json
 *
 * @package Radiergummi\Foundation\Framework
 * @link    https://stackoverflow.com/a/40229665/2532203
 */
trait ClassCollector {

    /**
     * composer configuration data
     *
     * @var \Radiergummi\Foundation\Framework\ComposerData
     */
    private $composerConfig;

    /**
     * retrieves all classes in a given namespace
     *
     * @param string $namespace namespace to search
     *
     * @return array classes in namespace
     */
    public function getClassesInNamespace( string $namespace ): array {
        $namespaceDirectory = $this->getNamespaceDirectory( $namespace );

        // if the directory is invalid (non existent, wrong type) return an empty array
        if ( ( ! $namespaceDirectory ) || ( ! is_dir( $namespaceDirectory ) ) ) {
            return [];
        }

        $files = [];

        // iterate over the namespace directory, collect class names
        PathUtil::iterate( $namespaceDirectory, function( SplFileInfo $file ) use ( &$files, $namespaceDirectory ) {
            if ( ! $file->isDir() ) {
                $files[] = str_replace(
                    DIRECTORY_SEPARATOR,
                    '\\',
                    substr( $file->getPathname(), strlen( $namespaceDirectory ) + 1 )
                );
            }
        } );

        // remove the file extension
        $classes = array_map( function( string $file ) use ( $namespace ): string {
            return $namespace . '\\' . str_replace( '.php', '', $file );
        }, $files );

        // remove all non-class files by checking if the associated class is registered
        return array_filter( $classes, function( string $possibleClass ): bool {
            return class_exists( $possibleClass );
        } );
    }

    /**
     * retrieves the matching directory for a namespace
     *
     * @param string $namespace namespace to find a directory for
     *
     * @return bool|string directory path or false
     */
    private function getNamespaceDirectory( string $namespace ) {
        $composerNamespaces = $this->getDefinedNamespaces();

        $namespaceFragments          = explode( '\\', $namespace );
        $undefinedNamespaceFragments = [];

        while ( $namespaceFragments ) {
            $possibleNamespace = implode( '\\', $namespaceFragments ) . '\\';

            if ( array_key_exists( $possibleNamespace, $composerNamespaces ) ) {
                return PathUtil::normalize( PathUtil::join(
                    '..',
                    $composerNamespaces[ $possibleNamespace ],
                    ...array_reverse( $undefinedNamespaceFragments )
                ) );
            }

            $undefinedNamespaceFragments[] = array_pop( $namespaceFragments );
        }

        return false;
    }

    /**
     * retrieves defined namespaces from composer.json
     *
     * @return array
     */
    private function getDefinedNamespaces(): array {

        /** @noinspection PhpUndefinedFieldInspection */
        return (array) $this->composerConfig->get( 'autoload.psr-4' );
    }
}
