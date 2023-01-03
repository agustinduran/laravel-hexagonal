<?php

declare(strict_types=1);

namespace Src\Example\User\Domain\ValueObjects;

final class UserFullName
{
    public function __construct(
        private string $value
    ) {}

    public function getValue(): string
    {
        return $this->value;
    }

    public function getFirstName(): string
    {
        return $this->value['first_name'];
    }

    public function getLastName(): string
    {
        return $this->value['last_name'];
    }

    public function getFullName(): string
    {
        return $this->value['first_name'] .' ' .$this->value['last_name'];
    }
}