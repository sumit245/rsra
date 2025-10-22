# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\RSA.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\RSA.php`
- Type: PHP
- Size: 106117 bytes

## Summary (from docblocks)

Pure-PHP PKCS#1 (v2.1) compliant implementation of RSA.
PHP version 5
Here's an example of how to encrypt and decrypt text with this library:
<code>
<?php
   include 'vendor/autoload.php';
   $rsa = new \phpseclib\Crypt\RSA();
   extract($rsa->createKey());
   $plaintext = 'terrafrost';
   $rsa->loadKey($privatekey);
   $ciphertext = $rsa->encrypt($plaintext);
   $rsa->loadKey($publickey);
   echo $rsa->decrypt($ciphertext);
?>
</code>
Here's an example of how to create signatures and verify signatures with this library:
<code>
<?php
   include 'vendor/autoload.php';
   $rsa = new \phpseclib\Crypt\RSA();
   extract($rsa->createKey());
   $plaintext = 'terrafrost';
   $rsa->loadKey($privatekey);
   $signature = $rsa->sign($plaintext);
   $rsa->loadKey($publickey);
   echo $rsa->verify($plaintext, $signature) ? 'verified' : 'unverified';
?>
</code>
@category  Crypt
@package   RSA
@author    Jim Wigginton <terrafrost@php.net>
@copyright 2009 Jim Wigginton
@license   http://www.opensource.org/licenses/mit-license.html  MIT License
@link      http://phpseclib.sourceforge.net

Pure-PHP PKCS#1 compliant implementation of RSA.
@package RSA
@author  Jim Wigginton <terrafrost@php.net>
@access  public

#@+
@access public
@see self::encrypt()
@see self::decrypt()

Use {@link http://en.wikipedia.org/wiki/Optimal_Asymmetric_Encryption_Padding Optimal Asymmetric Encryption Padding}
(OAEP) for encryption / decryption.
Uses sha1 by default.
@see self::setHash()
@see self::setMGFHash()

Use PKCS#1 padding.
Although self::ENCRYPTION_OAEP offers more security, including PKCS#1 padding is necessary for purposes of backwards
compatibility with protocols (like SSH-1) written before OAEP's introduction.

Do not use any padding
Although this method is not recommended it can none-the-less sometimes be useful if you're trying to decrypt some legacy
stuff, if you're trying to diagnose why an encrypted message isn't decrypting, etc.

#@-

#@+
@access public
@see self::sign()
@see self::verify()
@see self::setHash()

Use the Probabilistic Signature Scheme for signing
Uses sha1 by default.
@see self::setSaltLength()
@see self::setMGFHash()

Use the PKCS#1 scheme by default.
Although self::SIGNATURE_PSS offers more security, including PKCS#1 signing is necessary for purposes of backwards
compatibility with protocols (like SSH-2) written before PSS's introduction.

#@-

#@+
@access private
@see \phpseclib\Crypt\RSA::createKey()

ASN1 Integer

ASN1 Bit String

ASN1 Octet String

ASN1 Object Identifier

ASN1 Sequence (with the constucted bit set)

#@-

#@+
@access private
@see \phpseclib\Crypt\RSA::__construct()

To use the pure-PHP implementation

To use the OpenSSL library
(if enabled; otherwise, the internal implementation will be used)

#@-

#@+
@access public
@see \phpseclib\Crypt\RSA::createKey()
@see \phpseclib\Crypt\RSA::setPrivateKeyFormat()

PKCS#1 formatted private key
Used by OpenSSH

PuTTY formatted private key

XML formatted private key

PKCS#8 formatted private key

#@-

#@+
@access public
@see \phpseclib\Crypt\RSA::createKey()
@see \phpseclib\Crypt\RSA::setPublicKeyFormat()

Raw public key
An array containing two \phpseclib\Math\BigInteger objects.
The exponent can be indexed with any of the following:
0, e, exponent, publicExponent
The modulus can be indexed with any of the following:
1, n, modulo, modulus

PKCS#1 formatted public key (raw)
Used by File/X509.php
Has the following header:
-----BEGIN RSA PUBLIC KEY-----
Analogous to ssh-keygen's pem format (as specified by -m)

XML formatted public key

OpenSSH formatted public key
Place in $HOME/.ssh/authorized_keys

PKCS#1 formatted public key (encapsulated)
Used by PHP's openssl_public_encrypt() and openssl's rsautl (when -pubin is set)
Has the following header:
-----BEGIN PUBLIC KEY-----
Analogous to ssh-keygen's pkcs8 format (as specified by -m). Although PKCS8
is specific to private keys it's basically creating a DER-encoded wrapper
for keys. This just extends that same concept to public keys (much like ssh-keygen)

#@-

Precomputed Zero
@var \phpseclib\Math\BigInteger
@access private

Precomputed One
@var \phpseclib\Math\BigInteger
@access private

Private Key Format
@var int
@access private

Public Key Format
@var int
@access public

Modulus (ie. n)
@var \phpseclib\Math\BigInteger
@access private

Modulus length
@var \phpseclib\Math\BigInteger
@access private

Exponent (ie. e or d)
@var \phpseclib\Math\BigInteger
@access private

Primes for Chinese Remainder Theorem (ie. p and q)
@var array
@access private

Exponents for Chinese Remainder Theorem (ie. dP and dQ)
@var array
@access private

Coefficients for Chinese Remainder Theorem (ie. qInv)
@var array
@access private

Hash name
@var string
@access private

Hash function
@var \phpseclib\Crypt\Hash
@access private

Length of hash function output
@var int
@access private

Length of salt
@var int
@access private

Hash function for the Mask Generation Function
@var \phpseclib\Crypt\Hash
@access private

Length of MGF hash function output
@var int
@access private

Encryption mode
@var int
@access private

Signature mode
@var int
@access private

Public Exponent
@var mixed
@access private

Password
@var string
@access private

Components
For use with parsing XML formatted keys.  PHP's XML Parser functions use utilized - instead of PHP's DOM functions -
because PHP's XML Parser functions work on PHP4 whereas PHP's DOM functions - although surperior - don't.
@see self::_start_element_handler()
@var array
@access private

Current String
For use with parsing XML formatted keys.
@see self::_character_handler()
@see self::_stop_element_handler()
@var mixed
@access private

OpenSSL configuration file name.
Set to null to use system configuration file.
@see self::createKey()
@var mixed
@Access public

Public key comment field.
@var string
@access private

The constructor
If you want to make use of the openssl extension, you'll need to set the mode manually, yourself.  The reason
\phpseclib\Crypt\RSA doesn't do it is because OpenSSL doesn't fail gracefully.  openssl_pkey_new(), in particular, requires
openssl.cnf be present somewhere and, unfortunately, the only real way to find out is too late.
@return \phpseclib\Crypt\RSA
@access public

Create public / private key pair
Returns an array with the following three elements:
 - 'privatekey': The private key.
 - 'publickey':  The public key.
 - 'partialkey': A partially computed key (if the execution time exceeded $timeout).
                 Will need to be passed back to \phpseclib\Crypt\RSA::createKey() as the third parameter for further processing.
@access public
@param int $bits
@param int $timeout
@param array $p

Convert a private key to the appropriate format.
@access private
@see self::setPrivateKeyFormat()
@param string $RSAPrivateKey
@return string

Convert a public key to the appropriate format
@access private
@see self::setPublicKeyFormat()
@param string $RSAPrivateKey
@return string

Break a public or private key down into its constituant components
@access private
@see self::_convertPublicKey()
@see self::_convertPrivateKey()
@param string $key
@param int $type
@return array

Returns the key size
More specifically, this returns the size of the modulo in bits.
@access public
@return int

Start Element Handler
Called by xml_set_element_handler()
@access private
@param resource $parser
@param string $name
@param array $attribs

Stop Element Handler
Called by xml_set_element_handler()
@access private
@param resource $parser
@param string $name

Data Handler
Called by xml_set_character_data_handler()
@access private
@param resource $parser
@param string $data

Loads a public or private key
Returns true on success and false on failure (ie. an incorrect password was provided or the key was malformed)
@access public
@param string $key
@param int $type optional

Sets the password
Private keys can be encrypted with a password.  To unset the password, pass in the empty string or false.
Or rather, pass in $password such that empty($password) && !is_string($password) is true.
@see self::createKey()
@see self::loadKey()
@access public
@param string $password

Defines the public key
Some private key formats define the public exponent and some don't.  Those that don't define it are problematic when
used in certain contexts.  For example, in SSH-2, RSA authentication works by sending the public key along with a
message signed by the private key to the server.  The SSH-2 server looks the public key up in an index of public keys
and if it's present then proceeds to verify the signature.  Problem is, if your private key doesn't include the public
exponent this won't work unless you manually add the public exponent. phpseclib tries to guess if the key being used
is the public key but in the event that it guesses incorrectly you might still want to explicitly set the key as being
public.
Do note that when a new key is loaded the index will be cleared.
Returns true on success, false on failure
@see self::getPublicKey()
@access public
@param string $key optional
@param int $type optional
@return bool

Defines the private key
If phpseclib guessed a private key was a public key and loaded it as such it might be desirable to force
phpseclib to treat the key as a private key. This function will do that.
Do note that when a new key is loaded the index will be cleared.
Returns true on success, false on failure
@see self::getPublicKey()
@access public
@param string $key optional
@param int $type optional
@return bool

Returns the public key
The public key is only returned under two circumstances - if the private key had the public key embedded within it
or if the public key was set via setPublicKey().  If the currently loaded key is supposed to be the public key this
function won't return it since this library, for the most part, doesn't distinguish between public and private keys.
@see self::getPublicKey()
@access public
@param string $key
@param int $type optional

Returns the public key's fingerprint
The public key's fingerprint is returned, which is equivalent to running `ssh-keygen -lf rsa.pub`. If there is
no public key currently loaded, false is returned.
Example output (md5): "c1:b1:30:29:d7:b8:de:6c:97:77:10:d7:46:41:63:87" (as specified by RFC 4716)
@access public
@param string $algorithm The hashing algorithm to be used. Valid options are 'md5' and 'sha256'. False is returned
for invalid values.
@return mixed

Returns the private key
The private key is only returned if the currently loaded key contains the constituent prime numbers.
@see self::getPublicKey()
@access public
@param string $key
@param int $type optional
@return mixed

Returns a minimalistic private key
Returns the private key without the prime number constituants.  Structurally identical to a public key that
hasn't been set as the public key
@see self::getPrivateKey()
@access private
@param string $key
@param int $type optional

__toString() magic method
@access public
@return string

__clone() magic method
@access public
@return Crypt_RSA

Generates the smallest and largest numbers requiring $bits bits
@access private
@param int $bits
@return array

DER-decode the length
DER supports lengths up to (2**8)**127, however, we'll only support lengths up to (2**8)**4.  See
{@link http://itu.int/ITU-T/studygroups/com17/languages/X.690-0207.pdf#p=13 X.690 paragraph 8.1.3} for more information.
@access private
@param string $string
@return int

DER-encode the length
DER supports lengths up to (2**8)**127, however, we'll only support lengths up to (2**8)**4.  See
{@link http://itu.int/ITU-T/studygroups/com17/languages/X.690-0207.pdf#p=13 X.690 paragraph 8.1.3} for more information.
@access private
@param int $length
@return string

String Shift
Inspired by array_shift
@param string $string
@param int $index
@return string
@access private

Determines the private key format
@see self::createKey()
@access public
@param int $format

Determines the public key format
@see self::createKey()
@access public
@param int $format

Determines which hashing function should be used
Used with signature production / verification and (if the encryption mode is self::ENCRYPTION_OAEP) encryption and
decryption.  If $hash isn't supported, sha1 is used.
@access public
@param string $hash

Determines which hashing function should be used for the mask generation function
The mask generation function is used by self::ENCRYPTION_OAEP and self::SIGNATURE_PSS and although it's
best if Hash and MGFHash are set to the same thing this is not a requirement.
@access public
@param string $hash

Determines the salt length
To quote from {@link http://tools.ietf.org/html/rfc3447#page-38 RFC3447#page-38}:
   Typical salt lengths in octets are hLen (the length of the output
   of the hash function Hash) and 0.
@access public
@param int $format

Integer-to-Octet-String primitive
See {@link http://tools.ietf.org/html/rfc3447#section-4.1 RFC3447#section-4.1}.
@access private
@param \phpseclib\Math\BigInteger $x
@param int $xLen
@return string

Octet-String-to-Integer primitive
See {@link http://tools.ietf.org/html/rfc3447#section-4.2 RFC3447#section-4.2}.
@access private
@param string $x
@return \phpseclib\Math\BigInteger

Exponentiate with or without Chinese Remainder Theorem
See {@link http://tools.ietf.org/html/rfc3447#section-5.1.1 RFC3447#section-5.1.2}.
@access private
@param \phpseclib\Math\BigInteger $x
@return \phpseclib\Math\BigInteger

Performs RSA Blinding
Protects against timing attacks by employing RSA Blinding.
Returns $x->modPow($this->exponents[$i], $this->primes[$i])
@access private
@param \phpseclib\Math\BigInteger $x
@param \phpseclib\Math\BigInteger $r
@param int $i
@return \phpseclib\Math\BigInteger

Performs blinded RSA equality testing
Protects against a particular type of timing attack described.
See {@link http://codahale.com/a-lesson-in-timing-attacks/ A Lesson In Timing Attacks (or, Don't use MessageDigest.isEquals)}
Thanks for the heads up singpolyma!
@access private
@param string $x
@param string $y
@return bool

RSAEP
See {@link http://tools.ietf.org/html/rfc3447#section-5.1.1 RFC3447#section-5.1.1}.
@access private
@param \phpseclib\Math\BigInteger $m
@return \phpseclib\Math\BigInteger

RSADP
See {@link http://tools.ietf.org/html/rfc3447#section-5.1.2 RFC3447#section-5.1.2}.
@access private
@param \phpseclib\Math\BigInteger $c
@return \phpseclib\Math\BigInteger

RSASP1
See {@link http://tools.ietf.org/html/rfc3447#section-5.2.1 RFC3447#section-5.2.1}.
@access private
@param \phpseclib\Math\BigInteger $m
@return \phpseclib\Math\BigInteger

RSAVP1
See {@link http://tools.ietf.org/html/rfc3447#section-5.2.2 RFC3447#section-5.2.2}.
@access private
@param \phpseclib\Math\BigInteger $s
@return \phpseclib\Math\BigInteger

MGF1
See {@link http://tools.ietf.org/html/rfc3447#appendix-B.2.1 RFC3447#appendix-B.2.1}.
@access private
@param string $mgfSeed
@param int $mgfLen
@return string

RSAES-OAEP-ENCRYPT
See {@link http://tools.ietf.org/html/rfc3447#section-7.1.1 RFC3447#section-7.1.1} and
{http://en.wikipedia.org/wiki/Optimal_Asymmetric_Encryption_Padding OAES}.
@access private
@param string $m
@param string $l
@return string

RSAES-OAEP-DECRYPT
See {@link http://tools.ietf.org/html/rfc3447#section-7.1.2 RFC3447#section-7.1.2}.  The fact that the error
messages aren't distinguishable from one another hinders debugging, but, to quote from RFC3447#section-7.1.2:
   Note.  Care must be taken to ensure that an opponent cannot
   distinguish the different error conditions in Step 3.g, whether by
   error message or timing, or, more generally, learn partial
   information about the encoded message EM.  Otherwise an opponent may
   be able to obtain useful information about the decryption of the
   ciphertext C, leading to a chosen-ciphertext attack such as the one
   observed by Manger [36].
As for $l...  to quote from {@link http://tools.ietf.org/html/rfc3447#page-17 RFC3447#page-17}:
   Both the encryption and the decryption operations of RSAES-OAEP take
   the value of a label L as input.  In this version of PKCS #1, L is
   the empty string; other uses of the label are outside the scope of
   this document.
@access private
@param string $c
@param string $l
@return string

Raw Encryption / Decryption
Doesn't use padding and is not recommended.
@access private
@param string $m
@return string

RSAES-PKCS1-V1_5-ENCRYPT
See {@link http://tools.ietf.org/html/rfc3447#section-7.2.1 RFC3447#section-7.2.1}.
@access private
@param string $m
@return string

RSAES-PKCS1-V1_5-DECRYPT
See {@link http://tools.ietf.org/html/rfc3447#section-7.2.2 RFC3447#section-7.2.2}.
For compatibility purposes, this function departs slightly from the description given in RFC3447.
The reason being that RFC2313#section-8.1 (PKCS#1 v1.5) states that ciphertext's encrypted by the
private key should have the second byte set to either 0 or 1 and that ciphertext's encrypted by the
public key should have the second byte set to 2.  In RFC3447 (PKCS#1 v2.1), the second byte is supposed
to be 2 regardless of which key is used.  For compatibility purposes, we'll just check to make sure the
second byte is 2 or less.  If it is, we'll accept the decrypted string as valid.
As a consequence of this, a private key encrypted ciphertext produced with \phpseclib\Crypt\RSA may not decrypt
with a strictly PKCS#1 v1.5 compliant RSA implementation.  Public key encrypted ciphertext's should but
not private key encrypted ciphertext's.
@access private
@param string $c
@return string

EMSA-PSS-ENCODE
See {@link http://tools.ietf.org/html/rfc3447#section-9.1.1 RFC3447#section-9.1.1}.
@access private
@param string $m
@param int $emBits

EMSA-PSS-VERIFY
See {@link http://tools.ietf.org/html/rfc3447#section-9.1.2 RFC3447#section-9.1.2}.
@access private
@param string $m
@param string $em
@param int $emBits
@return string

RSASSA-PSS-SIGN
See {@link http://tools.ietf.org/html/rfc3447#section-8.1.1 RFC3447#section-8.1.1}.
@access private
@param string $m
@return string

RSASSA-PSS-VERIFY
See {@link http://tools.ietf.org/html/rfc3447#section-8.1.2 RFC3447#section-8.1.2}.
@access private
@param string $m
@param string $s
@return string

EMSA-PKCS1-V1_5-ENCODE
See {@link http://tools.ietf.org/html/rfc3447#section-9.2 RFC3447#section-9.2}.
@access private
@param string $m
@param int $emLen
@return string

RSASSA-PKCS1-V1_5-SIGN
See {@link http://tools.ietf.org/html/rfc3447#section-8.2.1 RFC3447#section-8.2.1}.
@access private
@param string $m
@return string

RSASSA-PKCS1-V1_5-VERIFY
See {@link http://tools.ietf.org/html/rfc3447#section-8.2.2 RFC3447#section-8.2.2}.
@access private
@param string $m
@return string

Set Encryption Mode
Valid values include self::ENCRYPTION_OAEP and self::ENCRYPTION_PKCS1.
@access public
@param int $mode

Set Signature Mode
Valid values include self::SIGNATURE_PSS and self::SIGNATURE_PKCS1
@access public
@param int $mode

Set public key comment.
@access public
@param string $comment

Get public key comment.
@access public
@return string

Encryption
Both self::ENCRYPTION_OAEP and self::ENCRYPTION_PKCS1 both place limits on how long $plaintext can be.
If $plaintext exceeds those limits it will be broken up so that it does and the resultant ciphertext's will
be concatenated together.
@see self::decrypt()
@access public
@param string $plaintext
@return string

Decryption
@see self::encrypt()
@access public
@param string $plaintext
@return string

Create a signature
@see self::verify()
@access public
@param string $message
@return string

Verifies a signature
@see self::sign()
@access public
@param string $message
@param string $signature
@return bool

Extract raw BER from Base64 encoding
@access private
@param string $str
@return string

## References

**Database Tables (inferred)**
- `a`
- `the`
- `PuTTY`
- `one`
- `RFC3447`
- `Base64`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\RSA.php`

**Classes**:
- `phpseclib\Crypt\RSA`

**Functions/Methods**:
- `__construct()`
- `createKey($bits = 1024, $timeout = false, $partial = array()`
- `_convertPrivateKey($n, $e, $d, $primes, $exponents, $coefficients)`
- `_convertPublicKey($n, $e)`
- `_parseKey($key, $type)`
- `getSize()`
- `_start_element_handler($parser, $name, $attribs)`
- `_stop_element_handler($parser, $name)`
- `_data_handler($parser, $data)`
- `loadKey($key, $type = false)`
- `setPassword($password = false)`
- `setPublicKey($key = false, $type = false)`
- `setPrivateKey($key = false, $type = false)`
- `getPublicKey($type = self::PUBLIC_FORMAT_PKCS8)`
- `getPublicKeyFingerprint($algorithm = 'md5')`
- `getPrivateKey($type = self::PUBLIC_FORMAT_PKCS1)`
- `_getPrivatePublicKey($mode = self::PUBLIC_FORMAT_PKCS8)`
- `__toString()`
- `__clone()`
- `_generateMinMax($bits)`
- `_decodeLength(&$string)`
- `_encodeLength($length)`
- `_string_shift(&$string, $index = 1)`
- `setPrivateKeyFormat($format)`
- `setPublicKeyFormat($format)`
- `setHash($hash)`
- `setMGFHash($hash)`
- `setSaltLength($sLen)`
- `_i2osp($x, $xLen)`
- `_os2ip($x)`
- `_exponentiate($x)`
- `_blind($x, $r, $i)`
- `_equals($x, $y)`
- `_rsaep($m)`
- `_rsadp($c)`
- `_rsasp1($m)`
- `_rsavp1($s)`
- `_mgf1($mgfSeed, $maskLen)`
- `_rsaes_oaep_encrypt($m, $l = '')`
- `_rsaes_oaep_decrypt($c, $l = '')`
- `_raw_encrypt($m)`
- `_rsaes_pkcs1_v1_5_encrypt($m)`
- `_rsaes_pkcs1_v1_5_decrypt($c)`
- `_emsa_pss_encode($m, $emBits)`
- `_emsa_pss_verify($m, $em, $emBits)`
- `_rsassa_pss_sign($m)`
- `_rsassa_pss_verify($m, $s)`
- `_emsa_pkcs1_v1_5_encode($m, $emLen)`
- `_rsassa_pkcs1_v1_5_sign($m)`
- `_rsassa_pkcs1_v1_5_verify($m, $s)`
- `setEncryptionMode($mode)`
- `setSignatureMode($mode)`
- `setComment($comment)`
- `getComment()`
- `encrypt($plaintext)`
- `decrypt($ciphertext)`
- `sign($message)`
- `verify($message, $signature)`
- `_extractBER($str)`

