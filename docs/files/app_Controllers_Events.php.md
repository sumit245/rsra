# app\Controllers\Events.php

- Path: `app\Controllers\Events.php`
- Type: PHP
- Size: 43923 bytes

## References

**Models Used**
- `Events_model`
- `Clients_model`
- `Custom_fields_model`
- `Leave_applications_model`
- `Projects_model`
- `Tasks_model`
- `Users_model`
- `Settings_model`

## Symbols

# Symbols

**Files documented**: 1

## `app\Controllers\Events.php`

**Classes**:
- `App\Controllers\Events extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index($encrypted_event_id = "")`
- `can_share_events()`
- `modal_form()`
- `save()`
- `delete()`
- `calendar_events($filter_values = "", $event_label_id = 0, $client_id = 0)`
- `_make_calendar_event($data)`
- `_make_leave_event($data)`
- `_make_project_event($data, $start_date_event = false)`
- `_make_task_event($data, $start_date_event = false)`
- `view()`
- `_make_view_data($encrypted_event_id, $cycle = "0")`
- `_get_confirmed_and_rejected_users_list($confirmed_by_array, $rejected_by_array)`
- `save_event_status()`
- `get_all_contacts_of_client($client_id)`
- `google_calendar_settings_modal_form()`
- `save_google_calendar_settings()`
- `show_event_in_google_calendar($google_event_id = "")`
- `upload_file()`
- `validate_events_file()`
- `file_preview($id = "", $key = "")`
- `reminders()`
- `reminders_list_data($type = "", $task_id = 0, $project_id = 0, $client_id = 0, $lead_id = 0, $ticket_id = 0)`
- `_make_reminder_row($data = array()`
- `can_access_this_reminder($reminder_info)`
- `can_create_reminders()`
- `save_reminder_status($id = 0, $status = "")`
- `snooze_reminder()`
- `reminder_view()`
- `get_reminders_for_current_user()`
- `count_missed_reminders()`

