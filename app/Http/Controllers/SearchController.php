<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Lang;

class SearchController extends Controller
{
    const PAGINATE_SIZE = 10;

    public function index (Request $request){
        
        $events = Event::all();
        return view('search', ['events' => $events]);
    }
}
