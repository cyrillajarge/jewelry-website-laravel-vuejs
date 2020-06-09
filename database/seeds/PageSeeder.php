<?php

use App\Page;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now()->format('Y-m-d H:i:s');

        DB::table('pages')->insert([
            'name' => 'Home',
            'slug' => 'home',
            'parent_id' => null,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('pages')->insert([
            'name' => 'Maison',
            'slug' => 'house',
            'parent_id' => null,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('pages')->insert([
            'name' => 'Joaillerie',
            'slug' => 'joaillerie',
            'parent_id' => null,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('pages')->insert([
            'name' => 'Joaillerie-Bijouterie',
            'slug' => 'bijouterie',
            'parent_id' => Page::where('name', 'Joaillerie')->first()->id,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('pages')->insert([
            'name' => 'Joaillerie-Alliances',
            'slug' => 'alliances',
            'parent_id' => Page::where('name', 'Joaillerie')->first()->id,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('pages')->insert([
            'name' => 'Joaillerie-Haute',
            'slug' => 'haute-joaillerie',
            'parent_id' => Page::where('name', 'Joaillerie')->first()->id,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('pages')->insert([
            'name' => 'Grillz',
            'slug' => 'grillz',
            'parent_id' => null,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('pages')->insert([
            'name' => 'Grillz-Decouvrir',
            'slug' => 'decouvrir',
            'parent_id' => Page::where('name', 'Grillz')->first()->id,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('pages')->insert([
            'name' => 'Grillz-Creations',
            'slug' => 'creations',
            'parent_id' => Page::where('name', 'Grillz')->first()->id,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('pages')->insert([
            'name' => 'Services',
            'slug' => 'services',
            'parent_id' => null,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('pages')->insert([
            'name' => 'Services-Piercing',
            'slug' => 'piercing',
            'parent_id' => Page::where('name', 'Services')->first()->id,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('pages')->insert([
            'name' => 'Services-Transformation',
            'slug' => 'transformation',
            'parent_id' => Page::where('name', 'Services')->first()->id,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('pages')->insert([
            'name' => 'Services-Reparation',
            'slug' => 'reparation',
            'parent_id' => Page::where('name', 'Services')->first()->id,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('pages')->insert([
            'name' => 'Services-Gravure',
            'slug' => 'gravure',
            'parent_id' => Page::where('name', 'Services')->first()->id,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('pages')->insert([
            'name' => 'Services-Entretien',
            'slug' => 'entretien',
            'parent_id' => Page::where('name', 'Services')->first()->id,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('pages')->insert([
            'name' => 'Contact',
            'slug' => 'contact',
            'parent_id' => null,
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }
}
