# app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\StreamDecoratorTrait.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\StreamDecoratorTrait.php`
- Type: PHP
- Size: 3275 bytes

## Summary (from docblocks)

Stream decorator trait
@property StreamInterface stream

@param StreamInterface $stream Stream to decorate

Magic method used to create a new stream if streams are not added in
the constructor of a decorator (e.g., LazyOpenStream).
@param string $name Name of the property (allows "stream" only).
@return StreamInterface

Allow decorators to implement custom methods
@param string $method Missing method name
@param array  $args   Method arguments
@return mixed

Implement in subclasses to dynamically create streams when requested.
@return StreamInterface
@throws \BadMethodCallException

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\guzzlehttp\psr7\src\StreamDecoratorTrait.php`

**Functions/Methods**:
- `__construct(StreamInterface $stream)`
- `__get($name)`
- `__toString()`
- `getContents()`
- `__call($method, array $args)`
- `close()`
- `getMetadata($key = null)`
- `detach()`
- `getSize()`
- `eof()`
- `tell()`
- `isReadable()`
- `isWritable()`
- `isSeekable()`
- `rewind()`
- `seek($offset, $whence = SEEK_SET)`
- `read($length)`
- `write($string)`
- `createStream()`

