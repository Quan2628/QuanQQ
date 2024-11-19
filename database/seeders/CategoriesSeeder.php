<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
            [
                'name'=>'Áo thun',
                'slug'=>'ao',
                'description'=>'',
            ],
            [
                'name'=>'Quần jean',
                'slug'=>'quan',
                'description'=>'',
            ],
            [
                'name'=>'Giày sneaker',
                'slug'=>'giay',
                'description'=>'',
            ],
            [
                'name'=>'Phụ kiện',
                'slug'=>'phu-kien',
                'description'=>'',
            ]
        ]);
    }
}
