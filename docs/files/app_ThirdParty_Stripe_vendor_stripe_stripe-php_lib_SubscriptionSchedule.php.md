# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\SubscriptionSchedule.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\SubscriptionSchedule.php`
- Type: PHP
- Size: 4166 bytes

## Summary (from docblocks)

A subscription schedule allows you to create and manage the lifecycle of a
subscription by predefining expected changes.
Related guide: <a
href="https://stripe.com/docs/billing/subscriptions/subscription-schedules">Subscription
Schedules</a>.
@property string $id Unique identifier for the object.
@property string $object String representing the object's type. Objects of the same type share the same value.
@property null|string|\Stripe\StripeObject $application ID of the Connect Application that created the schedule.
@property null|int $canceled_at Time at which the subscription schedule was canceled. Measured in seconds since the Unix epoch.
@property null|int $completed_at Time at which the subscription schedule was completed. Measured in seconds since the Unix epoch.
@property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
@property null|\Stripe\StripeObject $current_phase Object representing the start and end dates for the current phase of the subscription schedule, if it is <code>active</code>.
@property string|\Stripe\Customer $customer ID of the customer who owns the subscription schedule.
@property \Stripe\StripeObject $default_settings
@property string $end_behavior Behavior of the subscription schedule and underlying subscription when it ends. Possible values are <code>release</code> and <code>cancel</code>.
@property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
@property null|\Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
@property \Stripe\StripeObject[] $phases Configuration for the subscription schedule's phases.
@property null|int $released_at Time at which the subscription schedule was released. Measured in seconds since the Unix epoch.
@property null|string $released_subscription ID of the subscription once managed by the subscription schedule (if it is released).
@property string $status The present status of the subscription schedule. Possible values are <code>not_started</code>, <code>active</code>, <code>completed</code>, <code>released</code>, and <code>canceled</code>. You can read more about the different states in our <a href="https://stripe.com/docs/billing/subscriptions/subscription-schedules">behavior guide</a>.
@property null|string|\Stripe\Subscription $subscription ID of the subscription managed by the subscription schedule.
@property null|string|\Stripe\TestHelpers\TestClock $test_clock ID of the test clock this subscription schedule belongs to.

@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\SubscriptionSchedule the canceled subscription schedule

@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\SubscriptionSchedule the released subscription schedule

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\SubscriptionSchedule.php`

**Classes**:
- `Stripe\SubscriptionSchedule extends ApiResource`

**Functions/Methods**:
- `cancel($params = null, $opts = null)`
- `release($params = null, $opts = null)`

