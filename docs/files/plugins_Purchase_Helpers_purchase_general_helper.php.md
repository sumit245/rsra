# plugins\Purchase\Helpers\purchase_general_helper.php

- Path: `plugins\Purchase\Helpers\purchase_general_helper.php`
- Type: PHP
- Size: 31461 bytes

## Summary (from docblocks)

link the css files 

@param array $array
@return print css links

link the css files 

@param array $array
@return print css links

Gets the status approve.
@param      integer|string  $status  The status
@return     string          The status approve.

Gets the po html by pur request.
@param  $pur_request  The pur request

wh get item variatiom
@param  [type] $id 
@return [type]

pur get unit name
@param  boolean $id 
@return [type]

{ pur get currency rate }

Gets the item identifier by description.
@param        $des       The description
@param        $long_des  The long description
@return     string  The item identifier by description.

Function that format task status for the final user
@param  string  $id    status id
@param  boolean $text
@param  boolean $clean
@return string

Gets the status approve string.
@param      integer  $status  The status
@return     string   The status approve string.

Gets the item hp.
@param      string  $id     The identifier
@return     <type>  a item or list item.

Gets the pdf logo url.
@return       The pdf logo url.

warehouse process digital signature image
@param  string $partBase64
@param  string $path
@param  string $image_name
@return boolean

{ handle purchase order file }
@param      string   $id     The identifier
@return     boolean

{ handle purchase order file }
@param      string   $id     The identifier
@return     boolean

{ function_description }
@return     <type>  ( description_of_the_return_value )

{ format pur estimate number }
@param      <type>  $id     The identifier
@return     string  ( estimate number )

Gets the vendor category html.
@param      string  $category  The category

Gets the vendor cate name by identifier.
@param        $id     The identifier
@return     string  The vendor cate name by identifier.

Gets the vendor company name.
@param      string   $userid                 The userid
@param      boolean  $prevent_empty_company  The prevent empty company
@return     string   The vendor company name.

{ handle purchase order file }
@param      string   $id     The identifier
@return     boolean

Gets the pur order subject.
@param      <type>  $pur_order  The pur order
@return     string  The pur order subject.

Gets the payment request status by inv.
@param        $id     The identifier
@return     string  The payment request status by inv.

Gets the tax rate item.
@param      bool    $id     The identifier
@return       The tax rate item.

Gets the vendor currency.
@param        $vendor_id  The vendor identifier

{ purchase invoice left to pay }
@param      <type>   $id     The purchase order
@return     integer  ( purchase order left to pay )

{ handle purchase order file }
@param      string   $id     The identifier
@return     boolean

Gets the payment mode by identifier.
@param      <type>  $id     The identifier
@return     string  The payment mode by identifier.

Gets the pur invoice number.
@param        $id     The identifier
@return     string  The pur invoice number.

{ purorder inv left to pay }
@param        $pur_order  The pur order

Gets the invoice currency identifier.
@param        $invoice_id  The invoice identifier
@return     int     The invoice currency identifier.

Determines whether the specified identifier is empty vendor company.
@param      <type>   $id     The identifier
@return     boolean  True if the specified identifier is empty vendor company, False otherwise.

Gets the vendor user identifier.

get unit type
@param  integer $id
@return array or row

{ handle item password file }
@param      string   $id     The identifier
@return     boolean

Performs fixes when $_FILES is array and the index is messed up
Eq user click on + then remove the file and then added new file
In this case the indexes will be 0,2 - 1 is missing because it's removed but they should be 0,1
@param  string $index_name $_FILES index name
@return null

{ vendor item images }
@param        $item_id  The item identifier

get group name
@param  integer $id
@return array or row

get tax rate
@param  integer $id
@return array or row

get commodity name
@param  integer $id
@return array or row

## Symbols

# Symbols

**Files documented**: 1

## `plugins\Purchase\Helpers\purchase_general_helper.php`

**Functions/Methods**:
- `purchase_load_css(array $array)`
- `purchase_load_js(array $array)`
- `get_unit_type($id = false)`
- `get_status_approve($status)`
- `get_po_html_by_pur_request($pur_request)`
- `get_base_currency()`
- `pur_convert_item_taxes($tax, $tax_rate, $tax_name)`
- `pur_get_item_variatiom($id)`
- `pur_get_unit_name($id = false)`
- `pur_get_currency_rate($currency_str)`
- `get_item_id_by_des($des)`
- `pur_format_approve_status($status, $text = false, $clean = false)`
- `get_status_approve_str($status)`
- `get_item_hp($id = '')`
- `get_pdf_logo_url()`
- `pur_log_notification($event, $options = array()`
- `purchase_process_digital_signature_image($partBase64, $path, $image_name)`
- `handle_purchase_request_file($id)`
- `handle_purchase_estimate_file($id)`
- `max_number_estimates()`
- `format_pur_estimate_number($id)`
- `sales_number_format($number, $format, $applied_prefix, $date)`
- `get_vendor_category_html($category)`
- `get_vendor_cate_name_by_id($id)`
- `get_vendor_company_name($userid, $prevent_empty_company = false)`
- `handle_purchase_order_file($id)`
- `get_pur_order_subject($pur_order)`
- `get_payment_request_status_by_inv($id)`
- `get_tax_rate_item($id = false)`
- `get_vendor_currency($vendor_id)`
- `purinvoice_left_to_pay($id)`
- `handle_pur_invoice_file($id)`
- `get_payment_mode_by_id($id)`
- `get_pur_invoice_number($id)`
- `purorder_inv_left_to_pay($pur_order)`
- `get_invoice_currency_id($invoice_id)`
- `is_empty_vendor_company($id)`
- `get_vendor_user_id()`
- `has_permission($permission, $staffid = '', $can = '')`
- `get_unit_type_item($id = false)`
- `handle_vendor_item_attachment($id)`
- `_file_attachments_index_fix($index_name)`
- `vendor_item_images($item_id)`
- `get_group_name_pur($id = false)`
- `pur_get_tax_rate($id = false)`
- `pur_get_commodity_name($id)`

