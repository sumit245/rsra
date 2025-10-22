# system\Helpers\text_helper.php

- Path: `system\Helpers\text_helper.php`
- Type: PHP
- Size: 20765 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Word Limiter
Limits a string to X number of words.
@param string $endChar the end character. Usually an ellipsis

Character Limiter
Limits the string based on the character count.  Preserves complete words
so the character count may not be exactly as specified.
@param string $endChar the end character. Usually an ellipsis

High ASCII to Entities
Converts high ASCII text and MS Word special characters to character entities

Entities to ASCII
Converts character entities back to ASCII

Word Censoring Function
Supply a string and an array of disallowed words and any
matched words will be converted to #### or to the replacement
word you've submitted.
@param string $str         the text string
@param array  $censored    the array of censored words
@param string $replacement the optional replacement value

Code Highlighter
Colorizes code strings
@param string $str the text string

Phrase Highlighter
Highlights a phrase within a text string
@param string $str      the text string
@param string $phrase   the phrase you'd like to highlight
@param string $tagOpen  the opening tag to precede the phrase with
@param string $tagClose the closing tag to end the phrase with

Convert Accented Foreign Characters to ASCII
@param string $str Input string

Word Wrap
Wraps text at the specified character. Maintains the integrity of words.
Anything placed between {unwrap}{/unwrap} will not be word wrapped, nor
will URLs.
@param string $str     the text string
@param int    $charlim = 76    the number of characters to wrap at

Ellipsize String
This function will strip tags from a string, split it at its max_length and ellipsize
@param string $str       String to ellipsize
@param int    $maxLength Max length of string
@param mixed  $position  int (1|0) or float, .5, .2, etc for position to split
@param string $ellipsis  ellipsis ; Default '...'
@return string Ellipsized string

Strip Slashes
Removes slashes contained in a string or in an array
@param mixed $str string or array
@return mixed string or array

Strip Quotes
Removes single and double quotes from a string

Quotes to Entities
Converts single and double quotes to entities

Reduce Double Slashes
Converts double slashes in a string to a single slash,
except those found in http://
http://www.some-site.com//index.php
becomes:
http://www.some-site.com/index.php

Reduce Multiples
Reduces multiple instances of a particular character.  Example:
Fred, Bill,, Joe, Jimmy
becomes:
Fred, Bill, Joe, Jimmy
@param string $character the character you wish to reduce
@param bool   $trim      TRUE/FALSE - whether to trim the character from the beginning/end

Create a Random String
Useful for generating passwords or hashes.
@param string $type Type of random string.  basic, alpha, alnum, numeric, nozero, md5, sha1, and crypto
@param int    $len  Number of characters

Add's _1 to a string or increment the ending number to allow _2, _3, etc
@param string $str       Required
@param string $separator What should the duplicate number be appended with
@param int    $first     Which number should be used for the first dupe increment

Alternator
Allows strings to be alternated. See docs...
@param string ...$args (as many parameters as needed)

Excerpt.
Allows to extract a piece of text surrounding a word or phrase.
@param string $text     String to search the phrase
@param string $phrase   Phrase that will be searched for.
@param int    $radius   The amount of characters returned around the phrase.
@param string $ellipsis Ending that will be appended
@return string
If no $phrase is passed, will generate an excerpt of $radius characters
from the beginning of $text.

## References

**Database Tables (inferred)**
- `it`
- `a`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Helpers\text_helper.php`

**Functions/Methods**:
- `word_limiter(string $str, int $limit = 100, string $endChar = '&#8230;')`
- `character_limiter(string $str, int $n = 500, string $endChar = '&#8230;')`
- `ascii_to_entities(string $str)`
- `entities_to_ascii(string $str, bool $all = true)`
- `word_censor(string $str, array $censored, string $replacement = '')`
- `highlight_code(string $str)`
- `highlight_phrase(string $str, string $phrase, string $tagOpen = '<mark>', string $tagClose = '</mark>')`
- `convert_accented_characters(string $str)`
- `word_wrap(string $str, int $charlim = 76)`
- `ellipsize(string $str, int $maxLength, $position = 1, string $ellipsis = '&hellip;')`
- `strip_slashes($str)`
- `strip_quotes(string $str)`
- `quotes_to_entities(string $str)`
- `reduce_double_slashes(string $str)`
- `reduce_multiples(string $str, string $character = ',', bool $trim = false)`
- `random_string(string $type = 'alnum', int $len = 8)`
- `increment_string(string $str, string $separator = '_', int $first = 1)`
- `alternator(...$args)`
- `excerpt(string $text, ?string $phrase = null, int $radius = 100, string $ellipsis = '...')`

