<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Ticket;
use App\Models\Bill;
use App\Mail\EmailPay;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use DB;

class PayController extends Controller
{
    const PAGINATE_SIZE = 6;
    public $img;

    public function index(){
        $user = Auth::user();
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $cad = substr(str_shuffle($permitted_chars), 0, 16);
        //Mail::to($user->email)->send(new EmailPay($cad));
        return view ('pay');
    }

    public function voucher(Request $request){
        $user = Auth::user();
        $events = DB::table('events')
                    ->join('tickets', 'tickets.idEvent', 'events.id')
                    ->join('helds', 'tickets.idHeld', 'helds.id')
                    ->join('places', 'tickets.idPlace', 'places.id')
                    ->join('cities', 'places.idCity', 'cities.id')
                    ->where('tickets.idUser', $user->id)
                    ->where('tickets.status', 'approved')
                    ->select('events.id as id', 'tickets.id as idTickets','events.name as eventName', 'events.value as value', 
                            'tickets.quantity as quantity', 'places.name as placeName', 'cities.name as cityName','helds.date as date', 
                            'helds.time as time', DB::raw('(tickets.quantity * events.value) as total'), 'tickets.status as status')
                    ->get();
        if ( $events ){
            //Obtener total
            $sum = 0;
            foreach ( $events as $event ){
                $sum = $sum + $event->total;
            }

            //Registrar pago
            $payment = new Payment();
            $payment->totalCost = $sum;
            if ($request->hasFile('img')){
                $img = $request->file('img');
                $nameImg = Str::slug('comprobante').' user '.$user->id.'.jpg';
                $rute = public_path('storage/comprobantes/');
                $img->move($rute, $nameImg);
                $payment->voucher = $nameImg;
            }
            $payment->status = 'pending';
            $payment->save();

            //Buscar el id del último pago realizado por el usuario loggeado
            $idPayment = Payment::latest('id')->first();
            echo 'daam'.$idPayment->id;
            if ( $idPayment->id ){
                foreach ( $events as $event ){
                    DB::table('tickets')
                        ->where('id', $event->idTickets)
                        ->update(['idPayment' => $idPayment->id]);
                }
            }
            
            //Registrar factura
            $bill = new Bill();
            $bill->date = date('Y-m-d');
            $bill->totalValue = $events[0]->total;
            $bill->idPayment = $idPayment->id;
            $bill->save();
        }
        
        return redirect('/');
    }
}