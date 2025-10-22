# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Constants\ZipConstants.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Constants\ZipConstants.php`
- Type: PHP
- Size: 3416 bytes

## Summary (from docblocks)

Zip Constants.

@var int End Of Central Directory Record signature.

@var int Zip64 End Of Central Directory Record.

@var int Zip64 End Of Central Directory Locator.

@var int Central File Header signature.

@var int Local File Header signature.

@var int Data Descriptor signature.

@var int value stored in four-byte size and similar fields
         if ZIP64 extensions are used

Local File Header signature      4
Version Needed To Extract        2
General Purpose Bit Flags        2
Compression Method               2
Last Mod File Time               2
Last Mod File Date               2
CRC-32                           4
Compressed Size                  4
Uncompressed Size                4.
@var int Local File Header filename position

The minimum length of the Local File Header record.
local file header signature      4
version needed to extract        2
general purpose bit flag         2
compression method               2
last mod file time               2
last mod file date               2
crc-32                           4
compressed size                  4
uncompressed size                4
file name length                 2
extra field length               2

@var int the length of the Zip64 End Of Central Directory Locator

@var int the minimum length of the End Of Central Directory Record

The minimum length of the Zip64 End Of Central Directory Record.
zip64 end of central dir
signature                        4
size of zip64 end of central
directory record                 8
version made by                  2
version needed to extract        2
number of this disk              4
number of the disk with the
start of the central directory   4
total number of entries in the
central directory on this disk   8
total number of entries in
the central directory            8
size of the central directory    8
offset of start of central
directory with respect to
the starting disk number         8
@var int ZIP64 End Of Central Directory length
