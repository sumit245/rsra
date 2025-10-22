# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Printer\HTMLDefinition.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Printer\HTMLDefinition.php`
- Type: PHP
- Size: 10491 bytes

## Summary (from docblocks)

@type HTMLPurifier_HTMLDefinition, for easy access

@param HTMLPurifier_Config $config
@return string

Renders the Doctype table
@return string

Renders environment table, which is miscellaneous info
@return string

Renders the Content Sets table
@return string

Renders the Elements ($info) table
@return string

Renders a row describing the allowed children of an element
@param HTMLPurifier_ChildDef $def HTMLPurifier_ChildDef of pertinent element
@return string

Listifies a tag lookup table.
@param array $array Tag lookup array in form of array('tagname' => true)
@return string

Listifies a list of objects by retrieving class names and internal state
@param array $array List of objects
@return string
@todo Also add information about internal state

Listifies a hash of attributes to AttrDef classes
@param array $array Array hash in form of array('attrname' => HTMLPurifier_AttrDef)
@return string

Creates a heavy header row
@param string $text
@param int $num
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Printer\HTMLDefinition.php`

**Classes**:
- `HTMLPurifier_Printer_HTMLDefinition extends HTMLPurifier_Printer`
- `names`

**Functions/Methods**:
- `render($config)`
- `renderDoctype()`
- `renderEnvironment()`
- `renderContentSets()`
- `renderInfo()`
- `renderChildren($def)`
- `listifyTagLookup($array)`
- `listifyObjectList($array)`
- `listifyAttr($array)`
- `heavyHeader($text, $num = 1)`

