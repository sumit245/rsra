# system\HTTP\UserAgent.php

- Path: `system\HTTP\UserAgent.php`
- Type: PHP
- Size: 7975 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Abstraction for an HTTP user agent

Current user-agent
@var string

Flag for if the user-agent belongs to a browser
@var bool

Flag for if the user-agent is a robot
@var bool

Flag for if the user-agent is a mobile browser
@var bool

Holds the config file contents.
@var UserAgents

Current user-agent platform
@var string

Current user-agent browser
@var string

Current user-agent version
@var string

Current user-agent mobile name
@var string

Current user-agent robot name
@var string

HTTP Referer
@var mixed

Constructor
Sets the User Agent and runs the compilation routine

Is Browser
@param string $key

Is Robot
@param string $key

Is Mobile
@param string $key

Is this a referral from another site?

Agent String

Get Platform

Get Browser Name

Get the Browser Version

Get The Robot Name

Get the Mobile Device

Get the referrer

Parse a custom user-agent string

Compile the User Agent Data

Set the Platform

Set the Browser

Set the Robot

Set the Mobile Device

Outputs the original Agent String when cast as a string.

## References

**Database Tables (inferred)**
- `another`

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\UserAgent.php`

**Classes**:
- `CodeIgniter\HTTP\UserAgent`

**Functions/Methods**:
- `__construct(?UserAgents $config = null)`
- `isBrowser(?string $key = null)`
- `isRobot(?string $key = null)`
- `isMobile(?string $key = null)`
- `isReferral()`
- `getAgentString()`
- `getPlatform()`
- `getBrowser()`
- `getVersion()`
- `getRobot()`
- `getMobile()`
- `getReferrer()`
- `parse(string $string)`
- `compileData()`
- `setPlatform()`
- `setBrowser()`
- `setRobot()`
- `setMobile()`
- `__toString()`

