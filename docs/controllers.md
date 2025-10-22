# Controllers

**Files documented**: 76

## `app\Controllers\About.php`

**Classes**:
- `App\Controllers\About extends App_Controller`

**Functions/Methods**:
- `__construct()`
- `index($slug = "")`

## `app\Controllers\Announcements.php`

**Classes**:
- `App\Controllers\Announcements extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `form($id = 0)`
- `_get_client_groups_dropdown_select2_data()`
- `view($id = "")`
- `_prepare_access_options($options = array()`
- `mark_as_read($id)`
- `save()`
- `upload_file()`
- `validate_announcement_file()`
- `download_announcement_files($id = 0)`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data)`

## `app\Controllers\App_Controller.php`

**Classes**:
- `App\Controllers\App_Controller extends Controller`

**Functions/Methods**:
- `__construct()`
- `initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)`
- `get_models_array()`
- `validate_submitted_data($fields = array()`
- `download_app_files($directory_path, $serialized_file_data)`
- `_get_currency_dropdown_select2_data()`

## `app\Controllers\Attendance.php`

**Classes**:
- `App\Controllers\Attendance extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `check_allowed_ip()`
- `access_only_allowed_members($user_id = 0)`
- `index($tab = "")`
- `modal_form()`
- `note_modal_form($user_id = 0)`
- `save()`
- `save_note()`
- `log_time($user_id = 0)`
- `delete()`
- `list_data()`
- `attendance_info()`
- `_row_data($id)`
- `_make_row($data)`
- `custom()`
- `members_clocked_in()`
- `_get_members_dropdown_list_for_filter()`
- `_get_members_query_options($type = "")`
- `summary()`
- `summary_list_data()`
- `summary_details()`
- `summary_details_list_data()`
- `clocked_in_members_list_data()`
- `clock_in_out()`
- `clock_in_out_list_data()`
- `_clock_in_out_row_data($user_id)`
- `_make_clock_in_out_row($data)`

## `app\Controllers\Checklist_groups.php`

**Classes**:
- `App\Controllers\Checklist_groups extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `save()`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data)`
- `checklists_list()`
- `get_checklist_group_suggestion()`

## `app\Controllers\Checklist_template.php`

**Classes**:
- `App\Controllers\Checklist_template extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `save()`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data)`
- `get_checklist_template_suggestion()`

## `app\Controllers\Clients.php`

**Classes**:
- `App\Controllers\Clients extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index($tab = "")`
- `can_edit_clients()`
- `can_view_files()`
- `can_add_files()`
- `modal_form()`
- `save()`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data, $custom_fields)`
- `view($client_id = 0, $tab = "")`
- `add_remove_star($client_id, $type = "add")`
- `show_my_starred_clients()`
- `projects($client_id)`
- `payments($client_id)`
- `tickets($client_id)`
- `invoices($client_id)`
- `estimates($client_id)`
- `orders($client_id)`
- `estimate_requests($client_id)`
- `notes($client_id)`
- `events($client_id)`
- `files($client_id, $view_type = "")`
- `file_modal_form()`
- `save_file()`
- `files_list_data($client_id = 0)`
- `_make_file_row($data)`
- `view_file($file_id = 0)`
- `download_file($id)`
- `upload_file()`
- `validate_file()`
- `delete_file()`
- `contact_profile($contact_id = 0, $tab = "")`
- `account_settings($contact_id)`
- `my_preferences()`
- `save_my_preferences()`
- `save_personal_language($language)`
- `contacts($client_id = 0)`
- `add_new_contact_modal_form()`
- `contact_general_info_tab($contact_id = 0)`
- `company_info_tab($client_id = 0)`
- `contact_social_links_tab($contact_id = 0)`
- `save_contact()`
- `save_contact_social_links($contact_id = 0)`
- `save_account_settings($user_id)`
- `save_profile_image($user_id = 0)`
- `delete_contact()`
- `contacts_list_data($client_id = 0)`
- `_contact_row_data($id)`
- `_make_contact_row($data, $custom_fields, $hide_primary_contact_label = false)`
- `invitation_modal()`
- `send_invitation()`
- `users()`
- `keyboard_shortcut_modal_form()`
- `upload_excel_file()`
- `import_clients_modal_form()`
- `_prepare_client_data($data_row, $allowed_headers)`
- `_get_existing_custom_field_id($title = "")`
- `_prepare_headers_for_submit($headers_row, $headers)`
- `save_client_from_excel_file()`
- `_save_custom_fields_of_client($client_id, $custom_field_values_array)`
- `_get_client_group_ids($client_groups_data)`
- `_get_allowed_headers()`
- `_store_headers_position($headers_row = array()`
- `validate_import_clients_file()`
- `validate_import_clients_file_data($check_on_submit = false)`
- `_row_data_validation_and_get_error_message($key, $data, $has_contact_first_name, $headers = array()`
- `download_sample_excel_file()`
- `gdpr()`
- `export_my_data()`
- `_make_export_data($user_info)`
- `request_my_account_removal()`
- `expenses($client_id)`
- `contracts($client_id)`
- `clients_list()`
- `make_access_permissions_view_data()`
- `proposals($client_id)`
- `switch_account($user_id)`

## `app\Controllers\Client_groups.php`

**Classes**:
- `App\Controllers\Client_groups extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `save()`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data)`

## `app\Controllers\Collect_leads.php`

**Classes**:
- `App\Controllers\Collect_leads extends App_Controller`

**Functions/Methods**:
- `__construct()`
- `index($lead_source_id = 0)`
- `is_valid_recaptcha($recaptcha_post_data)`
- `save()`
- `lead_html_form_code_modal_form()`
- `embedded_code_modal_form()`

## `app\Controllers\Company.php`

**Classes**:
- `App\Controllers\Company extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `save()`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data)`

## `app\Controllers\Contract.php`

**Classes**:
- `App\Controllers\Contract extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `preview($contract_id = 0, $public_key = "")`
- `update_contract_status($contract_id, $public_key, $status)`
- `print_contract($contract_id = 0, $public_key = "")`
- `accept_contract_modal_form($contract_id = 0, $public_key = "")`
- `accept_contract()`
- `file_preview($id = "", $key = "", $public_key = "")`

## `app\Controllers\Contracts.php`

**Classes**:
- `App\Controllers\Contracts extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `yearly()`
- `modal_form()`
- `get_contract_clients_and_leads_dropdown()`
- `save_view()`
- `save()`
- `update_contract_status($contract_id, $status)`
- `delete()`
- `list_data()`
- `contract_list_data_of_client($client_id)`
- `_row_data($id)`
- `_make_row($data, $custom_fields)`
- `_get_contract_status_label($contract_info, $return_html = true)`
- `view($contract_id = 0)`
- `_get_contract_total_view($contract_id = 0)`
- `discount_modal_form()`
- `save_discount()`
- `item_modal_form()`
- `save_item()`
- `delete_item()`
- `item_list_data($contract_id = 0)`
- `_make_item_row($data)`
- `get_contract_item_suggestion()`
- `get_contract_item_info_suggestion()`
- `preview($contract_id = 0, $show_close_preview = false, $is_editor_preview = false)`
- `_check_contract_access_permission($contract_data)`
- `get_contract_status_bar($contract_id = 0)`
- `send_contract_modal_form($contract_id)`
- `send_contract()`
- `update_item_sort_values($id = 0)`
- `editor($contract_id = 0)`
- `get_project_suggestion($client_id = 0)`
- `contract_list_data_of_project($project_id)`
- `upload_file()`
- `validate_contracts_file()`

## `app\Controllers\Contract_templates.php`

**Classes**:
- `App\Controllers\Contract_templates extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `save_template()`
- `form($id = "")`
- `save()`
- `delete()`
- `list_data($view_type = "")`
- `_row_data($id)`
- `_make_row($data, $view_type = "")`
- `insert_template_modal_form()`
- `get_template_data($id = 0)`

## `app\Controllers\Cron.php`

**Classes**:
- `App\Controllers\Cron extends App_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`

## `app\Controllers\Custom_fields.php`

**Classes**:
- `App\Controllers\Custom_fields extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `view($tab = "client")`
- `modal_form()`
- `save()`
- `list_data($related_to)`
- `_row_data($id)`
- `_make_field_row($data)`
- `update_field_sort_values($id = 0)`
- `delete()`
- `leads()`
- `client_contacts()`
- `lead_contacts()`
- `projects()`
- `tasks()`
- `team_members()`
- `tickets()`
- `invoices()`
- `events()`
- `expenses()`
- `estimates()`
- `orders()`
- `timesheets()`
- `contracts()`
- `proposals()`
- `project_files()`

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

## `app\Controllers\Email_templates.php`

**Classes**:
- `App\Controllers\Email_templates extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `_templates()`
- `index()`
- `save()`
- `restore_to_default()`
- `form($template_name = "", $template_language = "")`
- `add_template_modal_form()`
- `save_template()`
- `different_language_form($id = 0)`

## `app\Controllers\Estimate.php`

**Classes**:
- `App\Controllers\Estimate extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `preview($estimate_id = 0, $public_key = "")`
- `update_estimate_status($estimate_id, $public_key, $status)`
- `accept_estimate_modal_form($estimate_id = 0, $public_key = "")`
- `accept_estimate()`

## `app\Controllers\Estimates.php`

**Classes**:
- `App\Controllers\Estimates extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `show_own_estimates_only_user_id()`
- `can_access_this_estimate($estimate_id = 0)`
- `can_access_this_estimate_item($estimate_item_id = 0)`
- `yearly()`
- `modal_form()`
- `save()`
- `_copy_related_items_to_estimate($copy_items_from_proposal, $copy_items_from_contract, $copy_items_from_order, $estimate_id)`
- `update_estimate_status($estimate_id, $status, $is_modal = false)`
- `_create_project_from_estimate($estimate_id)`
- `delete()`
- `list_data()`
- `estimate_list_data_of_client($client_id)`
- `_row_data($id)`
- `_make_row($data, $custom_fields)`
- `_get_estimate_status_label($estimate_info, $return_html = true)`
- `view($estimate_id = 0)`
- `_get_estimate_total_view($estimate_id = 0)`
- `discount_modal_form()`
- `save_discount()`
- `item_modal_form()`
- `save_item()`
- `delete_item()`
- `item_list_data($estimate_id = 0)`
- `_make_item_row($data)`
- `get_estimate_item_suggestion()`
- `get_estimate_item_info_suggestion()`
- `preview($estimate_id = 0, $show_close_preview = false)`
- `download_pdf($estimate_id = 0, $mode = "download")`
- `_check_estimate_access_permission($estimate_data)`
- `get_estimate_status_bar($estimate_id = 0)`
- `send_estimate_modal_form($estimate_id)`
- `send_estimate()`
- `update_item_sort_values($id = 0)`
- `upload_file()`
- `validate_estimate_file()`
- `save_comment()`
- `delete_comment($id = 0)`
- `download_comment_files($id)`
- `comment_modal_form()`
- `load_statistics_of_selected_currency($currency = "")`
- `print_estimate($estimate_id = 0)`

## `app\Controllers\Estimate_requests.php`

**Classes**:
- `App\Controllers\Estimate_requests extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `view_estimate_request($id = 0)`
- `download_estimate_request_files($id = 0)`
- `estimate_request_list_data()`
- `estimate_requests_for_client($client_id)`
- `estimate_requests_list_data_of_client($client_id)`
- `_make_estimate_request_row($data)`
- `_estimate_request_row_data($id)`
- `delete_estimate_request()`
- `_get_estimate_status_label($status = "")`
- `estimate_request_filed_list_data($id = 0)`
- `_make_estimate_request_field_row($data)`
- `estimate_forms()`
- `estimate_request_modal_form()`
- `save_estimate_request_form()`
- `delete_estimate_request_form()`
- `estimate_forms_list_data()`
- `_form_row_data($id)`
- `_make_form_row($data)`
- `edit_estimate_form($id = 0)`
- `edit_estimate_request_modal_form()`
- `update_estimate_request()`
- `change_estimate_request_status($id, $status)`
- `preview_estimate_form($id = 0)`
- `estimate_form_field_modal_form($estimate_form_id = 0)`
- `save_estimate_form_field()`
- `estimate_form_filed_list_data($id = 0)`
- `_form_filed_row_data($id)`
- `_make_form_field_row($data)`
- `update_form_field_sort_values($id = 0)`
- `estimate_form_field_delete()`
- `request_an_estimate_modal_form()`
- `submit_estimate_request_form($id = 0)`
- `save_estimate_request()`
- `upload_file()`
- `validate_file()`
- `embedded_code_modal_form()`

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

## `app\Controllers\Expenses.php`

**Classes**:
- `App\Controllers\Expenses extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `_get_categories_dropdown()`
- `_get_team_members_dropdown()`
- `yearly()`
- `summary()`
- `custom()`
- `recurring()`
- `modal_form()`
- `save()`
- `delete()`
- `list_data($recurring = false)`
- `_row_data($id)`
- `_make_row($data, $custom_fields)`
- `file_preview($id = "", $key = "")`
- `upload_file()`
- `validate_expense_file()`
- `yearly_chart()`
- `yearly_chart_data()`
- `income_vs_expenses()`
- `income_vs_expenses_chart_data()`
- `income_vs_expenses_summary()`
- `income_vs_expenses_summary_list_data()`
- `_row_data_of_summary($month_index, $payments, $expenses)`
- `expense_list_data_of_client($client_id)`
- `can_access_clients()`
- `expense_details()`
- `summary_list_data()`
- `download_files($id)`
- `import_expenses_modal_form()`
- `download_sample_excel_file()`
- `upload_excel_file()`
- `validate_import_expenses_file()`
- `_prepare_expense_data($data_row, $allowed_headers)`
- `_get_existing_custom_field_id($title = "")`
- `_prepare_headers_for_submit($headers_row, $headers)`
- `save_expense_from_excel_file()`
- `_save_custom_fields_of_expense($expense_id, $custom_field_values_array)`
- `_get_category_id($category = "")`
- `_get_project_id($project = "")`
- `_get_user_id($user = "")`
- `_get_client_id($client = "")`
- `_get_tax_id($tax = "")`
- `_get_allowed_headers()`
- `_store_headers_position($headers_row = array()`
- `validate_import_expenses_file_data($check_on_submit = false)`
- `_row_data_validation_and_get_error_message($key, $data, $headers = array()`

## `app\Controllers\Expense_categories.php`

**Classes**:
- `App\Controllers\Expense_categories extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `save()`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data)`

## `app\Controllers\External_tickets.php`

**Classes**:
- `App\Controllers\External_tickets extends App_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `is_valid_recaptcha($recaptcha_post_data)`
- `save()`
- `upload_file()`
- `validate_file()`
- `embedded_code_modal_form()`

## `app\Controllers\Forbidden.php`

**Classes**:
- `App\Controllers\Forbidden extends App_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`

## `app\Controllers\Google_api.php`

**Classes**:
- `App\Controllers\Google_api extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `authorize()`
- `save_access_token()`
- `authorize_calendar()`
- `save_access_token_of_calendar()`

## `app\Controllers\Help.php`

**Classes**:
- `App\Controllers\Help extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `view($id = 0)`
- `get_article_suggestion()`
- `category($id)`
- `help_articles()`
- `knowledge_base_articles()`
- `help_categories()`
- `knowledge_base_categories()`
- `category_modal_form($type)`
- `save_category()`
- `delete_category()`
- `categories_list_data($type)`
- `_category_row_data($id)`
- `_make_category_row($data)`
- `article_form($type, $id = 0)`
- `save_article()`
- `delete_article()`
- `articles_list_data($type)`
- `_article_row_data($id)`
- `_make_article_row($data)`
- `upload_file()`
- `validate_file()`
- `download_files($id = 0)`

## `app\Controllers\Invoices.php`

**Classes**:
- `App\Controllers\Invoices extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index($tab = "")`
- `yearly()`
- `recurring()`
- `custom()`
- `modal_form()`
- `get_project_suggestion($client_id = 0)`
- `save()`
- `_copy_related_items_to_invoice($copy_items_from_estimate, $copy_items_from_proposal, $copy_items_from_order, $copy_items_from_contract, $invoice_id)`
- `delete()`
- `list_data()`
- `invoice_list_data_of_client($client_id)`
- `invoice_list_data_of_project($project_id, $client_id = 0)`
- `sub_invoices($recurring_invoice_id)`
- `sub_invoices_list_data($recurring_invoice_id)`
- `_row_data($id)`
- `_make_row($data, $custom_fields)`
- `_make_options_dropdown($invoice_id = 0)`
- `_get_invoice_status_label($data, $return_html = true)`
- `recurring_list_data()`
- `_make_recurring_row($data)`
- `view($invoice_id = 0)`
- `_get_invoice_total_view($invoice_id = 0)`
- `item_modal_form()`
- `save_item()`
- `delete_item()`
- `item_list_data($invoice_id = 0)`
- `_make_item_row($data)`
- `update_item_sort_values($id = 0)`
- `get_invoice_item_suggestion()`
- `get_invoice_item_info_suggestion()`
- `preview($invoice_id = 0, $show_close_preview = false)`
- `print_invoice($invoice_id = 0)`
- `download_pdf($invoice_id = 0, $mode = "download")`
- `_check_invoice_access_permission($invoice_data)`
- `send_invoice_modal_form($invoice_id)`
- `get_send_invoice_template($invoice_id = 0, $contact_id = 0, $return_type = "", $invoice_info = "", $contact_info = "")`
- `send_invoice()`
- `get_invoice_status_bar($invoice_id = 0)`
- `update_invoice_status($invoice_id = 0, $status = "")`
- `discount_modal_form()`
- `save_discount()`
- `load_statistics_of_selected_currency($currency = "", $currency_symbol = "")`
- `upload_file()`
- `validate_invoices_file()`
- `file_preview($id = "", $key = "")`
- `load_invoice_overview_statistics_of_selected_currency($currency = "", $currency_symbol = "")`

## `app\Controllers\Invoice_payments.php`

**Classes**:
- `App\Controllers\Invoice_payments extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `get_payment_method_dropdown()`
- `yearly()`
- `custom()`
- `payment_modal_form()`
- `save_payment()`
- `delete_payment()`
- `payment_list_data($invoice_id = 0)`
- `payment_list_data_of_client($client_id = 0)`
- `payment_list_data_of_project($project_id = 0)`
- `_make_payment_row($data)`
- `_get_invoice_total_view($invoice_id = 0)`
- `yearly_chart()`
- `yearly_chart_data()`
- `get_paytm_checksum_hash()`
- `get_stripe_checkout_session()`
- `payments_summary()`
- `yearly_payment_summary_list_data()`
- `clients_payment_summary()`
- `clients_payment_summary_list_data()`
- `can_access_clients()`

## `app\Controllers\Items.php`

**Classes**:
- `App\Controllers\Items extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `validate_access_to_items()`
- `index()`
- `_get_categories_dropdown()`
- `modal_form()`
- `save()`
- `delete()`
- `list_data()`
- `_make_item_row($data)`
- `upload_file()`
- `validate_items_file()`
- `view()`
- `save_files_sort()`
- `grid_view($offset = 0, $limit = 20, $category_id = 0, $search = "")`
- `add_item_to_cart()`
- `count_cart_items()`
- `load_cart_items()`
- `delete_cart_item()`
- `change_cart_item_quantity($type = "")`
- `_get_cart_total_view()`
- `import_items_modal_form()`
- `download_sample_excel_file()`
- `upload_excel_file()`
- `validate_import_items_file()`
- `save_item_from_excel_file()`
- `_get_item_category_id($category = "")`
- `_get_allowed_headers()`
- `_store_headers_position($headers_row = array()`
- `validate_import_items_file_data($check_on_submit = false)`
- `_row_data_validation_and_get_error_message($key, $data)`
- `_prepare_item_data($data_row, $allowed_headers)`

## `app\Controllers\Item_categories.php`

**Classes**:
- `App\Controllers\Item_categories extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `save()`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data)`

## `app\Controllers\Knowledge_base.php`

**Classes**:
- `App\Controllers\Knowledge_base extends App_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `category($id)`
- `view($id = 0)`
- `get_article_suggestion()`
- `download_files($id = 0)`
- `article_helpful_status($article_id, $status)`

## `app\Controllers\Labels.php`

**Classes**:
- `App\Controllers\Labels extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `can_access_labels_of_this_context($context = "", $label_id = 0)`
- `modal_form()`
- `_make_existing_labels_data($type)`
- `_get_labels_row_data($data)`
- `save()`
- `delete()`

## `app\Controllers\Leads.php`

**Classes**:
- `App\Controllers\Leads extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `make_lead_modal_form_data($lead_id = 0)`
- `_get_owners_dropdown($view_type = "")`
- `save()`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data, $custom_fields)`
- `view($client_id = 0, $tab = "")`
- `estimates($client_id)`
- `estimate_requests($client_id)`
- `notes($client_id)`
- `events($client_id)`
- `files($client_id)`
- `file_modal_form()`
- `save_file()`
- `files_list_data($client_id = 0)`
- `_make_file_row($data)`
- `view_file($file_id = 0)`
- `download_file($id)`
- `upload_file()`
- `validate_file()`
- `delete_file()`
- `contact_profile($contact_id = 0, $tab = "")`
- `contacts($client_id)`
- `add_new_contact_modal_form()`
- `contact_general_info_tab($contact_id = 0)`
- `company_info_tab($client_id = 0)`
- `contact_social_links_tab($contact_id = 0)`
- `save_contact()`
- `save_contact_social_links($contact_id = 0)`
- `save_profile_image($user_id = 0)`
- `delete_contact()`
- `contacts_list_data($client_id = 0)`
- `_contact_row_data($id)`
- `_make_contact_row($data, $custom_fields)`
- `save_lead_status($id = 0)`
- `all_leads_kanban()`
- `all_leads_kanban_data()`
- `save_lead_sort_and_status()`
- `make_client_modal_form($lead_id = 0)`
- `save_as_client()`
- `upload_excel_file()`
- `import_leads_modal_form()`
- `_prepare_lead_data($data_row, $allowed_headers)`
- `_get_existing_custom_field_id($title = "")`
- `_prepare_headers_for_submit($headers_row, $headers)`
- `save_lead_from_excel_file()`
- `_save_custom_fields_of_lead($lead_id, $custom_field_values_array)`
- `_get_allowed_headers()`
- `_store_headers_position($headers_row = array()`
- `validate_import_leads_file()`
- `validate_import_leads_file_data($check_on_submit = false)`
- `_row_data_validation_and_get_error_message($key, $data, $has_contact_first_name, $headers = array()`
- `download_sample_excel_file()`
- `proposals($client_id)`
- `contracts($client_id)`

## `app\Controllers\Lead_source.php`

**Classes**:
- `App\Controllers\Lead_source extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `save()`
- `update_field_sort_values($id = 0)`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data)`

## `app\Controllers\Lead_status.php`

**Classes**:
- `App\Controllers\Lead_status extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `save()`
- `update_field_sort_values($id = 0)`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data)`

## `app\Controllers\Leaves.php`

**Classes**:
- `App\Controllers\Leaves extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `access_only_allowed_members($user_id = 0)`
- `can_delete_leave_application()`
- `index($tab = "")`
- `assign_leave_modal_form($applicant_id = 0)`
- `apply_leave_modal_form()`
- `assign_leave()`
- `apply_leave()`
- `_prepare_leave_form_data()`
- `pending_approval()`
- `all_applications()`
- `summary()`
- `pending_approval_list_data()`
- `all_application_list_data()`
- `summary_list_data()`
- `_row_data($id)`
- `_make_row($data)`
- `_make_row_for_summary($data)`
- `_prepare_leave_info($data)`
- `application_details()`
- `update_status()`
- `delete()`
- `leave_info()`
- `_get_members_dropdown_list_for_filter()`
- `_get_leave_types_dropdown_list_for_filter()`
- `upload_file()`
- `validate_leaves_file()`
- `file_preview($id = "", $key = "")`
- `import_leaves_modal_form()`
- `download_sample_excel_file()`
- `upload_excel_file()`
- `validate_import_leaves_file()`
- `save_leave_from_excel_file()`
- `_get_applicant_id($applicant = "")`
- `_get_leave_type_id($leave_type = "")`
- `_get_allowed_headers()`
- `_store_headers_position($headers_row = array()`
- `validate_import_leaves_file_data($check_on_submit = false)`
- `_row_data_validation_and_get_error_message($key, $data)`
- `_prepare_leave_data($data_row, $allowed_headers)`

## `app\Controllers\Leave_types.php`

**Classes**:
- `App\Controllers\Leave_types extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `save()`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data)`

## `app\Controllers\Left_menus.php`

**Classes**:
- `App\Controllers\Left_menus extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `check_left_menu_permission($type = "")`
- `index($type = "default")`
- `save()`
- `_prepare_user_custom_redirect_to_url()`
- `add_menu_item_modal_form()`
- `prepare_custom_menu_item_data()`
- `restore($type = "")`

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

## `app\Controllers\Notes.php`

**Classes**:
- `App\Controllers\Notes extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `validate_access_to_note($note_info, $edit_mode = false)`
- `index()`
- `modal_form()`
- `save()`
- `delete()`
- `list_data($type = "", $id = 0)`
- `_row_data($id)`
- `_make_row($data)`
- `view()`
- `file_preview($id = "", $key = "")`
- `upload_file()`
- `validate_notes_file()`

## `app\Controllers\Notifications.php`

**Classes**:
- `App\Controllers\Notifications extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `load_more($offset = 0)`
- `count_notifications()`
- `get_notifications()`
- `update_notification_checking_status()`
- `set_notification_status_as_read($notification_id = 0)`
- `_prepare_notification_list($offset = 0)`

## `app\Controllers\Notification_processor.php`

**Classes**:
- `App\Controllers\Notification_processor extends App_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `create_notification($data = array()`
- `get_reminder_tasks($event)`
- `_clasified_task_modification(&$event, &$options, $activity_log_id = 0)`
- `_save_reminder_date(&$event, &$options)`

## `app\Controllers\Offer.php`

**Classes**:
- `App\Controllers\Offer extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `preview($proposal_id = 0, $public_key = "")`
- `update_proposal_status($proposal_id, $public_key, $status)`
- `print_proposal($proposal_id = 0, $public_key = "")`
- `accept_proposal_modal_form($proposal_id = 0, $public_key = "")`
- `accept_proposal()`

## `app\Controllers\Orders.php`

**Classes**:
- `App\Controllers\Orders extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `process_order()`
- `item_list_data_of_login_user()`
- `_make_item_row($data)`
- `item_modal_form()`
- `save_item()`
- `update_item_sort_values($id = 0)`
- `delete_item()`
- `_get_order_total_view($order_id = 0)`
- `place_order()`
- `list_data()`
- `_make_row($data, $custom_fields)`
- `yearly()`
- `modal_form()`
- `_get_clients_dropdown()`
- `save()`
- `delete()`
- `view($order_id = 0)`
- `check_access_to_this_order($order_data)`
- `download_pdf($order_id = 0, $mode = "download")`
- `preview($order_id = 0, $show_close_preview = false)`
- `get_order_item_suggestion()`
- `get_order_item_info_suggestion()`
- `save_order_status($id = 0)`
- `_row_data($id)`
- `discount_modal_form()`
- `save_discount()`
- `item_list_data($order_id = 0)`
- `order_list_data_of_client($client_id)`
- `upload_file()`
- `validate_orders_file()`
- `file_preview($id = "", $key = "")`

## `app\Controllers\Order_status.php`

**Classes**:
- `App\Controllers\Order_status extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `save()`
- `update_field_sort_values($id = 0)`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data)`

## `app\Controllers\Pages.php`

**Classes**:
- `App\Controllers\Pages extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `save()`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data)`

## `app\Controllers\Payment_methods.php`

**Classes**:
- `App\Controllers\Payment_methods extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `save()`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data)`
- `update_payment_method_sort_values($id = 0)`

## `app\Controllers\Paypal_ipn.php`

**Classes**:
- `App\Controllers\Paypal_ipn extends App_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`

## `app\Controllers\Paytm_redirect.php`

**Classes**:
- `App\Controllers\Paytm_redirect extends App_Controller`

**Functions/Methods**:
- `__construct()`
- `index($payment_verification_code = "")`
- `redirect_to_invoice($invoice_id = 0, $verification_code = "")`

## `app\Controllers\Pay_invoice.php`

**Classes**:
- `App\Controllers\Pay_invoice extends App_Controller`

**Functions/Methods**:
- `__construct()`
- `index($verification_code = "")`
- `_check_access_of_invoice($view_data)`
- `get_stripe_checkout_session()`
- `_log($text = "")`
- `get_paytm_checksum_hash()`

## `app\Controllers\Plugins.php`

**Classes**:
- `App\Controllers\Plugins extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `upload_file()`
- `validate_plugin_file()`
- `save()`
- `get_plugins_array($include_directories = false)`
- `this_plugin_exists($plugin_name = "")`
- `save_status_of_plugin($plugin_name = "", $status = "", $echo_json = false)`
- `install_plugin($plugin_name = "")`
- `delete($plugin_name = "")`
- `list_data()`
- `_make_row($plugin, $status)`
- `prepare_plugin_description($plugin_info)`
- `updates($plugin_name = "")`

## `app\Controllers\Pre_loader.php`

**Classes**:
- `App\Controllers\Pre_loader extends Security_Controller`

**Functions/Methods**:
- `__construct()`

## `app\Controllers\Projects.php`

**Classes**:
- `App\Controllers\Projects extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `can_delete_projects($project_id = 0)`
- `can_add_remove_project_members()`
- `can_view_tasks($project_id = "", $task_id = "")`
- `can_delete_tasks()`
- `can_comment_on_tasks()`
- `can_view_milestones()`
- `can_create_milestones()`
- `can_edit_milestones()`
- `can_delete_milestones()`
- `can_delete_files($uploaded_by = 0)`
- `can_view_files()`
- `can_add_files()`
- `can_comment_on_files()`
- `can_view_gantt()`
- `init_project_settings($project_id)`
- `can_view_timesheet($project_id = 0, $show_all_personal_timesheets = false)`
- `index()`
- `all_projects($status = "")`
- `modal_form()`
- `save()`
- `clone_project_modal_form()`
- `save_cloned_project()`
- `_prepare_new_task_data_on_cloning_project($new_project_id, $milestones_array, $task, $copy_same_assignee_and_collaborators, $copy_tasks_start_date_and_deadline, $move_all_tasks_to_to_do, $change_the_tasks_start_date_and_deadline_based_on_project_start_date, $old_project_info, $project_start_date)`
- `_save_custom_fields_on_cloning_project($task, $new_taks_id)`
- `delete()`
- `list_data()`
- `projects_list_data_of_team_member($team_member_id = 0)`
- `projects_list_data_of_client($client_id = 0)`
- `_row_data($id)`
- `_make_row($data, $custom_fields)`
- `view($project_id = 0, $tab = "")`
- `can_edit_timesheet_settings($project_id)`
- `can_edit_slack_settings()`
- `_get_project_info_data($project_id)`
- `show_my_starred_projects()`
- `overview($project_id)`
- `can_access_clients()`
- `add_remove_star($project_id, $type = "add")`
- `overview_for_client($project_id)`
- `project_member_modal_form()`
- `save_project_member()`
- `delete_project_member()`
- `project_member_list_data($project_id = 0, $user_type = "")`
- `_project_member_row_data($id)`
- `_make_project_member_row($data, $can_send_message_to_client = false)`
- `stop_timer_modal_form($project_id)`
- `_get_timesheet_tasks_dropdown($project_id, $return_json = false)`
- `timer($project_id, $timer_status = "start")`
- `timesheets($project_id)`
- `_get_project_members_dropdown_list_for_filter($project_id)`
- `timelog_modal_form()`
- `_prepare_all_related_data_for_timelog($project_id = 0)`
- `get_all_related_data_of_selected_project_for_timelog($project_id = "")`
- `save_timelog()`
- `delete_timelog()`
- `check_timelog_update_permission($log_id = null, $project_id = null, $user_id = null)`
- `timesheet_list_data()`
- `_timesheet_row_data($id)`
- `_make_timesheet_row($data, $custom_fields)`
- `timesheet_summary($project_id)`
- `timesheet_summary_list_data()`
- `_get_all_projects_dropdown_list()`
- `_get_all_projects_dropdown_list_for_timesheets_filter()`
- `_get_members_to_manage_timesheet()`
- `_prepare_members_dropdown_for_timesheet_filter($members)`
- `all_timesheets()`
- `all_timesheet_summary()`
- `milestones($project_id)`
- `milestone_modal_form()`
- `save_milestone()`
- `delete_milestone()`
- `milestones_list_data($project_id = 0)`
- `_milestone_row_data($id)`
- `_make_milestone_row($data)`
- `tasks($project_id)`
- `get_removed_task_status_ids($project_id = 0)`
- `tasks_kanban($project_id)`
- `get_milestones_for_filter()`
- `_get_milestones_dropdown_list($project_id = 0)`
- `_get_priorities_dropdown_list($priority_id = 0)`
- `_get_project_members_dropdown_list($project_id = 0)`
- `all_tasks($tab = "", $status_id = 0, $priority_id = 0)`
- `all_tasks_kanban()`
- `can_edit_task_of_the_project($project_id = 0)`
- `all_tasks_kanban_data()`
- `project_tasks_kanban_data($project_id = 0)`
- `set_task_comments_as_read($task_id = 0)`
- `task_view($task_id = 0)`
- `_get_project_deadline_for_task($project_id)`
- `_initialize_all_related_data_of_project($project_id = 0, $collaborators = "", $task_labels = "")`
- `task_modal_form()`
- `get_all_related_data_of_project($project_id, $collaborators = "", $task_labels = "")`
- `get_all_related_data_of_selected_project($project_id)`
- `save_task()`
- `check_sub_tasks_statuses($status_id = 0, $parent_task_id = 0)`
- `save_sub_task()`
- `_make_sub_task_row($data, $return_type = "row")`
- `save_task_status($id = 0)`
- `update_task_info($id = 0, $data_field = "")`
- `save_task_sort_and_status()`
- `delete_task()`
- `tasks_list_data($project_id = 0)`
- `my_tasks_list_data($is_widget = 0)`
- `_task_row_data($id)`
- `_make_task_row($data, $custom_fields)`
- `_get_collaborators($collaborator_list, $clickable = true)`
- `comments($project_id)`
- `customer_feedback($project_id)`
- `save_comment()`
- `delete_comment($id = 0)`
- `view_comment_replies($comment_id)`
- `comment_reply_form($comment_id, $type = "project", $type_id = 0)`
- `files($project_id)`
- `view_file($file_id = 0)`
- `file_modal_form()`
- `save_file()`
- `upload_file()`
- `validate_project_file()`
- `delete_file()`
- `download_file($id)`
- `download_multiple_files($files_ids = "")`
- `batch_update_modal_form($task_ids = "")`
- `save_batch_update()`
- `download_comment_files($id)`
- `files_list_data($project_id = 0)`
- `_make_file_row($data, $custom_fields)`
- `notes($project_id)`
- `history($offset = 0, $log_for = "", $log_for_id = "", $log_type = "", $log_type_id = "")`
- `members($project_id = 0)`
- `payments($project_id)`
- `invoices($project_id, $client_id = 0)`
- `expenses($project_id)`
- `change_status($project_id, $status)`
- `gantt($project_id = 0)`
- `gantt_data($project_id = 0, $group_by = "milestones", $milestone_id = 0, $user_id = 0, $status = "")`
- `invalid_date_of_gantt($start_date, $end_date)`
- `settings_modal_form()`
- `save_settings()`
- `save_checklist_item()`
- `_make_checklist_item_row($data = array()`
- `save_checklist_item_status($id = 0)`
- `save_checklist_items_sort()`
- `delete_checklist_item($id)`
- `get_member_suggestion_to_mention()`
- `get_projects_of_selected_client_for_filter()`
- `_get_clients_dropdown()`
- `timesheet_chart($project_id = 0)`
- `all_gantt()`
- `timesheet_chart_data($project_id = 0)`
- `save_dependency_tasks()`
- `_get_all_dependency_for_this_task($task_id)`
- `get_existing_dependency_tasks($task_id = 0)`
- `_get_all_dependency_for_this_task_specific($task_ids = "", $task_id = 0, $type = "")`
- `_make_dependency_tasks_view_data($task_ids = "", $task_id = 0, $type = "")`
- `_make_dependency_tasks_row_data($task_info, $task_id, $type)`
- `delete_dependency_task($dependency_task_id, $task_id, $type)`
- `like_comment($comment_id = 0)`
- `save_gantt_task_date()`
- `show_my_open_timers()`
- `task_timesheet($task_id, $project_id)`
- `contracts($project_id)`
- `pin_comment($comment_id = 0)`
- `tickets($project_id)`
- `file_category($project_id = 0)`
- `file_category_list_data($project_id = 0)`
- `_file_category_row_data($id, $project_id = 0)`
- `_make_file_category_row($data, $project_id = 0)`
- `file_category_modal_form()`
- `save_file_category()`
- `delete_file_category()`
- `delete_multiple_files($files_ids = "")`
- `import_tasks_modal_form()`
- `upload_excel_file()`
- `download_sample_excel_file()`
- `validate_import_tasks_file()`
- `_prepare_task_data($data_row, $allowed_headers)`
- `_get_existing_custom_field_id($title = "")`
- `_prepare_headers_for_submit($headers_row, $headers)`
- `save_task_from_excel_file()`
- `_save_custom_fields_of_task($task_id, $custom_field_values_array)`
- `_get_project_id($project = "")`
- `_get_milestone_id($milestone = "")`
- `_get_assigned_to_id($assigned_to = "")`
- `_check_task_points($points = "")`
- `_get_collaborators_ids($collaborators_data)`
- `_get_status_id($status = "")`
- `_get_label_ids($labels = "")`
- `_get_allowed_headers()`
- `_store_headers_position($headers_row = array()`
- `validate_import_tasks_file_data($check_on_submit = false)`
- `_row_data_validation_and_get_error_message($key, $data, $headers = array()`

## `app\Controllers\Proposals.php`

**Classes**:
- `App\Controllers\Proposals extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `yearly()`
- `modal_form()`
- `get_proposal_clients_and_leads_dropdown()`
- `save_view()`
- `save()`
- `update_proposal_status($proposal_id, $status)`
- `delete()`
- `list_data()`
- `proposal_list_data_of_client($client_id)`
- `_row_data($id)`
- `_make_row($data, $custom_fields)`
- `_get_proposal_status_label($proposal_info, $return_html = true)`
- `view($proposal_id = 0)`
- `_get_proposal_total_view($proposal_id = 0)`
- `discount_modal_form()`
- `save_discount()`
- `item_modal_form()`
- `save_item()`
- `delete_item()`
- `item_list_data($proposal_id = 0)`
- `_make_item_row($data)`
- `get_proposal_item_suggestion()`
- `get_proposal_item_info_suggestion()`
- `preview($proposal_id = 0, $show_close_preview = false, $is_editor_preview = false)`
- `_check_proposal_access_permission($proposal_data)`
- `get_proposal_status_bar($proposal_id = 0)`
- `send_proposal_modal_form($proposal_id)`
- `send_proposal()`
- `update_item_sort_values($id = 0)`
- `editor($proposal_id = 0)`

## `app\Controllers\Proposal_templates.php`

**Classes**:
- `App\Controllers\Proposal_templates extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `save_template()`
- `form($id = "")`
- `save()`
- `delete()`
- `list_data($view_type = "")`
- `_row_data($id)`
- `_make_row($data, $view_type = "")`
- `insert_template_modal_form()`
- `get_template_data($id = 0)`

## `app\Controllers\Request_estimate.php`

**Classes**:
- `App\Controllers\Request_estimate extends App_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `form($id = 0, $embedded = 0)`
- `is_valid_recaptcha($recaptcha_post_data)`
- `save_estimate_request()`
- `estimate_form_filed_list_data($id = 0)`
- `_make_form_field_row($data)`
- `upload_file()`
- `validate_file()`

## `app\Controllers\Roles.php`

**Classes**:
- `App\Controllers\Roles extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `permissions($role_id)`
- `save()`
- `save_permissions()`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data)`
- `user_roles()`
- `user_role_list_data()`
- `_user_role_row_data($id)`
- `_make_user_role_row($data)`
- `user_role_modal_form()`
- `save_user_role()`

## `app\Controllers\Search.php`

**Classes**:
- `App\Controllers\Search extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `can_access_clients()`
- `search_modal_form()`
- `get_search_suggestion()`

## `app\Controllers\Security_Controller.php`

**Classes**:
- `App\Controllers\Security_Controller extends App_Controller`

**Functions/Methods**:
- `__construct($redirect = true)`
- `init_permission_checker($module)`
- `get_access_info($group)`
- `access_only_team_members()`
- `access_only_admin()`
- `access_only_admin_or_settings_admin()`
- `access_only_allowed_members()`
- `access_only_allowed_members_or_client_contact($client_id)`
- `access_only_allowed_members_or_contact_personally($user_id)`
- `access_only_team_members_or_client_contact($client_id)`
- `access_only_clients()`
- `check_module_availability($module_name)`
- `can_create_projects()`
- `can_view_team_members_list()`
- `access_only_team_members_or_client()`
- `init_project_permission_checker($project_id = 0)`
- `can_create_tasks($in_project = true)`
- `can_manage_all_projects()`
- `_get_currencies_dropdown()`
- `get_hidden_topbar_menus_dropdown()`
- `_get_projects_dropdown_for_income_and_expenses($type = "all")`
- `_get_groups_dropdown_select2_data($show_header = false)`
- `get_clients_and_leads_dropdown($return_json = false)`
- `show_assigned_tasks_only_user_id()`
- `get_calendar_filter_dropdown($type = "default")`
- `check_access_to_store()`
- `check_access_to_this_order_item($order_item_info)`
- `make_labels_dropdown($type = "", $label_ids = "", $is_filter = false, $custom_filter_title = "")`
- `can_edit_projects($project_id = 0)`
- `get_user_options_for_query($only_type = "")`
- `check_access_on_messages_for_this_user()`
- `can_view_invoices($client_id = 0)`
- `can_edit_invoices()`
- `can_access_expenses()`
- `validate_sending_message($to_user_id)`
- `show_own_clients_only_user_id()`
- `check_profile_image_dimension($image_file_name = "")`
- `show_assigned_tickets_only_user_id()`
- `get_team_members_dropdown($is_filter = false)`
- `_get_projects_dropdown()`
- `check_access_to_this_item($item_info)`
- `get_conversion_rate_with_currency_symbol()`
- `can_access_this_client($client_id = 0)`
- `can_access_this_lead($lead_id = 0)`
- `show_own_leads_only_user_id()`
- `prepare_custom_field_filter_values($related_to, $is_admin = 0, $user_type = "")`
- `_get_roles_dropdown()`
- `is_own_id($user_id)`
- `has_role_manage_permission()`
- `is_admin_role($role)`
- `get_allowed_user_ids()`
- `_check_valid_date($string = "")`
- `has_all_projects_restricted_role()`
- `_get_companies_dropdown()`
- `can_edit_tasks()`

## `app\Controllers\Settings.php`

**Classes**:
- `App\Controllers\Settings extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `general()`
- `save_general_settings()`
- `email()`
- `save_email_settings()`
- `ip_restriction()`
- `save_ip_settings()`
- `db_backup()`
- `client_permissions()`
- `save_client_settings()`
- `invoices()`
- `save_invoice_settings()`
- `events()`
- `save_event_settings()`
- `notifications()`
- `notification_modal_form()`
- `notification_settings_list_data()`
- `_notification_list_data($id)`
- `_make_notification_settings_row($data)`
- `save_notification_settings()`
- `modules()`
- `save_module_settings()`
- `upload_file()`
- `validate_file()`
- `cron_job()`
- `integration($tab = "")`
- `re_captcha()`
- `save_re_captcha_settings()`
- `bitbucket()`
- `save_bitbucket_settings()`
- `tickets()`
- `save_ticket_settings()`
- `tasks()`
- `imap_settings()`
- `push_notification()`
- `save_task_settings()`
- `save_imap_settings()`
- `save_push_notification_settings()`
- `google_drive()`
- `save_google_drive_settings()`
- `authorize_imap()`
- `estimates()`
- `save_estimate_settings()`
- `test_push_notification()`
- `timesheets()`
- `save_timesheets_settings()`
- `gdpr()`
- `save_gdpr_settings()`
- `footer()`
- `_make_footer_menu_item_data($menu_name, $url, $type = "")`
- `save_footer_settings()`
- `footer_item_edit_modal_form()`
- `save_footer_menu()`
- `get_client_hidden_fields_dropdown()`
- `estimate_request_settings()`
- `save_estimate_request_settings()`
- `orders()`
- `save_order_settings()`
- `projects()`
- `save_projects_settings()`
- `slack()`
- `save_slack_settings()`
- `client_projects()`
- `save_client_project_settings()`
- `github()`
- `save_github_settings()`
- `test_slack_notification()`
- `contracts()`
- `save_contract_settings()`
- `leads()`
- `save_lead_settings()`
- `proposals()`
- `save_proposal_settings()`
- `localization()`
- `save_localization_settings()`
- `prepare_conversion_rates($conversion_rate_currencies, $conversion_rates)`

## `app\Controllers\Signin.php`

**Classes**:
- `App\Controllers\Signin extends App_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `has_recaptcha_error()`
- `is_valid_recaptcha($recaptcha_post_data)`
- `authenticate()`
- `sign_out()`
- `send_reset_password_mail()`
- `request_reset_password()`
- `new_password($key)`
- `do_reset_password()`
- `is_valid_reset_password_key($verification_code = "")`

## `app\Controllers\Signup.php`

**Classes**:
- `App\Controllers\Signup extends App_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `accept_invitation($signup_key = "")`
- `is_valid_recaptcha($recaptcha_post_data)`
- `create_account()`
- `send_verification_mail()`
- `continue_signup($key = "")`
- `is_valid_email_verification_key($verification_code = "")`
- `is_valid_invitation_key($verification_code = "")`

## `app\Controllers\Stripe_redirect.php`

**Classes**:
- `App\Controllers\Stripe_redirect extends App_Controller`

**Functions/Methods**:
- `__construct()`
- `index($payment_verification_code = "")`

## `app\Controllers\Task_priority.php`

**Classes**:
- `App\Controllers\Task_priority extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `save()`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data)`

## `app\Controllers\Task_status.php`

**Classes**:
- `App\Controllers\Task_status extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `save()`
- `update_field_sort_values($id = 0)`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data)`

## `app\Controllers\Taxes.php`

**Classes**:
- `App\Controllers\Taxes extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `save()`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data)`

## `app\Controllers\Team.php`

**Classes**:
- `App\Controllers\Team extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `modal_form()`
- `save()`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data)`
- `members_list()`

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

## `app\Controllers\Tickets.php`

**Classes**:
- `App\Controllers\Tickets extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `can_delete_tickets()`
- `index($status = "", $ticket_type_id = 0)`
- `modal_form()`
- `get_project_suggestion($client_id = 0)`
- `save()`
- `upload_file()`
- `validate_ticket_file()`
- `list_data($is_widget = 0)`
- `ticket_list_data_of_client($client_id, $is_widget = 0)`
- `_row_data($id)`
- `_make_row($data, $custom_fields)`
- `view($ticket_id = 0)`
- `delete()`
- `save_comment()`
- `save_ticket_status($ticket_id = 0, $status = "closed")`
- `download_comment_files($id)`
- `_check_permission_of_selected_ticket($ticket_id = 0)`
- `assign_to_me($ticket_id = 0)`
- `ticket_templates()`
- `can_view_ticket_template($id = 0)`
- `can_edit_ticket_template($id = 0)`
- `ticket_template_modal_form()`
- `save_ticket_template()`
- `delete_ticket_template()`
- `ticket_template_list_data($view_type = "", $ticket_type_id = 0)`
- `_row_data_for_ticket_templates($id)`
- `_make_row_for_ticket_templates($data, $view_type = "")`
- `ticket_template_view($id)`
- `insert_template_modal_form()`
- `add_client_modal_form($ticket_id = 0)`
- `link_to_client()`
- `settings_modal_form()`
- `save_settings()`
- `get_client_contact_suggestion($client_id = 0)`
- `_get_ticket_types_dropdown_list_for_filter($ticket_type_id = 0)`
- `ticket_list_data_of_project($project_id)`
- `batch_update_modal_form($ticket_ids = "")`
- `save_batch_update()`

## `app\Controllers\Ticket_types.php`

**Classes**:
- `App\Controllers\Ticket_types extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index($tab = "")`
- `modal_form()`
- `save()`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data)`

## `app\Controllers\Timeline.php`

**Classes**:
- `App\Controllers\Timeline extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `check_access_on_timeline_for_this_user()`
- `check_timeline_user_permission()`
- `can_access_this_post($post_id = 0)`
- `index()`
- `save()`
- `delete($id = 0)`
- `view_post_replies($post_id)`
- `post_reply_form($post_id)`
- `upload_file()`
- `validate_post_file()`
- `download_files($id)`
- `load_more_posts($offset = 0)`
- `post($post_id)`

## `app\Controllers\Todo.php`

**Classes**:
- `App\Controllers\Todo extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `validate_access($todo_info)`
- `index()`
- `modal_form()`
- `save()`
- `save_status()`
- `delete()`
- `list_data()`
- `_row_data($id)`
- `_make_row($data)`
- `view()`

## `app\Controllers\Updates.php`

**Classes**:
- `App\Controllers\Updates extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `_curl_get_contents($url)`
- `_get_release_contents($url, $download = false)`
- `_get_support_info()`
- `_get_updates_info()`
- `_get_version_and_salt($version_key = "")`
- `download_updates($version = "", $salt = "")`
- `do_update($version = "")`
- `systeminfo()`

## `app\Controllers\Upload_pasted_image.php`

**Classes**:
- `App\Controllers\Upload_pasted_image extends App_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `save()`

## `app\Controllers\Webhooks_listener.php`

**Classes**:
- `App\Controllers\Webhooks_listener extends App_Controller`

**Functions/Methods**:
- `bitbucket($key)`
- `_is_valid_payloads_of_bitbucket($payloads, $key)`
- `_get_final_commits_of_bitbucket($payloads)`
- `github($key)`
- `_is_valid_payloads_of_github($payloads, $key)`
- `_get_final_commits_of_github($payloads)`

