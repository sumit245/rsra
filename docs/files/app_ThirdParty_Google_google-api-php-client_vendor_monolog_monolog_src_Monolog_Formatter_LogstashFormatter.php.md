# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\LogstashFormatter.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\LogstashFormatter.php`
- Type: PHP
- Size: 5307 bytes

## Summary (from docblocks)

Serializes a log message to Logstash Event Format
@see http://logstash.net/
@see https://github.com/logstash/logstash/blob/master/lib/logstash/event.rb
@author Tim Mower <timothy.mower@gmail.com>

@var string the name of the system for the Logstash log message, used to fill the @source field

@var string an application name for the Logstash log message, used to fill the @type field

@var string a prefix for 'extra' fields from the Monolog record (optional)

@var string a prefix for 'context' fields from the Monolog record (optional)

@var int logstash format version to use

@param string $applicationName the application that sends the data, used as the "type" field of logstash
@param string $systemName      the system/machine name, used as the "source" field of logstash, defaults to the hostname of the machine
@param string $extraPrefix     prefix for extra keys inside logstash "fields"
@param string $contextPrefix   prefix for context keys inside logstash "fields", defaults to ctxt_
@param int    $version         the logstash format version to use, defaults to 0

{@inheritdoc}

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Formatter\LogstashFormatter.php`

**Classes**:
- `Monolog\Formatter\LogstashFormatter extends NormalizerFormatter`

**Functions/Methods**:
- `__construct($applicationName, $systemName = null, $extraPrefix = null, $contextPrefix = 'ctxt_', $version = self::V0)`
- `format(array $record)`
- `formatV0(array $record)`
- `formatV1(array $record)`

