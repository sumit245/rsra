# Models

**Files documented**: 80

## `app\Models\Activity_logs_model.php`

**Classes**:
- `App\Models\Activity_logs_model extends Model`

**Functions/Methods**:
- `__construct()`
- `ci_save($data, $activity_log_created_by_app = false)`
- `delete_where($where = array()`
- `get_details($options = array()`
- `get_one($id = 0)`
- `get_one_where($where = array()`
- `update_where($data = array()`
- `_get_clean_value($options, $key)`

## `app\Models\Announcements_model.php`

**Classes**:
- `App\Models\Announcements_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_unread_announcements($user_id, $user_type, $client_group_ids = "")`
- `prepare_share_with_query($announcements_table, $user_type, $client_group_ids)`
- `get_details($options = array()`
- `mark_as_read($id, $user_id)`
- `get_last_announcement($options = array()`

## `app\Models\Article_helpful_status_model.php`

**Classes**:
- `App\Models\Article_helpful_status_model extends Crud_model`

**Functions/Methods**:
- `__construct()`

## `app\Models\Attendance_model.php`

**Classes**:
- `App\Models\Attendance_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `current_clock_in_record($user_id)`
- `log_time($user_id, $note = "")`
- `get_details($options = array()`
- `get_summary_details($options = array()`
- `count_clock_status()`
- `get_timecard_statistics($options = array()`
- `get_clocked_out_members($options = array()`
- `get_clock_in_out_details_of_all_users($options = array()`

## `app\Models\Checklist_groups_model.php`

**Classes**:
- `App\Models\Checklist_groups_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_group_suggestion($keyword = "")`
- `get_templates($options = array()`

## `app\Models\Checklist_items_model.php`

**Classes**:
- `App\Models\Checklist_items_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_all_checklist_of_project($project_id)`

## `app\Models\Checklist_template_model.php`

**Classes**:
- `App\Models\Checklist_template_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_template_suggestion($keyword = "")`
- `get_checklists($checklist_ids = "")`

## `app\Models\Clients_model.php`

**Classes**:
- `App\Models\Clients_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `make_quick_filter_query($filter, $clients_table, $projects_table, $invoices_table, $taxes_table, $invoice_payments_table, $invoice_items_table, $estimates_table, $estimate_requests_table, $tickets_table, $orders_table, $proposals_table)`
- `get_primary_contact($client_id = 0, $info = false)`
- `add_remove_star($client_id, $user_id, $type = "add")`
- `get_starred_clients($user_id, $client_groups = "")`
- `delete_client_and_sub_items($client_id)`
- `is_duplicate_company_name($company_name, $id = 0)`
- `get_leads_kanban_details($options = array()`
- `get_search_suggestion($search = "", $options = array()`
- `count_total_clients($options = array()`
- `get_conversion_rate_with_currency_symbol()`
- `count_total_leads($show_own_leads_only_user_id = "")`

## `app\Models\Client_groups_model.php`

**Classes**:
- `App\Models\Client_groups_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Company_model.php`

**Classes**:
- `App\Models\Company_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `remove_other_default_company($except_id)`

## `app\Models\Contracts_model.php`

**Classes**:
- `App\Models\Contracts_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_contract_total_summary($contract_id = 0)`
- `get_contract_last_id()`
- `save_initial_number_of_contract($value)`

## `app\Models\Contract_items_model.php`

**Classes**:
- `App\Models\Contract_items_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Contract_templates_model.php`

**Classes**:
- `App\Models\Contract_templates_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Crud_model.php`

**Classes**:
- `App\Models\Crud_model extends Model`

**Functions/Methods**:
- `__construct($table = null, $db = null)`
- `use_table($table)`
- `disable_log_activity()`
- `init_activity_log($log_type = "", $log_type_title_key = "", $log_for = "", $log_for_key = 0, $log_for2 = "", $log_for_key2 = 0)`
- `get_one($id = 0)`
- `get_one_where($where = [])`
- `get_all($include_deleted = false)`
- `escape_array($values = [])`
- `get_all_where($where = [], $limit = 1000000, $offset = 0, $sort_by_field = null)`
- `ci_save(&$data = [], $id = 0)`
- `update_where($data = [], $where = [])`
- `delete($id = 0, $undo = false)`
- `get_dropdown_list($option_fields = [], $key = "id", $where = [])`
- `prepare_custom_field_query_string($related_to, $custom_fields, $related_to_table, $custom_field_filter = [])`
- `_get_clients_of_currency_query($currency, $invoices_table, $clients_table)`
- `_get_invoice_value_calculation_query($invoices_table)`
- `get_labels_data_query()`
- `delete_permanently($id = 0)`
- `prepare_allowed_client_groups_query($clients_table, $client_groups = "")`
- `_get_clean_value($options, $key)`
- `get_custom_field_search_query($table, $related_to_type, $search_by)`

## `app\Models\Custom_fields_model.php`

**Classes**:
- `App\Models\Custom_fields_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_max_sort_value($related_to = "")`
- `get_combined_details($related_to, $related_to_id = 0, $is_admin = 0, $user_type = "")`
- `get_custom_field_headers_for_table($related_to, $is_admin = 0, $user_type = "")`
- `get_available_fields_for_table($related_to, $is_admin = 0, $user_type = "")`
- `get_custom_field_filters($related_to, $is_admin = 0, $user_type = "")`
- `prepare_custom_field_filter_dropdown($title = "", $options = "")`
- `get_available_filters($related_to, $is_admin = 0, $user_type = "")`
- `get_email_template_variables_array($related_to, $related_to_id = 0, $is_admin = 0, $user_type = "")`

## `app\Models\Custom_field_values_model.php`

**Classes**:
- `App\Models\Custom_field_values_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `upsert_custom_field($data, $save_to_related_type = "")`
- `upsert($data, $save_to_related_type = "")`

## `app\Models\Custom_widgets_model.php`

**Classes**:
- `App\Models\Custom_widgets_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Dashboards_model.php`

**Classes**:
- `App\Models\Dashboards_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Email_templates_model.php`

**Classes**:
- `App\Models\Email_templates_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_final_template($template_name = "", $return_all = false)`

## `app\Models\Estimates_model.php`

**Classes**:
- `App\Models\Estimates_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_estimate_total_summary($estimate_id = 0)`
- `get_estimate_last_id()`
- `save_initial_number_of_estimate($value)`
- `estimate_sent_statistics($options = array()`
- `_get_estimate_value_calculation_query($estimates_table)`
- `get_used_currencies_of_client()`

## `app\Models\Estimate_comments_model.php`

**Classes**:
- `App\Models\Estimate_comments_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Estimate_forms_model.php`

**Classes**:
- `App\Models\Estimate_forms_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Estimate_items_model.php`

**Classes**:
- `App\Models\Estimate_items_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Estimate_requests_model.php`

**Classes**:
- `App\Models\Estimate_requests_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Events_model.php`

**Classes**:
- `App\Models\Events_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `count_events_today($options = array()`
- `get_label_suggestions()`
- `get_no_of_cycles($repeat_type, $no_of_cycles = 0)`
- `sort_by_start_date($a, $b)`
- `get_upcomming_events($options = array()`
- `get_response_by_users($user_ids_array = array()`
- `save_event_status($id, $user_id, $status)`
- `get_share_with_users_of_event($event_info = "")`
- `get_integrated_users_with_google_calendar()`
- `count_missed_reminders($user_id)`

## `app\Models\Expenses_model.php`

**Classes**:
- `App\Models\Expenses_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_income_expenses_info($options = array()`
- `get_yearly_expenses_chart($year, $project_id = 0)`
- `get_renewable_expenses($date)`
- `get_summary_details($options = array()`

## `app\Models\Expense_categories_model.php`

**Classes**:
- `App\Models\Expense_categories_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\File_category_model.php`

**Classes**:
- `App\Models\File_category_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\General_files_model.php`

**Classes**:
- `App\Models\General_files_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Help_articles_model.php`

**Classes**:
- `App\Models\Help_articles_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_articles_of_a_category($category_id)`
- `increas_page_view($id)`
- `get_suggestions($type, $search)`

## `app\Models\Help_categories_model.php`

**Classes**:
- `App\Models\Help_categories_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Invoices_model.php`

**Classes**:
- `App\Models\Invoices_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_invoice_total_summary($invoice_id = 0)`
- `invoice_statistics($options = array()`
- `get_used_currencies_of_client()`
- `get_invoices_total_and_paymnts($options = array()`
- `update_invoice_status($invoice_id = 0, $status = "not_paid")`
- `get_renewable_invoices($date)`
- `get_invoices_dropdown_list()`
- `get_label_suggestions()`
- `get_last_invoice_id()`
- `save_initial_number_of_invoice($value)`
- `count_invoices($options = array()`

## `app\Models\Invoice_items_model.php`

**Classes**:
- `App\Models\Invoice_items_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_item_suggestion($keyword = "", $user_type = "")`
- `get_item_info_suggestion($options = array()`

## `app\Models\Invoice_payments_model.php`

**Classes**:
- `App\Models\Invoice_payments_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_yearly_payments_chart($year, $currency = "", $project_id = 0)`
- `get_used_projects($type)`
- `get_yearly_summary_details($options = array()`
- `get_clients_summary_details($options = array()`

## `app\Models\Items_model.php`

**Classes**:
- `App\Models\Items_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Item_categories_model.php`

**Classes**:
- `App\Models\Item_categories_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Labels_model.php`

**Classes**:
- `App\Models\Labels_model extends Crud_model`
- `App\Models\object`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `label_group_list($label_ids = "")`
- `is_label_exists($id = 0, $type = "")`

## `app\Models\Lead_source_model.php`

**Classes**:
- `App\Models\Lead_source_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_max_sort_value()`

## `app\Models\Lead_status_model.php`

**Classes**:
- `App\Models\Lead_status_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_max_sort_value()`
- `get_first_status()`

## `app\Models\Leave_applications_model.php`

**Classes**:
- `App\Models\Leave_applications_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details_info($id = 0)`
- `get_list($options = array()`
- `get_summary($options = array()`

## `app\Models\Leave_types_model.php`

**Classes**:
- `App\Models\Leave_types_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Likes_model.php`

**Classes**:
- `App\Models\Likes_model extends Crud_model`

**Functions/Methods**:
- `__construct()`

## `app\Models\Messages_model.php`

**Classes**:
- `App\Models\Messages_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_list($options = array()`
- `get_chat_list($options = array()`
- `count_notifications($user_id, $last_message_checke_at = "0", $active_message_id = 0, $user_ids = "")`
- `set_message_status_as_read($message_id, $user_id = 0)`
- `count_unread_message($user_id = 0, $user_ids = "")`
- `delete_messages_for_user($message_id = 0, $user_id = 0)`
- `clear_deleted_status($message_id = 0)`
- `get_users_for_messaging($options = array()`

## `app\Models\Milestones_model.php`

**Classes**:
- `App\Models\Milestones_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `schema()`
- `get_details($options = array()`

## `app\Models\Notes_model.php`

**Classes**:
- `App\Models\Notes_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_label_suggestions($user_id)`

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

## `app\Models\Notification_settings_model.php`

**Classes**:
- `App\Models\Notification_settings_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `notify_to_terms()`
- `get_details($options = array()`
- `get_notify_to_users_of_event($event = "")`

## `app\Models\Orders_model.php`

**Classes**:
- `App\Models\Orders_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_processing_order_total_summary($user_id)`
- `get_order_total_summary($order_id = 0)`
- `get_order_last_id()`
- `save_initial_number_of_order($value)`

## `app\Models\Order_items_model.php`

**Classes**:
- `App\Models\Order_items_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Order_status_model.php`

**Classes**:
- `App\Models\Order_status_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_max_sort_value()`
- `get_first_status()`

## `app\Models\Pages_model.php`

**Classes**:
- `App\Models\Pages_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `is_slug_exists($slug, $id = 0)`

## `app\Models\Payment_methods_model.php`

**Classes**:
- `App\Models\Payment_methods_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_settings($type = "")`
- `get_one_with_settings($id = 0)`
- `get_oneline_payment_method($type)`
- `_merge_online_settings_with_default($info)`
- `get_details($options = array()`
- `delete($id = 0, $undo = false)`
- `get_available_online_payment_methods()`

## `app\Models\Paypal_ipn_model.php`

**Classes**:
- `App\Models\Paypal_ipn_model extends Crud_model`

**Functions/Methods**:
- `__construct()`

## `app\Models\Pin_comments_model.php`

**Classes**:
- `App\Models\Pin_comments_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Posts_model.php`

**Classes**:
- `App\Models\Posts_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `count_new_posts($allowed_member_ids = "")`

## `app\Models\Projects_model.php`

**Classes**:
- `App\Models\Projects_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_label_suggestions()`
- `count_project_status($options = array()`
- `get_gantt_data($options = array()`
- `add_remove_star($project_id, $user_id, $type = "add")`
- `get_starred_projects($user_id)`
- `delete_project_and_sub_items($project_id)`
- `get_search_suggestion($search = "", $options = array()`
- `count_task_points($options = array()`

## `app\Models\Project_comments_model.php`

**Classes**:
- `App\Models\Project_comments_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `schema()`
- `get_details($options = array()`
- `save_comment($data)`

## `app\Models\Project_files_model.php`

**Classes**:
- `App\Models\Project_files_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `schema()`
- `get_details($options = array()`
- `get_files($ids = array()`

## `app\Models\Project_members_model.php`

**Classes**:
- `App\Models\Project_members_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `save_member($data = array()`
- `delete($id = 0, $undo = false)`
- `get_details($options = array()`
- `get_project_members_dropdown_list($project_id = 0, $user_ids = array()`
- `is_user_a_project_member($project_id = 0, $user_id = 0)`
- `get_rest_team_members_for_a_project($project_id = 0)`
- `get_client_contacts_of_the_project_client($project_id = 0)`

## `app\Models\Project_settings_model.php`

**Classes**:
- `App\Models\Project_settings_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_setting($project_id, $setting_name)`
- `save_setting($project_id, $setting_name, $setting_value)`
- `get_details($options = array()`

## `app\Models\Proposals_model.php`

**Classes**:
- `App\Models\Proposals_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_proposal_total_summary($proposal_id = 0)`
- `get_proposal_last_id()`
- `save_initial_number_of_proposal($value)`

## `app\Models\Proposal_items_model.php`

**Classes**:
- `App\Models\Proposal_items_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Proposal_templates_model.php`

**Classes**:
- `App\Models\Proposal_templates_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Roles_model.php`

**Classes**:
- `App\Models\Roles_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Settings_model.php`

**Classes**:
- `App\Models\Settings_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_setting($setting_name)`
- `save_setting($setting_name, $setting_value, $type = "app")`
- `get_all_required_settings($user_id = 0)`

## `app\Models\Social_links_model.php`

**Classes**:
- `App\Models\Social_links_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Stripe_ipn_model.php`

**Classes**:
- `App\Models\Stripe_ipn_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_one_payment_where($payment_verification_code)`

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

## `app\Models\Task_priority_model.php`

**Classes**:
- `App\Models\Task_priority_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Task_status_model.php`

**Classes**:
- `App\Models\Task_status_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_max_sort_value()`

## `app\Models\Taxes_model.php`

**Classes**:
- `App\Models\Taxes_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = [])`

## `app\Models\Team_model.php`

**Classes**:
- `App\Models\Team_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_members($team_ids = array()`

## `app\Models\Tickets_model.php`

**Classes**:
- `App\Models\Tickets_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `count_new_tickets($ticket_types = "", $show_assigned_tickets_only_user_id = 0)`
- `get_label_suggestions()`
- `delete_ticket_and_sub_items($ticket_id)`
- `count_tickets($options = array()`
- `get_ticket_statistics($options = array()`

## `app\Models\Ticket_comments_model.php`

**Classes**:
- `App\Models\Ticket_comments_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Ticket_templates_model.php`

**Classes**:
- `App\Models\Ticket_templates_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Ticket_types_model.php`

**Classes**:
- `App\Models\Ticket_types_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

## `app\Models\Timesheets_model.php`

**Classes**:
- `App\Models\Timesheets_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_summary_details($options = array()`
- `get_timer_info($project_id, $user_id)`
- `get_task_timer_info($task_id, $user_id)`
- `process_timer($data)`
- `get_open_timers($user_id = 0)`
- `get_timesheet_statistics($options = array()`
- `active_members_on_projects()`
- `user_has_any_timer_except_this_project($project_id, $user_id)`
- `user_has_any_timer($user_id)`
- `count_total_time($options = array()`
- `get_timesheet_own_project_memeber_only_query($timesheet_table)`

## `app\Models\Todo_model.php`

**Classes**:
- `App\Models\Todo_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`
- `get_label_suggestions($user_id)`
- `get_search_suggestion($search = "", $created_by = 0)`

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

## `app\Models\Verification_model.php`

**Classes**:
- `App\Models\Verification_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_details($options = array()`

