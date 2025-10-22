# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\DynamoDbHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\DynamoDbHandler.php`
- Type: PHP
- Size: 2440 bytes

## Summary (from docblocks)

Amazon DynamoDB handler (http://aws.amazon.com/dynamodb/)
@link https://github.com/aws/aws-sdk-php/
@author Andrew Lawson <adlawson@gmail.com>

@var DynamoDbClient

@var string

@var int

@var Marshaler

@param DynamoDbClient $client
@param string         $table
@param int            $level
@param bool           $bubble

{@inheritdoc}

@param  array $record
@return array

{@inheritdoc}

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\DynamoDbHandler.php`

**Classes**:
- `Monolog\Handler\DynamoDbHandler extends AbstractProcessingHandler`

**Functions/Methods**:
- `__construct(DynamoDbClient $client, $table, $level = Logger::DEBUG, $bubble = true)`
- `write(array $record)`
- `filterEmptyFields(array $record)`
- `getDefaultFormatter()`

