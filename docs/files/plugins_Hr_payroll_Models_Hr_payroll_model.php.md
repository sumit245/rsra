# plugins\Hr_payroll\Models\Hr_payroll_model.php

- Path: `plugins\Hr_payroll\Models\Hr_payroll_model.php`
- Type: PHP
- Size: 199831 bytes

## Summary (from docblocks)

prefixed table fields wildcard
@param  [type] $table 
@param  [type] $alias 
@param  [type] $field 
@return [type]

hr payroll run query
@param  [type] $query_string 
@return [type]

count items
@return [type]

Function that will parse table data from the tables folder for amin area
@param  string $table  table filename
@param  array  $params additional params
@return void

check format date Y-m-d
@param  [type] $date 
@return boolean

get income tax rate
@param  boolean $id 
@return [type]

update income tax rates
@param  [type] $data 
@return [type]

get income tax rebates
@param  boolean $id 
@return [type]

update income tax rebates
@param  [type] $data 
@return [type]

get earnings list
@param  boolean $id 
@return [type]

update earnings list
@param  [type] $data 
@return [type]

get salary deductions list
@param  boolean $id 
@return [type]

update earnings list
@param  [type] $data 
@return [type]

get insurance list
@param  boolean $id 
@return [type]

update insurance list
@param  [type] $data 
@return [type]

get company contributions list
@param  boolean $id 
@return [type]

update company contributions list
@param  [type] $data 
@return [type]

update data integration
@param  [type] $data 
@return [type]

delete hr payroll permission
@param  [type] $id 
@return [type]

setting get attendance data
@return [type]

get timesheet type for setting
@param  [type] $data 
@return [type]

hr records get earnings list
@param  boolean $id 
@return [type]
get data: salary type, allowance type from HR records module when use feature "data integration" in settings menu.

hr records update earnings list
@param  [type] $data 
@return [type]

get hrp employees header
@param  [type] $rel_type 
@return [type]

get hrp employees value
@param  [type] $rel_type 
@return [type]

get employees data
@return [type]

get employees data
@param  [type] $month    
@param  [type] $rel_type 
@return [type]

employees data json encode decode
@param  [type] $type   
@param  [type] $data   
@param  [type] $header 
@return [type]

get format employees data
@param  [type] $rel_type 
@return [type]   
Description: Each staff will have a maximun 2 Contract: probationary, formal

FunctionNam
@param [type]  $prefix_str          
@param [type]  $number              
@param integer $number_of_characters

get list staff contract
@return [type]
get staff contract, detail by staff all, Each employee will take the last 2 contracts from the search month (if the employee has 2 contracts in 1 month) and status = valid

employees synchronization
@param  [type] $data 
@return [type]

employees update
@param  [type] $data 
@return [type]

get hrp attendance
@param  [type] $rel_type 
@return [type]

get day in month
@param  [type] $month 
@return [type]

add update attendance
@param [type] $data

synchronization attendance
@param  [type] $data 
@return [type]

hrp get timesheets data
@param  [type] $month 
@return [type]

timesheet get shifts
@param  [type] $month 
@return [type]

import attendance data
@param  [type] $data 
@return [type]

attendance calculation
@param  [type] $data 
@return [type]

import employees data
@param  [type] $es_detail 
@return [type]

get format deduction data
@return [type]

get deductions data
@param  [type] $month    
@param  [type] $rel_type 
@return [type]

deductions data json encode decode
@param  [type] $type   
@param  [type] $data   
@param  string $header 
@return [type]

deductions update
@param  [type] $data 
@return [type]

get format commission data
@return [type]

get commissions data
@param  [type]
@return [type]

commissions update
@param  [type]
@return [type]

import commissions data
@param  [type] $es_detail 
@return [type]

commissions synchronization
@param  [type] $data 
@return [type]

get list staff commissions
@param  [type] $month 
@return [type]

get income tax data
@param  [type] $month 
@return [type]

get total income tax in year
@param  [type] $month 
@return [type]

get format income tax data
@return [type]

get format insurances data
@return [type]

get insurances data
@param  [type] $month 
@return [type]

insurances data json encode decode
@param  [type] $type   
@param  [type] $data   
@param  string $header 
@return [type]

insurances update
@param  [type] $data 
@return [type]

get hrp payroll columns
@param  boolean $id 
@return [type]

get list payroll column method
@param  [type] $data 
@return [type]

get list payroll column function name
@param  [type] $data 
@return [type]

add payroll column
@param [type] $data

update insurance type
@param  array $data 
@param  integer $id   
@return boolean

delete insurance type
@param  integer $id 
@return boolean

count payroll column
@return [type]

get hrp payslip templates
@param  boolean $id 
@return [type]

get hrp payslip
@param  boolean $id 
@return [type]

get payslip template selected html
@param  [type] $payslip_template_id 
@return [type]

get payslip column html
@param  [type] $payslip_columns 
@return [type]

add payslip template
@param [type] $data

update payslip template
@param  [type] $data 
@param  [type] $id   
@return [type]

delete payslip template
@param  [type] $id 
@return [type]

delete payslip
@param  [type] $id 
@return [type]

delete_payslip_detail
@param  [type] $payslip_id 
@return [type]

update payslip templates detail
@param  [type] $data 
@param  [type] $id   
@return [type]

add payslip templates detail first
@param [type] $id

[general_cell_data description]
@param  [type] $cell_name [description]
@return [type]            [description]
     Cell data format
 {
      "m":"Hr_code",
      "ct":{"fa":"General","t":"g"},
      "v":"Hr_code"
  }

general cell data
@param  [type] $row   
@param  [type] $col   
@param  [type] $value 
@return [type]
{"r":2,"c":0,"v":{"m":"Hr_code","ct":{"fa":"General","t":"g"},"v":"Hr_code"}}

payslip template data fixed
@param  string $value 
@return [type]

update payslip templates detail first
@param  [type] $id 
@return [type]  
Update payslip template data when update column on Main management, ex: delete column

check update payslip template detail
@param  [type] $data 
@param  [type] $id   
@return [type]

get staff info
@param  [type] $staffid 
@return [type]

get staff departments
@param  boolean $userid  
@param  boolean $onlyids 
@return [type]

get all staff departments
@return [type]

get bonus
@param  [integer] $staffid 
@param  [] $month   
@return object

get bonus kpi
@param  [type] $month 
@return [type]

get staff timekeeping applicable object
@return [type]

add bonus kpi
@param [type] $data array

getStaff
@param  string $id    
@param  array  $where 
@return [type]

get department by list id
@param  string $list_id 
@return [type]

payslip template get staffid
@param  [type] $departemnt_ids 
@param  [type] $role_ids       
@param  [type] $staff_ids      
@return [type]

add payslip
@param [type] $data

add payslip file
@param [type] $data

update payslip
@param  [type] $data 
@param  [type] $id   
@return [type]

payslip_close
@param  [type] $data  
@param  [type] $month 
@return [type]

update payslip status
@param  [type] $id     
@param  [type] $status 
@return [type]

render personal income tax
@param  [type] $PARAMETERS 
@return [type]

get payslip detail
@param  [type] $id 
@return [type]

get income summary report
@param  [type] $sql_where 
@return [type]

get insurance summary report
@param  string $sql_where 
@return [type]

get staff in deparment
@param  [type] $department_id 
@return [type]

payslip chart
@return [type]

render income tax formular
@param  [type] $taxable_salary 
@return [type]

get department payslip chart
@param  string $month 
@return [type]

array cell data
@param  [type] $payroll_templates 
@return [type]

payslip template checked
@param  [type] $data 
@return [type]

payslip checked
@param  [type] $data 
@return [type]

payslip download
@param  [type] $data 
@return [type]

employees copy
@param  [type] $data 
@return [type]

get tasks timer by_month
@param  [type] $month 
@return [type]

payslip of staff
@param  [type] $payslip_id 
@return [type]

remove employees not under management on payslip
@param  [type] $payslip_data 
@return [type]

employee export pdf
@param  [type] $export_employee 
@return [type]

get payslip detail by payslip_id
@param  [type] $payslip_id 
@return [type]

getdepartment name
@param  [type] $staffid 
@return [type]

## References

**Models Used**
- `staff_model`

**Database Tables (inferred)**
- `the`
- `HR`
- `setting`
- `staff`
- `system`
- `row`
- `job`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\Hr_payroll\Models\Hr_payroll_model.php`

**Classes**:
- `Hr_payroll\Models\Hr_payroll_model extends Crud_model`

**Functions/Methods**:
- `__construct()`
- `prefixed_table_fields_wildcard($table, $alias, $field)`
- `hr_payroll_run_query($query_string)`
- `count_all_items($where = '')`
- `get_table_data($table, $dataPost, $params = [])`
- `check_format_date($date)`
- `get_income_tax_rate($id = false)`
- `update_income_tax_rates($data)`
- `get_income_tax_rebates($id = false)`
- `update_income_tax_rebates($data)`
- `get_earnings_list($id = false)`
- `update_earnings_list($data)`
- `get_salary_deductions_list($id = false)`
- `update_salary_deductions_list($data)`
- `get_insurance_list($id = false)`
- `update_insurance_list($data)`
- `get_company_contributions_list($id = false)`
- `update_company_contributions_list($data)`
- `update_data_integration($data)`
- `delete_hr_payroll_permission($id)`
- `setting_get_attendance_type()`
- `get_timesheet_type_for_setting($data)`
- `hr_records_get_earnings_list($id = false)`
- `earnings_list_synchronization($data)`
- `get_hrp_employees_header($rel_type)`
- `get_hrp_employees_value($rel_type)`
- `get_employees_data1()`
- `get_employees_data($month, $rel_type ='', $where='')`
- `employees_data_json_encode_decode($type, $data, $header ='')`
- `get_format_employees_data($rel_type)`
- `hrp_format_code($prefix_str, $number, $number_of_characters = 5)`
- `get_list_staff_contract($month)`
- `employees_synchronization($data)`
- `employees_update($data)`
- `get_hrp_attendance($month, $where='')`
- `get_day_header_in_month($month, $rel_type='')`
- `add_update_attendance($data)`
- `synchronization_attendance($data)`
- `hrp_get_timesheets_data($month, $rel_type)`
- `timesheet_get_shifts($month)`
- `import_attendance_data($es_detail)`
- `attendance_calculation($data)`
- `import_employees_data($es_detail)`
- `get_format_deduction_data()`
- `get_deductions_data($month, $where ='')`
- `deductions_data_json_encode_decode($type, $data, $header ='')`
- `deductions_update($data)`
- `get_format_commission_data()`
- `get_commissions_data($month, $where ='')`
- `commissions_update($data)`
- `import_commissions_data($es_detail)`
- `commissions_synchronization($data)`
- `get_list_staff_commissions($month)`
- `get_income_tax_data($month)`
- `get_total_income_tax_in_year($month)`
- `get_format_income_tax_data()`
- `get_format_insurance_data()`
- `get_insurances_data($month, $where ='')`
- `insurances_data_json_encode_decode($type, $data, $header ='')`
- `insurances_update($data)`
- `get_hrp_payroll_columns($id = false)`
- `get_list_payroll_column_method($data)`
- `get_list_payroll_column_function_name($data)`
- `add_payroll_column($data)`
- `update_payroll_column($data, $id)`
- `delete_payroll_column($id)`
- `count_payroll_column()`
- `get_hrp_payslip_templates($id = false)`
- `get_hrp_payslip($id = false)`
- `get_payslip_template_selected_html($payslip_template_id)`
- `get_payslip_column_html($payslip_columns)`
- `add_payslip_template($data)`
- `update_payslip_template($data, $id)`
- `delete_payslip_template($id)`
- `delete_payslip($id)`
- `delete_payslip_detail($payslip_id)`
- `update_payslip_templates_detail($data, $id)`
- `add_payslip_templates_detail_first($id, $update= false, $old_column_formular=[])`
- `general_template_cell_data($cell_name)`
- `general_cell_data($row, $col, $value, $t, $f, $luckysheet_header_format, $luckysheet_row_format, $luckysheet_company_format='false', $number_format ='')`
- `payslip_template_data_fixed($visible_row =[], $visible_column = [], $columnlen =[], $rowlen=[])`
- `update_payslip_templates_detail_first($old_column_formular, $id)`
- `check_update_payslip_template_detail($data, $id)`
- `get_staff_info($staffid)`
- `get_staff_departments($userid = false, $onlyids = false)`
- `get_all_staff_departments()`
- `get_bonus_by_month($staffid, $month)`
- `get_bonus_kpi($month, $where='')`
- `get_staff_timekeeping_applicable_object($where = [])`
- `add_bonus_kpi($data)`
- `getStaff($id = '', $where = [])`
- `get_department_by_list_id($list_id = '')`
- `payslip_template_get_staffid($department_ids, $role_ids, $staff_ids, $except_staff='')`
- `add_payslip($data)`
- `add_payslip_file($insert_id, $data, $payslip_name)`
- `update_payslip($data, $id)`
- `payslip_close($data)`
- `update_payslip_status($id, $status)`
- `render_personal_income_tax($PARAMETERS)`
- `get_payslip_detail($id = false)`
- `get_income_summary_report($sql_where='')`
- `get_insurance_summary_report($sql_where='')`
- `get_staff_in_deparment($department_id)`
- `payslip_chart($filter_by_year = '', $staff_id='')`
- `render_income_tax_formular($taxable_salary)`
- `get_department_payslip_chart($from_date, $to_date)`
- `array_cell_data($payroll_templates)`
- `payslip_template_checked($data)`
- `payslip_checked($payslip_month, $payslip_template_id, $closing= false)`
- `payslip_download($data)`
- `employees_copy($data)`
- `get_tasks_timer_by_month($month, $staff_id, $str_id_sql1, $hr_profile_status, $str_user_id_sql1)`
- `payslip_of_staff($payslip_id)`
- `remove_employees_not_under_management_on_payslip($payslip_data)`
- `employee_export_pdf($export_employee)`
- `get_payslip_detail_by_payslip_id($payslip_id)`
- `getdepartment_name($staffid)`

