<?php

$aColumns = [
	'id',
	'goods_receipt_code',
	'supplier_name',
	'buyer_id',
	'pr_order_id',
	'date_add',
	'total_tax_money', 
	'total_money',
	'approval',
	'5',
];
$sIndexColumn = 'id';
$sTable       = get_db_prefix().'goods_receipt';
$join         = [ ];
$where = [];

if(isset($dataPost['day_vouchers'])){
	$day_vouchers = to_sql_date1($dataPost['day_vouchers']);
}

if (isset($day_vouchers)) {
	$where[] = 'AND '.get_db_prefix().'goods_receipt.date_add <= "' . $day_vouchers . '"';
}

$result = data_tables_init1($aColumns, $sIndexColumn, $sTable, $join, $where, ['id','date_add','date_c','goods_receipt_code', 'supplier_code', 'supplier_name', 'pr_order_id'], '', [], $dataPost);

$output  = $result['output'];
$rResult = $result['rResult'];

foreach ($rResult as $aRow) {
	$row = [];

	for ($i = 0; $i < count($aColumns); $i++) {

		$_data = $aRow[$aColumns[$i]];
		if($aColumns[$i] == 'supplier_name'){
			$_data = '';
			// Try to get supplier name from purchase module vendor first
			if (get_status_modules_wh('purchase') && isset($aRow['supplier_code']) && ($aRow['supplier_code'] != '') && ($aRow['supplier_code'] != 0) ){
				// Query vendor table directly - supplier_code might be vendor ID or userid
				$builder = db_connect('default');
				$builder = $builder->table(get_db_prefix() . 'pur_vendor');
				$builder->where('id', (int)$aRow['supplier_code']);
				$vendor = $builder->get()->getRow();
				if($vendor && isset($vendor->company)){
					$_data = $vendor->company;
				} else {
					// Try with userid field
					$builder2 = db_connect('default');
					$builder2 = $builder2->table(get_db_prefix() . 'pur_vendor');
					$builder2->where('userid', $aRow['supplier_code']);
					$vendor2 = $builder2->get()->getRow();
					if($vendor2 && isset($vendor2->company)){
						$_data = $vendor2->company;
					}
				}
			}
			// Fallback to supplier_name field if vendor lookup failed or not available
			if(empty($_data) && isset($aRow['supplier_name']) && $aRow['supplier_name'] != ''){
				$_data = $aRow['supplier_name'];
			}
			// If still empty and there's a purchase order, get supplier from PO
			if(empty($_data) && get_status_modules_wh('purchase') && isset($aRow['pr_order_id']) && ($aRow['pr_order_id'] != '') && ($aRow['pr_order_id'] != 0)){
				$builder = db_connect('default');
				$builder = $builder->table(get_db_prefix() . 'pur_orders');
				$builder->where('id', (int)$aRow['pr_order_id']);
				$po = $builder->get()->getRow();
				if($po && isset($po->vendor) && $po->vendor != '' && $po->vendor != 0){
					// Query vendor by ID
					$builder2 = db_connect('default');
					$builder2 = $builder2->table(get_db_prefix() . 'pur_vendor');
					$builder2->where('id', (int)$po->vendor);
					$vendor = $builder2->get()->getRow();
					if($vendor && isset($vendor->company)){
						$_data = $vendor->company;
					}
				}
			}
		}elseif($aColumns[$i] == 'buyer_id'){
			$_data = get_staff_full_name1($aRow['buyer_id']);
		}elseif($aColumns[$i] == 'date_add'){
			$_data = format_to_date($aRow['date_add'], false);
		}elseif ($aColumns[$i] == 'total_tax_money') {
			$_data = to_decimal_format((float)$aRow['total_tax_money']);
		}elseif($aColumns[$i] == 'goods_receipt_code'){
			$name = '<a href="' . site_url('warehouse/goods_receipt_detail/' . $aRow['id'] ).'" onclick="init_goods_receipt('.$aRow['id'].'); return false;">' . $aRow['goods_receipt_code'] . '</a>';

			$_data = $name;
		}elseif ($aColumns[$i] == 'total_money') {
			$_data = to_decimal_format((float)$aRow['total_money']);
		}elseif($aColumns[$i] == 'approval') {

			if($aRow['approval'] == 1){
				$_data = '<span class="label label-tag tag-id-1 label-tab1"><span class="badge bg-info large mt-0">'.app_lang('approved').'</span><span class="hide">, </span></span>&nbsp';
			}elseif($aRow['approval'] == 0){
				$_data = '<span class="label label-tag tag-id-1 label-tab2"><span class="badge bg-primary large mt-0">'.app_lang('not_yet_approve').'</span><span class="hide">, </span></span>&nbsp';
			}elseif($aRow['approval'] == -1){
				$_data = '<span class="label label-tag tag-id-1 label-tab3"><span class="badge bg-danger large mt-0">'.app_lang('reject').'</span><span class="hide">, </span></span>&nbsp';
			}
		}elseif($aColumns[$i] == 'pr_order_id'){
			$get_pur_order_name ='';
			if (get_status_modules_wh('purchase')) {
				if( ($aRow['pr_order_id'] != '') && ($aRow['pr_order_id'] != 0) ){
					// Try to get pur_order_name directly if function doesn't exist
					if(function_exists('get_pur_order_name')){
						$po_name = get_pur_order_name($aRow['pr_order_id']);
					} else {
						// Fallback: Query pur_orders table directly for pur_order_name
						$builder = db_connect('default');
						$builder = $builder->table(get_db_prefix() . 'pur_orders');
						$builder->where('id', (int)$aRow['pr_order_id']);
						$po = $builder->get()->getRow();
						$po_name = $po ? $po->pur_order_name : '';
					}
					if(!empty($po_name)){
						$get_pur_order_name .='<a href="'. site_url('purchase/view_pur_order/'.$aRow['pr_order_id']) .'" >'. htmlspecialchars($po_name) .'</a>';
					}
				}
			}

			$_data = $get_pur_order_name;

		}elseif($aColumns[$i] == '5'){

			$view = '<li role="presentation"><a href="' . site_url('warehouse/goods_receipt_detail/' . $aRow['id'] ).'" class="dropdown-item"><span data-feather="eye" class="icon-16"></span> ' . _l('view') . '</a></li>';

			$edit = '';
			if((has_permission('warehouse', '', 'edit') || is_admin()) && ($aRow['approval'] == 0)){
				$edit = '<li role="presentation"><a href="' . site_url('warehouse/manage_goods_receipt/' . $aRow['id'] ) .'" class="dropdown-item"><span data-feather="edit" class="icon-16"></span> ' . _l('edit') . '</a></li>';
			}

			$delete = '';
			if ((has_permission('warehouse', '', 'delete') || is_admin()) && ($aRow['approval'] == 0)) {

				$delete = '<li role="presentation">' . modal_anchor(get_uri("warehouse/delete_goods_receipt_modal_form"), "<i data-feather='x' class='icon-16'></i> " . app_lang('delete'), array("title" => app_lang('delete'). "?", "data-post-id" => $aRow['id'], "class" => "dropdown-item")) . '</li>';

			}

			$delete_approval = '';
			if(get_setting('revert_goods_receipt_goods_delivery') == 1 ){
				if ((has_permission('warehouse', '', 'delete') || is_admin()) && ($aRow['approval'] == 1)) {

					$delete_approval = '<li role="presentation"><a href="' . site_url('warehouse/revert_goods_receipt/' . $aRow['id'] ).'" class="dropdown-item"><span data-feather="x" class="icon-16"></span> ' . _l('delete_after_approval') . '</a></li>';
				}
			}


			$_data = '
			<div class="dropdown" style="position: relative;">
			<button class="btn btn-default dropdown-toggle caret mt0 mb0" type="button" data-bs-toggle="dropdown" aria-expanded="true">
			<i data-feather="tool" class="icon-16"></i>
			</button>
			<ul class="dropdown-menu dropdown-menu-end" role="menu" style="position: absolute; z-index: 1000;">'.$view . $edit . $delete. $delete_approval. '</ul>
			</div>';
		}

		$row[] = $_data;
	}
	$output['aaData'][] = $row;

}
