# app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Calendar\Resource\Settings.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Calendar\Resource\Settings.php`
- Type: PHP
- Size: 3917 bytes

## Summary (from docblocks)

The "settings" collection of methods.
Typical usage is:
 <code>
  $calendarService = new Google_Service_Calendar(...);
  $settings = $calendarService->settings;
 </code>

Returns a single user setting. (settings.get)
@param string $setting The id of the user setting.
@param array $optParams Optional parameters.
@return Google_Service_Calendar_Setting

Returns all user settings for the authenticated user. (settings.listSettings)
@param array $optParams Optional parameters.
@opt_param int maxResults Maximum number of entries returned on one result
page. By default the value is 100 entries. The page size can never be larger
than 250 entries. Optional.
@opt_param string pageToken Token specifying which result page to return.
Optional.
@opt_param string syncToken Token obtained from the nextSyncToken field
returned on the last page of results from the previous list request. It makes
the result of this list request contain only entries that have changed since
then. If the syncToken expires, the server will respond with a 410 GONE
response code and the client should clear its storage and perform a full
synchronization without any syncToken. Learn more about incremental
synchronization. Optional. The default is to return all entries.
@return Google_Service_Calendar_Settings

Watch for changes to Settings resources. (settings.watch)
@param Google_Service_Calendar_Channel $postBody
@param array $optParams Optional parameters.
@opt_param int maxResults Maximum number of entries returned on one result
page. By default the value is 100 entries. The page size can never be larger
than 250 entries. Optional.
@opt_param string pageToken Token specifying which result page to return.
Optional.
@opt_param string syncToken Token obtained from the nextSyncToken field
returned on the last page of results from the previous list request. It makes
the result of this list request contain only entries that have changed since
then. If the syncToken expires, the server will respond with a 410 GONE
response code and the client should clear its storage and perform a full
synchronization without any syncToken. Learn more about incremental
synchronization. Optional. The default is to return all entries.
@return Google_Service_Calendar_Channel

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Calendar\Resource\Settings.php`

**Classes**:
- `Google_Service_Calendar_Resource_Settings extends Google_Service_Resource`

**Functions/Methods**:
- `get($setting, $optParams = array()`
- `listSettings($optParams = array()`
- `watch(Google_Service_Calendar_Channel $postBody, $optParams = array()`

