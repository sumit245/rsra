# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Printer.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Printer.php`
- Type: PHP
- Size: 5897 bytes

## Summary (from docblocks)

For HTML generation convenience funcs.
@type HTMLPurifier_Generator

For easy access.
@type HTMLPurifier_Config

Initialize $generator.

Give generator necessary configuration if possible
@param HTMLPurifier_Config $config

Main function that renders object or aspect of that object
@note Parameters vary depending on printer

Returns a start tag
@param string $tag Tag name
@param array $attr Attribute array
@return string

Returns an end tag
@param string $tag Tag name
@return string

Prints a complete element with content inside
@param string $tag Tag name
@param string $contents Element contents
@param array $attr Tag attributes
@param bool $escape whether or not to escape contents
@return string

@param string $tag
@param array $attr
@return string

@param string $text
@return string

Prints a simple key/value row in a table.
@param string $name Key
@param mixed $value Value
@return string

Escapes a string for HTML output.
@param string $string String to escape
@return string

Takes a list of strings and turns them into a single list
@param string[] $array List of strings
@param bool $polite Bool whether or not to add an end before the last
@return string

Retrieves the class of an object without prefixes, as well as metadata
@param object $obj Object to determine class of
@param string $sec_prefix Further prefix to remove
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Printer.php`

**Classes**:
- `HTMLPurifier_Printer`
- `of`
- `of`

**Functions/Methods**:
- `__construct()`
- `prepareGenerator($config)`
- `render()`
- `start($tag, $attr = array()`
- `end($tag)`
- `element($tag, $contents, $attr = array()`
- `elementEmpty($tag, $attr = array()`
- `text($text)`
- `row($name, $value)`
- `escape($string)`
- `listify($array, $polite = false)`
- `getClass($obj, $sec_prefix = '')`

