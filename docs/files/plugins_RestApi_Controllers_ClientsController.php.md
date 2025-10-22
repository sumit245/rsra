# plugins\RestApi\Controllers\ClientsController.php

- Path: `plugins\RestApi\Controllers\ClientsController.php`
- Type: PHP
- Size: 17556 bytes

## Summary (from docblocks)

@api {get} /api/clients/:clientid List all Clients information
@apiVersion 1.0.0
@apiName getClients
@apiGroup Clients
@apiHeader {String} Authorization Basic Access Authentication token.
@apiParam {Number} clientid Mandatory Clientid unique ID
@apiSuccess {Object} Clients information
@apiSuccessExample Success-Response:
{
		"id": "2",
		"company_name": "cijagani",
		"address": "Rajkot",
		"city": "",
		"state": "",
		"zip": "",
		"country": "",
		"created_date": "2021-09-12",
		"website": "",
		"phone": "",
		"currency_symbol": "INR",
		"starred_by": "",
		"group_ids": "1",
		"deleted": "0",
		"is_lead": "0",
		"lead_status_id": "1",
		"owner_id": "1",
		"created_by": "1",
		"sort": "0",
		"lead_source_id": "1",
		"last_lead_status": "New",
		"client_migration_date": "2021-09-12",
		"vat_number": "",
		"currency": "USD",
		"disable_online_payment": "1",
		"primary_contact": "chirag jagani",
		"primary_contact_id": "4",
		"contact_avatar": null,
		"total_projects": "7",
		"payment_received": "0",
		"invoice_value": "1188",
		"client_groups": "Test c group ",
		"lead_status_title": "New",
		"lead_status_color": "#f1c40f",
		"owner_name": "chirag jagani",
		"owner_avatar": null
}
@apiError {Boolean} status Request status
@apiError {String} message No data were found

Return the properties of a resource object
@return mixed

@api {get} /api/getClientsSearch/search/:keysearch Search Client Information
@apiVersion 1.0.0
@apiName getClientsSearch
@apiGroup Clients
@apiHeader {String} Authorization Basic Access Authentication token.
@apiParam {String} keysearch Search Keywords
@apiSuccess {Object} Clients information
@apiSuccessExample Success-Response:
{
		"id": "2",
		"company_name": "cijagani",
		"address": "Rajkot",
		"city": "",
		"state": "",
		"zip": "",
		"country": "",
		"created_date": "2021-09-12",
		"website": "",
		"phone": "",
		"currency_symbol": "INR",
		"starred_by": "",
		"group_ids": "1",
		"deleted": "0",
		"is_lead": "0",
		"lead_status_id": "1",
		"owner_id": "1",
		"created_by": "1",
		"sort": "0",
		"lead_source_id": "1",
		"last_lead_status": "New",
		"client_migration_date": "2021-09-12",
		"vat_number": "",
		"currency": "USD",
		"disable_online_payment": "1",
		"primary_contact": "chirag jagani",
		"primary_contact_id": "4",
		"contact_avatar": null,
		"total_projects": "7",
		"payment_received": "0",
		"invoice_value": "1188",
		"client_groups": "Test c group ",
		"lead_status_title": "New",
		"lead_status_color": "#f1c40f",
		"owner_name": "chirag jagani",
		"owner_avatar": null
}
@apiError {Boolean} status Request status
@apiError {String} message No data were found

@api {post} api/clients Add New Client
@apiVersion 1.0.0
@apiName create
@apiGroup Clients
@apiHeader {String} Authorization Basic Access Authentication token.
@apiParam {string} company_name                          Mandatory Comapny Name.
@apiParam {string} owner_id		                        Mandatory Comapny owner id.
@apiParam {string} group_ids		                        Optional Comapny group ids.
@apiParam {string} address 								Optional Company address.
@apiParam {string} city 									Optional Company city.
@apiParam {string} state 								Optional Company state.
@apiParam {string} zip 									Optional Company zip.
@apiParam {string} country 								Optional Company country.
@apiParam {string} phone 								Optional Company phone.
@apiParam {string} website 								Optional Company website.
@apiParam {string} vat_number 							Optional Company vat number.
@apiParam {string} disable_online_payment				Optional Company disable online payment.
@apiParamExample Request-Example:
    array (size=12)
       'company_name' => string 'Company Name' (length=12)
       'owner_id' => string '1' (length=1)
       'group_ids' => string '1,2' (length=3)
       'address' => string 'test address' (length=12)
       'city' => string 'test city' (length=9)
       'state' => string 'test state' (length=10)
       'zip' => string '123456' (length=6)
       'country' => string 'test country' (length=12)
       'phone' => string '9856231470' (length=10)
       'website' => string 'www.test.com' (length=12)
       'vat_number' => string '123465789' (length=9)
       'start_date' => string '25/07/2019' (length=10)
       'disable_online_payment' => string '0' (length=1)     *
@apiSuccess {Boolean} status Request status.
@apiSuccess {String} message Client add successful.
@apiSuccessExample Success-Response:
    HTTP/1.1 200 OK
    {
      "status": true,
      "message": "Client add successful."
    }
@apiError {Boolean} status Request status.
@apiError {String} message Client add fail.
@apiErrorExample Error-Response:
    HTTP/1.1 404 Not Found
    {
      "status": false,
      "message": "Client add fail."
    }

@api {put} api/clients/:id Update a Client
@apiVersion 1.0.0
@apiName update
@apiGroup Clients
@apiHeader {String} Authorization Basic Access Authentication token.
@apiParam {Number} id client unique ID.
@apiParam {string} company_name                          Mandatory Comapny Name.
@apiParam {string} owner_id		                        Mandatory Comapny owner id.
@apiParam {string} group_ids		                        Optional Comapny group ids.
@apiParam {string} address 								Optional Company address.
@apiParam {string} city 									Optional Company city.
@apiParam {string} state 								Optional Company state.
@apiParam {string} zip 									Optional Company zip.
@apiParam {string} country 								Optional Company country.
@apiParam {string} phone 								Optional Company phone.
@apiParam {string} website 								Optional Company website.
@apiParam {string} vat_number 							Optional Company vat number.
@apiParam {string} disable_online_payment				Optional Company disable online payment.
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
@apiSuccess {String} message Client Update Successful.
@apiSuccessExample Success-Response:
    HTTP/1.1 200 OK
    {
      "status": true,
      "message": "Client Update Successful."
    }
@apiError {Boolean} status Request status.
@apiError {String} message Client Update Fail.
@apiErrorExample Error-Response:
    HTTP/1.1 404 Not Found
    {
      "status": false,
      "message": "Client Update Fail."
    }

@api {delete} api/clients/:id Delete a Client
@apiVersion 1.0.0
@apiName Delete
@apiGroup Clients
@apiHeader {String} Authorization Basic Access Authentication token.
@apiParam {Number} id clients unique ID.
@apiSuccess {String} status Request status.
@apiSuccess {String} message Client Deleted Successfully.
@apiSuccessExample Success-Response:
    HTTP/1.1 200 OK
    {
      "status": true,
      "message": "Client Deleted Successfully."
    }
@apiError {Boolean} status Request status.
@apiError {String} message Client Delete Fail..
@apiErrorExample Error-Response:
    HTTP/1.1 404 Not Found
    {
      "status": false,
      "message": "Client Delete Fail."
    }

## References

**Models Used**
- `clients_model`
- `restapi_clients_model`
- `users_model`
- `clients_group_model`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\Controllers\ClientsController.php`

**Classes**:
- `RestApi\Controllers\ClientsController extends Rest_api_Controller`

**Functions/Methods**:
- `__construct()`
- `index($clientid = '')`
- `show($id = null, $searchTerm = "")`
- `search($key = '')`
- `create()`
- `update($id = null)`
- `delete($id = null)`

