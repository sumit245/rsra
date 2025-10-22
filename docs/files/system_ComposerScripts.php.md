# system\ComposerScripts.php

- Path: `system\ComposerScripts.php`
- Type: PHP
- Size: 5092 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

This class is used by Composer during installs and updates
to move files to locations within the system folder so that end-users
do not need to use Composer to install a package, but can simply
download.
@codeCoverageIgnore
@internal

Path to the ThirdParty directory.

Direct dependencies of CodeIgniter to copy
contents to `system/ThirdParty/`.
@var array<string, array<string, string>>

This static method is called by Composer after every update event,
i.e., `composer install`, `composer update`, `composer remove`.

Recursively remove the contents of the previous `system/ThirdParty`.

@var SplFileInfo $file

Recursively copy the files and directories of the origin directory
into the target directory, i.e. "mirror" its contents.

@var SplFileInfo $file

Copy Kint's init files into `system/ThirdParty/Kint/`

## Symbols

# Symbols

**Files documented**: 1

## `system\ComposerScripts.php`

**Classes**:
- `CodeIgniter\is`
- `CodeIgniter\ComposerScripts`

**Functions/Methods**:
- `postUpdate()`
- `recursiveDelete(string $directory)`
- `recursiveMirror(string $originDir, string $targetDir)`
- `copyKintInitFiles()`

