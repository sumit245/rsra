# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\DefinitionCache\Serializer.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\DefinitionCache\Serializer.php`
- Type: PHP
- Size: 9346 bytes

## Summary (from docblocks)

@param HTMLPurifier_Definition $def
@param HTMLPurifier_Config $config
@return int|bool

@param HTMLPurifier_Definition $def
@param HTMLPurifier_Config $config
@return int|bool

@param HTMLPurifier_Definition $def
@param HTMLPurifier_Config $config
@return int|bool

@param HTMLPurifier_Config $config
@return bool|HTMLPurifier_Config

@param HTMLPurifier_Config $config
@return bool

@param HTMLPurifier_Config $config
@return bool

@param HTMLPurifier_Config $config
@return bool

Generates the file path to the serial file corresponding to
the configuration and definition name
@param HTMLPurifier_Config $config
@return string
@todo Make protected

Generates the path to the directory contain this cache's serial files
@param HTMLPurifier_Config $config
@return string
@note No trailing slash
@todo Make protected

Generates path to base directory that contains all definition type
serials
@param HTMLPurifier_Config $config
@return mixed|string
@todo Make protected

Convenience wrapper function for file_put_contents
@param string $file File name to write to
@param string $data Data to write into file
@param HTMLPurifier_Config $config
@return int|bool Number of bytes written if success, or false if failure.

Prepares the directory that this type stores the serials in
@param HTMLPurifier_Config $config
@return bool True if successful

Tests permissions on a directory and throws out friendly
error messages and attempts to chmod it itself if possible
@param string $dir Directory path
@param int $chmod Permissions
@return bool True if directory is writable

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\DefinitionCache\Serializer.php`

**Classes**:
- `HTMLPurifier_DefinitionCache_Serializer extends HTMLPurifier_DefinitionCache`

**Functions/Methods**:
- `add($def, $config)`
- `set($def, $config)`
- `replace($def, $config)`
- `get($config)`
- `remove($config)`
- `flush($config)`
- `cleanup($config)`
- `generateFilePath($config)`
- `generateDirectoryPath($config)`
- `generateBaseDirectoryPath($config)`
- `_write($file, $data, $config)`
- `_prepareDir($config)`
- `_testPermissions($dir, $chmod)`

