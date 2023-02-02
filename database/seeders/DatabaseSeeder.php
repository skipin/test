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
        $this->call(DeskTableSeeder::class);
        $this->command->info('Таблица рабочих столов блога загружена данными!');

        $this->call(DeskListTableSeeder::class);
        $this->command->info('Таблица списков блога загружена данными!');

        /*$this->call(CardTableSeeder::class);
        $this->command->info('Таблица карточек загружена данными!');




        $this->call(TaskTableSeeder::class);
        $this->command->info('Таблица задач блога загружена данными!');*/
    }
}
