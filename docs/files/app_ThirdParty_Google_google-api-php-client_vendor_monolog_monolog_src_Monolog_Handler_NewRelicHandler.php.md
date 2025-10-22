# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\NewRelicHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\NewRelicHandler.php`
- Type: PHP
- Size: 6015 bytes

## Summary (from docblocks)

Class to record a log on a NewRelic application.
Enabling New Relic High Security mode may prevent capture of useful information.
@see https://docs.newrelic.com/docs/agents/php-agent
@see https://docs.newrelic.com/docs/accounts-partnerships/accounts/security/high-security

Name of the New Relic application that will receive logs from this handler.
@var string

Name of the current transaction
@var string

Some context and extra data is passed into the handler as arrays of values. Do we send them as is
(useful if we are using the API), or explode them for display on the NewRelic RPM website?
@var bool

{@inheritDoc}
@param string $appName
@param bool   $explodeArrays
@param string $transactionName

{@inheritDoc}

Checks whether the NewRelic extension is enabled in the system.
@return bool

Returns the appname where this log should be sent. Each log can override the default appname, set in this
handler's constructor, by providing the appname in it's context.
@param  array       $context
@return null|string

Returns the name of the current transaction. Each log can override the default transaction name, set in this
handler's constructor, by providing the transaction_name in it's context
@param array $context
@return null|string

Sets the NewRelic application that should receive this log.
@param string $appName

Overwrites the name of the current transaction
@param string $transactionName

@param string $key
@param mixed  $value

{@inheritDoc}

## References

**Database Tables (inferred)**
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\NewRelicHandler.php`

**Classes**:
- `Monolog\Handler\NewRelicHandler extends AbstractProcessingHandler`

**Functions/Methods**:
- `__construct($level = Logger::ERROR,
        $bubble = true,
        $appName = null,
        $explodeArrays = false,
        $transactionName = null)`
- `write(array $record)`
- `isNewRelicEnabled()`
- `getAppName(array $context)`
- `getTransactionName(array $context)`
- `setNewRelicAppName($appName)`
- `setNewRelicTransactionName($transactionName)`
- `setNewRelicParameter($key, $value)`
- `getDefaultFormatter()`

