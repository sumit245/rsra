# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\GelfHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\GelfHandler.php`
- Type: PHP
- Size: 2068 bytes

## Summary (from docblocks)

Handler to send messages to a Graylog2 (http://www.graylog2.org) server
@author Matt Lehner <mlehner@gmail.com>
@author Benjamin Zikarsky <benjamin@zikarsky.de>

@var Publisher the publisher object that sends the message to the server

@param PublisherInterface|IMessagePublisher|Publisher $publisher a publisher object
@param int                                            $level     The minimum logging level at which this handler will be triggered
@param bool                                           $bubble    Whether the messages that are handled can bubble up the stack or not

{@inheritdoc}

{@inheritdoc}

{@inheritDoc}

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\GelfHandler.php`

**Classes**:
- `Monolog\Handler\GelfHandler extends AbstractProcessingHandler`

**Functions/Methods**:
- `__construct($publisher, $level = Logger::DEBUG, $bubble = true)`
- `close()`
- `write(array $record)`
- `getDefaultFormatter()`

