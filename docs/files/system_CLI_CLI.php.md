# system\CLI\CLI.php

- Path: `system\CLI\CLI.php`
- Type: PHP
- Size: 31467 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Set of static methods useful for CLI request handling.
Portions of this code were initially from the FuelPHP Framework,
version 1.7.x, and used here under the MIT license they were
originally made available under. Reference: http://fuelphp.com
Some of the code in this class is Windows-specific, and not
possible to test using travis-ci. It has been phpunit-annotated
to prevent messing up code coverage.
Some of the methods require keyboard input, and are not unit-testable
as a result: input() and prompt().
validate() is internal, and not testable if prompt() isn't.
The wait() method is mostly testable, as long as you don't give it
an argument of "0".
These have been flagged to ignore for code coverage purposes.

Is the readline library on the system?
@var bool

The message displayed at prompts.
@var string

Has the class already been initialized?
@var bool

Foreground color list
@var array<string, string>

Background color list
@var array<string, string>

List of array segments.
@var array

@var array

Helps track internally whether the last
output was a "write" or a "print" to
keep the output clean and as expected.
@var string|null

Height of the CLI window
@var int|null

Width of the CLI window
@var int|null

Whether the current stream supports colored output.
@var bool

Static "constructor".

Get input from the shell, using readline or the standard STDIN
Named options must be in the following formats:
php index.php user -v --v -name=John --name=John
@param string $prefix
@codeCoverageIgnore

Asks the user for input.
Usage:
// Takes any input
$color = CLI::prompt('What is your favorite color?');
// Takes any input, but offers default
$color = CLI::prompt('What is your favourite color?', 'white');
// Will validate options with the in_list rule and accept only if one of the list
$color = CLI::prompt('What is your favourite color?', array('red','blue'));
// Do not provide options but requires a valid email
$email = CLI::prompt('What is your email?', null, 'required|valid_email');
@param string       $field      Output "field" question
@param array|string $options    String to a default value, array to a list of options (the first option will be the default value)
@param array|string $validation Validation rules
@return string The user input
@codeCoverageIgnore

prompt(), but based on the option's key
@param array|string      $text       Output "field" text or an one or two value array where the first value is the text before listing the options
                                     and the second value the text before asking to select one option. Provide empty string to omit
@param array             $options    A list of options (array(key => description)), the first option will be the default value
@param array|string|null $validation Validation rules
@return string The selected key of $options
@codeCoverageIgnore

Validate one prompt "field" at a time
@param string       $field Prompt "field" output
@param string       $value Input value
@param array|string $rules Validation rules
@codeCoverageIgnore

Outputs a string to the CLI without any surrounding newlines.
Useful for showing repeating elements on a single line.

Outputs a string to the cli on it's own line.

Outputs an error to the CLI using STDERR instead of STDOUT

Beeps a certain number of times.
@param int $num The number of times to beep

Waits a certain number of seconds, optionally showing a wait message and
waiting for a key press.
@param int  $seconds   Number of seconds
@param bool $countdown Show a countdown or not

if operating system === windows

Enter a number of empty lines

Clears the screen of output
@codeCoverageIgnore

Returns the given text with the correct color codes for a foreground and
optionally a background color.
@param string $text       The text to color
@param string $foreground The foreground color
@param string $background The background color
@param string $format     Other formatting to apply. Currently only 'underline' is understood
@return string The color coded string

Get the number of characters in string having encoded characters
and ignores styles set by the color() function

Checks whether the current stream resource supports or
refers to a valid terminal type device.
@param resource $resource

Returns true if the stream resource supports colors.
This is tricky on Windows, because Cygwin, Msys2 etc. emulate pseudo
terminals via named pipes, so we can only check the environment.
Reference: https://github.com/composer/xdebug-handler/blob/master/src/Process.php
@param resource $resource

Attempts to determine the width of the viewable CLI window.

Attempts to determine the height of the viewable CLI window.

Populates the CLI's dimensions.
@codeCoverageIgnore

Displays a progress bar on the CLI. You must call it repeatedly
to update it. Set $thisStep = false to erase the progress bar.
@param bool|int $thisStep

Takes a string and writes it to the command line, wrapping to a maximum
width. If no maximum width is specified, will wrap to the window's max
width.
If an int is passed into $pad_left, then all strings after the first
will padded with that many spaces to the left. Useful when printing
short descriptions that need to start on an existing line.

Parses the command line it was called from and collects all
options and valid segments.

Returns the command line string portions of the arguments, minus
any options, as a string. This is used to pass along to the main
CodeIgniter application.

Returns an individual segment.
This ignores any options that might have been dispersed between
valid segments in the command:
 // segment(3) is 'three', not '-f' or 'anOption'
 > php spark one two -f anOption three
**IMPORTANT:** The index here is one-based instead of zero-based.
@return mixed

Returns the raw array of segments found.

Gets a single command-line option. Returns TRUE if the option
exists, but doesn't have a value, and is simply acting as a flag.
@return mixed

Returns the raw array of options found.

Returns the options as a string, suitable for passing along on
the CLI to other commands.
@param bool $useLongOpts Use '--' for long options?
@param bool $trim        Trim final string output?

Returns a well formatted table
@param array $tbody List of rows
@param array $thead List of columns

While the library is intended for use on CLI commands,
commands can be called from controllers and elsewhere
so we need a way to allow them to still work.
For now, just echo the content, but look into a better
solution down the road.
@param resource $handle

## References

**Database Tables (inferred)**
- `the`
- `a`
- `keyboard`
- `were`
- `and`
- `controllers`

## Symbols

# Symbols

**Files documented**: 1

## `system\CLI\CLI.php`

**Classes**:
- `CodeIgniter\CLI\is`
- `CodeIgniter\CLI\CLI`
- `CodeIgniter\CLI\already`
- `CodeIgniter\CLI\is`

**Functions/Methods**:
- `init()`
- `input(?string $prefix = null)`
- `prompt(string $field, $options = null, $validation = null)`
- `promptByKey($text, array $options, $validation = null)`
- `validate(string $field, string $value, $rules)`
- `print(string $text = '', ?string $foreground = null, ?string $background = null)`
- `write(string $text = '', ?string $foreground = null, ?string $background = null)`
- `error(string $text, string $foreground = 'light_red', ?string $background = null)`
- `beep(int $num = 1)`
- `wait(int $seconds, bool $countdown = false)`
- `isWindows()`
- `newLine(int $num = 1)`
- `clearScreen()`
- `color(string $text, string $foreground, ?string $background = null, ?string $format = null)`
- `getColoredText(string $text, string $foreground, ?string $background, ?string $format)`
- `strlen(?string $string)`
- `streamSupports(string $function, $resource)`
- `hasColorSupport($resource)`
- `getWidth(int $default = 80)`
- `getHeight(int $default = 32)`
- `generateDimensions()`
- `showProgress($thisStep = 1, int $totalSteps = 10)`
- `wrap(?string $string = null, int $max = 0, int $padLeft = 0)`
- `parseCommandLine()`
- `getURI()`
- `getSegment(int $index)`
- `getSegments()`
- `getOption(string $name)`
- `getOptions()`
- `getOptionString(bool $useLongOpts = false, bool $trim = false)`
- `table(array $tbody, array $thead = [])`
- `fwrite($handle, string $string)`

