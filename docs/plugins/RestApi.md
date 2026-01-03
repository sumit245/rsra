# Plugin: RestApi

**Files**: 166

## Controllers
- `Item`
- `JWT`
- `Api_settings_Controller`
- `ClientsController`
- `InvoicesController`
- `LeadsController`
- `ProjectsController`
- `Rest_api_Controller`
- `TicketsController`
- `UtilitiesController`
- `Api_Model`
- `Api_settings_model`
- `ClientsModel`
- `InvoicesModel`
- `LabelsModel`
- `LeadsModel`
- `ProjectsModel`
- `TicketsModel`
- `BeforeValidException`
- `ExpiredException`
- `SignatureInvalidException`
- `Requests_Exception`
- `Requests_Exception_HTTP`
- `Requests_Exception_HTTP_304`
- `Requests_Exception_HTTP_305`
- `Requests_Exception_HTTP_306`
- `Requests_Exception_HTTP_400`
- `Requests_Exception_HTTP_401`
- `Requests_Exception_HTTP_402`
- `Requests_Exception_HTTP_403`
- `Requests_Exception_HTTP_404`
- `Requests_Exception_HTTP_405`
- `Requests_Exception_HTTP_406`
- `Requests_Exception_HTTP_407`
- `Requests_Exception_HTTP_408`
- `Requests_Exception_HTTP_409`
- `Requests_Exception_HTTP_410`
- `Requests_Exception_HTTP_411`
- `Requests_Exception_HTTP_412`
- `Requests_Exception_HTTP_413`
- `Requests_Exception_HTTP_414`
- `Requests_Exception_HTTP_415`
- `Requests_Exception_HTTP_416`
- `Requests_Exception_HTTP_417`
- `Requests_Exception_HTTP_418`
- `Requests_Exception_HTTP_428`
- `Requests_Exception_HTTP_429`
- `Requests_Exception_HTTP_431`
- `Requests_Exception_HTTP_500`
- `Requests_Exception_HTTP_501`
- `Requests_Exception_HTTP_502`
- `Requests_Exception_HTTP_503`
- `Requests_Exception_HTTP_504`
- `Requests_Exception_HTTP_505`
- `Requests_Exception_HTTP_511`
- `Requests_Exception_HTTP_Unknown`
- `Requests_Exception_Transport`
- `Requests_Exception_Transport_cURL`
- `Requests_Response_Headers`
- `Requests_Utility_FilteredIterator`

## Models Used
- `api_settings_model`
- `clients_model`
- `restapi_clients_model`
- `users_model`
- `clients_group_model`
- `restapi_invoice_model`
- `restapi_labels_model`
- `projects_model`
- `taxes_model`
- `invoices_model`
- `restapi_leads_model`
- `lead_status_model`
- `lead_source_model`
- `restapi_projects_model`
- `labels_model`
- `tickets_model`
- `ticket_types_model`
- `team_model`
- `restapi_tickets_model`
- `Client_groups_model`
- `contact_model`
- `project_members_model`

## Views Used
- `RestApi\Views\modal_form`

## Endpoints (inferred)
| Method | URI | Target |
|---|---|---|
|ADD|client_groups|UtilitiesController::getClientGroups|
|ADD|project_labels|UtilitiesController::getProejctLabels|
|ADD|invoice_labels|UtilitiesController::getInvoiceLabels|
|ADD|ticket_labels|UtilitiesController::getTicketLabels|
|ADD|invoice_tax|UtilitiesController::getInvoiceTaxes|
|ADD|contact_by_clientid/(:num)|UtilitiesController::getContactByClientid/$1|
|ADD|ticket_type|UtilitiesController::getTicketType|
|ADD|staff_owner|UtilitiesController::getStaffOwner|
|ADD|project_members|UtilitiesController::getProjectMembers|
|GET|leads|LeadsController::index|
|GET|leads/(:segment)|LeadsController::show/$1|
|GET|leads/search/(:segment)|LeadsController::search/$1|
|POST|leads|LeadsController::create|
|PUT|leads/(:segment)|LeadsController::update/$1|
|PATCH|leads/(:segment)|LeadsController::update/$1|
|DELETE|leads/(:segment)|LeadsController::delete/$1|
|GET|clients|ClientsController::index|
|GET|clients/(:segment)|ClientsController::show/$1|
|GET|clients/search/(:segment)|ClientsController::search/$1|
|POST|clients|ClientsController::create|
|PUT|clients/(:segment)|ClientsController::update/$1|
|PATCH|clients/(:segment)|ClientsController::update/$1|
|DELETE|clients/(:segment)|ClientsController::delete/$1|
|GET|projects|ProjectsController::index|
|GET|projects/(:segment)|ProjectsController::show/$1|
|GET|projects/search/(:segment)|ProjectsController::search/$1|
|POST|projects|ProjectsController::create|
|PUT|projects/(:segment)|ProjectsController::update/$1|
|PATCH|projects/(:segment)|ProjectsController::update/$1|
|DELETE|projects/(:segment)|ProjectsController::delete/$1|
|GET|tickets|TicketsController::index|
|GET|tickets/(:segment)|TicketsController::show/$1|
|GET|tickets/search/(:segment)|TicketsController::search/$1|
|POST|tickets|TicketsController::create|
|PUT|tickets/(:segment)|TicketsController::update/$1|
|PATCH|tickets/(:segment)|TicketsController::update/$1|
|DELETE|tickets/(:segment)|TicketsController::delete/$1|
|GET|invoices|InvoicesController::index|
|GET|invoices/(:segment)|InvoicesController::show/$1|
|GET|invoices/search/(:segment)|InvoicesController::search/$1|
|POST|invoices|InvoicesController::create|
|PUT|invoices/(:segment)|InvoicesController::update/$1|
|PATCH|invoices/(:segment)|InvoicesController::update/$1|
|DELETE|invoices/(:segment)|InvoicesController::delete/$1|

