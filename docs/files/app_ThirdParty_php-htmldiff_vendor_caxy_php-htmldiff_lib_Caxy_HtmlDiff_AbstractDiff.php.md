# app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\AbstractDiff.php

- Path: `app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\AbstractDiff.php`
- Type: PHP
- Size: 11518 bytes

## Summary (from docblocks)

Class AbstractDiff.

@var array
@deprecated since 0.1.0

@var array
@deprecated since 0.1.0

@var bool
@deprecated since 0.1.0

@var HtmlDiffConfig

@var string

@var string

@var string

@var array

@var array

@var DiffCache[]

@var HTMLPurifier|null

@var HTMLPurifier_Config|null

@see array_slice_cached();
@var bool

@var MbStringUtil

AbstractDiff constructor.
@param string     $oldText
@param string     $newText
@param string     $encoding
@param null|array $specialCaseTags (this does nothing, it is just here to keep the interface compatible)
@param null|bool  $groupDiffs

@return bool|string

Initializes HTMLPurifier with cache location.
@param null|string $defaultPurifierSerializerCache

Prepare (purify) the HTML
@return void

@return DiffCache|null

@return bool

@return HtmlDiffConfig

@param HtmlDiffConfig $config
@return AbstractDiff

@return int
@deprecated since 0.1.0

@param int $matchThreshold
@return AbstractDiff
@deprecated since 0.1.0

@param array $chars
@deprecated since 0.1.0

@return array|null
@deprecated since 0.1.0

@param string $char
@deprecated since 0.1.0

@param string $char
@deprecated since 0.1.0

@param array $tags
@deprecated since 0.1.0

@param string $tag
@deprecated since 0.1.0

@param string $tag
@deprecated since 0.1.0

@return array|null
@deprecated since 0.1.0

@return string

@return string

@return string

Clears the diff content.
@return void

@param bool $boolean
@return $this
@deprecated since 0.1.0

@return bool
@deprecated since 0.1.0

@param HTMLPurifier_Config $config

@param string $html
@return string

@param array $oldWords

@param array $newWords

@return string[]

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\AbstractDiff.php`

**Classes**:
- `Caxy\HtmlDiff\AbstractDiff`

**Functions/Methods**:
- `__construct($oldText, $newText, $encoding = 'UTF-8', $specialCaseTags = null, $groupDiffs = null)`
- `build()`
- `initPurifier($defaultPurifierSerializerCache = null)`
- `prepare()`
- `getDiffCache()`
- `hasDiffCache()`
- `getConfig()`
- `setConfig(HtmlDiffConfig $config)`
- `getMatchThreshold()`
- `setMatchThreshold($matchThreshold)`
- `setSpecialCaseChars(array $chars)`
- `getSpecialCaseChars()`
- `addSpecialCaseChar($char)`
- `removeSpecialCaseChar($char)`
- `setSpecialCaseTags(array $tags = array()`
- `addSpecialCaseTag($tag)`
- `removeSpecialCaseTag($tag)`
- `getSpecialCaseTags()`
- `getOldHtml()`
- `getNewHtml()`
- `getDifference()`
- `clearContent()`
- `setGroupDiffs($boolean)`
- `isGroupDiffs()`
- `setHTMLPurifierConfig(HTMLPurifier_Config $config)`
- `purifyHtml($html)`
- `splitInputsToWords()`
- `setOldWords(array $oldWords)`
- `setNewWords(array $newWords)`
- `convertHtmlToListOfWords(string $text)`
- `normalizeWhitespaceInHtmlSentence(string $sentence)`

