# plugins\Purchase\Controllers\Purchase.php

- Path: `plugins\Purchase\Controllers\Purchase.php`
- Type: PHP
- Size: 195821 bytes

## Summary (from docblocks)

This class describes a purchase.

Constructs a new instance.

{ vendors }

{ settings }
@return     view

{ list unit data }

{ delete unit }
@param        $id     The identifier

{ modal unit form }

{ unit save }

{ function_description }

{ modal unit form }

{ commodity group save }

{ delete sub group }
@param        $id     The identifier

{ list subgroup data }

{ modal unit form }

{ sub group save }

{ delete sub group }
@param        $id     The identifier

{ pur order setting }

{ list vendor category data }

{ modal vendor category form }
@return       ( modal vendor category form )

{ sub group save }

{ delete sub group }
@param        $id     The identifier

{ purchase order setting }
@return  json

{ purchase order setting }
@return  json

{ purchase order setting }
@return  json

{ purchase order setting }
@return  json

{ purchase order setting }
@return  json

{ purchase order setting }
@return  json

commodity type modal form
@return [type]

Gets the approval setting row template.

list commodity type data
@return [type]

_make commodity type row
@param  [type] $data
@return [type]

approval setting
@return redirect

table commodity list
@return [type]

Handle bulk actions for commodity list

delete approval setting
@param  integer $id
@return redirect

{ items }

modal form
@return [type]

commodity list add edit
@param  integer $id
@return json

delete modal form
@return [type]

delete modal form
@return [type]

delete modal form
@return [type]

{ delete pur order modal }

delete modal form
@return [type]

delete modal form
@return [type]

delete commodity
@param  integer $id
@return redirect

delete commodity
@param  integer $id
@return redirect

delete commodity
@param  integer $id
@return redirect

delete commodity
@param  integer $id
@return redirect

delete commodity
@param  integer $id
@return redirect

warehouse delete bulk action
@return

{ vendor }
@param      string  $id     The identifier

Determines if vendor code exists.

{ vendor items }

{ vendor items table }

delete vendor items
@param  integer $id
@return redirect

{ new vendor items }

{ group item change }

get commodity
@param  boolean $id
@return array or object

caculator sale price
@return float

caculator purchase price
@return json

caculator purchase price
@return [type]

{ purchase request }

{ table pur request }

{Add or update purchase request from form }

Gets the item by identifier.
@param          $id             The identifier
@param      bool|int  $get_warehouse  The get warehouse
@param      bool      $warehouse_id   The warehouse identifier

Gets the purchase request row template.

Gets the currency rate.

{ coppy sale invoice }

{ coppy sale estimate }

Get purchase request items for auto-population in purchase order

{ view pur request }
@param      <type>  $id     The identifier
@return view

{ purchase request pdf }
@param      <type>  $id     The identifier
@return pdf output

Sends a request approve.
@return  json

Adds a comment to purchase request
@return json

wh_create_notification
@param  array  $data
@return [type]

{ approve request }
@return json

{ purchase request attachment }

{ preview purchase order file }
@param      <type>  $id      The identifier
@param      <type>  $rel_id  The relative identifier
@return  view

{ delete purchase order attachment }
@param      <type>  $id     The identifier

{ share_request_modal }
@param        $pur_request  The pur request

{ share request }
@param        $pur_request_id  The pur request identifier

{ quotations }
@param      string  $id     The identifier
@return     view

{ table pur request }

{ function_description }
@param      string  $id     The identifier
@return     redirect

Gets the quotation row template.

{ estimate by vendor }
@param      <type>  $vendor  The vendor
@return json

{ validate estimate number }

{ view quotation }

Uploads a purchase estimate attachment.
@param      string  $id  The purchase order
@return redirect

{ preview purchase order file }
@param      <type>  $id      The identifier
@param      <type>  $rel_id  The relative identifier
@return  view

{ purchase estimate pdf }

{ change status pur estimate }
@param      <type>  $status  The status
@param      <type>  $id      The identifier
@return json

{ coppy pur request }
@param        $pur_request  The purchase request id
@return json

{ delete purchase order attachment }
@param        $id     The identifier

{ purchase order }
@param      string  $id     The identifier
@return view

view commodity detail
@param  [integer] $commodity_id
@return [type]

{ table pur request }

{ purchase order form }
@param      string  $id     The identifier
@return redirect, view

Gets the purchase order row template.

{ function_description }
@param      <type>  $id     The identifier

Uploads a purchase order attachment.
@param      string  $id  The purchase order
@return redirect

{ preview purchase order file }
@param      <type>  $id      The identifier
@param      <type>  $rel_id  The relative identifier
@return  view

{ delete purchase order attachment }
@param      <type>  $id     The identifier

{ change status pur order }
@param      <type>  $status  The status
@param      <type>  $id      The identifier
@return json

{ change Delivery status pur order }
@param      <type>  $status  The status
@param      <type>  $id      The identifier
@return json

{ update delivery status }
@param      <type>  $pur_order  The pur order
@param      <type>  $status     The status

{ purchase estimate pdf }

{ function_description }

Adds an expense.

{ coppy pur request }
@param      <type>  $pur_request  The purchase request id
@return json

{ coppy pur estimate }
@param        $pur_estimate  The purchase estimate id
@return  json

{ coppy sale invoice }

{ invoices }
@return view

{ table pur invoices }

{ purchase invoice }
@param      string  $id     The identifier

{ pur invoice form }
@return redirect

Gets the purchase order row template.

{ purchase invoice }
@param       $id     The identifier

{ purchase invoice attachment }

{ preview purchase order file }
@param      <type>  $id      The identifier
@param      <type>  $rel_id  The relative identifier
@return  view

{ delete purchase order attachment }
@param      <type>  $id     The identifier

Adds a payment modal.

{ vendors change }

Adds a payment for invoice.
@param      <type>  $pur_order  The purchase order id
@return  redirect

{ purchase order change }
@param      <type>  $ct

{ payment invoice }
@param       $id     The identifier
@return view

{ delete pur invoice modal }

{ delete pur invoice }
@param        $id     The identifier

{ delete pur invoice modal }

{ delete payment }
@param       $id         The identifier
@param        $pur_order  The pur order
@return  redirect

{ table pur request }

{ table pur request }

{ table pur request }

{ function_description }

{ vendor portal items }

{ vendor contacts }
@param      <type>  $client_id  The client identifier

{ function_description }

{ form contact }
@param      string  $customer_id  The customer identifier
@param      string  $contact_id   The contact identifier

{ delete pur invoice modal }

{ delete payment }
@param       $id         The identifier
@param        $pur_order  The pur order
@return  redirect

Determines if contact email exists.

Adds update vendor items.
@param      string  $id     The identifier
@return       view

{ detail item }

{ share_item }

delete modal form
@return [type]

delete vendor items
@param  integer $id
@return redirect

Sends an PO modal form.
@param        $po_id  The PO identifier
@return       view

Gets the send po template.
@param      int     $po_id         The po identifier
@param      int     $contact_id    The contact identifier
@param      string  $return_type   The return type
@param      string  $po_info       The po information
@param      string  $contact_info  The contact information
@return       The send po template.

Sends an invoice.

Sends an PQ modal form.
@param        $pq_id  The PO identifier
@return       view

Gets the send pq template.
@param      int     $po_id         The po identifier
@param      int     $contact_id    The contact identifier
@param      string  $return_type   The return type
@param      string  $po_info       The po information
@param      string  $contact_info  The contact information
@return       The send po template.

Sends an invoice.

Sends an PQ modal form.
@param        $pq_id  The PO identifier
@return       view

Gets the send pr template.
@param      int     $pr_id         The pr identifier
@param      int     $contact_id    The contact identifier
@param      string  $return_type   The return type
@param      string  $pr_info       The pr information
@param      string  $contact_info  The contact information
@return       The send po template.

Sends an invoice.

## References

**Models Used**
- `Purchase_model`
- `Users_model`
- `Items_model`
- `Item_categories_model`
- `Taxes_model`
- `Team_model`
- `Invoices_model`
- `Estimates_model`
- `Projects_model`
- `purchase_model`
- `Invoice_items_model`
- `Estimate_items_model`
- `Clients_model`
- `Expenses_model`
- `Expense_categories_model`
- `Custom_fields_model`
- `Payment_methods_model`
- `Social_links_model`
- `Email_templates_model`

**Database Tables (inferred)**
- `for`
- `as`
- `form`
- `plugin`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\Purchase\Controllers\Purchase.php`

**Classes**:
- `Purchase\Controllers\describes`
- `Purchase\Controllers\Purchase extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `vendors()`
- `list_vendor_data()`
- `_make_vendor_row($data)`
- `settings()`
- `list_unit_data()`
- `_make_unit_row($data)`
- `delete_unit()`
- `modal_unit_form($id = '')`
- `unit_save()`
- `list_item_categories_data()`
- `_make_item_category_row($data)`
- `modal_commodity_group_form($id = '')`
- `commodity_group_save()`
- `delete_commodity_group()`
- `list_subgroup_data()`
- `_make_subgroup_row($data)`
- `modal_sub_group_form($id = '')`
- `sub_group_save()`
- `delete_sub_group()`
- `pur_order_setting()`
- `list_vendor_category_data()`
- `_make_vendor_category_row($data)`
- `modal_vendor_category_form($id = '')`
- `vendor_category_save()`
- `delete_vendor_category()`
- `purchase_order_setting()`
- `item_by_vendor()`
- `send_email_welcome_for_new_contact()`
- `show_tax_column()`
- `po_only_prefix_and_number()`
- `reset_purchase_order_number_every_month()`
- `modal_approval_setting_form()`
- `get_approval_setting_row_template()`
- `list_approval_setting_data()`
- `_make_approval_setting_row($data)`
- `approval_setting($id = '')`
- `table_commodity_list()`
- `bulk_action_handler()`
- `add_filter(&$where, $field, $value, $prefix)`
- `delete_approval_setting()`
- `items()`
- `item_modal_form()`
- `commodity_list_add_edit($id = '')`
- `delete_modal_form()`
- `delete_vendor_modal_form()`
- `delete_estimate_modal()`
- `delete_pur_order_modal()`
- `delete_pur_request_modal()`
- `delete_vendor_item_modal_form()`
- `delete_vendor()`
- `delete_pur_request()`
- `delete_pur_estimate()`
- `delete_pur_order()`
- `delete_commodity()`
- `purchase_delete_bulk_action()`
- `vendor($id = '')`
- `vendor_code_exists()`
- `vendor_items()`
- `vendor_items_table()`
- `delete_vendor_items()`
- `new_vendor_items()`
- `group_it_change($group = '')`
- `get_item($id = false)`
- `caculator_sale_price()`
- `caculator_profit_rate()`
- `caculator_purchase_price()`
- `purchase_request()`
- `table_pur_request()`
- `pur_request($id = '')`
- `get_item_by_id($id, $currency_rate = 1)`
- `get_item_by_id1($id, $currency_rate = 1)`
- `get_item_by_id_1($id, $currency_rate = 1)`
- `get_purchase_request_row_template()`
- `get_purchase_request_row_template()`
- `get_currency_rate($pr_currency)`
- `coppy_sale_invoice($invoice_id)`
- `coppy_sale_estimate($estimate_id)`
- `get_pur_request_items()`
- `view_pur_request($id)`
- `pur_request_pdf($id, $send = '')`
- `send_request_approve()`
- `add_comment()`
- `send_mail()`
- `pur_create_notification($data = [])`
- `approve_request()`
- `purchase_request_attachment($id)`
- `file_purrequest($id, $rel_id)`
- `delete_purrequest_attachment($id)`
- `share_request_modal($pur_request_id)`
- `share_request($pur_request_id)`
- `quotations()`
- `table_estimates()`
- `estimate($id = '')`
- `get_quotation_row_template()`
- `estimate_by_vendor($vendor)`
- `validate_estimate_number()`
- `view_quotation($id)`
- `purchase_estimate_attachment($id)`
- `file_pur_estimate($id, $rel_id)`
- `purestimate_pdf($id, $send = '')`
- `change_status_pur_estimate($status, $id)`
- `coppy_pur_request($pur_request)`
- `delete_estimate_attachment($id)`
- `purchase_orders()`
- `view_commodity_detail($commodity_id)`
- `table_pur_order()`
- `pur_order($id = '')`
- `get_purchase_order_row_template()`
- `view_pur_order($id)`
- `purchase_order_attachment($id)`
- `file_pur_order($id, $rel_id)`
- `delete_purorder_attachment($id)`
- `change_status_pur_order($status, $id)`
- `change_delivery_status_pur_order($status, $id)`
- `mark_pur_order_as($status, $pur_order)`
- `purorder_pdf($id, $send = '')`
- `convert_expense_modal_form($pur_order_id)`
- `add_expense()`
- `coppy_pur_request_for_po($pur_request, $vendor = '')`
- `coppy_pur_estimate($pur_estimate_id)`
- `coppy_sale_invoice_po($invoice_id)`
- `invoices()`
- `table_pur_invoices()`
- `pur_invoice($id = '')`
- `pur_invoice_form()`
- `get_purchase_invoice_row_template()`
- `purchase_invoice($id)`
- `purchase_invoice_attachment($id)`
- `file_pur_invoice($id, $rel_id)`
- `delete_purinv_attachment($id)`
- `add_payment_modal($invoice_id)`
- `pur_vendors_change($vendor)`
- `add_invoice_payment($invoice)`
- `pur_order_change($ct)`
- `payment_invoice($id)`
- `delete_pur_invoice_modal()`
- `delete_pur_invoice()`
- `delete_payment_pur_invoice_modal()`
- `delete_payment_pur_invoice()`
- `table_vendor_quotations($vendor_id)`
- `table_vendor_pur_order($vendor_id)`
- `table_vendor_pur_invoices($vendor_id)`
- `vendor_contact_profile($contact_id = 0, $tab = "")`
- `vendor_portal_items()`
- `vendor_contacts($vendor_id)`
- `vendor_contact_modal_form($customer_id, $contact_id = '')`
- `form_contact($customer_id, $contact_id = '')`
- `delete_contact_modal()`
- `delete_vendor_contact()`
- `contact_email_exists()`
- `add_update_vendor_items($id = '')`
- `detail_vendor_item($item_id)`
- `share_item($item_id)`
- `delete_vendor_item_modal()`
- `delete_vendor_item()`
- `send_po_modal_form($po_id)`
- `get_send_po_template($po_id = 0, $contact_id = 0, $return_type = "", $po_info = "", $contact_info = "")`
- `send_po()`
- `upload_file()`
- `validate_invoices_file()`
- `send_pq_modal_form($pq_id)`
- `get_send_pq_template($pq_id = 0, $contact_id = 0, $return_type = "", $pq_info = "", $contact_info = "")`
- `send_pur_quotation()`
- `send_pr_modal_form($pr_id)`
- `get_send_pr_template($pr_id = 0, $contact_id = 0, $return_type = "", $pr_info = "", $contact_info = "")`
- `send_pur_request()`

