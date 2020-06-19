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
            'name' => 'alliance',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('categories')->insert([
            'name' => 'collier',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('categories')->insert([
            'name' => 'bracelet',
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }
}
