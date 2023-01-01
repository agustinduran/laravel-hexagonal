<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($index = 0; $index < 6; $index++) {
            DB::table('users')->insert([
                'user_name' => 'default' .$index,
                'first_name' => 'default',
                'last_name' => 'default',
                'email' => Str::random(10).'@default.com',
                'password' => password_hash('123456', PASSWORD_DEFAULT)
            ]);
        }
    }
}
