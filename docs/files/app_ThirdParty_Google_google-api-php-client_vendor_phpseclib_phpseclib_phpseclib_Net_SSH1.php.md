# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Net\SSH1.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Net\SSH1.php`
- Type: PHP
- Size: 52572 bytes

## Summary (from docblocks)

Pure-PHP implementation of SSHv1.
PHP version 5
Here's a short example of how to use this library:
<code>
<?php
   include 'vendor/autoload.php';
   $ssh = new \phpseclib\Net\SSH1('www.domain.tld');
   if (!$ssh->login('username', 'password')) {
       exit('Login Failed');
   }
   echo $ssh->exec('ls -la');
?>
</code>
Here's another short example:
<code>
<?php
   include 'vendor/autoload.php';
   $ssh = new \phpseclib\Net\SSH1('www.domain.tld');
   if (!$ssh->login('username', 'password')) {
       exit('Login Failed');
   }
   echo $ssh->read('username@username:~$');
   $ssh->write("ls -la\n");
   echo $ssh->read('username@username:~$');
?>
</code>
More information on the SSHv1 specification can be found by reading
{@link http://www.snailbook.com/docs/protocol-1.5.txt protocol-1.5.txt}.
@category  Net
@package   SSH1
@author    Jim Wigginton <terrafrost@php.net>
@copyright 2007 Jim Wigginton
@license   http://www.opensource.org/licenses/mit-license.html  MIT License
@link      http://phpseclib.sourceforge.net

Pure-PHP implementation of SSHv1.
@package SSH1
@author  Jim Wigginton <terrafrost@php.net>
@access  public

#@+
Encryption Methods
@see \phpseclib\Net\SSH1::getSupportedCiphers()
@access public

No encryption
Not supported.

IDEA in CFB mode
Not supported.

DES in CBC mode

Triple-DES in CBC mode
All implementations are required to support this

TRI's Simple Stream encryption CBC
Not supported nor is it defined in the official SSH1 specs.  OpenSSH, however, does define it (see cipher.h),
although it doesn't use it (see cipher.c)

RC4
Not supported.
@internal According to the SSH1 specs:
       "The first 16 bytes of the session key are used as the key for
        the server to client direction.  The remaining 16 bytes are used
        as the key for the client to server direction.  This gives
        independent 128-bit keys for each direction."
    This library currently only supports encryption when the same key is being used for both directions.  This is
    because there's only one $crypto object.  Two could be added ($encrypt and $decrypt, perhaps).

Blowfish
Not supported nor is it defined in the official SSH1 specs.  OpenSSH, however, defines it (see cipher.h) and
uses it (see cipher.c)

#@-

#@+
Authentication Methods
@see \phpseclib\Net\SSH1::getSupportedAuthentications()
@access public

.rhosts or /etc/hosts.equiv

pure RSA authentication

password authentication
This is the only method that is supported by this library.

.rhosts with RSA host authentication

#@-

#@+
Terminal Modes
@link http://3sp.com/content/developer/maverick-net/docs/Maverick.SSH.PseudoTerminalModesMembers.html
@access private

#@-

The Response Type
@see \phpseclib\Net\SSH1::_get_binary_packet()
@access private

The Response Data
@see \phpseclib\Net\SSH1::_get_binary_packet()
@access private

#@+
Execution Bitmap Masks
@see \phpseclib\Net\SSH1::bitmap
@access private

#@-

#@+
@access public
@see \phpseclib\Net\SSH1::getLog()

Returns the message numbers

Returns the message content

Outputs the content real-time

Dumps the content real-time to a file

#@-

#@+
@access public
@see \phpseclib\Net\SSH1::read()

Returns when a string matching $expect exactly is found

Returns when a string matching the regular expression $expect is found

#@-

The SSH identifier
@var string
@access private

The Socket Object
@var object
@access private

The cryptography object
@var object
@access private

Execution Bitmap
The bits that are set represent functions that have been called already.  This is used to determine
if a requisite function has been successfully executed.  If not, an error should be thrown.
@var int
@access private

The Server Key Public Exponent
Logged for debug purposes
@see self::getServerKeyPublicExponent()
@var string
@access private

The Server Key Public Modulus
Logged for debug purposes
@see self::getServerKeyPublicModulus()
@var string
@access private

The Host Key Public Exponent
Logged for debug purposes
@see self::getHostKeyPublicExponent()
@var string
@access private

The Host Key Public Modulus
Logged for debug purposes
@see self::getHostKeyPublicModulus()
@var string
@access private

Supported Ciphers
Logged for debug purposes
@see self::getSupportedCiphers()
@var array
@access private

Supported Authentications
Logged for debug purposes
@see self::getSupportedAuthentications()
@var array
@access private

Server Identification
@see self::getServerIdentification()
@var string
@access private

Protocol Flags
@see self::__construct()
@var array
@access private

Protocol Flag Log
@see self::getLog()
@var array
@access private

Message Log
@see self::getLog()
@var array
@access private

Real-time log file pointer
@see self::_append_log()
@var resource
@access private

Real-time log file size
@see self::_append_log()
@var int
@access private

Real-time log file wrap boolean
@see self::_append_log()
@var bool
@access private

Interactive Buffer
@see self::read()
@var array
@access private

Timeout
@see self::setTimeout()
@access private

Current Timeout
@see self::_get_channel_packet()
@access private

Log Boundary
@see self::_format_log()
@access private

Log Long Width
@see self::_format_log()
@access private

Log Short Width
@see self::_format_log()
@access private

Hostname
@see self::__construct()
@see self::_connect()
@var string
@access private

Port Number
@see self::__construct()
@see self::_connect()
@var int
@access private

Timeout for initial connection
Set by the constructor call. Calling setTimeout() is optional. If it's not called functions like
exec() won't timeout unless some PHP setting forces it too. The timeout specified in the constructor,
however, is non-optional. There will be a timeout, whether or not you set it. If you don't it'll be
10 seconds. It is used by fsockopen() in that function.
@see self::__construct()
@see self::_connect()
@var int
@access private

Default cipher
@see self::__construct()
@see self::_connect()
@var int
@access private

Default Constructor.
Connects to an SSHv1 server
@param string $host
@param int $port
@param int $timeout
@param int $cipher
@return \phpseclib\Net\SSH1
@access public

Connect to an SSHv1 server
@return bool
@access private

Login
@param string $username
@param string $password
@return bool
@access public

Set Timeout
$ssh->exec('ping 127.0.0.1'); on a Linux host will never return and will run indefinitely.  setTimeout() makes it so it'll timeout.
Setting $timeout to false or 0 will mean there is no timeout.
@param mixed $timeout

Executes a command on a non-interactive shell, returns the output, and quits.
An SSH1 server will close the connection after a command has been executed on a non-interactive shell.  SSH2
servers don't, however, this isn't an SSH2 client.  The way this works, on the server, is by initiating a
shell with the -s option, as discussed in the following links:
{@link http://www.faqs.org/docs/bashman/bashref_65.html http://www.faqs.org/docs/bashman/bashref_65.html}
{@link http://www.faqs.org/docs/bashman/bashref_62.html http://www.faqs.org/docs/bashman/bashref_62.html}
To execute further commands, a new \phpseclib\Net\SSH1 object will need to be created.
Returns false on failure and the output, otherwise.
@see self::interactiveRead()
@see self::interactiveWrite()
@param string $cmd
@return mixed
@access public

Creates an interactive shell
@see self::interactiveRead()
@see self::interactiveWrite()
@return bool
@access private

Inputs a command into an interactive shell.
@see self::interactiveWrite()
@param string $cmd
@return bool
@access public

Returns the output of an interactive shell when there's a match for $expect
$expect can take the form of a string literal or, if $mode == self::READ_REGEX,
a regular expression.
@see self::write()
@param string $expect
@param int $mode
@return bool
@access public

Inputs a command into an interactive shell.
@see self::interactiveRead()
@param string $cmd
@return bool
@access public

Returns the output of an interactive shell when no more output is available.
Requires PHP 4.3.0 or later due to the use of the stream_select() function.  If you see stuff like
"^[[00m", you're seeing ANSI escape codes.  According to
{@link http://support.microsoft.com/kb/101875 How to Enable ANSI.SYS in a Command Window}, "Windows NT
does not support ANSI escape sequences in Win32 Console applications", so if you're a Windows user,
there's not going to be much recourse.
@see self::interactiveRead()
@return string
@access public

Disconnect
@access public

Destructor.
Will be called, automatically, if you're supporting just PHP5.  If you're supporting PHP4, you'll need to call
disconnect().
@access public

Disconnect
@param string $msg
@access private

Gets Binary Packets
See 'The Binary Packet Protocol' of protocol-1.5.txt for more info.
Also, this function could be improved upon by adding detection for the following exploit:
http://www.securiteam.com/securitynews/5LP042K3FY.html
@see self::_send_binary_packet()
@return array
@access private

Sends Binary Packets
Returns true on success, false on failure.
@see self::_get_binary_packet()
@param string $data
@return bool
@access private

Cyclic Redundancy Check (CRC)
PHP's crc32 function is implemented slightly differently than the one that SSH v1 uses, so
we've reimplemented it. A more detailed discussion of the differences can be found after
$crc_lookup_table's initialization.
@see self::_get_binary_packet()
@see self::_send_binary_packet()
@param string $data
@return int
@access private

String Shift
Inspired by array_shift
@param string $string
@param int $index
@return string
@access private

RSA Encrypt
Returns mod(pow($m, $e), $n), where $n should be the product of two (large) primes $p and $q and where $e
should be a number with the property that gcd($e, ($p - 1) * ($q - 1)) == 1.  Could just make anything that
calls this call modexp, instead, but I think this makes things clearer, maybe...
@see self::__construct()
@param BigInteger $m
@param array $key
@return BigInteger
@access private

Define Array
Takes any number of arrays whose indices are integers and whose values are strings and defines a bunch of
named constants from it, using the value as the name of the constant and the index as the value of the constant.
If any of the constants that would be defined already exists, none of the constants will be defined.
@param array $array
@access private

Returns a log of the packets that have been sent and received.
Returns a string if NET_SSH1_LOGGING == self::LOG_COMPLEX, an array if NET_SSH1_LOGGING == self::LOG_SIMPLE and false if !defined('NET_SSH1_LOGGING')
@access public
@return array|false|string

Formats a log for printing
@param array $message_log
@param array $message_number_log
@access private
@return string

Helper function for _format_log
For use with preg_replace_callback()
@param array $matches
@access private
@return string

Return the server key public exponent
Returns, by default, the base-10 representation.  If $raw_output is set to true, returns, instead,
the raw bytes.  This behavior is similar to PHP's md5() function.
@param bool $raw_output
@return string
@access public

Return the server key public modulus
Returns, by default, the base-10 representation.  If $raw_output is set to true, returns, instead,
the raw bytes.  This behavior is similar to PHP's md5() function.
@param bool $raw_output
@return string
@access public

Return the host key public exponent
Returns, by default, the base-10 representation.  If $raw_output is set to true, returns, instead,
the raw bytes.  This behavior is similar to PHP's md5() function.
@param bool $raw_output
@return string
@access public

Return the host key public modulus
Returns, by default, the base-10 representation.  If $raw_output is set to true, returns, instead,
the raw bytes.  This behavior is similar to PHP's md5() function.
@param bool $raw_output
@return string
@access public

Return a list of ciphers supported by SSH1 server.
Just because a cipher is supported by an SSH1 server doesn't mean it's supported by this library. If $raw_output
is set to true, returns, instead, an array of constants.  ie. instead of array('Triple-DES in CBC mode'), you'll
get array(self::CIPHER_3DES).
@param bool $raw_output
@return array
@access public

Return a list of authentications supported by SSH1 server.
Just because a cipher is supported by an SSH1 server doesn't mean it's supported by this library. If $raw_output
is set to true, returns, instead, an array of constants.  ie. instead of array('password authentication'), you'll
get array(self::AUTH_PASSWORD).
@param bool $raw_output
@return array
@access public

Return the server identification.
@return string
@access public

Logs data packets
Makes sure that only the last 1MB worth of packets will be logged
@param string $data
@access private

## References

**Database Tables (inferred)**
- `the`
- `server`
- `protocol`
- `it`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Net\SSH1.php`

**Classes**:
- `phpseclib\Net\SSH1`

**Functions/Methods**:
- `__construct($host, $port = 22, $timeout = 10, $cipher = self::CIPHER_3DES)`
- `_connect()`
- `login($username, $password = '')`
- `setTimeout($timeout)`
- `exec($cmd, $block = true)`
- `_initShell()`
- `write($cmd)`
- `read($expect, $mode = self::READ_SIMPLE)`
- `interactiveWrite($cmd)`
- `interactiveRead()`
- `disconnect()`
- `__destruct()`
- `_disconnect($msg = 'Client Quit')`
- `_get_binary_packet()`
- `_send_binary_packet($data)`
- `_crc($data)`
- `_string_shift(&$string, $index = 1)`
- `_rsa_crypt($m, $key)`
- `_define_array()`
- `getLog()`
- `_format_log($message_log, $message_number_log)`
- `_format_log_helper($matches)`
- `getServerKeyPublicExponent($raw_output = false)`
- `getServerKeyPublicModulus($raw_output = false)`
- `getHostKeyPublicExponent($raw_output = false)`
- `getHostKeyPublicModulus($raw_output = false)`
- `getSupportedCiphers($raw_output = false)`
- `getSupportedAuthentications($raw_output = false)`
- `getServerIdentification()`
- `_append_log($protocol_flags, $message)`

