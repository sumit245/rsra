# system\Validation\ValidationInterface.php

- Path: `system\Validation\ValidationInterface.php`
- Type: PHP
- Size: 2510 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Expected behavior of a validator

Runs the validation process, returning true/false determining whether
or not validation was successful.
@param array  $data  The array of data to validate.
@param string $group The pre-defined group of rules to apply.

Check; runs the validation process, returning true or false
determining whether or not validation was successful.
@param mixed    $value  Value to validation.
@param string   $rule   Rule.
@param string[] $errors Errors.
@return bool True if valid, else false.

Takes a Request object and grabs the input data to use from its
array values.

Stores the rules that should be used to validate the items.

Checks to see if the rule for key $field has been set or not.

Returns the error for a specified $field (or empty string if not set).

Returns the array of errors that were encountered during
a run() call. The array should be in the following format:
   [
       'field1' => 'error message',
       'field2' => 'error message',
   ]
@return array<string,string>

Sets the error for a specific field. Used by custom validation methods.

Resets the class to a blank slate. Should be called whenever
you need to process more than one array.

## References

**Database Tables (inferred)**
- `its`

## Symbols

# Symbols

**Files documented**: 1

## `system\Validation\ValidationInterface.php`

**Classes**:
- `CodeIgniter\Validation\to`

**Functions/Methods**:
- `run(?array $data = null, ?string $group = null)`
- `check($value, string $rule, array $errors = [])`
- `withRequest(RequestInterface $request)`
- `setRules(array $rules, array $messages = [])`
- `hasRule(string $field)`
- `getError(string $field)`
- `getErrors()`
- `setError(string $alias, string $error)`
- `reset()`

