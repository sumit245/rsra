# system\Test\DOMParser.php

- Path: `system\Test\DOMParser.php`
- Type: PHP
- Size: 7483 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Load a response into a DOMDocument for testing assertions based on that

DOM for the body,
@var DOMDocument

Constructor.
@throws BadMethodCallException

Returns the body of the current document.

Sets a string as the body that we want to work with.
@return $this

Loads the contents of a file as a string
so that we can work with it.
@return DOMParser

Checks to see if the text is found within the result.
@param string $search
@param string $element

Checks to see if the text is NOT found within the result.
@param string $search

Checks to see if an element with the matching CSS specifier
is found within the current DOM.

Checks to see if the element is available within the result.

Determines if a link with the specified text is found
within the results.

Checks for an input named $field with a value of $value.

Checks for checkboxes that are currently checked.

Search the DOM using an XPath expression.
@return DOMNodeList

Look for the a selector  in the passed text.
@return array

## Symbols

# Symbols

**Files documented**: 1

## `system\Test\DOMParser.php`

**Classes**:
- `CodeIgniter\Test\DOMParser`

**Functions/Methods**:
- `__construct()`
- `getBody()`
- `withString(string $content)`
- `withFile(string $path)`
- `see(?string $search = null, ?string $element = null)`
- `dontSee(?string $search = null, ?string $element = null)`
- `seeElement(string $element)`
- `dontSeeElement(string $element)`
- `seeLink(string $text, ?string $details = null)`
- `seeInField(string $field, string $value)`
- `seeCheckboxIsChecked(string $element)`
- `doXPath(?string $search, string $element, array $paths = [])`
- `parseSelector(string $selector)`

