<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('cart_details')->insert([
            [
                'cart_id'=>1,
                'product_id'=>2,
                'quantity'=>3,
                'size'=>'',
                'color'=>'',
                'unit_price'=>'120000',
                'total_price'=>'320000'
            ],
            [
                'cart_id'=>2,
                'product_id'=>1,
                'quantity'=>2,
                'size'=>'',
                'color'=>'',
                'unit_price'=>'210000',
                'total_price'=>'400000'
            ],
            [
                'cart_id'=>3,
                'product_id'=>4,
                'quantity'=>5,
                'size'=>'',
                'color'=>'',
                'unit_price'=>'250000',
                'total_price'=>'710000'
            ]
        ]);
    }
}
