<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AtoB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('from_ato_b_s')->insert([
            'title' => 'из A в В',
            'event_id' => Str::random(3),
            'timetable' =>  '18:00:00'

        ]);
        DB::table('from_ato_b_s')->insert([
            'title' => 'из A в В',
            'event_id' => Str::random(3),
            'timetable' => '18:30:00'

        ]);
        DB::table('from_ato_b_s')->insert([
            'title' => 'из A в В',
            'event_id' => Str::random(3),
            'timetable' => '18:45:00'

        ]);
        DB::table('from_ato_b_s')->insert([
            'title' => 'из A в В',
            'event_id' => Str::random(3),
            'timetable' =>   '19:00:00'
        ]);
        DB::table('from_ato_b_s')->insert([
            'title' => 'из A в В',
            'event_id' => Str::random(3),
            'timetable' => '19:15:00'
        ]);
        DB::table('from_ato_b_s')->insert([
            'title' => 'из A в В',
            'event_id' => Str::random(3),
            'timetable' => '21:00:00'
        ]);

    }
}
