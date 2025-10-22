# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ErrorStruct.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ErrorStruct.php`
- Type: PHP
- Size: 1893 bytes

## Summary (from docblocks)

Records errors for particular segments of an HTML document such as tokens,
attributes or CSS properties. They can contain error structs (which apply
to components of what they represent), but their main purpose is to hold
errors applying to whatever struct is being used.

Possible values for $children first-key. Note that top-level structures
are automatically token-level.

Type of this struct.
@type string

Value of the struct we are recording errors for. There are various
values for this:
 - TOKEN: Instance of HTMLPurifier_Token
 - ATTR: array('attr-name', 'value')
 - CSSPROP: array('prop-name', 'value')
@type mixed

Errors registered for this structure.
@type array

Child ErrorStructs that are from this structure. For example, a TOKEN
ErrorStruct would contain ATTR ErrorStructs. This is a multi-dimensional
array in structure: [TYPE]['identifier']
@type array

@param string $type
@param string $id
@return mixed

@param int $severity
@param string $message

## References

**Database Tables (inferred)**
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ErrorStruct.php`

**Classes**:
- `HTMLPurifier_ErrorStruct`

**Functions/Methods**:
- `getChild($type, $id)`
- `addError($severity, $message)`

