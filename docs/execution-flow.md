# Execution Flow

- `index.php` bootstraps CodeIgniter via `system/bootstrap.php` and `app/Config/Boot/*`
- HTTP request is routed using `app/Config/Routes.php` to a Controller action.
- Controllers extend `App_Controller` or `Security_Controller` and orchestrate Models + Views.
- Models encapsulate database access and business logic. Many extend `Crud_model`.
- Views under `app/Views` render HTML via PHP templates.
- Plugins under `plugins/` provide modular features (e.g., HR, Warehouse, REST API).

For detailed controller/model signatures, see the respective pages.
