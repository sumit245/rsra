<div id="page-content" class="page-wrapper clearfix">
    <div class="card">
        <div class="page-title clearfix">
            <h1>
                <?php if ($model_info->id) : ?>
                    <i data-feather="edit-2" class="icon-24"></i>
                    <?php echo app_lang('edit_geofence'); ?>
                <?php else : ?>
                    <i data-feather="plus-circle" class="icon-24"></i>
                    <?php echo app_lang('create_geofence'); ?>
                <?php endif; ?>
            </h1>
            <div class="title-button-group">
                <?php echo anchor(get_uri('geofencing_attendance/geofences'), "<i data-feather='arrow-left' class='icon-16'></i> " . app_lang('back_to_geofences'), array("class" => "btn btn-default", "title" => app_lang('back_to_geofences'))); ?>
            </div>
        </div>

        <div class="card-body">
            <?php echo form_open(get_uri("geofencing_attendance/save_geofence"), array("id" => "geofence-form", "class" => "general-form", "role" => "form")); ?>
            <div class="container-fluid">
                <input type="hidden" name="id" value="<?php echo $model_info->id; ?>" />

                <div class="row">
                    <div class="col-md-8">
                        <!-- Basic Information -->
                        <div class="card mb15">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <i data-feather="info" class="icon-16"></i>
                                    <?php echo app_lang('basic_information'); ?>
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="name" class="col-md-3"><?php echo app_lang('name'); ?> <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <?php
                                            echo form_input(array(
                                                "id" => "name",
                                                "name" => "name",
                                                "value" => $model_info->name,
                                                "class" => "form-control",
                                                "placeholder" => app_lang('geofence_name'),
                                                "autofocus" => true,
                                                "data-rule-required" => true,
                                                "data-msg-required" => app_lang("field_required"),
                                            ));
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="description" class="col-md-3"><?php echo app_lang('description'); ?></label>
                                        <div class="col-md-9">
                                            <?php
                                            echo form_textarea(array(
                                                "id" => "description",
                                                "name" => "description",
                                                "value" => $model_info->description,
                                                "class" => "form-control",
                                                "placeholder" => app_lang('geofence_description'),
                                                "rows" => 3
                                            ));
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="geofence_type" class="col-md-3"><?php echo app_lang('type'); ?> <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <?php
                                            echo form_dropdown("geofence_type", $geofence_types, array($model_info->geofence_type), "class='select2 validate-hidden' data-rule-required='true' data-msg-required='" . app_lang('field_required') . "' id='geofence-type-dropdown'");
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="address" class="col-md-3"><?php echo app_lang('address'); ?></label>
                                        <div class="col-md-9">
                                            <?php
                                            echo form_textarea(array(
                                                "id" => "address",
                                                "name" => "address",
                                                "value" => $model_info->address,
                                                "class" => "form-control",
                                                "placeholder" => app_lang('geofence_address'),
                                                "rows" => 2
                                            ));
                                            ?>
                                            <small class="form-text text-muted"><?php echo app_lang('address_help_text'); ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Location Information -->
                        <div class="card mb15">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <i data-feather="map-pin" class="icon-16"></i>
                                    <?php echo app_lang('location_information'); ?>
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="latitude"><?php echo app_lang('latitude'); ?> <span class="text-danger">*</span></label>
                                            <?php
                                            echo form_input(array(
                                                "id" => "latitude",
                                                "name" => "latitude",
                                                "value" => $model_info->latitude,
                                                "class" => "form-control",
                                                "placeholder" => "28.6139",
                                                "data-rule-required" => true,
                                                "data-rule-number" => true,
                                                "data-msg-required" => app_lang("field_required"),
                                                "data-msg-number" => app_lang("enter_valid_latitude")
                                            ));
                                            ?>
                                            <small class="form-text text-muted"><?php echo app_lang('latitude_help_text'); ?></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="longitude"><?php echo app_lang('longitude'); ?> <span class="text-danger">*</span></label>
                                            <?php
                                            echo form_input(array(
                                                "id" => "longitude",
                                                "name" => "longitude",
                                                "value" => $model_info->longitude,
                                                "class" => "form-control",
                                                "placeholder" => "77.2090",
                                                "data-rule-required" => true,
                                                "data-rule-number" => true,
                                                "data-msg-required" => app_lang("field_required"),
                                                "data-msg-number" => app_lang("enter_valid_longitude")
                                            ));
                                            ?>
                                            <small class="form-text text-muted"><?php echo app_lang('longitude_help_text'); ?></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="radius" class="col-md-3"><?php echo app_lang('radius'); ?> <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <?php
                                                echo form_input(array(
                                                    "id" => "radius",
                                                    "name" => "radius",
                                                    "value" => $model_info->radius ? $model_info->radius : "500",
                                                    "class" => "form-control",
                                                    "placeholder" => "500",
                                                    "data-rule-required" => true,
                                                    "data-rule-min" => 10,
                                                    "data-rule-max" => 5000,
                                                    "data-msg-required" => app_lang("field_required"),
                                                    "data-msg-min" => app_lang("minimum_radius_10m"),
                                                    "data-msg-max" => app_lang("maximum_radius_5000m")
                                                ));
                                                ?>
                                                <div class="input-group-text">meters</div>
                                            </div>
                                            <small class="form-text text-muted"><?php echo app_lang('radius_help_text'); ?></small>
                                        </div>
                                    </div>
                                </div>

                                <!-- Location Helper -->
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button type="button" id="get-current-location" class="btn btn-outline-primary btn-sm">
                                                    <i data-feather="crosshair" class="icon-14"></i>
                                                    <?php echo app_lang('get_current_location'); ?>
                                                </button>
                                                <button type="button" id="show-map" class="btn btn-outline-secondary btn-sm ms-2">
                                                    <i data-feather="map-pin" class="icon-14"></i>
                                                    <?php echo app_lang('show_on_map'); ?>
                                                </button>
                                            </div>
                                            <div class="col-md-6">
                                                <small class="text-muted">
                                                    <?php echo app_lang('location_helper_text'); ?>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Settings Sidebar -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <i data-feather="settings" class="icon-16"></i>
                                    <?php echo app_lang('settings'); ?>
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-check-label">
                                        <?php
                                        echo form_checkbox("is_active", "1", $model_info->is_active ? true : ($model_info->id ? false : true), "id='is_active' class='form-check-input'");
                                        ?>
                                        <?php echo app_lang('geofence_is_active'); ?>
                                    </label>
                                    <small class="form-text text-muted"><?php echo app_lang('geofence_active_help_text'); ?></small>
                                </div>

                                <div class="form-group">
                                    <label class="form-check-label">
                                        <?php
                                        echo form_checkbox("allow_field_work", "1", $model_info->allow_field_work, "id='allow_field_work' class='form-check-input'");
                                        ?>
                                        <?php echo app_lang('allow_field_work'); ?>
                                    </label>
                                    <small class="form-text text-muted"><?php echo app_lang('allow_field_work_help_text'); ?></small>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Stats -->
                        <div class="card mt15">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <i data-feather="info" class="icon-16"></i>
                                    <?php echo app_lang('quick_stats'); ?>
                                </h5>
                            </div>
                            <div class="card-body">
                                <?php if ($model_info->id) : ?>
                                    <div class="small">
                                        <div class="row mb10">
                                            <div class="col-6"><?php echo app_lang('created'); ?>:</div>
                                            <div class="col-6"><?php echo format_to_date($model_info->created_at, false); ?></div>
                                        </div>
                                        <div class="row mb10">
                                            <div class="col-6"><?php echo app_lang('status'); ?>:</div>
                                            <div class="col-6">
                                                <?php if ($model_info->is_active) : ?>
                                                    <span class="badge bg-success"><?php echo app_lang('active'); ?></span>
                                                <?php else : ?>
                                                    <span class="badge bg-warning"><?php echo app_lang('inactive'); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <p class="text-muted small">
                                        <?php echo app_lang('new_geofence_info'); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="row mt15">
                    <div class="col-md-12">
                        <div class="card-footer bg-light">
                            <button type="submit" class="btn btn-primary">
                                <i data-feather="check-circle" class="icon-16"></i>
                                <?php echo app_lang('save'); ?>
                            </button>
                            <?php echo anchor(get_uri('geofencing_attendance/geofences'), app_lang('cancel'), array("class" => "btn btn-default ms-2")); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {

        // Initialize form validation and submission
        $("#geofence-form").appForm({
            onSuccess: function (result) {
                if (result.success) {
                    appAlert.success(result.message, {duration: 10000});
                    setTimeout(function() {
                        window.location = "<?php echo get_uri('geofencing_attendance/geofences'); ?>";
                    }, 1000);
                } else {
                    appAlert.error(result.message);
                }
            }
        });

        // Initialize select2
        $('.select2').select2();

        // Get current location functionality
        $('#get-current-location').click(function() {
            var $btn = $(this);
            var originalHtml = $btn.html();

            if (navigator.geolocation) {
                $btn.html('<i data-feather="loader" class="icon-14 spinning"></i> <?php echo app_lang('getting_location'); ?>');
                $btn.prop('disabled', true);

                navigator.geolocation.getCurrentPosition(function(position) {
                    $('#latitude').val(position.coords.latitude.toFixed(6));
                    $('#longitude').val(position.coords.longitude.toFixed(6));

                    $btn.html('<i data-feather="check" class="icon-14"></i> <?php echo app_lang('location_obtained'); ?>');
                    $btn.removeClass('btn-outline-primary').addClass('btn-success');

                    setTimeout(function() {
                        $btn.html(originalHtml);
                        $btn.removeClass('btn-success').addClass('btn-outline-primary');
                        $btn.prop('disabled', false);
                        if (typeof feather !== 'undefined') {
                            feather.replace();
                        }
                    }, 3000);
                }, function(error) {
                    appAlert.error('<?php echo app_lang('location_error'); ?>: ' + error.message);
                    $btn.html(originalHtml);
                    $btn.prop('disabled', false);
                    if (typeof feather !== 'undefined') {
                        feather.replace();
                    }
                });
            } else {
                appAlert.error('<?php echo app_lang('geolocation_not_supported'); ?>');
            }
        });

        // Show map functionality
        $('#show-map').click(function() {
            var lat = $('#latitude').val();
            var lng = $('#longitude').val();

            if (lat && lng) {
                var mapUrl = 'https://www.google.com/maps?q=' + lat + ',' + lng + '&z=15';
                window.open(mapUrl, '_blank');
            } else {
                appAlert.warning('<?php echo app_lang('enter_coordinates_first'); ?>');
            }
        });

        // Radius input validation
        $('#radius').on('input', function() {
            var value = parseInt($(this).val());
            if (value < 10) {
                $(this).val(10);
            } else if (value > 5000) {
                $(this).val(5000);
            }
        });

        // Geofence type change handler
        $('#geofence-type-dropdown').change(function() {
            var type = $(this).val();

            // Set default radius based on type
            if (type === 'office') {
                $('#radius').val(200);
            } else if (type === 'client_site') {
                $('#radius').val(300);
            } else if (type === 'field_area') {
                $('#radius').val(1000);
            } else {
                $('#radius').val(500);
            }
        });

        // Form validation feedback
        $('#name').on('blur', function() {
            if ($(this).val().trim() === '') {
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid').addClass('is-valid');
            }
        });

        $('#latitude, #longitude').on('blur', function() {
            var value = parseFloat($(this).val());
            if (isNaN(value)) {
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid').addClass('is-valid');
            }
        });
    });
</script>

<style>
.spinning {
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.card-header h5 {
    font-size: 1rem;
    font-weight: 600;
}

.input-group-text {
    background-color: #f8f9fa;
    border-color: #ced4da;
    color: #6c757d;
    font-size: 0.875rem;
}

.form-check-label {
    font-weight: 500;
    cursor: pointer;
}

.form-text.text-muted {
    font-size: 0.8rem;
}

.card-footer {
    border-top: 1px solid rgba(0,0,0,0.125);
    padding: 15px;
}

.is-valid {
    border-color: #28a745;
}

.is-invalid {
    border-color: #dc3545;
}

@media (max-width: 768px) {
    .col-md-4 {
        margin-top: 20px;
    }
}
</style>
