# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\TaxId.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\TaxId.php`
- Type: PHP
- Size: 5298 bytes

## Summary (from docblocks)

You can add one or multiple tax IDs to a <a
href="https://stripe.com/docs/api/customers">customer</a>. A customer's tax IDs
are displayed on invoices and credit notes issued for the customer.
Related guide: <a href="https://stripe.com/docs/billing/taxes/tax-ids">Customer
Tax Identification Numbers</a>.
@property string $id Unique identifier for the object.
@property string $object String representing the object's type. Objects of the same type share the same value.
@property null|string $country Two-letter ISO code representing the country of the tax ID.
@property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
@property null|string|\Stripe\Customer $customer ID of the customer.
@property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
@property string $type Type of the tax ID, one of <code>ae_trn</code>, <code>au_abn</code>, <code>au_arn</code>, <code>bg_uic</code>, <code>br_cnpj</code>, <code>br_cpf</code>, <code>ca_bn</code>, <code>ca_gst_hst</code>, <code>ca_pst_bc</code>, <code>ca_pst_mb</code>, <code>ca_pst_sk</code>, <code>ca_qst</code>, <code>ch_vat</code>, <code>cl_tin</code>, <code>es_cif</code>, <code>eu_oss_vat</code>, <code>eu_vat</code>, <code>gb_vat</code>, <code>ge_vat</code>, <code>hk_br</code>, <code>hu_tin</code>, <code>id_npwp</code>, <code>il_vat</code>, <code>in_gst</code>, <code>is_vat</code>, <code>jp_cn</code>, <code>jp_rn</code>, <code>kr_brn</code>, <code>li_uid</code>, <code>mx_rfc</code>, <code>my_frp</code>, <code>my_itn</code>, <code>my_sst</code>, <code>no_vat</code>, <code>nz_gst</code>, <code>ru_inn</code>, <code>ru_kpp</code>, <code>sa_vat</code>, <code>sg_gst</code>, <code>sg_uen</code>, <code>si_tin</code>, <code>th_vat</code>, <code>tw_vat</code>, <code>ua_vat</code>, <code>us_ein</code>, or <code>za_vat</code>. Note that some legacy tax IDs have type <code>unknown</code>
@property string $value Value of the tax ID.
@property null|\Stripe\StripeObject $verification Tax ID verification information.

@return string the API URL for this tax id

@param array|string $_id
@param null|array|string $_opts
@throws \Stripe\Exception\BadMethodCallException

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\TaxId.php`

**Classes**:
- `Stripe\TaxId extends ApiResource`
- `Stripe\instance`

**Functions/Methods**:
- `instanceUrl()`
- `retrieve($_id, $_opts = null)`

