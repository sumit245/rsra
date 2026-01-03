# plugins\RestApi\ThirdParty\Requests\IRI.php

- Path: `plugins\RestApi\ThirdParty\Requests\IRI.php`
- Type: PHP
- Size: 28553 bytes

## Summary (from docblocks)

IRI parser/serialiser/normaliser
@package Requests
@subpackage Utilities

IRI parser/serialiser/normaliser
Copyright (c) 2007-2010, Geoffrey Sneddon and Steve Minutillo.
All rights reserved.
Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:
 * Redistributions of source code must retain the above copyright notice,
      this list of conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice,
      this list of conditions and the following disclaimer in the documentation
      and/or other materials provided with the distribution.
 * Neither the name of the SimplePie Team nor the names of its contributors
      may be used to endorse or promote products derived from this software
      without specific prior written permission.
THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDERS AND CONTRIBUTORS BE
LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
POSSIBILITY OF SUCH DAMAGE.
@package Requests
@subpackage Utilities
@author Geoffrey Sneddon
@author Steve Minutillo
@copyright 2007-2009 Geoffrey Sneddon and Steve Minutillo
@license http://www.opensource.org/licenses/bsd-license.php
@link http://hg.gsnedders.com/iri/
@property string $iri IRI we're working with
@property-read string $uri IRI in URI form, {@see to_uri}
@property string $scheme Scheme part of the IRI
@property string $authority Authority part, formatted for a URI (userinfo + host + port)
@property string $iauthority Authority part of the IRI (userinfo + host + port)
@property string $userinfo Userinfo part, formatted for a URI (after '://' and before '@')
@property string $iuserinfo Userinfo part of the IRI (after '://' and before '@')
@property string $host Host part, formatted for a URI
@property string $ihost Host part of the IRI
@property string $port Port part of the IRI (after ':')
@property string $path Path part, formatted for a URI (after first '/')
@property string $ipath Path part of the IRI (after first '/')
@property string $query Query part, formatted for a URI (after '?')
@property string $iquery Query part of the IRI (after '?')
@property string $fragment Fragment, formatted for a URI (after '#')
@property string $ifragment Fragment part of the IRI (after '#')

Scheme
@var string|null

User Information
@var string|null

ihost
@var string|null

Port
@var string|null

ipath
@var string

iquery
@var string|null

ifragment|null
@var string

Normalization database
Each key is the scheme, each value is an array with each key as the IRI
part and value as the default value for that part.
@var array

Return the entire IRI when you try and read the object as a string
@return string

Overload __set() to provide access via properties
@param string $name Property name
@param mixed $value Property value

Overload __get() to provide access via properties
@param string $name Property name
@return mixed

Overload __isset() to provide access via properties
@param string $name Property name
@return bool

Overload __unset() to provide access via properties
@param string $name Property name

Create a new IRI object, from a specified string
@param string|null $iri

Create a new IRI object by resolving a relative IRI
Returns false if $base is not absolute, otherwise an IRI.
@param Requests_IRI|string $base (Absolute) Base IRI
@param Requests_IRI|string $relative Relative IRI
@return Requests_IRI|false

Parse an IRI into scheme/authority/path/query/fragment segments
@param string $iri
@return array

Remove dot segments from a path
@param string $input
@return string

Replace invalid character with percent encoding
@param string $string Input string
@param string $extra_chars Valid characters not in iunreserved or
                           iprivate (this is ASCII-only)
@param bool $iprivate Allow iprivate
@return string

Callback function for preg_replace_callback.
Removes sequences of percent encoded bytes that represent UTF-8
encoded characters in iunreserved
@param array $match PCRE match
@return string Replacement

Check if the object represents a valid IRI. This needs to be done on each
call as some things change depending on another part of the IRI.
@return bool

Set the entire IRI. Returns true on success, false on failure (if there
are any invalid characters).
@param string $iri
@return bool

Set the scheme. Returns true on success, false on failure (if there are
any invalid characters).
@param string $scheme
@return bool

Set the authority. Returns true on success, false on failure (if there are
any invalid characters).
@param string $authority
@return bool

Set the iuserinfo.
@param string $iuserinfo
@return bool

Set the ihost. Returns true on success, false on failure (if there are
any invalid characters).
@param string $ihost
@return bool

Set the port. Returns true on success, false on failure (if there are
any invalid characters).
@param string $port
@return bool

Set the ipath.
@param string $ipath
@return bool

Set the iquery.
@param string $iquery
@return bool

Set the ifragment.
@param string $ifragment
@return bool

Convert an IRI to a URI (or parts thereof)
@param string|bool IRI to convert (or false from {@see get_iri})
@return string|false URI if IRI is valid, false otherwise.

Get the complete IRI
@return string|false

Get the complete URI
@return string

Get the complete iauthority
@return string|null

Get the complete authority
@return string

## References

**Database Tables (inferred)**
- `this`
- `a`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\ThirdParty\Requests\IRI.php`

**Classes**:
- `Requests_IRI`

**Functions/Methods**:
- `__toString()`
- `__set($name, $value)`
- `__get($name)`
- `__isset($name)`
- `__unset($name)`
- `__construct($iri = null)`
- `absolutize($base, $relative)`
- `parse_iri($iri)`
- `remove_dot_segments($input)`
- `replace_invalid_with_pct_encoding($string, $extra_chars, $iprivate = false)`
- `remove_iunreserved_percent_encoded($match)`
- `scheme_normalization()`
- `is_valid()`
- `set_iri($iri)`
- `set_scheme($scheme)`
- `set_authority($authority)`
- `set_userinfo($iuserinfo)`
- `set_host($ihost)`
- `set_port($port)`
- `set_path($ipath)`
- `set_query($iquery)`
- `set_fragment($ifragment)`
- `to_uri($string)`
- `get_iri()`
- `get_uri()`
- `get_iauthority()`
- `get_authority()`

