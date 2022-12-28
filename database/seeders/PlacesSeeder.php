<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Malecón 2000', 'capacity' => '2000', 'address' => 'Simon Bolivar Palacios', 'idCity' => '1'],
            ['name' => 'Plaza de toros', 'capacity' => '15000', 'address' => 'Parroquia Jipijapa, al centro-norte de la urbe', 'idCity' => '2'],
            ['name' => 'Teatro Carlos Cueva Tamariz', 'capacity' => '801', 'address' => 'Universidad de Cuenca - Campus Central', 'idCity' => '3'],
            ['name' => 'Mezzanine Café-Teatro', 'capacity' => '35', 'address' => 'PRVR+G69', 'idCity' => '4'],
            ['name' => 'La trinchera', 'capacity' => '50', 'address' => 'Calle U4 y Av. U1 / Cdla. Universitaria - Barbasquillo', 'idCity' => '7'],
            ['name' => 'Salón de Artes Escénicas de la CCE Manabí', 'capacity' => '40', 'address' => 'Sucre & Portoviejo', 'idCity' => '8'],
            ['name' => 'Teatro Nacional "Benjamín Carrión Mora"', 'capacity' => '50', 'address' => '2QHX+498, Salvador Bustamante Celi', 'idCity' => '9']
        ];
        DB::table('places')->insert($data);
    }
}
