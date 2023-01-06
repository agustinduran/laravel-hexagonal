<?php

declare(strict_types=1);

namespace Src\Example\User\Infrastructure\Repositories\Eloquent;

use Src\Example\User\Infrastructure\Repositories\Eloquent\User;
use Src\Example\User\Domain\Contracts\UserRepositoryContract;
use Src\Example\User\Domain\ValueObjects\UserId;

final class UserRepository implements UserRepositoryContract
{
    public function __construct(
        private User $model
    ) {
        $model = new User;
    }

    public function findAll(): array
    {
        return $this->model->all()->toArray();
    }

    public function findById(UserId $id): ?array
    {
        return $this->model->find($id->getValue())?->toarray();
    }
}