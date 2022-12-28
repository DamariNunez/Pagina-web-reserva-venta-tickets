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
            ['time' => '13:00', 'date' => '2023-04-03'],
            ['time' => '14:00', 'date' => '2023-04-03'],
            ['time' => '15:00', 'date' => '2023-04-03'],
            ['time' => '16:00', 'date' => '2023-04-03'],
            ['time' => '17:00', 'date' => '2023-04-03'],

            ['time' => '14:00', 'date' => '2023-04-04'],
            ['time' => '15:00', 'date' => '2023-04-04'],
            ['time' => '16:00', 'date' => '2023-04-04'],
            ['time' => '17:00', 'date' => '2023-04-04'],

            ['time' => '14:00', 'date' => '2023-04-05'],
            ['time' => '15:00', 'date' => '2023-04-05'],
            ['time' => '16:00', 'date' => '2023-04-05'],
            ['time' => '17:00', 'date' => '2023-04-05'],

            ['time' => '14:00', 'date' => '2023-04-06'],
            ['time' => '15:00', 'date' => '2023-04-06'],
            ['time' => '16:00', 'date' => '2023-04-06'],
            ['time' => '17:00', 'date' => '2023-04-06'],

            ['time' => '14:00', 'date' => '2023-04-07'],
            ['time' => '15:00', 'date' => '2023-04-07'],
            ['time' => '16:00', 'date' => '2023-04-07'],
            ['time' => '17:00', 'date' => '2023-04-07'],

            ['time' => '14:00', 'date' => '2023-04-08'],
            ['time' => '15:00', 'date' => '2023-04-08'],
            ['time' => '16:00', 'date' => '2023-04-08'],
            ['time' => '17:00', 'date' => '2023-04-08'],

            ['time' => '14:00', 'date' => '2023-04-09'],
            ['time' => '15:00', 'date' => '2023-04-09'],
            ['time' => '16:00', 'date' => '2023-04-09']
        ];
        DB::table('timetables')->insert($data);
    }
}
