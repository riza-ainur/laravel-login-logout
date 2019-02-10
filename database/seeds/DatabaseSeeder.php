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
    	DB::table('users')->insert([
            'name' => 'ainur',
            'email' => 'ainur@gmail.com',
            'password' => bcrypt('password'),
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
