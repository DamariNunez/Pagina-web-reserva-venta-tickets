<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Lang;
use DB;

class SearchController extends Controller
{
    const PAGINATE_SIZE = 6;

    public function index (Request $request){

        $events = null;
        $name_category = null;
        $name_city = null;
        $name_date = null;
        if ($request->has('name_category')){
            $name_category = $request->name_category;;
            $name_city = $request->name_city;
            $name_date = $request->date;
            $events = DB::table('events')
                            ->join('categories', 'events.idCategory', '=', 'categories.id')
                            ->join('helds', 'helds.idEvent', '=', 'events.id')
                            ->join('places', 'helds.idPlace', '=', 'places.id')
                            ->join('cities', 'places.idCity', '=', 'cities.id')
                            ->select('events.name as eventName', 'events.description as description', 'events.value as value', 'helds.date as date', 'places.name as placeName', 'cities.name as cityName')
                            ->paginate(self::PAGINATE_SIZE);
        }
        return view('search', ['events' => $events, 'name_category' => $name_category, 'name_city' => $name_city, 'name_date' => $name_date]);
    }
}
