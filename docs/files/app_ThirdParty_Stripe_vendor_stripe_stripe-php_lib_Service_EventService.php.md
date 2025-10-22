# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\EventService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\EventService.php`
- Type: PHP
- Size: 1439 bytes

## Summary (from docblocks)

List events, going back up to 30 days. Each event data is rendered according to
Stripe API version at its creation time, specified in <a
href="/docs/api/events/object">event object</a> <code>api_version</code>
attribute (not according to your current Stripe API version or
<code>Stripe-Version</code> header).
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Event>

Retrieves the details of an event. Supply the unique identifier of the event,
which you might have received in a webhook.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Event

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\EventService.php`

**Classes**:
- `Stripe\Service\EventService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`

