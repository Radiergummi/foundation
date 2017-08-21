<?php

namespace Radiergummi\Foundation\Framework\FileSystem;

/**
 * Error class
 *
 * @package Radiergummi\Foundation\Framework\FileSystem
 */
class Error {
    /**
     * Arg list too long
     */
    const E2BIG = 7;

    /**
     * Permission denied
     */
    const EACCES = 13;

    /**
     * Address already in use
     */
    const EADDRINUSE = 98;

    /**
     * Cannot assign requested address
     */
    const EADDRNOTAVAIL = 99;

    /**
     * Advertise error
     */
    const EADV = 68;

    /**
     * Address family not supported by protocol
     */
    const EAFNOSUPPORT = 97;

    /**
     * Try again
     */
    const EAGAIN = 11;

    /**
     * Operation already in progress
     */
    const EALREADY = 114;

    /**
     * Invalid exchange
     */
    const EBADE = 52;

    /**
     * Bad file number
     */
    const EBADF = 9;

    /**
     * File descriptor in bad state
     */
    const EBADFD = 77;

    /**
     * Not a data message
     */
    const EBADMSG = 74;

    /**
     * Invalid request descriptor
     */
    const EBADR = 53;

    /**
     * Invalid request code
     */
    const EBADRQC = 56;

    /**
     * Invalid slot
     */
    const EBADSLT = 57;

    /**
     * Bad font file format
     */
    const EBFONT = 59;

    /**
     * Device or resource busy
     */
    const EBUSY = 16;

    /**
     * No child processes
     */
    const ECHILD = 10;

    /**
     * Channel number out of range
     */
    const ECHRNG = 44;

    /**
     * Communication error on send
     */
    const ECOMM = 70;

    /**
     * Software caused connection abort
     */
    const ECONNABORTED = 103;

    /**
     * Connection refused
     */
    const ECONNREFUSED = 111;

    /**
     * Connection reset by peer
     */
    const ECONNRESET = 104;

    /**
     * Resource deadlock would occur
     */
    const EDEADLK = 35;

    /**
     * Resource deadlock would occur
     */
    const EDEADLOCK = Error::EDEADLK;

    /**
     * Destination address required
     */
    const EDESTADDRREQ = 89;

    /**
     * Math argument out of domain of func
     */
    const EDOM = 33;

    /**
     * RFS specific error
     */
    const EDOTDOT = 73;

    /**
     * Quota exceeded
     */
    const EDQUOT = 122;

    /**
     * File exists
     */
    const EEXIST = 17;

    /**
     * Bad address
     */
    const EFAULT = 14;

    /**
     * File too large
     */
    const EFBIG = 27;

    /**
     * Host is down
     */
    const EHOSTDOWN = 112;

    /**
     * No route to host
     */
    const EHOSTUNREACH = 113;

    /**
     * Identifier removed
     */
    const EIDRM = 43;

    /**
     * Illegal byte sequence
     */
    const EILSEQ = 84;

    /**
     * Operation now in progress
     */
    const EINPROGRESS = 115;

    /**
     * Interrupted system call
     */
    const EINTR = 4;

    /**
     * Invalid argument
     */
    const EINVAL = 22;

    /**
     * I/O error
     */
    const EIO = 5;

    /**
     * Transport endpoint is already connected
     */
    const EISCONN = 106;

    /**
     * Is a directory
     */
    const EISDIR = 21;

    /**
     * Is a named type file
     */
    const EISNAM = 120;

    /**
     * Level 2 halted
     */
    const EL2HLT = 51;

    /**
     * Level 2 not synchronized
     */
    const EL2NSYNC = 45;

    /**
     * Level 3 halted
     */
    const EL3HLT = 46;

    /**
     * Level 3 reset
     */
    const EL3RST = 47;

    /**
     * Can not access a needed shared library
     */
    const ELIBACC = 79;

    /**
     * Accessing a corrupted shared library
     */
    const ELIBBAD = 80;

    /**
     * Cannot exec a shared library directly
     */
    const ELIBEXEC = 83;

    /**
     * Attempting to link in too many shared libraries
     */
    const ELIBMAX = 82;

    /**
     * .lib section in a.out corrupted
     */
    const ELIBSCN = 81;

    /**
     * Link number out of range
     */
    const ELNRNG = 48;

    /**
     * Too many symbolic links encountered
     */
    const ELOOP = 40;

    /**
     * Wrong medium type
     */
    const EMEDIUMTYPE = 124;

    /**
     * Too many open files
     */
    const EMFILE = 24;

    /**
     * Too many links
     */
    const EMLINK = 31;

    /**
     * Message too long
     */
    const EMSGSIZE = 90;

    /**
     * Multihop attempted
     */
    const EMULTIHOP = 72;

    /**
     * File name too long
     */
    const ENAMETOOLONG = 36;

    /**
     * No XENIX semaphores available
     */
    const ENAVAIL = 119;

    /**
     * Network is down
     */
    const ENETDOWN = 100;

    /**
     * Network dropped connection because of reset
     */
    const ENETRESET = 102;

    /**
     * Network is unreachable
     */
    const ENETUNREACH = 101;

    /**
     * File table overflow
     */
    const ENFILE = 23;

    /**
     * No anode
     */
    const ENOANO = 55;

    /**
     * No buffer space available
     */
    const ENOBUFS = 105;

    /**
     * No CSI structure available
     */
    const ENOCSI = 50;

    /**
     * No data available
     */
    const ENODATA = 61;

    /**
     * No such device
     */
    const ENODEV = 19;

    /**
     * No such file or directory
     */
    const ENOENT = 2;

    /**
     * Exec format error
     */
    const ENOEXEC = 8;

    /**
     * No record locks available
     */
    const ENOLCK = 37;

    /**
     * Link has been severed
     */
    const ENOLINK = 67;

    /**
     * No medium found
     */
    const ENOMEDIUM = 123;

    /**
     * Out of memory
     */
    const ENOMEM = 12;

    /**
     * No message of desired type
     */
    const ENOMSG = 42;

    /**
     * Machine is not on the network
     */
    const ENONET = 64;

    /**
     * Package not installed
     */
    const ENOPKG = 65;

    /**
     * Protocol not available
     */
    const ENOPROTOOPT = 92;

    /**
     * No space left on device
     */
    const ENOSPC = 28;

    /**
     * Out of streams resources
     */
    const ENOSR = 63;

    /**
     * Device not a stream
     */
    const ENOSTR = 60;

    /**
     * Function not implemented
     */
    const ENOSYS = 38;

    /**
     * Block device required
     */
    const ENOTBLK = 15;

    /**
     * Transport endpoint is not connected
     */
    const ENOTCONN = 107;

    /**
     * Not a directory
     */
    const ENOTDIR = 20;

    /**
     * Directory not empty
     */
    const ENOTEMPTY = 39;

    /**
     * Not a XENIX named type file
     */
    const ENOTNAM = 118;

    /**
     * Socket operation on non-socket
     */
    const ENOTSOCK = 88;

    /**
     * Not a typewriter
     */
    const ENOTTY = 25;

    /**
     * Name not unique on network
     */
    const ENOTUNIQ = 76;

    /**
     * No such device or address
     */
    const ENXIO = 6;

    /**
     * Operation not supported on transport endpoint
     */
    const EOPNOTSUPP = 95;

    /**
     * Value too large for defined data type
     */
    const EOVERFLOW = 75;

    /**
     * Operation not permitted
     */
    const EPERM = 1;

    /**
     * Protocol family not supported
     */
    const EPFNOSUPPORT = 96;

    /**
     * Broken pipe
     */
    const EPIPE = 32;

    /**
     * Protocol error
     */
    const EPROTO = 71;

    /**
     * Protocol not supported
     */
    const EPROTONOSUPPORT = 93;

    /**
     * Protocol wrong type for socket
     */
    const EPROTOTYPE = 91;

    /**
     * Math result not representable
     */
    const ERANGE = 34;

    /**
     * Remote address changed
     */
    const EREMCHG = 78;

    /**
     * Object is remote
     */
    const EREMOTE = 66;

    /**
     * Remote I/O error
     */
    const EREMOTEIO = 121;

    /**
     * Interrupted system call should be restarted
     */
    const ERESTART = 85;

    /**
     * Read-only file system
     */
    const EROFS = 30;

    /**
     * Cannot send after transport endpoint shutdown
     */
    const ESHUTDOWN = 108;

    /**
     * Socket type not supported
     */
    const ESOCKTNOSUPPORT = 94;

    /**
     * Illegal seek
     */
    const ESPIPE = 29;

    /**
     * No such process
     */
    const ESRCH = 3;

    /**
     * Srmount error
     */
    const ESRMNT = 69;

    /**
     * Stale NFS file handle
     */
    const ESTALE = 116;

    /**
     * Streams pipe error
     */
    const ESTRPIPE = 86;

    /**
     * Timer expired
     */
    const ETIME = 62;

    /**
     * Connection timed out
     */
    const ETIMEDOUT = 110;

    /**
     * Too many references: cannot splice
     */
    const ETOOMANYREFS = 109;

    /**
     * Text file busy
     */
    const ETXTBSY = 26;

    /**
     * Structure needs cleaning
     */
    const EUCLEAN = 117;

    /**
     * Protocol driver not attached
     */
    const EUNATCH = 49;

    /**
     * Too many users
     */
    const EUSERS = 87;

    /**
     * Operation would block
     */
    const EWOULDBLOCK = Error::EAGAIN;

    /**
     * Cross-device link
     */
    const EXDEV = 18;

    /**
     * Exchange full
     */
    const EXFULL = 54;
}
