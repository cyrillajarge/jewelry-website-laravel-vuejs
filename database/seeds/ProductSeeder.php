<?php

use App\Category;
use App\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now()->format('Y-m-d H:i:s');

        Product::create([
            'category_id' => Category::where('name', 'alliance')->first()->id,
            'name' => 'Alliance #1',
            'description' => 'La description',
            'created_at' => $date,
            'updated_at' => $date
        ])->images()->attach([1,2]);

        Product::create([
            'category_id' => Category::where('name', 'alliance')->first()->id,
            'name' => 'Alliance #2',
            'description' => 'La description',
            'created_at' => $date,
            'updated_at' => $date
        ])->images()->attach([5,6,7]);

        Product::create([
            'category_id' => Category::where('name', 'alliance')->first()->id,
            'name' => 'Alliance #3',
            'description' => 'La description',
            'created_at' => $date,
            'updated_at' => $date
        ])->images()->attach([5,6,7]);

        Product::create([
            'category_id' => Category::where('name', 'alliance')->first()->id,
            'name' => 'Alliance #4',
            'description' => 'La description',
            'created_at' => $date,
            'updated_at' => $date
        ])->images()->attach([5,6,7]);

        Product::create([
            'category_id' => Category::where('name', 'collier')->first()->id,
            'name' => 'Collier #1',
            'description' => 'La description',
            'created_at' => $date,
            'updated_at' => $date
        ])->images()->attach([5,6,7]);

        Product::create([
            'category_id' => Category::where('name', 'collier')->first()->id,
            'name' => 'Collier #2',
            'description' => 'La description',
            'created_at' => $date,
            'updated_at' => $date
        ])->images()->attach([5,6,7]);

        Product::create([
            'category_id' => Category::where('name', 'bracelet')->first()->id,
            'name' => 'Bracelet #1',
            'description' => 'La description',
            'created_at' => $date,
            'updated_at' => $date
        ])->images()->attach([5,6,7]);

        Product::create([
            'category_id' => Category::where('name', 'bracelet')->first()->id,
            'name' => 'Bracelet #2',
            'description' => 'La description',
            'created_at' => $date,
            'updated_at' => $date
        ])->images()->attach([5,6,7]);
    }
}
