# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\AmqpHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\AmqpHandler.php`
- Type: PHP
- Size: 3866 bytes

## Summary (from docblocks)

@var AMQPExchange|AMQPChannel $exchange

@var string

@param AMQPExchange|AMQPChannel $exchange     AMQPExchange (php AMQP ext) or PHP AMQP lib channel, ready for use
@param string                   $exchangeName
@param int                      $level
@param bool                     $bubble       Whether the messages that are handled can bubble up the stack or not

{@inheritDoc}

{@inheritDoc}

Gets the routing key for the AMQP exchange
@param  array  $record
@return string

@param  string      $data
@return AMQPMessage

{@inheritDoc}

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\AmqpHandler.php`

**Classes**:
- `Monolog\Handler\AmqpHandler extends AbstractProcessingHandler`

**Functions/Methods**:
- `__construct($exchange, $exchangeName = 'log', $level = Logger::DEBUG, $bubble = true)`
- `write(array $record)`
- `handleBatch(array $records)`
- `getRoutingKey(array $record)`
- `createAmqpMessage($data)`
- `getDefaultFormatter()`

