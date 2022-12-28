<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AudiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['type' => 'A', 'age' => '0', 'description' => 'Destinada para los niños más pequeños/todas las edades pueden ver/sin censura', 'idEvent' => ''],
            ['type' => 'B', 'age' => '12', 'description' => 'No se recomienda para un público más infantil, pero no está restringido', 'idEvent' => ''],
            ['type' => 'C', 'age' => '18', 'description' => 'Solo para mayores de edad/prohibido', 'idEvent' => ''],
            ['type' => '', 'age' => '', 'description' => '', 'idEvent' => ''],
            ['type' => '', 'age' => '', 'description' => '', 'idEvent' => ''],
            ['type' => '', 'age' => '', 'description' => '', 'idEvent' => ''],
            ['type' => '', 'age' => '', 'description' => '', 'idEvent' => ''],
            ['type' => '', 'age' => '', 'description' => '', 'idEvent' => ''],
            ['type' => '', 'age' => '', 'description' => '', 'idEvent' => '']
        ];
        DB::table('audiences')->insert($data);
    }
}
