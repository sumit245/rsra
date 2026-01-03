# app\Controllers\Signin.php

- Path: `app\Controllers\Signin.php`
- Type: PHP
- Size: 9853 bytes

## References

**Models Used**
- `Users_model`
- `Email_templates_model`
- `Verification_model`

**Database Tables (inferred)**
- `his`

## Symbols

# Symbols

**Files documented**: 1

## `app\Controllers\Signin.php`

**Classes**:
- `App\Controllers\Signin extends App_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `has_recaptcha_error()`
- `is_valid_recaptcha($recaptcha_post_data)`
- `authenticate()`
- `sign_out()`
- `send_reset_password_mail()`
- `request_reset_password()`
- `new_password($key)`
- `do_reset_password()`
- `is_valid_reset_password_key($verification_code = "")`

