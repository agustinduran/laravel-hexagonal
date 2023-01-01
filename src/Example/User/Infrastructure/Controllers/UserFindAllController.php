<?php

declare(strict_types=1);

namespace Src\Example\User\Infrastructure\Controllers;

use Src\Example\User\Application\Find\UserFindAllUseCase;

final class UserFindAllController
{
    public function __construct(
        private UserFindAllUseCase $findAllUseCase
    ) {}

    public function __invoke(): array
    {
        return $this->findAllUseCase->__invoke();
    }
}