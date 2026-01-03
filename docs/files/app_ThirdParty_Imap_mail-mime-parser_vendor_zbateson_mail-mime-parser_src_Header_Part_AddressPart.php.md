# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\AddressPart.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\AddressPart.php`
- Type: PHP
- Size: 1402 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Holds a single address or name/address pair.

The name part of the address may be mime-encoded, but the email address part
can't be mime-encoded.  Any whitespace in the email address part is stripped
out.
A convenience method, getEmail, is provided for clarity -- but getValue
returns the email address as well.

@author Zaahid Bateson

Performs mime-decoding and initializes the address' name and email.

The passed $name may be mime-encoded.  $email is stripped of any
whitespace.

@param MbWrapper $charsetConverter
@param string $name
@param string $email

Returns the email address.

@return string

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Header\Part\AddressPart.php`

**Classes**:
- `ZBateson\MailMimeParser\Header\Part\AddressPart extends ParameterPart`

**Functions/Methods**:
- `__construct(MbWrapper $charsetConverter, $name, $email)`
- `getEmail()`

