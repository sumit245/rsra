# app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Drive\Resource\Teamdrives.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Drive\Resource\Teamdrives.php`
- Type: PHP
- Size: 4463 bytes

## Summary (from docblocks)

The "teamdrives" collection of methods.
Typical usage is:
 <code>
  $driveService = new Google_Service_Drive(...);
  $teamdrives = $driveService->teamdrives;
 </code>

Creates a new Team Drive. (teamdrives.create)
@param string $requestId An ID, such as a random UUID, which uniquely
identifies this user's request for idempotent creation of a Team Drive. A
repeated request by the same user and with the same request ID will avoid
creating duplicates by attempting to create the same Team Drive. If the Team
Drive already exists a 409 error will be returned.
@param Google_Service_Drive_TeamDrive $postBody
@param array $optParams Optional parameters.
@return Google_Service_Drive_TeamDrive

Permanently deletes a Team Drive for which the user is an organizer. The Team
Drive cannot contain any untrashed items. (teamdrives.delete)
@param string $teamDriveId The ID of the Team Drive
@param array $optParams Optional parameters.

Gets a Team Drive's metadata by ID. (teamdrives.get)
@param string $teamDriveId The ID of the Team Drive
@param array $optParams Optional parameters.
@opt_param bool useDomainAdminAccess Whether the request should be treated as
if it was issued by a domain administrator; if set to true, then the
requester will be granted access if they are an administrator of the domain
to which the Team Drive belongs.
@return Google_Service_Drive_TeamDrive

Lists the user's Team Drives. (teamdrives.listTeamdrives)
@param array $optParams Optional parameters.
@opt_param int pageSize Maximum number of Team Drives to return.
@opt_param string pageToken Page token for Team Drives.
@opt_param string q Query string for searching Team Drives.
@opt_param bool useDomainAdminAccess Whether the request should be treated as
if it was issued by a domain administrator; if set to true, then all Team
Drives of the domain in which the requester is an administrator are returned.
@return Google_Service_Drive_TeamDriveList

Updates a Team Drive's metadata (teamdrives.update)
@param string $teamDriveId The ID of the Team Drive
@param Google_Service_Drive_TeamDrive $postBody
@param array $optParams Optional parameters.
@return Google_Service_Drive_TeamDrive

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Drive\Resource\Teamdrives.php`

**Classes**:
- `Google_Service_Drive_Resource_Teamdrives extends Google_Service_Resource`

**Functions/Methods**:
- `create($requestId, Google_Service_Drive_TeamDrive $postBody, $optParams = array()`
- `delete($teamDriveId, $optParams = array()`
- `get($teamDriveId, $optParams = array()`
- `listTeamdrives($optParams = array()`
- `update($teamDriveId, Google_Service_Drive_TeamDrive $postBody, $optParams = array()`

