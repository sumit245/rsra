# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Strategy\RemoveForeignElements.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Strategy\RemoveForeignElements.php`
- Type: PHP
- Size: 9170 bytes

## Summary (from docblocks)

Removes all unrecognized tags from the list of tokens.
This strategy iterates through all the tokens and removes unrecognized
tokens. If a token is not recognized but a TagTransform is defined for
that element, the element will be transformed accordingly.

@param HTMLPurifier_Token[] $tokens
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return array|HTMLPurifier_Token[]

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Strategy\RemoveForeignElements.php`

**Classes**:
- `HTMLPurifier_Strategy_RemoveForeignElements extends HTMLPurifier_Strategy`

**Functions/Methods**:
- `execute($tokens, $config, $context)`

