# app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Drive\Resource\Changes.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Drive\Resource\Changes.php`
- Type: PHP
- Size: 5851 bytes

## Summary (from docblocks)

The "changes" collection of methods.
Typical usage is:
 <code>
  $driveService = new Google_Service_Drive(...);
  $changes = $driveService->changes;
 </code>

Gets the starting pageToken for listing future changes.
(changes.getStartPageToken)
@param array $optParams Optional parameters.
@opt_param bool supportsTeamDrives Whether the requesting application
supports Team Drives.
@opt_param string teamDriveId The ID of the Team Drive for which the starting
pageToken for listing future changes from that Team Drive will be returned.
@return Google_Service_Drive_StartPageToken

Lists the changes for a user or Team Drive. (changes.listChanges)
@param string $pageToken The token for continuing a previous list request on
the next page. This should be set to the value of 'nextPageToken' from the
previous response or to the response from the getStartPageToken method.
@param array $optParams Optional parameters.
@opt_param bool includeCorpusRemovals Whether changes should include the file
resource if the file is still accessible by the user at the time of the
request, even when a file was removed from the list of changes and there will
be no further change entries for this file.
@opt_param bool includeRemoved Whether to include changes indicating that
items have been removed from the list of changes, for example by deletion or
loss of access.
@opt_param bool includeTeamDriveItems Whether Team Drive files or changes
should be included in results.
@opt_param int pageSize The maximum number of changes to return per page.
@opt_param bool restrictToMyDrive Whether to restrict the results to changes
inside the My Drive hierarchy. This omits changes to files such as those in
the Application Data folder or shared files which have not been added to My
Drive.
@opt_param string spaces A comma-separated list of spaces to query within the
user corpus. Supported values are 'drive', 'appDataFolder' and 'photos'.
@opt_param bool supportsTeamDrives Whether the requesting application
supports Team Drives.
@opt_param string teamDriveId The Team Drive from which changes will be
returned. If specified the change IDs will be reflective of the Team Drive;
use the combined Team Drive ID and change ID as an identifier.
@return Google_Service_Drive_ChangeList

Subscribes to changes for a user. (changes.watch)
@param string $pageToken The token for continuing a previous list request on
the next page. This should be set to the value of 'nextPageToken' from the
previous response or to the response from the getStartPageToken method.
@param Google_Service_Drive_Channel $postBody
@param array $optParams Optional parameters.
@opt_param bool includeCorpusRemovals Whether changes should include the file
resource if the file is still accessible by the user at the time of the
request, even when a file was removed from the list of changes and there will
be no further change entries for this file.
@opt_param bool includeRemoved Whether to include changes indicating that
items have been removed from the list of changes, for example by deletion or
loss of access.
@opt_param bool includeTeamDriveItems Whether Team Drive files or changes
should be included in results.
@opt_param int pageSize The maximum number of changes to return per page.
@opt_param bool restrictToMyDrive Whether to restrict the results to changes
inside the My Drive hierarchy. This omits changes to files such as those in
the Application Data folder or shared files which have not been added to My
Drive.
@opt_param string spaces A comma-separated list of spaces to query within the
user corpus. Supported values are 'drive', 'appDataFolder' and 'photos'.
@opt_param bool supportsTeamDrives Whether the requesting application
supports Team Drives.
@opt_param string teamDriveId The Team Drive from which changes will be
returned. If specified the change IDs will be reflective of the Team Drive;
use the combined Team Drive ID and change ID as an identifier.
@return Google_Service_Drive_Channel

## References

**Database Tables (inferred)**
- `that`
- `the`
- `which`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Drive\Resource\Changes.php`

**Classes**:
- `Google_Service_Drive_Resource_Changes extends Google_Service_Resource`

**Functions/Methods**:
- `getStartPageToken($optParams = array()`
- `listChanges($pageToken, $optParams = array()`
- `watch($pageToken, Google_Service_Drive_Channel $postBody, $optParams = array()`

