# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\HashTable.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\HashTable.php`
- Type: PHP
- Size: 3768 bytes

## Summary (from docblocks)

@template T of IComparable

HashTable elements.
@var array<string, T>

HashTable key map.
@var array<int, string>

Create a new HashTable.
@param T[] $source Optional source array to create HashTable from

Add HashTable items from source.
@param T[] $source Source array to create HashTable from

Add HashTable item.
@param T $source Item to add

Remove HashTable item.
@param T $source Item to remove

Clear HashTable.

Count.
@return int

Get index for hash code.
@return false|int Index

Get by index.
@return null|T

Get by hashcode.
@return null|T

HashTable to array.
@return T[]

Implement PHP __clone to create a deep clone, not just a shallow copy.

## References

**Database Tables (inferred)**
- `source`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\HashTable.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\HashTable`
- `PhpOffice\PhpSpreadsheet\is`

**Functions/Methods**:
- `__construct($source = null)`
- `addFromSource(?array $source = null)`
- `add(IComparable $source)`
- `remove(IComparable $source)`
- `clear()`
- `count()`
- `getIndexForHashCode(string $hashCode)`
- `getByIndex(int $index)`
- `getByHashCode(string $hashCode)`
- `toArray()`
- `__clone()`

