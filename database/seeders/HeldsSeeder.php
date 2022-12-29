<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class HeldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['idEvent' => '1', 'idPlace' => '1', 'date' => '2023-04-03', 'time' => '13:00'],
            ['idEvent' => '2', 'idPlace' => '2', 'date' => '2023-04-03', 'time' => '14:00'],
            ['idEvent' => '3', 'idPlace' => '3', 'date' => '2023-04-03', 'time' => '15:00'],
            ['idEvent' => '4', 'idPlace' => '4', 'date' => '2023-04-03', 'time' => '16:00'],
            ['idEvent' => '5', 'idPlace' => '5', 'date' => '2023-04-04', 'time' => '13:00'],
            ['idEvent' => '6', 'idPlace' => '6', 'date' => '2023-04-04', 'time' => '14:00'],
            ['idEvent' => '7', 'idPlace' => '7', 'date' => '2023-04-04', 'time' => '15:00'],
            ['idEvent' => '8', 'idPlace' => '1', 'date' => '2023-04-04', 'time' => '16:00'],
            ['idEvent' => '9', 'idPlace' => '2', 'date' => '2023-04-05', 'time' => '13:00'],
            ['idEvent' => '10', 'idPlace' => '3', 'date' => '2023-04-05', 'time' => '14:00'],
            ['idEvent' => '1', 'idPlace' => '4', 'date' => '2023-04-05', 'time' => '15:00'],
            ['idEvent' => '3', 'idPlace' => '5', 'date' => '2023-04-05', 'time' => '16:00'],
            ['idEvent' => '5', 'idPlace' => '6', 'date' => '2023-04-06', 'time' => '13:00'],
            ['idEvent' => '7', 'idPlace' => '7', 'date' => '2023-04-06', 'time' => '14:00']
        ];
        DB::table('helds')->insert($data);
    }
}
