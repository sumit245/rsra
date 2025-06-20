<?php

namespace App\Controllers;

class Roles extends Security_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->access_only_admin_or_settings_admin();
        if (! ($this->login_user->is_admin || get_array_value($this->login_user->permissions, "can_manage_user_role_and_permissions"))) {
            app_redirect("forbidden");
        }
    }

    //load the role view
    public function index()
    {
        return $this->template->rander("roles/index");
    }

    //load the role add/edit modal
    public function modal_form()
    {

        $this->validate_submitted_data([
            "id" => "numeric",
        ]);

        $view_data['model_info']     = $this->Roles_model->get_one($this->request->getPost('id'));
        $view_data['roles_dropdown'] = ["" => "-"] + $this->Roles_model->get_dropdown_list(["title"], "id");
        return $this->template->view('roles/modal_form', $view_data);
    }

    //get permisissions of a role
    public function permissions($role_id)
    {
        if ($role_id) {
            validate_numeric_value($role_id);
            $view_data['model_info'] = $this->Roles_model->get_one($role_id);

            $view_data['members_and_teams_dropdown'] = json_encode(get_team_members_and_teams_select2_data_list());
            $ticket_types_dropdown                   = [];
            $ticket_types                            = $this->Ticket_types_model->get_all_where(["deleted" => 0])->getResult();
            foreach ($ticket_types as $type) {
                $ticket_types_dropdown[] = ["id" => $type->id, "text" => $type->title];
            }
            $view_data['ticket_types_dropdown'] = json_encode($ticket_types_dropdown);

            $client_groups_dropdown = [];
            $client_groups          = $this->Client_groups_model->get_all_where(["deleted" => 0])->getResult();
            foreach ($client_groups as $type) {
                $client_groups_dropdown[] = ["id" => $type->id, "text" => $type->title];
            }
            $view_data['client_groups_dropdown'] = json_encode($client_groups_dropdown);

            $permissions = $view_data['model_info']->permissions ? unserialize($view_data['model_info']->permissions) : "";

            if (! $permissions) {
                $permissions = [];
            }

            $view_data['leave']               = get_array_value($permissions, "leave");
            $view_data['leave_specific']      = get_array_value($permissions, "leave_specific");
            $view_data['attendance_specific'] = get_array_value($permissions, "attendance_specific");

            $view_data['attendance'] = get_array_value($permissions, "attendance");
            $view_data['invoice']    = get_array_value($permissions, "invoice");
            $view_data['estimate']   = get_array_value($permissions, "estimate");
            $view_data['contract']   = get_array_value($permissions, "contract");
            $view_data['proposal']   = get_array_value($permissions, "proposal");
            $view_data['expense']    = get_array_value($permissions, "expense");
            $view_data['order']      = get_array_value($permissions, "order");
            $view_data['client']     = get_array_value($permissions, "client");
            $view_data['lead']       = get_array_value($permissions, "lead");

            $view_data['ticket']          = get_array_value($permissions, "ticket");
            $view_data['ticket_specific'] = get_array_value($permissions, "ticket_specific");
            $view_data['client_specific'] = get_array_value($permissions, "client_specific");

            $view_data['announcement']            = get_array_value($permissions, "announcement");
            $view_data['help_and_knowledge_base'] = get_array_value($permissions, "help_and_knowledge_base");

            $view_data['do_not_show_projects']                 = get_array_value($permissions, "do_not_show_projects");
            $view_data['can_manage_all_projects']              = get_array_value($permissions, "can_manage_all_projects");
            $view_data['can_create_projects']                  = get_array_value($permissions, "can_create_projects");
            $view_data['can_edit_projects']                    = get_array_value($permissions, "can_edit_projects");
            $view_data['can_edit_only_own_created_projects']   = get_array_value($permissions, "can_edit_only_own_created_projects");
            $view_data['can_delete_only_own_created_projects'] = get_array_value($permissions, "can_delete_only_own_created_projects");
            $view_data['can_delete_projects']                  = get_array_value($permissions, "can_delete_projects");

            $view_data['can_add_remove_project_members'] = get_array_value($permissions, "can_add_remove_project_members");

            $view_data['can_create_tasks']                      = get_array_value($permissions, "can_create_tasks");
            $view_data['can_edit_tasks']                        = get_array_value($permissions, "can_edit_tasks");
            $view_data['can_delete_tasks']                      = get_array_value($permissions, "can_delete_tasks");
            $view_data['can_comment_on_tasks']                  = get_array_value($permissions, "can_comment_on_tasks");
            $view_data['show_assigned_tasks_only']              = get_array_value($permissions, "show_assigned_tasks_only");
            $view_data['can_update_only_assigned_tasks_status'] = get_array_value($permissions, "can_update_only_assigned_tasks_status");

            $view_data['can_create_milestones'] = get_array_value($permissions, "can_create_milestones");
            $view_data['can_edit_milestones']   = get_array_value($permissions, "can_edit_milestones");
            $view_data['can_delete_milestones'] = get_array_value($permissions, "can_delete_milestones");

            $view_data['can_delete_files'] = get_array_value($permissions, "can_delete_files");

            $view_data['can_view_team_members_contact_info']     = get_array_value($permissions, "can_view_team_members_contact_info");
            $view_data['can_view_team_members_social_links']     = get_array_value($permissions, "can_view_team_members_social_links");
            $view_data['team_member_update_permission']          = get_array_value($permissions, "team_member_update_permission");
            $view_data['team_member_update_permission_specific'] = get_array_value($permissions, "team_member_update_permission_specific");

            $view_data['timesheet_manage_permission']          = get_array_value($permissions, "timesheet_manage_permission");
            $view_data['timesheet_manage_permission_specific'] = get_array_value($permissions, "timesheet_manage_permission_specific");

            $view_data['disable_event_sharing'] = get_array_value($permissions, "disable_event_sharing");

            $view_data['hide_team_members_list'] = get_array_value($permissions, "hide_team_members_list");

            $view_data['can_delete_leave_application'] = get_array_value($permissions, "can_delete_leave_application");

            $view_data['message_permission']          = get_array_value($permissions, "message_permission");
            $view_data['message_permission_specific'] = get_array_value($permissions, "message_permission_specific");

            $view_data['job_info_manage_permission'] = get_array_value($permissions, "job_info_manage_permission");

            $view_data['can_manage_all_kinds_of_settings']     = get_array_value($permissions, "can_manage_all_kinds_of_settings");
            $view_data['can_manage_user_role_and_permissions'] = get_array_value($permissions, "can_manage_user_role_and_permissions");
            $view_data['can_add_or_invite_new_team_members']   = get_array_value($permissions, "can_add_or_invite_new_team_members");

            $view_data['timeline_permission']          = get_array_value($permissions, "timeline_permission");
            $view_data['timeline_permission_specific'] = get_array_value($permissions, "timeline_permission_specific");

            $view_data['permissions'] = $permissions;

            return $this->template->view("roles/permissions", $view_data);
        }
    }

    //save a role
    public function save()
    {
        $this->validate_submitted_data([
            "id"    => "numeric",
            "title" => "required",
        ]);

        $id            = $this->request->getPost('id');
        $copy_settings = $this->request->getPost('copy_settings');
        $data          = [
            "title" => $this->request->getPost('title'),
        ];

        if ($copy_settings) {
            $role                = $this->Roles_model->get_one($copy_settings);
            $data["permissions"] = $role->permissions;
        }

        $save_id = $this->Roles_model->ci_save($data, $id);
        if ($save_id) {
            echo json_encode(["success" => true, "data" => $this->_row_data($save_id), 'id' => $save_id, 'message' => app_lang('record_saved')]);
        } else {
            echo json_encode(["success" => false, 'message' => app_lang('error_occurred')]);
        }
    }

    //save permissions of a role
    public function save_permissions()
    {
        $this->validate_submitted_data([
            "id" => "numeric|required",
        ]);

        $id             = $this->request->getPost('id');
        $leave          = $this->request->getPost('leave_permission');
        $leave_specific = "";
        if ($leave === "specific") {
            $leave_specific = $this->request->getPost('leave_permission_specific');
        }

        $attendance          = $this->request->getPost('attendance_permission');
        $attendance_specific = "";
        if ($attendance === "specific") {
            $attendance_specific = $this->request->getPost('attendance_permission_specific');
        }

        $invoice  = $this->request->getPost('invoice_permission');
        $estimate = $this->request->getPost('estimate_permission');
        $contract = $this->request->getPost('contract_permission');
        $proposal = $this->request->getPost('proposal_permission');
        $expense  = $this->request->getPost('expense_permission');
        $order    = $this->request->getPost('order_permission');
        $client   = $this->request->getPost('client_permission');
        $lead     = $this->request->getPost('lead_permission');

        $ticket = $this->request->getPost('ticket_permission');

        $ticket_specific = "";
        if ($ticket === "specific") {
            $ticket_specific = $this->request->getPost('ticket_permission_specific');
        }

        $client_specific = "";
        if ($client === "specific") {
            $client_specific = $this->request->getPost('client_permission_specific');
        }

        $do_not_show_projects                 = $this->request->getPost('do_not_show_projects');
        $can_manage_all_projects              = $this->request->getPost('can_manage_all_projects');
        $can_create_projects                  = $this->request->getPost('can_create_projects');
        $can_edit_projects                    = $this->request->getPost('can_edit_projects');
        $can_edit_only_own_created_projects   = $this->request->getPost('can_edit_only_own_created_projects');
        $can_delete_only_own_created_projects = $this->request->getPost('can_delete_only_own_created_projects');
        $can_delete_projects                  = $this->request->getPost('can_delete_projects');

        $can_add_remove_project_members = $this->request->getPost('can_add_remove_project_members');

        $can_create_tasks                      = $this->request->getPost('can_create_tasks');
        $can_edit_tasks                        = $this->request->getPost('can_edit_tasks');
        $can_delete_tasks                      = $this->request->getPost('can_delete_tasks');
        $can_comment_on_tasks                  = $this->request->getPost('can_comment_on_tasks');
        $show_assigned_tasks_only              = $this->request->getPost('show_assigned_tasks_only');
        $can_update_only_assigned_tasks_status = $this->request->getPost('can_update_only_assigned_tasks_status');

        $can_create_milestones = $this->request->getPost('can_create_milestones');
        $can_edit_milestones   = $this->request->getPost('can_edit_milestones');
        $can_delete_milestones = $this->request->getPost('can_delete_milestones');

        $can_delete_files = $this->request->getPost('can_delete_files');

        $announcement            = $this->request->getPost('announcement_permission');
        $help_and_knowledge_base = $this->request->getPost('help_and_knowledge_base');

        $can_view_team_members_contact_info     = $this->request->getPost('can_view_team_members_contact_info');
        $can_view_team_members_social_links     = $this->request->getPost('can_view_team_members_social_links');
        $team_member_update_permission          = $this->request->getPost('team_member_update_permission');
        $team_member_update_permission_specific = $this->request->getPost('team_member_update_permission_specific');

        $timesheet_manage_permission          = $this->request->getPost('timesheet_manage_permission');
        $timesheet_manage_permission_specific = $this->request->getPost('timesheet_manage_permission_specific');
        if ($timesheet_manage_permission === "specific_excluding_own") {
            //we need to grab value from another input field because the value could be mismatched for two input fields
            $timesheet_manage_permission_specific = $this->request->getPost('timesheet_manage_permission_specific_excluding_own');
        }

        $disable_event_sharing = $this->request->getPost('disable_event_sharing');

        $hide_team_members_list = $this->request->getPost('hide_team_members_list');

        $can_delete_leave_application = $this->request->getPost('can_delete_leave_application');

        if ($this->login_user->is_admin) {
            //only admins can manage administration permissions
            $can_manage_all_kinds_of_settings     = $this->request->getPost('can_manage_all_kinds_of_settings');
            $can_manage_user_role_and_permissions = $can_manage_all_kinds_of_settings ? $this->request->getPost('can_manage_user_role_and_permissions') : "";
            $can_add_or_invite_new_team_members   = $this->request->getPost('can_add_or_invite_new_team_members');
        } else {
            //is not an admin user, fetch data
            $role_info   = $this->Roles_model->get_one($id);
            $permissions = unserialize($role_info->permissions);

            $can_manage_all_kinds_of_settings     = get_array_value($permissions, "can_manage_all_kinds_of_settings");
            $can_manage_user_role_and_permissions = get_array_value($permissions, "can_manage_user_role_and_permissions");
            $can_add_or_invite_new_team_members   = get_array_value($permissions, "can_add_or_invite_new_team_members");
        }

        $message_permission          = "";
        $message_permission_specific = "";
        if ($this->request->getPost('message_permission_no')) {
            $message_permission = "no";
        } else if ($this->request->getPost('message_permission_specific_checkbox')) {
            $message_permission          = "specific";
            $message_permission_specific = $this->request->getPost("message_permission_specific");
        }

        $job_info_manage_permission = $this->request->getPost('job_info_manage_permission');

        $timeline_permission          = "";
        $timeline_permission_specific = "";

        if ($this->request->getPost('timeline_permission_no')) {
            $timeline_permission = "no";
        } else if ($this->request->getPost('timeline_permission_specific_checkbox')) {
            $timeline_permission          = "specific";
            $timeline_permission_specific = $this->request->getPost("timeline_permission_specific");
        }

        $permissions = [
            "leave"                                  => $leave,
            "leave_specific"                         => $leave_specific,
            "attendance"                             => $attendance,
            "attendance_specific"                    => $attendance_specific,
            "invoice"                                => $invoice,
            "estimate"                               => $estimate,
            "contract"                               => $contract,
            "proposal"                               => $proposal,
            "expense"                                => $expense,
            "order"                                  => $order,
            "client"                                 => $client,
            "client_specific"                        => $client_specific,
            "lead"                                   => $lead,
            "ticket"                                 => $ticket,
            "ticket_specific"                        => $ticket_specific,
            "announcement"                           => $announcement,
            "help_and_knowledge_base"                => $help_and_knowledge_base,
            "do_not_show_projects"                   => $do_not_show_projects,
            "can_manage_all_projects"                => $can_manage_all_projects,
            "can_create_projects"                    => $can_create_projects,
            "can_edit_projects"                      => $can_edit_projects,
            "can_edit_only_own_created_projects"     => $can_edit_only_own_created_projects,
            "can_delete_only_own_created_projects"   => $can_delete_only_own_created_projects,
            "can_delete_projects"                    => $can_delete_projects,
            "can_add_remove_project_members"         => $can_add_remove_project_members,
            "can_create_tasks"                       => $can_create_tasks,
            "can_edit_tasks"                         => $can_edit_tasks,
            "can_delete_tasks"                       => $can_delete_tasks,
            "can_comment_on_tasks"                   => $can_comment_on_tasks,
            "show_assigned_tasks_only"               => $show_assigned_tasks_only,
            "can_update_only_assigned_tasks_status"  => $can_update_only_assigned_tasks_status,
            "can_create_milestones"                  => $can_create_milestones,
            "can_edit_milestones"                    => $can_edit_milestones,
            "can_delete_milestones"                  => $can_delete_milestones,
            "can_delete_files"                       => $can_delete_files,
            "can_view_team_members_contact_info"     => $can_view_team_members_contact_info,
            "can_view_team_members_social_links"     => $can_view_team_members_social_links,
            "team_member_update_permission"          => $team_member_update_permission,
            "team_member_update_permission_specific" => $team_member_update_permission_specific,
            "timesheet_manage_permission"            => $timesheet_manage_permission,
            "timesheet_manage_permission_specific"   => $timesheet_manage_permission_specific,
            "disable_event_sharing"                  => $disable_event_sharing,
            "hide_team_members_list"                 => $hide_team_members_list,
            "can_delete_leave_application"           => $can_delete_leave_application,
            "message_permission"                     => $message_permission,
            "message_permission_specific"            => $message_permission_specific,
            "job_info_manage_permission"             => $job_info_manage_permission,
            "can_manage_all_kinds_of_settings"       => $can_manage_all_kinds_of_settings,
            "can_manage_user_role_and_permissions"   => $can_manage_user_role_and_permissions,
            "can_add_or_invite_new_team_members"     => $can_add_or_invite_new_team_members,
            "timeline_permission"                    => $timeline_permission,
            "timeline_permission_specific"           => $timeline_permission_specific,
        ];

        $permissions = app_hooks()->apply_filters('app_filter_role_permissions_save_data', $permissions);

        $data = [
            "permissions" => serialize($permissions),
        ];

        $save_id = $this->Roles_model->ci_save($data, $id);
        if ($save_id) {
            echo json_encode(["success" => true, "data" => $this->_row_data($id), 'id' => $save_id, 'message' => app_lang('record_saved')]);
        } else {
            echo json_encode(["success" => false, 'message' => app_lang('error_occurred')]);
        }
    }

    //delete or undo a role
    public function delete()
    {
        $this->validate_submitted_data([
            "id" => "numeric|required",
        ]);

        $id = $this->request->getPost('id');
        if ($this->request->getPost('undo')) {
            if ($this->Roles_model->delete($id, true)) {
                echo json_encode(["success" => true, "data" => $this->_row_data($id), "message" => app_lang('record_undone')]);
            } else {
                echo json_encode(["success" => false, app_lang('error_occurred')]);
            }
        } else {
            if ($this->Roles_model->delete($id)) {
                echo json_encode(["success" => true, 'message' => app_lang('record_deleted')]);
            } else {
                echo json_encode(["success" => false, 'message' => app_lang('record_cannot_be_deleted')]);
            }
        }
    }

    //get role list data
    public function list_data()
    {
        $list_data = $this->Roles_model->get_details()->getResult();
        $result    = [];
        foreach ($list_data as $data) {
            $result[] = $this->_make_row($data);
        }
        echo json_encode(["data" => $result]);
    }

    //get a row of role list
    private function _row_data($id)
    {
        $options = ["id" => $id];
        $data    = $this->Roles_model->get_details($options)->getRow();
        return $this->_make_row($data);
    }

    //make a row of role list table
    private function _make_row($data)
    {
        return [
            "<a href='#' data-id='$data->id' class='role-row link'>" . $data->title . "</a>",
            "<a class='edit'><i data-feather='sliders' class='icon-16'></i></a>" . modal_anchor(get_uri("roles/modal_form"), "<i data-feather='edit' class='icon-16'></i>", ["class" => "", "title" => app_lang('edit_role'), "data-post-id" => $data->id])
                . js_anchor("<i data-feather='x' class='icon-16'></i>", ['title' => app_lang('delete_role'), "class" => "delete", "data-id" => $data->id, "data-action-url" => get_uri("roles/delete"), "data-action" => "delete"]),
        ];
    }

    //load the user roles view
    public function user_roles()
    {
        return $this->template->rander("roles/user_roles/index");
    }

    //list of user roles for datatable
    public function user_role_list_data()
    {
        $options = [
            "status"    => $this->request->getPost("status"),
            "user_type" => "staff",
        ];

        if (! $this->login_user->is_admin) {
            $options["non_admin_users_only"] = true;
        }

        $list_data = $this->Users_model->get_details($options)->getResult();
        $result    = [];
        foreach ($list_data as $data) {
            $result[] = $this->_make_user_role_row($data);
        }
        echo json_encode(["data" => $result]);
    }

    //reaturn a row of user roles list table
    private function _user_role_row_data($id)
    {
        $options = ["id" => $id];
        $data    = $this->Users_model->get_details($options)->getRow();
        return $this->_make_user_role_row($data);
    }

    //prepare a row of user roles list table
    private function _make_user_role_row($data)
    {
        $full_name = $data->first_name . " " . $data->last_name;

        $role_title = $data->role_title;
        if ($data->is_admin) {
            $role_title = app_lang("admin");
        } else if (! $data->is_admin && $data->role_id == 0) {
            $role_title = app_lang("team_member");
        }

        $edit = "";
        if ($this->login_user->id !== $data->id) {
            $edit = modal_anchor(get_uri("roles/user_role_modal_form"), "<i data-feather='edit' class='icon-16'></i>", ["class" => "edit", "title" => app_lang('edit_user_role'), "data-post-id" => $data->id]);
        }

        return [
            get_team_member_profile_link($data->id, $full_name),
            $role_title,
            $edit,
        ];
    }

    //load user roles add/edit modal
    public function user_role_modal_form()
    {
        $id                         = $this->request->getPost('id');
        $view_data['role_dropdown'] = $this->_get_roles_dropdown();

        $options = [
            "id"        => $id,
            "user_type" => "staff",
        ];

        $team_members = $this->Users_model->get_details($options)->getResult();
        foreach ($team_members as $team_member) {
            $view_data["team_members_info"] = $team_member;

            if ($view_data['team_members_info']->is_admin) {
                $view_data['team_members_info']->role_id = "admin";
            }
        }
        return $this->template->view('roles/user_roles/modal_form', $view_data);
    }

    //save a user role
    public function save_user_role()
    {
        $user_id   = $this->request->getPost('user_id');
        $user_info = $this->Users_model->get_one($user_id);

        $role    = $this->request->getPost('role');
        $role_id = $role;

        if (! (! $this->is_own_id($user_id) && ($this->login_user->is_admin || (! $user_info->is_admin && $this->has_role_manage_permission() && ! $this->is_admin_role($role))))) {
            app_redirect("forbidden");
        }

        if ($this->login_user->is_admin && $role === "admin") {
            $data["is_admin"] = 1;
            $data["role_id"]  = 0;
        } else {
            $data["is_admin"] = 0;
            $data["role_id"]  = $role_id;
        }

        $save_id = $this->Users_model->ci_save($data, $user_id);
        if ($save_id) {
            echo json_encode(["success" => true, "data" => $this->_user_role_row_data($save_id), 'id' => $save_id, 'message' => app_lang('record_saved')]);
        } else {
            echo json_encode(["success" => false, 'message' => app_lang('error_occurred')]);
        }
    }
}

/* End of file roles.php */
/* Location: ./app/controllers/roles.php */
