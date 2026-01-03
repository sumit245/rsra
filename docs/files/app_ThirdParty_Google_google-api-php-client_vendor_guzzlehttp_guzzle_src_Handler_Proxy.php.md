# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php`
- Type: PHP
- Size: 1775 bytes

## Summary (from docblocks)

Provides basic proxies for handlers.

Sends synchronous requests to a specific handler while sending all other
requests to another handler.
@param callable $default Handler used for normal responses
@param callable $sync    Handler used for synchronous responses.
@return callable Returns the composed handler.

Sends streaming requests to a streaming compatible handler while sending
all other requests to a default handler.
This, for example, could be useful for taking advantage of the
performance benefits of curl while still supporting true streaming
through the StreamHandler.
@param callable $default   Handler used for non-streaming responses
@param callable $streaming Handler used for streaming responses
@return callable Returns the composed handler.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php`

**Classes**:
- `GuzzleHttp\Handler\Proxy`

**Functions/Methods**:
- `wrapSync(callable $default,
        callable $sync)`
- `wrapStreaming(callable $default,
        callable $streaming)`

