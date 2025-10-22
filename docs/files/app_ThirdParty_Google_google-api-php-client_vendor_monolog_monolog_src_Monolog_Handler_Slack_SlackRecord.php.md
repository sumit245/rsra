# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\Slack\SlackRecord.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\Slack\SlackRecord.php`
- Type: PHP
- Size: 8192 bytes

## Summary (from docblocks)

Slack record utility helping to log to Slack webhooks or API.
@author Greg Kedzierski <greg@gregkedzierski.com>
@author Haralan Dobrev <hkdobrev@gmail.com>
@see    https://api.slack.com/incoming-webhooks
@see    https://api.slack.com/docs/message-attachments

Slack channel (encoded ID or name)
@var string|null

Name of a bot
@var string|null

User icon e.g. 'ghost', 'http://example.com/user.png'
@var string

Whether the message should be added to Slack as attachment (plain text otherwise)
@var bool

Whether the the context/extra messages added to Slack as attachments are in a short style
@var bool

Whether the attachment should include context and extra data
@var bool

Dot separated list of fields to exclude from slack message. E.g. ['context.field1', 'extra.field2']
@var array

@var FormatterInterface

@var NormalizerFormatter

Returned a Slack message attachment color associated with
provided level.
@param  int    $level
@return string

Stringifies an array of key/value pairs to be used in attachment fields
@param array $fields
@return string

Sets the formatter
@param FormatterInterface $formatter

Generates attachment field
@param string $title
@param string|array $value\
@return array

Generates a collection of attachment fields from array
@param array $data
@return array

Get a copy of record with fields excluded according to $this->excludeFields
@param array $record
@return array

## References

**Database Tables (inferred)**
- `slack`
- `array`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\Slack\SlackRecord.php`

**Classes**:
- `Monolog\Handler\Slack\SlackRecord`

**Functions/Methods**:
- `__construct($channel = null, $username = null, $useAttachment = true, $userIcon = null, $useShortAttachment = false, $includeContextAndExtra = false, array $excludeFields = array()`
- `getSlackData(array $record)`
- `getAttachmentColor($level)`
- `stringify($fields)`
- `setFormatter(FormatterInterface $formatter)`
- `generateAttachmentField($title, $value)`
- `generateAttachmentFields(array $data)`
- `excludeFields(array $record)`

