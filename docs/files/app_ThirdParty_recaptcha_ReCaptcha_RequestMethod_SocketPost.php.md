# app\ThirdParty\recaptcha\ReCaptcha\RequestMethod\SocketPost.php

- Path: `app\ThirdParty\recaptcha\ReCaptcha\RequestMethod\SocketPost.php`
- Type: PHP
- Size: 3824 bytes

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

Sends a POST request to the reCAPTCHA service, but makes use of fsockopen()
instead of get_file_contents(). This is to account for people who may be on
servers where allow_url_open is disabled.

reCAPTCHA service host.
@const string

@const string reCAPTCHA service path

@const string Bad request error

@const string Bad response error

Socket to the reCAPTCHA service
@var Socket

Constructor
@param \ReCaptcha\RequestMethod\Socket $socket optional socket, injectable for testing

Submit the POST request with the specified parameters.
@param RequestParameters $params Request parameters
@return string Body of the reCAPTCHA response

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\recaptcha\ReCaptcha\RequestMethod\SocketPost.php`

**Classes**:
- `ReCaptcha\RequestMethod\SocketPost implements RequestMethod`

**Functions/Methods**:
- `__construct(Socket $socket = null)`
- `submit(RequestParameters $params)`

