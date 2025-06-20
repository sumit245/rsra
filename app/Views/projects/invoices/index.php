<div class="card">
    <div class="tab-title clearfix">
        <h4><?php echo app_lang('invoices'); ?></h4>
        <div class="title-button-group">
            <?php
<<<<<<< HEAD
            if ($can_edit_invoices) {
                echo modal_anchor(get_uri("invoices/modal_form"), "<i data-feather='plus-circle' class='icon-16'></i> " . app_lang('add_invoice'), array("class" => "btn btn-default", "title" => app_lang('add_invoice'), "data-post-project_id" => $project_id));
            }
=======
             if ($can_edit_invoices) {
              echo modal_anchor(get_uri("invoices/modal_form"), "<i data-feather='plus-circle' class='icon-16'></i> " . app_lang('add_invoice'), ["class" => "btn btn-default", "title" => app_lang('add_invoice'), "data-post-project_id" => $project_id]);
             }
>>>>>>> 84bca05821fe6d860ca14ea4eb25b0c0df56836b
            ?>
        </div>
    </div>

    <div class="table-responsive">
<<<<<<< HEAD
        <table id="invoice-table" class="display" width="100%">       
=======
        <table id="invoice-table" class="display" width="100%">
>>>>>>> 84bca05821fe6d860ca14ea4eb25b0c0df56836b
        </table>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        var currencySymbol = "<?php echo $project_info->currency_symbol; ?>";
        $("#invoice-table").appTable({
<<<<<<< HEAD
            source: '<?php echo_uri("invoices/invoice_list_data_of_project/" . $project_id . "/" . $project_info->client_id) ?>',
            order: [[0, "desc"]],
            filterDropdown: [{name: "status", class: "w150", options: <?php echo view("invoices/invoice_statuses_dropdown"); ?>}, <?php echo $custom_field_filters; ?>],
=======
            source: '<?php echo_uri("invoices/invoice_list_data_of_project/" . $project_id . "/" . $project_info->client_id)?>',
            order: [[0, "desc"]],
            filterDropdown: [{name: "status", class: "w150", options:                                                                                                                                           <?php echo view("invoices/invoice_statuses_dropdown"); ?>},<?php echo $custom_field_filters; ?>],
>>>>>>> 84bca05821fe6d860ca14ea4eb25b0c0df56836b
            columns: [
                {title: "<?php echo app_lang("invoice_id") ?>", "class": "w10p"},
                {targets: [1], visible: false, searchable: false},
                {targets: [2], visible: false, searchable: false},
                {visible: false, searchable: false},
                {title: "<?php echo app_lang("bill_date") ?>", "class": "w10p", "iDataSort": 3},
                {visible: false, searchable: false},
                {title: "<?php echo app_lang("due_date") ?>", "class": "w10p", "iDataSort": 5},
                {title: "<?php echo app_lang("total_invoiced") ?>", "class": "w10p text-right"},
                {title: "<?php echo app_lang("payment_received") ?>", "class": "w10p text-right"},
                {title: "<?php echo app_lang("due") ?>", "class": "w10p text-right"},
                {title: "<?php echo app_lang("status") ?>", "class": "w10p text-center"}
<?php echo $custom_field_headers; ?>
            ],
            printColumns: combineCustomFieldsColumns([0, 4, 6, 7, 8, 9, 10], '<?php echo $custom_field_headers; ?>'),
            xlsColumns: combineCustomFieldsColumns([0, 4, 6, 7, 8, 9, 10], '<?php echo $custom_field_headers; ?>'),
            summation: [
                {column: 7, dataType: 'currency', currencySymbol: currencySymbol},
                {column: 8, dataType: 'currency', currencySymbol: currencySymbol},
                {column: 9, dataType: 'currency', currencySymbol: currencySymbol}
            ]
        });
    });
</script>