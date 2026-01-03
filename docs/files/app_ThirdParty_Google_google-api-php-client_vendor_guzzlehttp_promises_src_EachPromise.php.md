# app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\promises\src\EachPromise.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\promises\src\EachPromise.php`
- Type: PHP
- Size: 7278 bytes

## Summary (from docblocks)

Represents a promise that iterates over many promises and invokes
side-effect functions in the process.

@var \Iterator

@var callable|int

@var callable

@var callable

@var Promise

@var bool

Configuration hash can include the following key value pairs:
- fulfilled: (callable) Invoked when a promise fulfills. The function
  is invoked with three arguments: the fulfillment value, the index
  position from the iterable list of the promise, and the aggregate
  promise that manages all of the promises. The aggregate promise may
  be resolved from within the callback to short-circuit the promise.
- rejected: (callable) Invoked when a promise is rejected. The
  function is invoked with three arguments: the rejection reason, the
  index position from the iterable list of the promise, and the
  aggregate promise that manages all of the promises. The aggregate
  promise may be resolved from within the callback to short-circuit
  the promise.
- concurrency: (integer) Pass this configuration option to limit the
  allowed number of outstanding concurrently executing promises,
  creating a capped pool of promises. There is no limit by default.
@param mixed    $iterable Promises or values to iterate.
@param array    $config   Configuration options

## References

**Database Tables (inferred)**
- `the`
- `within`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\guzzlehttp\promises\src\EachPromise.php`

**Classes**:
- `GuzzleHttp\Promise\EachPromise implements PromisorInterface`

**Functions/Methods**:
- `__construct($iterable, array $config = [])`
- `promise()`
- `createPromise()`
- `refillPending()`
- `addPending()`
- `advanceIterator()`
- `step($idx)`
- `checkIfFinished()`

