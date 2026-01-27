
<script>
	$(document).ready(function () {
		"use strict";

		setDatePicker("#date_c, #date_add");
		setDatePicker(".datePickerInput");
		$('input[name="date_manufacture"]').val('');
		$('input[name="expiry_date"]').val('');

		$(".select2").select2();

	});

	$("#add_goods_receipt").appForm({
		ajaxSubmit: false,
	});

	var purchase;
	var lastAddedItemKey = null;
	(function($) {
		"use strict";

		/*Maybe items ajax search*/
		init_ajax_search('items','#item_select.ajax-search',undefined,"<?php echo get_uri("warehouse/wh_commodity_code_search") ?>");
		/*required field date_c,date_add*/
		wh_calculate_total();

	})(jQuery);

	function get_tax_name_by_id(tax_id){
		"use strict";
		var taxe_arr = <?php echo json_encode($taxes); ?>;
		var name_of_tax = '';
		$.each(taxe_arr, function(i, val){
			if(val.id == tax_id){
				name_of_tax = val.label;
			}
		});
		return name_of_tax;
	}

	function tax_rate_by_id(tax_id){
		"use strict";
		var taxe_arr = <?php echo json_encode($taxes); ?>;
		var tax_rate = 0;
		$.each(taxe_arr, function(i, val){
			if(val.id == tax_id){
				tax_rate = val.taxrate;
			}
		});
		return tax_rate;
	}

	function numberWithCommas(x) {
		"use strict";
		return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	}


	(function($) {
		"use strict";

		/*Add item to preview from the dropdown for invoices estimates*/
		$("body").on('change', 'select[name="item_select"]', function () {
			"use strict";

			var itemid = $('select[name="item_select"]').val();
			if (itemid != '') {
				wh_add_item_to_preview(itemid);
			}
		});

		/*Recaulciate total on these changes*/
		$("body").on('change', 'select.taxes', function () {
			"use strict";

			wh_calculate_total();
		});

		$("body").on('click', '.add_goods_receipt', function () {
			"use strict";

			submit_form(false);
		});

		$('.add_goods_receipt_send').on('click', function() {
			"use strict";

			submit_form(true);
		});


		// Use delegated event handler to ensure it works even if select2 is reinitialized
		$(document).on('change', 'select[name="pr_order_id"]', function() {
			"use strict";  

			var pr_order_id = $(this).val();

			if(pr_order_id != '' && pr_order_id != null){
				// Show loading indicator
				$("body").append('<div class="dt-loader"></div>');
				
				// First, get vendor information from purchase order
				$.post("<?php echo get_uri("warehouse/copy_pur_vender/") ?>"+pr_order_id).done(function(response){
					try {
						var response_vendor = typeof response === 'string' ? JSON.parse(response) : response;

						// Auto-populate supplier from purchase order
						if(response_vendor.userid){
							var $supplierSelect = $('select[name="supplier_code"]');
							$supplierSelect.val(response_vendor.userid);
							if($supplierSelect.hasClass('select2-hidden-accessible')){
								$supplierSelect.trigger('change.select2');
							} else {
								$supplierSelect.trigger('change');
							}
						}
						
						if(response_vendor.buyer){
							var $buyerSelect = $('select[name="buyer_id"]');
							$buyerSelect.val(response_vendor.buyer);
							if($buyerSelect.hasClass('select2-hidden-accessible')){
								$buyerSelect.trigger('change.select2');
							} else {
								$buyerSelect.trigger('change');
							}
						}

						if(response_vendor.project && $('select[name="project"]').length){
							$('select[name="project"]').val(response_vendor.project).trigger('change.select2');
						}
						if(response_vendor.type && $('select[name="type"]').length){
							$('select[name="type"]').val(response_vendor.type).trigger('change.select2');
						}
						if(response_vendor.department && $('select[name="department"]').length){
							$('select[name="department"]').val(response_vendor.department).trigger('change.select2');
						}
						if(response_vendor.requester && $('select[name="requester"]').length){
							$('select[name="requester"]').val(response_vendor.requester).trigger('change.select2');
						}
					} catch(e) {
						console.error('Error parsing vendor response:', e, response);
					}
				}).fail(function(error) {
					console.error('Error loading vendor data:', error);
					appAlert.error("<?php echo _l('error_loading_vendor_data') ?>");
				});

				// Then, get purchase order items (with remaining quantities)
				$.get("<?php echo get_uri("warehouse/coppy_pur_request/") ?>"+pr_order_id).done(function(response){
					try {
						var response_data = typeof response === 'string' ? JSON.parse(response) : response;

						if(response_data && typeof response_data.list_item !== 'undefined'){
							// Preserve the main row template (tr.main) if it exists for manual item entry
							var $tbody = $('.invoice-item table.invoice-items-table.items tbody');
							if($tbody.length === 0){
								console.error('Table body not found');
								$("body").find('.dt-loader').remove();
								appAlert.error("Table structure not found. Please refresh the page.");
								return;
							}
							
							var $mainRow = $tbody.find('tr.main').first();
							var mainRowHtml = '';
							if($mainRow.length > 0 && $mainRow.hasClass('main')){
								mainRowHtml = $mainRow[0].outerHTML;
							}
							
							$tbody.html('');
							
							// Restore main row template if it existed (for manual item entry)
							if(mainRowHtml){
								$tbody.append(mainRowHtml);
							}
							
							// Append PO items only if there are items (list_item may be empty string if no items)
							if(response_data.list_item && response_data.list_item.trim() !== ''){
								$tbody.append(response_data.list_item);
							}

							setTimeout(function () {
								wh_calculate_total();
							}, 15);

							// Reinitialize select2 and date pickers for new items (excluding pr_order_id to avoid conflicts)
							// Only reinitialize select2 on elements that exist in the current DOM
							setTimeout(function(){
								$tbody.find('.select2').not('select[name="pr_order_id"]').each(function(){
									var $el = $(this);
									// Only initialize if element exists and is not already initialized
									if($el.length > 0 && $el.is(':visible') && !$el.hasClass('select2-hidden-accessible') && $el.attr('name') !== 'pr_order_id' && $el.attr('id') !== 'pr_order_id'){
										try {
											// Destroy existing select2 if it exists
											if($el.hasClass('select2-hidden-accessible')){
												$el.select2('destroy');
											}
											$el.select2();
										} catch(e) {
											console.error('Error initializing select2:', e);
										}
									}
								});
							}, 50);
							setDatePicker(".datePickerInput");
							wh_reorder_items('.invoice-item');
							wh_clear_item_preview_values('.invoice-item');
							$('body').find('#items-warning').remove();
							$("body").find('.dt-loader').remove();
							if($('#item_select').length){
								// item_select uses select2, not selectpicker
								var $itemSelect = $('#item_select');
								$itemSelect.val('').trigger('change');
							}
							
							// Don't show warning - items should always be available from purchase order
						} else {
							$("body").find('.dt-loader').remove();
							appAlert.warning("No items found in purchase order.");
						}
					} catch(e) {
						console.error('Error parsing purchase order response:', e, response);
						$("body").find('.dt-loader').remove();
						appAlert.error("Failed to load purchase order items. Please try again.");
					}

				}).fail(function(error) {
					console.error('Error loading purchase order items:', error);
					$("body").find('.dt-loader').remove();
					appAlert.error("Failed to load purchase order items. Please try again.");
				});
			}else{
				// Clear supplier and other fields when no PO is selected
				$('select[name="supplier_code"]').val('').trigger('change.select2');
				$('select[name="buyer_id"]').val('').trigger('change.select2');

				if($('select[name="project"]').length){
					$('select[name="project"]').val('').trigger('change.select2');
				}
				if($('select[name="type"]').length){
					$('select[name="type"]').val('').trigger('change.select2');
				}
				if($('select[name="department"]').length){
					$('select[name="department"]').val('').trigger('change.select2');
				}
				if($('select[name="requester"]').length){
					$('select[name="requester"]').val('').trigger('change.select2');
				}
				
				// Clear items table
				$('.invoice-item table.invoice-items-table.items tbody').html('');
				wh_calculate_total();
			}

		});

	})(jQuery);

	/*Add item to preview*/
	function wh_add_item_to_preview(id) {
		"use strict";

		requestGetJSON("<?php  echo get_uri('warehouse/get_item_by_id/') ?>" + id).done(function (response) {
			wh_clear_item_preview_values();

			$('.main input[name="commodity_code"]').val(response.itemid);
			$('.main textarea[name="commodity_name"]').val(response.code_description);
			$('.main input[name="unit_price"]').val(response.purchase_price);
			$('.main input[name="unit_name"]').val(response.unit_name);
			$('.main input[name="unit_id"]').val(response.unit_id);
			$('.main input[name="quantities"]').val(1);

			if($('select[name="warehouse_id_m"]').val() != ''){
				$('.main select[name="warehouse_id"]').val($('select[name="warehouse_id_m"]').val()).change();
			}

			var taxSelectedArray = [];
			if (response.taxname && response.taxrate) {
				taxSelectedArray.push(response.taxname + '|' + response.taxrate);
			}
			if (response.taxname_2 && response.taxrate_2) {
				taxSelectedArray.push(response.taxname_2 + '|' + response.taxrate_2);
			}

			$('.main select.taxes').val(taxSelectedArray).change();
			$('.main input[name="unit"]').val(response.unit_name);

			$(document).trigger({
				type: "item-added-to-preview",
				item: response,
				item_type: 'item',
			});
		});
	}

	function wh_add_item_to_table(data, itemid) {
		"use strict";

		data = typeof (data) == 'undefined' || data == 'undefined' ? wh_get_item_preview_values() : data;

		if (data.warehouse_id == "" || data.quantities == "" || data.commodity_code == "" ) {
			if(data.warehouse_id == ""){
				appAlert.warning("<?php echo _l('please_select_a_warehouse') ?>");

			}
			return;
		}
		var table_row = '';
		var item_key = lastAddedItemKey ? lastAddedItemKey += 1 : $("body").find('.invoice-items-table tbody .item').length + 1;
		lastAddedItemKey = item_key;
		$("body").append('<div class="dt-loader"></div>');
		wh_get_item_row_template('newitems[' + item_key + ']',data.commodity_name,data.warehouse_id,data.quantities, data.unit_name,data.unit_price, data.taxname, data.lot_number,data.date_manufacture,data.expiry_date, data.commodity_code, data.unit_id, data.tax_rate, data.tax_money, data.goods_money, data.note, itemid).done(function(output){
			table_row += output;

			$('.invoice-item table.invoice-items-table.items tbody').append(table_row);

			setTimeout(function () {
				wh_calculate_total();
			}, 15);


			$('input[name="newitems[' + item_key + '][date_manufacture]"]').val(data.date_manufacture);

			wh_reorder_items('.invoice-item');
			wh_clear_item_preview_values('.invoice-item');
			$('body').find('#items-warning').remove();
			$("body").find('.dt-loader').remove();
			$('#item_select').val('').change();

			$('.refresh_tax2 .select2').select2('destroy');
			$('.refresh_tax2 .select2').select2();
			$('.refresh_warehouse2 .select2').select2('destroy');
			$('.refresh_warehouse2 .select2').select2();

		// open serial modal
		fill_multiple_serial_number_modal(data.quantities, 'newitems[' + item_key + ']', 'add');
		return true;
	});
		return false;
	}

	function wh_get_item_preview_values() {
		"use strict";

		var response = {};
		response.commodity_name = $('.main textarea[name="commodity_name"]').val();
		response.warehouse_id = $('.main select[name="warehouse_id"]').val();
		response.quantities = $('.main input[name="quantities"]').val();
		response.unit_name = $('.main input[name="unit_name"]').val();
		response.unit_price = $('.main input[name="unit_price"]').val();
		response.taxname = $('.main select.taxes').val();
		response.lot_number = $('.main input[name="lot_number"]').val();
		response.date_manufacture = $('.main input[name="date_manufacture"]').val();
		response.expiry_date = $('.main input[name="expiry_date"]').val();
		response.commodity_code = $('.main input[name="commodity_code"]').val();
		response.unit_id = $('.main input[name="unit_id"]').val();
		response.tax_rate = $('.main input[name="tax_rate"]').val();
		response.tax_money = $('.main input[name="tax_money"]').val();
		response.goods_money = $('.main input[name="goods_money"]').val();
		response.note = $('.main input[name="note"]').val();

		return response;
	}

	function wh_clear_item_preview_values(parent) {
		"use strict";
		
		var taxSelectedArray = [];
		$('.main select.taxes').val(taxSelectedArray).change();
		$('.main select[name="warehouse_id"]').val('').change();
		$('.main input').val('');
		$('.main textarea').val('');
	}

	function wh_get_item_row_template(name, commodity_name, warehouse_id, quantities, unit_name, unit_price, taxname, lot_number, date_manufacture, expiry_date, commodity_code, unit_id, tax_rate, tax_money, goods_money, note, item_key)  {
		"use strict";

		jQuery.ajaxSetup({
			async: false
		});

		var d = $.post("<?php echo get_uri("warehouse/get_good_receipt_row_template") ?>", {
			name: name,
			commodity_name : commodity_name,
			warehouse_id : warehouse_id,
			quantities : quantities,
			unit_name : unit_name,
			unit_price : unit_price,
			taxname : taxname,
			lot_number : lot_number,
			date_manufacture : date_manufacture,
			expiry_date : expiry_date,
			commodity_code : commodity_code,
			unit_id : unit_id,
			tax_rate : tax_rate,
			tax_money : tax_money,
			goods_money : goods_money,
			note : note,
			item_key : item_key
		});
		jQuery.ajaxSetup({
			async: true
		});
		return d;
	}

	function wh_delete_item(row, itemid,parent) {
		"use strict";
		$(row).parents('tr').remove();
		wh_calculate_total();

		if (itemid && $('input[name="isedit"]').length > 0) {
			$(parent+' #removed-items').append(hidden_input('removed_items[]', itemid));
		}
	}

	function wh_reorder_items(parent) {
		"use strict";

		var rows = $(parent + ' .table.has-calculations tbody tr.item');
		var i = 1;
		$.each(rows, function () {
			$(this).find('input.order').val(i);
			i++;
		});
	}

	function wh_calculate_total(){
		"use strict";
		if ($('body').hasClass('no-calculate-total')) {
			return false;
		}

		if (AppHelper.settings.noOfDecimals == "0") {
			var decimal_places  = 0; /*round it and the add static 2 decimals*/
		} else {
			var decimal_places  = 2;
		}

		var calculated_tax,
		taxrate,
		item_taxes,
		row,
		_amount,
		_tax_name,
		taxes = {},
		taxes_rows = [],
		subtotal = 0,
		total = 0,
		total_tax_money = 0,
		quantity = 1,
		total_discount_calculated = 0,
		rows = $('.table.has-calculations tbody tr.item'),
		subtotal_area = $('#subtotal'),
		discount_area = $('#discount_area'),
		adjustment = $('input[name="adjustment"]').val(),
		discount_percent = 'before_tax',
		discount_fixed = $('input[name="discount_total"]').val(),
		discount_total_type = $('.discount-total-type.selected'),
		discount_type = $('select[name="discount_type"]').val();

		$('.wh-tax-area').remove();

		$.each(rows, function () {

			quantity = $(this).find('[data-quantity]').val();
			if (quantity === '') {
				quantity = 1;
				$(this).find('[data-quantity]').val(1);
			}

			_amount = parseFloat($(this).find('td.rate input').val() * quantity).toFixed(decimal_places)
			_amount = parseFloat(_amount);

			$(this).find('td.amount').html(toCurrency(_amount));

			subtotal += _amount;
			row = $(this);
			item_taxes = $(this).find('select.taxes').val();

			if (item_taxes) {
				$.each(item_taxes, function (i, taxname) {
					taxrate = row.find('select.taxes [value="' + taxname + '"]').data('taxrate');
					calculated_tax = (_amount / 100 * taxrate);
					if (!taxes.hasOwnProperty(taxname)) {
						if (taxrate != 0) {
							_tax_name = taxname.split('|');
							var tax_row = '<tr class="wh-tax-area"><td>' + _tax_name[0] + '(' + taxrate + '%)</td><td id="tax_id_' + slugify(taxname) + '"></td></tr>';
							$(subtotal_area).after(tax_row);
							taxes[taxname] = calculated_tax;
						}
					} else {
					// Increment total from this tax
					taxes[taxname] = taxes[taxname] += calculated_tax;
				}
			});
			}
		});

	// Discount by percent
	if ((discount_percent !== '' && discount_percent != 0) && discount_type == 'before_tax' && discount_total_type.hasClass('discount-type-percent')) {
		total_discount_calculated = (subtotal * discount_percent) / 100;
	} else if ((discount_fixed !== '' && discount_fixed != 0) && discount_type == 'before_tax' && discount_total_type.hasClass('discount-type-fixed')) {
		total_discount_calculated = discount_fixed;
	}

	$.each(taxes, function (taxname, total_tax) {
		if ((discount_percent !== '' && discount_percent != 0) && discount_type == 'before_tax' && discount_total_type.hasClass('discount-type-percent')) {
			total_tax_calculated = (total_tax * discount_percent) / 100;
			total_tax = (total_tax - total_tax_calculated);
		} else if ((discount_fixed !== '' && discount_fixed != 0) && discount_type == 'before_tax' && discount_total_type.hasClass('discount-type-fixed')) {
			var t = (discount_fixed / subtotal) * 100;
			total_tax = (total_tax - (total_tax * t) / 100);
		}

		total += total_tax;
		total_tax_money += total_tax;
		total_tax = toCurrency(total_tax);
		$('#tax_id_' + slugify(taxname)).html(total_tax);
	});

	total = (total + subtotal);

	// Discount by percent
	if ((discount_percent !== '' && discount_percent != 0) && discount_type == 'after_tax' && discount_total_type.hasClass('discount-type-percent')) {
		total_discount_calculated = (total * discount_percent) / 100;
	} else if ((discount_fixed !== '' && discount_fixed != 0) && discount_type == 'after_tax' && discount_total_type.hasClass('discount-type-fixed')) {
		total_discount_calculated = discount_fixed;
	}

	total = total - total_discount_calculated;
	adjustment = parseFloat(adjustment);

	// Check if adjustment not empty
	if (!isNaN(adjustment)) {
		total = total + adjustment;
	}

	var discount_html = '-' + toCurrency(total_discount_calculated);
	$('input[name="discount_total"]').val(parseFloat(total_discount_calculated).toFixed(decimal_places));

	// Append, format to html and display
	$('.discount-total').html(discount_html);
	$('.adjustment').html(toCurrency(adjustment));
	$('.wh-subtotal').html(toCurrency(subtotal) + hidden_input('total_goods_money', parseFloat(subtotal).toFixed(decimal_places)) + hidden_input('value_of_inventory', parseFloat(subtotal).toFixed(decimal_places)));

	$('.inventory_value').remove();
	var total_inventory_value = '<tr class="inventory_value"><td><span class="bold"><?php echo _l('value_of_inventory'); ?> :</span></td><td class="">'+toCurrency(subtotal)+'</td></tr>';
	$('#subtotal').after(total_inventory_value);

	$('.total_tax_value').remove();
	var total_tax_value = '<tr class="total_tax_value"><td><span class="bold"><?php echo _l('total_tax_money'); ?> :</span></td><td class="">'+toCurrency(total_tax_money)+'</td></tr>';
	$('#totalmoney').before(total_tax_value);

	$('.wh-total').html(toCurrency(total) + hidden_input('total_tax_money', parseFloat(total_tax_money).toFixed(decimal_places)) + hidden_input('total_money',parseFloat(total).toFixed(decimal_places)));

	$(document).trigger('wh-receipt-note-total-calculated');

}


	function submit_form(save_and_send_request) {
	"use strict";

	wh_calculate_total();

	var $itemsTable = $('.invoice-items-table');
	var $previewItem = $itemsTable.find('.main');

	if ( $itemsTable.length && $itemsTable.find('.item').length === 0) {
		appAlert.warning("<?php echo _l('wh_enter_at_least_one_product') ?>");

		return false;
	}

	// Get main warehouse from the form (for PO items that don't have individual warehouse selection)
	var main_warehouse_id = $('select[name="warehouse_id_m"]').val();

	// Check if main warehouse is selected (required for PO items)
	if(!main_warehouse_id || main_warehouse_id == ''){
		appAlert.warning("<?php echo _l('please_select_a_warehouse') ?>");
		return false;
	}

	$('input[name="save_and_send_request"]').val(save_and_send_request);

	var rows = $('.table.has-calculations tbody tr.item');
	var check_warehouse_status = true;
	$.each(rows, function () {
		var $row = $(this);
		// Check if this row has a warehouse_select column (manual items)
		var $warehouseSelect = $row.find('td.warehouse_select select');
		var warehouse_id = '';
		
		if($warehouseSelect.length > 0){
			// Manual item - use its own warehouse selection
			warehouse_id = $warehouseSelect.val();
		} else {
			// PO item - use main warehouse and populate hidden field
			warehouse_id = main_warehouse_id;
			// Ensure hidden warehouse_id field exists and is set
			var $hiddenWarehouse = $row.find('input[name*="[warehouse_id]"]');
			if($hiddenWarehouse.length === 0){
				// Add hidden field if it doesn't exist
				var rowName = $row.find('input[name*="[commodity_code]"]').attr('name').replace('[commodity_code]', '');
				$row.find('td.dragger').append('<input type="hidden" name="' + rowName + '[warehouse_id]" value="' + main_warehouse_id + '">');
			} else {
				// Update existing hidden field
				$hiddenWarehouse.val(main_warehouse_id);
			}
		}
		
		if(warehouse_id == '' || warehouse_id == undefined){
			check_warehouse_status = false;
		}
	})
	
	if(check_warehouse_status == true){
		// Add disabled to submit buttons
		$('.add_goods_receipt_send').prop('disabled', true);
		$('.add_goods_receipt').prop('disabled', true);
		$('#add_goods_receipt').submit();
	}else{
		appAlert.warning("<?php echo _l('please_select_a_warehouse') ?>");
	}

	return true;
}

/*scanner barcode*/
$(document).ready(function() {
	var pressed = false;
	var chars = [];
	$(window).keypress(function(e) {
		if (e.key == '%') {
			pressed = true;
		}
		chars.push(String.fromCharCode(e.which));
		if (pressed == false) {
			setTimeout(function() {
				if (chars.length >= 8) {
					var barcode = chars.join('');
					
					requestGetJSON("<?php  echo get_uri('warehouse/wh_get_item_by_barcode/') ?>" + barcode).done(function (response) {
						if(response.status == true || response.status == 'true'){
							wh_add_item_to_preview(response.id);
							appAlert.success(response.message);
						}else{
							appAlert.warning("<?php echo _l('no_matching_products_found') ?>");
						}
					});

				}
				chars = [];
				pressed = false;
			}, 200);
		}
		pressed = true;
	});
});

function fill_multiple_serial_number_modal(quantity, prefix_name, slug, serial_input_value) {

	if( quantity > 0){

		var data = {ajaxModal: 1},
		isLargeModal = $(this).attr('data-modal-lg'),
		isFullscreenModal = $(this).attr('data-modal-fullscreen'),
		title = "<?php echo app_lang("wh_enter_the_serial_number") ?>";

		if (title) {
			$("#ajaxModalTitle").html(title);
		} else {
			$("#ajaxModalTitle").html($("#ajaxModalTitle").attr('data-title'));
		}

		if ($(this).attr("data-post-hide-header")) {
			$("#ajaxModal .modal-header").addClass("hide");
			$("#ajaxModal .modal-footer").addClass("hide");
		} else {
			$("#ajaxModal .modal-header").removeClass("hide");
			$("#ajaxModal .modal-footer").removeClass("hide");
		}

		$("#ajaxModalContent").html($("#ajaxModalOriginalContent").html());
		$("#ajaxModalContent").find(".original-modal-body").removeClass("original-modal-body").addClass("modal-body");
		$("#ajaxModal").modal('show');
		$("#ajaxModal").find(".modal-dialog").removeClass("custom-modal-lg");
		$("#ajaxModal").find(".modal-dialog").removeClass("modal-fullscreen");
		$(".modal-backdrop").remove();

		data.slug = slug;
		data.quantity = quantity;
		data.prefix_name = prefix_name;
		data.serial_input_value = serial_input_value;

		ajaxModalXhr = $.ajax({
			url: "<?php echo get_uri("warehouse/fill_multiple_serial_number_modal") ?>",
			data: data,
			cache: false,
			type: 'POST',
			success: function (response) {
				$("#ajaxModal").find(".modal-dialog").removeClass("mini-modal");
				if (isLargeModal === "1") {
					$("#ajaxModal").find(".modal-dialog").addClass("custom-modal-lg");
				} else if (isFullscreenModal === "1") {
					$("#ajaxModal").find(".modal-dialog").addClass("modal-fullscreen");
				}
				$("#ajaxModalContent").html(response);

				setSummernoteToAll(true);
				setModalScrollbar();

				feather.replace();
			},
			statusCode: {
				404: function () {
					$("#ajaxModalContent").find('.modal-body').html("");
					appAlert.error("404: Page not found.", {container: '.modal-body', animate: false});
				}
			},
			error: function () {
				$("#ajaxModalContent").find('.modal-body').html("");
				appAlert.error("500: Internal Server Error.", {container: '.modal-body', animate: false});
			}
		});
		return false;

	}else{
		appAlert.warning("<?php echo _l('please_choose_quantity_more_than_0') ?>");
	}

}

function wh_view_serial_number(name_quantities, serial_input, prefix_name){
	"use strict";

	var serial_input_value = $('input[name="'+serial_input+'"]').val();
	if(serial_input_value == ''){
		var quantity = $('input[name="'+name_quantities+'"]').val();
		fill_multiple_serial_number_modal(quantity, prefix_name, 'add');
	}else{
		fill_multiple_serial_number_modal(1, prefix_name, 'edit', serial_input_value);
	}

}


</script>
