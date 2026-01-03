# app\Config\Cache.php

- Path: `app\Config\Cache.php`
- Type: PHP
- Size: 6279 bytes

## Summary (from docblocks)

--------------------------------------------------------------------------
Primary Handler
--------------------------------------------------------------------------
The name of the preferred handler that should be used. If for some reason
it is not available, the $backupHandler will be used in its place.
@var string

--------------------------------------------------------------------------
Backup Handler
--------------------------------------------------------------------------
The name of the handler that will be used in case the first one is
unreachable. Often, 'file' is used here since the filesystem is
always available, though that's not always practical for the app.
@var string

--------------------------------------------------------------------------
Cache Directory Path
--------------------------------------------------------------------------
The path to where cache files should be stored, if using a file-based
system.
@var string
@deprecated Use the driver-specific variant under $file

--------------------------------------------------------------------------
Cache Include Query String
--------------------------------------------------------------------------
Whether to take the URL query string into consideration when generating
output cache files. Valid options are:
   false      = Disabled
   true       = Enabled, take all query parameters into account.
                Please be aware that this may result in numerous cache
                files generated for the same page over and over again.
   array('q') = Enabled, but only take into account the specified list
                of query parameters.
@var bool|string[]

--------------------------------------------------------------------------
Key Prefix
--------------------------------------------------------------------------
This string is added to all cache item names to help avoid collisions
if you run multiple applications with the same cache engine.
@var string

--------------------------------------------------------------------------
Default TTL
--------------------------------------------------------------------------
The default number of seconds to save items when none is specified.
WARNING: This is not used by framework handlers where 60 seconds is
hard-coded, but may be useful to projects and modules. This will replace
the hard-coded value in a future release.
@var int

--------------------------------------------------------------------------
Reserved Characters
--------------------------------------------------------------------------
A string of reserved characters that will not be allowed in keys or tags.
Strings that violate this restriction will cause handlers to throw.
Default: {}()/\@:
Note: The default set is required for PSR-6 compliance.
@var string

--------------------------------------------------------------------------
File settings
--------------------------------------------------------------------------
Your file storage preferences can be specified below, if you are using
the File driver.
@var array<string, int|string|null>

-------------------------------------------------------------------------
Memcached settings
-------------------------------------------------------------------------
Your Memcached servers can be specified below, if you are using
the Memcached drivers.
@see https://codeigniter.com/user_guide/libraries/caching.html#memcached
@var array<string, boolean|int|string>

-------------------------------------------------------------------------
Redis settings
-------------------------------------------------------------------------
Your Redis server can be specified below, if you are using
the Redis or Predis drivers.
@var array<string, int|string|null>

--------------------------------------------------------------------------
Available Cache Handlers
--------------------------------------------------------------------------
This is an array of cache engine alias' and class names. Only engines
that are listed here are allowed to be used.
@var array<string, string>

## Symbols

# Symbols

**Files documented**: 1

## `app\Config\Cache.php`

**Classes**:
- `Config\Cache extends BaseConfig`
- `Config\names`

