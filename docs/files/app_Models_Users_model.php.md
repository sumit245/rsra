# app\Models\Users_model.php

- Path: `app\Models\Users_model.php`
- Type: PHP
- Size: 21261 bytes

## Symbols

# Symbols

**Files documented**: 1

## `app\Models\Users_model.php`

**Classes**:
- `App\Models\Users_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `authenticate($email, $password)`
- `verify_password($user_info, $password)`
- `_client_can_login($user_info)`
- `login_user_id()`
- `sign_out()`
- `get_details($options = array()`
- `is_email_exists($email, $id = 0, $client_id = 0)`
- `get_job_info($user_id)`
- `save_job_info($data)`
- `get_team_members($member_ids = "")`
- `get_access_info($user_id = 0)`
- `get_team_members_and_clients($user_type = "", $user_ids = "", $exlclude_user = 0)`
- `user_group_names($user_ids = "")`
- `get_online_user_ids()`
- `get_active_members_and_clients($options = array()`
- `count_total_contacts($options = array()`
- `make_quick_filter_query($filter, $users_table)`
- `get_user_from_full_name($user_full_name = "", $user_type = "")`
- `get_other_clients_of_this_client_contact($email, $id)`
- `update_password($email, $password)`
- `count_total_users()`

