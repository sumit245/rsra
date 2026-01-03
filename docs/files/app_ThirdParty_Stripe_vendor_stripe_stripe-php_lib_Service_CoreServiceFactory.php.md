# app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\CoreServiceFactory.php

- Path: `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\CoreServiceFactory.php`
- Type: PHP
- Size: 6204 bytes

## Summary (from docblocks)

Service factory class for API resources in the root namespace.
@property AccountLinkService $accountLinks
@property AccountService $accounts
@property ApplePayDomainService $applePayDomains
@property ApplicationFeeService $applicationFees
@property Apps\AppsServiceFactory $apps
@property BalanceService $balance
@property BalanceTransactionService $balanceTransactions
@property BillingPortal\BillingPortalServiceFactory $billingPortal
@property ChargeService $charges
@property Checkout\CheckoutServiceFactory $checkout
@property CountrySpecService $countrySpecs
@property CouponService $coupons
@property CreditNoteService $creditNotes
@property CustomerService $customers
@property DisputeService $disputes
@property EphemeralKeyService $ephemeralKeys
@property EventService $events
@property ExchangeRateService $exchangeRates
@property FileLinkService $fileLinks
@property FileService $files
@property FinancialConnections\FinancialConnectionsServiceFactory $financialConnections
@property Identity\IdentityServiceFactory $identity
@property InvoiceItemService $invoiceItems
@property InvoiceService $invoices
@property Issuing\IssuingServiceFactory $issuing
@property MandateService $mandates
@property OAuthService $oauth
@property OrderService $orders
@property PaymentIntentService $paymentIntents
@property PaymentLinkService $paymentLinks
@property PaymentMethodService $paymentMethods
@property PayoutService $payouts
@property PlanService $plans
@property PriceService $prices
@property ProductService $products
@property PromotionCodeService $promotionCodes
@property QuoteService $quotes
@property Radar\RadarServiceFactory $radar
@property RefundService $refunds
@property Reporting\ReportingServiceFactory $reporting
@property ReviewService $reviews
@property SetupAttemptService $setupAttempts
@property SetupIntentService $setupIntents
@property ShippingRateService $shippingRates
@property Sigma\SigmaServiceFactory $sigma
@property SkuService $skus
@property SourceService $sources
@property SubscriptionItemService $subscriptionItems
@property SubscriptionService $subscriptions
@property SubscriptionScheduleService $subscriptionSchedules
@property TaxCodeService $taxCodes
@property TaxRateService $taxRates
@property Terminal\TerminalServiceFactory $terminal
@property TestHelpers\TestHelpersServiceFactory $testHelpers
@property TokenService $tokens
@property TopupService $topups
@property TransferService $transfers
@property Treasury\TreasuryServiceFactory $treasury
@property WebhookEndpointService $webhookEndpoints

@var array<string, string>

## References

**Database Tables (inferred)**
- `our`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Stripe\vendor\stripe\stripe-php\lib\Service\CoreServiceFactory.php`

**Classes**:
- `Stripe\Service\for`
- `Stripe\Service\CoreServiceFactory extends \Stripe\Service\AbstractServiceFactory`

**Functions/Methods**:
- `getServiceClass($name)`

