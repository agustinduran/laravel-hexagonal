<?php

declare(strict_types=1);

namespace Src\Example\User\Domain\ValueObjects;

final class UserCreateRequest
{
    public function __construct(
        private array $value
    ) {
        $this->hashPassword();
    }

    public function getValue(): array
    {
        return $this->value;
    }

    public function hashPassword()
    {
        $this->value['password'] = password_hash($this->getValue()['password'], PASSWORD_DEFAULT);
    }
}