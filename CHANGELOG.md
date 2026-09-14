# ChangeLog

## 0.2.0 (09/14/2026)

### Breaking changes

#### Renamed clients and members

| Surface | Previous | Current |
| --- | --- | --- |
| REST client | `SellAccountV1Client` | `AccountV1Client` |
| REST client | `SellAccountV2Client` | `AccountV2Client` |
| REST client | `SellFinancesV1Client` | `FinancesClient` |
| `AccountManagementClient` member | `$sellAccountV1` | `$accountV1` |
| `AccountManagementClient` member | `$sellAccountV2` | `$accountV2` |
| `AccountManagementClient` member | `$sellFinances` | `$finances` |

#### Changed signatures

`AccountV2Client`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `setUserPreferences` | `(mixed, ?string, ?string, ?RequestOptions)` | `(SetUserPreferencesRequest, ?string, ?string, ?RequestOptions)` |

`FinancesClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `getOrderEarnings` | `(?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` | `(?array, ?int, ?int, ?array, ?string, ?string, ?RequestOptions)` |
| `getOrderEarningsSummary` | `(?string, ?string, ?string, ?RequestOptions)` | `(?array, ?string, ?string, ?RequestOptions)` |
| `getPayouts` | `(?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` | `(?array, ?int, ?int, ?array, ?string, ?string, ?RequestOptions)` |
| `getPayoutSummary` | `(?string, ?string, ?string, ?RequestOptions)` | `(?array, ?string, ?string, ?RequestOptions)` |
| `getTransactions` | `(?string, ?string, ?string, ?string, ?string, ?string, ?RequestOptions)` | `(?array, ?int, ?int, ?array, ?string, ?string, ?RequestOptions)` |
| `getTransactionSummary` | `(?string, ?string, ?string, ?RequestOptions)` | `(?array, ?string, ?string, ?RequestOptions)` |
