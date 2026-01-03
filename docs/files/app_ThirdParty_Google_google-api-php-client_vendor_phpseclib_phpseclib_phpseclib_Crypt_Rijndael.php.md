# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\Rijndael.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\Rijndael.php`
- Type: PHP
- Size: 41781 bytes

## Summary (from docblocks)

Pure-PHP implementation of Rijndael.
Uses mcrypt, if available/possible, and an internal implementation, otherwise.
PHP version 5
If {@link self::setBlockLength() setBlockLength()} isn't called, it'll be assumed to be 128 bits.  If
{@link self::setKeyLength() setKeyLength()} isn't called, it'll be calculated from
{@link self::setKey() setKey()}.  ie. if the key is 128-bits, the key length will be 128-bits.  If it's
136-bits it'll be null-padded to 192-bits and 192 bits will be the key length until
{@link self::setKey() setKey()} is called, again, at which point, it'll be recalculated.
Not all Rijndael implementations may support 160-bits or 224-bits as the block length / key length.  mcrypt, for example,
does not.  AES, itself, only supports block lengths of 128 and key lengths of 128, 192, and 256.
{@link http://csrc.nist.gov/archive/aes/rijndael/Rijndael-ammended.pdf#page=10 Rijndael-ammended.pdf#page=10} defines the
algorithm for block lengths of 192 and 256 but not for block lengths / key lengths of 160 and 224.  Indeed, 160 and 224
are first defined as valid key / block lengths in
{@link http://csrc.nist.gov/archive/aes/rijndael/Rijndael-ammended.pdf#page=44 Rijndael-ammended.pdf#page=44}:
Extensions: Other block and Cipher Key lengths.
Note: Use of 160/224-bit Keys must be explicitly set by setKeyLength(160) respectively setKeyLength(224).
{@internal The variable names are the same as those in
{@link http://www.csrc.nist.gov/publications/fips/fips197/fips-197.pdf#page=10 fips-197.pdf#page=10}.}}
Here's a short example of how to use this library:
<code>
<?php
   include 'vendor/autoload.php';
   $rijndael = new \phpseclib\Crypt\Rijndael();
   $rijndael->setKey('abcdefghijklmnop');
   $size = 10 * 1024;
   $plaintext = '';
   for ($i = 0; $i < $size; $i++) {
       $plaintext.= 'a';
   }
   echo $rijndael->decrypt($rijndael->encrypt($plaintext));
?>
</code>
@category  Crypt
@package   Rijndael
@author    Jim Wigginton <terrafrost@php.net>
@copyright 2008 Jim Wigginton
@license   http://www.opensource.org/licenses/mit-license.html  MIT License
@link      http://phpseclib.sourceforge.net

Pure-PHP implementation of Rijndael.
@package Rijndael
@author  Jim Wigginton <terrafrost@php.net>
@access  public

The mcrypt specific name of the cipher
Mcrypt is useable for 128/192/256-bit $block_size/$key_length. For 160/224 not.
\phpseclib\Crypt\Rijndael determines automatically whether mcrypt is useable
or not for the current $block_size/$key_length.
In case of, $cipher_name_mcrypt will be set dynamically at run time accordingly.
@see \phpseclib\Crypt\Base::cipher_name_mcrypt
@see \phpseclib\Crypt\Base::engine
@see self::isValidEngine()
@var string
@access private

The default salt used by setPassword()
@see \phpseclib\Crypt\Base::password_default_salt
@see \phpseclib\Crypt\Base::setPassword()
@var string
@access private

The Key Schedule
@see self::_setup()
@var array
@access private

The Inverse Key Schedule
@see self::_setup()
@var array
@access private

The Block Length divided by 32
@see self::setBlockLength()
@var int
@access private
@internal The max value is 256 / 32 = 8, the min value is 128 / 32 = 4.  Exists in conjunction with $block_size
   because the encryption / decryption / key schedule creation requires this number and not $block_size.  We could
   derive this from $block_size or vice versa, but that'd mean we'd have to do multiple shift operations, so in lieu
   of that, we'll just precompute it once.

The Key Length (in bytes)
@see self::setKeyLength()
@var int
@access private
@internal The max value is 256 / 8 = 32, the min value is 128 / 8 = 16.  Exists in conjunction with $Nk
   because the encryption / decryption / key schedule creation requires this number and not $key_length.  We could
   derive this from $key_length or vice versa, but that'd mean we'd have to do multiple shift operations, so in lieu
   of that, we'll just precompute it once.

The Key Length divided by 32
@see self::setKeyLength()
@var int
@access private
@internal The max value is 256 / 32 = 8, the min value is 128 / 32 = 4

The Number of Rounds
@var int
@access private
@internal The max value is 14, the min value is 10.

Shift offsets
@var array
@access private

Holds the last used key- and block_size information
@var array
@access private

Sets the key length.
Valid key lengths are 128, 160, 192, 224, and 256.  If the length is less than 128, it will be rounded up to
128.  If the length is greater than 128 and invalid, it will be rounded down to the closest valid amount.
Note: phpseclib extends Rijndael (and AES) for using 160- and 224-bit keys but they are officially not defined
      and the most (if not all) implementations are not able using 160/224-bit keys but round/pad them up to
      192/256 bits as, for example, mcrypt will do.
      That said, if you want be compatible with other Rijndael and AES implementations,
      you should not setKeyLength(160) or setKeyLength(224).
Additional: In case of 160- and 224-bit keys, phpseclib will/can, for that reason, not use
            the mcrypt php extension, even if available.
            This results then in slower encryption.
@access public
@param int $length

Sets the block length
Valid block lengths are 128, 160, 192, 224, and 256.  If the length is less than 128, it will be rounded up to
128.  If the length is greater than 128 and invalid, it will be rounded down to the closest valid amount.
@access public
@param int $length

Test for engine validity
This is mainly just a wrapper to set things up for \phpseclib\Crypt\Base::isValidEngine()
@see \phpseclib\Crypt\Base::__construct()
@param int $engine
@access public
@return bool

Encrypts a block
@access private
@param string $in
@return string

Decrypts a block
@access private
@param string $in
@return string

Setup the key (expansion)
@see \phpseclib\Crypt\Base::_setupKey()
@access private

Performs S-Box substitutions
@access private
@param int $word

Provides the mixColumns and sboxes tables
@see self::_encryptBlock()
@see self::_setupInlineCrypt()
@see self::_subWord()
@access private
@return array &$tables

Provides the inverse mixColumns and inverse sboxes tables
@see self::_decryptBlock()
@see self::_setupInlineCrypt()
@see self::_setupKey()
@access private
@return array &$tables

Setup the performance-optimized function for de/encrypt()
@see \phpseclib\Crypt\Base::_setupInlineCrypt()
@access private

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\Rijndael.php`

**Classes**:
- `phpseclib\Crypt\Rijndael extends Base`

**Functions/Methods**:
- `setKeyLength($length)`
- `setBlockLength($length)`
- `isValidEngine($engine)`
- `_encryptBlock($in)`
- `_decryptBlock($in)`
- `_setupKey()`
- `_subWord($word)`
- `_setupInlineCrypt()`

