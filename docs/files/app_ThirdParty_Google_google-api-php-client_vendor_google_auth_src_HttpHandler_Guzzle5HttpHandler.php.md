# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\HttpHandler\Guzzle5HttpHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\HttpHandler\Guzzle5HttpHandler.php`
- Type: PHP
- Size: 3865 bytes

## Summary (from docblocks)

Copyright 2015 Google Inc. All Rights Reserved.
Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at
     http://www.apache.org/licenses/LICENSE-2.0
Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

@var ClientInterface

@param ClientInterface $client

Accepts a PSR-7 Request and an array of options and returns a PSR-7 response.
@param RequestInterface $request
@param array $options
@return ResponseInterface

Accepts a PSR-7 request and an array of options and returns a PromiseInterface
@param RequestInterface $request
@param array $options
@return Promise

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\HttpHandler\Guzzle5HttpHandler.php`

**Classes**:
- `Google\Auth\HttpHandler\Guzzle5HttpHandler`

**Functions/Methods**:
- `__construct(ClientInterface $client)`
- `__invoke(RequestInterface $request, array $options = [])`
- `async(RequestInterface $request, array $options = [])`
- `createGuzzle5Request(RequestInterface $request, array $options)`
- `createPsr7Response(Guzzle5ResponseInterface $response)`

