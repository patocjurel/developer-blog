<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'patocjurel@gmail.com',
            'password' => bcrypt('password'),
            'api_token' => str_random(60)
        ]);
    }
}
