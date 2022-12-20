<?php

namespace Database\Seeders;

use App\Models\todo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        todo::create([
            'todo' => 'Wash the plate'
        ]);

        todo::create([
            'todo' => 'Wash the fan'
        ]);
    }
}
