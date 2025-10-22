# system\HTTP\ContentSecurityPolicy.php

- Path: `system\HTTP\ContentSecurityPolicy.php`
- Type: PHP
- Size: 20845 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Provides tools for working with the Content-Security-Policy header
to help defeat XSS attacks.
@see http://www.w3.org/TR/CSP/
@see http://www.html5rocks.com/en/tutorials/security/content-security-policy/
@see http://content-security-policy.com/
@see https://www.owasp.org/index.php/Content_Security_Policy

Used for security enforcement
@var array|string

Used for security enforcement
@var array|string

Used for security enforcement
@var array

Used for security enforcement
@var array|string

Used for security enforcement
@var array|string

Used for security enforcement
@var array|string

Used for security enforcement
@var array|string

Used for security enforcement
@var array|string

Used for security enforcement
@var array|string

Used for security enforcement
@var array|string

Used for security enforcement
@var array|string

Used for security enforcement
@var array|string

Used for security enforcement
@var string

Used for security enforcement
@var array|string

Used for security enforcement
@var array|string

Used for security enforcement
@var array|string

Used for security enforcement
@var array|string

Used for security enforcement
@var bool

Used for security enforcement
@var bool

Used for security enforcement
@var array

Used for security enforcement
@var array

Nonce for style
@var string

Nonce for script
@var string

Nonce tag for style
@var string

Nonce tag for script
@var string

Replace nonce tag automatically
@var bool

An array of header info since we have
to build ourself before passing to Response.
@var array

An array of header info to build
that should only be reported.
@var array

Whether Content Security Policy is being enforced.
@var bool

Constructor.
Stores our default values from the Config file.

Whether Content Security Policy is being enforced.

Get the nonce for the style tag.

Get the nonce for the script tag.

Compiles and sets the appropriate headers in the request.
Should be called just prior to sending the response to the user agent.

If TRUE, nothing will be restricted. Instead all violations will
be reported to the reportURI for monitoring. This is useful when
you are just starting to implement the policy, and will help
determine what errors need to be addressed before you turn on
all filtering.
@return $this

Adds a new base_uri value. Can be either a URI class or a simple string.
base_uri restricts the URLs that can appear in a page’s <base> element.
@see http://www.w3.org/TR/CSP/#directive-base-uri
@param array|string $uri
@return $this

Adds a new valid endpoint for a form's action. Can be either
a URI class or a simple string.
child-src lists the URLs for workers and embedded frame contents.
For example: child-src https://youtube.com would enable embedding
videos from YouTube but not from other origins.
@see http://www.w3.org/TR/CSP/#directive-child-src
@param array|string $uri
@return $this

Adds a new valid endpoint for a form's action. Can be either
a URI class or a simple string.
connect-src limits the origins to which you can connect
(via XHR, WebSockets, and EventSource).
@see http://www.w3.org/TR/CSP/#directive-connect-src
@param array|string $uri
@return $this

Adds a new valid endpoint for a form's action. Can be either
a URI class or a simple string.
default_src is the URI that is used for many of the settings when
no other source has been set.
@see http://www.w3.org/TR/CSP/#directive-default-src
@param array|string $uri
@return $this

Adds a new valid endpoint for a form's action. Can be either
a URI class or a simple string.
font-src specifies the origins that can serve web fonts.
@see http://www.w3.org/TR/CSP/#directive-font-src
@param array|string $uri
@return $this

Adds a new valid endpoint for a form's action. Can be either
a URI class or a simple string.
@see http://www.w3.org/TR/CSP/#directive-form-action
@param array|string $uri
@return $this

Adds a new resource that should allow embedding the resource using
<frame>, <iframe>, <object>, <embed>, or <applet>
@see http://www.w3.org/TR/CSP/#directive-frame-ancestors
@param array|string $uri
@return $this

Adds a new valid endpoint for valid frame sources. Can be either
a URI class or a simple string.
@see http://www.w3.org/TR/CSP/#directive-frame-src
@param array|string $uri
@return $this

Adds a new valid endpoint for valid image sources. Can be either
a URI class or a simple string.
@see http://www.w3.org/TR/CSP/#directive-img-src
@param array|string $uri
@return $this

Adds a new valid endpoint for valid video and audio. Can be either
a URI class or a simple string.
@see http://www.w3.org/TR/CSP/#directive-media-src
@param array|string $uri
@return $this

Adds a new valid endpoint for manifest sources. Can be either
a URI class or simple string.
@see https://www.w3.org/TR/CSP/#directive-manifest-src
@param array|string $uri
@return $this

Adds a new valid endpoint for Flash and other plugin sources. Can be either
a URI class or a simple string.
@see http://www.w3.org/TR/CSP/#directive-object-src
@param array|string $uri
@return $this

Limits the types of plugins that can be used. Can be either
a URI class or a simple string.
@see http://www.w3.org/TR/CSP/#directive-plugin-types
@param array|string $mime One or more plugin mime types, separate by spaces
@return $this

Specifies a URL where a browser will send reports when a content
security policy is violated. Can be either a URI class or a simple string.
@see http://www.w3.org/TR/CSP/#directive-report-uri
@return $this

specifies an HTML sandbox policy that the user agent applies to
the protected resource.
@see http://www.w3.org/TR/CSP/#directive-sandbox
@param array|string $flags An array of sandbox flags that can be added to the directive.
@return $this

Adds a new valid endpoint for javascript file sources. Can be either
a URI class or a simple string.
@see http://www.w3.org/TR/CSP/#directive-connect-src
@param array|string $uri
@return $this

Adds a new valid endpoint for CSS file sources. Can be either
a URI class or a simple string.
@see http://www.w3.org/TR/CSP/#directive-connect-src
@param array|string $uri
@return $this

Sets whether the user agents should rewrite URL schemes, changing
HTTP to HTTPS.
@return $this

DRY method to add an string or array to a class property.
@param array|string $options

Scans the body of the request message and replaces any nonce
placeholders with actual nonces, that we'll then add to our
headers.

Based on the current state of the elements, will add the appropriate
Content-Security-Policy and Content-Security-Policy-Report-Only headers
with their values to the response object.

Ensure both headers are available and arrays...
@var Response $response

Adds a directive and it's options to the appropriate header. The $values
array might have options that are geared toward either the regular or the
reportOnly header, since it's viable to have both simultaneously.
@param array|string|null $values

## References

**Database Tables (inferred)**
- `the`
- `YouTube`
- `other`

## Symbols

# Symbols

**Files documented**: 1

## `system\HTTP\ContentSecurityPolicy.php`

**Classes**:
- `CodeIgniter\HTTP\ContentSecurityPolicy`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\property`

**Functions/Methods**:
- `__construct(ContentSecurityPolicyConfig $config)`
- `enabled()`
- `getStyleNonce()`
- `getScriptNonce()`
- `finalize(ResponseInterface $response)`
- `reportOnly(bool $value = true)`
- `addBaseURI($uri, ?bool $explicitReporting = null)`
- `addChildSrc($uri, ?bool $explicitReporting = null)`
- `addConnectSrc($uri, ?bool $explicitReporting = null)`
- `setDefaultSrc($uri, ?bool $explicitReporting = null)`
- `addFontSrc($uri, ?bool $explicitReporting = null)`
- `addFormAction($uri, ?bool $explicitReporting = null)`
- `addFrameAncestor($uri, ?bool $explicitReporting = null)`
- `addFrameSrc($uri, ?bool $explicitReporting = null)`
- `addImageSrc($uri, ?bool $explicitReporting = null)`
- `addMediaSrc($uri, ?bool $explicitReporting = null)`
- `addManifestSrc($uri, ?bool $explicitReporting = null)`
- `addObjectSrc($uri, ?bool $explicitReporting = null)`
- `addPluginType($mime, ?bool $explicitReporting = null)`
- `setReportURI(string $uri)`
- `addSandbox($flags, ?bool $explicitReporting = null)`
- `addScriptSrc($uri, ?bool $explicitReporting = null)`
- `addStyleSrc($uri, ?bool $explicitReporting = null)`
- `upgradeInsecureRequests(bool $value = true)`
- `addOption($options, string $target, ?bool $explicitReporting = null)`
- `generateNonces(ResponseInterface $response)`
- `buildHeaders(ResponseInterface $response)`
- `addToHeader(string $name, $values = null)`

