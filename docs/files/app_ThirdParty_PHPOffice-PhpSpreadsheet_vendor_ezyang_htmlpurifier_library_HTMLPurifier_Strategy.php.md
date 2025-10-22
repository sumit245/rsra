# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Strategy.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Strategy.php`
- Type: PHP
- Size: 762 bytes

## Summary (from docblocks)

Supertype for classes that define a strategy for modifying/purifying tokens.
While HTMLPurifier's core purpose is fixing HTML into something proper,
strategies provide plug points for extra configuration or even extra
features, such as custom tags, custom parsing of text, etc.

Executes the strategy on the tokens.
@param HTMLPurifier_Token[] $tokens Array of HTMLPurifier_Token objects to be operated on.
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return HTMLPurifier_Token[] Processed array of token objects.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Strategy.php`

**Classes**:
- `HTMLPurifier_Strategy`

**Functions/Methods**:
- `execute($tokens, $config, $context)`

