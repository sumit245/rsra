# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SocketHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SocketHandler.php`
- Type: PHP
- Size: 8884 bytes

## Summary (from docblocks)

Stores to any socket - uses fsockopen() or pfsockopen().
@author Pablo de Leon Belloc <pablolb@gmail.com>
@see    http://php.net/manual/en/function.fsockopen.php

@param string  $connectionString Socket connection string
@param int     $level            The minimum logging level at which this handler will be triggered
@param Boolean $bubble           Whether the messages that are handled can bubble up the stack or not

Connect (if necessary) and write to the socket
@param array $record
@throws \UnexpectedValueException
@throws \RuntimeException

We will not close a PersistentSocket instance so it can be reused in other requests.

Close socket, if open

Set socket connection to nbe persistent. It only has effect before the connection is initiated.
@param bool $persistent

Set connection timeout.  Only has effect before we connect.
@param float $seconds
@see http://php.net/manual/en/function.fsockopen.php

Set write timeout. Only has effect before we connect.
@param float $seconds
@see http://php.net/manual/en/function.stream-set-timeout.php

Set writing timeout. Only has effect during connection in the writing cycle.
@param float $seconds 0 for no timeout

Get current connection string
@return string

Get persistent setting
@return bool

Get current connection timeout setting
@return float

Get current in-transfer timeout
@return float

Get current local writing timeout
@return float

Check to see if the socket is currently available.
UDP might appear to be connected but might fail when writing.  See http://php.net/fsockopen for details.
@return bool

Wrapper to allow mocking

Wrapper to allow mocking

Wrapper to allow mocking
@see http://php.net/manual/en/function.stream-set-timeout.php

Wrapper to allow mocking

Wrapper to allow mocking

@return resource|null

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SocketHandler.php`

**Classes**:
- `Monolog\Handler\SocketHandler extends AbstractProcessingHandler`

**Functions/Methods**:
- `__construct($connectionString, $level = Logger::DEBUG, $bubble = true)`
- `write(array $record)`
- `close()`
- `closeSocket()`
- `setPersistent($persistent)`
- `setConnectionTimeout($seconds)`
- `setTimeout($seconds)`
- `setWritingTimeout($seconds)`
- `getConnectionString()`
- `isPersistent()`
- `getConnectionTimeout()`
- `getTimeout()`
- `getWritingTimeout()`
- `isConnected()`
- `pfsockopen()`
- `fsockopen()`
- `streamSetTimeout()`
- `fwrite($data)`
- `streamGetMetadata()`
- `validateTimeout($value)`
- `connectIfNotConnected()`
- `generateDataStream($record)`
- `getResource()`
- `connect()`
- `createSocketResource()`
- `setSocketTimeout()`
- `writeToSocket($data)`
- `writingIsTimedOut($sent)`

