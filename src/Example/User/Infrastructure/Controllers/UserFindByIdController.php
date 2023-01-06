<?php

declare(strict_types=1);

namespace Src\Example\User\Infrastructure\Controllers;

use Src\Example\User\Application\Find\UserFindByIdUseCase;
use Src\Example\User\Domain\Exceptions\UserException;

final class UserFindByIdController
{
    public function __construct(
        private UserFindByIdUseCase $findByIdUseCase
    ) {}

    public function __invoke(int $id): ?array
    {
        $response = $this->findByIdUseCase->__invoke($id);
        if ($response == null) throw new UserException('User Not Found', 404); 
        return $response;
    }
}