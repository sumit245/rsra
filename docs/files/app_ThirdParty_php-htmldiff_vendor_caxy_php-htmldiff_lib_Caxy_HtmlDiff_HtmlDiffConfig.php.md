# app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\HtmlDiffConfig.php

- Path: `app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\HtmlDiffConfig.php`
- Type: PHP
- Size: 9228 bytes

## Summary (from docblocks)

Class HtmlDiffConfig.

@var string[]

@var bool

@var bool

Whether to keep newlines in the diff
@var bool

@var string

@var array

@var int

@var bool

@var null|\Doctrine\Common\Cache\Cache

@var bool

@var null|string

@return HtmlDiffConfig

HtmlDiffConfig constructor.

@return int

@param int $matchThreshold
@return AbstractDiff

@param string $char
@return $this

@param string $char
@return $this

@deprecated This feature never properly worked, and is removed in version 0.1.14
@param array $tags
@return $this

@deprecated This feature never properly worked, and is removed in version 0.1.14
@param string $tag
@return $this

@deprecated This feature never properly worked, and is removed in version 0.1.14
@param string $tag
@return $this

@deprecated This feature never properly worked, and is removed in version 0.1.14
@return null

@return bool

@param bool $groupDiffs
@return HtmlDiffConfig

@return string

@param string $encoding
@return HtmlDiffConfig

@return bool

@param bool $insertSpaceInReplace
@return HtmlDiffConfig

@return bool

@param bool $keepNewLines

@return array

@param array $isolatedDiffTags
@return HtmlDiffConfig

@param string      $tag
@param null|string $placeholder
@return $this

@param string $tag
@return $this

@param string $tag
@return bool

@param string $text
@return bool

@param string $tag
@return null|string

@return bool

@param bool $useTableDiffing
@return HtmlDiffConfig

@param null|\Doctrine\Common\Cache\Cache $cacheProvider
@return $this

@return null|\Doctrine\Common\Cache\Cache

@param null|string
@return $this

@return null|string

@param string $tag
@return string

@param string $tag
@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\HtmlDiffConfig.php`

**Classes**:
- `Caxy\HtmlDiff\HtmlDiffConfig`

**Functions/Methods**:
- `create()`
- `__construct()`
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
- `isGroupDiffs()`
- `setGroupDiffs($groupDiffs)`
- `getEncoding()`
- `setEncoding($encoding)`
- `isInsertSpaceInReplace()`
- `setInsertSpaceInReplace($insertSpaceInReplace)`
- `isKeepNewLines()`
- `setKeepNewLines($keepNewLines)`
- `getIsolatedDiffTags()`
- `setIsolatedDiffTags($isolatedDiffTags)`
- `addIsolatedDiffTag($tag, $placeholder = null)`
- `removeIsolatedDiffTag($tag)`
- `isIsolatedDiffTag($tag)`
- `isIsolatedDiffTagPlaceholder($text)`
- `getIsolatedDiffTagPlaceholder($tag)`
- `isUseTableDiffing()`
- `setUseTableDiffing($useTableDiffing)`
- `setCacheProvider(\Doctrine\Common\Cache\Cache $cacheProvider = null)`
- `getCacheProvider()`
- `isPurifierEnabled()`
- `setPurifierEnabled(bool $purifierEnabled = true)`
- `setPurifierCacheLocation($purifierCacheLocation = null)`
- `getPurifierCacheLocation()`
- `getOpeningTag($tag)`
- `getClosingTag($tag)`

