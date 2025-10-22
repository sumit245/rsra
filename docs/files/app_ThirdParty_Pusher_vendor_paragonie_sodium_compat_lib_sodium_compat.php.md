# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\lib\sodium_compat.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\lib\sodium_compat.php`
- Type: PHP
- Size: 24518 bytes

## Summary (from docblocks)

This file will monkey patch the pure-PHP implementation in place of the
PECL functions, but only if they do not already exist.
Thus, the functions just proxy to the appropriate ParagonIE_Sodium_Compat
method.

@see ParagonIE_Sodium_Compat::bin2hex()
@param string $string
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::compare()
@param string $a
@param string $b
@return int
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_aead_aes256gcm_decrypt()
@param string $message
@param string $assocData
@param string $nonce
@param string $key
@return string|bool

@see ParagonIE_Sodium_Compat::crypto_aead_aes256gcm_encrypt()
@param string $message
@param string $assocData
@param string $nonce
@param string $key
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_aead_aes256gcm_is_available()
@return bool

@see ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_decrypt()
@param string $message
@param string $assocData
@param string $nonce
@param string $key
@return string|bool

@see ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_encrypt()
@param string $message
@param string $assocData
@param string $nonce
@param string $key
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_ietf_decrypt()
@param string $message
@param string $assocData
@param string $nonce
@param string $key
@return string|bool

@see ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_ietf_encrypt()
@param string $message
@param string $assocData
@param string $nonce
@param string $key
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_auth()
@param string $message
@param string $key
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_auth_verify()
@param string $mac
@param string $message
@param string $key
@return bool
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_box()
@param string $message
@param string $nonce
@param string $kp
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_box_keypair()
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_box_keypair_from_secretkey_and_publickey()
@param string $sk
@param string $pk
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_box_open()
@param string $message
@param string $nonce
@param string $kp
@return string|bool

@see ParagonIE_Sodium_Compat::crypto_box_publickey()
@param string $keypair
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_box_publickey_from_secretkey()
@param string $sk
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_box_seal_open()
@param string $message
@param string $publicKey
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_box_seal_open()
@param string $message
@param string $kp
@return string|bool

@see ParagonIE_Sodium_Compat::crypto_box_secretkey()
@param string $keypair
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_generichash()
@param string $message
@param string|null $key
@param int $outLen
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_generichash_final()
@param string|null $ctx
@param int $outputLength
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_generichash_init()
@param string|null $key
@param int $outLen
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_generichash_update()
@param string|null $ctx
@param string $message
@return void
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_kx()
@param string $my_secret
@param string $their_public
@param string $client_public
@param string $server_public
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_pwhash()
@param int $outlen
@param string $passwd
@param string $salt
@param int $opslimit
@param int $memlimit
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_pwhash_str()
@param string $passwd
@param int $opslimit
@param int $memlimit
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_pwhash_str_verify()
@param string $passwd
@param string $hash
@return bool
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_pwhash_scryptsalsa208sha256()
@param int $outlen
@param string $passwd
@param string $salt
@param int $opslimit
@param int $memlimit
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_pwhash_scryptsalsa208sha256_str()
@param string $passwd
@param int $opslimit
@param int $memlimit
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_pwhash_scryptsalsa208sha256_str_verify()
@param string $passwd
@param string $hash
@return bool
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_scalarmult()
@param string $n
@param string $p
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_scalarmult_base()
@param string $n
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_secretbox()
@param string $message
@param string $nonce
@param string $key
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_secretbox_open()
@param string $message
@param string $nonce
@param string $key
@return string|bool

@see ParagonIE_Sodium_Compat::crypto_shorthash()
@param string $message
@param string $key
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_sign()
@param string $message
@param string $sk
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_sign_detached()
@param string $message
@param string $sk
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_sign_keypair()
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_sign_open()
@param string $signedMessage
@param string $pk
@return string|bool

@see ParagonIE_Sodium_Compat::crypto_sign_publickey()
@param string $keypair
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_sign_publickey_from_secretkey()
@param string $sk
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_sign_secretkey()
@param string $keypair
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_sign_seed_keypair()
@param string $seed
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_sign_verify_detached()
@param string $signature
@param string $message
@param string $pk
@return bool
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_sign_ed25519_pk_to_curve25519()
@param string $pk
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_sign_ed25519_sk_to_curve25519()
@param string $sk
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_stream()
@param int $len
@param string $nonce
@param string $key
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::crypto_stream_xor()
@param string $message
@param string $nonce
@param string $key
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::hex2bin()
@param string $string
@return string
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::memcmp()
@param string $a
@param string $b
@return int
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::memzero()
@param string $str
@return void
@throws \SodiumException
@throws \TypeError

@see ParagonIE_Sodium_Compat::randombytes_buf()
@param int $amount
@return string
@throws \TypeError

@see ParagonIE_Sodium_Compat::randombytes_uniform()
@param int $upperLimit
@return int
@throws \SodiumException
@throws \Error

@see ParagonIE_Sodium_Compat::randombytes_random16()
@return int

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\lib\sodium_compat.php`

**Functions/Methods**:
- `bin2hex($string)`
- `compare($a, $b)`
- `crypto_aead_aes256gcm_decrypt($message, $assocData, $nonce, $key)`
- `crypto_aead_aes256gcm_encrypt($message, $assocData, $nonce, $key)`
- `crypto_aead_aes256gcm_is_available()`
- `crypto_aead_chacha20poly1305_decrypt($message, $assocData, $nonce, $key)`
- `crypto_aead_chacha20poly1305_encrypt($message, $assocData, $nonce, $key)`
- `crypto_aead_chacha20poly1305_ietf_decrypt($message, $assocData, $nonce, $key)`
- `crypto_aead_chacha20poly1305_ietf_encrypt($message, $assocData, $nonce, $key)`
- `crypto_auth($message, $key)`
- `crypto_auth_verify($mac, $message, $key)`
- `crypto_box($message, $nonce, $kp)`
- `crypto_box_keypair()`
- `crypto_box_keypair_from_secretkey_and_publickey($sk, $pk)`
- `crypto_box_open($message, $nonce, $kp)`
- `crypto_box_publickey($keypair)`
- `crypto_box_publickey_from_secretkey($sk)`
- `crypto_box_seal($message, $publicKey)`
- `crypto_box_seal_open($message, $kp)`
- `crypto_box_secretkey($keypair)`
- `crypto_generichash($message, $key = null, $outLen = 32)`
- `crypto_generichash_final(&$ctx, $outputLength = 32)`
- `crypto_generichash_init($key = null, $outLen = 32)`
- `crypto_generichash_update(&$ctx, $message = '')`
- `crypto_kx($my_secret, $their_public, $client_public, $server_public)`
- `crypto_pwhash($outlen, $passwd, $salt, $opslimit, $memlimit)`
- `crypto_pwhash_str($passwd, $opslimit, $memlimit)`
- `crypto_pwhash_str_verify($passwd, $hash)`
- `crypto_pwhash_scryptsalsa208sha256($outlen, $passwd, $salt, $opslimit, $memlimit)`
- `crypto_pwhash_scryptsalsa208sha256_str($passwd, $opslimit, $memlimit)`
- `crypto_pwhash_scryptsalsa208sha256_str_verify($passwd, $hash)`
- `crypto_scalarmult($n, $p)`
- `crypto_scalarmult_base($n)`
- `crypto_secretbox($message, $nonce, $key)`
- `crypto_secretbox_open($message, $nonce, $key)`
- `crypto_shorthash($message, $key = '')`
- `crypto_sign($message, $sk)`
- `crypto_sign_detached($message, $sk)`
- `crypto_sign_keypair()`
- `crypto_sign_open($signedMessage, $pk)`
- `crypto_sign_publickey($keypair)`
- `crypto_sign_publickey_from_secretkey($sk)`
- `crypto_sign_secretkey($keypair)`
- `crypto_sign_seed_keypair($seed)`
- `crypto_sign_verify_detached($signature, $message, $pk)`
- `crypto_sign_ed25519_pk_to_curve25519($pk)`
- `crypto_sign_ed25519_sk_to_curve25519($sk)`
- `crypto_stream($len, $nonce, $key)`
- `crypto_stream_xor($message, $nonce, $key)`
- `hex2bin($string)`
- `memcmp($a, $b)`
- `memzero(&$str)`
- `randombytes_buf($amount)`
- `randombytes_uniform($upperLimit)`
- `randombytes_random16()`

