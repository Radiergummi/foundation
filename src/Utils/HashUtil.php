<?php

namespace Radiergummi\Foundation\Framework\Utils;

use Exception;
use Radiergummi\Foundation\Framework\Utils\Exception\HashAlgorithmUnknownException;
use Radiergummi\Foundation\Framework\Utils\Exception\NotEnoughEntropyException;
use function bin2hex;
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

    /**
     * CRC32
     *
     * @var string
     */
    const METHOD_CRC32 = 'crc32';

    /**
     * Alias to the currently fastest hashing method
     *
     * @var string
     */
    const METHOD_FAST = HashUtil::METHOD_CRC32;

    /**
     * MD5
     *
     * @var string
     */
    const METHOD_MD5 = 'md5';

    /**
     * MurmurHash3
     *
     * @var string
     */
    const METHOD_MURMUR3 = 'murmurhash3';

    /**
     * Alias to the currently preferred hashing algorithm
     *
     * @var string
     */
    const METHOD_PREFERRED = HashUtil::METHOD_MURMUR3;

    /**
     * Alias to the currently most collision safe algorithm
     *
     * @var string
     */
    const METHOD_SAFE = HashUtil::METHOD_SHA512;

    /**
     * SHA1
     *
     * @var string
     */
    const METHOD_SHA1 = 'sha1';

    /**
     * SHA512
     *
     * @var string
     */
    const METHOD_SHA512 = 'sha512';

    /**
     * hashes a string with a given
     *
     * @param string $input  input to create a hash value for
     * @param string $method hashing algorithm to use
     *
     * @return string hash for the input string
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

    /**
     * returns a cryptographically safe random string
     *
     * @param int  $length random string length
     * @param bool $binary whether to return a binary string. defaults to false. otherwise, will return ASCII
     *
     * @return string random string
     * @throws \Radiergummi\Foundation\Framework\Utils\Exception\NotEnoughEntropyException
     */
    public static function random( int $length = 24, bool $binary = false ): string {
        try {
            $random = random_bytes( $length );
        }
        catch ( Exception $exception ) {
            throw new NotEnoughEntropyException( $exception->getMessage() );
        }

        if ( $binary ) {
            return $random;
        }

        return bin2hex( $random );
    }
}
