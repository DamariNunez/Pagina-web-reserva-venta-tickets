<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['username' => 'admin', 'lastname' => 'admin', 'email' => 'admin@admin.com', 'password' => Hash::make('Admin1234'), 'phone' => '0988734695']
        ];
        DB::table('users')->insert($data);
    }
}
