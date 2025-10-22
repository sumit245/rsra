# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Security\XmlScanner.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Security\XmlScanner.php`
- Type: PHP
- Size: 4326 bytes

## Summary (from docblocks)

String used to identify risky xml elements.
@var string

@var bool

Scan the XML for use of <!ENTITY to prevent XXE/XEE attacks.
@param mixed $xml
@return string

Scan theXML for use of <!ENTITY to prevent XXE/XEE attacks.
@param string $filestream
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Security\XmlScanner.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Reader\Security\XmlScanner`

**Functions/Methods**:
- `__construct($pattern = '<!DOCTYPE')`
- `getInstance(Reader\IReader $reader)`
- `threadSafeLibxmlDisableEntityLoaderAvailability()`
- `disableEntityLoaderCheck()`
- `shutdown()`
- `__destruct()`
- `setAdditionalCallback(callable $callback)`
- `toUtf8($xml)`
- `scan($xml)`
- `scanFile($filestream)`

