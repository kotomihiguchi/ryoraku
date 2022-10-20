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
        # 初期化
  DB::table('users')->delete();
  
  # テストデータ挿入
  DB::table('users')->insert([
         [
              'name'    => 'kotomi',
              'email' => 'koto.higuchi.hw93@gmail.com',
              
              # 「secret」でログイン
              'password' => Hash::make('Ren51427'),
           ]
      ]);
    }
}
