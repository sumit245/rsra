# app\Models\Notifications_model.php

- Path: `app\Models\Notifications_model.php`
- Type: PHP
- Size: 52713 bytes

## References

**Models Used**
- `Project_comments_model`
- `Project_settings_model`

**Database Tables (inferred)**
- `hook`
- `plugin`
- `sending`

## Symbols

# Symbols

**Files documented**: 1

## `app\Models\Notifications_model.php`

**Classes**:
- `App\Models\Notifications_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `create_notification($event, $user_id, $options = array()`
- `prepare_announcement_receipients_query($announcements_table, $clients_table, $users_table, $announcement_id = 0)`
- `prepare_sending_slack_notification($event, $user_id, $notification_id, $notification_settings, $project_id)`
- `notify_to_this_user_for_this_ticket($ticket_info, $user)`
- `notify_to_this_user_for_this_task($task_info, $user)`
- `notify_to_this_user_for_this_estimate($estimate_info, $user)`
- `notify_to_this_user_for_this_post($post_info, $user)`
- `notify_to_this_user_for_this_client($client_info, $user)`
- `get_notifications($user_id, $offset = 0, $limit = 20)`
- `get_email_notification($notification_id)`
- `count_notifications($user_id, $last_notification_checke_at = "0")`
- `set_notification_status_as_read($notification_id, $user_id = 0)`
- `get_to_user_name($notification_id = 0)`

