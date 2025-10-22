# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\Base.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\Base.php`
- Type: PHP
- Size: 103316 bytes

## Summary (from docblocks)

Base Class for all \phpseclib\Crypt\* cipher classes
PHP version 5
Internally for phpseclib developers:
 If you plan to add a new cipher class, please note following rules:
 - The new \phpseclib\Crypt\* cipher class should extend \phpseclib\Crypt\Base
 - Following methods are then required to be overridden/overloaded:
   - _encryptBlock()
   - _decryptBlock()
   - _setupKey()
 - All other methods are optional to be overridden/overloaded
 - Look at the source code of the current ciphers how they extend \phpseclib\Crypt\Base
   and take one of them as a start up for the new cipher class.
 - Please read all the other comments/notes/hints here also for each class var/method
@category  Crypt
@package   Base
@author    Jim Wigginton <terrafrost@php.net>
@author    Hans-Juergen Petrich <petrich@tronic-media.com>
@copyright 2007 Jim Wigginton
@license   http://www.opensource.org/licenses/mit-license.html  MIT License
@link      http://phpseclib.sourceforge.net

Base Class for all \phpseclib\Crypt\* cipher classes
@package Base
@author  Jim Wigginton <terrafrost@php.net>
@author  Hans-Juergen Petrich <petrich@tronic-media.com>

#@+
@access public
@see \phpseclib\Crypt\Base::encrypt()
@see \phpseclib\Crypt\Base::decrypt()

Encrypt / decrypt using the Counter mode.
Set to -1 since that's what Crypt/Random.php uses to index the CTR mode.
@link http://en.wikipedia.org/wiki/Block_cipher_modes_of_operation#Counter_.28CTR.29

Encrypt / decrypt using the Electronic Code Book mode.
@link http://en.wikipedia.org/wiki/Block_cipher_modes_of_operation#Electronic_codebook_.28ECB.29

Encrypt / decrypt using the Code Book Chaining mode.
@link http://en.wikipedia.org/wiki/Block_cipher_modes_of_operation#Cipher-block_chaining_.28CBC.29

Encrypt / decrypt using the Cipher Feedback mode.
@link http://en.wikipedia.org/wiki/Block_cipher_modes_of_operation#Cipher_feedback_.28CFB.29

Encrypt / decrypt using the Cipher Feedback mode (8bit)

Encrypt / decrypt using the Output Feedback mode.
@link http://en.wikipedia.org/wiki/Block_cipher_modes_of_operation#Output_feedback_.28OFB.29

Encrypt / decrypt using streaming mode.

#@-

Whirlpool available flag
@see \phpseclib\Crypt\Base::_hashInlineCryptFunction()
@var bool
@access private

#@+
@access private
@see \phpseclib\Crypt\Base::__construct()

Base value for the internal implementation $engine switch

Base value for the mcrypt implementation $engine switch

Base value for the mcrypt implementation $engine switch

#@-

The Encryption Mode
@see self::__construct()
@var int
@access private

The Block Length of the block cipher
@var int
@access private

The Key
@see self::setKey()
@var string
@access private

The Initialization Vector
@see self::setIV()
@var string
@access private

A "sliding" Initialization Vector
@see self::enableContinuousBuffer()
@see self::_clearBuffers()
@var string
@access private

A "sliding" Initialization Vector
@see self::enableContinuousBuffer()
@see self::_clearBuffers()
@var string
@access private

Continuous Buffer status
@see self::enableContinuousBuffer()
@var bool
@access private

Encryption buffer for CTR, OFB and CFB modes
@see self::encrypt()
@see self::_clearBuffers()
@var array
@access private

Decryption buffer for CTR, OFB and CFB modes
@see self::decrypt()
@see self::_clearBuffers()
@var array
@access private

mcrypt resource for encryption
The mcrypt resource can be recreated every time something needs to be created or it can be created just once.
Since mcrypt operates in continuous mode, by default, it'll need to be recreated when in non-continuous mode.
@see self::encrypt()
@var resource
@access private

mcrypt resource for decryption
The mcrypt resource can be recreated every time something needs to be created or it can be created just once.
Since mcrypt operates in continuous mode, by default, it'll need to be recreated when in non-continuous mode.
@see self::decrypt()
@var resource
@access private

Does the enmcrypt resource need to be (re)initialized?
@see \phpseclib\Crypt\Twofish::setKey()
@see \phpseclib\Crypt\Twofish::setIV()
@var bool
@access private

Does the demcrypt resource need to be (re)initialized?
@see \phpseclib\Crypt\Twofish::setKey()
@see \phpseclib\Crypt\Twofish::setIV()
@var bool
@access private

mcrypt resource for CFB mode
mcrypt's CFB mode, in (and only in) buffered context,
is broken, so phpseclib implements the CFB mode by it self,
even when the mcrypt php extension is available.
In order to do the CFB-mode work (fast) phpseclib
use a separate ECB-mode mcrypt resource.
@link http://phpseclib.sourceforge.net/cfb-demo.phps
@see self::encrypt()
@see self::decrypt()
@see self::_setupMcrypt()
@var resource
@access private

Optimizing value while CFB-encrypting
Only relevant if $continuousBuffer enabled
and $engine == self::ENGINE_MCRYPT
It's faster to re-init $enmcrypt if
$buffer bytes > $cfb_init_len than
using the $ecb resource furthermore.
This value depends of the chosen cipher
and the time it would be needed for it's
initialization [by mcrypt_generic_init()]
which, typically, depends on the complexity
on its internaly Key-expanding algorithm.
@see self::encrypt()
@var int
@access private

Does internal cipher state need to be (re)initialized?
@see self::setKey()
@see self::setIV()
@see self::disableContinuousBuffer()
@var bool
@access private

Padding status
@see self::enablePadding()
@var bool
@access private

Is the mode one that is paddable?
@see self::__construct()
@var bool
@access private

Holds which crypt engine internaly should be use,
which will be determined automatically on __construct()
Currently available $engines are:
- self::ENGINE_OPENSSL  (very fast, php-extension: openssl, extension_loaded('openssl') required)
- self::ENGINE_MCRYPT   (fast, php-extension: mcrypt, extension_loaded('mcrypt') required)
- self::ENGINE_INTERNAL (slower, pure php-engine, no php-extension required)
@see self::_setEngine()
@see self::encrypt()
@see self::decrypt()
@var int
@access private

Holds the preferred crypt engine
@see self::_setEngine()
@see self::setPreferredEngine()
@var int
@access private

The mcrypt specific name of the cipher
Only used if $engine == self::ENGINE_MCRYPT
@link http://www.php.net/mcrypt_module_open
@link http://www.php.net/mcrypt_list_algorithms
@see self::_setupMcrypt()
@var string
@access private

The openssl specific name of the cipher
Only used if $engine == self::ENGINE_OPENSSL
@link http://www.php.net/openssl-get-cipher-methods
@var string
@access private

The openssl specific name of the cipher in ECB mode
If OpenSSL does not support the mode we're trying to use (CTR)
it can still be emulated with ECB mode.
@link http://www.php.net/openssl-get-cipher-methods
@var string
@access private

The default salt used by setPassword()
@see self::setPassword()
@var string
@access private

The name of the performance-optimized callback function
Used by encrypt() / decrypt()
only if $engine == self::ENGINE_INTERNAL
@see self::encrypt()
@see self::decrypt()
@see self::_setupInlineCrypt()
@see self::$use_inline_crypt
@var Callback
@access private

Holds whether performance-optimized $inline_crypt() can/should be used.
@see self::encrypt()
@see self::decrypt()
@see self::inline_crypt
@var mixed
@access private

If OpenSSL can be used in ECB but not in CTR we can emulate CTR
@see self::_openssl_ctr_process()
@var bool
@access private

Determines what options are passed to openssl_encrypt/decrypt
@see self::isValidEngine()
@var mixed
@access private

Has the key length explicitly been set or should it be derived from the key, itself?
@see self::setKeyLength()
@var bool
@access private

Don't truncate / null pad key
@see self::_clearBuffers()
@var bool
@access private

Default Constructor.
Determines whether or not the mcrypt extension should be used.
$mode could be:
- self::MODE_ECB
- self::MODE_CBC
- self::MODE_CTR
- self::MODE_CFB
- self::MODE_OFB
If not explicitly set, self::MODE_CBC will be used.
@param int $mode
@access public

Sets the initialization vector. (optional)
SetIV is not required when self::MODE_ECB (or ie for AES: \phpseclib\Crypt\AES::MODE_ECB) is being used.  If not explicitly set, it'll be assumed
to be all zero's.
@access public
@param string $iv
@internal Can be overwritten by a sub class, but does not have to be

Sets the key length.
Keys with explicitly set lengths need to be treated accordingly
@access public
@param int $length

Returns the current key length in bits
@access public
@return int

Returns the current block length in bits
@access public
@return int

Sets the key.
The min/max length(s) of the key depends on the cipher which is used.
If the key not fits the length(s) of the cipher it will paded with null bytes
up to the closest valid key length.  If the key is more than max length,
we trim the excess bits.
If the key is not explicitly set, it'll be assumed to be all null bytes.
@access public
@param string $key
@internal Could, but not must, extend by the child Crypt_* class

Sets the password.
Depending on what $method is set to, setPassword()'s (optional) parameters are as follows:
    {@link http://en.wikipedia.org/wiki/PBKDF2 pbkdf2} or pbkdf1:
        $hash, $salt, $count, $dkLen
        Where $hash (default = sha1) currently supports the following hashes: see: Crypt/Hash.php
@see Crypt/Hash.php
@param string $password
@param string $method
@return bool
@access public
@internal Could, but not must, extend by the child Crypt_* class

Encrypts a message.
$plaintext will be padded with additional bytes such that it's length is a multiple of the block size. Other cipher
implementations may or may not pad in the same manner.  Other common approaches to padding and the reasons why it's
necessary are discussed in the following
URL:
{@link http://www.di-mgt.com.au/cryptopad.html http://www.di-mgt.com.au/cryptopad.html}
An alternative to padding is to, separately, send the length of the file.  This is what SSH, in fact, does.
strlen($plaintext) will still need to be a multiple of the block size, however, arbitrary values can be added to make it that
length.
@see self::decrypt()
@access public
@param string $plaintext
@return string $ciphertext
@internal Could, but not must, extend by the child Crypt_* class

Decrypts a message.
If strlen($ciphertext) is not a multiple of the block size, null bytes will be added to the end of the string until
it is.
@see self::encrypt()
@access public
@param string $ciphertext
@return string $plaintext
@internal Could, but not must, extend by the child Crypt_* class

OpenSSL CTR Processor
PHP's OpenSSL bindings do not operate in continuous mode so we'll wrap around it. Since the keystream
for CTR is the same for both encrypting and decrypting this function is re-used by both Base::encrypt()
and Base::decrypt(). Also, OpenSSL doesn't implement CTR for all of it's symmetric ciphers so this
function will emulate CTR with ECB when necessary.
@see self::encrypt()
@see self::decrypt()
@param string $plaintext
@param string $encryptIV
@param array $buffer
@return string
@access private

OpenSSL OFB Processor
PHP's OpenSSL bindings do not operate in continuous mode so we'll wrap around it. Since the keystream
for OFB is the same for both encrypting and decrypting this function is re-used by both Base::encrypt()
and Base::decrypt().
@see self::encrypt()
@see self::decrypt()
@param string $plaintext
@param string $encryptIV
@param array $buffer
@return string
@access private

phpseclib <-> OpenSSL Mode Mapper
May need to be overwritten by classes extending this one in some cases
@return int
@access private

Pad "packets".
Block ciphers working by encrypting between their specified [$this->]block_size at a time
If you ever need to encrypt or decrypt something that isn't of the proper length, it becomes necessary to
pad the input so that it is of the proper length.
Padding is enabled by default.  Sometimes, however, it is undesirable to pad strings.  Such is the case in SSH,
where "packets" are padded with random bytes before being encrypted.  Unpad these packets and you risk stripping
away characters that shouldn't be stripped away. (SSH knows how many bytes are added because the length is
transmitted separately)
@see self::disablePadding()
@access public

Do not pad packets.
@see self::enablePadding()
@access public

Treat consecutive "packets" as if they are a continuous buffer.
Say you have a 32-byte plaintext $plaintext.  Using the default behavior, the two following code snippets
will yield different outputs:
<code>
   echo $rijndael->encrypt(substr($plaintext,  0, 16));
   echo $rijndael->encrypt(substr($plaintext, 16, 16));
</code>
<code>
   echo $rijndael->encrypt($plaintext);
</code>
The solution is to enable the continuous buffer.  Although this will resolve the above discrepancy, it creates
another, as demonstrated with the following:
<code>
   $rijndael->encrypt(substr($plaintext, 0, 16));
   echo $rijndael->decrypt($rijndael->encrypt(substr($plaintext, 16, 16)));
</code>
<code>
   echo $rijndael->decrypt($rijndael->encrypt(substr($plaintext, 16, 16)));
</code>
With the continuous buffer disabled, these would yield the same output.  With it enabled, they yield different
outputs.  The reason is due to the fact that the initialization vector's change after every encryption /
decryption round when the continuous buffer is enabled.  When it's disabled, they remain constant.
Put another way, when the continuous buffer is enabled, the state of the \phpseclib\Crypt\*() object changes after each
encryption / decryption round, whereas otherwise, it'd remain constant.  For this reason, it's recommended that
continuous buffers not be used.  They do offer better security and are, in fact, sometimes required (SSH uses them),
however, they are also less intuitive and more likely to cause you problems.
@see self::disableContinuousBuffer()
@access public
@internal Could, but not must, extend by the child Crypt_* class

Treat consecutive packets as if they are a discontinuous buffer.
The default behavior.
@see self::enableContinuousBuffer()
@access public
@internal Could, but not must, extend by the child Crypt_* class

Test for engine validity
@see self::__construct()
@param int $engine
@access public
@return bool

Sets the preferred crypt engine
Currently, $engine could be:
- \phpseclib\Crypt\Base::ENGINE_OPENSSL  [very fast]
- \phpseclib\Crypt\Base::ENGINE_MCRYPT   [fast]
- \phpseclib\Crypt\Base::ENGINE_INTERNAL [slow]
If the preferred crypt engine is not available the fastest available one will be used
@see self::__construct()
@param int $engine
@access public

Returns the engine currently being utilized
@see self::_setEngine()
@access public

Sets the engine as appropriate
@see self::__construct()
@access private

Encrypts a block
Note: Must be extended by the child \phpseclib\Crypt\* class
@access private
@param string $in
@return string

Decrypts a block
Note: Must be extended by the child \phpseclib\Crypt\* class
@access private
@param string $in
@return string

Setup the key (expansion)
Only used if $engine == self::ENGINE_INTERNAL
Note: Must extend by the child \phpseclib\Crypt\* class
@see self::_setup()
@access private

Setup the self::ENGINE_INTERNAL $engine
(re)init, if necessary, the internal cipher $engine and flush all $buffers
Used (only) if $engine == self::ENGINE_INTERNAL
_setup() will be called each time if $changed === true
typically this happens when using one or more of following public methods:
- setKey()
- setIV()
- disableContinuousBuffer()
- First run of encrypt() / decrypt() with no init-settings
@see self::setKey()
@see self::setIV()
@see self::disableContinuousBuffer()
@access private
@internal _setup() is always called before en/decryption.
@internal Could, but not must, extend by the child Crypt_* class

Setup the self::ENGINE_MCRYPT $engine
(re)init, if necessary, the (ext)mcrypt resources and flush all $buffers
Used (only) if $engine = self::ENGINE_MCRYPT
_setupMcrypt() will be called each time if $changed === true
typically this happens when using one or more of following public methods:
- setKey()
- setIV()
- disableContinuousBuffer()
- First run of encrypt() / decrypt()
@see self::setKey()
@see self::setIV()
@see self::disableContinuousBuffer()
@access private
@internal Could, but not must, extend by the child Crypt_* class

Pads a string
Pads a string using the RSA PKCS padding standards so that its length is a multiple of the blocksize.
$this->block_size - (strlen($text) % $this->block_size) bytes are added, each of which is equal to
chr($this->block_size - (strlen($text) % $this->block_size)
If padding is disabled and $text is not a multiple of the blocksize, the string will be padded regardless
and padding will, hence forth, be enabled.
@see self::_unpad()
@param string $text
@access private
@return string

Unpads a string.
If padding is enabled and the reported padding length is invalid the encryption key will be assumed to be wrong
and false will be returned.
@see self::_pad()
@param string $text
@access private
@return string

Clears internal buffers
Clearing/resetting the internal buffers is done everytime
after disableContinuousBuffer() or on cipher $engine (re)init
ie after setKey() or setIV()
@access public
@internal Could, but not must, extend by the child Crypt_* class

String Shift
Inspired by array_shift
@param string $string
@param int $index
@access private
@return string

String Pop
Inspired by array_pop
@param string $string
@param int $index
@access private
@return string

Increment the current string
@see self::decrypt()
@see self::encrypt()
@param string $var
@access private

Setup the performance-optimized function for de/encrypt()
Stores the created (or existing) callback function-name
in $this->inline_crypt
Internally for phpseclib developers:
    _setupInlineCrypt() would be called only if:
    - $engine == self::ENGINE_INTERNAL and
    - $use_inline_crypt === true
    - each time on _setup(), after(!) _setupKey()
    This ensures that _setupInlineCrypt() has always a
    full ready2go initializated internal cipher $engine state
    where, for example, the keys allready expanded,
    keys/block_size calculated and such.
    It is, each time if called, the responsibility of _setupInlineCrypt():
    - to set $this->inline_crypt to a valid and fully working callback function
      as a (faster) replacement for encrypt() / decrypt()
    - NOT to create unlimited callback functions (for memory reasons!)
      no matter how often _setupInlineCrypt() would be called. At some
      point of amount they must be generic re-useable.
    - the code of _setupInlineCrypt() it self,
      and the generated callback code,
      must be, in following order:
      - 100% safe
      - 100% compatible to encrypt()/decrypt()
      - using only php5+ features/lang-constructs/php-extensions if
        compatibility (down to php4) or fallback is provided
      - readable/maintainable/understandable/commented and... not-cryptic-styled-code :-)
      - >= 10% faster than encrypt()/decrypt() [which is, by the way,
        the reason for the existence of _setupInlineCrypt() :-)]
      - memory-nice
      - short (as good as possible)
Note: - _setupInlineCrypt() is using _createInlineCryptFunction() to create the full callback function code.
      - In case of using inline crypting, _setupInlineCrypt() must extend by the child \phpseclib\Crypt\* class.
      - The following variable names are reserved:
        - $_*  (all variable names prefixed with an underscore)
        - $self (object reference to it self. Do not use $this, but $self instead)
        - $in (the content of $in has to en/decrypt by the generated code)
      - The callback function should not use the 'return' statement, but en/decrypt'ing the content of $in only
@see self::_setup()
@see self::_createInlineCryptFunction()
@see self::encrypt()
@see self::decrypt()
@access private
@internal If a Crypt_* class providing inline crypting it must extend _setupInlineCrypt()

Creates the performance-optimized function for en/decrypt()
Internally for phpseclib developers:
   _createInlineCryptFunction():
   - merge the $cipher_code [setup'ed by _setupInlineCrypt()]
     with the current [$this->]mode of operation code
   - create the $inline function, which called by encrypt() / decrypt()
     as its replacement to speed up the en/decryption operations.
   - return the name of the created $inline callback function
   - used to speed up en/decryption
   The main reason why can speed up things [up to 50%] this way are:
   - using variables more effective then regular.
     (ie no use of expensive arrays but integers $k_0, $k_1 ...
     or even, for example, the pure $key[] values hardcoded)
   - avoiding 1000's of function calls of ie _encryptBlock()
     but inlining the crypt operations.
     in the mode of operation for() loop.
   - full loop unroll the (sometimes key-dependent) rounds
     avoiding this way ++$i counters and runtime-if's etc...
   The basic code architectur of the generated $inline en/decrypt()
   lambda function, in pseudo php, is:
   <code>
   +----------------------------------------------------------------------------------------------+
   | callback $inline = create_function:                                                          |
   | lambda_function_0001_crypt_ECB($action, $text)                                               |
   | {                                                                                            |
   |     INSERT PHP CODE OF:                                                                      |
   |     $cipher_code['init_crypt'];                  // general init code.                       |
   |                                                  // ie: $sbox'es declarations used for       |
   |                                                  //     encrypt and decrypt'ing.             |
   |                                                                                              |
   |     switch ($action) {                                                                       |
   |         case 'encrypt':                                                                      |
   |             INSERT PHP CODE OF:                                                              |
   |             $cipher_code['init_encrypt'];       // encrypt sepcific init code.               |
   |                                                    ie: specified $key or $box                |
   |                                                        declarations for encrypt'ing.         |
   |                                                                                              |
   |             foreach ($ciphertext) {                                                          |
   |                 $in = $block_size of $ciphertext;                                            |
   |                                                                                              |
   |                 INSERT PHP CODE OF:                                                          |
   |                 $cipher_code['encrypt_block'];  // encrypt's (string) $in, which is always:  |
   |                                                 // strlen($in) == $this->block_size          |
   |                                                 // here comes the cipher algorithm in action |
   |                                                 // for encryption.                           |
   |                                                 // $cipher_code['encrypt_block'] has to      |
   |                                                 // encrypt the content of the $in variable   |
   |                                                                                              |
   |                 $plaintext .= $in;                                                           |
   |             }                                                                                |
   |             return $plaintext;                                                               |
   |                                                                                              |
   |         case 'decrypt':                                                                      |
   |             INSERT PHP CODE OF:                                                              |
   |             $cipher_code['init_decrypt'];       // decrypt sepcific init code                |
   |                                                    ie: specified $key or $box                |
   |                                                        declarations for decrypt'ing.         |
   |             foreach ($plaintext) {                                                           |
   |                 $in = $block_size of $plaintext;                                             |
   |                                                                                              |
   |                 INSERT PHP CODE OF:                                                          |
   |                 $cipher_code['decrypt_block'];  // decrypt's (string) $in, which is always   |
   |                                                 // strlen($in) == $this->block_size          |
   |                                                 // here comes the cipher algorithm in action |
   |                                                 // for decryption.                           |
   |                                                 // $cipher_code['decrypt_block'] has to      |
   |                                                 // decrypt the content of the $in variable   |
   |                 $ciphertext .= $in;                                                          |
   |             }                                                                                |
   |             return $ciphertext;                                                              |
   |     }                                                                                        |
   | }                                                                                            |
   +----------------------------------------------------------------------------------------------+
   </code>
   See also the \phpseclib\Crypt\*::_setupInlineCrypt()'s for
   productive inline $cipher_code's how they works.
   Structure of:
   <code>
   $cipher_code = array(
       'init_crypt'    => (string) '', // optional
       'init_encrypt'  => (string) '', // optional
       'init_decrypt'  => (string) '', // optional
       'encrypt_block' => (string) '', // required
       'decrypt_block' => (string) ''  // required
   );
   </code>
@see self::_setupInlineCrypt()
@see self::encrypt()
@see self::decrypt()
@param array $cipher_code
@access private
@return string (the name of the created callback function)

Holds the lambda_functions table (classwide)
Each name of the lambda function, created from
_setupInlineCrypt() && _createInlineCryptFunction()
is stored, classwide (!), here for reusing.
The string-based index of $function is a classwide
unique value representing, at least, the $mode of
operation (or more... depends of the optimizing level)
for which $mode the lambda function was created.
@access private
@return array &$functions

Generates a digest from $bytes
@see self::_setupInlineCrypt()
@access private
@param $bytes
@return string

Convert float to int
On ARM CPUs converting floats to ints doesn't always work
@access private
@param string $x
@return int

eval()'able string for in-line float to int
@access private
@return string

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\Base.php`

**Classes**:
- `phpseclib\Crypt\should`
- `phpseclib\Crypt\var`
- `phpseclib\Crypt\Base`
- `phpseclib\Crypt\providing`
- `phpseclib\Crypt\var`

**Functions/Methods**:
- `__construct($mode = self::MODE_CBC)`
- `setIV($iv)`
- `setKeyLength($length)`
- `getKeyLength()`
- `getBlockLength()`
- `setKey($key)`
- `setPassword($password, $method = 'pbkdf2')`
- `encrypt($plaintext)`
- `decrypt($ciphertext)`
- `_openssl_ctr_process($plaintext, &$encryptIV, &$buffer)`
- `_openssl_ofb_process($plaintext, &$encryptIV, &$buffer)`
- `_openssl_translate_mode()`
- `enablePadding()`
- `disablePadding()`
- `enableContinuousBuffer()`
- `disableContinuousBuffer()`
- `isValidEngine($engine)`
- `setPreferredEngine($engine)`
- `getEngine()`
- `_setEngine()`
- `_encryptBlock($in)`
- `_decryptBlock($in)`
- `_setupKey()`
- `_setup()`
- `_setupMcrypt()`
- `_pad($text)`
- `_unpad($text)`
- `_clearBuffers()`
- `_string_shift(&$string, $index = 1)`
- `_string_pop(&$string, $index = 1)`
- `_increment_str(&$var)`
- `_setupInlineCrypt()`
- `_createInlineCryptFunction($cipher_code)`
- `_hashInlineCryptFunction($bytes)`
- `safe_intval($x)`
- `safe_intval_inline()`

