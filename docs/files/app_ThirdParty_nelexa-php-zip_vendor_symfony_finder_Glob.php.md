# app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Glob.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Glob.php`
- Type: PHP
- Size: 3620 bytes

## Summary (from docblocks)

Glob matches globbing patterns against text.
    if match_glob("foo.*", "foo.bar") echo "matched\n";
    // prints foo.bar and foo.baz
    $regex = glob_to_regex("foo.*");
    for (['foo.bar', 'foo.baz', 'foo', 'bar'] as $t)
    {
        if (/$regex/) echo "matched: $car\n";
    }
Glob implements glob(3) style matching that can be used to match
against text, rather than fetching names from a filesystem.
Based on the Perl Text::Glob module.
@author Fabien Potencier <fabien@symfony.com> PHP port
@author     Richard Clamp <richardc@unixbeard.net> Perl version
@copyright  2004-2005 Fabien Potencier <fabien@symfony.com>
@copyright  2002 Richard Clamp <richardc@unixbeard.net>

Returns a regexp which is the equivalent of the glob pattern.
@return string

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Glob.php`

**Classes**:
- `Symfony\Component\Finder\Glob`

**Functions/Methods**:
- `toRegex(string $glob, bool $strictLeadingDot = true, bool $strictWildcardSlash = true, string $delimiter = '#')`

