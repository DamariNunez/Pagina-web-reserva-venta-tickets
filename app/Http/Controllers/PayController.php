<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Mail\EmailPay;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use DB;

class PayController extends Controller
{
    const PAGINATE_SIZE = 6;
    public $img;

    public function index(){
        $user = Auth::user();
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $cad = substr(str_shuffle($permitted_chars), 0, 16);
        Mail::to($user->email)->send(new EmailPay($cad));
        return view ('pay');
    }

    public function voucher(Request $request){
        $img = $request->img;
        if ($request->has('total')){
            $user = Auth::user();
            $events = DB::table('events')
                        ->join('tickets', 'tickets.idEvent', 'events.id')
                        ->join('helds', 'tickets.idHeld', 'helds.id')
                        ->join('places', 'tickets.idPlace', 'places.id')
                        ->join('cities', 'places.idCity', 'cities.id')
                        ->where('tickets.idUser', $user->id)
                        ->where('tickets.status', 'approved')
                        ->select('tickets.id as idTickets', 'events.name as eventName', 'events.value as value', 'tickets.quantity as quantity', 
                                'places.name as placeName', 'cities.name as cityName','helds.date as date', 
                                'helds.time as time', DB::raw('(tickets.quantity * events.value) as total'), 'tickets.status as status')
                        ->get();
            foreach ( $events as $event ){
                echo 'daam'.'entro';
                $payment = new Payment();
                $payment->totalCost = $event->total;
                $payment->idTicket = $event->idTickets;
                $payment->voucher = addslashes(file_get_contents($_FILES[$request->img]));
                $payment->status = 'pending';
                $payment->save();
            }
        }
        return view ('pay');
    }
}