<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['date' => '2023-03-25', 'totalValue' => '19.60', 'idPayment' => '1'],
            ['date' => '2023-02-02', 'totalValue' => '66', 'idPayment' => '2'],
            ['date' => '2023-03-05', 'totalValue' => '34', 'idPayment' => '3']
        ];
        DB::table('bills')->insert($data);
    }
}
