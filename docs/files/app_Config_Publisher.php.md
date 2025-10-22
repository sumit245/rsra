# app\Config\Publisher.php

- Path: `app\Config\Publisher.php`
- Type: PHP
- Size: 806 bytes

## Summary (from docblocks)

Publisher Configuration
Defines basic security restrictions for the Publisher class
to prevent abuse by injecting malicious files into a project.

A list of allowed destinations with a (pseudo-)regex
of allowed files for each destination.
Attempts to publish to directories not in this list will
result in a PublisherException. Files that do no fit the
pattern will cause copy/merge to fail.
@var array<string,string>

## Symbols

# Symbols

**Files documented**: 1

## `app\Config\Publisher.php`

**Classes**:
- `Config\Publisher extends BasePublisher`

