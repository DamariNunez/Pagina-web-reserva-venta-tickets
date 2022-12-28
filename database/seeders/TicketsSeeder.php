<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['type' => '', 'age' => '', 'description' => '', 'idEvent' => ''],
            ['type' => '', 'age' => '', 'description' => '', 'idEvent' => ''],
            ['type' => '', 'age' => '', 'description' => '', 'idEvent' => ''],
            ['type' => '', 'age' => '', 'description' => '', 'idEvent' => ''],
            ['type' => '', 'age' => '', 'description' => '', 'idEvent' => ''],
            ['type' => '', 'age' => '', 'description' => '', 'idEvent' => ''],
            ['type' => '', 'age' => '', 'description' => '', 'idEvent' => ''],
            ['type' => '', 'age' => '', 'description' => '', 'idEvent' => ''],
            ['type' => '', 'age' => '', 'description' => '', 'idEvent' => ''],
            ['type' => '', 'age' => '', 'description' => '', 'idEvent' => ''],
            ['type' => '', 'age' => '', 'description' => '', 'idEvent' => '']
        ];
        DB::table('tickets')->insert($data);
    }
}
