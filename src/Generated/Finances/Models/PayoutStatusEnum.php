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

class PayoutStatusEnum extends Enum {
    public const I_N_I_T_I_A_T_E_D = "INITIATED";
    public const S_U_C_C_E_E_D_E_D = "SUCCEEDED";
    public const R_E_V_E_R_S_E_D = "REVERSED";
    public const R_E_T_R_Y_A_B_L_E__F_A_I_L_E_D = "RETRYABLE_FAILED";
    public const T_E_R_M_I_N_A_L__F_A_I_L_E_D = "TERMINAL_FAILED";
}
