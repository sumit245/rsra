# system\Config\Factories.php

- Path: `system\Config\Factories.php`
- Type: PHP
- Size: 10424 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Factories for creating instances.
Factories allow dynamic loading of components by their path
and name. The "shared instance" implementation provides a
large performance boost and helps keep code clean of lengthy
instantiation checks.
@method static BaseConfig config(...$arguments)

Store of component-specific options, usually
from CodeIgniter\Config\Factory.
@var array<string, array>

Explicit options for the Config
component to prevent logic loops.
@var array<string, mixed>

Mapping of class basenames (no namespace) to
their instances.
@var array<string, string[]>

Store for instances of any component that
has been requested as "shared".
A multi-dimensional array with components as
keys to the array of name-indexed instances.
@var array<string, array>

This method is only to prevent PHPStan error.
If we have a solution, we can remove this method.
See https://github.com/codeigniter4/CodeIgniter4/pull/5358
@template T of Model
@param class-string<T> $name
@return T

Loads instances based on the method component name. Either
creates a new instance or returns an existing shared instance.
@return mixed

Finds a component class
@param array  $options The array of component-specific directives
@param string $name    Class name, namespace optional

Verifies that a class & config satisfy the "preferApp" option
@param array  $options The array of component-specific directives
@param string $name    Class name, namespace optional

Verifies that a class & config satisfy the "instanceOf" option
@param array  $options The array of component-specific directives
@param string $name    Class name, namespace optional

Returns the component-specific configuration
@param string $component Lowercase, plural component name
@return array<string, mixed>

Normalizes, stores, and returns the configuration for a specific component
@param string $component Lowercase, plural component name
@return array<string, mixed> The result after applying defaults and normalization

Resets the static arrays, optionally just for one component
@param string|null $component Lowercase, plural component name

Helper method for injecting mock instances
@param string $component Lowercase, plural component name
@param string $name      The name of the instance

Gets a basename from a class name, namespaced or not.

## References

**Database Tables (inferred)**
- `CodeIgniter`
- `the`
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `system\Config\Factories.php`

**Classes**:
- `CodeIgniter\Config\Factories`
- `CodeIgniter\Config\basenames`
- `CodeIgniter\Config\if`
- `CodeIgniter\Config\names`
- `CodeIgniter\Config\exists`
- `CodeIgniter\Config\was`
- `CodeIgniter\Config\foreach`
- `CodeIgniter\Config\name`

**Functions/Methods**:
- `models(string $name, array $options = [], ?ConnectionInterface &$conn = null)`
- `__callStatic(string $component, array $arguments)`
- `locateClass(array $options, string $name)`
- `verifyPreferApp(array $options, string $name)`
- `verifyInstanceOf(array $options, string $name)`
- `getOptions(string $component)`
- `setOptions(string $component, array $values)`
- `reset(?string $component = null)`
- `injectMock(string $component, string $name, object $instance)`
- `getBasename(string $name)`

