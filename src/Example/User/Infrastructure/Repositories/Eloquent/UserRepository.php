<?php

declare(strict_types=1);

namespace Src\Example\User\Infrastructure\Repositories\Eloquent;

use Src\Example\User\Domain\Contracts\UserRepositoryContract;

final class UserRepository implements UserRepositoryContract
{
    public function findAll(): array
    {
        return ['hola mundo'];
    }
}