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

namespace EBay\AccountManagement\Generated\AccountV1\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PaymentMethodTypeEnum extends Enum {
    public const C_A_S_H__I_N__P_E_R_S_O_N = "CASH_IN_PERSON";
    public const C_A_S_H__O_N__D_E_L_I_V_E_R_Y = "CASH_ON_DELIVERY";
    public const C_A_S_H__O_N__P_I_C_K_U_P = "CASH_ON_PICKUP";
    public const C_A_S_H_I_E_R__C_H_E_C_K = "CASHIER_CHECK";
    public const C_R_E_D_I_T__C_A_R_D = "CREDIT_CARD";
    public const E_S_C_R_O_W = "ESCROW";
    public const I_N_T_E_G_R_A_T_E_D__M_E_R_C_H_A_N_T__C_R_E_D_I_T__C_A_R_D = "INTEGRATED_MERCHANT_CREDIT_CARD";
    public const L_O_A_N__C_H_E_C_K = "LOAN_CHECK";
    public const M_O_N_E_Y__O_R_D_E_R = "MONEY_ORDER";
    public const P_A_I_S_A__P_A_Y = "PAISA_PAY";
    public const P_A_I_S_A__P_A_Y__E_S_C_R_O_W = "PAISA_PAY_ESCROW";
    public const P_A_I_S_A__P_A_Y__E_S_C_R_O_W__E_M_I = "PAISA_PAY_ESCROW_EMI";
    public const P_A_Y_P_A_L = "PAYPAL";
    public const P_E_R_S_O_N_A_L__C_H_E_C_K = "PERSONAL_CHECK";
    public const O_T_H_E_R = "OTHER";
}
