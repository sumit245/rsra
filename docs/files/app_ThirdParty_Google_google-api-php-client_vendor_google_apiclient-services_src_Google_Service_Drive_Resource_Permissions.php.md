# app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Drive\Resource\Permissions.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Drive\Resource\Permissions.php`
- Type: PHP
- Size: 6946 bytes

## Summary (from docblocks)

The "permissions" collection of methods.
Typical usage is:
 <code>
  $driveService = new Google_Service_Drive(...);
  $permissions = $driveService->permissions;
 </code>

Creates a permission for a file or Team Drive. (permissions.create)
@param string $fileId The ID of the file or Team Drive.
@param Google_Service_Drive_Permission $postBody
@param array $optParams Optional parameters.
@opt_param string emailMessage A plain text custom message to include in the
notification email.
@opt_param bool sendNotificationEmail Whether to send a notification email
when sharing to users or groups. This defaults to true for users and groups,
and is not allowed for other requests. It must not be disabled for ownership
transfers.
@opt_param bool supportsTeamDrives Whether the requesting application
supports Team Drives.
@opt_param bool transferOwnership Whether to transfer ownership to the
specified user and downgrade the current owner to a writer. This parameter is
required as an acknowledgement of the side effect.
@opt_param bool useDomainAdminAccess Whether the request should be treated as
if it was issued by a domain administrator; if set to true, then the
requester will be granted access if they are an administrator of the domain
to which the item belongs.
@return Google_Service_Drive_Permission

Deletes a permission. (permissions.delete)
@param string $fileId The ID of the file or Team Drive.
@param string $permissionId The ID of the permission.
@param array $optParams Optional parameters.
@opt_param bool supportsTeamDrives Whether the requesting application
supports Team Drives.
@opt_param bool useDomainAdminAccess Whether the request should be treated as
if it was issued by a domain administrator; if set to true, then the
requester will be granted access if they are an administrator of the domain
to which the item belongs.

Gets a permission by ID. (permissions.get)
@param string $fileId The ID of the file.
@param string $permissionId The ID of the permission.
@param array $optParams Optional parameters.
@opt_param bool supportsTeamDrives Whether the requesting application
supports Team Drives.
@opt_param bool useDomainAdminAccess Whether the request should be treated as
if it was issued by a domain administrator; if set to true, then the
requester will be granted access if they are an administrator of the domain
to which the item belongs.
@return Google_Service_Drive_Permission

Lists a file's or Team Drive's permissions. (permissions.listPermissions)
@param string $fileId The ID of the file or Team Drive.
@param array $optParams Optional parameters.
@opt_param int pageSize The maximum number of permissions to return per page.
When not set for files in a Team Drive, at most 100 results will be returned.
When not set for files that are not in a Team Drive, the entire list will be
returned.
@opt_param string pageToken The token for continuing a previous list request
on the next page. This should be set to the value of 'nextPageToken' from the
previous response.
@opt_param bool supportsTeamDrives Whether the requesting application
supports Team Drives.
@opt_param bool useDomainAdminAccess Whether the request should be treated as
if it was issued by a domain administrator; if set to true, then the
requester will be granted access if they are an administrator of the domain
to which the item belongs.
@return Google_Service_Drive_PermissionList

Updates a permission with patch semantics. (permissions.update)
@param string $fileId The ID of the file or Team Drive.
@param string $permissionId The ID of the permission.
@param Google_Service_Drive_Permission $postBody
@param array $optParams Optional parameters.
@opt_param bool removeExpiration Whether to remove the expiration date.
@opt_param bool supportsTeamDrives Whether the requesting application
supports Team Drives.
@opt_param bool transferOwnership Whether to transfer ownership to the
specified user and downgrade the current owner to a writer. This parameter is
required as an acknowledgement of the side effect.
@opt_param bool useDomainAdminAccess Whether the request should be treated as
if it was issued by a domain administrator; if set to true, then the
requester will be granted access if they are an administrator of the domain
to which the item belongs.
@return Google_Service_Drive_Permission

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Drive\Resource\Permissions.php`

**Classes**:
- `Google_Service_Drive_Resource_Permissions extends Google_Service_Resource`

**Functions/Methods**:
- `create($fileId, Google_Service_Drive_Permission $postBody, $optParams = array()`
- `delete($fileId, $permissionId, $optParams = array()`
- `get($fileId, $permissionId, $optParams = array()`
- `listPermissions($fileId, $optParams = array()`
- `update($fileId, $permissionId, Google_Service_Drive_Permission $postBody, $optParams = array()`

