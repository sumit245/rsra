# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\StreamHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\StreamHandler.php`
- Type: PHP
- Size: 5203 bytes

## Summary (from docblocks)

Stores to any stream resource
Can be used to store into php://stderr, remote and local files, etc.
@author Jordi Boggiano <j.boggiano@seld.be>

@param resource|string $stream
@param int             $level          The minimum logging level at which this handler will be triggered
@param Boolean         $bubble         Whether the messages that are handled can bubble up the stack or not
@param int|null        $filePermission Optional file permissions (default (0644) are only for owner read/write)
@param Boolean         $useLocking     Try to lock log file before doing any writes
@throws \Exception                If a missing directory is not buildable
@throws \InvalidArgumentException If stream is not a resource or string

{@inheritdoc}

Return the currently active stream if it is open
@return resource|null

Return the stream URL if it was configured with a URL and not an active resource
@return string|null

{@inheritdoc}

Write to stream
@param resource $stream
@param array $record

@param string $stream
@return null|string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\StreamHandler.php`

**Classes**:
- `Monolog\Handler\StreamHandler extends AbstractProcessingHandler`

**Functions/Methods**:
- `__construct($stream, $level = Logger::DEBUG, $bubble = true, $filePermission = null, $useLocking = false)`
- `close()`
- `getStream()`
- `getUrl()`
- `write(array $record)`
- `streamWrite($stream, array $record)`
- `customErrorHandler($code, $msg)`
- `getDirFromStream($stream)`
- `createDir()`

