# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Issuing\DisputeService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Issuing\DisputeService.php`
- Type: PHP
- Size: 3552 bytes

## Summary (from docblocks)

Returns a list of Issuing <code>Dispute</code> objects. The objects are sorted
in descending order by creation date, with the most recently created object
appearing first.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\Issuing\Dispute>

Creates an Issuing <code>Dispute</code> object. Individual pieces of evidence
within the <code>evidence</code> object are optional at this point. Stripe only
validates that required evidence is present during submission. Refer to <a
href="/docs/issuing/purchases/disputes#dispute-reasons-and-evidence">Dispute
reasons and evidence</a> for more details about evidence requirements.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Issuing\Dispute

Retrieves an Issuing <code>Dispute</code> object.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Issuing\Dispute

Submits an Issuing <code>Dispute</code> to the card network. Stripe validates
that all evidence fields required for the dispute’s reason are present. For more
details, see <a
href="/docs/issuing/purchases/disputes#dispute-reasons-and-evidence">Dispute
reasons and evidence</a>.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Issuing\Dispute

Updates the specified Issuing <code>Dispute</code> object by setting the values
of the parameters passed. Any parameters not provided will be left unchanged.
Properties on the <code>evidence</code> object can be unset by passing in an
empty string.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Issuing\Dispute

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Issuing\DisputeService.php`

**Classes**:
- `Stripe\Service\Issuing\DisputeService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `create($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `submit($id, $params = null, $opts = null)`
- `update($id, $params = null, $opts = null)`

