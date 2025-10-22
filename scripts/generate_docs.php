<?php
/**
 * Documentation generator for the RSRA CodeIgniter project.
 *
 * This script scans the repository directories, extracts class and function
 * signatures from PHP files, and writes organized Markdown documentation
 * under the docs/ directory with a browser-viewable index.html.
 */

declare(strict_types=1);

// Configuration
$projectRoot = realpath(__DIR__ . '/..');
$docsDir = $projectRoot . DIRECTORY_SEPARATOR . 'docs';

// Discover top-level entries dynamically to guarantee full coverage
$excludeTop = ['docs', 'scripts', '.git', '.svn', '.idea', 'vendor', 'node_modules'];
$topEntries = array_filter(scandir($projectRoot) ?: [], function ($f) use ($projectRoot, $excludeTop) {
	return $f !== '.' && $f !== '..' && !in_array($f, $excludeTop, true);
});
$scanTargets = [];
foreach ($topEntries as $entry) {
	$scanTargets[] = $entry;
}

// Ensure docs directory exists
if (!is_dir($docsDir)) {
	mkdir($docsDir, 0775, true);
}

/**
 * Recursively list all files under a directory, returning relative paths.
 */
function listAllFiles(string $root, string $base): array {
	$files = [];
	$iterator = new RecursiveIteratorIterator(
		new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS)
	);
	foreach ($iterator as $fileInfo) {
		$path = $fileInfo->getPathname();
		$rel = ltrim(str_replace($base, '', $path), DIRECTORY_SEPARATOR);
		$files[] = $rel;
	}
	return $files;
}

/**
 * Extract class and function signatures from a PHP file content.
 */
function extractSymbols(string $phpCode): array {
	$classes = [];
	$functions = [];

	// Normalize line endings
	$code = str_replace(["\r\n", "\r"], "\n", $phpCode);

	// Capture namespace (optional/useful in system libs)
	$namespace = null;
	if (preg_match('/^\s*namespace\s+([^;]+);/m', $code, $m)) {
		$namespace = trim($m[1]);
	}

	// Capture classes with optional extends/implements
	if (preg_match_all('/\bclass\s+([A-Za-z_][A-Za-z0-9_]*)\s*(?:extends\s+([A-Za-z_\\\\][A-Za-z0-9_\\\\]*))?\s*(?:implements\s+([A-Za-z_\\\\][A-Za-z0-9_\\\\]*(?:\s*,\s*[A-Za-z_\\\\][A-Za-z0-9_\\\\]*)*))?/m', $code, $matches, PREG_SET_ORDER)) {
		foreach ($matches as $m) {
			$classes[] = [
				'name' => $m[1],
				'extends' => $m[2] ?? '',
				'implements' => $m[3] ?? '',
				'namespace' => $namespace,
			];
		}
	}

	// Capture function/method declarations (public/protected/private/static optional)
	if (preg_match_all('/\b(?:public|protected|private)?\s*(?:static\s*)?function\s+([A-Za-z_][A-Za-z0-9_]*)\s*\(([^)]*)\)/m', $code, $matches, PREG_SET_ORDER)) {
		foreach ($matches as $m) {
			$functions[] = [
				'name' => $m[1],
				'params' => trim($m[2]),
			];
		}
	}

	return [$classes, $functions];
}

/**
 * Extract additional insights for human-readable summaries.
 */
function extractDeepInsights(string $phpCode): array {
	$code = str_replace(["\r\n", "\r"], "\n", $phpCode);

	// Docblocks for file-level and class-level
	$docblocks = [];
	if (preg_match_all('/\/\*\*([\s\S]*?)\*\//m', $code, $m)) {
		foreach ($m[1] as $block) {
			$clean = trim(preg_replace('/^\s*\*\s?/m', '', $block));
			$docblocks[] = $clean;
		}
	}

	// Views referenced: CI4 style return view('path', data) or legacy $this->load->view('path', data)
	$views = [];
	if (preg_match_all("/\breturn\s+view\s*\(\s*['\"]([^'\"]+)['\"]/m", $code, $mv)) {
		$views = array_merge($views, $mv[1]);
	}
	if (preg_match_all("/\$this->load->view\s*\(\s*['\"]([^'\"]+)['\"]/m", $code, $mv2)) {
		$views = array_merge($views, $mv2[1]);
	}
	$views = array_values(array_unique($views));

	// Model usages: $this->X_model, new X_model, service('...model')
	$modelsUsed = [];
	if (preg_match_all('/\$this->([A-Za-z_][A-Za-z0-9_]*)_model\b/m', $code, $mm)) {
		$modelsUsed = array_merge($modelsUsed, $mm[1]);
	}
	if (preg_match_all('/new\s+([A-Za-z_][A-Za-z0-9_]*)_model\b/m', $code, $mm2)) {
		$modelsUsed = array_merge($modelsUsed, $mm2[1]);
	}
	$modelsUsed = array_values(array_unique($modelsUsed));

	// Table hints in models: protected $table = '...'; or FROM/JOIN in SQL strings
	$tables = [];
	if (preg_match_all("/\$table\s*=\s*['\"]([^'\"]+)['\"]/m", $code, $mt)) {
		$tables = array_merge($tables, $mt[1]);
	}
	if (preg_match_all("/(?:FROM|JOIN)\s+([a-zA-Z0-9_]+)/i", $code, $msql)) {
		$tables = array_merge($tables, $msql[1]);
	}
	$tables = array_values(array_unique($tables));

	return [
		'docblocks' => $docblocks,
		'views' => $views,
		'models' => $modelsUsed,
		'tables' => $tables,
	];
}

/**
 * Write a file atomically.
 */
function writeFile(string $path, string $content): void {
	$tmp = $path . '.tmp';
	file_put_contents($tmp, $content);
	if (file_exists($path)) {
		unlink($path);
	}
	rename($tmp, $path);
}

/**
 * Generate a Markdown-safe code span.
 */
function code(string $text): string {
	return '`' . str_replace('`', '\\`', $text) . '`';
}

/**
 * Convert a subset of Markdown to simple HTML.
 */
function mdToHtmlSimple(string $md): string {
    $lines = preg_split("/\n/", $md);
    $htmlLines = [];
    $inList = false;
    $inTable = false;
    foreach ($lines as $line) {
        // Inline transforms first
        $line = preg_replace('/`([^`]+)`/', '<code>$1</code>', $line);
        $line = preg_replace('/\*\*([^*]+)\*\*/', '<strong>$1</strong>', $line);
        // Markdown links [text](url)
        $line = preg_replace('/\[([^\]]+)\]\(([^\)]+)\)/', '<a href="$2">$1</a>', $line);

        // Tables
        if (preg_match('/^\|.*\|$/', $line)) {
            if (!$inTable) { $htmlLines[] = '<table>'; $inTable = true; }
            // skip markdown alignment row
            if (preg_match('/^\|\s*-+\s*\|/', $line)) { continue; }
            $cells = array_map('trim', array_filter(explode('|', trim($line, '|'))));
            $rowHtml = '<tr>' . implode('', array_map(fn($c) => '<td>' . $c . '</td>', $cells)) . '</tr>';
            $htmlLines[] = $rowHtml;
            continue;
        } else if ($inTable) {
            $htmlLines[] = '</table>';
            $inTable = false;
        }

        // Headings
        if (preg_match('/^###\s+(.*)$/', $line, $m)) { $htmlLines[] = '<h3>' . $m[1] . '</h3>'; continue; }
        if (preg_match('/^##\s+(.*)$/', $line, $m)) { $htmlLines[] = '<h2>' . $m[1] . '</h2>'; continue; }
        if (preg_match('/^#\s+(.*)$/', $line, $m)) { $htmlLines[] = '<h1>' . $m[1] . '</h1>'; continue; }

        // Lists
        if (preg_match('/^-\s+(.*)$/', $line, $m)) {
            if (!$inList) { $htmlLines[] = '<ul>'; $inList = true; }
            $htmlLines[] = '<li>' . $m[1] . '</li>';
            continue;
        } else if ($inList && trim($line) === '') {
            $htmlLines[] = '</ul>';
            $inList = false;
            continue;
        }

        // Paragraphs
        if (trim($line) === '') { $htmlLines[] = ''; continue; }
        $htmlLines[] = '<p>' . $line . '</p>';
    }
    if ($inList) { $htmlLines[] = '</ul>'; }
    if ($inTable) { $htmlLines[] = '</table>'; }
    return implode("\n", $htmlLines);
}

function wrapHtmlPage(string $title, string $bodyHtml): string {
    return '<!doctype html>\n<html><head><meta charset="utf-8" />'
        . '<meta name="viewport" content="width=device-width, initial-scale=1" />'
        . '<title>' . htmlspecialchars($title) . '</title>'
        . '<style>body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;padding:24px;line-height:1.6} code{background:#f3f4f6;padding:2px 4px;border-radius:4px} pre{background:#0b1020;color:#e5e7eb;padding:12px;border-radius:6px;overflow:auto} table{border-collapse:collapse} td,th{border:1px solid #e5e7eb;padding:6px 8px}</style>'
        . '</head><body>' . $bodyHtml . '</body></html>';
}

/** Build a hierarchical manifest tree for the file browser */
function buildManifest(array $paths): array {
    $root = ['name' => '/', 'type' => 'dir', 'children' => []];
    foreach ($paths as $rel) {
        $parts = preg_split('~[\\\/]~', $rel);
        $node =& $root;
        foreach ($parts as $i => $part) {
            $isLast = ($i === count($parts) - 1);
            if ($isLast) {
                $node['children'][] = [
                    'name' => $part,
                    'type' => 'file',
                    'rel' => $rel,
                    'docHtml' => 'files/' . str_replace(['\\','/'], '_', $rel) . '.html'
                ];
            } else {
                // Find or create dir
                $found = false;
                foreach ($node['children'] as &$child) {
                    if ($child['type'] === 'dir' && $child['name'] === $part) { $node =& $child; $found = true; break; }
                }
                if (!$found) {
                    $node['children'][] = ['name' => $part, 'type' => 'dir', 'children' => []];
                    $node =& $node['children'][array_key_last($node['children'])];
                }
            }
        }
    }
    return $root;
}

// Collect all files
$allFiles = [];
foreach ($scanTargets as $target) {
	$abs = $projectRoot . DIRECTORY_SEPARATOR . $target;
	if (is_dir($abs)) {
		$files = listAllFiles($abs, $projectRoot . DIRECTORY_SEPARATOR);
		foreach ($files as $rel) {
			$allFiles[] = $rel;
		}
	}
}
sort($allFiles, SORT_NATURAL | SORT_FLAG_CASE);

// Generate files.md: complete file inventory
$filesMd = [];
$filesMd[] = '# File Inventory';
$filesMd[] = '';
$filesMd[] = 'This list is generated automatically and includes every file under:';
$filesMd[] = '- ' . implode("\n- ", array_map(fn($s) => code($s), $scanTargets));
$filesMd[] = '';
$filesMd[] = '**Total files**: ' . count($allFiles);
$filesMd[] = '';
foreach ($allFiles as $rel) {
	$filesMd[] = '- ' . code($rel);
}
// Also write as HTML
$filesMdContent = implode("\n", $filesMd) . "\n";
writeFile($docsDir . DIRECTORY_SEPARATOR . 'files.md', $filesMdContent);
writeFile($docsDir . DIRECTORY_SEPARATOR . 'files.html', wrapHtmlPage('File Inventory', mdToHtmlSimple($filesMdContent)));

// Generate controllers.md and models.md and system.md summaries with symbols
$controllers = [];
$models = [];
$systems = [];
$byFile = [];

foreach ($allFiles as $rel) {
	if (substr($rel, -4) !== '.php') {
		continue;
	}
	$absPath = $projectRoot . DIRECTORY_SEPARATOR . $rel;
	$code = @file_get_contents($absPath);
	if ($code === false) continue;
	[$classes, $functions] = extractSymbols($code);
	$insights = extractDeepInsights($code);
	$entry = [
		'path' => $rel,
		'classes' => $classes,
		'functions' => $functions,
		'insights' => $insights,
	];
	$byFile[$rel] = $entry;
	if (str_starts_with($rel, 'app' . DIRECTORY_SEPARATOR . 'Controllers' . DIRECTORY_SEPARATOR)) {
		$controllers[] = $entry;
	} elseif (str_starts_with($rel, 'app' . DIRECTORY_SEPARATOR . 'Models' . DIRECTORY_SEPARATOR)) {
		$models[] = $entry;
	} elseif (str_starts_with($rel, 'system' . DIRECTORY_SEPARATOR)) {
		$systems[] = $entry;
	}
}

/**
 * Render a collection of file symbol documentation as Markdown.
 */
function renderSymbols(string $title, array $entries): string {
	$out = [];
	$out[] = '# ' . $title;
	$out[] = '';
	$out[] = '**Files documented**: ' . count($entries);
	$out[] = '';
	foreach ($entries as $e) {
		$out[] = '## ' . code($e['path']);
		$out[] = '';
		if (!empty($e['classes'])) {
			$out[] = '**Classes**:';
			foreach ($e['classes'] as $c) {
				$signature = $c['name'];
				if (!empty($c['extends'])) $signature .= ' extends ' . $c['extends'];
				if (!empty($c['implements'])) $signature .= ' implements ' . $c['implements'];
				if (!empty($c['namespace'])) $signature = $c['namespace'] . '\\' . $signature;
				$out[] = '- ' . code($signature);
			}
			$out[] = '';
		}
		if (!empty($e['functions'])) {
			$out[] = '**Functions/Methods**:';
			foreach ($e['functions'] as $f) {
				$params = $f['params'] === '' ? '' : $f['params'];
				$out[] = '- ' . code($f['name'] . '(' . $params . ')');
			}
			$out[] = '';
		}
	}
	return implode("\n", $out) . "\n";
}

$controllersMd = renderSymbols('Controllers', $controllers);
$modelsMd = renderSymbols('Models', $models);
$systemMd = renderSymbols('System (Core Library)', $systems);
writeFile($docsDir . DIRECTORY_SEPARATOR . 'controllers.md', $controllersMd);
writeFile($docsDir . DIRECTORY_SEPARATOR . 'models.md', $modelsMd);
writeFile($docsDir . DIRECTORY_SEPARATOR . 'system.md', $systemMd);
writeFile($docsDir . DIRECTORY_SEPARATOR . 'controllers.html', wrapHtmlPage('Controllers', mdToHtmlSimple($controllersMd)));
writeFile($docsDir . DIRECTORY_SEPARATOR . 'models.html', wrapHtmlPage('Models', mdToHtmlSimple($modelsMd)));
writeFile($docsDir . DIRECTORY_SEPARATOR . 'system.html', wrapHtmlPage('System (Core Library)', mdToHtmlSimple($systemMd)));

// Per-file pages: human-readable summary + signatures
$filesOutDir = $docsDir . DIRECTORY_SEPARATOR . 'files';
if (!is_dir($filesOutDir)) {
	mkdir($filesOutDir, 0775, true);
}

foreach ($byFile as $rel => $entry) {
	$md = [];
	$md[] = '# ' . $rel;
	$md[] = '';
	$abs = $projectRoot . DIRECTORY_SEPARATOR . $rel;
	$size = is_file($abs) ? filesize($abs) : 0;
	$ext = pathinfo($rel, PATHINFO_EXTENSION);
	$md[] = '- Path: ' . code($rel);
	$md[] = '- Type: ' . ($ext !== '' ? strtoupper($ext) : '');
	$md[] = '- Size: ' . ($size !== false ? (string) $size . ' bytes' : '');
	$md[] = '';

	// Deep insights: docblocks, references to views/models/tables
	if (!empty($entry['insights']['docblocks'])) {
		$md[] = '## Summary (from docblocks)';
		$md[] = '';
		foreach ($entry['insights']['docblocks'] as $block) {
			$md[] = $block;
			$md[] = '';
		}
	}
	$ins = $entry['insights'];
	if (!empty($ins['views']) || !empty($ins['models']) || !empty($ins['tables'])) {
		$md[] = '## References';
		$md[] = '';
		if (!empty($ins['views'])) {
			$md[] = '**Views Rendered**';
			foreach ($ins['views'] as $v) { $md[] = '- ' . code($v); }
			$md[] = '';
		}
		if (!empty($ins['models'])) {
			$md[] = '**Models Used**';
			foreach ($ins['models'] as $m) { $md[] = '- ' . code($m . '_model'); }
			$md[] = '';
		}
		if (!empty($ins['tables'])) {
			$md[] = '**Database Tables (inferred)**';
			foreach ($ins['tables'] as $t) { $md[] = '- ' . code($t); }
			$md[] = '';
		}
	}

	if (!empty($entry['classes']) || !empty($entry['functions'])) {
		$md[] = '## Symbols';
		$md[] = '';
		$md[] = renderSymbols('Symbols', [$entry]);
	}
$mdContent = implode("\n", $md);
$targetBase = $filesOutDir . DIRECTORY_SEPARATOR . str_replace(['\\', '/'], '_', $rel);
writeFile($targetBase . '.md', $mdContent);
writeFile($targetBase . '.html', wrapHtmlPage($rel, mdToHtmlSimple($mdContent)));
}

// Build a browsable file tree index linking to per-file pages
$tree = [];
$tree[] = '# Files Browser';
$tree[] = '';
$tree[] = 'Click any file to view its summary and symbols.';
$tree[] = '';
foreach ($allFiles as $rel) {
	$link = 'files/' . str_replace(['\\', '/'], '_', $rel) . '.md';
	$tree[] = '- [' . $rel . '](' . $link . ')';
}
$filesBrowserMd = implode("\n", $tree) . "\n";
writeFile($docsDir . DIRECTORY_SEPARATOR . 'files-browser.md', $filesBrowserMd);
writeFile($docsDir . DIRECTORY_SEPARATOR . 'files-browser.html', wrapHtmlPage('Files Browser', mdToHtmlSimple($filesBrowserMd)));

// Create interactive files.html with JS-powered tree + preview
$manifest = buildManifest($allFiles);
$manifestJson = json_encode($manifest, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
$filesHtml = <<<HTML
<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Files</title>
  <style>
    body{margin:0;font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif}
    header{padding:12px 16px;background:#0f172a;color:#e2e8f0}
    main{display:grid;grid-template-columns:320px 1fr;min-height:calc(100vh - 52px)}
    aside{border-right:1px solid #e5e7eb;overflow:auto}
    #tree{padding:12px}
    #tree ul{list-style:none;padding-left:16px}
    #tree li{margin:4px 0}
    #tree a{color:#0f172a;text-decoration:none}
    #tree a:hover{text-decoration:underline}
    #preview{padding:16px;overflow:auto}
    .dir{font-weight:600}
  </style>
</head>
<body>
  <header><strong>Files</strong></header>
  <main>
    <aside><div id="tree"></div></aside>
    <section id="preview">Select a file to preview its documentation.</section>
  </main>
  <script>
    const manifest = $manifestJson;
    function renderNode(node){
      if(node.type==='file'){
        const li=document.createElement('li');
        const a=document.createElement('a'); a.href='#'; a.textContent=node.name; a.onclick=(e)=>{e.preventDefault(); loadPreview(node.docHtml)};
        li.appendChild(a); return li;
      }
      const li=document.createElement('li');
      const span=document.createElement('span'); span.textContent=node.name==='/'?'Project Root':node.name; span.className='dir';
      li.appendChild(span);
      const ul=document.createElement('ul');
      (node.children||[]).sort((a,b)=> (a.type===b.type? a.name.localeCompare(b.name) : (a.type==='dir'?-1:1))).forEach(child=>{ ul.appendChild(renderNode(child)); });
      li.appendChild(ul); return li;
    }
    function buildTree(){
      const root=document.createElement('ul');
      root.appendChild(renderNode(manifest));
      document.getElementById('tree').appendChild(root);
    }
    async function loadPreview(path){
      const res = await fetch(path); const html = await res.text();
      document.getElementById('preview').innerHTML = html;
    }
    buildTree();
  </script>
</body>
</html>
HTML;
writeFile($docsDir . DIRECTORY_SEPARATOR . 'files.html', $filesHtml);

// Generate overview and flows
$overview = [];
$overview[] = '# Project Overview';
$overview[] = '';
$overview[] = '**Framework**: CodeIgniter 4.x (PHP)';
$overview[] = '**App path**: ' . code('app/');
$overview[] = '**Public entry**: ' . code('index.php');
$overview[] = '**Views**: ' . code('app/Views');
$overview[] = '**Assets**: ' . code('assets/');
$overview[] = '**Plugins/Modules**: ' . code('plugins/');
$overview[] = '';
$overview[] = 'This document set was generated automatically to enumerate the complete file list and summarize classes and functions across controllers, models, and the system core. The UI layer under ' . code('app/Views') . ' is composed of PHP view templates grouped by feature.';
$overviewMd = implode("\n", $overview) . "\n";
writeFile($docsDir . DIRECTORY_SEPARATOR . 'overview.md', $overviewMd);
writeFile($docsDir . DIRECTORY_SEPARATOR . 'overview.html', wrapHtmlPage('Project Overview', mdToHtmlSimple($overviewMd)));

$execution = [];
$execution[] = '# Execution Flow';
$execution[] = '';
$execution[] = '- ' . code('index.php') . ' bootstraps CodeIgniter via ' . code('system/bootstrap.php') . ' and ' . code('app/Config/Boot/*');
$execution[] = '- HTTP request is routed using ' . code('app/Config/Routes.php') . ' to a Controller action.';
$execution[] = '- Controllers extend ' . code('App_Controller') . ' or ' . code('Security_Controller') . ' and orchestrate Models + Views.';
$execution[] = '- Models encapsulate database access and business logic. Many extend ' . code('Crud_model') . '.';
$execution[] = '- Views under ' . code('app/Views') . ' render HTML via PHP templates.';
$execution[] = '- Plugins under ' . code('plugins/') . ' provide modular features (e.g., HR, Warehouse, REST API).';
$execution[] = '';
$execution[] = 'For detailed controller/model signatures, see the respective pages.';
$executionMd = implode("\n", $execution) . "\n";
writeFile($docsDir . DIRECTORY_SEPARATOR . 'execution-flow.md', $executionMd);
writeFile($docsDir . DIRECTORY_SEPARATOR . 'execution-flow.html', wrapHtmlPage('Execution Flow', mdToHtmlSimple($executionMd)));

$dataFlow = [];
$dataFlow[] = '# Data Flow';
$dataFlow[] = '';
$dataFlow[] = 'Typical request-level data flow:';
$dataFlow[] = '1. Router matches URI to Controller@method.';
$dataFlow[] = '2. Controller validates input and delegates to one or more Models.';
$dataFlow[] = '3. Models query/update the database and return structured arrays/objects.';
$dataFlow[] = '4. Controller selects a View and passes data arrays (e.g., ' . code('$view_data') . ').';
$dataFlow[] = '5. View renders HTML/JS using the provided data.';
$dataFlow[] = '';
$dataFlow[] = 'Notable data domains inferred from models/controllers:';
$dataFlow[] = '- Projects, Tasks, Milestones, Timesheets';
$dataFlow[] = '- Invoices, Estimates, Payments, Taxes';
$dataFlow[] = '- Clients, Leads, Contacts, Companies';
$dataFlow[] = '- Files, Comments, Notifications';
$dataFlow[] = '- Tickets, Knowledge Base, Help';
$dataFlow[] = '- Events, Calendars, Announcements';
$dataFlow[] = '- Orders, Items, Item Categories';
$dataFlow[] = '- Settings, Roles, Team, Permissions';
$dataFlow[] = '';
$dataFlowMd = implode("\n", $dataFlow) . "\n";
writeFile($docsDir . DIRECTORY_SEPARATOR . 'data-flow.md', $dataFlowMd);
writeFile($docsDir . DIRECTORY_SEPARATOR . 'data-flow.html', wrapHtmlPage('Data Flow', mdToHtmlSimple($dataFlowMd)));

// Build a simple routes map from app/Config/Routes.php
$routesFile = $projectRoot . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'Routes.php';
$routesMd = [];
$routesMd[] = '# Routes Map';
$routesMd[] = '';
if (file_exists($routesFile)) {
	$routesPhp = (string) file_get_contents($routesFile);
	$routesMd[] = 'Detected route declarations from ' . code('app/Config/Routes.php') . ' (basic parsing):';
	$routesMd[] = '';
	$pattern = '/\$routes->(get|post|add|put|patch|delete)\s*\(\s*[\'\"]([^\'\"]+)[\'\"]\s*,\s*[\'\"]([^\'\"]+)[\'\"]\s*\)\s*;?/i';
	if (preg_match_all($pattern, $routesPhp, $matches, PREG_SET_ORDER)) {
		$routesMd[] = '| Method | URI | Target |';
		$routesMd[] = '|---|---|---|';
		foreach ($matches as $m) {
			$routesMd[] = '|' . strtoupper($m[1]) . '|' . $m[2] . '|' . $m[3] . '|';
		}
	} else {
		$routesMd[] = '_No explicit route declarations matched the parser. CI may be using auto-routing._';
	}
} else {
	$routesMd[] = '_Routes file not found._';
}
$routesMdContent = implode("\n", $routesMd) . "\n";
writeFile($docsDir . DIRECTORY_SEPARATOR . 'routes.md', $routesMdContent);
writeFile($docsDir . DIRECTORY_SEPARATOR . 'routes.html', wrapHtmlPage('Routes Map', mdToHtmlSimple($routesMdContent)));

// Human-readable Controllers Overview (plain language)
$controllerDescriptions = [];
function humanizeControllerName(string $filename): string {
	$name = basename($filename, '.php');
	$name = str_replace('_', ' ', $name);
	return trim($name);
}
function guessPurpose(string $controller): string {
	$map = [
		'Projects' => 'Manage projects, tasks, milestones, timesheets, files, and project settings.',
		'Invoices' => 'Create and manage invoices, payments, and recurring billing.',
		'Estimates' => 'Prepare and manage estimates/quotes and convert them to invoices.',
		'Clients' => 'Manage client companies and contacts with CRM features.',
		'Leads' => 'Track potential clients, lead sources, statuses, and conversion.',
		'Tickets' => 'Customer support ticketing, comments, and templates.',
		'Events' => 'Calendar events, reminders, and integrations.',
		'Expenses' => 'Expense tracking, categories, and summaries.',
		'Items' => 'Item/catalog management for orders and billing.',
		'Orders' => 'Sales orders and related items/statuses.',
		'Contracts' => 'Contract templates, items, and contract lifecycle.',
		'Proposals' => 'Proposals with templates and items.',
		'Timeline' => 'Activity timeline and posts/comments.',
		'Messages' => 'Internal messaging between users/clients.',
		'Notifications' => 'System notifications and preferences.',
		'Dashboard' => 'Home dashboard with widgets and stats.',
		'Settings' => 'Application settings and configuration.',
		'Team' => 'Teams and member management.',
		'Team_members' => 'User profiles and access.',
		'Labels' => 'Label taxonomy used across modules.',
		'Knowledge_base' => 'Help center articles and categories.',
		'Files' => 'General file management linked to modules.',
		'Attendance' => 'Time clock in/out and timecards.',
		'Leaves' => 'Leave/absence management with types and approvals.',
		'Payment_methods' => 'Payment gateway settings (Stripe, PayPal, Paytm).',
		'Pay_invoice' => 'Public invoice payment endpoints.',
		'Plugins' => 'Plugins manager for optional modules.',
		'Checklist_template' => 'Reusable checklist templates and items.',
		'Checklist_groups' => 'Groupings of checklists for projects.',
		'Pages' => 'CMS-like content pages.',
		'Roles' => 'Role-based permissions.',
		'Signin' => 'Authentication (login).',
		'Signup' => 'Self-service account creation.',
		'Search' => 'Global search suggestions.',
	];
	return $map[$controller] ?? 'Feature controller handling ' . strtolower(str_replace('_', ' ', $controller)) . '.';
}

$controllersOverview = [];
$controllersOverview[] = '# Controllers Overview (Human-readable)';
$controllersOverview[] = '';
foreach ($controllers as $e) {
	$base = humanizeControllerName($e['path']);
	$controller = basename($base, '.php');
	$controller = str_replace('app\\Controllers\\', '', $controller);
	$nameOnly = basename($e['path'], '.php');
	$desc = guessPurpose($nameOnly);
	$controllersOverview[] = '## ' . code($nameOnly);
	$controllersOverview[] = '- Purpose: ' . $desc;
	$controllersOverview[] = '- Actions: ' . count($e['functions']) . ' methods';
	$controllersOverview[] = '';
}
$controllersOverviewMd = implode("\n", $controllersOverview) . "\n";
writeFile($docsDir . DIRECTORY_SEPARATOR . 'controllers-overview.md', $controllersOverviewMd);
writeFile($docsDir . DIRECTORY_SEPARATOR . 'controllers-overview.html', wrapHtmlPage('Controllers Overview', mdToHtmlSimple($controllersOverviewMd)));

// Features & Modules summary (includes plugins)
$features = [];
$features[] = '# Features & Modules';
$features[] = '';
$features[] = 'Core application modules (from Controllers):';
$features[] = '';
foreach ($controllers as $e) {
	$nameOnly = basename($e['path'], '.php');
	$features[] = '- ' . code($nameOnly) . ': ' . guessPurpose($nameOnly);
}
$features[] = '';
$features[] = 'Installed plugins (folders under ' . code('plugins/') . '):';
$features[] = '';
$pluginsDir = $projectRoot . DIRECTORY_SEPARATOR . 'plugins';
if (is_dir($pluginsDir)) {
	$entries = array_filter(scandir($pluginsDir) ?: [], fn($f) => $f !== '.' && $f !== '..' && is_dir($pluginsDir . DIRECTORY_SEPARATOR . $f));
	foreach ($entries as $p) {
		$features[] = '- ' . code('plugins/' . $p);
	}
} else {
	$features[] = '_No plugins directory found._';
}
$featuresMd = implode("\n", $features) . "\n";
writeFile($docsDir . DIRECTORY_SEPARATOR . 'features.md', $featuresMd);
writeFile($docsDir . DIRECTORY_SEPARATOR . 'features.html', wrapHtmlPage('Features & Modules', mdToHtmlSimple($featuresMd)));

// Plugins deep pages: infer flows and endpoints for each plugin
$pluginsRoot = $projectRoot . DIRECTORY_SEPARATOR . 'plugins';
if (is_dir($pluginsRoot)) {
    $plugins = array_filter(scandir($pluginsRoot) ?: [], fn($f)=> $f!=='.' && $f!=='..' && is_dir($pluginsRoot . DIRECTORY_SEPARATOR . $f));
    $pluginsIndexMd = [ '# Plugins Overview', '' ];
    foreach ($plugins as $plg) {
        $plgPath = $pluginsRoot . DIRECTORY_SEPARATOR . $plg;
        $plgFiles = listAllFiles($plgPath, $projectRoot . DIRECTORY_SEPARATOR);
        sort($plgFiles, SORT_NATURAL | SORT_FLAG_CASE);
        $controllersFound = [];
        $endpoints = [];
        $modelsUsed = [];
        $viewsUsed = [];
        foreach ($plgFiles as $rel) {
            if (substr($rel,-4) !== '.php') continue;
            $code = @file_get_contents($projectRoot . DIRECTORY_SEPARATOR . $rel);
            if ($code === false) continue;
            // endpoints like routes inside plugin
            if (preg_match_all('/\$routes->(get|post|add|put|patch|delete)\s*\(\s*[\'\"]([^\'\"]+)[\'\"]\s*,\s*[\'\"]([^\'\"]+)[\'\"]\s*\)/i', $code, $ms, PREG_SET_ORDER)){
                foreach ($ms as $m) { $endpoints[] = [ strtoupper($m[1]), $m[2], $m[3] ]; }
            }
            if (preg_match('/\bclass\s+([A-Za-z_][A-Za-z0-9_]*)\s+extends\s+([A-Za-z_\\\\]+)/', $code, $mc)) {
                $controllersFound[] = $mc[1];
            }
            $ins = extractDeepInsights($code);
            $modelsUsed = array_values(array_unique(array_merge($modelsUsed, $ins['models'])));
            $viewsUsed = array_values(array_unique(array_merge($viewsUsed, $ins['views'])));
        }
        $page = [];
        $page[] = '# Plugin: ' . $plg;
        $page[] = '';
        $page[] = '**Files**: ' . count($plgFiles);
        $page[] = '';
        if (!empty($controllersFound)) { $page[] = '## Controllers'; foreach ($controllersFound as $c){ $page[] = '- ' . code($c); } $page[]=''; }
        if (!empty($modelsUsed)) { $page[] = '## Models Used'; foreach ($modelsUsed as $m){ $page[] = '- ' . code($m . '_model'); } $page[]=''; }
        if (!empty($viewsUsed)) { $page[] = '## Views Used'; foreach ($viewsUsed as $v){ $page[] = '- ' . code($v); } $page[]=''; }
        if (!empty($endpoints)) { $page[] = '## Endpoints (inferred)'; $page[]='| Method | URI | Target |'; $page[]='|---|---|---|'; foreach ($endpoints as $ep){ $page[]='|' . $ep[0] . '|' . $ep[1] . '|' . $ep[2] . '|'; } $page[]=''; }
        $pluginsIndexMd[] = '- [' . $plg . '](plugins/' . $plg . '.html)';
        $pageMd = implode("\n", $page) . "\n";
        $outDir = $docsDir . DIRECTORY_SEPARATOR . 'plugins'; if (!is_dir($outDir)) mkdir($outDir, 0775, true);
        writeFile($outDir . DIRECTORY_SEPARATOR . $plg . '.md', $pageMd);
        writeFile($outDir . DIRECTORY_SEPARATOR . $plg . '.html', wrapHtmlPage('Plugin: ' . $plg, mdToHtmlSimple($pageMd)));
    }
    $pluginsIndex = implode("\n", $pluginsIndexMd) . "\n";
    writeFile($docsDir . DIRECTORY_SEPARATOR . 'plugins.md', $pluginsIndex);
    writeFile($docsDir . DIRECTORY_SEPARATOR . 'plugins.html', wrapHtmlPage('Plugins Overview', mdToHtmlSimple($pluginsIndex)));
}

// Generate index.md + index.html to view markdown in browser
$indexMd = [];
$indexMd[] = '# RSRA Documentation';
$indexMd[] = '';
$indexMd[] = '- [Project Overview](overview.html)';
$indexMd[] = '- [File Inventory](files.html)';
$indexMd[] = '- [Files Browser](files-browser.html)';
$indexMd[] = '- [Execution Flow](execution-flow.html)';
$indexMd[] = '- [Data Flow](data-flow.html)';
$indexMd[] = '- [Features & Modules](features.html)';
$indexMd[] = '- [Routes Map](routes.html)';
$indexMd[] = '- [Plugins Overview](plugins.html)';
$indexMd[] = '- [Controllers Overview](controllers-overview.html)';
$indexMd[] = '- [Controllers](controllers.html)';
$indexMd[] = '- [Models](models.html)';
$indexMd[] = '- [System (Core Library)](system.html)';
writeFile($docsDir . DIRECTORY_SEPARATOR . 'index.md', implode("\n", $indexMd) . "\n");

$indexHtml = <<<'HTML'
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>RSRA Documentation</title>
    <style>
        body { margin: 0; font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; }
        header { padding: 12px 16px; background: #0f172a; color: #e2e8f0; }
        main { display: grid; grid-template-columns: 280px 1fr; min-height: calc(100vh - 52px); }
        nav { border-right: 1px solid #e5e7eb; padding: 16px; overflow: auto; }
        article { padding: 24px; overflow: auto; }
        a { color: #0ea5e9; text-decoration: none; }
        a:hover { text-decoration: underline; }
        pre { background: #0b1020; color: #e5e7eb; padding: 12px; border-radius: 6px; overflow: auto; }
        code { background: #f3f4f6; padding: 2px 4px; border-radius: 4px; }
        ul { line-height: 1.6; }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script>
        async function loadMarkdown(path) {
            const res = await fetch(path);
            const text = await res.text();
            const html = marked.parse(text, { mangle: false, headerIds: true });
            document.getElementById('content').innerHTML = html;
        }
        function onNavClick(e, path) {
            e.preventDefault();
            history.pushState({ path }, '', '#' + path);
            loadMarkdown(path);
        }
        window.addEventListener('popstate', (e) => {
            const path = (location.hash || '#index.md').slice(1);
            loadMarkdown(path);
        });
        window.addEventListener('DOMContentLoaded', () => {
            const path = (location.hash || '#index.md').slice(1);
            loadMarkdown(path);
        });
    </script>
    </head>
<body>
    <header>
        <strong>RSRA Documentation</strong>
    </header>
    <main>
        <nav>
            <ul>
                <li><a href="#index.md" onclick="onNavClick(event,'index.md')">Home</a></li>
                <li><a href="#overview.html" onclick="onNavClick(event,'overview.html')">Project Overview</a></li>
                <li><a href="#files.html" onclick="onNavClick(event,'files.html')">File Inventory</a></li>
                <li><a href="#files-browser.html" onclick="onNavClick(event,'files-browser.html')">Files Browser</a></li>
                <li><a href="#execution-flow.html" onclick="onNavClick(event,'execution-flow.html')">Execution Flow</a></li>
                <li><a href="#data-flow.html" onclick="onNavClick(event,'data-flow.html')">Data Flow</a></li>
                <li><a href="#features.html" onclick="onNavClick(event,'features.html')">Features & Modules</a></li>
                <li><a href="#routes.html" onclick="onNavClick(event,'routes.html')">Routes Map</a></li>
                <li><a href="#plugins.html" onclick="onNavClick(event,'plugins.html')">Plugins Overview</a></li>
                <li><a href="#controllers-overview.html" onclick="onNavClick(event,'controllers-overview.html')">Controllers Overview</a></li>
                <li><a href="#controllers.html" onclick="onNavClick(event,'controllers.html')">Controllers (Signatures)</a></li>
                <li><a href="#models.html" onclick="onNavClick(event,'models.html')">Models</a></li>
                <li><a href="#system.html" onclick="onNavClick(event,'system.html')">System (Core)</a></li>
            </ul>
        </nav>
        <article id="content">Loading...</article>
    </main>
</body>
</html>
HTML;

writeFile($docsDir . DIRECTORY_SEPARATOR . 'index.html', $indexHtml);

echo "Docs generated in: {$docsDir}\n";
exit(0);


