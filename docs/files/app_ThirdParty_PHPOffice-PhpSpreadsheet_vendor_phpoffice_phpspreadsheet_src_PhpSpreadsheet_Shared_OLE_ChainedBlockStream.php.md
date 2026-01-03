# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\OLE\ChainedBlockStream.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\OLE\ChainedBlockStream.php`
- Type: PHP
- Size: 5858 bytes

## Summary (from docblocks)

The OLE container of the file that is being read.
@var null|OLE

Parameters specified by fopen().
@var array

The binary data of the file.
@var string

The file pointer.
@var int byte offset

Implements support for fopen().
For creating streams using this wrapper, use OLE_PPS_File::getStream().
@param string $path resource name including scheme, e.g.
                                   ole-chainedblockstream://oleInstanceId=1
@param string $mode only "r" is supported
@param int $options mask of STREAM_REPORT_ERRORS and STREAM_USE_PATH
@param string $openedPath absolute path of the opened stream (out parameter)
@return bool true on success

Implements support for fclose().

Implements support for fread(), fgets() etc.
@param int $count maximum number of bytes to read
@return false|string

Implements support for feof().
@return bool TRUE if the file pointer is at EOF; otherwise FALSE

Returns the position of the file pointer, i.e. its offset into the file
stream. Implements support for ftell().
@return int

Implements support for fseek().
@param int $offset byte offset
@param int $whence SEEK_SET, SEEK_CUR or SEEK_END
@return bool

Implements support for fstat(). Currently the only supported field is
"size".
@return array

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\OLE\ChainedBlockStream.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\OLE\ChainedBlockStream`

**Functions/Methods**:
- `stream_open($path, $mode, $options, &$openedPath)`
- `stream_close()`
- `stream_read($count)`
- `stream_eof()`
- `stream_tell()`
- `stream_seek($offset, $whence)`
- `stream_stat()`

