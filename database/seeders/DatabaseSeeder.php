<?php

namespace Database\Seeders;

<<<<<<< HEAD
=======
use App\Models\User;
>>>>>>> 5e6847e63bc83beaa0892defb3bfd290dc7bfce9
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            CategoriesSeeder::class,
            ProductsSeeder::class,
            OrdersSeeder::class,
            OrderDetailsSeeder::class,
            CartsSeeder::class,
            CartDetailsSeeder::class,
            RatingsSeeder::class,
            CommentsSeeder::class,
            UsersSeeder::class
=======
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
>>>>>>> 5e6847e63bc83beaa0892defb3bfd290dc7bfce9
        ]);
    }
}
