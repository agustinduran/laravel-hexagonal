<?php

declare(strict_types=1);

namespace Src\Example\User\Domain\ValueObjects;

final class UserTimestamp
{
    public function __construct(
        private string $value
    ) {}

    public function getValue(): string
    {
        return $this->value;
    }

    public function getCreatedAt(): string
    {
        return $this->value['created_at'];
    }

    public function getUpdatedAt(): string
    {
        return $this->value['updated_at'];
    }

    public function getDeletedAt(): string
    {
        return $this->value['deleted_at'];
    }
}