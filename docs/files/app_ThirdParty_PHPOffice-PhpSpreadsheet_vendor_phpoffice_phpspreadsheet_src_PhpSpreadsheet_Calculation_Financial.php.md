# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial.php`
- Type: PHP
- Size: 61899 bytes

## Summary (from docblocks)

@deprecated 1.18.0

ACCRINT.
Returns the accrued interest for a security that pays periodic interest.
Excel Function:
       ACCRINT(issue,firstinterest,settlement,rate,par,frequency[,basis][,calc_method])
@Deprecated 1.18.0
@see Financial\Securities\AccruedInterest::periodic()
     Use the periodic() method in the Financial\Securities\AccruedInterest class instead
@param mixed $issue the security's issue date
@param mixed $firstInterest the security's first interest date
@param mixed $settlement The security's settlement date.
                             The security settlement date is the date after the issue date
                                 when the security is traded to the buyer.
@param mixed $rate the security's annual coupon rate
@param mixed $parValue The security's par value.
                           If you omit par, ACCRINT uses $1,000.
@param mixed $frequency The number of coupon payments per year.
                            Valid frequency values are:
                              1    Annual
                              2    Semi-Annual
                              4    Quarterly
@param mixed $basis The type of day count to use.
                        0 or omitted    US (NASD) 30/360
                        1               Actual/actual
                        2               Actual/360
                        3               Actual/365
                        4               European 30/360
@param mixed $calcMethod
                         If true, use Issue to Settlement
                         If false, use FirstInterest to Settlement
@return float|string Result, or a string containing an error

ACCRINTM.
Returns the accrued interest for a security that pays interest at maturity.
Excel Function:
       ACCRINTM(issue,settlement,rate[,par[,basis]])
@Deprecated 1.18.0
@see Financial\Securities\AccruedInterest::atMaturity()
     Use the atMaturity() method in the Financial\Securities\AccruedInterest class instead
@param mixed $issue The security's issue date
@param mixed $settlement The security's settlement (or maturity) date
@param mixed $rate The security's annual coupon rate
@param mixed $parValue The security's par value.
                           If you omit par, ACCRINT uses $1,000.
@param mixed $basis The type of day count to use.
                           0 or omitted    US (NASD) 30/360
                           1               Actual/actual
                           2               Actual/360
                           3               Actual/365
                           4               European 30/360
@return float|string Result, or a string containing an error

AMORDEGRC.
Returns the depreciation for each accounting period.
This function is provided for the French accounting system. If an asset is purchased in
the middle of the accounting period, the prorated depreciation is taken into account.
The function is similar to AMORLINC, except that a depreciation coefficient is applied in
the calculation depending on the life of the assets.
This function will return the depreciation until the last period of the life of the assets
or until the cumulated value of depreciation is greater than the cost of the assets minus
the salvage value.
Excel Function:
       AMORDEGRC(cost,purchased,firstPeriod,salvage,period,rate[,basis])
@Deprecated 1.18.0
@see Financial\Amortization::AMORDEGRC()
     Use the AMORDEGRC() method in the Financial\Amortization class instead
@param float $cost The cost of the asset
@param mixed $purchased Date of the purchase of the asset
@param mixed $firstPeriod Date of the end of the first period
@param mixed $salvage The salvage value at the end of the life of the asset
@param float $period The period
@param float $rate Rate of depreciation
@param int $basis The type of day count to use.
                      0 or omitted    US (NASD) 30/360
                      1                Actual/actual
                      2                Actual/360
                      3                Actual/365
                      4                European 30/360
@return float|string (string containing the error type if there is an error)

AMORLINC.
Returns the depreciation for each accounting period.
This function is provided for the French accounting system. If an asset is purchased in
the middle of the accounting period, the prorated depreciation is taken into account.
Excel Function:
       AMORLINC(cost,purchased,firstPeriod,salvage,period,rate[,basis])
@Deprecated 1.18.0
@see Financial\Amortization::AMORLINC()
     Use the AMORLINC() method in the Financial\Amortization class instead
@param float $cost The cost of the asset
@param mixed $purchased Date of the purchase of the asset
@param mixed $firstPeriod Date of the end of the first period
@param mixed $salvage The salvage value at the end of the life of the asset
@param float $period The period
@param float $rate Rate of depreciation
@param int $basis The type of day count to use.
                      0 or omitted    US (NASD) 30/360
                      1               Actual/actual
                      2               Actual/360
                      3               Actual/365
                      4               European 30/360
@return float|string (string containing the error type if there is an error)

COUPDAYBS.
Returns the number of days from the beginning of the coupon period to the settlement date.
Excel Function:
       COUPDAYBS(settlement,maturity,frequency[,basis])
@Deprecated 1.18.0
@see Financial\Coupons::COUPDAYBS()
     Use the COUPDAYBS() method in the Financial\Coupons class instead
@param mixed $settlement The security's settlement date.
                               The security settlement date is the date after the issue
                               date when the security is traded to the buyer.
@param mixed $maturity The security's maturity date.
                               The maturity date is the date when the security expires.
@param int $frequency the number of coupon payments per year.
                                   Valid frequency values are:
                                       1    Annual
                                       2    Semi-Annual
                                       4    Quarterly
@param int $basis The type of day count to use.
                                       0 or omitted    US (NASD) 30/360
                                       1                Actual/actual
                                       2                Actual/360
                                       3                Actual/365
                                       4                European 30/360
@return float|string

COUPDAYS.
Returns the number of days in the coupon period that contains the settlement date.
Excel Function:
       COUPDAYS(settlement,maturity,frequency[,basis])
@Deprecated 1.18.0
@see Financial\Coupons::COUPDAYS()
     Use the COUPDAYS() method in the Financial\Coupons class instead
@param mixed $settlement The security's settlement date.
                               The security settlement date is the date after the issue
                               date when the security is traded to the buyer.
@param mixed $maturity The security's maturity date.
                               The maturity date is the date when the security expires.
@param mixed $frequency the number of coupon payments per year.
                                   Valid frequency values are:
                                       1    Annual
                                       2    Semi-Annual
                                       4    Quarterly
@param int $basis The type of day count to use.
                                       0 or omitted    US (NASD) 30/360
                                       1                Actual/actual
                                       2                Actual/360
                                       3                Actual/365
                                       4                European 30/360
@return float|string

COUPDAYSNC.
Returns the number of days from the settlement date to the next coupon date.
Excel Function:
       COUPDAYSNC(settlement,maturity,frequency[,basis])
@Deprecated 1.18.0
@see Financial\Coupons::COUPDAYSNC()
     Use the COUPDAYSNC() method in the Financial\Coupons class instead
@param mixed $settlement The security's settlement date.
                               The security settlement date is the date after the issue
                               date when the security is traded to the buyer.
@param mixed $maturity The security's maturity date.
                               The maturity date is the date when the security expires.
@param mixed $frequency the number of coupon payments per year.
                                   Valid frequency values are:
                                       1    Annual
                                       2    Semi-Annual
                                       4    Quarterly
@param int $basis The type of day count to use.
                                       0 or omitted    US (NASD) 30/360
                                       1                Actual/actual
                                       2                Actual/360
                                       3                Actual/365
                                       4                European 30/360
@return float|string

COUPNCD.
Returns the next coupon date after the settlement date.
Excel Function:
       COUPNCD(settlement,maturity,frequency[,basis])
@Deprecated 1.18.0
@see Financial\Coupons::COUPNCD()
     Use the COUPNCD() method in the Financial\Coupons class instead
@param mixed $settlement The security's settlement date.
                               The security settlement date is the date after the issue
                               date when the security is traded to the buyer.
@param mixed $maturity The security's maturity date.
                               The maturity date is the date when the security expires.
@param mixed $frequency the number of coupon payments per year.
                                   Valid frequency values are:
                                       1    Annual
                                       2    Semi-Annual
                                       4    Quarterly
@param int $basis The type of day count to use.
                                       0 or omitted    US (NASD) 30/360
                                       1                Actual/actual
                                       2                Actual/360
                                       3                Actual/365
                                       4                European 30/360
@return mixed Excel date/time serial value, PHP date/time serial value or PHP date/time object,
                       depending on the value of the ReturnDateType flag

COUPNUM.
Returns the number of coupons payable between the settlement date and maturity date,
rounded up to the nearest whole coupon.
Excel Function:
       COUPNUM(settlement,maturity,frequency[,basis])
@Deprecated 1.18.0
@see Financial\Coupons::COUPNUM()
     Use the COUPNUM() method in the Financial\Coupons class instead
@param mixed $settlement The security's settlement date.
                               The security settlement date is the date after the issue
                               date when the security is traded to the buyer.
@param mixed $maturity The security's maturity date.
                               The maturity date is the date when the security expires.
@param mixed $frequency the number of coupon payments per year.
                                   Valid frequency values are:
                                       1    Annual
                                       2    Semi-Annual
                                       4    Quarterly
@param int $basis The type of day count to use.
                                       0 or omitted    US (NASD) 30/360
                                       1                Actual/actual
                                       2                Actual/360
                                       3                Actual/365
                                       4                European 30/360
@return int|string

COUPPCD.
Returns the previous coupon date before the settlement date.
Excel Function:
       COUPPCD(settlement,maturity,frequency[,basis])
@Deprecated 1.18.0
@see Financial\Coupons::COUPPCD()
     Use the COUPPCD() method in the Financial\Coupons class instead
@param mixed $settlement The security's settlement date.
                               The security settlement date is the date after the issue
                               date when the security is traded to the buyer.
@param mixed $maturity The security's maturity date.
                               The maturity date is the date when the security expires.
@param mixed $frequency the number of coupon payments per year.
                                   Valid frequency values are:
                                       1    Annual
                                       2    Semi-Annual
                                       4    Quarterly
@param int $basis The type of day count to use.
                                       0 or omitted    US (NASD) 30/360
                                       1                Actual/actual
                                       2                Actual/360
                                       3                Actual/365
                                       4                European 30/360
@return mixed Excel date/time serial value, PHP date/time serial value or PHP date/time object,
                       depending on the value of the ReturnDateType flag

CUMIPMT.
Returns the cumulative interest paid on a loan between the start and end periods.
Excel Function:
       CUMIPMT(rate,nper,pv,start,end[,type])
@Deprecated 1.18.0
@see Financial\CashFlow\Constant\Periodic\Cumulative::interest()
     Use the interest() method in the Financial\CashFlow\Constant\Periodic\Cumulative class instead
@param float $rate The Interest rate
@param int $nper The total number of payment periods
@param float $pv Present Value
@param int $start The first period in the calculation.
                      Payment periods are numbered beginning with 1.
@param int $end the last period in the calculation
@param int $type A number 0 or 1 and indicates when payments are due:
                   0 or omitted    At the end of the period.
                   1               At the beginning of the period.
@return float|string

CUMPRINC.
Returns the cumulative principal paid on a loan between the start and end periods.
Excel Function:
       CUMPRINC(rate,nper,pv,start,end[,type])
@Deprecated 1.18.0
@see Financial\CashFlow\Constant\Periodic\Cumulative::principal()
     Use the principal() method in the Financial\CashFlow\Constant\Periodic\Cumulative class instead
@param float $rate The Interest rate
@param int $nper The total number of payment periods
@param float $pv Present Value
@param int $start The first period in the calculation.
                      Payment periods are numbered beginning with 1.
@param int $end the last period in the calculation
@param int $type A number 0 or 1 and indicates when payments are due:
                   0 or omitted    At the end of the period.
                   1               At the beginning of the period.
@return float|string

DB.
Returns the depreciation of an asset for a specified period using the
fixed-declining balance method.
This form of depreciation is used if you want to get a higher depreciation value
at the beginning of the depreciation (as opposed to linear depreciation). The
depreciation value is reduced with every depreciation period by the depreciation
already deducted from the initial cost.
Excel Function:
       DB(cost,salvage,life,period[,month])
@Deprecated 1.18.0
@see Financial\Depreciation::DB()
     Use the DB() method in the Financial\Depreciation class instead
@param float $cost Initial cost of the asset
@param float $salvage Value at the end of the depreciation.
                               (Sometimes called the salvage value of the asset)
@param int $life Number of periods over which the asset is depreciated.
                               (Sometimes called the useful life of the asset)
@param int $period The period for which you want to calculate the
                               depreciation. Period must use the same units as life.
@param int $month Number of months in the first year. If month is omitted,
                               it defaults to 12.
@return float|string

DDB.
Returns the depreciation of an asset for a specified period using the
double-declining balance method or some other method you specify.
Excel Function:
       DDB(cost,salvage,life,period[,factor])
@Deprecated 1.18.0
@see Financial\Depreciation::DDB()
     Use the DDB() method in the Financial\Depreciation class instead
@param float $cost Initial cost of the asset
@param float $salvage Value at the end of the depreciation.
                               (Sometimes called the salvage value of the asset)
@param int $life Number of periods over which the asset is depreciated.
                               (Sometimes called the useful life of the asset)
@param int $period The period for which you want to calculate the
                               depreciation. Period must use the same units as life.
@param float $factor The rate at which the balance declines.
                               If factor is omitted, it is assumed to be 2 (the
                               double-declining balance method).
@return float|string

DISC.
Returns the discount rate for a security.
Excel Function:
       DISC(settlement,maturity,price,redemption[,basis])
@Deprecated 1.18.0
@see Financial\Securities\Rates::discount()
     Use the discount() method in the Financial\Securities\Rates class instead
@param mixed $settlement The security's settlement date.
                               The security settlement date is the date after the issue
                               date when the security is traded to the buyer.
@param mixed $maturity The security's maturity date.
                               The maturity date is the date when the security expires.
@param int $price The security's price per $100 face value
@param int $redemption The security's redemption value per $100 face value
@param int $basis The type of day count to use.
                                       0 or omitted    US (NASD) 30/360
                                       1                Actual/actual
                                       2                Actual/360
                                       3                Actual/365
                                       4                European 30/360
@return float|string

DOLLARDE.
Converts a dollar price expressed as an integer part and a fraction
       part into a dollar price expressed as a decimal number.
Fractional dollar numbers are sometimes used for security prices.
Excel Function:
       DOLLARDE(fractional_dollar,fraction)
@Deprecated 1.18.0
@see Financial\Dollar::decimal()
     Use the decimal() method in the Financial\Dollar class instead
@param array|float $fractional_dollar Fractional Dollar
@param array|int $fraction Fraction
@return array|float|string

DOLLARFR.
Converts a dollar price expressed as a decimal number into a dollar price
       expressed as a fraction.
Fractional dollar numbers are sometimes used for security prices.
Excel Function:
       DOLLARFR(decimal_dollar,fraction)
@Deprecated 1.18.0
@see Financial\Dollar::fractional()
     Use the fractional() method in the Financial\Dollar class instead
@param array|float $decimal_dollar Decimal Dollar
@param array|int $fraction Fraction
@return array|float|string

EFFECT.
Returns the effective interest rate given the nominal rate and the number of
       compounding payments per year.
Excel Function:
       EFFECT(nominal_rate,npery)
@Deprecated 1.18.0
@see Financial\InterestRate::effective()
     Use the effective() method in the Financial\InterestRate class instead
@param float $nominalRate Nominal interest rate
@param int $periodsPerYear Number of compounding payments per year
@return float|string

FV.
Returns the Future Value of a cash flow with constant payments and interest rate (annuities).
Excel Function:
       FV(rate,nper,pmt[,pv[,type]])
@Deprecated 1.18.0
@see Financial\CashFlow\Constant\Periodic::futureValue()
     Use the futureValue() method in the Financial\CashFlow\Constant\Periodic class instead
@param float $rate The interest rate per period
@param int $nper Total number of payment periods in an annuity
@param float $pmt The payment made each period: it cannot change over the
                           life of the annuity. Typically, pmt contains principal
                           and interest but no other fees or taxes.
@param float $pv present Value, or the lump-sum amount that a series of
                           future payments is worth right now
@param int $type A number 0 or 1 and indicates when payments are due:
                               0 or omitted    At the end of the period.
                               1                At the beginning of the period.
@return float|string

FVSCHEDULE.
Returns the future value of an initial principal after applying a series of compound interest rates.
Use FVSCHEDULE to calculate the future value of an investment with a variable or adjustable rate.
Excel Function:
       FVSCHEDULE(principal,schedule)
@Deprecated 1.18.0
@see Financial\CashFlow\Single::futureValue()
     Use the futureValue() method in the Financial\CashFlow\Single class instead
@param float $principal the present value
@param float[] $schedule an array of interest rates to apply
@return float|string

INTRATE.
Returns the interest rate for a fully invested security.
Excel Function:
       INTRATE(settlement,maturity,investment,redemption[,basis])
@Deprecated 1.18.0
@see Financial\Securities\Rates::interest()
     Use the interest() method in the Financial\Securities\Rates class instead
@param mixed $settlement The security's settlement date.
                             The security settlement date is the date after the issue date when the security
                                 is traded to the buyer.
@param mixed $maturity The security's maturity date.
                           The maturity date is the date when the security expires.
@param int $investment the amount invested in the security
@param int $redemption the amount to be received at maturity
@param int $basis The type of day count to use.
                      0 or omitted    US (NASD) 30/360
                      1               Actual/actual
                      2               Actual/360
                      3               Actual/365
                      4               European 30/360
@return float|string

IPMT.
Returns the interest payment for a given period for an investment based on periodic, constant payments
        and a constant interest rate.
Excel Function:
       IPMT(rate,per,nper,pv[,fv][,type])
@Deprecated 1.18.0
@see Financial\CashFlow\Constant\Periodic\Interest::payment()
     Use the payment() method in the Financial\CashFlow\Constant\Periodic class instead
@param float $rate Interest rate per period
@param int $per Period for which we want to find the interest
@param int $nper Number of periods
@param float $pv Present Value
@param float $fv Future Value
@param int $type Payment type: 0 = at the end of each period, 1 = at the beginning of each period
@return float|string

IRR.
Returns the internal rate of return for a series of cash flows represented by the numbers in values.
These cash flows do not have to be even, as they would be for an annuity. However, the cash flows must occur
at regular intervals, such as monthly or annually. The internal rate of return is the interest rate received
for an investment consisting of payments (negative values) and income (positive values) that occur at regular
periods.
Excel Function:
       IRR(values[,guess])
@Deprecated 1.18.0
@see Financial\CashFlow\Variable\Periodic::rate()
     Use the rate() method in the Financial\CashFlow\Variable\Periodic class instead
@param mixed $values An array or a reference to cells that contain numbers for which you want
                                   to calculate the internal rate of return.
                               Values must contain at least one positive value and one negative value to
                                   calculate the internal rate of return.
@param mixed $guess A number that you guess is close to the result of IRR
@return float|string

ISPMT.
Returns the interest payment for an investment based on an interest rate and a constant payment schedule.
Excel Function:
    =ISPMT(interest_rate, period, number_payments, pv)
@Deprecated 1.18.0
@see Financial\CashFlow\Constant\Periodic\Interest::schedulePayment()
     Use the schedulePayment() method in the Financial\CashFlow\Constant\Periodic class instead
interest_rate is the interest rate for the investment
period is the period to calculate the interest rate.  It must be betweeen 1 and number_payments.
number_payments is the number of payments for the annuity
pv is the loan amount or present value of the payments

MIRR.
Returns the modified internal rate of return for a series of periodic cash flows. MIRR considers both
       the cost of the investment and the interest received on reinvestment of cash.
Excel Function:
       MIRR(values,finance_rate, reinvestment_rate)
@Deprecated 1.18.0
@see Financial\CashFlow\Variable\Periodic::modifiedRate()
     Use the modifiedRate() method in the Financial\CashFlow\Variable\Periodic class instead
@param mixed $values An array or a reference to cells that contain a series of payments and
                        income occurring at regular intervals.
                     Payments are negative value, income is positive values.
@param mixed $finance_rate The interest rate you pay on the money used in the cash flows
@param mixed $reinvestment_rate The interest rate you receive on the cash flows as you reinvest them
@return float|string Result, or a string containing an error

NOMINAL.
Returns the nominal interest rate given the effective rate and the number of compounding payments per year.
Excel Function:
       NOMINAL(effect_rate, npery)
@Deprecated 1.18.0
@see Financial\InterestRate::nominal()
     Use the nominal() method in the Financial\InterestRate class instead
@param float $effectiveRate Effective interest rate
@param int $periodsPerYear Number of compounding payments per year
@return float|string Result, or a string containing an error

NPER.
Returns the number of periods for a cash flow with constant periodic payments (annuities), and interest rate.
@Deprecated 1.18.0
@param float $rate Interest rate per period
@param int $pmt Periodic payment (annuity)
@param float $pv Present Value
@param float $fv Future Value
@param int $type Payment type: 0 = at the end of each period, 1 = at the beginning of each period
@return float|string Result, or a string containing an error
@see Financial\CashFlow\Constant\Periodic::periods()
     Use the periods() method in the Financial\CashFlow\Constant\Periodic class instead

NPV.
Returns the Net Present Value of a cash flow series given a discount rate.
@Deprecated 1.18.0
@see Financial\CashFlow\Variable\Periodic::presentValue()
     Use the presentValue() method in the Financial\CashFlow\Variable\Periodic class instead
@return float

PDURATION.
Calculates the number of periods required for an investment to reach a specified value.
@Deprecated 1.18.0
@see Financial\CashFlow\Single::periods()
     Use the periods() method in the Financial\CashFlow\Single class instead
@param float $rate Interest rate per period
@param float $pv Present Value
@param float $fv Future Value
@return float|string Result, or a string containing an error

PMT.
Returns the constant payment (annuity) for a cash flow with a constant interest rate.
@Deprecated 1.18.0
@see Financial\CashFlow\Constant\Periodic\Payments::annuity()
     Use the annuity() method in the Financial\CashFlow\Constant\Periodic\Payments class instead
@param float $rate Interest rate per period
@param int $nper Number of periods
@param float $pv Present Value
@param float $fv Future Value
@param int $type Payment type: 0 = at the end of each period, 1 = at the beginning of each period
@return float|string Result, or a string containing an error

PPMT.
Returns the interest payment for a given period for an investment based on periodic, constant payments
        and a constant interest rate.
@Deprecated 1.18.0
@see Financial\CashFlow\Constant\Periodic\Payments::interestPayment()
     Use the interestPayment() method in the Financial\CashFlow\Constant\Periodic\Payments class instead
@param float $rate Interest rate per period
@param int $per Period for which we want to find the interest
@param int $nper Number of periods
@param float $pv Present Value
@param float $fv Future Value
@param int $type Payment type: 0 = at the end of each period, 1 = at the beginning of each period
@return float|string Result, or a string containing an error

PRICE.
Returns the price per $100 face value of a security that pays periodic interest.
@Deprecated 1.18.0
@see Financial\Securities\Price::price()
     Use the price() method in the Financial\Securities\Price class instead
@param mixed $settlement The security's settlement date.
                             The security settlement date is the date after the issue date when the security
                             is traded to the buyer.
@param mixed $maturity The security's maturity date.
                               The maturity date is the date when the security expires.
@param float $rate the security's annual coupon rate
@param float $yield the security's annual yield
@param float $redemption The number of coupon payments per year.
                             For annual payments, frequency = 1;
                             for semiannual, frequency = 2;
                             for quarterly, frequency = 4.
@param int $frequency
@param int $basis The type of day count to use.
                      0 or omitted    US (NASD) 30/360
                      1                Actual/actual
                      2                Actual/360
                      3                Actual/365
                      4                European 30/360
@return float|string Result, or a string containing an error

PRICEDISC.
Returns the price per $100 face value of a discounted security.
@Deprecated 1.18.0
@see Financial\Securities\Price::priceDiscounted()
     Use the priceDiscounted() method in the Financial\Securities\Price class instead
@param mixed $settlement The security's settlement date.
                             The security settlement date is the date after the issue date when the security
                             is traded to the buyer.
@param mixed $maturity The security's maturity date.
                           The maturity date is the date when the security expires.
@param int $discount The security's discount rate
@param int $redemption The security's redemption value per $100 face value
@param int $basis The type of day count to use.
                                       0 or omitted    US (NASD) 30/360
                                       1                Actual/actual
                                       2                Actual/360
                                       3                Actual/365
                                       4                European 30/360
@return float|string Result, or a string containing an error

PRICEMAT.
Returns the price per $100 face value of a security that pays interest at maturity.
@Deprecated 1.18.0
@see Financial\Securities\Price::priceAtMaturity()
     Use the priceAtMaturity() method in the Financial\Securities\Price class instead
@param mixed $settlement The security's settlement date.
                             The security's settlement date is the date after the issue date when the security
                             is traded to the buyer.
@param mixed $maturity The security's maturity date.
                           The maturity date is the date when the security expires.
@param mixed $issue The security's issue date
@param int $rate The security's interest rate at date of issue
@param int $yield The security's annual yield
@param int $basis The type of day count to use.
                                       0 or omitted    US (NASD) 30/360
                                       1                Actual/actual
                                       2                Actual/360
                                       3                Actual/365
                                       4                European 30/360
@return float|string Result, or a string containing an error

PV.
Returns the Present Value of a cash flow with constant payments and interest rate (annuities).
@Deprecated 1.18.0
@see Financial\CashFlow\Constant\Periodic::presentValue()
     Use the presentValue() method in the Financial\CashFlow\Constant\Periodic class instead
@param float $rate Interest rate per period
@param int $nper Number of periods
@param float $pmt Periodic payment (annuity)
@param float $fv Future Value
@param int $type Payment type: 0 = at the end of each period, 1 = at the beginning of each period
@return float|string Result, or a string containing an error

RATE.
Returns the interest rate per period of an annuity.
RATE is calculated by iteration and can have zero or more solutions.
If the successive results of RATE do not converge to within 0.0000001 after 20 iterations,
RATE returns the #NUM! error value.
Excel Function:
       RATE(nper,pmt,pv[,fv[,type[,guess]]])
@Deprecated 1.18.0
@see Financial\CashFlow\Constant\Periodic\Interest::rate()
     Use the rate() method in the Financial\CashFlow\Constant\Periodic class instead
@param mixed $nper The total number of payment periods in an annuity
@param mixed $pmt The payment made each period and cannot change over the life
                                   of the annuity.
                               Typically, pmt includes principal and interest but no other
                                   fees or taxes.
@param mixed $pv The present value - the total amount that a series of future
                                   payments is worth now
@param mixed $fv The future value, or a cash balance you want to attain after
                                   the last payment is made. If fv is omitted, it is assumed
                                   to be 0 (the future value of a loan, for example, is 0).
@param mixed $type A number 0 or 1 and indicates when payments are due:
                                       0 or omitted    At the end of the period.
                                       1                At the beginning of the period.
@param mixed $guess Your guess for what the rate will be.
                                   If you omit guess, it is assumed to be 10 percent.
@return float|string

RECEIVED.
Returns the amount received at maturity for a fully invested Security.
@Deprecated 1.18.0
@see Financial\Securities\Price::received()
     Use the received() method in the Financial\Securities\Price class instead
@param mixed $settlement The security's settlement date.
                             The security settlement date is the date after the issue date when the security
                                 is traded to the buyer.
@param mixed $maturity The security's maturity date.
                           The maturity date is the date when the security expires.
@param mixed $investment The amount invested in the security
@param mixed $discount The security's discount rate
@param mixed $basis The type of day count to use.
                        0 or omitted    US (NASD) 30/360
                        1               Actual/actual
                        2               Actual/360
                        3               Actual/365
                        4               European 30/360
@return float|string Result, or a string containing an error

RRI.
Calculates the interest rate required for an investment to grow to a specified future value .
@Deprecated 1.18.0
@see Financial\CashFlow\Single::interestRate()
     Use the interestRate() method in the Financial\CashFlow\Single class instead
@param float $nper The number of periods over which the investment is made
@param float $pv Present Value
@param float $fv Future Value
@return float|string Result, or a string containing an error

SLN.
Returns the straight-line depreciation of an asset for one period
@Deprecated 1.18.0
@see Financial\Depreciation::SLN()
     Use the SLN() method in the Financial\Depreciation class instead
@param mixed $cost Initial cost of the asset
@param mixed $salvage Value at the end of the depreciation
@param mixed $life Number of periods over which the asset is depreciated
@return float|string Result, or a string containing an error

SYD.
Returns the sum-of-years' digits depreciation of an asset for a specified period.
@Deprecated 1.18.0
@see Financial\Depreciation::SYD()
     Use the SYD() method in the Financial\Depreciation class instead
@param mixed $cost Initial cost of the asset
@param mixed $salvage Value at the end of the depreciation
@param mixed $life Number of periods over which the asset is depreciated
@param mixed $period Period
@return float|string Result, or a string containing an error

TBILLEQ.
Returns the bond-equivalent yield for a Treasury bill.
@Deprecated 1.18.0
@see Financial\TreasuryBill::bondEquivalentYield()
     Use the bondEquivalentYield() method in the Financial\TreasuryBill class instead
@param mixed $settlement The Treasury bill's settlement date.
                         The Treasury bill's settlement date is the date after the issue date when the
                             Treasury bill is traded to the buyer.
@param mixed $maturity The Treasury bill's maturity date.
                               The maturity date is the date when the Treasury bill expires.
@param int $discount The Treasury bill's discount rate
@return float|string Result, or a string containing an error

TBILLPRICE.
Returns the price per $100 face value for a Treasury bill.
@Deprecated 1.18.0
@see Financial\TreasuryBill::price()
     Use the price() method in the Financial\TreasuryBill class instead
@param mixed $settlement The Treasury bill's settlement date.
                               The Treasury bill's settlement date is the date after the issue date
                                   when the Treasury bill is traded to the buyer.
@param mixed $maturity The Treasury bill's maturity date.
                               The maturity date is the date when the Treasury bill expires.
@param int $discount The Treasury bill's discount rate
@return float|string Result, or a string containing an error

TBILLYIELD.
Returns the yield for a Treasury bill.
@Deprecated 1.18.0
@see Financial\TreasuryBill::yield()
     Use the yield() method in the Financial\TreasuryBill class instead
@param mixed $settlement The Treasury bill's settlement date.
                               The Treasury bill's settlement date is the date after the issue date
                                   when the Treasury bill is traded to the buyer.
@param mixed $maturity The Treasury bill's maturity date.
                               The maturity date is the date when the Treasury bill expires.
@param int $price The Treasury bill's price per $100 face value
@return float|mixed|string

XIRR.
Returns the internal rate of return for a schedule of cash flows that is not necessarily periodic.
Excel Function:
       =XIRR(values,dates,guess)
@Deprecated 1.18.0
@see Financial\CashFlow\Variable\NonPeriodic::rate()
     Use the rate() method in the Financial\CashFlow\Variable\NonPeriodic class instead
@param float[] $values     A series of cash flow payments
                               The series of values must contain at least one positive value & one negative value
@param mixed[] $dates      A series of payment dates
                               The first payment date indicates the beginning of the schedule of payments
                               All other dates must be later than this date, but they may occur in any order
@param float $guess        An optional guess at the expected answer
@return float|mixed|string

XNPV.
Returns the net present value for a schedule of cash flows that is not necessarily periodic.
To calculate the net present value for a series of cash flows that is periodic, use the NPV function.
Excel Function:
       =XNPV(rate,values,dates)
@Deprecated 1.18.0
@see Financial\CashFlow\Variable\NonPeriodic::presentValue()
     Use the presentValue() method in the Financial\CashFlow\Variable\NonPeriodic class instead
@param float $rate the discount rate to apply to the cash flows
@param float[] $values A series of cash flows that corresponds to a schedule of payments in dates.
                         The first payment is optional and corresponds to a cost or payment that occurs
                             at the beginning of the investment.
                         If the first value is a cost or payment, it must be a negative value.
                            All succeeding payments are discounted based on a 365-day year.
                         The series of values must contain at least one positive value and one negative value.
@param mixed[] $dates A schedule of payment dates that corresponds to the cash flow payments.
                        The first payment date indicates the beginning of the schedule of payments.
                        All other dates must be later than this date, but they may occur in any order.
@return float|mixed|string

YIELDDISC.
Returns the annual yield of a security that pays interest at maturity.
@Deprecated 1.18.0
@see Financial\Securities\Yields::yieldDiscounted()
     Use the yieldDiscounted() method in the Financial\Securities\Yields class instead
@param mixed $settlement The security's settlement date.
                             The security's settlement date is the date after the issue date when the security
                             is traded to the buyer.
@param mixed $maturity The security's maturity date.
                           The maturity date is the date when the security expires.
@param int $price The security's price per $100 face value
@param int $redemption The security's redemption value per $100 face value
@param int $basis The type of day count to use.
                                       0 or omitted    US (NASD) 30/360
                                       1                Actual/actual
                                       2                Actual/360
                                       3                Actual/365
                                       4                European 30/360
@return float|string Result, or a string containing an error

YIELDMAT.
Returns the annual yield of a security that pays interest at maturity.
@Deprecated 1.18.0
@see Financial\Securities\Yields::yieldAtMaturity()
     Use the yieldAtMaturity() method in the Financial\Securities\Yields class instead
@param mixed $settlement The security's settlement date.
                             The security's settlement date is the date after the issue date when the security
                             is traded to the buyer.
@param mixed $maturity The security's maturity date.
                           The maturity date is the date when the security expires.
@param mixed $issue The security's issue date
@param int $rate The security's interest rate at date of issue
@param int $price The security's price per $100 face value
@param int $basis The type of day count to use.
                      0 or omitted    US (NASD) 30/360
                      1               Actual/actual
                      2               Actual/360
                      3               Actual/365
                      4               European 30/360
@return float|string Result, or a string containing an error

## References

**Database Tables (inferred)**
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\Calculation\Financial.php`

**Classes**:
- `PhpOffice\PhpSpreadsheet\Calculation\Financial`
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
- `ACCRINT($issue,
        $firstInterest,
        $settlement,
        $rate,
        $parValue = 1000,
        $frequency = 1,
        $basis = 0,
        $calcMethod = true)`
- `ACCRINTM($issue, $settlement, $rate, $parValue = 1000, $basis = 0)`
- `AMORDEGRC($cost, $purchased, $firstPeriod, $salvage, $period, $rate, $basis = 0)`
- `AMORLINC($cost, $purchased, $firstPeriod, $salvage, $period, $rate, $basis = 0)`
- `COUPDAYBS($settlement, $maturity, $frequency, $basis = 0)`
- `COUPDAYS($settlement, $maturity, $frequency, $basis = 0)`
- `COUPDAYSNC($settlement, $maturity, $frequency, $basis = 0)`
- `COUPNCD($settlement, $maturity, $frequency, $basis = 0)`
- `COUPNUM($settlement, $maturity, $frequency, $basis = 0)`
- `COUPPCD($settlement, $maturity, $frequency, $basis = 0)`
- `CUMIPMT($rate, $nper, $pv, $start, $end, $type = 0)`
- `CUMPRINC($rate, $nper, $pv, $start, $end, $type = 0)`
- `DB($cost, $salvage, $life, $period, $month = 12)`
- `DDB($cost, $salvage, $life, $period, $factor = 2.0)`
- `DISC($settlement, $maturity, $price, $redemption, $basis = 0)`
- `DOLLARDE($fractional_dollar = null, $fraction = 0)`
- `DOLLARFR($decimal_dollar = null, $fraction = 0)`
- `EFFECT($nominalRate = 0, $periodsPerYear = 0)`
- `FV($rate = 0, $nper = 0, $pmt = 0, $pv = 0, $type = 0)`
- `FVSCHEDULE($principal, $schedule)`
- `INTRATE($settlement, $maturity, $investment, $redemption, $basis = 0)`
- `IPMT($rate, $per, $nper, $pv, $fv = 0, $type = 0)`
- `IRR($values, $guess = 0.1)`
- `ISPMT(...$args)`
- `MIRR($values, $finance_rate, $reinvestment_rate)`
- `NOMINAL($effectiveRate = 0, $periodsPerYear = 0)`
- `NPER($rate = 0, $pmt = 0, $pv = 0, $fv = 0, $type = 0)`
- `NPV(...$args)`
- `PDURATION($rate = 0, $pv = 0, $fv = 0)`
- `PMT($rate = 0, $nper = 0, $pv = 0, $fv = 0, $type = 0)`
- `PPMT($rate, $per, $nper, $pv, $fv = 0, $type = 0)`
- `PRICE($settlement, $maturity, $rate, $yield, $redemption, $frequency, $basis = 0)`
- `PRICEDISC($settlement, $maturity, $discount, $redemption, $basis = 0)`
- `PRICEMAT($settlement, $maturity, $issue, $rate, $yield, $basis = 0)`
- `PV($rate = 0, $nper = 0, $pmt = 0, $fv = 0, $type = 0)`
- `RATE($nper, $pmt, $pv, $fv = 0.0, $type = 0, $guess = 0.1)`
- `RECEIVED($settlement, $maturity, $investment, $discount, $basis = 0)`
- `RRI($nper = 0, $pv = 0, $fv = 0)`
- `SLN($cost, $salvage, $life)`
- `SYD($cost, $salvage, $life, $period)`
- `TBILLEQ($settlement, $maturity, $discount)`
- `TBILLPRICE($settlement, $maturity, $discount)`
- `TBILLYIELD($settlement, $maturity, $price)`
- `XIRR($values, $dates, $guess = 0.1)`
- `XNPV($rate, $values, $dates)`
- `YIELDDISC($settlement, $maturity, $price, $redemption, $basis = 0)`
- `YIELDMAT($settlement, $maturity, $issue, $rate, $price, $basis = 0)`

