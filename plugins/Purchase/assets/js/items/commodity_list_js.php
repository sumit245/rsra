<script>
(function($) {
    "use strict";

    $('.select2').select2();

    // Destroy existing DataTable if it exists
    if ($.fn.DataTable.isDataTable('#table-table_commodity_list')) {
        $('#table-table_commodity_list').DataTable().destroy();
    }

    // Initialize DataTable with proper server-side processing
    var table_commodity_list = $('#table-table_commodity_list').DataTable({
        processing: true,
        serverSide: true,
        destroy: true, // Allow reinitialization
        ajax: {
            url: "<?php echo get_uri('purchase/table_commodity_list'); ?>",
            type: "POST",
            data: function(d) {
                console.log("🔍 Sending to server:", d);
                return d;
            },
            dataSrc: function(json) {
                console.log("🔍 Backend Data for table_commodity_list:", json);
                if (json.error) {
                    console.error("Server Error:", json.error);
                    alert("Error: " + json.error);
                    return [];
                }
                if (json.debug_info) {
                    console.log("Debug Info:", json.debug_info);
                }
                return json.aaData || json.data || [];
            },
            error: function(xhr, error, thrown) {
                console.error("DataTable Ajax Error:", error, thrown);
                console.error("Response Text:", xhr.responseText);
                console.error("Status:", xhr.status);
                
                // Try to parse the response to get more details
                try {
                    var response = JSON.parse(xhr.responseText);
                    if (response && response.error) {
                        console.error("Server Error Details:", response.error);
                        alert("Server Error: " + response.error);
                    }
                } catch (e) {
                    console.error("Could not parse error response");
                    alert("An error occurred while loading data. Please check the console for details.");
                }
            }
        },
        columns: [
            { data: 0, orderable: false, searchable: false, width: "50px" },
            { data: 1, orderable: false, width: "80px" },
            { data: 2, width: "120px" },
            { data: 3, width: "200px" },
            { data: 4, width: "120px" },
            { data: 5, width: "100px" },
            { data: 6, width: "100px" },
            { data: 7, width: "100px" },
            { data: 8, width: "80px" },
            { data: 9, width: "80px" },
            { data: 10, orderable: false, searchable: false, width: "100px" }
        ],
        order: [[2, 'desc']], // Order by title column
        pageLength: 25,
        lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        language: {
            processing: "Loading...",
            emptyTable: "No data available",
            zeroRecords: "No matching records found",
            loadingRecords: "Loading...",
            search: "Search:",
            paginate: {
                first: "First",
                last: "Last",
                next: "Next",
                previous: "Previous"
            }
        },
        drawCallback: function(settings) {
            console.log("DataTable draw completed");
            // Re-initialize feather icons if they're used
            if (typeof feather !== 'undefined') {
                feather.replace();
            }
        },
        initComplete: function(settings, json) {
            console.log("DataTable initialization completed");
            
            // If there was an error in the response, show it
            if (json && json.error) {
                console.error("Server reported an error:", json.error);
                alert("Error: " + json.error);
            }
            
            // If debug info is available, log it
            if (json && json.debug_info) {
                console.log("Table used:", json.debug_info.table_used);
                console.log("Total records:", json.debug_info.total_records);
                console.log("Filtered records:", json.debug_info.filtered_records);
            }
        }
    });

    // Store table reference globally
    window.table_commodity_list = table_commodity_list;

    // Mass select all functionality
    $("body").on('change', '#mass_select_all', function () {
        var to, rows, checked;
        to = $(this).data('to-table');
        rows = $('.table-' + to).find('tbody tr');
        checked = $(this).prop('checked');
        
        $.each(rows, function () {
            $($(this).find('td').eq(0)).find('input').prop('checked', checked);
        });
    });

    // Bulk action checkbox handlers
    $('input[id="mass_delete"]').on('click', function() {
        var mass_delete = $('input[id="mass_delete"]').is(":checked");
        
        if(mass_delete) {
            $('input[id="change_item_selling_price"]').prop("checked", false);
            $('input[name="selling_price"]').val('');
            $('input[id="change_item_purchase_price"]').prop("checked", false);
            $('input[name="b_purchase_price"]').val('');
            $('input[id="clone_items"]').prop("checked", false);
        }
    });

    $('input[id="change_item_selling_price"]').on('click', function() {
        var item_selling_price_checking = $('input[id="change_item_selling_price"]').is(":checked");
        
        if(item_selling_price_checking) {
            $('input[id="mass_delete"]').prop("checked", false);
            $('input[id="change_item_purchase_price"]').prop("checked", false);
            $('input[name="b_purchase_price"]').val('');
            $('input[id="clone_items"]').prop("checked", false);
        }
    });

    $('input[id="change_item_purchase_price"]').on('click', function() {
        var item_selling_purchase_checking = $('input[id="change_item_purchase_price"]').is(":checked");
        
        if(item_selling_purchase_checking) {
            $('input[id="mass_delete"]').prop("checked", false);
            $('input[id="change_item_selling_price"]').prop("checked", false);
            $('input[name="selling_price"]').val('');
            $('input[id="clone_items"]').prop("checked", false);
        }
    });

    $('input[id="clone_items"]').on('click', function() {
        var clone_items = $('input[id="clone_items"]').is(":checked");
        
        if(clone_items) {
            $('input[id="change_item_selling_price"]').prop("checked", false);
            $('input[name="selling_price"]').val('');
            $('input[id="change_item_purchase_price"]').prop("checked", false);
            $('input[name="b_purchase_price"]').val('');
            $('input[id="mass_delete"]').prop("checked", false);
        }
    });

})(jQuery);

function staff_bulk_actions() {
    $('#table_commodity_list_bulk_actions').modal('show');
}

function warehouse_delete_bulk_action(event) {
    var mass_delete = $('#mass_delete').prop('checked');
    var change_item_selling_price = $('#change_item_selling_price').prop('checked');
    var change_item_purchase_price = $('#change_item_purchase_price').prop('checked');
    var clone_items = $('#clone_items').prop('checked');

    var selling_price = $('input[name="selling_price"]').val();
    var purchase_price = $('input[name="b_purchase_price"]').val();

    if (mass_delete || (change_item_selling_price && selling_price !== '') || (change_item_purchase_price && purchase_price !== '') || clone_items) {
        var ids = [];
        var data = {};

        if (change_item_selling_price) {
            data.change_item_selling_price = true;
            data.rel_type = 'change_item_selling_price';
            data.selling_price = selling_price;
            data.clone_items = false;
            data.mass_delete = false;
        } else if (change_item_purchase_price) {
            data.change_item_purchase_price = true;
            data.rel_type = 'change_item_purchase_price';
            data.purchase_price = purchase_price;
            data.clone_items = false;
            data.mass_delete = false;
        } else if (clone_items) {
            data.mass_delete = false;
            data.rel_type = 'commodity_list';
            data.clone_items = true;
            data.change_item_selling_price = false;
            data.change_item_purchase_price = false;
        } else {
            data.mass_delete = true;
            data.rel_type = 'commodity_list';
            data.clone_items = false;
            data.change_item_selling_price = false;
            data.change_item_purchase_price = false;
        }

        // Get all selected item IDs
        var rows = $('#table-table_commodity_list').find('tbody tr');
        $.each(rows, function () {
            var checkbox = $(this).find('td').eq(0).find('input[type="checkbox"]');
            if (checkbox.is(':checked')) {
                ids.push(checkbox.val());
            }
        });

        if (ids.length === 0) {
            alert('<?php echo _l("please_select_at_least_one_item"); ?>');
            return;
        }

        data.ids = ids;

        // Show loading indicator
        var originalText = $(event).html();
        $(event).html('<i class="fa fa-spinner fa-spin"></i> Processing...');
        $(event).prop('disabled', true);

        // Send AJAX request to perform the bulk action
        $.post("<?php echo get_uri('purchase/bulk_action_handler'); ?>", data)
        .done(function (response) {
            try {
                if (typeof response === 'string') {
                    response = JSON.parse(response);
                }
                console.log("Backend Response:", response);

                if (response.success) {
                    alert(response.message);
                    $('#table_commodity_list_bulk_actions').modal('hide');
                    safeReloadTable();
                } else {
                    alert(response.message || 'Action failed.');
                }
            } catch (e) {
                console.error("Error parsing response:", e);
                alert('An error occurred while processing the request.');
            }
        })
        .fail(function(xhr, status, error) {
            console.error("AJAX Error:", status, error);
            console.error("Response Text:", xhr.responseText);
            alert('An error occurred while processing the request.');
        })
        .always(function() {
            // Restore button text
            $(event).html(originalText);
            $(event).prop('disabled', false);
        });
    } else {
        alert('<?php echo _l("please_select_an_action"); ?>');
    }
}

let isReloading = false;

function safeReloadTable() {
    if (!isReloading && window.table_commodity_list) {
        isReloading = true;
        window.table_commodity_list.ajax.reload(function() {
            isReloading = false;
        }, false);
    }
}
</script>