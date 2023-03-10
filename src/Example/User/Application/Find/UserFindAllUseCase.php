<?php

declare(strict_types=1);

namespace Src\Example\User\Application\Find;

use Src\Example\User\Domain\Contracts\UserRepositoryContract;

final class UserFindAllUseCase
{
    public function __construct(
        private UserRepositoryContract $repository
    ) {}

    public function __invoke(): array
    {
        return $this->repository->findAll();
    }
}