# app\ThirdParty\recaptcha\ReCaptcha\RequestMethod\CurlPost.php

- Path: `app\ThirdParty\recaptcha\ReCaptcha\RequestMethod\CurlPost.php`
- Type: PHP
- Size: 2919 bytes

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

Sends cURL request to the reCAPTCHA service.
Note: this requires the cURL extension to be enabled in PHP
@see http://php.net/manual/en/book.curl.php

URL to which requests are sent via cURL.
@const string

Curl connection to the reCAPTCHA service
@var Curl

Submit the cURL request with the specified parameters.
@param RequestParameters $params Request parameters
@return string Body of the reCAPTCHA response

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\recaptcha\ReCaptcha\RequestMethod\CurlPost.php`

**Classes**:
- `ReCaptcha\RequestMethod\CurlPost implements RequestMethod`

**Functions/Methods**:
- `__construct(Curl $curl = null)`
- `submit(RequestParameters $params)`

