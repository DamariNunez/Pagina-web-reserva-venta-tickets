<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\Held;
use App\Models\Place;
use App\Models\City;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use DB;

class CartController extends Controller
{
    const PAGINATE_SIZE = 6;

    public function addToCart(Request $request){
        $name_event = null;
        $price = null;
        $tickets = null;
        if ($request->has('name_event') && $request->has('quantity') && $request->has('date') && $request->has('place') && $request->has('city')){
            $name_event = $request->name_event;
            $quantity = $request->quantity;
            $idEvent = Event::where('name', 'like', '%'. $request->name_event. '%')->pluck('id');
            $idHeld = Held::where('date', $request->date)
                          ->where('time', $request->time)->pluck('id');
            $idCity = City::where('name', $request->city)->pluck('id');
            if ( $idCity != null ){
                $idPlace = Place::where('name', $request->place)
                                ->where('idCity', $idCity[0])->pluck('id');
            }
            if ( $idEvent != null && $idHeld != null && $idPlace != null ){
                $ticket = new Ticket();
                $ticket->quantity = $quantity;
                $ticket->idUser = Auth::id();
                $ticket->idEvent = $idEvent[0];
                $ticket->idHeld = $idHeld[0];
                $ticket->idPlace = $idPlace[0];
                $ticket->status = 'pending';
                $ticket->save();
            }
        }
        if (Auth::check()){
            $idUser = Auth::id();
            $tickets = DB::table('events')
                    ->join('tickets', 'tickets.idEvent', 'events.id')
                    ->join('helds', 'tickets.idHeld', 'helds.id')
                    ->join('places', 'tickets.idPlace', 'places.id')
                    ->join('cities', 'places.idCity', 'cities.id')
                    ->where('tickets.idUser', $idUser)
                    ->select('events.name as eventName', 'events.value as value', 'tickets.quantity as quantity', 
                             'places.name as placeName', 'cities.name as cityName','helds.date as date', 
                             'helds.time as time', DB::raw('(tickets.quantity * events.value) as total'), 'tickets.status as status')
                    ->get();
        }
        return view ('cart', ['name_event' => $name_event, 'tickets' => $tickets]);
    }

    public function cart(){
        $name_event = null;
        if (Auth::check()){
            $idUser = Auth::id();
            $tickets = DB::table('events')
                    ->join('tickets', 'tickets.idEvent', 'events.id')
                    ->join('helds', 'tickets.idHeld', 'helds.id')
                    ->join('places', 'tickets.idPlace', 'places.id')
                    ->join('cities', 'places.idCity', 'cities.id')
                    ->where('tickets.idUser', $idUser)
                    ->select('events.name as eventName', 'events.value as value', 'tickets.quantity as quantity', 
                             'places.name as placeName', 'cities.name as cityName','helds.date as date', 
                             'helds.time as time', DB::raw('(tickets.quantity * events.value) as total'), 'tickets.status as status')
                    ->get();
        }
        return view ('cart', ['name_event' => $name_event, 'tickets' => $tickets]);
    }
}