# system\Format\XMLFormatter.php

- Path: `system\Format\XMLFormatter.php`
- Type: PHP
- Size: 3015 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

XML data formatter

Takes the given data and formats it.
@param mixed $data
@return bool|string (XML string | false)

A recursive method to convert an array into a valid XML string.
Written by CodexWorld. Received permission by email on Nov 24, 2016 to use this code.
@see http://www.codexworld.com/convert-array-to-xml-in-php/
@param SimpleXMLElement $output

Normalizes tags into the allowed by W3C.
Regex adopted from this StackOverflow answer.
@param int|string $key
@return string
@see https://stackoverflow.com/questions/60001029/invalid-characters-in-xml-tag-name

## References

**Database Tables (inferred)**
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `system\Format\XMLFormatter.php`

**Classes**:
- `CodeIgniter\Format\XMLFormatter implements FormatterInterface`

**Functions/Methods**:
- `format($data)`
- `arrayToXML(array $data, &$output)`
- `normalizeXMLTag($key)`

