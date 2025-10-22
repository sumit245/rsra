# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier.php`
- Type: PHP
- Size: 10187 bytes

## Summary (from docblocks)

Facade that coordinates HTML Purifier's subsystems in order to purify HTML.
@note There are several points in which configuration can be specified
      for HTML Purifier.  The precedence of these (from lowest to
      highest) is as follows:
         -# Instance: new HTMLPurifier($config)
         -# Invocation: purify($html, $config)
      These configurations are entirely independent of each other and
      are *not* merged (this behavior may change in the future).
@todo We need an easier way to inject strategies using the configuration
      object.

Version of HTML Purifier.
@type string

Constant with version of HTML Purifier.

Global configuration object.
@type HTMLPurifier_Config

Array of extra filter objects to run on HTML,
for backwards compatibility.
@type HTMLPurifier_Filter[]

Single instance of HTML Purifier.
@type HTMLPurifier

@type HTMLPurifier_Strategy_Core

@type HTMLPurifier_Generator

Resultant context of last run purification.
Is an array of contexts if the last called method was purifyArray().
@type HTMLPurifier_Context

Initializes the purifier.
@param HTMLPurifier_Config|mixed $config Optional HTMLPurifier_Config object
               for all instances of the purifier, if omitted, a default
               configuration is supplied (which can be overridden on a
               per-use basis).
               The parameter can also be any type that
               HTMLPurifier_Config::create() supports.

Adds a filter to process the output. First come first serve
@param HTMLPurifier_Filter $filter HTMLPurifier_Filter object

Filters an HTML snippet/document to be XSS-free and standards-compliant.
@param string $html String of HTML to purify
@param HTMLPurifier_Config $config Config object for this operation,
               if omitted, defaults to the config object specified during this
               object's construction. The parameter can also be any type
               that HTMLPurifier_Config::create() supports.
@return string Purified HTML

Filters an array of HTML snippets
@param string[] $array_of_html Array of html snippets
@param HTMLPurifier_Config $config Optional config object for this operation.
               See HTMLPurifier::purify() for more details.
@return string[] Array of purified HTML

Singleton for enforcing just one HTML Purifier in your system
@param HTMLPurifier|HTMLPurifier_Config $prototype Optional prototype
                  HTMLPurifier instance to overload singleton with,
                  or HTMLPurifier_Config instance to configure the
                  generated version with.
@return HTMLPurifier

Singleton for enforcing just one HTML Purifier in your system
@param HTMLPurifier|HTMLPurifier_Config $prototype Optional prototype
                  HTMLPurifier instance to overload singleton with,
                  or HTMLPurifier_Config instance to configure the
                  generated version with.
@return HTMLPurifier
@note Backwards compatibility, see instance()

## References

**Database Tables (inferred)**
- `the`
- `lowest`
- `many`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier.php`

**Classes**:
- `HTMLPurifier`

**Functions/Methods**:
- `__construct($config = null)`
- `addFilter($filter)`
- `purify($html, $config = null)`
- `purifyArray($array_of_html, $config = null)`
- `instance($prototype = null)`
- `getInstance($prototype = null)`

