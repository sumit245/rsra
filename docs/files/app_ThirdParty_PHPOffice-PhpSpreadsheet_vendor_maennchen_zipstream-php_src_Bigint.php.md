# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\maennchen\zipstream-php\src\Bigint.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\maennchen\zipstream-php\src\Bigint.php`
- Type: PHP
- Size: 3558 bytes

## Summary (from docblocks)

@var int[]

Initialize the bytes array
@param int $value

Fill the bytes field with int
@param int $value
@param int $start
@param int $count
@return void

Get an instance
@param int $value
@return Bigint

Fill bytes from low to high
@param int $low
@param int $high
@return Bigint

Get high 32
@return int

Get value from bytes array
@param int $end
@param int $length
@return int

Get low FF
@param bool $force
@return float

Check if is over 32
@param bool $force
@return bool

Get low 32
@return int

Get hexadecimal
@return string

Add
@param Bigint $other
@return Bigint

## References

**Database Tables (inferred)**
- `low`
- `bytes`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\maennchen\zipstream-php\src\Bigint.php`

**Classes**:
- `ZipStream\Bigint`

**Functions/Methods**:
- `__construct(int $value = 0)`
- `fillBytes(int $value, int $start, int $count)`
- `init(int $value = 0)`
- `fromLowHigh(int $low, int $high)`
- `getHigh32()`
- `getValue(int $end = 0, int $length = 8)`
- `getLowFF(bool $force = false)`
- `isOver32(bool $force = false)`
- `getLow32()`
- `getHex64()`
- `add(Bigint $other)`

