<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Desk::factory(10)->create();
    }
}
