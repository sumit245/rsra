# app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Calendar\Resource\Calendars.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Calendar\Resource\Calendars.php`
- Type: PHP
- Size: 4883 bytes

## Summary (from docblocks)

The "calendars" collection of methods.
Typical usage is:
 <code>
  $calendarService = new Google_Service_Calendar(...);
  $calendars = $calendarService->calendars;
 </code>

Clears a primary calendar. This operation deletes all events associated with
the primary calendar of an account. (calendars.clear)
@param string $calendarId Calendar identifier. To retrieve calendar IDs call
the calendarList.list method. If you want to access the primary calendar of
the currently logged in user, use the "primary" keyword.
@param array $optParams Optional parameters.

Deletes a secondary calendar. Use calendars.clear for clearing all events on
primary calendars. (calendars.delete)
@param string $calendarId Calendar identifier. To retrieve calendar IDs call
the calendarList.list method. If you want to access the primary calendar of
the currently logged in user, use the "primary" keyword.
@param array $optParams Optional parameters.

Returns metadata for a calendar. (calendars.get)
@param string $calendarId Calendar identifier. To retrieve calendar IDs call
the calendarList.list method. If you want to access the primary calendar of
the currently logged in user, use the "primary" keyword.
@param array $optParams Optional parameters.
@return Google_Service_Calendar_Calendar

Creates a secondary calendar. (calendars.insert)
@param Google_Service_Calendar_Calendar $postBody
@param array $optParams Optional parameters.
@return Google_Service_Calendar_Calendar

Updates metadata for a calendar. This method supports patch semantics.
(calendars.patch)
@param string $calendarId Calendar identifier. To retrieve calendar IDs call
the calendarList.list method. If you want to access the primary calendar of
the currently logged in user, use the "primary" keyword.
@param Google_Service_Calendar_Calendar $postBody
@param array $optParams Optional parameters.
@return Google_Service_Calendar_Calendar

Updates metadata for a calendar. (calendars.update)
@param string $calendarId Calendar identifier. To retrieve calendar IDs call
the calendarList.list method. If you want to access the primary calendar of
the currently logged in user, use the "primary" keyword.
@param Google_Service_Calendar_Calendar $postBody
@param array $optParams Optional parameters.
@return Google_Service_Calendar_Calendar

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Calendar\Resource\Calendars.php`

**Classes**:
- `Google_Service_Calendar_Resource_Calendars extends Google_Service_Resource`

**Functions/Methods**:
- `clear($calendarId, $optParams = array()`
- `delete($calendarId, $optParams = array()`
- `get($calendarId, $optParams = array()`
- `insert(Google_Service_Calendar_Calendar $postBody, $optParams = array()`
- `patch($calendarId, Google_Service_Calendar_Calendar $postBody, $optParams = array()`
- `update($calendarId, Google_Service_Calendar_Calendar $postBody, $optParams = array()`

