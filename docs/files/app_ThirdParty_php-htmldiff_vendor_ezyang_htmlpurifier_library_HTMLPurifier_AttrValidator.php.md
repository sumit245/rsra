# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrValidator.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrValidator.php`
- Type: PHP
- Size: 6572 bytes

## Summary (from docblocks)

Validates the attributes of a token. Doesn't manage required attributes
very well. The only reason we factored this out was because RemoveForeignElements
also needed it besides ValidateAttributes.

Validates the attributes of a token, mutating it as necessary.
that has valid tokens
@param HTMLPurifier_Token $token Token to validate.
@param HTMLPurifier_Config $config Instance of HTMLPurifier_Config
@param HTMLPurifier_Context $context Instance of HTMLPurifier_Context

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\AttrValidator.php`

**Classes**:
- `HTMLPurifier_AttrValidator`

**Functions/Methods**:
- `validateToken($token, $config, $context)`

