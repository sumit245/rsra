# plugins\RestApi\ThirdParty\Requests\Hooks.php

- Path: `plugins\RestApi\ThirdParty\Requests\Hooks.php`
- Type: PHP
- Size: 1400 bytes

## Summary (from docblocks)

Handles adding and dispatching events
@package Requests
@subpackage Utilities

Handles adding and dispatching events
@package Requests
@subpackage Utilities

Registered callbacks for each hook
@var array

Constructor

Register a callback for a hook
@param string $hook Hook name
@param callback $callback Function/method to call on event
@param int $priority Priority number. <0 is executed earlier, >0 is executed later

Dispatch a message
@param string $hook Hook name
@param array $parameters Parameters to pass to callbacks
@return boolean Successfulness

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\ThirdParty\Requests\Hooks.php`

**Classes**:
- `Requests_Hooks implements Requests_Hooker`

**Functions/Methods**:
- `__construct()`
- `register($hook, $callback, $priority = 0)`
- `dispatch($hook, $parameters = array()`

