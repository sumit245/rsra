# app\Config\Feature.php

- Path: `app\Config\Feature.php`
- Type: PHP
- Size: 958 bytes

## Summary (from docblocks)

Enable/disable backward compatibility breaking features.

Enable multiple filters for a route or not.
If you enable this:
  - CodeIgniter\CodeIgniter::handleRequest() uses:
    - CodeIgniter\Filters\Filters::enableFilters(), instead of enableFilter()
  - CodeIgniter\CodeIgniter::tryToRouteIt() uses:
    - CodeIgniter\Router\Router::getFilters(), instead of getFilter()
  - CodeIgniter\Router\Router::handle() uses:
    - property $filtersInfo, instead of $filterInfo
    - CodeIgniter\Router\RouteCollection::getFiltersForRoute(), instead of getFilterForRoute()
@var bool

Use improved new auto routing instead of the default legacy version.

## Symbols

# Symbols

**Files documented**: 1

## `app\Config\Feature.php`

**Classes**:
- `Config\Feature extends BaseConfig`

