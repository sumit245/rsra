# plugins\Hr_profile\Controllers\Hr_profile.php

- Path: `plugins\Hr_profile\Controllers\Hr_profile.php`
- Type: PHP
- Size: 293647 bytes

## Summary (from docblocks)

Organizational chart
@return view

email exist as staff
@return integer

get data department
@return json

Delete department from database
@param  integer $id

email exists
@return [type]

test imap connection
@return [type]

reception_staff
@return view

table reception staff

setting
@return view

commodity types
@return [type]

list commodity type data
@return [type]

_make commodity type row
@param  [type] $data 
@return [type]

commodity type modal form
@return [type]

contract_type
@param  integer $id

delete contract type
@param  integer $id

salary types
@return [type]

list_allowance_type_data
@return [type]

_make salary type row
@param  [type] $data 
@return [type]

allowancetype
@param  integer $id

delete_allowance_type
@param  integer $id

insurance type

delete insurance type
@param  integer $id

insurance conditions setting

salary types
@return [type]

list_salary_type_data
@return [type]

_make salary type row
@param  [type] $data 
@return [type]

commodity type modal form
@return [type]

salary form
@param  integer $id

delete salary form
@param  integer $id

workplaces
@return [type]

list procedure_retire data
@return [type]

_make procedure_retire row
@param  [type] $data 
@return [type]

procedure_retire modal form
@return [type]

table procedure retire

add procedure form manage

delete procedure form manage
@param  integer $id

procedure procedure retire details
@param  integer $id
@return view

procedure form

delete procedure retire
@param  integer $id
@return integer

edit procedure retire
@param  integer $id

edit procedure form

training
@return view

training libraries
@return [type]

training_results
@return [type]

training programs
@return [type]

Add new position training or update existing
@param integer id

get training type child
@param  integer $id
@return json

job position training add edit

get jobposition fill data
@return json

job position manage
@return view

table job

add job position
@param  integer $id

get job position edit
@param  integer $id
@return json

delete job position
@param  integer $id

import job p, Import Job
@return [type]

import job p excel
@return [type]

job positions
@param  integer $id
@return view

new job position modal form
@return [type]

add or update job position
@param  integer $id

table job position
@return [type]

job position delete tag item
@param  String $tag_id
@return json

hrm preview jobposition file
@param  [type] $id
@param  [type] $rel_id
@return [type]

job position view edit
@param  string $id
@return view

get list job position tags file
@param  [type] $id
@return [type]

get position by department
@return json

delete job position
@param  integer $id
@param  integer $job_p_id

get staff salary form
@return json

get staff allowance type
@return json

job position salary add edit

save setting reception staff

add new reception

send training staff
@param  [type] $email
@param  [type] $position_id
@param  string $training_type
@return [type]

get percent complete
@param  string $id
@return [type]

get mark staff
@param  integer $id_staff
@return array

delete reception
@param  integer $id

get_reception_modal
@return [type]

get reception
@param  integer $id
@return json

change status checklist
@return json

add new asset
@param integer $id

change status allocation asset
@return json

delete asset
@param  integer $id
@param  integer $id2
@return json

staff infor
@return view

table

importxlsx
@return view

import employees excel
@return [type]

importxlsx2
@return  json

delete staff

member
@param  integer $id
@param  integer $group
@return view

table education position

table education

save update education
@return json

delete education
@return json

table reception

general bonus
@param  integer $id
@return json

general discipline
@param  integer $id
@return json

records received
@return json

upload file
@return json

hr profile file
@param  integer $id
@param  string $rel_id

delete hr profile staff attachment
@param  integer $attachment_id
@return json

update staff permission

update staff profile

add update staff bonus discipline

file view bonus discipline
@param  integer $id
@return view

workplaces
@return [type]

list workplace data
@return [type]

_make workplace row
@param  [type] $data 
@return [type]

workplace modal form
@return [type]

workplace
@param  string $id
@return [type]

delete workplace
@param  [type] $id
@return [type]

permission modal
@return [type]

hr profile update permissions
@param  string $id
@return [type]

staff id changed
@param  [type] $staff_id
@return [type]

delete hr profile permission
@param  [type] $id
@return [type]

zen unit chart
@param  [type] $department
@return [type]

get list job position training
@param  [type] $id
@return [type]

delete job position training process
@param  [type] $training_id
@return [type]

delete position training
@param  [type] $id
@return [type]

table contract
@return [type]

contracts
@param  string $id
@return [type]

contract
@param  string $id
@return [type]

delete contract
@param  [type] $id
@return [type]

contract code exists
@return [type]

get hrm contract data ajax
@param  [type] $id
@return [type]

get staff role
@return [type]

get contract type
@param  string $id
@return [type]

prefix numbers
@return [type]

inventory setting
@return [type]

get code
@param  String $rel_type
@return String

import job position
@return [type]

dependent person
@param  string $id
@return [type]

delete dependent person
@param  [type] $id
@return [type]

approval dependents
@return [type]

approval status
@return [type]

table dependent person
@return [type]

import xlsx dependent person
@return [type]

import file xlsx dependent person
@return [type]

admin delete dependent person
@param  [type] $id
@return [type]

delete_error file day before
@return [type]

dependent person modal
@return [type]

resignation procedures
@return [type]

add staff quitting work

delete resignation procedure
@param  [type] $id
@return [type]

table resignation procedures
@return [type]

get staff info of resignation procedures
@param  [type] $staff_id
@return [type]

delete procedures for quitting work
@param  [type] $staffid
@return [type]

set data detail staff checklist quit work
@param [type] $staffid

update status quit work
@param  [type] $staffid
@return [type]

update status option name
@return [type]

preview q a file
@param  [type] $id
@param  [type] $rel_id
@return [type]

delete hr profile q a attachment file
@param  [type] $attachment_id
@return [type]

get salary allowance value
@param  [type] $rel_type
@return [type]

hrm file contract
@param  [type] $id
@param  [type] $rel_id
@return [type]

delete hrm contract attachment file
@param  [type] $attachment_id
@return [type]

member modal
@return [type]

new member
@return [type]

add edit member
@param string $id

change staff status: Change status to staff active or inactive
@param  [type] $id
@param  [type] $status
@return [type]

hr code exists
@return [type]

view contract modal
@return [type]

reports
@return [type]

report by leave statistics
@return [type]

report by working hours
@return [type]

table report the employee quitting
@return [type]

table list of employees with salary change
@return [type]

get get base currency name
@return [type]

get chart senior staff
@return [type]

HR is working

qualification department
@return [type]

report by staffs
@return [type]

import job position excel
@return [type]

hrm delete bulk action
@return [type]

hrm delete bulk action v2
@return [type]
Delete data from ids array, don't use foreach

import dependent person excel
@return [type]

reset_datas
@return [type]

reset data
@return [type]

table training program
@return [type]

table training result
@return [type]

training table
@return [type]

type of trainings
@return [type]

list type of training data
@return [type]

_make type of training row
@param  [type] $data 
@return [type]

type_of_training_modal_form 
@return [type] [

type of training
@param  string $id
@return [type]

delete type of training
@param  [type] $id
@return [type]

reception staffs
@return [type]

get training program by type
@return [type]

view training program
@param  string $id
@return [type]

create staff excel file
@return [type]

view pdf
@return [type]

save contract data
@return [type]

hr clear signature
@param  [type] $id
@return [type]

contract pdf
@param  [type] $id
@return [type]

contract sign
@param  [type] $id
@return [type]

workplaces
@return [type]

list contract_template data
@return [type]

_make contract_template row
@param  [type] $data 
@return [type]

contract template
@param  string $id
@return [type]

delete contract template
@param  [type] $id
@return [type]

confirm delete modal form
@return [type]

staff email exists
@return [type]

training detail
@param  [type] $id   
@param  [type] $hash 
@return [type]

view staff training result
@param  [type] $staff_id    
@param  [type] $resultsetid 
@param  [type] $id          
@param  [type] $hash        
@return [type]

view
@param  integer $id  
@param  string  $tab 
@return [type]

hr has job info manage permission
@return [type]

hr can view team members contact info
@return [type]

hr can view team members social links
@return [type]

staff contracts info
@param  [type] $user_id 
@return [type]

staff dependent info
@param  [type] $user_id 
@return [type]

staff training info
@param  [type] $user_id 
@return [type]

## References

**Models Used**
- `hr_profile_model`
- `Team_model`
- `Users_model`
- `staff_model`
- `departments_model`
- `currencies_model`
- `misc_model`
- `Roles_model`
- `roles_model`
- `Social_links_model`
- `knowledge_base_q_a_model`

**Database Tables (inferred)**
- `database`
- `line`
- `dasboard`
- `contract`
- `ids`
- `plugin`
- `Team`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\Hr_profile\Controllers\Hr_profile.php`

**Classes**:
- `Hr_profile\Controllers\Hr_profile extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `dashboard()`
- `organizational_chart()`
- `email_exist_as_staff()`
- `get_data_department()`
- `delete()`
- `department($id = '')`
- `email_exists()`
- `test_imap_connection()`
- `reception_staff()`
- `add_reception_staff()`
- `table_reception_staff()`
- `setting()`
- `contract_types()`
- `list_contract_type_data()`
- `_make_contract_type_row($data)`
- `contract_type_modal_form()`
- `contract_type($id = '')`
- `delete_contract_type($id)`
- `allowance_types()`
- `list_allowance_type_data()`
- `_make_allowance_type_row($data)`
- `allowance_type_modal_form()`
- `allowance_type($id = '')`
- `delete_allowance_type($id)`
- `insurance_type()`
- `delete_insurance_type($id)`
- `insurance_conditions_setting()`
- `salary_types()`
- `list_salary_type_data()`
- `_make_salary_type_row($data)`
- `salary_type_modal_form()`
- `salary_form($id = '')`
- `delete_salary_form($id)`
- `procedure_retires()`
- `list_procedure_retire_data()`
- `_make_procedure_retire_row($data)`
- `procedure_retire_modal_form()`
- `table_procedure_retire()`
- `add_procedure_form_manage($id = '')`
- `delete_procedure_form_manage($id)`
- `procedure_procedure_retire_details($id = '')`
- `procedure_form()`
- `delete_procedure_retire()`
- `edit_procedure_retire($id)`
- `edit_procedure_form()`
- `training()`
- `training_libraries()`
- `training_results()`
- `training_programs()`
- `position_training($id = '')`
- `add_training_question()`
- `update_training_question()`
- `update_training_questions_orders()`
- `remove_question($questionid)`
- `remove_box_description($questionboxdescriptionid)`
- `add_box_description($questionid, $boxid)`
- `update_training_question_answer()`
- `get_training_type_child($id)`
- `job_position_training_add_edit()`
- `get_jobposition_fill_data()`
- `job_position_manage()`
- `table_job()`
- `job_p($id = '')`
- `get_job_p_edit($id)`
- `delete_job_p()`
- `import_job_p()`
- `import_job_p_excel()`
- `job_positions($id = '')`
- `new_job_position_modal_form()`
- `job_position($id = '')`
- `table_job_position()`
- `job_position_delete_tag_item($tag_id)`
- `preview_job_position_file($id, $rel_id)`
- `delete_hr_profile_job_position_attachment_file($attachment_id)`
- `job_position_view_edit($id = '', $parent_id = '')`
- `get_list_job_position_tags_file($id)`
- `get_position_by_department()`
- `delete_job_position()`
- `get_staff_salary_form()`
- `get_staff_allowance_type()`
- `job_position_salary_add_edit()`
- `save_setting_reception_staff()`
- `add_new_reception()`
- `send_training_staff($email, $position_id, $training_type = '', $position_training_id = '', $staffid = '')`
- `get_percent_complete($id = '')`
- `get_mark_staff($id_staff, $training_process_id)`
- `delete_reception()`
- `get_reception_modal()`
- `get_reception($id = '')`
- `change_status_checklist()`
- `add_new_asset($id)`
- `change_status_allocation_asset()`
- `delete_asset($id, $id2)`
- `staff_infor()`
- `table()`
- `importxlsx()`
- `import_employees_excel()`
- `importxlsx2()`
- `delete_staff()`
- `member($id = '', $group = '')`
- `table_education_position()`
- `table_education()`
- `save_update_education()`
- `delete_education()`
- `table_reception()`
- `general_bonus($id)`
- `general_discipline($id)`
- `records_received()`
- `upload_file()`
- `hr_profile_file($id, $rel_id)`
- `delete_hr_profile_staff_attachment($attachment_id)`
- `update_staff_permission()`
- `update_staff_profile()`
- `add_update_staff_bonus_discipline()`
- `file_view_bonus_discipline($id)`
- `workplaces()`
- `list_workplace_data()`
- `_make_workplace_row($data)`
- `workplace_modal_form()`
- `workplace($id = '')`
- `delete_workplace($id)`
- `hr_profile_permission_table()`
- `permission_modal()`
- `hr_profile_update_permissions($id = '')`
- `staff_id_changed($staff_id)`
- `delete_hr_profile_permission($id)`
- `zen_unit_chart($department)`
- `get_list_job_position_training($id)`
- `delete_job_position_training_process()`
- `delete_position_training()`
- `table_contract()`
- `contracts($id = '')`
- `contract($id = '')`
- `delete_contract()`
- `contract_code_exists()`
- `view_staff_contract($id)`
- `get_staff_role()`
- `get_contract_type($id = '')`
- `prefix_numbers()`
- `prefix_number()`
- `get_code($rel_type)`
- `import_job_position()`
- `dependent_person($id = '')`
- `delete_dependent_person()`
- `dependent_persons()`
- `approval_status()`
- `table_dependent_person()`
- `import_xlsx_dependent_person()`
- `import_file_xlsx_dependent_person()`
- `admin_delete_dependent_person()`
- `delete_error_file_day_before($before_day = '', $folder_name = '')`
- `dependent_person_modal()`
- `resignation_procedures()`
- `add_resignation_procedure()`
- `delete_resignation_procedure($id)`
- `table_resignation_procedures()`
- `get_staff_info_of_resignation_procedures($staff_id)`
- `delete_procedures_for_quitting_work()`
- `set_data_detail_staff_checklist_quit_work($staffid)`
- `update_status_quit_work()`
- `update_status_option_name()`
- `preview_q_a_file($id, $rel_id)`
- `delete_hr_profile_q_a_attachment_file($attachment_id)`
- `get_salary_allowance_value($rel_type)`
- `hrm_file_contract($id, $rel_id)`
- `delete_hrm_contract_attachment_file($attachment_id)`
- `member_modal()`
- `new_member($id = '')`
- `add_edit_member($id = '')`
- `change_staff_status($id, $status)`
- `hr_code_exists()`
- `view_contract_modal()`
- `reports()`
- `report_by_leave_statistics()`
- `report_by_working_hours()`
- `table_report_the_employee_quitting()`
- `table_list_of_employees_with_salary_change()`
- `get_base_currency_name()`
- `get_chart_senior_staff($sort_from, $months_report = '', $report_from = '', $report_to = '')`
- `HR_is_working()`
- `qualification_department()`
- `report_by_staffs()`
- `import_job_position_excel()`
- `hrm_delete_bulk_action()`
- `hrm_delete_bulk_action_v2()`
- `import_dependent_person_excel()`
- `reset_datas()`
- `reset_data()`
- `table_training_program()`
- `table_training_result()`
- `training_libraries_table()`
- `type_of_trainings()`
- `list_type_of_training_data()`
- `_make_type_of_training_row($data)`
- `type_of_training_modal_form()`
- `type_of_training($id = '')`
- `delete_type_of_training($id)`
- `reception_staffs()`
- `get_training_program_by_type()`
- `view_training_program($id = '')`
- `hr_role_changed($id)`
- `create_staff_sample_file()`
- `view_pdf()`
- `save_hr_contract_data()`
- `hr_clear_signature($id)`
- `contract_pdf($id)`
- `contract_sign($id)`
- `staff_contract_sign($id)`
- `contract_templates()`
- `list_contract_template_data()`
- `_make_contract_template_row($data)`
- `contract_template($id = '')`
- `delete_contract_template_($id)`
- `confirm_delete_modal_form()`
- `temp_upload_file()`
- `validate_position_file()`
- `staff_email_exists()`
- `hr_create_notification($data = array()`
- `update_staff_contract_content()`
- `training_detail($id, $hash)`
- `view_staff_training_result($staff_id, $resultsetid, $id, $hash)`
- `staff_profile($id = 0, $tab = "")`
- `hr_can_update_team_members_info($user_id)`
- `hr_has_job_info_manage_permission()`
- `hr_can_view_team_members_contact_info()`
- `hr_can_view_team_members_social_links()`
- `staff_contracts_info($user_id)`
- `staff_dependent_info($user_id)`
- `staff_training_info($id)`

