# system\ThirdParty\Kint\Renderer\TextRenderer.php

- Path: `system\ThirdParty\Kint\Renderer\TextRenderer.php`
- Type: PHP
- Size: 9565 bytes

## Summary (from docblocks)

TextRenderer plugins should be instances of Kint\Renderer\Text\Plugin.

Parser plugins must be instanceof one of these or
it will be removed for performance reasons.

The maximum length of a string before it is truncated.
Falsey to disable
@var int

The default width of the terminal for headers.
@var int

Indentation width.
@var int

Decorate the header and footer.
@var bool

Sort mode for object properties.
@var int

## Symbols

# Symbols

**Files documented**: 1

## `system\ThirdParty\Kint\Renderer\TextRenderer.php`

**Classes**:
- `Kint\Renderer\TextRenderer extends Renderer`

**Functions/Methods**:
- `__construct()`
- `render(Value $o)`
- `renderNothing()`
- `boxText($text, $width)`
- `renderTitle(Value $o)`
- `renderHeader(Value $o)`
- `renderChildren(Value $o)`
- `colorValue($string)`
- `colorType($string)`
- `colorTitle($string)`
- `postRender()`
- `filterParserPlugins(array $plugins)`
- `ideLink($file, $line)`
- `escape($string, $encoding = false)`
- `calledFrom()`
- `getPlugin(array $plugins, array $hints)`

