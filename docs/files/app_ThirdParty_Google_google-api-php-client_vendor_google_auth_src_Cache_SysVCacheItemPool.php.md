# app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Cache\SysVCacheItemPool.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Cache\SysVCacheItemPool.php`
- Type: PHP
- Size: 5795 bytes

## Summary (from docblocks)

Copyright 2018 Google Inc. All Rights Reserved.
Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at
     http://www.apache.org/licenses/LICENSE-2.0
Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

SystemV shared memory based CacheItemPool implementation.
This CacheItemPool implementation can be used among multiple processes, but
it doesn't provide any locking mechanism. If multiple processes write to
this ItemPool, you have to avoid race condition manually in your code.

@var int

@var CacheItemInterface[]

@var CacheItemInterface[]

@var array

Save the current items.
@return bool true when success, false upon failure

Load the items from the shared memory.
@return bool true when success, false upon failure

Create a SystemV shared memory based CacheItemPool.
@param array $options [optional] {
    Configuration options.
    @type int $variableKey The variable key for getting the data from
          the shared memory. **Defaults to** 1.
    @type string $proj The project identifier for ftok. This needs to
          be a one character string. **Defaults to** 'A'.
    @type int $memsize The memory size in bytes for shm_attach.
          **Defaults to** 10000.
    @type int $perm The permission for shm_attach. **Defaults to** 0600.

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

{@inheritdoc}

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\auth\src\Cache\SysVCacheItemPool.php`

**Classes**:
- `Google\Auth\Cache\SysVCacheItemPool implements CacheItemPoolInterface`

**Functions/Methods**:
- `saveCurrentItems()`
- `loadItems()`
- `__construct($options = [])`
- `getItem($key)`
- `getItems(array $keys = [])`
- `hasItem($key)`
- `clear()`
- `deleteItem($key)`
- `deleteItems(array $keys)`
- `save(CacheItemInterface $item)`
- `saveDeferred(CacheItemInterface $item)`
- `commit()`

