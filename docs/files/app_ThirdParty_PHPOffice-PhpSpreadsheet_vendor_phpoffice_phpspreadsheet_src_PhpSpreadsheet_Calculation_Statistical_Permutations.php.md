# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Permutations.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Permutations.php`
- Type: PHP
- Size: 3441 bytes

## Summary (from docblocks)

PERMUT.
Returns the number of permutations for a given number of objects that can be
       selected from number objects. A permutation is any set or subset of objects or
       events where internal order is significant. Permutations are different from
       combinations, for which the internal order is not significant. Use this function
       for lottery-style probability calculations.
@param mixed $numObjs Integer number of different objects
                     Or can be an array of values
@param mixed $numInSet Integer number of objects in each permutation
                     Or can be an array of values
@return array|float|int|string Number of permutations, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

PERMUTATIONA.
Returns the number of permutations for a given number of objects (with repetitions)
    that can be selected from the total objects.
@param mixed $numObjs Integer number of different objects
                     Or can be an array of values
@param mixed $numInSet Integer number of objects in each permutation
                     Or can be an array of values
@return array|float|int|string Number of permutations, or a string containing an error
        If an array of numbers is passed as an argument, then the returned result will also be an array
           with the same dimensions

## References

**Database Tables (inferred)**
- `number`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Statistical\Permutations.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Statistical\Permutations`

**Functions/Methods**:
- `PERMUT($numObjs, $numInSet)`
- `PERMUTATIONA($numObjs, $numInSet)`

