# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\AsiExtraField.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\AsiExtraField.php`
- Type: PHP
- Size: 7858 bytes

## Summary (from docblocks)

ASi Unix Extra Field:
====================.
The following is the layout of the ASi extra block for Unix.  The
local-header and central-header versions are identical.
(Last Revision 19960916)
Value         Size        Description
-----         ----        -----------
(Unix3) 0x756e        Short       tag for this extra block type ("nu")
TSize         Short       total data size for this block
CRC           Long        CRC-32 of the remaining data
Mode          Short       file permissions
SizDev        Long        symlink'd size OR major/minor dev num
UID           Short       user ID
GID           Short       group ID
(var.)        variable    symbolic link filename
Mode is the standard Unix st_mode field from struct stat, containing
user/group/other permissions, setuid/setgid and symlink info, etc.
If Mode indicates that this file is a symbolic link, SizDev is the
size of the file to which the link points.  Otherwise, if the file
is a device, SizDev contains the standard Unix st_rdev field from
struct stat (includes the major and minor numbers of the device).
SizDev is undefined in other cases.
If Mode indicates that the file is a symbolic link, the final field
will be the name of the file to which the link points.  The file-
name length can be inferred from TSize.
[Note that TSize may incorrectly refer to the data size not counting
the CRC; i.e., it may be four bytes too small.]
@see ftp://ftp.info-zip.org/pub/infozip/doc/appnote-iz-latest.zip Info-ZIP version Specification

@var int Header id

Bits used for permissions (and sticky bit).

@var int Standard Unix stat(2) file mode.

@var int User ID.

@var int Group ID.

@var string File this entry points to, if it is a symbolic link.
            Empty string - if entry is not a symbolic link.

Returns the Header ID (type) of this Extra Field.
The Header ID is an unsigned short integer (two bytes)
which must be constant during the life cycle of this object.

Populate data from this array as if it was in local file data.
@param string        $buffer the buffer to read data from
@param ZipEntry|null $entry  optional zip entry
@throws Crc32Exception
@return AsiExtraField

Populate data from this array as if it was in central directory data.
@param string        $buffer the buffer to read data from
@param ZipEntry|null $entry  optional zip entry
@throws Crc32Exception
@return AsiExtraField

The actual data to put into local file data - without Header-ID
or length specifier.
@return string the data

The actual data to put into central directory - without Header-ID or
length specifier.
@return string the data

Name of linked file.
@return string name of the file this entry links to if it is a
               symbolic link, the empty string otherwise

Indicate that this entry is a symbolic link to the given filename.
@param string $link name of the file this entry links to, empty
                    string if it is not a symbolic link

Is this entry a symbolic link?
@return bool true if this is a symbolic link

Get the file mode for given permissions with the correct file type.
@param int $mode the mode
@return int the type with the mode

Is this entry a directory?
@return bool true if this entry is a directory

## References

**Database Tables (inferred)**
- `struct`
- `TSize`
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\Extra\Fields\AsiExtraField.php`

**Classes**:
- `PhpZip\Model\Extra\Fields\AsiExtraField implements ZipExtraField`

**Functions/Methods**:
- `__construct(int $mode, int $uid = self::USER_GID_PID, int $gid = self::USER_GID_PID, string $link = '')`
- `getHeaderId()`
- `unpackLocalFileData(string $buffer, ?ZipEntry $entry = null)`
- `unpackCentralDirData(string $buffer, ?ZipEntry $entry = null)`
- `packLocalFileData()`
- `packCentralDirData()`
- `getLink()`
- `setLink(string $link)`
- `isLink()`
- `getPermissionsMode(int $mode)`
- `isDirectory()`
- `getMode()`
- `setMode(int $mode)`
- `getUserId()`
- `setUserId(int $uid)`
- `getGroupId()`
- `setGroupId(int $gid)`
- `__toString()`

