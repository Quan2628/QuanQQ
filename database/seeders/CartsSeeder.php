<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('carts')->insert([
            [
                'user_id'=>2,
                'product_id'=>2,
                'quantity'=>3,
                'price'=>'500000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'user_id'=>3,
                'product_id'=>1,
                'quantity'=>2,
                'price'=>'240000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'user_id'=>4,
                'product_id'=>4,
                'quantity'=>5,
                'price'=>'680000',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
            
        ]);
    }
}
