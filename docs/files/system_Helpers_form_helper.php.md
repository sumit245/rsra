# system\Helpers\form_helper.php

- Path: `system\Helpers\form_helper.php`
- Type: PHP
- Size: 21599 bytes

## Summary (from docblocks)

This file is part of CodeIgniter 4 framework.
(c) CodeIgniter Foundation <admin@codeigniter.com>
For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

Form Declaration
Creates the opening portion of the form.
@param string       $action     the URI segments of the form destination
@param array|string $attributes a key/value pair of attributes, or string representation
@param array        $hidden     a key/value pair hidden data

Form Declaration - Multipart type
Creates the opening portion of the form, but with "multipart/form-data".
@param string       $action     The URI segments of the form destination
@param array|string $attributes A key/value pair of attributes, or the same as a string
@param array        $hidden     A key/value pair hidden data

Hidden Input Field
Generates hidden fields. You can pass a simple key/value string or
an associative array with multiple values.
@param array|string $name  Field name or associative array to create multiple fields
@param array|string $value Field value

Text Input Field. If 'type' is passed in the $type field, it will be
used as the input type, for making 'email', 'phone', etc input fields.
@param mixed $data
@param mixed $extra

Password Field
Identical to the input function but adds the "password" type
@param mixed $data
@param mixed $extra

Upload Field
Identical to the input function but adds the "file" type
@param mixed $data
@param mixed $extra

Textarea field
@param mixed $data
@param mixed $extra

Multi-select menu
@param mixed $name
@param mixed $extra

Drop-down Menu
@param mixed $data
@param mixed $options
@param mixed $selected
@param mixed $extra

Checkbox Field
@param mixed $data
@param mixed $extra

Radio Button
@param mixed $data
@param mixed $extra

Submit Button
@param mixed $data
@param mixed $extra

Reset Button
@param mixed $data
@param mixed $extra

Form Button
@param mixed $data
@param mixed $extra

Form Label Tag
@param string $labelText  The text to appear onscreen
@param string $id         The id the label applies to
@param array  $attributes Additional attributes

Datalist
The <datalist> element specifies a list of pre-defined options for an <input> element.
Users will see a drop-down list of pre-defined options as they input data.
The list attribute of the <input> element, must refer to the id attribute of the <datalist> element.

Fieldset Tag
Used to produce <fieldset><legend>text</legend>.  To close fieldset
use form_fieldset_close()
@param string $legendText The legend text
@param array  $attributes Additional attributes

Fieldset Close Tag

Form Close Tag

Form Value
Grabs a value from the POST array for the specified field so you can
re-populate an input field or textarea
@param string          $field      Field name
@param string|string[] $default    Default value
@param bool            $htmlEscape Whether to escape HTML special characters or not
@return string|string[]

Set Select
Let's you set the selected value of a <select> menu via data in the POST array.

Set Checkbox
Let's you set the selected value of a checkbox via the value in the POST array.

Set Radio
Let's you set the selected value of a radio field via info in the POST array.

Parse the form attributes
Helper function used by some of the form helpers
@param array|string $attributes List of attributes
@param array        $default    Default values

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `system\Helpers\form_helper.php`

**Functions/Methods**:
- `form_open(string $action = '', $attributes = [], array $hidden = [])`
- `form_open_multipart(string $action = '', $attributes = [], array $hidden = [])`
- `form_hidden($name, $value = '', bool $recursing = false)`
- `form_input($data = '', string $value = '', $extra = '', string $type = 'text')`
- `form_password($data = '', string $value = '', $extra = '')`
- `form_upload($data = '', string $value = '', $extra = '')`
- `form_textarea($data = '', string $value = '', $extra = '')`
- `form_multiselect($name = '', array $options = [], array $selected = [], $extra = '')`
- `form_dropdown($data = '', $options = [], $selected = [], $extra = '')`
- `form_checkbox($data = '', string $value = '', bool $checked = false, $extra = '')`
- `form_radio($data = '', string $value = '', bool $checked = false, $extra = '')`
- `form_submit($data = '', string $value = '', $extra = '')`
- `form_reset($data = '', string $value = '', $extra = '')`
- `form_button($data = '', string $content = '', $extra = '')`
- `form_label(string $labelText = '', string $id = '', array $attributes = [])`
- `form_datalist(string $name, string $value, array $options)`
- `form_fieldset(string $legendText = '', array $attributes = [])`
- `form_fieldset_close(string $extra = '')`
- `form_close(string $extra = '')`
- `set_value(string $field, $default = '', bool $htmlEscape = true)`
- `set_select(string $field, string $value = '', bool $default = false)`
- `set_checkbox(string $field, string $value = '', bool $default = false)`
- `set_radio(string $field, string $value = '', bool $default = false)`
- `parse_form_attributes($attributes, array $default)`

