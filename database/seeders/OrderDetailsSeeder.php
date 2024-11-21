<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('order_details')->insert([
            [
                'order_id'=>1,
                'product_id'=>1,
                'quantity'=>3,
                'unit_price'=>'160000',
                'total_price'=>'480000'
            ],
            [
                'order_id'=>2,
                'product_id'=>3,
                'quantity'=>2,
                'unit_price'=>'120000',
                'total_price'=>'240000'
            ],
            [
                'order_id'=>3,
                'product_id'=>4,
                'quantity'=>5,
                'unit_price'=>'136000',
                'total_price'=>'680000'
            ]
        ]);
    }
}
