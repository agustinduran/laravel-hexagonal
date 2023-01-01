<?php

declare(strict_types=1);

namespace Src\Example\User\Application\Find;

final class UserFindAllUseCase
{
    public function __construct()
    {

    }

    public function __invoke(): array
    {
        return [
            "gretting" => "hello world on use case"
        ];
    }
}