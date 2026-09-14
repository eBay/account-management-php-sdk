# ChangeLog

## 2.0.0 (09/14/2026)

**Breaking changes**
- The following operations changed signature on `AccountV2Client`:
  - `setUserPreferences`: `(mixed, ?string, ?string, ?RequestOptions)` → `(SetUserPreferencesRequest, ?string, ?string, ?RequestOptions)`
- The following operations changed signature on `FinancesClient`:
  - `getOrderEarnings`: `(?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` → `(?array, ?int, ?int, ?array, ?string, ?string, ?RequestOptions)`
  - `getOrderEarningsSummary`: `(?string, ?string, ?string, ?RequestOptions)` → `(?array, ?string, ?string, ?RequestOptions)`
  - `getPayouts`: `(?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` → `(?array, ?int, ?int, ?array, ?string, ?string, ?RequestOptions)`
  - `getPayoutSummary`: `(?string, ?string, ?string, ?RequestOptions)` → `(?array, ?string, ?string, ?RequestOptions)`
  - `getTransactions`: `(?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` → `(?array, ?int, ?int, ?array, ?string, ?string, ?RequestOptions)`
  - `getTransactionSummary`: `(?string, ?string, ?string, ?RequestOptions)` → `(?array, ?string, ?string, ?RequestOptions)`

## 1.0.0 (09/14/2026)

**Breaking changes**
- The following clients were removed:
  - `SellAccountV1Client`
  - `SellAccountV2Client`
  - `SellFinancesV1Client`
- The following members were removed from `AccountManagementClient`:
  - `$sellAccountV1`
  - `$sellAccountV2`
  - `$sellFinances`

- The following clients were added:
  - `AccountV1Client`
  - `AccountV2Client`
  - `FinancesClient`
- The following members were added to `AccountManagementClient`:
  - `$accountV1`
  - `$accountV2`
  - `$finances`
