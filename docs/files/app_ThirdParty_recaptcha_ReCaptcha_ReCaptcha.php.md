# app\ThirdParty\recaptcha\ReCaptcha\ReCaptcha.php

- Path: `app\ThirdParty\recaptcha\ReCaptcha\ReCaptcha.php`
- Type: PHP
- Size: 3317 bytes

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

reCAPTCHA client.

Version of this client library.
@const string

Shared secret for the site.
@var string

Method used to communicate with service. Defaults to POST request.
@var RequestMethod

Create a configured instance to use the reCAPTCHA service.
@param string $secret shared secret between site and reCAPTCHA server.
@param RequestMethod $requestMethod method used to send the request. Defaults to POST.
@throws \RuntimeException if $secret is invalid

Calls the reCAPTCHA siteverify API to verify whether the user passes
CAPTCHA test.
@param string $response The value of 'g-recaptcha-response' in the submitted form.
@param string $remoteIp The end user's IP address.
@return Response Response from the service.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\recaptcha\ReCaptcha\ReCaptcha.php`

**Classes**:
- `ReCaptcha\ReCaptcha`

**Functions/Methods**:
- `__construct($secret, RequestMethod $requestMethod = null)`
- `verify($response, $remoteIp = null)`

