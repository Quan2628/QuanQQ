<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Áo thun nam',
                'description'=>'Áo thun nam, chất liệu cotton thoáng mát',
                'size'=>'',
                'color'=>'',
                'price'=>'200000',
                'stock'=>'100',
                'image'=>'',
                'category_id'=>1
            ],
            [
                'name'=>'Quần jean unisex',
                'description'=>'Quần jean thời trang, phong cách',
                'size'=>'',
                'color'=>'',
                'price'=>'320000',
                'stock'=>'100',
                'image'=>'',
                'category_id'=>2
            ],
            [
                'name'=>'Giày sneaker cao cổ',
                'description'=>'Giày dễ phối đồ và thoải mái',
                'size'=>'',
                'color'=>'',
                'price'=>'500000',
                'stock'=>'70',
                'image'=>'',
                'category_id'=>3
            ],
            [
                'name'=>'Áo sơ mi nữ',
                'description'=>'Áo thanh lịch, phù hợp cho công sở',
                'size'=>'',
                'color'=>'',
                'price'=>'250000',
                'stock'=>'120',
                'image'=>'',
                'category_id'=>1
            ],
            [
                'name'=>'Quần vải',
                'description'=>'Quần phù hợp cho mọi lứa tuổi',
                'size'=>'',
                'color'=>'',
                'price'=>'160000',
                'stock'=>'100',
                'image'=>'',
                'category_id'=>2
            ]
        ]);
    }
}
