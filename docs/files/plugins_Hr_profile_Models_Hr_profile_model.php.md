# plugins\Hr_profile\Models\Hr_profile_model.php

- Path: `plugins\Hr_profile\Models\Hr_profile_model.php`
- Type: PHP
- Size: 226881 bytes

## Summary (from docblocks)

prefixed table fields wildcard
@param  [type] $table 
@param  [type] $alias 
@param  [type] $field 
@return [type]

hr profile run query
@param  [type] $query_string 
@return [type]

count items
@return [type]

Function that will parse table data from the tables folder for amin area
@param  string $table  table filename
@param  array  $params additional params
@return void

get hr profile dashboard data
@return array

staff chart by age
@return array

contract type chart
@return  array

staff chart by departments
@return [type]

staff chart by job positions
@return [type]

report by staffs
@return [type]

new staff by month
@param  [type] $from 
@param  [type] $to   
@return [type]

staff working by_month
@param  [type] $from 
@param  [type] $to   
@return [type]

staff quit work by month
@param  [type] $month 
@return [type]

get contracttype
@param  boolean $id 
@return [type]

get data departmentchart
@return array

get child node chart
@param  integer $id      
@param  integer $arr_dep 
@return array

get data departmentchart v2
@return [type]

get child node chart v2
@param  [type] $id      
@param  [type] $arr_dep 
@return [type]

check is manager
@param  [type] $data 
@return [type]

count reality now
@param  integer $department 
@return integer

get data chart
@return array

get data chart v2
@return [type]

check is team manage
@param  [type] $data       
@param  [type] $manager_id 
@return [type]

get department tree
@return array

Get child node of department tree
@param  $id      current department id
@param  $arr_dep department array
@return current department tree

get department name
@param  integer $departmentid 
@return object

get all staff not in record
@return array object

get setting transfer records
@return array

get_staff_tree
@return array

Get child node of department tree
@param  $id      current department id
@param  $arr_dep department array
@return current department tree

get all jp interview training
@return object

get setting asset allocation
@return array

get list record meta
@return array

add setting transfer records

add setting asset allocation
@param array $data_asset_name

add rec transfer records
@param array $data_asset_name

group checklist
@return array

get setting training 
@return object

get job position
@param  integer $id 
@return array or object

get allowance type
@param  integer $id 
@return array or object

get salary form
@param  integer $id 
@return array or object

get procedure retire
@param  integer $id 
@return array

get allowance type tax
@param  integer $id

add contract type
@param array $data

delete contract type
@param  integer $id

add allowance type
@param array $data

update allowance type
@param  array $data 
@param  integer $id   
@return boolean

update contract type
@param  array $data 
@param  integer $id   
@return boolean

delete allowance type
@param  integer $id 
@return boolean

add salary form
@param array $data

update salary form
@param  array $data 
@param  integer $id   
@return boolean

delete salary form
@param  integer $id 
@return boolean

add procedure form manage
@param array $data

update procedure form manage
@param  array $data 
@param  integer $id   
@return boolean

get procedure form manage
@param  integer $id 
@return array or object

delete procedure form manage
@param  integer $id 
@return boolean

check department on procedure
@param  integer $departmentid 
@return array

add procedure retire
@param array $data

delete procedure retire
@param  integer $id 
@return boolean

get edit procedure retire
@param  integer $id 
@return object

edit procedure retire
@param  array $data 
@param  integer $id   
@return boolean

get job position training process
@param  integer $id 
@return array

get job position interview process
@param  integer $id 
@return array or object

add position training
@param [type] $data

update position training
@param  [type] $data        
@param  [type] $training_id 
@return [type]

get position training
@param  integer $id 
@return array

add training question
@param [type] $data

insert training question
@param  [type] $training_id 
@param  string $question    
@return [type]

Add new question type
@param  string $type       checkbox/textarea/radio/input
@param  mixed $questionid question id
@return mixed

update question
@param  array $data 
@return boolean

update survey questions orders
@param  array $data

remove question
@param  integer $questionid 
@return boolean

remove box description
@param  integer $questionbod 
@return boolean

add box description
@param integer $questionid  
@param integer $boxid       
@param string $description
@return  integer

add training result
@param integer $id     
@param array $result

get training question box id
@param  integer $questionid 
@return integer

update answer question
@param  array $data 
@return array

get child training type
@param  integer $id 
@return array

add job position training process
@param array $data

update job position training process
@param  array $data 
@param  integer $id   
@return integer or boolean

get jobposition by department
@param integer $department_id 
@param  integer $status        
@return string

get job position
@param  integer $id 
@return object or array

add job position
@param array $data

update job position
@param  array $data 
@param  integer $id   
@return boolean

delete job position
@param  integer $id 
@return boolean

add job position
@param aray $data

update job position
@param aray $data

delete job position
@param aray $data

get list job position tags file
@param  [type] $job_position_id 
@return [type]

get hrm attachments file
@param  [type] $rel_id   
@param  [type] $rel_type 
@return [type]

get department from job p
@param  integer $job_p_id 
@return array

check child in job position
@param  integer $id 
@return boolean

get array job position
@param  integer $id 
@return boolean

get job position tag
@param  integer $id

get array interview process by position id
@param  integer $id
@return  array

get array training process by position id
@param  integer $id
@return  array

get job position salary scale
@param  integer $job_position_id 
@return array

get hr profile attachments file
@param  integer $rel_id   
@param  integer $rel_type 
@return array

get department from position department
@param  array $arr_value 
@param  integer $position  
@return string

get position by department
@param integer $department_id 
@param  integer $status        
@return string

job position add update salary scale
@param  array $data 
@return boolean

get staff
@param  integer $id    
@param  array  $where 
@return array

add manage info reception
@param array $data

add setting training

checklist by group
@param  integer $group_id 
@return array

count max checklist
@return [type]

get staff info id
@param  [type] $staffid 
@return [type]

add_manage_info_reception_for_staff
@param integer $id_staff 
@param integer $data

add asset staff
@param integer $id   
@param array $data

get jp interview training
@param  integer $position_id   
@param  integer $training_type 
@return object

add training staff
@param integer $data_training 
@param integer $id_staff

add transfer records reception
@param array $data    
@param integer $staffid

getPercent
@param  integer $total  
@param  integer $effect 
@return foat

get group checklist allocation by staff id
@param  integer $staffid 
@return integer

get checklist allocation by group id
@param  integer $id_group 
@return array

get resultset training
@param  integer $id 
@return integer

get allocation asset
@param  integer $staff_id 
@return array

get result training staff
@param  integer $list_resultsetid 
@return array

get id result correct
@param  integer $id_question 
@return object

get point training question form
@param  [type] $id_question 
@return [type]

delete manage info reception
@param  integer $id

delete setting training
@param  integer $id

delete setting asset allocation
@param  integer $id 
@return integer

delete reception
@param  integer $id 
@return boolean

get department by staffid
@param  integer $id_staff 
@return object

get transfer records reception staff
@param  integer $id 
@return integer

update checklist
@param  array $data 
@return boolean

delete tag item
@param  array $data 
@return boolean

add new asset staff
@param integer $id   
@param array $data

update asset staff
@param  array $data 
@return boolean

delete allocation asset
@param  integer $allocation_id 
@return boolean

get training allocation staff
@param  integer $id 
@return object

@param  integer ID (option)
@param  boolean (optional)
@return mixed
Get departments where staff belongs
If $onlyids passed return only departmentsID (simple array) if not returns array of all departments

Get staff permissions
@param  mixed $id staff id
@return array

get workplace array id
@return [type]

get workplace
@param  boolean $id 
@return [type]

add workplace
@param [type] $data

update workplace
@param  [type] $data 
@param  [type] $id   
@return [type]

delete workplace
@param  [type] $id 
@return [type]

format date
@param  date $date     
@return date

format date time
@param  date $date     
@return date

check format date ymd
@param  date $date 
@return boolean

check format date
@param  date $date 
@return boolean

@param  integer (optional)
@return object
Get single goal

update staff
@param  [type] $data 
@param  [type] $id   
@return [type]

get department name
@param  integer $staffid

get child node staff chart
@param  integer $id      
@param  integer $arr_dep 
@return array

get hr profile attachments
@param  integer $staffid 
@return array

get records received
@param  integer $id
@return object

get hr profile profile file
@param  integer $staffid 
@return array

get duration
@return array

add education
@param array $data

update education
@param array $data

delete education
@param integer $id

member get evaluate form
@param  integer $staffid 
@return array

get evaluate form status
@return array

get dataobject result evaluate
@param  integer  $id       
@param  boolean $arrstaff 
@return integer

add attachment to database
@param integer  $rel_id     
@param string  $rel_type   
@param string  $attachment 
@param integer $insert_id

function get file for hrm staff
@param  integer  $id     
@param  boolean $rel_id 
@return object

delete staff attchement
@param  integer $attachment_id 
@return integer

get hr profile attachments delete
@param  integer $id 
@return object

update staff permissions
@param  array $data 
@param  integer $id   
@return boolean

update permissions
@param  array $permissions 
@param  integer $id          
@return boolean

get file info
@param  integer $id       
@param  string $rel_type 
@return object

update staff profile
@param  array $data 
@return boolean

get staff in deparment
@param  integer $department_id 
@return integer

get staff role
@param  [type] $staff_id 
@return [type]

delete hr profile permission
@param  [type] $id 
@return [type]

get data dpm chart
@param  [type] $dpm 
@return [type]

list job department
@param  [type] $department 
@return [type]

delete hr job position attachment file
@param  [type] $attachment_id 
@return [type]

get hrm profile file
@param  [type] $rel_id   
@param  [type] $rel_type 
@return [type]

get job position training de
@param  boolean $id 
@return [type]

delete job position training process
@param  [type] $trainingid 
@return [type]

delete position training
@param  [type] $trainingid 
@return [type]

get list position training by id training
@param  array $training_id_aray 
@return array

get contract
@param  integer $id 
@return array

get contract detail
@param  integer $id 
@return array

add contract
@param array $data

update contract
@param  array $data 
@param  integer $id   
@return boolean

delete contract
@param  integer $id 
@return boolean

get contracttype by id
@param  [type] $id 
@return [type]

get staff active
@return array

get staff active has contract
@return array

update prefix number
@param  [type] $data 
@return [type]

create code
@param  [type] $rel_type 
@return [type]

check department format
@param  [type] $department 
@return [type]

get dependent person
@param  boolean $id 
@return [type]

get dependent person bytstaff
@param  [type] $staffid 
@return [type]

add dependent person
@param [type] $data

update dependent person
@param  [type] $data 
@param  [type] $id   
@return [type]

delete dependent person
@param  [type] $id 
@return [type]

update approval status
@param  [type] $data 
@return [type]

update approval status
@param  [type] $data 
@return [type]

add resignation procedure
@param [type] $data

get data asset
@param  [type] $staffid 
@return [type]

add data of staff quit work by id
@param [type] $rel_name         
@param string $people_handle_id

add data of staff quit work
@param [type] $rel_id      
@param [type] $option_name 
@param [type] $staffid

get resignation procedure by staff
@param  [type] $staff_id 
@return [type]

delete procedures for quitting work
@param  [type] $staffid 
@return [type]

get data procedure retire of staff
@param  [type] $staffid 
@return [type]

update status quit work
@param  [type] $staffid 
@return [type]

update status procedure retire of staff
@param  array  $where 
@return [type]

delete hr q a attachment file
@param  [type] $attachment_id 
@return [type]

get salary allowance handsontable
@return [type]

delete hr contract attachment file
@param  [type] $attachment_id 
@return [type]

get salary allowance for table
@param  [type] $contract_id 
@return [type]

send mail training
@param  [type] $email       
@param  [type] $sender_name 
@param  [type] $subject     
@param  [type] $body        
@return [type]

get board mark form
@param  [type] $rel_id 
@return [type]

get list quiting work
@param  [type] $staffid 
@return [type]

get staff by _month
@param  [type] $from_month 
@param  [type] $to_month   
@return [type]

get dstafflist by year
@param  [type] $year  
@param  [type] $month 
@return [type]

get staff by department id and time
@param  [type] $id_department 
@param  [type] $from_time     
@param  [type] $to_time       
@return [type]

get department by list id
@param  string $list_id 
@return [type]

get list contract detail staff
@param  [type] $staffid 
@return [type]

get list staff by year
@param  [type] $year 
@return [type]

count staff by department literacy
@param  string $department_ids 
@return [type]

report by staffs month
@param  [type] $from_date 
@param  [type] $to_date   
@return [type]

[report_new_staff_by_month
@param  [type] $month 
@return [type]

report staff working by month
@param  [type] $month 
@return [type]

report staff quit work by month
@param  [type] $month 
@return [type]

hr get training question form by relid
@param  [type] $relid 
@return [type]

hr get form results by resultsetid
@param  [type] $resultsetid 
@return [type]

delete hr article attachment file
@param  [type] $attachment_id 
@return [type]

get type of training
@param  boolean $id 
@return [type]

add type of training
@param [type] $data

update type of training
@param  [type] $data 
@param  [type] $id   
@return [type]

delete type of training
@param  [type] $id 
@return [type]

get list training program
@param  [type] $position_id   
@param  [type] $training_type 
@return [type]

delete tranining result by staffid
@param  [type] $staff_id 
@return [type]

get additional training
@param  [type] $staff_id 
@return [type]

get mark staff from resultsetid
@param  [type] $resultsetid 
@return [type]

get training library
@return [type]

get training result by training program
@param  [type] $training_program_id 
@return [type]

get mark staff v2
@param  [type] $id_staff            
@param  [type] $training_process_id 
@return [type]

get staff from training program
@param  [type] $training_programs 
@return [type]

get department by manager
@return [type]

get staff by manager
@return [type]

get staff in teammanage
@param  [type] $teammanage 
@return [type]

get staff by job position
@param  [type] $job_position_id 
@return [type]

contract clear signature
@param  [type] $id 
@return [type]

hr_get_staff_contract_pdf_only_for_pdf
@param  string  $id         
@param  array   $where      
@param  boolean $for_editor 
@return [type]

get contract template
@param  boolean $id 
@return [type]

add contract template
@param [type] $data

update contract template
@param  [type] $data 
@param  [type] $id   
@return [type]

delete contract template 
@param  [type] $id [
@return [type]     [

hr get contract template by staff
@param  [type] $staffid 
@return [type]

update hr staff contract content
@param  [type] $id      
@param  [type] $staffid 
@return [type]

add_department
@param [type] $data

update department
@param  [type] $data 
@return [type]

delete dependent
@param  [type] $id 
@return [type]

add staff into department
@param [type] $departments 
@param [type] $staff_id

import add staff
@param  [type] $data 
@return [type]

update staff
@param  [type] $data 
@param  [type] $id   
@return [type]

hr_create_notification
@param  [type]  $event      
@param  [type]  $user_id    
@param  array   $options    
@param  integer $to_user_id 
@return [type]

get type of training has training program
@return [type]

## References

**Models Used**
- `departments_model`

**Database Tables (inferred)**
- `the`
- `job`
- `position`
- `resultsetid`
- `training`
- `plugin`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\Hr_profile\Models\Hr_profile_model.php`

**Classes**:
- `Hr_profile\Models\Hr_profile_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `prefixed_table_fields_wildcard($table, $alias, $field)`
- `hr_profile_run_query($query_string)`
- `count_all_items($where = '')`
- `get_table_data($table, $dataPost, $params = [])`
- `get_hr_profile_dashboard_data()`
- `staff_chart_by_age()`
- `contract_type_chart()`
- `staff_chart_by_departments()`
- `staff_chart_by_job_positions()`
- `report_by_staffs()`
- `new_staff_by_month($month)`
- `staff_working_by_month($month)`
- `staff_quit_work_by_month($month)`
- `get_contracttype($id = false)`
- `get_data_departmentchart()`
- `get_child_node_chart($id, $arr_dep)`
- `get_data_departmentchart_v2()`
- `get_child_node_chart_v2($id, $arr_dep)`
- `check_is_manager($data, $manager_id)`
- `count_reality_now($department)`
- `get_data_chart()`
- `get_data_chart_v2()`
- `check_is_team_manage($data, $manager_id)`
- `get_department_tree()`
- `get_child_node($id, $arr_dep)`
- `hr_profile_get_department_name($departmentid = 0)`
- `get_all_staff_not_in_record()`
- `get_setting_transfer_records()`
- `get_staff_tree()`
- `get_child_node_staff($id, $arr_dep)`
- `get_all_jp_interview_training()`
- `get_setting_asset_allocation()`
- `get_list_record_meta()`
- `add_setting_transfer_records($data_transfer_meta)`
- `add_setting_asset_allocation($data_asset_name)`
- `add_rec_transfer_records($data)`
- `group_checklist()`
- `get_setting_training()`
- `get_job_position($id = false)`
- `get_allowance_type($id = false)`
- `get_salary_form($id = false)`
- `get_procedure_retire($id = '')`
- `get_allowance_type_tax($id = false)`
- `add_contract_type($data)`
- `delete_contract_type($id)`
- `add_allowance_type($data)`
- `update_allowance_type($data, $id)`
- `update_contract_type($data, $id)`
- `delete_allowance_type($id)`
- `add_salary_form($data)`
- `update_salary_form($data, $id)`
- `delete_salary_form($id)`
- `add_procedure_form_manage($data)`
- `update_procedure_form_manage($data, $id)`
- `get_procedure_form_manage($id = '')`
- `delete_procedure_form_manage($id)`
- `check_department_on_procedure($departmentid)`
- `add_procedure_retire($data)`
- `delete_procedure_retire($id)`
- `get_edit_procedure_retire($id)`
- `edit_procedure_retire($data, $id)`
- `get_job_position_training_process($id = false)`
- `get_job_position_interview_process($id = false)`
- `add_position_training($data)`
- `update_position_training($data, $training_id)`
- `get_position_training($id = '')`
- `add_training_question($data)`
- `insert_training_question($training_id, $question = '')`
- `insert_question_type($type, $questionid)`
- `update_question($data)`
- `update_survey_questions_orders($data)`
- `remove_question($questionid)`
- `remove_box_description($questionboxdescriptionid)`
- `add_box_description($questionid, $boxid, $description = '')`
- `add_training_result($id, $result)`
- `get_training_question_box_id($questionid)`
- `update_answer_question($data)`
- `get_child_training_type($id)`
- `add_job_position_training_process($data)`
- `update_job_position_training_process($data, $id)`
- `get_jobposition_by_department($department_id = '', $status)`
- `get_jobposition_by_department($status, $department_id = '')`
- `get_job_p($id = false)`
- `add_job_p($data)`
- `update_job_p($data, $id)`
- `delete_job_p($id)`
- `add_job_position($data)`
- `update_job_position($data, $id)`
- `delete_job_position($id)`
- `get_list_job_position_tags_file($job_position_id)`
- `get_hrm_attachments_file($rel_id, $rel_type)`
- `get_department_from_job_p($job_p_id)`
- `check_child_in_job_p($id)`
- `get_array_job_position($id = false)`
- `get_job_position_tag($id = '')`
- `get_interview_process_byposition($id = false)`
- `get_traing_process_byposition($id = false)`
- `get_job_position_salary_scale($job_position_id)`
- `get_hr_profile_attachments_file($rel_id, $rel_type)`
- `get_department_from_position_department($arr_value, $position)`
- `get_position_by_department($department_id, $status)`
- `job_position_add_update_salary_scale($data)`
- `get_staff($id = '', $where = [])`
- `add_manage_info_reception($data)`
- `add_setting_training($data)`
- `checklist_by_group($group_id = '')`
- `count_max_checklist()`
- `get_staff_info_id($staffid)`
- `add_manage_info_reception_for_staff($id_staff, $data)`
- `add_asset_staff($id, $data)`
- `get_jp_interview_training($position_id, $training_type = '')`
- `add_training_staff($data_training, $id_staff)`
- `add_transfer_records_reception($data, $staffid)`
- `getPercent($total, $effect)`
- `get_group_checklist_allocation_by_staff_id($staffid)`
- `get_checklist_allocation_by_group_id($id_group)`
- `get_resultset_training($id, $training_process_id)`
- `get_allocation_asset($staff_id)`
- `get_result_training_staff($list_resultsetid)`
- `get_id_result_correct($question_id)`
- `get_point_training_question_form($id_question)`
- `delete_manage_info_reception($id)`
- `delete_setting_training($id)`
- `delete_setting_asset_allocation($id)`
- `delete_reception($id)`
- `get_department_by_staffid($id_staff)`
- `get_transfer_records_reception_staff($id)`
- `update_checklist($data)`
- `delete_tag_item($tag_id)`
- `add_new_asset_staff($id, $data)`
- `update_asset_staff($data)`
- `delete_allocation_asset($allocation_id)`
- `get_training_allocation_staff($id)`
- `get_staff_departments($userid = false, $onlyids = false)`
- `get_staff_permissions($id)`
- `get_job_position_arrayid()`
- `get_workplace_array_id()`
- `get_workplace($id = false)`
- `add_workplace($data)`
- `update_workplace($data, $id)`
- `delete_workplace($id)`
- `format_date($date)`
- `format_date_time($date)`
- `check_format_date_ymd($date)`
- `check_format_date($date)`
- `add_staff($data)`
- `update_staff($data, $id)`
- `getdepartment_name($staffid)`
- `get_child_node_staff_chart($id, $arr_dep)`
- `get_hr_profile_attachments($staffid)`
- `get_records_received($id)`
- `get_hr_profile_profile_file($staffid)`
- `get_duration()`
- `add_education($data)`
- `update_education($data)`
- `delete_education($id)`
- `member_get_evaluate_form($staffid)`
- `get_evaluate_form_status()`
- `get_dataobject_result_evaluate($id, $arrstaff = false)`
- `add_attachment_to_database($rel_id, $rel_type, $attachment, $external = false)`
- `get_file($id, $rel_id = false)`
- `delete_hr_profile_staff_attachment($attachment_id)`
- `get_hr_profile_attachments_delete($id)`
- `update_staff_permissions($data)`
- `update_permissions($permissions, $id)`
- `get_file_info($id, $rel_type)`
- `update_staff_profile($data)`
- `get_staff_in_deparment($department_id)`
- `get_staff_role($staff_id)`
- `delete_hr_profile_permission($id)`
- `get_data_dpm_chart($dpm)`
- `list_job_department($department)`
- `delete_hr_job_position_attachment_file($attachment_id)`
- `get_hr_profile_file($rel_id, $rel_type)`
- `get_job_position_training_de($id = false)`
- `delete_job_position_training_process($trainingid)`
- `delete_position_training($trainingid)`
- `get_list_position_training_by_id_training($training_id_aray)`
- `get_contract($id)`
- `get_contract_detail($id)`
- `add_contract($data)`
- `update_contract($data, $id)`
- `delete_contract($id)`
- `get_contracttype_by_id($id)`
- `get_staff_active()`
- `get_staff_active_has_contract()`
- `update_prefix_number($data)`
- `create_code($rel_type)`
- `check_department_format($departments)`
- `get_dependent_person($id = false)`
- `get_dependent_person_bytstaff($staffid)`
- `add_dependent_person($data)`
- `update_dependent_person($data, $id)`
- `delete_dependent_person($id)`
- `update_approval_dependent_person($data)`
- `update_approval_status($data)`
- `add_resignation_procedure($data)`
- `get_data_asset($staffid)`
- `add_data_of_staff_quit_work_by_id($rel_name, $people_handle_id = '')`
- `add_data_of_staff_quit_work($rel_id, $option_name, $staffid)`
- `get_resignation_procedure_by_staff($staff_id)`
- `delete_procedures_for_quitting_work($staffid)`
- `get_data_procedure_retire_of_staff($staffid)`
- `update_status_quit_work($staffid, $id)`
- `update_status_procedure_retire_of_staff($where = [])`
- `delete_hr_q_a_attachment_file($attachment_id)`
- `get_salary_allowance_handsontable()`
- `delete_hr_contract_attachment_file($attachment_id)`
- `get_salary_allowance_for_table($contract_id)`
- `send_mail_training($email, $sender_name, $subject, $body)`
- `get_board_mark_form($rel_id)`
- `report_by_leave_statistics()`
- `get_list_quiting_work($staffid = '')`
- `get_staff_by_month($from_month, $to_month)`
- `get_dstafflist_by_year($year, $month)`
- `get_staff_by_department_id_and_time($id_department, $from_time, $to_time)`
- `get_department_by_list_id($list_id = '')`
- `get_list_contract_detail_staff($staffid)`
- `get_list_staff_by_year($year)`
- `count_staff_by_department_literacy($department_ids = '')`
- `report_by_staffs_month($from_date, $to_date)`
- `report_new_staff_by_month($from_date, $to_date)`
- `report_staff_working_by_month($from_date, $to_date)`
- `report_staff_quit_work_by_month($from_date, $to_date)`
- `hr_get_training_question_form_by_relid($rel_id)`
- `hr_get_form_results_by_resultsetid($resultsetid, $questionid)`
- `delete_hr_article_attachment_file($attachment_id)`
- `get_type_of_training($id = false)`
- `add_type_of_training($data)`
- `update_type_of_training($data, $id)`
- `delete_type_of_training($id)`
- `get_list_training_program($position_id, $training_type)`
- `delete_tranining_result_by_staffid($staff_id, $training_id)`
- `get_additional_training($staff_id)`
- `get_mark_staff_from_resultsetid($resultsetid, $id, $staff_id)`
- `get_training_library()`
- `get_training_result_by_training_program($training_program_id)`
- `get_mark_staff_v2($trainingid, $resultsetid)`
- `get_staff_from_training_program($training_programs)`
- `get_department_by_manager()`
- `get_staff_by_manager()`
- `get_staff_in_teammanage($teammanage)`
- `get_staff_by_job_position($job_position_id)`
- `contract_clear_signature($id)`
- `hr_get_staff_contract_pdf($id = '', $where = [], $for_editor = false)`
- `hr_get_staff_contract_pdf_only_for_pdf($id = '', $where = [], $for_editor = false)`
- `get_contract_template($id = false)`
- `add_contract_template($data)`
- `update_contract_template($data, $id)`
- `delete_contract_template($id)`
- `hr_get_contract_template_by_staff($staffid)`
- `update_hr_staff_contract_content($id, $staffid)`
- `add_department($data)`
- `update_department($data, $id)`
- `delete_department($id)`
- `add_staff_into_department($departments, $staff_id)`
- `import_add_staff($data)`
- `import_update_staff($data, $id)`
- `hr_create_notification($event, $user_id, $options = array()`
- `get_type_of_training_has_training_program()`

