<?php

namespace Radiergummi\Foundation\Framework;

use function array_filter;
use function array_key_exists;
use function array_map;
use function array_pop;
use function array_reverse;
use function class_exists;
use function explode;
use function file_get_contents;
use function implode;
use function json_decode;
use function realpath;
use function scandir;
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
     * root path
     *
     * @var string
     */
    private $rootPath;

    /**
     * retrieves all classes in a given namespace
     *
     * @param string $namespace namespace to search
     *
     * @return array classes in namespace
     */
    public function getClassesInNamespace( string $namespace ): array {
        $namespaceDirectory = $this->getNamespaceDirectory( $namespace );

        if ( ! $namespaceDirectory ) {
            return [];
        }

        $files = scandir( $namespaceDirectory );

        $classes = array_map( function( $file ) use ( $namespace ) {
            return $namespace . '\\' . str_replace( '.php', '', $file );
        }, $files );

        return array_filter( $classes, function( $possibleClass ) {
            return class_exists( $possibleClass );
        } );
    }

    /**
     * retrieves defined namespaces from composer.json
     *
     * @return array
     */
    private function getDefinedNamespaces(): array {
        $composerJsonPath = $this->rootPath . '/composer.json';
        $composerConfig   = json_decode( file_get_contents( $composerJsonPath ) );

        return (array) $composerConfig->autoload->{'psr-4'};
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
                return realpath( $this->rootPath . $composerNamespaces[ $possibleNamespace ] . implode( '/', array_reverse( $undefinedNamespaceFragments ) ) );
            }

            $undefinedNamespaceFragments[] = array_pop( $namespaceFragments );
        }

        return false;
    }
}
