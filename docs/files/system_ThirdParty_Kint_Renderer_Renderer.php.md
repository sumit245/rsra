# system\ThirdParty\Kint\Renderer\Renderer.php

- Path: `system\ThirdParty\Kint\Renderer\Renderer.php`
- Type: PHP
- Size: 5063 bytes

## Summary (from docblocks)

Returns the first compatible plugin available.
@param array $plugins Array of hints to class strings
@param array $hints   Array of object hints
@return array Array of hints to class strings filtered and sorted by object hints

Sorts an array of Value.
@param Value[] $contents Object properties to sort
@param int     $sort
@return Value[]

## Symbols

# Symbols

**Files documented**: 1

## `system\ThirdParty\Kint\Renderer\Renderer.php`

**Classes**:
- `Kint\Renderer\Renderer`
- `Kint\Renderer\strings`
- `Kint\Renderer\strings`

**Functions/Methods**:
- `render(Value $o)`
- `renderNothing()`
- `setCallInfo(array $info)`
- `getCallInfo()`
- `setStatics(array $statics)`
- `getStatics()`
- `setShowTrace($show_trace)`
- `getShowTrace()`
- `matchPlugins(array $plugins, array $hints)`
- `filterParserPlugins(array $plugins)`
- `preRender()`
- `postRender()`
- `sortPropertiesFull(Value $a, Value $b)`
- `sortProperties(array $contents, $sort)`

