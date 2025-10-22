# app\Models\Tasks_model.php

- Path: `app\Models\Tasks_model.php`
- Type: PHP
- Size: 38756 bytes

## References

**Database Tables (inferred)**
- `1`
- `WHERE`
- `directory`

## Symbols

# Symbols

**Files documented**: 1

## `app\Models\Tasks_model.php`

**Classes**:
- `App\Models\Tasks_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `schema()`
- `get_details($options = array()`
- `make_quick_filter_query($filter, $tasks_table)`
- `get_kanban_details($options = array()`
- `count_my_open_tasks($user_id)`
- `get_label_suggestions($project_id)`
- `get_my_projects_dropdown_list($user_id = 0)`
- `get_task_statistics($options = array()`
- `set_task_comments_as_read($task_id, $user_id = 0)`
- `save_reminder_date(&$data = array()`
- `get_renewable_tasks($date)`
- `get_all_dependency_for_this_task($task_id, $type)`
- `update_custom_data(&$data = array()`
- `get_search_suggestion($search = "", $options = array()`
- `get_all_tasks_where_have_dependency($project_id)`
- `save_gantt_task_date($data, $task_id)`
- `count_sub_task_status($options = array()`
- `delete_task_and_sub_items($task_id)`

