# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Event.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Event.php`
- Type: PHP
- Size: 18062 bytes

## Summary (from docblocks)

Events are our way of letting you know when something interesting happens in
your account. When an interesting event occurs, we create a new
<code>Event</code> object. For example, when a charge succeeds, we create a
<code>charge.succeeded</code> event; and when an invoice payment attempt fails,
we create an <code>invoice.payment_failed</code> event. Note that many API
requests may cause multiple events to be created. For example, if you create a
new subscription for a customer, you will receive both a
<code>customer.subscription.created</code> event and a
<code>charge.succeeded</code> event.
Events occur when the state of another API resource changes. The state of that
resource at the time of the change is embedded in the event's data field. For
example, a <code>charge.succeeded</code> event will contain a charge, and an
<code>invoice.payment_failed</code> event will contain an invoice.
As with other API resources, you can use endpoints to retrieve an <a
href="https://stripe.com/docs/api#retrieve_event">individual event</a> or a <a
href="https://stripe.com/docs/api#list_events">list of events</a> from the API.
We also have a separate <a
href="http://en.wikipedia.org/wiki/Webhook">webhooks</a> system for sending the
<code>Event</code> objects directly to an endpoint on your server. Webhooks are
managed in your <a href="https://dashboard.stripe.com/account/webhooks">account
settings</a>, and our <a href="https://stripe.com/docs/webhooks">Using
Webhooks</a> guide will help you get set up.
When using <a href="https://stripe.com/docs/connect">Connect</a>, you can also
receive notifications of events that occur in connected accounts. For these
events, there will be an additional <code>account</code> attribute in the
received <code>Event</code> object.
<strong>NOTE:</strong> Right now, access to events through the <a
href="https://stripe.com/docs/api#retrieve_event">Retrieve Event API</a> is
guaranteed only for 30 days.
This class includes constants for the possible string representations of
event types. See https://stripe.com/docs/api#event_types for more details.
@property string $id Unique identifier for the object.
@property string $object String representing the object's type. Objects of the same type share the same value.
@property string $account The connected account that originated the event.
@property null|string $api_version The Stripe API version used to render <code>data</code>. <em>Note: This property is populated only for events on or after October 31, 2014</em>.
@property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
@property \Stripe\StripeObject $data
@property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
@property int $pending_webhooks Number of webhooks that have yet to be successfully delivered (i.e., to return a 20x response) to the URLs you've specified.
@property null|\Stripe\StripeObject $request Information on the API request that instigated the event.
@property string $type Description of the event (e.g., <code>invoice.created</code> or <code>charge.refunded</code>).

## References

**Database Tables (inferred)**
- `our`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Event.php`

**Classes**:
- `Stripe\includes`
- `Stripe\Event extends ApiResource`

