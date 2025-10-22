# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\TripleDES.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\TripleDES.php`
- Type: PHP
- Size: 13978 bytes

## Summary (from docblocks)

Pure-PHP implementation of Triple DES.
Uses mcrypt, if available, and an internal implementation, otherwise.  Operates in the EDE3 mode (encrypt-decrypt-encrypt).
PHP version 5
Here's a short example of how to use this library:
<code>
<?php
   include 'vendor/autoload.php';
   $des = new \phpseclib\Crypt\TripleDES();
   $des->setKey('abcdefghijklmnopqrstuvwx');
   $size = 10 * 1024;
   $plaintext = '';
   for ($i = 0; $i < $size; $i++) {
       $plaintext.= 'a';
   }
   echo $des->decrypt($des->encrypt($plaintext));
?>
</code>
@category  Crypt
@package   TripleDES
@author    Jim Wigginton <terrafrost@php.net>
@copyright 2007 Jim Wigginton
@license   http://www.opensource.org/licenses/mit-license.html  MIT License
@link      http://phpseclib.sourceforge.net

Pure-PHP implementation of Triple DES.
@package TripleDES
@author  Jim Wigginton <terrafrost@php.net>
@access  public

Encrypt / decrypt using inner chaining
Inner chaining is used by SSH-1 and is generally considered to be less secure then outer chaining (self::MODE_CBC3).

Encrypt / decrypt using outer chaining
Outer chaining is used by SSH-2 and when the mode is set to \phpseclib\Crypt\Base::MODE_CBC.

Key Length (in bytes)
@see \phpseclib\Crypt\TripleDES::setKeyLength()
@var int
@access private

The default salt used by setPassword()
@see \phpseclib\Crypt\Base::password_default_salt
@see \phpseclib\Crypt\Base::setPassword()
@var string
@access private

The mcrypt specific name of the cipher
@see \phpseclib\Crypt\DES::cipher_name_mcrypt
@see \phpseclib\Crypt\Base::cipher_name_mcrypt
@var string
@access private

Optimizing value while CFB-encrypting
@see \phpseclib\Crypt\Base::cfb_init_len
@var int
@access private

max possible size of $key
@see self::setKey()
@see \phpseclib\Crypt\DES::setKey()
@var string
@access private

Internal flag whether using self::MODE_3CBC or not
@var bool
@access private

The \phpseclib\Crypt\DES objects
Used only if $mode_3cbc === true
@var array
@access private

Default Constructor.
Determines whether or not the mcrypt extension should be used.
$mode could be:
- \phpseclib\Crypt\Base::MODE_ECB
- \phpseclib\Crypt\Base::MODE_CBC
- \phpseclib\Crypt\Base::MODE_CTR
- \phpseclib\Crypt\Base::MODE_CFB
- \phpseclib\Crypt\Base::MODE_OFB
- \phpseclib\Crypt\TripleDES::MODE_3CBC
If not explicitly set, \phpseclib\Crypt\Base::MODE_CBC will be used.
@see \phpseclib\Crypt\DES::__construct()
@see \phpseclib\Crypt\Base::__construct()
@param int $mode
@access public

Test for engine validity
This is mainly just a wrapper to set things up for \phpseclib\Crypt\Base::isValidEngine()
@see \phpseclib\Crypt\Base::__construct()
@param int $engine
@access public
@return bool

Sets the initialization vector. (optional)
SetIV is not required when \phpseclib\Crypt\Base::MODE_ECB is being used.  If not explicitly set, it'll be assumed
to be all zero's.
@see \phpseclib\Crypt\Base::setIV()
@access public
@param string $iv

Sets the key length.
Valid key lengths are 64, 128 and 192
@see \phpseclib\Crypt\Base:setKeyLength()
@access public
@param int $length

Sets the key.
Keys can be of any length.  Triple DES, itself, can use 128-bit (eg. strlen($key) == 16) or
192-bit (eg. strlen($key) == 24) keys.  This function pads and truncates $key as appropriate.
DES also requires that every eighth bit be a parity bit, however, we'll ignore that.
If the key is not explicitly set, it'll be assumed to be all null bytes.
@access public
@see \phpseclib\Crypt\DES::setKey()
@see \phpseclib\Crypt\Base::setKey()
@param string $key

Encrypts a message.
@see \phpseclib\Crypt\Base::encrypt()
@access public
@param string $plaintext
@return string $cipertext

Decrypts a message.
@see \phpseclib\Crypt\Base::decrypt()
@access public
@param string $ciphertext
@return string $plaintext

Treat consecutive "packets" as if they are a continuous buffer.
Say you have a 16-byte plaintext $plaintext.  Using the default behavior, the two following code snippets
will yield different outputs:
<code>
   echo $des->encrypt(substr($plaintext, 0, 8));
   echo $des->encrypt(substr($plaintext, 8, 8));
</code>
<code>
   echo $des->encrypt($plaintext);
</code>
The solution is to enable the continuous buffer.  Although this will resolve the above discrepancy, it creates
another, as demonstrated with the following:
<code>
   $des->encrypt(substr($plaintext, 0, 8));
   echo $des->decrypt($des->encrypt(substr($plaintext, 8, 8)));
</code>
<code>
   echo $des->decrypt($des->encrypt(substr($plaintext, 8, 8)));
</code>
With the continuous buffer disabled, these would yield the same output.  With it enabled, they yield different
outputs.  The reason is due to the fact that the initialization vector's change after every encryption /
decryption round when the continuous buffer is enabled.  When it's disabled, they remain constant.
Put another way, when the continuous buffer is enabled, the state of the \phpseclib\Crypt\DES() object changes after each
encryption / decryption round, whereas otherwise, it'd remain constant.  For this reason, it's recommended that
continuous buffers not be used.  They do offer better security and are, in fact, sometimes required (SSH uses them),
however, they are also less intuitive and more likely to cause you problems.
@see \phpseclib\Crypt\Base::enableContinuousBuffer()
@see self::disableContinuousBuffer()
@access public

Treat consecutive packets as if they are a discontinuous buffer.
The default behavior.
@see \phpseclib\Crypt\Base::disableContinuousBuffer()
@see self::enableContinuousBuffer()
@access public

Creates the key schedule
@see \phpseclib\Crypt\DES::_setupKey()
@see \phpseclib\Crypt\Base::_setupKey()
@access private

Sets the internal crypt engine
@see \phpseclib\Crypt\Base::__construct()
@see \phpseclib\Crypt\Base::setPreferredEngine()
@param int $engine
@access public
@return int

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\TripleDES.php`

**Classes**:
- `phpseclib\Crypt\TripleDES extends DES`

**Functions/Methods**:
- `__construct($mode = Base::MODE_CBC)`
- `isValidEngine($engine)`
- `setIV($iv)`
- `setKeyLength($length)`
- `setKey($key)`
- `encrypt($plaintext)`
- `decrypt($ciphertext)`
- `enableContinuousBuffer()`
- `disableContinuousBuffer()`
- `_setupKey()`
- `setPreferredEngine($engine)`

