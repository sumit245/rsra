# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\FileService.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\FileService.php`
- Type: PHP
- Size: 2105 bytes

## Summary (from docblocks)

Returns a list of the files that your account has access to. The files are
returned sorted by creation date, with the most recently created files appearing
first.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\Collection<\Stripe\File>

Retrieves the details of an existing file object. Supply the unique file ID from
a file, and Stripe will return the corresponding file object. To access file
contents, see the <a href="/docs/file-upload#download-file-contents">File Upload
Guide</a>.
@param string $id
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\File

Create a file.
@param null|array $params
@param null|array|\Stripe\Util\RequestOptions $opts
@return \Stripe\File

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\FileService.php`

**Classes**:
- `Stripe\Service\FileService extends \Stripe\Service\AbstractService`

**Functions/Methods**:
- `all($params = null, $opts = null)`
- `retrieve($id, $params = null, $opts = null)`
- `create($params = null, $opts = null)`

