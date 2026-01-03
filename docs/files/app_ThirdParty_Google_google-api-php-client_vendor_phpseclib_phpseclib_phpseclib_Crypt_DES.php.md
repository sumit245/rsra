# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\DES.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\DES.php`
- Type: PHP
- Size: 71491 bytes

## Summary (from docblocks)

Pure-PHP implementation of DES.
Uses mcrypt, if available, and an internal implementation, otherwise.
PHP version 5
Useful resources are as follows:
 - {@link http://en.wikipedia.org/wiki/DES_supplementary_material Wikipedia: DES supplementary material}
 - {@link http://www.itl.nist.gov/fipspubs/fip46-2.htm FIPS 46-2 - (DES), Data Encryption Standard}
 - {@link http://www.cs.eku.edu/faculty/styer/460/Encrypt/JS-DES.html JavaScript DES Example}
Here's a short example of how to use this library:
<code>
<?php
   include 'vendor/autoload.php';
   $des = new \phpseclib\Crypt\DES();
   $des->setKey('abcdefgh');
   $size = 10 * 1024;
   $plaintext = '';
   for ($i = 0; $i < $size; $i++) {
       $plaintext.= 'a';
   }
   echo $des->decrypt($des->encrypt($plaintext));
?>
</code>
@category  Crypt
@package   DES
@author    Jim Wigginton <terrafrost@php.net>
@copyright 2007 Jim Wigginton
@license   http://www.opensource.org/licenses/mit-license.html  MIT License
@link      http://phpseclib.sourceforge.net

Pure-PHP implementation of DES.
@package DES
@author  Jim Wigginton <terrafrost@php.net>
@access  public

#@+
@access private
@see \phpseclib\Crypt\DES::_setupKey()
@see \phpseclib\Crypt\DES::_processBlock()

Contains $keys[self::ENCRYPT]

Contains $keys[self::DECRYPT]

#@-

Block Length of the cipher
@see \phpseclib\Crypt\Base::block_size
@var int
@access private

Key Length (in bytes)
@see \phpseclib\Crypt\Base::setKeyLength()
@var int
@access private

The mcrypt specific name of the cipher
@see \phpseclib\Crypt\Base::cipher_name_mcrypt
@var string
@access private

The OpenSSL names of the cipher / modes
@see \phpseclib\Crypt\Base::openssl_mode_names
@var array
@access private

Optimizing value while CFB-encrypting
@see \phpseclib\Crypt\Base::cfb_init_len
@var int
@access private

Switch for DES/3DES encryption
Used only if $engine == self::ENGINE_INTERNAL
@see self::_setupKey()
@see self::_processBlock()
@var int
@access private

max possible size of $key
@see self::setKey()
@var string
@access private

The Key Schedule
@see self::_setupKey()
@var array
@access private

Shuffle table.
For each byte value index, the entry holds an 8-byte string
with each byte containing all bits in the same state as the
corresponding bit in the index value.
@see self::_processBlock()
@see self::_setupKey()
@var array
@access private

IP mapping helper table.
Indexing this table with each source byte performs the initial bit permutation.
@var array
@access private

Inverse IP mapping helper table.
Indexing this table with a byte value reverses the bit order.
@var array
@access private

Pre-permuted S-box1
Each box ($sbox1-$sbox8) has been vectorized, then each value pre-permuted using the
P table: concatenation can then be replaced by exclusive ORs.
@var array
@access private

Pre-permuted S-box2
@var array
@access private

Pre-permuted S-box3
@var array
@access private

Pre-permuted S-box4
@var array
@access private

Pre-permuted S-box5
@var array
@access private

Pre-permuted S-box6
@var array
@access private

Pre-permuted S-box7
@var array
@access private

Pre-permuted S-box8
@var array
@access private

Test for engine validity
This is mainly just a wrapper to set things up for \phpseclib\Crypt\Base::isValidEngine()
@see \phpseclib\Crypt\Base::isValidEngine()
@param int $engine
@access public
@return bool

Sets the key.
Keys can be of any length.  DES, itself, uses 64-bit keys (eg. strlen($key) == 8), however, we
only use the first eight, if $key has more then eight characters in it, and pad $key with the
null byte if it is less then eight characters long.
DES also requires that every eighth bit be a parity bit, however, we'll ignore that.
If the key is not explicitly set, it'll be assumed to be all zero's.
@see \phpseclib\Crypt\Base::setKey()
@access public
@param string $key

Encrypts a block
@see \phpseclib\Crypt\Base::_encryptBlock()
@see \phpseclib\Crypt\Base::encrypt()
@see self::encrypt()
@access private
@param string $in
@return string

Decrypts a block
@see \phpseclib\Crypt\Base::_decryptBlock()
@see \phpseclib\Crypt\Base::decrypt()
@see self::decrypt()
@access private
@param string $in
@return string

Encrypts or decrypts a 64-bit block
$mode should be either self::ENCRYPT or self::DECRYPT.  See
{@link http://en.wikipedia.org/wiki/Image:Feistel.png Feistel.png} to get a general
idea of what this function does.
@see self::_encryptBlock()
@see self::_decryptBlock()
@access private
@param string $block
@param int $mode
@return string

Creates the key schedule
@see \phpseclib\Crypt\Base::_setupKey()
@access private

Setup the performance-optimized function for de/encrypt()
@see \phpseclib\Crypt\Base::_setupInlineCrypt()
@access private

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\DES.php`

**Classes**:
- `phpseclib\Crypt\DES extends Base`

**Functions/Methods**:
- `isValidEngine($engine)`
- `setKey($key)`
- `_encryptBlock($in)`
- `_decryptBlock($in)`
- `_processBlock($block, $mode)`
- `_setupKey()`
- `_setupInlineCrypt()`

