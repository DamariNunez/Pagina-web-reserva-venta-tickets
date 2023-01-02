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
            ['row' => 'A', 'chair' => '1', 'idPlace' => '3'],
            ['row' => 'A', 'chair' => '2', 'idPlace' => '3'],
            ['row' => 'A', 'chair' => '3', 'idPlace' => '3'],
            ['row' => 'A', 'chair' => '4', 'idPlace' => '3'],
            ['row' => 'A', 'chair' => '5', 'idPlace' => '3'],
            ['row' => 'B', 'chair' => '1', 'idPlace' => '3'],
            ['row' => 'B', 'chair' => '2', 'idPlace' => '3'],
            ['row' => 'B', 'chair' => '3', 'idPlace' => '3'],
            ['row' => 'B', 'chair' => '4', 'idPlace' => '3'],
            ['row' => 'B', 'chair' => '5', 'idPlace' => '3'],
            ['row' => 'C', 'chair' => '1', 'idPlace' => '3'],
            ['row' => 'C', 'chair' => '2', 'idPlace' => '3'],
            ['row' => 'C', 'chair' => '3', 'idPlace' => '3'],
            ['row' => 'C', 'chair' => '4', 'idPlace' => '3'],
            ['row' => 'C', 'chair' => '5', 'idPlace' => '3'],
            ['row' => 'D', 'chair' => '1', 'idPlace' => '3'],
            ['row' => 'D', 'chair' => '2', 'idPlace' => '3'],
            ['row' => 'D', 'chair' => '3', 'idPlace' => '3'],
            ['row' => 'D', 'chair' => '4', 'idPlace' => '3'],
            ['row' => 'D', 'chair' => '5', 'idPlace' => '3'],
            ['row' => 'E', 'chair' => '1', 'idPlace' => '3'],
            ['row' => 'E', 'chair' => '2', 'idPlace' => '3'],
            ['row' => 'E', 'chair' => '3', 'idPlace' => '3'],
            ['row' => 'E', 'chair' => '4', 'idPlace' => '3'],
            ['row' => 'E', 'chair' => '5', 'idPlace' => '3'],
            ['row' => 'F', 'chair' => '1', 'idPlace' => '3'],
            ['row' => 'F', 'chair' => '2', 'idPlace' => '3'],
            ['row' => 'F', 'chair' => '3', 'idPlace' => '3'],
            ['row' => 'F', 'chair' => '4', 'idPlace' => '3'],
            ['row' => 'F', 'chair' => '5', 'idPlace' => '3'],
            ['row' => 'G', 'chair' => '1', 'idPlace' => '3'],
            ['row' => 'G', 'chair' => '2', 'idPlace' => '3'],
            ['row' => 'G', 'chair' => '3', 'idPlace' => '3'],
            ['row' => 'G', 'chair' => '4', 'idPlace' => '3'],
            ['row' => 'G', 'chair' => '5', 'idPlace' => '3'],
            ['row' => 'H', 'chair' => '1', 'idPlace' => '3'],
            ['row' => 'H', 'chair' => '2', 'idPlace' => '3'],
            ['row' => 'H', 'chair' => '3', 'idPlace' => '3'],
            ['row' => 'H', 'chair' => '4', 'idPlace' => '3'],
            ['row' => 'H', 'chair' => '5', 'idPlace' => '3'],

            ['row' => 'A', 'chair' => '1', 'idPlace' => '7'],
            ['row' => 'A', 'chair' => '2', 'idPlace' => '7'],
            ['row' => 'A', 'chair' => '3', 'idPlace' => '7'],
            ['row' => 'A', 'chair' => '4', 'idPlace' => '7'],
            ['row' => 'A', 'chair' => '5', 'idPlace' => '7'],
            ['row' => 'B', 'chair' => '1', 'idPlace' => '7'],
            ['row' => 'B', 'chair' => '2', 'idPlace' => '7'],
            ['row' => 'B', 'chair' => '3', 'idPlace' => '7'],
            ['row' => 'B', 'chair' => '4', 'idPlace' => '7'],
            ['row' => 'B', 'chair' => '5', 'idPlace' => '7'],
            ['row' => 'C', 'chair' => '1', 'idPlace' => '7'],
            ['row' => 'C', 'chair' => '2', 'idPlace' => '7'],
            ['row' => 'C', 'chair' => '3', 'idPlace' => '7'],
            ['row' => 'C', 'chair' => '4', 'idPlace' => '7'],
            ['row' => 'C', 'chair' => '5', 'idPlace' => '7'],
            ['row' => 'D', 'chair' => '1', 'idPlace' => '7'],
            ['row' => 'D', 'chair' => '2', 'idPlace' => '7'],
            ['row' => 'D', 'chair' => '3', 'idPlace' => '7'],
            ['row' => 'D', 'chair' => '4', 'idPlace' => '7'],
            ['row' => 'D', 'chair' => '5', 'idPlace' => '7'],
            ['row' => 'E', 'chair' => '1', 'idPlace' => '7'],
            ['row' => 'E', 'chair' => '2', 'idPlace' => '7'],
            ['row' => 'E', 'chair' => '3', 'idPlace' => '7'],
            ['row' => 'E', 'chair' => '4', 'idPlace' => '7'],
            ['row' => 'E', 'chair' => '5', 'idPlace' => '7'],
            ['row' => 'F', 'chair' => '1', 'idPlace' => '7'],
            ['row' => 'F', 'chair' => '2', 'idPlace' => '7'],
            ['row' => 'F', 'chair' => '3', 'idPlace' => '7'],
            ['row' => 'F', 'chair' => '4', 'idPlace' => '7'],
            ['row' => 'F', 'chair' => '5', 'idPlace' => '7'],
            ['row' => 'G', 'chair' => '1', 'idPlace' => '7'],
            ['row' => 'G', 'chair' => '2', 'idPlace' => '7'],
            ['row' => 'G', 'chair' => '3', 'idPlace' => '7'],
            ['row' => 'G', 'chair' => '4', 'idPlace' => '7'],
            ['row' => 'G', 'chair' => '5', 'idPlace' => '7'],
            ['row' => 'H', 'chair' => '1', 'idPlace' => '7'],
            ['row' => 'H', 'chair' => '2', 'idPlace' => '7'],
            ['row' => 'H', 'chair' => '3', 'idPlace' => '7'],
            ['row' => 'H', 'chair' => '4', 'idPlace' => '7'],
            ['row' => 'H', 'chair' => '5', 'idPlace' => '7'],
        ];
        DB::table('seats')->insert($data);
    }
}
