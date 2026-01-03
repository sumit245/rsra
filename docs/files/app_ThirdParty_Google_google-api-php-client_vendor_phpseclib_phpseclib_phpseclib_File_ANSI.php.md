# app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\File\ANSI.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\File\ANSI.php`
- Type: PHP
- Size: 20266 bytes

## Summary (from docblocks)

Pure-PHP ANSI Decoder
PHP version 5
If you call read() in \phpseclib\Net\SSH2 you may get {@link http://en.wikipedia.org/wiki/ANSI_escape_code ANSI escape codes} back.
They'd look like chr(0x1B) . '[00m' or whatever (0x1B = ESC).  They tell a
{@link http://en.wikipedia.org/wiki/Terminal_emulator terminal emulator} how to format the characters, what
color to display them in, etc. \phpseclib\File\ANSI is a {@link http://en.wikipedia.org/wiki/VT100 VT100} terminal emulator.
@category  File
@package   ANSI
@author    Jim Wigginton <terrafrost@php.net>
@copyright 2012 Jim Wigginton
@license   http://www.opensource.org/licenses/mit-license.html  MIT License
@link      http://phpseclib.sourceforge.net

Pure-PHP ANSI Decoder
@package ANSI
@author  Jim Wigginton <terrafrost@php.net>
@access  public

Max Width
@var int
@access private

Max Height
@var int
@access private

Max History
@var int
@access private

History
@var array
@access private

History Attributes
@var array
@access private

Current Column
@var int
@access private

Current Row
@var int
@access private

Old Column
@var int
@access private

Old Row
@var int
@access private

An empty attribute cell
@var object
@access private

The current attribute cell
@var object
@access private

An empty attribute row
@var array
@access private

The current screen text
@var array
@access private

The current screen attributes
@var array
@access private

Current ANSI code
@var string
@access private

Tokenization
@var array
@access private

Default Constructor.
@return \phpseclib\File\ANSI
@access public

Set terminal width and height
Resets the screen as well
@param int $x
@param int $y
@access public

Set the number of lines that should be logged past the terminal height
@param int $x
@param int $y
@access public

Load a string
@param string $source
@access public

Appdend a string
@param string $source
@access public

Add a new line
Also update the $this->screen and $this->history buffers
@access private

Returns the current coordinate without preformating
@access private
@return string

Returns the current screen without preformating
@access private
@return string

Returns the current screen
@access public
@return string

Returns the current screen and the x previous lines
@access public
@return string

## References

**Database Tables (inferred)**
- `cursor`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\phpseclib\phpseclib\phpseclib\File\ANSI.php`

**Classes**:
- `phpseclib\File\ANSI`

**Functions/Methods**:
- `__construct()`
- `setDimensions($x, $y)`
- `setHistory($history)`
- `loadString($source)`
- `appendString($source)`
- `_newLine()`
- `_processCoordinate($last_attr, $cur_attr, $char)`
- `_getScreen()`
- `getScreen()`
- `getHistory()`

