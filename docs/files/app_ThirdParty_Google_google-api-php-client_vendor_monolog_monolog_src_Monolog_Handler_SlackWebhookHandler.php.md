# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SlackWebhookHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SlackWebhookHandler.php`
- Type: PHP
- Size: 3737 bytes

## Summary (from docblocks)

Sends notifications through Slack Webhooks
@author Haralan Dobrev <hkdobrev@gmail.com>
@see    https://api.slack.com/incoming-webhooks

Slack Webhook token
@var string

Instance of the SlackRecord util class preparing data for Slack API.
@var SlackRecord

@param  string      $webhookUrl             Slack Webhook URL
@param  string|null $channel                Slack channel (encoded ID or name)
@param  string|null $username               Name of a bot
@param  bool        $useAttachment          Whether the message should be added to Slack as attachment (plain text otherwise)
@param  string|null $iconEmoji              The emoji name to use (or null)
@param  bool        $useShortAttachment     Whether the the context/extra messages added to Slack as attachments are in a short style
@param  bool        $includeContextAndExtra Whether the attachment should include context and extra data
@param  int         $level                  The minimum logging level at which this handler will be triggered
@param  bool        $bubble                 Whether the messages that are handled can bubble up the stack or not
@param  array       $excludeFields          Dot separated list of fields to exclude from slack message. E.g. ['context.field1', 'extra.field2']

{@inheritdoc}
@param array $record

## References

**Database Tables (inferred)**
- `slack`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\SlackWebhookHandler.php`

**Classes**:
- `Monolog\Handler\SlackWebhookHandler extends AbstractProcessingHandler`
- `Monolog\Handler\preparing`

**Functions/Methods**:
- `__construct($webhookUrl, $channel = null, $username = null, $useAttachment = true, $iconEmoji = null, $useShortAttachment = false, $includeContextAndExtra = false, $level = Logger::CRITICAL, $bubble = true, array $excludeFields = array()`
- `getSlackRecord()`
- `write(array $record)`
- `setFormatter(FormatterInterface $formatter)`
- `getFormatter()`

