<?php

namespace EBay\AccountManagement\Exceptions;

class GraphQLException extends SdkException
{
    /** @param string[] $errors */
    public function __construct(
        private readonly array $errors,
        private readonly int $httpStatus = 0,
    ) {
        $prefix = $httpStatus > 0 ? "HTTP {$httpStatus}: " : '';
        parent::__construct($prefix . 'GraphQL errors: ' . implode('; ', $errors));
    }

    /** @return string[] */
    public function getErrors(): array
    {
        return $this->errors;
    }

    public function getHttpStatus(): int
    {
        return $this->httpStatus;
    }
}
