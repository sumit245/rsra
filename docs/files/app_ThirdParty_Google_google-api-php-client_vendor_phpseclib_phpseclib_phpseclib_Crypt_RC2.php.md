# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\RC2.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\RC2.php`
- Type: PHP
- Size: 22544 bytes

## Summary (from docblocks)

Pure-PHP implementation of RC2.
Uses mcrypt, if available, and an internal implementation, otherwise.
PHP version 5
Useful resources are as follows:
 - {@link http://tools.ietf.org/html/rfc2268}
Here's a short example of how to use this library:
<code>
<?php
   include 'vendor/autoload.php';
   $rc2 = new \phpseclib\Crypt\RC2();
   $rc2->setKey('abcdefgh');
   $plaintext = str_repeat('a', 1024);
   echo $rc2->decrypt($rc2->encrypt($plaintext));
?>
</code>
@category Crypt
@package  RC2
@author   Patrick Monnerat <pm@datasphere.ch>
@license  http://www.opensource.org/licenses/mit-license.html  MIT License
@link     http://phpseclib.sourceforge.net

Pure-PHP implementation of RC2.
@package RC2
@access  public

Block Length of the cipher
@see \phpseclib\Crypt\Base::block_size
@var int
@access private

The Key
@see \phpseclib\Crypt\Base::key
@see self::setKey()
@var string
@access private

The Original (unpadded) Key
@see \phpseclib\Crypt\Base::key
@see self::setKey()
@see self::encrypt()
@see self::decrypt()
@var string
@access private

Don't truncate / null pad key
@see \phpseclib\Crypt\Base::_clearBuffers()
@var bool
@access private

Key Length (in bytes)
@see \phpseclib\Crypt\RC2::setKeyLength()
@var int
@access private

The mcrypt specific name of the cipher
@see \phpseclib\Crypt\Base::cipher_name_mcrypt
@var string
@access private

Optimizing value while CFB-encrypting
@see \phpseclib\Crypt\Base::cfb_init_len
@var int
@access private

The key length in bits.
@see self::setKeyLength()
@see self::setKey()
@var int
@access private
@internal Should be in range [1..1024].
@internal Changing this value after setting the key has no effect.

The key length in bits.
@see self::isValidEnine()
@see self::setKey()
@var int
@access private
@internal Should be in range [1..1024].

The Key Schedule
@see self::_setupKey()
@var array
@access private

Key expansion randomization table.
Twice the same 256-value sequence to save a modulus in key expansion.
@see self::setKey()
@var array
@access private

Inverse key expansion randomization table.
@see self::setKey()
@var array
@access private

Test for engine validity
This is mainly just a wrapper to set things up for \phpseclib\Crypt\Base::isValidEngine()
@see \phpseclib\Crypt\Base::__construct()
@param int $engine
@access public
@return bool

Sets the key length.
Valid key lengths are 8 to 1024.
Calling this function after setting the key has no effect until the next
 \phpseclib\Crypt\RC2::setKey() call.
@access public
@param int $length in bits

Returns the current key length
@access public
@return int

Sets the key.
Keys can be of any length. RC2, itself, uses 8 to 1024 bit keys (eg.
strlen($key) <= 128), however, we only use the first 128 bytes if $key
has more then 128 bytes in it, and set $key to a single null byte if
it is empty.
If the key is not explicitly set, it'll be assumed to be a single
null byte.
@see \phpseclib\Crypt\Base::setKey()
@access public
@param string $key
@param int $t1 optional Effective key length in bits.

Encrypts a message.
Mostly a wrapper for \phpseclib\Crypt\Base::encrypt, with some additional OpenSSL handling code
@see self::decrypt()
@access public
@param string $plaintext
@return string $ciphertext

Decrypts a message.
Mostly a wrapper for \phpseclib\Crypt\Base::decrypt, with some additional OpenSSL handling code
@see self::encrypt()
@access public
@param string $ciphertext
@return string $plaintext

Encrypts a block
@see \phpseclib\Crypt\Base::_encryptBlock()
@see \phpseclib\Crypt\Base::encrypt()
@access private
@param string $in
@return string

Decrypts a block
@see \phpseclib\Crypt\Base::_decryptBlock()
@see \phpseclib\Crypt\Base::decrypt()
@access private
@param string $in
@return string

Setup the \phpseclib\Crypt\Base::ENGINE_MCRYPT $engine
@see \phpseclib\Crypt\Base::_setupMcrypt()
@access private

Creates the key schedule
@see \phpseclib\Crypt\Base::_setupKey()
@access private

Setup the performance-optimized function for de/encrypt()
@see \phpseclib\Crypt\Base::_setupInlineCrypt()
@access private

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\RC2.php`

**Classes**:
- `phpseclib\Crypt\RC2 extends Base`

**Functions/Methods**:
- `isValidEngine($engine)`
- `setKeyLength($length)`
- `getKeyLength()`
- `setKey($key, $t1 = 0)`
- `encrypt($plaintext)`
- `decrypt($ciphertext)`
- `_encryptBlock($in)`
- `_decryptBlock($in)`
- `_setupMcrypt()`
- `_setupKey()`
- `_setupInlineCrypt()`

