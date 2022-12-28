<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Pretty woman', 'duration' => '2 horas y 30 minutos con descanso', 'value' => '19.60', 'description' => 'Pretty Woman - El Musical, por primera vez en Ecuador, el musical que nos hará soñar con el cuento de hadas', 'idAudience' => '1'],
            ['name' => 'El Rey León', 'duration' => '2 horas y 45 minutos con descanso', 'value' => '25', 'description' => 'El Rey León, el musical que ha batido todos los récords desde su estreno en 2011, celebra su 12 temporada. Un éxito inigualable', 'idAudience' => '2'],
            ['name' => 'La Hora y Media de El Club de la Comedia', 'duration' => '90 minutos', 'value' => '22', 'description' => '¡Una risa, otra risa, y más risas y más risas y más risas!', 'idAudience' => '3'],
            ['name' => 'Nada es imposible Broadway Edition - Mago Pop', 'duration' => '34 minutos', 'value' => '34', 'description' => 'Nada Es Imposible Broadway Edition, es el espectáculo con el que Antonio Díaz, EL MAGO POP, siempre ha soñado y que quiere llevar alrededor del mundo', 'idAudience' => '1'],
            ['name' => 'Cruz de Navajas, el último Mecano', 'duration' => '2 horas', 'value' => '22', 'description' => 'Cruz de Navajas es el mayor reconocimiento al grupo español más grande de nuestro patrimonio, Mecano. Cruz de Navajas', 'idAudience' => '2'],
            ['name' => 'Mamma mia!', 'duration' => '2 horas y 20 minutos con descanso', 'value' => '19', 'description' => 'Donna, madre soltera e independiente, es la propietaria de un hotelito en una preciosa isla de Grecia. Allí ha criado sin ayuda a Sophie, que va a casarse', 'idAudience' => '1'],
            ['name' => 'Freestyle World Tour', 'duration' => '2 horas', 'value' => '17', 'description' => 'El evento más prestigioso del Freestylemundial, Freestyle World Tour. Espectacular show en el que los pilotos más salvajes del mundo harán trucos increíbles. ', 'idAudience' => '3'],
            ['name' => 'Trial Indoor', 'duration' => '2 horas', 'value' => '17', 'description' => '¡El Mundial de Trial Indoor se pone en marcha!', 'idAudience' => '2'],
            ['name' => 'Cortos con Ñ', 'duration' => '1 hora', 'value' => '4', 'description' => '¡Únete a ellos y disfruta en Cortos con Ñ de la proyección de cortometrajes junto con sus responsables!', 'idAudience' => '1'],
            ['name' => 'El gato con botas: El último deseo', 'duration' => '87 minutos', 'value' => '5', 'description' => 'El valiente forajido Gato con Botas descubrirá que su pasión por el peligro y su desprecio por la seguridad le han pasado factura', 'idAudience' => '2']
            ];
        DB::table('events')->insert($data);
    }
}
