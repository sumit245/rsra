# plugins\Warehouse\Controllers\Warehouse.php

- Path: `plugins\Warehouse\Controllers\Warehouse.php`
- Type: PHP
- Size: 308192 bytes

## Summary (from docblocks)

table commodity list
@return [type]

modal form
@return [type]

general
@return [type]

commodity types
@return [type]

list commodity type data
@return [type]

_make commodity type row
@param  [type] $data 
@return [type]

commodity type modal form
@return [type]

commodity type
@param  integer $id
@return redirect

delete commodity type
@param  integer $id
@return redirect

units
@return [type]

list commodity type data
@return [type]

_make commodity type row
@param  [type] $data 
@return [type]

commodity type modal form
@return [type]

unit type
@param  integer $id
@return redirect

delete unit type
@param  integer $id
@return redirect

sizes
@return [type]

list size type data
@return [type]

_make_size_type_row
@param  [type] $data 
@return [type]

size_type_modal_form
@return [type]

size type
@param  integer $id
@return redirect

delete size type
@param  integer $id
@return redirect

styles
@return [type]

list_style_type_data
@return [type]

_make_style_type_row
@param  [type] $data 
@return [type]

style_type_modal_form
@return [type]

style type
@param  integer $id
@return redirect

delete style type
@param  integer $id
@return redirect

body_types
@return [type]

list body type data
@return [type]

make body type row
@param  [type] $data 
@return [type]

body type modal form
@return [type]

body type
@param  integer $id
@return redirect

delete body type
@param  integer $id
@return redirect

commodity types
@return [type]

list commodity type data
@return [type]

_make commodity type row
@param  [type] $data 
@return [type]

commodity type modal form
@return [type]

commodty group type
@param  integer $id
@return redirect

delete commodity group type
@param  integer $id
@return redirect

warehouses
@return [type]

list_warehouse_data
@return [type]

_make_warehouse_row
@param  [type] $data 
@return [type]

commodity type modal form
@return [type]

warehouse_
@param  integer $id
@return redirect

delete warehouse
@param  integer $id
@return redirect

get commodity data ajax
@param  integer $id
@return view

add commodity list
@param  integer $id
@return redirect

delete commodity
@param  integer $id
@return redirect

table manage goods receipt
@param  integer $id
@return array

manage purchase
@param  integer $id
@return view

manage goods receipt
@param  integer $id
@return view

copy pur request
@param  integer $pur request
@return json encode

copy pur vender
@param  integer $pủ request
@return json encode

view purchase
@param  integer $id
@return view

edit purchase
@param  integer $id
@return view

commodity code change
@param  integer $val
@return json encode

update inventory min
@param  integer $id
@return redirect

table warehouse history
@return array

warehouse history
@return view

approval setting
@return redirect

delete approval setting
@param  integer $id
@return redirect

get html approval setting
@param  integer $id
@return html

send request approve
@return json

approve request
@param  integer $id
@return json

stock import pdf
@param  integer $id
@return pdf file view

send mail
@param  integer $id
@return json

manage delivery
@param  integer $id
@return view

goods delivery
@return view

commodity goods delivery change
@param  integer $val
@return json

table manage delivery
@return array

edit delivery
@param  integer $id
@return view

stock export pdf
@param  integer $id
@return pdf file view

manage report
@return view

get data stock summary report
@return json

stock summary report pdf
@return pdf view file

view delivery
@param  integer $id
@return view

check quantity inventory
@return json

quantity inventory
@return json

check quantity inventory onsubmit
@return json

manage stock take
@param  integer $id
@return view

table manage stock table
@return array

stock take
@param  integer $id
@return view

commodity list add edit
@param  integer $id
@return json

get commodity file url
@param  integer $commodity_id
@return json

sub group
@param  integer $id
@return redirect

delete sub group
@param  integer $id
@return redirect

add commodity attachment
@param  integer $id
@return json

import xlsx commodity
@param  integer $id
@return view

import file xlsx commodity
@return json

delete commodity file
@param  integer $attachment_id
@return json

colors
@return [type]

list commodity type data
@return [type]

_make commodity type row
@param  [type] $data 
@return [type]

commodity type modal form
@return [type]

[colors_setting description]
@param  string $id [description]
@return [type]     [description]

[delete_color description]
@param  [type] $id [description]
@return [type]     [description]

{ loss adjustment }

{ loss adjustment table }

add loss adjustment
@param string $id
@return view

adjust
@param  [integer] $id 
@return json

{ delete loss adjustment }
@param      <type>  $id     The identifier

{ get data inventory valuation report }
@return json

table out of stock
@return [type]

table expired
@return [type]

view commodity detail
@param  [integer] $commodity_id
@return [type]

table view commodity detail
@return [type]

delete goods receipt
@param  [integer] $id
@return redirect

delete_goods_delivery
@param  [integer] $id
@return [redirect]

Gets the commodity barcode.

table inventory stock
@return [type]

{ tax change event }
@param      <type>  $tax    The tax
@return   json

tax change v2
@param  [type] $tax 
@return [type]
this funtion used when $tax like 4|3

get invoices fill data
@return json

manage delivery filter
@param  integer $id
@return view

warehouse delete bulk action
@return

get subgroup fill data
@return html

warehouse selling price profif ratio
@return boolean

warehouse the fractional part
@return boolean

warehouse integer part
@return boolean

warehouse profit rate by purchase price sale
@return boolean

setting rules for rounding prices
@return boolean

caculator sale price
@return float

table inventory inside
@return array

{ purchase order setting }
@return  json

update goods receipt warehouse
@return json

coppy invoices
@param  integer $invoice_id 
@return json

caculator purchase price
@return json

warehouse delete bulk action
@return

get list job position training
@param  integer $id 
@return json

revert goods receipt
@param  integer $id 
@return redirect

revert goods delivery
@param  integer $id 
@return redirect

import xlsx opening stock
@param  integer $id
@return view

import file xlsx opening stock
@return json

unserializeForm
@param  [type] $str 
@return [type]

delete item tags
@param  integer $tag_id 
@return [type]

check warehouse onsubmit

view lost adjustment
@param  integer $id 
@return view

check lost adjustment before save
@return json

[inventory_setting
@return redirect

manage internal delivery
@param  string $id 
@return view

table internal delivery
@return table

add update internal delivery
@param string $id

get quantity inventory
@return [type]

delete internal delivery
@param  interger $id 
@return redirect

view internal delivery
@param  integer $id 
@return view

check internal delivery onsubmit

@return view

check approval sign
@return json

manage warehouse
@param  string $id 
@return [type]

table warehouse name
@return array

warehouse setting
@param  string $id 
@return [type]

get item by id ajax
@param  integer $id 
@return [type]

get warehouse custom fields html
@param  [type] $id 
@return [type]

view warehouse detail
@param  integer $warehouse_id 
@return view

goods delivery copy pur order
@param  integer $pur request
@return json encode

Uploads a proposal attachment.
@param      string  $id  The purchase order
@return redirect

{ preview obgy partograph file }
@param      <type>  $id      The identifier
@param      <type>  $rel_id  The relative identifier
@return  view

{ delete proposal attachment }
@param      <type>  $id     The identifier

brands setting
@param  string $id 
@return [type]

[delete_color
@param  [type] $id 
@return [type]

brands setting
@param  string $id 
@return [type]

[delete_color
@param  [type] $id 
@return [type]

[delete_color description]
@param  [type] $id  
@return [type]

check warehouse custom fields
@param  [type] $id
@return [type]

send goods delivery
@param  [type] $id 
@return [type]

get primary contact
@return [type]

send_goods_delivery
@return [type]

check sku duplicate
@return [type]

stock internal delivery pdf
@param  [type] $id 
@return [type]

item print barcode
@return [type]

save and send request send mail
@return [type]

reset data
@return [type]

get variation html add
@param  [type] $id 
@return [type]

get variation from parent item
@return [type]

update unchecked inventory numbers
@return [type]

maximum minimum inventory filter
@param  [type] $data 
@return [type]

{ warehouse setting }
@return  json

add opening stock modal

add opening stock

add activity

delete activitylog
@param  [type] $id 
@return [type]

copy product image
@param  [type] $id       
@param  [type] $rel_type 
@return [type]

delete product attachment
@param  [type] $attachment_id 
@param  [type] $rel_type      
@return [type]

caculator purchase price
@return [type]

wh parent item search
@return [type]

wh commodity code search
@return [type]

get receipt note row template
@return [type]

get internal delivery row template
@return [type]

get loss adjustment row template
@return [type]

get good delivery row template
@return [type]

manage packing list
@param  string $id 
@return [type]

packing list
@return view

table manage packing list
@return [type]

get packing list row template
@return [type]

packing list copy delivery note
@param  string $delivery_id 
@return [type]

wh client change data
@param  [type] $customer_id     
@param  string $current_invoice 
@return [type]

delete packing list
@param  [type] $id 
@return [type]

view packing list
@param  [type] $id 
@return [type]

packing list check before approval
@return [type]

packing list pdf
@param  [type] $id 
@return [type]

delivery status mark as
@param  [type] $status 
@param  [type] $id     
@param  [type] $type   
@return [type]

shipment detail
@param  string $id 
@return [type]

shipment activity log modal
@return [type]

shipment add edit activity log
@return [type]

update shipment status
@param  [type] $status      
@param  [type] $shipment_id 
@param  [type] $cart_id     
@return [type]

update return policies information
@return [type]

manage order return
@param  string $id 
@return [type]

sales order manage order return
@param  string $id 
@return [type]

purchasing manage order return
@param  string $id 
@return [type]

order return
@param  string $id                
@param  string $order_retrun_type : have 3 type "manual"; "sales_return_order"; "purchasing_return_order"
@return [type]

table manage packing list
@return [type]

get order return row template
@return [type]

wh client data
@param  [type] $customer_id 
@return [type]

order return get item data
@param  string $delivery_id 
@return [type]

delete order return
@param  [type] $id 
@return [type]

view order return
@param  [type] $id 
@return [type]

order return check before approval
@return [type]

order return pdf
@param  [type] $id 
@return [type]

wh get item by barcode
@param  [type] $barcode 
@return [type]

order return create import stock
@param  [type] $order_return_id 
@return [type]

order return get related data
@return [type]

open warehouse modal
@return [type]

order return create stock export
@param  [type] $order_return_id 
@return [type]

fill multiple serial number modal
@return [type]

loss fill multiple serial number modal
@return [type]

adjustment fill multiple serial number modal
@return [type]

import_serial_number
@return [type]

serial number table commodity list
@return [type]

warehouse export item serial number checked
@return [type]

import_serial_number
@return [type]

table warranty period
@return [type]

warranty period pdf
@return [type]

inventory
@return [type]

inventory_settings
@return [type]

colors
@return [type]

list commodity type data
@return [type]

_make commodity type row
@param  [type] $data 
@return [type]

commodity type modal form
@return [type]

delete modal form
@return [type]

delete goods receipt modal form
@return [type]

wh_create_notification
@param  array  $data 
@return [type]

print goods receipt
@param  integer $goods_receipt_id 
@return [type]

download pdf
@param  integer $goods_receipt_id 
@param  string  $mode             
@return [type]

print goods receipt
@param  integer $goods_receipt_id 
@return [type]

download pdf
@param  integer $internal_delivery_id 
@param  string  $mode             
@return [type]

table_loss_adjustment
@return [type]

delete loss adjustment modal form
@return [type]

get serial number
@return [type]

load serial number modal
@return [type]

load change serial number modal
@return [type]

delete goods receipt modal form
@return [type]

print goods receipt
@param  integer $goods_receipt_id 
@return [type]

download pdf
@param  integer $goods_delivery_id 
@param  string  $mode             
@return [type]

delete packing list modal form
@return [type]

print goods receipt
@param  integer $goods_receipt_id 
@return [type]

download pdf
@param  integer $packing_list_id 
@param  string  $mode             
@return [type]

print goods receipt
@param  integer $goods_receipt_id 
@return [type]

download pdf
@param  integer $order_return_id 
@param  string  $mode             
@return [type]

delete order return modal form
@return [type]

download_barcode
@return [type]

print_barcode
@return [type]

stock summary report
@return [type]

delete internal delivery modal form
@return [type]

warehouse fee return order
@return [type]

stock summary report
@return [type]

warranty period reports
@return [type]

download warranty period pdf
@param  string $mode 
@return [type]

inventory valuation reports
@return [type]

## References

**Models Used**
- `warehouse_model`
- `Items_model`
- `Item_categories_model`
- `Taxes_model`
- `purchase_model`
- `projects_model`
- `staff_model`
- `departments_model`
- `Users_model`
- `currencies_model`
- `Clients_model`
- `clients_model`
- `misc_model`
- `omni_sales_model`

**Database Tables (inferred)**
- `parent`
- `plugin`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\Warehouse\Controllers\Warehouse.php`

**Classes**:
- `Warehouse\Controllers\Warehouse extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `commodity_list($id = '')`
- `table_commodity_list()`
- `item_modal_form()`
- `wh_commodity_code_search_all($type = 'rate', $can_be = '', $search_all = 'true')`
- `general()`
- `commodity_types()`
- `list_commodity_type_data()`
- `_make_commodity_type_row($data)`
- `commodity_type_modal_form()`
- `commodity_type($id = '')`
- `delete_commodity_type($id)`
- `units()`
- `unit_type_data()`
- `_make_unit_row($data)`
- `unit_type_modal_form()`
- `unit_type($id = '')`
- `delete_unit_type($id)`
- `sizes()`
- `list_size_type_data()`
- `_make_size_type_row($data)`
- `size_type_modal_form()`
- `size_type($id = '')`
- `delete_size_type($id)`
- `styles()`
- `list_style_type_data()`
- `_make_style_type_row($data)`
- `style_type_modal_form()`
- `style_type($id = '')`
- `delete_style_type($id)`
- `models()`
- `list_body_type_data()`
- `_make_body_type_row($data)`
- `body_type_modal_form()`
- `body_type($id = '')`
- `delete_body_type($id)`
- `commodity_groups()`
- `list_commodity_group_data()`
- `_make_commodity_group_row($data)`
- `commodity_group_modal_form()`
- `commodity_group_type($id = '')`
- `delete_commodity_group_type($id)`
- `warehouses()`
- `list_warehouse_data()`
- `_make_warehouse_row($data)`
- `warehouse_modal_form()`
- `create_warehouse($id = '')`
- `delete_warehouse($id)`
- `get_commodity_data_ajax($id)`
- `add_commodity_list($id = '')`
- `delete_commodity()`
- `table_manage_goods_receipt()`
- `manage_purchase($id = '')`
- `manage_goods_receipt($id = '')`
- `coppy_pur_request($pur_request = '')`
- `copy_pur_vender($pur_request)`
- `goods_receipt_detail($id)`
- `edit_purchase($id)`
- `add_goods_receipt()`
- `commodity_code_change($val='')`
- `update_inventory_min($id = '')`
- `table_warehouse_history()`
- `warehouse_history()`
- `approval_setting($id = '')`
- `delete_approval_setting($id)`
- `get_html_approval_setting($id = '')`
- `send_request_approve()`
- `approve_request()`
- `stock_import_pdf($id)`
- `send_mail()`
- `manage_delivery($id = '')`
- `goods_delivery($id ='', $edit_approval = false)`
- `commodity_goods_delivery_change($val='')`
- `table_manage_delivery()`
- `edit_delivery($id)`
- `stock_export_pdf($id)`
- `manage_report()`
- `get_data_stock_summary_report()`
- `stock_summary_report_pdf()`
- `view_delivery($id)`
- `check_quantity_inventory()`
- `quantity_inventory()`
- `check_quantity_inventory_onsubmit()`
- `manage_stock_take($id = '')`
- `table_manage_stock_take()`
- `stock_take()`
- `commodity_list_add_edit($id = '')`
- `get_commodity_file_url($commodity_id)`
- `sub_group($id = '')`
- `delete_sub_group($id)`
- `add_commodity_attachment($id, $add_variant='')`
- `import_xlsx_commodity()`
- `import_file_xlsx_commodity()`
- `delete_commodity_file($attachment_id)`
- `colors()`
- `list_color_data()`
- `_make_color_row($data)`
- `color_modal_form()`
- `colors_setting($id = '')`
- `delete_color($id)`
- `loss_adjustment()`
- `loss_adjustment_table()`
- `add_loss_adjustment($id = '')`
- `adjust($id)`
- `delete_loss_adjustment()`
- `get_data_inventory_valuation_report()`
- `table_out_of_stock()`
- `table_expired()`
- `view_commodity_detail($commodity_id)`
- `table_view_commodity_detail()`
- `delete_goods_receipt()`
- `delete_goods_delivery()`
- `get_commodity_barcode()`
- `table_inventory_stock()`
- `tax_change($tax)`
- `tax_change_v2()`
- `get_invoices_fill_data()`
- `manage_delivery_filter($id = '')`
- `warehouse_delete_bulk_action()`
- `get_subgroup_fill_data()`
- `warehouse_selling_price_profif_ratio()`
- `warehouse_the_fractional_part()`
- `warehouse_integer_part()`
- `warehouse_profit_rate_by_purchase_price_sale()`
- `setting_rules_for_rounding_prices()`
- `caculator_sale_price()`
- `table_inventory_inside()`
- `auto_create_goods_received_delivery_setting()`
- `update_goods_receipt_warehouse()`
- `copy_invoices($invoice_id = '')`
- `caculator_profit_rate()`
- `warehouse_export_item_checked()`
- `get_item_longdescriptions($id)`
- `revert_goods_receipt($id)`
- `revert_goods_delivery($id)`
- `import_opening_stock()`
- `import_file_xlsx_opening_stock()`
- `unserializeForm($str)`
- `delete_item_tags($tag_id)`
- `check_warehouse_onsubmit()`
- `view_lost_adjustment($id)`
- `check_lost_adjustment_before_save()`
- `inventory_setting()`
- `manage_internal_delivery($id = '')`
- `table_internal_delivery()`
- `add_update_internal_delivery($id ='')`
- `get_quantity_inventory()`
- `get_quantity_inventory_t()`
- `delete_internal_delivery()`
- `view_internal_delivery($id)`
- `check_internal_delivery_onsubmit()`
- `check_approval_sign()`
- `warehouse_mange($id = '')`
- `table_warehouse_name()`
- `add_warehouse($id = '')`
- `get_warehouse_by_id($id)`
- `get_warehouse_custom_fields_html($id)`
- `view_warehouse_detail($warehouse_id)`
- `goods_delivery_copy_pur_order($pur_order = '')`
- `wh_proposal_attachment($id)`
- `file_proposal($id, $rel_id)`
- `delete_proposal_attachment($id)`
- `brands_setting($id = '')`
- `delete_brand($id)`
- `models_setting($id = '')`
- `delete_model($id)`
- `custom_fields_setting($id = '')`
- `delete_custom_fields_warehouse($id)`
- `check_warehouse_custom_fields()`
- `get_delivery_ajax()`
- `get_primary_contact()`
- `send_goods_delivery()`
- `check_sku_duplicate()`
- `stock_internal_delivery_pdf($id)`
- `item_print_barcode()`
- `save_and_send_request_send_mail($data ='')`
- `reset_datas()`
- `reset_data()`
- `get_variation_html_add()`
- `get_variation_from_parent_item()`
- `update_unchecked_inventory_numbers()`
- `maximum_minimum_inventory_filter()`
- `show_item_cf_on_pdf()`
- `add_opening_stock_modal()`
- `add_opening_stock()`
- `wh_add_activity()`
- `delete_activitylog($id)`
- `copy_product_image($id)`
- `delete_product_attachment($attachment_id, $rel_type)`
- `caculator_purchase_price()`
- `wh_parent_item_search()`
- `wh_commodity_code_search($type = 'purchase_price', $can_be = 'can_be_inventory')`
- `get_item_by_id($id, $get_warehouse = false, $warehouse_id = false)`
- `get_good_receipt_row_template()`
- `get_internal_delivery_row_template()`
- `get_loss_adjustment_row_template()`
- `get_good_delivery_row_template()`
- `manage_packing_list($id = '')`
- `packing_list($id ='', $edit_approval = false)`
- `table_manage_packing_list()`
- `get_packing_list_row_template()`
- `packing_list_copy_delivery_note($delivery_id = 0)`
- `wh_client_change_data($customer_id = '', $current_invoice = '')`
- `delete_packing_list()`
- `view_packing_list($id)`
- `packing_list_check_before_approval()`
- `packing_list_pdf($id)`
- `delivery_status_mark_as($status, $id, $type)`
- `shipment_detail($id = '')`
- `shipment_activity_log_modal()`
- `shipment_add_edit_activity_log()`
- `update_shipment_status($status, $shipment_id, $cart_id)`
- `update_return_policies_information()`
- `manage_order_return($id = '')`
- `sales_order_manage_order_return($id = '')`
- `purchasing_manage_order_return($id = '')`
- `order_return($receipt_delivery_type = 'manual', $id ='')`
- `table_manage_order_return()`
- `get_order_return_row_template()`
- `wh_client_data($customer_id, $rel_type)`
- `order_return_get_item_data()`
- `delete_order_return()`
- `view_order_return($id)`
- `order_return_check_before_approval()`
- `order_return_pdf($id)`
- `wh_get_item_by_barcode($barcode)`
- `order_return_create_stock_import_export($order_return_id)`
- `order_return_get_related_data()`
- `open_warehouse_modal()`
- `order_return_create_stock_export()`
- `fill_multiple_serial_number_modal()`
- `loss_fill_multiple_serial_number_modal()`
- `adjustment_fill_multiple_serial_number_modal()`
- `import_serial_number()`
- `serial_number_table_commodity_list()`
- `warehouse_export_item_serial_number_checked()`
- `import_serial_number_excel()`
- `table_warranty_period()`
- `warranty_period_pdf()`
- `inventory()`
- `inventory_settings()`
- `approval_settings()`
- `list_approval_setting_data()`
- `_make_approval_setting_row($data)`
- `approval_setting_modal_form()`
- `get_approval_setting_row_template()`
- `delete_modal_form()`
- `delete_goods_receipt_modal_form()`
- `wh_create_notification($data = array()`
- `print_goods_receipt($goods_receipt_id = 0)`
- `download_goods_receipt_pdf($goods_receipt_id = 0, $mode = "download")`
- `print_internal_delivery($internal_delivery_id = 0)`
- `download_internal_delivery_pdf($internal_delivery_id = 0, $mode = "download")`
- `table_loss_adjustment()`
- `delete_loss_adjustment_modal_form()`
- `get_serial_number()`
- `load_serial_number_modal()`
- `load_change_serial_number_modal()`
- `get_serial_number_for_change_modal()`
- `delete_goods_delivery_modal_form()`
- `print_goods_delivery($goods_delivery_id = 0)`
- `download_goods_delivery_pdf($goods_delivery_id = 0, $mode = "download")`
- `delete_packing_list_modal_form()`
- `print_packing_list($packing_list_id = 0)`
- `download_packing_list_pdf($packing_list_id = 0, $mode = "download")`
- `print_order_return($order_return_id = 0)`
- `download_order_return_pdf($order_return_id = 0, $mode = "download")`
- `delete_order_return_modal_form()`
- `download_barcode()`
- `print_barcode()`
- `stock_summary_report()`
- `delete_internal_delivery_modal_form()`
- `warehouse_fee_return_order()`
- `inventory_analytics()`
- `warranty_period_reports()`
- `download_warranty_period_pdf($mode = "view")`
- `inventory_valuation_reports()`

