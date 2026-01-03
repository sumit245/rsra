# system\ThirdParty\Kint\Parser\XmlPlugin.php

- Path: `system\ThirdParty\Kint\Parser\XmlPlugin.php`
- Type: PHP
- Size: 4976 bytes

## Summary (from docblocks)

Which method to parse the variable with.
DOMDocument provides more information including the text between nodes,
however it's memory usage is very high and it takes longer to parse and
render. Plus it's a pain to work with. So SimpleXML is the default.
@var string

Get the DOMDocument info.
The documentation of DOMDocument::loadXML() states that while you can
call it statically, it will give an E_STRICT warning. On my system it
actually gives an E_DEPRECATED warning, but it works so we'll just add
an error-silencing '@' to the access path.
If it errors loading then we wouldn't have gotten this far in the first place.
@param string      $var         The XML string
@param null|string $parent_path The path to the parent, in this case the XML string
@return null|array The root element DOMNode, the access path, and the root element name

## Symbols

# Symbols

**Files documented**: 1

## `system\ThirdParty\Kint\Parser\XmlPlugin.php`

**Classes**:
- `Kint\Parser\XmlPlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`
- `xmlToSimpleXML($var, $parent_path)`
- `xmlToDOMDocument($var, $parent_path)`

