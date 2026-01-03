# system\Validation\StrictRules\CreditCardRules.php

- Path: `system\Validation\StrictRules\CreditCardRules.php`
- Type: PHP
- Size: 1390 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class CreditCardRules
Provides validation methods for common credit-card inputs.
@see http://en.wikipedia.org/wiki/Credit_card_number

Verifies that a credit card number is valid and matches the known
formats for a wide number of credit card types. This does not verify
that the card is a valid card, only that the number is formatted correctly.
Example:
 $rules = [
     'cc_num' => 'valid_cc_number[visa]'
 ];
@param mixed $ccNumber

## Symbols

# Symbols

**Files documented**: 1

## `system\Validation\StrictRules\CreditCardRules.php`

**Classes**:
- `CodeIgniter\Validation\StrictRules\CreditCardRules`

**Functions/Methods**:
- `__construct()`
- `valid_cc_number($ccNumber, string $type)`

