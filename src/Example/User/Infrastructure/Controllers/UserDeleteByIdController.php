<?php

declare(strict_types=1);

namespace Src\Example\User\Infrastructure\Controllers;

use Src\Example\User\Application\Delete\UserDeleteByIdUseCase;
use Src\Example\User\Domain\Exceptions\UserException;

final class UserDeleteByIdController
{
    public function __construct(
        private UserDeleteByIdUseCase $deleteByIdUseCase
    ) {}

    public function __invoke(int $id): array
    {
        $response = $this->deleteByIdUseCase->__invoke($id);
        if ($response == null) throw new UserException('User Not Found', 404);
        return [
            'success' => $response,
            'message' => 'User Deleted'
        ];
    }
}