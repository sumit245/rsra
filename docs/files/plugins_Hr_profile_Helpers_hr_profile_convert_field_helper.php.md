# plugins\Hr_profile\Helpers\hr_profile_convert_field_helper.php

- Path: `plugins\Hr_profile\Helpers\hr_profile_convert_field_helper.php`
- Type: PHP
- Size: 18165 bytes

## Summary (from docblocks)

Function that renders input for admin area based on passed arguments
@param  string $name             input name
@param  string $label            label name
@param  string $value            default value
@param  string $type             input type eq text,number
@param  array  $input_attrs      attributes on <input
@param  array  $form_group_attr  <div class="form-group"> html attributes
@param  string $form_group_class additional form group class
@param  string $input_class      additional class on input
@return string

String ends with
@param  string $haystack
@param  string $needle
@return boolean

String ends with
@param  string $haystack
@param  string $needle
@return boolean

_l
@param  string $lang 
@return [type]

db prefix
@return [type]

Function that will check the date before formatting and replace the date places
This function is custom developed because for some date formats converting to y-m-d format is not possible
@param  string $date        the date to check
@param  string $from_format from format
@return string

Generate md5 hash
@return string

## References

**Database Tables (inferred)**
- `default`
- `format`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\Hr_profile\Helpers\hr_profile_convert_field_helper.php`

**Classes**:
- `on`

**Functions/Methods**:
- `render_input1($name, $label = '', $value = '', $type = 'text', array $input_attrs = [], array $form_group_attr = [], $form_group_class = '', $input_class = '', $data_required = false, $data_required_msg = '', $placeholder = false)`
- `render_textarea1($name, $label = '', $value = '', $textarea_attrs = [], $form_group_attr = [], $form_group_class = '', $textarea_class = '', $placeholder = false)`
- `render_select1($name, $options, $option_attrs = [], $label = '', $selected = '', $select_attrs = [], $form_group_attr = [], $form_group_class = '', $select_class = '', $include_blank = true, $data_required = false, $data_required_msg = '')`
- `render_color_picker1($name, $label = '', $value = '', $input_attrs = [])`
- `render_date_input1($name, $label = '', $value = '', array $input_attrs = [], array $form_group_attr = [], $form_group_class = '', $input_class = '', $data_required = false, $data_required_msg = '', $placeholder = false)`
- `get_tax_by_name($name)`
- `valueExistsByKey($array, $key, $val)`
- `get_current_date_format1($php = false)`
- `to_sql_date1($date, $datetime = false)`
- `module_views_path($module, $concat = '')`
- `module_dir_path($module, $concat = '')`
- `endsWith($haystack, $needle)`
- `escape_str($str, $like = FALSE)`
- `startsWith1($haystack, $needle)`
- `strbefore1($string, $substring)`
- `strafter($string, $substring)`
- `_escape_str($str)`
- `_l($lang = "")`
- `db_prefix()`
- `is_admin($staffid = '')`
- `get_staff_user_id1()`
- `get_staff_full_name1($userid = '')`
- `_simplify_date_fix($date, $from_format)`
- `get_staff_infor($userid = '')`
- `app_generate_hash()`

