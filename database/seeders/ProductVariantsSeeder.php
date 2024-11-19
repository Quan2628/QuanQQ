<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductVariantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('product_variants')->insert([
            [
                'product_id'=>1,
                'size_id'=>1,
                'color_id'=>1,
                'quantity'=>'50' 
            ],
            [
                'product_id'=>4,
                'size_id'=>2,
                'color_id'=>2,
                'quantity'=>'20' 
            ],
            [
                'product_id'=>1,
                'size_id'=>3,
                'color_id'=>4,
                'quantity'=>'45' 
            ],
            [
                'product_id'=>3,
                'size_id'=>1,
                'color_id'=>5,
                'quantity'=>'50' 
            ],
            [
                'product_id'=>2,
                'size_id'=>4,
                'color_id'=>3,
                'quantity'=>'60' 
            ]
        ]);
    }
}
