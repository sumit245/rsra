# app\ThirdParty\recaptcha\ReCaptcha\RequestParameters.php

- Path: `app\ThirdParty\recaptcha\ReCaptcha\RequestParameters.php`
- Type: PHP
- Size: 2928 bytes

## Summary (from docblocks)

This is a PHP library that handles calling reCAPTCHA.
@copyright Copyright (c) 2015, Google Inc.
@link      http://www.google.com/recaptcha
Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:
The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

Stores and formats the parameters for the request to the reCAPTCHA service.

Site secret.
@var string

Form response.
@var string

Remote user's IP address.
@var string

Client version.
@var string

Initialise parameters.
@param string $secret Site secret.
@param string $response Value from g-captcha-response form field.
@param string $remoteIp User's IP address.
@param string $version Version of this client library.

Array representation.
@return array Array formatted parameters.

Query string representation for HTTP request.
@return string Query string formatted parameters.

## References

**Database Tables (inferred)**
- `g`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\recaptcha\ReCaptcha\RequestParameters.php`

**Classes**:
- `ReCaptcha\RequestParameters`

**Functions/Methods**:
- `__construct($secret, $response, $remoteIp = null, $version = null)`
- `toArray()`
- `toQueryString()`

