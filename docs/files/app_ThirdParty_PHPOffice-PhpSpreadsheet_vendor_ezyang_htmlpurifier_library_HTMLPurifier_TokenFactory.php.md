# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\TokenFactory.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\TokenFactory.php`
- Type: PHP
- Size: 3099 bytes

## Summary (from docblocks)

Factory for token generation.
@note Doing some benchmarking indicates that the new operator is much
      slower than the clone operator (even discounting the cost of the
      constructor).  This class is for that optimization.
      Other then that, there's not much point as we don't
      maintain parallel HTMLPurifier_Token hierarchies (the main reason why
      you'd want to use an abstract factory).
@todo Port DirectLex to use this

@type HTMLPurifier_Token_Start

@type HTMLPurifier_Token_End

@type HTMLPurifier_Token_Empty

@type HTMLPurifier_Token_Text

@type HTMLPurifier_Token_Comment

Generates blank prototypes for cloning.

Creates a HTMLPurifier_Token_Start.
@param string $name Tag name
@param array $attr Associative array of attributes
@return HTMLPurifier_Token_Start Generated HTMLPurifier_Token_Start

Creates a HTMLPurifier_Token_End.
@param string $name Tag name
@return HTMLPurifier_Token_End Generated HTMLPurifier_Token_End

Creates a HTMLPurifier_Token_Empty.
@param string $name Tag name
@param array $attr Associative array of attributes
@return HTMLPurifier_Token_Empty Generated HTMLPurifier_Token_Empty

Creates a HTMLPurifier_Token_Text.
@param string $data Data of text token
@return HTMLPurifier_Token_Text Generated HTMLPurifier_Token_Text

Creates a HTMLPurifier_Token_Comment.
@param string $data Data of comment token
@return HTMLPurifier_Token_Comment Generated HTMLPurifier_Token_Comment

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\TokenFactory.php`

**Classes**:
- `is`
- `HTMLPurifier_TokenFactory`

**Functions/Methods**:
- `__construct()`
- `createStart($name, $attr = array()`
- `createEnd($name)`
- `createEmpty($name, $attr = array()`
- `createText($data)`
- `createComment($data)`

