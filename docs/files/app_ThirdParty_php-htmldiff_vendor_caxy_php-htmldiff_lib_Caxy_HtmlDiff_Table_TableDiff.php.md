# app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\Table\TableDiff.php

- Path: `app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\Table\TableDiff.php`
- Type: PHP
- Size: 27387 bytes

## Summary (from docblocks)

Class TableDiff.

@var null|Table

@var null|Table

@var null|\DOMElement

@var null|\DOMDocument

@var int

@var int

@var array

@param string              $oldText
@param string              $newText
@param HtmlDiffConfig|null $config
@return self

TableDiff constructor.
@param string     $oldText
@param string     $newText
@param string     $encoding
@param array|null $specialCaseTags
@param bool|null  $groupDiffs

@return string

@param TableRow[] $oldRows
@param TableRow[] $newRows
@param RowMatch[] $matches

@param Operation $operation
@param array     $newRows
@param array     $appliedRowSpans
@param bool      $forceExpansion

@param Operation $operation
@param array     $oldRows
@param array     $appliedRowSpans
@param bool      $forceExpansion

@param Operation $operation
@param array     $oldRows
@param array     $newRows
@param array     $appliedRowSpans

@param Operation $operation
@param array     $oldRows
@param array     $newRows
@param array     $appliedRowSpans

@param array $oldMatchData
@param array $newMatchData
@return array

@param array $newMatchData
@param int   $startInOld
@param int   $endInOld
@param int   $startInNew
@param int   $endInNew
@param array $matches

@param array $newMatchData
@param int   $startInOld
@param int   $endInOld
@param int   $startInNew
@param int   $endInNew
@return RowMatch|null

@param TableRow|null $oldRow
@param TableRow|null $newRow
@param array         $appliedRowSpans
@param bool          $forceExpansion
@return array

@param TableCell|null $oldCell
@param TableCell|null $newCell
@return \DOMElement

@param TableCell|null $oldCell
@param TableCell|null $newCell
@param bool           $usingExtraRow
@return \DOMElement

@param string $text
@return \DOMDocument

@param string $text
@return Table

@param Table         $table
@param \DOMNode|null $node

@param TableRow $row

@param \DOMNode $node
@return string

@param \DOMNode $node
@return string

@param \DOMNode $node
@param string   $html

@param Table $table

@param TableRow        $tableRow
@param DiffRowPosition $position
@param array           $cellsWithMultipleRows
@param \DOMNode        $diffRow
@param string          $diffType
@param bool            $usingExtraRow

@param null|TableCell  $oldCell
@param null|TableCell  $newCell
@param array           $cellsWithMultipleRows
@param \DOMElement     $diffRow
@param DiffRowPosition $position
@param bool            $usingExtraRow
@return \DOMElement

@param TableRow|null $oldRow
@param TableRow|null $newRow
@param array         $appliedRowSpans
@param bool          $forceExpansion

@param TableRow $oldRow
@param TableRow $newRow
@param int      $oldIndex
@param int      $newIndex
@return float|int

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\caxy\php-htmldiff\lib\Caxy\HtmlDiff\Table\TableDiff.php`

**Classes**:
- `Caxy\HtmlDiff\Table\TableDiff extends AbstractDiff`

**Functions/Methods**:
- `create($oldText, $newText, HtmlDiffConfig $config = null)`
- `__construct($oldText,
        $newText,
        $encoding = 'UTF-8',
        $specialCaseTags = null,
        $groupDiffs = null)`
- `build()`
- `diffTableContent()`
- `diffTableRowsWithMatches($oldRows, $newRows, $matches)`
- `processInsertOperation(Operation $operation,
        $newRows,
        &$appliedRowSpans,
        $forceExpansion = false)`
- `processDeleteOperation(Operation $operation,
        $oldRows,
        &$appliedRowSpans,
        $forceExpansion = false)`
- `processEqualOperation(Operation $operation, $oldRows, $newRows, &$appliedRowSpans)`
- `processReplaceOperation(Operation $operation, $oldRows, $newRows, &$appliedRowSpans)`
- `getRowMatches($oldMatchData, $newMatchData)`
- `findRowMatches($newMatchData, $startInOld, $endInOld, $startInNew, $endInNew, &$matches)`
- `findRowMatch($newMatchData, $startInOld, $endInOld, $startInNew, $endInNew)`
- `diffRows($oldRow, $newRow, array &$appliedRowSpans, $forceExpansion = false)`
- `getNewCellNode(TableCell $oldCell = null, TableCell $newCell = null)`
- `diffCells($oldCell, $newCell, $usingExtraRow = false)`
- `buildTableDoms()`
- `createDocumentWithHtml($text)`
- `parseTableStructure($text)`
- `parseTable(Table $table, \DOMNode $node = null)`
- `parseTableRow(TableRow $row)`
- `getInnerHtml($node)`
- `htmlFromNode($node)`
- `setInnerHtml($node, $html)`
- `indexCellValues(Table $table)`
- `syncVirtualColumns($tableRow,
        DiffRowPosition $position,
        &$cellsWithMultipleRows,
        $diffRow,
        $diffType,
        $usingExtraRow = false)`
- `diffCellsAndIncrementCounters($oldCell,
        $newCell,
        &$cellsWithMultipleRows,
        $diffRow,
        DiffRowPosition $position,
        $usingExtraRow = false)`
- `diffAndAppendRows($oldRow, $newRow, &$appliedRowSpans, $forceExpansion = false)`
- `getMatchPercentage(TableRow $oldRow, TableRow $newRow, $oldIndex, $newIndex)`

