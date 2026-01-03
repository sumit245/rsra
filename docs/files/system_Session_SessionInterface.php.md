# system\Session\SessionInterface.php

- Path: `system\Session\SessionInterface.php`
- Type: PHP
- Size: 5810 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Expected behavior of a session container used with CodeIgniter.

Regenerates the session ID.
@param bool $destroy Should old session data be destroyed?

Destroys the current session.

Sets user data into the session.
If $data is a string, then it is interpreted as a session property
key, and  $value is expected to be non-null.
If $data is an array, it is expected to be an array of key/value pairs
to be set as session properties.
@param array|string $data  Property name or associative array of properties
@param mixed        $value Property value if single key provided

Get user data that has been set in the session.
If the property exists as "normal", returns it.
Otherwise, returns an array of any temp or flash data values with the
property key.
Replaces the legacy method $session->userdata();
@param string $key Identifier of the session property to retrieve
@return mixed The property value(s)

Returns whether an index exists in the session array.
@param string $key Identifier of the session property we are interested in.

Remove one or more session properties.
If $key is an array, it is interpreted as an array of string property
identifiers to remove. Otherwise, it is interpreted as the identifier
of a specific session property to remove.
@param array|string $key Identifier of the session property or properties to remove.

Sets data into the session that will only last for a single request.
Perfect for use with single-use status update messages.
If $data is an array, it is interpreted as an associative array of
key/value pairs for flashdata properties.
Otherwise, it is interpreted as the identifier of a specific
flashdata property, with $value containing the property value.
@param array|string $data  Property identifier or associative array of properties
@param array|string $value Property value if $data is a scalar

Retrieve one or more items of flash data from the session.
If the item key is null, return all flashdata.
@param string $key Property identifier
@return array|null The requested property value, or an associative
                   array  of them

Keeps a single piece of flash data alive for one more request.
@param array|string $key Property identifier or array of them

Mark a session property or properties as flashdata.
@param array|string $key Property identifier or array of them
@return false if any of the properties are not already set

Unmark data in the session as flashdata.
@param array|string $key Property identifier or array of them

Retrieve all of the keys for session data marked as flashdata.
@return array The property names of all flashdata

Sets new data into the session, and marks it as temporary data
with a set lifespan.
@param array|string $data  Session data key or associative array of items
@param mixed        $value Value to store
@param int          $ttl   Time-to-live in seconds

Returns either a single piece of tempdata, or all temp data currently
in the session.
@param string $key Session data key
@return mixed Session data value or null if not found.

Removes a single piece of temporary data from the session.
@param string $key Session data key

Mark one of more pieces of data as being temporary, meaning that
it has a set lifespan within the session.
@param array|string $key Property identifier or array of them
@param int          $ttl Time to live, in seconds
@return bool False if any of the properties were not set

Unmarks temporary data in the session, effectively removing its
lifespan and allowing it to live as long as the session does.
@param array|string $key Property identifier or array of them

Retrieve the keys of all session data that have been marked as temporary data.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Session\SessionInterface.php`

**Functions/Methods**:
- `regenerate(bool $destroy = false)`
- `destroy()`
- `set($data, $value = null)`
- `get(?string $key = null)`
- `has(string $key)`
- `remove($key)`
- `setFlashdata($data, $value = null)`
- `getFlashdata(?string $key = null)`
- `keepFlashdata($key)`
- `markAsFlashdata($key)`
- `unmarkFlashdata($key)`
- `getFlashKeys()`
- `setTempdata($data, $value = null, int $ttl = 300)`
- `getTempdata(?string $key = null)`
- `removeTempdata(string $key)`
- `markAsTempdata($key, int $ttl = 300)`
- `unmarkTempdata($key)`
- `getTempKeys()`

