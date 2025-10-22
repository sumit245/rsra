# system\ThirdParty\Kint\Parser\SerializePlugin.php

- Path: `system\ThirdParty\Kint\Parser\SerializePlugin.php`
- Type: PHP
- Size: 3680 bytes

## Summary (from docblocks)

Disables automatic unserialization on arrays and objects.
As the PHP manual notes:
> Unserialization can result in code being loaded and executed due to
> object instantiation and autoloading, and a malicious user may be able
> to exploit this.
The natural way to stop that from happening is to just refuse to unserialize
stuff by default. Which is what we're doing for anything that's not scalar.
@var bool

## References

**Database Tables (inferred)**
- `happening`

## Symbols

# Symbols

**Files documented**: 1

## `system\ThirdParty\Kint\Parser\SerializePlugin.php`

**Classes**:
- `Kint\Parser\SerializePlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

