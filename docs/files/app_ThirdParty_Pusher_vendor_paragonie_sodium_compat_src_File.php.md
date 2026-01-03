# app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\File.php

- Path: `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\File.php`
- Type: PHP
- Size: 53393 bytes

## Summary (from docblocks)

Class ParagonIE_Sodium_File

Box a file (rather than a string). Uses less memory than
ParagonIE_Sodium_Compat::crypto_box(), but produces
the same result.
@param string $inputFile  Absolute path to a file on the filesystem
@param string $outputFile Absolute path to a file on the filesystem
@param string $nonce      Number to be used only once
@param string $keyPair    ECDH secret key and ECDH public key concatenated
@return bool
@throws SodiumException
@throws TypeError

@var int $size

@var resource $ifp

@var resource $ofp

Open a boxed file (rather than a string). Uses less memory than
ParagonIE_Sodium_Compat::crypto_box_open(), but produces
the same result.
Warning: Does not protect against TOCTOU attacks. You should
just load the file into memory and use crypto_box_open() if
you are worried about those.
@param string $inputFile
@param string $outputFile
@param string $nonce
@param string $keypair
@return bool
@throws SodiumException
@throws TypeError

@var int $size

@var resource $ifp

@var resource $ofp

Seal a file (rather than a string). Uses less memory than
ParagonIE_Sodium_Compat::crypto_box_seal(), but produces
the same result.
@param string $inputFile  Absolute path to a file on the filesystem
@param string $outputFile Absolute path to a file on the filesystem
@param string $publicKey  ECDH public key
@return bool
@throws SodiumException
@throws TypeError

@var int $size

@var resource $ifp

@var resource $ofp

@var string $ephKeypair

@var string $msgKeypair

@var string $ephemeralPK

@var string $nonce

@var int $firstWrite

Open a sealed file (rather than a string). Uses less memory than
ParagonIE_Sodium_Compat::crypto_box_seal_open(), but produces
the same result.
Warning: Does not protect against TOCTOU attacks. You should
just load the file into memory and use crypto_box_seal_open() if
you are worried about those.
@param string $inputFile
@param string $outputFile
@param string $ecdhKeypair
@return bool
@throws SodiumException
@throws TypeError

@var int $size

@var resource $ifp

@var resource $ofp

Calculate the BLAKE2b hash of a file.
@param string      $filePath     Absolute path to a file on the filesystem
@param string|null $key          BLAKE2b key
@param int         $outputLength Length of hash output
@return string                   BLAKE2b hash
@throws SodiumException
@throws TypeError
@psalm-suppress FailedTypeResolution

@var int $size

@var resource $fp

Encrypt a file (rather than a string). Uses less memory than
ParagonIE_Sodium_Compat::crypto_secretbox(), but produces
the same result.
@param string $inputFile  Absolute path to a file on the filesystem
@param string $outputFile Absolute path to a file on the filesystem
@param string $nonce      Number to be used only once
@param string $key        Encryption key
@return bool
@throws SodiumException
@throws TypeError

@var int $size

@var resource $ifp

@var resource $ofp

Seal a file (rather than a string). Uses less memory than
ParagonIE_Sodium_Compat::crypto_secretbox_open(), but produces
the same result.
Warning: Does not protect against TOCTOU attacks. You should
just load the file into memory and use crypto_secretbox_open() if
you are worried about those.
@param string $inputFile
@param string $outputFile
@param string $nonce
@param string $key
@return bool
@throws SodiumException
@throws TypeError

@var int $size

@var resource $ifp

@var resource $ofp

Sign a file (rather than a string). Uses less memory than
ParagonIE_Sodium_Compat::crypto_sign_detached(), but produces
the same result.
@param string $filePath  Absolute path to a file on the filesystem
@param string $secretKey Secret signing key
@return string           Ed25519 signature
@throws SodiumException
@throws TypeError

@var int $size

@var resource $fp

@var string $az

@var resource $hs

@var string $nonceHash

@var string $pk

@var string $nonce

@var string $sig

@var resource $hs

@var string $hramHash

@var string $hram

@var string $sigAfter

@var string $sig

Verify a file (rather than a string). Uses less memory than
ParagonIE_Sodium_Compat::crypto_sign_verify_detached(), but
produces the same result.
@param string $sig       Ed25519 signature
@param string $filePath  Absolute path to a file on the filesystem
@param string $publicKey Signing public key
@return bool
@throws SodiumException
@throws TypeError
@throws Exception

@var int $size

@var resource $fp

@var bool The original value of ParagonIE_Sodium_Compat::$fastMult

@var ParagonIE_Sodium_Core_Curve25519_Ge_P3 $A

@var resource $hs

@var string $hDigest

@var string $h

@var ParagonIE_Sodium_Core_Curve25519_Ge_P2 $R

@var string $rcheck

@param resource $ifp
@param resource $ofp
@param int      $mlen
@param string   $nonce
@param string   $boxKeypair
@return bool
@throws SodiumException
@throws TypeError

@param resource $ifp
@param resource $ofp
@param int      $mlen
@param string   $nonce
@param string   $boxKeypair
@return bool
@throws SodiumException
@throws TypeError

Encrypt a file
@param resource $ifp
@param resource $ofp
@param int $mlen
@param string $nonce
@param string $key
@return bool
@throws SodiumException
@throws TypeError

@var string $subkey

@var string $realNonce

@var string $block0

@var int $mlen - Length of the plaintext message

@var string $block0

@var string $c

@var int $iter

@var int $incr

Decrypt a file
@param resource $ifp
@param resource $ofp
@param int $mlen
@param string $nonce
@param string $key
@return bool
@throws SodiumException
@throws TypeError

@var string $subkey

@var string $realNonce

@var string $block0

@var int $iter

@var int $incr

@param ParagonIE_Sodium_Core_Poly1305_State $state
@param resource $ifp
@param string $tag
@param int $mlen
@return bool
@throws SodiumException
@throws TypeError

@var int $pos

@var int $iter

@var int $incr

Update a hash context with the contents of a file, without
loading the entire file into memory.
@param resource|object $hash
@param resource $fp
@param int $size
@return resource|object Resource on PHP < 7.2, HashContext object on PHP >= 7.2
@throws SodiumException
@throws TypeError
@psalm-suppress PossiblyInvalidArgument
                PHP 7.2 changes from a resource to an object,
                which causes Psalm to complain about an error.
@psalm-suppress TypeCoercion
                Ditto.

@var int $originalPosition

@var string|bool $message

@var string $message

@psalm-suppress InvalidArgument

Sign a file (rather than a string). Uses less memory than
ParagonIE_Sodium_Compat::crypto_sign_detached(), but produces
the same result. (32-bit)
@param string $filePath  Absolute path to a file on the filesystem
@param string $secretKey Secret signing key
@return string           Ed25519 signature
@throws SodiumException
@throws TypeError

@var int|bool $size

@var int $size

@var resource|bool $fp

@var resource $fp

@var string $az

@var resource $hs

@var string $nonceHash

@var string $pk

@var string $nonce

@var string $sig

@var resource $hs

@var string $hramHash

@var string $hram

@var string $sigAfter

@var string $sig

Verify a file (rather than a string). Uses less memory than
ParagonIE_Sodium_Compat::crypto_sign_verify_detached(), but
produces the same result. (32-bit)
@param string $sig       Ed25519 signature
@param string $filePath  Absolute path to a file on the filesystem
@param string $publicKey Signing public key
@return bool
@throws SodiumException
@throws Exception

@var int|bool $size

@var int $size

@var resource|bool $fp

@var resource $fp

@var bool The original value of ParagonIE_Sodium_Compat::$fastMult

@var ParagonIE_Sodium_Core32_Curve25519_Ge_P3 $A

@var resource $hs

@var string $hDigest

@var string $h

@var ParagonIE_Sodium_Core32_Curve25519_Ge_P2 $R

@var string $rcheck

Encrypt a file (32-bit)
@param resource $ifp
@param resource $ofp
@param int $mlen
@param string $nonce
@param string $key
@return bool
@throws SodiumException
@throws TypeError

@var string $subkey

@var string $realNonce

@var string $block0

@var int $mlen - Length of the plaintext message

@var string $block0

@var string $c

@var int $iter

@var int $incr

Decrypt a file (32-bit)
@param resource $ifp
@param resource $ofp
@param int $mlen
@param string $nonce
@param string $key
@return bool
@throws SodiumException
@throws TypeError

@var string $subkey

@var string $realNonce

@var string $block0

@var int $iter

@var int $incr

One-time message authentication for 32-bit systems
@param ParagonIE_Sodium_Core32_Poly1305_State $state
@param resource $ifp
@param string $tag
@param int $mlen
@return bool
@throws SodiumException
@throws TypeError

@var int $pos

@var int $iter

@var int $incr

@param resource $resource
@return int
@throws SodiumException

## References

**Database Tables (inferred)**
- `sealed`
- `salsa20_xor_ic`
- `1`
- `a`
- `file`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Pusher\vendor\paragonie\sodium_compat\src\File.php`

**Classes**:
- `ParagonIE_Sodium_File extends ParagonIE_Sodium_Core_Util`

**Functions/Methods**:
- `box($inputFile, $outputFile, $nonce, $keyPair)`
- `box_open($inputFile, $outputFile, $nonce, $keypair)`
- `box_seal($inputFile, $outputFile, $publicKey)`
- `box_seal_open($inputFile, $outputFile, $ecdhKeypair)`
- `generichash($filePath, $key = '', $outputLength = 32)`
- `secretbox($inputFile, $outputFile, $nonce, $key)`
- `secretbox_open($inputFile, $outputFile, $nonce, $key)`
- `sign($filePath, $secretKey)`
- `verify($sig, $filePath, $publicKey)`
- `box_encrypt($ifp, $ofp, $mlen, $nonce, $boxKeypair)`
- `box_decrypt($ifp, $ofp, $mlen, $nonce, $boxKeypair)`
- `secretbox_encrypt($ifp, $ofp, $mlen, $nonce, $key)`
- `secretbox_decrypt($ifp, $ofp, $mlen, $nonce, $key)`
- `onetimeauth_verify(ParagonIE_Sodium_Core_Poly1305_State $state,
        $ifp,
        $tag = '',
        $mlen = 0)`
- `updateHashWithFile($hash, $fp, $size = 0)`
- `sign_core32($filePath, $secretKey)`
- `verify_core32($sig, $filePath, $publicKey)`
- `secretbox_encrypt_core32($ifp, $ofp, $mlen, $nonce, $key)`
- `secretbox_decrypt_core32($ifp, $ofp, $mlen, $nonce, $key)`
- `onetimeauth_verify_core32(ParagonIE_Sodium_Core32_Poly1305_State $state,
        $ifp,
        $tag = '',
        $mlen = 0)`
- `ftell($resource)`

