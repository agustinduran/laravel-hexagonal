<?php
declare(strict_types=1);

namespace Src\Example\User\Infrastructure\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;

final class User extends Model
{
    protected $table = 'users';
}