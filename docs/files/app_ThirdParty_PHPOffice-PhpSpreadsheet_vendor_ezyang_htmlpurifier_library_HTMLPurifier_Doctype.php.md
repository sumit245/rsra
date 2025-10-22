# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Doctype.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Doctype.php`
- Type: PHP
- Size: 1582 bytes

## Summary (from docblocks)

Represents a document type, contains information on which modules
need to be loaded.
@note This class is inspected by Printer_HTMLDefinition->renderDoctype.
      If structure changes, please update that function.

Full name of doctype
@type string

List of standard modules (string identifiers or literal objects)
that this doctype uses
@type array

List of modules to use for tidying up code
@type array

Is the language derived from XML (i.e. XHTML)?
@type bool

List of aliases for this doctype
@type array

Public DTD identifier
@type string

System DTD identifier
@type string

## References

**Database Tables (inferred)**
- `XML`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Doctype.php`

**Classes**:
- `is`
- `HTMLPurifier_Doctype`

**Functions/Methods**:
- `__construct($name = null,
        $xml = true,
        $modules = array()`

