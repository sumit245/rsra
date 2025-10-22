# app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\HtmlDiff.php

- Path: `app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\HtmlDiff.php`
- Type: PHP
- Size: 25589 bytes

## Summary (from docblocks)

Class HtmlDiff.

@var array

@var array

@var array

@param string              $oldText
@param string              $newText
@param HtmlDiffConfig|null $config
@return self

@param $bool
@return $this
@deprecated since 0.1.0

@param bool $boolean
@return HtmlDiff
@deprecated since 0.1.0

@return bool
@deprecated since 0.1.0

@return string

@param array $words
@return array

@param string      $item
@param null|string $currentIsolatedDiffTag
@return false|string

@param string      $item
@param null|string $currentIsolatedDiffTag
@return false|string

@param Operation $operation

@param Operation $operation

@param Operation $operation
@param string    $cssClass

@param Operation $operation
@param string    $cssClass

@param Operation $operation
@param int       $pos
@param string    $placeholder
@param bool      $stripWrappingTags
@return string

@param string $oldText
@param string $newText
@param bool   $stripWrappingTags
@return string

@param string $oldText
@param string $newText
@return string

@param string $oldText
@param string $newText
@return string

@param Operation $operation

@param string $text
@param string $attribute
@return null|string

@param string $text
@return bool

@param string $text
@return bool

@param string $text
@return bool

@param string       $text
@param array|string $types
@return bool

@param string $text
@return bool

@param Operation $operation
@param int       $posInNew
@return array

@param string $tag
@param string $cssClass
@param array  $words

@param string $word
@param string $condition
@return bool

@param array  $words
@param string $condition
@return array

@param string $item
@return bool

@return Operation[]

@return MatchingBlock[]

@param MatchingBlock[] $matchingBlocks

@param string $word
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\HtmlDiff.php`

**Classes**:
- `Caxy\HtmlDiff\HtmlDiff extends AbstractDiff`

**Functions/Methods**:
- `create($oldText, $newText, HtmlDiffConfig $config = null)`
- `setUseTableDiffing($bool)`
- `setInsertSpaceInReplace($boolean)`
- `getInsertSpaceInReplace()`
- `build()`
- `indexNewWords()`
- `replaceIsolatedDiffTags()`
- `createIsolatedDiffTagPlaceholders(&$words)`
- `isOpeningIsolatedDiffTag($item, $currentIsolatedDiffTag = null)`
- `isSelfClosingTag($text)`
- `isClosingIsolatedDiffTag($item, $currentIsolatedDiffTag = null)`
- `performOperation($operation)`
- `processReplaceOperation($operation)`
- `processInsertOperation($operation, $cssClass)`
- `processDeleteOperation($operation, $cssClass)`
- `diffIsolatedPlaceholder($operation, $pos, $placeholder, $stripWrappingTags = true)`
- `diffElements($oldText, $newText, $stripWrappingTags = true)`
- `diffList($oldText, $newText)`
- `diffTables($oldText, $newText)`
- `diffElementsByAttribute($oldText, $newText, $attribute, $element)`
- `processEqualOperation($operation)`
- `getAttributeFromTag($text, $attribute)`
- `isListPlaceholder($text)`
- `isLinkPlaceholder($text)`
- `isImagePlaceholder($text)`
- `isPlaceholderType($text, $types)`
- `isTablePlaceholder($text)`
- `findIsolatedDiffTagsInOld($operation, $posInNew)`
- `insertTag($tag, $cssClass, &$words)`
- `checkCondition($word, $condition)`
- `wrapText(string $text, string $tagName, string $cssClass)`
- `extractConsecutiveWords(&$words, $condition)`
- `isTag($item)`
- `isOpeningTag($item)`
- `isClosingTag($item)`
- `operations()`
- `matchingBlocks()`
- `findMatchingBlocks(int $startInOld, int $endInOld, int $startInNew, int $endInNew, array &$matchingBlocks)`
- `stripTagAttributes($word)`
- `findMatch(int $startInOld, int $endInOld, int $startInNew, int $endInNew)`
- `oldTextIsOnlyWhitespace(int $startingAtWord, int $wordCount)`

