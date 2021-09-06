<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       $this->call(ProfessionSeeder::class);
       $this->call(UserSeeder::class);
       
        // $this->call(UserTableSeeder::class);

    }
}