# system\Honeypot\Honeypot.php

- Path: `system\Honeypot\Honeypot.php`
- Type: PHP
- Size: 2359 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

class Honeypot

Our configuration.
@var HoneypotConfig

Constructor.
@throws HoneypotException

Checks the request if honeypot field has data.

Attaches Honeypot template to response.

Prepares the template by adding label
content and field name.

## Symbols

# Symbols

**Files documented**: 1

## `system\Honeypot\Honeypot.php`

**Classes**:
- `CodeIgniter\Honeypot\Honeypot`
- `CodeIgniter\Honeypot\Honeypot`

**Functions/Methods**:
- `__construct(HoneypotConfig $config)`
- `hasContent(RequestInterface $request)`
- `attachHoneypot(ResponseInterface $response)`
- `prepareTemplate(string $template)`

