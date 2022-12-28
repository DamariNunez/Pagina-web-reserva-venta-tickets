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
            ['name' => 'Pretty woman', 'duration' => '2 horas y 30 minutos con descanso', 'value' => '$19,60', 'description' => 'Pretty Woman - El Musical, por primera vez en Ecuador, el musical que nos hará soñar con el cuento de hadas extraído de una de las comedias románticas más queridas de la historia'],
            ['name' => 'El Rey León', 'duration' => '2 horas y 45 minutos con descanso', 'value' => '$25', 'description' => 'El Rey León, el musical que ha batido todos los récords desde su estreno en 2011, celebra su 12 temporada. Un éxito inigualable, habiendo superado ya la histórica cifra de 5 millones de espectadores en sus más de 3.500 funcionesen el teatro Lope de Vega'],
            ['name' => 'La Hora y Media de El Club de la Comedia', 'duration' => '90 minutos', 'value' => '$22', 'description' => '¡Una risa, otra risa, y más risas y más risas y más risas!'],
            ['name' => 'Nada es imposible Broadway Edition - Mago Pop', 'duration' => '34 minutos', 'value' => '$34', 'description' => 'Nada Es Imposible Broadway Edition, es el espectáculo con el que Antonio Díaz, EL MAGO POP, siempre ha soñado y que quiere llevar alrededor del mundo después de una estancia limitada'],
            ['name' => 'Cruz de Navajas, el último Mecano', 'duration' => '2 horas', 'value' => '$22', 'description' => 'Cruz de Navajas es el mayor reconocimiento al grupo español más grande de nuestro patrimonio, Mecano. Cruz de Navajas supone, además, la creación de un nuevo género dentro del espectáculo musical'],
            ['name' => 'Mamma mia!', 'duration' => '2 horas y 20 minutos con descanso', 'value' => '$19', 'description' => 'Donna, madre soltera e independiente, es la propietaria de un hotelito en una preciosa isla de Grecia. Allí ha criado sin ayuda a Sophie, que va a casarse'],
            ['name' => 'Freestyle World Tour', 'duration' => '2 horas', 'value' => '$17', 'description' => 'El evento más prestigioso del Freestylemundial, Freestyle World Tour. Espectacular show en el que los pilotos más salvajes del mundo harán trucos increíbles. Auténticos especialistas en el mayor espectáculo de motor. Back flips, supermans, trucos increíbles, saltos locos, explosiones'],
            ['name' => 'Trial Indoor', 'duration' => '2 horas', 'value' => '$17', 'description' => '¡El Mundial de Trial Indoor se pone en marcha!'],
            ['name' => 'Cortos con Ñ', 'duration' => '1 hora', 'value' => '$4', 'description' => '¡Únete a ellos y disfruta en Cortos con Ñ de la proyección de cortometrajes junto con sus responsables!'],
            ['name' => 'El gato con botas: El último deseo', 'duration' => '87 minutos', 'value' => '$5', 'description' => 'El valiente forajido Gato con Botas descubrirá que su pasión por el peligro y su desprecio por la seguridad le han pasado factura. Gato ha gastado ocho de sus nueve vidas, aunque perdió la cuenta en el camino. Recuperar esas vidas llevará al Gato con Botas a su búsqueda más increíble hasta el momento']
            ];
        DB::table('events')->insert($data);
    }
}
