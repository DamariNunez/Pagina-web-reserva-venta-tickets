<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Lang;
use DB;

class CartController extends Controller
{
    const PAGINATE_SIZE = 6;

    public function index (Request $request){ 
        return view('cart');
    }
}
