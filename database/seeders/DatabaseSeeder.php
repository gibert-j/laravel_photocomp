<?php

namespace Database\Seeders;

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
      \App\Models\User::factory(1)->create(['email' => 'a@a.com', 'username' => 'ma', 'admin' => 1]);
      \App\Models\User::factory(1)->create();
      \App\Models\Competition::factory()->create(['end_time'=>now()]);
      \App\Models\Competition::factory()->create();

    }
}
