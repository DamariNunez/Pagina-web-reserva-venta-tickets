<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Finlandés', 'ISO_code' => 'fi'],
            ['name' => 'Alemán', 'ISO_code' => 'de'],
            ['name' => 'Inglés', 'ISO_code' => 'en'],
            ['name' => 'Español', 'ISO_code' => 'es']
        ];
        DB::table('languages')->insert($data);
    }
}
