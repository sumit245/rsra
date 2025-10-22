# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\Blowfish.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\Blowfish.php`
- Type: PHP
- Size: 26596 bytes

## Summary (from docblocks)

Pure-PHP implementation of Blowfish.
Uses mcrypt, if available, and an internal implementation, otherwise.
PHP version 5
Useful resources are as follows:
 - {@link http://en.wikipedia.org/wiki/Blowfish_(cipher) Wikipedia description of Blowfish}
Here's a short example of how to use this library:
<code>
<?php
   include 'vendor/autoload.php';
   $blowfish = new \phpseclib\Crypt\Blowfish();
   $blowfish->setKey('12345678901234567890123456789012');
   $plaintext = str_repeat('a', 1024);
   echo $blowfish->decrypt($blowfish->encrypt($plaintext));
?>
</code>
@category  Crypt
@package   Blowfish
@author    Jim Wigginton <terrafrost@php.net>
@author    Hans-Juergen Petrich <petrich@tronic-media.com>
@copyright 2007 Jim Wigginton
@license   http://www.opensource.org/licenses/mit-license.html  MIT License
@link      http://phpseclib.sourceforge.net

Pure-PHP implementation of Blowfish.
@package Blowfish
@author  Jim Wigginton <terrafrost@php.net>
@author  Hans-Juergen Petrich <petrich@tronic-media.com>
@access  public

Block Length of the cipher
@see \phpseclib\Crypt\Base::block_size
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

The fixed subkeys boxes ($sbox0 - $sbox3) with 256 entries each
S-Box 0
@access private
@var    array

S-Box 1
@access private
@var    array

S-Box 2
@access private
@var    array

S-Box 3
@access private
@var    array

P-Array consists of 18 32-bit subkeys
@var array
@access private

The BCTX-working Array
Holds the expanded key [p] and the key-depended s-boxes [sb]
@var array
@access private

Holds the last used key
@var array
@access private

The Key Length (in bytes)
@see \phpseclib\Crypt\Base::setKeyLength()
@var int
@access private
@internal The max value is 256 / 8 = 32, the min value is 128 / 8 = 16.  Exists in conjunction with $Nk
   because the encryption / decryption / key schedule creation requires this number and not $key_length.  We could
   derive this from $key_length or vice versa, but that'd mean we'd have to do multiple shift operations, so in lieu
   of that, we'll just precompute it once.

Sets the key length.
Key lengths can be between 32 and 448 bits.
@access public
@param int $length

Test for engine validity
This is mainly just a wrapper to set things up for \phpseclib\Crypt\Base::isValidEngine()
@see \phpseclib\Crypt\Base::isValidEngine()
@param int $engine
@access public
@return bool

Setup the key (expansion)
@see \phpseclib\Crypt\Base::_setupKey()
@access private

Encrypts a block
@access private
@param string $in
@return string

Decrypts a block
@access private
@param string $in
@return string

Setup the performance-optimized function for de/encrypt()
@see \phpseclib\Crypt\Base::_setupInlineCrypt()
@access private

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\Blowfish.php`

**Classes**:
- `phpseclib\Crypt\Blowfish extends Base`

**Functions/Methods**:
- `setKeyLength($length)`
- `isValidEngine($engine)`
- `_setupKey()`
- `_encryptBlock($in)`
- `_decryptBlock($in)`
- `_setupInlineCrypt()`

