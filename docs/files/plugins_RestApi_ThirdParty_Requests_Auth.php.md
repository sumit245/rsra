# plugins\RestApi\ThirdParty\Requests\Auth.php

- Path: `plugins\RestApi\ThirdParty\Requests\Auth.php`
- Type: PHP
- Size: 810 bytes

## Summary (from docblocks)

Authentication provider interface
@package Requests
@subpackage Authentication

Authentication provider interface
Implement this interface to act as an authentication provider.
Parameters should be passed via the constructor where possible, as this
makes it much easier for users to use your provider.
@see Requests_Hooks
@package Requests
@subpackage Authentication

Register hooks as needed
This method is called in {@see Requests::request} when the user has set
an instance as the 'auth' option. Use this callback to register all the
hooks you'll need.
@see Requests_Hooks::register
@param Requests_Hooks $hooks Hook system

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\ThirdParty\Requests\Auth.php`

**Functions/Methods**:
- `register(Requests_Hooks $hooks)`

