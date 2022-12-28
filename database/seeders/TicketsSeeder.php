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
            ['quantity' => '1', 'idUser' => '2', 'idEvent' => '1', 'status' => 'approved'],
            ['quantity' => '5', 'idUser' => '3', 'idEvent' => '2', 'status' => 'pending'],
            ['quantity' => '2', 'idUser' => '2', 'idEvent' => '3', 'status' => 'pending'],
            ['quantity' => '1', 'idUser' => '3', 'idEvent' => '4', 'status' => 'denied'],
            ['quantity' => '3', 'idUser' => '2', 'idEvent' => '5', 'status' => 'approved'],
            ['quantity' => '4', 'idUser' => '3', 'idEvent' => '6', 'status' => 'pending'],
            ['quantity' => '2', 'idUser' => '2', 'idEvent' => '7', 'status' => 'approved']
        ];
        DB::table('tickets')->insert($data);
    }
}
