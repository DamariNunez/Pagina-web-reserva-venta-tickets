<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\Held;
use App\Models\Place;
use App\Models\City;
use App\Mail\EmailReserve;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use DB;

class CartController extends Controller
{
    const PAGINATE_SIZE = 6;

    public function addToCart(){
        $name_event = null;
        $tickets = null;
        $idPlace = null;
        $user = Auth::user();
        if (!empty($_POST['info'])){
            $arrayInfo = explode('*', $_POST['info']);
            $name_event = $_POST['name_event'];
            $quantity = $_POST['quantity'];
            $idEvent = Event::where('name', 'like', '%'. $name_event. '%')->pluck('id');
            $idHeld = Held::where('date', $arrayInfo[0])
                          ->where('time', $arrayInfo[1])->pluck('id');
            $idCity = City::where('name', $arrayInfo[3])->pluck('id');
            if ( $idCity[0] != null ){
                $idPlace = Place::where('name', $arrayInfo[2])
                                ->where('idCity', $idCity[0])->pluck('id');
            }
            if ( $idEvent[0] != null && $idHeld[0] != null && $idPlace[0] != null && $user){
                $ticket = new Ticket();
                $ticket->quantity = $quantity;
                $ticket->idUser = Auth::id();
                $ticket->idEvent = $idEvent[0];
                $ticket->idHeld = $idHeld[0];
                $ticket->idPlace = $idPlace[0];
                $ticket->status = 'pending';
                $ticket->save();
                //Mail::to($user->email)->send(new EmailReserve());
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
                    ->whereNull('tickets.idPayment')
                    ->select('events.name as eventName', 'events.value as value', 'tickets.quantity as quantity', 
                             'places.name as placeName', 'cities.name as cityName','helds.date as date', 
                             'helds.time as time', DB::raw('(tickets.quantity * events.value) as total'), 'tickets.status as status')
                    ->get();
        }
        return view ('cart', ['name_event' => $name_event, 'tickets' => $tickets]);
    }

    public function cart(){
        $name_event = null;
        $tickets = null;
        if (Auth::check()){
            $idUser = Auth::id();
            $tickets = DB::table('events')
                    ->join('tickets', 'tickets.idEvent', 'events.id')
                    ->join('helds', 'tickets.idHeld', 'helds.id')
                    ->join('places', 'tickets.idPlace', 'places.id')
                    ->join('cities', 'places.idCity', 'cities.id')
                    ->where('tickets.idUser', $idUser)
                    ->whereNull('tickets.idPayment')
                    ->select('events.name as eventName', 'events.value as value', 'tickets.quantity as quantity', 
                             'places.name as placeName', 'cities.name as cityName','helds.date as date', 
                             'helds.time as time', DB::raw('(tickets.quantity * events.value) as total'), 'tickets.status as status')
                    ->get();
        }
        return view ('cart', ['name_event' => $name_event, 'tickets' => $tickets]);
    }
}