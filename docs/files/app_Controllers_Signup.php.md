# app\Controllers\Signup.php

- Path: `app\Controllers\Signup.php`
- Type: PHP
- Size: 18526 bytes

## References

**Models Used**
- `Verification_model`
- `Users_model`
- `Clients_model`
- `Email_templates_model`

**Database Tables (inferred)**
- `email`

## Symbols

# Symbols

**Files documented**: 1

## `app\Controllers\Signup.php`

**Classes**:
- `App\Controllers\Signup extends App_Controller`

**Functions/Methods**:
- `__construct()`
- `index()`
- `accept_invitation($signup_key = "")`
- `is_valid_recaptcha($recaptcha_post_data)`
- `create_account()`
- `send_verification_mail()`
- `continue_signup($key = "")`
- `is_valid_email_verification_key($verification_code = "")`
- `is_valid_invitation_key($verification_code = "")`

