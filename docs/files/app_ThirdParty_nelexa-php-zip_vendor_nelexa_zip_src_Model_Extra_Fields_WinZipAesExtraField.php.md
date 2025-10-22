# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\WinZipAesExtraField.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\WinZipAesExtraField.php`
- Type: PHP
- Size: 10569 bytes

## Summary (from docblocks)

WinZip AES Extra Field.
@see http://www.winzip.com/win/en/aes_tips.htm AES Coding Tips for Developers

@var int Header id

@var int Data size (currently 7, but subject to possible increase
         in the future)

@var int The vendor ID field should always be set to the two ASCII
         characters "AE"

@var int Entries of this type do include the standard ZIP CRC-32 value.
         For use with {@see WinZipAesExtraField::setVendorVersion()}.

@var int Entries of this type do not include the standard ZIP CRC-32 value.
         For use with {@see WinZipAesExtraField::setVendorVersion().

@var int integer mode value indicating AES encryption 128-bit strength

@var int integer mode value indicating AES encryption 192-bit strength

@var int integer mode value indicating AES encryption 256-bit strength

@var int[]

@var array<int, int>

@var array<int, int>

@var int Integer version number specific to the zip vendor

@var int Integer mode value indicating AES encryption strength

@var int The actual compression method used to compress the file

@param int $vendorVersion     Integer version number specific to the zip vendor
@param int $keyStrength       Integer mode value indicating AES encryption strength
@param int $compressionMethod The actual compression method used to compress the file
@throws ZipUnsupportMethodException

@throws ZipUnsupportMethodException
@return WinZipAesExtraField

Returns the Header ID (type) of this Extra Field.
The Header ID is an unsigned short integer (two bytes)
which must be constant during the life cycle of this object.

Populate data from this array as if it was in local file data.
@param string    $buffer the buffer to read data from
@param ?ZipEntry $entry
@throws ZipException on error
@return WinZipAesExtraField

Populate data from this array as if it was in central directory data.
@param string    $buffer the buffer to read data from
@param ?ZipEntry $entry
@throws ZipException
@return WinZipAesExtraField

The actual data to put into local file data - without Header-ID
or length specifier.
@return string the data

The actual data to put into central directory - without Header-ID or
length specifier.
@return string the data

Returns the vendor version.
@see WinZipAesExtraField::VERSION_AE2
@see WinZipAesExtraField::VERSION_AE1

Sets the vendor version.
@param int $vendorVersion the vendor version
@see    WinZipAesExtraField::VERSION_AE2
@see    WinZipAesExtraField::VERSION_AE1

Returns vendor id.

Set key strength.

@throws ZipUnsupportMethodException

## References

**Database Tables (inferred)**
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\WinZipAesExtraField.php`

**Classes**:
- `PhpZip\Model\Extra\Fields\WinZipAesExtraField implements ZipExtraField`

**Functions/Methods**:
- `__construct(int $vendorVersion, int $keyStrength, int $compressionMethod)`
- `create(ZipEntry $entry)`
- `getHeaderId()`
- `unpackLocalFileData(string $buffer, ?ZipEntry $entry = null)`
- `unpackCentralDirData(string $buffer, ?ZipEntry $entry = null)`
- `packLocalFileData()`
- `packCentralDirData()`
- `getVendorVersion()`
- `setVendorVersion(int $vendorVersion)`
- `getVendorId()`
- `getKeyStrength()`
- `setKeyStrength(int $keyStrength)`
- `getCompressionMethod()`
- `setCompressionMethod(int $compressionMethod)`
- `getEncryptionStrength()`
- `getEncryptionMethod()`
- `isV1()`
- `isV2()`
- `getSaltSize()`
- `__toString()`

