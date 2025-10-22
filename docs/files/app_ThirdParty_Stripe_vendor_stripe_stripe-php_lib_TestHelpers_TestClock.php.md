# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\TestHelpers\TestClock.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\TestHelpers\TestClock.php`
- Type: PHP
- Size: 2202 bytes

## Summary (from docblocks)

A test clock enables deterministic control over objects in testmode. With a test
clock, you can create objects at a frozen time in the past or future, and
advance to a specific future time to observe webhooks and state changes. After
the clock advances, you can either validate the current state of your scenario
(and test your assumptions), change the current state of your scenario (and test
more complex scenarios), or keep advancing forward in time.
@property string $id Unique identifier for the object.
@property string $object String representing the object's type. Objects of the same type share the same value.
@property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
@property int $deletes_after Time at which this clock is scheduled to auto delete.
@property int $frozen_time Time at which all objects belonging to this clock are frozen.
@property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
@property null|string $name The custom name supplied at creation.
@property string $status The status of the Test Clock.

@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\TestHelpers\TestClock the advanced test clock

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\TestHelpers\TestClock.php`

**Classes**:
- `Stripe\TestHelpers\TestClock extends \Stripe\ApiResource`

**Functions/Methods**:
- `advance($params = null, $opts = null)`

