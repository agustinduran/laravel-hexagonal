<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Task extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($index = 0; $index < 21; $index++) {
            DB::table('tasks')->insert([
                'task' => Str::random(5),
                'description' => Str::random(20),
                'user_id' => rand(1, 5),
            ]);
        }
    }
}
