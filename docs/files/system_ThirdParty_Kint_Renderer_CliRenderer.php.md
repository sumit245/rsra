# system\ThirdParty\Kint\Renderer\CliRenderer.php

- Path: `system\ThirdParty\Kint\Renderer\CliRenderer.php`
- Type: PHP
- Size: 4968 bytes

## Summary (from docblocks)

@var bool enable colors

Forces utf8 output on windows.
@var bool

Detects the terminal width on startup.
@var bool

The minimum width to detect terminal size as.
Less than this is ignored and falls back to default width.
@var int

Which stream to check for VT100 support on windows.
null uses STDOUT if it's defined
@var null|resource

## Symbols

# Symbols

**Files documented**: 1

## `system\ThirdParty\Kint\Renderer\CliRenderer.php`

**Classes**:
- `Kint\Renderer\CliRenderer extends TextRenderer`

**Functions/Methods**:
- `__construct()`
- `colorValue($string)`
- `colorType($string)`
- `colorTitle($string)`
- `renderTitle(Value $o)`
- `preRender()`
- `postRender()`
- `escape($string, $encoding = false)`
- `utf8ToWindows($string)`

