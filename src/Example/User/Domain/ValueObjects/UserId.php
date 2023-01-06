<?php

declare(strict_types=1);

namespace Src\Example\User\Domain\ValueObjects;

final class UserId
{
    public function __construct(
        private int $value
    ) {}

    public function getValue(): int
    {
        return $this->value;
    }
}