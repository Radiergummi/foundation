<?php

namespace Radiergummi\Foundation\Framework\FileSystem;

/**
 * File class
 *
 * @package Radiergummi\Foundation\Framework\FileSystem
 */
class File {

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
    ];

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
     * File constructor
     *
     * @param string $path
     */
    public function __construct( string $path ) {
        $this->setPath( $path );
    }

    /**
     * moves a file on the file system
     *
     * @param string $destinationPath path to move the file to
     *
     * @return void
     */
    public function move( string $destinationPath ) {
        rename( $this->getPath(), $destinationPath );
    }

    /**
     * retrieves the file path
     *
     * @return string file path
     */
    public function getPath(): string {
        return $this->path;
    }

    /**
     * sets the file path
     *
     * @param string $path path to set
     */
    public function setPath( string $path ) {
        $this->path = $path;
    }

    /**
     * copies the file
     *
     * @param string $destinationPath path to copy the file to
     *
     * @return void
     */
    public function copy( string $destinationPath ) {
        copy( $this->getPath(), $destinationPath );
    }

    /**
     * retrieves the file extension
     *
     * @return string
     */
    public function getExtension(): string {
        return $this->extension ?? $this->getExtensionByMimeType();
    }

    /**
     * sets the file extension
     *
     * @param string $extension
     */
    public function setExtension( string $extension ) {
        $this->extension = $extension;
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

        return 'dat';
    }

    /**
     * retrieves the files mime type
     *
     * @return string
     */
    public function getMimeType(): string {
        return $this->mimeType;
    }

    /**
     * sets the files mime type
     *
     * @param string $mimeType
     */
    public function setMimeType( string $mimeType ) {
        $this->mimeType = $mimeType;
    }
}
