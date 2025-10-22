# system\Validation\Rules.php

- Path: `system\Validation\Rules.php`
- Type: PHP
- Size: 8665 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Validation Rules.

The value does not match another field in $data.
@param array $data Other field/value pairs

Equals the static value provided.

Returns true if $str is $val characters long.
$val = "5" (one) | "5,8,12" (multiple values)

Greater than

Equal to or Greater than

Checks the database to see if the given value exist.
Can ignore records by field/value to filter (currently
accept only one filter).
Example:
   is_not_unique[table.field,where_field,where_value]
   is_not_unique[menu.id,active,1]

Value should be within an array of values

Checks the database to see if the given value is unique. Can
ignore a single record by field/value to make it useful during
record updates.
Example:
   is_unique[table.field,ignore_field,ignore_value]
   is_unique[users.email,id,5]

Less than

Equal to or Less than

Matches the value of another field in $data.
@param array $data Other field/value pairs

Returns true if $str is $val or fewer characters in length.

Returns true if $str is at least $val length.

Does not equal the static value provided.
@param string $str

Value should not be within an array of values.
@param string $value

@param mixed $str

The field is required when any of the other required fields are present
in the data.
Example (field is required when the password field is present):
    required_with[password]
@param string|null $str
@param string|null $fields List of fields that we should check if present
@param array       $data   Complete list of fields from the form

The field is required when all of the other fields are present
in the data but not required.
Example (field is required when the id or email field is missing):
    required_without[id,email]
@param string|null $str

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Validation\Rules.php`

**Classes**:
- `CodeIgniter\Validation\Rules`

**Functions/Methods**:
- `differs(?string $str, string $field, array $data)`
- `equals(?string $str, string $val)`
- `exact_length(?string $str, string $val)`
- `greater_than(?string $str, string $min)`
- `greater_than_equal_to(?string $str, string $min)`
- `is_not_unique(?string $str, string $field, array $data)`
- `in_list(?string $value, string $list)`
- `is_unique(?string $str, string $field, array $data)`
- `less_than(?string $str, string $max)`
- `less_than_equal_to(?string $str, string $max)`
- `matches(?string $str, string $field, array $data)`
- `max_length(?string $str, string $val)`
- `min_length(?string $str, string $val)`
- `not_equals(?string $str, string $val)`
- `not_in_list(?string $value, string $list)`
- `required($str = null)`
- `required_with($str = null, ?string $fields = null, array $data = [])`
- `required_without($str = null, ?string $fields = null, array $data = [])`

