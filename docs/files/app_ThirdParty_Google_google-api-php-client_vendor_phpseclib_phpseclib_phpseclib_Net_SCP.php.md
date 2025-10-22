# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Net\SCP.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Net\SCP.php`
- Type: PHP
- Size: 9073 bytes

## Summary (from docblocks)

Pure-PHP implementation of SCP.
PHP version 5
The API for this library is modeled after the API from PHP's {@link http://php.net/book.ftp FTP extension}.
Here's a short example of how to use this library:
<code>
<?php
   include 'vendor/autoload.php';
   $ssh = new \phpseclib\Net\SSH2('www.domain.tld');
   if (!$ssh->login('username', 'password')) {
       exit('bad login');
   }
   $scp = new \phpseclib\Net\SCP($ssh);
   $scp->put('abcd', str_repeat('x', 1024*1024));
?>
</code>
@category  Net
@package   SCP
@author    Jim Wigginton <terrafrost@php.net>
@copyright 2010 Jim Wigginton
@license   http://www.opensource.org/licenses/mit-license.html  MIT License
@link      http://phpseclib.sourceforge.net

Pure-PHP implementations of SCP.
@package SCP
@author  Jim Wigginton <terrafrost@php.net>
@access  public

#@+
@access public
@see \phpseclib\Net\SCP::put()

Reads data from a local file.

Reads data from a string.

#@-

#@+
@access private
@see \phpseclib\Net\SCP::_send()
@see \phpseclib\Net\SCP::_receive()

SSH1 is being used.

SSH2 is being used.

#@-

SSH Object
@var object
@access private

Packet Size
@var int
@access private

Mode
@var int
@access private

Default Constructor.
Connects to an SSH server
@param \phpseclib\Net\SSH1|\phpseclib\Net\SSH2 $ssh
@return \phpseclib\Net\SCP
@access public

Uploads a file to the SCP server.
By default, \phpseclib\Net\SCP::put() does not read from the local filesystem.  $data is dumped directly into $remote_file.
So, for example, if you set $data to 'filename.ext' and then do \phpseclib\Net\SCP::get(), you will get a file, twelve bytes
long, containing 'filename.ext' as its contents.
Setting $mode to self::SOURCE_LOCAL_FILE will change the above behavior.  With self::SOURCE_LOCAL_FILE, $remote_file will
contain as many bytes as filename.ext does on your local filesystem.  If your filename.ext is 1MB then that is how
large $remote_file will be, as well.
Currently, only binary mode is supported.  As such, if the line endings need to be adjusted, you will need to take
care of that, yourself.
@param string $remote_file
@param string $data
@param int $mode
@param callable $callback
@return bool
@access public

Downloads a file from the SCP server.
Returns a string containing the contents of $remote_file if $local_file is left undefined or a boolean false if
the operation was unsuccessful.  If $local_file is defined, returns true or false depending on the success of the
operation
@param string $remote_file
@param string $local_file
@return mixed
@access public

Sends a packet to an SSH server
@param string $data
@access private

Receives a packet from an SSH server
@return string
@access private

Closes the connection to an SSH server
@access private

## References

**Database Tables (inferred)**
- `PHP`
- `a`
- `the`
- `return`
- `an`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Net\SCP.php`

**Classes**:
- `phpseclib\Net\SCP`

**Functions/Methods**:
- `__construct($ssh)`
- `put($remote_file, $data, $mode = self::SOURCE_STRING, $callback = null)`
- `get($remote_file, $local_file = false)`
- `_send($data)`
- `_receive()`
- `_close()`

