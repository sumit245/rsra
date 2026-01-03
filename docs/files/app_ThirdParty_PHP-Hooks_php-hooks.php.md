# app\ThirdParty\PHP-Hooks\php-hooks.php

- Path: `app\ThirdParty\PHP-Hooks\php-hooks.php`
- Type: PHP
- Size: 20596 bytes

## Summary (from docblocks)

PHP Hooks Class
The PHP Hooks Class is a fork of the WordPress filters hook system rolled in to a class to be ported
into any php based system
This class is heavily based on the WordPress plugin API and most (if not all) of the code comes from there.
@version 0.1.3
@copyright 2012 - 2014
@author Ohad Raz (email: admin@bainternet.info)
@link http://en.bainternet.info
@license GNU General Public LIcense v3.0 - license.txt
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
@package PHP Hooks

Hooks

$filters holds list of hooks
@access public
@since 0.1
@var array

$merged_filters
@var array

$actions
@var array

$current_filter  holds the name of the current filter
@access public
@since 0.1
@var array

__construct class constructor
@access public
@since 0.1

FILTERS

add_filter Hooks a function or method to a specific filter action.
@access public
@since 0.1
@param string $tag The name of the filter to hook the $function_to_add to.
@param callback $function_to_add The name of the function to be called when the filter is applied.
@param int $priority optional. Used to specify the order in which the functions associated with a particular action are executed (default: 10). Lower numbers correspond with earlier execution, and functions with the same priority are executed in the order in which they were added to the action.
@param int $accepted_args optional. The number of arguments the function accept (default 1).
@return boolean true

remove_filter Removes a function from a specified filter hook.
@access public
@since 0.1
@param string $tag The filter hook to which the function to be removed is hooked.
@param callback $function_to_remove The name of the function which should be removed.
@param int $priority optional. The priority of the function (default: 10).
@param int $accepted_args optional. The number of arguments the function accepts (default: 1).
@return boolean Whether the function existed before it was removed.

remove_all_filters Remove all of the hooks from a filter.
@access public
@since 0.1
@param string $tag The filter to remove hooks from.
@param int $priority The priority number to remove.
@return bool True when finished.

has_filter  Check if any filter has been registered for a hook.
@access public
@since 0.1
@param string $tag The name of the filter hook.
@param callback $function_to_check optional.
@return mixed If $function_to_check is omitted, returns boolean for whether the hook has anything registered.
  When checking a specific function, the priority of that hook is returned, or false if the function is not attached.
  When using the $function_to_check argument, this function may return a non-boolean value that evaluates to false
  (e.g.) 0, so use the === operator for testing the return value.

apply_filters Call the functions added to a filter hook.
@access public
@since 0.1
@param string $tag The name of the filter hook.
@param mixed $value The value on which the filters hooked to <tt>$tag</tt> are applied on.
@param mixed $var,... Additional variables passed to the functions hooked to <tt>$tag</tt>.
@return mixed The filtered value after all hooked functions are applied to it.

apply_filters_ref_array Execute functions hooked on a specific filter hook, specifying arguments in an array.
@access public
@since 0.1
@param string $tag The name of the filter hook.
@param array $args The arguments supplied to the functions hooked to <tt>$tag</tt>
@return mixed The filtered value after all hooked functions are applied to it.

ACTIONS

add_action Hooks a function on to a specific action.
@access public
@since 0.1
@param string $tag The name of the action to which the $function_to_add is hooked.
@param callback $function_to_add The name of the function you wish to be called.
@param int $priority optional. Used to specify the order in which the functions associated with a particular action are executed (default: 10). Lower numbers correspond with earlier execution, and functions with the same priority are executed in the order in which they were added to the action.
@param int $accepted_args optional. The number of arguments the function accept (default 1).

has_action Check if any action has been registered for a hook.
@access public
@since 0.1
@param string $tag The name of the action hook.
@param callback $function_to_check optional.
@return mixed If $function_to_check is omitted, returns boolean for whether the hook has anything registered.
  When checking a specific function, the priority of that hook is returned, or false if the function is not attached.
  When using the $function_to_check argument, this function may return a non-boolean value that evaluates to false
  (e.g.) 0, so use the === operator for testing the return value.

remove_action Removes a function from a specified action hook.
@access public
@since 0.1
@param string $tag The action hook to which the function to be removed is hooked.
@param callback $function_to_remove The name of the function which should be removed.
@param int $priority optional The priority of the function (default: 10).
@return boolean Whether the function is removed.

remove_all_actions Remove all of the hooks from an action.
@access public
@since 0.1
@param string $tag The action to remove hooks from.
@param int $priority The priority number to remove them from.
@return bool True when finished.

do_action Execute functions hooked on a specific action hook.
@access public
@since 0.1
@param string $tag The name of the action to be executed.
@param mixed $arg,... Optional additional arguments which are passed on to the functions hooked to the action.
@return null Will return null if $tag does not exist in $filter array

do_action_ref_array Execute functions hooked on a specific action hook, specifying arguments in an array.
@access public
@since 0.1
@param string $tag The name of the action to be executed.
@param array $args The arguments supplied to the functions hooked to <tt>$tag</tt>
@return null Will return null if $tag does not exist in $filter array

did_action Retrieve the number of times an action is fired.
@access public
@since 0.1
@param string $tag The name of the action hook.
@return int The number of times action hook <tt>$tag</tt> is fired

HELPERS

current_filter Retrieve the name of the current filter or action.
@access public
@since 0.1
@return string Hook name of the current filter or action.

Retrieve the name of the current action.
@since 0.1.2
@uses current_filter()
@return string Hook name of the current action.

Retrieve the name of a filter currently being processed.
The function current_filter() only returns the most recent filter or action
being executed. did_action() returns true once the action is initially
processed. This function allows detection for any filter currently being
executed (despite not being the most recent filter to fire, in the case of
hooks called from hook callbacks) to be verified.
@since 0.1.2
@see current_filter()
@see did_action()
@global array $wp_current_filter Current filter.
@param null|string $filter Optional. Filter to check. Defaults to null, which
                           checks if any filter is currently being run.
@return bool Whether the filter is currently in the stack

Retrieve the name of an action currently being processed.
@since 0.1.2
@uses doing_filter()
@param string|null $action Optional. Action to check. Defaults to null, which checks
                           if any action is currently being run.
@return bool Whether the action is currently in the stack.

_filter_build_unique_id Build Unique ID for storage and retrieval.
@param string $tag Used in counting how many hooks were applied
@param callback $function Used for creating unique id
@param int|bool $priority Used in counting how many hooks were applied. If === false and $function is an object reference, we return the unique id only if it already has one, false otherwise.
@return string|bool Unique ID for usage as array key or false if $priority === false and $function is an object reference, and it does not already have a unique id.

__call_all_hook
@access public
@since 0.1
@param  (array) $args [description]

## References

**Database Tables (inferred)**
- `there`
- `a`
- `an`
- `hook`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHP-Hooks\php-hooks.php`

**Classes**:
- `to`
- `is`
- `Hooks`
- `constructor`

**Functions/Methods**:
- `__construct($args = null)`
- `accept(default 1)`
- `add_filter($tag, $function_to_add, $priority = 10, $accepted_args = 2)`
- `accepts(default: 1)`
- `remove_filter($tag, $function_to_remove, $priority = 10)`
- `remove_all_filters($tag, $priority = false)`
- `has_filter($tag, $function_to_check = false)`
- `apply_filters($tag, $value)`
- `apply_filters_ref_array($tag, $args)`
- `accept(default 1)`
- `add_action($tag, $function_to_add, $priority = 10, $accepted_args = 1)`
- `has_action($tag, $function_to_check = false)`
- `remove_action($tag, $function_to_remove, $priority = 10)`
- `remove_all_actions($tag, $priority = false)`
- `do_action($tag, $arg = '')`
- `do_action_ref_array($tag, $args)`
- `did_action($tag)`
- `current_filter()`
- `current_action()`
- `current_filter()`
- `doing_filter($filter = null)`
- `doing_action($action = null)`
- `_filter_build_unique_id($tag, $function, $priority)`
- `__call_all_hook($args)`

