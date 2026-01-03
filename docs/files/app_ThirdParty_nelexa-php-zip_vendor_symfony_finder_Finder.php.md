# app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Finder.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Finder.php`
- Type: PHP
- Size: 22524 bytes

## Summary (from docblocks)

Finder allows to build rules to find files and directories.
It is a thin wrapper around several specialized iterator classes.
All rules may be invoked several times.
All methods return the current Finder object to allow chaining:
    $finder = Finder::create()->files()->name('*.php')->in(__DIR__);
@author Fabien Potencier <fabien@symfony.com>
@implements \IteratorAggregate<string, SplFileInfo>

Creates a new Finder.
@return static

Restricts the matching to directories only.
@return $this

Restricts the matching to files only.
@return $this

Adds tests for the directory depth.
Usage:
    $finder->depth('> 1') // the Finder will start matching at level 1.
    $finder->depth('< 3') // the Finder will descend at most 3 levels of directories below the starting point.
    $finder->depth(['>= 1', '< 3'])
@param string|int|string[]|int[] $levels The depth level expression or an array of depth levels
@return $this
@see DepthRangeFilterIterator
@see NumberComparator

Adds tests for file dates (last modified).
The date must be something that strtotime() is able to parse:
    $finder->date('since yesterday');
    $finder->date('until 2 days ago');
    $finder->date('> now - 2 hours');
    $finder->date('>= 2005-10-15');
    $finder->date(['>= 2005-10-15', '<= 2006-05-27']);
@param string|string[] $dates A date range string or an array of date ranges
@return $this
@see strtotime
@see DateRangeFilterIterator
@see DateComparator

Adds rules that files must match.
You can use patterns (delimited with / sign), globs or simple strings.
    $finder->name('*.php')
    $finder->name('/\.php$/') // same as above
    $finder->name('test.php')
    $finder->name(['test.py', 'test.php'])
@param string|string[] $patterns A pattern (a regexp, a glob, or a string) or an array of patterns
@return $this
@see FilenameFilterIterator

Adds rules that files must not match.
@param string|string[] $patterns A pattern (a regexp, a glob, or a string) or an array of patterns
@return $this
@see FilenameFilterIterator

Adds tests that file contents must match.
Strings or PCRE patterns can be used:
    $finder->contains('Lorem ipsum')
    $finder->contains('/Lorem ipsum/i')
    $finder->contains(['dolor', '/ipsum/i'])
@param string|string[] $patterns A pattern (string or regexp) or an array of patterns
@return $this
@see FilecontentFilterIterator

Adds tests that file contents must not match.
Strings or PCRE patterns can be used:
    $finder->notContains('Lorem ipsum')
    $finder->notContains('/Lorem ipsum/i')
    $finder->notContains(['lorem', '/dolor/i'])
@param string|string[] $patterns A pattern (string or regexp) or an array of patterns
@return $this
@see FilecontentFilterIterator

Adds rules that filenames must match.
You can use patterns (delimited with / sign) or simple strings.
    $finder->path('some/special/dir')
    $finder->path('/some\/special\/dir/') // same as above
    $finder->path(['some dir', 'another/dir'])
Use only / as dirname separator.
@param string|string[] $patterns A pattern (a regexp or a string) or an array of patterns
@return $this
@see FilenameFilterIterator

Adds rules that filenames must not match.
You can use patterns (delimited with / sign) or simple strings.
    $finder->notPath('some/special/dir')
    $finder->notPath('/some\/special\/dir/') // same as above
    $finder->notPath(['some/file.txt', 'another/file.log'])
Use only / as dirname separator.
@param string|string[] $patterns A pattern (a regexp or a string) or an array of patterns
@return $this
@see FilenameFilterIterator

Adds tests for file sizes.
    $finder->size('> 10K');
    $finder->size('<= 1Ki');
    $finder->size(4);
    $finder->size(['> 10K', '< 20K'])
@param string|int|string[]|int[] $sizes A size range string or an integer or an array of size ranges
@return $this
@see SizeRangeFilterIterator
@see NumberComparator

Excludes directories.
Directories passed as argument must be relative to the ones defined with the `in()` method. For example:
    $finder->in(__DIR__)->exclude('ruby');
@param string|array $dirs A directory path or an array of directories
@return $this
@see ExcludeDirectoryFilterIterator

Excludes "hidden" directories and files (starting with a dot).
This option is enabled by default.
@return $this
@see ExcludeDirectoryFilterIterator

Forces the finder to ignore version control directories.
This option is enabled by default.
@return $this
@see ExcludeDirectoryFilterIterator

Forces Finder to obey .gitignore and ignore files based on rules listed there.
This option is disabled by default.
@return $this

Adds VCS patterns.
@see ignoreVCS()
@param string|string[] $pattern VCS patterns to ignore

Sorts files and directories by an anonymous function.
The anonymous function receives two \SplFileInfo instances to compare.
This can be slow as all the matching files and directories must be retrieved for comparison.
@return $this
@see SortableIterator

Sorts files and directories by name.
This can be slow as all the matching files and directories must be retrieved for comparison.
@return $this
@see SortableIterator

Sorts files and directories by type (directories before files), then by name.
This can be slow as all the matching files and directories must be retrieved for comparison.
@return $this
@see SortableIterator

Sorts files and directories by the last accessed time.
This is the time that the file was last accessed, read or written to.
This can be slow as all the matching files and directories must be retrieved for comparison.
@return $this
@see SortableIterator

Reverses the sorting.
@return $this

Sorts files and directories by the last inode changed time.
This is the time that the inode information was last modified (permissions, owner, group or other metadata).
On Windows, since inode is not available, changed time is actually the file creation time.
This can be slow as all the matching files and directories must be retrieved for comparison.
@return $this
@see SortableIterator

Sorts files and directories by the last modified time.
This is the last time the actual contents of the file were last modified.
This can be slow as all the matching files and directories must be retrieved for comparison.
@return $this
@see SortableIterator

Filters the iterator with an anonymous function.
The anonymous function receives a \SplFileInfo and must return false
to remove files.
@return $this
@see CustomFilterIterator

Forces the following of symlinks.
@return $this

Tells finder to ignore unreadable directories.
By default, scanning unreadable directories content throws an AccessDeniedException.
@return $this

Searches files and directories which match defined rules.
@param string|string[] $dirs A directory path or an array of directories
@return $this
@throws DirectoryNotFoundException if one of the directories does not exist

Returns an Iterator for the current Finder configuration.
This method implements the IteratorAggregate interface.
@return \Iterator<string, SplFileInfo>
@throws \LogicException if the in() method has not been called

Appends an existing set of files/directories to the finder.
The set can be another Finder, an Iterator, an IteratorAggregate, or even a plain array.
@return $this
@throws \InvalidArgumentException when the given argument is not iterable

Check if any results were found.
@return bool

Counts all the results collected by the iterators.
@return int

Normalizes given directory names by removing trailing slashes.
Excluding: (s)ftp:// or ssh2.(s)ftp:// wrapper

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\symfony\finder\Finder.php`

**Classes**:
- `Symfony\Component\Finder\Finder implements \IteratorAggregate, \Countable`

**Functions/Methods**:
- `__construct()`
- `create()`
- `directories()`
- `files()`
- `depth($levels)`
- `date($dates)`
- `name($patterns)`
- `notName($patterns)`
- `contains($patterns)`
- `notContains($patterns)`
- `path($patterns)`
- `notPath($patterns)`
- `size($sizes)`
- `exclude($dirs)`
- `ignoreDotFiles(bool $ignoreDotFiles)`
- `ignoreVCS(bool $ignoreVCS)`
- `ignoreVCSIgnored(bool $ignoreVCSIgnored)`
- `addVCSPattern($pattern)`
- `sort(\Closure $closure)`
- `sortByName(bool $useNaturalSort = false)`
- `sortByType()`
- `sortByAccessedTime()`
- `reverseSorting()`
- `sortByChangedTime()`
- `sortByModifiedTime()`
- `filter(\Closure $closure)`
- `followLinks()`
- `ignoreUnreadableDirs(bool $ignore = true)`
- `in($dirs)`
- `getIterator()`
- `append(iterable $iterator)`
- `hasResults()`
- `count()`
- `searchInDirectory(string $dir)`
- `normalizeDir(string $dir)`

