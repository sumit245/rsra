# app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Drive\Resource\Replies.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Drive\Resource\Replies.php`
- Type: PHP
- Size: 4460 bytes

## Summary (from docblocks)

The "replies" collection of methods.
Typical usage is:
 <code>
  $driveService = new Google_Service_Drive(...);
  $replies = $driveService->replies;
 </code>

Creates a new reply to a comment. (replies.create)
@param string $fileId The ID of the file.
@param string $commentId The ID of the comment.
@param Google_Service_Drive_Reply $postBody
@param array $optParams Optional parameters.
@return Google_Service_Drive_Reply

Deletes a reply. (replies.delete)
@param string $fileId The ID of the file.
@param string $commentId The ID of the comment.
@param string $replyId The ID of the reply.
@param array $optParams Optional parameters.

Gets a reply by ID. (replies.get)
@param string $fileId The ID of the file.
@param string $commentId The ID of the comment.
@param string $replyId The ID of the reply.
@param array $optParams Optional parameters.
@opt_param bool includeDeleted Whether to return deleted replies. Deleted
replies will not include their original content.
@return Google_Service_Drive_Reply

Lists a comment's replies. (replies.listReplies)
@param string $fileId The ID of the file.
@param string $commentId The ID of the comment.
@param array $optParams Optional parameters.
@opt_param bool includeDeleted Whether to include deleted replies. Deleted
replies will not include their original content.
@opt_param int pageSize The maximum number of replies to return per page.
@opt_param string pageToken The token for continuing a previous list request
on the next page. This should be set to the value of 'nextPageToken' from the
previous response.
@return Google_Service_Drive_ReplyList

Updates a reply with patch semantics. (replies.update)
@param string $fileId The ID of the file.
@param string $commentId The ID of the comment.
@param string $replyId The ID of the reply.
@param Google_Service_Drive_Reply $postBody
@param array $optParams Optional parameters.
@return Google_Service_Drive_Reply

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Drive\Resource\Replies.php`

**Classes**:
- `Google_Service_Drive_Resource_Replies extends Google_Service_Resource`

**Functions/Methods**:
- `create($fileId, $commentId, Google_Service_Drive_Reply $postBody, $optParams = array()`
- `delete($fileId, $commentId, $replyId, $optParams = array()`
- `get($fileId, $commentId, $replyId, $optParams = array()`
- `listReplies($fileId, $commentId, $optParams = array()`
- `update($fileId, $commentId, $replyId, Google_Service_Drive_Reply $postBody, $optParams = array()`

