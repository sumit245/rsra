# system\Filters\Honeypot.php

- Path: `system\Filters\Honeypot.php`
- Type: PHP
- Size: 1175 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Honeypot filter

Checks if Honeypot field is empty, if not then the
requester is a bot
@param array|null $arguments
@throws HoneypotException

Attach a honeypot to the current response.
@param array|null $arguments

## Symbols

# Symbols

**Files documented**: 1

## `system\Filters\Honeypot.php`

**Classes**:
- `CodeIgniter\Filters\Honeypot implements FilterInterface`

**Functions/Methods**:
- `before(RequestInterface $request, $arguments = null)`
- `after(RequestInterface $request, ResponseInterface $response, $arguments = null)`

