<?php

declare(strict_types=1);

namespace Src\Example\User\Application\Find;

use Src\Example\User\Domain\Contracts\UserRepositoryContract;
use Src\Example\User\Domain\ValueObjects\UserId;

final class UserFindByIdUseCase
{
    public function __construct(
        private UserRepositoryContract $repository
    ) {}

    public function __invoke(int $id): ?array
    {
        return $this->repository->findById(new UserId($id));
    }
}