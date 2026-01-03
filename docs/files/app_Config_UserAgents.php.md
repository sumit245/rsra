# app\Config\UserAgents.php

- Path: `app\Config\UserAgents.php`
- Type: PHP
- Size: 9789 bytes

## Summary (from docblocks)

-------------------------------------------------------------------
User Agents
-------------------------------------------------------------------
This file contains four arrays of user agent data. It is used by the
User Agent Class to help identify browser, platform, robot, and
mobile device data. The array keys are used to identify the device
and the array values are used to set the actual name of the item.

-------------------------------------------------------------------
OS Platforms
-------------------------------------------------------------------
@var array<string, string>

-------------------------------------------------------------------
Browsers
-------------------------------------------------------------------
The order of this array should NOT be changed. Many browsers return
multiple browser types so we want to identify the subtype first.
@var array<string, string>

-------------------------------------------------------------------
Mobiles
-------------------------------------------------------------------
@var array<string, string>

-------------------------------------------------------------------
Robots
-------------------------------------------------------------------
There are hundred of bots but these are the most common.
@var array<string, string>

## Symbols

# Symbols

**Files documented**: 1

## `app\Config\UserAgents.php`

**Classes**:
- `Config\UserAgents extends BaseConfig`

