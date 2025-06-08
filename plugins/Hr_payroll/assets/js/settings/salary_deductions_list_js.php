<script>
	var purchase, purchase_value;

	$(document).ready(function () {

		"use strict";  


		<?php if(isset($salary_deductions_list)){?>
			var dataObject_pu = <?php echo html_entity_decode($salary_deductions_list); ?>;
		<?php }else{ ?>
			var dataObject_pu = [];
		<?php } ?>

		/*hansometable for purchase*/
		var row_global;
		setTimeout(function(){

			var hotElement1 = document.getElementById('salary_deductions_list_hs');

			purchase = new Handsontable(hotElement1, {
				licenseKey: 'non-commercial-and-evaluation',

				contextMenu: true,
				manualRowMove: true,
				manualColumnMove: true,
				stretchH: 'all',
				autoWrapRow: true,
				rowHeights: 30,
				defaultRowHeight: 100,
				minRows: 10,
				maxRows: 40,
				width: '100%',
				height: 500,

				rowHeaders: true,
				colHeaders: true,
				autoColumnSize: {
					samplingRatio: 23
				},

				filters: true,
				manualRowResize: true,
				manualColumnResize: true,
				allowInsertRow: true,
				allowRemoveRow: true,
				columnHeaderHeight: 40,

				colWidths:  [40, 120, 50, 50],
				rowHeights: 30,
				rowHeaderWidth: [44],
				minSpareRows: 1,
				hiddenColumns: {
					columns: [4],
					indicators: true
				},
				columns: [
				{
					type: 'text',
					data: 'code',
				},
				{
					type: 'text',
					data: 'description',
				},
				{
					type: 'numeric',
					data: 'rate',
					numericFormat: {
						pattern: '0,00',
					},
				},

				{
					type: 'text',
					data: 'basis',
					renderer: customDropdownRenderer,
					editor: "chosen",
					chosenOptions: {
						data: <?php echo json_encode($basis_value); ?>
					}

				},
				{
					type: 'text',
					data: 'id',
				},


				],

				colHeaders: [
				'<?php echo app_lang('salary_deduction_code'); ?>',
				'<?php echo app_lang('salary_deduction_name'); ?>',
				'<?php echo app_lang('salary_deduction_rate'); ?>',
				'<?php echo app_lang('salary_deduction_basis'); ?>',
				'<?php echo app_lang('id'); ?>',
				],

				data: dataObject_pu,
			});

			purchase_value = purchase;


		},300);



	});

	function customDropdownRenderer(instance, td, row, col, prop, value, cellProperties) {
		"use strict";
		var selectedId;
		var optionsList = cellProperties.chosenOptions.data;

		if(typeof optionsList === "undefined" || typeof optionsList.length === "undefined" || !optionsList.length) {
			Handsontable.cellTypes.text.renderer(instance, td, row, col, prop, value, cellProperties);
			return td;
		}

		var values = (value + "").split("|");
		value = [];
		for (var index = 0; index < optionsList.length; index++) {

			if (values.indexOf(optionsList[index].id + "") > -1) {
				selectedId = optionsList[index].id;
				value.push(optionsList[index].label);
			}
		}
		value = value.join(", ");

		Handsontable.cellTypes.text.renderer(instance, td, row, col, prop, value, cellProperties);
		return td;
	}


	$('.add_salary_deductions_list').on('click', function() {
		'use strict';

		var valid_contract = $('#salary_deductions_list_hs').find('.htInvalid').html();

		if(valid_contract){
			appAlert.warning("<?php echo app_lang('data_must_number') ; ?>");
		}else{

			$('input[name="salary_deductions_list_hs"]').val(JSON.stringify(purchase_value.getData()));   
			$('#add_salary_deductions_list').submit(); 

		}
	});


</script>