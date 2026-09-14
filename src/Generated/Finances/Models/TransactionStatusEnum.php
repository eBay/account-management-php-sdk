<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace EBay\AccountManagement\Generated\Finances\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TransactionStatusEnum extends Enum {
    public const F_U_N_D_S__O_N__H_O_L_D = "FUNDS_ON_HOLD";
    public const F_U_N_D_S__P_R_O_C_E_S_S_I_N_G = "FUNDS_PROCESSING";
    public const F_U_N_D_S__A_V_A_I_L_A_B_L_E__F_O_R__P_A_Y_O_U_T = "FUNDS_AVAILABLE_FOR_PAYOUT";
    public const P_A_Y_O_U_T = "PAYOUT";
    public const C_O_M_P_L_E_T_E_D = "COMPLETED";
    public const F_A_I_L_E_D = "FAILED";
}
