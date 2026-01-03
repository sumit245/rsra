# system\Test\ControllerResponse.php

- Path: `system\Test\ControllerResponse.php`
- Type: PHP
- Size: 1905 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Testable response from a controller
@deprecated Use TestResponse directly
@codeCoverageIgnore

The message payload.
@var string
@deprecated Use $response->getBody() instead

DOM for the body.
@var DOMParser
@deprecated Use $domParser instead

Maintains the deprecated $dom property.

Sets the response.
@return $this
@deprecated Will revert to parent::setResponse() in a future release (no $body updates)

Sets the body and updates the DOM.
@return $this
@deprecated Use response()->setBody() instead

Retrieve the body.
@return string
@deprecated Use response()->getBody() instead

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `system\Test\ControllerResponse.php`

**Classes**:
- `CodeIgniter\Test\ControllerResponse extends TestResponse`

**Functions/Methods**:
- `__construct()`
- `setResponse(ResponseInterface $response)`
- `setBody(string $body)`
- `getBody()`

