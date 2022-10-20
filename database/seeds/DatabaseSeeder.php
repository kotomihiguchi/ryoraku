<?php

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
        // $this->call(UsersTableSeeder::class);
        # UserTableSeeder を呼び出すよう登録
        $this->call(UserTableSeeder::class);
        
        $this->call(TransportationSeeder::class);
        
    }
}
