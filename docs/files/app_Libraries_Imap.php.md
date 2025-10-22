# app\Libraries\Imap.php

- Path: `app\Libraries\Imap.php`
- Type: PHP
- Size: 10675 bytes

## References

**Database Tables (inferred)**
- `settings`
- `ticket`

## Symbols

# Symbols

**Files documented**: 1

## `app\Libraries\Imap.php`

**Classes**:
- `App\Libraries\Imap`

**Functions/Methods**:
- `__construct()`
- `authorize_imap_and_get_inbox($is_cron = false)`
- `run_imap()`
- `_create_ticket_from_imap($message_info = "")`
- `_prepare_replying_message($message = "")`
- `_save_tickets_comment($ticket_id, $message_info, $client_info, $is_reply = false)`
- `_get_ticket_id_from_subject($subject = "")`
- `_prepare_attachment_data_of_mail($message_info = "")`

