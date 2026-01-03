# plugins\Purchase\Helpers\purchase_convert_field_helper.php

- Path: `plugins\Purchase\Helpers\purchase_convert_field_helper.php`
- Type: PHP
- Size: 32828 bytes

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

{ render textarea1 }
@param      string  $name              The name
@param      string  $label             The label
@param      string  $value             The value
@param      array   $textarea_attrs    The textarea attributes
@param      array   $form_group_attr   The form group attribute
@param      string  $form_group_class  The form group class
@param      string  $textarea_class    The textarea class
@param      bool    $placeholder       The placeholder
@return     string  (  )

{ render select  }
@param      string  $name               The name
@param      <type>  $options            The options
@param      array   $option_attrs       The option attributes
@param      string  $label              The label
@param      string  $selected           The selected
@param      array   $select_attrs       The select attributes
@param      array   $form_group_attr    The form group attribute
@param      string  $form_group_class   The form group class
@param      string  $select_class       The select class
@param      bool    $include_blank      The include blank
@param      bool    $data_required      The data required
@param      string  $data_required_msg  The data required message
@return     string

{ render color picker1 }
@param      string  $name         The name
@param      string  $label        The label
@param      string  $value        The value
@param      array   $input_attrs  The input attributes
@return     string

{ render_date_input }
@param      string  $name               The name
@param      string  $label              The label
@param      string  $value              The value
@param      array   $input_attrs        The input attributes
@param      array   $form_group_attr    The form group attribute
@param      string  $form_group_class   The form group class
@param      string  $input_class        The input class
@param      bool    $data_required      The data required
@param      string  $data_required_msg  The data required message
@param      bool    $placeholder        The placeholder
@return     string  ( description_of_the_return_value )

Gets the tax by name.
@param        $name   The name
@return       The tax by name.

{ valueExistsByKey }
@param      array   $array  The array
@param        $key    The key
@param        $val    The value
@return     bool    ( description_of_the_return_value )

Gets the current date format 1.
@param      bool    $php    The php
@return       The current date format 1.

{ to sql date }
@param      string  $date      The date
@param      bool    $datetime  The datetime
@return       date formated

{ function_description }
@param        $module  The module
@param        $concat  The concatenate
@return       ( description_of_the_return_value )

{ module dir path }

{ module dir path  }
@param      string  $module  The module
@param      string  $concat  The concatenate
@return     string  ( description_of_the_return_value )

String ends with
@param  string $haystack
@param  string $needle
@return boolean

String ends with
@param  string $haystack
@param  string $needle
@return boolean

{ strbefore1 }
@param        $string     The string
@param       $substring  The substring
@return       ( description_of_the_return_value )

{ strafter }
@param        $string     The string
@param        $substring  The substring
@return     string

{ _escape_str }
@param        $str    The string
@return

_l
@param  string $lang
@return [type]

db prefix
@return [type]

{ db prefix }
@return       prefix

Determines whether the specified staffid is admin.
@param      string  $staffid  The staffid
@return     bool    True if the specified staffid is admin, False otherwise.

Count total rows on table based on params
@param  string $table Table from where to count
@param  array  $where
@return mixed  Total rows

{ ajax_on_total_items }
@return     int

Gets the staff user identifier.
@return       The staff user identifier.

Function that will check the date before formatting and replace the date places
This function is custom developed because for some date formats converting to y-m-d format is not possible
@param  string $date        the date to check
@param  string $from_format from format
@return string

Generate md5 hash
@return string

{ update setting }
@param      <type>  $name   The name
@param      string  $value  The value
@return     bool

Gets the staff full name 1.
@param      string  $userid  The userid
@return     bool    The staff full name 1.

Gets the staff user identifier 1.
@return       The staff user identifier 1.

Get Mime by Extension
Translates a file extension into a mime type based on config/mimes.php.
Returns FALSE if it can't determine the type, or open the mime config file
Note: this is NOT an accurate way of determining file mime types, and is here strictly as a convenience
It should NOT be trusted, and should certainly NOT be used for security
@param string $filename File name
@return string

{ _maybe_create_upload_path }
@param       $path   The path

Get mime class by mime - admin system function
@param  string $mime file mime type
@return string

Used in to eq preview images where the files are protected with .htaccess
@param  string  $path    full path
@param  boolean $preview
@return string

Parse markdown preview
@param  string $path full markdown file path
@return mixed

Is file image
@param  string  $path file path
@return boolean

List files in a specific folder
@param  string $dir directory to list files
@return array

Delete directory
@param  string $dirPath dir
@return boolean

Used in:
Search contact tickets
Project dropdown quick switch
Calendar tooltips
@param  [type] $userid [description]
@return [type]         [description]

{ format date }
@param       $date   The date
@return     date

## References

**Database Tables (inferred)**
- `default`
- `where`
- `format`

## Symbols

# Symbols

**Files documented**: 1

## `plugins\Purchase\Helpers\purchase_convert_field_helper.php`

**Classes**:
- `on`
- `by`

**Functions/Methods**:
- `render_input($name, $label = '', $value = '', $type = 'text', array $input_attrs = [], array $form_group_attr = [], $form_group_class = '', $input_class = '', $data_required = false, $data_required_msg = '', $placeholder = false)`
- `render_textarea1($name, $label = '', $value = '', $textarea_attrs = [], $form_group_attr = [], $form_group_class = '', $textarea_class = '', $placeholder = false)`
- `render_select1($name, $options, $option_attrs = [], $label = '', $selected = '', $select_attrs = [], $form_group_attr = [], $form_group_class = '', $select_class = '', $include_blank = true, $data_required = false, $data_required_msg = '')`
- `render_color_picker1($name, $label = '', $value = '', $input_attrs = [])`
- `render_date_input($name, $label = '', $value = '', array $input_attrs = [], array $form_group_attr = [], $form_group_class = '', $input_class = '', $data_required = false, $data_required_msg = '', $placeholder = false)`
- `get_tax_by_name($name)`
- `valueExistsByKey($array, $key, $val)`
- `get_current_date_format1($php = false)`
- `to_sql_date1($date, $datetime = false)`
- `module_views_path($module, $concat = '')`
- `module_dir_path($module, $concat = '')`
- `endsWith($haystack, $needle)`
- `escape_str($str, $like = false)`
- `startsWith1($haystack, $needle)`
- `strbefore1($string, $substring)`
- `strafter($string, $substring)`
- `_escape_str($str)`
- `_l($lang = "")`
- `db_prefix()`
- `is_admin($staffid = '')`
- `get_status_modules_pur($module_name)`
- `total_rows($table, $where = [])`
- `ajax_on_total_items()`
- `get_staff_user_id()`
- `_simplify_date_fix($date, $from_format)`
- `app_generate_hash()`
- `update_setting($name, $value = '')`
- `get_staff_full_name($userid = '')`
- `get_staff_user_id1()`
- `get_mime_by_extension($filename)`
- `_maybe_create_upload_path($path)`
- `get_mime_class($mime)`
- `protected_file_url_by_path($path, $preview = false)`
- `markdown_parse_preview($path)`
- `is_image($path)`
- `list_files($dir)`
- `delete_dir($dirPath)`
- `get_company_name($userid, $prevent_empty_company = false)`
- `_d($date)`

