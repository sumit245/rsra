# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\WebhookEndpointService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\WebhookEndpointService.php`
- Type: PHP
- Size: 3389 bytes

## Summary (from docblocks)

Returns a list of your webhook endpoints.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\WebhookEndpoint>

A webhook endpoint must have a <code>url</code> and a list of
<code>enabled_events</code>. You may optionally specify the Boolean
<code>connect</code> parameter. If set to true, then a Connect webhook endpoint
that notifies the specified <code>url</code> about events from all connected
accounts is created; otherwise an account webhook endpoint that notifies the
specified <code>url</code> only about events from your account is created. You
can also create webhook endpoints in the <a
href="https://dashboard.stripe.com/account/webhooks">webhooks settings</a>
section of the Dashboard.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\WebhookEndpoint

You can also delete webhook endpoints via the <a
href="https://dashboard.stripe.com/account/webhooks">webhook endpoint
management</a> page of the Stripe dashboard.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\WebhookEndpoint

Retrieves the webhook endpoint with the given ID.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\WebhookEndpoint

Updates the webhook endpoint. You may edit the <code>url</code>, the list of
<code>enabled_events</code>, and the status of your endpoint.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\WebhookEndpoint

## References

**Database Tables (inferred)**
- `our`
- `all`
- `your`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\WebhookEndpointService.php`

**Classes**:
- `Stripe\Service\WebhookEndpointService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `delete($id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

