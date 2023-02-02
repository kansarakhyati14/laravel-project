<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->insert([
       
        [
            'name'=>'LG TV',
            'price'=>'20000',
            'description'=>'A smart tv',
            'category'=>'tv',
            'gallery'=>'https://m.media-amazon.com/images/I/71IBre-QupL._SL1500_.jpg'

        ],

        [
            'name'=>'Fridge',
            'price'=>'30000',
            'description'=>'A smart fridge ',
            'category'=>'fridge',
            'gallery'=>'https://m.media-amazon.com/images/I/41rQ96NJTlL._SL1500_.jpg'

        ],
        [
            'name'=>'SAMSUNG MOBILE',
            'price'=>'50000',
            'description'=>'A smart phone with 5g ram and much more feature',
            'category'=>'mobile',
            'gallery'=>'https://m.media-amazon.com/images/I/71fLhhGdISL._SX679_.jpg'

        ]
                
        ]);
    
    }
}