<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('flowers')->insert([
            [
                'name' => 'Tulip',
                'price' => '17',
               
            ],
            [
                'name' => 'Lavander',
                'price' => '25',
            ]
        ]);





    }
}
