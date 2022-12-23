<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fencer;
use App\Models\Tournament;
use App\Models\Pool;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Fencer::factory(30)->create();
        Tournament::factory(1)->create();
        Pool::factory(5)->create();
    }
}
