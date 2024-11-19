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
                'price'=>'200000',
                'size'=>'',
            ]
        ]);
    }
}
