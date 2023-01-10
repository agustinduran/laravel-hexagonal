<?php

declare(strict_types=1);

namespace Src\Example\User\Infrastructure\Controllers;

use Src\Example\User\Application\Create\UserCreateUseCase;
use Src\Example\User\Infrastructure\Requests\UserCreateRequest;

final class UserCreateController
{
    public function __construct(
        private UserCreateUseCase $createUseCase
    ) {}

    public function __invoke(UserCreateRequest $request): ?array
    {
        $model = $this->createUseCase->__invoke($request->validate());
        return [
            'success' => true,
            'model'   => $model
        ];
    }
}