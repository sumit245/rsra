# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\TreasuryServiceFactory.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\TreasuryServiceFactory.php`
- Type: PHP
- Size: 1608 bytes

## Summary (from docblocks)

Service factory class for API resources in the Treasury namespace.
@property CreditReversalService $creditReversals
@property DebitReversalService $debitReversals
@property FinancialAccountService $financialAccounts
@property InboundTransferService $inboundTransfers
@property OutboundPaymentService $outboundPayments
@property OutboundTransferService $outboundTransfers
@property ReceivedCreditService $receivedCredits
@property ReceivedDebitService $receivedDebits
@property TransactionEntryService $transactionEntries
@property TransactionService $transactions

@var array<string, string>

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\Treasury\TreasuryServiceFactory.php`

**Classes**:
- `Stripe\Service\Treasury\for`
- `Stripe\Service\Treasury\TreasuryServiceFactory extends \Stripe\Service\AbstractServiceFactory`

**Functions/Methods**:
- `getServiceClass($name)`

