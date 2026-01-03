# system\Filters\CSRF.php

- Path: `system\Filters\CSRF.php`
- Type: PHP
- Size: 1908 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

CSRF filter.
This filter is not intended to be used from the command line.
@codeCoverageIgnore

Do whatever processing this filter needs to do.
By default it should not return anything during
normal execution. However, when an abnormal state
is found, it should return an instance of
CodeIgniter\HTTP\Response. If it does, script
execution will end and that Response will be
sent back to the client, allowing for error pages,
redirects, etc.
@param array|null $arguments
@throws SecurityException
@return RedirectResponse|void

We don't have anything to do here.
@param array|null $arguments
@return void

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Filters\CSRF.php`

**Classes**:
- `CodeIgniter\Filters\CSRF implements FilterInterface`

**Functions/Methods**:
- `before(RequestInterface $request, $arguments = null)`
- `after(RequestInterface $request, ResponseInterface $response, $arguments = null)`

