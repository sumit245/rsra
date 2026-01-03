# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\NonClosingStream.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\NonClosingStream.php`
- Type: PHP
- Size: 1381 bytes

## Summary (from docblocks)

This file is part of the ZBateson\StreamDecorators project.
@license http://opensource.org/licenses/bsd-license.php BSD

Doesn't close the underlying stream when 'close' is called on it.  Instead,
calling close simply removes any reference to the underlying stream.  Note
that GuzzleHttp\Psr7\Stream calls close in __destruct, so a reference to the
Stream needs to be kept.  For example:
```
$f = fopen('php://temp', 'r+');
$test = new NonClosingStream(Psr7\stream_for('test'));
// work
$test->close();
rewind($f);      // error, $f is a closed resource
```
Instead, this would work:
```
$stream = Psr7\stream_for(fopen('php://temp', 'r+'));
$test = new NonClosingStream($stream);
// work
$test->close();
$stream->rewind();  // works
```
@author Zaahid Bateson

Overridden to detach the underlying stream without closing it.

Overridden to detach the underlying stream without closing it.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\stream-decorators\src\NonClosingStream.php`

**Classes**:
- `ZBateson\StreamDecorators\NonClosingStream implements StreamInterface`

**Functions/Methods**:
- `close()`
- `detach()`

