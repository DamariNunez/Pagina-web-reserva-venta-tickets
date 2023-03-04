<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\Held;
use App\Models\Place;
use App\Models\City;
use App\Models\Location;
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
            $location = $_POST['location'];
            $idEvent = Event::where('name', 'like', '%'. $name_event. '%')->pluck('id');
            $idHeld = Held::where('date', $arrayInfo[0])
                          ->where('time', $arrayInfo[1])->pluck('id');
            $idCity = City::where('name', $arrayInfo[3])->pluck('id');
            $idLocation = Location::where('name', $location)->pluck('id');
            if ( $idCity[0] != null ){
                $idPlace = Place::where('name', $arrayInfo[2])
                                ->where('idCity', $idCity[0])->pluck('id');
            }
            if ( $idEvent[0] != null && $idHeld[0] != null && $idPlace[0] != null && $idLocation[0] != null && $user){
                //Validar si la reservación existe
                $tic = Ticket::where('idUser', Auth::id())
                                ->where('idEvent', $idEvent[0])
                                ->where('idHeld', $idHeld[0])
                                ->where('idPlace', $idPlace[0])
                                ->where('idLocation', $idLocation[0])
                                ->where('status', 'pending')
                                ->get();
                if ( $tic != null && sizeof($tic) != 0 ) {
                    $cant = $tic[0]->quantity + $quantity;
                    DB::table('tickets')
                        ->where('id', $tic[0]->id)
                        ->where('status', 'pending')
                        ->update(['quantity' => $cant]);
                } else {
                    $ticket = new Ticket();
                    $ticket->quantity = $quantity;
                    $ticket->idUser = Auth::id();
                    $ticket->idEvent = $idEvent[0];
                    $ticket->idHeld = $idHeld[0];
                    $ticket->idPlace = $idPlace[0];
                    $ticket->idLocation = $idLocation[0];
                    $ticket->status = 'pending';
                    $ticket->save();
                }
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
                    ->join('locations', 'tickets.idlocation', 'locations.id')
                    ->where('tickets.idUser', $idUser)
                    ->whereNull('tickets.deleted_at')
                    ->whereNull('tickets.idPayment')
                    ->select('events.id as id', 'events.name as eventName', 'events.value as value', 'tickets.quantity as quantity', 
                             'places.name as placeName', 'cities.name as cityName','helds.date as date', 'locations.name as locationName',
                             'locations.price as price', 'helds.time as time', DB::raw('(tickets.quantity * locations.price) as total'), 
                             'tickets.status as status')
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
                    ->join('locations', 'tickets.idlocation', 'locations.id')
                    ->where('tickets.idUser', $idUser)
                    ->whereNull('tickets.deleted_at')
                    ->whereNull('tickets.idPayment')
                    ->select('events.id as id', 'events.name as eventName', 'events.value as value', 'tickets.quantity as quantity', 
                             'places.name as placeName', 'cities.name as cityName','helds.date as date', 'locations.name as locationName',
                             'locations.price as price', 'helds.time as time', DB::raw('(tickets.quantity * locations.price) as total'), 
                             'tickets.status as status')
                    ->get();
        }
        return view ('cart', ['name_event' => $name_event, 'tickets' => $tickets]);
    }

    public function updateCart(){
        $name_event = null;
        $tickets = null;        
        if (Auth::check()){
            $idUser = Auth::id();
            $arrayQuantity = explode(' ', $_POST['update']);
            echo '  array '.$arrayQuantity[2].'/';
            $tickets = DB::table('events')
                    ->join('tickets', 'tickets.idEvent', 'events.id')
                    ->join('helds', 'tickets.idHeld', 'helds.id')
                    ->join('places', 'tickets.idPlace', 'places.id')
                    ->join('cities', 'places.idCity', 'cities.id')
                    ->join('locations', 'tickets.idlocation', 'locations.id')
                    ->where('tickets.idUser', $idUser)
                    ->whereNull('tickets.deleted_at')
                    ->whereNull('tickets.idPayment')
                    ->select('events.id as id', 'events.name as eventName', 'events.value as value', 'tickets.quantity as quantity', 
                             'places.name as placeName', 'cities.name as cityName','helds.date as date', 'locations.name as locationName',
                             'locations.price as price', 'helds.time as time', DB::raw('(tickets.quantity * locations.price) as total'), 
                             'tickets.status as status')
                    ->get();
            $i = 1;
            foreach ( $tickets as $ticket ){
                $j = $i;
                $k = $j + 1;
                echo '    '.$arrayQuantity[$j].$arrayQuantity[$k].'   ';
                if ( $ticket->id == $arrayQuantity[$j] && $ticket->quantity != $arrayQuantity[$k] && $arrayQuantity[$k] != 0 && $ticket->status == 'pending'){
                    DB::table('tickets')
                        ->where('id', $ticket->id)
                        ->where('status', 'pending')
                        ->update(['quantity' => $$arrayQuantity[$k]]);
                }
                $i = $i + 2;
            }
            $tickets = DB::table('events')
                    ->join('tickets', 'tickets.idEvent', 'events.id')
                    ->join('helds', 'tickets.idHeld', 'helds.id')
                    ->join('places', 'tickets.idPlace', 'places.id')
                    ->join('cities', 'places.idCity', 'cities.id')
                    ->join('locations', 'tickets.idlocation', 'locations.id')
                    ->where('tickets.idUser', $idUser)
                    ->whereNull('tickets.deleted_at')
                    ->whereNull('tickets.idPayment')
                    ->select('events.id as id', 'events.name as eventName', 'events.value as value', 'tickets.quantity as quantity', 
                             'places.name as placeName', 'cities.name as cityName','helds.date as date', 'locations.name as locationName',
                             'locations.price as price', 'helds.time as time', DB::raw('(tickets.quantity * locations.price) as total'), 
                             'tickets.status as status')
                    ->get();
        }
        return view ('cart', ['name_event' => $name_event, 'tickets' => $tickets]);
    }

    public function remove(){
        $name_event = null;
        $tickets = null;
        if (!empty($_POST['idTicket'])){
            DB::table('tickets')
                ->where('idEvent', $_POST['idTicket'])
                ->update(['deleted_at' => date('Y-m-d h:i:s')]);

            $idUser = Auth::id();
            $tickets = DB::table('events')
                    ->join('tickets', 'tickets.idEvent', 'events.id')
                    ->join('helds', 'tickets.idHeld', 'helds.id')
                    ->join('places', 'tickets.idPlace', 'places.id')
                    ->join('cities', 'places.idCity', 'cities.id')
                    ->join('locations', 'tickets.idlocation', 'locations.id')
                    ->where('tickets.idUser', $idUser)
                    ->whereNull('tickets.deleted_at')
                    ->whereNull('tickets.idPayment')
                    ->select('events.id as id', 'events.name as eventName', 'events.value as value', 'tickets.quantity as quantity', 
                             'places.name as placeName', 'cities.name as cityName','helds.date as date', 'locations.name as locationName',
                             'locations.price as price', 'helds.time as time', DB::raw('(tickets.quantity * locations.price) as total'), 
                             'tickets.status as status')
                    ->get();							
        }
        return view ('cart', ['name_event' => $name_event, 'tickets' => $tickets]);
    }

    function daam(){
        echo 'Daam';
    }
}