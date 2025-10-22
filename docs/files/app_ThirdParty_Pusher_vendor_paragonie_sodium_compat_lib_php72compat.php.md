# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\lib\php72compat.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\lib\php72compat.php`
- Type: PHP
- Size: 41569 bytes

## Summary (from docblocks)

This file will monkey patch the pure-PHP implementation in place of the
PECL functions and constants, but only if they do not already exist.
Thus, the functions or constants just proxy to the appropriate
ParagonIE_Sodium_Compat method or class constant, respectively.

@see ParagonIE_Sodium_Compat::add()
@param string $val
@param string $addv
@return void
@throws SodiumException

@see ParagonIE_Sodium_Compat::bin2base64()
@param string $string
@param int $variant
@param string $ignore
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::bin2base64()
@param string $string
@param int $variant
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::hex2bin()
@param string $string
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::compare()
@param string $a
@param string $b
@return int
@throws SodiumException
@throws TypeError

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
@throws SodiumException
@throws TypeError

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
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_keygen()
@return string
@throws Exception

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
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_ietf_keygen()
@return string
@throws Exception

@see ParagonIE_Sodium_Compat::crypto_aead_xchacha20poly1305_ietf_decrypt()
@param string $message
@param string $assocData
@param string $nonce
@param string $key
@return string|bool

@see ParagonIE_Sodium_Compat::crypto_aead_xchacha20poly1305_ietf_encrypt()
@param string $message
@param string $assocData
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_aead_xchacha20poly1305_ietf_keygen()
@return string
@throws Exception

@see ParagonIE_Sodium_Compat::crypto_auth()
@param string $message
@param string $key
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_auth_keygen()
@return string
@throws Exception

@see ParagonIE_Sodium_Compat::crypto_auth_verify()
@param string $mac
@param string $message
@param string $key
@return bool
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_box()
@param string $message
@param string $nonce
@param string $kp
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_box_keypair()
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_box_keypair_from_secretkey_and_publickey()
@param string $sk
@param string $pk
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_box_open()
@param string $message
@param string $nonce
@param string $kp
@return string|bool

@see ParagonIE_Sodium_Compat::crypto_box_publickey()
@param string $keypair
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_box_publickey_from_secretkey()
@param string $sk
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_box_seal()
@param string $message
@param string $publicKey
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_box_seal_open()
@param string $message
@param string $kp
@return string|bool
@throws SodiumException

@see ParagonIE_Sodium_Compat::crypto_box_secretkey()
@param string $keypair
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_box_seed_keypair()
@param string $seed
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_generichash()
@param string $message
@param string|null $key
@param int $outLen
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_generichash_final()
@param string|null $ctx
@param int $outputLength
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_generichash_init()
@param string|null $key
@param int $outLen
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_generichash_keygen()
@return string
@throws Exception

@see ParagonIE_Sodium_Compat::crypto_generichash_update()
@param string|null $ctx
@param string $message
@return void
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_kdf_keygen()
@return string
@throws Exception

@see ParagonIE_Sodium_Compat::crypto_kdf_derive_from_key()
@param int $subkey_len
@param int $subkey_id
@param string $context
@param string $key
@return string
@throws Exception

@see ParagonIE_Sodium_Compat::crypto_kx()
@param string $my_secret
@param string $their_public
@param string $client_public
@param string $server_public
@return string
@throws SodiumException
@throws TypeError

@param string $seed
@return string
@throws Exception

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

@param string $keypair
@return string
@throws Exception

@param string $keypair
@return string
@throws Exception

@see ParagonIE_Sodium_Compat::crypto_pwhash()
@param int $outlen
@param string $passwd
@param string $salt
@param int $opslimit
@param int $memlimit
@param int|null $algo
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_pwhash_str()
@param string $passwd
@param int $opslimit
@param int $memlimit
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_pwhash_str_needs_rehash()
@param string $hash
@param int $opslimit
@param int $memlimit
@return bool
@throws SodiumException

@see ParagonIE_Sodium_Compat::crypto_pwhash_str_verify()
@param string $passwd
@param string $hash
@return bool
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_pwhash_scryptsalsa208sha256()
@param int $outlen
@param string $passwd
@param string $salt
@param int $opslimit
@param int $memlimit
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_pwhash_scryptsalsa208sha256_str()
@param string $passwd
@param int $opslimit
@param int $memlimit
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_pwhash_scryptsalsa208sha256_str_verify()
@param string $passwd
@param string $hash
@return bool
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_scalarmult()
@param string $n
@param string $p
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_scalarmult_base()
@param string $n
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_secretbox()
@param string $message
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_secretbox_keygen()
@return string
@throws Exception

@see ParagonIE_Sodium_Compat::crypto_secretbox_open()
@param string $message
@param string $nonce
@param string $key
@return string|bool

@param string $key
@return array<int, string>
@throws SodiumException

@param string $state
@param string $msg
@param string $aad
@param int $tag
@return string
@throws SodiumException

@param string $header
@param string $key
@return string
@throws Exception

@param string $state
@param string $cipher
@param string $aad
@return bool|array{0: string, 1: int}
@throws SodiumException

@param string $state
@return void
@throws SodiumException

@return string
@throws Exception

@see ParagonIE_Sodium_Compat::crypto_shorthash()
@param string $message
@param string $key
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_shorthash_keygen()
@return string
@throws Exception

@see ParagonIE_Sodium_Compat::crypto_sign()
@param string $message
@param string $sk
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_sign_detached()
@param string $message
@param string $sk
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_sign_keypair_from_secretkey_and_publickey()
@param string $sk
@param string $pk
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_sign_keypair()
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_sign_open()
@param string $signedMessage
@param string $pk
@return string|bool

@see ParagonIE_Sodium_Compat::crypto_sign_publickey()
@param string $keypair
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_sign_publickey_from_secretkey()
@param string $sk
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_sign_secretkey()
@param string $keypair
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_sign_seed_keypair()
@param string $seed
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_sign_verify_detached()
@param string $signature
@param string $message
@param string $pk
@return bool
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_sign_ed25519_pk_to_curve25519()
@param string $pk
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_sign_ed25519_sk_to_curve25519()
@param string $sk
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_stream()
@param int $len
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::crypto_stream_keygen()
@return string
@throws Exception

@see ParagonIE_Sodium_Compat::crypto_stream_xor()
@param string $message
@param string $nonce
@param string $key
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::hex2bin()
@param string $string
@return string
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::increment()
@param string $string
@return void
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::library_version_major()
@return int

@see ParagonIE_Sodium_Compat::library_version_minor()
@return int

@see ParagonIE_Sodium_Compat::version_string()
@return string

@see ParagonIE_Sodium_Compat::memcmp()
@param string $a
@param string $b
@return int
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::memzero()
@param string $str
@return void
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::pad()
@param string $unpadded
@param int $blockSize
@return int
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::pad()
@param string $padded
@param int $blockSize
@return int
@throws SodiumException
@throws TypeError

@see ParagonIE_Sodium_Compat::randombytes_buf()
@param int $amount
@return string
@throws Exception

@see ParagonIE_Sodium_Compat::randombytes_uniform()
@param int $upperLimit
@return int
@throws Exception

@see ParagonIE_Sodium_Compat::randombytes_random16()
@return int
@throws Exception

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\lib\php72compat.php`

**Classes**:
- `constant`

**Functions/Methods**:
- `sodium_add(&$val, $addv)`
- `sodium_base642bin($string, $variant, $ignore ='')`
- `sodium_bin2base64($string, $variant)`
- `sodium_bin2hex($string)`
- `sodium_compare($a, $b)`
- `sodium_crypto_aead_aes256gcm_decrypt($message, $assocData, $nonce, $key)`
- `sodium_crypto_aead_aes256gcm_encrypt($message, $assocData, $nonce, $key)`
- `sodium_crypto_aead_aes256gcm_is_available()`
- `sodium_crypto_aead_chacha20poly1305_decrypt($message, $assocData, $nonce, $key)`
- `sodium_crypto_aead_chacha20poly1305_encrypt($message, $assocData, $nonce, $key)`
- `sodium_crypto_aead_chacha20poly1305_keygen()`
- `sodium_crypto_aead_chacha20poly1305_ietf_decrypt($message, $assocData, $nonce, $key)`
- `sodium_crypto_aead_chacha20poly1305_ietf_encrypt($message, $assocData, $nonce, $key)`
- `sodium_crypto_aead_chacha20poly1305_ietf_keygen()`
- `sodium_crypto_aead_xchacha20poly1305_ietf_decrypt($message, $assocData, $nonce, $key)`
- `sodium_crypto_aead_xchacha20poly1305_ietf_encrypt($message, $assocData, $nonce, $key)`
- `sodium_crypto_aead_xchacha20poly1305_ietf_keygen()`
- `sodium_crypto_auth($message, $key)`
- `sodium_crypto_auth_keygen()`
- `sodium_crypto_auth_verify($mac, $message, $key)`
- `sodium_crypto_box($message, $nonce, $kp)`
- `sodium_crypto_box_keypair()`
- `sodium_crypto_box_keypair_from_secretkey_and_publickey($sk, $pk)`
- `sodium_crypto_box_open($message, $nonce, $kp)`
- `sodium_crypto_box_publickey($keypair)`
- `sodium_crypto_box_publickey_from_secretkey($sk)`
- `sodium_crypto_box_seal($message, $publicKey)`
- `sodium_crypto_box_seal_open($message, $kp)`
- `sodium_crypto_box_secretkey($keypair)`
- `sodium_crypto_box_seed_keypair($seed)`
- `sodium_crypto_generichash($message, $key = null, $outLen = 32)`
- `sodium_crypto_generichash_final(&$ctx, $outputLength = 32)`
- `sodium_crypto_generichash_init($key = null, $outLen = 32)`
- `sodium_crypto_generichash_keygen()`
- `sodium_crypto_generichash_update(&$ctx, $message = '')`
- `sodium_crypto_kdf_keygen()`
- `sodium_crypto_kdf_derive_from_key($subkey_len, $subkey_id, $context, $key)`
- `sodium_crypto_kx($my_secret, $their_public, $client_public, $server_public)`
- `sodium_crypto_kx_seed_keypair($seed)`
- `sodium_crypto_kx_keypair()`
- `sodium_crypto_kx_client_session_keys($keypair, $serverPublicKey)`
- `sodium_crypto_kx_server_session_keys($keypair, $clientPublicKey)`
- `sodium_crypto_kx_secretkey($keypair)`
- `sodium_crypto_kx_publickey($keypair)`
- `sodium_crypto_pwhash($outlen, $passwd, $salt, $opslimit, $memlimit, $algo = null)`
- `sodium_crypto_pwhash_str($passwd, $opslimit, $memlimit)`
- `sodium_crypto_pwhash_str_needs_rehash($hash, $opslimit, $memlimit)`
- `sodium_crypto_pwhash_str_verify($passwd, $hash)`
- `sodium_crypto_pwhash_scryptsalsa208sha256($outlen, $passwd, $salt, $opslimit, $memlimit)`
- `sodium_crypto_pwhash_scryptsalsa208sha256_str($passwd, $opslimit, $memlimit)`
- `sodium_crypto_pwhash_scryptsalsa208sha256_str_verify($passwd, $hash)`
- `sodium_crypto_scalarmult($n, $p)`
- `sodium_crypto_scalarmult_base($n)`
- `sodium_crypto_secretbox($message, $nonce, $key)`
- `sodium_crypto_secretbox_keygen()`
- `sodium_crypto_secretbox_open($message, $nonce, $key)`
- `sodium_crypto_secretstream_xchacha20poly1305_init_push($key)`
- `sodium_crypto_secretstream_xchacha20poly1305_push(&$state, $msg, $aad = '', $tag = 0)`
- `sodium_crypto_secretstream_xchacha20poly1305_init_pull($header, $key)`
- `sodium_crypto_secretstream_xchacha20poly1305_pull(&$state, $cipher, $aad = '')`
- `sodium_crypto_secretstream_xchacha20poly1305_rekey(&$state)`
- `sodium_crypto_secretstream_xchacha20poly1305_keygen()`
- `sodium_crypto_shorthash($message, $key = '')`
- `sodium_crypto_shorthash_keygen()`
- `sodium_crypto_sign($message, $sk)`
- `sodium_crypto_sign_detached($message, $sk)`
- `sodium_crypto_sign_keypair_from_secretkey_and_publickey($sk, $pk)`
- `sodium_crypto_sign_keypair()`
- `sodium_crypto_sign_open($signedMessage, $pk)`
- `sodium_crypto_sign_publickey($keypair)`
- `sodium_crypto_sign_publickey_from_secretkey($sk)`
- `sodium_crypto_sign_secretkey($keypair)`
- `sodium_crypto_sign_seed_keypair($seed)`
- `sodium_crypto_sign_verify_detached($signature, $message, $pk)`
- `sodium_crypto_sign_ed25519_pk_to_curve25519($pk)`
- `sodium_crypto_sign_ed25519_sk_to_curve25519($sk)`
- `sodium_crypto_stream($len, $nonce, $key)`
- `sodium_crypto_stream_keygen()`
- `sodium_crypto_stream_xor($message, $nonce, $key)`
- `sodium_hex2bin($string)`
- `sodium_increment(&$string)`
- `sodium_library_version_major()`
- `sodium_library_version_minor()`
- `sodium_version_string()`
- `sodium_memcmp($a, $b)`
- `sodium_memzero(&$str)`
- `sodium_pad($unpadded, $blockSize)`
- `sodium_unpad($padded, $blockSize)`
- `sodium_randombytes_buf($amount)`
- `sodium_randombytes_uniform($upperLimit)`
- `sodium_randombytes_random16()`

