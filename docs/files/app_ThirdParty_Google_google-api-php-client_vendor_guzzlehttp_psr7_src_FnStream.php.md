# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\FnStream.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\FnStream.php`
- Type: PHP
- Size: 3660 bytes

## Summary (from docblocks)

Compose stream implementations based on a hash of functions.
Allows for easy testing and extension of a provided stream without needing
to create a concrete class for a simple extension point.

@var array

@var array Methods that must be implemented in the given array

@param array $methods Hash of method name to a callable.

Lazily determine which methods are not implemented.
@throws \BadMethodCallException

The close method is called on the underlying stream only if possible.

Adds custom functionality to an underlying stream by intercepting
specific method calls.
@param StreamInterface $stream  Stream to decorate
@param array           $methods Hash of method name to a closure
@return FnStream

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\psr7\src\FnStream.php`

**Classes**:
- `GuzzleHttp\Psr7\for`
- `GuzzleHttp\Psr7\FnStream implements StreamInterface`
- `GuzzleHttp\Psr7\foreach`

**Functions/Methods**:
- `__construct(array $methods)`
- `__get($name)`
- `__destruct()`
- `decorate(StreamInterface $stream, array $methods)`
- `__toString()`
- `close()`
- `detach()`
- `getSize()`
- `tell()`
- `eof()`
- `isSeekable()`
- `rewind()`
- `seek($offset, $whence = SEEK_SET)`
- `isWritable()`
- `write($string)`
- `isReadable()`
- `read($length)`
- `getContents()`
- `getMetadata($key = null)`

