# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Net\SFTP.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Net\SFTP.php`
- Type: PHP
- Size: 98209 bytes

## Summary (from docblocks)

Pure-PHP implementation of SFTP.
PHP version 5
Currently only supports SFTPv2 and v3, which, according to wikipedia.org, "is the most widely used version,
implemented by the popular OpenSSH SFTP server".  If you want SFTPv4/5/6 support, provide me with access
to an SFTPv4/5/6 server.
The API for this library is modeled after the API from PHP's {@link http://php.net/book.ftp FTP extension}.
Here's a short example of how to use this library:
<code>
<?php
   include 'vendor/autoload.php';
   $sftp = new \phpseclib\Net\SFTP('www.domain.tld');
   if (!$sftp->login('username', 'password')) {
       exit('Login Failed');
   }
   echo $sftp->pwd() . "\r\n";
   $sftp->put('filename.ext', 'hello, world!');
   print_r($sftp->nlist());
?>
</code>
@category  Net
@package   SFTP
@author    Jim Wigginton <terrafrost@php.net>
@copyright 2009 Jim Wigginton
@license   http://www.opensource.org/licenses/mit-license.html  MIT License
@link      http://phpseclib.sourceforge.net

Pure-PHP implementations of SFTP.
@package SFTP
@author  Jim Wigginton <terrafrost@php.net>
@access  public

SFTP channel constant
\phpseclib\Net\SSH2::exec() uses 0 and \phpseclib\Net\SSH2::read() / \phpseclib\Net\SSH2::write() use 1.
@see \phpseclib\Net\SSH2::_send_channel_packet()
@see \phpseclib\Net\SSH2::_get_channel_packet()
@access private

#@+
@access public
@see \phpseclib\Net\SFTP::put()

Reads data from a local file.

Reads data from a string.

Reads data from callback:
function callback($length) returns string to proceed, null for EOF

Resumes an upload

Append a local file to an already existing remote file

#@-

Packet Types
@see self::__construct()
@var array
@access private

Status Codes
@see self::__construct()
@var array
@access private

The Request ID
The request ID exists in the off chance that a packet is sent out-of-order.  Of course, this library doesn't support
concurrent actions, so it's somewhat academic, here.
@var int
@see self::_send_sftp_packet()
@access private

The Packet Type
The request ID exists in the off chance that a packet is sent out-of-order.  Of course, this library doesn't support
concurrent actions, so it's somewhat academic, here.
@var int
@see self::_get_sftp_packet()
@access private

Packet Buffer
@var string
@see self::_get_sftp_packet()
@access private

Extensions supported by the server
@var array
@see self::_initChannel()
@access private

Server SFTP version
@var int
@see self::_initChannel()
@access private

Current working directory
@var string
@see self::realpath()
@see self::chdir()
@access private

Packet Type Log
@see self::getLog()
@var array
@access private

Packet Log
@see self::getLog()
@var array
@access private

Error information
@see self::getSFTPErrors()
@see self::getLastSFTPError()
@var array
@access private

Stat Cache
Rather than always having to open a directory and close it immediately there after to see if a file is a directory
we'll cache the results.
@see self::_update_stat_cache()
@see self::_remove_from_stat_cache()
@see self::_query_stat_cache()
@var array
@access private

Max SFTP Packet Size
@see self::__construct()
@see self::get()
@var array
@access private

Stat Cache Flag
@see self::disableStatCache()
@see self::enableStatCache()
@var bool
@access private

Sort Options
@see self::_comparator()
@see self::setListOrder()
@var array
@access private

Canonicalization Flag
Determines whether or not paths should be canonicalized before being
passed on to the remote server.
@see self::enablePathCanonicalization()
@see self::disablePathCanonicalization()
@see self::realpath()
@var bool
@access private

Default Constructor.
Connects to an SFTP server
@param string $host
@param int $port
@param int $timeout
@return \phpseclib\Net\SFTP
@access public

Login
@param string $username
@param string $password
@return bool
@access public

Disable the stat cache
@access public

Enable the stat cache
@access public

Clear the stat cache
@access public

Enable path canonicalization
@access public

Enable path canonicalization
@access public

Returns the current directory name
@return mixed
@access public

Logs errors
@param string $response
@param int $status
@access public

Returns canonicalized absolute pathname
realpath() expands all symbolic links and resolves references to '/./', '/../' and extra '/' characters in the input
path and returns the canonicalized absolute pathname.
@param string $path
@return mixed
@access public

Canonicalize the Server-Side Path Name
SFTP doesn't provide a mechanism by which the current working directory can be changed, so we'll emulate it.  Returns
the absolute (canonicalized) path.
If canonicalize_paths has been disabled using disablePathCanonicalization(), $path is returned as-is.
@see self::chdir()
@see self::disablePathCanonicalization()
@param string $path
@return mixed
@access private

Changes the current directory
@param string $dir
@return bool
@access public

Returns a list of files in the given directory
@param string $dir
@param bool $recursive
@return mixed
@access public

Helper method for nlist
@param string $dir
@param bool $recursive
@param string $relativeDir
@return mixed
@access private

Returns a detailed list of files in the given directory
@param string $dir
@param bool $recursive
@return mixed
@access public

Reads a list, be it detailed or not, of files in the given directory
@param string $dir
@param bool $raw
@return mixed
@access private

Compares two rawlist entries using parameters set by setListOrder()
Intended for use with uasort()
@param array $a
@param array $b
@return int
@access private

Defines how nlist() and rawlist() will be sorted - if at all.
If sorting is enabled directories and files will be sorted independently with
directories appearing before files in the resultant array that is returned.
Any parameter returned by stat is a valid sort parameter for this function.
Filename comparisons are case insensitive.
Examples:
$sftp->setListOrder('filename', SORT_ASC);
$sftp->setListOrder('size', SORT_DESC, 'filename', SORT_ASC);
$sftp->setListOrder(true);
   Separates directories from files but doesn't do any sorting beyond that
$sftp->setListOrder();
   Don't do any sort of sorting
@access public

Returns the file size, in bytes, or false, on failure
Files larger than 4GB will show up as being exactly 4GB.
@param string $filename
@return mixed
@access public

Save files / directories to cache
@param string $path
@param mixed $value
@access private

Remove files / directories from cache
@param string $path
@return bool
@access private

Checks cache for path
Mainly used by file_exists
@param string $dir
@return mixed
@access private

Returns general information about a file.
Returns an array on success and false otherwise.
@param string $filename
@return mixed
@access public

Returns general information about a file or symbolic link.
Returns an array on success and false otherwise.
@param string $filename
@return mixed
@access public

Returns general information about a file or symbolic link
Determines information without calling \phpseclib\Net\SFTP::realpath().
The second parameter can be either NET_SFTP_STAT or NET_SFTP_LSTAT.
@param string $filename
@param int $type
@return mixed
@access private

Truncates a file to a given length
@param string $filename
@param int $new_size
@return bool
@access public

Sets access and modification time of file.
If the file does not exist, it will be created.
@param string $filename
@param int $time
@param int $atime
@return bool
@access public

Changes file or directory owner
Returns true on success or false on error.
@param string $filename
@param int $uid
@param bool $recursive
@return bool
@access public

Changes file or directory group
Returns true on success or false on error.
@param string $filename
@param int $gid
@param bool $recursive
@return bool
@access public

Set permissions on a file.
Returns the new file permissions on success or false on error.
If $recursive is true than this just returns true or false.
@param int $mode
@param string $filename
@param bool $recursive
@return mixed
@access public

Sets information about a file
@param string $filename
@param string $attr
@param bool $recursive
@return bool
@access private

Recursively sets information on directories on the SFTP server
Minimizes directory lookups and SSH_FXP_STATUS requests for speed.
@param string $path
@param string $attr
@param int $i
@return bool
@access private

Return the target of a symbolic link
@param string $link
@return mixed
@access public

Create a symlink
symlink() creates a symbolic link to the existing target with the specified name link.
@param string $target
@param string $link
@return bool
@access public

Creates a directory.
@param string $dir
@return bool
@access public

Helper function for directory creation
@param string $dir
@return bool
@access private

Removes a directory.
@param string $dir
@return bool
@access public

Uploads a file to the SFTP server.
By default, \phpseclib\Net\SFTP::put() does not read from the local filesystem.  $data is dumped directly into $remote_file.
So, for example, if you set $data to 'filename.ext' and then do \phpseclib\Net\SFTP::get(), you will get a file, twelve bytes
long, containing 'filename.ext' as its contents.
Setting $mode to self::SOURCE_LOCAL_FILE will change the above behavior.  With self::SOURCE_LOCAL_FILE, $remote_file will
contain as many bytes as filename.ext does on your local filesystem.  If your filename.ext is 1MB then that is how
large $remote_file will be, as well.
Setting $mode to self::SOURCE_CALLBACK will use $data as callback function, which gets only one parameter -- number of bytes to return, and returns a string if there is some data or null if there is no more data
If $data is a resource then it'll be used as a resource instead.
Currently, only binary mode is supported.  As such, if the line endings need to be adjusted, you will need to take
care of that, yourself.
$mode can take an additional two parameters - self::RESUME and self::RESUME_START. These are bitwise AND'd with
$mode. So if you want to resume upload of a 300mb file on the local file system you'd set $mode to the following:
self::SOURCE_LOCAL_FILE | self::RESUME
If you wanted to simply append the full contents of a local file to the full contents of a remote file you'd replace
self::RESUME with self::RESUME_START.
If $mode & (self::RESUME | self::RESUME_START) then self::RESUME_START will be assumed.
$start and $local_start give you more fine grained control over this process and take precident over self::RESUME
when they're non-negative. ie. $start could let you write at the end of a file (like self::RESUME) or in the middle
of one. $local_start could let you start your reading from the end of a file (like self::RESUME_START) or in the
middle of one.
Setting $local_start to > 0 or $mode | self::RESUME_START doesn't do anything unless $mode | self::SOURCE_LOCAL_FILE.
@param string $remote_file
@param string|resource $data
@param int $mode
@param int $start
@param int $local_start
@param callable|null $progressCallback
@return bool
@access public
@internal ASCII mode for SFTPv4/5/6 can be supported by adding a new function - \phpseclib\Net\SFTP::setMode().

Reads multiple successive SSH_FXP_WRITE responses
Sending an SSH_FXP_WRITE packet and immediately reading its response isn't as efficient as blindly sending out $i
SSH_FXP_WRITEs, in succession, and then reading $i responses.
@param int $i
@return bool
@access private

Close handle
@param string $handle
@return bool
@access private

Downloads a file from the SFTP server.
Returns a string containing the contents of $remote_file if $local_file is left undefined or a boolean false if
the operation was unsuccessful.  If $local_file is defined, returns true or false depending on the success of the
operation.
$offset and $length can be used to download files in chunks.
@param string $remote_file
@param string $local_file
@param int $offset
@param int $length
@return mixed
@access public

Deletes a file on the SFTP server.
@param string $path
@param bool $recursive
@return bool
@access public

Recursively deletes directories on the SFTP server
Minimizes directory lookups and SSH_FXP_STATUS requests for speed.
@param string $path
@param int $i
@return bool
@access private

Checks whether a file or directory exists
@param string $path
@return bool
@access public

Tells whether the filename is a directory
@param string $path
@return bool
@access public

Tells whether the filename is a regular file
@param string $path
@return bool
@access public

Tells whether the filename is a symbolic link
@param string $path
@return bool
@access public

Tells whether a file exists and is readable
@param string $path
@return bool
@access public

Tells whether the filename is writable
@param string $path
@return bool
@access public

Tells whether the filename is writeable
Alias of is_writable
@param string $path
@return bool
@access public

Gets last access time of file
@param string $path
@return mixed
@access public

Gets file modification time
@param string $path
@return mixed
@access public

Gets file permissions
@param string $path
@return mixed
@access public

Gets file owner
@param string $path
@return mixed
@access public

Gets file group
@param string $path
@return mixed
@access public

Gets file size
@param string $path
@return mixed
@access public

Gets file type
@param string $path
@return mixed
@access public

Return a stat properity
Uses cache if appropriate.
@param string $path
@param string $prop
@return mixed
@access private

Return an lstat properity
Uses cache if appropriate.
@param string $path
@param string $prop
@return mixed
@access private

Return a stat or lstat properity
Uses cache if appropriate.
@param string $path
@param string $prop
@return mixed
@access private

Renames a file or a directory on the SFTP server
@param string $oldname
@param string $newname
@return bool
@access public

Parse Attributes
See '7.  File Attributes' of draft-ietf-secsh-filexfer-13 for more info.
@param string $response
@return array
@access private

Attempt to identify the file type
Quoting the SFTP RFC, "Implementations MUST NOT send bits that are not defined" but they seem to anyway
@param int $mode
@return int
@access private

Parse Longname
SFTPv3 doesn't provide any easy way of identifying a file type.  You could try to open
a file as a directory and see if an error is returned or you could try to parse the
SFTPv3-specific longname field of the SSH_FXP_NAME packet.  That's what this function does.
The result is returned using the
{@link http://tools.ietf.org/html/draft-ietf-secsh-filexfer-04#section-5.2 SFTPv4 type constants}.
If the longname is in an unrecognized format bool(false) is returned.
@param string $longname
@return mixed
@access private

Sends SFTP Packets
See '6. General Packet Format' of draft-ietf-secsh-filexfer-13 for more info.
@param int $type
@param string $data
@see self::_get_sftp_packet()
@see self::_send_channel_packet()
@return bool
@access private

Receives SFTP Packets
See '6. General Packet Format' of draft-ietf-secsh-filexfer-13 for more info.
Incidentally, the number of SSH_MSG_CHANNEL_DATA messages has no bearing on the number of SFTP packets present.
There can be one SSH_MSG_CHANNEL_DATA messages containing two SFTP packets or there can be two SSH_MSG_CHANNEL_DATA
messages containing one SFTP packet.
@see self::_send_sftp_packet()
@return string
@access private

Returns a log of the packets that have been sent and received.
Returns a string if NET_SFTP_LOGGING == NET_SFTP_LOG_COMPLEX, an array if NET_SFTP_LOGGING == NET_SFTP_LOG_SIMPLE and false if !defined('NET_SFTP_LOGGING')
@access public
@return string or Array

Returns all errors
@return array
@access public

Returns the last error
@return string
@access public

Get supported SFTP versions
@return array
@access public

Disconnect
@param int $reason
@return bool
@access private

## References

**Database Tables (inferred)**
- `PHP`
- `a`
- `callback`
- `PuTTY`
- `files`
- `cache`
- `the`
- `http`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Net\SFTP.php`

**Classes**:
- `phpseclib\Net\SFTP extends SSH2`

**Functions/Methods**:
- `callback($length)`
- `__construct($host, $port = 22, $timeout = 10)`
- `login($username)`
- `disableStatCache()`
- `enableStatCache()`
- `clearStatCache()`
- `enablePathCanonicalization()`
- `disablePathCanonicalization()`
- `pwd()`
- `_logError($response, $status = -1)`
- `realpath($path)`
- `_realpath($path)`
- `chdir($dir)`
- `nlist($dir = '.', $recursive = false)`
- `_nlist_helper($dir, $recursive, $relativeDir)`
- `rawlist($dir = '.', $recursive = false)`
- `_list($dir, $raw = true)`
- `_comparator($a, $b)`
- `setListOrder()`
- `size($filename)`
- `_update_stat_cache($path, $value)`
- `_remove_from_stat_cache($path)`
- `_query_stat_cache($path)`
- `stat($filename)`
- `lstat($filename)`
- `_stat($filename, $type)`
- `truncate($filename, $new_size)`
- `touch($filename, $time = null, $atime = null)`
- `chown($filename, $uid, $recursive = false)`
- `chgrp($filename, $gid, $recursive = false)`
- `chmod($mode, $filename, $recursive = false)`
- `_setstat($filename, $attr, $recursive)`
- `_setstat_recursive($path, $attr, &$i)`
- `readlink($link)`
- `symlink($target, $link)`
- `mkdir($dir, $mode = -1, $recursive = false)`
- `_mkdir_helper($dir, $attr)`
- `rmdir($dir)`
- `put($remote_file, $data, $mode = self::SOURCE_STRING, $start = -1, $local_start = -1, $progressCallback = null)`
- `_read_put_responses($i)`
- `_close_handle($handle)`
- `get($remote_file, $local_file = false, $offset = 0, $length = -1)`
- `delete($path, $recursive = true)`
- `_delete_recursive($path, &$i)`
- `file_exists($path)`
- `is_dir($path)`
- `is_file($path)`
- `is_link($path)`
- `is_readable($path)`
- `is_writable($path)`
- `is_writeable($path)`
- `fileatime($path)`
- `filemtime($path)`
- `fileperms($path)`
- `fileowner($path)`
- `filegroup($path)`
- `filesize($path)`
- `filetype($path)`
- `_get_stat_cache_prop($path, $prop)`
- `_get_lstat_cache_prop($path, $prop)`
- `_get_xstat_cache_prop($path, $prop, $type)`
- `rename($oldname, $newname)`
- `_parseAttributes(&$response)`
- `_parseMode($mode)`
- `_parseLongname($longname)`
- `_send_sftp_packet($type, $data)`
- `_get_sftp_packet()`
- `getSFTPLog()`
- `getSFTPErrors()`
- `getLastSFTPError()`
- `getSupportedVersions()`
- `_disconnect($reason)`

