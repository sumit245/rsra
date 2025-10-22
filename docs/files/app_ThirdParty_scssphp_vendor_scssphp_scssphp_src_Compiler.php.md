# app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Compiler.php

- Path: `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Compiler.php`
- Type: PHP
- Size: 312273 bytes

## Summary (from docblocks)

SCSSPHP
@copyright 2012-2020 Leaf Corcoran
@license http://opensource.org/licenses/MIT MIT
@link http://scssphp.github.io/scssphp

The scss compiler and parser.
Converting SCSS to CSS is a three stage process. The incoming file is parsed
by `Parser` into a syntax tree, then it is compiled into another tree
representing the CSS structure by `Compiler`. The CSS tree is fed into a
formatter, like `Formatter` which then outputs CSS as a string.
During the first compile, all values are *reduced*, which means that their
types are brought to the lowest form before being dump as strings. This
handles math equations, variable dereferences, and the like.
The `compile` function of `Compiler` is the entry point.
In summary:
The `Compiler` class creates an instance of the parser, feeds it SCSS code,
then transforms the resulting tree to a CSS tree. This class also holds the
evaluation context, such as all available mixins and variables at any given
time.
The `Parser` class is only concerned with parsing its input.
The `Formatter` takes a CSS tree, and dumps it to a formatted string,
handling things like indentation.

SCSS compiler
@author Leaf Corcoran <leafot@gmail.com>
@final Extending the Compiler is deprecated

@deprecated

@deprecated

@deprecated

@deprecated

@deprecated

@deprecated

@var array<string, string>

@var array<string, string>

@deprecated

@deprecated

@var array<int, string|callable>

@var array<string, Block>

@var string[]

@var array
@phpstan-var array<string, array{0: callable, 1: string[]|null}>

@var array<string, mixed>

@var array<string, bool>

@var string|null

@var null
@deprecated

@var int|SourceMapGenerator
@phpstan-var self::SOURCE_MAP_*|SourceMapGenerator

@var array
@phpstan-var array{sourceRoot?: string, sourceMapFilename?: string|null, sourceMapURL?: string|null, sourceMapWriteTo?: string|null, outputSourceFiles?: bool, sourceMapRootpath?: string, sourceMapBasepath?: string}

@var bool

@var Formatter

@var string
@phpstan-var class-string<Formatter>

@var Environment

@var OutputBlock|null

@var \ScssPhp\ScssPhp\Compiler\Environment

@var OutputBlock|null

@var Environment|null

@var bool|null
@deprecated

@var array<int, string|null>

@var Cache|null

@var bool

@var int

@var array[]

@var array<string, int[]>

@var array<string, int>

@var Parser|null

@var int|null

@var int|null

@var int|null

@var bool|null

@var null
@deprecated

@var bool

@var array[]

@var array
@phpstan-var list<array{currentDir: string|null, path: string, filePath: string}>

The directory of the currently processed file
@var string|null

The directory of the input file
@var string

@var bool

@var LoggerInterface

@var array<string, bool>

Constructor
@param array|null $cacheOptions
@phpstan-param array{cacheDir?: string, prefix?: string, forceRefresh?: string, checkImportResolutions?: bool}|null $cacheOptions

Get compiler options
@return array<string, mixed>
@internal

Sets an alternative logger.
Changing the logger in the middle of the compilation is not
supported and will result in an undefined behavior.
@param LoggerInterface $logger
@return void

Set an alternative error output stream, for testing purpose only
@param resource $handle
@return void
@deprecated Use {@see setLogger} instead

Compile scss
@param string      $code
@param string|null $path
@return string
@throws SassException when the source fails to compile
@deprecated Use {@see compileString} instead.

Compile scss
@param string      $source
@param string|null $path
@return CompilationResult
@throws SassException when the source fails to compile

@param CachedResult $result
@return bool

Instantiate parser
@param string|null $path
@return \ScssPhp\ScssPhp\Parser

Is self extend?
@param array $target
@param array $origin
@return bool

Push extends
@param string[]   $target
@param array      $origin
@param array|null $block
@return void

Make output block
@param string|null   $type
@param string[]|null $selectors
@return \ScssPhp\ScssPhp\Formatter\OutputBlock

Compile root
@param \ScssPhp\ScssPhp\Block $rootBlock
@return void

Report missing selectors
@return void

Flatten selectors
@param \ScssPhp\ScssPhp\Formatter\OutputBlock $block
@param string                                 $parentKey
@return void

Glue parts of :not( or :nth-child( ... that are in general split in selectors parts
@param array $parts
@return array

Match extends
@param array $selector
@param array $out
@param int   $from
@param bool  $initial
@return void

Test a part for being a pseudo selector
@param string $part
@param array  $matches
@return bool

Push extended selector except if
 - this is a pseudo selector
 - same as previous
 - in a white list
in this case we merge the pseudo selector content
@param array $out
@param array $extended
@return void

Match extends single
@param array $rawSingle
@param array $outOrigin
@param bool  $initial
@return bool

Extract a relationship from the fragment.
When extracting the last portion of a selector we will be left with a
fragment which may end with a direction relationship combinator. This
method will extract the relationship fragment and return it along side
the rest.
@param array $fragment The selector fragment maybe ending with a direction relationship combinator.
@return array The selector without the relationship fragment if any, the relationship fragment.

Combine selector single
@param array $base
@param array $other
@return array

Compile media
@param \ScssPhp\ScssPhp\Block $media
@return void

Media parent
@param \ScssPhp\ScssPhp\Formatter\OutputBlock $scope
@return \ScssPhp\ScssPhp\Formatter\OutputBlock

Compile directive
@param DirectiveBlock|array                   $directive
@param \ScssPhp\ScssPhp\Formatter\OutputBlock $out
@return void

directive names can include some interpolation
@param string|array $directiveName
@return string
@throws CompilerException

Compile at-root
@param \ScssPhp\ScssPhp\Block $block
@return void

Filter at-root scope depending on with/without option
@param \ScssPhp\ScssPhp\Formatter\OutputBlock $scope
@param array                                  $with
@param array                                  $without
@return OutputBlock

found missing selector from a at-root compilation in the previous scope
(if at-root is just enclosing a property, the selector is in the parent tree)
@param \ScssPhp\ScssPhp\Formatter\OutputBlock $scope
@param \ScssPhp\ScssPhp\Formatter\OutputBlock $previousScope
@return OutputBlock

Find a selector by the depth node in the scope
@param \ScssPhp\ScssPhp\Formatter\OutputBlock $scope
@param int                                    $depth
@return array

Compile @at-root's with: inclusion / without: exclusion into 2 lists uses to filter scope/env later
@param array|null $withCondition
@return array
@phpstan-return array{array<string, bool>, array<string, bool>}

Filter env stack
@param Environment[] $envs
@param array $with
@param array $without
@return Environment
@phpstan-param  non-empty-array<Environment> $envs

Filter WITH rules
@param \ScssPhp\ScssPhp\Block|\ScssPhp\ScssPhp\Formatter\OutputBlock $block
@param array                                                         $with
@param array                                                         $without
@return bool

Test a single type of block against with/without lists
@param string $what
@param array  $with
@param array  $without
@return bool
  true if the block should be kept, false to reject

Compile keyframe block
@param \ScssPhp\ScssPhp\Block $block
@param string[]               $selectors
@return void

Compile nested properties lines
@param \ScssPhp\ScssPhp\Block                 $block
@param \ScssPhp\ScssPhp\Formatter\OutputBlock $out
@return void

Compile nested block
@param \ScssPhp\ScssPhp\Block $block
@param string[]               $selectors
@return void

Recursively compiles a block.
A block is analogous to a CSS block in most cases. A single SCSS document
is encapsulated in a block when parsed, but it does not have parent tags
so all of its children appear on the root level when compiled.
Blocks are made up of selectors and children.
The children of a block are just all the blocks that are defined within.
Compiling the block involves pushing a fresh environment on the stack,
and iterating through the props, compiling each one.
@see Compiler::compileChild()
@param \ScssPhp\ScssPhp\Block $block
@return void

Compile the value of a comment that can have interpolation
@param array $value
@param bool  $pushEnv
@return string

Compile root level comment
@param array $block
@return void

Evaluate selectors
@param array $selectors
@return array

Evaluate selector
@param array $selector
@return array
@phpstan-impure

Evaluate selector part; replaces all the interpolates, stripping quotes
@param array $part
@return array
@phpstan-impure

Collapse selectors
@param array $selectors
@return string

Collapse selectors
@param array $selectors
@return array

Parse down the selector and revert [self] to "&" before a reparsing
@param array       $selectors
@param string|null $replace
@return array

Flatten selector single; joins together .classes and #ids
@param array $single
@return array

Compile selector to string; self(&) should have been replaced by now
@param string|array $selector
@return string

Compile selector part
@param array $piece
@return string

Has selector placeholder?
@param array $selector
@return bool

@param string $name
@return void

@return void

Compile children and return result
@param array                                  $stms
@param \ScssPhp\ScssPhp\Formatter\OutputBlock $out
@param string                                 $traceName
@return array|Number|null

Compile children and throw exception if unexpected at-return
@param array[]                                $stms
@param \ScssPhp\ScssPhp\Formatter\OutputBlock $out
@param \ScssPhp\ScssPhp\Block                 $selfParent
@param string                                 $traceName
@return void
@throws \Exception

evaluate media query : compile internal value keeping the structure unchanged
@param array $queryList
@return array

Compile media query
@param array $queryList
@return string[]

Merge direct relationships between selectors
@param array $selectors1
@param array $selectors2
@return array

Merge media types
@param array $type1
@param array $type2
@return array|null

Compile import; returns true if the value was something that could be imported
@param array                                  $rawPath
@param \ScssPhp\ScssPhp\Formatter\OutputBlock $out
@param bool                                   $once
@return bool

@param array $rawPath
@return string
@throws CompilerException

@param array $path
@return array
@throws CompilerException

Append a root directive like @import or @charset as near as the possible from the source code
(keeping before comments, @import and @charset coming before in the source code)
@param string                                 $line
@param \ScssPhp\ScssPhp\Formatter\OutputBlock $out
@param array                                  $allowed
@return void

Append lines to the current output block:
directly to the block or through a child if necessary
@param \ScssPhp\ScssPhp\Formatter\OutputBlock $out
@param string                                 $type
@param string                                 $line
@return void

Compile child; returns a value to halt execution
@param array                                  $child
@param \ScssPhp\ScssPhp\Formatter\OutputBlock $out
@return array|Number|null

Reduce expression to string
@param array $exp
@param bool $keepParens
@return array

Is truthy?
@param array|Number $value
@return bool

Is the value a direct relationship combinator?
@param string $value
@return bool

Should $value cause its operand to eval
@param array $value
@return bool

Reduce value
@param array|Number $value
@param bool         $inExp
@return array|Number

Function caller
@param string|array $functionReference
@param array        $argValues
@return array|Number

@param array|Number $arg
@param string[]     $allowed_function
@param bool         $inFunction
@return array|Number|false

Reformat fncall arguments to proper css function output
@param array|Number $arg
@return array|Number

Find a function reference
@param string $name
@param bool $safeCopy
@return array

@var string $libName

Normalize name
@param string $name
@return string

Normalize value
@internal
@param array|Number $value
@return array|Number

Add numbers
@param Number $left
@param Number $right
@return Number

Multiply numbers
@param Number $left
@param Number $right
@return Number

Subtract numbers
@param Number $left
@param Number $right
@return Number

Divide numbers
@param Number $left
@param Number $right
@return Number

Mod numbers
@param Number $left
@param Number $right
@return Number

Add strings
@param array $left
@param array $right
@return array|null

Boolean and
@param array|Number $left
@param array|Number $right
@param bool         $shouldEval
@return array|Number|null

Boolean or
@param array|Number $left
@param array|Number $right
@param bool         $shouldEval
@return array|Number|null

Compare colors
@param string $op
@param array  $left
@param array  $right
@return array

Compare color and number
@param string $op
@param array  $left
@param Number  $right
@return array

Compare number and color
@param string $op
@param Number  $left
@param array  $right
@return array

Compare number1 == number2
@param array|Number $left
@param array|Number $right
@return array

Compare number1 != number2
@param array|Number $left
@param array|Number $right
@return array

Compare number1 == number2
@param Number $left
@param Number $right
@return array

Compare number1 != number2
@param Number $left
@param Number $right
@return array

Compare number1 >= number2
@param Number $left
@param Number $right
@return array

Compare number1 > number2
@param Number $left
@param Number $right
@return array

Compare number1 <= number2
@param Number $left
@param Number $right
@return array

Compare number1 < number2
@param Number $left
@param Number $right
@return array

Cast to boolean
@api
@param bool $thing
@return array

Escape non printable chars in strings output as in dart-sass
@internal
@param string $string
@param bool   $inKeyword
@return string

Compiles a primitive value into a CSS property value.
Values in scssphp are typed by being wrapped in arrays, their format is
typically:
    array(type, contents [, additional_contents]*)
The input is expected to be reduced. This function will not work on
things like expressions and variables.
@api
@param array|Number $value
@param bool         $quote
@return string

@param array|Number $value
@return string

Flatten list
@param array $list
@return string
@deprecated

Gets the text of a Sass string
Calling this method on anything else than a SassString is unsupported. Use {@see assertString} first
to ensure that the value is indeed a string.
@param array $value
@return string

Compile string content
@param array $string
@param bool  $quote
@return string

Extract interpolation; it doesn't need to be recursive, compileValue will handle that
@param array $list
@return array

Find the final set of selectors
@param \ScssPhp\ScssPhp\Compiler\Environment $env
@param \ScssPhp\ScssPhp\Block                $selfParent
@return array

Join selectors; looks for & to replace, or append parent before child
@param array $parent
@param array $child
@param bool  $stillHasSelf
@param array $selfParentSelectors
@return array

Multiply media
@param \ScssPhp\ScssPhp\Compiler\Environment $env
@param array                                 $childQueries
@return array

Convert env linked list to stack
@param Environment $env
@return Environment[]
@phpstan-return non-empty-array<Environment>

Convert env stack to singly linked list
@param Environment[] $envs
@return Environment
@phpstan-param  non-empty-array<Environment> $envs

Push environment
@param \ScssPhp\ScssPhp\Block $block
@return \ScssPhp\ScssPhp\Compiler\Environment

Pop environment
@return void

Propagate vars from a just poped Env (used in @each and @for)
@param array         $store
@param null|string[] $excludedVars
@return void

Get store environment
@return \ScssPhp\ScssPhp\Compiler\Environment

Set variable
@param string                                $name
@param mixed                                 $value
@param bool                                  $shadow
@param \ScssPhp\ScssPhp\Compiler\Environment $env
@param mixed                                 $valueUnreduced
@return void

Set existing variable
@param string                                $name
@param mixed                                 $value
@param \ScssPhp\ScssPhp\Compiler\Environment $env
@param mixed                                 $valueUnreduced
@return void

Set raw variable
@param string                                $name
@param mixed                                 $value
@param \ScssPhp\ScssPhp\Compiler\Environment $env
@param mixed                                 $valueUnreduced
@return void

Get variable
@internal
@param string                                $name
@param bool                                  $shouldThrow
@param \ScssPhp\ScssPhp\Compiler\Environment $env
@param bool                                  $unreduced
@return mixed|null

Has variable?
@param string                                $name
@param \ScssPhp\ScssPhp\Compiler\Environment $env
@return bool

Inject variables
@param array $args
@return void

Replaces variables.
@param array<string, mixed> $variables
@return void

Replaces variables.
@param array<string, mixed> $variables
@return void

Set variables
@api
@param array $variables
@return void
@deprecated Use "addVariables" or "replaceVariables" instead.

Unset variable
@api
@param string $name
@return void

Returns list of variables
@api
@return array

Adds to list of parsed files
@internal
@param string|null $path
@return void

Returns list of parsed files
@deprecated
@return array<string, int>

Add import path
@api
@param string|callable $path
@return void

Set import paths
@api
@param string|array<string|callable> $path
@return void

Set number precision
@api
@param int $numberPrecision
@return void
@deprecated The number precision is not configurable anymore. The default is enough for all browsers.

Sets the output style.
@api
@param string $style One of the OutputStyle constants
@return void
@phpstan-param OutputStyle::* $style

Set formatter
@api
@param string $formatterName
@return void
@deprecated Use {@see setOutputStyle} instead.
@phpstan-param class-string<Formatter> $formatterName

Set line number style
@api
@param string $lineNumberStyle
@return void
@deprecated The line number output is not supported anymore. Use source maps instead.

Configures the handling of non-ASCII outputs.
If $charset is `true`, this will include a `@charset` declaration or a
UTF-8 [byte-order mark][] if the stylesheet contains any non-ASCII
characters. Otherwise, it will never include a `@charset` declaration or a
byte-order mark.
[byte-order mark]: https://en.wikipedia.org/wiki/Byte_order_mark#UTF-8
@param bool $charset
@return void

Enable/disable source maps
@api
@param int $sourceMap
@return void
@phpstan-param self::SOURCE_MAP_* $sourceMap

Set source map options
@api
@param array $sourceMapOptions
@phpstan-param  array{sourceRoot?: string, sourceMapFilename?: string|null, sourceMapURL?: string|null, sourceMapWriteTo?: string|null, outputSourceFiles?: bool, sourceMapRootpath?: string, sourceMapBasepath?: string} $sourceMapOptions
@return void

Register function
@api
@param string        $name
@param callable      $callback
@param string[]|null $argumentDeclaration
@return void

Unregister function
@api
@param string $name
@return void

Add feature
@api
@param string $name
@return void
@deprecated Registering additional features is deprecated.

Import file
@param string                                 $path
@param \ScssPhp\ScssPhp\Formatter\OutputBlock $out
@return void

Save the imported files with their resolving path context
@param string|null $currentDirectory
@param string      $path
@param string      $filePath
@return void

Detects whether the import is a CSS import.
For legacy reasons, custom importers are called for those, allowing them
to replace them with an actual Sass import. However this behavior is
deprecated. Custom importers are expected to return null when they receive
a CSS import.
@param string $url
@return bool

Return the file path for an import url if it exists
@internal
@param string      $url
@param string|null $currentDir
@return string|null

@param string $url
@param string $baseDir
@return string|null

@param string[] $paths
@return string|null

@param string $path
@return string[]

@param string $path
@return string[]

@param string $path
@return string|null

@param string|null $path
@return string

Set encoding
@api
@param string|null $encoding
@return void
@deprecated Non-compliant support for other encodings than UTF-8 is deprecated.

Ignore errors?
@api
@param bool $ignoreErrors
@return \ScssPhp\ScssPhp\Compiler
@deprecated Ignoring Sass errors is not longer supported.

Get source position
@api
@return array
@deprecated

Throw error (exception)
@api
@param string $msg Message with optional sprintf()-style vararg parameters
@return never
@throws \ScssPhp\ScssPhp\Exception\CompilerException
@deprecated use "error" and throw the exception in the caller instead.

Build an error (exception)
@internal
@param string                     $msg Message with optional sprintf()-style vararg parameters
@param bool|float|int|string|null ...$args
@return CompilerException

@param string $msg
@return string

@param string $functionName
@param array $ExpectedArgs
@param int $nbActual
@return CompilerException
@deprecated

Beautify call stack for output
@param bool     $all
@param int|null $limit
@return string

Handle import loop
@param string $name
@return void
@throws \Exception

Call SCSS @function
@param CallableBlock|null $func
@param array              $argValues
@return array|Number

Call built-in and registered (PHP) functions
@param string $name
@param callable $function
@param array  $prototype
@param array  $args
@return array|Number|null

Get built-in function
@param string $name Normalized name
@return array

Normalize native function name
@internal
@param string $name
@return string

Check if a function is a native built-in scss function, for css parsing
@internal
@param string $name
@return bool

Sorts keyword arguments
@param string $functionName
@param array|null  $prototypes
@param array  $args
@return array|null

Parses a function prototype to the internal representation of arguments.
The input is an array of strings describing each argument, as supported
in {@see registerFunction}. Argument names don't include the `$`.
The output contains the list of positional argument, with their normalized
name (underscores are replaced by dashes), their original name (to be used
in case of error reporting) and their default value. The output also contains
the normalized name of the rest argument, or null if the function prototype
is not variadic.
@param string[] $prototype
@return array
@phpstan-return array{arguments: list<array{0: string, 1: string, 2: array|Number|null}>, rest_argument: string|null}

Returns the function prototype for the given positional and named arguments.
If no exact match is found, finds the closest approximation. Note that this
doesn't guarantee that $positional and $names are valid for the returned
prototype.
@param array[]               $prototypes
@param int                   $positional
@param array<string, string> $names A set of names, as both keys and values
@return array
@phpstan-param non-empty-list<array{arguments: list<array{0: string, 1: string, 2: array|Number|null}>, rest_argument: string|null}> $prototypes
@phpstan-return array{arguments: list<array{0: string, 1: string, 2: array|Number|null}>, rest_argument: string|null}

Checks whether the argument invocation matches the callable prototype.
The rules are similar to {@see verifyPrototype}. The boolean return value
avoids the overhead of building and catching exceptions when the reason of
not matching the prototype does not need to be known.
@param array                 $prototype
@param int                   $positional
@param array<string, string> $names
@return bool
@phpstan-param array{arguments: list<array{0: string, 1: string, 2: array|Number|null}>, rest_argument: string|null} $prototype

Verifies that the argument invocation is valid for the callable prototype.
@param array                 $prototype
@param int                   $positional
@param array<string, string> $names
@param bool                  $hasSplat
@return void
@throws SassScriptException
@phpstan-param array{arguments: list<array{0: string, 1: string, 2: array|Number|null}>, rest_argument: string|null} $prototype

Evaluates the argument from the invocation.
This returns several things about this invocation:
- the list of positional arguments
- the map of named arguments, indexed by normalized names
- the set of names used in the arguments (that's an array using the normalized names as keys for O(1) access)
- the separator used by the list using the splat operator, if any
- a boolean indicator whether any splat argument (list or map) was used, to support the incomplete error reporting.
@param array[] $args
@param bool    $reduce Whether arguments should be reduced to their value
@return array
@throws SassScriptException
@phpstan-return array{0: list<array|Number>, 1: array<string, array|Number>, 2: array<string, string>, 3: string|null, 4: bool}

@param bool         $reduce
@param array|Number $value
@return array|Number

Apply argument values per definition
@param array[]    $argDef
@param array|null $argValues
@param bool       $storeInEnv
@param bool       $reduce     only used if $storeInEnv = false
@return array<string, array|Number>
@phpstan-param list<array{0: string, 1: array|Number|null, 2: bool}> $argDef
@throws \Exception

Apply argument values per definition.
This method assumes that the arguments are valid for the provided prototype.
The validation with {@see verifyPrototype} must have been run before calling
it.
Arguments are returned as a map from the normalized argument names to the
value. Additional arguments are collected in a sass argument list available
under the name of the rest argument in the result.
Defaults are not applied as they are resolved in a different environment.
@param array                       $prototype
@param array<array|Number>         $positionalArgs
@param array<string, array|Number> $namedArgs
@param string|null                 $splatSeparator
@return array<string, array|Number>
@phpstan-param array{arguments: list<array{0: string, 1: string, 2: array|Number|null}>, rest_argument: string|null} $prototype

Coerce a php value into a scss one
@param mixed $value
@return array|Number

Tries to convert an item to a Sass map
@param Number|array $item
@return array|null

Coerce something to map
@param array|Number $item
@return array|Number

Coerce something to list
@param array|Number $item
@param string       $delim
@param bool         $removeTrailingNull
@return array

Coerce color for expression
@param array|Number $value
@return array|Number

Coerce value to color
@param array|Number $value
@param bool         $inRGBFunction
@return array|null

@param int|Number $value
@param bool       $isAlpha
@return int|mixed

@param mixed     $value
@param int|float $min
@param int|float $max
@param bool      $isInt
@return int|mixed

Coerce value to string
@param array|Number $value
@return array

Assert value is a string
This method deals with internal implementation details of the value
representation where unquoted strings can sometimes be stored under
other types.
The returned value is always using the T_STRING type.
@api
@param array|Number $value
@param string|null  $varName
@return array
@throws SassScriptException

Coerce value to a percentage
@param array|Number $value
@return int|float
@deprecated

Assert value is a map
@api
@param array|Number $value
@param string|null  $varName
@return array
@throws SassScriptException

Assert value is a list
@api
@param array|Number $value
@return array
@throws \Exception

Gets the keywords of an argument list.
Keys in the returned array are normalized names (underscores are replaced with dashes)
without the leading `$`.
Calling this helper with anything that an argument list received for a rest argument
of the function argument declaration is not supported.
@param array|Number $value
@return array<string, array|Number>

Assert value is a color
@api
@param array|Number $value
@param string|null  $varName
@return array
@throws SassScriptException

Assert value is a number
@api
@param array|Number $value
@param string|null  $varName
@return Number
@throws SassScriptException

Assert value is a integer
@api
@param array|Number $value
@param string|null  $varName
@return int
@throws SassScriptException

Extract the  ... / alpha on the last argument of channel arg
in color functions
@param array $args
@return array

Make sure a color's components don't go out of bounds
@param array $c
@return array

Convert RGB to HSL
@internal
@param int $red
@param int $green
@param int $blue
@return array

Hue to RGB helper
@param float $m1
@param float $m2
@param float $h
@return float

Convert HSL to RGB
@internal
@param int|float $hue        H from 0 to 360
@param int|float $saturation S from 0 to 100
@param int|float $lightness  L from 0 to 100
@return array

Convert HWB to RGB
https://www.w3.org/TR/css-color-4/#hwb-to-rgb
@api
@param int|float $hue        H from 0 to 360
@param int|float $whiteness  W from 0 to 100
@param int|float $blackness  B from 0 to 100
@return array

Convert RGB to HWB
@api
@param int $red
@param int $green
@param int $blue
@return array

@param array $args
@param array $kwargs
@param string $funcName
@return array

Helper function for adjust_color, change_color, and scale_color
@param array<array|Number> $args
@param string $operation
@param callable $fn
@return array
@phpstan-param callable(float|int, float|int|null, float|int): (float|int) $fn

@phpstan-var callable(string, float|int, bool=, bool=): (float|int|null) $getParam

@param array $args
@param array $kwargs
@param string $funcName
@return array|null

@param array     $color
@param int       $idx
@param int|float $amount
@return array

@var Number|null

@var Number|null

Gets the value corresponding to that key in the map
@param array        $map
@param Number|array $key
@return Number|array|null

Gets the index corresponding to that key in the map entries
@param array        $map
@param Number|array $key
@return int|null

@param array|Number $keyValue
@return bool

@param array    $map
@param array    $keys
@param callable $modify
@param bool     $addNesting
@return Number|array
@phpstan-param array<Number|array> $keys
@phpstan-param callable(Number|array): (Number|array) $modify

@param array    $map
@param array    $keys
@param callable $modify
@param bool     $addNesting
@return array
@phpstan-param non-empty-array<Number|array> $keys
@phpstan-param callable(Number|array): (Number|array) $modify

Merges 2 Sass maps together
@param array $map1
@param array $map2
@return array

@param array $list1
@param array|Number|null $sep
@return string
@throws CompilerException
@deprecated

@param array|Number $value
@return string

Apply a filter on a string content, only on ascii chars
let extended chars untouched
@param string $stringContent
@param callable $filter
@return string

Workaround IE7's content counter bug.
@param array $args
@return array

@param array|Number $value
@param bool         $force_enclosing_display
@return array

Preprocess selector args
@param array       $arg
@param string|null $varname
@param bool        $allowParent
@return array

Check variable type for getSelectorArg() function
@param array $arg
@param int $maxDepth
@return bool

Postprocess selector to output in right format
@param array $selectors
@return array

Test a $super selector again $sub
@param array $super
@param array $sub
@return bool

Test a part of super selector again a part of sub selector
@param array $superParts
@param array $subParts
@return bool

Append parts of the last selector in the list to the previous, recursively
@param array $selectors
@return array
@throws \ScssPhp\ScssPhp\Exception\CompilerException

Extend/replace in selectors
used by selector-extend and selector-replace that use the same logic
@param array $selectors
@param array $extendee
@param array $extender
@param bool  $replace
@return array

The selector-unify magic as its best
(at least works as expected on test cases)
@param array $compound1
@param array $compound2
@return array

Prepend each selector from $selectors with $parts
@param array $selectors
@param array $parts
@return array

Try to find a matching part in a compound:
- with same html tag name
- with some class or id or something in common
@param array $part
@param array $compound
@return array|false

Merge two part list taking care that
- the html tag is coming first - if any
- the :something are coming last
@param array $parts1
@param array $parts2
@return array

Check the compatibility between two tag names:
if both are defined they should be identical or one has to be '*'
@param string $tag1
@param string $tag2
@return array|false

Find the html tag name in a selector parts list
@param string[] $parts
@return string

## References

**Database Tables (inferred)**
- `the`
- `a`
- `something`
- `variable`
- `using`
- `our`
- `selectors`
- `0`
- `PHP`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Compiler.php`

**Classes**:
- `ScssPhp\ScssPhp\creates`
- `ScssPhp\ScssPhp\also`
- `ScssPhp\ScssPhp\is`
- `ScssPhp\ScssPhp\Compiler`
- `ScssPhp\ScssPhp\or`

**Functions/Methods**:
- `__construct($cacheOptions = null)`
- `getCompileOptions()`
- `setLogger(LoggerInterface $logger)`
- `setErrorOuput($handle)`
- `compile($code, $path = null)`
- `compileString($source, $path = null)`
- `isFreshCachedResult(CachedResult $result)`
- `parserFactory($path)`
- `isSelfExtend($target, $origin)`
- `pushExtends($target, $origin, $block)`
- `makeOutputBlock($type, $selectors = null)`
- `compileRoot(Block $rootBlock)`
- `missingSelectors()`
- `flattenSelectors(OutputBlock $block, $parentKey = null)`
- `glueFunctionSelectors($parts)`
- `matchExtends($selector, &$out, $from = 0, $initial = true)`
- `isPseudoSelector($part, &$matches)`
- `pushOrMergeExtentedSelector(&$out, $extended)`
- `matchExtendsSingle($rawSingle, &$outOrigin, $initial = true)`
- `extractRelationshipFromFragment(array $fragment)`
- `combineSelectorSingle($base, $other)`
- `compileMedia(Block $media)`
- `mediaParent(OutputBlock $scope)`
- `compileDirective($directive, OutputBlock $out)`
- `compileDirectiveName($directiveName)`
- `compileAtRoot(Block $block)`
- `filterScopeWithWithout($scope, $with, $without)`
- `completeScope($scope, $previousScope)`
- `findScopeSelectors($scope, $depth)`
- `compileWith($withCondition)`
- `filterWithWithout($envs, $with, $without)`
- `isWith($block, $with, $without)`
- `testWithWithout($what, $with, $without)`
- `compileKeyframeBlock(Block $block, $selectors)`
- `compileNestedPropertiesBlock(Block $block, OutputBlock $out)`
- `compileNestedBlock(Block $block, $selectors)`
- `compileBlock(Block $block)`
- `compileCommentValue($value, $pushEnv = false)`
- `compileComment($block)`
- `evalSelectors($selectors)`
- `evalSelector($selector)`
- `evalSelectorPart($part)`
- `collapseSelectors($selectors)`
- `collapseSelectorsAsList($selectors)`
- `replaceSelfSelector($selectors, $replace = null)`
- `flattenSelectorSingle($single)`
- `compileSelector($selector)`
- `compileSelectorPart($piece)`
- `hasSelectorPlaceholder($selector)`
- `pushCallStack($name = '')`
- `popCallStack()`
- `compileChildren($stms, OutputBlock $out, $traceName = '')`
- `compileChildrenNoReturn($stms, OutputBlock $out, $selfParent = null, $traceName = '')`
- `evaluateMediaQuery($queryList)`
- `compileMediaQuery($queryList)`
- `mergeDirectRelationships($selectors1, $selectors2)`
- `mergeMediaTypes($type1, $type2)`
- `compileImport($rawPath, OutputBlock $out, $once = false)`
- `compileImportPath($rawPath)`
- `escapeImportPathString($path)`
- `appendRootDirective($line, $out, $allowed = [Type::T_COMMENT])`
- `appendOutputLine(OutputBlock $out, $type, $line)`
- `compileChild($child, OutputBlock $out)`
- `expToString($exp, $keepParens = false)`
- `isTruthy($value)`
- `isImmediateRelationshipCombinator($value)`
- `shouldEval($value)`
- `reduce($value, $inExp = false)`
- `fncall($functionReference, $argValues)`
- `cssValidArg($arg, $allowed_function = [], $inFunction = false)`
- `stringifyFncallArgs($arg)`
- `getFunctionReference($name, $safeCopy = false)`
- `if($func = $this->get(static::$namespaces['function'] . $name, false)`
- `list($f, $prototype)`
- `normalizeName($name)`
- `normalizeValue($value)`
- `opAddNumberNumber(Number $left, Number $right)`
- `opMulNumberNumber(Number $left, Number $right)`
- `opSubNumberNumber(Number $left, Number $right)`
- `opDivNumberNumber(Number $left, Number $right)`
- `opModNumberNumber(Number $left, Number $right)`
- `opAdd($left, $right)`
- `opAnd($left, $right, $shouldEval)`
- `opOr($left, $right, $shouldEval)`
- `opColorColor($op, $left, $right)`
- `opColorNumber($op, $left, Number $right)`
- `opNumberColor($op, Number $left, $right)`
- `opEq($left, $right)`
- `opNeq($left, $right)`
- `opEqNumberNumber(Number $left, Number $right)`
- `opNeqNumberNumber(Number $left, Number $right)`
- `opGteNumberNumber(Number $left, Number $right)`
- `opGtNumberNumber(Number $left, Number $right)`
- `opLteNumberNumber(Number $left, Number $right)`
- `opLtNumberNumber(Number $left, Number $right)`
- `toBool($thing)`
- `escapeNonPrintableChars($string, $inKeyword = false)`
- `compileValue($value, $quote = true)`
- `compileDebugValue($value)`
- `flattenList($list)`
- `getStringText(array $value)`
- `compileStringContent($string, $quote = true)`
- `extractInterpolation($list)`
- `multiplySelectors(Environment $env, $selfParent = null)`
- `joinSelectors($parent, $child, &$stillHasSelf, $selfParentSelectors = null)`
- `multiplyMedia(Environment $env = null, $childQueries = null)`
- `compactEnv(Environment $env)`
- `extractEnv($envs)`
- `pushEnv(Block $block = null)`
- `popEnv()`
- `backPropagateEnv($store, $excludedVars = null)`
- `getStoreEnv()`
- `set($name, $value, $shadow = false, Environment $env = null, $valueUnreduced = null)`
- `setExisting($name, $value, Environment $env, $valueUnreduced = null)`
- `setRaw($name, $value, Environment $env, $valueUnreduced = null)`
- `get($name, $shouldThrow = true, Environment $env = null, $unreduced = false)`
- `has($name, Environment $env = null)`
- `injectVariables(array $args)`
- `replaceVariables(array $variables)`
- `addVariables(array $variables)`
- `setVariables(array $variables)`
- `unsetVariable($name)`
- `getVariables()`
- `addParsedFile($path)`
- `getParsedFiles()`
- `addImportPath($path)`
- `setImportPaths($path)`
- `setNumberPrecision($numberPrecision)`
- `setOutputStyle($style)`
- `setFormatter($formatterName)`
- `setLineNumberStyle($lineNumberStyle)`
- `setCharset($charset)`
- `setSourceMap($sourceMap)`
- `setSourceMapOptions($sourceMapOptions)`
- `registerFunction($name, $callback, $argumentDeclaration = null)`
- `unregisterFunction($name)`
- `addFeature($name)`
- `importFile($path, OutputBlock $out)`
- `registerImport($currentDirectory, $path, $filePath)`
- `isCssImport($url)`
- `findImport($url, $currentDir = null)`
- `resolveImportPath($url, $baseDir)`
- `checkImportPathConflicts(array $paths)`
- `tryImportPathWithExtensions($path)`
- `tryImportPath($path)`
- `tryImportPathAsDirectory($path)`
- `getPrettyPath($path)`
- `setEncoding($encoding)`
- `setIgnoreErrors($ignoreErrors)`
- `getSourcePosition()`
- `throwError($msg)`
- `error($msg, ...$args)`
- `addLocationToMessage($msg)`
- `errorArgsNumber($functionName, $ExpectedArgs, $nbActual)`
- `callStackMessage($all = false, $limit = null)`
- `handleImportLoop($name)`
- `callScssFunction($func, $argValues)`
- `callNativeFunction($name, $function, $prototype, $args)`
- `getBuiltinFunction($name)`
- `normalizeNativeFunctionName($name)`
- `isNativeFunction($name)`
- `sortNativeFunctionArgs($functionName, $prototypes, $args)`
- `parseFunctionPrototype(array $prototype)`
- `selectFunctionPrototype(array $prototypes, $positional, array $names)`
- `checkPrototypeMatches(array $prototype, $positional, array $names)`
- `verifyPrototype(array $prototype, $positional, array $names, $hasSplat)`
- `evaluateArguments(array $args, $reduce = true)`
- `maybeReduce($reduce, $value)`
- `applyArguments($argDef, $argValues, $storeInEnv = true, $reduce = true)`
- `applyArgumentsToDeclaration(array $prototype, array $positionalArgs, array $namedArgs, $splatSeparator)`
- `coerceValue($value)`
- `tryMap($item)`
- `coerceMap($item)`
- `coerceList($item, $delim = ',', $removeTrailingNull = false)`
- `coerceForExpression($value)`
- `coerceColor($value, $inRGBFunction = false)`
- `compileRGBAValue($value, $isAlpha = false)`
- `compileColorPartValue($value, $min, $max, $isInt = true)`
- `coerceString($value)`
- `assertString($value, $varName = null)`
- `if($value[0] === Type::T_FUNCTION)`
- `coercePercent($value)`
- `assertMap($value, $varName = null)`
- `assertList($value)`
- `getArgumentListKeywords($value)`
- `assertColor($value, $varName = null)`
- `assertNumber($value, $varName = null)`
- `assertInteger($value, $varName = null)`
- `extractSlashAlphaInColorFunction($args)`
- `fixColor($c)`
- `toHSL($red, $green, $blue)`
- `hueToRGB($m1, $m2, $h)`
- `toRGB($hue, $saturation, $lightness)`
- `HWBtoRGB($hue, $whiteness, $blackness)`
- `RGBtoHWB($red, $green, $blue)`
- `libCall($args)`
- `libGetFunction($args)`
- `libIf($args)`
- `libIndex($args)`
- `libRgb($args, $kwargs, $funcName = 'rgb')`
- `libRgba($args, $kwargs)`
- `alterColor(array $args, $operation, $fn)`
- `libAdjustColor($args)`
- `libChangeColor($args)`
- `libScaleColor($args)`
- `libIeHexStr($args)`
- `libRed($args)`
- `libGreen($args)`
- `libBlue($args)`
- `libAlpha($args)`
- `libOpacity($args)`
- `libMix($args)`
- `libHsl($args, $kwargs, $funcName = 'hsl')`
- `foreach($args as $arg)`
- `libHsla($args, $kwargs)`
- `libHue($args)`
- `libSaturation($args)`
- `libLightness($args)`
- `libHwb($args, $kwargs, $funcName = 'hwb')`
- `libWhiteness($args, $kwargs, $funcName = 'whiteness')`
- `libBlackness($args, $kwargs, $funcName = 'blackness')`
- `adjustHsl($color, $idx, $amount)`
- `libAdjustHue($args)`
- `libLighten($args)`
- `libDarken($args)`
- `libSaturate($args)`
- `libDesaturate($args)`
- `libGrayscale($args)`
- `libComplement($args)`
- `libInvert($args)`
- `libOpacify($args)`
- `libFadeIn($args)`
- `libTransparentize($args)`
- `libFadeOut($args)`
- `libUnquote($args)`
- `libQuote($args)`
- `libPercentage($args)`
- `libRound($args)`
- `libFloor($args)`
- `libCeil($args)`
- `libAbs($args)`
- `libMin($args)`
- `libMax($args)`
- `libLength($args)`
- `libListSeparator($args)`
- `libNth($args)`
- `libSetNth($args)`
- `libMapGet($args)`
- `mapGet(array $map, $key)`
- `mapGetEntryIndex(array $map, $key)`
- `libMapKeys($args)`
- `libMapValues($args)`
- `libMapRemove($args)`
- `libMapHasKey($args)`
- `mapHasKey(array $map, $keyValue)`
- `libMapMerge($args)`
- `modifyMap(array $map, array $keys, callable $modify, $addNesting = true)`
- `modifyNestedMap(array $map, array $keys, callable $modify, $addNesting)`
- `mergeMaps(array $map1, array $map2)`
- `libKeywords($args)`
- `libIsBracketed($args)`
- `listSeparatorForJoin($list1, $sep)`
- `libJoin($args)`
- `libAppend($args)`
- `libZip($args)`
- `libTypeOf($args)`
- `getTypeOf($value)`
- `libUnit($args)`
- `libUnitless($args)`
- `libComparable($args)`
- `libStrIndex($args)`
- `libStrInsert($args)`
- `libStrLength($args)`
- `libStrSlice($args)`
- `libToLowerCase($args)`
- `libToUpperCase($args)`
- `stringTransformAsciiOnly($stringContent, $filter)`
- `libFeatureExists($args)`
- `libFunctionExists($args)`
- `libGlobalVariableExists($args)`
- `libMixinExists($args)`
- `libVariableExists($args)`
- `libCounter($args)`
- `libRandom($args)`
- `libUniqueId()`
- `inspectFormatValue($value, $force_enclosing_display = false)`
- `libInspect($args)`
- `getSelectorArg($arg, $varname = null, $allowParent = false)`
- `checkSelectorArgType($arg, $maxDepth = 2)`
- `formatOutputSelector($selectors)`
- `libIsSuperselector($args)`
- `isSuperSelector($super, $sub)`
- `isSuperPart($superParts, $subParts)`
- `libSelectorAppend($args)`
- `selectorAppend($selectors)`
- `libSelectorExtend($args)`
- `libSelectorReplace($args)`
- `extendOrReplaceSelectors($selectors, $extendee, $extender, $replace = false)`
- `libSelectorNest($args)`
- `libSelectorParse($args)`
- `libSelectorUnify($args)`
- `unifyCompoundSelectors($compound1, $compound2)`
- `prependSelectors($selectors, $parts)`
- `matchPartInCompound($part, $compound)`
- `mergeParts($parts1, $parts2)`
- `checkCompatibleTags($tag1, $tag2)`
- `findTagName($parts)`
- `libSimpleSelectors($args)`
- `libScssphpGlob($args)`

