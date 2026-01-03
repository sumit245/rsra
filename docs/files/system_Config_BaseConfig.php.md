# system\Config\BaseConfig.php

- Path: `system\Config\BaseConfig.php`
- Type: PHP
- Size: 7039 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class BaseConfig
Not intended to be used on its own, this class will attempt to
automatically populate the child class' properties with values
from the environment.
These can be set within the .env file.

An optional array of classes that will act as Registrars
for rapidly setting config class properties.
@var array

Has module discovery happened yet?
@var bool

The modules configuration.
@var Modules

Will attempt to get environment variables with names
that match the properties of the child class.
The "shortPrefix" is the lowercase-only config class name.

Initialization an environment-specific configuration setting
@param mixed $property
@return void

Retrieve an environment-specific configuration setting
@return string|null

Provides external libraries a simple way to register one or more
options into a config file.
@throws ReflectionException

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Config\BaseConfig.php`

**Classes**:
- `CodeIgniter\Config\will`
- `CodeIgniter\Config\BaseConfig`
- `CodeIgniter\Config\properties`
- `CodeIgniter\Config\name`
- `CodeIgniter\Config\for`

**Functions/Methods**:
- `__construct()`
- `initEnvValue(&$property, string $name, string $prefix, string $shortPrefix)`
- `getEnvValue(string $property, string $prefix, string $shortPrefix)`
- `registerProperties()`

