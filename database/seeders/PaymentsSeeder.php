<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['totalCost' => '19.60', 'idTicket' => '1'],
            ['totalCost' => '66', 'idTicket' => '5'],
            ['totalCost' => '34', 'idTicket' => '7']
        ];
        DB::table('payments')->insert($data);
    }
}
