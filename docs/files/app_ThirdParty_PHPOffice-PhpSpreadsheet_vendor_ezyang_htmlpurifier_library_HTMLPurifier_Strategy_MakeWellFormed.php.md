# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Strategy\MakeWellFormed.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Strategy\MakeWellFormed.php`
- Type: PHP
- Size: 27617 bytes

## Summary (from docblocks)

Takes tokens makes them well-formed (balance end tags, etc.)
Specification of the armor attributes this strategy uses:
     - MakeWellFormed_TagClosedError: This armor field is used to
       suppress tag closed errors for certain tokens [TagClosedSuppress],
       in particular, if a tag was generated automatically by HTML
       Purifier, we may rely on our infrastructure to close it for us
       and shouldn't report an error to the user [TagClosedAuto].

Array stream of tokens being processed.
@type HTMLPurifier_Token[]

Current token.
@type HTMLPurifier_Token

Zipper managing the true state.
@type HTMLPurifier_Zipper

Current nesting of elements.
@type array

Injectors active in this stream processing.
@type HTMLPurifier_Injector[]

Current instance of HTMLPurifier_Config.
@type HTMLPurifier_Config

Current instance of HTMLPurifier_Context.
@type HTMLPurifier_Context

@param HTMLPurifier_Token[] $tokens
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return HTMLPurifier_Token[]
@throws HTMLPurifier_Exception

Processes arbitrary token values for complicated substitution patterns.
In general:
If $token is an array, it is a list of tokens to substitute for the
current token. These tokens then get individually processed. If there
is a leading integer in the list, that integer determines how many
tokens from the stream should be removed.
If $token is a regular token, it is swapped with the current token.
If $token is false, the current token is deleted.
If $token is an integer, that number of tokens (with the first token
being the current one) will be deleted.
@param HTMLPurifier_Token|array|int|bool $token Token substitution value
@param HTMLPurifier_Injector|int $injector Injector that performed the substitution; default is if
       this is not an injector related operation.
@throws HTMLPurifier_Exception

Inserts a token before the current token. Cursor now points to
this token.  You must reprocess after this.
@param HTMLPurifier_Token $token

Removes current token. Cursor now points to new token occupying previously
occupied space.  You must reprocess after this.

## References

**Database Tables (inferred)**
- `the`
- `injector`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Strategy\MakeWellFormed.php`

**Classes**:
- `HTMLPurifier_Strategy_MakeWellFormed extends HTMLPurifier_Strategy`

**Functions/Methods**:
- `execute($tokens, $config, $context)`
- `processToken($token, $injector = -1)`
- `insertBefore($token)`
- `remove()`

