# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Context.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Context.php`
- Type: PHP
- Size: 2634 bytes

## Summary (from docblocks)

Registry object that contains information about the current context.
@warning Is a bit buggy when variables are set to null: it thinks
         they don't exist! So use false instead, please.
@note Since the variables Context deals with may not be objects,
      references are very important here! Do not remove!

Private array that stores the references.
@type array

Registers a variable into the context.
@param string $name String name
@param mixed $ref Reference to variable to be registered

Retrieves a variable reference from the context.
@param string $name String name
@param bool $ignore_error Boolean whether or not to ignore error
@return mixed

Destroys a variable in the context.
@param string $name String name

Checks whether or not the variable exists.
@param string $name String name
@return bool

Loads a series of variables from an associative array
@param array $context_array Assoc array of variables to load

## References

**Database Tables (inferred)**
- `the`
- `an`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Context.php`

**Classes**:
- `HTMLPurifier_Context`

**Functions/Methods**:
- `register($name, &$ref)`
- `destroy($name)`
- `exists($name)`
- `loadArray($context_array)`

