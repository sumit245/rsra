# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\JAMA\Matrix.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\JAMA\Matrix.php`
- Type: PHP
- Size: 36559 bytes

## Summary (from docblocks)

Matrix class.
@author Paul Meagher
@author Michael Bommarito
@author Lukasz Karapuda
@author Bartek Matosiuk
@version 1.8
@see https://math.nist.gov/javanumerics/jama/

Matrix storage.
@var array

Matrix row dimension.
@var int

Matrix column dimension.
@var int

Polymorphic constructor.
As PHP has no support for polymorphic constructors, we use tricks to make our own sort of polymorphism using func_num_args, func_get_arg, and gettype. In essence, we're just implementing a simple RTTI filter and calling the appropriate constructor.

getArray.
@return array Matrix array

getRowDimension.
@return int Row dimension

getColumnDimension.
@return int Column dimension

get.
Get the i,j-th element of the matrix.
@param int $i Row position
@param int $j Column position
@return float|int

getMatrix.
   Get a submatrix
@return Matrix Submatrix

checkMatrixDimensions.
   Is matrix B the same size?
@param Matrix $B Matrix B
@return bool

set.
Set the i,j-th element of the matrix.
@param int $i Row position
@param int $j Column position
@param float|int $c value

identity.
Generate an identity matrix.
@param int $m Row dimension
@param int $n Column dimension
@return Matrix Identity matrix

diagonal.
   Generate a diagonal matrix
@param int $m Row dimension
@param int $n Column dimension
@param mixed $c Diagonal value
@return Matrix Diagonal matrix

getMatrixByRow.
   Get a submatrix by row index/range
@param int $i0 Initial row index
@param int $iF Final row index
@return Matrix Submatrix

getMatrixByCol.
   Get a submatrix by column index/range
@param int $j0 Initial column index
@param int $jF Final column index
@return Matrix Submatrix

transpose.
   Tranpose matrix
@return Matrix Transposed matrix

trace.
   Sum of diagonal elements
@return float Sum of diagonal elements

plus.
   A + B
@return Matrix Sum

plusEquals.
   A = A + B
@return $this

minus.
   A - B
@return Matrix Sum

minusEquals.
   A = A - B
@return $this

arrayTimes.
   Element-by-element multiplication
   Cij = Aij * Bij
@return Matrix Matrix Cij

arrayTimesEquals.
   Element-by-element multiplication
   Aij = Aij * Bij
@return $this

arrayRightDivide.
   Element-by-element right division
   A / B
@return Matrix Division result

arrayRightDivideEquals.
   Element-by-element right division
   Aij = Aij / Bij
@return Matrix Matrix Aij

arrayLeftDivide.
   Element-by-element Left division
   A / B
@return Matrix Division result

arrayLeftDivideEquals.
   Element-by-element Left division
   Aij = Aij / Bij
@return Matrix Matrix Aij

times.
   Matrix multiplication
@return Matrix Product

power.
   A = A ^ B
@return $this

concat.
   A = A & B
@return $this

Solve A*X = B.
@param Matrix $B Right hand side
@return Matrix ... Solution if A is square, least squares solution otherwise

Matrix inverse or pseudoinverse.
@return Matrix ... Inverse(A) if A is square, pseudoinverse otherwise.

det.
   Calculate determinant
@return float Determinant

## References

**Database Tables (inferred)**
- `2D`
- `packed`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\JAMA\Matrix.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\JAMA\Matrix`

**Functions/Methods**:
- `__construct(...$args)`
- `getArray()`
- `getRowDimension()`
- `getColumnDimension()`
- `get($i = null, $j = null)`
- `getMatrix(...$args)`
- `checkMatrixDimensions($B = null)`
- `checkMatrixDimensions()`
- `set($i = null, $j = null, $c = null)`
- `set()`
- `identity($m = null, $n = null)`
- `diagonal($m = null, $n = null, $c = 1)`
- `getMatrixByRow($i0 = null, $iF = null)`
- `getMatrixByCol($j0 = null, $jF = null)`
- `transpose()`
- `transpose()`
- `trace()`
- `plus(...$args)`
- `plusEquals(...$args)`
- `minus(...$args)`
- `minusEquals(...$args)`
- `arrayTimes(...$args)`
- `arrayTimesEquals(...$args)`
- `arrayRightDivide(...$args)`
- `arrayRightDivideEquals(...$args)`
- `arrayLeftDivide(...$args)`
- `arrayLeftDivideEquals(...$args)`
- `times(...$args)`
- `power(...$args)`
- `concat(...$args)`
- `solve(self $B)`
- `inverse()`
- `det()`

