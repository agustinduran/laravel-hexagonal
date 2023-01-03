<?php

declare(strict_types=1);

namespace Src\Example\User\Domain\ValueObjects;

final class UserPassword
{
    public function __construct(
        private string $value
    ) {}

    public function getValue(): string
    {
        return $this->value;
    }
}