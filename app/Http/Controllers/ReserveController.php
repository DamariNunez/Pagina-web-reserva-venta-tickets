<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Lang;
use DB;

class ReserveController extends Controller
{
    const PAGINATE_SIZE = 6;
    
    public function index (Request $request){
        $name_event = null;
        $events = null;
        if ($request->has('name_event')){
            $name_event = $request->name_event;
            if ($name_event){
                $events = DB::table('events')
                            ->join('categories', 'events.idCategory', '=', 'categories.id')
                            ->join('helds', 'helds.idEvent', '=', 'events.id')
                            ->join('places', 'helds.idPlace', '=', 'places.id')
                            ->join('cities', 'places.idCity', '=', 'cities.id')
                            ->where('events.name', 'like', '%'. $name_event. '%')
                            ->select('categories.name as category', 'events.name as eventName', 'events.description as description', 
                            'events.value as value', 'helds.date as date', 'places.name as placeName', 'cities.name as cityName',
                            'helds.time as time', 'events.duration as duration', 'events.value as value')
                            ->paginate(self::PAGINATE_SIZE);
            }
        }
        return view ('reserve', ['events' => $events, 'name_event' => $name_event]);
    }

    public function filter (Request $request){
        $name_event = null;
        $events = null;
        if ($request->has('s')){
            $events = DB::table('events')
                        ->join('categories', 'events.idCategory', '=', 'categories.id')
                        ->join('helds', 'helds.idEvent', '=', 'events.id')
                        ->join('places', 'helds.idPlace', '=', 'places.id')
                        ->join('cities', 'places.idCity', '=', 'cities.id')
                        ->where('events.name', 'like', '%'. $request->s. '%')
                        ->select('categories.name as category', 'events.name as eventName', 'events.description as description', 
                        'events.value as value', 'helds.date as date', 'places.name as placeName', 'cities.name as cityName',
                        'helds.time as time', 'events.duration as duration', 'events.value as value')
                        ->paginate(self::PAGINATE_SIZE);
            $name_event = $events[0]->eventName;
        }
        return view ('reserve', ['events' => $events, 'name_event' => $name_event]);
    }
}