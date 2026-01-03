# system\ThirdParty\Kint\Parser\DOMDocumentPlugin.php

- Path: `system\ThirdParty\Kint\Parser\DOMDocumentPlugin.php`
- Type: PHP
- Size: 11535 bytes

## Summary (from docblocks)

The DOMDocument parser plugin is particularly useful as it is both the only
way to see inside the DOMNode without print_r, and the only way to see mixed
text and node inside XML (SimpleXMLElement will strip out the text).

List of properties to skip parsing.
The properties of a DOMNode can do a *lot* of damage to debuggers. The
DOMNode contains not one, not two, not three, not four, not 5, not 6,
not 7 but 8 different ways to recurse into itself:
* firstChild
* lastChild
* previousSibling
* nextSibling
* ownerDocument
* parentNode
* childNodes
* attributes
All of this combined: the tiny SVGs used as the caret in Kint are already
enough to make parsing and rendering take over a second, and send memory
usage over 128 megs. So we blacklist every field we don't strictly need
and hope that that's good enough.
In retrospect - this is probably why print_r does the same
@var array

Show all properties and methods.
@var bool

## Symbols

# Symbols

**Files documented**: 1

## `system\ThirdParty\Kint\Parser\DOMDocumentPlugin.php`

**Classes**:
- `Kint\Parser\DOMDocumentPlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`
- `parseList(&$var, InstanceValue &$o, $trigger)`
- `parseNode(&$var, InstanceValue &$o)`
- `parseProperty(InstanceValue $o, $prop, &$var)`
- `textualNodeToString(InstanceValue $o)`

