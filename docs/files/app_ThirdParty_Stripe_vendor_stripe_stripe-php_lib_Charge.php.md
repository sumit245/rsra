# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Charge.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Charge.php`
- Type: PHP
- Size: 13436 bytes

## Summary (from docblocks)

To charge a credit or a debit card, you create a <code>Charge</code> object. You
can retrieve and refund individual charges as well as list all charges. Charges
are identified by a unique, random ID.
Related guide: <a
href="https://stripe.com/docs/payments/accept-a-payment-charges">Accept a
payment with the Charges API</a>.
@property string $id Unique identifier for the object.
@property string $object String representing the object's type. Objects of the same type share the same value.
@property \Stripe\StripeObject $alternate_statement_descriptors
@property int $amount Amount intended to be collected by this payment. A positive integer representing how much to charge in the <a href="https://stripe.com/docs/currencies#zero-decimal">smallest currency unit</a> (e.g., 100 cents to charge $1.00 or 100 to charge ¥100, a zero-decimal currency). The minimum amount is $0.50 US or <a href="https://stripe.com/docs/currencies#minimum-and-maximum-charge-amounts">equivalent in charge currency</a>. The amount value supports up to eight digits (e.g., a value of 99999999 for a USD charge of $999,999.99).
@property int $amount_captured Amount in %s captured (can be less than the amount attribute on the charge if a partial capture was made).
@property int $amount_refunded Amount in %s refunded (can be less than the amount attribute on the charge if a partial refund was issued).
@property null|string|\Stripe\StripeObject $application ID of the Connect application that created the charge.
@property null|string|\Stripe\ApplicationFee $application_fee The application fee (if any) for the charge. <a href="https://stripe.com/docs/connect/direct-charges#collecting-fees">See the Connect documentation</a> for details.
@property null|int $application_fee_amount The amount of the application fee (if any) requested for the charge. <a href="https://stripe.com/docs/connect/direct-charges#collecting-fees">See the Connect documentation</a> for details.
@property string $authorization_code Authorization code on the charge.
@property null|string|\Stripe\BalanceTransaction $balance_transaction ID of the balance transaction that describes the impact of this charge on your account balance (not including refunds or disputes).
@property \Stripe\StripeObject $billing_details
@property null|string $calculated_statement_descriptor The full statement descriptor that is passed to card networks, and that is displayed on your customers' credit card and bank statements. Allows you to see what the statement descriptor looks like after the static and dynamic portions are combined.
@property bool $captured If the charge was created without capturing, this Boolean represents whether it is still uncaptured or has since been captured.
@property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
@property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
@property null|string|\Stripe\Customer $customer ID of the customer this charge is for if one exists.
@property null|string $description An arbitrary string attached to the object. Often useful for displaying to users.
@property null|string|\Stripe\Account $destination ID of an existing, connected Stripe account to transfer funds to if <code>transfer_data</code> was specified in the charge request.
@property null|string|\Stripe\Dispute $dispute Details about the dispute if the charge has been disputed.
@property bool $disputed Whether the charge has been disputed.
@property null|string|\Stripe\BalanceTransaction $failure_balance_transaction ID of the balance transaction that describes the reversal of the balance on your account due to payment failure.
@property null|string $failure_code Error code explaining reason for charge failure if available (see <a href="https://stripe.com/docs/api#errors">the errors section</a> for a list of codes).
@property null|string $failure_message Message to user further explaining reason for charge failure if available.
@property null|\Stripe\StripeObject $fraud_details Information on fraud assessments for the charge.
@property null|string|\Stripe\Invoice $invoice ID of the invoice this charge is for if one exists.
@property \Stripe\StripeObject $level3
@property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
@property \Stripe\StripeObject $metadata Set of <a href="https://stripe.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
@property null|string|\Stripe\Account $on_behalf_of The account (if any) the charge was made on behalf of without triggering an automatic transfer. See the <a href="https://stripe.com/docs/connect/charges-transfers">Connect documentation</a> for details.
@property null|\Stripe\StripeObject $outcome Details about whether the payment was accepted, and why. See <a href="https://stripe.com/docs/declines">understanding declines</a> for details.
@property bool $paid <code>true</code> if the charge succeeded, or was successfully authorized for later capture.
@property null|string|\Stripe\PaymentIntent $payment_intent ID of the PaymentIntent associated with this charge, if one exists.
@property null|string $payment_method ID of the payment method used in this charge.
@property null|\Stripe\StripeObject $payment_method_details Details about the payment method at the time of the transaction.
@property \Stripe\StripeObject $radar_options Options to configure Radar. See <a href="https://stripe.com/docs/radar/radar-session">Radar Session</a> for more information.
@property null|string $receipt_email This is the email address that the receipt for this charge was sent to.
@property null|string $receipt_number This is the transaction number that appears on email receipts sent for this charge. This attribute will be <code>null</code> until a receipt has been sent.
@property null|string $receipt_url This is the URL to view the receipt for this charge. The receipt is kept up-to-date to the latest state of the charge, including any refunds. If the charge is for an Invoice, the receipt will be stylized as an Invoice receipt.
@property bool $refunded Whether the charge has been fully refunded. If the charge is only partially refunded, this attribute will still be false.
@property \Stripe\Collection<\Stripe\Refund> $refunds A list of refunds that have been applied to the charge.
@property null|string|\Stripe\Review $review ID of the review associated with this charge if one exists.
@property null|\Stripe\StripeObject $shipping Shipping information for the charge.
@property null|\Stripe\Account|\Stripe\BankAccount|\Stripe\Card|\Stripe\Source $source This is a legacy field that will be removed in the future. It contains the Source, Card, or BankAccount object used for the charge. For details about the payment method used for this charge, refer to <code>payment_method</code> or <code>payment_method_details</code> instead.
@property null|string|\Stripe\Transfer $source_transfer The transfer ID which created this charge. Only present if the charge came from another Stripe account. <a href="https://stripe.com/docs/connect/destination-charges">See the Connect documentation</a> for details.
@property null|string $statement_descriptor For card charges, use <code>statement_descriptor_suffix</code> instead. Otherwise, you can use this value as the complete description of a charge on your customers’ statements. Must contain at least one letter, maximum 22 characters.
@property null|string $statement_descriptor_suffix Provides information about the charge that customers see on their statements. Concatenated with the prefix (shortened descriptor) or statement descriptor that’s set on the account to form the complete statement descriptor. Maximum 22 characters for the concatenated descriptor.
@property string $status The status of the payment is either <code>succeeded</code>, <code>pending</code>, or <code>failed</code>.
@property string|\Stripe\Transfer $transfer ID of the transfer to the <code>destination</code> account (only applicable if the charge was created using the <code>destination</code> parameter).
@property null|\Stripe\StripeObject $transfer_data An optional dictionary including the account to automatically transfer to as part of a destination charge. <a href="https://stripe.com/docs/connect/destination-charges">See the Connect documentation</a> for details.
@property null|string $transfer_group A string that identifies this transaction as part of a group. See the <a href="https://stripe.com/docs/connect/charges-transfers#transfer-options">Connect documentation</a> for details.

Possible string representations of decline codes.
These strings are applicable to the decline_code property of the \Stripe\Exception\CardException exception.
@see https://stripe.com/docs/declines/codes

@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Charge the captured charge

@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\SearchResult<Charge> the charge search results

## References

**Database Tables (inferred)**
- `our`
- `another`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Charge.php`

**Classes**:
- `Stripe\Charge extends ApiResource`

**Functions/Methods**:
- `capture($params = null, $opts = null)`
- `search($params = null, $opts = null)`

