#!/usr/bin/env bash

# Copyright 2026 eBay Inc.
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

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

echo "Adding license headers to generated files..."
"$SCRIPT_DIR/add-license-headers.sh" "$SCRIPT_DIR/src/Generated"

echo "Done. Run 'composer dump-autoload' if new namespaces were added."
