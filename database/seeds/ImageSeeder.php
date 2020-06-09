<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now()->format('Y-m-d H:i:s');

        DB::table('images')->insert([
            'name' => 'Alliances',
            'url' => '/img/alliances.jpg',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('images')->insert([
            'name' => 'Autre bijoux',
            'url' => '/img/autre-bijoux.png',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('images')->insert([
            'name' => 'Bijouterie Joaillerie',
            'url' => '/img/bijouterie-joaillerie.jpg',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('images')->insert([
            'name' => 'Bracelet',
            'url' => '/img/bracelet.wepb',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('images')->insert([
            'name' => 'Boucles oreilles',
            'url' => '/img/earrings.png',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('images')->insert([
            'name' => 'Entretien',
            'url' => '/img/entretien.jpg',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('images')->insert([
            'name' => 'Gravure',
            'url' => '/img/gravure.jpg',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('images')->insert([
            'name' => 'Haute Joaillerie',
            'url' => '/img/haute-joaillerie.jpg',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('images')->insert([
            'name' => 'Collier',
            'url' => '/img/necklace.png',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('images')->insert([
            'name' => 'Pendentif',
            'url' => '/img/pendentif.png',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('images')->insert([
            'name' => 'Percing',
            'url' => '/img/piercing.jpg',
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }
}
