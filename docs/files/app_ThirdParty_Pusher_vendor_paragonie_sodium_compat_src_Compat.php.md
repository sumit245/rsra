# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Compat.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Compat.php`
- Type: PHP
- Size: 134516 bytes

## Summary (from docblocks)

Libsodium compatibility layer
This is the only class you should be interfacing with, as a user of
sodium_compat.
If the PHP extension for libsodium is installed, it will always use that
instead of our implementations. You get better performance and stronger
guarantees against side-channels that way.
However, if your users don't have the PHP extension installed, we offer a
compatible interface here. It will give you the correct results as if the
PHP extension was installed. It won't be as fast, of course.
CAUTION * CAUTION * CAUTION * CAUTION * CAUTION * CAUTION * CAUTION * CAUTION *
                                                                              *
    Until audited, this is probably not safe to use! DANGER WILL ROBINSON     *
                                                                              *
CAUTION * CAUTION * CAUTION * CAUTION * CAUTION * CAUTION * CAUTION * CAUTION *

This parameter prevents the use of the PECL extension.
It should only be used for unit testing.
@var bool

Use fast multiplication rather than our constant-time multiplication
implementation. Can be enabled at runtime. Only enable this if you
are absolutely certain that there is no timing leak on your platform.
@var bool

Add two numbers (little-endian unsigned), storing the value in the first
parameter.
This mutates $val.
@param string $val
@param string $addv
@return void
@throws SodiumException

@param string $encoded
@param int $variant
@param string $ignore
@return string
@throws SodiumException

@var string $encoded

@param string $decoded
@param int $variant
@return string
@throws SodiumException

@var string $decoded

Cache-timing-safe implementation of bin2hex().
@param string $string A string (probably raw binary)
@return string        A hexadecimal-encoded string
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Compare two strings, in constant-time.
Compared to memcmp(), compare() is more useful for sorting.
@param string $left  The left operand; must be a string
@param string $right The right operand; must be a string
@return int          If < 0 if the left operand is less than the right
                     If = 0 if both strings are equal
                     If > 0 if the right operand is less than the left
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Is AES-256-GCM even available to use?
@return bool
@psalm-suppress UndefinedFunction
@psalm-suppress MixedInferredReturnType
@psalm-suppress MixedReturnStatement

Authenticated Encryption with Associated Data: Decryption
Algorithm:
    AES-256-GCM
This mode uses a 64-bit random nonce with a 64-bit counter.
IETF mode uses a 96-bit random nonce with a 32-bit counter.
@param string $ciphertext Encrypted message (with Poly1305 MAC appended)
@param string $assocData  Authenticated Associated Data (unencrypted)
@param string $nonce      Number to be used only Once; must be 8 bytes
@param string $key        Encryption key
@return string|bool       The original plaintext message
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedInferredReturnType
@psalm-suppress MixedReturnStatement

@var string $ctext

@var string $authTag

Authenticated Encryption with Associated Data: Encryption
Algorithm:
    AES-256-GCM
@param string $plaintext Message to be encrypted
@param string $assocData Authenticated Associated Data (unencrypted)
@param string $nonce     Number to be used only Once; must be 8 bytes
@param string $key       Encryption key
@return string           Ciphertext with a 16-byte GCM message
                         authentication code appended
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Return a secure random key for use with the AES-256-GCM
symmetric AEAD interface.
@return string
@throws Exception
@throws Error

Authenticated Encryption with Associated Data: Decryption
Algorithm:
    ChaCha20-Poly1305
This mode uses a 64-bit random nonce with a 64-bit counter.
IETF mode uses a 96-bit random nonce with a 32-bit counter.
@param string $ciphertext Encrypted message (with Poly1305 MAC appended)
@param string $assocData  Authenticated Associated Data (unencrypted)
@param string $nonce      Number to be used only Once; must be 8 bytes
@param string $key        Encryption key
@return string            The original plaintext message
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedInferredReturnType
@psalm-suppress MixedReturnStatement

@psalm-suppress InvalidReturnStatement
@psalm-suppress FalsableReturnStatement

Authenticated Encryption with Associated Data
Algorithm:
    ChaCha20-Poly1305
This mode uses a 64-bit random nonce with a 64-bit counter.
IETF mode uses a 96-bit random nonce with a 32-bit counter.
@param string $plaintext Message to be encrypted
@param string $assocData Authenticated Associated Data (unencrypted)
@param string $nonce     Number to be used only Once; must be 8 bytes
@param string $key       Encryption key
@return string           Ciphertext with a 16-byte Poly1305 message
                         authentication code appended
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Authenticated Encryption with Associated Data: Decryption
Algorithm:
    ChaCha20-Poly1305
IETF mode uses a 96-bit random nonce with a 32-bit counter.
Regular mode uses a 64-bit random nonce with a 64-bit counter.
@param string $ciphertext Encrypted message (with Poly1305 MAC appended)
@param string $assocData  Authenticated Associated Data (unencrypted)
@param string $nonce      Number to be used only Once; must be 12 bytes
@param string $key        Encryption key
@return string            The original plaintext message
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedInferredReturnType
@psalm-suppress MixedReturnStatement

@psalm-suppress InvalidReturnStatement
@psalm-suppress FalsableReturnStatement

Return a secure random key for use with the ChaCha20-Poly1305
symmetric AEAD interface.
@return string
@throws Exception
@throws Error

Authenticated Encryption with Associated Data
Algorithm:
    ChaCha20-Poly1305
IETF mode uses a 96-bit random nonce with a 32-bit counter.
Regular mode uses a 64-bit random nonce with a 64-bit counter.
@param string $plaintext Message to be encrypted
@param string $assocData Authenticated Associated Data (unencrypted)
@param string $nonce Number to be used only Once; must be 8 bytes
@param string $key Encryption key
@return string           Ciphertext with a 16-byte Poly1305 message
                         authentication code appended
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Return a secure random key for use with the ChaCha20-Poly1305
symmetric AEAD interface. (IETF version)
@return string
@throws Exception
@throws Error

Authenticated Encryption with Associated Data: Decryption
Algorithm:
    XChaCha20-Poly1305
This mode uses a 64-bit random nonce with a 64-bit counter.
IETF mode uses a 96-bit random nonce with a 32-bit counter.
@param string $ciphertext   Encrypted message (with Poly1305 MAC appended)
@param string $assocData    Authenticated Associated Data (unencrypted)
@param string $nonce        Number to be used only Once; must be 8 bytes
@param string $key          Encryption key
@param bool   $dontFallback Don't fallback to ext/sodium
@return string|bool         The original plaintext message
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Authenticated Encryption with Associated Data
Algorithm:
    XChaCha20-Poly1305
This mode uses a 64-bit random nonce with a 64-bit counter.
IETF mode uses a 96-bit random nonce with a 32-bit counter.
@param string $plaintext    Message to be encrypted
@param string $assocData    Authenticated Associated Data (unencrypted)
@param string $nonce        Number to be used only Once; must be 8 bytes
@param string $key          Encryption key
@param bool   $dontFallback Don't fallback to ext/sodium
@return string           Ciphertext with a 16-byte Poly1305 message
                         authentication code appended
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Return a secure random key for use with the XChaCha20-Poly1305
symmetric AEAD interface.
@return string
@throws Exception
@throws Error

Authenticate a message. Uses symmetric-key cryptography.
Algorithm:
    HMAC-SHA512-256. Which is HMAC-SHA-512 truncated to 256 bits.
    Not to be confused with HMAC-SHA-512/256 which would use the
    SHA-512/256 hash function (uses different initial parameters
    but still truncates to 256 bits to sidestep length-extension
    attacks).
@param string $message Message to be authenticated
@param string $key Symmetric authentication key
@return string         Message authentication code
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

@return string
@throws Exception
@throws Error

Verify the MAC of a message previously authenticated with crypto_auth.
@param string $mac Message authentication code
@param string $message Message whose authenticity you are attempting to
                       verify (with a given MAC and key)
@param string $key Symmetric authentication key
@return bool           TRUE if authenticated, FALSE otherwise
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Authenticated asymmetric-key encryption. Both the sender and recipient
may decrypt messages.
Algorithm: X25519-XSalsa20-Poly1305.
    X25519: Elliptic-Curve Diffie Hellman over Curve25519.
    XSalsa20: Extended-nonce variant of salsa20.
    Poyl1305: Polynomial MAC for one-time message authentication.
@param string $plaintext The message to be encrypted
@param string $nonce A Number to only be used Once; must be 24 bytes
@param string $keypair Your secret key and your recipient's public key
@return string           Ciphertext with 16-byte Poly1305 MAC
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Anonymous public-key encryption. Only the recipient may decrypt messages.
Algorithm: X25519-XSalsa20-Poly1305, as with crypto_box.
    The sender's X25519 keypair is ephemeral.
    Nonce is generated from the BLAKE2b hash of both public keys.
This provides ciphertext integrity.
@param string $plaintext Message to be sealed
@param string $publicKey Your recipient's public key
@return string           Sealed message that only your recipient can
                         decrypt
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Opens a message encrypted with crypto_box_seal(). Requires
the recipient's keypair (sk || pk) to decrypt successfully.
This validates ciphertext integrity.
@param string $ciphertext Sealed message to be opened
@param string $keypair    Your crypto_box keypair
@return string            The original plaintext message
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedInferredReturnType
@psalm-suppress MixedReturnStatement

@psalm-suppress InvalidReturnStatement
@psalm-suppress FalsableReturnStatement

Generate a new random X25519 keypair.
@return string A 64-byte string; the first 32 are your secret key, while
               the last 32 are your public key. crypto_box_secretkey()
               and crypto_box_publickey() exist to separate them so you
               don't accidentally get them mixed up!
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Combine two keys into a keypair for use in library methods that expect
a keypair. This doesn't necessarily have to be the same person's keys.
@param string $secretKey Secret key
@param string $publicKey Public key
@return string    Keypair
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Decrypt a message previously encrypted with crypto_box().
@param string $ciphertext Encrypted message
@param string $nonce      Number to only be used Once; must be 24 bytes
@param string $keypair    Your secret key and the sender's public key
@return string            The original plaintext message
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedInferredReturnType
@psalm-suppress MixedReturnStatement

@psalm-suppress InvalidReturnStatement
@psalm-suppress FalsableReturnStatement

Extract the public key from a crypto_box keypair.
@param string $keypair Keypair containing secret and public key
@return string         Your crypto_box public key
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Calculate the X25519 public key from a given X25519 secret key.
@param string $secretKey Any X25519 secret key
@return string           The corresponding X25519 public key
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Extract the secret key from a crypto_box keypair.
@param string $keypair
@return string         Your crypto_box secret key
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Generate an X25519 keypair from a seed.
@param string $seed
@return string
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress UndefinedFunction

Calculates a BLAKE2b hash, with an optional key.
@param string      $message The message to be hashed
@param string|null $key     If specified, must be a string between 16
                            and 64 bytes long
@param int         $length  Output length in bytes; must be between 16
                            and 64 (default = 32)
@return string              Raw binary
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Get the final BLAKE2b hash output for a given context.
@param string $ctx BLAKE2 hashing context. Generated by crypto_generichash_init().
@param int $length Hash output size.
@return string     Final BLAKE2b hash.
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress ReferenceConstraintViolation
@psalm-suppress ConflictingReferenceConstraint

Initialize a BLAKE2b hashing context, for use in a streaming interface.
@param string|null $key If specified must be a string between 16 and 64 bytes
@param int $length      The size of the desired hash output
@return string          A BLAKE2 hashing context, encoded as a string
                        (To be 100% compatible with ext/libsodium)
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Initialize a BLAKE2b hashing context, for use in a streaming interface.
@param string|null $key If specified must be a string between 16 and 64 bytes
@param int $length      The size of the desired hash output
@param string $salt     Salt (up to 16 bytes)
@param string $personal Personalization string (up to 16 bytes)
@return string          A BLAKE2 hashing context, encoded as a string
                        (To be 100% compatible with ext/libsodium)
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Update a BLAKE2b hashing context with additional data.
@param string $ctx    BLAKE2 hashing context. Generated by crypto_generichash_init().
                      $ctx is passed by reference and gets updated in-place.
@param-out string $ctx
@param string $message The message to append to the existing hash state.
@return void
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress ReferenceConstraintViolation

@return string
@throws Exception
@throws Error

@param int $subkey_len
@param int $subkey_id
@param string $context
@param string $key
@return string
@throws SodiumException

@return string
@throws Exception
@throws Error

Perform a key exchange, between a designated client and a server.
Typically, you would designate one machine to be the client and the
other to be the server. The first two keys are what you'd expect for
scalarmult() below, but the latter two public keys don't swap places.
| ALICE                          | BOB                                 |
| Client                         | Server                              |
|--------------------------------|-------------------------------------|
| shared = crypto_kx(            | shared = crypto_kx(                 |
|     alice_sk,                  |     bob_sk,                         | <- contextual
|     bob_pk,                    |     alice_pk,                       | <- contextual
|     alice_pk,                  |     alice_pk,                       | <----- static
|     bob_pk                     |     bob_pk                          | <----- static
| )                              | )                                   |
They are used along with the scalarmult product to generate a 256-bit
BLAKE2b hash unique to the client and server keys.
@param string $my_secret
@param string $their_public
@param string $client_public
@param string $server_public
@return string
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

@param string $seed
@return string
@throws SodiumException

@return string
@throws Exception

@param string $keypair
@param string $serverPublicKey
@return array{0: string, 1: string}
@throws SodiumException

@param string $keypair
@param string $clientPublicKey
@return array{0: string, 1: string}
@throws SodiumException

@param string $kp
@return string
@throws SodiumException

@param string $kp
@return string
@throws SodiumException

@param int $outlen
@param string $passwd
@param string $salt
@param int $opslimit
@param int $memlimit
@param int|null $alg
@return string
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

!Exclusive to sodium_compat!
This returns TRUE if the native crypto_pwhash API is available by libsodium.
This returns FALSE if only sodium_compat is available.
@return bool

@param string $passwd
@param int $opslimit
@param int $memlimit
@return string
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Do we need to rehash this password?
@param string $hash
@param int $opslimit
@param int $memlimit
@return bool
@throws SodiumException

@var int $ops

@var int $mem

@param string $passwd
@param string $hash
@return bool
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

@param int $outlen
@param string $passwd
@param string $salt
@param int $opslimit
@param int $memlimit
@return string
@throws SodiumException
@throws TypeError

!Exclusive to sodium_compat!
This returns TRUE if the native crypto_pwhash API is available by libsodium.
This returns FALSE if only sodium_compat is available.
@return bool

@param string $passwd
@param int $opslimit
@param int $memlimit
@return string
@throws SodiumException
@throws TypeError

@param string $passwd
@param string $hash
@return bool
@throws SodiumException
@throws TypeError

Calculate the shared secret between your secret key and your
recipient's public key.
Algorithm: X25519 (ECDH over Curve25519)
@param string $secretKey
@param string $publicKey
@return string
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Calculate an X25519 public key from an X25519 secret key.
@param string $secretKey
@return string
@throws SodiumException
@throws TypeError
@psalm-suppress TooFewArguments
@psalm-suppress MixedArgument

Authenticated symmetric-key encryption.
Algorithm: XSalsa20-Poly1305
@param string $plaintext The message you're encrypting
@param string $nonce A Number to be used Once; must be 24 bytes
@param string $key Symmetric encryption key
@return string           Ciphertext with Poly1305 MAC
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Decrypts a message previously encrypted with crypto_secretbox().
@param string $ciphertext Ciphertext with Poly1305 MAC
@param string $nonce      A Number to be used Once; must be 24 bytes
@param string $key        Symmetric encryption key
@return string            Original plaintext message
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedInferredReturnType
@psalm-suppress MixedReturnStatement

@psalm-suppress InvalidReturnStatement
@psalm-suppress FalsableReturnStatement

Return a secure random key for use with crypto_secretbox
@return string
@throws Exception
@throws Error

Authenticated symmetric-key encryption.
Algorithm: XChaCha20-Poly1305
@param string $plaintext The message you're encrypting
@param string $nonce     A Number to be used Once; must be 24 bytes
@param string $key       Symmetric encryption key
@return string           Ciphertext with Poly1305 MAC
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Decrypts a message previously encrypted with crypto_secretbox_xchacha20poly1305().
@param string $ciphertext Ciphertext with Poly1305 MAC
@param string $nonce      A Number to be used Once; must be 24 bytes
@param string $key        Symmetric encryption key
@return string            Original plaintext message
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

@param string $key
@return array<int, string> Returns a state and a header.
@throws Exception
@throws SodiumException

@param string $header
@param string $key
@return string Returns a state.
@throws Exception

@param string $state
@param string $msg
@param string $aad
@param int $tag
@return string
@throws SodiumException

@param string $state
@param string $msg
@param string $aad
@return bool|array{0: string, 1: int}
@throws SodiumException

@return string
@throws Exception

@param string $state
@return void
@throws SodiumException

Calculates a SipHash-2-4 hash of a message for a given key.
@param string $message Input message
@param string $key SipHash-2-4 key
@return string         Hash
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedInferredReturnType
@psalm-suppress MixedReturnStatement

Return a secure random key for use with crypto_shorthash
@return string
@throws Exception
@throws Error

Returns a signed message. You probably want crypto_sign_detached()
instead, which only returns the signature.
Algorithm: Ed25519 (EdDSA over Curve25519)
@param string $message Message to be signed.
@param string $secretKey Secret signing key.
@return string           Signed message (signature is prefixed).
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedInferredReturnType
@psalm-suppress MixedReturnStatement

Validates a signed message then returns the message.
@param string $signedMessage A signed message
@param string $publicKey A public key
@return string               The original message (if the signature is
                             valid for this public key)
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument
@psalm-suppress MixedInferredReturnType
@psalm-suppress MixedReturnStatement

@psalm-suppress InvalidReturnStatement
@psalm-suppress FalsableReturnStatement

Generate a new random Ed25519 keypair.
@return string
@throws SodiumException
@throws TypeError

@param string $sk
@param string $pk
@return string
@throws SodiumException

Generate an Ed25519 keypair from a seed.
@param string $seed Input seed
@return string      Keypair
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Extract an Ed25519 public key from an Ed25519 keypair.
@param string $keypair Keypair
@return string         Public key
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Calculate an Ed25519 public key from an Ed25519 secret key.
@param string $secretKey Your Ed25519 secret key
@return string           The corresponding Ed25519 public key
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Extract an Ed25519 secret key from an Ed25519 keypair.
@param string $keypair Keypair
@return string         Secret key
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Calculate the Ed25519 signature of a message and return ONLY the signature.
Algorithm: Ed25519 (EdDSA over Curve25519)
@param string $message Message to be signed
@param string $secretKey Secret signing key
@return string           Digital signature
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Verify the Ed25519 signature of a message.
@param string $signature Digital sginature
@param string $message Message to be verified
@param string $publicKey Public key
@return bool             TRUE if this signature is good for this public key;
                         FALSE otherwise
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Convert an Ed25519 public key to a Curve25519 public key
@param string $pk
@return string
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Convert an Ed25519 secret key to a Curve25519 secret key
@param string $sk
@return string
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Expand a key and nonce into a keystream of pseudorandom bytes.
@param int $len Number of bytes desired
@param string $nonce Number to be used Once; must be 24 bytes
@param string $key XSalsa20 key
@return string       Pseudorandom stream that can be XORed with messages
                     to provide encryption (but not authentication; see
                     Poly1305 or crypto_auth() for that, which is not
                     optional for security)
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

DANGER! UNAUTHENTICATED ENCRYPTION!
Unless you are following expert advice, do not used this feature.
Algorithm: XSalsa20
This DOES NOT provide ciphertext integrity.
@param string $message Plaintext message
@param string $nonce Number to be used Once; must be 24 bytes
@param string $key Encryption key
@return string         Encrypted text which is vulnerable to chosen-
                       ciphertext attacks unless you implement some
                       other mitigation to the ciphertext (i.e.
                       Encrypt then MAC)
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

Return a secure random key for use with crypto_stream
@return string
@throws Exception
@throws Error

Cache-timing-safe implementation of hex2bin().
@param string $string Hexadecimal string
@return string        Raw binary string
@throws SodiumException
@throws TypeError
@psalm-suppress TooFewArguments
@psalm-suppress MixedArgument

Increase a string (little endian)
@param string $var
@return void
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

The equivalent to the libsodium minor version we aim to be compatible
with (sans pwhash and memzero).
@return int

@psalm-suppress UndefinedFunction

The equivalent to the libsodium minor version we aim to be compatible
with (sans pwhash and memzero).
@return int

@psalm-suppress UndefinedFunction

Compare two strings.
@param string $left
@param string $right
@return int
@throws SodiumException
@throws TypeError
@psalm-suppress MixedArgument

@var string $left

@var string $right

It's actually not possible to zero memory buffers in PHP. You need the
native library for that.
@param string|null $var
@param-out string|null $var
@return void
@throws SodiumException (Unless libsodium is installed)
@throws TypeError
@psalm-suppress TooFewArguments

@psalm-suppress MixedArgument

@param string $unpadded
@param int $blockSize
@param bool $dontFallback
@return string
@throws SodiumException

@var int $k

@param string $padded
@param int $blockSize
@param bool $dontFallback
@return string
@throws SodiumException

Will sodium_compat run fast on the current hardware and PHP configuration?
@return bool

Generate a string of bytes from the kernel's CSPRNG.
Proudly uses /dev/urandom (if getrandom(2) is not available).
@param int $numBytes
@return string
@throws Exception
@throws TypeError

Generate an integer between 0 and $range (non-inclusive).
@param int $range
@return int
@throws Exception
@throws Error
@throws TypeError

Generate a random 16-bit integer.
@return int
@throws Exception
@throws Error
@throws TypeError

Runtime testing method for 32-bit platforms.
Usage: If runtime_speed_test() returns FALSE, then our 32-bit
       implementation is to slow to use safely without risking timeouts.
       If this happens, install sodium from PECL to get acceptable
       performance.
@param int $iterations Number of multiplications to attempt
@param int $maxTimeout Milliseconds
@return bool           TRUE if we're fast enough, FALSE is not
@throws SodiumException

@var float $end

@var float $start

@var ParagonIE_Sodium_Core32_Int64 $a

@var ParagonIE_Sodium_Core32_Int64 $b

@var float $end

@var int $diff

This emulates libsodium's version_string() function, except ours is
prefixed with 'polyfill-'.
@return string
@psalm-suppress MixedInferredReturnType
@psalm-suppress UndefinedFunction

Should we use the libsodium core function instead?
This is always a good idea, if it's available. (Unless we're in the
middle of running our unit test suite.)
If ext/libsodium is available, use it. Return TRUE.
Otherwise, we have to use the code provided herein. Return FALSE.
@param string $sodium_func_name
@return bool

Libsodium as implemented in PHP 7.2
and/or ext/sodium (via PECL)
@ref https://wiki.php.net/rfc/libsodium
@return bool

## References

**Database Tables (inferred)**
- `libsodium`
- `the`
- `a`
- `an`
- `PHP`
- `PECL`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Compat.php`

**Classes**:
- `you`
- `ParagonIE_Sodium_Compat`

**Functions/Methods**:
- `add(&$val, $addv)`
- `base642bin($encoded, $variant, $ignore = '')`
- `bin2base64($decoded, $variant)`
- `bin2hex($string)`
- `compare($left, $right)`
- `crypto_aead_aes256gcm_is_available()`
- `crypto_aead_aes256gcm_decrypt($ciphertext = '',
        $assocData = '',
        $nonce = '',
        $key = '')`
- `crypto_aead_aes256gcm_encrypt($plaintext = '',
        $assocData = '',
        $nonce = '',
        $key = '')`
- `crypto_aead_aes256gcm_keygen()`
- `crypto_aead_chacha20poly1305_decrypt($ciphertext = '',
        $assocData = '',
        $nonce = '',
        $key = '')`
- `crypto_aead_chacha20poly1305_encrypt($plaintext = '',
        $assocData = '',
        $nonce = '',
        $key = '')`
- `crypto_aead_chacha20poly1305_ietf_decrypt($ciphertext = '',
        $assocData = '',
        $nonce = '',
        $key = '')`
- `crypto_aead_chacha20poly1305_keygen()`
- `crypto_aead_chacha20poly1305_ietf_encrypt($plaintext = '',
        $assocData = '',
        $nonce = '',
        $key = '')`
- `crypto_aead_chacha20poly1305_ietf_keygen()`
- `crypto_aead_xchacha20poly1305_ietf_decrypt($ciphertext = '',
        $assocData = '',
        $nonce = '',
        $key = '',
        $dontFallback = false)`
- `crypto_aead_xchacha20poly1305_ietf_encrypt($plaintext = '',
        $assocData = '',
        $nonce = '',
        $key = '',
        $dontFallback = false)`
- `crypto_aead_xchacha20poly1305_ietf_keygen()`
- `crypto_auth($message, $key)`
- `crypto_auth_keygen()`
- `crypto_auth_verify($mac, $message, $key)`
- `crypto_box($plaintext, $nonce, $keypair)`
- `crypto_box_seal($plaintext, $publicKey)`
- `crypto_box_seal_open($ciphertext, $keypair)`
- `crypto_box_keypair()`
- `crypto_box_keypair_from_secretkey_and_publickey($secretKey, $publicKey)`
- `crypto_box_open($ciphertext, $nonce, $keypair)`
- `crypto_box_publickey($keypair)`
- `crypto_box_publickey_from_secretkey($secretKey)`
- `crypto_box_secretkey($keypair)`
- `crypto_box_seed_keypair($seed)`
- `crypto_generichash($message, $key = '', $length = self::CRYPTO_GENERICHASH_BYTES)`
- `crypto_generichash_final(&$ctx, $length = self::CRYPTO_GENERICHASH_BYTES)`
- `crypto_generichash_init($key = '', $length = self::CRYPTO_GENERICHASH_BYTES)`
- `crypto_generichash_init_salt_personal($key = '',
        $length = self::CRYPTO_GENERICHASH_BYTES,
        $salt = '',
        $personal = '')`
- `crypto_generichash_update(&$ctx, $message)`
- `crypto_generichash_keygen()`
- `crypto_kdf_derive_from_key($subkey_len,
        $subkey_id,
        $context,
        $key)`
- `crypto_kdf_keygen()`
- `crypto_kx($my_secret, $their_public, $client_public, $server_public)`
- `crypto_kx_seed_keypair($seed)`
- `crypto_kx_keypair()`
- `crypto_kx_client_session_keys($keypair, $serverPublicKey)`
- `crypto_kx_server_session_keys($keypair, $clientPublicKey)`
- `crypto_kx_secretkey($kp)`
- `crypto_kx_publickey($kp)`
- `crypto_pwhash($outlen, $passwd, $salt, $opslimit, $memlimit, $alg = null)`
- `crypto_pwhash_is_available()`
- `crypto_pwhash_str($passwd, $opslimit, $memlimit)`
- `crypto_pwhash_str_needs_rehash($hash, $opslimit, $memlimit)`
- `crypto_pwhash_str_verify($passwd, $hash)`
- `crypto_pwhash_scryptsalsa208sha256($outlen, $passwd, $salt, $opslimit, $memlimit)`
- `crypto_pwhash_scryptsalsa208sha256_is_available()`
- `crypto_pwhash_scryptsalsa208sha256_str($passwd, $opslimit, $memlimit)`
- `crypto_pwhash_scryptsalsa208sha256_str_verify($passwd, $hash)`
- `crypto_scalarmult($secretKey, $publicKey)`
- `crypto_scalarmult_base($secretKey)`
- `crypto_secretbox($plaintext, $nonce, $key)`
- `crypto_secretbox_open($ciphertext, $nonce, $key)`
- `crypto_secretbox_keygen()`
- `crypto_secretbox_xchacha20poly1305($plaintext, $nonce, $key)`
- `crypto_secretbox_xchacha20poly1305_open($ciphertext, $nonce, $key)`
- `crypto_secretstream_xchacha20poly1305_init_push($key)`
- `crypto_secretstream_xchacha20poly1305_init_pull($header, $key)`
- `crypto_secretstream_xchacha20poly1305_push(&$state, $msg, $aad = '', $tag = 0)`
- `crypto_secretstream_xchacha20poly1305_pull(&$state, $msg, $aad = '')`
- `crypto_secretstream_xchacha20poly1305_keygen()`
- `crypto_secretstream_xchacha20poly1305_rekey(&$state)`
- `crypto_shorthash($message, $key)`
- `crypto_shorthash_keygen()`
- `crypto_sign($message, $secretKey)`
- `crypto_sign_open($signedMessage, $publicKey)`
- `crypto_sign_keypair()`
- `crypto_sign_keypair_from_secretkey_and_publickey($sk, $pk)`
- `crypto_sign_seed_keypair($seed)`
- `crypto_sign_publickey($keypair)`
- `crypto_sign_publickey_from_secretkey($secretKey)`
- `crypto_sign_secretkey($keypair)`
- `crypto_sign_detached($message, $secretKey)`
- `crypto_sign_verify_detached($signature, $message, $publicKey)`
- `crypto_sign_ed25519_pk_to_curve25519($pk)`
- `crypto_sign_ed25519_sk_to_curve25519($sk)`
- `crypto_stream($len, $nonce, $key)`
- `crypto_stream_xor($message, $nonce, $key)`
- `crypto_stream_keygen()`
- `hex2bin($string)`
- `increment(&$var)`
- `library_version_major()`
- `library_version_minor()`
- `memcmp($left, $right)`
- `memzero(&$var)`
- `pad($unpadded, $blockSize, $dontFallback = false)`
- `unpad($padded, $blockSize, $dontFallback = false)`
- `polyfill_is_fast()`
- `randombytes_buf($numBytes)`
- `randombytes_uniform($range)`
- `randombytes_random16()`
- `runtime_speed_test($iterations, $maxTimeout)`
- `version_string()`
- `use_fallback($sodium_func_name = '')`
- `useNewSodiumAPI()`

