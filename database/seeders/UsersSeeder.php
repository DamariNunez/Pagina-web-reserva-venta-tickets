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
            ['username' => 'admin', 'lastname' => 'admin', 'email' => 'admin@admin.com', 'password' => Hash::make('Admin1234'), 'phone' => '0988734695'],
            ['username' => 'Damaris', 'lastname' => 'Nunez', 'email' => 'damarisdaniela888@gmail.com', 'password' => Hash::make('Damaris1234'), 'phone' => '0984596312'],
            ['username' => 'Daniela', 'lastname' => 'Castro', 'email' => 'danielacastro@hotmail.com', 'password' => Hash::make('Daniela1234'), 'phone' => '0987852915']
        ];
        DB::table('users')->insert($data);
    }
}
