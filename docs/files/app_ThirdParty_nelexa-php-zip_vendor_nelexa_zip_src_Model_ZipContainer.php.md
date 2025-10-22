# app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\ZipContainer.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\ZipContainer.php`
- Type: PHP
- Size: 8786 bytes

## Summary (from docblocks)

Zip Container.

@var ImmutableZipContainer|null The source container contains zip entries from
                                an open zip archive. The source container makes
                                it possible to undo changes in the archive.
                                When cloning, this container is not cloned.

@param string|ZipEntry $entry

@param string|ZipEntry $old
@param string|ZipEntry $new
@throws ZipException
@return ZipEntry New zip entry

@param string|ZipEntry $entryName
@throws ZipEntryNotFoundException

@param string|ZipEntry $entryName

@param string|ZipEntry $entryName

Delete all entries.

Delete entries by regex pattern.
@param string $regexPattern Regex pattern
@return ZipEntry[] Deleted entries

@var ZipEntry[] $found

Undo all changes done in the archive.

Undo change archive comment.

Revert all changes done to an entry with the given name.
@param string|ZipEntry $entry Entry name or ZipEntry

Entries sort by name.
Example:
```php
$zipContainer->sortByName(static function (string $nameA, string $nameB): int {
    return strcmp($nameA, $nameB);
});
```

Entries sort by entry.
Example:
```php
$zipContainer->sortByEntry(static function (ZipEntry $a, ZipEntry $b): int {
    return strcmp($a->getName(), $b->getName());
});
```

Specify a password for extracting files.
@param ?string $password

@throws ZipEntryNotFoundException
@throws ZipException

@param ?string $writePassword
@throws ZipEntryNotFoundException

Remove password.
@throws ZipEntryNotFoundException

@param string|ZipEntry $entryName
@throws ZipEntryNotFoundException

@throws ZipEntryNotFoundException

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\nelexa\zip\src\Model\ZipContainer.php`

**Classes**:
- `PhpZip\Model\ZipContainer extends ImmutableZipContainer`

**Functions/Methods**:
- `__construct(?ImmutableZipContainer $sourceContainer = null)`
- `getSourceContainer()`
- `addEntry(ZipEntry $entry)`
- `deleteEntry($entry)`
- `renameEntry($old, $new)`
- `getEntry($entryName)`
- `getEntryOrNull($entryName)`
- `hasEntry($entryName)`
- `deleteAll()`
- `deleteByRegex(string $regexPattern)`
- `unchangeAll()`
- `unchangeArchiveComment()`
- `unchangeEntry($entry)`
- `sortByName(callable $cmp)`
- `sortByEntry(callable $cmp)`
- `setArchiveComment(?string $archiveComment)`
- `matcher()`
- `setReadPassword(?string $password)`
- `setReadPasswordEntry(string $entryName, string $password)`
- `setWritePassword(?string $writePassword)`
- `removePassword()`
- `removePasswordEntry($entryName)`
- `setEncryptionMethod(int $encryptionMethod = ZipEncryptionMethod::WINZIP_AES_256)`

