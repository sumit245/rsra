# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\IO\Stream\ResponseStream.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\IO\Stream\ResponseStream.php`
- Type: PHP
- Size: 7085 bytes

## Summary (from docblocks)

Implement PSR Message Stream.

@var array

@var resource|null

@param resource $stream stream resource to wrap
@throws \InvalidArgumentException if the stream is not a stream resource

{@inheritDoc}
@noinspection PhpMissingReturnTypeInspection

Reads all data from the stream into a string, from the beginning to end.
This method MUST attempt to seek to the beginning of the stream before
reading data and read the stream until the end is reached.
Warning: This could attempt to load a large amount of data into memory.
This method MUST NOT raise an exception in order to conform with PHP's
string casting operations.
@see http://php.net/manual/en/language.oop5.magic.php#object.tostring

Seek to the beginning of the stream.
If the stream is not seekable, this method will raise an exception;
otherwise, it will perform a seek(0).
@throws \RuntimeException on failure
@see http://www.php.net/manual/en/function.fseek.php
@see seek()

Get the size of the stream if known.
@return int|null returns the size in bytes if known, or null if unknown

Returns true if the stream is at the end of the stream.

Returns whether or not the stream is seekable.

{@inheritDoc}

Returns whether or not the stream is writable.

{@inheritDoc}

Returns whether or not the stream is readable.

{@inheritDoc}

Returns the remaining contents in a string.
@throws \RuntimeException if unable to read or an error occurs while
                          reading

Closes the stream when the destructed.

Closes the stream and any underlying resources.
@psalm-suppress InvalidPropertyAssignmentValue

Separates any underlying resources from the stream.
After the stream has been detached, the stream is in an unusable state.
@return resource|null Underlying PHP stream, if any

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\IO\Stream\ResponseStream.php`

**Classes**:
- `PhpZip\IO\Stream\ResponseStream implements StreamInterface`

**Functions/Methods**:
- `__construct($stream)`
- `getMetadata($key = null)`
- `__toString()`
- `rewind()`
- `getSize()`
- `tell()`
- `eof()`
- `isSeekable()`
- `seek($offset, $whence = \SEEK_SET)`
- `isWritable()`
- `write($string)`
- `isReadable()`
- `read($length)`
- `getContents()`
- `__destruct()`
- `close()`
- `detach()`

