<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\Held;
use App\Models\Place;
use App\Models\City;
use App\Mail\EmailPay;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use DB;

class PayController extends Controller
{
    const PAGINATE_SIZE = 6;

    public function index(Request $request){
        $user = Auth::user();
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $cad = substr(str_shuffle($permitted_chars), 0, 16);
        Mail::to($user->email)->send(new EmailPay($cad));
        return view ('pay');
    }
}