# plugins\Warehouse\Helpers\warehouse_datatables_helper.php

- Path: `plugins\Warehouse\Helpers\warehouse_datatables_helper.php`
- Type: PHP
- Size: 10168 bytes

## Summary (from docblocks)

Render table used for datatables
@param  array   $headings
@param  string  $class              table class / add prefix eq.table-$class
@param  array   $additional_classes additional table classes
@param  array   $table_attributes   table attributes
@param  boolean $tfoot              includes blank tfoot
@return string

Get table last order
@param  string $tableID table unique identifier id
@return string

General function for all datatables, performs search,additional select,join,where,orders
@param  array $aColumns           table columns
@param  mixed $sIndexColumn       main column in table for bettter performing
@param  string $sTable            table name
@param  array  $join              join other tables
@param  array  $where             perform where in query
@param  array  $additionalSelect  select additional fields
@param  string $sGroupBy group results
@return array

## References

**Database Tables (inferred)**
- `join`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\Warehouse\Helpers\warehouse_datatables_helper.php`

**Classes**:
- `table`

**Functions/Methods**:
- `render_datatable1($headings = [], $class = '', $additional_classes = [''], $table_attributes = [])`
- `get_table_last_order($tableID)`
- `data_tables_init1($aColumns, $sIndexColumn, $sTable, $join = [], $where = [], $additionalSelect = [], $sGroupBy = '', $searchAs = [], $dataPost = [])`

