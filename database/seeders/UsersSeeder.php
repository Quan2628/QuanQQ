<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        if (!DB::table('users')->where('email', 'fanvip.1st@gmail.com')->exists()) {
        DB::table('users')->insert([
            [
                'name'=>'Long Quân',
                'email'=>'fanvip.1st@gmail.com',
                'password'=>'12345678',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'name'=>'Jake Smith',
                'email'=>'jack@gmail.com',
                'password'=>'0123456789',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'name'=>'Nghĩa Bùi',
                'email'=>'nghiax137@gmail.com',
                'password'=>'13072005',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'name'=>'Hanna Laura',
                'email'=>'laura1106@gmail.com',
                'password'=>'135792468',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
          ]);
        }
    }
}
