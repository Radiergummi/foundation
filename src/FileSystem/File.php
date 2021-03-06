<?php

namespace Radiergummi\Foundation\Framework\FileSystem;

use DateTime;
use finfo as FileInfo;
use Radiergummi\Foundation\Framework\Exception\FoundationException;
use Radiergummi\Foundation\Framework\FileSystem\Exception\FileSystemException;
use Radiergummi\Foundation\Framework\Utils\PathUtil;
use SplFileInfo;
use const DIRECTORY_SEPARATOR;
use const FILE_APPEND;
use const FILEINFO_MIME_TYPE;
use function file_exists;
use function file_get_contents;
use function file_put_contents;
use function is_file;
use function restore_error_handler;
use function set_error_handler;
use function strtolower;
use function substr;
use function unlink;

/**
 * File class
 * The File class serves as a convenient CRUD wrapper around filesystem entities. It keeps track of the file's
 * properties and path, and provides try-catched methods for all operations. On any error, a FileSystemException
 * is thrown that I may extend to either specific ones (FileNotFoundException, AccessDeniedException and so on), or
 * map their error code to common unix error codes.
 * The advantage in using File lies in the error and status handling: None of the "setter" methods return a boolean,
 * if something breaks, it throws an exception, no warnings. That makes the code way more predictable.
 * Besides, you don't have to use clumsy PHP methods all over your code.
 *
 * @package Radiergummi\Foundation\Framework\FileSystem
 */
class File {

    /**
     * holds common magic numbers to determine file type with
     */
    const MAGIC_NUMBERS = [
        '377abcaf271c'                                  => '7z',
        '7f454c46'                                      => 'bin',
        '424d'                                          => 'bmp',
        '7801730d626260'                                => 'dmg',
        '582d'                                          => 'eml',
        '52657475726E2D506174683A20'                    => 'eml',
        '252150532d41646f62652d332e020455053462d332030' => 'eps',
        '4d5a'                                          => 'exe',
        '47494638'                                      => 'gif',
        '99'                                            => 'gpg',
        '1f8b'                                          => 'gz',
        '0606edf5d81d46e5bd31efe7fe74b71d'              => 'indd',
        '5f27a889'                                      => 'jar',
        '7b0a'                                          => 'json',
        'ffd8'                                          => 'jpeg',
        '45786966'                                      => 'jpeg',
        '4c5a4950'                                      => 'lzip',
        '1a45dfa3'                                      => 'mkv',
        'e4525c7b8cd8a74daeb15378d02996d3'              => 'one',
        '25504446'                                      => 'pdf',
        '3c3f'                                          => 'php',
        '9901'                                          => 'pkr',
        '89504e470d0a1a0a'                              => 'png',
        '38425053'                                      => 'psd',
        '526172211A0700'                                => 'rar',
        '526172211A070100'                              => 'rar',
        '7b5c72746631'                                  => 'rtf',
        '2321'                                          => 'sh',
        '7573746172003030'                              => 'tar',
        '0001000000'                                    => 'ttf',
        '6d736100'                                      => 'wasm',
        '52494646'                                      => 'webp',
        'd7cdc69a'                                      => 'wmf',
        '774f4646'                                      => 'woff',
        '774f4632'                                      => 'woff2',
        '3c3f786d6c20'                                  => 'xml',
        'fd377a585a00'                                  => 'xz',
        '504b'                                          => 'zip',
        '504B030414000600'                              => 'zip',
    ];

    /**
     * holds common file extensions and their mime types
     *
     * @var array
     */
    const MIME_TYPES = [
        'png'   =>
            [
                'image/png',
                'image/x-png',
            ],
        'bmp'   =>
            [
                'image/bmp',
                'image/x-bmp',
                'image/x-bitmap',
                'image/x-xbitmap',
                'image/x-win-bitmap',
                'image/x-windows-bmp',
                'image/ms-bmp',
                'image/x-ms-bmp',
                'application/bmp',
                'application/x-bmp',
                'application/x-win-bitmap',
            ],
        'gif'   =>
            [
                'image/gif',
            ],
        'jpeg'  =>
            [
                'image/jpeg',
                'image/pjpeg',
            ],
        'xspf'  =>
            [
                'application/xspf+xml',
            ],
        'vlc'   =>
            [
                'application/videolan',
            ],
        'wmv'   =>
            [
                'video/x-ms-wmv',
                'video/x-ms-asf',
            ],
        'au'    =>
            [
                'audio/x-au',
            ],
        'ac3'   =>
            [
                'audio/ac3',
            ],
        'flac'  =>
            [
                'audio/x-flac',
            ],
        'ogg'   =>
            [
                'audio/ogg',
                'video/ogg',
                'application/ogg',
            ],
        'kmz'   =>
            [
                'application/vnd.google-earth.kmz',
            ],
        'kml'   =>
            [
                'application/vnd.google-earth.kml+xml',
            ],
        'rtx'   =>
            [
                'text/richtext',
            ],
        'rtf'   =>
            [
                'text/rtf',
            ],
        'jar'   =>
            [
                'application/java-archive',
                'application/x-java-application',
                'application/x-jar',
            ],
        'zip'   =>
            [
                'application/x-zip',
                'application/zip',
                'application/x-zip-compressed',
                'application/s-compressed',
                'multipart/x-zip',
            ],
        '7zip'  =>
            [
                'application/x-compressed',
            ],
        'xml'   =>
            [
                'application/xml',
                'text/xml',
            ],
        'svg'   =>
            [
                'image/svg+xml',
            ],
        '3g2'   =>
            [
                'video/3gpp2',
            ],
        '3gp'   =>
            [
                'video/3gp',
                'video/3gpp',
            ],
        'mp4'   =>
            [
                'video/mp4',
            ],
        'm4a'   =>
            [
                'audio/x-m4a',
            ],
        'f4v'   =>
            [
                'video/x-f4v',
            ],
        'flv'   =>
            [
                'video/x-flv',
            ],
        'webm'  =>
            [
                'video/webm',
            ],
        'aac'   =>
            [
                'audio/x-acc',
            ],
        'm4u'   =>
            [
                'application/vnd.mpegurl',
            ],
        'pdf'   =>
            [
                'application/pdf',
                'application/octet-stream',
            ],
        'pptx'  =>
            [
                'application/vnd.openxmlformats-officedocument.presentationml.presentation',
            ],
        'ppt'   =>
            [
                'application/powerpoint',
                'application/vnd.ms-powerpoint',
                'application/vnd.ms-office',
                'application/msword',
            ],
        'docx'  =>
            [
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            ],
        'xlsx'  =>
            [
                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'application/vnd.ms-excel',
            ],
        'xl'    =>
            [
                'application/excel',
            ],
        'xls'   =>
            [
                'application/msexcel',
                'application/x-msexcel',
                'application/x-ms-excel',
                'application/x-excel',
                'application/x-dos_ms_excel',
                'application/xls',
                'application/x-xls',
            ],
        'xsl'   =>
            [
                'text/xsl',
            ],
        'mpeg'  =>
            [
                'video/mpeg',
            ],
        'mov'   =>
            [
                'video/quicktime',
            ],
        'avi'   =>
            [
                'video/x-msvideo',
                'video/msvideo',
                'video/avi',
                'application/x-troff-msvideo',
            ],
        'movie' =>
            [
                'video/x-sgi-movie',
            ],
        'log'   =>
            [
                'text/x-log',
            ],
        'txt'   =>
            [
                'text/plain',
            ],
        'css'   =>
            [
                'text/css',
            ],
        'html'  =>
            [
                'text/html',
            ],
        'wav'   =>
            [
                'audio/x-wav',
                'audio/wave',
                'audio/wav',
            ],
        'xhtml' =>
            [
                'application/xhtml+xml',
            ],
        'tar'   =>
            [
                'application/x-tar',
            ],
        'tgz'   =>
            [
                'application/x-gzip-compressed',
            ],
        'psd'   =>
            [
                'application/x-photoshop',
                'image/vnd.adobe.photoshop',
            ],
        'exe'   =>
            [
                'application/x-msdownload',
            ],
        'js'    =>
            [
                'application/x-javascript',
            ],
        'mp3'   =>
            [
                'audio/mpeg',
                'audio/mpg',
                'audio/mpeg3',
                'audio/mp3',
            ],
        'rar'   =>
            [
                'application/x-rar',
                'application/rar',
                'application/x-rar-compressed',
            ],
        'gzip'  =>
            [
                'application/x-gzip',
            ],
        'hqx'   =>
            [
                'application/mac-binhex40',
                'application/mac-binhex',
                'application/x-binhex40',
                'application/x-mac-binhex40',
            ],
        'cpt'   =>
            [
                'application/mac-compactpro',
            ],
        'bin'   =>
            [
                'application/macbinary',
                'application/mac-binary',
                'application/x-binary',
                'application/x-macbinary',
            ],
        'oda'   =>
            [
                'application/oda',
            ],
        'ai'    =>
            [
                'application/postscript',
            ],
        'smil'  =>
            [
                'application/smil',
            ],
        'mif'   =>
            [
                'application/vnd.mif',
            ],
        'wbxml' =>
            [
                'application/wbxml',
            ],
        'wmlc'  =>
            [
                'application/wmlc',
            ],
        'dcr'   =>
            [
                'application/x-director',
            ],
        'dvi'   =>
            [
                'application/x-dvi',
            ],
        'gtar'  =>
            [
                'application/x-gtar',
            ],
        'php'   =>
            [
                'application/x-httpd-php',
                'application/php',
                'application/x-php',
                'text/php',
                'text/x-php',
                'application/x-httpd-php-source',
            ],
        'swf'   =>
            [
                'application/x-shockwave-flash',
            ],
        'sit'   =>
            [
                'application/x-stuffit',
            ],
        'z'     =>
            [
                'application/x-compress',
            ],
        'mid'   =>
            [
                'audio/midi',
            ],
        'aif'   =>
            [
                'audio/x-aiff',
                'audio/aiff',
            ],
        'ram'   =>
            [
                'audio/x-pn-realaudio',
            ],
        'rpm'   =>
            [
                'audio/x-pn-realaudio-plugin',
            ],
        'ra'    =>
            [
                'audio/x-realaudio',
            ],
        'rv'    =>
            [
                'video/vnd.rn-realvideo',
            ],
        'jp2'   =>
            [
                'image/jp2',
                'video/mj2',
                'image/jpx',
                'image/jpm',
            ],
        'tiff'  =>
            [
                'image/tiff',
            ],
        'eml'   =>
            [
                'message/rfc822',
            ],
        'pem'   =>
            [
                'application/x-x509-user-cert',
                'application/x-pem-file',
            ],
        'p10'   =>
            [
                'application/x-pkcs10',
                'application/pkcs10',
            ],
        'p12'   =>
            [
                'application/x-pkcs12',
            ],
        'p7a'   =>
            [
                'application/x-pkcs7-signature',
            ],
        'p7c'   =>
            [
                'application/pkcs7-mime',
                'application/x-pkcs7-mime',
            ],
        'p7r'   =>
            [
                'application/x-pkcs7-certreqresp',
            ],
        'p7s'   =>
            [
                'application/pkcs7-signature',
            ],
        'crt'   =>
            [
                'application/x-x509-ca-cert',
                'application/pkix-cert',
            ],
        'crl'   =>
            [
                'application/pkix-crl',
                'application/pkcs-crl',
            ],
        'pgp'   =>
            [
                'application/pgp',
            ],
        'gpg'   =>
            [
                'application/gpg-keys',
            ],
        'rsa'   =>
            [
                'application/x-pkcs7',
            ],
        'ics'   =>
            [
                'text/calendar',
            ],
        'zsh'   =>
            [
                'text/x-scriptzsh',
            ],
        'cdr'   =>
            [
                'application/cdr',
                'application/coreldraw',
                'application/x-cdr',
                'application/x-coreldraw',
                'image/cdr',
                'image/x-cdr',
                'zz-application/zz-winassoc-cdr',
            ],
        'wma'   =>
            [
                'audio/x-ms-wma',
            ],
        'vcf'   =>
            [
                'text/x-vcard',
            ],
        'srt'   =>
            [
                'text/srt',
            ],
        'vtt'   =>
            [
                'text/vtt',
            ],
        'ico'   =>
            [
                'image/x-icon',
                'image/x-ico',
                'image/vnd.microsoft.icon',
            ],
        'csv'   =>
            [
                'text/x-comma-separated-values',
                'text/comma-separated-values',
                'application/vnd.msexcel',
            ],
        'json'  =>
            [
                'application/json',
                'text/json',
            ],
        'webp'  => [
            'image/webp'
        ]
    ];

    /**
     * file size in byte (B)
     *
     * @var int
     */
    const SIZE_BYTE = 0;

    /**
     * file size in exbibyte (EB)
     */
    const SIZE_EXBIBYTE = 6;

    /**
     * file size in gibibyte (GB)
     *
     * @var int
     */
    const SIZE_GIBIBYTE = 3;

    /**
     * file size in kibibyte (KB)
     *
     * @var int
     */
    const SIZE_KIBIBYTE = 1;

    /**
     * file size in mebibyte (MB)
     *
     * @var int
     */
    const SIZE_MEBIBYTE = 2;

    /**
     * file size in pebibyte (PB)
     *
     * @var int
     */
    const SIZE_PEBIBYTE = 5;

    /**
     * file size in tebibyte (TB)
     *
     * @var int
     */
    const SIZE_TEBIBYTE = 4;

    /**
     * holds the file path
     *
     * @var string
     */
    protected $path = '';

    /**
     * holds the file mime type
     *
     * @var string
     */
    protected $mimeType = '';

    /**
     * holds the file extension
     *
     * @var string
     */
    protected $extension;

    /**
     * whether the file is virtual or physical
     *
     * @var bool
     */
    protected $isVirtual = true;

    /**
     * File constructor
     *
     * @param string $path
     */
    public function __construct( string $path = null ) {
        if ( $path && is_file( $path ) ) {
            $this->setIsVirtual( false );
        }

        $this->setPath( $path ?? '' );
    }

    /**
     * copies the file
     *
     * @param string $destinationPath path to copy the file to
     *
     * @return \Radiergummi\Foundation\Framework\FileSystem\File copy of the original file
     * @throws \Radiergummi\Foundation\Framework\FileSystem\Exception\FileSystemException
     */
    public function copy( string $destinationPath ): File {
        try {
            set_error_handler( [ $this, 'errorHandler' ] );
            copy( $this->getPath(), $destinationPath );
            restore_error_handler();
        }
        catch ( FoundationException $exception ) {
            throw new FileSystemException(
                'Could not copy file ' . $this->getPath(),
                1,
                $exception,
                __FILE__,
                __LINE__
            );
        }

        return new File( $destinationPath );
    }

    /**
     * retrieves the current file path
     *
     * @return string file path
     */
    public function getPath(): string {
        return $this->path;
    }

    /**
     * sets the file path. please note that this explicitly and purposefully does not move the file!
     * to move it, use `move(string $destinationPath): void`. If you change the path manually for a
     * non-virtual file, expect the unexpected.
     * In most cases, this should not be necessary since all File methods automatically set the path
     * if it changes on disk.
     *
     * @see \Radiergummi\Foundation\Framework\FileSystem\File::move()
     *
     * @param string $path path to set. Will be normalized
     *
     * @return void
     */
    public function setPath( string $path ) {
        $this->path = PathUtil::normalize( $path );
    }

    /**
     * tries to map the files mime type against a set of well-known mime types to find the extension
     *
     * @return string
     */
    public function getExtensionByMimeType(): string {
        foreach ( File::MIME_TYPES as $extension => $mimeTypes ) {
            if ( array_search( $this->getMimeType(), $mimeTypes ) !== false ) {
                return $extension;
            }
        }

        // fall back to the file extension from path
        return PathUtil::extension( $this->getPath() ) ?? 'dat';
    }

    /**
     * retrieves the files mime type
     *
     * @return string
     */
    public function getMimeType(): string {
        if ( $this->isVirtual() ) {
            return 'application/octet-stream';
        }

        if ( $this->mimeType ) {
            return $this->mimeType;
        }

        // "FileInfo" is the native finfo class, I just can't stand lower case class names
        $fileInfo         = new FileInfo( FILEINFO_MIME_TYPE );
        $fileInfoMimeType = $fileInfo->file( $this->getPath() );

        if ( strlen( $fileInfoMimeType ) > 0 ) {
            return $fileInfoMimeType;
        }

        return $this->getMimeTypeByExtension();
    }

    /**
     * sets the files mime type
     *
     * @param string $mimeType
     */
    public function setMimeType( string $mimeType ) {
        $this->mimeType = $mimeType;
    }

    /**
     * checks whether the file is virtual
     *
     * @return bool
     */
    public function isVirtual(): bool {
        return $this->isVirtual;
    }

    /**
     * marks the file as virtual
     *
     * @param bool $virtual
     */
    public function setIsVirtual( bool $virtual ) {
        $this->isVirtual = $virtual;
    }

    /**
     * retrieves the mime type by file extension. this is obviously just an educated guess, since
     * there may be more mime types for an extension. therefore, the MIME_TYPES constant has all
     * mime types ordered by most probable match.
     *
     * @return string
     */
    public function getMimeTypeByExtension(): string {
        $fileExtension = $this->getExtension();

        foreach ( File::MIME_TYPES as $extension => $mimeTypes ) {
            if ( $extension === $fileExtension ) {
                return $mimeTypes[0];
            }
        }

        /**
         * fall back to octet-stream for unknown file types as specified in RFC2046 section 4.5.1
         *
         * @see http://www.rfc-editor.org/rfc/rfc2046.txt
         */
        return 'application/octet-stream';
    }

    /**
     * retrieves the file extension
     *
     * @return string
     */
    public function getExtension(): string {
        return $this->extension
               ?? $this->isVirtual()
                   ? PathUtil::extension( $this->getPath() )
                   : $this->determineType();
    }

    /**
     * sets the file extension
     *
     * @param string $extension new file extension, without dot
     *
     * @throws \Radiergummi\Foundation\Framework\FileSystem\Exception\FileSystemException
     */
    public function setExtension( string $extension ) {
        $this->extension = $extension;

        // if the file is physical, we need to change the extension on the actual file as well
        if ( ! $this->isVirtual() ) {
            $this->rename( PathUtil::basename( $this->getPath(), $this->getExtension() ) . '.' . $extension );
        }
    }

    /**
     * determines file type by evaluating magic numbers aka the first few bytes of a file
     *
     * @return string
     * @throws \Radiergummi\Foundation\Framework\FileSystem\Exception\FileSystemException
     */
    public function determineType(): string {
        if ( $this->isVirtual() ) {
            return 'none';
        }

        try {
            set_error_handler( [ $this, 'errorHandler' ] );
            $handle = fopen( $this->path, 'r' );
            restore_error_handler();
        }
        catch ( FoundationException $exception ) {
            throw new FileSystemException(
                'could not determine type of file ' . $this->getPath(),
                1,
                $exception,
                __FILE__,
                __LINE__
            );
        }

        // get files magic number
        $fileHeader = bin2hex( fread( $handle, 16 ) );

        foreach ( File::MAGIC_NUMBERS as $magicNumber => $type ) {
            if ( strtolower( substr( $fileHeader, 0, strlen( $magicNumber ) ) ) === strtolower( $magicNumber ) ) {
                return $type;
            }
        }

        return 'bin';
    }

    /**
     * renames the file
     *
     * @param string $newName new file name
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\FileSystem\Exception\FileSystemException
     */
    public function rename( string $newName ) {
        $destinationPath = PathUtil::join( PathUtil::directory( $this->getPath() ), $newName );
        $this->move( $destinationPath );
    }

    /**
     * moves a file on the file system
     *
     * @param string $destinationPath path to move the file to
     *                                code 2 - ENOENT
     *                                code x
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\FileSystem\Exception\FileSystemException
     */
    public function move( string $destinationPath ) {
        $destinationPath   = PathUtil::normalize( $destinationPath );
        $lastPathCharacter = substr( $destinationPath, - 1, 1 );

        // check if the last character of the destination is a directory separator or a dot, in which case
        // we assume the file needs to be moved into a directory but keeping its original name.
        if ( $lastPathCharacter === DIRECTORY_SEPARATOR || $lastPathCharacter === '.' ) {
            $destinationPath = PathUtil::join( $destinationPath, $this->getName() );
        }

        try {
            set_error_handler( [ $this, 'errorHandler' ] );
            rename( $this->getPath(), $destinationPath );
            restore_error_handler();
        }
        catch ( FoundationException $exception ) {
            throw new FileSystemException(
                'Could not move file ' . $this->getPath(),
                1,
                $exception,
                __FILE__,
                __LINE__
            );
        }

        $this->setPath( $destinationPath );
    }

    /**
     * retrieves the file name
     *
     * @return string
     */
    public function getName(): string {
        return PathUtil::basename( $this->getPath() );
    }

    /**
     * reads a file
     *
     * @return string
     * @throws \Radiergummi\Foundation\Framework\Exception\FoundationException
     */
    public function read(): string {
        try {
            set_error_handler( [ $this, 'errorHandler' ] );
            $content = file_get_contents( $this->getPath() );
            restore_error_handler();

            $this->setIsVirtual( false );

            return $content;
        }
        catch ( FoundationException $exception ) {
            throw new FileSystemException(
                'Could not read file ' . $this->getPath(),
                1,
                $exception,
                __FILE__,
                __LINE__
            );
        }
    }

    /**
     * writes a file
     *
     * @param string $content
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\Exception\FoundationException
     */
    public function write( string $content ) {
        try {
            set_error_handler( [ $this, 'errorHandler' ] );
            file_put_contents( $this->getPath(), $content );
            restore_error_handler();
        }
        catch ( FoundationException $exception ) {
            throw new FileSystemException(
                'Could not write file ' . $this->getPath(),
                1,
                $exception,
                __FILE__,
                __LINE__
            );
        }

        $this->setIsVirtual( false );
    }

    /**
     * appends content to a file
     *
     * @param string $content
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\FileSystem\Exception\FileSystemException
     */
    public function append( string $content ) {
        try {
            set_error_handler( [ $this, 'errorHandler' ] );
            file_put_contents( $this->getPath(), $content, FILE_APPEND );
            restore_error_handler();
        }
        catch ( FoundationException $exception ) {
            throw new FileSystemException(
                'Could not write to file ' . $this->getPath(),
                1,
                $exception,
                __FILE__,
                __LINE__
            );
        }

        $this->setIsVirtual( false );
    }

    /**
     * deletes a file
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\FileSystem\Exception\FileSystemException
     */
    public function delete() {
        try {
            set_error_handler( [ $this, 'errorHandler' ] );
            unlink( $this->getPath() );
            restore_error_handler();
        }
        catch ( FoundationException $exception ) {
            throw new FileSystemException(
                'Could not delete file ' . $this->getPath(),
                1,
                $exception,
                __FILE__,
                __LINE__
            );
        }

        // make files not existing anymore virtual
        $this->setIsVirtual( true );
    }

    /**
     * retrieves the file size. The size is returned as a float exclusively - I played with converting it to
     * an integer if possible, but that creates more trouble than it solves, so you'll have to deal with float
     * values. Concerning the units: While there may be exist cases where you'd want to use SI units, I cannot
     * think of any, so base 2 is hard coded here. This may change, if someone can make a valid point on this.
     * Additionally, I chose to go for the "real" names (Kibibyte, Mebibyte and so on). That might be
     * confusing to someone not acquainted with the topic but it felt wrong to use the common names. Maybe
     * I'll add alias constants in the future.
     * This method only returns the plain number for good reason: Presentation should be decoupled from logic.
     * If you need formatted file sizes, just do it by yourself using sprintf.
     *
     * @param int $unit unit to return file size in. Use the constants provided by this class to make the code
     *                  clearer. Assigning them integer values has the great advantage of being able to use
     *                  them as the power in the calculation.
     *
     * @return float file size converted to the requested number. this will be rounded to two digits, so if
     *               you need maximum precision, pass File::SIZE_BYTE to receive the byte count and round it
     *               by yourself.
     */
    public function getSize( int $unit = File::SIZE_BYTE ): float {
        $size = $this->isVirtual() ? 0 : $this->getMetadata()->getSize();

        return (float) round( $size / pow( 1024, $unit ), 2 );
    }

    /**
     * retrieves meta data for a file. While we *could* just do this once after initialization of the file
     * and build all metadata getters in such a way that they just query the stored metadata object, it
     * would require recreating the SplFileInfo after each file change. That would be way more logical
     * overhead than just recreating the object once a getter is called.
     *
     * @return \SplFileInfo
     */
    public function getMetadata(): SplFileInfo {
        return new SplFileInfo( $this->path );
    }

    /**
     * retrieves the last modification date and time. use getTimestamp() to get the unix timestamp.
     *
     * @see \Radiergummi\Foundation\Framework\FileSystem\File::getTimestamp()
     * @return \DateTime
     */
    public function getTime(): DateTime {
        $modificationDateTime = new DateTime();
        $modificationDateTime->setTimestamp( $this->getTimestamp() );

        return $modificationDateTime;
    }

    /**
     * retrieves the last modification timestamp. use getTime() to get a DateTime object.
     *
     * @see \Radiergummi\Foundation\Framework\FileSystem\File::getTime()
     * @return int
     */
    public function getTimestamp(): int {
        return $this->isVirtual() ? 0 : $this->getMetadata()->getMTime();
    }

    /**
     * alias to getPermissions
     *
     * @see \Radiergummi\Foundation\Framework\FileSystem\File::getPermissions()
     * @return int
     */
    public function getPerms(): int {
        return $this->isVirtual() ? 0 : $this->getPermissions();
    }

    /**
     * retrieves the file permissions
     *
     * @return int
     */
    public function getPermissions(): int {
        return $this->isVirtual() ? 0 : $this->getMetadata()->getPerms();
    }

    /**
     * retrieves the owning group ID
     *
     * @return int
     */
    public function getGroup(): int {
        return $this->isVirtual() ? 0 : $this->getMetadata()->getGroup();
    }

    /**
     * retrieves the owners user ID
     *
     * @return int
     */
    public function getOwner(): int {
        return $this->isVirtual() ? 0 : $this->getMetadata()->getOwner();
    }

    /**
     * checks whether the file is writable. if it is virtual, writability should depend on
     * the path being accessible.
     *
     * @return bool
     */
    public function isWritable(): bool {
        return ( $this->isVirtual()
            ? PathUtil::isWritable( $this->getPath() )
            : $this->getMetadata()->isWritable()
        );
    }

    /**
     * checks whether the file is readable. if it is virtual, writability should depend on
     * the path being accessible.
     *
     * @return bool
     */
    public function isReadable(): bool {
        return ( $this->isVirtual()
            ? PathUtil::isReadable( $this->getPath() )
            : $this->getMetadata()->isReadable()
        );
    }

    /**
     * checks whether the file is executable
     *
     * @return bool
     */
    public function isExecutable(): bool {
        return $this->isVirtual() ? false : $this->getMetadata()->isExecutable();
    }

    public function exists(): bool {
        return file_exists( $this->getPath() );
    }

    /** @noinspection PhpUnusedPrivateMethodInspection */
    /**
     * Handles PHP errors thrown with the native filesystem methods. This method is not intended for usage
     * other than by PHP itself (would be pretty pointless anyway). It simply rethrows any PHP E_* as a
     * FoundationException to enable try-catch.
     *
     * @ignore
     *
     * @param string $code    error type
     * @param string $message error message
     * @param string $file    file
     * @param int    $line    line
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\Exception\FoundationException
     */
    public function errorHandler( string $code, string $message, string $file, int $line ) {
        throw new FoundationException( $message, $code, null, $file, $line );
    }
}
