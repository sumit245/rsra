# system\ThirdParty\Kint\Renderer\RichRenderer.php

- Path: `system\ThirdParty\Kint\Renderer\RichRenderer.php`
- Type: PHP
- Size: 18928 bytes

## Summary (from docblocks)

RichRenderer value plugins should implement Kint\Renderer\Rich\ValuePluginInterface.

RichRenderer tab plugins should implement Kint\Renderer\Rich\TabPluginInterface.

Whether or not to render access paths.
Access paths can become incredibly heavy with very deep and wide
structures. Given mostly public variables it will typically make
up one quarter of the output HTML size.
If this is an unacceptably large amount and your browser is groaning
under the weight of the access paths - your first order of buisiness
should be to get a new browser. Failing that, use this to turn them off.
@var bool

The maximum length of a string before it is truncated.
Falsey to disable
@var int

Path to the CSS file to load by default.
@var string

Assume types and sizes don't need to be escaped.
Turn this off if you use anything but ascii in your class names,
but it'll cause a slowdown of around 10%
@var bool

Move all dumps to a folder at the bottom of the body.
@var bool

Sort mode for object properties.
@var int

## Symbols

# Symbols

**Files documented**: 1

## `system\ThirdParty\Kint\Renderer\RichRenderer.php`

**Classes**:
- `Kint\Renderer\RichRenderer extends Renderer`
- `Kint\Renderer\names`

**Functions/Methods**:
- `__construct()`
- `setCallInfo(array $info)`
- `setStatics(array $statics)`
- `setExpand($expand)`
- `getExpand()`
- `setForcePreRender()`
- `setPreRender($pre_render)`
- `getPreRender()`
- `setUseFolder($use_folder)`
- `getUseFolder()`
- `render(Value $o)`
- `renderNothing()`
- `renderHeaderWrapper(Value $o, $has_children, $contents)`
- `renderHeader(Value $o)`
- `renderChildren(Value $o)`
- `preRender()`
- `postRender()`
- `escape($string, $encoding = false)`
- `ideLink($file, $line)`
- `renderTab(Value $o, Representation $rep)`
- `getPlugin(array $plugins, array $hints)`
- `renderJs()`
- `renderCss()`
- `renderFolder()`

