<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Guayaquil'],
            ['name' => 'Quito'],
            ['name' => 'Cuenca'],
            ['name' => 'Santo Domingo'],
            ['name' => 'Machala'],
            ['name' => 'Durán'],
            ['name' => 'Manta'],
            ['name' => 'Portoviejo'],
            ['name' => 'Loja'],
            ['name' => 'Ambato'],
            ['name' => 'Esmeraldas'],
            ['name' => 'Quevedo'],
            ['name' => 'Riobamba'],
            ['name' => 'Milagro'],
            ['name' => 'Ibarra'],
            ['name' => 'Babahoyo'],
            ['name' => 'Sangolquí'],
            ['name' => 'Latacunga'],
            ['name' => 'Tulcán'],
            ['name' => 'Chone'],
            ['name' => 'Nueva Loja'],
            ['name' => 'El Carmen'],
            ['name' => 'Montecristi'],
            ['name' => 'Samborondón'],
            ['name' => 'Santa Elena'],
            ['name' => 'Otavalo'],
            ['name' => 'Cayambe'],
            ['name' => 'Salinas'],
            ['name' => 'Puyo'],
            ['name' => 'La Maná'],
            ['name' => 'Tena'],
            ['name' => 'Macas'],
            ['name' => 'Jaramijó']
        ];
        DB::table('cities')->insert($data);
    }
}
