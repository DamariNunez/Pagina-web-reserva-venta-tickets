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
            ['date' => '', 'totalValue' => '', 'idPayment' => ''],
            ['date' => '', 'totalValue' => '', 'idPayment' => ''],
            ['date' => '', 'totalValue' => '', 'idPayment' => ''],
            ['date' => '', 'totalValue' => '', 'idPayment' => ''],
            ['date' => '', 'totalValue' => '', 'idPayment' => ''],
            ['date' => '', 'totalValue' => '', 'idPayment' => ''],
            ['date' => '', 'totalValue' => '', 'idPayment' => '']
        ];
        DB::table('bills')->insert($data);
    }
}
