# app\ThirdParty\Pusher\vendor\pusher\pusher-php-server\src\PusherCrypto.php

- Path: `app\ThirdParty\Pusher\vendor\pusher\pusher-php-server\src\PusherCrypto.php`
- Type: PHP
- Size: 6881 bytes

## Summary (from docblocks)

Checks if a given channel is an encrypted channel.
@param string $channel the name of the channel
@return bool true if channel is an encrypted channel

Initialises a PusherCrypto instance.
@param string $encryption_master_key the SECRET_KEY_LENGTH key that will be used for key derivation.

Decrypts a given event.
@param object $event an object that has an encrypted data property and a channel property.
@return object the event with a decrypted payload, or false if decryption was unsuccessful.

Derives a shared secret from the secret key and the channel to broadcast to.
@param string $channel the name of the channel
@return string a SHA256 hash (encoded as base64) of the channel name appended to the encryption key

Encrypts a given plaintext for broadcast on a particular channel.
@param string $channel   the name of the channel the payloads event will be broadcast on
@param string $plaintext the data to encrypt
@return string a string ready to be sent as the data of an event.

Decrypts a given payload using the nonce and shared secret.
@param string $payload       the ciphertext
@param string $nonce         the nonce used in the encryption
@param string $shared_secret the shared_secret used in the encryption
@return string plaintext

Formats an encrypted message ready for broadcast.
@param string $nonce      the nonce used in the encryption process (bytes)
@param string $ciphertext the ciphertext (bytes)
@return string JSON with base64 encoded nonce and ciphertext`

Parses an encrypted message into its nonce and ciphertext components.
@param string $payload the encrypted message payload
@return string php object with decoded nonce and ciphertext

Generates a nonce that is SODIUM_CRYPTO_SECRETBOX_NONCEBYTES long.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\pusher\pusher-php-server\src\PusherCrypto.php`

**Classes**:
- `Pusher\PusherCrypto`

**Functions/Methods**:
- `is_encrypted_channel($channel)`
- `parse_master_key($encryption_master_key, $encryption_master_key_base64)`
- `__construct($encryption_master_key)`
- `decrypt_event($event)`
- `generate_shared_secret($channel)`
- `encrypt_payload($channel, $plaintext)`
- `decrypt_payload($payload, $nonce, $shared_secret)`
- `format_encrypted_message($nonce, $ciphertext)`
- `parse_encrypted_message($payload)`
- `generate_nonce()`

