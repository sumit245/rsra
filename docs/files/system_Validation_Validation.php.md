# system\Validation\Validation.php

- Path: `system\Validation\Validation.php`
- Type: PHP
- Size: 23680 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Validator

Files to load with validation functions.
@var array

The loaded instances of our validation files.
@var array

Stores the actual rules that should
be ran against $data.
@var array

The data that should be validated,
where 'key' is the alias, with value.
@var array

Any generated errors during validation.
'key' is the alias, 'value' is the message.
@var array

Stores custom error message to use
during validation. Where 'key' is the alias.
@var array

Our configuration.
@var ValidationConfig

The view renderer used to render validation messages.
@var RendererInterface

Validation constructor.
@param ValidationConfig $config

Runs the validation process, returning true/false determining whether
validation was successful or not.
@param array|null  $data    The array of data to validate.
@param string|null $group   The predefined group of rules to apply.
@param string|null $dbGroup The database group to use.

Runs the validation process, returning true or false
determining whether validation was successful or not.
@param mixed    $value
@param string[] $errors

Runs all of $rules against $field, until one fails, or
all of them have been processed. If one fails, it adds
the error to $this->errors and moves on to the next,
so that we can collect all of the first errors.
@param array|string $value
@param array|null   $rules
@param array        $data

Takes a Request object and grabs the input data to use from its
array values.

@var IncomingRequest $request

Sets an individual rule and custom error messages for a single field.
The custom error message should be just the messages that apply to
this field, like so:
   [
       'rule' => 'message',
       'rule' => 'message'
   ]
@param array|string $rules
@throws TypeError
@return $this

Stores the rules that should be used to validate the items.
Rules should be an array formatted like:
   [
       'field' => 'rule1|rule2'
   ]
The $errors array should be formatted like:
   [
       'field' => [
           'rule' => 'message',
           'rule' => 'message
       ],
   ]
@param array $errors // An array of custom error messages

Returns all of the rules currently defined.

Checks to see if the rule for key $field has been set or not.

Get rule group.
@param string $group Group.
@throws InvalidArgumentException If group not found.
@return string[] Rule group.

Set rule group.
@param string $group Group.
@throws InvalidArgumentException If group not found.

Returns the rendered HTML of the errors as defined in $template.

Displays a single error in formatted HTML as defined in the $template view.

Loads all of the rulesets classes that have been defined in the
Config\Validation and stores them locally so we can use them.

Loads custom rule groups (if set) into the current rules.
Rules can be pre-defined in Config\Validation and can
be any name, but must all still be an array of the
same format used with setRules(). Additionally, check
for {group}_errors for an array of custom error messages.
@return array|ValidationException|null

Replace any placeholders within the rules with the values that
match the 'key' of any properties being set. For example, if
we had the following $data array:
[ 'id' => 13 ]
and the following rule:
 'required|is_unique[users,email,id,{id}]'
The value of {id} would be replaced with the actual id in the form data:
 'required|is_unique[users,email,id,13]'

Checks to see if an error exists for the given field.

Returns the error(s) for a specified $field (or empty string if not
set).

Returns the array of errors that were encountered during
a run() call. The array should be in the following format:
   [
       'field1' => 'error message',
       'field2' => 'error message',
   ]
@return array<string, string>
@codeCoverageIgnore

Sets the error for a specific field. Used by custom validation methods.

Attempts to find the appropriate error message
@param string|null $value The value that caused the validation to fail.

Split rules string by pipe operator.

Resets the class to a blank slate. Should be called whenever
you need to process more than one array.

## References

**Database Tables (inferred)**
- `the`
- `its`
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `system\Validation\Validation.php`

**Classes**:
- `CodeIgniter\Validation\Validation implements ValidationInterface`
- `CodeIgniter\Validation\to`

**Functions/Methods**:
- `__construct($config, RendererInterface $view)`
- `run(?array $data = null, ?string $group = null, ?string $dbGroup = null)`
- `check($value, string $rule, array $errors = [])`
- `processRules(string $field, ?string $label, $value, $rules = null, ?array $data = null)`
- `withRequest(RequestInterface $request)`
- `setRule(string $field, ?string $label, $rules, array $errors = [])`
- `setRules(array $rules, array $errors = [])`
- `getRules()`
- `hasRule(string $field)`
- `getRuleGroup(string $group)`
- `setRuleGroup(string $group)`
- `listErrors(string $template = 'list')`
- `showError(string $field, string $template = 'single')`
- `loadRuleSets()`
- `loadRuleGroup(?string $group = null)`
- `fillPlaceholders(array $rules, array $data)`
- `hasError(string $field)`
- `getError(?string $field = null)`
- `getErrors()`
- `setError(string $field, string $error)`
- `getErrorMessage(string $rule, string $field, ?string $label = null, ?string $param = null, ?string $value = null)`
- `splitRules(string $rules)`
- `reset()`

