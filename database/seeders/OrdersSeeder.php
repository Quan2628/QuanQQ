<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('orders')->insert([
            [
                'user_id'=>2,
                'date_order'=>Carbon::create('2024', '11', '21', '15', '00', '00'),
                'quantity'=>3,
                'total_price'=>'480000',
                'status'=>'',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'user_id'=>3,
                'date_order'=>Carbon::create('2024', '11', '20', '16', '50', '00'),
                'quantity'=>2,
                'total_price'=>'240000',
                'status'=>'',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'user_id'=>4,
                'date_order'=>Carbon::create('2024', '11', '16', '07', '30', '00'),
                'quantity'=>5,
                'total_price'=>'680000',
                'status'=>'',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]

        ]);
    }
}
