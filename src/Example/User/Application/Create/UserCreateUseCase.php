<?php

declare(strict_types=1);

namespace Src\Example\User\Application\Create;

use Src\Example\User\Domain\Contracts\UserRepositoryContract;
use Src\Example\User\Domain\ValueObjects\UserCreateRequest;

final class UserCreateUseCase
{
    public function __construct(
        private UserRepositoryContract $repository
    ) {}

    public function __invoke(array $request): ?array
    {
        return $this->repository->create(new UserCreateRequest($request));
    }
}