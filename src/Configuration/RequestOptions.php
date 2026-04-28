<?php

declare(strict_types=1);

namespace EBay\AccountManagement\Configuration;

final class RequestOptions
{
    /** @param array<string,string> $headers */
    public function __construct(public array $headers = []) {}
}
