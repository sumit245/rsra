# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\CreditNoteService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\CreditNoteService.php`
- Type: PHP
- Size: 5679 bytes

## Summary (from docblocks)

Returns a list of credit notes.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\CreditNote>

When retrieving a credit note, you’ll get a <strong>lines</strong> property
containing the the first handful of those items. There is also a URL where you
can retrieve the full (paginated) list of line items.
@param string $parentId
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\CreditNoteLineItem>

Issue a credit note to adjust the amount of a finalized invoice. For a
<code>status=open</code> invoice, a credit note reduces its
<code>amount_due</code>. For a <code>status=paid</code> invoice, a credit note
does not affect its <code>amount_due</code>. Instead, it can result in any
combination of the following:.
<ul> <li>Refund: create a new refund (using <code>refund_amount</code>) or link
an existing refund (using <code>refund</code>).</li> <li>Customer balance
credit: credit the customer’s balance (using <code>credit_amount</code>) which
will be automatically applied to their next invoice when it’s finalized.</li>
<li>Outside of Stripe credit: record the amount that is or will be credited
outside of Stripe (using <code>out_of_band_amount</code>).</li> </ul>
For post-payment credit notes the sum of the refund, credit and outside of
Stripe amounts must equal the credit note total.
You may issue multiple credit notes for an invoice. Each credit note will
increment the invoice’s <code>pre_payment_credit_notes_amount</code> or
<code>post_payment_credit_notes_amount</code> depending on its
<code>status</code> at the time of credit note creation.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\CreditNote

Get a preview of a credit note without creating it.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\CreditNote

When retrieving a credit note preview, you’ll get a <strong>lines</strong>
property containing the first handful of those items. This URL you can retrieve
the full (paginated) list of line items.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\CreditNoteLineItem>

Retrieves the credit note object with the given identifier.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\CreditNote

Updates an existing credit note.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\CreditNote

Marks a credit note as void. Learn more about <a
href="/docs/billing/invoices/credit-notes#voiding">voiding credit notes</a>.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\CreditNote

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\CreditNoteService.php`

**Classes**:
- `Stripe\Service\CreditNoteService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `allLines($parentId, $params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `preview($params = null, $opts = null)`
- `previewLines($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`
- `voidCreditNote($id, $params = null, $opts = null)`

