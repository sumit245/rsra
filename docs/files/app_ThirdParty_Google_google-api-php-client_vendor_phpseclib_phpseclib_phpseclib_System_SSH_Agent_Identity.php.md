# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\System\SSH\Agent\Identity.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\System\SSH\Agent\Identity.php`
- Type: PHP
- Size: 4166 bytes

## Summary (from docblocks)

Pure-PHP ssh-agent client.
PHP version 5
@category  System
@package   SSH\Agent
@author    Jim Wigginton <terrafrost@php.net>
@copyright 2009 Jim Wigginton
@license   http://www.opensource.org/licenses/mit-license.html  MIT License
@link      http://phpseclib.sourceforge.net
@internal  See http://api.libssh.org/rfc/PROTOCOL.agent

Pure-PHP ssh-agent client identity object
Instantiation should only be performed by \phpseclib\System\SSH\Agent class.
This could be thought of as implementing an interface that phpseclib\Crypt\RSA
implements. ie. maybe a Net_SSH_Auth_PublicKey interface or something.
The methods in this interface would be getPublicKey and sign since those are the
methods phpseclib looks for to perform public key authentication.
@package SSH\Agent
@author  Jim Wigginton <terrafrost@php.net>
@access  internal

Key Object
@var \phpseclib\Crypt\RSA
@access private
@see self::getPublicKey()

Key Blob
@var string
@access private
@see self::sign()

Socket Resource
@var resource
@access private
@see self::sign()

Default Constructor.
@param resource $fsock
@return \phpseclib\System\SSH\Agent\Identity
@access private

Set Public Key
Called by \phpseclib\System\SSH\Agent::requestIdentities()
@param \phpseclib\Crypt\RSA $key
@access private

Set Public Key
Called by \phpseclib\System\SSH\Agent::requestIdentities(). The key blob could be extracted from $this->key
but this saves a small amount of computation.
@param string $key_blob
@access private

Get Public Key
Wrapper for $this->key->getPublicKey()
@param int $format optional
@return mixed
@access public

Set Signature Mode
Doesn't do anything as ssh-agent doesn't let you pick and choose the signature mode. ie.
ssh-agent's only supported mode is \phpseclib\Crypt\RSA::SIGNATURE_PKCS1
@param int $mode
@access public

Create a signature
See "2.6.2 Protocol 2 private key signature request"
@param string $message
@return string
@access public

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\System\SSH\Agent\Identity.php`

**Classes**:
- `phpseclib\System\SSH\Agent\Identity`

**Functions/Methods**:
- `__construct($fsock)`
- `setPublicKey($key)`
- `setPublicKeyBlob($key_blob)`
- `getPublicKey($format = null)`
- `setSignatureMode($mode)`
- `sign($message)`

