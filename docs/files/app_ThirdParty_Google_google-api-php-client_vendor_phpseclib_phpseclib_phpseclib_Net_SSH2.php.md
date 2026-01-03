# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Net\SSH2.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Net\SSH2.php`
- Type: PHP
- Size: 156506 bytes

## Summary (from docblocks)

Pure-PHP implementation of SSHv2.
PHP version 5
Here are some examples of how to use this library:
<code>
<?php
   include 'vendor/autoload.php';
   $ssh = new \phpseclib\Net\SSH2('www.domain.tld');
   if (!$ssh->login('username', 'password')) {
       exit('Login Failed');
   }
   echo $ssh->exec('pwd');
   echo $ssh->exec('ls -la');
?>
</code>
<code>
<?php
   include 'vendor/autoload.php';
   $key = new \phpseclib\Crypt\RSA();
   //$key->setPassword('whatever');
   $key->loadKey(file_get_contents('privatekey'));
   $ssh = new \phpseclib\Net\SSH2('www.domain.tld');
   if (!$ssh->login('username', $key)) {
       exit('Login Failed');
   }
   echo $ssh->read('username@username:~$');
   $ssh->write("ls -la\n");
   echo $ssh->read('username@username:~$');
?>
</code>
@category  Net
@package   SSH2
@author    Jim Wigginton <terrafrost@php.net>
@copyright 2007 Jim Wigginton
@license   http://www.opensource.org/licenses/mit-license.html  MIT License
@link      http://phpseclib.sourceforge.net

Pure-PHP implementation of SSHv2.
@package SSH2
@author  Jim Wigginton <terrafrost@php.net>
@access  public

#@+
Execution Bitmap Masks
@see \phpseclib\Net\SSH2::bitmap
@access private

#@-

#@+
Channel constants
RFC4254 refers not to client and server channels but rather to sender and recipient channels.  we don't refer
to them in that way because RFC4254 toggles the meaning. the client sends a SSH_MSG_CHANNEL_OPEN message with
a sender channel and the server sends a SSH_MSG_CHANNEL_OPEN_CONFIRMATION in response, with a sender and a
recepient channel.  at first glance, you might conclude that SSH_MSG_CHANNEL_OPEN_CONFIRMATION's sender channel
would be the same thing as SSH_MSG_CHANNEL_OPEN's sender channel, but it's not, per this snipet:
    The 'recipient channel' is the channel number given in the original
    open request, and 'sender channel' is the channel number allocated by
    the other side.
@see \phpseclib\Net\SSH2::_send_channel_packet()
@see \phpseclib\Net\SSH2::_get_channel_packet()
@access private

#@-

#@+
@access public
@see \phpseclib\Net\SSH2::getLog()

Returns the message numbers

Returns the message content

Outputs the content real-time

Dumps the content real-time to a file

Make sure that the log never gets larger than this

#@-

#@+
@access public
@see \phpseclib\Net\SSH2::read()

Returns when a string matching $expect exactly is found

Returns when a string matching the regular expression $expect is found

Returns when a string matching the regular expression $expect is found

#@-

The SSH identifier
@var string
@access private

The Socket Object
@var object
@access private

Execution Bitmap
The bits that are set represent functions that have been called already.  This is used to determine
if a requisite function has been successfully executed.  If not, an error should be thrown.
@var int
@access private

Error information
@see self::getErrors()
@see self::getLastError()
@var string
@access private

Server Identifier
@see self::getServerIdentification()
@var array|false
@access private

Key Exchange Algorithms
@see self::getKexAlgorithims()
@var array|false
@access private

Minimum Diffie-Hellman Group Bit Size in RFC 4419 Key Exchange Methods
@see self::_key_exchange()
@var int
@access private

Preferred Diffie-Hellman Group Bit Size in RFC 4419 Key Exchange Methods
@see self::_key_exchange()
@var int
@access private

Maximum Diffie-Hellman Group Bit Size in RFC 4419 Key Exchange Methods
@see self::_key_exchange()
@var int
@access private

Server Host Key Algorithms
@see self::getServerHostKeyAlgorithms()
@var array|false
@access private

Encryption Algorithms: Client to Server
@see self::getEncryptionAlgorithmsClient2Server()
@var array|false
@access private

Encryption Algorithms: Server to Client
@see self::getEncryptionAlgorithmsServer2Client()
@var array|false
@access private

MAC Algorithms: Client to Server
@see self::getMACAlgorithmsClient2Server()
@var array|false
@access private

MAC Algorithms: Server to Client
@see self::getMACAlgorithmsServer2Client()
@var array|false
@access private

Compression Algorithms: Client to Server
@see self::getCompressionAlgorithmsClient2Server()
@var array|false
@access private

Compression Algorithms: Server to Client
@see self::getCompressionAlgorithmsServer2Client()
@var array|false
@access private

Languages: Server to Client
@see self::getLanguagesServer2Client()
@var array|false
@access private

Languages: Client to Server
@see self::getLanguagesClient2Server()
@var array|false
@access private

Block Size for Server to Client Encryption
"Note that the length of the concatenation of 'packet_length',
 'padding_length', 'payload', and 'random padding' MUST be a multiple
 of the cipher block size or 8, whichever is larger.  This constraint
 MUST be enforced, even when using stream ciphers."
 -- http://tools.ietf.org/html/rfc4253#section-6
@see self::__construct()
@see self::_send_binary_packet()
@var int
@access private

Block Size for Client to Server Encryption
@see self::__construct()
@see self::_get_binary_packet()
@var int
@access private

Server to Client Encryption Object
@see self::_get_binary_packet()
@var object
@access private

Client to Server Encryption Object
@see self::_send_binary_packet()
@var object
@access private

Client to Server HMAC Object
@see self::_send_binary_packet()
@var object
@access private

Server to Client HMAC Object
@see self::_get_binary_packet()
@var object
@access private

Size of server to client HMAC
We need to know how big the HMAC will be for the server to client direction so that we know how many bytes to read.
For the client to server side, the HMAC object will make the HMAC as long as it needs to be.  All we need to do is
append it.
@see self::_get_binary_packet()
@var int
@access private

Server Public Host Key
@see self::getServerPublicHostKey()
@var string
@access private

Session identifier
"The exchange hash H from the first key exchange is additionally
 used as the session identifier, which is a unique identifier for
 this connection."
 -- http://tools.ietf.org/html/rfc4253#section-7.2
@see self::_key_exchange()
@var string
@access private

Exchange hash
The current exchange hash
@see self::_key_exchange()
@var string
@access private

Message Numbers
@see self::__construct()
@var array
@access private

Disconnection Message 'reason codes' defined in RFC4253
@see self::__construct()
@var array
@access private

SSH_MSG_CHANNEL_OPEN_FAILURE 'reason codes', defined in RFC4254
@see self::__construct()
@var array
@access private

Terminal Modes
@link http://tools.ietf.org/html/rfc4254#section-8
@see self::__construct()
@var array
@access private

SSH_MSG_CHANNEL_EXTENDED_DATA's data_type_codes
@link http://tools.ietf.org/html/rfc4254#section-5.2
@see self::__construct()
@var array
@access private

Send Sequence Number
See 'Section 6.4.  Data Integrity' of rfc4253 for more info.
@see self::_send_binary_packet()
@var int
@access private

Get Sequence Number
See 'Section 6.4.  Data Integrity' of rfc4253 for more info.
@see self::_get_binary_packet()
@var int
@access private

Server Channels
Maps client channels to server channels
@see self::_get_channel_packet()
@see self::exec()
@var array
@access private

Channel Buffers
If a client requests a packet from one channel but receives two packets from another those packets should
be placed in a buffer
@see self::_get_channel_packet()
@see self::exec()
@var array
@access private

Channel Status
Contains the type of the last sent message
@see self::_get_channel_packet()
@var array
@access private

Packet Size
Maximum packet size indexed by channel
@see self::_send_channel_packet()
@var array
@access private

Message Number Log
@see self::getLog()
@var array
@access private

Message Log
@see self::getLog()
@var array
@access private

The Window Size
Bytes the other party can send before it must wait for the window to be adjusted (0x7FFFFFFF = 2GB)
@var int
@see self::_send_channel_packet()
@see self::exec()
@access private

Window size, server to client
Window size indexed by channel
@see self::_send_channel_packet()
@var array
@access private

Window size, client to server
Window size indexed by channel
@see self::_get_channel_packet()
@var array
@access private

Server signature
Verified against $this->session_id
@see self::getServerPublicHostKey()
@var string
@access private

Server signature format
ssh-rsa or ssh-dss.
@see self::getServerPublicHostKey()
@var string
@access private

Interactive Buffer
@see self::read()
@var array
@access private

Current log size
Should never exceed self::LOG_MAX_SIZE
@see self::_send_binary_packet()
@see self::_get_binary_packet()
@var int
@access private

Timeout
@see self::setTimeout()
@access private

Current Timeout
@see self::_get_channel_packet()
@access private

Real-time log file pointer
@see self::_append_log()
@var resource
@access private

Real-time log file size
@see self::_append_log()
@var int
@access private

Has the signature been validated?
@see self::getServerPublicHostKey()
@var bool
@access private

Real-time log file wrap boolean
@see self::_append_log()
@access private

Flag to suppress stderr from output
@see self::enableQuietMode()
@access private

Time of first network activity
@var int
@access private

Exit status returned from ssh if any
@var int
@access private

Flag to request a PTY when using exec()
@var bool
@see self::enablePTY()
@access private

Flag set while exec() is running when using enablePTY()
@var bool
@access private

Flag set after startSubsystem() is called
@var bool
@access private

Contents of stdError
@var string
@access private

The Last Interactive Response
@see self::_keyboard_interactive_process()
@var string
@access private

Keyboard Interactive Request / Responses
@see self::_keyboard_interactive_process()
@var array
@access private

Banner Message
Quoting from the RFC, "in some jurisdictions, sending a warning message before
authentication may be relevant for getting legal protection."
@see self::_filter()
@see self::getBannerMessage()
@var string
@access private

Did read() timeout or return normally?
@see self::isTimeout()
@var bool
@access private

Log Boundary
@see self::_format_log()
@var string
@access private

Log Long Width
@see self::_format_log()
@var int
@access private

Log Short Width
@see self::_format_log()
@var int
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

Number of columns for terminal window size
@see self::getWindowColumns()
@see self::setWindowColumns()
@see self::setWindowSize()
@var int
@access private

Number of columns for terminal window size
@see self::getWindowRows()
@see self::setWindowRows()
@see self::setWindowSize()
@var int
@access private

Crypto Engine
@see self::setCryptoEngine()
@see self::_key_exchange()
@var int
@access private

A System_SSH_Agent for use in the SSH2 Agent Forwarding scenario
@var System_SSH_Agent
@access private

Send the identification string first?
@var bool
@access private

Send the key exchange initiation packet first?
@var bool
@access private

Some versions of OpenSSH incorrectly calculate the key size
@var bool
@access private

The selected decryption algorithm
@var string
@access private

Should we try to re-connect to re-establish keys?
@var bool
@access private

Binary Packet Buffer
@var string|false
@access private

Default Constructor.
$host can either be a string, representing the host, or a stream resource.
@param mixed $host
@param int $port
@param int $timeout
@see self::login()
@return \phpseclib\Net\SSH2
@access public

Set Crypto Engine Mode
Possible $engine values:
CRYPT_MODE_INTERNAL, CRYPT_MODE_MCRYPT
@param int $engine
@access public

Send Identification String First
https://tools.ietf.org/html/rfc4253#section-4.2 says "when the connection has been established,
both sides MUST send an identification string". It does not say which side sends it first. In
theory it shouldn't matter but it is a fact of life that some SSH servers are simply buggy
@access public

Send Identification String Last
https://tools.ietf.org/html/rfc4253#section-4.2 says "when the connection has been established,
both sides MUST send an identification string". It does not say which side sends it first. In
theory it shouldn't matter but it is a fact of life that some SSH servers are simply buggy
@access public

Send SSH_MSG_KEXINIT First
https://tools.ietf.org/html/rfc4253#section-7.1 says "key exchange begins by each sending
sending the [SSH_MSG_KEXINIT] packet". It does not say which side sends it first. In theory
it shouldn't matter but it is a fact of life that some SSH servers are simply buggy
@access public

Send SSH_MSG_KEXINIT Last
https://tools.ietf.org/html/rfc4253#section-7.1 says "key exchange begins by each sending
sending the [SSH_MSG_KEXINIT] packet". It does not say which side sends it first. In theory
it shouldn't matter but it is a fact of life that some SSH servers are simply buggy
@access public

Connect to an SSHv2 server
@return bool
@access private

Generates the SSH identifier
You should overwrite this method in your own class if you want to use another identifier
@access protected
@return string

Key Exchange
@param string $kexinit_payload_server optional
@access private

Maps an encryption algorithm name to the number of key bytes.
@param string $algorithm Name of the encryption algorithm
@return int|null Number of bytes as an integer or null for unknown
@access private

Maps an encryption algorithm name to an instance of a subclass of
\phpseclib\Crypt\Base.
@param string $algorithm Name of the encryption algorithm
@return mixed Instance of \phpseclib\Crypt\Base or null for unknown
@access private

Login
The $password parameter can be a plaintext password, a \phpseclib\Crypt\RSA object or an array
@param string $username
@param mixed $password
@param mixed $...
@return bool
@see self::_login()
@access public

Login Helper
@param string $username
@param mixed $password
@param mixed $...
@return bool
@see self::_login_helper()
@access private

Login Helper
@param string $username
@param string $password
@return bool
@access private
@internal It might be worthwhile, at some point, to protect against {@link http://tools.ietf.org/html/rfc4251#section-9.3.9 traffic analysis}
          by sending dummy SSH_MSG_IGNORE messages.

Login via keyboard-interactive authentication
See {@link http://tools.ietf.org/html/rfc4256 RFC4256} for details.  This is not a full-featured keyboard-interactive authenticator.
@param string $username
@param string $password
@return bool
@access private

Handle the keyboard-interactive requests / responses.
@param string $responses...
@return bool
@access private

Login with an ssh-agent provided key
@param string $username
@param \phpseclib\System\SSH\Agent $agent
@return bool
@access private

Login with an RSA private key
@param string $username
@param \phpseclib\Crypt\RSA $password
@return bool
@access private
@internal It might be worthwhile, at some point, to protect against {@link http://tools.ietf.org/html/rfc4251#section-9.3.9 traffic analysis}
          by sending dummy SSH_MSG_IGNORE messages.

Set Timeout
$ssh->exec('ping 127.0.0.1'); on a Linux host will never return and will run indefinitely.  setTimeout() makes it so it'll timeout.
Setting $timeout to false or 0 will mean there is no timeout.
@param mixed $timeout
@access public

Get the output from stdError
@access public

Execute Command
If $callback is set to false then \phpseclib\Net\SSH2::_get_channel_packet(self::CHANNEL_EXEC) will need to be called manually.
In all likelihood, this is not a feature you want to be taking advantage of.
@param string $command
@param Callback $callback
@return string
@access public

Creates an interactive shell
@see self::read()
@see self::write()
@return bool
@access private

Return the channel to be used with read() / write()
@see self::read()
@see self::write()
@return int
@access public

Return an available open channel
@return int
@access public

Returns the output of an interactive shell
Returns when there's a match for $expect, which can take the form of a string literal or,
if $mode == self::READ_REGEX, a regular expression.
@see self::write()
@param string $expect
@param int $mode
@return string
@access public

Inputs a command into an interactive shell.
@see self::read()
@param string $cmd
@return bool
@access public

Start a subsystem.
Right now only one subsystem at a time is supported. To support multiple subsystem's stopSubsystem() could accept
a string that contained the name of the subsystem, but at that point, only one subsystem of each type could be opened.
To support multiple subsystem's of the same name maybe it'd be best if startSubsystem() generated a new channel id and
returns that and then that that was passed into stopSubsystem() but that'll be saved for a future date and implemented
if there's sufficient demand for such a feature.
@see self::stopSubsystem()
@param string $subsystem
@return bool
@access public

Stops a subsystem.
@see self::startSubsystem()
@return bool
@access public

Closes a channel
If read() timed out you might want to just close the channel and have it auto-restart on the next read() call
@access public

Is timeout?
Did exec() or read() return because they timed out or because they encountered the end?
@access public

Disconnect
@access public

Destructor.
Will be called, automatically, if you're supporting just PHP5.  If you're supporting PHP4, you'll need to call
disconnect().
@access public

Is the connection still active?
@return bool
@access public

Have you successfully been logged in?
@return bool
@access public

Resets a connection for re-use
@param int $reason
@access private

Gets Binary Packets
See '6. Binary Packet Protocol' of rfc4253 for more info.
@see self::_send_binary_packet()
@return string
@access private

Filter Binary Packets
Because some binary packets need to be ignored...
@see self::_get_binary_packet()
@return string
@access private

Enable Quiet Mode
Suppress stderr from output
@access public

Disable Quiet Mode
Show stderr in output
@access public

Returns whether Quiet Mode is enabled or not
@see self::enableQuietMode()
@see self::disableQuietMode()
@access public
@return bool

Enable request-pty when using exec()
@access public

Disable request-pty when using exec()
@access public

Returns whether request-pty is enabled or not
@see self::enablePTY()
@see self::disablePTY()
@access public
@return bool

Gets channel data
Returns the data as a string if it's available and false if not.
@param $client_channel
@return mixed
@access private

Sends Binary Packets
See '6. Binary Packet Protocol' of rfc4253 for more info.
@param string $data
@param string $logged
@see self::_get_binary_packet()
@return bool
@access private

Logs data packets
Makes sure that only the last 1MB worth of packets will be logged
@param string $data
@access private

Sends channel data
Spans multiple SSH_MSG_CHANNEL_DATAs if appropriate
@param int $client_channel
@param string $data
@return bool
@access private

Closes and flushes a channel
\phpseclib\Net\SSH2 doesn't properly close most channels.  For exec() channels are normally closed by the server
and for SFTP channels are presumably closed when the client disconnects.  This functions is intended
for SCP more than anything.
@param int $client_channel
@param bool $want_reply
@return bool
@access private

Disconnect
@param int $reason
@return bool
@access private

String Shift
Inspired by array_shift
@param string $string
@param int $index
@return string
@access private

Define Array
Takes any number of arrays whose indices are integers and whose values are strings and defines a bunch of
named constants from it, using the value as the name of the constant and the index as the value of the constant.
If any of the constants that would be defined already exists, none of the constants will be defined.
@param array $array
@access private

Returns a log of the packets that have been sent and received.
Returns a string if NET_SSH2_LOGGING == self::LOG_COMPLEX, an array if NET_SSH2_LOGGING == self::LOG_SIMPLE and false if !defined('NET_SSH2_LOGGING')
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

Helper function for agent->_on_channel_open()
Used when channels are created to inform agent
of said channel opening. Must be called after
channel open confirmation received
@access private

Returns the first value of the intersection of two arrays or false if
the intersection is empty. The order is defined by the first parameter.
@param array $array1
@param array $array2
@return mixed False if intersection is empty, else intersected value.
@access private

Returns all errors
@return string[]
@access public

Returns the last error
@return string
@access public

Return the server identification.
@return string
@access public

Return a list of the key exchange algorithms the server supports.
@return array
@access public

Return a list of the host key (public key) algorithms the server supports.
@return array
@access public

Return a list of the (symmetric key) encryption algorithms the server supports, when receiving stuff from the client.
@return array
@access public

Return a list of the (symmetric key) encryption algorithms the server supports, when sending stuff to the client.
@return array
@access public

Return a list of the MAC algorithms the server supports, when receiving stuff from the client.
@return array
@access public

Return a list of the MAC algorithms the server supports, when sending stuff to the client.
@return array
@access public

Return a list of the compression algorithms the server supports, when receiving stuff from the client.
@return array
@access public

Return a list of the compression algorithms the server supports, when sending stuff to the client.
@return array
@access public

Return a list of the languages the server supports, when sending stuff to the client.
@return array
@access public

Return a list of the languages the server supports, when receiving stuff from the client.
@return array
@access public

Returns the banner message.
Quoting from the RFC, "in some jurisdictions, sending a warning message before
authentication may be relevant for getting legal protection."
@return string
@access public

Returns the server public host key.
Caching this the first time you connect to a server and checking the result on subsequent connections
is recommended.  Returns false if the server signature is not signed correctly with the public host key.
@return mixed
@access public

Returns the exit status of an SSH command or false.
@return false|int
@access public

Returns the number of columns for the terminal window size.
@return int
@access public

Returns the number of rows for the terminal window size.
@return int
@access public

Sets the number of columns for the terminal window size.
@param int $value
@access public

Sets the number of rows for the terminal window size.
@param int $value
@access public

Sets the number of columns and rows for the terminal window size.
@param int $columns
@param int $rows
@access public

## References

**Database Tables (inferred)**
- `the`
- `one`
- `another`
- `output`
- `ssh`
- `stdError`
- `socket`
- `packet_length`
- `all`
- `it`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Net\SSH2.php`

**Classes**:
- `phpseclib\Net\SSH2`
- `phpseclib\Net\if`

**Functions/Methods**:
- `__construct($host, $port = 22, $timeout = 10)`
- `setCryptoEngine($engine)`
- `sendIdentificationStringFirst()`
- `sendIdentificationStringLast()`
- `sendKEXINITFirst()`
- `sendKEXINITLast()`
- `_connect()`
- `_generate_identifier()`
- `_key_exchange($kexinit_payload_server = false)`
- `_encryption_algorithm_to_key_size($algorithm)`
- `_encryption_algorithm_to_crypt_instance($algorithm)`
- `_bad_algorithm_candidate($algorithm)`
- `login($username)`
- `_login($username)`
- `_login_helper($username, $password = null)`
- `_keyboard_interactive_login($username, $password)`
- `_keyboard_interactive_process()`
- `_ssh_agent_login($username, $agent)`
- `_privatekey_login($username, $privatekey)`
- `setTimeout($timeout)`
- `getStdError()`
- `exec($command, $callback = null)`
- `_initShell()`
- `_get_interactive_channel()`
- `_get_open_channel()`
- `read($expect = '', $mode = self::READ_SIMPLE)`
- `write($cmd)`
- `startSubsystem($subsystem)`
- `stopSubsystem()`
- `reset()`
- `isTimeout()`
- `disconnect()`
- `__destruct()`
- `isConnected()`
- `isAuthenticated()`
- `_reset_connection($reason)`
- `_get_binary_packet($skip_channel_filter = false)`
- `_filter($payload, $skip_channel_filter)`
- `enableQuietMode()`
- `disableQuietMode()`
- `isQuietModeEnabled()`
- `enablePTY()`
- `disablePTY()`
- `isPTYEnabled()`
- `_get_channel_packet($client_channel, $skip_extended = false)`
- `_send_binary_packet($data, $logged = null)`
- `_append_log($message_number, $message)`
- `_send_channel_packet($client_channel, $data)`
- `_close_channel($client_channel, $want_reply = false)`
- `_disconnect($reason)`
- `_string_shift(&$string, $index = 1)`
- `_define_array()`
- `getLog()`
- `_format_log($message_log, $message_number_log)`
- `_format_log_helper($matches)`
- `_on_channel_open()`
- `_array_intersect_first($array1, $array2)`
- `getErrors()`
- `getLastError()`
- `getServerIdentification()`
- `getKexAlgorithms()`
- `getServerHostKeyAlgorithms()`
- `getEncryptionAlgorithmsClient2Server()`
- `getEncryptionAlgorithmsServer2Client()`
- `getMACAlgorithmsClient2Server()`
- `getMACAlgorithmsServer2Client()`
- `getCompressionAlgorithmsClient2Server()`
- `getCompressionAlgorithmsServer2Client()`
- `getLanguagesServer2Client()`
- `getLanguagesClient2Server()`
- `getBannerMessage()`
- `getServerPublicHostKey()`
- `getExitStatus()`
- `getWindowColumns()`
- `getWindowRows()`
- `setWindowColumns($value)`
- `setWindowRows($value)`
- `setWindowSize($columns = 80, $rows = 24)`

