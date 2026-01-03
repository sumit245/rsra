# system\Test\CIUnitTestCase.php

- Path: `system\Test\CIUnitTestCase.php`
- Type: PHP
- Size: 13695 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Framework test case for PHPUnit.

@var CodeIgniter

Methods to run during setUp.
WARNING: Do not override unless you know exactly what you are doing.
         This property may be deprecated in the future.
@var array of methods

Methods to run during tearDown.
WARNING: This property may be deprecated in the future.
@var array of methods

Store of identified traits.

Should run db migration?
@var bool

Should run db migration only once?
@var bool

Should run seeding only once?
@var bool

Should the db be refreshed before test?
@var bool

The seed file(s) used for all tests within this test case.
Should be fully-namespaced or relative to $basePath
@var array|string

The path to the seeds directory.
Allows overriding the default application directories.
@var string

The namespace(s) to help us find the migration classes.
Empty is equivalent to running `spark migrate --all`.
Note that running "all" runs migrations in date order,
but specifying namespaces runs them in namespace order (then date)
@var array|string|null

The name of the database group to connect to.
If not present, will use the defaultGroup.
@var string

Our database connection.
@var BaseConnection

Migration Runner instance.
@var MigrationRunner|mixed

Seeder instance
@var Seeder

Stores information needed to remove any
rows inserted via $this->hasInDatabase();
@var array

If present, will override application
routes when using call().
@var RouteCollection|null

Values to be set in the SESSION global
before running the test.
@var array

Enabled auto clean op buffer after request call
@var bool

Custom request's headers
@var array

Allows for formatting the request body to what
the controller is going to expect
@var string

Allows for directly setting the body to what
it needs to be.
@var mixed

Load the helpers.

Checks for traits with corresponding
methods for setUp or tearDown.
@param string $stage 'setUp' or 'tearDown'

Resets shared instanced for all Factories components

Resets shared instanced for all Services

Injects the mock Cache driver to prevent filesystem collisions

Injects the mock email driver so no emails really send

Injects the mock session driver into Services

Custom function to hook into CodeIgniter's Logging mechanism
to check if certain messages were logged during code execution.
@param string|null $expectedMessage
@throws Exception
@return bool

Hooks into CodeIgniter's Events system to check if a specific
event was triggered or not.
@throws Exception

Hooks into xdebug's headers capture, looking for a specific header
emitted
@param string $header The leading portion of the header we are looking for
@throws Exception

Hooks into xdebug's headers capture, looking for a specific header
emitted
@param string $header The leading portion of the header we don't want to find
@throws Exception

Custom function to test that two values are "close enough".
This is intended for extended execution time testing,
where the result is close but not exactly equal to the
expected time, for reasons beyond our control.
@param mixed $actual
@throws Exception

Custom function to test that two values are "close enough".
This is intended for extended execution time testing,
where the result is close but not exactly equal to the
expected time, for reasons beyond our control.
@param mixed $expected
@param mixed $actual
@throws Exception
@return bool|void

Loads up an instance of CodeIgniter
and gets the environment setup.
@return CodeIgniter

Return first matching emitted header.
@param string $header Identifier of the header of interest
@return string|null The value of the header found, null if not found

## Symbols

# Symbols

**Files documented**: 1

## `system\Test\CIUnitTestCase.php`

**Classes**:
- `CodeIgniter\Test\CIUnitTestCase extends TestCase`

**Functions/Methods**:
- `setUpBeforeClass()`
- `setUp()`
- `tearDown()`
- `callTraitMethods(string $stage)`
- `resetFactories()`
- `resetServices(bool $initAutoloader = true)`
- `mockCache()`
- `mockEmail()`
- `mockSession()`
- `assertLogged(string $level, $expectedMessage = null)`
- `assertEventTriggered(string $eventName)`
- `assertHeaderEmitted(string $header, bool $ignoreCase = false)`
- `assertHeaderNotEmitted(string $header, bool $ignoreCase = false)`
- `assertCloseEnough(int $expected, $actual, string $message = '', int $tolerance = 1)`
- `assertCloseEnoughString($expected, $actual, string $message = '', int $tolerance = 1)`
- `createApplication()`
- `getHeaderEmitted(string $header, bool $ignoreCase = false)`

