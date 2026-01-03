# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\Hash.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\Hash.php`
- Type: PHP
- Size: 27648 bytes

## Summary (from docblocks)

Pure-PHP implementations of keyed-hash message authentication codes (HMACs) and various cryptographic hashing functions.
Uses hash() or mhash() if available and an internal implementation, otherwise.  Currently supports the following:
md2, md5, md5-96, sha1, sha1-96, sha256, sha256-96, sha384, and sha512, sha512-96
If {@link self::setKey() setKey()} is called, {@link self::hash() hash()} will return the HMAC as opposed to
the hash.  If no valid algorithm is provided, sha1 will be used.
PHP version 5
{@internal The variable names are the same as those in
{@link http://tools.ietf.org/html/rfc2104#section-2 RFC2104}.}}
Here's a short example of how to use this library:
<code>
<?php
   include 'vendor/autoload.php';
   $hash = new \phpseclib\Crypt\Hash('sha1');
   $hash->setKey('abcdefg');
   echo base64_encode($hash->hash('abcdefg'));
?>
</code>
@category  Crypt
@package   Hash
@author    Jim Wigginton <terrafrost@php.net>
@copyright 2007 Jim Wigginton
@license   http://www.opensource.org/licenses/mit-license.html  MIT License
@link      http://phpseclib.sourceforge.net

Pure-PHP implementations of keyed-hash message authentication codes (HMACs) and various cryptographic hashing functions.
@package Hash
@author  Jim Wigginton <terrafrost@php.net>
@access  public

#@+
@access private
@see \phpseclib\Crypt\Hash::__construct()

Toggles the internal implementation

Toggles the mhash() implementation, which has been deprecated on PHP 5.3.0+.

Toggles the hash() implementation, which works on PHP 5.1.2+.

#@-

Hash Parameter
@see self::setHash()
@var int
@access private

Byte-length of compression blocks / key (Internal HMAC)
@see self::setAlgorithm()
@var int
@access private

Byte-length of hash output (Internal HMAC)
@see self::setHash()
@var int
@access private

Hash Algorithm
@see self::setHash()
@var string
@access private

Key
@see self::setKey()
@var string
@access private

Outer XOR (Internal HMAC)
@see self::setKey()
@var string
@access private

Inner XOR (Internal HMAC)
@see self::setKey()
@var string
@access private

Default Constructor.
@param string $hash
@return \phpseclib\Crypt\Hash
@access public

Sets the key for HMACs
Keys can be of any length.
@access public
@param string $key

Gets the hash function.
As set by the constructor or by the setHash() method.
@access public
@return string

Sets the hash function.
@access public
@param string $hash

Compute the HMAC.
@access public
@param string $text
@return string

Returns the hash length (in bytes)
@access public
@return int

Wrapper for MD5
@access private
@param string $m

Wrapper for SHA1
@access private
@param string $m

Pure-PHP implementation of MD2
See {@link http://tools.ietf.org/html/rfc1319 RFC1319}.
@access private
@param string $m

Pure-PHP implementation of SHA256
See {@link http://en.wikipedia.org/wiki/SHA_hash_functions#SHA-256_.28a_SHA-2_variant.29_pseudocode SHA-256 (a SHA-2 variant) pseudocode - Wikipedia}.
@access private
@param string $m

Pure-PHP implementation of SHA384 and SHA512
@access private
@param string $m

Right Rotate
@access private
@param int $int
@param int $amt
@see self::_sha256()
@return int

Right Shift
@access private
@param int $int
@param int $amt
@see self::_sha256()
@return int

Not
@access private
@param int $int
@see self::_sha256()
@return int

Add
_sha256() adds multiple unsigned 32-bit integers.  Since PHP doesn't support unsigned integers and since the
possibility of overflow exists, care has to be taken.  BigInteger could be used but this should be faster.
@param int $...
@return int
@see self::_sha256()
@access private

String Shift
Inspired by array_shift
@param string $string
@param int $index
@return string
@access private

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\Hash.php`

**Classes**:
- `phpseclib\Crypt\Hash`

**Functions/Methods**:
- `__construct($hash = 'sha1')`
- `setKey($key = false)`
- `getHash()`
- `setHash($hash)`
- `hash($text)`
- `getLength()`
- `_md5($m)`
- `_sha1($m)`
- `_md2($m)`
- `_sha256($m)`
- `_sha512($m)`
- `_rightRotate($int, $amt)`
- `_rightShift($int, $amt)`
- `_not($int)`
- `_add()`
- `_string_shift(&$string, $index = 1)`

