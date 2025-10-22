# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\JAMA\EigenvalueDecomposition.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\JAMA\EigenvalueDecomposition.php`
- Type: PHP
- Size: 32630 bytes

## Summary (from docblocks)

Class to obtain eigenvalues and eigenvectors of a real matrix.
   If A is symmetric, then A = V*D*V' where the eigenvalue matrix D
   is diagonal and the eigenvector matrix V is orthogonal (i.e.
   A = V.times(D.times(V.transpose())) and V.times(V.transpose())
   equals the identity matrix).
   If A is not symmetric, then the eigenvalue matrix D is block diagonal
   with the real eigenvalues in 1-by-1 blocks and any complex eigenvalues,
   lambda + i*mu, in 2-by-2 blocks, [lambda, mu; -mu, lambda].  The
   columns of V represent the eigenvectors in the sense that A*V = V*D,
   i.e. A.times(V) equals V.times(D).  The matrix V may be badly
   conditioned, or even singular, so the validity of the equation
   A = V*D*inverse(V) depends upon V.cond().
@author  Paul Meagher
@version 1.1

Row and column dimension (square matrix).
@var int

Arrays for internal storage of eigenvalues.
@var array

Array for internal storage of eigenvectors.
@var array

Array for internal storage of nonsymmetric Hessenberg form.
@var array

Working storage for nonsymmetric algorithm.
@var array

Used for complex scalar division.
@var float

@var array

Symmetric Householder reduction to tridiagonal form.

Symmetric tridiagonal QL algorithm.
   This is derived from the Algol procedures tql2, by
   Bowdler, Martin, Reinsch, and Wilkinson, Handbook for
   Auto. Comp., Vol.ii-Linear Algebra, and the corresponding
Fortran subroutine in EISPACK.

Nonsymmetric reduction to Hessenberg form.
   This is derived from the Algol procedures orthes and ortran,
   by Martin and Wilkinson, Handbook for Auto. Comp.,
   Vol.ii-Linear Algebra, and the corresponding
Fortran subroutines in EISPACK.

Performs complex division.
@param mixed $xr
@param mixed $xi
@param mixed $yr
@param mixed $yi

Nonsymmetric reduction from Hessenberg to real Schur form.
   Code is derived from the Algol procedure hqr2,
   by Martin and Wilkinson, Handbook for Auto. Comp.,
   Vol.ii-Linear Algebra, and the corresponding
Fortran subroutine in EISPACK.

Constructor: Check for symmetry, then construct the eigenvalue decomposition.
@param Matrix $Arg A Square matrix

Return the eigenvector matrix.
@return Matrix V

Return the real parts of the eigenvalues.
@return array real(diag(D))

Return the imaginary parts of the eigenvalues.
@return array imag(diag(D))

Return the block diagonal eigenvalue matrix.
@return Matrix D

## References

**Database Tables (inferred)**
- `the`
- `Hessenberg`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Shared\JAMA\EigenvalueDecomposition.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Shared\JAMA\EigenvalueDecomposition`

**Functions/Methods**:
- `tred2()`
- `tql2()`
- `orthes()`
- `cdiv($xr, $xi, $yr, $yi)`
- `hqr2()`
- `__construct(Matrix $Arg)`
- `getV()`
- `getRealEigenvalues()`
- `getImagEigenvalues()`
- `getD()`

