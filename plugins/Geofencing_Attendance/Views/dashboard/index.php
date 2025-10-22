<div id="page-content" class="page-wrapper clearfix">
    <div class="row">
        <div class="col-sm-3 col-lg-2">
            <?php
            $tab_view['active_tab'] = "dashboard";
            echo view("settings/tabs", $tab_view);
            ?>
        </div>

        <div class="col-sm-9 col-lg-10">
            <div class="panel panel-default">
                <div class="page-title clearfix">
                    <h1><?php echo app_lang('geofencing_attendance'); ?> - <?php echo app_lang('dashboard'); ?></h1>
                    <div class="title-button-group">
                        <a href="<?php echo get_uri("geofencing_attendance/geofences"); ?>" class="btn btn-success">
                            <i data-feather="map-pin" class="icon-16"></i> <?php echo app_lang('manage_geofences'); ?>
                        </a>
                        <a href="<?php echo get_uri("geofencing_attendance/live_tracking"); ?>" class="btn btn-info">
                            <i data-feather="navigation" class="icon-16"></i> <?php echo app_lang('live_tracking'); ?>
                        </a>
                    </div>
                </div>

                <div class="panel-body">

                    <!-- System Status -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4><i data-feather="activity" class="icon-16"></i> System Status</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <strong>Database:</strong>
                                            <span class="label label-success"><?php echo $system_status['database']; ?></span>
                                        </div>
                                        <div class="col-md-4">
                                            <strong>API Endpoints:</strong>
                                            <span class="label label-success"><?php echo $system_status['api_endpoints']; ?></span>
                                        </div>
                                        <div class="col-md-4">
                                            <strong>Real-time Tracking:</strong>
                                            <span class="label <?php echo $system_status['real_time_tracking'] == 'enabled' ? 'label-success' : 'label-warning'; ?>">
                                                <?php echo $system_status['real_time_tracking']; ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Statistics Cards -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                            <a href="<?php echo get_uri("geofencing_attendance/geofences"); ?>" class="white-link">
                                <div class="card dashboard-icon-widget">
                                    <div class="card-body">
                                        <div class="widget-icon bg-primary">
                                            <i data-feather="map" class="icon-16"></i>
                                        </div>
                                        <div class="widget-details">
                                            <h2><?php echo $total_geofences; ?></h2>
                                            <span class="bg-transparent-white"><?php echo app_lang('total_geofences'); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                            <a href="<?php echo get_uri("geofencing_attendance/attendance_sessions"); ?>" class="white-link">
                                <div class="card dashboard-icon-widget">
                                    <div class="card-body">
                                        <div class="widget-icon bg-success">
                                            <i data-feather="clock" class="icon-16"></i>
                                        </div>
                                        <div class="widget-details">
                                            <h2><?php echo $active_sessions; ?></h2>
                                            <span class="bg-transparent-white"><?php echo app_lang('active_sessions'); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                            <a href="#" class="white-link">
                                <div class="card dashboard-icon-widget">
                                    <div class="card-body">
                                        <div class="widget-icon bg-info">
                                            <i data-feather="users" class="icon-16"></i>
                                        </div>
                                        <div class="widget-details">
                                            <h2><?php echo $total_staff; ?></h2>
                                            <span class="bg-transparent-white"><?php echo app_lang('total_staff'); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                            <a href="<?php echo get_uri("geofencing_attendance/attendance_reports"); ?>" class="white-link">
                                <div class="card dashboard-icon-widget">
                                    <div class="card-body">
                                        <div class="widget-icon bg-warning">
                                            <i data-feather="calendar" class="icon-16"></i>
                                        </div>
                                        <div class="widget-details">
                                            <h2><?php echo $today_attendance; ?></h2>
                                            <span class="bg-transparent-white"><?php echo app_lang('today_attendance'); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Recent Activity and Live Locations -->
                    <div class="row">
                        <!-- Recent Check-ins -->
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><i data-feather="clock" class="icon-16"></i> Recent Check-ins</h4>
                                </div>
                                <div class="panel-body">
                                    <?php if (!empty($recent_checkins)) { ?>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th><?php echo app_lang('staff'); ?></th>
                                                        <th><?php echo app_lang('time'); ?></th>
                                                        <th><?php echo app_lang('method'); ?></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($recent_checkins as $checkin) { ?>
                                                        <tr>
                                                            <td>
                                                                <strong><?php echo $checkin['staff_name']; ?></strong>
                                                                <br><small class="text-muted"><?php echo $checkin['email']; ?></small>
                                                            </td>
                                                            <td>
                                                                <?php echo format_to_relative_time($checkin['check_in_time']); ?>
                                                                <br><small class="text-muted"><?php echo format_to_datetime($checkin['check_in_time']); ?></small>
                                                            </td>
                                                            <td>
                                                                <span class="label <?php echo $checkin['check_in_method'] == 'geofence' ? 'label-success' : 'label-info'; ?>">
                                                                    <?php echo ucfirst($checkin['check_in_method']); ?>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    <?php } else { ?>
                                        <div class="text-center text-muted p20">
                                            <i data-feather="clock" class="icon-32"></i>
                                            <p><?php echo app_lang('no_recent_checkins'); ?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!-- Current Staff Locations -->
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><i data-feather="map-pin" class="icon-16"></i> Current Staff Locations</h4>
                                    <div class="panel-title-button">
                                        <a href="<?php echo get_uri("geofencing_attendance/live_tracking"); ?>" class="btn btn-xs btn-info">
                                            <?php echo app_lang('view_all'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <?php if (!empty($active_locations)) { ?>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th><?php echo app_lang('staff'); ?></th>
                                                        <th><?php echo app_lang('last_update'); ?></th>
                                                        <th><?php echo app_lang('status'); ?></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($active_locations as $location) { ?>
                                                        <tr>
                                                            <td>
                                                                <strong><?php echo $location['staff_name']; ?></strong>
                                                                <?php if ($location['address']) { ?>
                                                                    <br><small class="text-muted"><?php echo substr($location['address'], 0, 30) . '...'; ?></small>
                                                                <?php } ?>
                                                            </td>
                                                            <td>
                                                                <?php echo format_to_relative_time($location['last_update']); ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $status_class = 'label-default';
                                                                if ($location['session_status'] == 'active') {
                                                                    $status_class = 'label-success';
                                                                } elseif ($location['session_status'] == 'completed') {
                                                                    $status_class = 'label-info';
                                                                }
                                                                ?>
                                                                <span class="label <?php echo $status_class; ?>">
                                                                    <?php echo $location['session_status'] ? ucfirst($location['session_status']) : 'Offline'; ?>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    <?php } else { ?>
                                        <div class="text-center text-muted p20">
                                            <i data-feather="map-pin" class="icon-32"></i>
                                            <p><?php echo app_lang('no_active_locations'); ?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><i data-feather="zap" class="icon-16"></i> Quick Actions</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="<?php echo get_uri("geofencing_attendance/geofences/add"); ?>" class="btn btn-success btn-block">
                                                <i data-feather="plus" class="icon-16"></i> Add Geofence
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="<?php echo get_uri("geofencing_attendance/attendance_reports"); ?>" class="btn btn-info btn-block">
                                                <i data-feather="bar-chart" class="icon-16"></i> View Reports
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="<?php echo get_uri("geofencing_attendance/settings"); ?>" class="btn btn-warning btn-block">
                                                <i data-feather="settings" class="icon-16"></i> Settings
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="<?php echo get_uri("geofencing_attendance/test_api"); ?>" class="btn btn-secondary btn-block" target="_blank">
                                                <i data-feather="check-circle" class="icon-16"></i> Test API
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- API Information -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4><i data-feather="code" class="icon-16"></i> Mobile API Information</h4>
                                </div>
                                <div class="panel-body">
                                    <p><strong>Base URL:</strong> <code><?php echo base_url('index.php/api/geofencing/'); ?></code></p>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Key Endpoints:</h5>
                                            <ul class="list-unstyled">
                                                <li><code>POST /api/geofencing/register_device</code> - Register device</li>
                                                <li><code>POST /api/geofencing/checkin</code> - Staff check-in</li>
                                                <li><code>POST /api/geofencing/checkout</code> - Staff check-out</li>
                                                <li><code>GET /api/geofencing/geofences</code> - Get assigned geofences</li>
                                                <li><code>POST /api/geofencing/update_location</code> - Update location</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Authentication:</h5>
                                            <p>All endpoints require JWT authentication using the existing RestApi system.</p>
                                            <p><strong>Header:</strong> <code>authtoken: YOUR_JWT_TOKEN</code></p>
                                            <p><strong>Login:</strong> <code>POST /api/auth/login</code></p>

                                            <div class="alert alert-info">
                                                <small><i data-feather="info" class="icon-12"></i> See complete API documentation for mobile app development.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function () {
    // Auto-refresh stats every 30 seconds
    setInterval(function() {
        $.ajax({
            url: '<?php echo get_uri("geofencing_attendance/get_dashboard_stats"); ?>',
            type: 'POST',
            dataType: 'json',
            success: function(response) {
                if (response.status && response.data) {
                    // Update stats if they changed
                    console.log('Dashboard stats refreshed at', response.data.timestamp);
                }
            },
            error: function() {
                console.log('Failed to refresh dashboard stats');
            }
        });
    }, 30000);
});
</script>
