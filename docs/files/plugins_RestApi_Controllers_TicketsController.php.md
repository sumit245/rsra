# plugins\RestApi\Controllers\TicketsController.php

- Path: `plugins\RestApi\Controllers\TicketsController.php`
- Type: PHP
- Size: 16373 bytes

## Summary (from docblocks)

@api {get} /api/tickets/:ticketid List all Tickets information
@apiVersion 1.0.0
@apiName getTickets
@apiGroup Tickets
@apiHeader {String} Authorization Basic Access Authentication token.
@apiParam {Number} ticketid Mandatory ticket unique ID
@apiSuccess {Object} Tickets information
@apiSuccessExample Success-Response:
{
  "id": "1",
  "client_id": "2",
  "project_id": "0",
  "ticket_type_id": "1",
  "title": "Title",
  "created_by": "1",
  "requested_by": "4",
  "created_at": "2021-09-12 06:47:36",
  "status": "new",
  "last_activity_at": "2021-09-12 06:47:36",
  "assigned_to": "3",
  "creator_name": "",
  "creator_email": "",
  "labels": "9,10",
  "task_id": "0",
  "closed_at": "0000-00-00 00:00:00",
  "deleted": "0",
  "ticket_type": "General Support",
  "company_name": "Company",
  "project_title": null,
  "task_title": null,
 "assigned_to_user": "chirag jagani",
  "assigned_to_avatar": null,
  "labels_list": "9--::--label 2--::--#ad159e,10--::--label 3--::--#29c2c2",
  "requested_by_name": "chirag jagani"
}
@apiError {Boolean} status Request status
@apiError {String} message No data were found

Return the properties of a resource object
@return mixed

@api {get} /api/tickets/search/:keysearch Search Ticket Information
@apiVersion 1.0.0
@apiName getTicketsSearch
@apiGroup Tickets
@apiHeader {String} Authorization Basic Access Authentication token.
@apiParam {String} keysearch Search Keywords
@apiSuccess {Object} Tickets information
@apiSuccessExample Success-Response:
{
  "id": "1",
  "client_id": "2",
  "project_id": "0",
  "ticket_type_id": "1",
  "title": "Title",
  "created_by": "1",
  "requested_by": "4",
  "created_at": "2021-09-12 06:47:36",
  "status": "new",
  "last_activity_at": "2021-09-12 06:47:36",
  "assigned_to": "3",
  "creator_name": "",
  "creator_email": "",
  "labels": "9,10",
  "task_id": "0",
  "closed_at": "0000-00-00 00:00:00",
  "deleted": "0",
  "ticket_type": "General Support",
  "company_name": "Company",
  "project_title": null,
  "task_title": null,
 "assigned_to_user": "chirag jagani",
  "assigned_to_avatar": null,
  "labels_list": "9--::--label 2--::--#ad159e,10--::--label 3--::--#29c2c2",
  "requested_by_name": "chirag jagani"
}
@apiError {Boolean} status Request status
@apiError {String} message No data were found

Return a new resource object, with default properties
@return mixed

@api {post} api/tickets Add New Ticket
@apiVersion 1.0.0
@apiName create
@apiGroup Tickets
@apiHeader {String} Authorization Basic Access Authentication token.
@apiParam {string} title                          Mandatory Ticket title. 
@apiParam {int} client_id                         Mandatory Ticket client_id. 
@apiParam {int} requested_by_id                   Mandatory Ticket requested_by_id. 
@apiParam {int} ticket_type_id	                 Mandatory Ticket ticket_type_id. 
@apiParam {int} description   	                 Mandatory Ticket description. 
@apiParam {int} assigned_to   	                 Mandatory Ticket assigned_to. 	 
@apiParam {string} ticket_labels 				 Optional Ticket ticket_labels. 
@apiParamExample Request-Example:
    array (size=7)
       'title' => string 'title' (length=5)
       'owner_id' =>  '1' (length=1)
       'requested_by_id' =>  '1' (length=1)
       'ticket_type_id' => '1' (length=1)
       'description' => string 'description' (length=11)
       'assigned_to' =>  '1' (length=1)
       'ticket_labels' => string '1,2' (length=3)     *
@apiSuccess {Boolean} status Request status.
@apiSuccess {String} message Ticket add successful.
@apiSuccessExample Success-Response:
    HTTP/1.1 200 OK
    {
      "status": true,
      "message": "Ticket add successful."
    }
@apiError {Boolean} status Request status.
@apiError {String} message Ticket add fail.
@apiErrorExample Error-Response:
    HTTP/1.1 404 Not Found
    {
      "status": false,
      "message": "Ticket add fail."
    }

Return the editable properties of a resource object
@return mixed

@api {put} api/tickets/:id Update a Ticket
@apiVersion 1.0.0
@apiName update
@apiGroup Tickets
@apiHeader {String} Authorization Basic Access Authentication token.
@apiParam {Number} id tickets unique ID.
@apiParam {string} title                          Mandatory Ticket title. 
@apiParam {int} client_id                         Mandatory Ticket client_id. 
@apiParam {int} requested_by_id                   Mandatory Ticket requested_by_id. 
@apiParam {int} ticket_type_id	                 Mandatory Ticket ticket_type_id. 
@apiParam {int} description   	                 Mandatory Ticket description. 
@apiParam {int} assigned_to   	                 Mandatory Ticket assigned_to. 	 
@apiParam {string} ticket_labels 				 Optional Ticket ticket_labels. 
@apiParamExample {json} Request-Example:
{
    "description":"updated description",
    "ticket_labels":"9,10",
    "title":"Title updated",
    "assigned_to":3
}
@apiSuccess {Boolean} status Request status.
@apiSuccess {String} message Ticket update successful.
@apiSuccessExample Success-Response:
    HTTP/1.1 200 OK
    {
      "status": true,
      "message": "Ticket update successful."
    }
@apiError {Boolean} status Request status.
@apiError {String} message Ticket update fail.
@apiErrorExample Error-Response:
    HTTP/1.1 404 Not Found
    {
      "status": false,
      "message": "Ticket update fail."
    }

@api {delete} api/tickets/:id Delete a Ticket
@apiVersion 1.0.0
@apiName Delete
@apiGroup Tickets
@apiHeader {String} Authorization Basic Access Authentication token.
@apiParam {Number} id ticket unique ID.
@apiSuccess {String} status Request status.
@apiSuccess {String} message Ticket Deleted Successfuly.
@apiSuccessExample Success-Response:
    HTTP/1.1 200 OK
    {
      "status": true,
      "message": "Ticket Deleted Successfuly."
    }
@apiError {Boolean} status Request status.
@apiError {String} message Ticket Delete Fail.
@apiErrorExample Error-Response:
    HTTP/1.1 404 Not Found
    {
      "status": false,
      "message": "Ticket Delete Fail."
    }

## References

**Models Used**
- `tickets_model`
- `clients_model`
- `restapi_labels_model`
- `users_model`
- `ticket_types_model`
- `team_model`
- `restapi_tickets_model`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\RestApi\Controllers\TicketsController.php`

**Classes**:
- `RestApi\Controllers\TicketsController extends Rest_api_Controller`

**Functions/Methods**:
- `__construct()`
- `index($tickets_id="")`
- `show($id = null, $searchTerm = "")`
- `search($key = '')`
- `new()`
- `create()`
- `edit($id = null)`
- `update($id = null)`
- `delete($id = null)`

