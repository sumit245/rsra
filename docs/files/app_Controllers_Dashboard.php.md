# app\Controllers\Dashboard.php

- Path: `app\Controllers\Dashboard.php`
- Type: PHP
- Size: 54527 bytes

## References

**Models Used**
- `Custom_widgets_model`
- `Dashboards_model`
- `Settings_model`
- `Custom_fields_model`
- `Clients_model`
- `Users_model`

## Symbols

# Symbols

**Files documented**: 1

## `app\Controllers\Dashboard.php`

**Classes**:
- `App\Controllers\Dashboard extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `_check_widgets_permissions()`
- `_check_widgets_for_staffs()`
- `_check_widgets_for_clients()`
- `save_sticky_note()`
- `modal_form($id = 0)`
- `custom_widget_modal_form($id = 0)`
- `save_custom_widget()`
- `show_my_dashboards()`
- `view($id = 0)`
- `_convert_widgets_array_to_formated_obj($row_widgets = array()`
- `_get_admin_and_team_dashboard_widgets()`
- `_get_first_row_of_admin_and_team_dashboard($widgets)`
- `_get_second_and_third_row_of_admin_and_team_dashboard_widget_columns($widgets)`
- `_get_second_row_of_admin_and_team_dashboard($all_columns)`
- `_get_third_row_of_admin_and_team_dashboard($all_columns)`
- `_get_fourth_row_of_admin_and_team_dashboard($widgets)`
- `_get_fifth_row_of_admin_and_team_dashboard($widgets)`
- `_get_admin_and_team_dashboard_data()`
- `view_custom_widget()`
- `view_default_widget()`
- `_get_my_dashboard($id = 0, $is_staff_dashboard = false)`
- `is_staff_dashboard($id)`
- `_get_my_custom_widget($id = 0)`
- `edit_dashboard($id = 0)`
- `save()`
- `delete()`
- `delete_custom_widgets()`
- `_remove_widgets($widgets = array()`
- `_get_default_widgets()`
- `_make_widgets($dashboard_id = 0)`
- `_make_widgets_row($widgets_array = array()`
- `_widgets_row_data($widget_array)`
- `_make_editable_rows($elements)`
- `make_dashboard($elements)`
- `_make_dashboard_widgets($widget = "")`
- `_get_widgets_for_staffs($widget, $widgets_array)`
- `_get_widgets_for_client($widget, $widgets_array)`
- `_get_plugin_widgets($widget = "")`
- `_get_column_class_value($key, $columns, $column_ratio)`
- `save_dashboard_sort()`
- `client_default_dashboard()`
- `edit_client_default_dashboard()`
- `save_client_default_dashboard()`
- `restore_to_default_client_dashboard()`
- `mark_as_default()`

