# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\FirePHPHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\FirePHPHandler.php`
- Type: PHP
- Size: 5466 bytes

## Summary (from docblocks)

Simple FirePHP Handler (http://www.firephp.org/), which uses the Wildfire protocol.
@author Eric Clemmons (@ericclemmons) <eric@uxdriven.com>

WildFire JSON header message format

FirePHP structure for parsing messages & their presentation

Must reference a "known" plugin, otherwise headers won't display in FirePHP

Header prefix for Wildfire to recognize & parse headers

Whether or not Wildfire vendor-specific headers have been generated & sent yet

Shared static message index between potentially multiple handlers
@var int

Base header creation function used by init headers & record headers
@param  array  $meta    Wildfire Plugin, Protocol & Structure Indexes
@param  string $message Log message
@return array  Complete header string ready for the client as key and message as value

Creates message header from record
@see createHeader()
@param  array  $record
@return string

{@inheritDoc}

Wildfire initialization headers to enable message parsing
@see createHeader()
@see sendHeader()
@return array

Send header string to the client
@param string $header
@param string $content

Creates & sends header for a record, ensuring init headers have been sent prior
@see sendHeader()
@see sendInitHeaders()
@param array $record

Verifies if the headers are accepted by the current user agent
@return Boolean

BC getter for the sendHeaders property that has been made static

BC setter for the sendHeaders property that has been made static

## References

**Database Tables (inferred)**
- `record`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\FirePHPHandler.php`

**Classes**:
- `Monolog\Handler\FirePHPHandler extends AbstractProcessingHandler`

**Functions/Methods**:
- `createHeader(array $meta, $message)`
- `createRecordHeader(array $record)`
- `getDefaultFormatter()`
- `getInitHeaders()`
- `sendHeader($header, $content)`
- `write(array $record)`
- `headersAccepted()`
- `__get($property)`
- `__set($property, $value)`

