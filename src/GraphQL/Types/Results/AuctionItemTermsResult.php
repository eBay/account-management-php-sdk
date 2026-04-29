<?php
declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class AuctionItemTermsResult
{
    public function __construct(
        public ?array $availability = null,
        public ?array $pricingTerms = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            availability:  $data['availability'] ?? null,
            pricingTerms:  $data['pricingTerms'] ?? null,
        );
    }
}
