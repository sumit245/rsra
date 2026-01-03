# app\ThirdParty\Google\google-api-php-client\src\Google\Service\Resource.php

- Path: `app\ThirdParty\Google\google-api-php-client\src\Google\Service\Resource.php`
- Type: PHP
- Size: 9987 bytes

## Summary (from docblocks)

Copyright 2010 Google Inc.
Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at
    http://www.apache.org/licenses/LICENSE-2.0
Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

Implements the actual methods/resources of the discovered Google API using magic function
calling overloading (__call()), which on call will see if the method name (plus.activities.list)
is available in this service, and if so construct an apiHttpRequest representing it.

@var string $rootUrl

@var Google_Client $client

@var string $serviceName

@var string $servicePath

@var string $resourceName

@var array $methods

TODO: This function needs simplifying.
@param $name
@param $arguments
@param $expectedClass - optional, the expected class name
@return Google_Http_Request|expectedClass
@throws Google_Exception

Parse/expand request parameters and create a fully qualified
request uri.
@static
@param string $restPath
@param array $params
@return string $requestUrl

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\src\Google\Service\Resource.php`

**Classes**:
- `Google_Service_Resource`
- `name`
- `if`

**Functions/Methods**:
- `__construct($service, $serviceName, $resourceName, $resource)`
- `call($name, $arguments, $expectedClass = null)`
- `convertToArrayAndStripNulls($o)`
- `createRequestUri($restPath, $params)`

