# app\ThirdParty\Google\google-api-php-client\src\Google\Model.php

- Path: `app\ThirdParty\Google\google-api-php-client\src\Google\Model.php`
- Type: PHP
- Size: 8795 bytes

## Summary (from docblocks)

This class defines attributes, valid values, and usage which is generated
from a given json schema.
http://tools.ietf.org/html/draft-zyp-json-schema-03#section-5

If you need to specify a NULL JSON value, use Google_Model::NULL_VALUE
instead - it will be replaced when converting to JSON with a real null.

Polymorphic - accepts a variable number of arguments dependent
on the type of the model subclass.

Getter that handles passthrough access to the data array, and lazy object creation.
@param string $key Property name.
@return mixed The value if any, or null.

Initialize this object's properties from an array.
@param array $array Used to seed this object's properties.
@return void

Blank initialiser to be used in subclasses to do  post-construction initialisation - this
avoids the need for subclasses to have to implement the variadics handling in their
constructors.

Create a simplified object suitable for straightforward
conversion to JSON. This is relatively expensive
due to the usage of reflection, but shouldn't be called
a whole lot, and is the most straightforward way to filter.

Handle different types of values, primarily
other objects and map and array data types.

Check whether the value is the null placeholder and return true null.

If there is an internal name mapping, use that.

Returns true only if the array is associative.
@param array $array
@return bool True if the array is associative.

Verify if $obj is an array.
@throws Google_Exception Thrown if $obj isn't an array.
@param array $obj Items that should be validated.
@param string $method Method expecting an array as an argument.

Convert a string to camelCase
@param  string $value
@return string

## References

**Database Tables (inferred)**
- `a`
- `an`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\src\Google\Model.php`

**Classes**:
- `defines`
- `Google_Model implements ArrayAccess`
- `if`

**Functions/Methods**:
- `__construct()`
- `__get($key)`
- `mapTypes($array)`
- `gapiInit()`
- `toSimpleObject()`
- `getSimpleValue($value)`
- `nullPlaceholderCheck($value)`
- `getMappedName($key)`
- `isAssociativeArray($array)`
- `assertIsArray($obj, $method)`
- `offsetExists($offset)`
- `offsetGet($offset)`
- `offsetSet($offset, $value)`
- `offsetUnset($offset)`
- `keyType($key)`
- `dataType($key)`
- `__isset($key)`
- `__unset($key)`
- `camelCase($value)`

