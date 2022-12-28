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
            ['totalCost' => '', 'idTicket' => ''],
            ['totalCost' => '', 'idTicket' => ''],
            ['totalCost' => '', 'idTicket' => ''],
            ['totalCost' => '', 'idTicket' => ''],
            ['totalCost' => '', 'idTicket' => ''],
            ['totalCost' => '', 'idTicket' => ''],
            ['totalCost' => '', 'idTicket' => ''],
            ['totalCost' => '', 'idTicket' => ''],
            ['totalCost' => '', 'idTicket' => ''],
            ['totalCost' => '', 'idTicket' => ''],
            ['totalCost' => '', 'idTicket' => ''],
            ['totalCost' => '', 'idTicket' => ''],
            ['totalCost' => '', 'idTicket' => '']
        ];
        DB::table('payments')->insert($data);
    }
}
