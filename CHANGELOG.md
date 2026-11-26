# ChangeLog

## 0.3.0 (11/26/2026)

### Security

- `KiotaAuthProvider` created with an empty `$allowedHosts` list no longer returns the access token for every host. It now requires the URL's host to be in the list.

### Added

- Local mock servers: a base URL may use plain `http` when its host is a loopback host (`127.0.0.1`, `::1` or `localhost`) that you also pass in `$allowedHosts`, for example `allowedHosts: ['127.0.0.1']`. Every other host still requires `https`. `AccountManagementConfiguration::LOOPBACK_HOSTS` lists the loopback hosts.
- `AccountManagementConfiguration::untrustedReason()` says why a URL may not receive the access token, and `AccountManagementConfiguration::normalizeHost()` normalizes a host the same way the SDK compares hosts.

### Changed

- Updated the `account-v1` OpenAPI document to the latest definitions.
- Updated the GraphQL schema to the latest definitions.
- Hosts are compared lowercased and without IPv6 brackets, so `[::1]` and `::1` match.
- A rejected base URL now says whether the scheme or the host is not trusted.

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
