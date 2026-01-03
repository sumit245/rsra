# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ConfigSchema\Interchange\Directive.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ConfigSchema\Interchange\Directive.php`
- Type: PHP
- Size: 1969 bytes

## Summary (from docblocks)

Interchange component class describing configuration directives.

ID of directive.
@type HTMLPurifier_ConfigSchema_Interchange_Id

Type, e.g. 'integer' or 'istring'.
@type string

Default value, e.g. 3 or 'DefaultVal'.
@type mixed

HTML description.
@type string

Whether or not null is allowed as a value.
@type bool

Lookup table of allowed scalar values.
e.g. array('allowed' => true).
Null if all values are allowed.
@type array

List of aliases for the directive.
e.g. array(new HTMLPurifier_ConfigSchema_Interchange_Id('Ns', 'Dir'))).
@type HTMLPurifier_ConfigSchema_Interchange_Id[]

Hash of value aliases, e.g. array('alt' => 'real'). Null if value
aliasing is disabled (necessary for non-scalar types).
@type array

Version of HTML Purifier the directive was introduced, e.g. '1.3.1'.
Null if the directive has always existed.
@type string

ID of directive that supercedes this old directive.
Null if not deprecated.
@type HTMLPurifier_ConfigSchema_Interchange_Id

Version of HTML Purifier this directive was deprecated. Null if not
deprecated.
@type string

List of external projects this directive depends on, e.g. array('CSSTidy').
@type array

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ConfigSchema\Interchange\Directive.php`

**Classes**:
- `describing`
- `HTMLPurifier_ConfigSchema_Interchange_Directive`

