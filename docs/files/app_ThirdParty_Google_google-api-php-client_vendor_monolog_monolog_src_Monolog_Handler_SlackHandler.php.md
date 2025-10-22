# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SlackHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SlackHandler.php`
- Type: PHP
- Size: 6381 bytes

## Summary (from docblocks)

Sends notifications through Slack API
@author Greg Kedzierski <greg@gregkedzierski.com>
@see    https://api.slack.com/

Slack API token
@var string

Instance of the SlackRecord util class preparing data for Slack API.
@var SlackRecord

@param  string                    $token                  Slack API token
@param  string                    $channel                Slack channel (encoded ID or name)
@param  string|null               $username               Name of a bot
@param  bool                      $useAttachment          Whether the message should be added to Slack as attachment (plain text otherwise)
@param  string|null               $iconEmoji              The emoji name to use (or null)
@param  int                       $level                  The minimum logging level at which this handler will be triggered
@param  bool                      $bubble                 Whether the messages that are handled can bubble up the stack or not
@param  bool                      $useShortAttachment     Whether the the context/extra messages added to Slack as attachments are in a short style
@param  bool                      $includeContextAndExtra Whether the attachment should include context and extra data
@param  array                     $excludeFields          Dot separated list of fields to exclude from slack message. E.g. ['context.field1', 'extra.field2']
@throws MissingExtensionException If no OpenSSL PHP extension configured

{@inheritdoc}
@param  array  $record
@return string

Builds the body of API call
@param  array  $record
@return string

Prepares content data
@param  array $record
@return array

Builds the header of the API Call
@param  string $content
@return string

{@inheritdoc}
@param array $record

Finalizes the request by reading some bytes and then closing the socket
If we do not read some but close the socket too early, slack sometimes
drops the request entirely.

Returned a Slack message attachment color associated with
provided level.
@param  int    $level
@return string
@deprecated Use underlying SlackRecord instead

Stringifies an array of key/value pairs to be used in attachment fields
@param  array  $fields
@return string
@deprecated Use underlying SlackRecord instead

## References

**Database Tables (inferred)**
- `slack`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SlackHandler.php`

**Classes**:
- `Monolog\Handler\SlackHandler extends SocketHandler`
- `Monolog\Handler\preparing`

**Functions/Methods**:
- `__construct($token, $channel, $username = null, $useAttachment = true, $iconEmoji = null, $level = Logger::CRITICAL, $bubble = true, $useShortAttachment = false, $includeContextAndExtra = false, array $excludeFields = array()`
- `getSlackRecord()`
- `generateDataStream($record)`
- `buildContent($record)`
- `prepareContentData($record)`
- `buildHeader($content)`
- `write(array $record)`
- `finalizeWrite()`
- `getAttachmentColor($level)`
- `stringify($fields)`
- `setFormatter(FormatterInterface $formatter)`
- `getFormatter()`

