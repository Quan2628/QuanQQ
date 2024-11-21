<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('comments')->insert([
            [
                'user_id'=>2,
                'product_id'=>2,
                'comment'=>'Sản phẩm rất tốt, tôi sẽ mua lại',
                'parent_id'=>''
            ],
            [
                'user_id'=>3,
                'product_id'=>1,
                'comment'=>'Chưa hài lòng với chất lượng nhưng mặc vẫn oki, mong shop có cải thiện',
                'parent_id'=>''
            ],
            [
                'user_id'=>4,
                'product_id'=>4,
                'comment'=>'...',
                'parent_id'=>''
            ]
        ]);
    }
}
