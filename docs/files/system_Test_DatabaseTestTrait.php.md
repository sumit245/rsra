# system\Test\DatabaseTestTrait.php

- Path: `system\Test\DatabaseTestTrait.php`
- Type: PHP
- Size: 8872 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

DatabaseTestTrait
Provides functionality for refreshing/seeding
the database during testing.
@mixin CIUnitTestCase

Is db migration done once or more than once?
@var bool

Is seeding done once or more than once?
@var bool

Runs the trait set up methods.

Runs the trait set up methods.

Load any database test dependencies.

Migrate on setUp

Regress migrations as defined by the class

Run migrations as defined by the class

Seed on setUp

Run seeds as defined by the class

Seeds that database with a specific seeder.

Reset $doneMigration and $doneSeed
@afterClass

Removes any rows inserted via $this->hasInDatabase()

Loads the Builder class appropriate for the current database.
@return BaseBuilder

Fetches a single column from a database row with criteria
matching $where.
@throws DatabaseException
@return bool

Asserts that records that match the conditions in $where DO
exist in the database.
@throws DatabaseException

Asserts that records that match the conditions in $where do
not exist in the database.

Inserts a row into to the database. This row will be removed
after the test has run.
@return bool

Asserts that the number of rows in the database that match $where
is equal to $expected.
@throws DatabaseException

Sets $DBDebug to false.
WARNING: this value will persist! take care to roll it back.

Sets $DBDebug to true.

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `system\Test\DatabaseTestTrait.php`

**Classes**:
- `CodeIgniter\Test\appropriate`

**Functions/Methods**:
- `setUpDatabase()`
- `tearDownDatabase()`
- `loadDependencies()`
- `setUpMigrate()`
- `regressDatabase()`
- `migrateDatabase()`
- `setUpSeed()`
- `runSeeds()`
- `seed(string $name)`
- `resetMigrationSeedCount()`
- `clearInsertCache()`
- `loadBuilder(string $tableName)`
- `grabFromDatabase(string $table, string $column, array $where)`
- `seeInDatabase(string $table, array $where)`
- `dontSeeInDatabase(string $table, array $where)`
- `hasInDatabase(string $table, array $data)`
- `seeNumRecords(int $expected, string $table, array $where)`
- `disableDBDebug()`
- `enableDBDebug()`

