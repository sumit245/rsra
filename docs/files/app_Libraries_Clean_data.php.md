# app\Libraries\Clean_data.php

- Path: `app\Libraries\Clean_data.php`
- Type: PHP
- Size: 23944 bytes

## Summary (from docblocks)

XSS Hash
Random Hash for protecting URLs.
@var	string

Character set
Will be overridden by the constructor.
@var	string

List of never allowed strings
@var	array

List of never allowed regex replacements
@var	array

XSS Clean
Sanitizes data so that Cross Site Scripting Hacks can be
prevented.  This method does a fair amount of work but
it is extremely thorough, designed to prevent even the
most obscure XSS attempts.  Nothing is ever 100% foolproof,
of course, but I haven't been able to get anything passed
the filter.
Note: Should only be used to deal with data upon submission.
	 It's not something that should be used for general
	 runtime processing.
@link	http://channel.bitflux.ch/wiki/XSS_Prevention
		Based in part on some code and ideas from Bitflux.
@link	http://ha.ckers.org/xss.html
		To help develop this script I used this great list of
		vulnerabilities along with a few other hacks I've
		harvested from examining vulnerabilities in other programs.
@param	string|string[]	$str		Input data
@param 	bool		$is_image	Whether the input is an image
@return	string

Do Never Allowed
@used-by	CI_Security::xss_clean()
@param 	string
@return 	string

Attribute Conversion
@used-by	CI_Security::xss_clean()
@param	array	$match
@return	string

HTML Entity Decode Callback
@used-by	CI_Security::xss_clean()
@param	array	$match
@return	string

XSS Hash
Generates the XSS hash if needed and returns it.
@see		CI_Security::$_xss_hash
@return	string	XSS hash

HTML Entities Decode
A replacement for html_entity_decode()
The reason we are not using html_entity_decode() by itself is because
while it is not technically correct to leave out the semicolon
at the end of an entity most browsers will still interpret the entity
correctly. html_entity_decode() does not convert entities without
semicolons, so we are left with our own little solution here. Bummer.
@link	http://php.net/html-entity-decode
@param	string	$str		Input
@param	string	$charset	Character set
@return	string

Determines if the current version of PHP is equal to or greater than the supplied value
@param	string
@return	bool	TRUE if the current version is $version or higher

Get random bytes
@param	int	$length	Output length
@return	string

JS Image Removal
Callback method for xss_clean() to sanitize image tags.
This limits the PCRE backtracks, making it more performance friendly
and prevents PREG_BACKTRACK_LIMIT_ERROR from being triggered in
PHP 5.2+ on image tag heavy strings.
@used-by	CI_Security::xss_clean()
@param	array	$match
@return	string

Filter Attributes
Filters tag attributes for consistency and safety.
@used-by	CI_Security::_js_img_removal()
@used-by	CI_Security::_js_link_removal()
@param	string	$str
@return	string

Compact Exploded Words
Callback method for xss_clean() to remove whitespace from
things like 'j a v a s c r i p t'.
@used-by	CI_Security::xss_clean()
@param	array	$matches
@return	string

URL-decode taking spaces into account
@see		https://github.com/bcit-ci/CodeIgniter/issues/4877
@param	array	$matches
@return	string

JS Link Removal
Callback method for xss_clean() to sanitize links.
This limits the PCRE backtracks, making it more performance friendly
and prevents PREG_BACKTRACK_LIMIT_ERROR from being triggered in
PHP 5.2+ on link-heavy strings.
@used-by	CI_Security::xss_clean()
@param	array	$match
@return	string

Sanitize Naughty HTML
Callback method for xss_clean() to remove naughty HTML elements.
@used-by	CI_Security::xss_clean()
@param	array	$matches
@return	string

## References

**Database Tables (inferred)**
- `Bitflux`
- `examining`
- `being`

## Symbols

# Symbols

**Files documented**: 1

## `app\Libraries\Clean_data.php`

**Classes**:
- `App\Libraries\Clean_data`

**Functions/Methods**:
- `xss_clean($str, $is_image = FALSE)`
- `_do_never_allowed($str)`
- `_convert_attribute($match)`
- `_decode_entity($match)`
- `xss_hash()`
- `entity_decode($str, $charset = NULL)`
- `is_php($version)`
- `get_random_bytes($length)`
- `_js_img_removal($match)`
- `_filter_attributes($str)`
- `_compact_exploded_words($matches)`
- `_urldecodespaces($matches)`
- `_js_link_removal($match)`
- `_sanitize_naughty_html($matches)`

