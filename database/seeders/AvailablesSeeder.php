<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AvailablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['idEvent' => '1', 'idLanguage' => '3'],
            ['idEvent' => '2', 'idLanguage' => '3'],
            ['idEvent' => '3', 'idLanguage' => '3'],
            ['idEvent' => '4', 'idLanguage' => '3'],
            ['idEvent' => '5', 'idLanguage' => '3'],
            ['idEvent' => '6', 'idLanguage' => '3'],
            ['idEvent' => '7', 'idLanguage' => '3'],
            ['idEvent' => '8', 'idLanguage' => '3'],
            ['idEvent' => '9', 'idLanguage' => '3'],
            ['idEvent' => '10', 'idLanguage' => '3']
            ['idEvent' => '1', 'idLanguage' => '4'],
            ['idEvent' => '2', 'idLanguage' => '4'],
            ['idEvent' => '3', 'idLanguage' => '4'],
            ['idEvent' => '4', 'idLanguage' => '4'],
            ['idEvent' => '5', 'idLanguage' => '4'],
            ['idEvent' => '6', 'idLanguage' => '4'],
            ['idEvent' => '7', 'idLanguage' => '4'],
            ['idEvent' => '8', 'idLanguage' => '4'],
            ['idEvent' => '9', 'idLanguage' => '4'],
            ['idEvent' => '10', 'idLanguage' => '4']
        ];
        DB::table('availables')->insert($data);
    }
}
