# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Constants\GeneralPurposeBitFlag.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Constants\GeneralPurposeBitFlag.php`
- Type: PHP
- Size: 2246 bytes

## Summary (from docblocks)

General Purpose Bit Flag mask for encrypted data.
Bit 0: If set, indicates that the file is encrypted.

Compression Flag Bit 1 for method Deflating.
Bit 2  Bit 1
0      0    Normal compression
0      1    Maximum compression
1      0    Fast compression
1      1    Super Fast compression
@see GeneralPurposeBitFlag::COMPRESSION_FLAG2

Compression Flag Bit 2 for method Deflating.
Bit 2  Bit 1
0      0    Normal compression
0      1    Maximum compression
1      0    Fast compression
1      1    Super Fast compression
@see GeneralPurposeBitFlag::COMPRESSION_FLAG1

General Purpose Bit Flag mask for data descriptor.
Bit 3: If this bit is set, the fields crc-32, compressed
size and uncompressed size are set to zero in the
local header. The correct values are put in the data
descriptor immediately following the compressed data.

General Purpose Bit Flag mask for strong encryption.
Bit 6: Strong encryption.
If this bit is set, you MUST set the version needed to extract
value to at least 50 and you MUST also set bit 0.
If AES encryption is used, the version needed to extract value
MUST be at least 51.

General Purpose Bit Flag mask for UTF-8.
Bit 11: Language encoding flag (EFS).
If this bit is set, the filename and comment fields
for this file MUST be encoded using UTF-8. (see APPENDIX D)
