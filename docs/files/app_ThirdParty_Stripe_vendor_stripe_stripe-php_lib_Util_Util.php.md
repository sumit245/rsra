# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Util\Util.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Util\Util.php`
- Type: PHP
- Size: 7407 bytes

## Summary (from docblocks)

Whether the provided array (or other) is a list rather than a dictionary.
A list is defined as an array for which all the keys are consecutive
integers starting at 0. Empty arrays are considered to be lists.
@param array|mixed $array
@return bool true if the given object is a list

Converts a response from the Stripe API to the corresponding PHP object.
@param array $resp the response from the Stripe API
@param array $opts
@return array|StripeObject

@param mixed|string $value a string to UTF8-encode
@return mixed|string the UTF8-encoded string, or the object passed in if
   it wasn't a string

Compares two strings for equality. The time taken is independent of the
number of characters that match.
@param string $a one of the strings to compare
@param string $b the other string to compare
@return bool true if the strings are equal, false otherwise

Recursively goes through an array of parameters. If a parameter is an instance of
ApiResource, then it is replaced by the resource's ID.
Also clears out null values.
@param mixed $h
@return mixed

@param array $params
@return string

@param array $params
@param null|string $parentKey
@return array

@param array $value
@param string $calculatedKey
@return array

@param string $key a string to URL-encode
@return string the URL-encoded string

Returns UNIX timestamp in milliseconds.
@return int current time in millis

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Util\Util.php`

**Classes**:
- `Stripe\Util\Util`

**Functions/Methods**:
- `isList($array)`
- `convertToStripeObject($resp, $opts)`
- `utf8($value)`
- `secureCompare($a, $b)`
- `objectsToIds($h)`
- `encodeParameters($params)`
- `flattenParams($params, $parentKey = null)`
- `flattenParamsList($value, $calculatedKey)`
- `urlEncode($key)`
- `normalizeId($id)`
- `currentTimeMillis()`

