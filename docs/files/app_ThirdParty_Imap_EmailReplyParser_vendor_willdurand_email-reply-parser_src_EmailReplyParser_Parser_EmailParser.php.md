# app\ThirdParty\Imap\EmailReplyParser\vendor\willdurand\email-reply-parser\src\EmailReplyParser\Parser\EmailParser.php

- Path: `app\ThirdParty\Imap\EmailReplyParser\vendor\willdurand\email-reply-parser\src\EmailReplyParser\Parser\EmailParser.php`
- Type: PHP
- Size: 7507 bytes

## Summary (from docblocks)

This file is part of the EmailReplyParser package.
For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
@license    MIT License

@author William Durand <william.durand1@gmail.com>

Regex to match signatures
@var string

@var string[]

@var FragmentDTO[]

Parse a text which represents an email and splits it into fragments.
@param string $text A text.
@return Email

@return string[]

@param string[] $quoteHeadersRegex
@return EmailParser

@return string
@since 2.7.0

@param string $signatureRegex
@return EmailParser
@since 2.7.0

@param FragmentDTO[] $fragmentDTOs
@return Email

@param string $line
@return bool

@param FragmentDTO $fragment
@param string  $line
@param boolean $isQuoted
@return bool

## References

**Database Tables (inferred)**
- `my`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\EmailReplyParser\vendor\willdurand\email-reply-parser\src\EmailReplyParser\Parser\EmailParser.php`

**Classes**:
- `EmailReplyParser\Parser\EmailParser`

**Functions/Methods**:
- `parse($text)`
- `getQuoteHeadersRegex()`
- `setQuoteHeadersRegex(array $quoteHeadersRegex)`
- `getSignatureRegex()`
- `setSignatureRegex($signatureRegex)`
- `createEmail(array $fragmentDTOs)`
- `isQuoteHeader($line)`
- `isSignature($line)`
- `isQuote($line)`
- `isEmpty(FragmentDTO $fragment)`
- `isFragmentLine(FragmentDTO $fragment, $line, $isQuoted)`
- `addFragment(FragmentDTO $fragment)`

