# plugins\Hr_payroll\Controllers\Hr_payroll.php

- Path: `plugins\Hr_payroll\Controllers\Hr_payroll.php`
- Type: PHP
- Size: 173142 bytes

## Summary (from docblocks)

income tax rates
@return [type]

setting incometax rates
@return [type]

income_tax_rebates
@return [type]

setting incometax rebates
@return [type]

earnings list
@return [type]

setting earnings list
@return [type]

salary deductions list
@return [type]

setting salary deductions list
@return [type]

insurance list
@return [type]

setting insurance list
@return [type]

setting company contributions list
@return [type]

data integrations
@return [type]

data integration
@return [type]

timesheet integration type change
@return [type]

hr records earnings list
@return [type]

setting earnings list hr records
@return [type]

hr payroll permission table
@return [type]

permission modal
@return [type]

hr payroll update permissions
@param  string $id
@return [type]

staff id changed
@param  [type] $staff_id
@return [type]

delete hr payroll permission
@param  [type] $id
@return [type]

manage employees
@return [type]

employees filter
@return [type]

add manage employees

render filter query
@param  [type] $data_month
@param  [type] $data_staff
@param  [type] $data_department
@param  [type] $data_role_attendance
@return [type]

manage attendance
@return [type]

add attendance

import xlsx employees
@return [type]

create employees sample file
@return [type]

import employees excel
@return [type]

attendance filter
@return [type]

import xlsx attendance
@return [type]

create attendance sample file
@return [type]

get values for keys
@param  [type] $mapping
@param  [type] $keys
@return [type]

import attendance excel
@return [type]

attendance calculation
@return [type]

manage deductions
@return [type]

add manage deductions

deductions filter
@return [type]

manage commissions
@return [type]

add manage commissions

commissions filter
@return [type]

[import_xlsx_commissions
@return [type]

create commissions sample file
@return [type]

import commissions excel
@return [type]

manage income taxs
@return [type]

income taxs filter
@return [type]

manage insurances
@return [type]

add manage insurances

insurances filter
@return [type]

delete_error file day before
@return [type]

payslip manage
@param  string $id
@return [type]

payslip table
@return table

delete payslip
@param  [type] $id
@return [type]

payslip manage
@param  string $id
@return [type]

payslip table
@return table

payroll columns
@return [type]

get column key html add
@return [type]

get payroll column function name html
@return [type]

payroll column
@return [type]

get payroll column
@param  [type] $id
@return [type]

delete payroll column setting
@param  string $id
@return [type]

get payslip template
@param  string $id
@return [type]

payslip template
@return [type]

delete payslip template
@param  [type] $id
@return [type]

view payslip templates detail, add or edit
@param [type] $parent_id
@param string $id

hrp rander
@param  [type] $view 
@param  array  $data 
@return [type]

hrp view
@param  [type] $view 
@param  array  $data 
@return [type]

view payslip
@param  string $id
@return [type]

view payslip detail v2
@param  string $id
@return [type]

manage bonus
@return [type]

add bonus kpi
@return redirect

bonus kpi filter
@return array

payslip
@param  string $value
@return [type]

payslip closing
@return [type]

payslip update status
@param  [type] $id
@return [type]

table staff payslip
@return [type]

view staff payslip modal
@return [type]

reports
@return [type]

payslip report
@return [type]

income summary report
@return [type]

insurance cost summary report
@return [type]

payslip chart
@return [type]

department payslip chart
@return [type]

payslip template checked
@return [type]

payslip checked
@return [type]

create payslip file
@return [type]

employees copy
@return [type]

reset datas
@return [type]

reset data
@return [type]

employee export pdf
@param  [type] $id 
@return [type]

payslip manage export pdf
@param  [type] $id 
@return [type]

re save to dir
@param  [type] $pdf       
@param  [type] $file_name 
@return [type]

confirm delete modal form
@return [type]

table payslip report
@return [type]

table income summary report
@return [type]

table insurance cost summary report
@return [type]

staff pay slips
@param  [type] $user_id 
@return [type]

staff payslip modal form
@return [type]

## References

**Models Used**
- `hr_payroll_model`
- `staff_model`
- `roles_model`
- `Team_model`
- `Roles_model`
- `Users_model`
- `departments_model`

**Database Tables (inferred)**
- `database`
- `hrm_allowance_commodity_fill`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\Hr_payroll\Controllers\Hr_payroll.php`

**Classes**:
- `Hr_payroll\Controllers\Hr_payroll extends Security_Controller`

**Functions/Methods**:
- `__construct()`
- `income_tax_rates()`
- `setting_incometax_rates()`
- `income_tax_rebates()`
- `setting_incometax_rebates()`
- `earnings_list()`
- `setting_earnings_list()`
- `salary_deductions_list()`
- `setting_salary_deductions_list()`
- `insurance_list()`
- `setting_insurance_list()`
- `setting_company_contributions_list()`
- `data_integrations()`
- `data_integration()`
- `timesheet_integration_type_change()`
- `hr_records_earnings_list()`
- `setting_earnings_list_hr_records()`
- `hr_payroll_permission_table()`
- `permission_modal()`
- `hr_payroll_update_permissions($id = '')`
- `staff_id_changed($staff_id)`
- `delete_hr_payroll_permission($id)`
- `manage_employees()`
- `employees_filter()`
- `add_manage_employees()`
- `render_filter_query($data_month, $data_staff, $data_department, $data_role_attendance)`
- `manage_attendance()`
- `add_attendance()`
- `import_xlsx_employees()`
- `create_employees_sample_file()`
- `import_employees_excel()`
- `attendance_filter()`
- `import_xlsx_attendance()`
- `create_attendance_sample_file()`
- `get_values_for_keys($mapping, $keys)`
- `import_attendance_excel()`
- `attendance_calculation()`
- `manage_deductions()`
- `add_manage_deductions()`
- `deductions_filter()`
- `manage_commissions()`
- `add_manage_commissions()`
- `commissions_filter()`
- `import_xlsx_commissions()`
- `create_commissions_sample_file()`
- `import_commissions_excel()`
- `income_taxs_manage()`
- `income_taxs_filter()`
- `manage_insurances()`
- `add_manage_insurances()`
- `insurances_filter()`
- `delete_error_file_day_before($before_day = '', $folder_name = '')`
- `payslip_manage($id = '')`
- `payslip_table()`
- `delete_payslip()`
- `payslip_templates_manage($id = '')`
- `payslip_template_table()`
- `payroll_columns()`
- `get_payroll_column_method_html_add()`
- `get_payroll_column_function_name_html()`
- `payroll_column()`
- `get_payroll_column($id)`
- `delete_payroll_column_setting()`
- `get_payslip_template($id = '')`
- `payslip_template()`
- `delete_payslip_template()`
- `view_payslip_templates_detail($id = "")`
- `hrp_rander($view, $data = array()`
- `hrp_view($view, $data = array()`
- `view_payslip_detail($id = "")`
- `view_payslip_detail_v2($id = "")`
- `manage_bonus()`
- `add_bonus_kpi()`
- `bonus_kpi_filter()`
- `payslip($value = '')`
- `payslip_closing()`
- `payslip_update_status($id)`
- `table_staff_payslip()`
- `view_staff_payslip_modal()`
- `reports()`
- `payslip_report()`
- `income_summary_report()`
- `insurance_cost_summary_report()`
- `payslip_chart()`
- `department_payslip_chart()`
- `payslip_template_checked()`
- `payslip_checked()`
- `create_payslip_file()`
- `employees_copy()`
- `reset_datas()`
- `reset_data()`
- `employee_export_pdf($id)`
- `payslip_manage_export_pdf($id)`
- `re_save_to_dir($pdf, $file_name)`
- `confirm_delete_modal_form()`
- `table_payslip_report()`
- `table_income_summary_report()`
- `table_insurance_cost_summary_report()`
- `staff_pay_slips($user_id)`
- `staff_payslip_modal_form()`

