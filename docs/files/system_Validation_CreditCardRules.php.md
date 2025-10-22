# system\Validation\CreditCardRules.php

- Path: `system\Validation\CreditCardRules.php`
- Type: PHP
- Size: 8079 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class CreditCardRules
Provides validation methods for common credit-card inputs.
@see http://en.wikipedia.org/wiki/Credit_card_number

The cards that we support, with the defining details:
 name        - The type of card as found in the form. Must match the user's value
 length      - List of possible lengths for the card number
 prefixes    - List of possible prefixes for the card
 checkdigit  - Boolean on whether we should do a modulus10 check on the numbers.
@var array

Verifies that a credit card number is valid and matches the known
formats for a wide number of credit card types. This does not verify
that the card is a valid card, only that the number is formatted correctly.
Example:
 $rules = [
     'cc_num' => 'valid_cc_number[visa]'
 ];

Checks the given number to see if the number passing a Luhn check.
@param string $number

## Symbols

# Symbols

**Files documented**: 1

## `system\Validation\CreditCardRules.php`

**Classes**:
- `CodeIgniter\Validation\CreditCardRules`

**Functions/Methods**:
- `valid_cc_number(?string $ccNumber, string $type)`
- `isValidLuhn(?string $number = null)`

