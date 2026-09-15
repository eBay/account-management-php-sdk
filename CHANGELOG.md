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
| `setUserPreferences` | `(mixed $body, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` | `(SetUserPreferencesRequest $body, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |

`FinancesClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `getOrderEarnings` | `(?string $filter, ?string $limit, ?string $offset, ?string $sort, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?array $filter, ?int $limit, ?int $offset, ?array $sort, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getOrderEarningsSummary` | `(?string $filter, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?array $filter, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getPayouts` | `(?string $filter, ?string $limit, ?string $offset, ?string $sort, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?array $filter, ?int $limit, ?int $offset, ?array $sort, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getPayoutSummary` | `(?string $filter, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?array $filter, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getTransactions` | `(?string $filter, ?string $limit, ?string $offset, ?string $sort, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?array $filter, ?int $limit, ?int $offset, ?array $sort, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `getTransactionSummary` | `(?string $filter, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?array $filter, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |
