# System (Core Library)

**Files documented**: 529

## `system\API\ResponseTrait.php`

**Functions/Methods**:
- `respond($data = null, ?int $status = null, string $message = '')`
- `fail($messages, int $status = 400, ?string $code = null, string $customMessage = '')`
- `respondCreated($data = null, string $message = '')`
- `respondDeleted($data = null, string $message = '')`
- `respondUpdated($data = null, string $message = '')`
- `respondNoContent(string $message = 'No Content')`
- `failUnauthorized(string $description = 'Unauthorized', ?string $code = null, string $message = '')`
- `failForbidden(string $description = 'Forbidden', ?string $code = null, string $message = '')`
- `failNotFound(string $description = 'Not Found', ?string $code = null, string $message = '')`
- `failValidationError(string $description = 'Bad Request', ?string $code = null, string $message = '')`
- `failValidationErrors($errors, ?string $code = null, string $message = '')`
- `failResourceExists(string $description = 'Conflict', ?string $code = null, string $message = '')`
- `failResourceGone(string $description = 'Gone', ?string $code = null, string $message = '')`
- `failTooManyRequests(string $description = 'Too Many Requests', ?string $code = null, string $message = '')`
- `failServerError(string $description = 'Internal Server Error', ?string $code = null, string $message = '')`
- `format($data = null)`
- `setResponseFormat(?string $format = null)`

## `system\Autoloader\Autoloader.php`

**Classes**:
- `CodeIgniter\Autoloader\Autoloader`
- `CodeIgniter\Autoloader\name`
- `CodeIgniter\Autoloader\map`
- `CodeIgniter\Autoloader\files`
- `CodeIgniter\Autoloader\using`
- `CodeIgniter\Autoloader\mapping`
- `CodeIgniter\Autoloader\file`
- `CodeIgniter\Autoloader\name`
- `CodeIgniter\Autoloader\The`
- `CodeIgniter\Autoloader\name`
- `CodeIgniter\Autoloader\file`
- `CodeIgniter\Autoloader\name`
- `CodeIgniter\Autoloader\The`
- `CodeIgniter\Autoloader\name`

**Functions/Methods**:
- `initialize(Autoload $config, Modules $modules)`
- `loadComposerInfo(Modules $modules)`
- `register()`
- `addNamespace($namespace, ?string $path = null)`
- `getNamespace(?string $prefix = null)`
- `removeNamespace(string $namespace)`
- `loadClassmap(string $class)`
- `loadClass(string $class)`
- `loadInNamespace(string $class)`
- `includeFile(string $file)`
- `sanitizeFilename(string $filename)`
- `loadComposerNamespaces(ClassLoader $composer)`
- `loadComposerClassmap(ClassLoader $composer)`
- `discoverComposerNamespaces()`

## `system\Autoloader\FileLocator.php`

**Classes**:
- `CodeIgniter\Autoloader\files`
- `CodeIgniter\Autoloader\FileLocator`
- `CodeIgniter\Autoloader\name`

**Functions/Methods**:
- `__construct(Autoloader $autoloader)`
- `locateFile(string $file, ?string $folder = null, string $ext = 'php')`
- `getClassname(string $file)`
- `search(string $path, string $ext = 'php', bool $prioritizeApp = true)`
- `ensureExt(string $path, string $ext)`
- `getNamespaces()`
- `findQualifiedNameFromPath(string $path)`
- `listFiles(string $path)`
- `listNamespaceFiles(string $prefix, string $path)`
- `legacyLocate(string $file, ?string $folder = null)`

## `system\BaseModel.php`

**Classes**:
- `CodeIgniter\provides`
- `CodeIgniter\BaseModel`
- `CodeIgniter\objects`
- `CodeIgniter\will`
- `CodeIgniter\with`
- `CodeIgniter\with`
- `CodeIgniter\property`
- `CodeIgniter\that`
- `CodeIgniter\vars`
- `CodeIgniter\Class`
- `CodeIgniter\and`
- `CodeIgniter\and`
- `CodeIgniter\with`

**Functions/Methods**:
- `__construct(?ValidationInterface $validation = null)`
- `initialize()`
- `doFind(bool $singleton, $id = null)`
- `doFindColumn(string $columnName)`
- `doFindAll(int $limit = 0, int $offset = 0)`
- `doFirst()`
- `doInsert(array $data)`
- `doInsertBatch(?array $set = null, ?bool $escape = null, int $batchSize = 100, bool $testing = false)`
- `doUpdate($id = null, $data = null)`
- `doUpdateBatch(?array $set = null, ?string $index = null, int $batchSize = 100, bool $returnSQL = false)`
- `doDelete($id = null, bool $purge = false)`
- `doPurgeDeleted()`
- `doOnlyDeleted()`
- `doReplace(?array $data = null, bool $returnSQL = false)`
- `doErrors()`
- `idValue($data)`
- `getIdValue($data)`
- `countAllResults(bool $reset = true, bool $test = false)`
- `chunk(int $size, Closure $userFunc)`
- `find($id = null)`
- `findColumn(string $columnName)`
- `findAll(int $limit = 0, int $offset = 0)`
- `first()`
- `save($data)`
- `shouldUpdate($data)`
- `getInsertID()`
- `insert($data = null, bool $returnID = true)`
- `insertBatch(?array $set = null, ?bool $escape = null, int $batchSize = 100, bool $testing = false)`
- `update($id = null, $data = null)`
- `updateBatch(?array $set = null, ?string $index = null, int $batchSize = 100, bool $returnSQL = false)`
- `delete($id = null, bool $purge = false)`
- `purgeDeleted()`
- `withDeleted(bool $val = true)`
- `onlyDeleted()`
- `replace(?array $data = null, bool $returnSQL = false)`
- `errors(bool $forceDB = false)`
- `paginate(?int $perPage = null, string $group = 'default', ?int $page = null, int $segment = 0)`
- `setAllowedFields(array $allowedFields)`
- `protect(bool $protect = true)`
- `doProtectFields(array $data)`
- `setDate(?int $userData = null)`
- `intToDate(int $value)`
- `timeToDate(Time $value)`
- `skipValidation(bool $skip = true)`
- `setValidationMessages(array $validationMessages)`
- `setValidationMessage(string $field, array $fieldMessages)`
- `setValidationRules(array $validationRules)`
- `setValidationRule(string $field, $fieldRules)`
- `cleanRules(bool $choice = false)`
- `validate($data)`
- `getValidationRules(array $options = [])`
- `getValidationMessages()`
- `cleanValidationRules(array $rules, ?array $data = null)`
- `allowCallbacks(bool $val = true)`
- `trigger(string $event, array $eventData)`
- `asArray()`
- `asObject(string $class = 'object')`
- `objectToArray($data, bool $onlyChanged = true, bool $recursive = false)`
- `objectToRawArray($data, bool $onlyChanged = true, bool $recursive = false)`
- `transformDataToArray($data, string $type)`
- `__get(string $name)`
- `__isset(string $name)`
- `__call(string $name, array $params)`
- `fillPlaceholders(array $rules, array $data)`

## `system\bootstrap.php`

## `system\Cache\CacheFactory.php`

**Classes**:
- `CodeIgniter\Cache\CacheFactory`
- `CodeIgniter\Cache\to`

**Functions/Methods**:
- `getHandler(Cache $config, ?string $handler = null, ?string $backup = null)`

## `system\Cache\CacheInterface.php`

**Functions/Methods**:
- `initialize()`
- `get(string $key)`
- `save(string $key, $value, int $ttl = 60)`
- `delete(string $key)`
- `increment(string $key, int $offset = 1)`
- `decrement(string $key, int $offset = 1)`
- `clean()`
- `getCacheInfo()`
- `getMetaData(string $key)`
- `isSupported()`

## `system\Cache\Exceptions\CacheException.php`

**Classes**:
- `CodeIgniter\Cache\Exceptions\CacheException extends RuntimeException implements ExceptionInterface`

**Functions/Methods**:
- `forUnableToWrite(string $path)`
- `forInvalidHandlers()`
- `forNoBackup()`
- `forHandlerNotFound()`

## `system\Cache\Exceptions\ExceptionInterface.php`

## `system\Cache\Handlers\BaseHandler.php`

**Classes**:
- `CodeIgniter\Cache\Handlers\for`
- `CodeIgniter\Cache\Handlers\BaseHandler implements CacheInterface`

**Functions/Methods**:
- `validateKey($key, $prefix = '')`
- `remember(string $key, int $ttl, Closure $callback)`
- `deleteMatching(string $pattern)`

## `system\Cache\Handlers\DummyHandler.php`

**Classes**:
- `CodeIgniter\Cache\Handlers\DummyHandler extends BaseHandler`

**Functions/Methods**:
- `initialize()`
- `get(string $key)`
- `remember(string $key, int $ttl, Closure $callback)`
- `save(string $key, $value, int $ttl = 60)`
- `delete(string $key)`
- `deleteMatching(string $pattern)`
- `increment(string $key, int $offset = 1)`
- `decrement(string $key, int $offset = 1)`
- `clean()`
- `getCacheInfo()`
- `getMetaData(string $key)`
- `isSupported()`

## `system\Cache\Handlers\FileHandler.php`

**Classes**:
- `CodeIgniter\Cache\Handlers\FileHandler extends BaseHandler`

**Functions/Methods**:
- `__construct(Cache $config)`
- `initialize()`
- `get(string $key)`
- `save(string $key, $value, int $ttl = 60)`
- `delete(string $key)`
- `deleteMatching(string $pattern)`
- `increment(string $key, int $offset = 1)`
- `decrement(string $key, int $offset = 1)`
- `clean()`
- `getCacheInfo()`
- `getMetaData(string $key)`
- `isSupported()`
- `getItem(string $filename)`
- `writeFile($path, $data, $mode = 'wb')`
- `deleteFiles(string $path, bool $delDir = false, bool $htdocs = false, int $_level = 0)`
- `getDirFileInfo(string $sourceDir, bool $topLevelOnly = true, bool $_recursion = false)`
- `getFileInfo(string $file, $returnedValues = ['name', 'server_path', 'size', 'date'])`

## `system\Cache\Handlers\MemcachedHandler.php`

**Classes**:
- `CodeIgniter\Cache\Handlers\MemcachedHandler extends BaseHandler`

**Functions/Methods**:
- `__construct(Cache $config)`
- `__destruct()`
- `initialize()`
- `get(string $key)`
- `save(string $key, $value, int $ttl = 60)`
- `delete(string $key)`
- `deleteMatching(string $pattern)`
- `increment(string $key, int $offset = 1)`
- `decrement(string $key, int $offset = 1)`
- `clean()`
- `getCacheInfo()`
- `getMetaData(string $key)`
- `isSupported()`

## `system\Cache\Handlers\PredisHandler.php`

**Classes**:
- `CodeIgniter\Cache\Handlers\PredisHandler extends BaseHandler`

**Functions/Methods**:
- `__construct(Cache $config)`
- `initialize()`
- `get(string $key)`
- `save(string $key, $value, int $ttl = 60)`
- `delete(string $key)`
- `deleteMatching(string $pattern)`
- `increment(string $key, int $offset = 1)`
- `decrement(string $key, int $offset = 1)`
- `clean()`
- `getCacheInfo()`
- `getMetaData(string $key)`
- `isSupported()`

## `system\Cache\Handlers\RedisHandler.php`

**Classes**:
- `CodeIgniter\Cache\Handlers\RedisHandler extends BaseHandler`

**Functions/Methods**:
- `__construct(Cache $config)`
- `__destruct()`
- `initialize()`
- `get(string $key)`
- `save(string $key, $value, int $ttl = 60)`
- `delete(string $key)`
- `deleteMatching(string $pattern)`
- `increment(string $key, int $offset = 1)`
- `decrement(string $key, int $offset = 1)`
- `clean()`
- `getCacheInfo()`
- `getMetaData(string $key)`
- `isSupported()`

## `system\Cache\Handlers\WincacheHandler.php`

**Classes**:
- `CodeIgniter\Cache\Handlers\WincacheHandler extends BaseHandler`

**Functions/Methods**:
- `__construct(Cache $config)`
- `initialize()`
- `get(string $key)`
- `save(string $key, $value, int $ttl = 60)`
- `delete(string $key)`
- `deleteMatching(string $pattern)`
- `increment(string $key, int $offset = 1)`
- `decrement(string $key, int $offset = 1)`
- `clean()`
- `getCacheInfo()`
- `getMetaData(string $key)`
- `isSupported()`

## `system\CLI\BaseCommand.php`

**Classes**:
- `CodeIgniter\CLI\used`
- `CodeIgniter\CLI\BaseCommand`

**Functions/Methods**:
- `__construct(LoggerInterface $logger, Commands $commands)`
- `run(array $params)`
- `call(string $command, array $params = [])`
- `showError(Throwable $e)`
- `showHelp()`
- `setPad(string $item, int $max, int $extra = 2, int $indent = 0)`
- `getPad(array $array, int $pad)`
- `__get(string $key)`
- `__isset(string $key)`

## `system\CLI\CLI.php`

**Classes**:
- `CodeIgniter\CLI\is`
- `CodeIgniter\CLI\CLI`
- `CodeIgniter\CLI\already`
- `CodeIgniter\CLI\is`

**Functions/Methods**:
- `init()`
- `input(?string $prefix = null)`
- `prompt(string $field, $options = null, $validation = null)`
- `promptByKey($text, array $options, $validation = null)`
- `validate(string $field, string $value, $rules)`
- `print(string $text = '', ?string $foreground = null, ?string $background = null)`
- `write(string $text = '', ?string $foreground = null, ?string $background = null)`
- `error(string $text, string $foreground = 'light_red', ?string $background = null)`
- `beep(int $num = 1)`
- `wait(int $seconds, bool $countdown = false)`
- `isWindows()`
- `newLine(int $num = 1)`
- `clearScreen()`
- `color(string $text, string $foreground, ?string $background = null, ?string $format = null)`
- `getColoredText(string $text, string $foreground, ?string $background, ?string $format)`
- `strlen(?string $string)`
- `streamSupports(string $function, $resource)`
- `hasColorSupport($resource)`
- `getWidth(int $default = 80)`
- `getHeight(int $default = 32)`
- `generateDimensions()`
- `showProgress($thisStep = 1, int $totalSteps = 10)`
- `wrap(?string $string = null, int $max = 0, int $padLeft = 0)`
- `parseCommandLine()`
- `getURI()`
- `getSegment(int $index)`
- `getSegments()`
- `getOption(string $name)`
- `getOptions()`
- `getOptionString(bool $useLongOpts = false, bool $trim = false)`
- `table(array $tbody, array $thead = [])`
- `fwrite($handle, string $string)`

## `system\CLI\CommandRunner.php`

**Classes**:
- `CodeIgniter\CLI\CommandRunner extends Controller`
- `CodeIgniter\CLI\managing`

**Functions/Methods**:
- `__construct()`
- `_remap($method, $params)`
- `index(array $params)`
- `getCommands()`

## `system\CLI\Commands.php`

**Classes**:
- `CodeIgniter\CLI\Commands`

**Functions/Methods**:
- `__construct($logger = null)`
- `run(string $command, array $params)`
- `getCommands()`
- `discoverCommands()`
- `verifyCommand(string $command, array $commands)`
- `getCommandAlternatives(string $name, array $collection)`

## `system\CLI\Console.php`

**Classes**:
- `CodeIgniter\CLI\Console`

**Functions/Methods**:
- `__construct(CodeIgniter $app)`
- `run(bool $useSafeOutput = false)`
- `showHeader(bool $suppress = false)`

## `system\CLI\Exceptions\CLIException.php`

**Classes**:
- `CodeIgniter\CLI\Exceptions\CLIException extends RuntimeException`

**Functions/Methods**:
- `forInvalidColor(string $type, string $color)`

## `system\CLI\GeneratorTrait.php`

**Classes**:
- `CodeIgniter\CLI\names`
- `CodeIgniter\CLI\name`
- `CodeIgniter\CLI\imports`
- `CodeIgniter\CLI\name`
- `CodeIgniter\CLI\name`
- `CodeIgniter\CLI\based`
- `CodeIgniter\CLI\name`
- `CodeIgniter\CLI\name`
- `CodeIgniter\CLI\name`
- `CodeIgniter\CLI\being`
- `CodeIgniter\CLI\name`

**Functions/Methods**:
- `execute(array $params)`
- `prepare(string $class)`
- `basename(string $filename)`
- `qualifyClassName()`
- `renderTemplate(array $data = [])`
- `parseTemplate(string $class, array $search = [], array $replace = [], array $data = [])`
- `buildContent(string $class)`
- `buildPath(string $class)`
- `setHasClassName(bool $hasClassName)`
- `setSortImports(bool $sortImports)`
- `setEnabledSuffixing(bool $enabledSuffixing)`
- `getOption(string $name)`

## `system\CodeIgniter.php`

**Classes**:
- `CodeIgniter\is`
- `CodeIgniter\CodeIgniter`
- `CodeIgniter\instances`
- `CodeIgniter\if`

**Functions/Methods**:
- `__construct(App $config)`
- `initialize()`
- `resolvePlatformExtensions()`
- `initializeKint()`
- `run(?RouteCollectionInterface $routes = null, bool $returnResponse = false)`
- `useSafeOutput(bool $safe = true)`
- `isSparked()`
- `isPhpCli()`
- `isWeb()`
- `handleRequest(?RouteCollectionInterface $routes, Cache $cacheConfig, bool $returnResponse = false)`
- `detectEnvironment()`
- `bootstrapEnvironment()`
- `startBenchmark()`
- `setRequest(Request $request)`
- `getRequestObject()`
- `getResponseObject()`
- `forceSecureAccess($duration = 31_536_000)`
- `displayCache(Cache $config)`
- `cache(int $time)`
- `cachePage(Cache $config)`
- `getPerformanceStats()`
- `generateCacheName(Cache $config)`
- `displayPerformanceMetrics(string $output)`
- `tryToRouteIt(?RouteCollectionInterface $routes = null)`
- `determinePath()`
- `setPath(string $path)`
- `startController()`
- `createController()`
- `runController($class)`
- `display404errors(PageNotFoundException $e)`
- `gatherOutput(?Cache $cacheConfig = null, $returned = null)`
- `storePreviousURL($uri)`
- `spoofRequestMethod()`
- `sendResponse()`
- `callExit($code)`
- `setContext(string $context)`

## `system\Commands\Cache\ClearCache.php`

**Classes**:
- `CodeIgniter\Commands\Cache\ClearCache extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Cache\InfoCache.php`

**Classes**:
- `CodeIgniter\Commands\Cache\InfoCache extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Database\CreateDatabase.php`

**Classes**:
- `CodeIgniter\Commands\Database\CreateDatabase extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Database\CreateMigration.php`

**Classes**:
- `CodeIgniter\Commands\Database\CreateMigration extends BaseCommand`

**Functions/Methods**:
- `run(array $params = [])`
- `up()`
- `down()`

## `system\Commands\Database\CreateSeeder.php`

**Classes**:
- `CodeIgniter\Commands\Database\CreateSeeder extends BaseCommand`

**Functions/Methods**:
- `run(array $params = [])`
- `run()`

## `system\Commands\Database\Migrate.php`

**Classes**:
- `CodeIgniter\Commands\Database\Migrate extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Database\MigrateRefresh.php`

**Classes**:
- `CodeIgniter\Commands\Database\MigrateRefresh extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Database\MigrateRollback.php`

**Classes**:
- `CodeIgniter\Commands\Database\MigrateRollback extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Database\MigrateStatus.php`

**Classes**:
- `CodeIgniter\Commands\Database\MigrateStatus extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Database\Seed.php`

**Classes**:
- `CodeIgniter\Commands\Database\Seed extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Database\ShowTableInfo.php`

**Classes**:
- `CodeIgniter\Commands\Database\ShowTableInfo extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`
- `removeDBPrefix()`
- `restoreDBPrefix()`
- `showDataOfTable(string $tableName, int $limitRows, int $limitFieldValue)`
- `showAllTables(array $tables)`
- `makeTbodyForShowAllTables(array $tables)`
- `makeTableRows(string $tableName,
        int $limitRows,
        int $limitFieldValue,
        ?string $sortField = null)`
- `showFieldMetaData(string $tableName)`
- `setYesOrNo(bool $fieldValue)`

## `system\Commands\Encryption\GenerateKey.php`

**Classes**:
- `CodeIgniter\Commands\Encryption\GenerateKey extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`
- `generateRandomKey(string $prefix, int $length)`
- `setNewEncryptionKey(string $key, array $params)`
- `confirmOverwrite(array $params)`
- `writeNewEncryptionKeyToFile(string $oldKey, string $newKey)`
- `keyPattern(string $oldKey)`

## `system\Commands\Generators\CommandGenerator.php`

**Classes**:
- `CodeIgniter\Commands\Generators\CommandGenerator extends BaseCommand`
- `CodeIgniter\Commands\Generators\name`
- `CodeIgniter\Commands\Generators\name`

**Functions/Methods**:
- `run(array $params)`
- `prepare(string $class)`

## `system\Commands\Generators\ConfigGenerator.php`

**Classes**:
- `CodeIgniter\Commands\Generators\ConfigGenerator extends BaseCommand`
- `CodeIgniter\Commands\Generators\name`
- `CodeIgniter\Commands\Generators\name`

**Functions/Methods**:
- `run(array $params)`
- `prepare(string $class)`

## `system\Commands\Generators\ControllerGenerator.php`

**Classes**:
- `CodeIgniter\Commands\Generators\ControllerGenerator extends BaseCommand`
- `CodeIgniter\Commands\Generators\name`
- `CodeIgniter\Commands\Generators\name`
- `CodeIgniter\Commands\Generators\to`

**Functions/Methods**:
- `run(array $params)`
- `prepare(string $class)`

## `system\Commands\Generators\EntityGenerator.php`

**Classes**:
- `CodeIgniter\Commands\Generators\EntityGenerator extends BaseCommand`
- `CodeIgniter\Commands\Generators\name`
- `CodeIgniter\Commands\Generators\name`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Generators\FilterGenerator.php`

**Classes**:
- `CodeIgniter\Commands\Generators\FilterGenerator extends BaseCommand`
- `CodeIgniter\Commands\Generators\name`
- `CodeIgniter\Commands\Generators\name`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Generators\MigrateCreate.php`

**Classes**:
- `CodeIgniter\Commands\Generators\for`
- `CodeIgniter\Commands\Generators\MigrateCreate extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Generators\MigrationGenerator.php`

**Classes**:
- `CodeIgniter\Commands\Generators\MigrationGenerator extends BaseCommand`
- `CodeIgniter\Commands\Generators\name`
- `CodeIgniter\Commands\Generators\name`

**Functions/Methods**:
- `run(array $params)`
- `prepare(string $class)`
- `basename(string $filename)`

## `system\Commands\Generators\ModelGenerator.php`

**Classes**:
- `CodeIgniter\Commands\Generators\ModelGenerator extends BaseCommand`
- `CodeIgniter\Commands\Generators\name`
- `CodeIgniter\Commands\Generators\name`
- `CodeIgniter\Commands\Generators\name`

**Functions/Methods**:
- `run(array $params)`
- `prepare(string $class)`

## `system\Commands\Generators\ScaffoldGenerator.php`

**Classes**:
- `CodeIgniter\Commands\Generators\ScaffoldGenerator extends BaseCommand`
- `CodeIgniter\Commands\Generators\name`
- `CodeIgniter\Commands\Generators\name`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Generators\SeederGenerator.php`

**Classes**:
- `CodeIgniter\Commands\Generators\SeederGenerator extends BaseCommand`
- `CodeIgniter\Commands\Generators\name`
- `CodeIgniter\Commands\Generators\name`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Generators\SessionMigrationGenerator.php`

**Classes**:
- `CodeIgniter\Commands\Generators\SessionMigrationGenerator extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`
- `prepare(string $class)`
- `basename(string $filename)`

## `system\Commands\Generators\ValidationGenerator.php`

**Classes**:
- `CodeIgniter\Commands\Generators\ValidationGenerator extends BaseCommand`
- `CodeIgniter\Commands\Generators\name`
- `CodeIgniter\Commands\Generators\name`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Generators\Views\command.tpl.php`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Generators\Views\config.tpl.php`

## `system\Commands\Generators\Views\controller.tpl.php`

**Functions/Methods**:
- `index()`
- `show($id = null)`
- `new()`
- `create()`
- `edit($id = null)`
- `update($id = null)`
- `delete($id = null)`
- `index()`
- `show($id = null)`
- `new()`
- `create()`
- `edit($id = null)`
- `update($id = null)`
- `remove($id = null)`
- `delete($id = null)`
- `index()`

## `system\Commands\Generators\Views\entity.tpl.php`

## `system\Commands\Generators\Views\filter.tpl.php`

**Functions/Methods**:
- `before(RequestInterface $request, $arguments = null)`
- `after(RequestInterface $request, ResponseInterface $response, $arguments = null)`

## `system\Commands\Generators\Views\migration.tpl.php`

**Functions/Methods**:
- `up()`
- `down()`
- `up()`
- `down()`

## `system\Commands\Generators\Views\model.tpl.php`

## `system\Commands\Generators\Views\seeder.tpl.php`

**Functions/Methods**:
- `run()`

## `system\Commands\Generators\Views\validation.tpl.php`

**Functions/Methods**:
- `custom_rule()`

## `system\Commands\Help.php`

**Classes**:
- `CodeIgniter\Commands\Help extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Housekeeping\ClearDebugbar.php`

**Classes**:
- `CodeIgniter\Commands\Housekeeping\ClearDebugbar extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Housekeeping\ClearLogs.php`

**Classes**:
- `CodeIgniter\Commands\Housekeeping\ClearLogs extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\ListCommands.php`

**Classes**:
- `CodeIgniter\Commands\ListCommands extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`
- `listFull(array $commands)`
- `listSimple(array $commands)`

## `system\Commands\Server\rewrite.php`

## `system\Commands\Server\Serve.php`

**Classes**:
- `CodeIgniter\Commands\Server\Serve extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Sessions\CreateMigration.php`

**Classes**:
- `CodeIgniter\Commands\Sessions\CreateMigration extends BaseCommand`

**Functions/Methods**:
- `run(array $params = [])`

## `system\Commands\Sessions\Views\migration.tpl.php`

**Classes**:
- `Migration_create_`

**Functions/Methods**:
- `up()`
- `down()`

## `system\Commands\Utilities\Environment.php`

**Classes**:
- `CodeIgniter\Commands\Utilities\Environment extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`
- `writeNewEnvironmentToEnvFile(string $newEnv)`

## `system\Commands\Utilities\Namespaces.php`

**Classes**:
- `CodeIgniter\Commands\Utilities\Namespaces extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Utilities\Publish.php`

**Classes**:
- `CodeIgniter\Commands\Utilities\Publish extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Utilities\Routes.php`

**Classes**:
- `CodeIgniter\Commands\Utilities\Routes extends BaseCommand`

**Functions/Methods**:
- `run(array $params)`

## `system\Commands\Utilities\Routes\AutoRouteCollector.php`

**Classes**:
- `CodeIgniter\Commands\Utilities\Routes\AutoRouteCollector`

**Functions/Methods**:
- `__construct(string $namespace, string $defaultController, string $defaultMethod)`
- `get()`

## `system\Commands\Utilities\Routes\AutoRouterImproved\AutoRouteCollector.php`

**Classes**:
- `CodeIgniter\Commands\Utilities\Routes\AutoRouterImproved\AutoRouteCollector`

**Functions/Methods**:
- `__construct(string $namespace,
        string $defaultController,
        string $defaultMethod,
        array $httpMethods,
        array $protectedControllers)`
- `get()`
- `addFilters($routes)`
- `generateSampleUri(array $route, bool $longest = true)`

## `system\Commands\Utilities\Routes\AutoRouterImproved\ControllerMethodReader.php`

**Classes**:
- `CodeIgniter\Commands\Utilities\Routes\AutoRouterImproved\ControllerMethodReader`

**Functions/Methods**:
- `__construct(string $namespace, array $httpMethods)`
- `read(string $class, string $defaultController = 'Home', string $defaultMethod = 'index')`
- `getUriByClass(string $classname)`
- `getRouteWithoutController(string $classShortname,
        string $defaultController,
        string $uriByClass,
        string $classname,
        string $methodName,
        string $httpVerb)`

## `system\Commands\Utilities\Routes\ControllerFinder.php`

**Classes**:
- `CodeIgniter\Commands\Utilities\Routes\ControllerFinder`

**Functions/Methods**:
- `__construct(string $namespace)`
- `find()`

## `system\Commands\Utilities\Routes\ControllerMethodReader.php`

**Classes**:
- `CodeIgniter\Commands\Utilities\Routes\ControllerMethodReader`
- `CodeIgniter\Commands\Utilities\Routes\has`

**Functions/Methods**:
- `__construct(string $namespace)`
- `read(string $class, string $defaultController = 'Home', string $defaultMethod = 'index')`
- `hasRemap(ReflectionClass $class)`
- `getUriByClass(string $classname)`
- `getRouteWithoutController(string $classShortname,
        string $defaultController,
        string $uriByClass,
        string $classname,
        string $methodName)`

## `system\Commands\Utilities\Routes\FilterCollector.php`

**Classes**:
- `CodeIgniter\Commands\Utilities\Routes\FilterCollector`

**Functions/Methods**:
- `__construct(bool $resetRoutes = false)`
- `get(string $method, string $uri)`
- `createRouter(Request $request)`
- `createFilters(Request $request)`

## `system\Commands\Utilities\Routes\FilterFinder.php`

**Classes**:
- `CodeIgniter\Commands\Utilities\Routes\FilterFinder`

**Functions/Methods**:
- `__construct(?Router $router = null, ?Filters $filters = null)`
- `getRouteFilters(string $uri)`
- `find(string $uri)`

## `system\Commands\Utilities\Routes\SampleURIGenerator.php`

**Classes**:
- `CodeIgniter\Commands\Utilities\Routes\SampleURIGenerator`

**Functions/Methods**:
- `__construct(?RouteCollection $routes = null)`
- `get(string $routeKey)`

## `system\Common.php`

**Functions/Methods**:
- `app_timezone()`
- `cache(?string $key = null)`
- `clean_path(string $path)`
- `command(string $command)`
- `config(string $name, bool $getShared = true)`
- `cookie(string $name, string $value = '', array $options = [])`
- `cookies(array $cookies = [], bool $getGlobal = true)`
- `csrf_token()`
- `csrf_header()`
- `csrf_hash()`
- `csrf_field(?string $id = null)`
- `csrf_meta(?string $id = null)`
- `csp_style_nonce()`
- `csp_script_nonce()`
- `db_connect($db = null, bool $getShared = true)`
- `dd(...$vars)`
- `env(string $key, $default = null)`
- `esc($data, string $context = 'html', ?string $encoding = null)`
- `force_https(int $duration = 31_536_000, ?RequestInterface $request = null, ?ResponseInterface $response = null)`
- `function_usable(string $functionName)`
- `helper($filenames)`
- `is_cli()`
- `is_really_writable(string $file)`
- `lang(string $line, array $args = [], ?string $locale = null)`
- `log_message(string $level, string $message, array $context = [])`
- `model(string $name, bool $getShared = true, ?ConnectionInterface &$conn = null)`
- `old(string $key, $default = null, $escape = 'html')`
- `redirect(?string $route = null)`
- `remove_invisible_characters(string $str, bool $urlEncoded = true)`
- `route_to(string $method, ...$params)`
- `session(?string $val = null)`
- `service(string $name, ...$params)`
- `single_service(string $name, ...$params)`
- `slash_item(string $item)`
- `stringify_attributes($attributes, bool $js = false)`
- `timer(?string $name = null)`
- `trace()`
- `view(string $name, array $data = [], array $options = [])`
- `view_cell(string $library, $params = null, int $ttl = 0, ?string $cacheName = null)`
- `class_basename($class)`
- `class_uses_recursive($class)`
- `trait_uses_recursive($trait)`

## `system\ComposerScripts.php`

**Classes**:
- `CodeIgniter\is`
- `CodeIgniter\ComposerScripts`

**Functions/Methods**:
- `postUpdate()`
- `recursiveDelete(string $directory)`
- `recursiveMirror(string $originDir, string $targetDir)`
- `copyKintInitFiles()`

## `system\Config\AutoloadConfig.php`

**Classes**:
- `CodeIgniter\Config\maps`
- `CodeIgniter\Config\AutoloadConfig`
- `CodeIgniter\Config\map`
- `CodeIgniter\Config\names`
- `CodeIgniter\Config\map`
- `CodeIgniter\Config\names`

**Functions/Methods**:
- `__construct()`

## `system\Config\BaseConfig.php`

**Classes**:
- `CodeIgniter\Config\will`
- `CodeIgniter\Config\BaseConfig`
- `CodeIgniter\Config\properties`
- `CodeIgniter\Config\name`
- `CodeIgniter\Config\for`

**Functions/Methods**:
- `__construct()`
- `initEnvValue(&$property, string $name, string $prefix, string $shortPrefix)`
- `getEnvValue(string $property, string $prefix, string $shortPrefix)`
- `registerProperties()`

## `system\Config\BaseService.php`

**Classes**:
- `CodeIgniter\Config\you`
- `CodeIgniter\Config\BaseService`
- `CodeIgniter\Config\is`
- `CodeIgniter\Config\that`

**Functions/Methods**:
- `getSharedInstance(string $key, ...$params)`
- `autoloader(bool $getShared = true)`
- `locator(bool $getShared = true)`
- `__callStatic(string $name, array $arguments)`
- `serviceExists(string $name)`
- `reset(bool $initAutoloader = true)`
- `resetSingle(string $name)`
- `injectMock(string $name, $mock)`
- `discoverServices(string $name, array $arguments)`
- `buildServicesCache()`

## `system\Config\Config.php`

**Classes**:
- `CodeIgniter\Config\Config`

**Functions/Methods**:
- `get(string $name, bool $getShared = true)`
- `injectMock(string $name, $instance)`
- `reset()`

## `system\Config\DotEnv.php`

**Classes**:
- `CodeIgniter\Config\DotEnv`

**Functions/Methods**:
- `__construct(string $path, string $file = '.env')`
- `load()`
- `parse()`
- `setVariable(string $name, string $value = '')`
- `normaliseVariable(string $name, string $value = '')`
- `sanitizeValue(string $value)`
- `resolveNestedVariables(string $value)`
- `getVariable(string $name)`

## `system\Config\Factories.php`

**Classes**:
- `CodeIgniter\Config\Factories`
- `CodeIgniter\Config\basenames`
- `CodeIgniter\Config\if`
- `CodeIgniter\Config\names`
- `CodeIgniter\Config\exists`
- `CodeIgniter\Config\was`
- `CodeIgniter\Config\foreach`
- `CodeIgniter\Config\name`

**Functions/Methods**:
- `models(string $name, array $options = [], ?ConnectionInterface &$conn = null)`
- `__callStatic(string $component, array $arguments)`
- `locateClass(array $options, string $name)`
- `verifyPreferApp(array $options, string $name)`
- `verifyInstanceOf(array $options, string $name)`
- `getOptions(string $component)`
- `setOptions(string $component, array $values)`
- `reset(?string $component = null)`
- `injectMock(string $component, string $name, object $instance)`
- `getBasename(string $name)`

## `system\Config\Factory.php`

**Classes**:
- `CodeIgniter\Config\Factory extends BaseConfig`

## `system\Config\ForeignCharacters.php`

**Classes**:
- `CodeIgniter\Config\ForeignCharacters`

## `system\Config\Publisher.php`

**Classes**:
- `CodeIgniter\Config\Publisher extends BaseConfig`

**Functions/Methods**:
- `registerProperties()`

## `system\Config\Routes.php`

## `system\Config\Services.php`

**Classes**:
- `CodeIgniter\Config\you`
- `CodeIgniter\Config\Services extends BaseService`
- `CodeIgniter\Config\provides`
- `CodeIgniter\Config\provides`
- `CodeIgniter\Config\acts`
- `CodeIgniter\Config\allows`
- `CodeIgniter\Config\provides`
- `CodeIgniter\Config\holds`
- `CodeIgniter\Config\is`
- `CodeIgniter\Config\provides`
- `CodeIgniter\Config\is`
- `CodeIgniter\Config\that`
- `CodeIgniter\Config\provides`
- `CodeIgniter\Config\is`
- `CodeIgniter\Config\that`
- `CodeIgniter\Config\within`
- `CodeIgniter\Config\models`
- `CodeIgniter\Config\models`
- `CodeIgniter\Config\provides`
- `CodeIgniter\Config\that`
- `CodeIgniter\Config\uses`
- `CodeIgniter\Config\provides`
- `CodeIgniter\Config\provides`
- `CodeIgniter\Config\provides`
- `CodeIgniter\Config\provides`
- `CodeIgniter\Config\provides`
- `CodeIgniter\Config\provides`

**Functions/Methods**:
- `cache(?Cache $config = null, bool $getShared = true)`
- `clirequest(?App $config = null, bool $getShared = true)`
- `codeigniter(?App $config = null, bool $getShared = true)`
- `commands(bool $getShared = true)`
- `csp(?CSPConfig $config = null, bool $getShared = true)`
- `curlrequest(array $options = [], ?ResponseInterface $response = null, ?App $config = null, bool $getShared = true)`
- `email($config = null, bool $getShared = true)`
- `encrypter(?EncryptionConfig $config = null, $getShared = false)`
- `exceptions(?ExceptionsConfig $config = null,
        ?IncomingRequest $request = null,
        ?Response $response = null,
        bool $getShared = true)`
- `filters(?FiltersConfig $config = null, bool $getShared = true)`
- `format(?FormatConfig $config = null, bool $getShared = true)`
- `honeypot(?HoneypotConfig $config = null, bool $getShared = true)`
- `image(?string $handler = null, ?Images $config = null, bool $getShared = true)`
- `iterator(bool $getShared = true)`
- `language(?string $locale = null, bool $getShared = true)`
- `logger(bool $getShared = true)`
- `migrations(?Migrations $config = null, ?ConnectionInterface $db = null, bool $getShared = true)`
- `negotiator(?RequestInterface $request = null, bool $getShared = true)`
- `pager(?PagerConfig $config = null, ?RendererInterface $view = null, bool $getShared = true)`
- `parser(?string $viewPath = null, ?ViewConfig $config = null, bool $getShared = true)`
- `renderer(?string $viewPath = null, ?ViewConfig $config = null, bool $getShared = true)`
- `request(?App $config = null, bool $getShared = true)`
- `response(?App $config = null, bool $getShared = true)`
- `redirectresponse(?App $config = null, bool $getShared = true)`
- `routes(bool $getShared = true)`
- `router(?RouteCollectionInterface $routes = null, ?Request $request = null, bool $getShared = true)`
- `security(?App $config = null, bool $getShared = true)`
- `session(?App $config = null, bool $getShared = true)`
- `throttler(bool $getShared = true)`
- `timer(bool $getShared = true)`
- `toolbar(?ToolbarConfig $config = null, bool $getShared = true)`
- `uri(?string $uri = null, bool $getShared = true)`
- `validation(?ValidationConfig $config = null, bool $getShared = true)`
- `viewcell(bool $getShared = true)`
- `typography(bool $getShared = true)`

## `system\Config\View.php`

**Classes**:
- `CodeIgniter\Config\View extends BaseConfig`
- `CodeIgniter\Config\methods`

**Functions/Methods**:
- `__construct()`

## `system\Controller.php`

**Classes**:
- `CodeIgniter\Controller`
- `CodeIgniter\instantiation`
- `CodeIgniter\and`

**Functions/Methods**:
- `initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)`
- `forceHTTPS(int $duration = 31_536_000)`
- `cachePage(int $time)`
- `loadHelpers()`
- `validate($rules, array $messages = [])`
- `validateData(array $data, $rules, array $messages = [], ?string $dbGroup = null)`
- `setValidator($rules, array $messages)`

## `system\Cookie\CloneableCookieInterface.php`

**Functions/Methods**:
- `withPrefix(string $prefix = '')`
- `withName(string $name)`
- `withValue(string $value)`
- `withExpires($expires)`
- `withExpired()`
- `withNeverExpiring()`
- `withPath(?string $path)`
- `withDomain(?string $domain)`
- `withSecure(bool $secure = true)`
- `withHTTPOnly(bool $httponly = true)`
- `withSameSite(string $samesite)`
- `withRaw(bool $raw = true)`

## `system\Cookie\Cookie.php`

**Classes**:
- `CodeIgniter\Cookie\represents`
- `CodeIgniter\Cookie\Cookie implements ArrayAccess, CloneableCookieInterface`

**Functions/Methods**:
- `setDefaults($config = [])`
- `fromHeaderString(string $cookie, bool $raw = false)`
- `__construct(string $name, string $value = '', array $options = [])`
- `getId()`
- `getPrefix()`
- `getName()`
- `getPrefixedName()`
- `getValue()`
- `getExpiresTimestamp()`
- `getExpiresString()`
- `isExpired()`
- `getMaxAge()`
- `getPath()`
- `getDomain()`
- `isSecure()`
- `isHTTPOnly()`
- `getSameSite()`
- `isRaw()`
- `getOptions()`
- `withPrefix(string $prefix = '')`
- `withName(string $name)`
- `withValue(string $value)`
- `withExpires($expires)`
- `withExpired()`
- `withNeverExpiring()`
- `withPath(?string $path)`
- `withDomain(?string $domain)`
- `withSecure(bool $secure = true)`
- `withHTTPOnly(bool $httponly = true)`
- `withSameSite(string $samesite)`
- `withRaw(bool $raw = true)`
- `offsetExists($offset)`
- `offsetGet($offset)`
- `offsetSet($offset, $value)`
- `offsetUnset($offset)`
- `toHeaderString()`
- `__toString()`
- `toArray()`
- `convertExpiresTimestamp($expires = 0)`
- `validateName(string $name, bool $raw)`
- `validatePrefix(string $prefix, bool $secure, string $path, string $domain)`
- `validateSameSite(string $samesite, bool $secure)`

## `system\Cookie\CookieInterface.php`

**Functions/Methods**:
- `getId()`
- `getPrefix()`
- `getName()`
- `getPrefixedName()`
- `getValue()`
- `getExpiresTimestamp()`
- `getExpiresString()`
- `isExpired()`
- `getMaxAge()`
- `getPath()`
- `getDomain()`
- `isSecure()`
- `isHTTPOnly()`
- `getSameSite()`
- `isRaw()`
- `getOptions()`
- `toHeaderString()`
- `__toString()`
- `toArray()`

## `system\Cookie\CookieStore.php`

**Classes**:
- `CodeIgniter\Cookie\CookieStore implements Countable, IteratorAggregate`

**Functions/Methods**:
- `fromCookieHeaders(array $headers, bool $raw = false)`
- `__construct(array $cookies)`
- `has(string $name, string $prefix = '', ?string $value = null)`
- `get(string $name, string $prefix = '')`
- `put(Cookie $cookie)`
- `remove(string $name, string $prefix = '')`
- `dispatch()`
- `display()`
- `clear()`
- `count()`
- `getIterator()`
- `validateCookies(array $cookies)`
- `setRawCookie(string $name, string $value, array $options)`
- `setCookie(string $name, string $value, array $options)`

## `system\Cookie\Exceptions\CookieException.php`

**Classes**:
- `CodeIgniter\Cookie\Exceptions\CookieException extends FrameworkException`
- `CodeIgniter\Cookie\Exceptions\is`

**Functions/Methods**:
- `forInvalidExpiresTime(string $type)`
- `forInvalidExpiresValue()`
- `forInvalidCookieName(string $name)`
- `forEmptyCookieName()`
- `forInvalidSecurePrefix()`
- `forInvalidHostPrefix()`
- `forInvalidSameSite(string $sameSite)`
- `forInvalidSameSiteNone()`
- `forInvalidCookieInstance(array $data)`
- `forUnknownCookieInstance(array $data)`

## `system\Database\BaseBuilder.php`

**Classes**:
- `CodeIgniter\Database\BaseBuilder`
- `CodeIgniter\Database\variables`
- `CodeIgniter\Database\variables`

**Functions/Methods**:
- `__construct($tableName, ConnectionInterface $db, ?array $options = null)`
- `db()`
- `testMode(bool $mode = true)`
- `getTable()`
- `getBinds()`
- `ignore(bool $ignore = true)`
- `select($select = '*', ?bool $escape = null)`
- `selectMax(string $select = '', string $alias = '')`
- `selectMin(string $select = '', string $alias = '')`
- `selectAvg(string $select = '', string $alias = '')`
- `selectSum(string $select = '', string $alias = '')`
- `selectCount(string $select = '', string $alias = '')`
- `selectSubquery(BaseBuilder $subquery, string $as)`
- `maxMinAvgSum(string $select = '', string $alias = '', string $type = 'MAX')`
- `createAliasFromTable(string $item)`
- `distinct(bool $val = true)`
- `from($from, bool $overwrite = false)`
- `fromSubquery(BaseBuilder $from, string $alias)`
- `join(string $table, $cond, string $type = '', ?bool $escape = null)`
- `where($key, $value = null, ?bool $escape = null)`
- `orWhere($key, $value = null, ?bool $escape = null)`
- `whereHaving(string $qbKey, $key, $value = null, string $type = 'AND ', ?bool $escape = null)`
- `whereIn(?string $key = null, $values = null, ?bool $escape = null)`
- `orWhereIn(?string $key = null, $values = null, ?bool $escape = null)`
- `whereNotIn(?string $key = null, $values = null, ?bool $escape = null)`
- `orWhereNotIn(?string $key = null, $values = null, ?bool $escape = null)`
- `havingIn(?string $key = null, $values = null, ?bool $escape = null)`
- `orHavingIn(?string $key = null, $values = null, ?bool $escape = null)`
- `havingNotIn(?string $key = null, $values = null, ?bool $escape = null)`
- `orHavingNotIn(?string $key = null, $values = null, ?bool $escape = null)`
- `_whereIn(?string $key = null, $values = null, bool $not = false, string $type = 'AND ', ?bool $escape = null, string $clause = 'QBWhere')`
- `like($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)`
- `notLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)`
- `orLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)`
- `orNotLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)`
- `havingLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)`
- `notHavingLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)`
- `orHavingLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)`
- `orNotHavingLike($field, string $match = '', string $side = 'both', ?bool $escape = null, bool $insensitiveSearch = false)`
- `_like($field, string $match = '', string $type = 'AND ', string $side = 'both', string $not = '', ?bool $escape = null, bool $insensitiveSearch = false, string $clause = 'QBWhere')`
- `_like_statement(?string $prefix, string $column, ?string $not, string $bind, bool $insensitiveSearch = false)`
- `union($union)`
- `unionAll($union)`
- `addUnionStatement($union, bool $all = false)`
- `groupStart()`
- `orGroupStart()`
- `notGroupStart()`
- `orNotGroupStart()`
- `groupEnd()`
- `havingGroupStart()`
- `orHavingGroupStart()`
- `notHavingGroupStart()`
- `orNotHavingGroupStart()`
- `havingGroupEnd()`
- `groupStartPrepare(string $not = '', string $type = 'AND ', string $clause = 'QBWhere')`
- `groupEndPrepare(string $clause = 'QBWhere')`
- `groupGetType(string $type)`
- `groupBy($by, ?bool $escape = null)`
- `having($key, $value = null, ?bool $escape = null)`
- `orHaving($key, $value = null, ?bool $escape = null)`
- `orderBy(string $orderBy, string $direction = '', ?bool $escape = null)`
- `limit(?int $value = null, ?int $offset = 0)`
- `offset(int $offset)`
- `_limit(string $sql, bool $offsetIgnore = false)`
- `set($key, $value = '', ?bool $escape = null)`
- `getSetData(bool $clean = false)`
- `getCompiledSelect(bool $reset = true)`
- `compileFinalQuery(string $sql)`
- `get(?int $limit = null, int $offset = 0, bool $reset = true)`
- `countAll(bool $reset = true)`
- `countAllResults(bool $reset = true)`
- `getCompiledQBWhere()`
- `getWhere($where = null, ?int $limit = null, ?int $offset = 0, bool $reset = true)`
- `insertBatch(?array $set = null, ?bool $escape = null, int $batchSize = 100)`
- `_insertBatch(string $table, array $keys, array $values)`
- `setInsertBatch($key, string $value = '', ?bool $escape = null)`
- `getCompiledInsert(bool $reset = true)`
- `insert(?array $set = null, ?bool $escape = null)`
- `validateInsert()`
- `_insert(string $table, array $keys, array $unescapedKeys)`
- `replace(?array $set = null)`
- `_replace(string $table, array $keys, array $values)`
- `_fromTables()`
- `getCompiledUpdate(bool $reset = true)`
- `update(?array $set = null, $where = null, ?int $limit = null)`
- `_update(string $table, array $values)`
- `validateUpdate()`
- `updateBatch(?array $set = null, ?string $index = null, int $batchSize = 100)`
- `_updateBatch(string $table, array $values, string $index)`
- `setUpdateBatch($key, string $index = '', ?bool $escape = null)`
- `emptyTable()`
- `truncate()`
- `_truncate(string $table)`
- `getCompiledDelete(bool $reset = true)`
- `delete($where = '', ?int $limit = null, bool $resetData = true)`
- `increment(string $column, int $value = 1)`
- `decrement(string $column, int $value = 1)`
- `_delete(string $table)`
- `trackAliases($table)`
- `compileSelect($selectOverride = false)`
- `compileIgnore(string $statement)`
- `compileWhereHaving(string $qbKey)`
- `compileGroupBy()`
- `compileOrderBy()`
- `unionInjection(string $sql)`
- `objectToArray($object)`
- `batchObjectToArray($object)`
- `isLiteral(string $str)`
- `resetQuery()`
- `resetRun(array $qbResetItems)`
- `resetSelect()`
- `resetWrite()`
- `hasOperator(string $str)`
- `getOperator(string $str, bool $list = false)`
- `setBind(string $key, $value = null, bool $escape = true)`
- `cleanClone()`
- `isSubquery($value)`
- `buildSubquery($builder, bool $wrapped = false, string $alias = '')`

## `system\Database\BaseConnection.php`

**Classes**:
- `CodeIgniter\Database\BaseConnection implements ConnectionInterface`
- `CodeIgniter\Database\with`

**Functions/Methods**:
- `__construct(array $params)`
- `initialize()`
- `connect(bool $persistent = false)`
- `close()`
- `_close()`
- `persistentConnect()`
- `reconnect()`
- `getConnection(?string $alias = null)`
- `setDatabase(string $databaseName)`
- `getDatabase()`
- `setPrefix(string $prefix = '')`
- `getPrefix()`
- `getPlatform()`
- `getVersion()`
- `setAliasedTables(array $aliases)`
- `addTableAlias(string $table)`
- `execute(string $sql)`
- `query(string $sql, $binds = null, bool $setEscapeFlags = true, string $queryClass = '')`
- `simpleQuery(string $sql)`
- `transOff()`
- `transStrict(bool $mode = true)`
- `transStart(bool $testMode = false)`
- `transComplete()`
- `transStatus()`
- `transBegin(bool $testMode = false)`
- `transCommit()`
- `transRollback()`
- `_transBegin()`
- `_transCommit()`
- `_transRollback()`
- `table($tableName)`
- `newQuery()`
- `prepare(Closure $func, array $options = [])`
- `getLastQuery()`
- `showLastQuery()`
- `getConnectStart()`
- `getConnectDuration(int $decimals = 6)`
- `protectIdentifiers($item, bool $prefixSingle = false, ?bool $protectIdentifiers = null, bool $fieldExists = true)`
- `escapeIdentifiers($item)`
- `prefixTable(string $table = '')`
- `affectedRows()`
- `escape($str)`
- `escapeString($str, bool $like = false)`
- `escapeLikeString($str)`
- `_escapeString(string $str)`
- `callFunction(string $functionName, ...$params)`
- `getDriverFunctionPrefix()`
- `listTables(bool $constrainByPrefix = false)`
- `tableExists(string $tableName)`
- `getFieldNames(string $table)`
- `fieldExists(string $fieldName, string $tableName)`
- `getFieldData(string $table)`
- `getIndexData(string $table)`
- `getForeignKeyData(string $table)`
- `disableForeignKeyChecks()`
- `enableForeignKeyChecks()`
- `pretend(bool $pretend = true)`
- `resetDataCache()`
- `isWriteType($sql)`
- `error()`
- `insertID()`
- `_listTables(bool $constrainByPrefix = false)`
- `_listColumns(string $table = '')`
- `_fieldData(string $table)`
- `_indexData(string $table)`
- `_foreignKeyData(string $table)`
- `__get(string $key)`
- `__isset(string $key)`

## `system\Database\BasePreparedQuery.php`

**Classes**:
- `CodeIgniter\Database\BasePreparedQuery implements PreparedQueryInterface`

**Functions/Methods**:
- `__construct(BaseConnection $db)`
- `prepare(string $sql, array $options = [], string $queryClass = Query::class)`
- `_prepare(string $sql, array $options = [])`
- `execute(...$data)`
- `_execute(array $data)`
- `_getResult()`
- `close()`
- `getQueryString()`
- `hasError()`
- `getErrorCode()`
- `getErrorMessage()`

## `system\Database\BaseResult.php`

**Classes**:
- `CodeIgniter\Database\BaseResult implements ResultInterface`
- `CodeIgniter\Database\name`
- `CodeIgniter\Database\name`
- `CodeIgniter\Database\name`
- `CodeIgniter\Database\instance`

**Functions/Methods**:
- `__construct(&$connID, &$resultID)`
- `getResult(string $type = 'object')`
- `getCustomResultObject(string $className)`
- `getResultArray()`
- `getResultObject()`
- `getRow($n = 0, string $type = 'object')`
- `getCustomRowObject(int $n, string $className)`
- `getRowArray(int $n = 0)`
- `getRowObject(int $n = 0)`
- `setRow($key, $value = null)`
- `getFirstRow(string $type = 'object')`
- `getLastRow(string $type = 'object')`
- `getNextRow(string $type = 'object')`
- `getPreviousRow(string $type = 'object')`
- `getUnbufferedRow(string $type = 'object')`
- `getNumRows()`
- `getFieldCount()`
- `getFieldNames()`
- `getFieldData()`
- `freeResult()`
- `dataSeek(int $n = 0)`
- `fetchAssoc()`
- `fetchObject(string $className = 'stdClass')`

## `system\Database\BaseUtils.php`

**Classes**:
- `CodeIgniter\Database\BaseUtils`

**Functions/Methods**:
- `__construct(ConnectionInterface $db)`
- `listDatabases()`
- `databaseExists(string $databaseName)`
- `optimizeTable(string $tableName)`
- `optimizeDatabase()`
- `repairTable(string $tableName)`
- `getCSVFromResult(ResultInterface $query, string $delim = ',', string $newline = "\n", string $enclosure = '"')`
- `getXMLFromResult(ResultInterface $query, array $params = [])`
- `backup($params = [])`
- `_backup(?array $prefs = null)`

## `system\Database\Config.php`

**Classes**:
- `CodeIgniter\Database\Config extends BaseConfig`

**Functions/Methods**:
- `connect($group = null, bool $getShared = true)`
- `getConnections()`
- `forge($group = null)`
- `utils($group = null)`
- `seeder(?string $group = null)`
- `ensureFactory()`

## `system\Database\ConnectionInterface.php`

**Functions/Methods**:
- `initialize()`
- `connect(bool $persistent = false)`
- `persistentConnect()`
- `reconnect()`
- `getConnection(?string $alias = null)`
- `setDatabase(string $databaseName)`
- `getDatabase()`
- `error()`
- `getPlatform()`
- `getVersion()`
- `query(string $sql, $binds = null)`
- `simpleQuery(string $sql)`
- `table($tableName)`
- `getLastQuery()`
- `escape($str)`
- `callFunction(string $functionName, ...$params)`
- `isWriteType($sql)`

## `system\Database\Database.php`

**Classes**:
- `CodeIgniter\Database\Database`

**Functions/Methods**:
- `load(array $params = [], string $alias = '')`
- `loadForge(ConnectionInterface $db)`
- `loadUtils(ConnectionInterface $db)`
- `parseDSN(array $params)`
- `initDriver(string $driver, string $class, $argument)`

## `system\Database\Exceptions\DatabaseException.php`

**Classes**:
- `CodeIgniter\Database\Exceptions\DatabaseException extends Error implements ExceptionInterface`

## `system\Database\Exceptions\DataException.php`

**Classes**:
- `CodeIgniter\Database\Exceptions\DataException extends RuntimeException implements ExceptionInterface`

**Functions/Methods**:
- `forInvalidMethodTriggered(string $method)`
- `forEmptyDataset(string $mode)`
- `forEmptyPrimaryKey(string $mode)`
- `forInvalidArgument(string $argument)`
- `forInvalidAllowedFields(string $model)`
- `forTableNotFound(string $table)`
- `forEmptyInputGiven(string $argument)`
- `forFindColumnHaveMultipleColumns()`

## `system\Database\Exceptions\ExceptionInterface.php`

## `system\Database\Forge.php`

**Classes**:
- `CodeIgniter\Database\transforms`
- `CodeIgniter\Database\Forge`

**Functions/Methods**:
- `__construct(BaseConnection $db)`
- `getConnection()`
- `createDatabase(string $dbName, bool $ifNotExists = false)`
- `databaseExists(string $dbName)`
- `dropDatabase(string $dbName)`
- `addKey($key, bool $primary = false, bool $unique = false)`
- `addPrimaryKey($key)`
- `addUniqueKey($key)`
- `addField($field)`
- `addForeignKey($fieldName = '', string $tableName = '', $tableField = '', string $onUpdate = '', string $onDelete = '')`
- `dropKey(string $table, string $keyName)`
- `dropForeignKey(string $table, string $foreignName)`
- `createTable(string $table, bool $ifNotExists = false, array $attributes = [])`
- `_createTable(string $table, bool $ifNotExists, array $attributes)`
- `_createTableAttributes(array $attributes)`
- `dropTable(string $tableName, bool $ifExists = false, bool $cascade = false)`
- `_dropTable(string $table, bool $ifExists, bool $cascade)`
- `renameTable(string $tableName, string $newTableName)`
- `addColumn(string $table, $field)`
- `dropColumn(string $table, $columnName)`
- `modifyColumn(string $table, $field)`
- `_alterTable(string $alterType, string $table, $fields)`
- `_processFields(bool $createTable = false)`
- `_processColumn(array $field)`
- `_attributeType(array &$attributes)`
- `_attributeUnsigned(array &$attributes, array &$field)`
- `_attributeDefault(array &$attributes, array &$field)`
- `_attributeUnique(array &$attributes, array &$field)`
- `_attributeAutoIncrement(array &$attributes, array &$field)`
- `_processPrimaryKeys(string $table)`
- `_processIndexes(string $table)`
- `_processForeignKeys(string $table)`
- `reset()`

## `system\Database\Migration.php`

**Classes**:
- `CodeIgniter\Database\Migration`

**Functions/Methods**:
- `__construct(?Forge $forge = null)`
- `getDBGroup()`
- `up()`
- `down()`

## `system\Database\MigrationRunner.php`

**Classes**:
- `CodeIgniter\Database\MigrationRunner`
- `CodeIgniter\Database\name`

**Functions/Methods**:
- `__construct(MigrationsConfig $config, $db = null)`
- `latest(?string $group = null)`
- `regress(int $targetBatch = 0, ?string $group = null)`
- `force(string $path, string $namespace, ?string $group = null)`
- `findMigrations()`
- `findNamespaceMigrations(string $namespace)`
- `migrationFromFile(string $path, string $namespace)`
- `setNamespace(?string $namespace)`
- `setGroup(string $group)`
- `setName(string $name)`
- `setSilent(bool $silent)`
- `getMigrationNumber(string $migration)`
- `getMigrationName(string $migration)`
- `getObjectUid($object)`
- `getCliMessages()`
- `clearCliMessages()`
- `clearHistory()`
- `addHistory($migration, int $batch)`
- `removeHistory($history)`
- `getHistory(string $group = 'default')`
- `getBatchHistory(int $batch, $order = 'asc')`
- `getBatches()`
- `getLastBatch()`
- `getBatchStart(int $batch)`
- `getBatchEnd(int $batch)`
- `ensureTable()`
- `migrate($direction, $migration)`

## `system\Database\ModelFactory.php`

**Classes**:
- `CodeIgniter\Database\ModelFactory`

**Functions/Methods**:
- `get(string $name, bool $getShared = true, ?ConnectionInterface $connection = null)`
- `injectMock(string $name, $instance)`
- `reset()`

## `system\Database\MySQLi\Builder.php`

**Classes**:
- `CodeIgniter\Database\MySQLi\Builder extends BaseBuilder`

**Functions/Methods**:
- `_fromTables()`

## `system\Database\MySQLi\Connection.php`

**Classes**:
- `CodeIgniter\Database\MySQLi\Connection extends BaseConnection`

**Functions/Methods**:
- `connect(bool $persistent = false)`
- `reconnect()`
- `_close()`
- `setDatabase(string $databaseName)`
- `getVersion()`
- `execute(string $sql)`
- `prepQuery(string $sql)`
- `affectedRows()`
- `_escapeString(string $str)`
- `escapeLikeStringDirect($str)`
- `_listTables(bool $prefixLimit = false)`
- `_listColumns(string $table = '')`
- `_fieldData(string $table)`
- `_indexData(string $table)`
- `_foreignKeyData(string $table)`
- `_disableForeignKeyChecks()`
- `_enableForeignKeyChecks()`
- `error()`
- `insertID()`
- `_transBegin()`
- `_transCommit()`
- `_transRollback()`

## `system\Database\MySQLi\Forge.php`

**Classes**:
- `CodeIgniter\Database\MySQLi\Forge extends BaseForge`

**Functions/Methods**:
- `_createTableAttributes(array $attributes)`
- `_alterTable(string $alterType, string $table, $field)`
- `_processColumn(array $field)`
- `_processIndexes(string $table)`
- `dropKey(string $table, string $keyName)`

## `system\Database\MySQLi\PreparedQuery.php`

**Classes**:
- `CodeIgniter\Database\MySQLi\PreparedQuery extends BasePreparedQuery`

**Functions/Methods**:
- `_prepare(string $sql, array $options = [])`
- `_execute(array $data)`
- `_getResult()`

## `system\Database\MySQLi\Result.php`

**Classes**:
- `CodeIgniter\Database\MySQLi\Result extends BaseResult`

**Functions/Methods**:
- `getFieldCount()`
- `getFieldNames()`
- `getFieldData()`
- `freeResult()`
- `dataSeek(int $n = 0)`
- `fetchAssoc()`
- `fetchObject(string $className = 'stdClass')`
- `getNumRows()`

## `system\Database\MySQLi\Utils.php`

**Classes**:
- `CodeIgniter\Database\MySQLi\Utils extends BaseUtils`

**Functions/Methods**:
- `_backup(?array $prefs = null)`

## `system\Database\OCI8\Builder.php`

**Classes**:
- `CodeIgniter\Database\OCI8\Builder extends BaseBuilder`

**Functions/Methods**:
- `_insertBatch(string $table, array $keys, array $values)`
- `_replace(string $table, array $keys, array $values)`
- `_truncate(string $table)`
- `delete($where = '', ?int $limit = null, bool $resetData = true)`
- `_delete(string $table)`
- `_update(string $table, array $values)`
- `_limit(string $sql, bool $offsetIgnore = false)`
- `resetSelect()`

## `system\Database\OCI8\Connection.php`

**Classes**:
- `CodeIgniter\Database\OCI8\Connection extends BaseConnection implements ConnectionInterface`

**Functions/Methods**:
- `isValidDSN()`
- `connect(bool $persistent = false)`
- `reconnect()`
- `_close()`
- `setDatabase(string $databaseName)`
- `getVersion()`
- `execute(string $sql)`
- `parseInsertTableName(string $sql)`
- `affectedRows()`
- `_listTables(bool $prefixLimit = false)`
- `_listColumns(string $table = '')`
- `_fieldData(string $table)`
- `_indexData(string $table)`
- `_foreignKeyData(string $table)`
- `_disableForeignKeyChecks()`
- `_enableForeignKeyChecks()`
- `getCursor()`
- `storedProcedure(string $procedureName, array $params)`
- `bindParams($params)`
- `error()`
- `insertID()`
- `buildDSN()`
- `_transBegin()`
- `_transCommit()`
- `_transRollback()`
- `getDatabase()`
- `getDriverFunctionPrefix()`

## `system\Database\OCI8\Forge.php`

**Classes**:
- `CodeIgniter\Database\OCI8\Forge extends BaseForge`

**Functions/Methods**:
- `_alterTable(string $alterType, string $table, $field)`
- `_attributeAutoIncrement(array &$attributes, array &$field)`
- `_processColumn(array $field)`
- `_attributeType(array &$attributes)`
- `_dropTable(string $table, bool $ifExists, bool $cascade)`
- `_processForeignKeys(string $table)`

## `system\Database\OCI8\PreparedQuery.php`

**Classes**:
- `CodeIgniter\Database\OCI8\PreparedQuery extends BasePreparedQuery implements PreparedQueryInterface`

**Functions/Methods**:
- `_prepare(string $sql, array $options = [])`
- `_execute(array $data)`
- `_getResult()`
- `parameterize(string $sql)`

## `system\Database\OCI8\Result.php`

**Classes**:
- `CodeIgniter\Database\OCI8\Result extends BaseResult implements ResultInterface`

**Functions/Methods**:
- `getFieldCount()`
- `getFieldNames()`
- `getFieldData()`
- `freeResult()`
- `dataSeek(int $n = 0)`
- `fetchAssoc()`
- `fetchObject(string $className = 'stdClass')`

## `system\Database\OCI8\Utils.php`

**Classes**:
- `CodeIgniter\Database\OCI8\Utils extends BaseUtils`

**Functions/Methods**:
- `_backup(?array $prefs = null)`

## `system\Database\Postgre\Builder.php`

**Classes**:
- `CodeIgniter\Database\Postgre\Builder extends BaseBuilder`

**Functions/Methods**:
- `compileIgnore(string $statement)`
- `orderBy(string $orderBy, string $direction = '', ?bool $escape = null)`
- `increment(string $column, int $value = 1)`
- `decrement(string $column, int $value = 1)`
- `replace(?array $set = null)`
- `_insert(string $table, array $keys, array $unescapedKeys)`
- `_insertBatch(string $table, array $keys, array $values)`
- `delete($where = '', ?int $limit = null, bool $resetData = true)`
- `_limit(string $sql, bool $offsetIgnore = false)`
- `_update(string $table, array $values)`
- `_updateBatch(string $table, array $values, string $index)`
- `_delete(string $table)`
- `_truncate(string $table)`
- `_like_statement(?string $prefix, string $column, ?string $not, string $bind, bool $insensitiveSearch = false)`
- `join(string $table, $cond, string $type = '', ?bool $escape = null)`

## `system\Database\Postgre\Connection.php`

**Classes**:
- `CodeIgniter\Database\Postgre\Connection extends BaseConnection`

**Functions/Methods**:
- `connect(bool $persistent = false)`
- `reconnect()`
- `_close()`
- `setDatabase(string $databaseName)`
- `getVersion()`
- `execute(string $sql)`
- `getDriverFunctionPrefix()`
- `affectedRows()`
- `escape($str)`
- `_escapeString(string $str)`
- `_listTables(bool $prefixLimit = false)`
- `_listColumns(string $table = '')`
- `_fieldData(string $table)`
- `_indexData(string $table)`
- `_foreignKeyData(string $table)`
- `_disableForeignKeyChecks()`
- `_enableForeignKeyChecks()`
- `error()`
- `insertID()`
- `buildDSN()`
- `setClientEncoding(string $charset)`
- `_transBegin()`
- `_transCommit()`
- `_transRollback()`
- `isWriteType($sql)`

## `system\Database\Postgre\Forge.php`

**Classes**:
- `CodeIgniter\Database\Postgre\Forge extends BaseForge`

**Functions/Methods**:
- `_createTableAttributes(array $attributes)`
- `_alterTable(string $alterType, string $table, $field)`
- `_processColumn(array $field)`
- `_attributeType(array &$attributes)`
- `_attributeAutoIncrement(array &$attributes, array &$field)`
- `_dropTable(string $table, bool $ifExists, bool $cascade)`

## `system\Database\Postgre\PreparedQuery.php`

**Classes**:
- `CodeIgniter\Database\Postgre\PreparedQuery extends BasePreparedQuery`

**Functions/Methods**:
- `_prepare(string $sql, array $options = [])`
- `_execute(array $data)`
- `_getResult()`
- `parameterize(string $sql)`

## `system\Database\Postgre\Result.php`

**Classes**:
- `CodeIgniter\Database\Postgre\Result extends BaseResult`

**Functions/Methods**:
- `getFieldCount()`
- `getFieldNames()`
- `getFieldData()`
- `freeResult()`
- `dataSeek(int $n = 0)`
- `fetchAssoc()`
- `fetchObject(string $className = 'stdClass')`
- `getNumRows()`

## `system\Database\Postgre\Utils.php`

**Classes**:
- `CodeIgniter\Database\Postgre\Utils extends BaseUtils`

**Functions/Methods**:
- `_backup(?array $prefs = null)`

## `system\Database\PreparedQueryInterface.php`

**Functions/Methods**:
- `execute(...$data)`
- `prepare(string $sql, array $options = [])`
- `close()`
- `getQueryString()`
- `getErrorCode()`
- `getErrorMessage()`

## `system\Database\Query.php`

**Classes**:
- `CodeIgniter\Database\Query implements QueryInterface`

**Functions/Methods**:
- `__construct(ConnectionInterface $db)`
- `setQuery(string $sql, $binds = null, bool $setEscape = true)`
- `setBinds(array $binds, bool $setEscape = true)`
- `getQuery()`
- `setDuration(float $start, ?float $end = null)`
- `getStartTime(bool $returnRaw = false, int $decimals = 6)`
- `getDuration(int $decimals = 6)`
- `setError(int $code, string $error)`
- `hasError()`
- `getErrorCode()`
- `getErrorMessage()`
- `isWriteType()`
- `swapPrefix(string $orig, string $swap)`
- `getOriginalQuery()`
- `compileBinds()`
- `matchNamedBinds(string $sql, array $binds)`
- `matchSimpleBinds(string $sql, array $binds, int $bindCount, int $ml)`
- `debugToolbarDisplay()`
- `__toString()`

## `system\Database\QueryInterface.php`

**Functions/Methods**:
- `setQuery(string $sql, $binds = null, bool $setEscape = true)`
- `getQuery()`
- `setDuration(float $start, ?float $end = null)`
- `getDuration(int $decimals = 6)`
- `setError(int $code, string $error)`
- `hasError()`
- `getErrorCode()`
- `getErrorMessage()`
- `isWriteType()`
- `swapPrefix(string $orig, string $swap)`

## `system\Database\RawSql.php`

**Classes**:
- `CodeIgniter\Database\RawSql`

**Functions/Methods**:
- `__construct(string $sqlString)`
- `__toString()`
- `with(string $newSqlString)`
- `getBindingKey()`

## `system\Database\ResultInterface.php`

**Classes**:
- `CodeIgniter\Database\name`
- `CodeIgniter\Database\name`
- `CodeIgniter\Database\to`
- `CodeIgniter\Database\name`
- `CodeIgniter\Database\instance`

**Functions/Methods**:
- `getResult(string $type = 'object')`
- `getCustomResultObject(string $className)`
- `getResultArray()`
- `getResultObject()`
- `getRow($n = 0, string $type = 'object')`
- `getCustomRowObject(int $n, string $className)`
- `getRowArray(int $n = 0)`
- `getRowObject(int $n = 0)`
- `setRow($key, $value = null)`
- `getFirstRow(string $type = 'object')`
- `getLastRow(string $type = 'object')`
- `getNextRow(string $type = 'object')`
- `getPreviousRow(string $type = 'object')`
- `getUnbufferedRow(string $type = 'object')`
- `getFieldCount()`
- `getFieldNames()`
- `getFieldData()`
- `freeResult()`
- `dataSeek(int $n = 0)`

## `system\Database\Seeder.php`

**Classes**:
- `CodeIgniter\Database\Seeder`
- `CodeIgniter\Database\has`

**Functions/Methods**:
- `__construct(Database $config, ?BaseConnection $db = null)`
- `faker()`
- `call(string $class)`
- `setPath(string $path)`
- `setSilent(bool $silent)`
- `run()`

## `system\Database\SQLite3\Builder.php`

**Classes**:
- `CodeIgniter\Database\SQLite3\Builder extends BaseBuilder`

**Functions/Methods**:
- `_replace(string $table, array $keys, array $values)`
- `_truncate(string $table)`

## `system\Database\SQLite3\Connection.php`

**Classes**:
- `CodeIgniter\Database\SQLite3\Connection extends BaseConnection`

**Functions/Methods**:
- `initialize()`
- `connect(bool $persistent = false)`
- `reconnect()`
- `_close()`
- `setDatabase(string $databaseName)`
- `getVersion()`
- `execute(string $sql)`
- `affectedRows()`
- `_escapeString(string $str)`
- `_listTables(bool $prefixLimit = false)`
- `_listColumns(string $table = '')`
- `getFieldNames(string $table)`
- `_fieldData(string $table)`
- `_indexData(string $table)`
- `_foreignKeyData(string $table)`
- `_disableForeignKeyChecks()`
- `_enableForeignKeyChecks()`
- `error()`
- `insertID()`
- `_transBegin()`
- `_transCommit()`
- `_transRollback()`
- `supportsForeignKeys()`

## `system\Database\SQLite3\Forge.php`

**Classes**:
- `CodeIgniter\Database\SQLite3\Forge extends BaseForge`

**Functions/Methods**:
- `__construct(BaseConnection $db)`
- `createDatabase(string $dbName, bool $ifNotExists = false)`
- `dropDatabase(string $dbName)`
- `_alterTable(string $alterType, string $table, $field)`
- `_processColumn(array $field)`
- `_processIndexes(string $table)`
- `_attributeType(array &$attributes)`
- `_attributeAutoIncrement(array &$attributes, array &$field)`
- `dropForeignKey(string $table, string $foreignName)`

## `system\Database\SQLite3\PreparedQuery.php`

**Classes**:
- `CodeIgniter\Database\SQLite3\PreparedQuery extends BasePreparedQuery`

**Functions/Methods**:
- `_prepare(string $sql, array $options = [])`
- `_execute(array $data)`
- `_getResult()`

## `system\Database\SQLite3\Result.php`

**Classes**:
- `CodeIgniter\Database\SQLite3\Result extends BaseResult`

**Functions/Methods**:
- `getFieldCount()`
- `getFieldNames()`
- `getFieldData()`
- `freeResult()`
- `dataSeek(int $n = 0)`
- `fetchAssoc()`
- `fetchObject(string $className = 'stdClass')`

## `system\Database\SQLite3\Table.php`

**Classes**:
- `CodeIgniter\Database\SQLite3\Table`

**Functions/Methods**:
- `__construct(Connection $db, Forge $forge)`
- `fromTable(string $table)`
- `run()`
- `dropColumn($columns)`
- `modifyColumn(array $field)`
- `dropForeignKey(string $column)`
- `createTable()`
- `copyData()`
- `formatFields($fields)`
- `formatKeys($keys)`
- `dropIndexes()`

## `system\Database\SQLite3\Utils.php`

**Classes**:
- `CodeIgniter\Database\SQLite3\Utils extends BaseUtils`

**Functions/Methods**:
- `_backup(?array $prefs = null)`

## `system\Database\SQLSRV\Builder.php`

**Classes**:
- `CodeIgniter\Database\SQLSRV\Builder extends BaseBuilder`

**Functions/Methods**:
- `_fromTables()`
- `_truncate(string $table)`
- `join(string $table, $cond, string $type = '', ?bool $escape = null)`
- `_insert(string $table, array $keys, array $unescapedKeys)`
- `_insertBatch(string $table, array $keys, array $values)`
- `_update(string $table, array $values)`
- `_updateBatch(string $table, array $values, string $index)`
- `increment(string $column, int $value = 1)`
- `decrement(string $column, int $value = 1)`
- `getFullName(string $table)`
- `addIdentity(string $fullTable, string $insert)`
- `_limit(string $sql, bool $offsetIgnore = false)`
- `replace(?array $set = null)`
- `_replace(string $table, array $keys, array $values)`
- `maxMinAvgSum(string $select = '', string $alias = '', string $type = 'MAX')`
- `countAll(bool $reset = true)`
- `_delete(string $table)`
- `delete($where = '', ?int $limit = null, bool $resetData = true)`
- `compileSelect($selectOverride = false)`
- `get(?int $limit = null, int $offset = 0, bool $reset = true)`

## `system\Database\SQLSRV\Connection.php`

**Classes**:
- `CodeIgniter\Database\SQLSRV\Connection extends BaseConnection`

**Functions/Methods**:
- `__construct(array $params)`
- `connect(bool $persistent = false)`
- `reconnect()`
- `_close()`
- `_escapeString(string $str)`
- `insertID()`
- `_listTables(bool $prefixLimit = false)`
- `_listColumns(string $table = '')`
- `_indexData(string $table)`
- `_foreignKeyData(string $table)`
- `_disableForeignKeyChecks()`
- `_enableForeignKeyChecks()`
- `_fieldData(string $table)`
- `_transBegin()`
- `_transCommit()`
- `_transRollback()`
- `error()`
- `affectedRows()`
- `setDatabase(?string $databaseName = null)`
- `execute(string $sql)`
- `getError()`
- `getPlatform()`
- `getVersion()`
- `isWriteType($sql)`

## `system\Database\SQLSRV\Forge.php`

**Classes**:
- `CodeIgniter\Database\SQLSRV\Forge extends BaseForge`

**Functions/Methods**:
- `__construct(BaseConnection $db)`
- `_createTableAttributes(array $attributes)`
- `_alterTable(string $alterType, string $table, $field)`
- `_dropIndex(string $table, object $indexData)`
- `_processIndexes(string $table)`
- `_processColumn(array $field)`
- `_processForeignKeys(string $table)`
- `_processPrimaryKeys(string $table)`
- `_attributeType(array &$attributes)`
- `_attributeAutoIncrement(array &$attributes, array &$field)`
- `_dropTable(string $table, bool $ifExists, bool $cascade)`

## `system\Database\SQLSRV\PreparedQuery.php`

**Classes**:
- `CodeIgniter\Database\SQLSRV\PreparedQuery extends BasePreparedQuery`

**Functions/Methods**:
- `_prepare(string $sql, array $options = [])`
- `_execute(array $data)`
- `_getResult()`
- `parameterize(string $queryString)`

## `system\Database\SQLSRV\Result.php`

**Classes**:
- `CodeIgniter\Database\SQLSRV\Result extends BaseResult`

**Functions/Methods**:
- `getFieldCount()`
- `getFieldNames()`
- `getFieldData()`
- `freeResult()`
- `dataSeek(int $n = 0)`
- `fetchAssoc()`
- `fetchObject(string $className = 'stdClass')`
- `getNumRows()`

## `system\Database\SQLSRV\Utils.php`

**Classes**:
- `CodeIgniter\Database\SQLSRV\Utils extends BaseUtils`

**Functions/Methods**:
- `__construct(ConnectionInterface $db)`
- `_backup(?array $prefs = null)`

## `system\Debug\Exceptions.php`

**Classes**:
- `CodeIgniter\Debug\Exceptions`

**Functions/Methods**:
- `__construct(ExceptionsConfig $config, IncomingRequest $request, Response $response)`
- `initialize()`
- `exceptionHandler(Throwable $exception)`
- `errorHandler(int $severity, string $message, ?string $file = null, ?int $line = null)`
- `shutdownHandler()`
- `determineView(Throwable $exception, string $templatePath)`
- `render(Throwable $exception, int $statusCode)`
- `collectVars(Throwable $exception, int $statusCode)`
- `maskSensitiveData(&$trace, array $keysToMask, string $path = '')`
- `determineCodes(Throwable $exception)`
- `cleanPath(string $file)`
- `describeMemory(int $bytes)`
- `highlightFile(string $file, int $lineNumber, int $lines = 15)`
- `renderBacktrace(array $backtrace)`

## `system\Debug\Iterator.php`

**Classes**:
- `CodeIgniter\Debug\Iterator`

**Functions/Methods**:
- `add(string $name, Closure $closure)`
- `run(int $iterations = 1000, bool $output = true)`
- `getReport()`

## `system\Debug\Kint\RichRenderer.php`

**Classes**:
- `CodeIgniter\Debug\Kint\RichRenderer extends KintRichRenderer`

**Functions/Methods**:
- `preRender()`

## `system\Debug\Timer.php`

**Classes**:
- `CodeIgniter\Debug\Timer`

**Functions/Methods**:
- `start(string $name, ?float $time = null)`
- `stop(string $name)`
- `getElapsedTime(string $name, int $decimals = 4)`
- `getTimers(int $decimals = 4)`
- `has(string $name)`

## `system\Debug\Toolbar.php`

**Classes**:
- `CodeIgniter\Debug\Toolbar`

**Functions/Methods**:
- `__construct(ToolbarConfig $config)`
- `run(float $startTime, float $totalTime, RequestInterface $request, ResponseInterface $response)`
- `renderTimeline(array $collectors, float $startTime, int $segmentCount, int $segmentDuration, array &$styles)`
- `renderTimelineRecursive(array $rows, float $startTime, int $segmentCount, int $segmentDuration, array &$styles, int &$styleCount, int $level = 0, bool $isChild = false)`
- `collectTimelineData($collectors)`
- `structureTimelineData(array $elements)`
- `collectVarData()`
- `roundTo(float $number, int $increments = 5)`
- `prepare(?RequestInterface $request = null, ?ResponseInterface $response = null)`
- `respond()`
- `format(string $data, string $format = 'html')`

## `system\Debug\Toolbar\Collectors\BaseCollector.php`

**Classes**:
- `CodeIgniter\Debug\Toolbar\Collectors\BaseCollector`

**Functions/Methods**:
- `getTitle(bool $safe = false)`
- `getTitleDetails()`
- `hasTabContent()`
- `hasLabel()`
- `hasTimelineData()`
- `timelineData()`
- `hasVarData()`
- `getVarData()`
- `formatTimelineData()`
- `display()`
- `cleanPath(string $file)`
- `getBadgeValue()`
- `isEmpty()`
- `icon()`
- `getAsArray()`

## `system\Debug\Toolbar\Collectors\Config.php`

**Classes**:
- `CodeIgniter\Debug\Toolbar\Collectors\Config`

**Functions/Methods**:
- `display()`

## `system\Debug\Toolbar\Collectors\Database.php`

**Classes**:
- `CodeIgniter\Debug\Toolbar\Collectors\Database extends BaseCollector`

**Functions/Methods**:
- `__construct()`
- `collect(Query $query)`
- `formatTimelineData()`
- `display()`
- `getBadgeValue()`
- `getTitleDetails()`
- `isEmpty()`
- `icon()`
- `getConnections()`

## `system\Debug\Toolbar\Collectors\Events.php`

**Classes**:
- `CodeIgniter\Debug\Toolbar\Collectors\Events extends BaseCollector`

**Functions/Methods**:
- `__construct()`
- `formatTimelineData()`
- `display()`
- `getBadgeValue()`
- `icon()`

## `system\Debug\Toolbar\Collectors\Files.php`

**Classes**:
- `CodeIgniter\Debug\Toolbar\Collectors\Files extends BaseCollector`

**Functions/Methods**:
- `getTitleDetails()`
- `display()`
- `getBadgeValue()`
- `icon()`

## `system\Debug\Toolbar\Collectors\History.php`

**Classes**:
- `CodeIgniter\Debug\Toolbar\Collectors\History extends BaseCollector`

**Functions/Methods**:
- `setFiles(string $current, int $limit = 20)`
- `display()`
- `getBadgeValue()`
- `isEmpty()`
- `icon()`

## `system\Debug\Toolbar\Collectors\Logs.php`

**Classes**:
- `CodeIgniter\Debug\Toolbar\Collectors\Logs extends BaseCollector`

**Functions/Methods**:
- `display()`
- `isEmpty()`
- `icon()`
- `collectLogs()`

## `system\Debug\Toolbar\Collectors\Routes.php`

**Classes**:
- `CodeIgniter\Debug\Toolbar\Collectors\Routes extends BaseCollector`

**Functions/Methods**:
- `display()`
- `getBadgeValue()`
- `icon()`

## `system\Debug\Toolbar\Collectors\Timers.php`

**Classes**:
- `CodeIgniter\Debug\Toolbar\Collectors\Timers extends BaseCollector`

**Functions/Methods**:
- `formatTimelineData()`

## `system\Debug\Toolbar\Collectors\Views.php`

**Classes**:
- `CodeIgniter\Debug\Toolbar\Collectors\Views extends BaseCollector`

**Functions/Methods**:
- `__construct()`
- `formatTimelineData()`
- `getVarData()`
- `getBadgeValue()`
- `icon()`

## `system\Debug\Toolbar\Views\toolbar.tpl.php`

## `system\Debug\Toolbar\Views\toolbarloader.js.php`

**Functions/Methods**:
- `loadDoc(time)`
- `newXHR()`

## `system\Email\Email.php`

**Classes**:
- `CodeIgniter\Email\Email`
- `CodeIgniter\Email\property`

**Functions/Methods**:
- `__construct($config = null)`
- `initialize($config)`
- `clear($clearAttachments = false)`
- `setFrom($from, $name = '', $returnPath = null)`
- `setReplyTo($replyto, $name = '')`
- `setTo($to)`
- `setCC($cc)`
- `setBCC($bcc, $limit = '')`
- `setSubject($subject)`
- `setMessage($body)`
- `attach($file, $disposition = '', $newname = null, $mime = '')`
- `setAttachmentCID($filename)`
- `setHeader($header, $value)`
- `stringToArray($email)`
- `setAltMessage($str)`
- `setMailType($type = 'text')`
- `setWordWrap($wordWrap = true)`
- `setProtocol($protocol = 'mail')`
- `setPriority($n = 3)`
- `setNewline($newline = "\n")`
- `setCRLF($CRLF = "\n")`
- `getMessageID()`
- `getProtocol()`
- `getEncoding()`
- `getContentType()`
- `setDate()`
- `getMimeMessage()`
- `validateEmail($email)`
- `isValidEmail($email)`
- `cleanEmail($email)`
- `getAltMessage()`
- `wordWrap($str, $charlim = null)`
- `buildHeaders()`
- `writeHeaders()`
- `buildMessage()`
- `attachmentsHaveMultipart($type)`
- `appendAttachments(&$body, $boundary, $multipart = null)`
- `prepQuotedPrintable($str)`
- `prepQEncoding($str)`
- `send($autoClear = true)`
- `batchBCCSend()`
- `unwrapSpecials()`
- `removeNLCallback($matches)`
- `spoolEmail()`
- `validateEmailForShell(&$email)`
- `sendWithMail()`
- `sendWithSendmail()`
- `sendWithSmtp()`
- `SMTPEnd()`
- `SMTPConnect()`
- `sendCommand($cmd, $data = '')`
- `SMTPAuthenticate()`
- `sendData($data)`
- `getSMTPData()`
- `getHostname()`
- `printDebugger($include = ['headers', 'subject', 'body'])`
- `setErrorMessage($msg)`
- `mimeTypes($ext = '')`
- `__destruct()`
- `strlen($str)`
- `substr($str, $start, $length = null)`
- `setArchiveValues()`

## `system\Encryption\EncrypterInterface.php`

**Functions/Methods**:
- `encrypt($data, $params = null)`
- `decrypt($data, $params = null)`

## `system\Encryption\Encryption.php`

**Classes**:
- `CodeIgniter\Encryption\determines`
- `CodeIgniter\Encryption\Encryption`

**Functions/Methods**:
- `__construct(?EncryptionConfig $config = null)`
- `initialize(?EncryptionConfig $config = null)`
- `createKey($length = 32)`
- `__get($key)`
- `__isset($key)`

## `system\Encryption\Exceptions\EncryptionException.php`

**Classes**:
- `CodeIgniter\Encryption\Exceptions\EncryptionException extends RuntimeException implements ExceptionInterface`

**Functions/Methods**:
- `forNoDriverRequested()`
- `forNoHandlerAvailable(string $handler)`
- `forUnKnownHandler(?string $driver = null)`
- `forNeedsStarterKey()`
- `forAuthenticationFailed()`
- `forEncryptionFailed()`

## `system\Encryption\Handlers\BaseHandler.php`

**Classes**:
- `CodeIgniter\Encryption\Handlers\for`
- `CodeIgniter\Encryption\Handlers\BaseHandler implements EncrypterInterface`

**Functions/Methods**:
- `__construct(?Encryption $config = null)`
- `substr($str, $start, $length = null)`
- `__get($key)`
- `__isset($key)`

## `system\Encryption\Handlers\OpenSSLHandler.php`

**Classes**:
- `CodeIgniter\Encryption\Handlers\OpenSSLHandler extends BaseHandler`

**Functions/Methods**:
- `encrypt($data, $params = null)`
- `decrypt($data, $params = null)`

## `system\Encryption\Handlers\SodiumHandler.php`

**Classes**:
- `CodeIgniter\Encryption\Handlers\SodiumHandler extends BaseHandler`

**Functions/Methods**:
- `encrypt($data, $params = null)`
- `decrypt($data, $params = null)`
- `parseParams($params)`

## `system\Entity.php`

**Classes**:
- `CodeIgniter\instead`
- `CodeIgniter\Entity extends CoreEntity`

## `system\Entity\Cast\ArrayCast.php`

**Classes**:
- `CodeIgniter\Entity\Cast\ArrayCast extends BaseCast`

**Functions/Methods**:
- `get($value, array $params = [])`
- `set($value, array $params = [])`

## `system\Entity\Cast\BaseCast.php`

**Classes**:
- `CodeIgniter\Entity\Cast\BaseCast implements CastInterface`

**Functions/Methods**:
- `get($value, array $params = [])`
- `set($value, array $params = [])`

## `system\Entity\Cast\BooleanCast.php`

**Classes**:
- `CodeIgniter\Entity\Cast\BooleanCast extends BaseCast`

**Functions/Methods**:
- `get($value, array $params = [])`

## `system\Entity\Cast\CastInterface.php`

**Functions/Methods**:
- `get($value, array $params = [])`
- `set($value, array $params = [])`

## `system\Entity\Cast\CSVCast.php`

**Classes**:
- `CodeIgniter\Entity\Cast\CSVCast extends BaseCast`

**Functions/Methods**:
- `get($value, array $params = [])`
- `set($value, array $params = [])`

## `system\Entity\Cast\DatetimeCast.php`

**Classes**:
- `CodeIgniter\Entity\Cast\DatetimeCast extends BaseCast`

**Functions/Methods**:
- `get($value, array $params = [])`

## `system\Entity\Cast\FloatCast.php`

**Classes**:
- `CodeIgniter\Entity\Cast\FloatCast extends BaseCast`

**Functions/Methods**:
- `get($value, array $params = [])`

## `system\Entity\Cast\IntegerCast.php`

**Classes**:
- `CodeIgniter\Entity\Cast\IntegerCast extends BaseCast`

**Functions/Methods**:
- `get($value, array $params = [])`

## `system\Entity\Cast\JsonCast.php`

**Classes**:
- `CodeIgniter\Entity\Cast\JsonCast extends BaseCast`

**Functions/Methods**:
- `get($value, array $params = [])`
- `set($value, array $params = [])`

## `system\Entity\Cast\ObjectCast.php`

**Classes**:
- `CodeIgniter\Entity\Cast\ObjectCast extends BaseCast`

**Functions/Methods**:
- `get($value, array $params = [])`

## `system\Entity\Cast\StringCast.php`

**Classes**:
- `CodeIgniter\Entity\Cast\StringCast extends BaseCast`

**Functions/Methods**:
- `get($value, array $params = [])`

## `system\Entity\Cast\TimestampCast.php`

**Classes**:
- `CodeIgniter\Entity\Cast\TimestampCast extends BaseCast`

**Functions/Methods**:
- `get($value, array $params = [])`

## `system\Entity\Cast\URICast.php`

**Classes**:
- `CodeIgniter\Entity\Cast\URICast extends BaseCast`

**Functions/Methods**:
- `get($value, array $params = [])`

## `system\Entity\Entity.php`

**Classes**:
- `CodeIgniter\Entity\Entity implements JsonSerializable`
- `CodeIgniter\Entity\vars`
- `CodeIgniter\Entity\vars`
- `CodeIgniter\Entity\properties`
- `CodeIgniter\Entity\properties`
- `CodeIgniter\Entity\properties`

**Functions/Methods**:
- `__construct(?array $data = null)`
- `fill(?array $data = null)`
- `toArray(bool $onlyChanged = false, bool $cast = true, bool $recursive = false)`
- `toRawArray(bool $onlyChanged = false, bool $recursive = false)`
- `syncOriginal()`
- `hasChanged(?string $key = null)`
- `setAttributes(array $data)`
- `mapProperty(string $key)`
- `mutateDate($value)`
- `castAs($value, string $attribute, string $method = 'get')`
- `jsonSerialize()`
- `cast(?bool $cast = null)`
- `__set(string $key, $value = null)`
- `__get(string $key)`
- `__isset(string $key)`
- `__unset(string $key)`
- `isMappedDbColumn(string $key)`
- `hasMappedProperty(string $key)`

## `system\Entity\Exceptions\CastException.php`

**Classes**:
- `CodeIgniter\Entity\Exceptions\CastException extends FrameworkException`
- `CodeIgniter\Entity\Exceptions\does`

**Functions/Methods**:
- `forInvalidInterface(string $class)`
- `forInvalidJsonFormat(int $error)`
- `forInvalidMethod(string $method)`
- `forInvalidTimestamp()`

## `system\Events\Events.php`

**Classes**:
- `CodeIgniter\Events\Events`

**Functions/Methods**:
- `initialize()`
- `on($eventName, $callback, $priority = self::PRIORITY_NORMAL)`
- `trigger($eventName, ...$arguments)`
- `listeners($eventName)`
- `removeListener($eventName, callable $listener)`
- `removeAllListeners($eventName = null)`
- `setFiles(array $files)`
- `getFiles()`
- `simulate(bool $choice = true)`
- `getPerformanceLogs()`

## `system\Exceptions\AlertError.php`

**Classes**:
- `CodeIgniter\Exceptions\AlertError extends Error`

## `system\Exceptions\CastException.php`

**Classes**:
- `CodeIgniter\Exceptions\CastException extends CriticalError`

**Functions/Methods**:
- `forInvalidJsonFormatException(int $error)`

## `system\Exceptions\ConfigException.php`

**Classes**:
- `CodeIgniter\Exceptions\ConfigException extends CriticalError`

**Functions/Methods**:
- `forDisabledMigrations()`

## `system\Exceptions\CriticalError.php`

**Classes**:
- `CodeIgniter\Exceptions\CriticalError extends Error`

## `system\Exceptions\DebugTraceableTrait.php`

**Functions/Methods**:
- `__construct(string $message = '', int $code = 0, ?Throwable $previous = null)`

## `system\Exceptions\DownloadException.php`

**Classes**:
- `CodeIgniter\Exceptions\DownloadException extends RuntimeException implements ExceptionInterface`

**Functions/Methods**:
- `forCannotSetFilePath(string $path)`
- `forCannotSetBinary()`
- `forNotFoundDownloadSource()`
- `forCannotSetCache()`
- `forCannotSetStatusCode(int $code, string $reason)`

## `system\Exceptions\EmergencyError.php`

**Classes**:
- `CodeIgniter\Exceptions\EmergencyError extends Error`

## `system\Exceptions\ExceptionInterface.php`

## `system\Exceptions\FrameworkException.php`

**Classes**:
- `CodeIgniter\Exceptions\FrameworkException extends RuntimeException implements ExceptionInterface`

**Functions/Methods**:
- `forEnabledZlibOutputCompression()`
- `forInvalidFile(string $path)`
- `forCopyError(string $path)`
- `forMissingExtension(string $extension)`
- `forNoHandlers(string $class)`
- `forFabricatorCreateFailed(string $table, string $reason)`

## `system\Exceptions\ModelException.php`

**Classes**:
- `CodeIgniter\Exceptions\ModelException extends FrameworkException`

**Functions/Methods**:
- `forNoPrimaryKey(string $modelName)`
- `forNoDateFormat(string $modelName)`
- `forMethodNotAvailable(string $modelName, string $methodName)`

## `system\Exceptions\PageNotFoundException.php`

**Classes**:
- `CodeIgniter\Exceptions\PageNotFoundException extends OutOfBoundsException implements ExceptionInterface`

**Functions/Methods**:
- `forPageNotFound(?string $message = null)`
- `forEmptyController()`
- `forControllerNotFound(string $controller, string $method)`
- `forMethodNotFound(string $method)`
- `lang(string $line, array $args = [])`

## `system\Exceptions\TestException.php`

**Classes**:
- `CodeIgniter\Exceptions\TestException extends CriticalError`

**Functions/Methods**:
- `forInvalidMockClass(string $name)`

## `system\Files\Exceptions\FileException.php`

**Classes**:
- `CodeIgniter\Files\Exceptions\FileException extends RuntimeException implements ExceptionInterface`

**Functions/Methods**:
- `forUnableToMove(?string $from = null, ?string $to = null, ?string $error = null)`
- `forExpectedDirectory(string $caller)`
- `forExpectedFile(string $caller)`

## `system\Files\Exceptions\FileNotFoundException.php`

**Classes**:
- `CodeIgniter\Files\Exceptions\FileNotFoundException extends RuntimeException implements ExceptionInterface`

**Functions/Methods**:
- `forFileNotFound(string $path)`

## `system\Files\File.php`

**Classes**:
- `CodeIgniter\Files\File extends SplFileInfo`

**Functions/Methods**:
- `__construct(string $path, bool $checkFile = false)`
- `getSize()`
- `getSizeByUnit(string $unit = 'b')`
- `guessExtension()`
- `getMimeType()`
- `getRandomName()`
- `move(string $targetPath, ?string $name = null, bool $overwrite = false)`
- `getDestination(string $destination, string $delimiter = '_', int $i = 0)`

## `system\Files\FileCollection.php`

**Classes**:
- `CodeIgniter\Files\FileCollection implements Countable, IteratorAggregate`

**Functions/Methods**:
- `resolveDirectory(string $directory)`
- `resolveFile(string $file)`
- `filterFiles(array $files, string $directory)`
- `matchFiles(array $files, string $pattern)`
- `__construct(array $files = [])`
- `define()`
- `get()`
- `set(array $files)`
- `add($paths, bool $recursive = true)`
- `addFiles(array $files)`
- `addFile(string $file)`
- `removeFiles(array $files)`
- `removeFile(string $file)`
- `addDirectories(array $directories, bool $recursive = false)`
- `addDirectory(string $directory, bool $recursive = false)`
- `removePattern(string $pattern, ?string $scope = null)`
- `retainPattern(string $pattern, ?string $scope = null)`
- `count()`
- `getIterator()`

## `system\Filters\CSRF.php`

**Classes**:
- `CodeIgniter\Filters\CSRF implements FilterInterface`

**Functions/Methods**:
- `before(RequestInterface $request, $arguments = null)`
- `after(RequestInterface $request, ResponseInterface $response, $arguments = null)`

## `system\Filters\DebugToolbar.php`

**Classes**:
- `CodeIgniter\Filters\DebugToolbar implements FilterInterface`

**Functions/Methods**:
- `before(RequestInterface $request, $arguments = null)`
- `after(RequestInterface $request, ResponseInterface $response, $arguments = null)`

## `system\Filters\Exceptions\FilterException.php`

**Classes**:
- `CodeIgniter\Filters\Exceptions\FilterException extends ConfigException implements ExceptionInterface`
- `CodeIgniter\Filters\Exceptions\does`

**Functions/Methods**:
- `forNoAlias(string $alias)`
- `forIncorrectInterface(string $class)`

## `system\Filters\FilterInterface.php`

**Functions/Methods**:
- `before(RequestInterface $request, $arguments = null)`
- `after(RequestInterface $request, ResponseInterface $response, $arguments = null)`

## `system\Filters\Filters.php`

**Classes**:
- `CodeIgniter\Filters\Filters`
- `CodeIgniter\Filters\names`
- `CodeIgniter\Filters\instanceof`
- `CodeIgniter\Filters\name`

**Functions/Methods**:
- `__construct($config, RequestInterface $request, ResponseInterface $response, ?Modules $modules = null)`
- `discoverFilters()`
- `setResponse(ResponseInterface $response)`
- `run(string $uri, string $position = 'before')`
- `initialize(?string $uri = null)`
- `reset()`
- `getFilters()`
- `getFiltersClass()`
- `addFilter(string $class, ?string $alias = null, string $when = 'before', string $section = 'globals')`
- `enableFilter(string $name, string $when = 'before')`
- `enableFilters(array $names, string $when = 'before')`
- `getArguments(?string $key = null)`
- `processGlobals(?string $uri = null)`
- `processMethods()`
- `processFilters(?string $uri = null)`
- `processAliasesToClass(string $position)`
- `pathApplies(string $uri, $paths)`

## `system\Filters\Honeypot.php`

**Classes**:
- `CodeIgniter\Filters\Honeypot implements FilterInterface`

**Functions/Methods**:
- `before(RequestInterface $request, $arguments = null)`
- `after(RequestInterface $request, ResponseInterface $response, $arguments = null)`

## `system\Filters\InvalidChars.php`

**Classes**:
- `CodeIgniter\Filters\InvalidChars implements FilterInterface`

**Functions/Methods**:
- `before(RequestInterface $request, $arguments = null)`
- `after(RequestInterface $request, ResponseInterface $response, $arguments = null)`
- `checkEncoding($value)`
- `checkControl($value)`

## `system\Filters\SecureHeaders.php`

**Classes**:
- `CodeIgniter\Filters\SecureHeaders implements FilterInterface`

**Functions/Methods**:
- `before(RequestInterface $request, $arguments = null)`
- `after(RequestInterface $request, ResponseInterface $response, $arguments = null)`

## `system\Format\Exceptions\FormatException.php`

**Classes**:
- `CodeIgniter\Format\Exceptions\FormatException extends RuntimeException implements ExceptionInterface`
- `CodeIgniter\Format\Exceptions\does`

**Functions/Methods**:
- `forInvalidFormatter(string $class)`
- `forInvalidJSON(?string $error = null)`
- `forInvalidMime(string $mime)`
- `forMissingExtension()`

## `system\Format\Format.php`

**Classes**:
- `CodeIgniter\Format\is`
- `CodeIgniter\Format\Format`
- `CodeIgniter\Format\instanceof`

**Functions/Methods**:
- `__construct(FormatConfig $config)`
- `getConfig()`
- `getFormatter(string $mime)`

## `system\Format\FormatterInterface.php`

**Functions/Methods**:
- `format($data)`

## `system\Format\JSONFormatter.php`

**Classes**:
- `CodeIgniter\Format\JSONFormatter implements FormatterInterface`

**Functions/Methods**:
- `format($data)`

## `system\Format\XMLFormatter.php`

**Classes**:
- `CodeIgniter\Format\XMLFormatter implements FormatterInterface`

**Functions/Methods**:
- `format($data)`
- `arrayToXML(array $data, &$output)`
- `normalizeXMLTag($key)`

## `system\Helpers\array_helper.php`

**Functions/Methods**:
- `dot_array_search(string $index, array $array)`
- `_array_search_dot(array $indexes, array $array)`
- `array_deep_search($key, array $array)`
- `array_sort_by_multiple_keys(array &$array, array $sortColumns)`
- `array_flatten_with_dots(iterable $array, string $id = '')`

## `system\Helpers\cookie_helper.php`

**Functions/Methods**:
- `set_cookie($name,
        string $value = '',
        string $expire = '',
        string $domain = '',
        string $path = '/',
        string $prefix = '',
        bool $secure = false,
        bool $httpOnly = false,
        ?string $sameSite = null)`
- `get_cookie($index, bool $xssClean = false, ?string $prefix = '')`
- `delete_cookie($name, string $domain = '', string $path = '/', string $prefix = '')`
- `has_cookie(string $name, ?string $value = null, string $prefix = '')`

## `system\Helpers\date_helper.php`

**Classes**:
- `Optional`
- `to`
- `constants`

**Functions/Methods**:
- `now(?string $timezone = null)`
- `timezone_select(string $class = '', string $default = '', int $what = DateTimeZone::ALL, ?string $country = null)`

## `system\Helpers\filesystem_helper.php`

**Functions/Methods**:
- `directory_map(string $sourceDir, int $directoryDepth = 0, bool $hidden = false)`
- `directory_mirror(string $originDir, string $targetDir, bool $overwrite = true)`
- `write_file(string $path, string $data, string $mode = 'wb')`
- `delete_files(string $path, bool $delDir = false, bool $htdocs = false, bool $hidden = false)`
- `get_filenames(string $sourceDir,
        ?bool $includePath = false,
        bool $hidden = false,
        bool $includeDir = true)`
- `get_dir_file_info(string $sourceDir, bool $topLevelOnly = true, bool $recursion = false)`
- `get_file_info(string $file, $returnedValues = ['name', 'server_path', 'size', 'date'])`
- `symbolic_permissions(int $perms)`
- `octal_permissions(int $perms)`
- `same_file(string $file1, string $file2)`
- `set_realpath(string $path, bool $checkExistence = false)`

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

## `system\Helpers\html_helper.php`

**Functions/Methods**:
- `ul(array $list, $attributes = '')`
- `ol(array $list, $attributes = '')`
- `_list(string $type = 'ul', $list = [], $attributes = '', int $depth = 0)`
- `img($src = '', bool $indexPage = false, $attributes = '')`
- `img_data(string $path, ?string $mime = null)`
- `doctype(string $type = 'html5')`
- `script_tag($src = '', bool $indexPage = false)`
- `link_tag($href = '', string $rel = 'stylesheet', string $type = 'text/css', string $title = '', string $media = '', bool $indexPage = false, string $hreflang = '')`
- `video($src, string $unsupportedMessage = '', string $attributes = '', array $tracks = [], bool $indexPage = false)`
- `audio($src, string $unsupportedMessage = '', string $attributes = '', array $tracks = [], bool $indexPage = false)`
- `_media(string $name, array $types = [], string $unsupportedMessage = '', string $attributes = '', array $tracks = [])`
- `source(string $src, string $type = 'unknown', string $attributes = '', bool $indexPage = false)`
- `track(string $src, string $kind, string $srcLanguage, string $label)`
- `object(string $data, string $type = 'unknown', string $attributes = '', array $params = [], bool $indexPage = false)`
- `param(string $name, string $value, string $type = 'ref', string $attributes = '')`
- `embed(string $src, string $type = 'unknown', string $attributes = '', bool $indexPage = false)`
- `_has_protocol(string $url)`
- `_space_indent(int $depth = 2)`

## `system\Helpers\inflector_helper.php`

**Functions/Methods**:
- `singular(string $string)`
- `plural(string $string)`
- `counted(int $count, string $string)`
- `camelize(string $string)`
- `pascalize(string $string)`
- `underscore(string $string)`
- `humanize(string $string, string $separator = '_')`
- `is_pluralizable(string $word)`
- `dasherize(string $string)`
- `ordinal(int $integer)`
- `ordinalize(int $integer)`

## `system\Helpers\number_helper.php`

**Functions/Methods**:
- `number_to_size($num, int $precision = 1, ?string $locale = null)`
- `number_to_amount($num, int $precision = 0, ?string $locale = null)`
- `number_to_currency(float $num, string $currency, ?string $locale = null, int $fraction = 0)`
- `format_number(float $num, int $precision = 1, ?string $locale = null, array $options = [])`
- `number_to_roman(string $num)`

## `system\Helpers\security_helper.php`

**Functions/Methods**:
- `sanitize_filename(string $filename)`
- `strip_image_tags(string $str)`
- `encode_php_tags(string $str)`

## `system\Helpers\test_helper.php`

**Classes**:
- `name`

**Functions/Methods**:
- `fake($model, ?array $overrides = null, $persist = true)`
- `mock(string $className)`

## `system\Helpers\text_helper.php`

**Functions/Methods**:
- `word_limiter(string $str, int $limit = 100, string $endChar = '&#8230;')`
- `character_limiter(string $str, int $n = 500, string $endChar = '&#8230;')`
- `ascii_to_entities(string $str)`
- `entities_to_ascii(string $str, bool $all = true)`
- `word_censor(string $str, array $censored, string $replacement = '')`
- `highlight_code(string $str)`
- `highlight_phrase(string $str, string $phrase, string $tagOpen = '<mark>', string $tagClose = '</mark>')`
- `convert_accented_characters(string $str)`
- `word_wrap(string $str, int $charlim = 76)`
- `ellipsize(string $str, int $maxLength, $position = 1, string $ellipsis = '&hellip;')`
- `strip_slashes($str)`
- `strip_quotes(string $str)`
- `quotes_to_entities(string $str)`
- `reduce_double_slashes(string $str)`
- `reduce_multiples(string $str, string $character = ',', bool $trim = false)`
- `random_string(string $type = 'alnum', int $len = 8)`
- `increment_string(string $str, string $separator = '_', int $first = 1)`
- `alternator(...$args)`
- `excerpt(string $text, ?string $phrase = null, int $radius = 100, string $ellipsis = '...')`

## `system\Helpers\url_helper.php`

**Functions/Methods**:
- `_get_uri(string $relativePath = '', ?App $config = null)`
- `site_url($relativePath = '', ?string $scheme = null, ?App $config = null)`
- `base_url($relativePath = '', ?string $scheme = null)`
- `current_url(bool $returnObject = false, ?IncomingRequest $request = null)`
- `previous_url(bool $returnObject = false)`
- `uri_string(bool $relative = false)`
- `index_page(?App $altConfig = null)`
- `anchor($uri = '', string $title = '', $attributes = '', ?App $altConfig = null)`
- `anchor_popup($uri = '', string $title = '', $attributes = false, ?App $altConfig = null)`
- `mailto(string $email, string $title = '', $attributes = '')`
- `safe_mailto(string $email, string $title = '', $attributes = '')`
- `auto_link(string $str, string $type = 'both', bool $popup = false)`
- `prep_url(string $str = '', bool $secure = false)`
- `url_title(string $str, string $separator = '-', bool $lowercase = false)`
- `mb_url_title(string $str, string $separator = '-', bool $lowercase = false)`
- `url_to(string $controller, ...$args)`
- `url_is(string $path)`

## `system\Helpers\xml_helper.php`

**Functions/Methods**:
- `xml_convert(string $str, bool $protectAll = false)`

## `system\Honeypot\Exceptions\HoneypotException.php`

**Classes**:
- `CodeIgniter\Honeypot\Exceptions\HoneypotException extends ConfigException implements ExceptionInterface`

**Functions/Methods**:
- `forNoTemplate()`
- `forNoNameField()`
- `forNoHiddenValue()`
- `isBot()`

## `system\Honeypot\Honeypot.php`

**Classes**:
- `CodeIgniter\Honeypot\Honeypot`
- `CodeIgniter\Honeypot\Honeypot`

**Functions/Methods**:
- `__construct(HoneypotConfig $config)`
- `hasContent(RequestInterface $request)`
- `attachHoneypot(ResponseInterface $response)`
- `prepareTemplate(string $template)`

## `system\HTTP\CLIRequest.php`

**Classes**:
- `CodeIgniter\HTTP\CLIRequest extends Request`

**Functions/Methods**:
- `__construct(App $config)`
- `getPath()`
- `getOptions()`
- `getArgs()`
- `getSegments()`
- `getOption(string $key)`
- `getOptionString(bool $useLongOpts = false)`
- `parseCommand()`
- `isCLI()`

## `system\HTTP\ContentSecurityPolicy.php`

**Classes**:
- `CodeIgniter\HTTP\ContentSecurityPolicy`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\or`
- `CodeIgniter\HTTP\property`

**Functions/Methods**:
- `__construct(ContentSecurityPolicyConfig $config)`
- `enabled()`
- `getStyleNonce()`
- `getScriptNonce()`
- `finalize(ResponseInterface $response)`
- `reportOnly(bool $value = true)`
- `addBaseURI($uri, ?bool $explicitReporting = null)`
- `addChildSrc($uri, ?bool $explicitReporting = null)`
- `addConnectSrc($uri, ?bool $explicitReporting = null)`
- `setDefaultSrc($uri, ?bool $explicitReporting = null)`
- `addFontSrc($uri, ?bool $explicitReporting = null)`
- `addFormAction($uri, ?bool $explicitReporting = null)`
- `addFrameAncestor($uri, ?bool $explicitReporting = null)`
- `addFrameSrc($uri, ?bool $explicitReporting = null)`
- `addImageSrc($uri, ?bool $explicitReporting = null)`
- `addMediaSrc($uri, ?bool $explicitReporting = null)`
- `addManifestSrc($uri, ?bool $explicitReporting = null)`
- `addObjectSrc($uri, ?bool $explicitReporting = null)`
- `addPluginType($mime, ?bool $explicitReporting = null)`
- `setReportURI(string $uri)`
- `addSandbox($flags, ?bool $explicitReporting = null)`
- `addScriptSrc($uri, ?bool $explicitReporting = null)`
- `addStyleSrc($uri, ?bool $explicitReporting = null)`
- `upgradeInsecureRequests(bool $value = true)`
- `addOption($options, string $target, ?bool $explicitReporting = null)`
- `generateNonces(ResponseInterface $response)`
- `buildHeaders(ResponseInterface $response)`
- `addToHeader(string $name, $values = null)`

## `system\HTTP\CURLRequest.php`

**Classes**:
- `CodeIgniter\HTTP\CURLRequest extends Request`
- `CodeIgniter\HTTP\properties`

**Functions/Methods**:
- `__construct(App $config, URI $uri, ?ResponseInterface $response = null, array $options = [])`
- `request($method, string $url, array $options = [])`
- `resetOptions()`
- `get(string $url, array $options = [])`
- `delete(string $url, array $options = [])`
- `head(string $url, array $options = [])`
- `options(string $url, array $options = [])`
- `patch(string $url, array $options = [])`
- `post(string $url, array $options = [])`
- `put(string $url, array $options = [])`
- `setAuth(string $username, string $password, string $type = 'basic')`
- `setForm(array $params, bool $multipart = false)`
- `setJSON($data)`
- `parseOptions(array $options)`
- `prepareURL(string $url)`
- `getMethod(bool $upper = false)`
- `send(string $method, string $url)`
- `applyRequestHeaders(array $curlOptions = [])`
- `applyMethod(string $method, array $curlOptions)`
- `applyBody(array $curlOptions = [])`
- `setResponseHeaders(array $headers = [])`
- `setCURLOptions(array $curlOptions = [], array $config = [])`
- `sendRequest(array $curlOptions = [])`

## `system\HTTP\DownloadResponse.php`

**Classes**:
- `CodeIgniter\HTTP\DownloadResponse extends Response`

**Functions/Methods**:
- `__construct(string $filename, bool $setMime)`
- `setBinary(string $binary)`
- `setFilePath(string $filepath)`
- `setFileName(string $filename)`
- `getContentLength()`
- `setContentTypeByMimeType()`
- `getDownloadFileName()`
- `getContentDisposition()`
- `setStatusCode(int $code, string $reason = '')`
- `setContentType(string $mime, string $charset = 'UTF-8')`
- `noCache()`
- `setCache(array $options = [])`
- `send()`
- `buildHeaders()`
- `sendBody()`
- `sendBodyByFilePath()`
- `sendBodyByBinary()`

## `system\HTTP\Exceptions\HTTPException.php`

**Classes**:
- `CodeIgniter\HTTP\Exceptions\HTTPException extends FrameworkException`

**Functions/Methods**:
- `forMissingCurl()`
- `forSSLCertNotFound(string $cert)`
- `forInvalidSSLKey(string $key)`
- `forCurlError(string $errorNum, string $error)`
- `forInvalidNegotiationType(string $type)`
- `forInvalidHTTPProtocol(string $protocols)`
- `forEmptySupportedNegotiations()`
- `forInvalidRedirectRoute(string $route)`
- `forMissingResponseStatus()`
- `forInvalidStatusCode(int $code)`
- `forUnkownStatusCode(int $code)`
- `forUnableToParseURI(string $uri)`
- `forURISegmentOutOfRange(int $segment)`
- `forInvalidPort(int $port)`
- `forMalformedQueryString()`
- `forAlreadyMoved()`
- `forInvalidFile(?string $path = null)`
- `forMoveFailed(string $source, string $target, string $error)`
- `forInvalidSameSiteSetting(string $samesite)`

## `system\HTTP\Files\FileCollection.php`

**Classes**:
- `CodeIgniter\HTTP\Files\FileCollection`

**Functions/Methods**:
- `all()`
- `getFile(string $name)`
- `getFileMultiple(string $name)`
- `hasFile(string $fileID)`
- `populateFiles()`
- `createFileObject(array $array)`
- `fixFilesArray(array $data)`
- `getValueDotNotationSyntax(array $index, array $value)`

## `system\HTTP\Files\UploadedFile.php`

**Classes**:
- `CodeIgniter\HTTP\Files\to`
- `CodeIgniter\HTTP\Files\UploadedFile extends File implements UploadedFileInterface`

**Functions/Methods**:
- `__construct(string $path, string $originalName, ?string $mimeType = null, ?int $size = null, ?int $error = null)`
- `move(string $targetPath, ?string $name = null, bool $overwrite = false)`
- `setPath(string $path)`
- `hasMoved()`
- `getError()`
- `getErrorString()`
- `getClientMimeType()`
- `getName()`
- `getClientName()`
- `getTempName()`
- `getExtension()`
- `guessExtension()`
- `getClientExtension()`
- `isValid()`
- `store(?string $folderName = null, ?string $fileName = null)`

## `system\HTTP\Files\UploadedFileInterface.php`

**Classes**:
- `CodeIgniter\HTTP\Files\to`

**Functions/Methods**:
- `__construct(string $path, string $originalName, ?string $mimeType = null, ?int $size = null, ?int $error = null)`
- `move(string $targetPath, ?string $name = null)`
- `hasMoved()`
- `getError()`
- `getName()`
- `getTempName()`
- `getClientExtension()`
- `getClientMimeType()`
- `isValid()`
- `getDestination(string $destination, string $delimiter = '_', int $i = 0)`

## `system\HTTP\Header.php`

**Classes**:
- `CodeIgniter\HTTP\Header`

**Functions/Methods**:
- `__construct(string $name, $value = null)`
- `getName()`
- `getValue()`
- `setName(string $name)`
- `setValue($value = null)`
- `appendValue($value = null)`
- `prependValue($value = null)`
- `getValueLine()`
- `__toString()`

## `system\HTTP\IncomingRequest.php`

**Classes**:
- `CodeIgniter\HTTP\IncomingRequest extends Request`

**Functions/Methods**:
- `__construct($config, ?URI $uri = null, $body = 'php://input', ?UserAgent $userAgent = null)`
- `detectLocale($config)`
- `detectURI(string $protocol, string $baseURL)`
- `detectPath(string $protocol = '')`
- `parseRequestURI()`
- `parseQueryString()`
- `negotiate(string $type, array $supported, bool $strictMatch = false)`
- `isCLI()`
- `isAJAX()`
- `isSecure()`
- `setPath(string $path, ?App $config = null)`
- `getPath()`
- `setLocale(string $locale)`
- `getLocale()`
- `getDefaultLocale()`
- `getVar($index = null, $filter = null, $flags = null)`
- `getJSON(bool $assoc = false, int $depth = 512, int $options = 0)`
- `getJsonVar(string $index, bool $assoc = false, ?int $filter = null, $flags = null)`
- `getRawInput()`
- `getGet($index = null, $filter = null, $flags = null)`
- `getPost($index = null, $filter = null, $flags = null)`
- `getPostGet($index = null, $filter = null, $flags = null)`
- `getGetPost($index = null, $filter = null, $flags = null)`
- `getCookie($index = null, $filter = null, $flags = null)`
- `getUserAgent()`
- `getOldInput(string $key)`
- `getFiles()`
- `getFileMultiple(string $fileID)`
- `getFile(string $fileID)`
- `removeRelativeDirectory(string $uri)`

## `system\HTTP\Message.php`

**Classes**:
- `CodeIgniter\HTTP\Message implements MessageInterface`

**Functions/Methods**:
- `getBody()`
- `getHeaders()`
- `getHeader(string $name)`
- `hasHeader(string $name)`
- `getHeaderLine(string $name)`
- `getProtocolVersion()`

## `system\HTTP\MessageInterface.php`

**Functions/Methods**:
- `setBody($data)`
- `appendBody($data)`
- `populateHeaders()`
- `headers()`
- `header($name)`
- `setHeader(string $name, $value)`
- `removeHeader(string $name)`
- `appendHeader(string $name, ?string $value)`
- `prependHeader(string $name, string $value)`
- `setProtocolVersion(string $version)`

## `system\HTTP\MessageTrait.php`

**Functions/Methods**:
- `setBody($data)`
- `appendBody($data)`
- `populateHeaders()`
- `headers()`
- `header($name)`
- `setHeader(string $name, $value)`
- `removeHeader(string $name)`
- `appendHeader(string $name, ?string $value)`
- `prependHeader(string $name, string $value)`
- `getHeaderName(string $name)`
- `setProtocolVersion(string $version)`

## `system\HTTP\Negotiate.php`

**Classes**:
- `CodeIgniter\HTTP\Negotiate`

**Functions/Methods**:
- `__construct(?RequestInterface $request = null)`
- `setRequest(RequestInterface $request)`
- `media(array $supported, bool $strictMatch = false)`
- `charset(array $supported)`
- `encoding(array $supported = [])`
- `language(array $supported)`
- `getBestMatch(array $supported, ?string $header = null, bool $enforceTypes = false, bool $strictMatch = false, bool $matchLocales = false)`
- `parseHeader(string $header)`
- `match(array $acceptable, string $supported, bool $enforceTypes = false, $matchLocales = false)`
- `matchParameters(array $acceptable, array $supported)`
- `matchTypes(array $acceptable, array $supported)`
- `matchLocales(array $acceptable, array $supported)`

## `system\HTTP\RedirectResponse.php`

**Classes**:
- `CodeIgniter\HTTP\RedirectResponse extends Response`

**Functions/Methods**:
- `to(string $uri, ?int $code = null, string $method = 'auto')`
- `route(string $route, array $params = [], int $code = 302, string $method = 'auto')`
- `back(?int $code = null, string $method = 'auto')`
- `withInput()`
- `withErrors()`
- `with(string $key, $message)`
- `withCookies()`
- `withHeaders()`

## `system\HTTP\Request.php`

**Classes**:
- `CodeIgniter\HTTP\Request extends Message implements MessageInterface, RequestInterface`

**Functions/Methods**:
- `__construct($config = null)`
- `isValidIP(?string $ip = null, ?string $which = null)`
- `getMethod(bool $upper = false)`
- `setMethod(string $method)`
- `withMethod($method)`
- `getUri()`

## `system\HTTP\RequestInterface.php`

**Functions/Methods**:
- `getIPAddress()`
- `isValidIP(string $ip, ?string $which = null)`
- `getMethod(bool $upper = false)`
- `getServer($index = null, $filter = null)`

## `system\HTTP\RequestTrait.php`

**Functions/Methods**:
- `getIPAddress()`
- `getServer($index = null, $filter = null, $flags = null)`
- `getEnv($index = null, $filter = null, $flags = null)`
- `setGlobal(string $method, $value)`
- `fetchGlobal(string $method, $index = null, ?int $filter = null, $flags = null)`
- `populateGlobals(string $method)`

## `system\HTTP\Response.php`

**Classes**:
- `CodeIgniter\HTTP\Response extends Message implements MessageInterface, ResponseInterface`

**Functions/Methods**:
- `__construct($config)`
- `pretend(bool $pretend = true)`
- `getStatusCode()`
- `getReason()`
- `getReasonPhrase()`

## `system\HTTP\ResponseInterface.php`

**Functions/Methods**:
- `getStatusCode()`
- `setStatusCode(int $code, string $reason = '')`
- `getReason()`
- `setDate(DateTime $date)`
- `setLastModified($date)`
- `setLink(PagerInterface $pager)`
- `setContentType(string $mime, string $charset = 'UTF-8')`
- `setJSON($body, bool $unencoded = false)`
- `getJSON()`
- `setXML($body)`
- `getXML()`
- `noCache()`
- `setCache(array $options = [])`
- `send()`
- `sendHeaders()`
- `sendBody()`
- `setCookie($name,
        $value = '',
        $expire = '',
        $domain = '',
        $path = '/',
        $prefix = '',
        $secure = false,
        $httponly = false,
        $samesite = null)`
- `hasCookie(string $name, ?string $value = null, string $prefix = '')`
- `getCookie(?string $name = null, string $prefix = '')`
- `deleteCookie(string $name = '', string $domain = '', string $path = '/', string $prefix = '')`
- `getCookies()`
- `redirect(string $uri, string $method = 'auto', ?int $code = null)`
- `download(string $filename = '', $data = '', bool $setMime = false)`

## `system\HTTP\ResponseTrait.php`

**Classes**:
- `CodeIgniter\HTTP\instead`
- `CodeIgniter\HTTP\instead`
- `CodeIgniter\HTTP\instead`
- `CodeIgniter\HTTP\instead`
- `CodeIgniter\HTTP\instead`
- `CodeIgniter\HTTP\instead`
- `CodeIgniter\HTTP\instead`

**Functions/Methods**:
- `setStatusCode(int $code, string $reason = '')`
- `setDate(DateTime $date)`
- `setLink(PagerInterface $pager)`
- `setContentType(string $mime, string $charset = 'UTF-8')`
- `setJSON($body, bool $unencoded = false)`
- `getJSON()`
- `setXML($body)`
- `getXML()`
- `formatBody($body, string $format)`
- `noCache()`
- `setCache(array $options = [])`
- `setLastModified($date)`
- `send()`
- `sendHeaders()`
- `sendBody()`
- `redirect(string $uri, string $method = 'auto', ?int $code = null)`
- `setCookie($name,
        $value = '',
        $expire = '',
        $domain = '',
        $path = '/',
        $prefix = '',
        $secure = false,
        $httponly = false,
        $samesite = null)`
- `getCookieStore()`
- `hasCookie(string $name, ?string $value = null, string $prefix = '')`
- `getCookie(?string $name = null, string $prefix = '')`
- `deleteCookie(string $name = '', string $domain = '', string $path = '/', string $prefix = '')`
- `getCookies()`
- `sendCookies()`
- `dispatchCookies()`
- `doSetRawCookie(string $name, string $value, array $options)`
- `doSetCookie(string $name, string $value, array $options)`
- `download(string $filename = '', $data = '', bool $setMime = false)`

## `system\HTTP\URI.php`

**Classes**:
- `CodeIgniter\HTTP\URI`
- `CodeIgniter\HTTP\does`

**Functions/Methods**:
- `createURIString(?string $scheme = null, ?string $authority = null, ?string $path = null, ?string $query = null, ?string $fragment = null)`
- `removeDotSegments(string $path)`
- `__construct(?string $uri = null)`
- `setSilent(bool $silent = true)`
- `useRawQueryString(bool $raw = true)`
- `setURI(?string $uri = null)`
- `getScheme()`
- `getAuthority(bool $ignorePort = false)`
- `getUserInfo()`
- `showPassword(bool $val = true)`
- `getHost()`
- `getPort()`
- `getPath()`
- `getQuery(array $options = [])`
- `getFragment()`
- `getSegments()`
- `getSegment(int $number, string $default = '')`
- `setSegment(int $number, $value)`
- `getTotalSegments()`
- `__toString()`
- `changeSchemeAndPath(string $scheme, string $path)`
- `setAuthority(string $str)`
- `setScheme(string $str)`
- `setUserInfo(string $user, string $pass)`
- `setHost(string $str)`
- `setPort(?int $port = null)`
- `setPath(string $path)`
- `refreshPath()`
- `setQuery(string $query)`
- `setQueryArray(array $query)`
- `addQuery(string $key, $value = null)`
- `stripQuery(...$params)`
- `keepQuery(...$params)`
- `setFragment(string $string)`
- `filterPath(?string $path = null)`
- `applyParts(array $parts)`
- `resolveRelativeURI(string $uri)`
- `mergePaths(self $base, self $reference)`
- `parseStr(string $query)`

## `system\HTTP\UserAgent.php`

**Classes**:
- `CodeIgniter\HTTP\UserAgent`

**Functions/Methods**:
- `__construct(?UserAgents $config = null)`
- `isBrowser(?string $key = null)`
- `isRobot(?string $key = null)`
- `isMobile(?string $key = null)`
- `isReferral()`
- `getAgentString()`
- `getPlatform()`
- `getBrowser()`
- `getVersion()`
- `getRobot()`
- `getMobile()`
- `getReferrer()`
- `parse(string $string)`
- `compileData()`
- `setPlatform()`
- `setBrowser()`
- `setRobot()`
- `setMobile()`
- `__toString()`

## `system\I18n\Exceptions\I18nException.php`

**Classes**:
- `CodeIgniter\I18n\Exceptions\I18nException extends FrameworkException`

**Functions/Methods**:
- `forInvalidFormat(string $format)`
- `forInvalidMonth(string $month)`
- `forInvalidDay(string $day)`
- `forInvalidOverDay(string $lastDay, string $day)`
- `forInvalidHour(string $hour)`
- `forInvalidMinutes(string $minutes)`
- `forInvalidSeconds(string $seconds)`

## `system\I18n\Time.php`

**Classes**:
- `CodeIgniter\I18n\Time extends DateTime`

**Functions/Methods**:
- `__construct(?string $time = null, $timezone = null, ?string $locale = null)`
- `now($timezone = null, ?string $locale = null)`
- `parse(string $datetime, $timezone = null, ?string $locale = null)`
- `today($timezone = null, ?string $locale = null)`
- `yesterday($timezone = null, ?string $locale = null)`
- `tomorrow($timezone = null, ?string $locale = null)`
- `createFromDate(?int $year = null, ?int $month = null, ?int $day = null, $timezone = null, ?string $locale = null)`
- `createFromTime(?int $hour = null, ?int $minutes = null, ?int $seconds = null, $timezone = null, ?string $locale = null)`
- `create(?int $year = null, ?int $month = null, ?int $day = null, ?int $hour = null, ?int $minutes = null, ?int $seconds = null, $timezone = null, ?string $locale = null)`
- `createFromFormat($format, $datetime, $timezone = null)`
- `createFromTimestamp(int $timestamp, $timezone = null, ?string $locale = null)`
- `createFromInstance(DateTimeInterface $dateTime, ?string $locale = null)`
- `instance(DateTime $dateTime, ?string $locale = null)`
- `toDateTime()`
- `setTestNow($datetime = null, $timezone = null, ?string $locale = null)`
- `hasTestNow()`
- `getYear()`
- `getMonth()`
- `getDay()`
- `getHour()`
- `getMinute()`
- `getSecond()`
- `getDayOfWeek()`
- `getDayOfYear()`
- `getWeekOfMonth()`
- `getWeekOfYear()`
- `getAge()`
- `getQuarter()`
- `getDst()`
- `getLocal()`
- `getUtc()`
- `getTimezoneName()`
- `setYear($value)`
- `setMonth($value)`
- `setDay($value)`
- `setHour($value)`
- `setMinute($value)`
- `setSecond($value)`
- `setValue(string $name, $value)`
- `setTimezone($timezone)`
- `setTimestamp($timestamp)`
- `addSeconds(int $seconds)`
- `addMinutes(int $minutes)`
- `addHours(int $hours)`
- `addDays(int $days)`
- `addMonths(int $months)`
- `addYears(int $years)`
- `subSeconds(int $seconds)`
- `subMinutes(int $minutes)`
- `subHours(int $hours)`
- `subDays(int $days)`
- `subMonths(int $months)`
- `subYears(int $years)`
- `toDateTimeString()`
- `toDateString()`
- `toFormattedDateString()`
- `toTimeString()`
- `toLocalizedString(?string $format = null)`
- `equals($testTime, ?string $timezone = null)`
- `sameAs($testTime, ?string $timezone = null)`
- `isBefore($testTime, ?string $timezone = null)`
- `isAfter($testTime, ?string $timezone = null)`
- `humanize()`
- `difference($testTime, ?string $timezone = null)`
- `getUTCObject($time, ?string $timezone = null)`
- `getCalendar()`
- `hasRelativeKeywords(string $time)`
- `__toString()`
- `__get($name)`
- `__isset($name)`
- `__wakeup()`

## `system\I18n\TimeDifference.php`

**Classes**:
- `CodeIgniter\I18n\TimeDifference`

**Functions/Methods**:
- `__construct(DateTime $currentTime, DateTime $testTime)`
- `getYears(bool $raw = false)`
- `getMonths(bool $raw = false)`
- `getWeeks(bool $raw = false)`
- `getDays(bool $raw = false)`
- `getHours(bool $raw = false)`
- `getMinutes(bool $raw = false)`
- `getSeconds(bool $raw = false)`
- `humanize(?string $locale = null)`
- `__get($name)`
- `__isset($name)`

## `system\Images\Exceptions\ImageException.php`

**Classes**:
- `CodeIgniter\Images\Exceptions\ImageException extends FrameworkException implements ExceptionInterface`

**Functions/Methods**:
- `forMissingImage()`
- `forFileNotSupported()`
- `forMissingAngle()`
- `forInvalidDirection(?string $dir = null)`
- `forInvalidPath()`
- `forEXIFUnsupported()`
- `forInvalidImageCreate(?string $extra = null)`
- `forSaveFailed()`
- `forInvalidImageLibraryPath(?string $path = null)`
- `forImageProcessFailed()`

## `system\Images\Handlers\BaseHandler.php`

**Classes**:
- `CodeIgniter\Images\Handlers\BaseHandler implements ImageHandlerInterface`

**Functions/Methods**:
- `__construct($config = null)`
- `withFile(string $path)`
- `ensureResource()`
- `getFile()`
- `image()`
- `getResource()`
- `withResource()`
- `resize(int $width, int $height, bool $maintainRatio = false, string $masterDim = 'auto')`
- `crop(?int $width = null, ?int $height = null, ?int $x = null, ?int $y = null, bool $maintainRatio = false, string $masterDim = 'auto')`
- `convert(int $imageType)`
- `rotate(float $angle)`
- `flatten(int $red = 255, int $green = 255, int $blue = 255)`
- `_flatten(int $red = 255, int $green = 255, int $blue = 255)`
- `_rotate(int $angle)`
- `flip(string $dir = 'vertical')`
- `_flip(string $direction)`
- `text(string $text, array $options = [])`
- `_text(string $text, array $options = [])`
- `_resize(bool $maintainRatio = false)`
- `_crop()`
- `_getWidth()`
- `_getHeight()`
- `reorient(bool $silent = false)`
- `getEXIF(?string $key = null, bool $silent = false)`
- `fit(int $width, ?int $height = null, string $position = 'center')`
- `calcAspectRatio($width, $height = null, $origWidth = 0, $origHeight = 0)`
- `calcCropCoords($width, $height, $origWidth, $origHeight, $position)`
- `getVersion()`
- `save(?string $target = null, int $quality = 90)`
- `process(string $action)`
- `__call(string $name, array $args = [])`
- `reproportion()`
- `getWidth()`
- `getHeight()`

## `system\Images\Handlers\GDHandler.php`

**Classes**:
- `CodeIgniter\Images\Handlers\GDHandler extends BaseHandler`

**Functions/Methods**:
- `__construct($config = null)`
- `_rotate(int $angle)`
- `_flatten(int $red = 255, int $green = 255, int $blue = 255)`
- `_flip(string $direction)`
- `getVersion()`
- `_resize(bool $maintainRatio = false)`
- `_crop()`
- `process(string $action)`
- `save(?string $target = null, int $quality = 90)`
- `createImage(string $path = '', string $imageType = '')`
- `ensureResource()`
- `getImageResource(string $path, int $imageType)`
- `_text(string $text, array $options = [])`
- `textOverlay(string $text, array $options = [], bool $isShadow = false)`
- `_getWidth()`
- `_getHeight()`

## `system\Images\Handlers\ImageMagickHandler.php`

**Classes**:
- `CodeIgniter\Images\Handlers\ImageMagickHandler extends BaseHandler`

**Functions/Methods**:
- `__construct($config = null)`
- `_resize(bool $maintainRatio = false)`
- `_crop()`
- `_rotate(int $angle)`
- `_flatten(int $red = 255, int $green = 255, int $blue = 255)`
- `_flip(string $direction)`
- `getVersion()`
- `process(string $action, int $quality = 100)`
- `save(?string $target = null, int $quality = 90)`
- `getResourcePath()`
- `ensureResource()`
- `supportedFormatCheck()`
- `_text(string $text, array $options = [])`
- `_getWidth()`
- `_getHeight()`
- `reorient(bool $silent = false)`

## `system\Images\Image.php`

**Classes**:
- `CodeIgniter\Images\Image extends File`

**Functions/Methods**:
- `copy(string $targetPath, ?string $targetName = null, int $perms = 0644)`
- `getProperties(bool $return = false)`

## `system\Images\ImageHandlerInterface.php`

**Functions/Methods**:
- `resize(int $width, int $height, bool $maintainRatio = false, string $masterDim = 'auto')`
- `crop(?int $width = null, ?int $height = null, ?int $x = null, ?int $y = null, bool $maintainRatio = false, string $masterDim = 'auto')`
- `convert(int $imageType)`
- `rotate(float $angle)`
- `flatten(int $red = 255, int $green = 255, int $blue = 255)`
- `reorient()`
- `getEXIF(?string $key = null)`
- `flip(string $dir = 'vertical')`
- `fit(int $width, int $height, string $position)`
- `text(string $text, array $options = [])`
- `save(?string $target = null, int $quality = 90)`

## `system\Language\en\Cache.php`

## `system\Language\en\Cast.php`

**Classes**:
- `must`

## `system\Language\en\CLI.php`

**Classes**:
- `name`
- `name`
- `name`
- `name`
- `name`
- `name`
- `name`
- `name`
- `name`

## `system\Language\en\Cookie.php`

**Classes**:
- `expected`

## `system\Language\en\Core.php`

## `system\Language\en\Database.php`

**Classes**:
- `does`
- `does`

## `system\Language\en\Email.php`

## `system\Language\en\Encryption.php`

## `system\Language\en\Entity.php`

## `system\Language\en\Fabricator.php`

## `system\Language\en\Files.php`

## `system\Language\en\Filters.php`

## `system\Language\en\Format.php`

## `system\Language\en\HTTP.php`

## `system\Language\en\Images.php`

## `system\Language\en\Language.php`

## `system\Language\en\Log.php`

## `system\Language\en\Migrations.php`

**Classes**:
- `is`

## `system\Language\en\Number.php`

## `system\Language\en\Pager.php`

## `system\Language\en\Publisher.php`

## `system\Language\en\Redirect.php`

## `system\Language\en\RESTful.php`

## `system\Language\en\Router.php`

## `system\Language\en\Security.php`

## `system\Language\en\Seed.php`

## `system\Language\en\Session.php`

## `system\Language\en\Test.php`

## `system\Language\en\Time.php`

## `system\Language\en\Validation.php`

## `system\Language\en\View.php`

**Classes**:
- `provided`

## `system\Language\Language.php`

**Classes**:
- `CodeIgniter\Language\Language`

**Functions/Methods**:
- `__construct(string $locale)`
- `setLocale(?string $locale = null)`
- `getLocale()`
- `getLine(string $line, array $args = [])`
- `getTranslationOutput(string $locale, string $file, string $parsedLine)`
- `parseLine(string $line, string $locale)`
- `formatMessage($message, array $args = [])`
- `load(string $file, string $locale, bool $return = false)`
- `requireFile(string $path)`

## `system\Log\Exceptions\LogException.php`

**Classes**:
- `CodeIgniter\Log\Exceptions\LogException extends FrameworkException`

**Functions/Methods**:
- `forInvalidLogLevel(string $level)`
- `forInvalidMessageType(string $messageType)`

## `system\Log\Handlers\BaseHandler.php`

**Classes**:
- `CodeIgniter\Log\Handlers\for`
- `CodeIgniter\Log\Handlers\BaseHandler implements HandlerInterface`

**Functions/Methods**:
- `__construct(array $config)`
- `canHandle(string $level)`
- `handle($level, $message)`
- `setDateFormat(string $format)`

## `system\Log\Handlers\ChromeLoggerHandler.php`

**Classes**:
- `CodeIgniter\Log\Handlers\ChromeLoggerHandler extends BaseHandler`

**Functions/Methods**:
- `__construct(array $config = [])`
- `handle($level, $message)`
- `format($object)`
- `sendLogs(?ResponseInterface &$response = null)`

## `system\Log\Handlers\ErrorlogHandler.php`

**Classes**:
- `CodeIgniter\Log\Handlers\ErrorlogHandler extends BaseHandler`

**Functions/Methods**:
- `__construct(array $config = [])`
- `handle($level, $message)`
- `errorLog(string $message, int $messageType)`

## `system\Log\Handlers\FileHandler.php`

**Classes**:
- `CodeIgniter\Log\Handlers\FileHandler extends BaseHandler`

**Functions/Methods**:
- `__construct(array $config = [])`
- `handle($level, $message)`

## `system\Log\Handlers\HandlerInterface.php`

**Functions/Methods**:
- `handle($level, $message)`
- `canHandle(string $level)`
- `setDateFormat(string $format)`

## `system\Log\Logger.php`

**Classes**:
- `CodeIgniter\Log\Logger implements LoggerInterface`
- `CodeIgniter\Log\name`
- `CodeIgniter\Log\method`

**Functions/Methods**:
- `__construct($config, bool $debug = CI_DEBUG)`
- `emergency($message, array $context = [])`
- `alert($message, array $context = [])`
- `critical($message, array $context = [])`
- `error($message, array $context = [])`
- `warning($message, array $context = [])`
- `notice($message, array $context = [])`
- `info($message, array $context = [])`
- `debug($message, array $context = [])`
- `log($level, $message, array $context = [])`
- `interpolate($message, array $context = [])`
- `determineFile()`
- `cleanFileNames(string $file)`

## `system\Model.php`

**Classes**:
- `CodeIgniter\extends`
- `CodeIgniter\Model extends BaseModel`
- `CodeIgniter\an`
- `CodeIgniter\an`

**Functions/Methods**:
- `__construct(?ConnectionInterface $db = null, ?ValidationInterface $validation = null)`
- `setTable(string $table)`
- `doFind(bool $singleton, $id = null)`
- `doFindColumn(string $columnName)`
- `doFindAll(int $limit = 0, int $offset = 0)`
- `doFirst()`
- `doInsert(array $data)`
- `doInsertBatch(?array $set = null, ?bool $escape = null, int $batchSize = 100, bool $testing = false)`
- `doUpdate($id = null, $data = null)`
- `doUpdateBatch(?array $set = null, ?string $index = null, int $batchSize = 100, bool $returnSQL = false)`
- `doDelete($id = null, bool $purge = false)`
- `doPurgeDeleted()`
- `doOnlyDeleted()`
- `doReplace(?array $data = null, bool $returnSQL = false)`
- `doErrors()`
- `idValue($data)`
- `getIdValue($data)`
- `chunk(int $size, Closure $userFunc)`
- `countAllResults(bool $reset = true, bool $test = false)`
- `builder(?string $table = null)`
- `set($key, $value = '', ?bool $escape = null)`
- `shouldUpdate($data)`
- `insert($data = null, bool $returnID = true)`
- `update($id = null, $data = null)`
- `objectToRawArray($data, bool $onlyChanged = true, bool $recursive = false)`
- `__get(string $name)`
- `__isset(string $name)`
- `__call(string $name, array $params)`
- `checkBuilderMethod(string $name)`
- `classToArray($data, $primaryKey = null, string $dateFormat = 'datetime', bool $onlyChanged = true)`

## `system\Modules\Modules.php`

**Classes**:
- `CodeIgniter\Modules\Modules`

**Functions/Methods**:
- `shouldDiscover(string $alias)`

## `system\Pager\Exceptions\PagerException.php`

**Classes**:
- `CodeIgniter\Pager\Exceptions\PagerException extends FrameworkException`

**Functions/Methods**:
- `forInvalidTemplate(?string $template = null)`
- `forInvalidPaginationGroup(?string $group = null)`

## `system\Pager\Pager.php`

**Classes**:
- `CodeIgniter\Pager\provides`
- `CodeIgniter\Pager\can`
- `CodeIgniter\Pager\Pager implements PagerInterface`

**Functions/Methods**:
- `__construct(PagerConfig $config, RendererInterface $view)`
- `links(string $group = 'default', string $template = 'default_full')`
- `simpleLinks(string $group = 'default', string $template = 'default_simple')`
- `makeLinks(int $page, ?int $perPage, int $total, string $template = 'default_full', int $segment = 0, ?string $group = 'default')`
- `displayLinks(string $group, string $template)`
- `store(string $group, int $page, ?int $perPage, int $total, int $segment = 0)`
- `setSegment(int $number, string $group = 'default')`
- `setPath(string $path, string $group = 'default')`
- `getTotal(string $group = 'default')`
- `getPageCount(string $group = 'default')`
- `getCurrentPage(string $group = 'default')`
- `hasMore(string $group = 'default')`
- `getLastPage(string $group = 'default')`
- `getFirstPage(string $group = 'default')`
- `getPageURI(?int $page = null, string $group = 'default', bool $returnObject = false)`
- `getNextPageURI(string $group = 'default', bool $returnObject = false)`
- `getPreviousPageURI(string $group = 'default', bool $returnObject = false)`
- `getPerPage(string $group = 'default')`
- `getDetails(string $group = 'default')`
- `only(array $queries)`
- `ensureGroup(string $group, ?int $perPage = null)`
- `calculateCurrentPage(string $group)`

## `system\Pager\PagerInterface.php`

**Functions/Methods**:
- `links(string $group = 'default', string $template = 'default')`
- `simpleLinks(string $group = 'default', string $template = 'default')`
- `makeLinks(int $page, int $perPage, int $total, string $template = 'default')`
- `store(string $group, int $page, int $perPage, int $total)`
- `setPath(string $path, string $group = 'default')`
- `getPageCount(string $group = 'default')`
- `getCurrentPage(string $group = 'default')`
- `getPageURI(?int $page = null, string $group = 'default', bool $returnObject = false)`
- `hasMore(string $group = 'default')`
- `getFirstPage(string $group = 'default')`
- `getLastPage(string $group = 'default')`
- `getNextPageURI(string $group = 'default')`
- `getPreviousPageURI(string $group = 'default')`
- `getPerPage(string $group = 'default')`
- `getDetails(string $group = 'default')`

## `system\Pager\PagerRenderer.php`

**Classes**:
- `CodeIgniter\Pager\is`
- `CodeIgniter\Pager\PagerRenderer`

**Functions/Methods**:
- `__construct(array $details)`
- `setSurroundCount(?int $count = null)`
- `hasPrevious()`
- `getPrevious()`
- `hasNext()`
- `getNext()`
- `getFirst()`
- `getLast()`
- `getCurrent()`
- `links()`
- `updatePages(?int $count = null)`
- `hasPreviousPage()`
- `getPreviousPage()`
- `hasNextPage()`
- `getNextPage()`
- `getFirstPageNumber()`
- `getCurrentPageNumber()`
- `getLastPageNumber()`
- `getPageCount()`
- `getPreviousPageNumber()`
- `getNextPageNumber()`

## `system\Pager\Views\default_full.php`

## `system\Pager\Views\default_head.php`

## `system\Pager\Views\default_simple.php`

## `system\Publisher\Exceptions\PublisherException.php`

**Classes**:
- `CodeIgniter\Publisher\Exceptions\PublisherException extends FrameworkException`

**Functions/Methods**:
- `forCollision(string $from, string $to)`
- `forDestinationNotAllowed(string $destination)`
- `forFileNotAllowed(string $file, string $directory, string $pattern)`

## `system\Publisher\Publisher.php`

**Classes**:
- `CodeIgniter\Publisher\acts`
- `CodeIgniter\Publisher\a`
- `CodeIgniter\Publisher\Publisher extends FileCollection`

**Functions/Methods**:
- `discover(string $directory = 'Publishers')`
- `wipeDirectory(string $directory)`
- `__construct(?string $source = null, ?string $destination = null)`
- `__destruct()`
- `publish()`
- `getSource()`
- `getDestination()`
- `getScratch()`
- `getErrors()`
- `getPublished()`
- `addPaths(array $paths, bool $recursive = true)`
- `addPath(string $path, bool $recursive = true)`
- `addUris(array $uris)`
- `addUri(string $uri)`
- `wipe()`
- `copy(bool $replace = true)`
- `merge(bool $replace = true)`
- `safeCopyFile(string $from, string $to, bool $replace)`

## `system\RESTful\BaseResource.php`

**Classes**:
- `CodeIgniter\RESTful\BaseResource extends Controller`

**Functions/Methods**:
- `initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)`
- `setModel($which = null)`

## `system\RESTful\ResourceController.php`

**Classes**:
- `CodeIgniter\RESTful\ResourceController extends BaseResource`

**Functions/Methods**:
- `index()`
- `show($id = null)`
- `new()`
- `create()`
- `edit($id = null)`
- `update($id = null)`
- `delete($id = null)`
- `setFormat(string $format = 'json')`

## `system\RESTful\ResourcePresenter.php`

**Classes**:
- `CodeIgniter\RESTful\ResourcePresenter extends BaseResource`

**Functions/Methods**:
- `index()`
- `show($id = null)`
- `new()`
- `create()`
- `edit($id = null)`
- `update($id = null)`
- `remove($id = null)`
- `delete($id = null)`

## `system\Router\AutoRouter.php`

**Classes**:
- `CodeIgniter\Router\AutoRouter implements AutoRouterInterface`
- `CodeIgniter\Router\name`

**Functions/Methods**:
- `__construct(array $protectedControllers,
        string $defaultNamespace,
        string $defaultController,
        string $defaultMethod,
        bool $translateURIDashes,
        string $httpVerb)`
- `getRoute(string $uri)`
- `setTranslateURIDashes(bool $val = false)`
- `scanControllers(array $segments)`
- `isValidSegment(string $segment)`
- `setDirectory(?string $dir = null, bool $append = false, bool $validate = true)`
- `directory()`
- `controllerName()`
- `methodName()`

## `system\Router\AutoRouterImproved.php`

**Classes**:
- `CodeIgniter\Router\AutoRouterImproved implements AutoRouterInterface`
- `CodeIgniter\Router\name`

**Functions/Methods**:
- `__construct(array $protectedControllers,
        string $namespace,
        string $defaultController,
        string $defaultMethod,
        bool $translateURIDashes,
        string $httpVerb)`
- `getRoute(string $uri)`
- `protectDefinedRoutes()`
- `checkParameters(string $uri)`
- `checkRemap()`
- `scanControllers(array $segments)`
- `isValidSegment(string $segment)`
- `setSubNamespace(?string $namespace = null, bool $append = false, bool $validate = true)`
- `translateURIDashes(string $classname)`

## `system\Router\AutoRouterInterface.php`

**Functions/Methods**:
- `getRoute(string $uri)`

## `system\Router\Exceptions\RedirectException.php`

**Classes**:
- `CodeIgniter\Router\Exceptions\RedirectException extends Exception`

## `system\Router\Exceptions\RouterException.php`

**Classes**:
- `CodeIgniter\Router\Exceptions\RouterException extends FrameworkException`

**Functions/Methods**:
- `forInvalidParameterType()`
- `forMissingDefaultRoute()`
- `forControllerNotFound(string $controller, string $method)`
- `forInvalidRoute(string $route)`
- `forDynamicController(string $handler)`
- `forInvalidControllerName(string $handler)`

## `system\Router\RouteCollection.php`

**Classes**:
- `CodeIgniter\Router\RouteCollection implements RouteCollectionInterface`
- `CodeIgniter\Router\and`

**Functions/Methods**:
- `__construct(FileLocator $locator, Modules $moduleConfig)`
- `addPlaceholder($placeholder, ?string $pattern = null)`
- `getPlaceholders()`
- `setDefaultNamespace(string $value)`
- `setDefaultController(string $value)`
- `setDefaultMethod(string $value)`
- `setTranslateURIDashes(bool $value)`
- `setAutoRoute(bool $value)`
- `set404Override($callable = null)`
- `get404Override()`
- `discoverRoutes()`
- `setDefaultConstraint(string $placeholder)`
- `getDefaultController()`
- `getDefaultMethod()`
- `getDefaultNamespace()`
- `shouldTranslateURIDashes()`
- `shouldAutoRoute()`
- `getRoutes(?string $verb = null)`
- `getRoutesOptions(?string $from = null, ?string $verb = null)`
- `getHTTPVerb()`
- `setHTTPVerb(string $verb)`
- `map(array $routes = [], ?array $options = null)`
- `add(string $from, $to, ?array $options = null)`
- `addRedirect(string $from, string $to, int $status = 302)`
- `isRedirect(string $from)`
- `getRedirectCode(string $from)`
- `group(string $name, ...$params)`
- `resource(string $name, ?array $options = null)`
- `presenter(string $name, ?array $options = null)`
- `match(array $verbs = [], string $from = '', $to = '', ?array $options = null)`
- `get(string $from, $to, ?array $options = null)`
- `post(string $from, $to, ?array $options = null)`
- `put(string $from, $to, ?array $options = null)`
- `delete(string $from, $to, ?array $options = null)`
- `head(string $from, $to, ?array $options = null)`
- `patch(string $from, $to, ?array $options = null)`
- `options(string $from, $to, ?array $options = null)`
- `cli(string $from, $to, ?array $options = null)`
- `environment(string $env, Closure $callback)`
- `reverseRoute(string $search, ...$params)`
- `localizeRoute(string $route)`
- `isFiltered(string $search, ?string $verb = null)`
- `getFilterForRoute(string $search, ?string $verb = null)`
- `getFiltersForRoute(string $search, ?string $verb = null)`
- `fillRouteParams(string $from, ?array $params = null)`
- `create(string $verb, string $from, $to, ?array $options = null)`
- `processArrayCallableSyntax(string $from, array $to)`
- `getMethodParams(string $from)`
- `checkSubdomains($subdomains)`
- `determineCurrentSubdomain()`
- `resetRoutes()`
- `loadRoutesOptions(?string $verb = null)`
- `setPrioritize(bool $enabled = true)`
- `getRegisteredControllers(?string $verb = '*')`

## `system\Router\RouteCollectionInterface.php`

**Classes**:
- `CodeIgniter\Router\and`

**Functions/Methods**:
- `add(string $from, $to, ?array $options = null)`
- `addPlaceholder($placeholder, ?string $pattern = null)`
- `setDefaultNamespace(string $value)`
- `setDefaultController(string $value)`
- `setDefaultMethod(string $value)`
- `setTranslateURIDashes(bool $value)`
- `setAutoRoute(bool $value)`
- `set404Override($callable = null)`
- `get404Override()`
- `getDefaultController()`
- `getDefaultMethod()`
- `shouldTranslateURIDashes()`
- `shouldAutoRoute()`
- `getRoutes()`
- `getHTTPVerb()`
- `reverseRoute(string $search, ...$params)`
- `isRedirect(string $from)`
- `getRedirectCode(string $from)`

## `system\Router\Router.php`

**Classes**:
- `CodeIgniter\Router\Router implements RouterInterface`
- `CodeIgniter\Router\defined`

**Functions/Methods**:
- `__construct(RouteCollectionInterface $routes, ?Request $request = null)`
- `handle(?string $uri = null)`
- `getFilter()`
- `getFilters()`
- `controllerName()`
- `methodName()`
- `get404Override()`
- `params()`
- `directory()`
- `getMatchedRoute()`
- `getMatchedRouteOptions()`
- `setIndexPage($page)`
- `setTranslateURIDashes(bool $val = false)`
- `hasLocale()`
- `getLocale()`
- `checkRoutes(string $uri)`
- `autoRoute(string $uri)`
- `validateRequest(array $segments)`
- `scanControllers(array $segments)`
- `setDirectory(?string $dir = null, bool $append = false, bool $validate = true)`
- `isValidSegment(string $segment)`
- `setRequest(array $segments = [])`
- `setDefaultController()`
- `setMatchedRoute(string $route, $handler)`

## `system\Router\RouterInterface.php`

**Functions/Methods**:
- `__construct(RouteCollectionInterface $routes, ?Request $request = null)`
- `handle(?string $uri = null)`
- `controllerName()`
- `methodName()`
- `params()`
- `setIndexPage($page)`

## `system\Security\Exceptions\SecurityException.php`

**Classes**:
- `CodeIgniter\Security\Exceptions\SecurityException extends FrameworkException`

**Functions/Methods**:
- `forDisallowedAction()`
- `forInvalidUTF8Chars(string $source, string $string)`
- `forInvalidControlChars(string $source, string $string)`
- `forInvalidSameSite(string $samesite)`

## `system\Security\Security.php`

**Classes**:
- `CodeIgniter\Security\Security implements SecurityInterface`

**Functions/Methods**:
- `__construct(App $config)`
- `isCSRFCookie()`
- `configureSession()`
- `configureCookie(App $config)`
- `CSRFVerify(RequestInterface $request)`
- `getCSRFHash()`
- `getCSRFTokenName()`
- `verify(RequestInterface $request)`
- `getPostedToken(RequestInterface $request)`
- `getHash()`
- `randomize(string $hash)`
- `derandomize(string $token)`
- `getTokenName()`
- `getHeaderName()`
- `getCookieName()`
- `isExpired()`
- `shouldRedirect()`
- `sanitizeFilename(string $str, bool $relativePath = false)`
- `generateHash()`
- `isHashInCookie()`
- `saveHashInCookie()`
- `sendCookie(RequestInterface $request)`
- `doSendCookie()`
- `saveHashInSession()`

## `system\Security\SecurityInterface.php`

**Functions/Methods**:
- `verify(RequestInterface $request)`
- `getHash()`
- `getTokenName()`
- `getHeaderName()`
- `getCookieName()`
- `isExpired()`
- `shouldRedirect()`
- `sanitizeFilename(string $str, bool $relativePath = false)`

## `system\Session\Exceptions\SessionException.php`

**Classes**:
- `CodeIgniter\Session\Exceptions\SessionException extends FrameworkException`

**Functions/Methods**:
- `forMissingDatabaseTable()`
- `forInvalidSavePath(?string $path = null)`
- `forWriteProtectedSavePath(?string $path = null)`
- `forEmptySavepath()`
- `forInvalidSavePathFormat(string $path)`
- `forInvalidSameSiteSetting(string $samesite)`

## `system\Session\Handlers\ArrayHandler.php`

**Classes**:
- `CodeIgniter\Session\Handlers\ArrayHandler extends BaseHandler`

**Functions/Methods**:
- `open($path, $name)`
- `read($id)`
- `write($id, $data)`
- `close()`
- `destroy($id)`
- `gc($max_lifetime)`

## `system\Session\Handlers\BaseHandler.php`

**Classes**:
- `CodeIgniter\Session\Handlers\for`
- `CodeIgniter\Session\Handlers\BaseHandler implements SessionHandlerInterface`

**Functions/Methods**:
- `__construct(AppConfig $config, string $ipAddress)`
- `destroyCookie()`
- `lockSession(string $sessionID)`
- `releaseLock()`
- `fail()`

## `system\Session\Handlers\DatabaseHandler.php`

**Classes**:
- `CodeIgniter\Session\Handlers\DatabaseHandler extends BaseHandler`

**Functions/Methods**:
- `__construct(AppConfig $config, string $ipAddress)`
- `open($path, $name)`
- `read($id)`
- `setSelect(BaseBuilder $builder)`
- `decodeData($data)`
- `write($id, $data)`
- `prepareData(string $data)`
- `close()`
- `destroy($id)`
- `gc($max_lifetime)`
- `releaseLock()`

## `system\Session\Handlers\Database\MySQLiHandler.php`

**Classes**:
- `CodeIgniter\Session\Handlers\Database\MySQLiHandler extends DatabaseHandler`

**Functions/Methods**:
- `lockSession(string $sessionID)`
- `releaseLock()`

## `system\Session\Handlers\Database\PostgreHandler.php`

**Classes**:
- `CodeIgniter\Session\Handlers\Database\PostgreHandler extends DatabaseHandler`

**Functions/Methods**:
- `setSelect(BaseBuilder $builder)`
- `decodeData($data)`
- `prepareData(string $data)`
- `gc($max_lifetime)`
- `lockSession(string $sessionID)`
- `releaseLock()`

## `system\Session\Handlers\FileHandler.php`

**Classes**:
- `CodeIgniter\Session\Handlers\FileHandler extends BaseHandler`

**Functions/Methods**:
- `__construct(AppConfig $config, string $ipAddress)`
- `open($path, $name)`
- `read($id)`
- `write($id, $data)`
- `close()`
- `destroy($id)`
- `gc($max_lifetime)`
- `configureSessionIDRegex()`

## `system\Session\Handlers\MemcachedHandler.php`

**Classes**:
- `CodeIgniter\Session\Handlers\MemcachedHandler extends BaseHandler`

**Functions/Methods**:
- `__construct(AppConfig $config, string $ipAddress)`
- `open($path, $name)`
- `read($id)`
- `write($id, $data)`
- `close()`
- `destroy($id)`
- `gc($max_lifetime)`
- `lockSession(string $sessionID)`
- `releaseLock()`

## `system\Session\Handlers\RedisHandler.php`

**Classes**:
- `CodeIgniter\Session\Handlers\RedisHandler extends BaseHandler`

**Functions/Methods**:
- `__construct(AppConfig $config, string $ipAddress)`
- `open($path, $name)`
- `read($id)`
- `write($id, $data)`
- `close()`
- `destroy($id)`
- `gc($max_lifetime)`
- `lockSession(string $sessionID)`
- `releaseLock()`

## `system\Session\Session.php`

**Classes**:
- `CodeIgniter\Session\Session implements SessionInterface`

**Functions/Methods**:
- `__construct(SessionHandlerInterface $driver, App $config)`
- `start()`
- `stop()`
- `configure()`
- `configureSidLength()`
- `initVars()`
- `regenerate(bool $destroy = false)`
- `destroy()`
- `set($data, $value = null)`
- `get(?string $key = null)`
- `has(string $key)`
- `push(string $key, array $data)`
- `remove($key)`
- `__set(string $key, $value)`
- `__get(string $key)`
- `__isset(string $key)`
- `setFlashdata($data, $value = null)`
- `getFlashdata(?string $key = null)`
- `keepFlashdata($key)`
- `markAsFlashdata($key)`
- `unmarkFlashdata($key)`
- `getFlashKeys()`
- `setTempdata($data, $value = null, int $ttl = 300)`
- `getTempdata(?string $key = null)`
- `removeTempdata(string $key)`
- `markAsTempdata($key, int $ttl = 300)`
- `unmarkTempdata($key)`
- `getTempKeys()`
- `setSaveHandler()`
- `startSession()`
- `setCookie()`

## `system\Session\SessionInterface.php`

**Functions/Methods**:
- `regenerate(bool $destroy = false)`
- `destroy()`
- `set($data, $value = null)`
- `get(?string $key = null)`
- `has(string $key)`
- `remove($key)`
- `setFlashdata($data, $value = null)`
- `getFlashdata(?string $key = null)`
- `keepFlashdata($key)`
- `markAsFlashdata($key)`
- `unmarkFlashdata($key)`
- `getFlashKeys()`
- `setTempdata($data, $value = null, int $ttl = 300)`
- `getTempdata(?string $key = null)`
- `removeTempdata(string $key)`
- `markAsTempdata($key, int $ttl = 300)`
- `unmarkTempdata($key)`
- `getTempKeys()`

## `system\Test\bootstrap.php`

## `system\Test\CIDatabaseTestCase.php`

**Classes**:
- `CodeIgniter\Test\CIDatabaseTestCase extends CIUnitTestCase`

## `system\Test\CIUnitTestCase.php`

**Classes**:
- `CodeIgniter\Test\CIUnitTestCase extends TestCase`

**Functions/Methods**:
- `setUpBeforeClass()`
- `setUp()`
- `tearDown()`
- `callTraitMethods(string $stage)`
- `resetFactories()`
- `resetServices(bool $initAutoloader = true)`
- `mockCache()`
- `mockEmail()`
- `mockSession()`
- `assertLogged(string $level, $expectedMessage = null)`
- `assertEventTriggered(string $eventName)`
- `assertHeaderEmitted(string $header, bool $ignoreCase = false)`
- `assertHeaderNotEmitted(string $header, bool $ignoreCase = false)`
- `assertCloseEnough(int $expected, $actual, string $message = '', int $tolerance = 1)`
- `assertCloseEnoughString($expected, $actual, string $message = '', int $tolerance = 1)`
- `createApplication()`
- `getHeaderEmitted(string $header, bool $ignoreCase = false)`

## `system\Test\ConfigFromArrayTrait.php`

**Functions/Methods**:
- `createConfigFromArray(string $classname, array $config)`

## `system\Test\Constraints\SeeInDatabase.php`

**Classes**:
- `CodeIgniter\Test\Constraints\SeeInDatabase extends Constraint`

**Functions/Methods**:
- `__construct(ConnectionInterface $db, array $data)`
- `matches($table)`
- `failureDescription($table)`
- `getAdditionalInfo(string $table)`
- `toString($options = 0)`

## `system\Test\ControllerResponse.php`

**Classes**:
- `CodeIgniter\Test\ControllerResponse extends TestResponse`

**Functions/Methods**:
- `__construct()`
- `setResponse(ResponseInterface $response)`
- `setBody(string $body)`
- `getBody()`

## `system\Test\ControllerTester.php`

**Functions/Methods**:
- `setUpControllerTester()`
- `controller(string $name)`
- `execute(string $method, ...$params)`
- `withConfig($appConfig)`
- `withRequest($request)`
- `withResponse($response)`
- `withLogger($logger)`
- `withUri(string $uri)`
- `withBody($body)`

## `system\Test\ControllerTestTrait.php`

**Functions/Methods**:
- `setUpControllerTestTrait()`
- `controller(string $name)`
- `execute(string $method, ...$params)`
- `withConfig($appConfig)`
- `withRequest($request)`
- `withResponse($response)`
- `withLogger($logger)`
- `withUri(string $uri)`
- `withBody($body)`

## `system\Test\DatabaseTestTrait.php`

**Classes**:
- `CodeIgniter\Test\appropriate`

**Functions/Methods**:
- `setUpDatabase()`
- `tearDownDatabase()`
- `loadDependencies()`
- `setUpMigrate()`
- `regressDatabase()`
- `migrateDatabase()`
- `setUpSeed()`
- `runSeeds()`
- `seed(string $name)`
- `resetMigrationSeedCount()`
- `clearInsertCache()`
- `loadBuilder(string $tableName)`
- `grabFromDatabase(string $table, string $column, array $where)`
- `seeInDatabase(string $table, array $where)`
- `dontSeeInDatabase(string $table, array $where)`
- `hasInDatabase(string $table, array $data)`
- `seeNumRecords(int $expected, string $table, array $where)`
- `disableDBDebug()`
- `enableDBDebug()`

## `system\Test\DOMParser.php`

**Classes**:
- `CodeIgniter\Test\DOMParser`

**Functions/Methods**:
- `__construct()`
- `getBody()`
- `withString(string $content)`
- `withFile(string $path)`
- `see(?string $search = null, ?string $element = null)`
- `dontSee(?string $search = null, ?string $element = null)`
- `seeElement(string $element)`
- `dontSeeElement(string $element)`
- `seeLink(string $text, ?string $details = null)`
- `seeInField(string $field, string $value)`
- `seeCheckboxIsChecked(string $element)`
- `doXPath(?string $search, string $element, array $paths = [])`
- `parseSelector(string $selector)`

## `system\Test\Fabricator.php`

**Classes**:
- `CodeIgniter\Test\for`
- `CodeIgniter\Test\Fabricator`
- `CodeIgniter\Test\with`

**Functions/Methods**:
- `__construct($model, ?array $formatters = null, ?string $locale = null)`
- `resetCounts()`
- `getCount(string $table)`
- `setCount(string $table, int $count)`
- `upCount(string $table)`
- `downCount(string $table)`
- `getModel()`
- `getLocale()`
- `getFaker()`
- `getOverrides()`
- `setOverrides(array $overrides = [], $persist = true)`
- `getFormatters()`
- `setFormatters(?array $formatters = null)`
- `detectFormatters()`
- `guessFormatter($field)`
- `make(?int $count = null)`
- `makeArray()`
- `makeObject(?string $className = null)`
- `create(?int $count = null, bool $mock = false)`
- `createMock(?int $count = null)`

## `system\Test\FeatureResponse.php`

**Classes**:
- `CodeIgniter\Test\FeatureResponse extends TestResponse`

## `system\Test\FeatureTestCase.php`

**Classes**:
- `CodeIgniter\Test\with`
- `CodeIgniter\Test\FeatureTestCase extends CIUnitTestCase`

**Functions/Methods**:
- `withRoutes(?array $routes = null)`
- `withSession(?array $values = null)`
- `withHeaders(array $headers = [])`
- `withBodyFormat(string $format)`
- `withBody($body)`
- `skipEvents()`
- `call(string $method, string $path, ?array $params = null)`
- `get(string $path, ?array $params = null)`
- `post(string $path, ?array $params = null)`
- `put(string $path, ?array $params = null)`
- `patch(string $path, ?array $params = null)`
- `delete(string $path, ?array $params = null)`
- `options(string $path, ?array $params = null)`
- `setupRequest(string $method, ?string $path = null)`
- `setupHeaders(IncomingRequest $request)`
- `populateGlobals(string $method, Request $request, ?array $params = null)`
- `setRequestBody(Request $request, ?array $params = null)`

## `system\Test\FeatureTestTrait.php`

**Functions/Methods**:
- `withRoutes(?array $routes = null)`
- `withSession(?array $values = null)`
- `withHeaders(array $headers = [])`
- `withBodyFormat(string $format)`
- `withBody($body)`
- `skipEvents()`
- `call(string $method, string $path, ?array $params = null)`
- `get(string $path, ?array $params = null)`
- `post(string $path, ?array $params = null)`
- `put(string $path, ?array $params = null)`
- `patch(string $path, ?array $params = null)`
- `delete(string $path, ?array $params = null)`
- `options(string $path, ?array $params = null)`
- `setupRequest(string $method, ?string $path = null)`
- `setupHeaders(IncomingRequest $request)`
- `populateGlobals(string $method, Request $request, ?array $params = null)`
- `setRequestBody(Request $request, ?array $params = null)`

## `system\Test\Filters\CITestStreamFilter.php`

**Classes**:
- `CodeIgniter\Test\Filters\CITestStreamFilter extends php_user_filter`

**Functions/Methods**:
- `filter($in, $out, &$consumed, $closing)`

## `system\Test\FilterTestTrait.php`

**Functions/Methods**:
- `setUpFilterTestTrait()`
- `getFilterCaller($filter, string $position)`
- `getFiltersForRoute(string $route, string $position)`
- `assertFilter(string $route, string $position, string $alias)`
- `assertNotFilter(string $route, string $position, string $alias)`
- `assertHasFilters(string $route, string $position)`
- `assertNotHasFilters(string $route, string $position)`

## `system\Test\Interfaces\FabricatorModel.php`

**Functions/Methods**:
- `find($id = null)`
- `insert($data = null, bool $returnID = true)`
- `withDeleted($val = true)`
- `fake(Generator &$faker)`

## `system\Test\Mock\MockAppConfig.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockAppConfig extends App`

## `system\Test\Mock\MockAutoload.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockAutoload extends Autoload`

**Functions/Methods**:
- `__construct()`

## `system\Test\Mock\MockBuilder.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockBuilder extends BaseBuilder`

## `system\Test\Mock\MockCache.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockCache extends BaseHandler implements CacheInterface`
- `CodeIgniter\Test\Mock\to`

**Functions/Methods**:
- `initialize()`
- `get(string $key)`
- `remember(string $key, int $ttl, Closure $callback)`
- `save(string $key, $value, int $ttl = 60, bool $raw = false)`
- `delete(string $key)`
- `deleteMatching(string $pattern)`
- `increment(string $key, int $offset = 1)`
- `decrement(string $key, int $offset = 1)`
- `clean()`
- `getCacheInfo()`
- `getMetaData(string $key)`
- `isSupported()`
- `bypass(bool $bypass = true)`
- `assertHas(string $key)`
- `assertHasValue(string $key, $value = null)`
- `assertMissing(string $key)`

## `system\Test\Mock\MockCLIConfig.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockCLIConfig extends App`

## `system\Test\Mock\MockCodeIgniter.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockCodeIgniter extends CodeIgniter`

**Functions/Methods**:
- `callExit($code)`

## `system\Test\Mock\MockCommon.php`

**Functions/Methods**:
- `is_cli(?bool $newReturn = null)`

## `system\Test\Mock\MockConnection.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockConnection extends BaseConnection`

**Functions/Methods**:
- `shouldReturn(string $method, $return)`
- `query(string $sql, $binds = null, bool $setEscapeFlags = true, string $queryClass = '')`
- `connect(bool $persistent = false)`
- `reconnect()`
- `setDatabase(string $databaseName)`
- `getVersion()`
- `execute(string $sql)`
- `affectedRows()`
- `error()`
- `insertID()`
- `_listTables(bool $constrainByPrefix = false)`
- `_listColumns(string $table = '')`
- `_fieldData(string $table)`
- `_indexData(string $table)`
- `_foreignKeyData(string $table)`
- `_close()`
- `_transBegin()`
- `_transCommit()`
- `_transRollback()`

## `system\Test\Mock\MockCURLRequest.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockCURLRequest extends CURLRequest`

**Functions/Methods**:
- `setOutput($output)`
- `sendRequest(array $curlOptions = [])`
- `getBaseURI()`
- `getDelay()`

## `system\Test\Mock\MockEmail.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockEmail extends Email`

**Functions/Methods**:
- `send($autoClear = true)`

## `system\Test\Mock\MockEvents.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockEvents extends Events`

**Functions/Methods**:
- `getListeners()`
- `getEventsFile()`
- `getSimulate()`
- `unInitialize()`

## `system\Test\Mock\MockFileLogger.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockFileLogger extends FileHandler`

**Functions/Methods**:
- `__construct(array $config)`

## `system\Test\Mock\MockIncomingRequest.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockIncomingRequest extends IncomingRequest`

**Functions/Methods**:
- `detectURI($protocol, $baseURL)`

## `system\Test\Mock\MockLanguage.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockLanguage extends Language`

**Functions/Methods**:
- `setData(string $file, array $data, ?string $locale = null)`
- `requireFile(string $path)`
- `disableIntlSupport()`

## `system\Test\Mock\MockLogger.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockLogger`
- `CodeIgniter\Test\Mock\name`

## `system\Test\Mock\MockQuery.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockQuery extends Query`

## `system\Test\Mock\MockResourceController.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockResourceController extends ResourceController`

**Functions/Methods**:
- `getModel()`
- `getModelName()`
- `getFormat()`

## `system\Test\Mock\MockResourcePresenter.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockResourcePresenter extends ResourcePresenter`

**Functions/Methods**:
- `getModel()`
- `getModelName()`
- `getFormat()`

## `system\Test\Mock\MockResponse.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockResponse extends Response`

**Functions/Methods**:
- `getPretend()`
- `misbehave()`

## `system\Test\Mock\MockResult.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockResult extends BaseResult`

**Functions/Methods**:
- `getFieldCount()`
- `getFieldNames()`
- `getFieldData()`
- `freeResult()`
- `dataSeek($n = 0)`
- `fetchAssoc()`
- `fetchObject($className = 'stdClass')`
- `getNumRows()`

## `system\Test\Mock\MockSecurity.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockSecurity extends Security`

**Functions/Methods**:
- `doSendCookie()`
- `randomize(string $hash)`

## `system\Test\Mock\MockSecurityConfig.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockSecurityConfig extends Security`

## `system\Test\Mock\MockServices.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockServices extends BaseService`

**Functions/Methods**:
- `__construct()`
- `locator(bool $getShared = true)`

## `system\Test\Mock\MockSession.php`

**Classes**:
- `CodeIgniter\Test\Mock\itself`
- `CodeIgniter\Test\Mock\MockSession extends Session`

**Functions/Methods**:
- `setSaveHandler()`
- `startSession()`
- `setCookie()`
- `regenerate(bool $destroy = false)`

## `system\Test\Mock\MockTable.php`

**Classes**:
- `CodeIgniter\Test\Mock\MockTable extends Table`

**Functions/Methods**:
- `__call($method, $params)`

## `system\Test\ReflectionHelper.php`

**Classes**:
- `CodeIgniter\Test\name`
- `CodeIgniter\Test\name`
- `CodeIgniter\Test\name`

**Functions/Methods**:
- `getPrivateMethodInvoker($obj, $method)`
- `getAccessibleRefProperty($obj, $property)`
- `setPrivateProperty($obj, $property, $value)`
- `getPrivateProperty($obj, $property)`

## `system\Test\TestLogger.php`

**Classes**:
- `CodeIgniter\Test\TestLogger extends Logger`
- `CodeIgniter\Test\to`

**Functions/Methods**:
- `log($level, $message, array $context = [])`
- `didLog(string $level, $message)`
- `cleanup($file)`

## `system\Test\TestResponse.php`

**Classes**:
- `CodeIgniter\Test\TestResponse extends TestCase`

**Functions/Methods**:
- `__construct(ResponseInterface $response)`
- `setRequest(RequestInterface $request)`
- `setResponse(ResponseInterface $response)`
- `request()`
- `response()`
- `isOK()`
- `assertStatus(int $code)`
- `assertOK()`
- `assertNotOK()`
- `isRedirect()`
- `assertRedirect()`
- `assertRedirectTo(string $uri)`
- `assertNotRedirect()`
- `getRedirectUrl()`
- `assertSessionHas(string $key, $value = null)`
- `assertSessionMissing(string $key)`
- `assertHeader(string $key, $value = null)`
- `assertHeaderMissing(string $key)`
- `assertCookie(string $key, $value = null, string $prefix = '')`
- `assertCookieMissing(string $key)`
- `assertCookieExpired(string $key, string $prefix = '')`
- `getJSON()`
- `assertJSONFragment(array $fragment, bool $strict = false)`
- `assertJSONExact($test)`
- `getXML()`
- `assertSee(?string $search = null, ?string $element = null)`
- `assertDontSee(?string $search = null, ?string $element = null)`
- `assertSeeElement(string $search)`
- `assertDontSeeElement(string $search)`
- `assertSeeLink(string $text, ?string $details = null)`
- `assertSeeInField(string $field, ?string $value = null)`
- `__call($function, $params)`

## `system\ThirdParty\Escaper\Escaper.php`

**Classes**:
- `Laminas\Escaper\Escaper`

**Functions/Methods**:
- `__construct(?string $encoding = null)`
- `getEncoding()`
- `escapeHtml(string $string)`
- `escapeHtmlAttr(string $string)`
- `escapeJs(string $string)`
- `escapeUrl(string $string)`
- `escapeCss(string $string)`
- `htmlAttrMatcher($matches)`
- `jsMatcher($matches)`
- `cssMatcher($matches)`
- `toUtf8($string)`
- `fromUtf8($string)`
- `isUtf8($string)`
- `convertEncoding($string, $to, $from)`

## `system\ThirdParty\Escaper\Exception\ExceptionInterface.php`

## `system\ThirdParty\Escaper\Exception\InvalidArgumentException.php`

**Classes**:
- `Laminas\Escaper\Exception\InvalidArgumentException extends \InvalidArgumentException implements ExceptionInterface`

## `system\ThirdParty\Escaper\Exception\RuntimeException.php`

**Classes**:
- `Laminas\Escaper\Exception\RuntimeException extends \RuntimeException implements ExceptionInterface`

## `system\ThirdParty\Kint\CallFinder.php`

**Classes**:
- `Kint\CallFinder`

**Functions/Methods**:
- `getFunctionCalls($source, $line, $function)`
- `realTokenIndex(array $tokens, $index)`
- `tokenIsOperator($token)`
- `tokensToString(array $tokens)`
- `tokensTrim(array $tokens)`
- `tokensFormatted(array $tokens)`

## `system\ThirdParty\Kint\init.php`

## `system\ThirdParty\Kint\init_helpers.php`

**Functions/Methods**:
- `d(...$args)`
- `s(...$args)`

## `system\ThirdParty\Kint\Kint.php`

**Classes**:
- `Kint\Kint`
- `Kint\names`

**Functions/Methods**:
- `__construct(Parser $p, Renderer $r)`
- `setParser(Parser $p)`
- `getParser()`
- `setRenderer(Renderer $r)`
- `getRenderer()`
- `setStatesFromStatics(array $statics)`
- `setStatesFromCallInfo(array $info)`
- `dumpAll(array $vars, array $base)`
- `dumpVar(&$var, Value $base)`
- `getStatics()`
- `createFromStatics(array $statics)`
- `getBasesFromParamInfo(array $params, $argc)`
- `getCallInfo(array $aliases, array $trace, $argc)`
- `trace()`
- `dump(...$args)`
- `shortenPath($file)`
- `getIdeLink($file, $line)`
- `getSingleCall(array $frame, $argc)`

## `system\ThirdParty\Kint\Object\BasicObject.php`

**Classes**:
- `Kint\Object\BasicObject`

**Functions/Methods**:
- `__construct()`
- `addRepresentation(Representation $rep, $pos = null)`
- `replaceRepresentation(Representation $rep, $pos = null)`
- `removeRepresentation($rep)`
- `getRepresentation($name)`
- `getRepresentations()`
- `clearRepresentations()`
- `getType()`
- `getModifiers()`
- `getAccess()`
- `getName()`
- `getOperator()`
- `getSize()`
- `getValueShort()`
- `getAccessPath()`
- `transplant(BasicObject $old)`
- `blank($name = null, $access_path = null)`
- `sortByAccess(BasicObject $a, BasicObject $b)`
- `sortByName(BasicObject $a, BasicObject $b)`

## `system\ThirdParty\Kint\Object\BlobObject.php`

**Classes**:
- `Kint\Object\BlobObject extends BasicObject`

**Functions/Methods**:
- `getType()`
- `getValueShort()`
- `transplant(BasicObject $old)`
- `strlen($string, $encoding = false)`
- `substr($string, $start, $length = null, $encoding = false)`
- `detectEncoding($string)`

## `system\ThirdParty\Kint\Object\ClosureObject.php`

**Classes**:
- `Kint\Object\ClosureObject extends InstanceObject`

**Functions/Methods**:
- `getAccessPath()`
- `getSize()`
- `getParams()`

## `system\ThirdParty\Kint\Object\DateTimeObject.php`

**Classes**:
- `Kint\Object\DateTimeObject extends InstanceObject`

**Functions/Methods**:
- `__construct(DateTime $dt)`
- `getValueShort()`

## `system\ThirdParty\Kint\Object\InstanceObject.php`

**Classes**:
- `Kint\Object\InstanceObject extends BasicObject`

**Functions/Methods**:
- `getType()`
- `transplant(BasicObject $old)`
- `sortByHierarchy($a, $b)`

## `system\ThirdParty\Kint\Object\MethodObject.php`

**Classes**:
- `Kint\Object\MethodObject extends BasicObject`

**Functions/Methods**:
- `__construct(ReflectionFunctionAbstract $method)`
- `setAccessPathFrom(InstanceObject $parent)`
- `getValueShort()`
- `getModifiers()`
- `getAccessPath()`
- `getParams()`
- `getPhpDocUrl()`

## `system\ThirdParty\Kint\Object\ParameterObject.php`

**Classes**:
- `Kint\Object\ParameterObject extends BasicObject`

**Functions/Methods**:
- `__construct(ReflectionParameter $param)`
- `getType()`
- `getName()`
- `getDefault()`

## `system\ThirdParty\Kint\Object\Representation\ColorRepresentation.php`

**Classes**:
- `Kint\Object\Representation\ColorRepresentation extends Representation`

**Functions/Methods**:
- `__construct($value)`
- `getColor($variant = null)`
- `hasAlpha($variant = null)`
- `setValues($value)`
- `setValuesFromHex($hex)`
- `setValuesFromFunction($value)`
- `hslToRgb($h, $s, $l)`
- `rgbToHsl($red, $green, $blue)`
- `hueToRgb($m1, $m2, $hue)`

## `system\ThirdParty\Kint\Object\Representation\DocstringRepresentation.php`

**Classes**:
- `Kint\Object\Representation\DocstringRepresentation extends Representation`

**Functions/Methods**:
- `__construct($docstring, $file, $line, $class = null)`
- `getDocstringWithoutComments()`

## `system\ThirdParty\Kint\Object\Representation\MicrotimeRepresentation.php`

**Classes**:
- `Kint\Object\Representation\MicrotimeRepresentation extends Representation`

**Functions/Methods**:
- `__construct($seconds, $microseconds, $group, $lap = null, $total = null, $i = 0)`
- `getDateTime()`

## `system\ThirdParty\Kint\Object\Representation\Representation.php`

**Classes**:
- `Kint\Object\Representation\Representation`

**Functions/Methods**:
- `__construct($label, $name = null)`
- `getLabel()`
- `getName()`
- `setName($name)`
- `labelIsImplicit()`

## `system\ThirdParty\Kint\Object\Representation\SourceRepresentation.php`

**Classes**:
- `Kint\Object\Representation\SourceRepresentation extends Representation`

**Functions/Methods**:
- `__construct($filename, $line, $padding = 7)`
- `getSource($filename, $start_line = 1, $length = null)`

## `system\ThirdParty\Kint\Object\Representation\SplFileInfoRepresentation.php`

**Classes**:
- `Kint\Object\Representation\SplFileInfoRepresentation extends Representation`

**Functions/Methods**:
- `__construct(SplFileInfo $fileInfo)`
- `getLabel()`
- `getSize()`
- `getMTime()`

## `system\ThirdParty\Kint\Object\ResourceObject.php`

**Classes**:
- `Kint\Object\ResourceObject extends BasicObject`

**Functions/Methods**:
- `getType()`
- `transplant(BasicObject $old)`

## `system\ThirdParty\Kint\Object\StreamObject.php`

**Classes**:
- `Kint\Object\StreamObject extends ResourceObject`

**Functions/Methods**:
- `__construct(array $meta = null)`
- `getValueShort()`

## `system\ThirdParty\Kint\Object\ThrowableObject.php`

**Classes**:
- `Kint\Object\ThrowableObject extends InstanceObject`

**Functions/Methods**:
- `__construct($throw)`
- `getValueShort()`

## `system\ThirdParty\Kint\Object\TraceFrameObject.php`

**Classes**:
- `Kint\Object\TraceFrameObject extends BasicObject`

**Functions/Methods**:
- `__construct(BasicObject $base, array $raw_frame)`

## `system\ThirdParty\Kint\Object\TraceObject.php`

**Classes**:
- `Kint\Object\TraceObject extends BasicObject`

**Functions/Methods**:
- `getType()`
- `getSize()`

## `system\ThirdParty\Kint\Parser\ArrayLimitPlugin.php`

**Classes**:
- `Kint\Parser\ArrayLimitPlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`
- `recalcDepthLimit(Value $o)`

## `system\ThirdParty\Kint\Parser\ArrayObjectPlugin.php`

**Classes**:
- `Kint\Parser\ArrayObjectPlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\Base64Plugin.php`

**Classes**:
- `Kint\Parser\Base64Plugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\BinaryPlugin.php`

**Classes**:
- `Kint\Parser\BinaryPlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\BlacklistPlugin.php`

**Classes**:
- `Kint\Parser\BlacklistPlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`
- `blacklistValue(&$var, Value &$o)`

## `system\ThirdParty\Kint\Parser\ClassMethodsPlugin.php`

**Classes**:
- `Kint\Parser\ClassMethodsPlugin extends Plugin`
- `Kint\Parser\definition`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`
- `sort(MethodValue $a, MethodValue $b)`

## `system\ThirdParty\Kint\Parser\ClassStaticsPlugin.php`

**Classes**:
- `Kint\Parser\ClassStaticsPlugin extends Plugin`
- `Kint\Parser\properties`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`
- `sort(Value $a, Value $b)`

## `system\ThirdParty\Kint\Parser\ClosurePlugin.php`

**Classes**:
- `Kint\Parser\ClosurePlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\ColorPlugin.php`

**Classes**:
- `Kint\Parser\ColorPlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\DateTimePlugin.php`

**Classes**:
- `Kint\Parser\DateTimePlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\DOMDocumentPlugin.php`

**Classes**:
- `Kint\Parser\DOMDocumentPlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`
- `parseList(&$var, InstanceValue &$o, $trigger)`
- `parseNode(&$var, InstanceValue &$o)`
- `parseProperty(InstanceValue $o, $prop, &$var)`
- `textualNodeToString(InstanceValue $o)`

## `system\ThirdParty\Kint\Parser\FsPathPlugin.php`

**Classes**:
- `Kint\Parser\FsPathPlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\IteratorPlugin.php`

**Classes**:
- `Kint\Parser\IteratorPlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\JsonPlugin.php`

**Classes**:
- `Kint\Parser\JsonPlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\MicrotimePlugin.php`

**Classes**:
- `Kint\Parser\MicrotimePlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`
- `clean()`

## `system\ThirdParty\Kint\Parser\MysqliPlugin.php`

**Classes**:
- `Kint\Parser\MysqliPlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\Parser.php`

**Classes**:
- `Kint\Parser\Parser`
- `Kint\Parser\name`
- `Kint\Parser\name`

**Functions/Methods**:
- `__construct($depth_limit = 0, $caller = null)`
- `setCallerClass($caller = null)`
- `getCallerClass()`
- `setDepthLimit($depth_limit = 0)`
- `getDepthLimit()`
- `parse(&$var, Value $o)`
- `addPlugin(Plugin $p)`
- `clearPlugins()`
- `haltParse()`
- `childHasPath(InstanceValue $parent, Value $child)`
- `getCleanArray(array $array)`
- `noRecurseCall()`
- `parseGeneric(&$var, Value $o)`
- `parseString(&$var, Value $o)`
- `parseArray(array &$var, Value $o)`
- `parseObject(&$var, Value $o)`
- `parseResource(&$var, Value $o)`
- `parseResourceClosed(&$var, Value $o)`
- `applyPlugins(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\Plugin.php`

**Classes**:
- `Kint\Parser\Plugin`

**Functions/Methods**:
- `setParser(Parser $p)`
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\ProxyPlugin.php`

**Classes**:
- `Kint\Parser\ProxyPlugin extends Plugin`

**Functions/Methods**:
- `__construct(array $types, $triggers, $callback)`
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\SerializePlugin.php`

**Classes**:
- `Kint\Parser\SerializePlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\SimpleXMLElementPlugin.php`

**Classes**:
- `Kint\Parser\SimpleXMLElementPlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\SplFileInfoPlugin.php`

**Classes**:
- `Kint\Parser\SplFileInfoPlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\SplObjectStoragePlugin.php`

**Classes**:
- `Kint\Parser\SplObjectStoragePlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\StreamPlugin.php`

**Classes**:
- `Kint\Parser\StreamPlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\TablePlugin.php`

**Classes**:
- `Kint\Parser\TablePlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\ThrowablePlugin.php`

**Classes**:
- `Kint\Parser\ThrowablePlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\TimestampPlugin.php`

**Classes**:
- `Kint\Parser\TimestampPlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\ToStringPlugin.php`

**Classes**:
- `Kint\Parser\ToStringPlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`

## `system\ThirdParty\Kint\Parser\TracePlugin.php`

**Classes**:
- `Kint\Parser\TracePlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`
- `normalizePaths(array $paths)`

## `system\ThirdParty\Kint\Parser\XmlPlugin.php`

**Classes**:
- `Kint\Parser\XmlPlugin extends Plugin`

**Functions/Methods**:
- `getTypes()`
- `getTriggers()`
- `parse(&$var, Value &$o, $trigger)`
- `xmlToSimpleXML($var, $parent_path)`
- `xmlToDOMDocument($var, $parent_path)`

## `system\ThirdParty\Kint\Renderer\CliRenderer.php`

**Classes**:
- `Kint\Renderer\CliRenderer extends TextRenderer`

**Functions/Methods**:
- `__construct()`
- `colorValue($string)`
- `colorType($string)`
- `colorTitle($string)`
- `renderTitle(Value $o)`
- `preRender()`
- `postRender()`
- `escape($string, $encoding = false)`
- `utf8ToWindows($string)`

## `system\ThirdParty\Kint\Renderer\PlainRenderer.php`

**Classes**:
- `Kint\Renderer\PlainRenderer extends TextRenderer`

**Functions/Methods**:
- `__construct()`
- `setCallInfo(array $info)`
- `setStatics(array $statics)`
- `setPreRender($pre_render)`
- `getPreRender()`
- `colorValue($string)`
- `colorType($string)`
- `colorTitle($string)`
- `renderTitle(Value $o)`
- `preRender()`
- `postRender()`
- `ideLink($file, $line)`
- `escape($string, $encoding = false)`
- `utf8ToHtmlentity($string)`
- `renderJs()`
- `renderCss()`

## `system\ThirdParty\Kint\Renderer\Renderer.php`

**Classes**:
- `Kint\Renderer\Renderer`
- `Kint\Renderer\strings`
- `Kint\Renderer\strings`

**Functions/Methods**:
- `render(Value $o)`
- `renderNothing()`
- `setCallInfo(array $info)`
- `getCallInfo()`
- `setStatics(array $statics)`
- `getStatics()`
- `setShowTrace($show_trace)`
- `getShowTrace()`
- `matchPlugins(array $plugins, array $hints)`
- `filterParserPlugins(array $plugins)`
- `preRender()`
- `postRender()`
- `sortPropertiesFull(Value $a, Value $b)`
- `sortProperties(array $contents, $sort)`

## `system\ThirdParty\Kint\Renderer\RichRenderer.php`

**Classes**:
- `Kint\Renderer\RichRenderer extends Renderer`
- `Kint\Renderer\names`

**Functions/Methods**:
- `__construct()`
- `setCallInfo(array $info)`
- `setStatics(array $statics)`
- `setExpand($expand)`
- `getExpand()`
- `setForcePreRender()`
- `setPreRender($pre_render)`
- `getPreRender()`
- `setUseFolder($use_folder)`
- `getUseFolder()`
- `render(Value $o)`
- `renderNothing()`
- `renderHeaderWrapper(Value $o, $has_children, $contents)`
- `renderHeader(Value $o)`
- `renderChildren(Value $o)`
- `preRender()`
- `postRender()`
- `escape($string, $encoding = false)`
- `ideLink($file, $line)`
- `renderTab(Value $o, Representation $rep)`
- `getPlugin(array $plugins, array $hints)`
- `renderJs()`
- `renderCss()`
- `renderFolder()`

## `system\ThirdParty\Kint\Renderer\Rich\ArrayLimitPlugin.php`

**Classes**:
- `Kint\Renderer\Rich\ArrayLimitPlugin extends Plugin implements ValuePluginInterface`

**Functions/Methods**:
- `renderValue(Value $o)`

## `system\ThirdParty\Kint\Renderer\Rich\BinaryPlugin.php`

**Classes**:
- `Kint\Renderer\Rich\BinaryPlugin extends Plugin implements TabPluginInterface`

**Functions/Methods**:
- `renderTab(Representation $r)`

## `system\ThirdParty\Kint\Renderer\Rich\BlacklistPlugin.php`

**Classes**:
- `Kint\Renderer\Rich\BlacklistPlugin extends Plugin implements ValuePluginInterface`

**Functions/Methods**:
- `renderValue(Value $o)`

## `system\ThirdParty\Kint\Renderer\Rich\CallablePlugin.php`

**Classes**:
- `Kint\Renderer\Rich\CallablePlugin extends Plugin implements ValuePluginInterface`

**Functions/Methods**:
- `renderValue(Value $o)`
- `renderClosure(ClosureValue $o)`
- `renderCallable(Value $o)`
- `renderMethod(MethodValue $o)`

## `system\ThirdParty\Kint\Renderer\Rich\ClosurePlugin.php`

**Classes**:
- `Kint\Renderer\Rich\ClosurePlugin extends Plugin implements ValuePluginInterface`

**Functions/Methods**:
- `renderValue(Value $o)`

## `system\ThirdParty\Kint\Renderer\Rich\ColorPlugin.php`

**Classes**:
- `Kint\Renderer\Rich\ColorPlugin extends Plugin implements TabPluginInterface, ValuePluginInterface`

**Functions/Methods**:
- `renderValue(Value $o)`
- `renderTab(Representation $r)`

## `system\ThirdParty\Kint\Renderer\Rich\DepthLimitPlugin.php`

**Classes**:
- `Kint\Renderer\Rich\DepthLimitPlugin extends Plugin implements ValuePluginInterface`

**Functions/Methods**:
- `renderValue(Value $o)`

## `system\ThirdParty\Kint\Renderer\Rich\DocstringPlugin.php`

**Classes**:
- `Kint\Renderer\Rich\DocstringPlugin extends Plugin implements TabPluginInterface`

**Functions/Methods**:
- `renderTab(Representation $r)`

## `system\ThirdParty\Kint\Renderer\Rich\MicrotimePlugin.php`

**Classes**:
- `Kint\Renderer\Rich\MicrotimePlugin extends Plugin implements TabPluginInterface`

**Functions/Methods**:
- `renderTab(Representation $r)`
- `renderJs()`

## `system\ThirdParty\Kint\Renderer\Rich\ObjectPluginInterface.php`

**Functions/Methods**:
- `renderObject(BasicObject $o)`

## `system\ThirdParty\Kint\Renderer\Rich\Plugin.php`

**Classes**:
- `Kint\Renderer\Rich\Plugin implements PluginInterface`

**Functions/Methods**:
- `__construct(RichRenderer $r)`
- `renderLockedHeader(Value $o, $content)`

## `system\ThirdParty\Kint\Renderer\Rich\PluginInterface.php`

**Functions/Methods**:
- `__construct(RichRenderer $r)`

## `system\ThirdParty\Kint\Renderer\Rich\RecursionPlugin.php`

**Classes**:
- `Kint\Renderer\Rich\RecursionPlugin extends Plugin implements ValuePluginInterface`

**Functions/Methods**:
- `renderValue(Value $o)`

## `system\ThirdParty\Kint\Renderer\Rich\SimpleXMLElementPlugin.php`

**Classes**:
- `Kint\Renderer\Rich\SimpleXMLElementPlugin extends Plugin implements ValuePluginInterface`

**Functions/Methods**:
- `renderValue(Value $o)`

## `system\ThirdParty\Kint\Renderer\Rich\SourcePlugin.php`

**Classes**:
- `Kint\Renderer\Rich\SourcePlugin extends Plugin implements TabPluginInterface`

**Functions/Methods**:
- `renderTab(Representation $r)`

## `system\ThirdParty\Kint\Renderer\Rich\TablePlugin.php`

**Classes**:
- `Kint\Renderer\Rich\TablePlugin extends Plugin implements TabPluginInterface`

**Functions/Methods**:
- `renderTab(Representation $r)`

## `system\ThirdParty\Kint\Renderer\Rich\TabPluginInterface.php`

**Functions/Methods**:
- `renderTab(Representation $r)`

## `system\ThirdParty\Kint\Renderer\Rich\TimestampPlugin.php`

**Classes**:
- `Kint\Renderer\Rich\TimestampPlugin extends Plugin implements TabPluginInterface`

**Functions/Methods**:
- `renderTab(Representation $r)`

## `system\ThirdParty\Kint\Renderer\Rich\TraceFramePlugin.php`

**Classes**:
- `Kint\Renderer\Rich\TraceFramePlugin extends Plugin implements ValuePluginInterface`

**Functions/Methods**:
- `renderValue(Value $o)`

## `system\ThirdParty\Kint\Renderer\Rich\ValuePluginInterface.php`

**Functions/Methods**:
- `renderValue(Value $o)`

## `system\ThirdParty\Kint\Renderer\TextRenderer.php`

**Classes**:
- `Kint\Renderer\TextRenderer extends Renderer`

**Functions/Methods**:
- `__construct()`
- `render(Value $o)`
- `renderNothing()`
- `boxText($text, $width)`
- `renderTitle(Value $o)`
- `renderHeader(Value $o)`
- `renderChildren(Value $o)`
- `colorValue($string)`
- `colorType($string)`
- `colorTitle($string)`
- `postRender()`
- `filterParserPlugins(array $plugins)`
- `ideLink($file, $line)`
- `escape($string, $encoding = false)`
- `calledFrom()`
- `getPlugin(array $plugins, array $hints)`

## `system\ThirdParty\Kint\Renderer\Text\ArrayLimitPlugin.php`

**Classes**:
- `Kint\Renderer\Text\ArrayLimitPlugin extends Plugin`

**Functions/Methods**:
- `render(Value $o)`

## `system\ThirdParty\Kint\Renderer\Text\BlacklistPlugin.php`

**Classes**:
- `Kint\Renderer\Text\BlacklistPlugin extends Plugin`

**Functions/Methods**:
- `render(Value $o)`

## `system\ThirdParty\Kint\Renderer\Text\DepthLimitPlugin.php`

**Classes**:
- `Kint\Renderer\Text\DepthLimitPlugin extends Plugin`

**Functions/Methods**:
- `render(Value $o)`

## `system\ThirdParty\Kint\Renderer\Text\MicrotimePlugin.php`

**Classes**:
- `Kint\Renderer\Text\MicrotimePlugin extends Plugin`

**Functions/Methods**:
- `__construct(TextRenderer $r)`
- `render(Value $o)`
- `renderJs()`

## `system\ThirdParty\Kint\Renderer\Text\Plugin.php`

**Classes**:
- `Kint\Renderer\Text\Plugin`

**Functions/Methods**:
- `__construct(TextRenderer $r)`
- `render(Value $o)`

## `system\ThirdParty\Kint\Renderer\Text\RecursionPlugin.php`

**Classes**:
- `Kint\Renderer\Text\RecursionPlugin extends Plugin`

**Functions/Methods**:
- `render(Value $o)`

## `system\ThirdParty\Kint\Renderer\Text\TracePlugin.php`

**Classes**:
- `Kint\Renderer\Text\TracePlugin extends Plugin`

**Functions/Methods**:
- `render(Value $o)`

## `system\ThirdParty\Kint\Utils.php`

**Classes**:
- `Kint\Utils`

**Functions/Methods**:
- `__construct()`
- `getHumanReadableBytes($value)`
- `isSequential(array $array)`
- `isAssoc(array $array)`
- `composerGetExtras($key = 'kint')`
- `composerSkipFlags()`
- `isTrace(array $trace)`
- `traceFrameIsListed(array $frame, array $matches)`
- `normalizeAliases(array &$aliases)`
- `truncateString($input, $length = PHP_INT_MAX, $end = '...', $encoding = false)`
- `getTypeString(ReflectionType $type)`

## `system\ThirdParty\Kint\Zval\BlobValue.php`

**Classes**:
- `Kint\Zval\BlobValue extends Value`

**Functions/Methods**:
- `getType()`
- `getValueShort()`
- `transplant(Value $old)`
- `strlen($string, $encoding = false)`
- `substr($string, $start, $length = null, $encoding = false)`
- `detectEncoding($string)`

## `system\ThirdParty\Kint\Zval\ClosureValue.php`

**Classes**:
- `Kint\Zval\ClosureValue extends InstanceValue`

**Functions/Methods**:
- `getAccessPath()`
- `getSize()`
- `getParams()`

## `system\ThirdParty\Kint\Zval\DateTimeValue.php`

**Classes**:
- `Kint\Zval\DateTimeValue extends InstanceValue`

**Functions/Methods**:
- `__construct(DateTime $dt)`
- `getValueShort()`

## `system\ThirdParty\Kint\Zval\InstanceValue.php`

**Classes**:
- `Kint\Zval\InstanceValue extends Value`

**Functions/Methods**:
- `getType()`
- `transplant(Value $old)`
- `sortByHierarchy($a, $b)`

## `system\ThirdParty\Kint\Zval\MethodValue.php`

**Classes**:
- `Kint\Zval\MethodValue extends Value`

**Functions/Methods**:
- `__construct(ReflectionFunctionAbstract $method)`
- `setAccessPathFrom(InstanceValue $parent)`
- `getValueShort()`
- `getModifiers()`
- `getAccessPath()`
- `getParams()`
- `getPhpDocUrl()`

## `system\ThirdParty\Kint\Zval\ParameterValue.php`

**Classes**:
- `Kint\Zval\ParameterValue extends Value`

**Functions/Methods**:
- `__construct(ReflectionParameter $param)`
- `getType()`
- `getName()`
- `getDefault()`

## `system\ThirdParty\Kint\Zval\Representation\ColorRepresentation.php`

**Classes**:
- `Kint\Zval\Representation\ColorRepresentation extends Representation`

**Functions/Methods**:
- `__construct($value)`
- `getColor($variant = null)`
- `hasAlpha($variant = null)`
- `setValues($value)`
- `setValuesFromHex($hex)`
- `setValuesFromFunction($value)`
- `hslToRgb($h, $s, $l)`
- `rgbToHsl($red, $green, $blue)`
- `hueToRgb($m1, $m2, $hue)`

## `system\ThirdParty\Kint\Zval\Representation\DocstringRepresentation.php`

**Classes**:
- `Kint\Zval\Representation\DocstringRepresentation extends Representation`

**Functions/Methods**:
- `__construct($docstring, $file, $line, $class = null)`
- `getDocstringWithoutComments()`

## `system\ThirdParty\Kint\Zval\Representation\MicrotimeRepresentation.php`

**Classes**:
- `Kint\Zval\Representation\MicrotimeRepresentation extends Representation`

**Functions/Methods**:
- `__construct($seconds, $microseconds, $group, $lap = null, $total = null, $i = 0)`
- `getDateTime()`

## `system\ThirdParty\Kint\Zval\Representation\Representation.php`

**Classes**:
- `Kint\Zval\Representation\Representation`

**Functions/Methods**:
- `__construct($label, $name = null)`
- `getLabel()`
- `getName()`
- `setName($name)`
- `labelIsImplicit()`

## `system\ThirdParty\Kint\Zval\Representation\SourceRepresentation.php`

**Classes**:
- `Kint\Zval\Representation\SourceRepresentation extends Representation`

**Functions/Methods**:
- `__construct($filename, $line, $padding = 7)`
- `getSource($filename, $start_line = 1, $length = null)`

## `system\ThirdParty\Kint\Zval\Representation\SplFileInfoRepresentation.php`

**Classes**:
- `Kint\Zval\Representation\SplFileInfoRepresentation extends Representation`

**Functions/Methods**:
- `__construct(SplFileInfo $fileInfo)`
- `getLabel()`
- `getSize()`
- `getMTime()`

## `system\ThirdParty\Kint\Zval\ResourceValue.php`

**Classes**:
- `Kint\Zval\ResourceValue extends Value`

**Functions/Methods**:
- `getType()`
- `transplant(Value $old)`

## `system\ThirdParty\Kint\Zval\SimpleXMLElementValue.php`

**Classes**:
- `Kint\Zval\SimpleXMLElementValue extends InstanceValue`

**Functions/Methods**:
- `setIsStringValue($is_string_value)`
- `getValueShort()`

## `system\ThirdParty\Kint\Zval\StreamValue.php`

**Classes**:
- `Kint\Zval\StreamValue extends ResourceValue`

**Functions/Methods**:
- `__construct(array $meta = null)`
- `getValueShort()`

## `system\ThirdParty\Kint\Zval\ThrowableValue.php`

**Classes**:
- `Kint\Zval\ThrowableValue extends InstanceValue`

**Functions/Methods**:
- `__construct($throw)`
- `getValueShort()`

## `system\ThirdParty\Kint\Zval\TraceFrameValue.php`

**Classes**:
- `Kint\Zval\TraceFrameValue extends Value`

**Functions/Methods**:
- `__construct(Value $base, array $raw_frame)`

## `system\ThirdParty\Kint\Zval\TraceValue.php`

**Classes**:
- `Kint\Zval\TraceValue extends Value`

**Functions/Methods**:
- `getType()`
- `getSize()`

## `system\ThirdParty\Kint\Zval\Value.php`

**Classes**:
- `Kint\Zval\Value`

**Functions/Methods**:
- `__construct()`
- `addRepresentation(Representation $rep, $pos = null)`
- `replaceRepresentation(Representation $rep, $pos = null)`
- `removeRepresentation($rep)`
- `getRepresentation($name)`
- `getRepresentations()`
- `clearRepresentations()`
- `getType()`
- `getModifiers()`
- `getAccess()`
- `getName()`
- `getOperator()`
- `getSize()`
- `getValueShort()`
- `getAccessPath()`
- `transplant(Value $old)`
- `blank($name = null, $access_path = null)`
- `sortByAccess(Value $a, Value $b)`
- `sortByName(Value $a, Value $b)`

## `system\ThirdParty\PSR\Log\AbstractLogger.php`

**Classes**:
- `Psr\Log\AbstractLogger implements LoggerInterface`

**Functions/Methods**:
- `emergency($message, array $context = array()`
- `alert($message, array $context = array()`
- `critical($message, array $context = array()`
- `error($message, array $context = array()`
- `warning($message, array $context = array()`
- `notice($message, array $context = array()`
- `info($message, array $context = array()`
- `debug($message, array $context = array()`

## `system\ThirdParty\PSR\Log\InvalidArgumentException.php`

**Classes**:
- `Psr\Log\InvalidArgumentException extends \InvalidArgumentException`

## `system\ThirdParty\PSR\Log\LoggerAwareInterface.php`

**Functions/Methods**:
- `setLogger(LoggerInterface $logger)`

## `system\ThirdParty\PSR\Log\LoggerAwareTrait.php`

**Functions/Methods**:
- `setLogger(LoggerInterface $logger)`

## `system\ThirdParty\PSR\Log\LoggerInterface.php`

**Functions/Methods**:
- `emergency($message, array $context = array()`
- `alert($message, array $context = array()`
- `critical($message, array $context = array()`
- `error($message, array $context = array()`
- `warning($message, array $context = array()`
- `notice($message, array $context = array()`
- `info($message, array $context = array()`
- `debug($message, array $context = array()`
- `log($level, $message, array $context = array()`

## `system\ThirdParty\PSR\Log\LoggerTrait.php`

**Functions/Methods**:
- `emergency($message, array $context = array()`
- `alert($message, array $context = array()`
- `critical($message, array $context = array()`
- `error($message, array $context = array()`
- `warning($message, array $context = array()`
- `notice($message, array $context = array()`
- `info($message, array $context = array()`
- `debug($message, array $context = array()`
- `log($level, $message, array $context = array()`

## `system\ThirdParty\PSR\Log\LogLevel.php`

**Classes**:
- `Psr\Log\LogLevel`

## `system\ThirdParty\PSR\Log\NullLogger.php`

**Classes**:
- `Psr\Log\NullLogger extends AbstractLogger`

**Functions/Methods**:
- `log($level, $message, array $context = array()`

## `system\Throttle\Throttler.php`

**Classes**:
- `CodeIgniter\Throttle\Throttler implements ThrottlerInterface`

**Functions/Methods**:
- `__construct(CacheInterface $cache)`
- `getTokenTime()`
- `check(string $key, int $capacity, int $seconds, int $cost = 1)`
- `remove(string $key)`
- `setTestTime(int $time)`
- `time()`

## `system\Throttle\ThrottlerInterface.php`

**Functions/Methods**:
- `check(string $key, int $capacity, int $seconds, int $cost)`
- `getTokenTime()`

## `system\Typography\Typography.php`

**Classes**:
- `CodeIgniter\Typography\Typography`

**Functions/Methods**:
- `autoTypography(string $str, bool $reduceLinebreaks = false)`
- `formatCharacters(string $str)`
- `formatNewLines(string $str)`
- `protectCharacters(array $match)`
- `nl2brExceptPre(string $str)`

## `system\Validation\CreditCardRules.php`

**Classes**:
- `CodeIgniter\Validation\CreditCardRules`

**Functions/Methods**:
- `valid_cc_number(?string $ccNumber, string $type)`
- `isValidLuhn(?string $number = null)`

## `system\Validation\Exceptions\ValidationException.php`

**Classes**:
- `CodeIgniter\Validation\Exceptions\ValidationException extends FrameworkException`

**Functions/Methods**:
- `forRuleNotFound(?string $rule = null)`
- `forGroupNotFound(?string $group = null)`
- `forGroupNotArray(?string $group = null)`
- `forInvalidTemplate(?string $template = null)`
- `forNoRuleSets()`

## `system\Validation\FileRules.php`

**Classes**:
- `CodeIgniter\Validation\FileRules`

**Functions/Methods**:
- `__construct(?RequestInterface $request = null)`
- `uploaded(?string $blank, string $name)`
- `max_size(?string $blank, string $params)`
- `is_image(?string $blank, string $params)`
- `mime_in(?string $blank, string $params)`
- `ext_in(?string $blank, string $params)`
- `max_dims(?string $blank, string $params)`

## `system\Validation\FormatRules.php`

**Classes**:
- `CodeIgniter\Validation\FormatRules`

**Functions/Methods**:
- `alpha(?string $str = null)`
- `alpha_space(?string $value = null)`
- `alpha_dash(?string $str = null)`
- `alpha_numeric_punct($str)`
- `alpha_numeric(?string $str = null)`
- `alpha_numeric_space(?string $str = null)`
- `string($str = null)`
- `decimal(?string $str = null)`
- `hex(?string $str = null)`
- `integer(?string $str = null)`
- `is_natural(?string $str = null)`
- `is_natural_no_zero(?string $str = null)`
- `numeric(?string $str = null)`
- `regex_match(?string $str, string $pattern)`
- `timezone(?string $str = null)`
- `valid_base64(?string $str = null)`
- `valid_json(?string $str = null)`
- `valid_email(?string $str = null)`
- `valid_emails(?string $str = null)`
- `valid_ip(?string $ip = null, ?string $which = null)`
- `valid_url(?string $str = null)`
- `valid_url_strict(?string $str = null, ?string $validSchemes = null)`
- `valid_date(?string $str = null, ?string $format = null)`

## `system\Validation\Rules.php`

**Classes**:
- `CodeIgniter\Validation\Rules`

**Functions/Methods**:
- `differs(?string $str, string $field, array $data)`
- `equals(?string $str, string $val)`
- `exact_length(?string $str, string $val)`
- `greater_than(?string $str, string $min)`
- `greater_than_equal_to(?string $str, string $min)`
- `is_not_unique(?string $str, string $field, array $data)`
- `in_list(?string $value, string $list)`
- `is_unique(?string $str, string $field, array $data)`
- `less_than(?string $str, string $max)`
- `less_than_equal_to(?string $str, string $max)`
- `matches(?string $str, string $field, array $data)`
- `max_length(?string $str, string $val)`
- `min_length(?string $str, string $val)`
- `not_equals(?string $str, string $val)`
- `not_in_list(?string $value, string $list)`
- `required($str = null)`
- `required_with($str = null, ?string $fields = null, array $data = [])`
- `required_without($str = null, ?string $fields = null, array $data = [])`

## `system\Validation\StrictRules\CreditCardRules.php`

**Classes**:
- `CodeIgniter\Validation\StrictRules\CreditCardRules`

**Functions/Methods**:
- `__construct()`
- `valid_cc_number($ccNumber, string $type)`

## `system\Validation\StrictRules\FileRules.php`

**Classes**:
- `CodeIgniter\Validation\StrictRules\FileRules extends NonStrictFileRules`

## `system\Validation\StrictRules\FormatRules.php`

**Classes**:
- `CodeIgniter\Validation\StrictRules\FormatRules`

**Functions/Methods**:
- `__construct()`
- `alpha($str = null)`
- `alpha_space($value = null)`
- `alpha_dash($str = null)`
- `alpha_numeric_punct($str)`
- `alpha_numeric($str = null)`
- `alpha_numeric_space($str = null)`
- `string($str = null)`
- `decimal($str = null)`
- `hex($str = null)`
- `integer($str = null)`
- `is_natural($str = null)`
- `is_natural_no_zero($str = null)`
- `numeric($str = null)`
- `regex_match($str, string $pattern)`
- `timezone($str = null)`
- `valid_base64($str = null)`
- `valid_json($str = null)`
- `valid_email($str = null)`
- `valid_emails($str = null)`
- `valid_ip($ip = null, ?string $which = null)`
- `valid_url($str = null)`
- `valid_url_strict($str = null, ?string $validSchemes = null)`
- `valid_date($str = null, ?string $format = null)`

## `system\Validation\StrictRules\Rules.php`

**Classes**:
- `CodeIgniter\Validation\StrictRules\Rules`

**Functions/Methods**:
- `__construct()`
- `differs($str, string $field, array $data)`
- `equals($str, string $val)`
- `exact_length($str, string $val)`
- `greater_than($str, string $min)`
- `greater_than_equal_to($str, string $min)`
- `is_not_unique($str, string $field, array $data)`
- `in_list($value, string $list)`
- `is_unique($str, string $field, array $data)`
- `less_than($str, string $max)`
- `less_than_equal_to($str, string $max)`
- `matches($str, string $field, array $data)`
- `max_length($str, string $val)`
- `min_length($str, string $val)`
- `not_equals($str, string $val)`
- `not_in_list($value, string $list)`
- `required($str = null)`
- `required_with($str = null, ?string $fields = null, array $data = [])`
- `required_without($str = null, ?string $fields = null, array $data = [])`

## `system\Validation\Validation.php`

**Classes**:
- `CodeIgniter\Validation\Validation implements ValidationInterface`
- `CodeIgniter\Validation\to`

**Functions/Methods**:
- `__construct($config, RendererInterface $view)`
- `run(?array $data = null, ?string $group = null, ?string $dbGroup = null)`
- `check($value, string $rule, array $errors = [])`
- `processRules(string $field, ?string $label, $value, $rules = null, ?array $data = null)`
- `withRequest(RequestInterface $request)`
- `setRule(string $field, ?string $label, $rules, array $errors = [])`
- `setRules(array $rules, array $errors = [])`
- `getRules()`
- `hasRule(string $field)`
- `getRuleGroup(string $group)`
- `setRuleGroup(string $group)`
- `listErrors(string $template = 'list')`
- `showError(string $field, string $template = 'single')`
- `loadRuleSets()`
- `loadRuleGroup(?string $group = null)`
- `fillPlaceholders(array $rules, array $data)`
- `hasError(string $field)`
- `getError(?string $field = null)`
- `getErrors()`
- `setError(string $field, string $error)`
- `getErrorMessage(string $rule, string $field, ?string $label = null, ?string $param = null, ?string $value = null)`
- `splitRules(string $rules)`
- `reset()`

## `system\Validation\ValidationInterface.php`

**Classes**:
- `CodeIgniter\Validation\to`

**Functions/Methods**:
- `run(?array $data = null, ?string $group = null)`
- `check($value, string $rule, array $errors = [])`
- `withRequest(RequestInterface $request)`
- `setRules(array $rules, array $messages = [])`
- `hasRule(string $field)`
- `getError(string $field)`
- `getErrors()`
- `setError(string $alias, string $error)`
- `reset()`

## `system\Validation\Views\list.php`

## `system\Validation\Views\single.php`

## `system\View\Cell.php`

**Classes**:
- `CodeIgniter\View\that`
- `CodeIgniter\View\that`
- `CodeIgniter\View\Class`
- `CodeIgniter\View\Class`
- `CodeIgniter\View\Cell`
- `CodeIgniter\View\and`

**Functions/Methods**:
- `method($limit, $sort)`
- `method(array $params=null)`
- `__construct(CacheInterface $cache)`
- `render(string $library, $params = null, int $ttl = 0, ?string $cacheName = null)`
- `prepareParams($params)`
- `determineClass(string $library)`

## `system\View\Exceptions\ViewException.php`

**Classes**:
- `CodeIgniter\View\Exceptions\ViewException extends FrameworkException`

**Functions/Methods**:
- `forInvalidCellMethod(string $class, string $method)`
- `forMissingCellParameters(string $class, string $method)`
- `forInvalidCellParameter(string $key)`
- `forNoCellClass()`
- `forInvalidCellClass(?string $class = null)`
- `forTagSyntaxError(string $output)`
- `forInvalidDecorator(string $className)`

## `system\View\Filters.php`

**Classes**:
- `CodeIgniter\View\Filters`

**Functions/Methods**:
- `capitalize(string $value)`
- `date($value, string $format)`
- `date_modify($value, string $adjustment)`
- `default($value, string $default)`
- `esc($value, string $context = 'html')`
- `excerpt(string $value, string $phrase, int $radius = 100)`
- `highlight(string $value, string $phrase)`
- `highlight_code($value)`
- `limit_chars($value, int $limit = 500)`
- `limit_words($value, int $limit = 100)`
- `local_number($value, string $type = 'decimal', int $precision = 4, ?string $locale = null)`
- `local_currency($value, string $currency, ?string $locale = null, $fraction = null)`
- `nl2br(string $value)`
- `prose(string $value)`
- `round(string $value, $precision = 2, string $type = 'common')`
- `title(string $value)`

## `system\View\Parser.php`

**Classes**:
- `CodeIgniter\View\Parser extends View`

**Functions/Methods**:
- `__construct(ViewConfig $config, ?string $viewPath = null, $loader = null, ?bool $debug = null, ?LoggerInterface $logger = null)`
- `render(string $view, ?array $options = null, ?bool $saveData = null)`
- `renderString(string $template, ?array $options = null, ?bool $saveData = null)`
- `setData(array $data = [], ?string $context = null)`
- `parse(string $template, array $data = [], ?array $options = null)`
- `parseSingle(string $key, string $val)`
- `parsePair(string $variable, array $data, string $template)`
- `parseComments(string $template)`
- `extractNoparse(string $template)`
- `insertNoparse(string $template)`
- `parseConditionals(string $template)`
- `setDelimiters($leftDelimiter = '{', $rightDelimiter = '}')`
- `setConditionalDelimiters($leftDelimiter = '{', $rightDelimiter = '}')`
- `replaceSingle($pattern, $content, $template, bool $escape = false)`
- `prepareReplacement(array $matches, string $replace, bool $escape = true)`
- `shouldAddEscaping(string $key)`
- `applyFilters(string $replace, array $filters)`
- `parsePlugins(string $template)`
- `addPlugin(string $alias, callable $callback, bool $isPair = false)`
- `removePlugin(string $alias)`
- `objectToArray($value)`

## `system\View\Plugins.php`

**Classes**:
- `CodeIgniter\View\Plugins`

**Functions/Methods**:
- `currentURL()`
- `previousURL()`
- `mailto(array $params = [])`
- `safeMailto(array $params = [])`
- `lang(array $params = [])`
- `ValidationErrors(array $params = [])`
- `route(array $params = [])`
- `siteURL(array $params = [])`
- `cspScriptNonce()`
- `cspStyleNonce()`

## `system\View\RendererInterface.php`

**Functions/Methods**:
- `render(string $view, ?array $options = null, bool $saveData = false)`
- `renderString(string $view, ?array $options = null, bool $saveData = false)`
- `setData(array $data = [], ?string $context = null)`
- `setVar(string $name, $value = null, ?string $context = null)`
- `resetData()`

## `system\View\Table.php`

**Classes**:
- `CodeIgniter\View\Table`
- `CodeIgniter\View\properties`

**Functions/Methods**:
- `__construct($config = [])`
- `setTemplate($template)`
- `setHeading()`
- `setFooting()`
- `makeColumns($array = [], $columnLimit = 0)`
- `setEmpty($value)`
- `addRow()`
- `_prepArgs(array $args)`
- `setCaption($caption)`
- `generate($tableData = null)`
- `if(isset($this->function)`
- `clear()`
- `_setFromDBResult($object)`
- `_setFromArray($data)`
- `_compileTemplate()`
- `_defaultTemplate()`

## `system\View\View.php`

**Classes**:
- `CodeIgniter\View\View implements RendererInterface`

**Functions/Methods**:
- `__construct(ViewConfig $config, ?string $viewPath = null, ?FileLocator $loader = null, ?bool $debug = null, ?LoggerInterface $logger = null)`
- `render(string $view, ?array $options = null, ?bool $saveData = null)`
- `renderString(string $view, ?array $options = null, ?bool $saveData = null)`
- `excerpt(string $string, int $length = 20)`
- `setData(array $data = [], ?string $context = null)`
- `setVar(string $name, $value = null, ?string $context = null)`
- `resetData()`
- `getData()`
- `extend(string $layout)`
- `section(string $name)`
- `endSection()`
- `renderSection(string $sectionName)`
- `include(string $view, ?array $options = null, $saveData = true)`
- `getPerformanceData()`
- `logPerformance(float $start, float $end, string $view)`
- `prepareTemplateData(bool $saveData)`

## `system\View\ViewDecoratorInterface.php`

**Functions/Methods**:
- `decorate(string $html)`

## `system\View\ViewDecoratorTrait.php`

**Functions/Methods**:
- `decorateOutput(string $html)`

