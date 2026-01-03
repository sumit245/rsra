# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ConfigSchema\Validator.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ConfigSchema\Validator.php`
- Type: PHP
- Size: 8367 bytes

## Summary (from docblocks)

Performs validations on HTMLPurifier_ConfigSchema_Interchange
@note If you see '// handled by InterchangeBuilder', that means a
      design decision in that class would prevent this validation from
      ever being necessary. We have them anyway, however, for
      redundancy.

@type HTMLPurifier_ConfigSchema_Interchange

@type array

Context-stack to provide easy to read error messages.
@type array

to test default's type.
@type HTMLPurifier_VarParser

Validates a fully-formed interchange object.
@param HTMLPurifier_ConfigSchema_Interchange $interchange
@return bool

Validates a HTMLPurifier_ConfigSchema_Interchange_Id object.
@param HTMLPurifier_ConfigSchema_Interchange_Id $id

Validates a HTMLPurifier_ConfigSchema_Interchange_Directive object.
@param HTMLPurifier_ConfigSchema_Interchange_Directive $d

Extra validation if $allowed member variable of
HTMLPurifier_ConfigSchema_Interchange_Directive is defined.
@param HTMLPurifier_ConfigSchema_Interchange_Directive $d

Extra validation if $valueAliases member variable of
HTMLPurifier_ConfigSchema_Interchange_Directive is defined.
@param HTMLPurifier_ConfigSchema_Interchange_Directive $d

Extra validation if $aliases member variable of
HTMLPurifier_ConfigSchema_Interchange_Directive is defined.
@param HTMLPurifier_ConfigSchema_Interchange_Directive $d

Convenience function for generating HTMLPurifier_ConfigSchema_ValidatorAtom
for validating simple member variables of objects.
@param $obj
@param $member
@return HTMLPurifier_ConfigSchema_ValidatorAtom

Emits an error, providing helpful context.
@throws HTMLPurifier_ConfigSchema_Exception

Returns a formatted context string.
@return string

## References

**Database Tables (inferred)**
- `alias`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ConfigSchema\Validator.php`

**Classes**:
- `would`
- `HTMLPurifier_ConfigSchema_Validator`

**Functions/Methods**:
- `__construct()`
- `validate($interchange)`
- `validateId($id)`
- `validateDirective($d)`
- `validateDirectiveAllowed($d)`
- `validateDirectiveValueAliases($d)`
- `validateDirectiveAliases($d)`
- `with($obj, $member)`
- `error($target, $msg)`
- `getFormattedContext()`

