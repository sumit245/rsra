# app\Controllers\Messages.php

- Path: `app\Controllers\Messages.php`
- Type: PHP
- Size: 21883 bytes

## References

**Models Used**
- `Users_model`
- `Messages_model`

## Symbols

# Symbols

**Files documented**: 1

## `app\Controllers\Messages.php`

**Classes**:
- `App\Controllers\Messages extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `is_my_message($message_info)`
- `check_message_user_permission()`
- `check_validate_sending_message($to_user_id)`
- `index()`
- `modal_form($user_id = 0)`
- `inbox($auto_select_index = "")`
- `sent_items($auto_select_index = "")`
- `list_data($mode = "inbox")`
- `view($message_id = 0, $mode = "", $reply = 0)`
- `_make_row($data, $mode = "", $return_only_message = false, $online_status = false)`
- `send_message()`
- `reply($is_chat = 0)`
- `view_messages()`
- `_load_more_messages($message_id, $last_message_id, $top_message_id)`
- `count_notifications()`
- `get_notifications()`
- `update_notification_checking_status()`
- `upload_file()`
- `validate_message_file()`
- `download_message_files($message_id = "")`
- `delete_my_messages($id = 0)`
- `chat_list()`
- `users_list($type)`
- `view_chat()`
- `_load_messages($message_id, $last_message_id, $top_message_id, $another_user_id = "")`
- `get_active_chat()`
- `get_chatlist_of_user()`
- `send_typing_indicator_to_pusher()`

