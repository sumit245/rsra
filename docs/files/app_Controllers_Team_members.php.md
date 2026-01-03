# app\Controllers\Team_members.php

- Path: `app\Controllers\Team_members.php`
- Type: PHP
- Size: 45131 bytes

## References

**Models Used**
- `Custom_fields_model`
- `Users_model`
- `Email_templates_model`
- `Roles_model`
- `Verification_model`
- `Social_links_model`
- `Settings_model`
- `General_files_model`

## Symbols

# Symbols

**Files documented**: 1

## `app\Controllers\Team_members.php`

**Classes**:
- `App\Controllers\Team_members extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `can_view_team_members_contact_info()`
- `can_view_team_members_social_links()`
- `update_only_allowed_members($user_id)`
- `can_update_team_members_info($user_id)`
- `can_access_user_settings($user_id)`
- `index()`
- `access_only_admin_or_member_creator()`
- `modal_form()`
- `add_team_member()`
- `invitation_modal()`
- `send_invitation()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data, $custom_fields)`
- `delete()`
- `view($id = 0, $tab = "")`
- `job_info($user_id)`
- `has_job_info_manage_permission()`
- `save_job_info()`
- `general_info($user_id)`
- `save_general_info($user_id)`
- `social_links($user_id)`
- `save_social_links($user_id)`
- `account_settings($user_id)`
- `my_preferences()`
- `save_my_preferences()`
- `save_personal_language($language)`
- `save_account_settings($user_id)`
- `save_profile_image($user_id = 0)`
- `projects_info($user_id)`
- `attendance_info($user_id)`
- `weekly_attendance()`
- `custom_range_attendance()`
- `attendance_summary($user_id)`
- `leave_info($applicant_id)`
- `yearly_leaves()`
- `expense_info($user_id)`
- `files($user_id)`
- `file_modal_form()`
- `save_file()`
- `files_list_data($user_id = 0)`
- `_make_file_row($data)`
- `view_file($file_id = 0)`
- `download_file($id)`
- `upload_file()`
- `validate_file()`
- `delete_file()`
- `keyboard_shortcut_modal_form()`
- `get_recently_meaning_dropdown()`
- `recently_meaning_modal_form()`
- `save_recently_meaning()`

