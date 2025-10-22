# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Constants\ZipOptions.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Constants\ZipOptions.php`
- Type: PHP
- Size: 1894 bytes

## Summary (from docblocks)

Boolean option for store just file names (skip directory names).
@see ZipFile::addFromFinder()

Uses the specified compression method.
@see ZipFile::addFromFinder()
@see ZipFile::addSplFile()

Set the specified record modification time.
The value can be {@see \DateTimeInterface}, integer timestamp
or a string of any format.
@see ZipFile::addFromFinder()
@see ZipFile::addSplFile()

Specifies the encoding of the record name for cases when the UTF-8
usage flag is not set.
The most commonly used encodings are compiled into the constants
of the {@see DosCodePage} class.
@see ZipFile::openFile()
@see ZipFile::openFromString()
@see ZipFile::openFromStream()
@see ZipReader::getDefaultOptions()
@see DosCodePage::getCodePages()

Allows ({@see true}) or denies ({@see false}) unpacking unix symlinks.
This is a potentially dangerous operation for uncontrolled zip files.
By default is ({@see false}).
@see https://josipfranjkovic.blogspot.com/2014/12/reading-local-files-from-facebooks.html
