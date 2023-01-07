<?php

declare(strict_types=1);

namespace Src\Example\User\Application\Delete;

use Src\Example\User\Domain\Contracts\UserRepositoryContract;
use Src\Example\User\Domain\ValueObjects\UserId;

final class UserDeleteByIdUseCase
{
    public function __construct(
        private UserRepositoryContract $repository
    ) {}

    public function __invoke(int $id): bool
    {
        return $this->repository->deleteById(new UserId($id));
    }
}