# system\ThirdParty\Kint\Kint.php

- Path: `system\ThirdParty\Kint\Kint.php`
- Type: PHP
- Size: 21842 bytes

## Summary (from docblocks)

@var mixed Kint mode
false: Disabled
true: Enabled, default mode selection
other: Manual mode selection

Default mode.
@var string

Default mode in CLI with cli_detection on.
@var string

@var bool Return output instead of echoing

@var string format of the link to the source file in trace entries.
Use %f for file path, %l for line number.
[!] EXAMPLE (works with for phpStorm and RemoteCall Plugin):
Kint::$file_link_format = 'http://localhost:8091/?message=%f:%l';

@var bool whether to display where kint was called from

@var array base directories of your application that will be displayed instead of the full path.
Keys are paths, values are replacement strings
[!] EXAMPLE (for Laravel 5):
Kint::$app_root_dirs = [
    base_path() => '<BASE>',
    app_path() => '<APP>',
    config_path() => '<CONFIG>',
    database_path() => '<DATABASE>',
    public_path() => '<PUBLIC>',
    resource_path() => '<RESOURCE>',
    storage_path() => '<STORAGE>',
];
Defaults to [$_SERVER['DOCUMENT_ROOT'] => '<ROOT>']

@var int depth limit for array/object traversal. 0 for no limit

@var bool expand all trees by default for rich view

@var bool enable detection when Kint is command line.
Formats output with whitespace only; does not HTML-escape it

@var array Kint aliases. Add debug functions in Kint wrappers here to fix modifiers and backtraces

@var array<mixed, string> Array of modes to renderer class names

@psalm-suppress UnsafeInstantiation

Renders a list of vars including the pre and post renders.
@param array $vars Data to dump
@param array $base Base Zval\Value objects
@return string

Dumps and renders a var.
@param mixed $var  Data to dump
@param Value $base Base object
@return string

Gets all static settings at once.
@return array Current static settings

Creates a Kint instances based on static settings.
Also calls setStatesFromStatics for you
@param array $statics array of statics as returned by getStatics
@return null|\Kint\Kint

@var Renderer

@psalm-suppress UnsafeInstantiation

Creates base objects given parameter info.
@param array $params Parameters as returned from getCallInfo
@param int   $argc   Number of arguments the helper was called with
@return Value[] Base objects for the arguments

Gets call info from the backtrace, alias, and argument count.
Aliases must be normalized beforehand (Utils::normalizeAliases)
@param array   $aliases Call aliases as found in Kint::$aliases
@param array[] $trace   Backtrace
@param int     $argc    Number of arguments
@return array{params:null|array, modifiers:array, callee:null|array, caller:null|array, trace:array[]} Call info

Dumps a backtrace.
Functionally equivalent to Kint::dump(1) or Kint::dump(debug_backtrace(true))
@return int|string

Dumps some data.
Functionally equivalent to Kint::dump(1) or Kint::dump(debug_backtrace())
@param mixed ...$args
@return int|string

generic path display callback, can be configured in app_root_dirs; purpose is
to show relevant path info and hide as much of the path as possible.
@param string $file
@return string

Returns specific function call info from a stack trace frame, or null if no match could be found.
@param array $frame The stack trace frame in question
@param int   $argc  The amount of arguments received
@return null|array{parameters:array, modifiers:array} params and modifiers, or null if a specific call could not be determined

## References

**Database Tables (inferred)**
- `getCallInfo`
- `the`
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `system\ThirdParty\Kint\Kint.php`

**Classes**:
- `Kint\Kint`
- `Kint\names`

**Functions/Methods**:
- `__construct(Parser $p, Renderer $r)`
- `setParser(Parser $p)`
- `getParser()`
- `setRenderer(Renderer $r)`
- `getRenderer()`
- `setStatesFromStatics(array $statics)`
- `setStatesFromCallInfo(array $info)`
- `dumpAll(array $vars, array $base)`
- `dumpVar(&$var, Value $base)`
- `getStatics()`
- `createFromStatics(array $statics)`
- `getBasesFromParamInfo(array $params, $argc)`
- `getCallInfo(array $aliases, array $trace, $argc)`
- `trace()`
- `dump(...$args)`
- `shortenPath($file)`
- `getIdeLink($file, $line)`
- `getSingleCall(array $frame, $argc)`

