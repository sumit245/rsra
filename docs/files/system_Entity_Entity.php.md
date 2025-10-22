# system\Entity\Entity.php

- Path: `system\Entity\Entity.php`
- Type: PHP
- Size: 15321 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Entity encapsulation, for use with CodeIgniter\Model

Maps names used in sets and gets against unique
names within the class, allowing independence from
database column names.
Example:
 $datamap = [
     'class_name' => 'db_name'
 ];

Array of field names and the type of value to cast them as when
they are accessed.

Custom convert handlers
@var array<string, string>

Default convert handlers
@var array<string, string>

Holds the current values of all class vars.
@var array

Holds original copies of all class vars so we can determine
what's actually been changed and not accidentally write
nulls where we shouldn't.
@var array

Holds info whenever properties have to be casted

Allows filling in Entity parameters during construction.

Takes an array of key/value pairs and sets them as class
properties, using any `setCamelCasedProperty()` methods
that may or may not exist.
@param array $data
@return $this

General method that will return all public and protected values
of this entity as an array. All values are accessed through the
__get() magic method so will have any casts, etc applied to them.
@param bool $onlyChanged If true, only return values that have changed since object creation
@param bool $cast        If true, properties will be casted.
@param bool $recursive   If true, inner entities will be casted as array as well.

Returns the raw values of the current attributes.
@param bool $onlyChanged If true, only return values that have changed since object creation
@param bool $recursive   If true, inner entities will be casted as array as well.

Ensures our "original" values match the current values.
@return $this

Checks a property to see if it has changed since the entity
was created. Or, without a parameter, checks if any
properties have changed.
@param string $key

Set raw data array without any mutations
@return $this

Checks the datamap to see if this property name is being mapped,
and returns the db column name, if any, or the original property name.
@return mixed|string

Converts the given string|timestamp|DateTime|Time instance
into the "CodeIgniter\I18n\Time" object.
@param mixed $value
@throws Exception
@return mixed|Time

Provides the ability to cast an item as a specific data type.
Add ? at the beginning of $type  (i.e. ?string) to get NULL
instead of casting $value if $value === null
@param mixed  $value     Attribute value
@param string $attribute Attribute name
@param string $method    Allowed to "get" and "set"
@throws CastException
@return mixed

Support for json_encode()
@return array

Change the value of the private $_cast property
@return bool|Entity

Magic method to all protected/private class properties to be
easily set, either through a direct access or a
`setCamelCasedProperty()` method.
Examples:
 $this->my_property = $p;
 $this->setMyProperty() = $p;
@param mixed|null $value
@throws Exception
@return $this

Magic method to allow retrieval of protected and private class properties
either by their name, or through a `getCamelCasedProperty()` method.
Examples:
 $p = $this->my_property
 $p = $this->getMyProperty()
@throws Exception
@return mixed

Returns true if a property exists names $key, or a getter method
exists named like for __get().

Unsets an attribute property.

Whether this key is mapped db column name?

Whether this key has mapped property?

## Symbols

# Symbols

**Files documented**: 1

## `system\Entity\Entity.php`

**Classes**:
- `CodeIgniter\Entity\Entity implements JsonSerializable`
- `CodeIgniter\Entity\vars`
- `CodeIgniter\Entity\vars`
- `CodeIgniter\Entity\properties`
- `CodeIgniter\Entity\properties`
- `CodeIgniter\Entity\properties`

**Functions/Methods**:
- `__construct(?array $data = null)`
- `fill(?array $data = null)`
- `toArray(bool $onlyChanged = false, bool $cast = true, bool $recursive = false)`
- `toRawArray(bool $onlyChanged = false, bool $recursive = false)`
- `syncOriginal()`
- `hasChanged(?string $key = null)`
- `setAttributes(array $data)`
- `mapProperty(string $key)`
- `mutateDate($value)`
- `castAs($value, string $attribute, string $method = 'get')`
- `jsonSerialize()`
- `cast(?bool $cast = null)`
- `__set(string $key, $value = null)`
- `__get(string $key)`
- `__isset(string $key)`
- `__unset(string $key)`
- `isMappedDbColumn(string $key)`
- `hasMappedProperty(string $key)`

