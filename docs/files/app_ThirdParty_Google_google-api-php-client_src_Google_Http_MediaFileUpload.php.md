# app\ThirdParty\Google\google-api-php-client\src\Google\Http\MediaFileUpload.php

- Path: `app\ThirdParty\Google\google-api-php-client\src\Google\Http\MediaFileUpload.php`
- Type: PHP
- Size: 9150 bytes

## Summary (from docblocks)

Copyright 2012 Google Inc.
Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at
    http://www.apache.org/licenses/LICENSE-2.0
Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

Manage large file uploads, which may be media but can be any type
of sizable data.

@var string $mimeType

@var string $data

@var bool $resumable

@var int $chunkSize

@var int $size

@var string $resumeUri

@var int $progress

@var Google_Client

@var Psr\Http\Message\RequestInterface

@var string

Result code from last HTTP call
@var int

@param $mimeType string
@param $data string The bytes you want to upload.
@param $resumable bool
@param bool $chunkSize File will be uploaded in chunks of this many bytes.
only used if resumable=True

Set the size of the file that is being uploaded.
@param $size - int file size in bytes

Return the progress on the upload
@return int progress in bytes uploaded.

Send the next part of the file to upload.
@param [$chunk] the next set of bytes to send. If false will used $data passed
at construct time.

Return the HTTP result code from the last call made.
@return int code

Sends a PUT-Request to google drive and parses the response,
setting the appropiate variables from the response()
@param Google_Http_Request $httpRequest the Reuqest which will be send
@return false|mixed false when the upload is unfinished or the decoded http response

Resume a previously unfinished upload
@param $resumeUri the resume-URI of the unfinished, resumable upload.

@return Psr\Http\Message\RequestInterface $request
@visible for testing

Valid upload types:
- resumable (UPLOAD_RESUMABLE_TYPE)
- media (UPLOAD_MEDIA_TYPE)
- multipart (UPLOAD_MULTIPART_TYPE)
@param $meta
@return string
@visible for testing

## References

**Database Tables (inferred)**
- `last`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\src\Google\Http\MediaFileUpload.php`

**Classes**:
- `Google_Http_MediaFileUpload`

**Functions/Methods**:
- `__construct(Google_Client $client,
      RequestInterface $request,
      $mimeType,
      $data,
      $resumable = false,
      $chunkSize = false)`
- `setFileSize($size)`
- `getProgress()`
- `nextChunk($chunk = false)`
- `getHttpResultCode()`
- `makePutRequest(RequestInterface $request)`
- `resume($resumeUri)`
- `process()`
- `getUploadType($meta)`
- `getResumeUri()`
- `fetchResumeUri()`
- `transformToUploadUrl()`
- `setChunkSize($chunkSize)`
- `getRequest()`

