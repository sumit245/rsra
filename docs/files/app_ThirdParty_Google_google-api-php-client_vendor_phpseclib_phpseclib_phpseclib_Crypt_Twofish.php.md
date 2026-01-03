# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\Twofish.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\Twofish.php`
- Type: PHP
- Size: 37824 bytes

## Summary (from docblocks)

Pure-PHP implementation of Twofish.
Uses mcrypt, if available, and an internal implementation, otherwise.
PHP version 5
Useful resources are as follows:
 - {@link http://en.wikipedia.org/wiki/Twofish Wikipedia description of Twofish}
Here's a short example of how to use this library:
<code>
<?php
   include 'vendor/autoload.php';
   $twofish = new \phpseclib\Crypt\Twofish();
   $twofish->setKey('12345678901234567890123456789012');
   $plaintext = str_repeat('a', 1024);
   echo $twofish->decrypt($twofish->encrypt($plaintext));
?>
</code>
@category  Crypt
@package   Twofish
@author    Jim Wigginton <terrafrost@php.net>
@author    Hans-Juergen Petrich <petrich@tronic-media.com>
@copyright 2007 Jim Wigginton
@license   http://www.opensource.org/licenses/mit-license.html  MIT License
@link      http://phpseclib.sourceforge.net

Pure-PHP implementation of Twofish.
@package Twofish
@author  Jim Wigginton <terrafrost@php.net>
@author  Hans-Juergen Petrich <petrich@tronic-media.com>
@access  public

The mcrypt specific name of the cipher
@see \phpseclib\Crypt\Base::cipher_name_mcrypt
@var string
@access private

Optimizing value while CFB-encrypting
@see \phpseclib\Crypt\Base::cfb_init_len
@var int
@access private

Q-Table
@var array
@access private

Q-Table
@var array
@access private

M-Table
@var array
@access private

M-Table
@var array
@access private

M-Table
@var array
@access private

M-Table
@var array
@access private

The Key Schedule Array
@var array
@access private

The Key depended S-Table 0
@var array
@access private

The Key depended S-Table 1
@var array
@access private

The Key depended S-Table 2
@var array
@access private

The Key depended S-Table 3
@var array
@access private

Holds the last used key
@var array
@access private

The Key Length (in bytes)
@see Crypt_Twofish::setKeyLength()
@var int
@access private

Sets the key length.
Valid key lengths are 128, 192 or 256 bits
@access public
@param int $length

Setup the key (expansion)
@see \phpseclib\Crypt\Base::_setupKey()
@access private

_mdsrem function using by the twofish cipher algorithm
@access private
@param string $A
@param string $B
@return array

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

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\Twofish.php`

**Classes**:
- `phpseclib\Crypt\Twofish extends Base`

**Functions/Methods**:
- `setKeyLength($length)`
- `_setupKey()`
- `_mdsrem($A, $B)`
- `_encryptBlock($in)`
- `_decryptBlock($in)`
- `_setupInlineCrypt()`

