# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Queue.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Queue.php`
- Type: PHP
- Size: 1551 bytes

## Summary (from docblocks)

A simple array-backed queue, based off of the classic Okasaki
persistent amortized queue.  The basic idea is to maintain two
stacks: an input stack and an output stack.  When the output
stack runs out, reverse the input stack and use it as the output
stack.
We don't use the SPL implementation because it's only supported
on PHP 5.3 and later.
Exercise: Prove that push/pop on this queue take amortized O(1) time.
Exercise: Extend this queue to be a deque, while preserving amortized
O(1) time.  Some care must be taken on rebalancing to avoid quadratic
behaviour caused by repeatedly shuffling data from the input stack
to the output stack and back.

Shifts an element off the front of the queue.

Pushes an element onto the front of the queue.

Checks if it's empty.

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\Queue.php`

**Classes**:
- `HTMLPurifier_Queue`

**Functions/Methods**:
- `__construct($input = array()`
- `shift()`
- `push($x)`
- `isEmpty()`

