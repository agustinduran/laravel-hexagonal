<?php

declare(strict_types=1);

namespace Src\Example\User\Domain\Contracts;

use Src\Example\User\Domain\User;
use Src\Example\User\Domain\ValueObjects\UserId;

interface UserRepositoryContract
{
    public function findAll(): array;
    public function findById(UserId $id): ?array;
}