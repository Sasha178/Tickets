<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BtoA extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('from_bto_a_s')->insert([
            'title'     => 'из B в A',
            'timetable' =>  '18:30:00'

        ]);
        DB::table('from_bto_a_s')->insert([
            'title'     => 'из B в A',
            'timetable' =>  '18:45:00'

        ]);
        DB::table('from_bto_a_s')->insert([
            'title'     => 'из B в A',
            'timetable' => '19:00:00'

        ]);
        DB::table('from_bto_a_s')->insert([
            'title'     => 'из B в A',
            'timetable' => '19:15:00'

        ]);
        DB::table('from_bto_a_s')->insert([
            'title'     => 'из B в A',
            'timetable' =>   '19:35:00'
        ]);
        DB::table('from_bto_a_s')->insert([
            'title'     => 'из B в A',
            'timetable' => '21:50:00'
        ]);
        DB::table('from_bto_a_s')->insert([
            'title'     => 'из B в A',
            'timetable' => '21:55:00'
        ]);

    }
}
