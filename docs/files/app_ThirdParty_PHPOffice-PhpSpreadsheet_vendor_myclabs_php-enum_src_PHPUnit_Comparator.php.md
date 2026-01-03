# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\myclabs\php-enum\src\PHPUnit\Comparator.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\myclabs\php-enum\src\PHPUnit\Comparator.php`
- Type: PHP
- Size: 1370 bytes

## Summary (from docblocks)

Use this Comparator to get nice output when using PHPUnit assertEquals() with Enums.
Add this to your PHPUnit bootstrap PHP file:
\SebastianBergmann\Comparator\Factory::getInstance()->register(new \MyCLabs\Enum\PHPUnit\Comparator());

@param Enum $expected
@param Enum|null $actual
@return void

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\myclabs\php-enum\src\PHPUnit\Comparator.php`

**Classes**:
- `MyCLabs\Enum\PHPUnit\Comparator extends \SebastianBergmann\Comparator\Comparator`

**Functions/Methods**:
- `accepts($expected, $actual)`
- `assertEquals($expected, $actual, $delta = 0.0, $canonicalize = false, $ignoreCase = false)`
- `formatEnum(Enum $enum = null)`

