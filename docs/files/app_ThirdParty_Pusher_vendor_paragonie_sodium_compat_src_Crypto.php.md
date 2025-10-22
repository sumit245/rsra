# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Crypto.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Crypto.php`
- Type: PHP
- Size: 54810 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_Crypto
ATTENTION!
If you are using this library, you should be using
ParagonIE_Sodium_Compat in your code, not this class.

AEAD Decryption with ChaCha20-Poly1305
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $message
@param string $ad
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

@var int $len - Length of message (ciphertext + MAC)

@var int  $clen - Length of ciphertext

@var int $adlen - Length of associated data

@var string $mac - Message authentication code

@var string $ciphertext - The encrypted message (sans MAC)

@var string The first block of the chacha20 keystream, used as a poly1305 key

AEAD Encryption with ChaCha20-Poly1305
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $message
@param string $ad
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

@var int $len - Length of the plaintext message

@var int $adlen - Length of the associated data

@var string The first block of the chacha20 keystream, used as a poly1305 key

@var string $ciphertext - Raw encrypted data

AEAD Decryption with ChaCha20-Poly1305, IETF mode (96-bit nonce)
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $message
@param string $ad
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

@var int $adlen - Length of associated data

@var int $len - Length of message (ciphertext + MAC)

@var int  $clen - Length of ciphertext

@var string The first block of the chacha20 keystream, used as a poly1305 key

@var string $mac - Message authentication code

@var string $ciphertext - The encrypted message (sans MAC)

AEAD Encryption with ChaCha20-Poly1305, IETF mode (96-bit nonce)
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $message
@param string $ad
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

@var int $len - Length of the plaintext message

@var int $adlen - Length of the associated data

@var string The first block of the chacha20 keystream, used as a poly1305 key

@var string $ciphertext - Raw encrypted data

AEAD Decryption with ChaCha20-Poly1305, IETF mode (96-bit nonce)
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $message
@param string $ad
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

AEAD Encryption with ChaCha20-Poly1305, IETF mode (96-bit nonce)
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $message
@param string $ad
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

HMAC-SHA-512-256 (a.k.a. the leftmost 256 bits of HMAC-SHA-512)
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $message
@param string $key
@return string
@throws TypeError

HMAC-SHA-512-256 validation. Constant-time via hash_equals().
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $mac
@param string $message
@param string $key
@return bool
@throws SodiumException
@throws TypeError

X25519 key exchange followed by XSalsa20Poly1305 symmetric encryption
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $plaintext
@param string $nonce
@param string $keypair
@return string
@throws SodiumException
@throws TypeError

X25519-XSalsa20-Poly1305 with one ephemeral X25519 keypair.
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $message
@param string $publicKey
@return string
@throws SodiumException
@throws TypeError

@var string $ephemeralKeypair

@var string $ephemeralSK

@var string $ephemeralPK

@var string $nonce

@var string $keypair - The combined keypair used in crypto_box()

@var string $ciphertext Ciphertext + MAC from crypto_box

Opens a message encrypted via box_seal().
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $message
@param string $keypair
@return string
@throws SodiumException
@throws TypeError

@var string $ephemeralPK

@var string $ciphertext (ciphertext + MAC)

@var string $secretKey

@var string $publicKey

@var string $nonce

@var string $keypair

@var string $m

Used by crypto_box() to get the crypto_secretbox() key.
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $sk
@param string $pk
@return string
@throws SodiumException
@throws TypeError

@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@return string
@throws Exception
@throws SodiumException
@throws TypeError

@param string $seed
@return string
@throws SodiumException
@throws TypeError

@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $sKey
@param string $pKey
@return string
@throws TypeError

@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $keypair
@return string
@throws RangeException
@throws TypeError

@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $keypair
@return string
@throws RangeException
@throws TypeError

@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $sKey
@return string
@throws RangeException
@throws SodiumException
@throws TypeError

Decrypt a message encrypted with box().
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $ciphertext
@param string $nonce
@param string $keypair
@return string
@throws SodiumException
@throws TypeError

Calculate a BLAKE2b hash.
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $message
@param string|null $key
@param int $outlen
@return string
@throws RangeException
@throws SodiumException
@throws TypeError

@var SplFixedArray $k

@var SplFixedArray $in

@var SplFixedArray $ctx

@var SplFixedArray $out

@var array<int, int>

Finalize a BLAKE2b hashing context, returning the hash.
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $ctx
@param int $outlen
@return string
@throws SodiumException
@throws TypeError

@var SplFixedArray $context

@var SplFixedArray $out

@var array<int, int>

Initialize a hashing context for BLAKE2b.
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $key
@param int $outputLength
@return string
@throws RangeException
@throws SodiumException
@throws TypeError

@var SplFixedArray $ctx

Initialize a hashing context for BLAKE2b.
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $key
@param int $outputLength
@param string $salt
@param string $personal
@return string
@throws RangeException
@throws SodiumException
@throws TypeError

@var SplFixedArray $ctx

Update a hashing context for BLAKE2b with $message
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $ctx
@param string $message
@return string
@throws SodiumException
@throws TypeError

@var SplFixedArray $context

@var SplFixedArray $in

Libsodium's crypto_kx().
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $my_sk
@param string $their_pk
@param string $client_pk
@param string $server_pk
@return string
@throws SodiumException
@throws TypeError

ECDH over Curve25519
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $sKey
@param string $pKey
@return string
@throws SodiumException
@throws TypeError

ECDH over Curve25519, using the basepoint.
Used to get a secret key from a public key.
@param string $secret
@return string
@throws SodiumException
@throws TypeError

This throws an Error if a zero public key was passed to the function.
@param string $q
@return void
@throws SodiumException
@throws TypeError

XSalsa20-Poly1305 authenticated symmetric-key encryption.
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $plaintext
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

@var string $subkey

@var string $block0

@var int $mlen - Length of the plaintext message

@var string $block0

@var string $c

@var string $c - MAC || ciphertext

Decrypt a ciphertext generated via secretbox().
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $ciphertext
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

@var string $mac

@var string $c

@var int $clen

@var string $subkey

@var string $block0

@var string $m - Decrypted message

XChaCha20-Poly1305 authenticated symmetric-key encryption.
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $plaintext
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

@var string $subkey

@var string $block0

@var int $mlen - Length of the plaintext message

@var string $block0

@var string $c

@var string $c - MAC || ciphertext

Decrypt a ciphertext generated via secretbox_xchacha20poly1305().
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $ciphertext
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

@var string $mac

@var string $c

@var int $clen

@var string $subkey

@var string $block0

@var string $m - Decrypted message

@param string $key
@return array<int, string> Returns a state and a header.
@throws Exception
@throws SodiumException

@param string $key
@param string $header
@return string Returns a state.
@throws Exception

@param string $state
@param string $msg
@param string $aad
@param int $tag
@return string
@throws SodiumException

@var bool $rekey

@param string $state
@param string $cipher
@param string $aad
@return bool|array{0: string, 1: int}
@throws SodiumException

@var bool $rekey

@param string $state
@return void
@throws SodiumException

Detached Ed25519 signature.
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $message
@param string $sk
@return string
@throws SodiumException
@throws TypeError

Attached Ed25519 signature. (Returns a signed message.)
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $message
@param string $sk
@return string
@throws SodiumException
@throws TypeError

Opens a signed message. If valid, returns the message.
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $signedMessage
@param string $pk
@return string
@throws SodiumException
@throws TypeError

Verify a detached signature of a given message and public key.
@internal Do not use this directly. Use ParagonIE_Sodium_Compat.
@param string $signature
@param string $message
@param string $pk
@return bool
@throws SodiumException
@throws TypeError

## References

**Database Tables (inferred)**
- `crypto_box`
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\Crypto.php`

**Classes**:
- `ParagonIE_Sodium_Crypto`

**Functions/Methods**:
- `aead_chacha20poly1305_decrypt($message = '',
        $ad = '',
        $nonce = '',
        $key = '')`
- `aead_chacha20poly1305_encrypt($message = '',
        $ad = '',
        $nonce = '',
        $key = '')`
- `aead_chacha20poly1305_ietf_decrypt($message = '',
        $ad = '',
        $nonce = '',
        $key = '')`
- `aead_chacha20poly1305_ietf_encrypt($message = '',
        $ad = '',
        $nonce = '',
        $key = '')`
- `aead_xchacha20poly1305_ietf_decrypt($message = '',
        $ad = '',
        $nonce = '',
        $key = '')`
- `aead_xchacha20poly1305_ietf_encrypt($message = '',
        $ad = '',
        $nonce = '',
        $key = '')`
- `auth($message, $key)`
- `auth_verify($mac, $message, $key)`
- `box($plaintext, $nonce, $keypair)`
- `box_seal($message, $publicKey)`
- `box_seal_open($message, $keypair)`
- `box_beforenm($sk, $pk)`
- `box_keypair()`
- `box_seed_keypair($seed)`
- `box_keypair_from_secretkey_and_publickey($sKey, $pKey)`
- `box_secretkey($keypair)`
- `box_publickey($keypair)`
- `box_publickey_from_secretkey($sKey)`
- `box_open($ciphertext, $nonce, $keypair)`
- `generichash($message, $key = '', $outlen = 32)`
- `generichash_final($ctx, $outlen = 32)`
- `generichash_init($key = '', $outputLength = 32)`
- `generichash_init_salt_personal($key = '',
        $outputLength = 32,
        $salt = '',
        $personal = '')`
- `generichash_update($ctx, $message)`
- `keyExchange($my_sk, $their_pk, $client_pk, $server_pk)`
- `scalarmult($sKey, $pKey)`
- `scalarmult_base($secret)`
- `scalarmult_throw_if_zero($q)`
- `secretbox($plaintext, $nonce, $key)`
- `secretbox_open($ciphertext, $nonce, $key)`
- `secretbox_xchacha20poly1305($plaintext, $nonce, $key)`
- `secretbox_xchacha20poly1305_open($ciphertext, $nonce, $key)`
- `secretstream_xchacha20poly1305_init_push($key)`
- `secretstream_xchacha20poly1305_init_pull($key, $header)`
- `secretstream_xchacha20poly1305_push(&$state, $msg, $aad = '', $tag = 0)`
- `secretstream_xchacha20poly1305_pull(&$state, $cipher, $aad = '')`
- `secretstream_xchacha20poly1305_rekey(&$state)`
- `sign_detached($message, $sk)`
- `sign($message, $sk)`
- `sign_open($signedMessage, $pk)`
- `sign_verify_detached($signature, $message, $pk)`

