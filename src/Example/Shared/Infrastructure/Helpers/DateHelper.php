<?php

declare(strict_types=1);

namespace Src\Example\Shared\Infrastructure\Helpers;

use Carbon\Carbon;

trait DateHelper
{
    public function getNow(): string
    {
        return Carbon::now()->toTimeString();
    }
}