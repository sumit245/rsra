# app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Drive\Resource\Comments.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Drive\Resource\Comments.php`
- Type: PHP
- Size: 4201 bytes

## Summary (from docblocks)

The "comments" collection of methods.
Typical usage is:
 <code>
  $driveService = new Google_Service_Drive(...);
  $comments = $driveService->comments;
 </code>

Creates a new comment on a file. (comments.create)
@param string $fileId The ID of the file.
@param Google_Service_Drive_Comment $postBody
@param array $optParams Optional parameters.
@return Google_Service_Drive_Comment

Deletes a comment. (comments.delete)
@param string $fileId The ID of the file.
@param string $commentId The ID of the comment.
@param array $optParams Optional parameters.

Gets a comment by ID. (comments.get)
@param string $fileId The ID of the file.
@param string $commentId The ID of the comment.
@param array $optParams Optional parameters.
@opt_param bool includeDeleted Whether to return deleted comments. Deleted
comments will not include their original content.
@return Google_Service_Drive_Comment

Lists a file's comments. (comments.listComments)
@param string $fileId The ID of the file.
@param array $optParams Optional parameters.
@opt_param bool includeDeleted Whether to include deleted comments. Deleted
comments will not include their original content.
@opt_param int pageSize The maximum number of comments to return per page.
@opt_param string pageToken The token for continuing a previous list request
on the next page. This should be set to the value of 'nextPageToken' from the
previous response.
@opt_param string startModifiedTime The minimum value of 'modifiedTime' for
the result comments (RFC 3339 date-time).
@return Google_Service_Drive_CommentList

Updates a comment with patch semantics. (comments.update)
@param string $fileId The ID of the file.
@param string $commentId The ID of the comment.
@param Google_Service_Drive_Comment $postBody
@param array $optParams Optional parameters.
@return Google_Service_Drive_Comment

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Drive\Resource\Comments.php`

**Classes**:
- `Google_Service_Drive_Resource_Comments extends Google_Service_Resource`

**Functions/Methods**:
- `create($fileId, Google_Service_Drive_Comment $postBody, $optParams = array()`
- `delete($fileId, $commentId, $optParams = array()`
- `get($fileId, $commentId, $optParams = array()`
- `listComments($fileId, $optParams = array()`
- `update($fileId, $commentId, Google_Service_Drive_Comment $postBody, $optParams = array()`

