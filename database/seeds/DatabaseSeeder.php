<?php

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
            UserSeeder::class,
            PageSeeder::class,
            EventSeeder::class,
            ImageSeeder::class,
            PelementSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class
        ]);
    }
}
