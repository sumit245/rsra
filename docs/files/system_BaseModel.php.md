# system\BaseModel.php

- Path: `system\BaseModel.php`
- Type: PHP
- Size: 48750 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

The BaseModel class provides a number of convenient features that
makes working with a databases less painful. Extending this class
provide means of implementing various database systems
It will:
     - simplifies pagination
     - allow specifying the return type (array, object, etc) with each call
     - automatically set and update timestamps
     - handle soft deletes
     - ensure validation is run against objects when saving items
     - process various callbacks
     - allow intermingling calls to the db connection

Pager instance.
Populated after calling $this->paginate()
@var Pager

Last insert ID
@var int|string

The Database connection group that
should be instantiated.
@var string

The format that the results should be returned as.
Will be overridden if the as* methods are used.
@var string

If this model should use "softDeletes" and
simply set a date when rows are deleted, or
do hard deletes.
@var bool

An array of field names that are allowed
to be set by the user in inserts/updates.
@var array

If true, will set created_at, and updated_at
values during insert and update routines.
@var bool

The type of column that created_at and updated_at
are expected to.
Allowed: 'datetime', 'date', 'int'
@var string

The column used for insert timestamps
@var string

The column used for update timestamps
@var string

Used by withDeleted to override the
model's softDelete setting.
@var bool

The column used to save soft delete state
@var string

Used by asArray and asObject to provide
temporary overrides of model default.
@var string

Whether we should limit fields in inserts
and updates to those available in $allowedFields or not.
@var bool

Database Connection
@var BaseConnection

Rules used to validate data in insert, update, and save methods.
The array must match the format of data passed to the Validation
library.
@var array|string

Contains any custom error messages to be
used during data validation.
@var array

Skip the model's validation. Used in conjunction with skipValidation()
to skip data validation for any future calls.
@var bool

Whether rules should be removed that do not exist
in the passed in data. Used between inserts/updates.
@var bool

Our validator instance.
@var Validation

Whether to trigger the defined callbacks
@var bool

Used by allowCallbacks() to override the
model's allowCallbacks setting.
@var bool

Callbacks for beforeInsert
@var array

Callbacks for afterInsert
@var array

Callbacks for beforeUpdate
@var array

Callbacks for afterUpdate
@var array

Callbacks for beforeFind
@var array

Callbacks for afterFind
@var array

Callbacks for beforeDelete
@var array

Callbacks for afterDelete
@var array

@var Validation|null $validation

Initializes the instance with any additional steps.
Optionally implemented by child classes.

Fetches the row of database
This methods works only with dbCalls
@param bool                  $singleton Single or multiple results
@param array|int|string|null $id        One primary key or an array of primary keys
@return array|object|null The resulting row of data, or null.

Fetches the column of database
This methods works only with dbCalls
@param string $columnName Column Name
@throws DataException
@return array|null The resulting row of data, or null if no data found.

Fetches all results, while optionally limiting them.
This methods works only with dbCalls
@param int $limit  Limit
@param int $offset Offset
@return array

Returns the first row of the result set.
This methods works only with dbCalls
@return array|object|null

Inserts data into the current database
This methods works only with dbCalls
@param array $data Data
@return bool|int|string

Compiles batch insert and runs the queries, validating each row prior.
This methods works only with dbCalls
@param array|null $set       An associative array of insert values
@param bool|null  $escape    Whether to escape values
@param int        $batchSize The size of the batch to run
@param bool       $testing   True means only number of records is returned, false will execute the query
@return bool|int Number of rows inserted or FALSE on failure

Updates a single record in the database.
This methods works only with dbCalls
@param array|int|string|null $id   ID
@param array|null            $data Data

Compiles an update and runs the query
This methods works only with dbCalls
@param array|null  $set       An associative array of update values
@param string|null $index     The where key
@param int         $batchSize The size of the batch to run
@param bool        $returnSQL True means SQL is returned, false will execute the query
@throws DatabaseException
@return mixed Number of rows affected or FALSE on failure

Deletes a single record from the database where $id matches
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

Compiles a replace and runs the query
This methods works only with dbCalls
@param array|null $data      Data
@param bool       $returnSQL Set to true to return Query String
@return mixed

Grabs the last error(s) that occurred from the Database connection.
This methods works only with dbCalls
@return array|null

Returns the id value for the data array or object
@param array|object $data Data
@return array|int|string|null
@deprecated Add an override on getIdValue() instead. Will be removed in version 5.0.

Public getter to return the id value using the idValue() method
For example with SQL this will return $data->$this->primaryKey
@param array|object $data
@return array|int|string|null
@todo: Make abstract in version 5.0

Override countAllResults to account for soft deleted accounts.
This methods works only with dbCalls
@param bool $reset Reset
@param bool $test  Test
@return mixed

Loops over records in batches, allowing you to operate on them.
This methods works only with dbCalls
@param int     $size     Size
@param Closure $userFunc Callback Function
@throws DataException

Fetches the row of database
@param array|int|string|null $id One primary key or an array of primary keys
@return array|object|null The resulting row of data, or null.

Fetches the column of database
@param string $columnName Column Name
@throws DataException
@return array|null The resulting row of data, or null if no data found.

Fetches all results, while optionally limiting them.
@param int $limit  Limit
@param int $offset Offset
@return array

Returns the first row of the result set.
@return array|object|null

A convenience method that will attempt to determine whether the
data should be inserted or updated. Will work with either
an array or object. When using with custom class objects,
you must ensure that the class will provide access to the class
variables, even if through a magic method.
@param array|object $data Data
@throws ReflectionException

This method is called on save to determine if entry have to be updated
If this method return false insert operation will be executed
@param array|object $data Data

Returns last insert ID or 0.
@return int|string

Inserts data into the database. If an object is provided,
it will attempt to convert it to an array.
@param array|object|null $data     Data
@param bool              $returnID Whether insert ID should be returned or not.
@throws ReflectionException
@return bool|int|string

Compiles batch insert runs the queries, validating each row prior.
@param array|null $set       an associative array of insert values
@param bool|null  $escape    Whether to escape values
@param int        $batchSize The size of the batch to run
@param bool       $testing   True means only number of records is returned, false will execute the query
@throws ReflectionException
@return bool|int Number of rows inserted or FALSE on failure

Updates a single record in the database. If an object is provided,
it will attempt to convert it into an array.
@param array|int|string|null $id
@param array|object|null     $data
@throws ReflectionException

Compiles an update and runs the query
@param array|null  $set       An associative array of update values
@param string|null $index     The where key
@param int         $batchSize The size of the batch to run
@param bool        $returnSQL True means SQL is returned, false will execute the query
@throws DatabaseException
@throws ReflectionException
@return mixed Number of rows affected or FALSE on failure

Deletes a single record from the database where $id matches
@param array|int|string|null $id    The rows primary key(s)
@param bool                  $purge Allows overriding the soft deletes setting.
@throws DatabaseException
@return BaseResult|bool

Permanently deletes all rows that have been marked as deleted
through soft deletes (deleted = 1)
@return mixed

Sets $useSoftDeletes value so that we can temporarily override
the soft deletes settings. Can be used for all find* methods.
@param bool $val Value
@return $this

Works with the find* methods to return only the rows that
have been deleted.
@return $this

Compiles a replace and runs the query
@param array|null $data      Data
@param bool       $returnSQL Set to true to return Query String
@return mixed

Grabs the last error(s) that occurred. If data was validated,
it will first check for errors there, otherwise will try to
grab the last error from the Database connection.
The return array should be in the following format:
 ['source' => 'message']
@param bool $forceDB Always grab the db error, not validation
@return array<string,string>

Works with Pager to get the size and offset parameters.
Expects a GET variable (?page=2) that specifies the page of results
to display.
@param int|null $perPage Items per page
@param string   $group   Will be used by the pagination library to identify a unique pagination set.
@param int|null $page    Optional page number (useful when the page number is provided in different way)
@param int      $segment Optional URI segment number (if page number is provided by URI segment)
@return array|null

It could be used when you have to change default or override current allowed fields.
@param array $allowedFields Array with names of fields
@return $this

Sets whether or not we should whitelist data set during
updates or inserts against $this->availableFields.
@param bool $protect Value
@return $this

Ensures that only the fields that are allowed to be updated
are in the data array.
Used by insert() and update() to protect against mass assignment
vulnerabilities.
@param array $data Data
@throws DataException

Sets the date or current date if null value is passed
@param int|null $userData An optional PHP timestamp to be converted.
@throws ModelException
@return mixed

A utility function to allow child models to use the type of
date/time format that they prefer. This is primarily used for
setting created_at, updated_at and deleted_at values, but can be
used by inheriting classes.
The available time formats are:
 - 'int'      - Stores the date as an integer timestamp
 - 'datetime' - Stores the data in the SQL datetime format
 - 'date'     - Stores the date (only) in the SQL date format.
@param int $value value
@throws ModelException
@return int|string

Converts Time value to string using $this->dateFormat
The available time formats are:
 - 'int'      - Stores the date as an integer timestamp
 - 'datetime' - Stores the data in the SQL datetime format
 - 'date'     - Stores the date (only) in the SQL date format.
@param Time $value value
@return int|string

Set the value of the skipValidation flag.
@param bool $skip Value
@return $this

Allows to set validation messages.
It could be used when you have to change default or override current validate messages.
@param array $validationMessages Value
@return $this

Allows to set field wise validation message.
It could be used when you have to change default or override current validate messages.
@param string $field         Field Name
@param array  $fieldMessages Validation messages
@return $this

Allows to set validation rules.
It could be used when you have to change default or override current validate rules.
@param array $validationRules Value
@return $this

Allows to set field wise validation rules.
It could be used when you have to change default or override current validate rules.
@param string       $field      Field Name
@param array|string $fieldRules Validation rules
@return $this

Should validation rules be removed before saving?
Most handy when doing updates.
@param bool $choice Value
@return $this

Validate the data against the validation rules (or the validation group)
specified in the class property, $validationRules.
@param array|object $data Data

Returns the model's defined validation rules so that they
can be used elsewhere, if needed.
@param array $options Options

Returns the model's define validation messages so they
can be used elsewhere, if needed.

Removes any rules that apply to fields that have not been set
currently so that rules don't block updating when only updating
a partial row.
@param array      $rules Array containing field name and rule
@param array|null $data  Data

Sets $tempAllowCallbacks value so that we can temporarily override
the setting. Resets after the next method that uses triggers.
@param bool $val value
@return $this

A simple event trigger for Model Events that allows additional
data manipulation within the model. Specifically intended for
usage by child models this can be used to format data,
save/load related classes, etc.
It is the responsibility of the callback methods to return
the data itself.
Each $eventData array MUST have a 'data' key with the relevant
data for callback methods (like an array of key/value pairs to insert
or update, an array of results, etc)
If callbacks are not allowed then returns $eventData immediately.
@param string $event     Event
@param array  $eventData Event Data
@throws DataException
@return mixed

Sets the return type of the results to be as an associative array.
@return $this

Sets the return type to be of the specified type of object.
Defaults to a simple object, but can be any class that has
class vars with the same name as the collection columns,
or at least allows them to be created.
@param string $class Class Name
@return $this

Takes a class and returns an array of it's public and protected
properties as an array suitable for use in creates and updates.
This method uses objectToRawArray() internally and does conversion
to string on all Time instances
@param object|string $data        Data
@param bool          $onlyChanged Only Changed Property
@param bool          $recursive   If true, inner entities will be casted as array as well
@throws ReflectionException
@return array Array

Takes a class and returns an array of its public and protected
properties as an array with raw values.
@param object|string $data        Data
@param bool          $onlyChanged Only Changed Property
@param bool          $recursive   If true, inner entities will be casted as array as well
@throws ReflectionException
@return array|null Array

Transform data to array
@param array|object|null $data Data
@param string            $type Type of data (insert|update)
@throws DataException
@throws InvalidArgumentException
@throws ReflectionException

Provides the db connection and model's properties.
@param string $name Name
@return mixed

Checks for the existence of properties across this model, and db connection.
@param string $name Name

Provides direct access to method in the database connection.
@param string $name   Name
@param array  $params Params
@return $this|null

Replace any placeholders within the rules with the values that
match the 'key' of any properties being set. For example, if
we had the following $data array:
[ 'id' => 13 ]
and the following rule:
 'required|is_unique[users,email,id,{id}]'
The value of {id} would be replaced with the actual id in the form data:
 'required|is_unique[users,email,id,13]'
@param array $rules Validation rules
@param array $data  Data
@codeCoverageIgnore
@deprecated use fillPlaceholders($rules, $data) from Validation instead

## References

**Database Tables (inferred)**
- `the`
- `Validation`

## Symbols

# Symbols

**Files documented**: 1

## `system\BaseModel.php`

**Classes**:
- `CodeIgniter\provides`
- `CodeIgniter\BaseModel`
- `CodeIgniter\objects`
- `CodeIgniter\will`
- `CodeIgniter\with`
- `CodeIgniter\with`
- `CodeIgniter\property`
- `CodeIgniter\that`
- `CodeIgniter\vars`
- `CodeIgniter\Class`
- `CodeIgniter\and`
- `CodeIgniter\and`
- `CodeIgniter\with`

**Functions/Methods**:
- `__construct(?ValidationInterface $validation = null)`
- `initialize()`
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
- `countAllResults(bool $reset = true, bool $test = false)`
- `chunk(int $size, Closure $userFunc)`
- `find($id = null)`
- `findColumn(string $columnName)`
- `findAll(int $limit = 0, int $offset = 0)`
- `first()`
- `save($data)`
- `shouldUpdate($data)`
- `getInsertID()`
- `insert($data = null, bool $returnID = true)`
- `insertBatch(?array $set = null, ?bool $escape = null, int $batchSize = 100, bool $testing = false)`
- `update($id = null, $data = null)`
- `updateBatch(?array $set = null, ?string $index = null, int $batchSize = 100, bool $returnSQL = false)`
- `delete($id = null, bool $purge = false)`
- `purgeDeleted()`
- `withDeleted(bool $val = true)`
- `onlyDeleted()`
- `replace(?array $data = null, bool $returnSQL = false)`
- `errors(bool $forceDB = false)`
- `paginate(?int $perPage = null, string $group = 'default', ?int $page = null, int $segment = 0)`
- `setAllowedFields(array $allowedFields)`
- `protect(bool $protect = true)`
- `doProtectFields(array $data)`
- `setDate(?int $userData = null)`
- `intToDate(int $value)`
- `timeToDate(Time $value)`
- `skipValidation(bool $skip = true)`
- `setValidationMessages(array $validationMessages)`
- `setValidationMessage(string $field, array $fieldMessages)`
- `setValidationRules(array $validationRules)`
- `setValidationRule(string $field, $fieldRules)`
- `cleanRules(bool $choice = false)`
- `validate($data)`
- `getValidationRules(array $options = [])`
- `getValidationMessages()`
- `cleanValidationRules(array $rules, ?array $data = null)`
- `allowCallbacks(bool $val = true)`
- `trigger(string $event, array $eventData)`
- `asArray()`
- `asObject(string $class = 'object')`
- `objectToArray($data, bool $onlyChanged = true, bool $recursive = false)`
- `objectToRawArray($data, bool $onlyChanged = true, bool $recursive = false)`
- `transformDataToArray($data, string $type)`
- `__get(string $name)`
- `__isset(string $name)`
- `__call(string $name, array $params)`
- `fillPlaceholders(array $rules, array $data)`

