# system\Controller.php

- Path: `system\Controller.php`
- Type: PHP
- Size: 5027 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class Controller

Helpers that will be automatically loaded on class instantiation.
@var array

Instance of the main Request object.
@var RequestInterface

Instance of the main response object.
@var ResponseInterface

Instance of logger to use.
@var LoggerInterface

Should enforce HTTPS access for all methods in this controller.
@var int Number of seconds to set HSTS header

Once validation has been run, will hold the Validation instance.
@var Validation

Constructor.
@throws HTTPException

A convenience method to use when you need to ensure that a single
method is reached only via HTTPS. If it isn't, then a redirect
will happen back to this method and HSTS header will be sent
to have modern browsers transform requests automatically.
@param int $duration The number of seconds this link should be
                     considered secure for. Only with HSTS header.
                     Default value is 1 year.
@throws HTTPException

Provides a simple way to tie into the main CodeIgniter class and
tell it how long to cache the current page for.

Handles "auto-loading" helper files.
@deprecated Use `helper` function instead of using this method.
@codeCoverageIgnore

A shortcut to performing validation on Request data.
@param array|string $rules
@param array        $messages An array of custom error messages

A shortcut to performing validation on any input data.
@param array        $data     The data to validate
@param array|string $rules
@param array        $messages An array of custom error messages
@param string|null  $dbGroup  The database group to use

@param array|string $rules

## Symbols

# Symbols

**Files documented**: 1

## `system\Controller.php`

**Classes**:
- `CodeIgniter\Controller`
- `CodeIgniter\instantiation`
- `CodeIgniter\and`

**Functions/Methods**:
- `initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)`
- `forceHTTPS(int $duration = 31_536_000)`
- `cachePage(int $time)`
- `loadHelpers()`
- `validate($rules, array $messages = [])`
- `validateData(array $data, $rules, array $messages = [], ?string $dbGroup = null)`
- `setValidator($rules, array $messages)`

