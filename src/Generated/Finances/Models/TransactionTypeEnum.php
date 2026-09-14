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

class TransactionTypeEnum extends Enum {
    public const S_A_L_E = "SALE";
    public const R_E_F_U_N_D = "REFUND";
    public const C_R_E_D_I_T = "CREDIT";
    public const D_I_S_P_U_T_E = "DISPUTE";
    public const S_H_I_P_P_I_N_G__L_A_B_E_L = "SHIPPING_LABEL";
    public const T_R_A_N_S_F_E_R = "TRANSFER";
    public const N_O_N__S_A_L_E__C_H_A_R_G_E = "NON_SALE_CHARGE";
    public const A_D_J_U_S_T_M_E_N_T = "ADJUSTMENT";
    public const W_I_T_H_D_R_A_W_A_L = "WITHDRAWAL";
    public const L_O_A_N__R_E_P_A_Y_M_E_N_T = "LOAN_REPAYMENT";
    public const P_U_R_C_H_A_S_E = "PURCHASE";
}
