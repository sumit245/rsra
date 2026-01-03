# app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Helper\MessageHelperService.php

- Path: `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Helper\MessageHelperService.php`
- Type: PHP
- Size: 3133 bytes

## Summary (from docblocks)

This file is part of the ZBateson\MailMimeParser project.
@license http://opensource.org/licenses/bsd-license.php BSD

Responsible for creating helper singletons.
@author Zaahid Bateson

@var PartBuilderFactory the PartBuilderFactory

@var GenericHelper the GenericHelper singleton

@var MultipartHelper the MultipartHelper singleton

@var PrivacyHelper the PrivacyHelper singleton

@var PartFactoryService the PartFactoryService

Constructor
@param PartBuilderFactory $partBuilderFactory

Set separately to avoid circular dependencies (PartFactoryService needs a
MessageHelperService).
@param PartFactoryService $partFactoryService

Returns the GenericHelper singleton

@return GenericHelper

Returns the MultipartHelper singleton
@return MultipartHelper

Returns the PrivacyHelper singleton
@return PrivacyHelper

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Imap\mail-mime-parser\vendor\zbateson\mail-mime-parser\src\Message\Helper\MessageHelperService.php`

**Classes**:
- `ZBateson\MailMimeParser\Message\Helper\MessageHelperService`

**Functions/Methods**:
- `__construct(PartBuilderFactory $partBuilderFactory)`
- `setPartFactoryService(PartFactoryService $partFactoryService)`
- `getGenericHelper()`
- `getMultipartHelper()`
- `getPrivacyHelper()`

