<div id="page-content" class="page-wrapper clearfix">
    <div class="card">
        <div class="page-title clearfix">
            <h1><?php echo app_lang('manage_geofences'); ?></h1>
            <div class="title-button-group">
                <?php echo anchor(get_uri('geofencing_attendance/geofence_form'), "<i data-feather='plus-circle' class='icon-16'></i> " . app_lang('create_geofence'), array("class" => "btn btn-default", "title" => app_lang('create_geofence'))); ?>
                <?php echo anchor(get_uri('geofencing_attendance'), "<i data-feather='arrow-left' class='icon-16'></i> " . app_lang('back_to_dashboard'), array("class" => "btn btn-default", "title" => app_lang('back_to_dashboard'))); ?>
            </div>
        </div>

        <div class="table-responsive">
            <table id="geofences-table" class="display" cellspacing="0" width="100%">
            </table>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?php echo app_lang('delete_geofence'); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <p><?php echo app_lang('delete_geofence_confirmation'); ?></p>
                            <p><strong id="geofence-name-confirmation"></strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal"><?php echo app_lang('cancel'); ?></button>
                <button type="button" class="btn btn-danger" id="delete-geofence-button"><?php echo app_lang('delete'); ?></button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        var deleteGeofenceId = 0;

        $("#geofences-table").appTable({
            source: '<?php echo_uri("geofencing_attendance/geofences_list_data"); ?>',
            order: [[1, "asc"]],
            columns: [
                {title: "<?php echo app_lang('id') ?>", "class": "w50 text-center all", order_by: "id"},
                {title: "<?php echo app_lang('name') ?>", "class": "w20p", order_by: "name"},
                {title: "<?php echo app_lang('type') ?>", "class": "w15p", order_by: "geofence_type"},
                {title: "<?php echo app_lang('location') ?>", "class": "w20p no-sort"},
                {title: "<?php echo app_lang('radius') ?>", "class": "w10p text-center", order_by: "radius"},
                {title: "<?php echo app_lang('assigned_staff') ?>", "class": "w15p text-center no-sort"},
                {title: "<?php echo app_lang('status') ?>", "class": "w10p text-center", order_by: "is_active"},
                {title: '<i data-feather="menu" class="icon-16"></i>', "class": "text-center option w100 no-sort"}
            ],
            printColumns: [0, 1, 2, 3, 4, 5, 6],
            xlsColumns: [0, 1, 2, 3, 4, 5, 6]
        });

        // Delete confirmation
        $(document).on('click', '[data-action-url]', function () {
            var url = $(this).attr('data-action-url');
            if (url.indexOf('delete') > -1) {
                deleteGeofenceId = $(this).attr('data-id');
                var geofenceName = $(this).attr('data-geofence-name');

                $("#geofence-name-confirmation").html(geofenceName);
                $("#confirmDeleteModal").modal('show');
                return false;
            }
        });

        // Confirm delete action
        $("#delete-geofence-button").click(function () {
            if (deleteGeofenceId) {
                $.ajax({
                    url: "<?php echo get_uri('geofencing_attendance/delete_geofence') ?>",
                    type: 'POST',
                    dataType: 'json',
                    data: {id: deleteGeofenceId},
                    success: function (result) {
                        if (result.success) {
                            $("#confirmDeleteModal").modal('hide');
                            $("#geofences-table").appTable({newData: result.data, dataId: deleteGeofenceId});
                            appAlert.success(result.message, {duration: 10000});
                        } else {
                            appAlert.error(result.message);
                        }
                    }
                });
            }
        });
    });
</script>
