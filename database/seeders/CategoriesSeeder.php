<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Música'],
            ['name' => 'Arte y teatro'],
            ['name' => 'Festivales'],
            ['name' => 'Deportes'],
            ['name' => 'Cine']
        ];
        DB::table('categories')->insert($data);
    }
}
