# app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Server.php

- Path: `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Server.php`
- Type: PHP
- Size: 3481 bytes

## Summary (from docblocks)

An IMAP server.

@var string Internet domain name or bracketed IP address of server

@var string TCP port number

@var string Optional flags

@var array

@var int Connection options

@var int Retries number

Constructor.
@param string $hostname   Internet domain name or bracketed IP address
                          of server
@param string $port       TCP port number
@param string $flags      Optional flags
@param array  $parameters Connection parameters
@param int    $options    Connection options
@param int    $retries    Retries number

Authenticate connection.
@param string $username Username
@param string $password Password
@throws AuthenticationFailedException
@return ConnectionInterface

Glues hostname, port and flags and returns result.
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\ddeboer-imap\vendor\ddeboer\imap\src\Server.php`

**Classes**:
- `Ddeboer\Imap\Server implements ServerInterface`

**Functions/Methods**:
- `__construct(string $hostname,
        string $port = '993',
        string $flags = '/imap/ssl/validate-cert',
        array $parameters = [],
        int $options = 0,
        int $retries = 1)`
- `authenticate(string $username, string $password)`
- `getServerString()`

