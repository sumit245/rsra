# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\Random.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\Random.php`
- Type: PHP
- Size: 12223 bytes

## Summary (from docblocks)

Random Number Generator
PHP version 5
Here's a short example of how to use this library:
<code>
<?php
   include 'vendor/autoload.php';
   echo bin2hex(\phpseclib\Crypt\Random::string(8));
?>
</code>
@category  Crypt
@package   Random
@author    Jim Wigginton <terrafrost@php.net>
@copyright 2007 Jim Wigginton
@license   http://www.opensource.org/licenses/mit-license.html  MIT License
@link      http://phpseclib.sourceforge.net

Pure-PHP Random Number Generator
@package Random
@author  Jim Wigginton <terrafrost@php.net>
@access  public

Generate a random string.
Although microoptimizations are generally discouraged as they impair readability this function is ripe with
microoptimizations because this function has the potential of being called a huge number of times.
eg. for RSA key generation.
@param int $length
@return string

Safely serialize variables
If a class has a private __sleep() method it'll give a fatal error on PHP 5.2 and earlier.
PHP 5.3 will emit a warning.
@param mixed $arr
@access public

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\Crypt\Random.php`

**Classes**:
- `phpseclib\Crypt\Random`
- `phpseclib\Crypt\has`

**Functions/Methods**:
- `string($length)`
- `phpseclib_safe_serialize(&$arr)`

