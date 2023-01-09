<?php

declare(strict_types=1);

namespace Src\Example\User\Infrastructure\Controllers;

use Illuminate\Http\Request;
use Src\Example\User\Application\Create\UserCreateUseCase;

final class UserCreateController
{
    public function __construct(
        private UserCreateUseCase $createUseCase
    ) {}

    public function __invoke(Request $request): ?array
    {
        $model = $this->createUseCase->__invoke($request->all());
        return [
            'success' => true,
            'model'   => $model
        ];
    }
}