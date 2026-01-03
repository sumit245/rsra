# plugins\RestApi\Controllers\LeadsController.php

- Path: `plugins\RestApi\Controllers\LeadsController.php`
- Type: PHP
- Size: 17880 bytes

## Summary (from docblocks)

@api {get} /api/leads/:leadid List all leads information
@apiVersion 1.0.0
@apiName index
@apiGroup Leads
@apiHeader {String} Authorization Basic Access Authentication token.
@apiParam {Number} leadid Mandatory Lead unique ID

@apiSuccess {Object} Leads information
@apiSuccessExample Success-Response:
{
		"id": "2",
		"company_name": "Test",
		"address": "",
		"city": "",
		"state": "",
		"zip": "",
		"country": "",
		"created_date": "2021-09-12",
		"website": "",
		"phone": "",
		"currency_symbol": "",
		"starred_by": "",
		"group_ids": "",
		"deleted": "0",
		"is_lead": "1",
		"lead_status_id": "1",
		"owner_id": "1",
		"created_by": "1",
		"sort": "0",
		"lead_source_id": "1",
		"last_lead_status": "",
		"client_migration_date": "0000-00-00",
		"vat_number": "",
		"currency": "",
		"disable_online_payment": "0",
		"primary_contact": null,
		"primary_contact_id": null,
		"contact_avatar": null,
		"total_projects": null,
		"payment_received": "0",
		"invoice_value": "0",
		"client_groups": null,
		"lead_status_title": "New",
		"lead_status_color": "#f1c40f",
		"owner_name": "chirag jagani",
		"owner_avatar": null
}
@apiError {Boolean} status Request status
@apiError {String} message No data were found

Return the properties of a resource object
@return mixed

@api {get} /api/projects/search/:keysearch Search Leads Information
@apiVersion 1.0.0
@apiName getLeadsSearch
@apiGroup Leads
@apiHeader {String} Authorization Basic Access Authentication token.
@apiParam {String} keysearch Search Keywords
@apiSuccess {Object} Leads information
@apiSuccessExample Success-Response:
{
		"id": "2",
		"company_name": "Test",
		"address": "",
		"city": "",
		"state": "",
		"zip": "",
		"country": "",
		"created_date": "2021-09-12",
		"website": "",
		"phone": "",
		"currency_symbol": "",
		"starred_by": "",
		"group_ids": "",
		"deleted": "0",
		"is_lead": "1",
		"lead_status_id": "1",
		"owner_id": "1",
		"created_by": "1",
		"sort": "0",
		"lead_source_id": "1",
		"last_lead_status": "",
		"client_migration_date": "0000-00-00",
		"vat_number": "",
		"currency": "",
		"disable_online_payment": "0",
		"primary_contact": null,
		"primary_contact_id": null,
		"contact_avatar": null,
		"total_projects": null,
		"payment_received": "0",
		"invoice_value": "0",
		"client_groups": null,
		"lead_status_title": "New",
		"lead_status_color": "#f1c40f",
		"owner_name": "chirag jagani",
		"owner_avatar": null
}
@apiError {Boolean} status Request status
@apiError {String} message No data were found

@api {post} api/leads Add New Lead
@apiVersion 1.0.0
@apiName create
@apiGroup Leads
@apiHeader {String} Authorization Basic Access Authentication token.
@apiParam {string} company_name                          Mandatory Lead Name.
@apiParam {string} owner_id		                        Mandatory Lead owner id.
@apiParam {string} lead_status_id						Mandatory Lead status id.
@apiParam {string} lead_source_id						Mandatory Lead source id.
@apiParam {string} address 								Optional Lead address.
@apiParam {string} city 									Optional Lead city.
@apiParam {string} state 								Optional Lead state.
@apiParam {string} zip 									Optional Lead zip.
@apiParam {string} country 								Optional Lead country.
@apiParam {string} phone 								Optional Lead phone.
@apiParam {string} website 								Optional Lead website.
@apiParam {string} vat_number 							Optional Lead vat number.
@apiParamExample Request-Example:
    array (size=13)
       'company_name' => string 'Lead Name' (length=9)
       'owner_id' => string '1' (length=1)
       'address' => string 'test address' (length=12)
       'city' => string 'test city' (length=9)
       'state' => string 'test state' (length=10)
       'zip' => string '123456' (length=6)
       'country' => string 'test country' (length=12)
       'phone' => string '9856231470' (length=10)
       'website' => string 'www.test.com' (length=12)
       'vat_number' => string '123465789' (length=9)
       'start_date' => string '25/07/2019' (length=10)
       'lead_source_id' => string '0' (length=10)
       'lead_status_id' => string '1' (length=1)     *
@apiSuccess {Boolean} status Request status.
@apiSuccess {String} message Lead add successful.
@apiSuccessExample Success-Response:
    HTTP/1.1 200 OK
    {
      "status": true,
      "message": "Lead add successful."
    }
@apiError {Boolean} status Request status.
@apiError {String} message Lead add fail.
@apiErrorExample Error-Response:
    HTTP/1.1 404 Not Found
    {
      "status": false,
      "message": "Lead add fail."
    }

@api {put} api/leads/:id Update a Lead
@apiVersion 1.0.0
@apiName update
@apiGroup Leads
@apiHeader {String} Authorization Basic Access Authentication token.
@apiParam {Number} id lead unique ID.
@apiParam {string} company_name                          Mandatory Lead Name.
@apiParam {string} owner_id		                        Mandatory Lead owner id.
@apiParam {string} lead_status_id						Mandatory Lead status id.
@apiParam {string} lead_source_id						Mandatory Lead source id.
@apiParam {string} address 								Optional Lead address.
@apiParam {string} city 									Optional Lead city.
@apiParam {string} state 								Optional Lead state.
@apiParam {string} zip 									Optional Lead zip.
@apiParam {string} country 								Optional Lead country.
@apiParam {string} phone 								Optional Lead phone.
@apiParam {string} website 								Optional Lead website.
@apiParam {string} vat_number 							Optional Lead vat number.
@apiParamExample {json} Request-Example:
{
    "company_name":"updated company",
    "owner_id":3,
    "group_ids":"1,2",
    "address":"address",
	    "city":"city",
	    "state":"state",
    "zip":123468,
    "country":"country",
    "phone":1234567890,
    "website":"www.website.com",
    "vat_number":123456,
    "disable_online_payment":1
}
@apiSuccess {Boolean} status Request status.
@apiSuccess {String} message Lead Update Successful.
@apiSuccessExample Success-Response:
    HTTP/1.1 200 OK
    {
      "status": true,
      "message": "Lead Update Successful."
    }
@apiError {Boolean} status Request status.
@apiError {String} message Lead Update Fail.
@apiErrorExample Error-Response:
    HTTP/1.1 404 Not Found
    {
      "status": false,
      "message": "Lead Update Fail."
    }

@api {delete} api/leads/:id Delete a Lead
@apiVersion 1.0.0
@apiName Delete
@apiGroup Leads
@apiHeader {String} Authorization Basic Access Authentication token.
@apiParam {Number} id lead unique ID.
@apiSuccess {String} status Request status.
@apiSuccess {String} message Lead Deleted Successfully.
@apiSuccessExample Success-Response:
    HTTP/1.1 200 OK
    {
      "status": true,
      "message": "Lead Deleted Successfully."
    }
@apiError {Boolean} status Request status.
@apiError {String} message Lead Delete Fail.
@apiErrorExample Error-Response:
    HTTP/1.1 404 Not Found
    {
      "status": false,
      "message": "Lead Delete Fail."
    }

## References

**Models Used**
- `clients_model`
- `restapi_leads_model`
- `users_model`
- `lead_status_model`
- `lead_source_model`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\Controllers\LeadsController.php`

**Classes**:
- `RestApi\Controllers\LeadsController extends Rest_api_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `getSourse($data, $is_single)`
- `show($id = null, $searchTerm = "")`
- `search($key = '')`
- `create()`
- `update($id = null)`
- `delete($id = null)`

