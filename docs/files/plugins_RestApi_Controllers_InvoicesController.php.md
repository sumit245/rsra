# plugins\RestApi\Controllers\InvoicesController.php

- Path: `plugins\RestApi\Controllers\InvoicesController.php`
- Type: PHP
- Size: 22384 bytes

## Summary (from docblocks)

@api {get} /api/invoices/:invoiceid List all Invoices information
@apiVersion 1.0.0
@apiName getInvoices
@apiGroup Invoices
@apiHeader {String} Authorization Basic Access Authentication token.
@apiParam {Number} invoiceid Mandatory invoice unique ID
@apiSuccess {Object} Invoices information
@apiSuccessExample Success-Response:
 {
  "id": "1",
  "client_id": "2",
  "project_id": "1",
  "bill_date": "2021-09-12",
  "due_date": "2021-10-01",
  "note": "",
  "labels": "",
  "last_email_sent_date": "2021-09-12",
  "status": "not_paid",
  "tax_id": "1",
  "tax_id2": "1",
  "tax_id3": "0",
  "recurring": "0",
  "recurring_invoice_id": "0",
  "repeat_every": "1",
  "repeat_type": "months",
  "no_of_cycles": "0",
  "next_recurring_date": null,
  "no_of_cycles_completed": "0",
  "due_reminder_date": null,
  "recurring_reminder_date": null,
  "discount_amount": "1",
  "discount_amount_type": "percentage",
  "discount_type": "after_tax",
  "cancelled_at": null,
  "cancelled_by": "0",
  "files": "a:0:{}",
  "deleted": "0",
  "currency": "USD",
  "currency_symbol": "INR",
  "company_name": "Company",
  "project_title": "project 1",
  "invoice_value": "1188",
  "payment_received": "0",
  "tax_percentage": "10",
  "tax_percentage2": "10",
  "tax_percentage3": null,
  "cancelled_by_user": null,
  "labels_list": null
}
@apiError {Boolean} status Request status
@apiError {String} message No data were found

Return the properties of a resource object
@return mixed

@api {get} /api/invoices/search/:keysearch Search invoice Information
@apiVersion 1.0.0
@apiName getInvoicesSearch
@apiGroup Invoices
@apiHeader {String} Authorization Basic Access Authentication token.
@apiParam {String} keysearch Search Keywords
@apiSuccess {Object} Invoices information
@apiSuccessExample Success-Response:
 {
  "id": "1",
  "client_id": "2",
  "project_id": "1",
  "bill_date": "2021-09-12",
  "due_date": "2021-10-01",
  "note": "",
  "labels": "",
  "last_email_sent_date": "2021-09-12",
  "status": "not_paid",
  "tax_id": "1",
  "tax_id2": "1",
  "tax_id3": "0",
  "recurring": "0",
  "recurring_invoice_id": "0",
  "repeat_every": "1",
  "repeat_type": "months",
  "no_of_cycles": "0",
  "next_recurring_date": null,
  "no_of_cycles_completed": "0",
  "due_reminder_date": null,
  "recurring_reminder_date": null,
  "discount_amount": "1",
  "discount_amount_type": "percentage",
  "discount_type": "after_tax",
  "cancelled_at": null,
  "cancelled_by": "0",
  "files": "a:0:{}",
  "deleted": "0",
  "currency": "USD",
  "currency_symbol": "INR",
  "company_name": "Company",
  "project_title": "project 1",
  "invoice_value": "1188",
  "payment_received": "0",
  "tax_percentage": "10",
  "tax_percentage2": "10",
  "tax_percentage3": null,
  "cancelled_by_user": null,
  "labels_list": null
}
@apiError {Boolean} status Request status
@apiError {String} message No data were found

Return a new resource object, with default properties
@return mixed

@api {post} api/invoices Add New Invoice
@apiVersion 1.0.0
@apiName create
@apiGroup Invoice
@apiHeader {String} Authorization Basic Access Authentication token.
@apiParam {string} invoice_bill_date                        		 Optional invoice bill date.
@apiParam {string} invoice_due_date		                         Mandatory invoice due date .
@apiParam {string} invoice_client_id		                   	     Mandatory invoice client id.
@apiParam {string} invoice_project_id	                       	 Optional invoice project id.
@apiParam {string} tax_id	                        			 Optional invoice tax id.
@apiParam {string} tax_id2	                        			 Optional invoice tax id2.
@apiParam {string} tax_id3	                        			 Optional invoice tax id3.
@apiParam {string} recurring					            		 Optional invoice recurring.
@apiParam {string} invoice_note						 			 Optional invoice note.
@apiParam {string} labels							 			 Optional invoice labels.
 @apiParamExample Request-Example:
    array (size=10)
       'invoice_bill_date' => string '2021-10-22' (length=10)
       'invoice_due_date' => string '2021-10-23' (length=10)
       'invoice_client_id' => string '2' (length=1)
       'invoice_project_id' => string '6' (length=1)
       'tax_id' => string '1' (length=1)
       'tax_id2' => string '1' (length=1) 
	  	  'tax_id3' => string '1' (length=1)
  	  'recurring' => string '0' (length=1)
	  	  'invoice_note' => string 'notes' (length=5)
      'labels' => string '1,2' (length=3)
@apiSuccess {Boolean} status Request status.
@apiSuccess {String} message Invoice add successful.
@apiSuccessExample Success-Response:
    HTTP/1.1 200 OK
    {
      "status": true,
      "message": "Invoice add successful."
    }
@apiError {Boolean} status Request status.
@apiError {String} message Invoice add fail.
@apiErrorExample Error-Response:
    HTTP/1.1 404 Not Found
    {
      "status": false,
      "message": "Invoice add fail."
    }

Return the editable properties of a resource object
@return mixed

@api {put} api/invoices/:id Update a Invoice
@apiVersion 1.0.0
@apiName update
@apiGroup Invoice
@apiParam {string} invoice_bill_date 						Optional Invoice Bill Date.
@apiParam {string} invoice_due_date 							Mandatory Invoice Due Date.
@apiParam {string} invoice_client_id 						Mandatory Invoice CLient id.
@apiParam {string} invoice_project_id 						Optional Invoice Poject id.
@apiParam {string} tax_id 									Optional Invoice Tax id.
@apiParam {string} tax_id2 									Optional Invoice Tax id2.
@apiParam {string} tax_id3 									Optional Invoice Tax id3.
@apiParam {string} recurring 								Optional Invoice Recurring.
@apiParam {string} invoice_note 								Optional Invoice Invoice note
@apiParam {string} labels 									Optional Invoice Label.
@apiParamExample {json} Request-Example:
{
   "invoice_bill_date":"2021-10-22",
   "invoice_due_date":"2021-10-23",
   "invoice_client_id":2,
   "invoice_project_id":6,
   "tax_id":1,
   "tax_id2":1,
   "tax_id3":1,
   "recurring":0,
   "invoice_note":"notes",
   "labels":"1,2"
}
@apiSuccess {Boolean} status Request status.
@apiSuccess {String} message Invoice Update Successful.
@apiSuccessExample Success-Response:
	HTTP/1.1 200 OK
	{
	  "status": true,
	  "message": "Invoice Update Successful."
	}
@apiError {Boolean} status Request status.
@apiError {String} message Invoice Update Fail.   
@apiErrorExample Error-Response:
   HTTP/1.1 404 Not Found
   {
     "status": false,
     "message": "Invoice Update Fail."
   }

@api {delete} api/invoices/:id Delete a Invoices
@apiVersion 1.0.0
@apiName Delete
@apiGroup Invoices
@apiHeader {String} Authorization Basic Access Authentication token.
@apiParam {Number} id invoice unique ID.
@apiSuccess {String} status Request status.
@apiSuccess {String} message Invoice Delete Successfuly.
@apiSuccessExample Success-Response:
    HTTP/1.1 200 OK
    {
      "status": true,
      "message": "Invoice Delete Successfuly."
    }
@apiError {Boolean} status Request status.
@apiError {String} message Invoice Delete Fail.
@apiErrorExample Error-Response:
    HTTP/1.1 404 Not Found
    {
      "status": false,
      "message": "Invoice Delete Fail."
    }

## References

**Models Used**
- `restapi_invoice_model`
- `restapi_clients_model`
- `restapi_labels_model`
- `projects_model`
- `taxes_model`
- `invoices_model`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\Controllers\InvoicesController.php`

**Classes**:
- `RestApi\Controllers\InvoicesController extends Rest_api_Controller`

**Functions/Methods**:
- `__construct()`
- `index($invoice_id="")`
- `show($id = null, $searchTerm = "")`
- `search($key = '')`
- `new()`
- `create()`
- `edit($id = null)`
- `update($id = null)`
- `delete($id = null)`

