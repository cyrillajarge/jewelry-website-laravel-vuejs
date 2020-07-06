<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now()->format('Y-m-d H:i:s');

        DB::table('categories')->insert([
            'name' => 'Alliances',
            'slug' => 'alliances',
            'description' => 'Aussi bien en cadeau que pour une demande, la bague est le bijoux préferé.',
            'image_id' => 1,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('categories')->insert([
            'name' => 'Colliers',
            'slug' => 'colliers',
            'description' => 'Quotidien ou occasionnel. Aucune limite, pour n\'importe quel style.',
            'image_id' => 2,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('categories')->insert([
            'name' => 'Bracelets',
            'slug' => 'bracelets',
            'description' => 'Sûrement le bijoux qui correspond autant aux femmes qu\'aux hommes ou encore enfants. Pour vous même, ou pour un cadeau original',
            'image_id' => 3,
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }
}
