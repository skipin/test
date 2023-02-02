<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeskListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DeskList::factory(20)->create();
    }
}
