# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\ChromePHPHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\ChromePHPHandler.php`
- Type: PHP
- Size: 5623 bytes

## Summary (from docblocks)

Handler sending logs to the ChromePHP extension (http://www.chromephp.com/)
This also works out of the box with Firefox 43+
@author Christophe Coevoet <stof@notk.org>

Version of the extension

Header name

Regular expression to detect supported browsers (matches any Chrome, or Firefox 43+)

Tracks whether we sent too much data
Chrome limits the headers to 256KB, so when we sent 240KB we stop sending
@var Boolean

@param int     $level  The minimum logging level at which this handler will be triggered
@param Boolean $bubble Whether the messages that are handled can bubble up the stack or not

{@inheritdoc}

{@inheritDoc}

Creates & sends header for a record
@see sendHeader()
@see send()
@param array $record

Sends the log header
@see sendHeader()

Send header string to the client
@param string $header
@param string $content

Verifies if the headers are accepted by the current user agent
@return Boolean

BC getter for the sendHeaders property that has been made static

BC setter for the sendHeaders property that has been made static

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\ChromePHPHandler.php`

**Classes**:
- `Monolog\Handler\ChromePHPHandler extends AbstractProcessingHandler`

**Functions/Methods**:
- `__construct($level = Logger::DEBUG, $bubble = true)`
- `handleBatch(array $records)`
- `getDefaultFormatter()`
- `write(array $record)`
- `send()`
- `sendHeader($header, $content)`
- `headersAccepted()`
- `__get($property)`
- `__set($property, $value)`

