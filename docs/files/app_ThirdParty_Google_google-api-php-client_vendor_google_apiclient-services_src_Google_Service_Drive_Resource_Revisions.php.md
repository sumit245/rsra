# app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Drive\Resource\Revisions.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Drive\Resource\Revisions.php`
- Type: PHP
- Size: 3569 bytes

## Summary (from docblocks)

The "revisions" collection of methods.
Typical usage is:
 <code>
  $driveService = new Google_Service_Drive(...);
  $revisions = $driveService->revisions;
 </code>

Permanently deletes a revision. This method is only applicable to files with
binary content in Drive. (revisions.delete)
@param string $fileId The ID of the file.
@param string $revisionId The ID of the revision.
@param array $optParams Optional parameters.

Gets a revision's metadata or content by ID. (revisions.get)
@param string $fileId The ID of the file.
@param string $revisionId The ID of the revision.
@param array $optParams Optional parameters.
@opt_param bool acknowledgeAbuse Whether the user is acknowledging the risk
of downloading known malware or other abusive files. This is only applicable
when alt=media.
@return Google_Service_Drive_Revision

Lists a file's revisions. (revisions.listRevisions)
@param string $fileId The ID of the file.
@param array $optParams Optional parameters.
@opt_param int pageSize The maximum number of revisions to return per page.
@opt_param string pageToken The token for continuing a previous list request
on the next page. This should be set to the value of 'nextPageToken' from the
previous response.
@return Google_Service_Drive_RevisionList

Updates a revision with patch semantics. (revisions.update)
@param string $fileId The ID of the file.
@param string $revisionId The ID of the revision.
@param Google_Service_Drive_Revision $postBody
@param array $optParams Optional parameters.
@return Google_Service_Drive_Revision

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Drive\Resource\Revisions.php`

**Classes**:
- `Google_Service_Drive_Resource_Revisions extends Google_Service_Resource`

**Functions/Methods**:
- `delete($fileId, $revisionId, $optParams = array()`
- `get($fileId, $revisionId, $optParams = array()`
- `listRevisions($fileId, $optParams = array()`
- `update($fileId, $revisionId, Google_Service_Drive_Revision $postBody, $optParams = array()`

