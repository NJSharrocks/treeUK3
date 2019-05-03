<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          ['id' => 1, 'name' => "nathan",
           'email' => 'nathan.sharrocks.9@googlemail.com',
           'password' => bcrypt('password'),
           'remember_token' => str_random(10),
         ],
       ]);
    }
}
