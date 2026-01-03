# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\VarParser.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\VarParser.php`
- Type: PHP
- Size: 5990 bytes

## Summary (from docblocks)

Parses string representations into their corresponding native PHP
variable type. The base implementation does a simple type-check.

Lookup table of allowed types. Mainly for backwards compatibility, but
also convenient for transforming string type names to the integer constants.

Lookup table of types that are string, and can have aliases or
allowed value lists.

Validate a variable according to type.
It may return NULL as a valid type if $allow_null is true.
@param mixed $var Variable to validate
@param int $type Type of variable, see HTMLPurifier_VarParser->types
@param bool $allow_null Whether or not to permit null as a value
@return string Validated and type-coerced variable
@throws HTMLPurifier_VarParserException

Actually implements the parsing. Base implementation does not
do anything to $var. Subclasses should overload this!
@param mixed $var
@param int $type
@param bool $allow_null
@return string

Throws an exception.
@throws HTMLPurifier_VarParserException

Throws an inconsistency exception.
@note This should not ever be called. It would be called if we
      extend the allowed values of HTMLPurifier_VarParser without
      updating subclasses.
@param string $class
@param int $type
@throws HTMLPurifier_Exception

Generic error for if a type didn't work.
@param mixed $var
@param int $type

@param int $type
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\VarParser.php`

**Classes**:
- `HTMLPurifier_VarParser`

**Functions/Methods**:
- `parse($var, $type, $allow_null = false)`
- `parseImplementation($var, $type, $allow_null)`
- `error($msg)`
- `errorInconsistent($class, $type)`
- `errorGeneric($var, $type)`
- `getTypeName($type)`

