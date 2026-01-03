# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Customer.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Customer.php`
- Type: PHP
- Size: 18196 bytes

## Summary (from docblocks)

This object represents a customer of your business. It lets you create recurring
charges and track payments that belong to the same customer.
Related guide: <a
href="https://stripe.com/docs/payments/save-during-payment">Save a card during
payment</a>.
@property string $id Unique identifier for the object.
@property string $object String representing the object's type. Objects of the same type share the same value.
@property null|\Stripe\StripeObject $address The customer's address.
@property int $balance Current balance, if any, being stored on the customer. If negative, the customer has credit to apply to their next invoice. If positive, the customer has an amount owed that will be added to their next invoice. The balance does not refer to any unpaid invoices; it solely takes into account amounts that have yet to be successfully applied to any invoice. This balance is only taken into account as invoices are finalized.
@property null|\Stripe\CashBalance $cash_balance The current funds being held by Stripe on behalf of the customer. These funds can be applied towards payment intents with source &quot;cash_balance&quot;.The settings[reconciliation_mode] field describes whether these funds are applied to such payment intents manually or automatically.
@property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
@property null|string $currency Three-letter <a href="https://stripe.com/docs/currencies">ISO code for the currency</a> the customer can be charged in for recurring billing purposes.
@property null|string|\Stripe\Account|\Stripe\BankAccount|\Stripe\Card|\Stripe\Source $default_source <p>ID of the default payment source for the customer.</p><p>If you are using payment methods created via the PaymentMethods API, see the <a href="https://stripe.com/docs/api/customers/object#customer_object-invoice_settings-default_payment_method">invoice_settings.default_payment_method</a> field instead.</p>
@property null|bool $delinquent <p>When the customer's latest invoice is billed by charging automatically, <code>delinquent</code> is <code>true</code> if the invoice's latest charge failed. When the customer's latest invoice is billed by sending an invoice, <code>delinquent</code> is <code>true</code> if the invoice isn't paid by its due date.</p><p>If an invoice is marked uncollectible by <a href="https://stripe.com/docs/billing/automatic-collection">dunning</a>, <code>delinquent</code> doesn't get reset to <code>false</code>.</p>
@property null|string $description An arbitrary string attached to the object. Often useful for displaying to users.
@property null|\Stripe\Discount $discount Describes the current discount active on the customer, if there is one.
@property null|string $email The customer's email address.
@property \Stripe\StripeObject $invoice_credit_balance The current multi-currency balances, if any, being stored on the customer.If positive in a currency, the customer has a credit to apply to their next invoice denominated in that currency.If negative, the customer has an amount owed that will be added to their next invoice denominated in that currency. These balances do not refer to any unpaid invoices.They solely track amounts that have yet to be successfully applied to any invoice. A balance in a particular currency is only applied to any invoice as an invoice in that currency is finalized.
@property null|string $invoice_prefix The prefix for the customer used to generate unique invoice numbers.
@property \Stripe\StripeObject $invoice_settings
@property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
@property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
@property null|string $name The customer's full name or business name.
@property int $next_invoice_sequence The suffix of the customer's next invoice number, e.g., 0001.
@property null|string $phone The customer's phone number.
@property null|string[] $preferred_locales The customer's preferred locales (languages), ordered by preference.
@property null|\Stripe\StripeObject $shipping Mailing and shipping address for the customer. Appears on invoices emailed to this customer.
@property \Stripe\Collection<\Stripe\Account|\Stripe\BankAccount|\Stripe\Card|\Stripe\Source> $sources The customer's payment sources, if any.
@property \Stripe\Collection<\Stripe\Subscription> $subscriptions The customer's current subscriptions, if any.
@property \Stripe\StripeObject $tax
@property null|string $tax_exempt Describes the customer's tax exemption status. One of <code>none</code>, <code>exempt</code>, or <code>reverse</code>. When set to <code>reverse</code>, invoice and receipt PDFs include the text <strong>&quot;Reverse charge&quot;</strong>.
@property \Stripe\Collection<\Stripe\TaxId> $tax_ids The customer's tax IDs.
@property null|string|\Stripe\TestHelpers\TestClock $test_clock ID of the test clock this customer belongs to.

@param null|array $params
@param null|array|string $opts
@return \Stripe\Customer the updated customer

@param string $id
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\PaymentMethod> list of PaymentMethods

@param string $payment_method
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Customer the retrieved customer

@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\SearchResult<Customer> the customer search results

@param string $id the ID of the customer to which the cash balance belongs
@param null|array $params
@param null|array|string $opts
@param mixed $cashBalanceId
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\CashBalance

@param string $id the ID of the customer to which the cash balance belongs
@param null|array $params
@param null|array|string $opts
@param mixed $cashBalanceId
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\CashBalance

@param string $id the ID of the customer on which to retrieve the customer balance transactions
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\CustomerBalanceTransaction> the list of customer balance transactions

@param string $id the ID of the customer on which to create the customer balance transaction
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\CustomerBalanceTransaction

@param string $id the ID of the customer to which the customer balance transaction belongs
@param string $balanceTransactionId the ID of the customer balance transaction to retrieve
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\CustomerBalanceTransaction

@param string $id the ID of the customer to which the customer balance transaction belongs
@param string $balanceTransactionId the ID of the customer balance transaction to update
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\CustomerBalanceTransaction

@param string $id the ID of the customer on which to retrieve the customer cash balance transactions
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\CustomerCashBalanceTransaction> the list of customer cash balance transactions

@param string $id the ID of the customer to which the customer cash balance transaction belongs
@param string $cashBalanceTransactionId the ID of the customer cash balance transaction to retrieve
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\CustomerCashBalanceTransaction

@param string $id the ID of the customer on which to retrieve the payment sources
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\BankAccount|\Stripe\Card|\Stripe\Source> the list of payment sources (BankAccount, Card or Source)

@param string $id the ID of the customer on which to create the payment source
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BankAccount|\Stripe\Card|\Stripe\Source

@param string $id the ID of the customer to which the payment source belongs
@param string $sourceId the ID of the payment source to delete
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BankAccount|\Stripe\Card|\Stripe\Source

@param string $id the ID of the customer to which the payment source belongs
@param string $sourceId the ID of the payment source to retrieve
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BankAccount|\Stripe\Card|\Stripe\Source

@param string $id the ID of the customer to which the payment source belongs
@param string $sourceId the ID of the payment source to update
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\BankAccount|\Stripe\Card|\Stripe\Source

@param string $id the ID of the customer on which to retrieve the tax ids
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\TaxId> the list of tax ids

@param string $id the ID of the customer on which to create the tax id
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\TaxId

@param string $id the ID of the customer to which the tax id belongs
@param string $taxIdId the ID of the tax id to delete
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\TaxId

@param string $id the ID of the customer to which the tax id belongs
@param string $taxIdId the ID of the tax id to retrieve
@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\TaxId

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Customer.php`

**Classes**:
- `Stripe\Customer extends ApiResource`

**Functions/Methods**:
- `getSavedNestedResources()`
- `deleteDiscount($params = null, $opts = null)`
- `allPaymentMethods($id, $params = null, $opts = null)`
- `retrievePaymentMethod($payment_method, $params = null, $opts = null)`
- `search($params = null, $opts = null)`
- `retrieveCashBalance($id, $cashBalanceId, $params = null, $opts = null)`
- `updateCashBalance($id, $cashBalanceId, $params = null, $opts = null)`
- `allBalanceTransactions($id, $params = null, $opts = null)`
- `createBalanceTransaction($id, $params = null, $opts = null)`
- `retrieveBalanceTransaction($id, $balanceTransactionId, $params = null, $opts = null)`
- `updateBalanceTransaction($id, $balanceTransactionId, $params = null, $opts = null)`
- `allCashBalanceTransactions($id, $params = null, $opts = null)`
- `retrieveCashBalanceTransaction($id, $cashBalanceTransactionId, $params = null, $opts = null)`
- `allSources($id, $params = null, $opts = null)`
- `createSource($id, $params = null, $opts = null)`
- `deleteSource($id, $sourceId, $params = null, $opts = null)`
- `retrieveSource($id, $sourceId, $params = null, $opts = null)`
- `updateSource($id, $sourceId, $params = null, $opts = null)`
- `allTaxIds($id, $params = null, $opts = null)`
- `createTaxId($id, $params = null, $opts = null)`
- `deleteTaxId($id, $taxIdId, $params = null, $opts = null)`
- `retrieveTaxId($id, $taxIdId, $params = null, $opts = null)`

