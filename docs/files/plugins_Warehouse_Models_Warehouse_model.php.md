# plugins\Warehouse\Models\Warehouse_model.php

- Path: `plugins\Warehouse\Models\Warehouse_model.php`
- Type: PHP
- Size: 676117 bytes

## Summary (from docblocks)

get unit add commodity
@return [type]

wh get grouped
@param  string  $can_be     
@param  boolean $search_all 
@return [type]

count items
@return [type]

Function that will parse table data from the tables folder for amin area
@param  string $table  table filename
@param  array  $params additional params
@return void

add commodity type
@param array  $data
@param boolean $id
return boolean

get commodity type
@param  boolean $id
@return array or object

get commodity type add commodity
@return array

delete commodity type
@param  integer $id
@return boolean

add unit type
@param array  $data
@param boolean $id
return boolean

get unit type
@param  boolean $id
@return array or object

get unit code name
@return array

get warehouse code name
@return array

delete unit type
@param  integer $id
@return boolean

add size type
@param array  $data
@param boolean $id
return boolean

get size type
@param  boolean $id
@return array or object

get size add commodity
@return array

delete size type
@param  integer $id
@return boolean

add style type
@param array  $data
@param boolean $id
return boolean

get style type
@param  boolean $id
@return array or object

get style add commodity
@return array

delete style type
@param  integer $id
@return boolean

add body type
@param array  $data
@param boolean $id
return boolean

get body type
@param  boolean $id
@return row or array

get body add commodity
@return array

delete body type
@param  integer $id
@return boolean

add commodity group type
@param array  $data
@param boolean $id
return boolean

get commodity group type
@param  boolean $id
@return array or object

get commodity group add commodity
@return array

delete commodity group type
@param  integer $id
@return boolean

add warehouse
@param array  $data
@param boolean $id
return boolean

get warehouse
@param  boolean $id
@return array or object

get all warehouse
@param  boolean $id 
@return [type]

get warehouse add commodity
@return array

delete warehouse
@param  integer $id
@return boolean

add commodity
@param array $data
@param boolean $id
return boolean

get commodity
@param  boolean $id
@return array or object

get commodity code name
@return array

get items code name
@return array

delete commodity
@param  integer $id
@return boolean

get commodity hansometable
@param  boolean $id
@return object

get commodity hansometable by barcode
@param  [type] $commodity barcode 
@return [type]

create goods code
@return	string

add goods
@param array $data
@param boolean $id
return boolean

Gets the tax rate by identifier.

get goods receipt
@param  integer $id
@return array or object

get goods receipt detail
@param  integer $id
@return array

get purchase request
@param  integer $pur_order
@return array

get staff
@param  string $id
@param  array  $where
@return array or object

update status goods
@param  integer $pur_orders_id
@return boolean

add goods transaction detail
@param array $data
@param string $status

add inventory manage
@param array $data
@param string $status

check commodity exist inventory
@param  integer $warehouse_id
@param  integer $commodity_id
@return boolean

get inventory commodity
@param  integer $commodity_id
@return array

add inventory min
@param array $data
return boolean

get inventory min
@param  boolean $id
@return array or object

setting get inventory min
@param  boolean $id 
@return [type]

get inventory min by commodity id
@param  boolean $id 
@return [type]

update inventory min
@param  array $data
@return boolean

get commodity warehouse
@param  boolean $id
@return array

get total inventory commodity
@param  boolean $id
@return object

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

get approval setting
@param  boolean $id
@return array or object

get staff sign
@param   integer $rel_id
@param   string $rel_type
@return  array

check approval detail
@param   integer $rel_id
@param   string $rel_type
@return  boolean

get list approval detail
@param   integer $rel_id
@param   string $rel_type
@return  array

add activity log
@param array $data
return boolean

get activity log
@param   integer $rel_id
@param   string $rel_type
@return  array

delete activiti log
@param   integer $rel_id
@param   string $rel_type
@return  boolean

send request approve
@param  array $data
@return boolean

get approve setting
@param  integer] $type
@param  string $status
@return object

delete approval details
@param  integer $rel_id
@param  string $rel_type
@return  boolean

get staff id by approve value
@param  array $data
@param  integer $approve_value
@return boolean

update approval details
@param  integer $id
@param  array $data
@return boolean

update approve request
@param  integer $rel_ids
@param  string $rel_type
@param  integer $status
@return boolean

invoice delivery partial or total
@param  [type] $invoice_id            
@param  [type] $goods_delivery_detail 
@return [type]

stock import pdf
@param  integer $purchase
@return  pdf view

get stock import pdf_html
@param  integer $goods_receipt_id
@return html

send mail
@param  array $data
@return

create goods delivery code
@return string

add goods delivery
@param array  $data
@param boolean $id
return boolean

commodity goods delivery change
@param  boolean $id
@return  array

get goods delivery
@param  integer $id
@return array or object

get goods delivery detail
@param  integer $id
@return array

get vendor
@param  string $id
@param  array  $where
@return array or object

get vendor ajax
@param  integer $pur_orders_id
@return object

stock export pdf
@param  integer $delivery
@return pdf view

get stock export pdf_html
@param  integer $goods_delivery_id
@return string

get stock summary report
@param  array $data
@return string

stock summary report pdf
@param  string $stock_report
@return pdf view

get stock summary report view
@param  array $data
@return string

get quantity inventory
@param  integer $warehouse_id
@param  integer $commodity_id
@return object

get warehourse attachments
@param  integer $commodity_id
@return array

add commodity one item
@param array $data
@return integer

create variant product
@param  [type] $parent_id 
@param  [type] $data      
@return [type]

variant generator
@param  [type]  $variants 
@param  integer $i        
@return [type]

update commodity one item
@param  array $data
@param  integer $id
@return boolean

get sub group
@param  boolean $id
@return array  or object

add sub group
@param array  $data
@param boolean $id
@return boolean

delete_sub_group
@param  integer $id
@return boolean

import xlsx commodity
@param  array $data
@return integer

get commodity attachments delete
@param  integer $id
@return object

delete commodity file
@param  integer $attachment_id
@return boolean

get color
@param  boolean $id
@return array or object

create sku code
@param  int commodity_group
@param  int sub_group
@return string

add color
@param array $data
@return integer

update color
@param  array $data
@param  integer $id
@return boolean

delete color
@param  integer $id
@return boolean

get color add commodity
@return array

Adds a loss adjustment.
@param      <type>  $data   The data
@return     <type>  (id loss addjustment) )

{ update loss adjustment }
@param      <type>   $data   The data
@return     boolean

{ delete loss adjustment }
@param      <type>   $id     The identifier
@return     boolean

Gets the loss adjustment.
@param      string  $id     The identifier
@return     <type>  The loss adjustment.

Gets the loss adjustment detailt by masterid.
@param      string  $id     The identifier
@return     <type>  The loss adjustment detailt by masterid.

{ change adjust }
@param      <type>  $id     The identifier

@param array data

generate commodity barcode
@return     string

delete goods receipt
@param  [integer] $id
@return [redirect]

delete goods delivery
@param  [integer] $id
@return [redirect]

check format date Y-m-d
@param      String   $date   The date
@return     boolean

Gets the taxes.
@return     <array>  The taxes.

get invoice by customer
@param  [type] $data 
@return array

Gets the taxes.
@return     <array>  The taxes.

get goods delivery from invoice
@param  [integer] $invoice_id 
@return array

get invoices
@param  boolean $id 
@return array

update goods delivery
@param [type]  $data 
@param boolean $id

update goods receipt
@param  array  $data 
@param  boolean $id   
@return [type]

get commodity in_warehouse
@param  array $warehouse 
@return array

get commodity alert
@param  integer $status 
@return array

get inventory by commodity
@param  integer $commodity_id 
@return object

check inventory min
@param  integer $commodity_id 
@return boolean

get item group
@return array

list subgroup by group
@param  integer $group 
@return string

update warehouse selling price profif ratio
@param  array $data 
@return boolean

update profit rate by purchase price sale
@param  array $data 
@return boolean

update rules for rounding prices
@param  array $data 
@return boolean

get average price inventory
@param  integer $commodity_id     
@param  integer $sale_price       
@param  integer $profif_ratio_old 
@return array

{ update purchase setting }
@param      <type>   $data   The data
@return     boolean

auto create goods receipt with purchase order
@param  array $data

update goods receipt warehouse
@param  array $data 
@return boolean

get itemid from name
@param  string $name 
@return integer

get tax id from taxname taxrate
@param  string $taxname 
@param  string $taxrate 
@return integer

auto_create_goods_delivery_with_invoice
@param  integer $invoice_id

add goods delivery from invoice
@param array $data_insert

add inventory from invoices
@param array $data

copyinvoice
@param  integer $invoice_id 
@return array

get commodity active
@return array

get job position training de
@param  integer $id 
@return object

revert goods receipt
@param  string $value 
@return [type]

revert goods delivery
@param  integer $goods_delivery 
@return

revert inventory manage
@param  string $value 
@return [type]

revert_goods_transaction_detail
@param  string $value 
@return [type]

update goods delivery approval
@param  array  $data 
@param  boolean $id

get unitid from commodity name
@param  string $name 
@return integer

get warranty from commodity name
@param  string $name 
@return string

get unitid from commodity id
@param  integer $id 
@return integer

get warranty from commodity id
@param  integer $id 
@return string

get shipping address from invoice
@param  integer $invoice_id 
@return string

check item without checking warehouse
@param  integer $id 
@return boolean

import xlsx opening stock
@param  array $data 
@return integer

caculator purchase price
@return json

caculator sale price
@return float

caculator purchase price model
@return float

get list item tags
@param  integer $id 
@return [type]

delete tag item
@param  integer $tag_id 
@return [type]

inventory_cancel_invoice
@param  integer $invoice_id

items send notification inventory warning
@return boolean

get item tag filter
@return array

check inventory delivery voucher
@param  array $data 
@return string

update po detail quantity
@param  integer $po_id                
@param  array $goods_receipt_detail

array commodity id active
@return array

get inventory min cron
@param  integer $id 
@return [type]

check lost adjustment before save
@param  array $data 
@return boolean

update inventory setting
@param  array $data 
@return boolean

invoice update delete goods delivery detail
@param  integer $invoice_id 
@return

revert goods delivery from invoice update
@param  integer $goods_delivery 
@return [type]

add_goods delivery from invoice update
@param array $data_insert

add internal delivery
@param array $data

create internal delivery code
@return [type]

get internal delivery
@param  integer $id 
@return array

get internal delivery detail
@param  integer $id
@return array

delete internal delivery
@param  integer $id 
@return boolean

update internal delivery
@param  array $data 
@param  integer $id   
@return boolean

approval internal delivery detail
@param  array $data 
@return [type]

add one warehouse
@param [type] $data

update color
@param  array $data
@param  integer $id
@return boolean

get inventory by warehouse
@param  integer $warehouse_id 
@return array

get invoices goods delivery
@return mixed

get purchase request
@param  integer $pur_order
@return array

get pr order delivered
@return [type]

get client lead
@param  string $id    
@param  array  $where 
@return array

wh search leads
@param  string  $q     
@param  integer $limit 
@param  array   $where 
@return array

wh get client
@param  string $id    
@param  array  $where 
@return array

Gets the file.
@param      <type>   $id      The file id
@param      boolean  $rel_id  The relative identifier
@return     boolean  The file.

get custom fields warehouse
@param  boolean $id 
@return [type]

add custom fields warehouse
@param array $data

update custom fields warehouse
@param  array $data 
@param  integer $id   
@return [type]

delete custom fields warehouse
@param integer $id 
@return [type]

check warehouse custom fields
@param  [type] $data 
@return [type]

check warehouse custom fields one
@param  integer $custom_fields_id 
@return [type]

get adjustment stock quantity
@param  [type] $warehouse_id 
@param  [type] $commodity_id 
@param  [type] $lot_number   
@param  [type] $expiry_date  
@return [type]

delivery note get data send mail
@param  [type] $id 
@return [type]

get tags name
@param  [type] $id 
@return [type]

send delivery note
@param  [type] $data 
@return [type]

check sku duplicate
@param  [type] $data 
@return [type]

stock internal delivery pdf
@param  [type] $internal 
@return [type]

get stock internal delivery pdf_html
@param  [type] $internal_delivery_id 
@return [type]

get stock internal delivery pdf_html
@param  [type] $internal_delivery_id 
@return [type]

getBarcode
@param  [type] $sample 
@return [type]

get purchase price from commodity id
@param  [type] $id 
@return [type]

get list parent item
@return [type]

get variation html
@param  [type] $id 
@return [type]

parent variation sample html
@return [type]

get variation from parent item
@param  [type] $data 
@return [type]

item to variation
@param  [type] $array_value 
@return [type]

row item to variation
@param  [type] $item_value 
@return [type]

get commodity id from barcode
@param  [type] $barcode 
@return [type]

get parent variation html
@param  [type] $variation_value 
@return [type]

{ update warehouse setting }
@param         $data   The data
@return     boolean

Gets the product by parent identifier.
@param        $parent_id  The parent identifier
@return       The product by parent identifier.

get inventory quantity by warehouse variant
@param  [type] $commodity_id 
@return [type]

get inventory quantity by warehouse
@param  [type] $commodity_id 
@return [type]

get quantity inventory group by
@param  [type] $warehouse_id 
@param  [type] $commodity_id 
@return [type]

add opening stock
@param [type] $data

wh get activity log
@param  [type] $id   
@param  [type] $type 
@return [type]

log wh activity
@param  [type] $id              
@param  [type] $description     
@param  string $additional_data 
@return [type]

delete activitylog
@param  [type] $id 
@return [type]

get taxe value by ids
@param  [type] $id 
@return [type]

copy product image
@param  [type] $id 
@return [type]

delete attachment file
@param  [type] $attachment_id 
@param  [type] $folder_name   
@return [type]

Gets the html tax receip.

Gets the tax name.
@param        $tax    The tax
@return     string  The tax name.

{ tax rate by id }
@param        $tax_id  The tax identifier

get purchase price from commodity code
@param  [type]  $commodity_code 
@param  boolean $sale_price     
@return [type]

commodity udpate profit rate
@param  [type] $id      
@param  [type] $percent 
@param  [type] $type    
@return [type]

get warehourse attachments
@param  integer $commodity_id 
@return array

{ clone_item }

add commodity one item
@param array $data
@return integer

item_attachments
@return [type]

arr inventory min
@param  [type] $commodity_id 
@return [type]

arr commodity group
@return [type]

arr warehouse by item
@return [type]

arr_warehouse_id
@return [type]

arr inventory number by item
@return [type]

ar item have variation
@return [type]

get parent item
@return [type]

wh parent item search
@param  [type] $q 
@return [type]

create goods receipt row template
@param  array   $warehouse_data   
@param  string  $name             
@param  string  $commodity_name   
@param  string  $warehouse_id     
@param  string  $quantities       
@param  string  $unit_name        
@param  string  $unit_price       
@param  string  $taxname          
@param  string  $lot_number       
@param  string  $date_manufacture 
@param  string  $expiry_date      
@param  string  $commodity_code   
@param  string  $unit_id          
@param  string  $tax_rate         
@param  string  $tax_money        
@param  string  $goods_money      
@param  string  $note             
@param  string  $item_key         
@param  string  $sub_total        
@param  string  $tax_name         
@param  string  $tax_id           
@param  boolean $is_edit          
@return [type]

get taxes dropdown template
@param  [type]  $name     
@param  [type]  $taxname  
@param  string  $type     
@param  string  $item_key 
@param  boolean $is_edit  
@param  boolean $manual   
@return [type]

[get taxes dropdown template v2
@param  [type]  $name     
@param  [type]  $taxname  
@param  string  $type     
@param  string  $item_key 
@param  boolean $is_edit  
@param  boolean $manual   
@return [type]

wh get tax rate
@param  [type] $taxname 
@return [type]

create internal delivery row template
@param  array   $warehouse_data     
@param  string  $name               
@param  string  $commodity_name     
@param  string  $from_stock_name    
@param  string  $to_stock_name      
@param  string  $available_quantity 
@param  string  $quantities         
@param  string  $unit_name          
@param  string  $unit_price         
@param  string  $commodity_code     
@param  string  $unit_id            
@param  string  $into_money         
@param  string  $note               
@param  string  $item_key           
@param  boolean $is_edit            
@return [type]

wh uniqueByKey
@param  [type] $array 
@param  [type] $key   
@return [type]

create goods delivery row template
@param  array   $warehouse_data       
@param  string  $name                 
@param  string  $commodity_name       
@param  string  $warehouse_id         
@param  string  $available_quantity   
@param  string  $quantities           
@param  string  $unit_name            
@param  string  $unit_price           
@param  string  $taxname              
@param  string  $commodity_code       
@param  string  $unit_id              
@param  string  $tax_rate             
@param  string  $total_money          
@param  string  $discount             
@param  string  $discount_money       
@param  string  $total_after_discount 
@param  string  $guarantee_period     
@param  string  $expiry_date          
@param  string  $lot_number           
@param  string  $note                 
@param  string  $sub_total            
@param  string  $tax_name             
@param  string  $tax_id               
@param  string  $item_key             
@param  boolean $is_edit              
@return [type]

get html tax delivery
@param  [type] $id 
@return [type]

packing list get goods delivery
@return [type]

packing list get delivery note
@param  [type] $delivery_id 
@return [type]

create packing list code
@return [type]

add packing list
@param [type]  $data 
@param boolean $id

get packing list
@param  [type] $id 
@return [type]

get goods delivery detail
@param  integer $id
@return array

update packing list
@param  [type]  $data 
@param  boolean $id   
@return [type]

delete packing list
@param  [type] $id 
@return [type]

filter arr inventory min max
@return [type]

packing list partial or total
@param  [type] $delivery_id          
@param  [type] $packing_list_details 
@return [type]

get html tax packing list
@param  [type] $id 
@return [type]

check packing list send request
@param  [type] $data 
@return [type]

packing list pdf
@param  [type] $packing_list 
@return [type]

get packing list by deivery note
@param  [type] $delivery_id 
@return [type]

delivery status mark as
@param  [type] $status 
@param  [type] $id     
@param  [type] $type   
@return [type]

get shipment by order
@param  [type] $order_id 
@return [type]

wh get shipment activity log
@param  [type] $shipment_id 
@return [type]

create shipment from order
@param  [type] $order_id 
@return [type]

update shipment status
@param  [type] $id   
@param  array  $data 
@return [type]

check update shipment when delivery note approval
@param  [type] $delivery_id 
@return [type]

wh get activity log by id
@param  [type] $id 
@return [type]

update activity log
@param  [type] $id   
@param  [type] $data 
@return [type]

create order return code
@return [type]

get order return
@param  [type] $id 
@return [type]

get order return detail
@param  [type] $id 
@return [type]

delete order return
@param  [type] $id 
@return [type]

get omni sale order list
@return array

omni sale detail order return
@param  [type] $id 
@return [type]

[add add order return
@param [type] $data     
@param [type] $rel_type

update order return
@param  [type]  $data     
@param  [type]  $rel_type 
@param  boolean $id       
@return [type]

get html tax order return
@param  [type] $id 
@return [type]

order return pdf
@param  [type] $order_return 
@return [type]

order return create stock import
@param  [type] $order_return_id 
@return [type]

order return create stock export
@param  [type] $order_return_id 
@return [type]

purchasing return order create stock export
@param  [type] $order_return_id 
@return [type]

order return get inventory receipt
@return [type]

order return get purchasing order
@return [type]

order return get inventory delivery
@return [type]

order return get sale order
@return [type]

order return get related data
@param  [type] $data 
@return [type]

order return get related data detail
@param  [type] $data 
@return [type]

create delivery order return code
@return [type]

order return render warehouse modal
@param  [type] $id 
@return [type]

add serial number
@param [type] $commodity_id        
@param [type] $warehouse_id        
@param [type] $inventory_manage_id 
@param [type] $str_serial_number

revert serial number
@param  [type] $commodity_id        
@param  [type] $warehouse_id        
@param  [type] $inventory_manage_id 
@param  [type] $str_serial_number   
@return [type]

get serial number for delivery note
@param  [type] $commodity_id        
@param  [type] $warehouse_id        
@param  [type] $inventory_manage_id 
@param  [type] $quantity            
@return [type]

get list temporaty serial numbers
@param  [type] $commodity_id 
@param  [type] $warehouse_id 
@param  [type] $quantity     
@return [type]

get serial number for internal delivery note
@param  [type] $commodity_id             
@param  [type] $warehouse_id             
@param  [type] $inventory_manage_id      
@param  [type] $quantity                 
@param  [type] $serial_number            
@param  [type] $goods_delivery_detail_id 
@param  [type] $commodity_name           
@return [type]

loss adjustment delete serial number
@param  [type] $commodity_id                
@param  [type] $warehouse_id                
@param  [type] $inventory_manage_id         
@param  [type] $quantity                    
@param  [type] $serial_number               
@param  [type] $internal_delivery_detail_id 
@param  [type] $commodity_name              
@return [type]

get inventory warehouse by commodity
@param  boolean $commodity_id 
@return [type]

create shipment from delivery note
@param  [type] $delivery_id 
@return [type]

warehouse check update shipment when delivery note approval
@param  [type]  $rel_id      
@param  string  $status      
@param  string  $rel_type    
@param  integer $delivery_id 
@return [type]

get shipment by delivery
@param  [type] $delivery_id 
@return [type]

get shipment by client
@param  [type] $client_id 
@return [type]

wh client get shipment activity log
@param  [type] $shipment_id 
@return [type]

warranty period pdf
@param  [type] $warranty_period 
@return [type]

get warranty period data
@param  [type] $data 
@return [type]

notify customer shipment status
@param  [type] $data 
@return [type]

email content from shipment status
@param  [type] $status        
@param  [type] $companyname   
@param  [type] $shipment_code 
@param  [type] $shipment_id   
@return [type]

get shipment by hash
@param  [type] $hash 
@return [type]

update warehouse return polices
@param  [type] $data 
@return [type]

create_approval_setting_row_template
@param  array  $staff_data 
@param  string $name       
@param  string $approver   
@param  string $staff      
@param  string $action     
@param  string $item_key   
@return [type]

wh_create_notification
@param  [type]  $event      
@param  [type]  $user_id    
@param  array   $options    
@param  integer $to_user_id 
@return [type]

update fee return order
@param  [type] $data 
@return [type]

## References

**Models Used**
- `purchase_model`
- `departments_model`
- `staff_model`
- `currencies_model`
- `clients_model`
- `caculator_profit_rate_model`
- `caculator_purchase_price_model`
- `caculator_sale_price_model`
- `Users_model`
- `invoices_model`
- `misc_model`
- `omni_sales_model`
- `emails_model`

**Database Tables (inferred)**
- `the`
- `supplier`
- `PO`
- `purchase`
- `delivery`
- `id`
- `fomular`
- `subsequent`
- `tmp`
- `sku`
- `invoice`
- `name`
- `taxname`
- `invoices`
- `inventory`
- `commodity`
- `parent`
- `barcode`
- `default`
- `order`
- `Purchase`
- `Sales`
- `omni_sales`
- `shipment`
- `plugin`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\Warehouse\Models\Warehouse_model.php`

**Classes**:
- `Warehouse\Models\Warehouse_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `prefixed_table_fields_wildcard($table, $alias, $field)`
- `warehouse_run_query($query_string)`
- `get_unit_add_commodity()`
- `wh_get_grouped($can_be = '', $search_all = false)`
- `count_all_items($where = '')`
- `get_table_data($table, $dataPost, $params = [])`
- `wh_commodity_code_search($q, $type, $can_be = '', $search_all = false)`
- `add_commodity_type($data, $id = false)`
- `get_commodity_type($id = false)`
- `get_commodity_type_add_commodity()`
- `delete_commodity_type($id)`
- `add_unit_type($data, $id = false)`
- `get_unit_type($id = false)`
- `get_units_code_name()`
- `get_warehouse_code_name()`
- `delete_unit_type($id)`
- `add_size_type($data, $id = false)`
- `get_size_type($id = false)`
- `get_size_add_commodity()`
- `delete_size_type($id)`
- `add_style_type($data, $id = false)`
- `get_style_type($id = false)`
- `get_style_add_commodity()`
- `delete_style_type($id)`
- `add_body_type($data, $id = false)`
- `get_body_type($id = false)`
- `get_body_add_commodity()`
- `delete_body_type($id)`
- `add_commodity_group_type($data, $id = false)`
- `get_commodity_group_type($id = false)`
- `get_commodity_group_add_commodity()`
- `delete_commodity_group_type($id)`
- `add_warehouse($data, $id = false)`
- `get_warehouse($id = false)`
- `get_all_warehouse($id = false)`
- `get_warehouse_add_commodity()`
- `delete_warehouse($id)`
- `add_commodity($data, $id = false)`
- `get_commodity($id = false, $where = '')`
- `get_commodity_code_name()`
- `get_items_code_name()`
- `delete_commodity($id)`
- `get_commodity_hansometable($id = false)`
- `get_commodity_hansometable_by_barcode($commodity_barcode)`
- `create_goods_code()`
- `add_goods_receipt($data, $user_id)`
- `get_tax_rate_by_id($tax_ids)`
- `get_goods_receipt($id)`
- `get_goods_receipt_detail($id)`
- `get_pur_request($pur_order)`
- `get_staff($id = '', $where = [])`
- `update_status_goods($pur_orders_id)`
- `add_goods_transaction_detail($data, $status)`
- `add_inventory_manage($data, $status)`
- `check_commodity_exist_inventory($warehouse_id, $commodity_id, $lot_number, $expiry_date)`
- `get_inventory_commodity($commodity_id)`
- `add_inventory_min($data)`
- `get_inventory_min($id = false)`
- `setting_get_inventory_min()`
- `get_inventory_min_by_commodity_id($id = false)`
- `update_inventory_min($data)`
- `get_commodity_warehouse($commodity_id = false)`
- `get_total_inventory_commodity($commodity_id = false)`
- `add_approval_setting($data)`
- `edit_approval_setting($id, $data)`
- `delete_approval_setting($id)`
- `get_approval_setting($id = '')`
- `get_staff_sign($rel_id, $rel_type)`
- `check_approval_details($rel_id, $rel_type)`
- `get_list_approval_details($rel_id, $rel_type)`
- `add_activity_log($data)`
- `get_activity_log($rel_id, $rel_type)`
- `delete_activity_log($rel_id, $rel_type)`
- `send_request_approve($data)`
- `get_approve_setting($type, $status = '')`
- `delete_approval_details($rel_id, $rel_type)`
- `get_staff_id_by_approve_value($data, $approve_value)`
- `update_approval_details($id, $data)`
- `update_approve_request($rel_id, $rel_type, $status)`
- `invoice_delivery_partial_or_total($invoice_id, $goods_delivery_detail)`
- `stock_import_pdf($purchase)`
- `get_stock_import_pdf_html($goods_receipt_id)`
- `send_mail($data ,$staffid = '')`
- `create_goods_delivery_code()`
- `add_goods_delivery($data, $id = false)`
- `commodity_goods_delivery_change($id = false)`
- `get_commodity_delivery_hansometable_by_barcode($commodity_barcode)`
- `get_goods_delivery($id)`
- `get_goods_delivery_detail($id)`
- `get_vendor($id = '', $where = [])`
- `get_vendor_ajax($pur_orders_id)`
- `stock_export_pdf($delivery)`
- `get_stock_export_pdf_html($goods_delivery_id)`
- `get_stock_summary_report($data)`
- `stock_summary_report_pdf($stock_report)`
- `get_stock_summary_report_view($data)`
- `get_quantity_inventory($warehouse_id, $commodity_id)`
- `get_warehourse_attachments($commodity_id)`
- `add_commodity_one_item($data)`
- `create_variant_product($parent_id, $data, $variant)`
- `variant_generator($variants, $i = 0)`
- `update_commodity_one_item($data, $id)`
- `get_sub_group($id = false)`
- `add_sub_group($data, $id = false)`
- `delete_sub_group($id)`
- `import_xlsx_commodity($data, $flag_insert_id)`
- `get_commodity_attachments_delete($id)`
- `delete_commodity_file($attachment_id)`
- `get_color($id = false)`
- `create_sku_code($commodity_group, $sub_group, $flag_insert_id = false)`
- `add_color($data)`
- `update_color($data, $id)`
- `delete_color($id)`
- `get_color_add_commodity()`
- `add_loss_adjustment($data)`
- `update_loss_adjustment($data)`
- `delete_loss_adjustment($id)`
- `get_loss_adjustment($id = '')`
- `get_loss_adjustment_detailt_by_masterid($id = '')`
- `change_adjust($id)`
- `get_inventory_valuation_report_view($data)`
- `generate_commodity_barcode()`
- `delete_goods_receipt($id)`
- `delete_goods_delivery($id)`
- `check_format_date($date)`
- `get_taxes()`
- `get_invoices_by_customer($data)`
- `get_taxe_value($id)`
- `get_goods_delivery_from_invoice($invoice_id)`
- `get_invoices($id = false)`
- `update_goods_delivery($data, $id = false)`
- `update_goods_receipt($data, $user_id)`
- `get_commodity_in_warehouse($warehouse)`
- `get_commodity_alert($status)`
- `get_inventory_by_commodity($commodity_id)`
- `check_inventory_min($commodity_id)`
- `get_item_group()`
- `list_subgroup_by_group($group)`
- `update_warehouse_selling_price_profif_ratio($data)`
- `update_profit_rate_by_purchase_price_sale($data)`
- `update_rules_for_rounding_prices($data)`
- `get_average_price_inventory($commodity_id, $sale_price, $profif_ratio_old, $warehouse_filter='')`
- `update_auto_create_received_delivery_setting($data)`
- `auto_create_goods_receipt_with_purchase_order($data)`
- `update_goods_receipt_warehouse($data)`
- `add_goods_receipt_from_purchase_order($data_insert)`
- `get_itemid_from_name($name)`
- `get_tax_id_from_taxname_taxrate($taxname, $taxrate)`
- `auto_create_goods_delivery_with_invoice($invoice_id, $invoice_update='')`
- `add_goods_delivery_from_invoice($data_insert, $invoice_id ='')`
- `add_inventory_from_invoices($data)`
- `copy_invoice($invoice_id)`
- `get_commodity_active()`
- `get_item_longdescriptions($id)`
- `revert_goods_receipt($goods_receipt)`
- `revert_goods_delivery($goods_delivery)`
- `revert_inventory_manage($data, $status, $invoice = false)`
- `revert_goods_transaction_detail($data, $status)`
- `update_goods_delivery_approval($data, $id = false)`
- `get_unitid_from_commodity_name($name)`
- `get_warranty_from_commodity_name($name)`
- `get_unitid_from_commodity_id($id)`
- `get_warranty_from_commodity_id($id)`
- `get_shipping_address_from_invoice($invoice_id)`
- `check_item_without_checking_warehouse($id)`
- `import_xlsx_opening_stock($data)`
- `caculator_profit_rate_model($purchase_price, $sale_price)`
- `caculator_sale_price_model($purchase_price, $profit_rate)`
- `caculator_purchase_price_model($profit_rate, $sale_price)`
- `get_list_item_tags($id)`
- `delete_tag_item($tag_id)`
- `inventory_cancel_invoice($invoice_id)`
- `items_send_notification_inventory_warning()`
- `get_item_tag_filter()`
- `check_inventory_delivery_voucher($data)`
- `update_po_detail_quantity($po_id, $goods_receipt_detail)`
- `array_commodity_id_active()`
- `get_inventory_min_cron($id)`
- `check_lost_adjustment_before_save($data)`
- `update_inventory_setting($data)`
- `invoice_update_delete_goods_delivery_detail($invoice_id)`
- `revert_goods_delivery_from_invoice_update($goods_delivery)`
- `add_goods_delivery_from_invoice_update($invoice_id, $data_insert)`
- `add_internal_delivery($data)`
- `create_internal_delivery_code()`
- `get_internal_delivery($id)`
- `get_internal_delivery_detail($id)`
- `delete_internal_delivery($id)`
- `update_internal_delivery($data, $id)`
- `approval_internal_delivery_detail($data)`
- `check_internal_delivery_note_send_request($data)`
- `add_one_warehouse($data)`
- `update_one_warehouse($data, $id)`
- `get_inventory_by_warehouse($warehouse_id)`
- `get_invoices_goods_delivery($type)`
- `goods_delivery_get_pur_order($pur_order)`
- `get_pr_order_delivered()`
- `get_client_lead($q, $id = '')`
- `wh_search_leads($q, $limit = 0, $where = [])`
- `wh_get_client($where = [])`
- `get_file($id, $rel_id = false)`
- `get_custom_fields_warehouse($id = false)`
- `add_custom_fields_warehouse($data)`
- `update_custom_fields_warehouse($data, $id)`
- `delete_custom_fields_warehouse($id)`
- `check_warehouse_custom_fields($data)`
- `check_warehouse_custom_fields_one($custom_fields_id)`
- `get_adjustment_stock_quantity($warehouse_id, $commodity_id, $lot_number, $expiry_date)`
- `delivery_note_get_data_send_mail($id)`
- `get_tags_name($id)`
- `send_delivery_note($data)`
- `check_sku_duplicate($data)`
- `stock_internal_delivery_pdf($internal)`
- `get_stock_internal_delivery_pdf_html($internal_delivery_id)`
- `print_barcode_pdf($print_barcode)`
- `get_print_barcode_pdf_html($data)`
- `getBarcode($sample)`
- `get_purchase_price_from_commodity_id($id, $sale_price = false)`
- `get_list_parent_item($data)`
- `get_variation_html($id)`
- `parent_variation_sample_html()`
- `parent_attributes_sample_html($parent_variation)`
- `get_variation_from_parent_item($data)`
- `item_to_variation($array_value)`
- `row_item_to_variation($item_value)`
- `get_commodity_id_from_barcode($barcode)`
- `get_parent_variation_html($variation_value)`
- `update_pc_options_setting($data)`
- `get_product_by_parent_id($parent_id)`
- `get_inventory_quantity_by_warehouse_variant($commodity_id)`
- `get_inventory_quantity_by_warehouse($commodity_id)`
- `get_quantity_inventory_group_by($warehouse_id, $commodity_id)`
- `add_opening_stock($data)`
- `wh_get_activity_log($id, $rel_type)`
- `log_wh_activity($id, $rel_type, $description, $date = '')`
- `delete_activitylog($id)`
- `get_taxe_value_by_ids($id)`
- `copy_product_image($id)`
- `delete_attachment_file($attachment_id, $folder_name)`
- `get_html_tax_receip($id)`
- `get_tax_name($tax)`
- `tax_rate_by_id($tax_id)`
- `get_purchase_price_from_commodity_code($commodity_code, $sale_price = false)`
- `commodity_udpate_profit_rate($id, $percent, $type)`
- `get_item_attachments($commodity_id)`
- `clone_item($id)`
- `add_commodity_one_item_clone($data)`
- `item_attachments()`
- `arr_inventory_min($inventory = false)`
- `arr_commodity_group()`
- `arr_warehouse_by_item()`
- `arr_warehouse_id()`
- `arr_inventory_number_by_item()`
- `arr_item_have_variation()`
- `get_parent_item_grouped($id = false)`
- `wh_parent_item_search($q)`
- `get_item_v2($id = '')`
- `create_goods_receipt_row_template($warehouse_data = [], $name = '', $commodity_name = '', $warehouse_id = '', $quantities = '', $unit_name = '', $unit_price = '', $taxname = '', $lot_number = '', $date_manufacture = '', $expiry_date = '', $commodity_code = '', $unit_id = '', $tax_rate = '', $tax_money = '', $goods_money = '', $note = '', $item_key = '', $sub_total = '', $tax_name = '', $tax_id = '', $is_edit = false, $serial_number = '')`
- `get_taxes_dropdown_template($name, $taxname, $type = '', $item_key = '', $is_edit = false, $manual = false)`
- `get_taxes_dropdown_template_v2($name, $taxname, $type = '', $item_key = '', $is_edit = false, $manual = false)`
- `wh_get_tax_rate($taxname)`
- `create_internal_delivery_row_template($warehouse_data = [], $name = '', $commodity_name = '', $from_stock_name = '', $to_stock_name = '', $available_quantity = '', $quantities = '', $unit_name = '', $unit_price = '', $commodity_code = '', $unit_id = '', $into_money = '', $note = '', $item_key = '', $is_edit = false, $serial_number = '')`
- `create_loss_adjustment_row_template($name = '', $commodity_name = '', $available_quantity = '', $quantities = '', $unit_name = '', $expiry_date = '', $lot_number = '', $commodity_code = '', $unit_id = '', $item_key = '', $is_edit = false, $serial_number = '')`
- `wh_uniqueByKey($array, $key)`
- `create_goods_delivery_row_template($warehouse_data = [], $name = '', $commodity_name = '', $warehouse_id = '', $available_quantity = '', $quantities = '', $unit_name = '', $unit_price = '', $taxname = '',  $commodity_code = '', $unit_id = '', $tax_rate = '', $total_money = '', $discount = '', $discount_money = '', $total_after_discount = '', $guarantee_period = '', $expiry_date = '', $lot_number = '', $note = '',  $sub_total = '', $tax_name = '', $tax_id = '', $item_key = '',$is_edit = false, $is_purchase_order = false, $serial_number = '')`
- `get_html_tax_delivery($id)`
- `packing_list_get_goods_delivery()`
- `create_packing_list_row_template($delivery_detail_id = '', $name = '', $commodity_name = '', $quantities = '', $unit_name = '', $unit_price = '', $taxname = '',  $commodity_code = '', $unit_id = '', $tax_rate = '', $total_amount = '', $discount = '', $discount_total = '', $total_after_discount = '', $sub_total = '', $tax_name = '', $tax_id = '', $item_key = '',$is_edit = false, $max_qty = false, $serial_number = '')`
- `packing_list_get_delivery_note($delivery_id)`
- `create_packing_list_code()`
- `add_packing_list($data, $id = false)`
- `get_packing_list($id)`
- `get_packing_list_detail($id)`
- `update_packing_list($data, $id = false)`
- `delete_packing_list($id)`
- `filter_arr_inventory_min_max()`
- `packing_list_partial_or_total($delivery_id, $packing_list_details)`
- `get_html_tax_packing_list($id)`
- `check_packing_list_send_request($data)`
- `packing_list_pdf($packing_list)`
- `get_packing_list_by_deivery_note($delivery_id)`
- `delivery_status_mark_as($status, $id, $type)`
- `get_shipment_by_order($order_id)`
- `wh_get_shipment_activity_log($shipment_id)`
- `create_shipment_from_order($order_id)`
- `update_shipment_status($id, $data = [])`
- `check_update_shipment_when_delivery_note_approval($rel_id, $status = 'quality_check', $rel_type = 'delivery_approval', $delivery_id = 0)`
- `wh_get_activity_log_by_id($id)`
- `update_activity_log($id, $data)`
- `create_order_return_code()`
- `get_order_return($id)`
- `get_order_return_detail($id)`
- `delete_order_return($id)`
- `create_order_return_row_template($rel_type, $rel_type_detail_id = '', $name = '', $commodity_name = '', $quantities = '', $unit_name = '', $unit_price = '', $taxname = '',  $commodity_code = '', $unit_id = '', $tax_rate = '', $total_amount = '', $discount = '', $discount_total = '', $total_after_discount = '', $reason_return = '', $sub_total = '', $tax_name = '', $tax_id = '', $item_key = '',$is_edit = false, $max_qty = false)`
- `get_omni_sale_order_list()`
- `omni_sale_detail_order_return($id)`
- `add_order_return($data, $rel_type)`
- `update_order_return($data, $rel_type,  $id = false)`
- `get_html_tax_order_return($id)`
- `order_return_pdf($order_return)`
- `order_return_create_stock_import($order_return_id)`
- `sales_return_order_create_stock_import($order_return_id)`
- `purchasing_return_order_create_stock_export($order_return_id, $data_item_warehouse)`
- `order_return_get_inventory_receipt()`
- `order_return_get_purchasing_order()`
- `order_return_get_inventory_delivery()`
- `order_return_get_sale_order()`
- `order_return_get_related_data($data)`
- `order_return_get_related_data_detail($data)`
- `create_delivery_order_return_code()`
- `order_return_render_warehouse_modal($id)`
- `add_serial_number($commodity_id, $warehouse_id, $inventory_manage_id, $str_serial_number)`
- `revert_serial_number($commodity_id, $warehouse_id, $inventory_manage_id, $str_serial_number)`
- `get_serial_number_for_delivery_note($commodity_id, $warehouse_id, $inventory_manage_id, $quantity, $serial_number, $goods_delivery_detail_id, $commodity_name)`
- `get_list_temporaty_serial_numbers($commodity_id, $warehouse_id, $quantity = '', $where = [])`
- `get_serial_number_for_internal_delivery_note($commodity_id, $warehouse_id, $inventory_manage_id, $quantity, $serial_number, $internal_delivery_detail_id, $commodity_name)`
- `loss_adjustment_delete_serial_number($commodity_id, $warehouse_id, $inventory_manage_id, $quantity, $serial_number)`
- `get_inventory_warehouse_by_commodity($commodity_id = false)`
- `create_shipment_from_delivery_note($delivery_id)`
- `warehouse_check_update_shipment_when_delivery_note_approval($rel_id, $status = 'quality_check', $rel_type = 'delivery_approval', $delivery_id = 0)`
- `get_shipment_by_delivery($delivery_id)`
- `get_shipment_by_client($client_id)`
- `wh_client_get_shipment_activity_log($shipment_id)`
- `warranty_period_pdf($warranty_period)`
- `get_warranty_period_data($data)`
- `notify_customer_shipment_status($delivery_id)`
- `email_content_from_shipment_status($status, $companyname, $shipment_code, $shipment_id)`
- `get_shipment_by_hash($hash)`
- `update_warehouse_return_polices($data)`
- `create_approval_setting_row_template($staff_data = [], $name = '', $approver = 'staff', $staff = '', $action = '', $item_key = '')`
- `wh_create_notification($event, $user_id, $options = array()`
- `update_fee_return_order($data)`

