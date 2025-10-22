# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\myclabs\php-enum\src\Enum.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\myclabs\php-enum\src\Enum.php`
- Type: PHP
- Size: 8174 bytes

## Summary (from docblocks)

@link    http://github.com/myclabs/php-enum
@license http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)

Base Enum class
Create an enum by implementing this class and adding class constants.
@author Matthieu Napoli <matthieu@mnapoli.fr>
@author Daniel Costa <danielcosta@gmail.com>
@author Mirosław Filip <mirfilip@gmail.com>
@psalm-template T
@psalm-immutable
@psalm-consistent-constructor

Enum value
@var mixed
@psalm-var T

Enum key, the constant name
@var string

Store existing constants in a static cache per object.
@var array
@psalm-var array<class-string, array<string, mixed>>

Cache of instances of the Enum class
@var array
@psalm-var array<class-string, array<string, static>>

Creates a new value of some type
@psalm-pure
@param mixed $value
@psalm-param T $value
@throws \UnexpectedValueException if incompatible type is given.

@psalm-var T

@psalm-suppress ImplicitToStringCast assertValidValueReturningKey returns always a string but psalm has currently an issue here

@psalm-var T

This method exists only for the compatibility reason when deserializing a previously serialized version
that didn't had the key property

@psalm-suppress DocblockTypeContradiction key can be null when deserializing an enum without the key

@psalm-suppress InaccessibleProperty key is not readonly as marked by psalm
@psalm-suppress PossiblyFalsePropertyAssignmentValue deserializing a case that was removed

@param mixed $value
@return static

@psalm-pure
@return mixed
@psalm-return T

Returns the enum key (i.e. the constant name).
@psalm-pure
@return string

@psalm-pure
@psalm-suppress InvalidCast
@return string

Determines if Enum should be considered equal with the variable passed as a parameter.
Returns false if an argument is an object of different class or not an object.
This method is final, for more information read https://github.com/myclabs/php-enum/issues/4
@psalm-pure
@psalm-param mixed $variable
@return bool

Returns the names (keys) of all constants in the Enum class
@psalm-pure
@psalm-return list<string>
@return array

Returns instances of the Enum class of all Enum constants
@psalm-pure
@psalm-return array<string, static>
@return static[] Constant name in key, Enum instance in value

@psalm-var T $value

Returns all possible values as an array
@psalm-pure
@psalm-suppress ImpureStaticProperty
@psalm-return array<string, mixed>
@return array Constant name in key, constant value in value

@psalm-suppress ImpureMethodCall this reflection API usage has no side-effects here

@psalm-suppress ImpureMethodCall this reflection API usage has no side-effects here

Check if is valid enum value
@param $value
@psalm-param mixed $value
@psalm-pure
@psalm-assert-if-true T $value
@return bool

Asserts valid enum value
@psalm-pure
@psalm-assert T $value
@param mixed $value

Asserts valid enum value
@psalm-pure
@psalm-assert T $value
@param mixed $value
@return string

Check if is valid enum key
@param $key
@psalm-param string $key
@psalm-pure
@return bool

Return key for value
@param mixed $value
@psalm-param mixed $value
@psalm-pure
@return string|false

Returns a value when called statically like so: MyEnum::SOME_VALUE() given SOME_VALUE is a class constant
@param string $name
@param array  $arguments
@return static
@throws \BadMethodCallException
@psalm-pure

Specify data which should be serialized to JSON. This method returns data that can be serialized by json_encode()
natively.
@return mixed
@link http://php.net/manual/en/jsonserializable.jsonserialize.php
@psalm-pure

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\myclabs\php-enum\src\Enum.php`

**Classes**:
- `MyCLabs\Enum\and`
- `MyCLabs\Enum\constants`
- `MyCLabs\Enum\Enum implements \JsonSerializable`
- `MyCLabs\Enum\or`
- `MyCLabs\Enum\of`
- `MyCLabs\Enum\constant`

**Functions/Methods**:
- `__construct($value)`
- `__wakeup()`
- `from($value)`
- `getValue()`
- `getKey()`
- `__toString()`
- `equals($variable = null)`
- `keys()`
- `values()`
- `toArray()`
- `isValid($value)`
- `assertValidValue($value)`
- `assertValidValueReturningKey($value)`
- `isValidKey($key)`
- `search($value)`
- `__callStatic($name, $arguments)`
- `jsonSerialize()`

