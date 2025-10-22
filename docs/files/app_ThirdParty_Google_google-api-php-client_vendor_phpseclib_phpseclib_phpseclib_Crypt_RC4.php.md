# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\RC4.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\RC4.php`
- Type: PHP
- Size: 8754 bytes

## Summary (from docblocks)

Pure-PHP implementation of RC4.
Uses mcrypt, if available, and an internal implementation, otherwise.
PHP version 5
Useful resources are as follows:
 - {@link http://www.mozilla.org/projects/security/pki/nss/draft-kaukonen-cipher-arcfour-03.txt ARCFOUR Algorithm}
 - {@link http://en.wikipedia.org/wiki/RC4 - Wikipedia: RC4}
RC4 is also known as ARCFOUR or ARC4.  The reason is elaborated upon at Wikipedia.  This class is named RC4 and not
ARCFOUR or ARC4 because RC4 is how it is referred to in the SSH1 specification.
Here's a short example of how to use this library:
<code>
<?php
   include 'vendor/autoload.php';
   $rc4 = new \phpseclib\Crypt\RC4();
   $rc4->setKey('abcdefgh');
   $size = 10 * 1024;
   $plaintext = '';
   for ($i = 0; $i < $size; $i++) {
       $plaintext.= 'a';
   }
   echo $rc4->decrypt($rc4->encrypt($plaintext));
?>
</code>
@category  Crypt
@package   RC4
@author    Jim Wigginton <terrafrost@php.net>
@copyright 2007 Jim Wigginton
@license   http://www.opensource.org/licenses/mit-license.html  MIT License
@link      http://phpseclib.sourceforge.net

Pure-PHP implementation of RC4.
@package RC4
@author  Jim Wigginton <terrafrost@php.net>
@access  public

#@+
@access private
@see \phpseclib\Crypt\RC4::_crypt()

#@-

Block Length of the cipher
RC4 is a stream cipher
so we the block_size to 0
@see \phpseclib\Crypt\Base::block_size
@var int
@access private

Key Length (in bytes)
@see \phpseclib\Crypt\RC4::setKeyLength()
@var int
@access private

The mcrypt specific name of the cipher
@see \phpseclib\Crypt\Base::cipher_name_mcrypt
@var string
@access private

Holds whether performance-optimized $inline_crypt() can/should be used.
@see \phpseclib\Crypt\Base::inline_crypt
@var mixed
@access private

The Key
@see self::setKey()
@var string
@access private

The Key Stream for decryption and encryption
@see self::setKey()
@var array
@access private

Default Constructor.
Determines whether or not the mcrypt extension should be used.
@see \phpseclib\Crypt\Base::__construct()
@return \phpseclib\Crypt\RC4
@access public

Test for engine validity
This is mainly just a wrapper to set things up for \phpseclib\Crypt\Base::isValidEngine()
@see \phpseclib\Crypt\Base::__construct()
@param int $engine
@access public
@return bool

Dummy function.
Some protocols, such as WEP, prepend an "initialization vector" to the key, effectively creating a new key [1].
If you need to use an initialization vector in this manner, feel free to prepend it to the key, yourself, before
calling setKey().
[1] WEP's initialization vectors (IV's) are used in a somewhat insecure way.  Since, in that protocol,
the IV's are relatively easy to predict, an attack described by
{@link http://www.drizzle.com/~aboba/IEEE/rc4_ksaproc.pdf Scott Fluhrer, Itsik Mantin, and Adi Shamir}
can be used to quickly guess at the rest of the key.  The following links elaborate:
{@link http://www.rsa.com/rsalabs/node.asp?id=2009 http://www.rsa.com/rsalabs/node.asp?id=2009}
{@link http://en.wikipedia.org/wiki/Related_key_attack http://en.wikipedia.org/wiki/Related_key_attack}
@param string $iv
@see self::setKey()
@access public

Sets the key length
Keys can be between 1 and 256 bytes long.
@access public
@param int $length

Encrypts a message.
@see \phpseclib\Crypt\Base::decrypt()
@see self::_crypt()
@access public
@param string $plaintext
@return string $ciphertext

Decrypts a message.
$this->decrypt($this->encrypt($plaintext)) == $this->encrypt($this->encrypt($plaintext)).
At least if the continuous buffer is disabled.
@see \phpseclib\Crypt\Base::encrypt()
@see self::_crypt()
@access public
@param string $ciphertext
@return string $plaintext

Encrypts a block
@access private
@param string $in

Decrypts a block
@access private
@param string $in

Setup the key (expansion)
@see \phpseclib\Crypt\Base::_setupKey()
@access private

Encrypts or decrypts a message.
@see self::encrypt()
@see self::decrypt()
@access private
@param string $text
@param int $mode
@return string $text

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\RC4.php`

**Classes**:
- `phpseclib\Crypt\is`
- `phpseclib\Crypt\RC4 extends Base`

**Functions/Methods**:
- `__construct()`
- `isValidEngine($engine)`
- `setIV($iv)`
- `setKeyLength($length)`
- `encrypt($plaintext)`
- `decrypt($ciphertext)`
- `_encryptBlock($in)`
- `_decryptBlock($in)`
- `_setupKey()`
- `_crypt($text, $mode)`

