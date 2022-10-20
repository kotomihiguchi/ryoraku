<?php

use Illuminate\Database\Seeder;
use App\Transportation;
class TransportationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transportations')->truncate();
        
        
        //配列の定義
        $transportations = [
            '車',
            'バス',
            '電車',
            '飛行機',
            'その他'
        ];
        
        foreach ($transportations as $transportation) {
            Transportation::create([
                'name' => $transportation,
            ]);
        }
    }
}
