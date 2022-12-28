<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TimetablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['1', 'time' => '2023-04-03', 'date' => '14:00'],
            ['2', 'time' => '2023-04-03', 'date' => '15:00'],
            ['3', 'time' => '2023-04-03', 'date' => '16:00'],
            ['4', 'time' => '2023-04-03', 'date' => '17:00'],

            ['5', 'time' => '2023-04-04', 'date' => '14:00'],
            ['6', 'time' => '2023-04-04', 'date' => '15:00'],
            ['7','time' => '2023-04-04', 'date' => '16:00'],
            ['8','time' => '2023-04-04', 'date' => '17:00'],

            ['9','time' => '2023-04-05', 'date' => '14:00'],
            ['10','time' => '2023-04-05', 'date' => '15:00'],
            ['11','time' => '2023-04-05', 'date' => '16:00'],
            ['12','time' => '2023-04-05', 'date' => '17:00'],

            ['13','time' => '2023-04-06', 'date' => '14:00'],
            ['14','time' => '2023-04-06', 'date' => '15:00'],
            ['15','time' => '2023-04-06', 'date' => '16:00'],
            ['16','time' => '2023-04-06', 'date' => '17:00'],

            ['17','time' => '2023-04-07', 'date' => '14:00'],
            ['18','time' => '2023-04-07', 'date' => '15:00'],
            ['19','time' => '2023-04-07', 'date' => '16:00'],
            ['20','time' => '2023-04-07', 'date' => '17:00'],

            ['21','time' => '2023-04-08', 'date' => '14:00'],
            ['22','time' => '2023-04-08', 'date' => '15:00'],
            ['23','time' => '2023-04-08', 'date' => '16:00'],
            ['24','time' => '2023-04-08', 'date' => '17:00'],

            ['25','time' => '2023-04-09', 'date' => '14:00'],
            ['26','time' => '2023-04-09', 'date' => '15:00'],
            ['27','time' => '2023-04-09', 'date' => '16:00']
        ];
        DB::table('timetables')->insert($data);
    }
}
