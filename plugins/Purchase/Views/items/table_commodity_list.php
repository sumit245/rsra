<?php

use App\Controllers\Security_Controller;

$purchase_model = model("Purchase\Models\Purchase_model");
$Taxes_model    = model("Models\Taxes_model");

$arr_inventory_min_data       = [];
$filter_arr_inventory_min_max = [];
$arr_inventory_min_id         = [];
$arr_inventory_max_id         = [];

$prefix = get_db_prefix();
$aColumns = [
    '1',
    "{$prefix}items.id",
    'commodity_code',
    "{$prefix}items.title",
    "{$prefix}item_categories.title AS group_name",
    'unit_id',
    'rate',
    'purchase_price',
    't1.percentage AS taxrate_1',
    't2.percentage AS taxrate_2',
    '2'
];

$sIndexColumn = 'id';
$sTable = "{$prefix}items";
$where = ["AND {$prefix}items.deleted = 0"];

$filters = ['warehouse_ft', 'commodity_ft', 'alert_filter', 'item_filter', 'parent_item', 'sub_commodity_ft', 'filter_all_simple_variation'];

foreach ($filters as $filter) {
    if (!empty($dataPost[$filter])) {
        $$filter = $dataPost[$filter];
    }
}

$join = [
    "LEFT JOIN {$prefix}taxes t1 ON t1.id = {$prefix}items.tax",
    "LEFT JOIN {$prefix}taxes t2 ON t2.id = {$prefix}items.tax2",
    "LEFT JOIN {$prefix}item_categories ON {$prefix}item_categories.id = {$prefix}items.category_id"
];

$result = data_tables_purchase($aColumns, $sIndexColumn, $sTable, $join, $where, '', [], $dataPost); //TODO:Problem

log_message('debug', $result['output'][0]);

$output  = $result['output'];
$rResult = $result['rResult'];

$arr_tax_rate = [];
$tax_options  = [
    "deleted" => 0,
];
$get_tax_rate = $Taxes_model->get_details($tax_options)->getResultArray();
foreach ($get_tax_rate as $key => $value) {
    $arr_tax_rate[$value['id']] = $value;
}

$arr_images            = [];
$arr_inventory_min     = [];
$arr_warehouse_by_item = [];
$arr_warehouse_id      = [];
$arr_unit_id           = [];
$get_unit_type         = $purchase_model->get_unit_type();
foreach ($get_unit_type as $key => $value) {
    $arr_unit_id[$value['unit_type_id']] = $value;
}
$inventory_min        = [];
$arr_inventory_number = [];

$item_have_variation = [];

foreach ($rResult as $aRow) {
    $row = [];
    for ($i = 0; $i < count($aColumns); $i++) {

        if (strpos($aColumns[$i], 'as') !== false && ! isset($aRow[$aColumns[$i]])) {
            $_data = $aRow[strafter($aColumns[$i], 'as ')];
        } else {
            $_data = $aRow[$aColumns[$i]];
        }

        /*get commodity file*/
        if ($aColumns[$i] == get_db_prefix() . 'items.id') {

            if ($aRow['files']) {

                $files = unserialize($aRow['files']);

                if (count($files) > 0) {
                    $timeline_file_path = get_setting("timeline_file_path");
                    foreach ($files as $file_key => $file) {
                        if ($file_key == 0) {
                            $file_name = get_array_value($file, "file_name");
                            $thumbnail = get_source_url_of_file($file, $timeline_file_path, "thumbnail");
                            if (is_viewable_image_file($file_name)) {
                                $_data = "<img class='sortable-file images_w_table' src='" . $thumbnail . "' alt='" . $file_name . "'/>";
                            } else {
                                $_data = get_file_icon(strtolower(pathinfo($file_name, PATHINFO_EXTENSION)));
                            }
                        }
                    }
                } else {
                    $thumbnail = get_file_uri('plugins/Warehouse/Uploads/nul_image.jpg');
                    $_data     = "<img class='sortable-file images_w_table' src='" . $thumbnail . "' alt='null_image'/>";
                }
            } else {
                $_data = "<img class='sortable-file images_w_table' src='" . base_url('plugins/Purchase/Uploads/nul_image.jpg') . "' alt='null_image'/>";
            }
        }

        if ($aColumns[$i] == 'commodity_code') {
            $code = '<a href="' . site_url('purchase/view_commodity_detail/' . $aRow['id']) . '">' . $aRow['commodity_code'] . '</a>';

            $_data = $code;
        } elseif ($aColumns[$i] == '1') {
            $_data = '<div class="checkbox"><input type="checkbox" value="' . $aRow['id'] . '" class="form-check-input"><label></label></div>';
        } elseif ($aColumns[$i] == get_db_prefix() . 'item.title') {

            if (isset($arr_inventory_min[$aRow['id']]) && $arr_inventory_min[$aRow['id']] == true) {
                $_data = '<a href="#" class="text-danger"  onclick="show_detail_item(this);return false;" data-name="' . $aRow[get_db_prefix() . 'item.title'] . '" data-warehouse_id="' . $aRow['warehouse_id'] . '" data-commodity_id="' . $aRow['id'] . '"  >' . $aRow[get_db_prefix() . 'item.title'] . '</a>';
            } else {

                $_data = '<a href="#" onclick="show_detail_item(this);return false;" data-name="' . $aRow[get_db_prefix() . 'item.title'] . '"  data-commodity_id="' . $aRow['id'] . '"  >' . $aRow[get_db_prefix() . 'item.title'] . '</a>';
            }
        } elseif ($aColumns[$i] == 'group_name') {
            $_data = $aRow['group_name'];
        } elseif ($aColumns[$i] == 'unit_id') {
            if ($aRow['unit_id'] != null) {
                if (isset($arr_unit_id[$aRow['unit_id']])) {
                    $_data = $arr_unit_id[$aRow['unit_id']]['unit_name'];
                } else {
                    $_data = '';
                }
            } else {
                $_data = '';
            }
        } elseif ($aColumns[$i] == 'rate') {
            $_data = to_decimal_format((float) $aRow['rate']);
        } elseif ($aColumns[$i] == 'purchase_price') {
            $_data = to_decimal_format((float) $aRow['purchase_price']);
        } elseif ($aColumns[$i] == 'taxrate_1') {
            $aRow['taxrate_1'] = $aRow['taxrate_1'] ?? 0;
            $_data             = '<span data-toggle="tooltip" title="' . $aRow['taxname_1'] . '" data-taxid="' . $aRow['tax_id_1'] . '">' . app_format_number($aRow['taxrate_1']) . '%' . '</span>';
        } elseif ($aColumns[$i] == 'taxrate_2') {
            $aRow['taxrate_2'] = $aRow['taxrate_2'] ?? 0;
            $_data             = '<span data-toggle="tooltip" title="' . $aRow['taxname_2'] . '" data-taxid="' . $aRow['tax_id_2'] . '">' . app_format_number($aRow['taxrate_2']) . '%' . '</span>';
        } else if ($aColumns[$i] == '2') {
            $edit = '<li role="presentation">' . modal_anchor(get_uri("purchase/item_modal_form"), "<i data-feather='edit' class='icon-16'></i> " . app_lang('edit'), ["title" => app_lang('edit_item'), "data-post-id" => $aRow['id'], "class" => "dropdown-item"]) . '</li>';

            $delete = '<li role="presentation">' . modal_anchor(get_uri("purchase/delete_modal_form"), "<i data-feather='x' class='icon-16'></i> " . app_lang('delete'), ["title" => app_lang('delete') . "?", "data-post-id" => $aRow['id'], "class" => "dropdown-item"]) . '</li>';

            $_data = '
				<span class="dropdown inline-block">
				<button class="btn btn-default dropdown-toggle caret mt0 mb0" type="button" data-bs-toggle="dropdown" aria-expanded="true" data-bs-display="static">
				<i data-feather="tool" class="icon-16"></i>
				</button>
				<ul class="dropdown-menu dropdown-menu-end" role="menu">' . $edit . $delete . '</ul>
				</span>';
        }

        $row[] = $_data;
    }
    $output['aaData'][] = $row;
}
