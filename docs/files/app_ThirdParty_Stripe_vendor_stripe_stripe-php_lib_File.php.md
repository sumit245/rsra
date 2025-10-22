# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\File.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\File.php`
- Type: PHP
- Size: 3818 bytes

## Summary (from docblocks)

This is an object representing a file hosted on Stripe's servers. The file may
have been uploaded by yourself using the <a
href="https://stripe.com/docs/api#create_file">create file</a> request (for
example, when uploading dispute evidence) or it may have been created by Stripe
(for example, the results of a <a href="#scheduled_queries">Sigma scheduled
query</a>).
Related guide: <a href="https://stripe.com/docs/file-upload">File Upload
Guide</a>.
@property string $id Unique identifier for the object.
@property string $object String representing the object's type. Objects of the same type share the same value.
@property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
@property null|int $expires_at The time at which the file expires and is no longer available in epoch seconds.
@property null|string $filename A filename for the file, suitable for saving to a filesystem.
@property null|\Stripe\Collection<\Stripe\FileLink> $links A list of <a href="https://stripe.com/docs/api#file_links">file links</a> that point at this file.
@property string $purpose The <a href="https://stripe.com/docs/file-upload#uploading-a-file">purpose</a> of the uploaded file.
@property int $size The size in bytes of the file object.
@property null|string $title A user friendly title for the document.
@property null|string $type The type of the file returned (e.g., <code>csv</code>, <code>pdf</code>, <code>jpg</code>, or <code>png</code>).
@property null|string $url The URL from which the file can be downloaded using your live secret API key.

@param null|array $params
@param null|array|string $opts
@throws \Stripe\Exception\ApiErrorException if the request fails
@return \Stripe\File the created file

## References

**Database Tables (inferred)**
- `our`
- `which`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\File.php`

**Classes**:
- `Stripe\File extends ApiResource`

**Functions/Methods**:
- `create($params = null, $opts = null)`

