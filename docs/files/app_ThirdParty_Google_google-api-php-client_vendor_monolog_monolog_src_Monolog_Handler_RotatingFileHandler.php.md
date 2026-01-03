# app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\RotatingFileHandler.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\RotatingFileHandler.php`
- Type: PHP
- Size: 5687 bytes

## Summary (from docblocks)

Stores logs to files that are rotated every day and a limited number of files are kept.
This rotation is only intended to be used as a workaround. Using logrotate to
handle the rotation is strongly encouraged when you can use it.
@author Christophe Coevoet <stof@notk.org>
@author Jordi Boggiano <j.boggiano@seld.be>

@param string   $filename
@param int      $maxFiles       The maximal amount of files to keep (0 means unlimited)
@param int      $level          The minimum logging level at which this handler will be triggered
@param Boolean  $bubble         Whether the messages that are handled can bubble up the stack or not
@param int|null $filePermission Optional file permissions (default (0644) are only for owner read/write)
@param Boolean  $useLocking     Try to lock log file before doing any writes

{@inheritdoc}

{@inheritdoc}

Rotates the files.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\monolog\monolog\src\Monolog\Handler\RotatingFileHandler.php`

**Classes**:
- `Monolog\Handler\RotatingFileHandler extends StreamHandler`

**Functions/Methods**:
- `__construct($filename, $maxFiles = 0, $level = Logger::DEBUG, $bubble = true, $filePermission = null, $useLocking = false)`
- `close()`
- `setFilenameFormat($filenameFormat, $dateFormat)`
- `write(array $record)`
- `rotate()`
- `getTimedFilename()`
- `getGlobPattern()`

