# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xlsx\Styles.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xlsx\Styles.php`
- Type: PHP
- Size: 15614 bytes

## Summary (from docblocks)

Theme instance.
@var ?Theme

@var array

@var array

@var array

@var SimpleXMLElement

@var string

Cast SimpleXMLElement to bool to overcome Scrutinizer problem.
@param mixed $value

@var SimpleXMLElement $gradientFill

Read style.
@param SimpleXMLElement|stdClass $style

Read protection locked attribute.

Read protection hidden attribute.

Get array item.
@param mixed $array (usually array, in theory can be false)
@return stdClass

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Reader\Xlsx\Styles.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Reader\Xlsx\Styles extends BaseParserClass`

**Functions/Methods**:
- `setNamespace(string $namespace)`
- `setWorkbookPalette(array $palette)`
- `castBool($value)`
- `getStyleAttributes(SimpleXMLElement $value)`
- `setStyleXml(SimpleXmlElement $styleXml)`
- `setTheme(Theme $theme)`
- `setStyleBaseData(?Theme $theme = null, array $styles = [], array $cellStyles = [])`
- `readFontStyle(Font $fontStyle, SimpleXMLElement $fontStyleXml)`
- `readNumberFormat(NumberFormat $numfmtStyle, SimpleXMLElement $numfmtStyleXml)`
- `readFillStyle(Fill $fillStyle, SimpleXMLElement $fillStyleXml)`
- `readBorderStyle(Borders $borderStyle, SimpleXMLElement $borderStyleXml)`
- `getAttribute(SimpleXMLElement $xml, string $attribute)`
- `readBorder(Border $border, SimpleXMLElement $borderXml)`
- `readAlignmentStyle(Alignment $alignment, SimpleXMLElement $alignmentXml)`
- `formatGeneral(string $formatString)`
- `readStyle(Style $docStyle, $style)`
- `readProtectionLocked(Style $docStyle, SimpleXMLElement $style)`
- `readProtectionHidden(Style $docStyle, SimpleXMLElement $style)`
- `readColor(SimpleXMLElement $color, bool $background = false)`
- `dxfs(bool $readDataOnly = false)`
- `styles()`
- `getArrayItem($array, int $key = 0)`

