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
            'category_id' => Category::where('name', 'alliances')->first()->id,
            'name' => 'Alliance #1',
            'slug' => 'alliance-#1',
            'description' => 'La description',
            'created_at' => $date,
            'updated_at' => $date
        ])->images()->attach([1,2]);

        Product::create([
            'category_id' => Category::where('name', 'alliances')->first()->id,
            'name' => 'Alliance #2',
            'slug' => 'alliance-#2',
            'description' => 'La description',
            'created_at' => $date,
            'updated_at' => $date
        ])->images()->attach([5,6,7]);

        Product::create([
            'category_id' => Category::where('name', 'alliances')->first()->id,
            'name' => 'Alliance #3',
            'slug' => 'alliance-#3',
            'description' => 'La description',
            'created_at' => $date,
            'updated_at' => $date
        ])->images()->attach([5,6,7]);

        Product::create([
            'category_id' => Category::where('name', 'alliances')->first()->id,
            'name' => 'Alliance #4',
            'slug' => 'alliance-#4',
            'description' => 'La description',
            'created_at' => $date,
            'updated_at' => $date
        ])->images()->attach([5,6,7]);

        Product::create([
            'category_id' => Category::where('name', 'colliers')->first()->id,
            'name' => 'Collier #1',
            'slug' => 'collier-#1',
            'description' => 'La description',
            'created_at' => $date,
            'updated_at' => $date
        ])->images()->attach([5,6,7]);

        Product::create([
            'category_id' => Category::where('name', 'colliers')->first()->id,
            'name' => 'Collier #2',
            'slug' => 'collier-#2',
            'description' => 'La description',
            'created_at' => $date,
            'updated_at' => $date
        ])->images()->attach([5,6,7]);

        Product::create([
            'category_id' => Category::where('name', 'bracelets')->first()->id,
            'name' => 'Bracelet #1',
            'slug' => 'bracelet-#1',
            'description' => 'La description',
            'created_at' => $date,
            'updated_at' => $date
        ])->images()->attach([5,6,7]);

        Product::create([
            'category_id' => Category::where('name', 'bracelets')->first()->id,
            'name' => 'Bracelet #2',
            'slug' => 'bracelet-#2',
            'description' => 'La description',
            'created_at' => $date,
            'updated_at' => $date
        ])->images()->attach([5,6,7]);
    }
}
