<?php

declare(strict_types=1);

namespace Src\Example\User\Domain\Contracts;

use Src\Example\User\Domain\User;

interface UserRepositoryContract
{
    public function findAll(): array;
}