# app\ThirdParty\Imap\ddeboer-imap\vendor\composer\ClassLoader.php

- Path: `app\ThirdParty\Imap\ddeboer-imap\vendor\composer\ClassLoader.php`
- Type: PHP
- Size: 13422 bytes

## Summary (from docblocks)

ClassLoader implements a PSR-0, PSR-4 and classmap class loader.
    $loader = new \Composer\Autoload\ClassLoader();
    // register classes with namespaces
    $loader->add('Symfony\Component', __DIR__.'/component');
    $loader->add('Symfony',           __DIR__.'/framework');
    // activate the autoloader
    $loader->register();
    // to enable searching the include path (eg. for PEAR packages)
    $loader->setUseIncludePath(true);
In this example, if you try to use a class in the Symfony\Component
namespace or one of its children (Symfony\Component\Console for instance),
the autoloader will first look for the class under the component/
directory, and it will then fallback to the framework/ directory if not
found before giving up.
This class is loosely based on the Symfony UniversalClassLoader.
@author Fabien Potencier <fabien@symfony.com>
@author Jordi Boggiano <j.boggiano@seld.be>
@see    http://www.php-fig.org/psr/psr-0/
@see    http://www.php-fig.org/psr/psr-4/

@param array $classMap Class to filename map

Registers a set of PSR-0 directories for a given prefix, either
appending or prepending to the ones previously set for this prefix.
@param string       $prefix  The prefix
@param array|string $paths   The PSR-0 root directories
@param bool         $prepend Whether to prepend the directories

Registers a set of PSR-4 directories for a given namespace, either
appending or prepending to the ones previously set for this namespace.
@param string       $prefix  The prefix/namespace, with trailing '\\'
@param array|string $paths   The PSR-4 base directories
@param bool         $prepend Whether to prepend the directories
@throws \InvalidArgumentException

Registers a set of PSR-0 directories for a given prefix,
replacing any others previously set for this prefix.
@param string       $prefix The prefix
@param array|string $paths  The PSR-0 base directories

Registers a set of PSR-4 directories for a given namespace,
replacing any others previously set for this namespace.
@param string       $prefix The prefix/namespace, with trailing '\\'
@param array|string $paths  The PSR-4 base directories
@throws \InvalidArgumentException

Turns on searching the include path for class files.
@param bool $useIncludePath

Can be used to check if the autoloader uses the include path to check
for classes.
@return bool

Turns off searching the prefix and fallback directories for classes
that have not been registered with the class map.
@param bool $classMapAuthoritative

Should class lookup fail if not found in the current class map?
@return bool

APCu prefix to use to cache found/not-found classes, if the extension is enabled.
@param string|null $apcuPrefix

The APCu prefix in use, or null if APCu caching is not enabled.
@return string|null

Registers this instance as an autoloader.
@param bool $prepend Whether to prepend the autoloader or not

Unregisters this instance as an autoloader.

Loads the given class or interface.
@param  string    $class The name of the class
@return bool|null True if loaded, null otherwise

Finds the path to the file where the class is defined.
@param string $class The name of the class
@return string|false The path if found, false otherwise

Scope isolated include.
Prevents access to $this/self from included files.

## References

**Database Tables (inferred)**
- `included`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\ddeboer-imap\vendor\composer\ClassLoader.php`

**Classes**:
- `Composer\Autoload\loader`
- `Composer\Autoload\in`
- `Composer\Autoload\under`
- `Composer\Autoload\is`
- `Composer\Autoload\ClassLoader`
- `Composer\Autoload\files`
- `Composer\Autoload\map`
- `Composer\Autoload\lookup`
- `Composer\Autoload\map`
- `Composer\Autoload\or`
- `Composer\Autoload\The`
- `Composer\Autoload\is`
- `Composer\Autoload\The`
- `Composer\Autoload\map`
- `Composer\Autoload\does`
- `Composer\Autoload\name`
- `Composer\Autoload\name`

**Functions/Methods**:
- `getPrefixes()`
- `getPrefixesPsr4()`
- `getFallbackDirs()`
- `getFallbackDirsPsr4()`
- `getClassMap()`
- `addClassMap(array $classMap)`
- `add($prefix, $paths, $prepend = false)`
- `addPsr4($prefix, $paths, $prepend = false)`
- `set($prefix, $paths)`
- `setPsr4($prefix, $paths)`
- `setUseIncludePath($useIncludePath)`
- `getUseIncludePath()`
- `setClassMapAuthoritative($classMapAuthoritative)`
- `isClassMapAuthoritative()`
- `setApcuPrefix($apcuPrefix)`
- `getApcuPrefix()`
- `register($prepend = false)`
- `unregister()`
- `loadClass($class)`
- `findFile($class)`
- `findFileWithExtension($class, $ext)`
- `includeFile($file)`

