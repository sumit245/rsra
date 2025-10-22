# app\ThirdParty\nelexa-php-zip\vendor\composer\InstalledVersions.php

- Path: `app\ThirdParty\nelexa-php-zip\vendor\composer\InstalledVersions.php`
- Type: PHP
- Size: 13927 bytes

## Summary (from docblocks)

This class is copied in every Composer installed project and available to all
See also https://getcomposer.org/doc/07-runtime.md#installed-versions
To require it's presence, you can require `composer-runtime-api ^2.0`

Returns a list of all package names which are present, either by being installed, replaced or provided
@return string[]
@psalm-return list<string>

Returns a list of all package names with a specific type e.g. 'library'
@param  string   $type
@return string[]
@psalm-return list<string>

Checks whether the given package is installed
This also returns true if the package name is provided or replaced by another package
@param  string $packageName
@param  bool   $includeDevRequirements
@return bool

Checks whether the given package satisfies a version constraint
e.g. If you want to know whether version 2.3+ of package foo/bar is installed, you would call:
  Composer\InstalledVersions::satisfies(new VersionParser, 'foo/bar', '^2.3')
@param  VersionParser $parser      Install composer/semver to have access to this class and functionality
@param  string        $packageName
@param  string|null   $constraint  A version constraint to check for, if you pass one you have to make sure composer/semver is required by your package
@return bool

Returns a version constraint representing all the range(s) which are installed for a given package
It is easier to use this via isInstalled() with the $constraint argument if you need to check
whether a given version of a package is installed, and not just whether it exists
@param  string $packageName
@return string Version constraint usable with composer/semver

@param  string      $packageName
@return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present

@param  string      $packageName
@return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present

@param  string      $packageName
@return string|null If the package is being replaced or provided but is not really installed, null will be returned as reference

@param  string      $packageName
@return string|null If the package is being replaced or provided but is not really installed, null will be returned as install path. Packages of type metapackages also have a null install path.

@return array
@psalm-return array{name: string, version: string, reference: string, pretty_version: string, aliases: string[], dev: bool, install_path: string}

Returns the raw installed.php data for custom implementations
@deprecated Use getAllRawData() instead which returns all datasets for all autoloaders present in the process. getRawData only returns the first dataset loaded, which may not be what you expect.
@return array[]
@psalm-return array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[], dev: bool, install_path: string}, versions: array<string, array{dev_requirement: bool, pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[], install_path?: string}>}

Returns the raw data of all installed.php which are currently loaded for custom implementations
@return array[]
@psalm-return list<array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[], dev: bool, install_path: string}, versions: array<string, array{dev_requirement: bool, pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[], install_path?: string}>}>

Lets you reload the static array from another file
This is only useful for complex integrations in which a project needs to use
this class but then also needs to execute another project's autoloader in process,
and wants to ensure both projects have access to their version of installed.php.
A typical case would be PHPUnit, where it would need to make sure it reads all
the data it needs from this class, then call reload() with
`require $CWD/vendor/composer/installed.php` (or similar) as input to make sure
the project in which it runs can then also use this class safely, without
interference between PHPUnit's dependencies and the project's dependencies.
@param  array[] $data A vendor/composer/installed.php data set
@return void
@psalm-param array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[], dev: bool, install_path: string}, versions: array<string, array{dev_requirement: bool, pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[], install_path?: string}>} $data

@return array[]
@psalm-return list<array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[], dev: bool, install_path: string}, versions: array<string, array{dev_requirement: bool, pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[], install_path?: string}>}>

## References

**Database Tables (inferred)**
- `its`
- `another`
- `this`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\nelexa-php-zip\vendor\composer\InstalledVersions.php`

**Classes**:
- `Composer\is`
- `Composer\InstalledVersions`
- `Composer\and`
- `Composer\but`
- `Composer\safely`

**Functions/Methods**:
- `getInstalledPackages()`
- `getInstalledPackagesByType($type)`
- `isInstalled($packageName, $includeDevRequirements = true)`
- `satisfies(VersionParser $parser, $packageName, $constraint)`
- `getVersionRanges($packageName)`
- `getVersion($packageName)`
- `getPrettyVersion($packageName)`
- `getReference($packageName)`
- `getInstallPath($packageName)`
- `getRootPackage()`
- `getRawData()`
- `getAllRawData()`
- `reload($data)`
- `getInstalled()`

