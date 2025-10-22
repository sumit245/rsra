# plugins\RestApi\ThirdParty\Requests\Utility\FilteredIterator.php

- Path: `plugins\RestApi\ThirdParty\Requests\Utility\FilteredIterator.php`
- Type: PHP
- Size: 1135 bytes

## Summary (from docblocks)

Iterator for arrays requiring filtered values
@package Requests
@subpackage Utilities

Iterator for arrays requiring filtered values
@package Requests
@subpackage Utilities

Callback to run as a filter
@var callable

Create a new iterator
@param array $data
@param callable $callback Callback to be called on each value

Get the current item's value after filtering
@return string

@inheritdoc

@inheritdoc
@phpcs:disable PHPCompatibility.FunctionNameRestrictions.NewMagicMethods.__unserializeFound

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\ThirdParty\Requests\Utility\FilteredIterator.php`

**Classes**:
- `Requests_Utility_FilteredIterator extends ArrayIterator`

**Functions/Methods**:
- `__construct($data, $callback)`
- `current()`
- `unserialize($serialized)`
- `__unserialize($serialized)`
- `__wakeup()`

