<?php

declare(strict_types=1);

namespace Vendor\Demo\Domain\Model\Account;

class AccountEmail
{
    public function __construct(
        private readonly string $value,
    ) {
        if (empty($value)) {
            throw new \InvalidArgumentException('User name cannot be empty');
        }
    }

    public function equals(AccountEmail $other): bool
    {
        return $this->value === $other->value;
    }
}
