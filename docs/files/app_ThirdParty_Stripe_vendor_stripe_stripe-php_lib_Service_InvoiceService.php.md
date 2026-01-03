# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\InvoiceService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\InvoiceService.php`
- Type: PHP
- Size: 11568 bytes

## Summary (from docblocks)

You can list all invoices, or list the invoices for a specific customer. The
invoices are returned sorted by creation date, with the most recently created
invoices appearing first.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Invoice>

When retrieving an invoice, you’ll get a <strong>lines</strong> property
containing the total count of line items and the first handful of those items.
There is also a URL where you can retrieve the full (paginated) list of line
items.
@param string $parentId
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\InvoiceLineItem>

This endpoint creates a draft invoice for a given customer. The invoice remains
a draft until you <a href="#finalize_invoice">finalize</a> the invoice, which
allows you to <a href="#pay_invoice">pay</a> or <a href="#send_invoice">send</a>
the invoice to your customers.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Invoice

Permanently deletes a one-off invoice draft. This cannot be undone. Attempts to
delete invoices that are no longer in a draft state will fail; once an invoice
has been finalized or if an invoice is for a subscription, it must be <a
href="#void_invoice">voided</a>.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Invoice

Stripe automatically finalizes drafts before sending and attempting payment on
invoices. However, if you’d like to finalize a draft invoice manually, you can
do so using this method.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Invoice

Marking an invoice as uncollectible is useful for keeping track of bad debts
that can be written off for accounting purposes.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Invoice

Stripe automatically creates and then attempts to collect payment on invoices
for customers on subscriptions according to your <a
href="https://dashboard.stripe.com/account/billing/automatic">subscriptions
settings</a>. However, if you’d like to attempt payment on an invoice out of the
normal collection schedule or for some other reason, you can do so.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Invoice

Retrieves the invoice with the given ID.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Invoice

Search for invoices you’ve previously created using Stripe’s <a
href="/docs/search#search-query-language">Search Query Language</a>. Don’t use
search in read-after-write flows where strict consistency is necessary. Under
normal operating conditions, data is searchable in less than a minute.
Occasionally, propagation of new or updated data can be up to an hour behind
during outages. Search functionality is not available to merchants in India.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\SearchResult<\Stripe\Invoice>

Stripe will automatically send invoices to customers according to your <a
href="https://dashboard.stripe.com/account/billing/automatic">subscriptions
settings</a>. However, if you’d like to manually send an invoice to your
customer out of the normal schedule, you can do so. When sending invoices that
have already been paid, there will be no reference to the payment in the email.
Requests made in test-mode result in no emails being sent, despite sending an
<code>invoice.sent</code> event.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Invoice

At any time, you can preview the upcoming invoice for a customer. This will show
you all the charges that are pending, including subscription renewal charges,
invoice item charges, etc. It will also show you any discounts that are
applicable to the invoice.
Note that when you are viewing an upcoming invoice, you are simply viewing a
preview – the invoice has not yet been created. As such, the upcoming invoice
will not show up in invoice listing calls, and you cannot use the API to pay or
edit the invoice. If you want to change the amount that your customer will be
billed, you can add, remove, or update pending invoice items, or update the
customer’s discount.
You can preview the effects of updating a subscription, including a preview of
what proration will take place. To ensure that the actual proration is
calculated exactly the same as the previewed proration, you should pass a
<code>proration_date</code> parameter when doing the actual subscription update.
The value passed in should be the same as the
<code>subscription_proration_date</code> returned on the upcoming invoice
resource. The recommended way to get only the prorations being previewed is to
consider only proration line items where <code>period[start]</code> is equal to
the <code>subscription_proration_date</code> on the upcoming invoice resource.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Invoice

When retrieving an upcoming invoice, you’ll get a <strong>lines</strong>
property containing the total count of line items and the first handful of those
items. There is also a URL where you can retrieve the full (paginated) list of
line items.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\InvoiceLineItem>

Draft invoices are fully editable. Once an invoice is <a
href="/docs/billing/invoices/workflow#finalized">finalized</a>, monetary values,
as well as <code>collection_method</code>, become uneditable.
If you would like to stop the Stripe Billing engine from automatically
finalizing, reattempting payments on, sending reminders for, or <a
href="/docs/billing/invoices/reconciliation">automatically reconciling</a>
invoices, pass <code>auto_advance=false</code>.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Invoice

Mark a finalized invoice as void. This cannot be undone. Voiding an invoice is
similar to <a href="#delete_invoice">deletion</a>, however it only applies to
finalized invoices and maintains a papertrail where the invoice can still be
found.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Invoice

## References

**Database Tables (inferred)**
- `our`
- `automatically`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\InvoiceService.php`

**Classes**:
- `Stripe\Service\InvoiceService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `allLines($parentId, $params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `delete($id, $params = null, $opts = null)`
- `finalizeInvoice($id, $params = null, $opts = null)`
- `markUncollectible($id, $params = null, $opts = null)`
- `pay($id, $params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `search($params = null, $opts = null)`
- `sendInvoice($id, $params = null, $opts = null)`
- `upcoming($params = null, $opts = null)`
- `upcomingLines($params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`
- `voidInvoice($id, $params = null, $opts = null)`

