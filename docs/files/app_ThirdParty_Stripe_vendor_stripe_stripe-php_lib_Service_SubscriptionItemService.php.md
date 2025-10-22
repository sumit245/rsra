# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\SubscriptionItemService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\SubscriptionItemService.php`
- Type: PHP
- Size: 5876 bytes

## Summary (from docblocks)

Returns a list of your subscription items for a given subscription.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\SubscriptionItem>

For the specified subscription item, returns a list of summary objects. Each
object in the list provides usage information that’s been summarized from
multiple usage records and over a subscription billing period (e.g., 15 usage
records in the month of September).
The list is sorted in reverse-chronological order (newest first). The first list
item represents the most current usage period that hasn’t ended yet. Since new
usage records can still be added, the returned summary information for the
subscription item’s ID should be seen as unstable until the subscription billing
period ends.
@param string $parentId
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\UsageRecordSummary>

Adds a new item to an existing subscription. No existing items will be changed
or replaced.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\SubscriptionItem

Creates a usage record for a specified subscription item and date, and fills it
with a quantity.
Usage records provide <code>quantity</code> information that Stripe uses to
track how much a customer is using your service. With usage information and the
pricing model set up by the <a
href="https://stripe.com/docs/billing/subscriptions/metered-billing">metered
billing</a> plan, Stripe helps you send accurate invoices to your customers.
The default calculation for usage is to add up all the <code>quantity</code>
values of the usage records within a billing period. You can change this default
behavior with the billing plan’s <code>aggregate_usage</code> <a
href="/docs/api/plans/create#create_plan-aggregate_usage">parameter</a>. When
there is more than one usage record with the same timestamp, Stripe adds the
<code>quantity</code> values together. In most cases, this is the desired
resolution, however, you can change this behavior with the <code>action</code>
parameter.
The default pricing model for metered billing is <a
href="/docs/api/plans/object#plan_object-billing_scheme">per-unit pricing</a>.
For finer granularity, you can configure metered billing to have a <a
href="https://stripe.com/docs/billing/subscriptions/tiers">tiered pricing</a>
model.
@param string $parentId
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\UsageRecord

Deletes an item from the subscription. Removing a subscription item from a
subscription will not cancel the subscription.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\SubscriptionItem

Retrieves the subscription item with the given ID.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\SubscriptionItem

Updates the plan or quantity of an item on a current subscription.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\SubscriptionItem

## References

**Database Tables (inferred)**
- `our`
- `the`
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\SubscriptionItemService.php`

**Classes**:
- `Stripe\Service\SubscriptionItemService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `allUsageRecordSummaries($parentId, $params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `createUsageRecord($parentId, $params = null, $opts = null)`
- `delete($id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

