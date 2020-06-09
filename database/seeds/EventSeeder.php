<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'name' => 'Piercing day 1',
            'description' => 'Lorem ipsum',
            'date' => Carbon::create(2020,06,12)->format('Y:m:d'),
            'begin_time' => Carbon::createFromTime(14,00)->format('H:i'),
            'end_time' => Carbon::createFromTime(17,00)->format('H:i'),
            'location' => 'Au salon',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'name' => 'Piercing day 2',
            'description' => 'Lorem ipsum',
            'date' => Carbon::create(2020,06,01)->format('Y:m:d'),
            'begin_time' => Carbon::createFromTime(14,00)->format('H:i'),
            'end_time' => Carbon::createFromTime(17,00)->format('H:i'),
            'location' => 'Au salon',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'name' => 'Piercing day 3',
            'description' => 'Lorem ipsum',
            'date' => Carbon::create('2020','06','09')->format('Y:m:d'),
            'begin_time' => Carbon::createFromTime(14,00)->format('H:i'),
            'end_time' => Carbon::createFromTime(17,00)->format('H:i'),
            'location' => 'Au salon',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'name' => 'Piercing day 4',
            'description' => 'Lorem ipsum',
            'date' => Carbon::create('2020','06','22')->format('Y:m:d'),
            'begin_time' => Carbon::createFromTime(14,00)->format('H:i'),
            'end_time' => Carbon::createFromTime(17,00)->format('H:i'),
            'location' => 'Au salon',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
