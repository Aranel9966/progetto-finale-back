<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            DishSeeder::class,
            OrderSeeder::class,
            RestaurantSeeder::class,
            TypeSeeder::class,

        ]);
    }
}
