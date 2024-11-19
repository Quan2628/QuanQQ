<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('colors')->insert([
            ['name'=>'Đỏ', 'hex'=> '#FF5733'],
            ['name'=>'Xanh dương', 'hex'=> '#GG2952'],
            ['name'=>'Đen', 'hex'=> '#HH5781'],
            ['name'=>'Trắng', 'hex'=> '#009193'],
            ['name'=>'Xanh lục', 'hex'=> '#FFFF66']
        ]);
    }
}
