<?php

declare(strict_types=1);

namespace Src\Example\User\Application\Find;

use Src\Example\User\Domain\Exceptions\UserException;

final class UserFindAllUseCase
{
    public function __construct()
    {

    }

    public function __invoke(): array
    {
        throw new UserException('User not found', 404);
        return [
            "gretting" => "hello world on use case"
        ];
    }
}