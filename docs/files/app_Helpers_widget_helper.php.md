# app\Helpers\widget_helper.php

- Path: `app\Helpers\widget_helper.php`
- Type: PHP
- Size: 56776 bytes

## Summary (from docblocks)

get clock in/ clock out widget
@return html

activity logs widget for projects
@param array $params
@return html

get timeline widget
@param array $params
@return html

get announcement notice
@return html

get tasks widget of loged in user

@return html

get tasks status widteg of loged in user

@return html

get todays event widget

@return html

get new posts widget

@return html

get event list widget

@return html

get event icons based on event sharing 

@return html

get open timers widget

@return html

get income expense widget

@return html

get ticket status widget

@return html

get invoice statistics widget

@return html

get projects statistics widget

@return html

get timecard statistics

@return html

get count of clocked in /out users widget

@return html

get project count status widteg
@param integer $user_id

@return html

count total time widget
@param integer $user_id

@return html

count total time widget
@param integer $user_id
@param string $widget_type

@return html

get social links widget
@param object $weblinks

@return html

count unread messages
@return number

count new tickets
@param string $ticket_types
@return number

get all tasks kanban widget

@return html

get todo lists widget

@return html

get invalid access widget

@return html

get open projects widget
@param integer $user_id

@return html

get completed projects widget
@param integer $user_id

@return html

get count of clocked in users widget

@return html

get count of clocked out users widget

@return html

get user's open project list widget

@return html

get user's starred project list widget
@param integer $user_id

@return html

get sticky note widget for logged in user
@param string $custom_class

@return html

get ticket status small widget for current logged in user
@param integer $user_id
@param string $type ($type should be new/open/closed)

@return html

get all team members widget

@return html

get all clocked in team members widget
@param array $data containing access permissions

@return html

get all clocked out team members widget
@param array $data containing access permissions

@return html

get active members widget

@return html

get total invoices/payments/due value widget
@param string $type

@return html

get my tasks list widget

@return html

get pending leave approval widget

@return html

get draft invoices

@return html

get total clients

@return html

get total client contacts

@return html

get active members on projects widget

@return html

get open tickets list widget

@return html

get total leads
@param boolean $return_as_data
@return html

get contacts count widget for client
@param string $widget_type
@param boolean $return_as_data
@return html

get invoices count widget for client
@param string $widget_type
@param boolean $return_as_data
@return html

get projects count widget for client
@param boolean $return_as_data
@return html

get estimates count widget for client
@param boolean $return_as_data
@return html

get clients has open tickets count

@return html

get clients has new orders count

@return html

get proposals count widget for client
@param boolean $return_as_data
@return html

get projects overview widget
@param integer $user_id

@return html

get estimate sent statistics widget

@return html

get last announcement widget
@return html

get team members overview

@return html

get all task overview widget of loged in user

@return html

get total invoices overview widget
@param string $type

@return html

get next reminder widget

@return html

## References

**Views Rendered**
- `company/company_widget`

**Database Tables (inferred)**
- `now`

## Symbols

# Symbols

**Files documented**: 1

## `app\Helpers\widget_helper.php`

**Functions/Methods**:
- `clock_widget()`
- `activity_logs_widget($params = array()`
- `timeline_widget($params = array()`
- `announcements_alert_widget()`
- `my_open_tasks_widget()`
- `my_task_stataus_widget($custom_class = "")`
- `events_today_widget()`
- `new_posts_widget()`
- `events_widget()`
- `get_event_icon($share_with = "")`
- `has_my_open_timers()`
- `income_vs_expenses_widget($custom_class = "")`
- `ticket_status_widget($data = array()`
- `invoice_statistics_widget($options = array()`
- `project_timesheet_statistics_widget($type = "")`
- `timecard_statistics_widget()`
- `count_clock_status_widget()`
- `count_project_status_widget($user_id = 0)`
- `count_total_time_widget($user_id = 0)`
- `count_total_time_widget_small($user_id = 0, $widget_type = "")`
- `social_links_widget($weblinks)`
- `count_unread_message()`
- `count_new_tickets($ticket_types = "", $show_assigned_tickets_only_user_id = 0)`
- `all_tasks_kanban_widget()`
- `todo_list_widget()`
- `invalid_access_widget()`
- `open_projects_widget($user_id = 0)`
- `completed_projects_widget($user_id = 0)`
- `count_clock_in_widget()`
- `count_clock_out_widget()`
- `my_open_projects_widget($client_id = 0)`
- `my_starred_projects_widget($user_id = 0)`
- `sticky_note_widget($custom_class = "")`
- `ticket_status_widget_small($data = array()`
- `all_team_members_widget()`
- `clocked_in_team_members_widget($data = array()`
- `clocked_out_team_members_widget($data = array()`
- `active_members_and_clients_widget($user_type = "", $show_own_clients_only_user_id = "", $allowed_client_groups = "")`
- `get_invoices_value_widget($type = "")`
- `my_tasks_list_widget()`
- `pending_leave_approval_widget($data = array()`
- `draft_invoices_widget()`
- `total_clients_widget($show_own_clients_only_user_id = "", $allowed_client_groups = "")`
- `total_contacts_widget($show_own_clients_only_user_id = "", $allowed_client_groups = "")`
- `active_members_on_projects_widget()`
- `open_tickets_list_widget()`
- `total_leads_widget($returen_as_data = false, $show_own_leads_only_user_id = "")`
- `client_contacts_logged_in_widget($widget_type = "", $show_own_clients_only_user_id = "", $allowed_client_groups = "", $return_as_data = false)`
- `client_invoices_widget($widget_type = "", $show_own_clients_only_user_id = "", $allowed_client_groups = "", $return_as_data = false)`
- `client_projects_widget($show_own_clients_only_user_id = "", $allowed_client_groups = "", $return_as_data = false)`
- `client_estimates_widget($show_own_clients_only_user_id = "", $allowed_client_groups = "", $return_as_data = false)`
- `clients_has_open_tickets_widget($show_own_clients_only_user_id = "", $allowed_client_groups = "")`
- `clients_has_new_orders_widget($show_own_clients_only_user_id = "", $allowed_client_groups = "")`
- `client_proposals_widget($show_own_clients_only_user_id = "", $allowed_client_groups = "", $return_as_data = false)`
- `company_widget($company_id = 0)`
- `projects_overview_widget()`
- `reminders_widget($return_reminders_only = false)`
- `estimate_sent_statistics_widget($options = array()`
- `last_announcement_widget()`
- `team_members_overview_widget($data = array()`
- `all_tasks_overview_widget()`
- `invoice_overview_widget($options = array()`
- `next_reminder_widget()`

