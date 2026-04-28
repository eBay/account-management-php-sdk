<?php

namespace EBay\AccountManagement\Clients\GraphQL;

use EBay\AccountManagement\GraphQL\Operations\EBayGraphOperations;
use EBay\AccountManagement\GraphQL\Types\Inputs\UserBiddingActivityInput;
use EBay\AccountManagement\GraphQL\Types\Results\UserBiddingActivityResult;
use EBay\AccountManagement\GraphQL\Types\Results\UserResult;

final class EBayGraphClient
{
    public function __construct(private readonly DynamicGraphQLClient $dynamic) {}

    /**
     * Retrieve bidding activity for the authenticated user.
     */
    public function userBiddingActivity(
        UserBiddingActivityInput $input,
        ?string $accessToken = null
    ): UserBiddingActivityResult {
        $data = $this->dynamic->execute(
            EBayGraphOperations::USER_BIDDING_ACTIVITY,
            ['input' => $input->toArray()],
            $accessToken
        );
        return UserBiddingActivityResult::fromArray($data['userBiddingActivity']);
    }

    /**
     * Retrieve identity information for the authenticated user.
     * Returns null if the user query returned null.
     */
    public function user(?string $accessToken = null): ?UserResult
    {
        $data = $this->dynamic->execute(
            EBayGraphOperations::USER,
            [],
            $accessToken
        );
        if (empty($data['user'])) {
            return null;
        }
        return UserResult::fromArray($data['user']);
    }

    /**
     * Escape hatch — send any GraphQL query and receive a raw array.
     *
     * @return array<string, mixed>
     */
    public function executeRaw(string $query, array $variables = [], ?string $accessToken = null): array
    {
        return $this->dynamic->execute($query, $variables, $accessToken);
    }
}
