# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Printer\ConfigForm.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Printer\ConfigForm.php`
- Type: PHP
- Size: 14819 bytes

## Summary (from docblocks)

@todo Rewrite to use Interchange objects

Printers for specific fields.
@type HTMLPurifier_Printer[]

Documentation URL, can have fragment tagged on end.
@type string

Name of form element to stuff config in.
@type string

Whether or not to compress directive names, clipping them off
after a certain amount of letters. False to disable or integer letters
before clipping.
@type bool

@param string $name Form element name for directives to be stuffed into
@param string $doc_url String documentation URL, will have fragment tagged on
@param bool $compress Integer max length before compressing a directive name, set to false to turn off

Sets default column and row size for textareas in sub-printers
@param $cols Integer columns of textarea, null to use default
@param $rows Integer rows of textarea, null to use default

Retrieves styling, in case it is not accessible by webserver

Retrieves JavaScript, in case it is not accessible by webserver

Returns HTML output for a configuration form
@param HTMLPurifier_Config|array $config Configuration object of current form state, or an array
       where [0] has an HTML namespace and [1] is being rendered.
@param array|bool $allowed Optional namespace(s) and directives to restrict form to.
@param bool $render_controls
@return string

Renders a single namespace
@param $ns String namespace name
@param array $directives array of directives to values
@return string

Printer decorator for directives that accept null

Printer being decorated
@type HTMLPurifier_Printer

@param HTMLPurifier_Printer $obj Printer to decorate

@param string $ns
@param string $directive
@param string $value
@param string $name
@param HTMLPurifier_Config|array $config
@return string

Swiss-army knife configuration form field printer

@type int

@type int

@param string $ns
@param string $directive
@param string $value
@param string $name
@param HTMLPurifier_Config|array $config
@return string

Bool form field printer

@param string $ns
@param string $directive
@param string $value
@param string $name
@param HTMLPurifier_Config|array $config
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Printer\ConfigForm.php`

**Classes**:
- `HTMLPurifier_Printer_ConfigForm extends HTMLPurifier_Printer`
- `HTMLPurifier_Printer_ConfigForm_NullDecorator extends HTMLPurifier_Printer`
- `HTMLPurifier_Printer_ConfigForm_default extends HTMLPurifier_Printer`
- `HTMLPurifier_Printer_ConfigForm_bool extends HTMLPurifier_Printer`

**Functions/Methods**:
- `__construct($name,
        $doc_url = null,
        $compress = false)`
- `setTextareaDimensions($cols = null, $rows = null)`
- `getCSS()`
- `getJavaScript()`
- `render($config, $allowed = true, $render_controls = true)`
- `renderNamespace($ns, $directives)`
- `__construct($obj)`
- `render($ns, $directive, $value, $name, $config)`
- `render($ns, $directive, $value, $name, $config)`
- `render($ns, $directive, $value, $name, $config)`

