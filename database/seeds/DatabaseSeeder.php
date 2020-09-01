<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(CustomerTableSeeder::class);
        $this->call(UserTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

    }
}
