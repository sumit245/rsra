# system\Helpers\filesystem_helper.php

- Path: `system\Helpers\filesystem_helper.php`
- Type: PHP
- Size: 15402 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Create a Directory Map
Reads the specified directory and builds an array
representation of it. Sub-folders contained with the
directory will be mapped as well.
@param string $sourceDir      Path to source
@param int    $directoryDepth Depth of directories to traverse
                              (0 = fully recursive, 1 = current dir, etc)
@param bool   $hidden         Whether to show hidden files

Recursively copies the files and directories of the origin directory
into the target directory, i.e. "mirror" its contents.
@param bool $overwrite Whether individual files overwrite on collision
@throws InvalidArgumentException

@var SplFileInfo $file

Write File
Writes data to the file specified in the path.
Creates a new file if non-existent.
@param string $path File path
@param string $data Data to write
@param string $mode fopen() mode (default: 'wb')

Delete Files
Deletes all files contained in the supplied directory path.
Files must be writable or owned by the system in order to be deleted.
If the second parameter is set to true, any directories contained
within the supplied base directory will be nuked as well.
@param string $path   File path
@param bool   $delDir Whether to delete any directories found in the path
@param bool   $htdocs Whether to skip deleting .htaccess and index page files
@param bool   $hidden Whether to include hidden files (files beginning with a period)

Get Filenames
Reads the specified directory and builds an array containing the filenames.
Any sub-folders contained within the specified path are read as well.
@param string    $sourceDir   Path to source
@param bool|null $includePath Whether to include the path as part of the filename; false for no path, null for a relative path, true for full path
@param bool      $hidden      Whether to include hidden files (files beginning with a period)
@param bool      $includeDir  Whether to include directories

Get Directory File Information
Reads the specified directory and builds an array containing the filenames,
filesize, dates, and permissions
Any sub-folders contained within the specified path are read as well.
@param string $sourceDir    Path to source
@param bool   $topLevelOnly Look only at the top level directory specified?
@param bool   $recursion    Internal variable to determine recursion status - do not use in calls

Get File Info
Given a file and path, returns the name, path, size, date modified
Second parameter allows you to explicitly declare what information you want returned
Options are: name, server_path, size, date, readable, writable, executable, fileperms
Returns false if the file cannot be found.
@param string $file           Path to file
@param mixed  $returnedValues Array or comma separated string of information returned
@return array|null

Symbolic Permissions
Takes a numeric value representing a file's permissions and returns
standard symbolic notation representing that value
@param int $perms Permissions

Octal Permissions
Takes a numeric value representing a file's permissions and returns
a three character string representing the file's octal permissions
@param int $perms Permissions

Checks if two files both exist and have identical hashes
@return bool Same or not

Set Realpath
@param bool $checkExistence Checks to see if the path exists

## Symbols

# Symbols

**Files documented**: 1

## `system\Helpers\filesystem_helper.php`

**Functions/Methods**:
- `directory_map(string $sourceDir, int $directoryDepth = 0, bool $hidden = false)`
- `directory_mirror(string $originDir, string $targetDir, bool $overwrite = true)`
- `write_file(string $path, string $data, string $mode = 'wb')`
- `delete_files(string $path, bool $delDir = false, bool $htdocs = false, bool $hidden = false)`
- `get_filenames(string $sourceDir,
        ?bool $includePath = false,
        bool $hidden = false,
        bool $includeDir = true)`
- `get_dir_file_info(string $sourceDir, bool $topLevelOnly = true, bool $recursion = false)`
- `get_file_info(string $file, $returnedValues = ['name', 'server_path', 'size', 'date'])`
- `symbolic_permissions(int $perms)`
- `octal_permissions(int $perms)`
- `same_file(string $file1, string $file2)`
- `set_realpath(string $path, bool $checkExistence = false)`

