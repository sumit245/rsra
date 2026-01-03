# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\HipChatHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\HipChatHandler.php`
- Type: PHP
- Size: 10347 bytes

## Summary (from docblocks)

Sends notifications through the hipchat api to a hipchat room
Notes:
API token - HipChat API token
Room      - HipChat Room Id or name, where messages are sent
Name      - Name used to send the message (from)
notify    - Should the message trigger a notification in the clients
version   - The API version to use (HipChatHandler::API_V1 | HipChatHandler::API_V2)
@author Rafael Dohms <rafael@doh.ms>
@see    https://www.hipchat.com/docs/api

Use API version 1

Use API version v2

The maximum allowed length for the name used in the "from" field.

The maximum allowed length for the message.

@var string

@var string

@var string

@var bool

@var string

@var string

@var string

@param string $token   HipChat API Token
@param string $room    The room that should be alerted of the message (Id or Name)
@param string $name    Name used in the "from" field.
@param bool   $notify  Trigger a notification in clients or not
@param int    $level   The minimum logging level at which this handler will be triggered
@param bool   $bubble  Whether the messages that are handled can bubble up the stack or not
@param bool   $useSSL  Whether to connect via SSL.
@param string $format  The format of the messages (default to text, can be set to html if you have html in the messages)
@param string $host    The HipChat server hostname.
@param string $version The HipChat API version (default HipChatHandler::API_V1)

{@inheritdoc}
@param  array  $record
@return string

Builds the body of API call
@param  array  $record
@return string

Builds the header of the API Call
@param  string $content
@return string

Assigns a color to each level of log records.
@param  int    $level
@return string

{@inheritdoc}
@param array $record

{@inheritdoc}

Combines multiple records into one. Error level of the combined record
will be the highest level from the given records. Datetime will be taken
from the first record.
@param $records
@return array

Validates the length of a string.
If the `mb_strlen()` function is available, it will use that, as HipChat
allows UTF-8 characters. Otherwise, it will fall back to `strlen()`.
Note that this might cause false failures in the specific case of using
a valid name with less than 16 characters, but 16 or more bytes, on a
system where `mb_strlen()` is unavailable.
@param string $str
@param int    $length
@return bool

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\HipChatHandler.php`

**Classes**:
- `Monolog\Handler\HipChatHandler extends SocketHandler`

**Functions/Methods**:
- `__construct($token, $room, $name = 'Monolog', $notify = false, $level = Logger::CRITICAL, $bubble = true, $useSSL = true, $format = 'text', $host = 'api.hipchat.com', $version = self::API_V1)`
- `generateDataStream($record)`
- `buildContent($record)`
- `buildHeader($content)`
- `getAlertColor($level)`
- `write(array $record)`
- `handleBatch(array $records)`
- `combineRecords($records)`
- `validateStringLength($str, $length)`

