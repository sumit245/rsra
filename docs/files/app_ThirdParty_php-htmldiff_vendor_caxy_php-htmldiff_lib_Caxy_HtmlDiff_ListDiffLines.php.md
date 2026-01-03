# app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\ListDiffLines.php

- Path: `app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\ListDiffLines.php`
- Type: PHP
- Size: 14446 bytes

## Summary (from docblocks)

List of tags that should be included when retrieving
text from a single list item that will be used in
matching logic (and only in matching logic).
@see getRelevantNodeText()
@var array

@var LcsService

@var array<string, DOMElement>

@param string              $oldText
@param string              $newText
@param HtmlDiffConfig|null $config
@return ListDiffLines

{@inheritDoc}

@return Operation[]

@return string[]

@var DOMElement $child

@param Operation[] $operations

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\ListDiffLines.php`

**Classes**:
- `Caxy\HtmlDiff\ListDiffLines extends AbstractDiff`

**Functions/Methods**:
- `create($oldText, $newText, HtmlDiffConfig $config = null)`
- `build()`
- `listByLines(string $old, string $new)`
- `findListNode(DOMDocument $dom)`
- `getListItemOperations(DOMElement $oldListNode, DOMElement $newListNode)`
- `getListTextArray(DOMElement $listNode)`
- `getRelevantNodeText(DOMNode $node)`
- `deleteListItem(DOMElement $li)`
- `addListItem(DOMElement $li, bool $replacement = false)`
- `processOperations(array $operations, DOMElement $oldListNode, DOMElement $newListNode)`
- `appendClassToNode(DOMElement $node, string $class)`
- `getOuterText(DOMNode $node)`
- `getInnerHtml(DOMNode $node)`
- `setInnerHtml(DOMNode $node, string $html)`
- `wrapNodeContent(DOMElement $node, string $tagName)`
- `childCountWithoutTextNode(DOMNode $node)`
- `getChildNodeByIndex(DOMNode $node, int $index)`

