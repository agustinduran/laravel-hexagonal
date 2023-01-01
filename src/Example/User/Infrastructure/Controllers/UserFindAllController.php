<?php

declare(strict_types=1);

namespace Src\Example\User\Infrastructure\Controller;

final class UserFindAllController
{
    public function __invoke()
    {
        return [
            "greeting" => "hello world"
        ];
    }
}