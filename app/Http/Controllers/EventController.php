<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audience;

class EventController extends Controller
{
    public function create (){
        $audiences = Audience::all();
        return view('event.create', ['audiences' => $audiences]);
    }
}
