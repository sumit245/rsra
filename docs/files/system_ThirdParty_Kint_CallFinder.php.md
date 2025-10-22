# system\ThirdParty\Kint\CallFinder.php

- Path: `system\ThirdParty\Kint\CallFinder.php`
- Type: PHP
- Size: 16422 bytes

## Summary (from docblocks)

Things we need to do specially for operator tokens:
- Refuse to strip spaces around them
- Wrap the access path in parentheses if there
  are any of these in the final short parameter.

@var array{int, string, int} $prev_tokens[0]

We need a separate method to check if tokens are operators because we
occasionally add "..." to short parameter versions. If we simply check
for `$token[0]` then "..." will incorrectly match the "." operator.
@param array|string $token The token to check
@return bool

@var array|string $last

## Symbols

# Symbols

**Files documented**: 1

## `system\ThirdParty\Kint\CallFinder.php`

**Classes**:
- `Kint\CallFinder`

**Functions/Methods**:
- `getFunctionCalls($source, $line, $function)`
- `realTokenIndex(array $tokens, $index)`
- `tokenIsOperator($token)`
- `tokensToString(array $tokens)`
- `tokensTrim(array $tokens)`
- `tokensFormatted(array $tokens)`

