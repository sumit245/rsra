# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Database.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Database.php`
- Type: PHP
- Size: 23998 bytes

## Summary (from docblocks)

@deprecated 1.17.0

DAVERAGE.
Averages the values in a column of a list or database that match conditions you specify.
Excel Function:
       DAVERAGE(database,field,criteria)
@Deprecated 1.17.0
@see Database\DAverage::evaluate()
     Use the evaluate() method in the Database\DAverage class instead
@param mixed[] $database The range of cells that makes up the list or database.
                                       A database is a list of related data in which rows of related
                                       information are records, and columns of data are fields. The
                                       first row of the list contains labels for each column.
@param int|string $field Indicates which column is used in the function. Enter the
                                       column label enclosed between double quotation marks, such as
                                       "Age" or "Yield," or a number (without quotation marks) that
                                       represents the position of the column within the list: 1 for
                                       the first column, 2 for the second column, and so on.
@param mixed[] $criteria The range of cells that contains the conditions you specify.
                                       You can use any range for the criteria argument, as long as it
                                       includes at least one column label and at least one cell below
                                       the column label in which you specify a condition for the
                                       column.
@return null|float|string

DCOUNT.
Counts the cells that contain numbers in a column of a list or database that match conditions
that you specify.
Excel Function:
       DCOUNT(database,[field],criteria)
@Deprecated 1.17.0
@see Database\DCount::evaluate()
     Use the evaluate() method in the Database\DCount class instead
@param mixed[] $database The range of cells that makes up the list or database.
                                       A database is a list of related data in which rows of related
                                       information are records, and columns of data are fields. The
                                       first row of the list contains labels for each column.
@param null|int|string $field Indicates which column is used in the function. Enter the
                                       column label enclosed between double quotation marks, such as
                                       "Age" or "Yield," or a number (without quotation marks) that
                                       represents the position of the column within the list: 1 for
                                       the first column, 2 for the second column, and so on.
@param mixed[] $criteria The range of cells that contains the conditions you specify.
                                       You can use any range for the criteria argument, as long as it
                                       includes at least one column label and at least one cell below
                                       the column label in which you specify a condition for the
                                       column.
@return int
@TODO    The field argument is optional. If field is omitted, DCOUNT counts all records in the
           database that match the criteria.

DCOUNTA.
Counts the nonblank cells in a column of a list or database that match conditions that you specify.
Excel Function:
       DCOUNTA(database,[field],criteria)
@Deprecated 1.17.0
@see Database\DCountA::evaluate()
     Use the evaluate() method in the Database\DCountA class instead
@param mixed[] $database The range of cells that makes up the list or database.
                                       A database is a list of related data in which rows of related
                                       information are records, and columns of data are fields. The
                                       first row of the list contains labels for each column.
@param null|int|string $field Indicates which column is used in the function. Enter the
                                       column label enclosed between double quotation marks, such as
                                       "Age" or "Yield," or a number (without quotation marks) that
                                       represents the position of the column within the list: 1 for
                                       the first column, 2 for the second column, and so on.
@param mixed[] $criteria The range of cells that contains the conditions you specify.
                                       You can use any range for the criteria argument, as long as it
                                       includes at least one column label and at least one cell below
                                       the column label in which you specify a condition for the
                                       column.
@return int

DGET.
Extracts a single value from a column of a list or database that matches conditions that you
specify.
Excel Function:
       DGET(database,field,criteria)
@Deprecated 1.17.0
@see Database\DGet::evaluate()
     Use the evaluate() method in the Database\DGet class instead
@param mixed[] $database The range of cells that makes up the list or database.
                                       A database is a list of related data in which rows of related
                                       information are records, and columns of data are fields. The
                                       first row of the list contains labels for each column.
@param int|string $field Indicates which column is used in the function. Enter the
                                       column label enclosed between double quotation marks, such as
                                       "Age" or "Yield," or a number (without quotation marks) that
                                       represents the position of the column within the list: 1 for
                                       the first column, 2 for the second column, and so on.
@param mixed[] $criteria The range of cells that contains the conditions you specify.
                                       You can use any range for the criteria argument, as long as it
                                       includes at least one column label and at least one cell below
                                       the column label in which you specify a condition for the
                                       column.
@return mixed

DMAX.
Returns the largest number in a column of a list or database that matches conditions you that
specify.
Excel Function:
       DMAX(database,field,criteria)
@Deprecated 1.17.0
@see Database\DMax::evaluate()
     Use the evaluate() method in the Database\DMax class instead
@param mixed[] $database The range of cells that makes up the list or database.
                                       A database is a list of related data in which rows of related
                                       information are records, and columns of data are fields. The
                                       first row of the list contains labels for each column.
@param int|string $field Indicates which column is used in the function. Enter the
                                       column label enclosed between double quotation marks, such as
                                       "Age" or "Yield," or a number (without quotation marks) that
                                       represents the position of the column within the list: 1 for
                                       the first column, 2 for the second column, and so on.
@param mixed[] $criteria The range of cells that contains the conditions you specify.
                                       You can use any range for the criteria argument, as long as it
                                       includes at least one column label and at least one cell below
                                       the column label in which you specify a condition for the
                                       column.
@return float

DMIN.
Returns the smallest number in a column of a list or database that matches conditions you that
specify.
Excel Function:
       DMIN(database,field,criteria)
@Deprecated 1.17.0
@see Database\DMin::evaluate()
     Use the evaluate() method in the Database\DMin class instead
@param mixed[] $database The range of cells that makes up the list or database.
                                       A database is a list of related data in which rows of related
                                       information are records, and columns of data are fields. The
                                       first row of the list contains labels for each column.
@param int|string $field Indicates which column is used in the function. Enter the
                                       column label enclosed between double quotation marks, such as
                                       "Age" or "Yield," or a number (without quotation marks) that
                                       represents the position of the column within the list: 1 for
                                       the first column, 2 for the second column, and so on.
@param mixed[] $criteria The range of cells that contains the conditions you specify.
                                       You can use any range for the criteria argument, as long as it
                                       includes at least one column label and at least one cell below
                                       the column label in which you specify a condition for the
                                       column.
@return float

DPRODUCT.
Multiplies the values in a column of a list or database that match conditions that you specify.
Excel Function:
       DPRODUCT(database,field,criteria)
@Deprecated 1.17.0
@see Database\DProduct::evaluate()
     Use the evaluate() method in the Database\DProduct class instead
@param mixed[] $database The range of cells that makes up the list or database.
                                       A database is a list of related data in which rows of related
                                       information are records, and columns of data are fields. The
                                       first row of the list contains labels for each column.
@param int|string $field Indicates which column is used in the function. Enter the
                                       column label enclosed between double quotation marks, such as
                                       "Age" or "Yield," or a number (without quotation marks) that
                                       represents the position of the column within the list: 1 for
                                       the first column, 2 for the second column, and so on.
@param mixed[] $criteria The range of cells that contains the conditions you specify.
                                       You can use any range for the criteria argument, as long as it
                                       includes at least one column label and at least one cell below
                                       the column label in which you specify a condition for the
                                       column.
@return float|string

DSTDEV.
Estimates the standard deviation of a population based on a sample by using the numbers in a
column of a list or database that match conditions that you specify.
Excel Function:
       DSTDEV(database,field,criteria)
@Deprecated 1.17.0
@see Database\DStDev::evaluate()
     Use the evaluate() method in the Database\DStDev class instead
@param mixed[] $database The range of cells that makes up the list or database.
                                       A database is a list of related data in which rows of related
                                       information are records, and columns of data are fields. The
                                       first row of the list contains labels for each column.
@param int|string $field Indicates which column is used in the function. Enter the
                                       column label enclosed between double quotation marks, such as
                                       "Age" or "Yield," or a number (without quotation marks) that
                                       represents the position of the column within the list: 1 for
                                       the first column, 2 for the second column, and so on.
@param mixed[] $criteria The range of cells that contains the conditions you specify.
                                       You can use any range for the criteria argument, as long as it
                                       includes at least one column label and at least one cell below
                                       the column label in which you specify a condition for the
                                       column.
@return float|string

DSTDEVP.
Calculates the standard deviation of a population based on the entire population by using the
numbers in a column of a list or database that match conditions that you specify.
Excel Function:
       DSTDEVP(database,field,criteria)
@Deprecated 1.17.0
@see Database\DStDevP::evaluate()
     Use the evaluate() method in the Database\DStDevP class instead
@param mixed[] $database The range of cells that makes up the list or database.
                                       A database is a list of related data in which rows of related
                                       information are records, and columns of data are fields. The
                                       first row of the list contains labels for each column.
@param int|string $field Indicates which column is used in the function. Enter the
                                       column label enclosed between double quotation marks, such as
                                       "Age" or "Yield," or a number (without quotation marks) that
                                       represents the position of the column within the list: 1 for
                                       the first column, 2 for the second column, and so on.
@param mixed[] $criteria The range of cells that contains the conditions you specify.
                                       You can use any range for the criteria argument, as long as it
                                       includes at least one column label and at least one cell below
                                       the column label in which you specify a condition for the
                                       column.
@return float|string

DSUM.
Adds the numbers in a column of a list or database that match conditions that you specify.
Excel Function:
       DSUM(database,field,criteria)
@Deprecated 1.17.0
@see Database\DSum::evaluate()
     Use the evaluate() method in the Database\DSum class instead
@param mixed[] $database The range of cells that makes up the list or database.
                                       A database is a list of related data in which rows of related
                                       information are records, and columns of data are fields. The
                                       first row of the list contains labels for each column.
@param int|string $field Indicates which column is used in the function. Enter the
                                       column label enclosed between double quotation marks, such as
                                       "Age" or "Yield," or a number (without quotation marks) that
                                       represents the position of the column within the list: 1 for
                                       the first column, 2 for the second column, and so on.
@param mixed[] $criteria The range of cells that contains the conditions you specify.
                                       You can use any range for the criteria argument, as long as it
                                       includes at least one column label and at least one cell below
                                       the column label in which you specify a condition for the
                                       column.
@return float|string

DVAR.
Estimates the variance of a population based on a sample by using the numbers in a column
of a list or database that match conditions that you specify.
Excel Function:
       DVAR(database,field,criteria)
@Deprecated 1.17.0
@see Database\DVar::evaluate()
     Use the evaluate() method in the Database\DVar class instead
@param mixed[] $database The range of cells that makes up the list or database.
                                       A database is a list of related data in which rows of related
                                       information are records, and columns of data are fields. The
                                       first row of the list contains labels for each column.
@param int|string $field Indicates which column is used in the function. Enter the
                                       column label enclosed between double quotation marks, such as
                                       "Age" or "Yield," or a number (without quotation marks) that
                                       represents the position of the column within the list: 1 for
                                       the first column, 2 for the second column, and so on.
@param mixed[] $criteria The range of cells that contains the conditions you specify.
                                       You can use any range for the criteria argument, as long as it
                                       includes at least one column label and at least one cell below
                                       the column label in which you specify a condition for the
                                       column.
@return float|string (string if result is an error)

DVARP.
Calculates the variance of a population based on the entire population by using the numbers
in a column of a list or database that match conditions that you specify.
Excel Function:
       DVARP(database,field,criteria)
@Deprecated 1.17.0
@see Database\DVarP::evaluate()
     Use the evaluate() method in the Database\DVarP class instead
@param mixed[] $database The range of cells that makes up the list or database.
                                       A database is a list of related data in which rows of related
                                       information are records, and columns of data are fields. The
                                       first row of the list contains labels for each column.
@param int|string $field Indicates which column is used in the function. Enter the
                                       column label enclosed between double quotation marks, such as
                                       "Age" or "Yield," or a number (without quotation marks) that
                                       represents the position of the column within the list: 1 for
                                       the first column, 2 for the second column, and so on.
@param mixed[] $criteria The range of cells that contains the conditions you specify.
                                       You can use any range for the criteria argument, as long as it
                                       includes at least one column label and at least one cell below
                                       the column label in which you specify a condition for the
                                       column.
@return float|string (string if result is an error)

## References

**Database Tables (inferred)**
- `a`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Database.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Database`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`
- `PhpOffice\PhpSpreadsheet\Calculation\instead`

**Functions/Methods**:
- `DAVERAGE($database, $field, $criteria)`
- `DCOUNT($database, $field, $criteria)`
- `DCOUNTA($database, $field, $criteria)`
- `DGET($database, $field, $criteria)`
- `DMAX($database, $field, $criteria)`
- `DMIN($database, $field, $criteria)`
- `DPRODUCT($database, $field, $criteria)`
- `DSTDEV($database, $field, $criteria)`
- `DSTDEVP($database, $field, $criteria)`
- `DSUM($database, $field, $criteria)`
- `DVAR($database, $field, $criteria)`
- `DVARP($database, $field, $criteria)`

