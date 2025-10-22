<div id="page-content" class="page-wrapper clearfix">
    <div class="card">
        <div class="page-title clearfix">
            <h1><?php echo app_lang('geofencing_attendance'); ?></h1>
            <div class="title-button-group">
                <?php echo anchor(get_uri('geofencing_attendance/geofences'), "<i data-feather='map-pin' class='icon-16'></i> " . app_lang('manage_geofences'), array("class" => "btn btn-default", "title" => app_lang('manage_geofences'))); ?>
                <?php echo anchor(get_uri('geofencing_attendance/live_tracking'), "<i data-feather='navigation' class='icon-16'></i> " . app_lang('live_tracking'), array("class" => "btn btn-default", "title" => app_lang('live_tracking'))); ?>
                <?php echo anchor(get_uri('geofencing_attendance/settings'), "<i data-feather='settings' class='icon-16'></i> " . app_lang('settings'), array("class" => "btn btn-default", "title" => app_lang('settings'))); ?>
            </div>
        </div>

        <div class="card-body">
            <!-- Statistics Cards Row -->
            <div class="row mb15">
                <div class="col-md-3 col-sm-6">
                    <div class="card dashboard-icon-widget">
                        <div class="card-body">
                            <div class="widget-icon bg-primary">
                                <i data-feather="map-pin"></i>
                            </div>
                            <div class="widget-details">
                                <h2 class="widget-number"><?php echo $active_geofences; ?></h2>
                                <span class="widget-title"><?php echo app_lang('active_geofences'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card dashboard-icon-widget">
                        <div class="card-body">
                            <div class="widget-icon bg-success">
                                <i data-feather="users"></i>
                            </div>
                            <div class="widget-details">
                                <h2 class="widget-number"><?php echo $total_staff; ?></h2>
                                <span class="widget-title"><?php echo app_lang('total_staff'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card dashboard-icon-widget">
                        <div class="card-body">
                            <div class="widget-icon bg-info">
                                <i data-feather="clock"></i>
                            </div>
                            <div class="widget-details">
                                <h2 class="widget-number"><?php echo $today_sessions['active_sessions']; ?></h2>
                                <span class="widget-title"><?php echo app_lang('active_sessions'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card dashboard-icon-widget">
                        <div class="card-body">
                            <div class="widget-icon bg-warning">
                                <i data-feather="check-circle"></i>
                            </div>
                            <div class="widget-details">
                                <h2 class="widget-number"><?php echo $today_sessions['total_checkins']; ?></h2>
                                <span class="widget-title"><?php echo app_lang('today_checkins'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions Section -->
            <div class="row mb15">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="float-start"><?php echo app_lang('quick_actions'); ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 mb15">
                                    <?php echo anchor(get_uri('geofencing_attendance/geofence_form'), "<i data-feather='plus-circle' class='icon-24 mb10'></i><br><span>" . app_lang('create_geofence') . "</span>", array("class" => "btn btn-outline-primary btn-lg w-100 text-center quick-action-btn")); ?>
                                </div>
                                <div class="col-md-3 col-sm-6 mb15">
                                    <?php echo anchor(get_uri('geofencing_attendance/attendance_sessions'), "<i data-feather='calendar' class='icon-24 mb10'></i><br><span>" . app_lang('view_attendance') . "</span>", array("class" => "btn btn-outline-info btn-lg w-100 text-center quick-action-btn")); ?>
                                </div>
                                <div class="col-md-3 col-sm-6 mb15">
                                    <?php echo anchor(get_uri('geofencing_attendance/reports'), "<i data-feather='bar-chart-2' class='icon-24 mb10'></i><br><span>" . app_lang('attendance_reports') . "</span>", array("class" => "btn btn-outline-success btn-lg w-100 text-center quick-action-btn")); ?>
                                </div>
                                <div class="col-md-3 col-sm-6 mb15">
                                    <?php echo anchor(get_uri('geofencing_attendance/export_attendance'), "<i data-feather='download' class='icon-24 mb10'></i><br><span>" . app_lang('export_data') . "</span>", array("class" => "btn btn-outline-secondary btn-lg w-100 text-center quick-action-btn")); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Row -->
            <div class="row">
                <!-- Recent Activity -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="float-start"><?php echo app_lang('recent_activity'); ?></h4>
                            <div class="float-end">
                                <button type="button" class="btn btn-sm btn-outline-primary" id="refresh-activity" title="<?php echo app_lang('refresh'); ?>">
                                    <i data-feather="refresh-cw" class="icon-14"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="recent-activity-list" class="recent-activity-container">
                                <div class="text-center p30">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="sr-only"><?php echo app_lang('loading'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt15">
                                <?php echo anchor(get_uri('geofencing_attendance/attendance_sessions'), app_lang('view_all_sessions'), array("class" => "btn btn-outline-primary")); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- System Status & API Info -->
                <div class="col-md-4">
                    <!-- System Status -->
                    <div class="card mb15">
                        <div class="card-header">
                            <h4><?php echo app_lang('system_status'); ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="status-item mb15">
                                <span class="badge bg-success me-2"><?php echo app_lang('active'); ?></span>
                                <span><?php echo app_lang('database_connection'); ?></span>
                            </div>
                            <div class="status-item mb15">
                                <span class="badge bg-success me-2"><?php echo app_lang('active'); ?></span>
                                <span><?php echo app_lang('api_endpoints'); ?></span>
                            </div>
                            <div class="status-item mb15">
                                <span class="badge bg-success me-2"><?php echo app_lang('active'); ?></span>
                                <span><?php echo app_lang('location_services'); ?></span>
                            </div>
                            <div class="status-item mb15">
                                <span class="badge bg-info me-2"><?php echo app_lang('ready'); ?></span>
                                <span><?php echo app_lang('mobile_app_support'); ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- API Information -->
                    <div class="card">
                        <div class="card-header">
                            <h4><?php echo app_lang('api_information'); ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="small">
                                <div class="mb15">
                                    <strong><?php echo app_lang('base_url'); ?>:</strong><br>
                                    <code class="bg-light p5 d-block mt5 word-break"><?php echo get_uri('api/geofencing/'); ?></code>
                                </div>

                                <div class="mb15">
                                    <strong><?php echo app_lang('authentication'); ?>:</strong><br>
                                    <span class="text-muted">JWT Token (authtoken header)</span>
                                </div>

                                <div class="mb10">
                                    <strong><?php echo app_lang('key_endpoints'); ?>:</strong>
                                </div>
                                <ul class="list-unstyled small text-muted pl15">
                                    <li class="mb5">• POST /checkin</li>
                                    <li class="mb5">• POST /checkout</li>
                                    <li class="mb5">• GET /geofences</li>
                                    <li class="mb5">• GET /status</li>
                                    <li class="mb5">• GET /attendance_history</li>
                                </ul>
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
    // Auto-refresh activity every 60 seconds
    var activityRefreshInterval = setInterval(loadRecentActivity, 60000);

    // Initial load
    loadRecentActivity();

    // Manual refresh button
    $('#refresh-activity').click(function() {
        $(this).find('i').addClass('fa-spin');
        loadRecentActivity();
    });

    // Stop auto-refresh when page is not visible
    document.addEventListener('visibilitychange', function() {
        if (document.hidden) {
            clearInterval(activityRefreshInterval);
        } else {
            activityRefreshInterval = setInterval(loadRecentActivity, 60000);
            loadRecentActivity();
        }
    });
});

function loadRecentActivity() {
    $.ajax({
        url: '<?php echo get_uri("geofencing_ajax/dashboard_stats"); ?>',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            $('#refresh-activity').find('i').removeClass('fa-spin');
            if (response.success && response.recent_activity) {
                updateRecentActivity(response.recent_activity);
            } else {
                showEmptyActivity();
            }
        },
        error: function() {
            $('#refresh-activity').find('i').removeClass('fa-spin');
            showEmptyActivity();
        }
    });
}

function updateRecentActivity(activities) {
    var html = '';
    if (activities && activities.length > 0) {
        activities.forEach(function(activity, index) {
            var timeAgo = moment(activity.timestamp).fromNow();
            var statusBadge = activity.type === 'checkin' ? 'bg-success' : 'bg-info';
            var icon = activity.type === 'checkin' ? 'log-in' : 'log-out';

            html += '<div class="activity-item ' + (index < activities.length - 1 ? 'border-bottom' : '') + ' pb15 mb15">';
            html += '<div class="d-flex align-items-center">';
            html += '<div class="flex-shrink-0 me15">';
            html += '<div class="avatar bg-light">';
            html += '<i data-feather="' + icon + '" class="icon-16 text-' + (activity.type === 'checkin' ? 'success' : 'info') + '"></i>';
            html += '</div>';
            html += '</div>';
            html += '<div class="flex-grow-1">';
            html += '<div class="fw-bold">' + activity.staff_name + '</div>';
            html += '<div class="small text-muted">';
            html += '<span class="badge ' + statusBadge + ' me5">' + activity.type + '</span>';
            if (activity.geofence_name) {
                html += 'at ' + activity.geofence_name;
            }
            html += '</div>';
            html += '</div>';
            html += '<div class="flex-shrink-0 text-end">';
            html += '<small class="text-muted">' + timeAgo + '</small>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
        });
    } else {
        showEmptyActivity();
        return;
    }

    $('#recent-activity-list').html(html);

    // Re-initialize feather icons
    if (typeof feather !== 'undefined') {
        feather.replace();
    }
}

function showEmptyActivity() {
    var html = '<div class="text-center text-muted p30">';
    html += '<i data-feather="clock" class="icon-48 mb15 opacity-50"></i><br>';
    html += '<span><?php echo app_lang("no_recent_activity"); ?></span><br>';
    html += '<small><?php echo app_lang("activity_will_appear_here"); ?></small>';
    html += '</div>';

    $('#recent-activity-list').html(html);

    if (typeof feather !== 'undefined') {
        feather.replace();
    }
}
</script>

<style>
/* Dashboard specific styles matching RSRA theme */
.dashboard-icon-widget {
    transition: transform 0.2s ease-in-out;
    border: 1px solid rgba(0,0,0,0.125);
}

.dashboard-icon-widget:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.widget-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    float: left;
    margin-right: 15px;
}

.widget-icon i {
    color: white;
    font-size: 20px;
}

.widget-details {
    overflow: hidden;
    padding-top: 5px;
}

.widget-number {
    font-size: 2rem;
    font-weight: 700;
    margin: 0;
    line-height: 1.2;
}

.widget-title {
    color: #6c757d;
    font-size: 0.875rem;
    font-weight: 500;
}

.quick-action-btn {
    height: 100px;
    border: 2px dashed #dee2e6;
    transition: all 0.3s ease;
}

.quick-action-btn:hover {
    border-style: solid;
    transform: translateY(-2px);
}

.recent-activity-container {
    max-height: 400px;
    overflow-y: auto;
}

.activity-item {
    padding: 0;
}

.avatar {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.status-item .badge {
    min-width: 60px;
    text-align: center;
    font-size: 0.75em;
}

.word-break {
    word-break: break-all;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .dashboard-icon-widget {
        margin-bottom: 15px;
    }

    .quick-action-btn {
        height: 80px;
        font-size: 0.875rem;
    }

    .widget-number {
        font-size: 1.5rem;
    }
}

/* Loading animation */
.spinner-border {
    width: 2rem;
    height: 2rem;
}

/* Card header consistency */
.card-header h4 {
    margin: 0;
    font-size: 1.1rem;
    font-weight: 600;
}

/* Badge spacing */
.badge.me-2 {
    margin-right: 0.5rem !important;
}

.badge.me-5 {
    margin-right: 0.25rem !important;
}

/* Maintain RSRA color scheme */
.bg-primary { background-color: #007bff !important; }
.bg-success { background-color: #28a745 !important; }
.bg-info { background-color: #17a2b8 !important; }
.bg-warning { background-color: #ffc107 !important; }
.text-success { color: #28a745 !important; }
.text-info { color: #17a2b8 !important; }
</style>
