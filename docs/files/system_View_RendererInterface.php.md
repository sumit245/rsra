# system\View\RendererInterface.php

- Path: `system\View\RendererInterface.php`
- Type: PHP
- Size: 2267 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Interface RendererInterface
The interface used for displaying Views and/or theme files.

Builds the output based upon a file name and any
data that has already been set.
@param array $options  Reserved for 3rd-party uses since
                       it might be needed to pass additional info
                       to other template engines.
@param bool  $saveData Whether to save data for subsequent calls

Builds the output based upon a string and any
data that has already been set.
@param string $view     The view contents
@param array  $options  Reserved for 3rd-party uses since
                        it might be needed to pass additional info
                        to other template engines.
@param bool   $saveData Whether to save data for subsequent calls

Sets several pieces of view data at once.
@param string $context The context to escape it for: html, css, js, url
                       If 'raw', no escaping will happen
@return RendererInterface

Sets a single piece of view data.
@param mixed  $value
@param string $context The context to escape it for: html, css, js, url
                       If 'raw' no escaping will happen
@return RendererInterface

Removes all of the view data from the system.
@return RendererInterface

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\View\RendererInterface.php`

**Functions/Methods**:
- `render(string $view, ?array $options = null, bool $saveData = false)`
- `renderString(string $view, ?array $options = null, bool $saveData = false)`
- `setData(array $data = [], ?string $context = null)`
- `setVar(string $name, $value = null, ?string $context = null)`
- `resetData()`

