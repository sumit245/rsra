# app\Config\ContentSecurityPolicy.php

- Path: `app\Config\ContentSecurityPolicy.php`
- Type: PHP
- Size: 4266 bytes

## Summary (from docblocks)

Stores the default settings for the ContentSecurityPolicy, if you
choose to use it. The values here will be read in and set as defaults
for the site. If needed, they can be overridden on a page-by-page basis.
Suggested reference for explanations:
@see https://www.html5rocks.com/en/tutorials/security/content-security-policy/

Default CSP report context
@var bool

Specifies a URL where a browser will send reports
when a content security policy is violated.
@var string|null

Instructs user agents to rewrite URL schemes, changing
HTTP to HTTPS. This directive is for websites with
large numbers of old URLs that need to be rewritten.
@var bool

Will default to self if not overridden
@var string|string[]|null

Lists allowed scripts' URLs.
@var string|string[]

Lists allowed stylesheets' URLs.
@var string|string[]

Defines the origins from which images can be loaded.
@var string|string[]

Restricts the URLs that can appear in a page's `<base>` element.
Will default to self if not overridden
@var string|string[]|null

Lists the URLs for workers and embedded frame contents
@var string|string[]

Limits the origins that you can connect to (via XHR,
WebSockets, and EventSource).
@var string|string[]

Specifies the origins that can serve web fonts.
@var string|string[]

Lists valid endpoints for submission from `<form>` tags.
@var string|string[]

Specifies the sources that can embed the current page.
This directive applies to `<frame>`, `<iframe>`, `<embed>`,
and `<applet>` tags. This directive can't be used in
`<meta>` tags and applies only to non-HTML resources.
@var string|string[]|null

The frame-src directive restricts the URLs which may
be loaded into nested browsing contexts.
@var array|string|null

Restricts the origins allowed to deliver video and audio.
@var string|string[]|null

Allows control over Flash and other plugins.
@var string|string[]

@var string|string[]|null

Limits the kinds of plugins a page may invoke.
@var string|string[]|null

List of actions allowed.
@var string|string[]|null

Nonce tag for style
@var string

Nonce tag for script
@var string

Replace nonce tag automatically
@var bool

## References

**Database Tables (inferred)**
- `which`

## Symbols

# Symbols

**Files documented**: 1

## `app\Config\ContentSecurityPolicy.php`

**Classes**:
- `Config\ContentSecurityPolicy extends BaseConfig`

