# system\Filters\FilterInterface.php

- Path: `system\Filters\FilterInterface.php`
- Type: PHP
- Size: 1383 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Filter interface

Do whatever processing this filter needs to do.
By default it should not return anything during
normal execution. However, when an abnormal state
is found, it should return an instance of
CodeIgniter\HTTP\Response. If it does, script
execution will end and that Response will be
sent back to the client, allowing for error pages,
redirects, etc.
@param null $arguments
@return mixed

Allows After filters to inspect and modify the response
object as needed. This method does not allow any way
to stop execution of other after filters, short of
throwing an Exception or Error.
@param null $arguments
@return mixed

## Symbols

# Symbols

**Files documented**: 1

## `system\Filters\FilterInterface.php`

**Functions/Methods**:
- `before(RequestInterface $request, $arguments = null)`
- `after(RequestInterface $request, ResponseInterface $response, $arguments = null)`

