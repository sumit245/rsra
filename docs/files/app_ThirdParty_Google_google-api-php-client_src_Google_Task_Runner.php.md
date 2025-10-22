# app\ThirdParty\Google\google-api-php-client\src\Google\Task\Runner.php

- Path: `app\ThirdParty\Google\google-api-php-client\src\Google\Task\Runner.php`
- Type: PHP
- Size: 7205 bytes

## Summary (from docblocks)

A task runner with exponential backoff support.
@see https://developers.google.com/drive/web/handle-errors#implementing_exponential_backoff

@var integer $maxDelay The max time (in seconds) to wait before a retry.

@var integer $delay The previous delay from which the next is calculated.

@var integer $factor The base number for the exponential back off.

@var float $jitter A random number between -$jitter and $jitter will be
added to $factor on each iteration to allow for a better distribution of
retries.

@var integer $attempts The number of attempts that have been tried so far.

@var integer $maxAttempts The max number of attempts allowed.

@var callable $action The task to run and possibly retry.

@var array $arguments The task arguments.

@var array $retryMap Map of errors with retry counts.

Creates a new task runner with exponential backoff support.
@param array $config The task runner config
@param string $name The name of the current task (used for logging)
@param callable $action The task to run and possibly retry
@param array $arguments The task arguments
@throws Google_Task_Exception when misconfigured

Checks if a retry can be attempted.
@return boolean

Runs the task and (if applicable) automatically retries when errors occur.
@return mixed
@throws Google_Task_Retryable on failure when no retries are available.

Runs a task once, if possible. This is useful for bypassing the `run()`
loop.
NOTE: If this is not the first attempt, this function will sleep in
accordance to the backoff configurations before running the task.
@return boolean

Sleeps in accordance to the backoff configurations.

Gets the delay (in seconds) for the current backoff period.
@return float

Gets the current jitter (random number between -$this->jitter and
$this->jitter).
@return float

Gets the number of times the associated task can be retried.
NOTE: -1 is returned if the task can be retried indefinitely
@return integer

## References

**Database Tables (inferred)**
- `which`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\src\Google\Task\Runner.php`

**Classes**:
- `Google_Task_Runner`

**Functions/Methods**:
- `__construct($config,
      $name,
      $action,
      array $arguments = array()`
- `canAttempt()`
- `run()`
- `attempt()`
- `backOff()`
- `getDelay()`
- `getJitter()`
- `allowedRetries($code, $errors = array()`
- `setRetryMap($retryMap)`

