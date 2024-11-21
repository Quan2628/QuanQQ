<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('ratings')->insert([
            [
                'user_id'=>2,
                'product_id'=>2,
                'rating'=>4,
                'review'=>'Sản phẩm okela, mặc rất đẹp, phong cách cực kỳ'
            ],
            [
                'user_id'=>4,
                'product_id'=>4,
                'rating'=>5,
                'review'=>'Chất lượng tốt, rất hài lòng với điều này và giao hàng thân thiện lắm'
            ],
            [
                'user_id'=>3,
                'product_id'=>1,
                'rating'=>5,
                'review'=>'Áo chất liệu mát mẻ, mặc rất tôn da'
            ],
            [
                'user_id'=>2,
                'product_id'=>3,
                'rating'=>4,
                'review'=>'Giày đi thoải mái, không bị bó chặt vào gót'
            ]
        ]);
    }
}
