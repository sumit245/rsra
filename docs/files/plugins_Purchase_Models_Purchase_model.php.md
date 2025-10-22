# plugins\Purchase\Models\Purchase_model.php

- Path: `plugins\Purchase\Models\Purchase_model.php`
- Type: PHP
- Size: 271129 bytes

## Summary (from docblocks)

This class describes a purchase model.

Gets the vendor table.
@param      array   $options  The options
@return       The vendor table.

get unit type
@param  boolean $id
@return array or object

Gets the unit table.
@param      array  $options  The options

Get purchase request items formatted for purchase order

Adds an unit.

Updates an unit.

{ delete unit }
@param        $id     The identifier

Gets the item categories table.

get commodity group type
@param  boolean $id
@return array or object

Adds an commodity group.

Adds an commodity group.

{ delete commodity group }
@param        $id     The identifier

Gets the sub group table.

get unit type
@param  boolean $id
@return array or object

Adds an sub group.

Update an sub group.

{ delete sub group }
@param        $id     The identifier

{ update po setting }

Gets the vendor category table.
@param      array  $option  The option

get unit type
@param  boolean $id
@return array or object

Adds a vendor category.
@return     bool

Update an sub group.

{ delete sub group }
@param        $id     The identifier

{ update purchase setting }
@param        $data   The data

get approval setting
@param  boolean $id
@return array or object

Creates an approval setting row template.
@param      array   $staff_data  The staff data
@param      string  $name        The name
@param      string  $approver    The approver
@param      string  $staff       The staff
@param      string  $action      The action
@param      string  $item_key    The item key
@return     string

add approval setting
@param  array $data
@return boolean

edit approval setting
@param  integer $id
@param   array $data
@return    boolean

delete approval setting
@param  integer $id
@return boolean

get unit add item
@return array

get commodity group add commodity
@return array

Function that will parse table data from the tables folder for amin area
@param  string $table  table filename
@param  array  $params additional params
@return void

generate commodity barcode
@return     string

get commodity
@param  boolean $id
@return array or object

add commodity one item
@param array $data
@return integer

create sku code
@param  int commodity_group
@param  int sub_group
@return string

update commodity one item
@param  array $data
@param  integer $id
@return boolean

delete commodity
@param  integer $id
@return boolean

{ clone_item }

get warehourse attachments
@param  integer $commodity_id
@return array

add commodity one item
@param array $data
@return integer

commodity udpate profit rate
@param  [type] $id
@param  [type] $percent
@param  [type] $type
@return [type]

caculator purchase price
@return json

Adds a vendor.
@param      <type>   $data       The data
@param      integer  $client_id  The client identifier
@return     integer  ( id vendor )

Used in Import, Lead Convert, Register

Used in Import, Lead Convert, Register

{ check zero columns }
@param      <type>  $data   The data
@return     array

Gets the vendor.
@param      string        $id     The identifier
@param      array|string  $where  The where
@return     <type>        The vendor or list vendors.

{ update vendor }
@param      <type>   $data            The data
@param      <type>   $id              The identifier
@param      boolean  $client_request  The client request
@return     boolean

Gets the vendors.
@return       The vendors.

wh get grouped
@param  string  $can_be
@param  boolean $search_all
@return [type]

Gets the item by group.
@param        $group  The group
@return      The item by group.

get commodity
@param  boolean $id
@return array or object

Adds vendor items.
@param      $data   The data
@return     boolean

{ delete vendor items }
@param      <type>   $id     The identifier
@return     boolean

{ delete vendor }
@param        $id     The identifier
@return     bool

caculator purchase price model
@return float

Creates a purchase request row template.
@param      array   $unit_data  The unit data
@param      string  $name       The name

Gets the tax name.
@param        $tax    The tax
@return     string  The tax name.

{ tax rate by id }
@param        $tax_id  The tax identifier

get taxes dropdown template
@param  [type]  $name
@param  [type]  $taxname
@param  string  $type
@param  string  $item_key
@param  boolean $is_edit
@param  boolean $manual
@return [type]

row item to variation
@param  [type] $item_value
@return [type]

Gets the pur request detail.
@param      <int>  $pur_request  The pur request
@return     <array>  The pur request detail.

Gets the taxes.
@return     <array>  The taxes.

Gets the units.
@return     <array>  The list units.

wh uniqueByKey
@param  [type] $array
@param  [type] $key
@return [type]

Gets the item v 2.
@param      string  $id     The identifier
@return     <type>  The item v 2.

wh get tax rate
@param  [type] $taxname
@return [type]

Adds a pur request.
@param      <array>   $data   The data
@return     boolean

Gets the approve setting.
@param      <type>   $type    The type
@param      string   $status  The status
@return     boolean  The approve setting.

Gets the purchase request.
@param      string  $id     The identifier
@return     <row or array>  The purchase request.

Gets the html tax pur request.

{ update pur request }
@param      <array>   $data   The data
@param      <int>   $id     The identifier
@return     boolean

{ delete pur request }

Gets the staff sign.
@param      <type>  $rel_id    The relative identifier
@param      <type>  $rel_type  The relative type
@return     array   The staff sign.

{ check approval details }
@param      <type>          $rel_id    The relative identifier
@param      <type>          $rel_type  The relative type
@return     boolean|string

Gets the list approval details.
@param      <type>  $rel_id    The relative identifier
@param      <type>  $rel_type  The relative type
@return     <array>  The list approval details.

Gets the items.
@return     <array>  The items.

Gets the pur request pdf html.
@param      <type>  $pur_request_id  The pur request identifier
@return     string  The pur request pdf html.

Gets the pur request pdf html.
@param      <type>  $pur_request_id  The pur request identifier
@return     string  The pur request pdf html.

Gets the pur request pdf html.
@param      <type>  $pur_request_id  The pur request identifier
@return     string  The pur request pdf html.

Gets the items by identifier.
@param      <type>  $id     The identifier
@return     <row>  The items by identifier.

Gets the units by identifier.
@param      <type>  $id     The identifier
@return     <row>  The units by identifier.

Sends a mail.
@param      <type>  $data   The data

pur create notification
@param  [type]  $event
@param  [type]  $user_id
@param  array   $options
@param  integer $to_user_id
@return [type]

send request approve
@param  array $data
@return boolean

Adds a comment to purchase request

delete approval details
@param  integer $rel_id
@param  string $rel_type
@return  boolean

get staff id by approve value
@param  array $data
@param  integer $approve_value
@return boolean

{ update approve request }
@param      <type>   $rel_id    The relative identifier
@param      <type>   $rel_type  The relative type
@param      <type>   $status    The status
@return     boolean

{ update item pur request }
@param      $id     The identifier

update approval details
@param  integer $id
@param  array $data
@return boolean

Adds an attachment to database.
@param        $rel_id      The relative identifier
@param        $rel_type    The relative type
@param        $attachment  The attachment
@param      bool    $external    The external
@return     <type>

Gets the purchase order attachments.
@param      <type>  $id     The purchase order
@return     <type>  The purchase order attachments.

Gets the file.
@param      <type>   $id      The file id
@param      boolean  $rel_id  The relative identifier
@return     boolean  The file.

Gets the part attachments.
@param      <type>  $surope  The surope
@param      string  $id      The identifier
@return     <type>  The part attachments.

{ delete purorder attachment }
@param      <type>   $id     The identifier
@return     boolean

Sends to vendors.

Gets the pur request by status.
@param      <type>  $status  The status
@return     <array>  The pur request by status.

Creates a quotation row template.
@param      string      $name            The name
@param      string      $item_name       The item name
@param      int|string  $quantity        The quantity
@param      string      $unit_name       The unit name
@param      int|string  $unit_price      The unit price
@param      string      $taxname         The taxname
@param      string      $item_code       The item code
@param      string      $unit_id         The unit identifier
@param      string      $tax_rate        The tax rate
@param      string      $total_money     The total money
@param      string      $discount        The discount
@param      string      $discount_money  The discount money
@param      string      $total           The total
@param      string      $into_money      Into money
@param      string      $tax_id          The tax identifier
@param      string      $tax_value       The tax value
@param      string      $item_key        The item key
@param      bool        $is_edit         Indicates if edit
@return     string

Gets the items by vendor variations.
@return       The items.

{ item to variation }
@param        $array_value  The array value
@return     array

{ estimate by vendor }
@param      <type>  $vendor  The vendor
@return     <array>  ( list estimate by vendor )

Adds an estimate.
@param      <type>   $data   The data
@return     boolean  or in estimate

{ function_description }
@param      <type>  $data   The data
@return     <array> data

Gets the estimate.
@param      string  $id     The identifier
@param      array   $where  The where
@return     <row , array>  The estimate, list estimate.

Gets the html tax pur estimate.

Gets the pur estimate detail.
@param      <int>  $pur_request  The pur request
@return     <array>  The pur estimate detail.

{ update estimate }
@param      <type>   $data   The data
@param      <type>   $id     The identifier
@return     boolean

Gets the purchase estimate attachments.
@param        $id     The purchase estimate
@return       The purchase estimate attachments.

{ change status pur estimate }
@param      <type>   $status  The status
@param      <type>   $id      The identifier
@return     boolean

Gets the pur request detail in estimate.
@param      <int>  $pur_request  The pur request
@return     <array>  The pur request detail in estimate.

{ function_description }

{ delete estimate attachment }
@param         $id     The identifier
@return     boolean

Gets the purcahse estimate attachments.
@param      <type>  $surope  The surope
@param      string  $id      The identifier
@return     <type>  The part attachments.

Gets the estimates by status.
@param      <type>  $status  The status
@return     <array>  The estimates by status.

Creates a purchase order row template.
@param      string      $name              The name
@param      string      $item_name         The item name
@param      string      $item_description  The item description
@param      int|string  $quantity          The quantity
@param      string      $unit_name         The unit name
@param      int|string  $unit_price        The unit price
@param      string      $taxname           The taxname
@param      string      $item_code         The item code
@param      string      $unit_id           The unit identifier
@param      string      $tax_rate          The tax rate
@param      string      $total_money       The total money
@param      string      $discount          The discount
@param      string      $discount_money    The discount money
@param      string      $total             The total
@param      string      $into_money        Into money
@param      string      $tax_id            The tax identifier
@param      string      $tax_value         The tax value
@param      string      $item_key          The item key
@param      bool        $is_edit           Indicates if edit
@return     string

Adds a pur order.
@param      <array>   $data   The data
@return     boolean , int id purchase order

{ update pur order }
@param      <type>   $data   The data
@param      <type>   $id     The identifier
@return     boolean

Gets the pur order detail.
@param      <int>  $pur_request  The pur request
@return     <array>  The pur order detail.

Gets the pur order.
@param      <int>  $id     The identifier
@return     <row>  The pur order.

Gets the html tax pur order.

Gets the purchase order attachments.
@param      <type>  $id     The purchase order
@return     <type>  The purchase order attachments.

{ delete purorder attachment }
@param      <type>   $id     The identifier
@return     boolean

Gets the part attachments.
@param      <type>  $surope  The surope
@param      string  $id      The identifier
@return     <type>  The part attachments.

{ change status pur order }
@param      <type>   $status  The status
@param      <type>   $id      The identifier
@return     boolean  ( description_of_the_return_value )

{ change delivery status pur order }
@param      <type>   $status  The status
@param      <type>   $id      The identifier
@return     boolean  ( description_of_the_return_value )

{ mark_pur_order_as }
@param      string  $status     The status
@param      <type>  $pur_order  The pur order
@return     bool

{ function_description }

{ mark converted purchase order }

Gets the estimate html by pr vendor.
@param        $pur_request  The pur request
@param      string  $vendor       The vendor
@return     string  The estimate html by pr vendor.

Gets the pur estimate detail in order.
@param      <int>  $pur_estimate  The pur estimate
@return     <array>  The pur estimate detail in order.

Gets the list pur orders.
@return       The list pur orders.

Gets the pur order approved.
@return     <array>  The pur order approved.

Gets the pur invoice.
@param      string  $id     The identifier
@return       The pur invoice.

Gets the pur order detail.
@param      <int>  $pur_request  The pur request
@return     <array>  The pur order detail.

get pur order approved for inv
@return       The pur order approved.

Creates a purchase invoice row template.
@param      string      $name              The name
@param      string      $item_name         The item name
@param      string      $item_description  The item description
@param      int|string  $quantity          The quantity
@param      string      $unit_name         The unit name
@param      int|string  $unit_price        The unit price
@param      string      $taxname           The taxname
@param      string      $item_code         The item code
@param      string      $unit_id           The unit identifier
@param      string      $tax_rate          The tax rate
@param      string      $total_money       The total money
@param      string      $discount          The discount
@param      string      $discount_money    The discount money
@param      string      $total             The total
@param      string      $into_money        Into money
@param      string      $tax_id            The tax identifier
@param      string      $tax_value         The tax value
@param      string      $item_key          The item key
@param      bool        $is_edit           Indicates if edit
@return     string

Adds a pur invoice.
@param        $data   The data

{ update pur invoice }
@param        $id     The identifier
@param        $data   The data

Gets the html tax pur order.

Gets the purchase order attachments.
@param      <type>  $id     The purchase order
@return     <type>  The purchase order attachments.

Gets the payment invoice.
@param        $invoice  The invoice
@return       The payment invoice.

Gets the inv attachments.
@param      <type>  $surope  The surope
@param      string  $id      The identifier
@return     <type>  The part attachments.

{ delete purchase invoice attachment }
@param         $id     The identifier
@return     boolean

get pur order approved for inv
@return       The pur order approved.

Adds a invoice payment.
@param         $data       The data
@param         $invoice  The invoice id
@return     boolean

Gets the payment pur invoice.
@param      string  $id     The identifier

{ delete pur invoice }
@param      <type>   $id     The identifier
@return     boolean

{ delete invoice payment }
@param      <type>   $id     The identifier
@return     boolean  ( delete payment )

{ update invoice after approve }
@param        $id     The identifier

Gets the inv payment purchase order.
@param        $pur_order  The pur order

Gets the payment invoices by vendor.

Gets the invoices by vendor.

get unit add commodity
@return [type]

Gets the contact.
@param      <type>  $id     The identifier
@return     <type>  The contact.

Adds a contact.
@param      <type>   $data                The data
@param      <type>   $customer_id         The customer identifier
@param      boolean  $not_manual_request  Not manual request
@return     boolean  or contact id

{ update contact }
@param      <type>   $data            The data
@param      <type>   $id              The identifier
@param      boolean  $client_request  The client request
@return     boolean

{ delete contact }
@param      <type>   $id     The identifier
@return     boolean

Gets the vendor item.
@param        $vendorid  The vendorid
@return       The vendor item.

Gets the item by vendor.
@param      $vendor  The vendor

Gets the item of vendor.
@param        $item_id  The item identifier
@return       The item of vendor.

Adds a vendor item.

create sku code
@param  int commodity_group
@param  int sub_group
@return string

{ update vendor item }
@param        $data   The data
@param        $id     The identifier

Gets the vendor item file.

{ share vendor item }
@param        $item_id  The item identifier

{ delete vendor item }
@param        $item_id    The item identifier
@param        $vendor_id  The vendor identifier

Gets the primary contact name of vendor.

Gets the primary contact email of vendor.
@param        $vendorid  The vendorid
@return       The primary contact email of vendor.

Gets the purchase request by vendor.
@param        $vendorid  The vendorid

Gets the pur order by vendor.
@param      <type>  $vendor  The vendor

Gets the pur order approved.
@return     <array>  The pur order approved.

Gets the contact details.
@param      array   $options  The options
@return       The contact details.

## References

**Models Used**
- `misc_model`
- `caculator_profit_rate_model`
- `vendors_model`
- `departments_model`
- `staff_model`

**Database Tables (inferred)**
- `database`
- `the`
- `id`
- `sku`
- `customer`
- `default`
- `plugin`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\Purchase\Models\Purchase_model.php`

**Classes**:
- `Purchase\Models\describes`
- `Purchase\Models\Purchase_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `get_vendor_table($options = [])`
- `get_unit_type($id = false)`
- `get_unit_table($options = [])`
- `get_pur_request_items_for_order($pur_request_id)`
- `add_unit($data)`
- `update_unit($data)`
- `delete_unit($id)`
- `get_item_categories_table($option = [])`
- `get_commodity_group($id = false)`
- `add_commodity_group($data)`
- `update_commodity_group($data)`
- `delete_commodity_group($id)`
- `get_subgroup_table($option = [])`
- `get_sub_group($id = false)`
- `add_sub_group($data)`
- `update_sub_group($data)`
- `delete_sub_group($id)`
- `update_po_setting($data)`
- `get_vendor_category_table($option = [])`
- `get_vendor_category($id = false)`
- `add_vendor_category($data)`
- `update_vendor_category($data)`
- `delete_vendor_category($id)`
- `update_purchase_setting($data)`
- `get_approval_setting($id = '')`
- `create_approval_setting_row_template($staff_data = [], $name = '', $approver = 'staff', $staff = '', $action = '', $item_key = '')`
- `add_approval_setting($data)`
- `edit_approval_setting($id, $data)`
- `delete_approval_setting($id)`
- `get_unit_add_item()`
- `get_commodity_group_add_commodity()`
- `get_table_data($table, $dataPost, $params = [])`
- `generate_commodity_barcode()`
- `get_commodity($id = false)`
- `add_commodity_one_item($data)`
- `create_sku_code($commodity_group, $sub_group, $flag_insert_id = false)`
- `update_commodity_one_item($data, $id)`
- `delete_commodity($id)`
- `clone_item($id)`
- `get_item_attachments($commodity_id)`
- `add_commodity_one_item_clone($data)`
- `commodity_udpate_profit_rate($id, $percent, $type)`
- `caculator_profit_rate_model($purchase_price, $sale_price)`
- `add_vendor($data, $client_id = null, $client_or_lead_convert_request = false)`
- `check_zero_columns($data)`
- `get_vendor($id)`
- `update_vendor($data, $id, $client_request = false)`
- `get_vendors()`
- `pur_get_grouped($can_be = '', $search_all = false, $vendor = '')`
- `get_item_by_group($group)`
- `get_item($id = false)`
- `add_vendor_items($data)`
- `delete_vendor_items($id)`
- `delete_vendor($id)`
- `caculator_purchase_price_model($profit_rate, $sale_price)`
- `create_purchase_request_row_template($name = '', $item_code = '', $item_text = '', $unit_price = '', $quantity = '', $unit_name = '', $into_money = '', $item_key = '', $tax_value = '', $total = '', $tax_name = '', $tax_rate = '', $tax_id = '', $is_edit = false, $currency_rate = 1, $to_currency = '')`
- `create_purchase_request_row_template($name = '', $item_code = '', $item_text = '', $sku_code = '', $sku_name = '', $quantity = '', $unit_name = '', $item_key = '', $is_edit = false)`
- `get_tax_name($tax)`
- `tax_rate_by_id($tax_id)`
- `get_taxes_dropdown_template($name, $taxname, $type = '', $item_key = '', $is_edit = false, $manual = false)`
- `row_item_to_variation($item_value)`
- `get_pur_request_detail($pur_request)`
- `get_taxes()`
- `get_units()`
- `pur_uniqueByKey($array, $key)`
- `get_item_v2($id = '')`
- `get_item_v3($id = '')`
- `get_item_v2($id = '')`
- `pur_get_tax_rate($taxname)`
- `add_pur_request($data)`
- `add_pur_request($data)`
- `get_approve_setting($type, $status = '')`
- `get_purchase_request($id = '')`
- `get_html_tax_pur_request($id)`
- `update_pur_request($data, $id)`
- `delete_pur_request($id)`
- `get_staff_sign($rel_id, $rel_type)`
- `check_approval_details($rel_id, $rel_type)`
- `get_list_approval_details($rel_id, $rel_type)`
- `get_items()`
- `get_pur_request_pdf_html($pur_order_id)`
- `get_purestimate_pdf_html($pur_estimate_id)`
- `get_purorder_pdf_html($pur_order_id)`
- `get_items_by_id($id)`
- `get_units_by_id($id)`
- `send_mail($data)`
- `pur_create_notification($event, $user_id, $options = [], $to_user_id = 0)`
- `send_request_approve($data)`
- `add_comment($data)`
- `get_comments($related_id, $comment_type = 'pur_request')`
- `delete_approval_details($rel_id, $rel_type)`
- `get_staff_id_by_approve_value($data, $approve_value)`
- `update_approve_request($rel_id, $rel_type, $status)`
- `update_item_pur_request($id)`
- `update_approval_details($id, $data)`
- `add_attachment_to_database($rel_id, $rel_type, $attachment, $external = false)`
- `get_purchase_request_attachments($id)`
- `get_file($id, $rel_id = false)`
- `get_purrequest_attachments($surope, $id = '')`
- `delete_purrequest_attachment($id)`
- `send_to_vendors($id, $data)`
- `get_pur_request_by_status($status)`
- `create_quotation_row_template($name = '', $item_name = '', $quantity = '', $unit_name = '', $unit_price = '', $taxname = '', $item_code = '', $unit_id = '', $tax_rate = '', $total_money = '', $discount = '', $discount_money = '', $total = '', $into_money = '', $tax_id = '', $tax_value = '', $item_key = '', $is_edit = false, $currency_rate = 1, $to_currency = '')`
- `get_items_by_vendor_variation($vendor)`
- `item_to_variation($array_value)`
- `estimate_by_vendor($vendor)`
- `add_estimate($data)`
- `map_shipping_columns($data)`
- `get_estimate($id = '', $where = [])`
- `get_html_tax_pur_estimate($id)`
- `get_pur_estimate_detail($pur_request)`
- `update_estimate($data, $id)`
- `get_purchase_estimate_attachments($id)`
- `change_status_pur_estimate($status, $id)`
- `get_pur_request_detail_in_estimate($pur_request)`
- `delete_pur_estimate($id)`
- `delete_estimate_attachment($id)`
- `get_estimate_attachments($surope, $id = '')`
- `get_estimates_by_status($status)`
- `create_purchase_order_row_template($name = '', $item_name = '', $item_description = '', $quantity = '', $unit_name = '', $unit_price = '', $taxname = '', $item_code = '', $unit_id = '', $tax_rate = '', $total_money = '', $discount = '', $discount_money = '', $total = '', $into_money = '', $tax_id = '', $tax_value = '', $item_key = '', $is_edit = false, $currency_rate = 1, $to_currency = '')`
- `add_pur_order($data)`
- `update_pur_order($data, $id)`
- `get_pur_order_detail($pur_request)`
- `get_pur_order($id)`
- `get_html_tax_pur_order($id)`
- `get_purchase_order_attachments($id)`
- `delete_purorder_attachment($id)`
- `get_purorder_attachments($surope, $id = '')`
- `change_status_pur_order($status, $id)`
- `change_delivery_status_pur_order($status, $id)`
- `mark_pur_order_as($status, $pur_order)`
- `delete_pur_order($id)`
- `mark_converted_purchase_order($pur_order_id, $expense_id)`
- `get_pur_request_detail_in_po($pur_request)`
- `get_estimate_html_by_pr_vendor($pur_request, $vendor = '')`
- `get_pur_estimate_detail_in_order($pur_estimate)`
- `get_list_pur_orders()`
- `get_pur_order_approved()`
- `get_pur_invoice($id = '')`
- `get_pur_invoice_detail($pur_request)`
- `get_pur_order_approved_for_inv()`
- `create_purchase_invoice_row_template($name = '', $item_name = '', $item_description = '', $quantity = '', $unit_name = '', $unit_price = '', $taxname = '', $item_code = '', $unit_id = '', $tax_rate = '', $total_money = '', $discount = '', $discount_money = '', $total = '', $into_money = '', $tax_id = '', $tax_value = '', $item_key = '', $is_edit = false, $currency_rate = 1, $to_currency = '')`
- `add_pur_invoice($data)`
- `update_pur_invoice($id, $data)`
- `get_html_tax_pur_invoice($id)`
- `get_purchase_invoice_attachments($id)`
- `get_payment_invoice($invoice)`
- `get_purinv_attachments($surope, $id = '')`
- `delete_purinv_attachment($id)`
- `get_pur_order_approved_for_inv_by_vendor($vendor)`
- `add_invoice_payment($data, $invoice)`
- `get_payment_pur_invoice($id = '')`
- `delete_pur_invoice($id)`
- `delete_payment_pur_invoice($id)`
- `update_invoice_after_approve($id)`
- `get_inv_payment_purchase_order($pur_order)`
- `get_payment_invoices_by_vendor($vendor)`
- `get_invoices_by_vendor($vendor)`
- `get_unit_add_commodity()`
- `get_contact($id)`
- `add_contact($data, $customer_id, $not_manual_request = false)`
- `update_contact($data, $id, $client_request = false)`
- `delete_vendor_contact($id)`
- `get_vendor_item($vendorid)`
- `get_item_by_vendor($vendor)`
- `get_item_of_vendor($item_id)`
- `add_vendor_item($data, $vendor_id)`
- `create_vendor_item_sku_code($commodity_group, $sub_group)`
- `update_vendor_item($data, $id)`
- `get_vendor_item_file($item_id)`
- `share_vendor_item($item_id)`
- `delete_vendor_item($item_id, $vendor_id)`
- `get_primary_contact_name_of_vendor($vendorid)`
- `get_primary_contact_email_of_vendor($vendorid)`
- `get_purchase_request_by_vendor($vendorid)`
- `get_pur_order_by_vendor($vendor)`
- `get_pur_order_approved_by_vendor($vendor)`
- `get_contact_details($options = [])`
- `get_all_purchase_request($query)`
- `get_pur_request_with_items($query)`
- `get_pur_request_items($pur_request_id)`
- `get_project_po_total($project_id)`

