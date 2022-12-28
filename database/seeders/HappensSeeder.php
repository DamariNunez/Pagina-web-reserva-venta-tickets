<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class HappensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['idTimetable' => '1', 'idEvent' => '1'],
            ['idTimetable' => '5', 'idEvent' => '1'],
            ['idTimetable' => '9', 'idEvent' => '1'],
            ['idTimetable' => '13', 'idEvent' => '1'],

            ['idTimetable' => '2', 'idEvent' => '2'],
            ['idTimetable' => '6', 'idEvent' => '2'],
            ['idTimetable' => '10', 'idEvent' => '2'],
            ['idTimetable' => '14', 'idEvent' => '2'],

            ['idTimetable' => '3', 'idEvent' => '3'],
            ['idTimetable' => '7', 'idEvent' => '3'],
            ['idTimetable' => '11', 'idEvent' => '3'],
            ['idTimetable' => '15', 'idEvent' => '3'],

            ['idTimetable' => '4', 'idEvent' => '4'],
            ['idTimetable' => '8', 'idEvent' => '4'],
            ['idTimetable' => '12', 'idEvent' => '4'],

            ['idTimetable' => '16', 'idEvent' => '5'],

            ['idTimetable' => '17', 'idEvent' => '6'],
            ['idTimetable' => '21', 'idEvent' => '6'],
            ['idTimetable' => '25', 'idEvent' => '6'],

            ['idTimetable' => '18', 'idEvent' => '7'],
            ['idTimetable' => '22', 'idEvent' => '7'],
            ['idTimetable' => '26', 'idEvent' => '7'],

            ['idTimetable' => '19', 'idEvent' => '8'],
            ['idTimetable' => '23', 'idEvent' => '8'],
            ['idTimetable' => '27', 'idEvent' => '8'],

            ['idTimetable' => '1', 'idEvent' => '9'],
            ['idTimetable' => '9', 'idEvent' => '9'],

            ['idTimetable' => '3', 'idEvent' => '10'],
            ['idTimetable' => '7', 'idEvent' => '10'],
        ];
        DB::table('happens')->insert($data);
    }
}
