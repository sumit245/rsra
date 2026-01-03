# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Processor\WebProcessor.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Processor\WebProcessor.php`
- Type: PHP
- Size: 3212 bytes

## Summary (from docblocks)

Injects url/method and remote IP of the current web request in all records
@author Jordi Boggiano <j.boggiano@seld.be>

@var array|\ArrayAccess

Default fields
Array is structured as [key in record.extra => key in $serverData]
@var array

@param array|\ArrayAccess $serverData  Array or object w/ ArrayAccess that provides access to the $_SERVER data
@param array|null         $extraFields Field names and the related key inside $serverData to be added. If not provided it defaults to: url, ip, http_method, server, referrer

@param  array $record
@return array

@param  string $extraName
@param  string $serverName
@return $this

@param  array $extra
@return array

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Processor\WebProcessor.php`

**Classes**:
- `Monolog\Processor\WebProcessor`

**Functions/Methods**:
- `__construct($serverData = null, array $extraFields = null)`
- `__invoke(array $record)`
- `addExtraField($extraName, $serverName)`
- `appendExtraFields(array $extra)`

