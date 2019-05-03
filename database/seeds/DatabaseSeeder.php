<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Woodland;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*//disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Model::unguard();

        User::truncate();
        Woodland::truncate();
        //re-enable foreign key check for this connection
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');*/

        $this->call(UserTableSeeder::class);

        factory(User::class, 50)->create();
        factory(Woodland::class, 5)->create();

    }
}
