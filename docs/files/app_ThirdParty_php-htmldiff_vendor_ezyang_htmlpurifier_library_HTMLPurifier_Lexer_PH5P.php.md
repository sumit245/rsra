# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Lexer\PH5P.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Lexer\PH5P.php`
- Type: PHP
- Size: 182581 bytes

## Summary (from docblocks)

Experimental HTML5-based parser using Jeroen van der Meer's PH5P library.
Occupies space in the HTML5 pseudo-namespace, which may cause conflicts.
@note
   Recent changes to PHP's DOM extension have resulted in some fatal
   error conditions with the original version of PH5P. Pending changes,
   this lexer will punt to DirectLex if DOM throws an exception.

@param string $html
@param HTMLPurifier_Config $config
@param HTMLPurifier_Context $context
@return HTMLPurifier_Token[]

## References

**Models Used**
- `content_model`

**Database Tables (inferred)**
- `THE`
- `and`
- `the`
- `this`
- `its`
- `being`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Lexer\PH5P.php`

**Classes**:
- `HTMLPurifier_Lexer_PH5P extends HTMLPurifier_Lexer_DOMLex`
- `HTML5`
- `HTML5TreeConstructer`

**Functions/Methods**:
- `tokenizeHTML($html, $config, $context)`
- `__construct($data)`
- `save()`
- `char()`
- `character($s, $l = 0)`
- `characters($char_class, $start)`
- `dataState()`
- `entityDataState()`
- `tagOpenState()`
- `closeTagOpenState()`
- `tagNameState()`
- `beforeAttributeNameState()`
- `attributeNameState()`
- `afterAttributeNameState()`
- `beforeAttributeValueState()`
- `attributeValueDoubleQuotedState()`
- `attributeValueSingleQuotedState()`
- `attributeValueUnquotedState()`
- `entityInAttributeValueState()`
- `bogusCommentState()`
- `markupDeclarationOpenState()`
- `commentState()`
- `commentDashState()`
- `commentEndState()`
- `doctypeState()`
- `beforeDoctypeNameState()`
- `doctypeNameState()`
- `afterDoctypeNameState()`
- `bogusDoctypeState()`
- `entity()`
- `emitToken($token)`
- `EOF()`
- `__construct()`
- `emitToken($token)`
- `initPhase($token)`
- `rootElementPhase($token)`
- `mainPhase($token)`
- `beforeHead($token)`
- `inHead($token)`
- `afterHead($token)`
- `inBody($token)`
- `inTable($token)`
- `inCaption($token)`
- `inColumnGroup($token)`
- `inTableBody($token)`
- `inRow($token)`
- `inCell($token)`
- `inSelect($token)`
- `afterBody($token)`
- `inFrameset($token)`
- `afterFrameset($token)`
- `trailingEndPhase($token)`
- `insertElement($token, $append = true, $check = false)`
- `insertText($data)`
- `insertComment($data)`
- `appendToRealParent($node)`
- `elementInScope($el, $table = false)`
- `reconstructActiveFormattingElements()`
- `clearTheActiveFormattingElementsUpToTheLastMarker()`
- `generateImpliedEndTags($exclude = array()`
- `getElementCategory($node)`
- `clearStackToTableContext($elements)`
- `resetInsertionMode()`
- `closeCell()`
- `save()`

