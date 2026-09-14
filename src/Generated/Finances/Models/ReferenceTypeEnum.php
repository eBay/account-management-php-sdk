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

class ReferenceTypeEnum extends Enum {
    public const I_N_V_O_I_C_E = "INVOICE";
    public const I_T_E_M__I_D = "ITEM_ID";
    public const O_R_D_E_R__I_D = "ORDER_ID";
    public const C_A_S_E__I_D = "CASE_ID";
    public const C_A_N_C_E_L_L_A_T_I_O_N__I_D = "CANCELLATION_ID";
    public const R_E_F_U_N_D__I_D = "REFUND_ID";
    public const R_E_T_U_R_N__I_D = "RETURN_ID";
    public const P_A_Y_M_E_N_T_S__D_I_S_P_U_T_E__I_D = "PAYMENTS_DISPUTE_ID";
    public const P_A_Y_O_U_T__I_D = "PAYOUT_ID";
    public const L_O_A_N__R_E_P_A_Y_M_E_N_T__I_D = "LOAN_REPAYMENT_ID";
    public const P_S_N_A_D__I_D = "PSNAD_ID";
}
