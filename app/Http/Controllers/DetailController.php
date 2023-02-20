<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Lang;
use DB;

class DetailController extends Controller
{
    const PAGINATE_SIZE = 6;

    public function index (Request $request){
        $events = null;
        $name_event = null;
        if ($request->has('button-event')){
            $name_event = $_GET['button-event'];

            //Eiminar la palabra 'Comprar'
            $name_event = preg_replace('/Comprar /',"", $name_event);

            if ($name_event){
                $events = DB::table('events')
                            ->join('categories', 'events.idCategory', '=', 'categories.id')
                            ->join('helds', 'helds.idEvent', '=', 'events.id')
                            ->join('places', 'helds.idPlace', '=', 'places.id')
                            ->join('cities', 'places.idCity', '=', 'cities.id')
                            ->join('images', 'images.idEvent', '=', 'events.id')
                            ->where('events.name', 'like', '%'. $name_event. '%')
                            ->select('events.id as id', 'categories.name as category', 'events.name as eventName', 'events.description as description', 
                            'events.value as value', 'helds.date as date', 'places.name as placeName', 'cities.name as cityName',
                            'helds.time as time', 'events.duration as duration', 'images.img as img')
                            ->groupBy('events.name', 'helds.date')
                            ->paginate(self::PAGINATE_SIZE);
            }
        }
        return view('detail', ['events' => $events, 'name_event' => $name_event]);
    }
}