# system\Model.php

- Path: `system\Model.php`
- Type: PHP
- Size: 27582 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

The Model class extends BaseModel and provides additional
convenient features that makes working with a SQL database
table less painful.
It will:
     - automatically connect to database
     - allow intermingling calls to the builder
     - removes the need to use Result object directly in most cases
@property BaseConnection $db
@method $this havingIn(?string $key = null, $values = null, ?bool $escape = null)
@method $this havingLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)
@method $this havingNotIn(?string $key = null, $values = null, ?bool $escape = null)
@method $this join(string $table, string $cond, string $type = '', ?bool $escape = null)
@method $this like($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)
@method $this limit(?int $value = null, ?int $offset = 0)
@method $this notHavingLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)
@method $this notLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)
@method $this offset(int $offset)
@method $this orderBy(string $orderBy, string $direction = '', ?bool $escape = null)
@method $this orHaving($key, $value = null, ?bool $escape = null)
@method $this orHavingIn(?string $key = null, $values = null, ?bool $escape = null)
@method $this orHavingLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)
@method $this orHavingNotIn(?string $key = null, $values = null, ?bool $escape = null)
@method $this orLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)
@method $this orNotHavingLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)
@method $this orNotLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)
@method $this orWhere($key, $value = null, ?bool $escape = null)
@method $this orWhereIn(?string $key = null, $values = null, ?bool $escape = null)
@method $this orWhereNotIn(?string $key = null, $values = null, ?bool $escape = null)
@method $this select($select = '*', ?bool $escape = null)
@method $this selectAvg(string $select = '', string $alias = '')
@method $this selectCount(string $select = '', string $alias = '')
@method $this selectMax(string $select = '', string $alias = '')
@method $this selectMin(string $select = '', string $alias = '')
@method $this selectSum(string $select = '', string $alias = '')
@method $this where($key, $value = null, ?bool $escape = null)
@method $this whereIn(?string $key = null, $values = null, ?bool $escape = null)
@method $this whereNotIn(?string $key = null, $values = null, ?bool $escape = null)

Name of database table
@var string

The table's primary key.
@var string

Whether primary key uses auto increment.
@var bool

Query Builder object
@var BaseBuilder|null

Holds information passed in via 'set'
so that we can capture it (not the builder)
and ensure it gets validated first.
@var array

Escape array that maps usage of escape
flag for every parameter.
@var array

Builder method names that should not be used in the Model.
@var string[] method name

@var BaseConnection|null $db

Specify the table associated with a model
@param string $table Table
@return $this

Fetches the row of database from $this->table with a primary key
matching $id. This methods works only with dbCalls
This methods works only with dbCalls
@param bool                  $singleton Single or multiple results
@param array|int|string|null $id        One primary key or an array of primary keys
@return array|object|null The resulting row of data, or null.

Fetches the column of database from $this->table
This methods works only with dbCalls
@param string $columnName Column Name
@return array|null The resulting row of data, or null if no data found.

Works with the current Query Builder instance to return
all results, while optionally limiting them.
This methods works only with dbCalls
@param int $limit  Limit
@param int $offset Offset
@return array

Returns the first row of the result set. Will take any previous
Query Builder calls into account when determining the result set.
This methods works only with dbCalls
@return array|object|null

Inserts data into the current table.
This methods works only with dbCalls
@param array $data Data
@return bool|Query

Compiles batch insert strings and runs the queries, validating each row prior.
This methods works only with dbCalls
@param array|null $set       An associative array of insert values
@param bool|null  $escape    Whether to escape values
@param int        $batchSize The size of the batch to run
@param bool       $testing   True means only number of records is returned, false will execute the query
@return bool|int Number of rows inserted or FALSE on failure

Updates a single record in $this->table.
This methods works only with dbCalls
@param array|int|string|null $id
@param array|null            $data

Compiles an update string and runs the query
This methods works only with dbCalls
@param array|null  $set       An associative array of update values
@param string|null $index     The where key
@param int         $batchSize The size of the batch to run
@param bool        $returnSQL True means SQL is returned, false will execute the query
@throws DatabaseException
@return mixed Number of rows affected or FALSE on failure

Deletes a single record from $this->table where $id matches
the table's primaryKey
This methods works only with dbCalls
@param array|int|string|null $id    The rows primary key(s)
@param bool                  $purge Allows overriding the soft deletes setting.
@throws DatabaseException
@return bool|string

Permanently deletes all rows that have been marked as deleted
through soft deletes (deleted = 1)
This methods works only with dbCalls
@return bool|mixed

Works with the find* methods to return only the rows that
have been deleted.
This methods works only with dbCalls

Compiles a replace into string and runs the query
This methods works only with dbCalls
@param array|null $data      Data
@param bool       $returnSQL Set to true to return Query String
@return mixed

Grabs the last error(s) that occurred from the Database connection.
The return array should be in the following format:
 ['source' => 'message']
This methods works only with dbCalls
@return array<string,string>

Returns the id value for the data array or object
@param array|object $data Data
@return array|int|string|null
@deprecated Use getIdValue() instead. Will be removed in version 5.0.

Returns the id value for the data array or object
@param array|object $data Data
@return array|int|string|null

Loops over records in batches, allowing you to operate on them.
Works with $this->builder to get the Compiled select to
determine the rows to operate on.
This methods works only with dbCalls
@throws DataException

Override countAllResults to account for soft deleted accounts.
@return mixed

Provides a shared instance of the Query Builder.
@throws ModelException
@return BaseBuilder

Captures the builder's set() method so that we can validate the
data here. This allows it to be used with any of the other
builder methods and still get validated data, like replace.
@param mixed     $key    Field name, or an array of field/value pairs
@param mixed     $value  Field value, if $key is a single field
@param bool|null $escape Whether to escape values
@return $this

This method is called on save to determine if entry have to be updated
If this method return false insert operation will be executed
@param array|object $data Data

Inserts data into the database. If an object is provided,
it will attempt to convert it to an array.
@param array|object|null $data
@param bool              $returnID Whether insert ID should be returned or not.
@throws ReflectionException
@return BaseResult|false|int|object|string

Updates a single record in the database. If an object is provided,
it will attempt to convert it into an array.
@param array|int|string|null $id
@param array|object|null     $data
@throws ReflectionException

Takes a class an returns an array of it's public and protected
properties as an array with raw values.
@param object|string $data
@param bool          $recursive If true, inner entities will be casted as array as well
@throws ReflectionException
@return array|null Array

Provides/instantiates the builder/db connection and model's table/primary key names and return type.
@param string $name Name
@return mixed

Checks for the existence of properties across this model, builder, and db connection.
@param string $name Name

Provides direct access to method in the builder (if available)
and the database connection.
@return mixed

Checks the Builder method name that should not be used in the Model.

Takes a class an returns an array of it's public and protected
properties as an array suitable for use in creates and updates.
@param object|string $data
@param string|null   $primaryKey
@throws ReflectionException
@codeCoverageIgnore
@deprecated since 4.1

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Model.php`

**Classes**:
- `CodeIgniter\extends`
- `CodeIgniter\Model extends BaseModel`
- `CodeIgniter\an`
- `CodeIgniter\an`

**Functions/Methods**:
- `__construct(?ConnectionInterface $db = null, ?ValidationInterface $validation = null)`
- `setTable(string $table)`
- `doFind(bool $singleton, $id = null)`
- `doFindColumn(string $columnName)`
- `doFindAll(int $limit = 0, int $offset = 0)`
- `doFirst()`
- `doInsert(array $data)`
- `doInsertBatch(?array $set = null, ?bool $escape = null, int $batchSize = 100, bool $testing = false)`
- `doUpdate($id = null, $data = null)`
- `doUpdateBatch(?array $set = null, ?string $index = null, int $batchSize = 100, bool $returnSQL = false)`
- `doDelete($id = null, bool $purge = false)`
- `doPurgeDeleted()`
- `doOnlyDeleted()`
- `doReplace(?array $data = null, bool $returnSQL = false)`
- `doErrors()`
- `idValue($data)`
- `getIdValue($data)`
- `chunk(int $size, Closure $userFunc)`
- `countAllResults(bool $reset = true, bool $test = false)`
- `builder(?string $table = null)`
- `set($key, $value = '', ?bool $escape = null)`
- `shouldUpdate($data)`
- `insert($data = null, bool $returnID = true)`
- `update($id = null, $data = null)`
- `objectToRawArray($data, bool $onlyChanged = true, bool $recursive = false)`
- `__get(string $name)`
- `__isset(string $name)`
- `__call(string $name, array $params)`
- `checkBuilderMethod(string $name)`
- `classToArray($data, $primaryKey = null, string $dateFormat = 'datetime', bool $onlyChanged = true)`

