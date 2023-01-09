<?php

declare(strict_types=1);

namespace Src\Example\User\Infrastructure\Repositories\Eloquent;

use Src\Example\User\Infrastructure\Repositories\Eloquent\User;
use Src\Example\User\Domain\Contracts\UserRepositoryContract;
use Src\Example\User\Domain\ValueObjects\UserCreateRequest;
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
        return $this->model->whereNull('deleted_at')->get()->toArray();
    }

    public function findById(UserId $id): ?array
    {
        return $this->model->where('id', $id->getValue())->whereNull('deleted_at')->get()->toArray();
    }

    public function create(UserCreateRequest $request): ?array
    {
        return $this->model->create($request->getValue())->toArray();
    }

    public function deleteById(UserId $id): bool
    {
        return boolval($this->model->where('id', $id->getValue())->whereNull('deleted_at')->update(['deleted_at' => NOW()]));
    }
}