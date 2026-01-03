# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\promises\src\TaskQueue.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\promises\src\TaskQueue.php`
- Type: PHP
- Size: 1928 bytes

## Summary (from docblocks)

A task queue that executes tasks in a FIFO order.
This task queue class is used to settle promises asynchronously and
maintains a constant stack size. You can use the task queue asynchronously
by calling the `run()` function of the global task queue in an event loop.
    GuzzleHttp\Promise\queue()->run();

@var callable $task

The task queue will be run and exhausted by default when the process
exits IFF the exit is not the result of a PHP E_ERROR error.
You can disable running the automatic shutdown of the queue by calling
this function. If you disable the task queue shutdown process, then you
MUST either run the task queue (as a result of running your event loop
or manually using the run() method) or wait on each outstanding promise.
Note: This shutdown will occur before any destructors are triggered.

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\promises\src\TaskQueue.php`

**Classes**:
- `GuzzleHttp\Promise\is`
- `GuzzleHttp\Promise\TaskQueue implements TaskQueueInterface`

**Functions/Methods**:
- `__construct($withShutdown = true)`
- `isEmpty()`
- `add(callable $task)`
- `run()`
- `disableShutdown()`

