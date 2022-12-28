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
            ['idEvent' => '1', 'idPlace' => '1'],
            ['idEvent' => '2', 'idPlace' => '2'],
            ['idEvent' => '3', 'idPlace' => '3'],
            ['idEvent' => '4', 'idPlace' => '4'],
            ['idEvent' => '5', 'idPlace' => '5'],
            ['idEvent' => '6', 'idPlace' => '6'],
            ['idEvent' => '7', 'idPlace' => '7'],
            ['idEvent' => '8', 'idPlace' => '1'],
            ['idEvent' => '9', 'idPlace' => '2'],
            ['idEvent' => '10', 'idPlace' => '3'],
            ['idEvent' => '1', 'idPlace' => '4'],
            ['idEvent' => '3', 'idPlace' => '5'],
            ['idEvent' => '5', 'idPlace' => '6'],
            ['idEvent' => '7', 'idPlace' => '7']
        ];
        DB::table('helds')->insert($data);
    }
}
