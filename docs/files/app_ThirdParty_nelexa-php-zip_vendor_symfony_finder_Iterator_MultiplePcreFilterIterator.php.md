# app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\MultiplePcreFilterIterator.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\MultiplePcreFilterIterator.php`
- Type: PHP
- Size: 3245 bytes

## Summary (from docblocks)

MultiplePcreFilterIterator filters files using patterns (regexps, globs or strings).
@author Fabien Potencier <fabien@symfony.com>
@template-covariant TKey
@template-covariant TValue
@extends \FilterIterator<TKey, TValue>

@param \Iterator $iterator        The Iterator to filter
@param string[]  $matchPatterns   An array of patterns that need to match
@param string[]  $noMatchPatterns An array of patterns that need to not match

Checks whether the string is accepted by the regex filters.
If there is no regexps defined in the class, this method will accept the string.
Such case can be handled by child classes before calling the method if they want to
apply a different behavior.
@return bool

Checks whether the string is a regex.
@return bool

Converts string into regexp.
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Iterator\MultiplePcreFilterIterator.php`

**Classes**:
- `Symfony\Component\Finder\Iterator\MultiplePcreFilterIterator extends \FilterIterator`

**Functions/Methods**:
- `__construct(\Iterator $iterator, array $matchPatterns, array $noMatchPatterns)`
- `isAccepted(string $string)`
- `isRegex(string $str)`
- `toRegex(string $str)`

