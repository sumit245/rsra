# system\ThirdParty\Kint\Parser\Parser.php

- Path: `system\ThirdParty\Kint\Parser\Parser.php`
- Type: PHP
- Size: 19059 bytes

## Summary (from docblocks)

Plugin triggers.
These are constants indicating trigger points for plugins
BEGIN: Before normal parsing
SUCCESS: After successful parsing
RECURSION: After parsing cancelled by recursion
DEPTH_LIMIT: After parsing cancelled by depth limit
COMPLETE: SUCCESS | RECURSION | DEPTH_LIMIT
While a plugin's getTriggers may return any of these

@param int         $depth_limit Maximum depth to parse data
@param null|string $caller      Caller class name

Set the caller class.
@param null|string $caller Caller class name

Set the depth limit.
@param int $depth_limit Maximum depth to parse data

Parses a variable into a Kint object structure.
@param mixed $var The input variable
@param Value $o   The base object
@return Value

Returns an array without the recursion marker in it.
DO NOT pass an array that has had it's marker removed back
into the parser, it will result in an extra recursion
@param array $array Array potentially containing a recursion marker
@return array Array with recursion marker removed

Parses a string into a Kint BlobValue structure.
@param string $var The input variable
@param Value  $o   The base object
@return Value

Parses an array into a Kint object structure.
@param array $var The input variable
@param Value $o   The base object
@return Value

Parses an object into a Kint InstanceValue structure.
@param object $var The input variable
@param Value  $o   The base object
@return Value

Parses a resource into a Kint ResourceValue structure.
@param resource $var The input variable
@param Value    $o   The base object
@return Value

Parses a closed resource into a Kint object structure.
@param mixed $var The input variable
@param Value $o   The base object
@return Value

Applies plugins for an object type.
@param mixed $var     variable
@param Value $o       Kint object parsed so far
@param int   $trigger The trigger to check for the plugins
@return bool Continue parsing

@var bool Psalm bug workaround

## References

**Database Tables (inferred)**
- `inside`

## Symbols

# Symbols

**Files documented**: 1

## `system\ThirdParty\Kint\Parser\Parser.php`

**Classes**:
- `Kint\Parser\Parser`
- `Kint\Parser\name`
- `Kint\Parser\name`

**Functions/Methods**:
- `__construct($depth_limit = 0, $caller = null)`
- `setCallerClass($caller = null)`
- `getCallerClass()`
- `setDepthLimit($depth_limit = 0)`
- `getDepthLimit()`
- `parse(&$var, Value $o)`
- `addPlugin(Plugin $p)`
- `clearPlugins()`
- `haltParse()`
- `childHasPath(InstanceValue $parent, Value $child)`
- `getCleanArray(array $array)`
- `noRecurseCall()`
- `parseGeneric(&$var, Value $o)`
- `parseString(&$var, Value $o)`
- `parseArray(array &$var, Value $o)`
- `parseObject(&$var, Value $o)`
- `parseResource(&$var, Value $o)`
- `parseResourceClosed(&$var, Value $o)`
- `applyPlugins(&$var, Value &$o, $trigger)`

