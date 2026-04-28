#!/usr/bin/env bash
set -euo pipefail

echo "Regenerating REST clients via Kiota..."

kiota generate -l php \
  -d specs/sell_account_v1_oas3.yaml \
  -c SellAccountV1ApiClient \
  -n 'EBay\AccountManagement\Generated\SellAccountV1' \
  -o src/Generated/SellAccountV1 \
  --ebc --co

kiota generate -l php \
  -d specs/sell_account_v2_oas3.yaml \
  -c SellAccountV2ApiClient \
  -n 'EBay\AccountManagement\Generated\SellAccountV2' \
  -o src/Generated/SellAccountV2 \
  --ebc --co

kiota generate -l php \
  -d specs/sell_finances_v1_oas3.yaml \
  -c SellFinancesV1ApiClient \
  -n 'EBay\AccountManagement\Generated\SellFinancesV1' \
  -o src/Generated/SellFinancesV1 \
  --ebc --co

echo "Done. Run 'composer dump-autoload' if new namespaces were added."
