# app\Libraries\Google_calendar.php

- Path: `app\Libraries\Google_calendar.php`
- Type: PHP
- Size: 24662 bytes

## References

**Database Tables (inferred)**
- `database`
- `Google`
- `RISE`
- `local`

## Symbols

# Symbols

**Files documented**: 1

## `app\Libraries\Google_calendar.php`

**Classes**:
- `App\Libraries\Google_calendar`

**Functions/Methods**:
- `__construct()`
- `authorize($user_id = "")`
- `_check_access_token($client, $user_id = "", $redirect_to_settings = false)`
- `_check_calendar_ids($client, $user_id = "")`
- `save_access_token($auth_code, $user_id = "")`
- `_get_client_credentials($user_id = "")`
- `_get_calendar_service($user_id = 0)`
- `save_event($user_id = 0, $id = 0)`
- `_get_start_end_date_time($event_info, $type = "", $datetime_object_type = "")`
- `_get_recurrence_data_for_google($event_info = "")`
- `_get_share_with_emails($event_info = "")`
- `delete($google_event_id = "", $user_id = "")`
- `get_google_calendar_events()`
- `_prepare_calendar_events($events = array()`
- `_get_repeats_of_recurring_event($dates = array()`
- `_prepare_recurring_event_data($events, $recurring_event_id = "")`
- `_delete_calendar_events($user_id = 0, $google_event_id = "")`
- `_save_calendar_events($data = array()`
- `get_event_link($google_event_id, $user_id)`

