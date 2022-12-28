<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SeatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['row' => 'A', 'seat' => '1', 'idPlace' => '3'],
            ['row' => 'A', 'seat' => '2', 'idPlace' => '3'],
            ['row' => 'A', 'seat' => '3', 'idPlace' => '3'],
            ['row' => 'A', 'seat' => '4', 'idPlace' => '3'],
            ['row' => 'A', 'seat' => '5', 'idPlace' => '3'],
            ['row' => 'B', 'seat' => '1', 'idPlace' => '3'],
            ['row' => 'B', 'seat' => '2', 'idPlace' => '3'],
            ['row' => 'B', 'seat' => '3', 'idPlace' => '3'],
            ['row' => 'B', 'seat' => '4', 'idPlace' => '3'],
            ['row' => 'B', 'seat' => '5', 'idPlace' => '3'],
            ['row' => 'C', 'seat' => '1', 'idPlace' => '3'],
            ['row' => 'C', 'seat' => '2', 'idPlace' => '3'],
            ['row' => 'C', 'seat' => '3', 'idPlace' => '3'],
            ['row' => 'C', 'seat' => '4', 'idPlace' => '3'],
            ['row' => 'C', 'seat' => '5', 'idPlace' => '3'],
            ['row' => 'D', 'seat' => '1', 'idPlace' => '3'],
            ['row' => 'D', 'seat' => '2', 'idPlace' => '3'],
            ['row' => 'D', 'seat' => '3', 'idPlace' => '3'],
            ['row' => 'D', 'seat' => '4', 'idPlace' => '3'],
            ['row' => 'D', 'seat' => '5', 'idPlace' => '3'],
            ['row' => 'E', 'seat' => '1', 'idPlace' => '3'],
            ['row' => 'E', 'seat' => '2', 'idPlace' => '3'],
            ['row' => 'E', 'seat' => '3', 'idPlace' => '3'],
            ['row' => 'E', 'seat' => '4', 'idPlace' => '3'],
            ['row' => 'E', 'seat' => '5', 'idPlace' => '3'],
            ['row' => 'F', 'seat' => '1', 'idPlace' => '3'],
            ['row' => 'F', 'seat' => '2', 'idPlace' => '3'],
            ['row' => 'F', 'seat' => '3', 'idPlace' => '3'],
            ['row' => 'F', 'seat' => '4', 'idPlace' => '3'],
            ['row' => 'F', 'seat' => '5', 'idPlace' => '3'],
            ['row' => 'G', 'seat' => '1', 'idPlace' => '3'],
            ['row' => 'G', 'seat' => '2', 'idPlace' => '3'],
            ['row' => 'G', 'seat' => '3', 'idPlace' => '3'],
            ['row' => 'G', 'seat' => '4', 'idPlace' => '3'],
            ['row' => 'G', 'seat' => '5', 'idPlace' => '3'],
            ['row' => 'H', 'seat' => '1', 'idPlace' => '3'],
            ['row' => 'H', 'seat' => '2', 'idPlace' => '3'],
            ['row' => 'H', 'seat' => '3', 'idPlace' => '3'],
            ['row' => 'H', 'seat' => '4', 'idPlace' => '3'],
            ['row' => 'H', 'seat' => '5', 'idPlace' => '3'],

            ['row' => 'A', 'seat' => '1', 'idPlace' => '7'],
            ['row' => 'A', 'seat' => '2', 'idPlace' => '7'],
            ['row' => 'A', 'seat' => '3', 'idPlace' => '7'],
            ['row' => 'A', 'seat' => '4', 'idPlace' => '7'],
            ['row' => 'A', 'seat' => '5', 'idPlace' => '7'],
            ['row' => 'B', 'seat' => '1', 'idPlace' => '7'],
            ['row' => 'B', 'seat' => '2', 'idPlace' => '7'],
            ['row' => 'B', 'seat' => '3', 'idPlace' => '7'],
            ['row' => 'B', 'seat' => '4', 'idPlace' => '7'],
            ['row' => 'B', 'seat' => '5', 'idPlace' => '7'],
            ['row' => 'C', 'seat' => '1', 'idPlace' => '7'],
            ['row' => 'C', 'seat' => '2', 'idPlace' => '7'],
            ['row' => 'C', 'seat' => '3', 'idPlace' => '7'],
            ['row' => 'C', 'seat' => '4', 'idPlace' => '7'],
            ['row' => 'C', 'seat' => '5', 'idPlace' => '7'],
            ['row' => 'D', 'seat' => '1', 'idPlace' => '7'],
            ['row' => 'D', 'seat' => '2', 'idPlace' => '7'],
            ['row' => 'D', 'seat' => '3', 'idPlace' => '7'],
            ['row' => 'D', 'seat' => '4', 'idPlace' => '7'],
            ['row' => 'D', 'seat' => '5', 'idPlace' => '7'],
            ['row' => 'E', 'seat' => '1', 'idPlace' => '7'],
            ['row' => 'E', 'seat' => '2', 'idPlace' => '7'],
            ['row' => 'E', 'seat' => '3', 'idPlace' => '7'],
            ['row' => 'E', 'seat' => '4', 'idPlace' => '7'],
            ['row' => 'E', 'seat' => '5', 'idPlace' => '7'],
            ['row' => 'F', 'seat' => '1', 'idPlace' => '7'],
            ['row' => 'F', 'seat' => '2', 'idPlace' => '7'],
            ['row' => 'F', 'seat' => '3', 'idPlace' => '7'],
            ['row' => 'F', 'seat' => '4', 'idPlace' => '7'],
            ['row' => 'F', 'seat' => '5', 'idPlace' => '7'],
            ['row' => 'G', 'seat' => '1', 'idPlace' => '7'],
            ['row' => 'G', 'seat' => '2', 'idPlace' => '7'],
            ['row' => 'G', 'seat' => '3', 'idPlace' => '7'],
            ['row' => 'G', 'seat' => '4', 'idPlace' => '7'],
            ['row' => 'G', 'seat' => '5', 'idPlace' => '7'],
            ['row' => 'H', 'seat' => '1', 'idPlace' => '7'],
            ['row' => 'H', 'seat' => '2', 'idPlace' => '7'],
            ['row' => 'H', 'seat' => '3', 'idPlace' => '7'],
            ['row' => 'H', 'seat' => '4', 'idPlace' => '7'],
            ['row' => 'H', 'seat' => '5', 'idPlace' => '7'],
        ];
        DB::table('seats')->insert($data);
    }
}
