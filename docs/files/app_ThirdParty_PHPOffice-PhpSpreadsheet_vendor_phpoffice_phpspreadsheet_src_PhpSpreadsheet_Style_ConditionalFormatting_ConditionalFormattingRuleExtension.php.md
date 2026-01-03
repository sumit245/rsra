# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\ConditionalFormatting\ConditionalFormattingRuleExtension.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\ConditionalFormatting\ConditionalFormattingRuleExtension.php`
- Type: PHP
- Size: 7253 bytes

## Summary (from docblocks)

<conditionalFormatting> attributes

@var string Conditional Formatting Rule

<conditionalFormatting> children

@var ConditionalDataBarExtension

@var string Sequence of References

ConditionalFormattingRuleExtension constructor.

@return mixed

@param mixed $id

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Style\ConditionalFormatting\ConditionalFormattingRuleExtension.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Style\ConditionalFormatting\ConditionalFormattingRuleExtension`

**Functions/Methods**:
- `__construct($id = null, string $cfRule = self::CONDITION_EXTENSION_DATABAR)`
- `generateUuid()`
- `parseExtLstXml($extLstXml)`
- `parseExtDataBarAttributesFromXml(ConditionalDataBarExtension $extDataBarObj,
        SimpleXMLElement $dataBarXml)`
- `parseExtDataBarElementChildrenFromXml(ConditionalDataBarExtension $extDataBarObj, SimpleXMLElement $dataBarXml, $ns)`
- `getId()`
- `setId($id)`
- `getCfRule()`
- `setCfRule(string $cfRule)`
- `getDataBarExt()`
- `setDataBarExt(ConditionalDataBarExtension $dataBar)`
- `getSqref()`
- `setSqref(string $sqref)`

