<?php

namespace Radiergummi\Foundation\Framework\Utils;

use Radiergummi\Foundation\Framework\Utils\Exception\HashAlgorithmUnknownException;
use function function_exists;
use function hash_algos;
use function in_array;
use function random_bytes;

/**
 * Hashing Utility. Provides methods to hash strings.
 * Please note that mentions of "safety" in this context don't refer to security considerations but collision
 * safety. There are several constant algorithm names available - this has the purpose of creating aliases referring
 * to certain properties of the available algorithms. Generally, they need to make a compromise between fast and
 * collision safe. Wile CRC32 is pretty fast, it *will* produce collisions on a data set large enough. SHA512 is
 * safer in that regard, but requires more time. Currently, Murmur3 is the best available algorithm (in that regard)
 * to my knowledge, so it's the current default for METHOD_PREFERRED. If that will change, we can simply change the
 * value to the new preferred algorithm without breaking code.
 *
 * @package Radiergummi\Foundation\Framework\Utils
 */
class HashUtil {
    const METHOD_CRC32     = 'crc32';

    const METHOD_FAST      = HashUtil::METHOD_CRC32;

    const METHOD_MD5       = 'md5';

    const METHOD_MURMUR3   = 'murmurhash3';

    const METHOD_PREFERRED = HashUtil::METHOD_MURMUR3;

    const METHOD_SAFE      = HashUtil::METHOD_SHA512;

    const METHOD_SHA1      = 'sha1';

    const METHOD_SHA512    = 'sha512';

    /**
     * hashes a string with a given
     *
     * @param string $input
     * @param string $method
     *
     * @return string
     * @throws \Radiergummi\Foundation\Framework\Utils\Exception\HashAlgorithmUnknownException
     */
    public static function hash( string $input, string $method = HashUtil::METHOD_PREFERRED ): string {
        if ( function_exists( $method ) ) {
            return $method( $input );
        }

        if ( in_array( $method, hash_algos() ) ) {
            return hash( $method, $input );
        }

        throw new HashAlgorithmUnknownException( $method . ' is currently not supported' );
    }

    public static function random( int $length = 24, bool $binary = false ): string {
        return bin2hex( random_bytes( $length ) );
    }
}
