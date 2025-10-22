# system\Test\Fabricator.php

- Path: `system\Test\Fabricator.php`
- Type: PHP
- Size: 14451 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Fabricator
Bridge class for using Faker to create example data based on
model specifications.

Array of counts for fabricated items
@var array

Locale-specific Faker instance
@var Generator

Model instance (can be non-framework if it follows framework design)
@var Model|object

Locale used to initialize Faker
@var string

Map of properties and their formatter to use
@var array|null

Date fields present in the model
@var array

Array of data to add or override faked versions
@var array

Array of single-use data to override faked versions
@var array|null

Default formatter to use when nothing is detected
@var string

Store the model instance and initialize Faker to the locale.
@param object|string $model      Instance or classname of the model to use
@param array|null    $formatters Array of property => formatter
@param string|null   $locale     Locale for Faker provider
@throws InvalidArgumentException

Reset internal counts

Get the count for a specific table
@param string $table Name of the target table

Set the count for a specific table
@param string $table Name of the target table
@param int    $count Count value
@return int The new count value

Increment the count for a table
@param string $table Name of the target table
@return int The new count value

Decrement the count for a table
@param string $table Name of the target table
@return int The new count value

Returns the model instance
@return object Framework or compatible model

Returns the locale

Returns the Faker generator

Return and reset tempOverrides

Set the overrides, once or persistent
@param array $overrides Array of [field => value]
@param bool  $persist   Whether these overrides should persist through the next operation

Returns the current formatters

Set the formatters to use. Will attempt to autodetect if none are available.
@param array|null $formatters Array of [field => formatter], or null to detect

Try to identify the appropriate Faker formatter for each field.

Guess at the correct formatter to match a field name.
@param string $field Name of the field
@return string Name of the formatter

Generate new entities with faked data
@param int|null $count Optional number to create a collection
@return array|object An array or object (based on returnType), or an array of returnTypes

Generate an array of faked data
@throws RuntimeException
@return array An array of faked data

Generate an object of faked data
@param string|null $className Class name of the object to create; null to use model default
@throws RuntimeException
@return object An instance of the class with faked data

Generate new entities from the database
@param int|null $count Optional number to create a collection
@param bool     $mock  Whether to execute or mock the insertion
@throws FrameworkException
@return array|object An array or object (based on returnType), or an array of returnTypes

Generate new database entities without actually inserting them
@param int|null $count Optional number to create a collection
@return array|object An array or object (based on returnType), or an array of returnTypes

## References

**Database Tables (inferred)**
- `Faker`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Test\Fabricator.php`

**Classes**:
- `CodeIgniter\Test\for`
- `CodeIgniter\Test\Fabricator`
- `CodeIgniter\Test\with`

**Functions/Methods**:
- `__construct($model, ?array $formatters = null, ?string $locale = null)`
- `resetCounts()`
- `getCount(string $table)`
- `setCount(string $table, int $count)`
- `upCount(string $table)`
- `downCount(string $table)`
- `getModel()`
- `getLocale()`
- `getFaker()`
- `getOverrides()`
- `setOverrides(array $overrides = [], $persist = true)`
- `getFormatters()`
- `setFormatters(?array $formatters = null)`
- `detectFormatters()`
- `guessFormatter($field)`
- `make(?int $count = null)`
- `makeArray()`
- `makeObject(?string $className = null)`
- `create(?int $count = null, bool $mock = false)`
- `createMock(?int $count = null)`

