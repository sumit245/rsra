# app\Helpers\app_files_helper.php

- Path: `app\Helpers\app_files_helper.php`
- Type: PHP
- Size: 27777 bytes

## Summary (from docblocks)

get a human readable file size format from bytes 

@param string $bytes
@return fise size

get some predefined icons for some known file types 

@param string $file_ext
@return fontawesome icon class

check the file is a image

@param string $file_name
@return true/false

check the file preview supported by google

@param string $file_name
@return true/false

check the file format priview is available or not

@param string $file_name
@return true/false

check the file format for video priview is available or not

@param string $file_name
@return true/false

upload a file to temp folder when using dropzone autoque=true

@param file $_FILES
@return void

this method process 3 types of files
1. direct upload
2. move a uploaded file which has been uploaded in temp folder
3. copy a text based image

@param string $file_name
@param string $target_path
@param string $source_path 
@param string $static_file_name 
@return filename

Get drive folder name
@param string $target_path
@return string folder name

Get source url of file

@param string $file_path
@param array $file_info
@return source url of file

Get google drive files source url
@param string $file_id
@return source url

Convert to a file from text based image

@param string $source_path 
@param string $target_path
@return file size

remove file name prefix which was added by move_temp_file() method

@param string $file_name
@return filename

copy a directory to another directoryformat_to_datetime

@param string $src
@param string $dst
@return void

move file to a parmanent direnctory from the temp dirctory

dropzone file post data example
the input should be named as file_names and file_sizes

for old borwsers which doesn't supports dropzone the files will be handaled using manual process
the post data should be named as manualFiles

@param string $target_path
@param string $name

@return array of file ids

check post file is valid or not

@param string $file_name
@return json data of success or error message

check the file type is valid for upload

@param string $file_name
@return true/false

delete file 
@param String file_path
@return void

delete files
@param String $directory_path
@param Array $files

Make array of file
@param $file_info stdClass object
@return array of file

Get system files setting value
@param string $setting_name
@return array/string setting value

get file path

@param string $file_path
@param string $serialized_file_data 
@return array

delete save files/ include new files

@param string $file_path
@param string $serialized_file_data 
@return remaining files array

return a file path of general files based on context

@param string $context   client/team_member/...
@param integer $context_id   client_id/team_member_id/...
@return string of file path

return a list of language by scanning the files from language directory.
@return array

check the file is pdf or text

@param string $file_name
@return true/false

## References

**Database Tables (inferred)**
- `bytes`
- `the`
- `text`
- `directory`
- `language`

## Symbols

# Symbols

**Files documented**: 1

## `app\Helpers\app_files_helper.php`

**Functions/Methods**:
- `convert_file_size($bytes)`
- `get_file_icon($file_ext = "")`
- `is_image_file($file_name = "")`
- `is_google_preview_available($file_name = "")`
- `is_viewable_image_file($file_name = "")`
- `is_viewable_video_file($file_name = "")`
- `upload_file_to_temp($upload_to_local = false)`
- `move_temp_file($file_name, $target_path, $related_to = "", $source_path = NULL, $static_file_name = "", $file_content = "")`
- `get_drive_folder_name($target_path = "")`
- `get_source_url_of_file($file_info = array()`
- `get_source_url_of_google_drive_file($file_id = "", $view_type = "", $show_full_size_thumbnail = false)`
- `copy_text_based_image($source_path, $target_path)`
- `remove_file_prefix($file_name = "")`
- `copy_recursively($src, $dst)`
- `move_files_from_temp_dir_to_permanent_dir($target_path = "", $related_to = "")`
- `validate_post_file($file_name = "")`
- `is_valid_file_to_upload($file_name = "")`
- `delete_file_from_directory($file_path = "")`
- `delete_app_files($directory_path = "", $files = array()`
- `make_array_of_file($file_info)`
- `get_system_files_setting_value($setting_name = "")`
- `prepare_attachment_of_files($directory_path, $serialized_file_data)`
- `update_saved_files($file_path, $serialized_file_data, $new_files_array)`
- `get_general_file_path($context, $context_id)`
- `get_language_list($type = "")`
- `update_file_indexes($old_files = "", $new_files_array = array()`
- `get_store_item_image($files)`
- `is_iframe_preview_available($file_name = "")`

