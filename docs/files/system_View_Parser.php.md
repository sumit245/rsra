# system\View\Parser.php

- Path: `system\View\Parser.php`
- Type: PHP
- Size: 22476 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class for parsing pseudo-vars

Left delimiter character for pseudo vars
@var string

Right delimiter character for pseudo vars
@var string

Left delimiter characters for conditionals

Right delimiter characters for conditionals

Stores extracted noparse blocks.
@var array

Stores any plugins registered at run-time.
@var array

Stores the context for each data element
when set by `setData` so the context is respected.
@var array

Constructor
@param string          $viewPath
@param mixed           $loader
@param bool            $debug
@param LoggerInterface $logger

Parse a template
Parses pseudo-variables contained in the specified template view,
replacing them with any data that has already been set.
@param array $options
@param bool  $saveData

Parse a String
Parses pseudo-variables contained in the specified string,
replacing them with any data that has already been set.
@param array $options
@param bool  $saveData

Sets several pieces of view data at once.
In the Parser, we need to store the context here
so that the variable is correctly handled within the
parsing itself, and contexts (including raw) are respected.
@param string $context The context to escape it for: html, css, js, url, raw
                       If 'raw', no escaping will happen

Parse a template
Parses pseudo-variables contained in the specified template,
replacing them with the data in the second param
@param array $options Future options

Parse a single key/value, extracting it

Parse a tag pair
Parses tag pairs: {some_tag} string... {/some_tag}

Removes any comments from the file. Comments are wrapped in {# #} symbols:
     {# This is a comment #}

Extracts noparse blocks, inserting a hash in its place so that
those blocks of the page are not touched by parsing.

Re-inserts the noparsed contents back into the template.

Parses any conditionals in the code, removing blocks that don't
pass so we don't try to parse it later.
Valid conditionals:
 - if
 - elseif
 - else

Over-ride the substitution field delimiters.
@param string $leftDelimiter
@param string $rightDelimiter

Over-ride the substitution conditional delimiters.
@param string $leftDelimiter
@param string $rightDelimiter

Handles replacing a pseudo-variable with the actual content. Will double-check
for escaping brackets.
@param mixed  $pattern
@param string $content
@param string $template

Callback used during parse() to apply any filters to the value.

Checks the placeholder the view provided to see if we need to provide any autoescaping.
@return false|string

Given a set of filters, will apply each of the filters in turn
to $replace, and return the modified string.

Scans the template for any parser plugins, and attempts to execute them.
Plugins are delimited by {+ ... +}
@return string

Match tag pairs
Each match is an array:
  $matches[0] = entire matched string
  $matches[1] = all parameters string in opening tag
  $matches[2] = content between the tags to send to the plugin.

Makes a new plugin available during the parsing of the template.
@return $this

Removes a plugin from the available plugins.
@return $this

Converts an object to an array, respecting any
toArray() methods on an object.
@param mixed $value
@return mixed

## References

**Database Tables (inferred)**
- `CI3`
- `the`
- `setData`

## Symbols

# Symbols

**Files documented**: 1

## `system\View\Parser.php`

**Classes**:
- `CodeIgniter\View\Parser extends View`

**Functions/Methods**:
- `__construct(ViewConfig $config, ?string $viewPath = null, $loader = null, ?bool $debug = null, ?LoggerInterface $logger = null)`
- `render(string $view, ?array $options = null, ?bool $saveData = null)`
- `renderString(string $template, ?array $options = null, ?bool $saveData = null)`
- `setData(array $data = [], ?string $context = null)`
- `parse(string $template, array $data = [], ?array $options = null)`
- `parseSingle(string $key, string $val)`
- `parsePair(string $variable, array $data, string $template)`
- `parseComments(string $template)`
- `extractNoparse(string $template)`
- `insertNoparse(string $template)`
- `parseConditionals(string $template)`
- `setDelimiters($leftDelimiter = '{', $rightDelimiter = '}')`
- `setConditionalDelimiters($leftDelimiter = '{', $rightDelimiter = '}')`
- `replaceSingle($pattern, $content, $template, bool $escape = false)`
- `prepareReplacement(array $matches, string $replace, bool $escape = true)`
- `shouldAddEscaping(string $key)`
- `applyFilters(string $replace, array $filters)`
- `parsePlugins(string $template)`
- `addPlugin(string $alias, callable $callback, bool $isPair = false)`
- `removePlugin(string $alias)`
- `objectToArray($value)`

