# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\CubeHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\CubeHandler.php`
- Type: PHP
- Size: 4631 bytes

## Summary (from docblocks)

Logs to Cube.
@link http://square.github.com/cube/
@author Wan Chen <kami@kamisama.me>

Create a Cube handler
@throws \UnexpectedValueException when given url is not a valid url.
                                  A valid url must consist of three parts : protocol://host:port
                                  Only valid protocols used by Cube are http and udp

Establish a connection to an UDP socket
@throws \LogicException           when unable to connect to the socket
@throws MissingExtensionException when there is no socket extension

Establish a connection to a http server
@throws \LogicException when no curl extension

{@inheritdoc}

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\CubeHandler.php`

**Classes**:
- `Monolog\Handler\CubeHandler extends AbstractProcessingHandler`

**Functions/Methods**:
- `__construct($url, $level = Logger::DEBUG, $bubble = true)`
- `connectUdp()`
- `connectHttp()`
- `write(array $record)`
- `writeUdp($data)`
- `writeHttp($data)`

