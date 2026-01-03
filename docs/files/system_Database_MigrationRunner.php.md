# system\Database\MigrationRunner.php

- Path: `system\Database\MigrationRunner.php`
- Type: PHP
- Size: 22546 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Class MigrationRunner

Whether or not migrations are allowed to run.
@var bool

Name of table to store meta information
@var string

The Namespace where migrations can be found.
`null` is all namespaces.
@var string|null

The database Group to migrate.
@var string

The migration name.
@var string

The pattern used to locate migration file versions.
@var string

The main database connection. Used to store
migration information in.
@var BaseConnection

If true, will continue instead of throwing
exceptions.
@var bool

used to return messages for CLI.
@var array

Tracks whether we have already ensured
the table exists or not.
@var bool

The full path to locate migration files.
@var string

The database Group filter.
@var string|null

Used to skip current migration.
@var bool

Constructor.
When passing in $db, you may pass any of the following to connect:
- group name
- existing connection instance
- array of database configuration values
@param array|ConnectionInterface|string|null $db
@throws ConfigException

Locate and run all new migrations
@throws ConfigException
@throws RuntimeException
@return bool

Migrate down to a previous batch
Calls each migration step required to get to the provided batch
@param int $targetBatch Target batch number, or negative for a relative batch, 0 for all
@throws ConfigException
@throws RuntimeException
@return mixed Current batch number on success, FALSE on failure or no migrations are found

Migrate a single file regardless of order or batches.
Method "up" or "down" determined by presence in history.
NOTE: This is not recommended and provided mostly for testing.
@param string $path Full path to a valid migration file
@param string $path Namespace of the target migration

Retrieves list of available migration scripts
@return array List of all located migrations by their UID

Retrieves a list of available migration scripts for one namespace

Create a migration object from a file path.
@return false|object Returns the migration object, or false on failure

Allows other scripts to modify on the fly as needed.
@return MigrationRunner

Allows other scripts to modify on the fly as needed.
@return MigrationRunner

@return MigrationRunner

If $silent == true, then will not throw exceptions and will
attempt to continue gracefully.
@return MigrationRunner

Extracts the migration number from a filename

Extracts the migration class name from a filename

Uses the non-repeatable portions of a migration or history
to create a sortable unique key
@param object $object migration or $history

Retrieves messages formatted for CLI output

Clears any CLI messages.
@return MigrationRunner

Truncates the history table.

Add a history to the table.
@param object $migration

Removes a single history
@param object $history

Grabs the full migration history from the database for a group

Returns the migration history for a single batch.
@param string $order

Returns all the batches from the database history in order

Returns the value of the last batch in the database.

Returns the version number of the first migration for a batch.
Mostly just for tests.

Returns the version number of the last migration for a batch.
Mostly just for tests.

Ensures that we have created our migrations table
in the database.

Handles the actual running of a migration.
@param string $direction "up" or "down"
@param object $migration The migration to run

## References

**Database Tables (inferred)**
- `a`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Database\MigrationRunner.php`

**Classes**:
- `CodeIgniter\Database\MigrationRunner`
- `CodeIgniter\Database\name`

**Functions/Methods**:
- `__construct(MigrationsConfig $config, $db = null)`
- `latest(?string $group = null)`
- `regress(int $targetBatch = 0, ?string $group = null)`
- `force(string $path, string $namespace, ?string $group = null)`
- `findMigrations()`
- `findNamespaceMigrations(string $namespace)`
- `migrationFromFile(string $path, string $namespace)`
- `setNamespace(?string $namespace)`
- `setGroup(string $group)`
- `setName(string $name)`
- `setSilent(bool $silent)`
- `getMigrationNumber(string $migration)`
- `getMigrationName(string $migration)`
- `getObjectUid($object)`
- `getCliMessages()`
- `clearCliMessages()`
- `clearHistory()`
- `addHistory($migration, int $batch)`
- `removeHistory($history)`
- `getHistory(string $group = 'default')`
- `getBatchHistory(int $batch, $order = 'asc')`
- `getBatches()`
- `getLastBatch()`
- `getBatchStart(int $batch)`
- `getBatchEnd(int $batch)`
- `ensureTable()`
- `migrate($direction, $migration)`

