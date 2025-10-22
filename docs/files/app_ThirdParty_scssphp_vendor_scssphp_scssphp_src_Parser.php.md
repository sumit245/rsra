# app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Parser.php

- Path: `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Parser.php`
- Type: PHP
- Size: 114591 bytes

## Summary (from docblocks)

SCSSPHP
@copyright 2012-2020 Leaf Corcoran
@license http://opensource.org/licenses/MIT MIT
@link http://scssphp.github.io/scssphp

Parser
@author Leaf Corcoran <leafot@gmail.com>
@internal

@var array<string, int>

@var string

@var string

@var string

@var Cache|null

@var array<int, int>

The current offset in the buffer
@var int

@var Block|null

@var bool

@var bool

@var bool

@var string

@var string|null

@var LoggerInterface

Constructor
@api
@param string|null          $sourceName
@param int                  $sourceIndex
@param string|null          $encoding
@param Cache|null           $cache
@param bool                 $cssOnly
@param LoggerInterface|null $logger

Get source file name
@api
@return string

Throw parser error
@api
@param string $msg
@phpstan-return never-return
@throws ParserException
@deprecated use "parseError" and throw the exception in the caller instead.

Creates a parser error
@api
@param string $msg
@return ParserException

Parser buffer
@api
@param string $buffer
@return Block

Parse a value or value list
@api
@param string       $buffer
@param string|array $out
@return bool

Parse a selector or selector list
@api
@param string       $buffer
@param string|array $out
@param bool         $shouldValidate
@return bool

Parse a media Query
@api
@param string $buffer
@param array  $out
@return bool

Parse a single chunk off the head of the buffer and append it to the
current parse environment.
Returns false when the buffer is empty, or when there is an error.
This function is called repeatedly until the entire document is
parsed.
This parser is most similar to a recursive descent parser. Single
functions represent discrete grammatical rules for the language, and
they are able to capture the text that represents those rules.
Consider the function Compiler::keyword(). (All parse functions are
structured the same.)
The function takes a single reference argument. When calling the
function it will attempt to match a keyword on the head of the buffer.
If it is successful, it will place the keyword in the referenced
argument, advance the position in the buffer, and return true. If it
fails then it won't advance the buffer and it will return false.
All of these parse functions are powered by Compiler::match(), which behaves
the same way, but takes a literal regular expression. Sometimes it is
more convenient to use match instead of creating a new function.
Because of the format of the functions, to parse an entire string of
grammatical rules, you can chain them together using &&.
But, if some of the rules in the chain succeed before one fails, then
the buffer position will be left at an invalid state. In order to
avoid this, Compiler::seek() is used to remember and set buffer positions.
Before parsing a chain, use $s = $this->count to remember the current
position into $s. Then if a chain fails, use $this->seek($s) to
go back where we started.
@return bool

Push block onto parse tree
@param array|null $selectors
@param int        $pos
@return Block

@param Block $b
@param int   $pos
@return void

Push special (named) block onto parse tree
@deprecated
@param string  $type
@param int     $pos
@return Block

Pop scope and return last block
@return Block
@throws \Exception

Peek input stream
@param string $regex
@param array  $out
@param int    $from
@return int

Seek to position in input stream (or return current position in input stream)
@param int $where
@return void

Assert a parsed part is plain CSS Valid
@param array|false $parsed
@param int         $startPos
@return array
@throws ParserException

Check a parsed element is plain CSS Valid
@param array $parsed
@param bool  $allowExpression
@return array|false

Match string looking for either ending delim, escape, or string interpolation
{@internal This is a workaround for preg_match's 250K string match limit. }}
@param array  $m     Matches (passed by reference)
@param string $delim Delimiter
@return bool True if match; false otherwise
@phpstan-impure

Try to match something on head of buffer
@param string $regex
@param array  $out
@param bool   $eatWhitespace
@return bool
@phpstan-impure

Match a single string
@param string $char
@param bool   $eatWhitespace
@return bool
@phpstan-impure

Match literal string
@param string $what
@param int    $len
@param bool   $eatWhitespace
@return bool
@phpstan-impure

Match some whitespace
@return bool
@phpstan-impure

Append comment to current block
@param array $comment
@return void

Append statement to current block
@param array|null $statement
@param int        $pos
@return void

Returns last child was appended
@return array|null

Parse media query list
@param array $out
@return bool

Parse media query
@param array $out
@return bool

Parse supports query
@param array $out
@return bool

Parse media expression
@param array $out
@return bool

Parse argument values
@param array $out
@return bool

Parse argument value
@param array $out
@return bool

Check if a generic directive is known to be able to allow almost any syntax or not
@param mixed $directiveName
@return bool

Parse directive value list that considers $vars as keyword
@param array        $out
@param string|false $endChar
@return bool
@phpstan-impure

Parse comma separated value list
@param array $out
@return bool

Parse a function call, where externals () are part of the call
and not of the value list
@param array       $out
@param bool        $mandatoryEnclos
@param null|string $charAfter
@param null|bool   $eatWhiteSp
@return bool

Parse space separated value list
@param array $out
@return bool

Parse generic list
@param array  $out
@param string $parseItem The name of the method used to parse items
@param string $delim
@param bool   $flatten
@return bool

@var array|Number|null $value

@var string $word

@var array|Number|null $nextValue

Parse expression
@param array $out
@param bool  $listOnly
@param bool  $lookForExp
@return bool
@phpstan-impure

Parse expression specifically checking for lists in parenthesis or brackets
@param array    $out
@param int      $s
@param string   $closingParen
@param string[] $allowedTypes
@return bool
@phpstan-param array<Type::*> $allowedTypes

Parse left-hand side of subexpression
@param array $lhs
@param int   $minP
@return array

Parse value
@param array $out
@return bool

Parse parenthesized value
@param array $out
@return bool

Parse "progid:"
@param array $out
@return bool

Parse function call
@param string $name
@param array  $func
@return bool

Parse function call argument list
@param array $out
@return bool

Parse mixin/function definition  argument list
@param array $out
@return bool

Parse map
@param array $out
@return bool

Parse color
@param array $out
@return bool

Parse number with unit
@param array $unit
@return bool

Parse string
@param array $out
@param bool  $keepDelimWithInterpolation
@return bool

@param string $out
@param bool   $inKeywords
@return bool

Parse keyword or interpolation
@param array $out
@param bool  $restricted
@return bool

Parse an unbounded string stopped by $end
@param string $end
@param array  $out
@param string $nestOpen
@param string $nestClose
@param bool   $rtrim
@param string $disallow
@return bool

Parser interpolation
@param string|array $out
@param bool         $lookWhite save information about whitespace before and after
@return bool

Parse property name (as an array of parts or a string)
@param array $out
@return bool

Parse custom property name (as an array of parts or a string)
@param array $out
@return bool

Parse comma separated selector list
@param array $out
@param string|bool $subSelector
@return bool

Parse whitespace separated selector list
@param array          $out
@param string|bool $subSelector
@return bool

parsing escaped chars in selectors:
- escaped single chars are kept escaped in the selector but in a normalized form
  (if not in 0-9a-f range as this would be ambigous)
- other escaped sequences (multibyte chars or 0-9a-f) are kept in their initial escaped form,
  normalized to lowercase
TODO: this is a fallback solution. Ideally escaped chars in selectors should be encoded as the genuine chars,
and escaping added when printing in the Compiler, where/if it's mandatory
- but this require a better formal selector representation instead of the array we have now
@param string $out
@param bool   $keepEscapedNumber
@return bool

Parse the parts that make up a selector
{@internal
    div[yes=no]#something.hello.world:nth-child(-2n+1)%placeholder
}}
@param array          $out
@param string|bool $subSelector
@return bool

Parse a variable
@param array $out
@return bool

Parse a keyword
@param string $word
@param bool   $eatWhitespace
@param bool   $inSelector
@return bool

Parse a keyword that should not start with a number
@param string $word
@param bool   $eatWhitespace
@param bool   $inSelector
@return bool

Parse a placeholder
@param string|array $placeholder
@return bool

Parse a url
@param array $out
@return bool

Consume an end of statement delimiter
@param bool $eatWhitespace
@return bool

Strip assignment flag from the list
@param array $value
@return string[]

Strip optional flag from selector list
@param array $selectors
@return bool

Turn list of length 1 into value type
@param array $value
@return array

Quote regular expression
@param string $what
@return string

Extract line numbers from buffer
@param string $buffer
@return void

Get source line number and column (given character position in the buffer)
@param int $pos
@return array
@phpstan-return array{int, int}

Save internal encoding of mbstring
When mbstring.func_overload is used to replace the standard PHP string functions,
this method configures the internal encoding to a single-byte one so that the
behavior matches the normal behavior of PHP string functions while using the parser.
The existing internal encoding is saved and will be restored when calling {@see restoreEncoding}.
If mbstring.func_overload is not used (or does not override string functions), this method is a no-op.
@return void

Restore internal encoding
@return void

## References

**Database Tables (inferred)**
- `the`
- `selector`
- `buffer`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\scssphp\vendor\scssphp\scssphp\src\Parser.php`

**Classes**:
- `ScssPhp\ScssPhp\Parser`

**Functions/Methods**:
- `__construct($sourceName, $sourceIndex = 0, $encoding = 'utf-8', Cache $cache = null, $cssOnly = false, LoggerInterface $logger = null)`
- `getSourceName()`
- `throwParseError($msg = 'parse error')`
- `parseError($msg = 'parse error')`
- `parse($buffer)`
- `parseValue($buffer, &$out)`
- `parseSelector($buffer, &$out, $shouldValidate = true)`
- `parseMediaQueryList($buffer, &$out)`
- `parseChunk()`
- `pushBlock($selectors, $pos = 0)`
- `registerPushedBlock(Block $b, $pos)`
- `pushSpecialBlock($type, $pos)`
- `popBlock()`
- `peek($regex, &$out, $from = null)`
- `seek($where)`
- `assertPlainCssValid($parsed, $startPos = null)`
- `isPlainCssValidElement($parsed, $allowExpression = false)`
- `matchString(&$m, $delim)`
- `match($regex, &$out, $eatWhitespace = null)`
- `matchChar($char, $eatWhitespace = null)`
- `literal($what, $len, $eatWhitespace = null)`
- `whitespace()`
- `appendComment($comment)`
- `append($statement, $pos = null)`
- `last()`
- `mediaQueryList(&$out)`
- `mediaQuery(&$out)`
- `supportsQuery(&$out)`
- `mediaExpression(&$out)`
- `argValues(&$out)`
- `argValue(&$out)`
- `isKnownGenericDirective($directiveName)`
- `directiveValue(&$out, $endChar = false)`
- `valueList(&$out)`
- `functionCallArgumentsList(&$out, $mandatoryEnclos = true, $charAfter = null, $eatWhiteSp = null)`
- `spaceList(&$out)`
- `genericList(&$out, $parseItem, $delim = '', $flatten = true)`
- `expression(&$out, $listOnly = false, $lookForExp = true)`
- `enclosedExpression(&$out, $s, $closingParen = ')`
- `expHelper($lhs, $minP)`
- `value(&$out)`
- `parenValue(&$out)`
- `progid(&$out)`
- `func($name, &$func)`
- `argumentList(&$out)`
- `argumentDef(&$out)`
- `map(&$out)`
- `color(&$out)`
- `unit(&$unit)`
- `string(&$out, $keepDelimWithInterpolation = false)`
- `matchEscapeCharacter(&$out, $inKeywords = false)`
- `mixedKeyword(&$out, $restricted = false)`
- `openString($end, &$out, $nestOpen = null, $nestClose = null, $rtrim = true, $disallow = null)`
- `interpolation(&$out, $lookWhite = true)`
- `propertyName(&$out)`
- `customProperty(&$out)`
- `selectors(&$out, $subSelector = false)`
- `selector(&$out, $subSelector = false)`
- `matchEscapeCharacterInSelector(&$out, $keepEscapedNumber = false)`
- `selectorSingle(&$out, $subSelector = false)`
- `variable(&$out)`
- `keyword(&$word, $eatWhitespace = null, $inSelector = false)`
- `restrictedKeyword(&$word, $eatWhitespace = null, $inSelector = false)`
- `placeholder(&$placeholder)`
- `url(&$out)`
- `end($eatWhitespace = null)`
- `stripAssignmentFlags(&$value)`
- `stripOptionalFlag(&$selectors)`
- `flattenList($value)`
- `pregQuote($what)`
- `extractLineNumbers($buffer)`
- `getSourcePosition($pos)`
- `saveEncoding()`
- `restoreEncoding()`

