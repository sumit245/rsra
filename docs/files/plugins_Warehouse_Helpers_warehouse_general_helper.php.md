# plugins\Warehouse\Helpers\warehouse_general_helper.php

- Path: `plugins\Warehouse\Helpers\warehouse_general_helper.php`
- Type: PHP
- Size: 36917 bytes

## Summary (from docblocks)

get the defined config value by a key
@param string $key
@return config value

warehouse get source url
@param  string $warehouse_file 
@return [type]

ajax on total items
@return [type]

get inventory by warehouse variation
@param  [type] $id 
@return [type]

get warehouse name
@param  boolean $id 
@return [type]

get list inventory by ids
@param  [type] $ids 
@return [type]

get list serial number by ids
@param  [type] $ids 
@return [type]

get list by parent ids
@param  [type] $ids 
@return [type]

wh check approval setting
@param  integer $type 
@return [type]

wh_get_unit_name
@param  boolean $id 
@return [type]

wh convert item taxes
@param  [type] $tax      
@param  [type] $tax_rate 
@param  [type] $tax_name 
@return [type]

get commodity name
@param  integer $id
@return array or row

get status inventory
@param  integer $commodity, integer $inventory
@return boolean

get goods receipt code
@param  integer $id
@return array or row

warehouse process digital signature image
@param  string $partBase64
@param  string $path
@param  string $image_name
@return boolean

get goods delivery code
@param  integer $id
@return array or row

get internal delivery code
@param  boolean $id 
@return [type]

wh get item variatiom
@param  [type] $id 
@return [type]

wh get warehouse address
@param  [type] $id 
@return [type]

render delivery status html
@param  string $status 
@return [type]

packing list status
@param  string $status 
@return [type]

packing list status
@param  string $status 
@return [type]

wh get delivery code
@param  [type] $id 
@return [type]

wh render taxes html
@param  [type] $item_tax 
@param  [type] $width    
@return [type]

wh get sales order code
@param  [type] $id 
@return [type]

wh get purchase order code
@param  [type] $id 
@return [type]

wh get order return code
@param  [type] $id 
@return [type]

get tax rate
@param  boolean $id 
@return [type]

get color type
@param  integer $id, string $index_name
@return array, object

get style name
@param  integer $id
@return array or row

get model name
@param  integer $id
@return array or row

get size name
@param  integer $id
@return array or row

get group name
@param  integer $id
@return array or row

get item description
@param  boolean $id 
@return [type]

## Symbols

# Symbols

**Files documented**: 1

## `plugins\Warehouse\Helpers\warehouse_general_helper.php`

**Functions/Methods**:
- `get_warehouse_setting($key = "")`
- `warehouse_get_source_url($warehouse_file = "")`
- `ajax_on_total_items()`
- `has_permission($permission, $staffid = '', $can = '')`
- `prefixed_table_fields_wildcard($table, $alias, $field)`
- `get_unit_type($id = false)`
- `get_inventory_by_warehouse_variation($id)`
- `get_warehouse_name($id = false)`
- `get_list_inventory_by_ids($ids)`
- `get_list_serial_number_by_ids($ids)`
- `get_list_items_by_parent_ids($ids)`
- `wh_check_approval_setting($type)`
- `wh_get_unit_name($id = false)`
- `wh_convert_item_taxes($tax, $tax_rate, $tax_name)`
- `get_commodity_name($id = false)`
- `get_status_inventory($commodity, $inventory)`
- `get_goods_receipt_code($id = false)`
- `warehouse_process_digital_signature_image($partBase64, $path, $image_name)`
- `unique_filename($dir, $filename)`
- `wh_log_notification($event, $options = array()`
- `prepare_goods_receipt_pdf($goods_receipt, $mode = "download")`
- `get_goods_delivery_code($id = false)`
- `get_internal_delivery_code($id = false)`
- `wh_get_item_variatiom($id)`
- `prepare_internal_delivery_pdf($internal_delivery, $mode = "download")`
- `wh_get_warehouse_address($id)`
- `wh_app_generate_hash()`
- `render_delivery_status_html($id, $type, $status_value = '', $ChangeStatus = true)`
- `get_delivery_status_by_id($id, $type)`
- `delivery_list_status($status='')`
- `packing_list_status($status='')`
- `prepare_goods_delivery_pdf($goods_delivery, $mode = "download")`
- `wh_get_delivery_code($id)`
- `wh_render_taxes_html($item_tax, $width)`
- `prepare_packing_list_pdf($packing_list, $mode = "download")`
- `wh_get_sales_order_code($id)`
- `wh_get_purchase_order_code($id)`
- `wh_get_order_return_code($id)`
- `prepare_order_return_pdf($order_return, $mode = "download")`
- `get_tax_rate($id = false)`
- `prepare_barcode_pdf($barcode_data, $mode = "download")`
- `get_color_type($id = false)`
- `get_style_name($id = false)`
- `get_model_name($id = false)`
- `get_size_name($id = false)`
- `get_wh_group_name($id = false)`
- `_l($key)`
- `prepare_warranty_period_pdf($warranty_period_data, $mode = "download")`
- `wh_get_company_name($userid, $prevent_empty_company = false)`
- `get_item_description($id = false)`

