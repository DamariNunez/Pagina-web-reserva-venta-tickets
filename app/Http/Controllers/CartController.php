<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use DB;

class CartController extends Controller
{
    const PAGINATE_SIZE = 6;

    /*public function index (Request $request){ 
        $name_event = null;
        $price = null;
        $events = null;
        echo 'daam'.$request;
        if ($request->has('name_event')){
            $name_event = $request->name_event;
            $price = $request->price;
        }
        return view('cart', ['name_event' => $name_event, 'price' => $price]);
    }*/

    public function addToCart(Request $request){
        $name_event = null;
        $price = null;
        $tickets = null;
        if ($request->has('name_event')){
            $name_event = $request->name_event;
            if ( $request->has('time')){
                $quantity = $request->quantity;
                $idEvent = Event::where('name', 'like', '%'. $request->s. '%')->pluck('id');
                if ( $idEvent != null){
                    $ticket = new Ticket();
                    $ticket->quantity = $quantity;
                    $ticket->idUser = Auth::id();
                    $ticket->idEvent = $idEvent[0];
                    $ticket->status = 'pending';
                    $ticket->save();
                }
            }
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