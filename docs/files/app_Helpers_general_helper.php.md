# app\Helpers\general_helper.php

- Path: `app\Helpers\general_helper.php`
- Type: PHP
- Size: 87627 bytes

## Summary (from docblocks)

use this to print link location
@param string $uri
@return print url

prepare uri

@param string $uri
@return full url

use this to print file path

@param string $uri
@return full url of the given file path

get the url of user avatar

@param string $image_name
@return url of the avatar of given image reference

link the css files 

@param array $array
@return print css links

link the javascript files 

@param array $array
@return print js links

check the array key and return the value 

@param array $array
@return extract array value safely

prepare a anchor tag for any js request

@param string $title
@param array $attributes
@return html link of anchor tag

prepare a anchor tag for modal 

@param string $url
@param string $title
@param array $attributes
@return html link of anchor tag

prepare a anchor tag for ajax request

@param string $url
@param string $title
@param array $attributes
@return html link of anchor tag

get the selected menu 

@param array $sidebar_menu
@return the array containing an active class key

get the selected submenu

@param string $submenu
@param boolean $is_controller
@return string "active" indecating the active sub page

get the defined config value by a key
@param string $key
@return config value

check if a string starts with a specified sting

@param string $string
@param string $needle
@return true/false

check if a string ends with a specified sting

@param string $string
@param string $needle
@return true/false

create a encoded id for sequrity pupose 

@param string $id
@param string $salt
@return endoded value

decode the id which made by encode_id()

@param string $id
@param string $salt
@return decoded value

decode html data which submited using a encode method of encodeAjaxPostData() function

@param string $html
@return htmle

check if fields has any value or not. and generate a error message for null value

@param array $fields
@return throw error for bad value

convert simple link text to clickable link
@param string $text
@return html link

convert mentions to link or link text
@param string $text containing text with mentioned brace
@param string $return_type indicates what to return (link or text)
@return text with link or link text

get all the use_ids from comment mentions
@param string $text
@return array of user_ids

send mail

@param string $to
@param string $subject
@param string $message
@param array $optoins
@return true/false

get users ip address

@return ip

check if it's localhost

@return boolean

convert string to url

@param string $address
@return url

validate post data using the codeigniter's form validation method

@param string $address
@return throw error if foind any inconsistancy

team members profile anchor. only clickable to team members
client's will see a none clickable link

@param string $id
@param string $name
@param array $attributes
@return html link

team members profile anchor. only clickable to team members
client's will see a none clickable link

@param string $id
@param string $name
@param array $attributes
@return html link

return a colorful label according to invoice status

@param Object $invoice_info
@return html

get all data to make an invoice

@param Int $invoice_id
@return array

get all data to make an invoice

@param Invoice making data $invoice_data
@return array

get all data to make an estimate

@param emtimate making data $estimate_data
@return array

get all data to make an order

@param emtimate making data $order_data
@return array

get invoice number
@param Int $invoice_id
@return string

get estimate number
@param Int $estimate_id
@return string

get proposal number
@param Int $proposal_id
@return string

get order number
@param Int $order_id
@return string

get ticket number
@param Int $ticket_id
@return string

get all data to make an estimate

@param Int $estimate_id
@return array

get all data to make an contract

@param Int $contract_id
@return array

get all data to make an proposal

@param Int $proposal_id
@return array

get all data to make an order

@param Int $order_id
@return array

get team members and teams select2 dropdown data list

@return array

submit data for notification

@return array

save custom fields for any context

@param Int $estimate_id
@return array

update custom fields changes to activity logs table

use this to clean xss and html elements
the best practice is to use this before rendering 
but you can use this before saving for suitable cases
@param string or array $data
@return clean $data

redirect to a location within the app

@param string $url
@return void

show 404 error page

@return void

get all data to make an contract

@param contract making data $contract_data
@return array

convert copied comment code to link 
@param string $text containing text with copied comment id brace
@param string $return_type indicates what to return (link or text)
@return text with link or link text

get all data to make an proposal

@param proposal making data $proposal_data
@return array

get contract number
@param Int $contract_id
@return string

return a colorful label according to estimate status

@param Object $estimate_info
@return html

@since  1.0.0
Check whether an setting exists
@param  string $name setting name
@return boolean

## References

**Database Tables (inferred)**
- `comment`
- `settings`
- `the`
- `setting`
- `default`

## Symbols

# Symbols

**Files documented**: 1

## `app\Helpers\general_helper.php`

**Classes**:
- `key`

**Functions/Methods**:
- `echo_uri($uri = "")`
- `get_uri($uri = "")`
- `get_file_uri($uri = "")`
- `get_avatar($image = "")`
- `load_css(array $array)`
- `load_js(array $array)`
- `get_array_value($array, $key)`
- `js_anchor($title = '', $attributes = '')`
- `modal_anchor($url, $title = '', $attributes = '')`
- `ajax_anchor($url, $title = '', $attributes = '')`
- `get_actual_controller_name($router)`
- `get_active_menu($sidebar_menu = array()`
- `active_submenu($submenu = "", $is_controller = false)`
- `get_setting($key = "")`
- `starts_with($string, $needle)`
- `ends_with($string, $needle)`
- `encode_id($id, $salt)`
- `get_encrypter()`
- `decode_id($id, $salt)`
- `decode_ajax_post_data($html)`
- `check_required_hidden_fields($fields = array()`
- `link_it($text)`
- `convert_mentions($text, $convert_links = true)`
- `get_members_from_mention($text)`
- `send_app_mail($to, $subject, $message, $optoins = array()`
- `get_real_ip()`
- `is_localhost()`
- `to_url($address = "")`
- `validate_numeric_value($value = 0)`
- `get_team_member_profile_link($id = 0, $name = "", $attributes = array()`
- `get_client_contact_profile_link($id = 0, $name = "", $attributes = array()`
- `get_invoice_status_label($invoice_info, $return_html = true)`
- `get_invoice_making_data($invoice_id)`
- `prepare_invoice_pdf($invoice_data, $mode = "download")`
- `prepare_estimate_pdf($estimate_data, $mode = "download")`
- `prepare_order_pdf($order_data, $mode = "download")`
- `get_invoice_id($invoice_id)`
- `get_estimate_id($estimate_id)`
- `get_proposal_id($proposal_id)`
- `get_order_id($order_id)`
- `get_ticket_id($ticket_id)`
- `get_estimate_making_data($estimate_id)`
- `get_contract_making_data($contract_id)`
- `get_proposal_making_data($proposal_id)`
- `get_order_making_data($order_id = 0)`
- `get_team_members_and_teams_select2_data_list($exclude_inactive_users = false)`
- `log_notification($event, $options = array()`
- `save_custom_fields($related_to_type, $related_to_id, $is_admin = 0, $user_type = "", $activity_log_id = 0, $save_to_related_type = "", $user_id = 0)`
- `update_custom_fields_changes($related_to_type, $related_to_id, $changes, $activity_log_id = 0)`
- `clean_data($data)`
- `get_logo_url()`
- `get_file_from_setting($setting_name = "", $only_file_path_with_slash = false)`
- `get_favicon_url()`
- `get_custom_theme_color_list()`
- `make_random_string($length = 10)`
- `get_custom_variables_data($related_to_type = "", $related_to_id = 0, $is_admin = 0)`
- `make_labels_view_data($labels_list = "", $clickable = false, $large = false)`
- `get_update_task_info_anchor_data($model_info, $type = "", $can_edit_tasks = false, $extra_data = "", $extra_condition = false)`
- `get_lead_contact_profile_link($id = 0, $name = "", $attributes = array()`
- `decode_password($data = "", $salt = "")`
- `validate_invoice_verification_code($code = "", $given_invoice_data = array()`
- `can_edit_this_task_status($assigned_to = 0)`
- `send_message_via_pusher($to_user_id, $message_data, $message_id, $message_type = "message")`
- `can_access_messages_module()`
- `add_auto_reply_to_ticket($ticket_id = 0)`
- `app_redirect($url, $global_link = false)`
- `app_lang($lang = "")`
- `show_404()`
- `prepare_contract_view($contract_data)`
- `remove_custom_field_titles_from_variables($content)`
- `get_available_contract_variables()`
- `get_db_prefix()`
- `convert_comment_link($text = "", $convert_links = true)`
- `if($convert_links)`
- `prepare_proposal_view($proposal_data)`
- `get_available_proposal_variables()`
- `prepare_allowed_members_array($permissions, $user_id)`
- `get_contract_id($contract_id)`
- `get_default_company_id()`
- `can_access_reminders_module()`
- `show_clients_of_this_client_contact($login_user)`
- `append_server_side_filtering_commmon_params($options = array()`
- `get_reminder_context_info($reminder_info)`
- `get_estimate_status_label($estimate_info, $return_html = true)`
- `setting_exists($name)`

