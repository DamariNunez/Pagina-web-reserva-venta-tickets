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
            ['idTimetables' => '1', 'idEvent' => '1'],
            ['idTimetables' => '5', 'idEvent' => '1'],
            ['idTimetables' => '9', 'idEvent' => '1'],
            ['idTimetables' => '13', 'idEvent' => '1'],

            ['idTimetables' => '2', 'idEvent' => '2'],
            ['idTimetables' => '6', 'idEvent' => '2'],
            ['idTimetables' => '10', 'idEvent' => '2'],
            ['idTimetables' => '14', 'idEvent' => '2'],

            ['idTimetables' => '3', 'idEvent' => '3'],
            ['idTimetables' => '7', 'idEvent' => '3'],
            ['idTimetables' => '11', 'idEvent' => '3'],
            ['idTimetables' => '15', 'idEvent' => '3'],

            ['idTimetables' => '4', 'idEvent' => '4'],
            ['idTimetables' => '8', 'idEvent' => '4'],
            ['idTimetables' => '12', 'idEvent' => '4'],

            ['idTimetables' => '16', 'idEvent' => '5'],

            ['idTimetables' => '17', 'idEvent' => '6'],
            ['idTimetables' => '21', 'idEvent' => '6'],
            ['idTimetables' => '25', 'idEvent' => '6'],

            ['idTimetables' => '18', 'idEvent' => '7'],
            ['idTimetables' => '22', 'idEvent' => '7'],
            ['idTimetables' => '26', 'idEvent' => '7'],

            ['idTimetables' => '19', 'idEvent' => '8'],
            ['idTimetables' => '23', 'idEvent' => '8'],
            ['idTimetables' => '27', 'idEvent' => '8'],

            ['idTimetables' => '1', 'idEvent' => '9'],
            ['idTimetables' => '9', 'idEvent' => '9'],

            ['idTimetables' => '3', 'idEvent' => '10'],
            ['idTimetables' => '7', 'idEvent' => '10'],
        ];
        DB::table('happens')->insert($data);
    }
}
