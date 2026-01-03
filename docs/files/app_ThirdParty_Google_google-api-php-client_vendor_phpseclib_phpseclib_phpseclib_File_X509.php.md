# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\File\X509.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\File\X509.php`
- Type: PHP
- Size: 186156 bytes

## Summary (from docblocks)

Pure-PHP X.509 Parser
PHP version 5
Encode and decode X.509 certificates.
The extensions are from {@link http://tools.ietf.org/html/rfc5280 RFC5280} and
{@link http://web.archive.org/web/19961027104704/http://www3.netscape.com/eng/security/cert-exts.html Netscape Certificate Extensions}.
Note that loading an X.509 certificate and resaving it may invalidate the signature.  The reason being that the signature is based on a
portion of the certificate that contains optional parameters with default values.  ie. if the parameter isn't there the default value is
used.  Problem is, if the parameter is there and it just so happens to have the default value there are two ways that that parameter can
be encoded.  It can be encoded explicitly or left out all together.  This would effect the signature value and thus may invalidate the
the certificate all together unless the certificate is re-signed.
@category  File
@package   X509
@author    Jim Wigginton <terrafrost@php.net>
@copyright 2012 Jim Wigginton
@license   http://www.opensource.org/licenses/mit-license.html  MIT License
@link      http://phpseclib.sourceforge.net

Pure-PHP X.509 Parser
@package X509
@author  Jim Wigginton <terrafrost@php.net>
@access  public

Flag to only accept signatures signed by certificate authorities
Not really used anymore but retained all the same to suppress E_NOTICEs from old installs
@access public

#@+
@access public
@see \phpseclib\File\X509::getDN()

Return internal array representation

Return string

Return ASN.1 name string

Return OpenSSL compatible array

Return canonical ASN.1 RDNs string

Return name hash for file indexing

#@-

#@+
@access public
@see \phpseclib\File\X509::saveX509()
@see \phpseclib\File\X509::saveCSR()
@see \phpseclib\File\X509::saveCRL()

Save as PEM
ie. a base64-encoded PEM with a header and a footer

Save as DER

Save as a SPKAC
Only works on CSRs. Not currently supported.

Auto-detect the format
Used only by the load*() functions

#@-

Attribute value disposition.
If disposition is >= 0, this is the index of the target value.

ASN.1 syntax for X.509 certificates
@var array
@access private

#@+
ASN.1 syntax for various extensions
@access private

#@-

#@+
ASN.1 syntax for various DN attributes
@access private

#@-

ASN.1 syntax for Certificate Signing Requests (RFC2986)
@var array
@access private

ASN.1 syntax for Certificate Revocation Lists (RFC5280)
@var array
@access private

Distinguished Name
@var array
@access private

Public key
@var string
@access private

Private key
@var string
@access private

Object identifiers for X.509 certificates
@var array
@access private
@link http://en.wikipedia.org/wiki/Object_identifier

The certificate authorities
@var array
@access private

The currently loaded certificate
@var array
@access private

The signature subject
There's no guarantee \phpseclib\File\X509 is going to re-encode an X.509 cert in the same way it was originally
encoded so we take save the portion of the original cert that the signature would have made for.
@var string
@access private

Certificate Start Date
@var string
@access private

Certificate End Date
@var string
@access private

Serial Number
@var string
@access private

Key Identifier
See {@link http://tools.ietf.org/html/rfc5280#section-4.2.1.1 RFC5280#section-4.2.1.1} and
{@link http://tools.ietf.org/html/rfc5280#section-4.2.1.2 RFC5280#section-4.2.1.2}.
@var string
@access private

CA Flag
@var bool
@access private

SPKAC Challenge
@var string
@access private

Recursion Limit
@var int
@access private

URL fetch flag
@var bool
@access private

Default Constructor.
@return \phpseclib\File\X509
@access public

Load X.509 certificate
Returns an associative array describing the X.509 cert or a false if the cert failed to load
@param string $cert
@param int $mode
@access public
@return mixed

Save X.509 certificate
@param array $cert
@param int $format optional
@access public
@return string

Map extension values from octet string to extension-specific internal
  format.
@param array ref $root
@param string $path
@param object $asn1
@access private

Map extension values from extension-specific internal format to
  octet string.
@param array ref $root
@param string $path
@param object $asn1
@access private

Map attribute values from ANY type to attribute-specific internal
  format.
@param array ref $root
@param string $path
@param object $asn1
@access private

Map attribute values from attribute-specific internal format to
  ANY type.
@param array ref $root
@param string $path
@param object $asn1
@access private

Map DN values from ANY type to DN-specific internal
  format.
@param array ref $root
@param string $path
@param object $asn1
@access private

Map DN values from DN-specific internal format to
  ANY type.
@param array ref $root
@param string $path
@param object $asn1
@access private

Associate an extension ID to an extension mapping
@param string $extnId
@access private
@return mixed

Load an X.509 certificate as a certificate authority
@param string $cert
@access public
@return bool

Validate an X.509 certificate against a URL
From RFC2818 "HTTP over TLS":
Matching is performed using the matching rules specified by
[RFC2459].  If more than one identity of a given type is present in
the certificate (e.g., more than one dNSName name, a match in any one
of the set is considered acceptable.) Names may contain the wildcard
character * which is considered to match any single domain name
component or component fragment. E.g., *.a.com matches foo.a.com but
not bar.foo.a.com. f*.com matches foo.com but not bar.com.
@param string $url
@access public
@return bool

Validate a date
If $date isn't defined it is assumed to be the current date.
@param int $date optional
@access public

Fetches a URL
@param string $url
@access private
@return bool|string

Validates an intermediate cert as identified via authority info access extension
See https://tools.ietf.org/html/rfc4325 for more info
@param bool $caonly
@param int $count
@access private
@return bool

Validate a signature
Works on X.509 certs, CSR's and CRL's.
Returns true if the signature is verified, false if it is not correct or null on error
By default returns false for self-signed certs. Call validateSignature(false) to make this support
self-signed.
The behavior of this function is inspired by {@link http://php.net/openssl-verify openssl_verify}.
@param bool $caonly optional
@access public
@return mixed

Validate a signature
Performs said validation whilst keeping track of how many times validation method is called
@param bool $caonly
@param int $count
@access private
@return mixed

Validates a signature
Returns true if the signature is verified, false if it is not correct or null on error
@param string $publicKeyAlgorithm
@param string $publicKey
@param string $signatureAlgorithm
@param string $signature
@param string $signatureSubject
@access private
@return int

Sets the recursion limit
When validating a signature it may be necessary to download intermediate certs from URI's.
An intermediate cert that linked to itself would result in an infinite loop so to prevent
that we set a recursion limit. A negative number means that there is no recursion limit.
@param int $count
@access public

Prevents URIs from being automatically retrieved
@access public

Allows URIs to be automatically retrieved
@access public

Reformat public keys
Reformats a public key to a format supported by phpseclib (if applicable)
@param string $algorithm
@param string $key
@access private
@return string

Decodes an IP address
Takes in a base64 encoded "blob" and returns a human readable IP address
@param string $ip
@access private
@return string

Encodes an IP address
Takes a human readable IP address into a base64-encoded "blob"
@param string $ip
@access private
@return string

"Normalizes" a Distinguished Name property
@param string $propName
@access private
@return mixed

Set a Distinguished Name property
@param string $propName
@param mixed $propValue
@param string $type optional
@access public
@return bool

Remove Distinguished Name properties
@param string $propName
@access public

Get Distinguished Name properties
@param string $propName
@param array $dn optional
@param bool $withType optional
@return mixed
@access public

Set a Distinguished Name
@param mixed $dn
@param bool $merge optional
@param string $type optional
@access public
@return bool

Get the Distinguished Name for a certificates subject
@param mixed $format optional
@param array $dn optional
@access public
@return bool

Get the Distinguished Name for a certificate/crl issuer
@param int $format optional
@access public
@return mixed

Get the Distinguished Name for a certificate/csr subject
Alias of getDN()
@param int $format optional
@access public
@return mixed

Get an individual Distinguished Name property for a certificate/crl issuer
@param string $propName
@param bool $withType optional
@access public
@return mixed

Get an individual Distinguished Name property for a certificate/csr subject
@param string $propName
@param bool $withType optional
@access public
@return mixed

Get the certificate chain for the current cert
@access public
@return mixed

Set public key
Key needs to be a \phpseclib\Crypt\RSA object
@param object $key
@access public
@return bool

Set private key
Key needs to be a \phpseclib\Crypt\RSA object
@param object $key
@access public

Set challenge
Used for SPKAC CSR's
@param string $challenge
@access public

Gets the public key
Returns a \phpseclib\Crypt\RSA object or a false.
@access public
@return mixed

Load a Certificate Signing Request
@param string $csr
@access public
@return mixed

Save CSR request
@param array $csr
@param int $format optional
@access public
@return string

Load a SPKAC CSR
SPKAC's are produced by the HTML5 keygen element:
https://developer.mozilla.org/en-US/docs/HTML/Element/keygen
@param string $csr
@access public
@return mixed

Save a SPKAC CSR request
@param array $csr
@param int $format optional
@access public
@return string

Load a Certificate Revocation List
@param string $crl
@access public
@return mixed

Save Certificate Revocation List.
@param array $crl
@param int $format optional
@access public
@return string

Helper function to build a time field according to RFC 3280 section
 - 4.1.2.5 Validity
 - 5.1.2.4 This Update
 - 5.1.2.5 Next Update
 - 5.1.2.6 Revoked Certificates
by choosing utcTime iff year of date given is before 2050 and generalTime else.
@param string $date in format date('D, d M Y H:i:s O')
@access private
@return array

Sign an X.509 certificate
$issuer's private key needs to be loaded.
$subject can be either an existing X.509 cert (if you want to resign it),
a CSR or something with the DN and public key explicitly set.
@param \phpseclib\File\X509 $issuer
@param \phpseclib\File\X509 $subject
@param string $signatureAlgorithm optional
@access public
@return mixed

Sign a CSR
@access public
@return mixed

Sign a SPKAC
@access public
@return mixed

Sign a CRL
$issuer's private key needs to be loaded.
@param \phpseclib\File\X509 $issuer
@param \phpseclib\File\X509 $crl
@param string $signatureAlgorithm optional
@access public
@return mixed

X.509 certificate signing helper function.
@param object $key
@param \phpseclib\File\X509 $subject
@param string $signatureAlgorithm
@access public
@return mixed

Set certificate start date
@param string $date
@access public

Set certificate end date
@param string $date
@access public

Set Serial Number
@param string $serial
@param $base optional
@access public

Turns the certificate into a certificate authority
@access public

Check for validity of subarray
This is intended for use in conjunction with _subArrayUnchecked(),
implementing the checks included in _subArray() but without copying
a potentially large array by passing its reference by-value to is_array().
@param array $root
@param string $path
@return boolean
@access private

Get a reference to a subarray
This variant of _subArray() does no is_array() checking,
so $root should be checked with _isSubArrayValid() first.
This is here for performance reasons:
Passing a reference (i.e. $root) by-value (i.e. to is_array())
creates a copy. If $root is an especially large array, this is expensive.
@param array $root
@param string $path  absolute path with / as component separator
@param bool $create optional
@access private
@return array|false

Get a reference to a subarray
@param array $root
@param string $path  absolute path with / as component separator
@param bool $create optional
@access private
@return array|false

Get a reference to an extension subarray
@param array $root
@param string $path optional absolute path with / as component separator
@param bool $create optional
@access private
@return array|false

Remove an Extension
@param string $id
@param string $path optional
@access private
@return bool

Get an Extension
Returns the extension if it exists and false if not
@param string $id
@param array $cert optional
@param string $path optional
@access private
@return mixed

Returns a list of all extensions in use
@param array $cert optional
@param string $path optional
@access private
@return array

Set an Extension
@param string $id
@param mixed $value
@param bool $critical optional
@param bool $replace optional
@param string $path optional
@access private
@return bool

Remove a certificate, CSR or CRL Extension
@param string $id
@access public
@return bool

Get a certificate, CSR or CRL Extension
Returns the extension if it exists and false if not
@param string $id
@param array $cert optional
@access public
@return mixed

Returns a list of all extensions in use in certificate, CSR or CRL
@param array $cert optional
@access public
@return array

Set a certificate, CSR or CRL Extension
@param string $id
@param mixed $value
@param bool $critical optional
@param bool $replace optional
@access public
@return bool

Remove a CSR attribute.
@param string $id
@param int $disposition optional
@access public
@return bool

Get a CSR attribute
Returns the attribute if it exists and false if not
@param string $id
@param int $disposition optional
@param array $csr optional
@access public
@return mixed

Returns a list of all CSR attributes in use
@param array $csr optional
@access public
@return array

Set a CSR attribute
@param string $id
@param mixed $value
@param bool $disposition optional
@access public
@return bool

Sets the subject key identifier
This is used by the id-ce-authorityKeyIdentifier and the id-ce-subjectKeyIdentifier extensions.
@param string $value
@access public

Compute a public key identifier.
Although key identifiers may be set to any unique value, this function
computes key identifiers from public key according to the two
recommended methods (4.2.1.2 RFC 3280).
Highly polymorphic: try to accept all possible forms of key:
- Key object
- \phpseclib\File\X509 object with public or private key defined
- Certificate or CSR array
- \phpseclib\File\ASN1\Element object
- PEM or DER string
@param mixed $key optional
@param int $method optional
@access public
@return string binary key identifier

Format a public key as appropriate
@access private
@return array

Set the domain name's which the cert is to be valid for
@access public
@return array

Set the IP Addresses's which the cert is to be valid for
@access public
@param string $ipAddress optional

Helper function to build domain array
@access private
@param string $domain
@return array

Helper function to build IP Address array
(IPv6 is not currently supported)
@access private
@param string $address
@return array

Get the index of a revoked certificate.
@param array $rclist
@param string $serial
@param bool $create optional
@access private
@return int|false

Revoke a certificate.
@param string $serial
@param string $date optional
@access public
@return bool

Unrevoke a certificate.
@param string $serial
@access public
@return bool

Get a revoked certificate.
@param string $serial
@access public
@return mixed

List revoked certificates
@param array $crl optional
@access public
@return array

Remove a Revoked Certificate Extension
@param string $serial
@param string $id
@access public
@return bool

Get a Revoked Certificate Extension
Returns the extension if it exists and false if not
@param string $serial
@param string $id
@param array $crl optional
@access public
@return mixed

Returns a list of all extensions in use for a given revoked certificate
@param string $serial
@param array $crl optional
@access public
@return array

Set a Revoked Certificate Extension
@param string $serial
@param string $id
@param mixed $value
@param bool $critical optional
@param bool $replace optional
@access public
@return bool

Extract raw BER from Base64 encoding
@access private
@param string $str
@return string

Returns the OID corresponding to a name
What's returned in the associative array returned by loadX509() (or load*()) is either a name or an OID if
no OID to name mapping is available. The problem with this is that what may be an unmapped OID in one version
of phpseclib may not be unmapped in the next version, so apps that are looking at this OID may not be able
to work from version to version.
This method will return the OID if a name is passed to it and if no mapping is avialable it'll assume that
what's being passed to it already is an OID and return that instead. A few examples.
getOID('2.16.840.1.101.3.4.2.1') == '2.16.840.1.101.3.4.2.1'
getOID('id-sha256') == '2.16.840.1.101.3.4.2.1'
getOID('zzz') == 'zzz'
@access public
@return string

## References

**Database Tables (inferred)**
- `old`
- `RFC5280`
- `octet`
- `extension`
- `ANY`
- `attribute`
- `DN`
- `RFC2818`
- `URI`
- `being`
- `CSR`
- `public`
- `its`
- `Base64`
- `version`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\File\X509.php`

**Classes**:
- `phpseclib\File\X509`
- `phpseclib\File\isn`
- `phpseclib\File\isn`

**Functions/Methods**:
- `__construct()`
- `loadX509($cert, $mode = self::FORMAT_AUTO_DETECT)`
- `saveX509($cert, $format = self::FORMAT_PEM)`
- `_mapInExtensions(&$root, $path, $asn1)`
- `_mapOutExtensions(&$root, $path, $asn1)`
- `_mapInAttributes(&$root, $path, $asn1)`
- `_mapOutAttributes(&$root, $path, $asn1)`
- `_mapInDNs(&$root, $path, $asn1)`
- `_mapOutDNs(&$root, $path, $asn1)`
- `_getMapping($extnId)`
- `loadCA($cert)`
- `validateURL($url)`
- `validateDate($date = null)`
- `_fetchURL($url)`
- `_testForIntermediate($caonly, $count)`
- `validateSignature($caonly = true)`
- `_validateSignatureCountable($caonly, $count)`
- `_validateSignature($publicKeyAlgorithm, $publicKey, $signatureAlgorithm, $signature, $signatureSubject)`
- `setRecurLimit($count)`
- `disableURLFetch()`
- `enableURLFetch()`
- `_reformatKey($algorithm, $key)`
- `_decodeIP($ip)`
- `_encodeIP($ip)`
- `_translateDNProp($propName)`
- `setDNProp($propName, $propValue, $type = 'utf8String')`
- `removeDNProp($propName)`
- `getDNProp($propName, $dn = null, $withType = false)`
- `setDN($dn, $merge = false, $type = 'utf8String')`
- `getDN($format = self::DN_ARRAY, $dn = null)`
- `getIssuerDN($format = self::DN_ARRAY)`
- `getSubjectDN($format = self::DN_ARRAY)`
- `getIssuerDNProp($propName, $withType = false)`
- `getSubjectDNProp($propName, $withType = false)`
- `getChain()`
- `setPublicKey($key)`
- `setPrivateKey($key)`
- `setChallenge($challenge)`
- `getPublicKey()`
- `loadCSR($csr, $mode = self::FORMAT_AUTO_DETECT)`
- `saveCSR($csr, $format = self::FORMAT_PEM)`
- `loadSPKAC($spkac)`
- `saveSPKAC($spkac, $format = self::FORMAT_PEM)`
- `loadCRL($crl, $mode = self::FORMAT_AUTO_DETECT)`
- `saveCRL($crl, $format = self::FORMAT_PEM)`
- `_timeField($date)`
- `sign($issuer, $subject, $signatureAlgorithm = 'sha1WithRSAEncryption')`
- `signCSR($signatureAlgorithm = 'sha1WithRSAEncryption')`
- `signSPKAC($signatureAlgorithm = 'sha1WithRSAEncryption')`
- `signCRL($issuer, $crl, $signatureAlgorithm = 'sha1WithRSAEncryption')`
- `_sign($key, $signatureAlgorithm)`
- `setStartDate($date)`
- `setEndDate($date)`
- `setSerialNumber($serial, $base = -256)`
- `makeCA()`
- `_isSubArrayValid($root, $path)`
- `_removeExtension($id, $path = null)`
- `_getExtension($id, $cert = null, $path = null)`
- `_getExtensions($cert = null, $path = null)`
- `_setExtension($id, $value, $critical = false, $replace = true, $path = null)`
- `removeExtension($id)`
- `getExtension($id, $cert = null)`
- `getExtensions($cert = null)`
- `setExtension($id, $value, $critical = false, $replace = true)`
- `removeAttribute($id, $disposition = self::ATTR_ALL)`
- `getAttribute($id, $disposition = self::ATTR_ALL, $csr = null)`
- `getAttributes($csr = null)`
- `setAttribute($id, $value, $disposition = self::ATTR_ALL)`
- `setKeyIdentifier($value)`
- `computeKeyIdentifier($key = null, $method = 1)`
- `_formatSubjectPublicKey()`
- `setDomain()`
- `setIPAddress()`
- `_dnsName($domain)`
- `_iPAddress($address)`
- `_revokedCertificate(&$rclist, $serial, $create = false)`
- `revoke($serial, $date = null)`
- `unrevoke($serial)`
- `getRevoked($serial)`
- `listRevoked($crl = null)`
- `removeRevokedCertificateExtension($serial, $id)`
- `getRevokedCertificateExtension($serial, $id, $crl = null)`
- `getRevokedCertificateExtensions($serial, $crl = null)`
- `setRevokedCertificateExtension($serial, $id, $value, $critical = false, $replace = true)`
- `_extractBER($str)`
- `getOID($name)`

