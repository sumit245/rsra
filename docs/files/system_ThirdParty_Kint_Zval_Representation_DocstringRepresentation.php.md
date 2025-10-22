# system\ThirdParty\Kint\Zval\Representation\DocstringRepresentation.php

- Path: `system\ThirdParty\Kint\Zval\Representation\DocstringRepresentation.php`
- Type: PHP
- Size: 2604 bytes

## Summary (from docblocks)

Returns the representation's docstring without surrounding comments.
Note that this will not work flawlessly.
On comments with whitespace after the stars the lines will begin with
whitespace, since we can't accurately guess how much of an indentation
is required.
And on lines without stars on the left this may eat bullet points.
Long story short: If you want the docstring read the contents. If you
absolutely must have it without comments (ie renderValueShort) this will
probably do.
@return null|string Docstring with comments stripped

## Symbols

# Symbols

**Files documented**: 1

## `system\ThirdParty\Kint\Zval\Representation\DocstringRepresentation.php`

**Classes**:
- `Kint\Zval\Representation\DocstringRepresentation extends Representation`

**Functions/Methods**:
- `__construct($docstring, $file, $line, $class = null)`
- `getDocstringWithoutComments()`

