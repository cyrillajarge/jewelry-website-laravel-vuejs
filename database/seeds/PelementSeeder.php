<?php

use App\Image;
use App\Page;
use App\Pelement;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now()->format('Y-m-d H:i:s');

        Pelement::create([
            'page_id' => Page::where('name', 'Home')->first()->id,
            'name' => 'Test name',
            'title' => 'Test title',
            'content' => 'Test content',
            'nimages' => 'multiple',
            'created_at' => $date,
            'updated_at' => $date
        ])->images()->attach([1,2]);
        
        // Pour page : La maison

        $page = Page::where('name', 'Maison')->first()->id;

        Pelement::create([
            'page_id' => $page,
            'name' => 'Carousel',
            'title' => 'Notre histoire',
            'content' => '',
            'nimages' => 'multiple',
            'created_at' => $date,
            'updated_at' => $date
        ])->images()->attach([1,2]);

    }
}
