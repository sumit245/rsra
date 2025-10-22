# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\PartStreamFilterManager.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\PartStreamFilterManager.php`
- Type: PHP
- Size: 7856 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Manages attached stream filters for a MessagePart's content resource handle.

The attached stream filters are:
 o Content-Transfer-Encoding filter to manage decoding from a supported
   encoding: quoted-printable, base64 and x-uuencode.
 o Charset conversion filter to convert to UTF-8
@author Zaahid Bateson

@var StreamInterface the underlying content stream without filters
     applied

@var StreamInterface the content stream after attaching transfer encoding
     streams to $stream.

@var StreamInterface the content stream after attaching charset streams
     to $binaryStream

@var array map of the active encoding filter on the current handle.

@var array map of the active charset filter on the current handle.

@var StreamFactory used to apply psr7 stream decorators to the
     attached StreamInterface based on encoding.

Sets up filter names used for stream_filter_append

@param StreamFactory $streamFactory

Sets the URL used to open the content resource handle.

The function also closes the currently attached handle if any.

@param StreamInterface $stream

Returns true if the attached stream filter used for decoding the content
on the current handle is different from the one passed as an argument.

@param string $transferEncoding
@return boolean

Returns true if the attached stream filter used for charset conversion on
the current handle is different from the one needed based on the passed 
arguments.

@param string $fromCharset
@param string $toCharset
@return boolean

Attaches a decoding filter to the attached content handle, for the passed
$transferEncoding.

@param string $transferEncoding

Attaches a charset conversion filter to the attached content handle, for
the passed arguments.

@param string $fromCharset the character set the content is encoded in
@param string $toCharset the target encoding to return

Resets just the charset stream, and rewinds the decodedStream.

Resets cached encoding and charset streams, and rewinds the stream.

Checks what transfer-encoding decoder stream and charset conversion
stream are currently attached on the underlying stream, and resets them
if the requested arguments differ from the currently assigned ones.

@param string $transferEncoding
@param string $fromCharset the character set the content is encoded in
@param string $toCharset the target encoding to return
@return StreamInterface

Checks what transfer-encoding decoder stream is attached on the
underlying stream, and resets it if the requested arguments differ.
@param string $transferEncoding
@return StreamInterface

## References

**Database Tables (inferred)**
- `a`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Part\PartStreamFilterManager.php`

**Classes**:
- `ZBateson\MailMimeParser\Message\Part\PartStreamFilterManager`

**Functions/Methods**:
- `__construct(StreamFactory $streamFactory)`
- `setStream(StreamInterface $stream = null)`
- `isTransferEncodingFilterChanged($transferEncoding)`
- `isCharsetFilterChanged($fromCharset, $toCharset)`
- `attachTransferEncodingFilter($transferEncoding)`
- `attachCharsetFilter($fromCharset, $toCharset)`
- `resetCharsetStream()`
- `reset()`
- `getContentStream($transferEncoding, $fromCharset, $toCharset)`
- `getBinaryStream($transferEncoding)`

