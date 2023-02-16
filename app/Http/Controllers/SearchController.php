<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Lang;
use DB;

class SearchController extends Controller
{
    const PAGINATE_SIZE = 6;

    public function index (Request $request){

        $events = null;
        $name_event = null;
        $name_category = null;
        $name_city = null;
        $name_date = null;
        $name_place = null;
        $priceArray = [];
        $name_language = null;
        $dateFrom = null;
        $dateTo = null;
        if ($request->has('name_event') || $request->has('name_category') || $request->has('name_cit') || $request->has('date')){
            $name_event = $request->name_event;
            $name_category = $request->name_category;
            $name_city = $request->name_cit;
            $name_date = $request->date;
            if ($name_event){
                $events = DB::table('events')
                            ->join('categories', 'events.idCategory', '=', 'categories.id')
                            ->join('helds', 'helds.idEvent', '=', 'events.id')
                            ->join('places', 'helds.idPlace', '=', 'places.id')
                            ->join('cities', 'places.idCity', '=', 'cities.id')
                            ->where('events.name', 'like', '%'. $name_event. '%')
                            ->select('events.name as eventName', 'events.description as description', 'events.value as value', 'helds.date as date', 'places.name as placeName', 'cities.name as cityName')
                            ->paginate(self::PAGINATE_SIZE);
            }
            elseif ($name_category && $name_city == null && $name_date == null){
                $events = DB::table('events')
                                ->join('categories', 'events.idCategory', '=', 'categories.id')
                                ->join('helds', 'helds.idEvent', '=', 'events.id')
                                ->join('places', 'helds.idPlace', '=', 'places.id')
                                ->join('cities', 'places.idCity', '=', 'cities.id')
                                ->where('categories.name', $name_category)
                                ->select('events.name as eventName', 'events.description as description', 'events.value as value', 'helds.date as date', 'places.name as placeName', 'cities.name as cityName')
                                ->paginate(self::PAGINATE_SIZE);
            }
            elseif ($name_category && $name_city && $name_date == null){
                $events = DB::table('events')
                            ->join('categories', 'events.idCategory', '=', 'categories.id')
                            ->join('helds', 'helds.idEvent', '=', 'events.id')
                            ->join('places', 'helds.idPlace', '=', 'places.id')
                            ->join('cities', 'places.idCity', '=', 'cities.id')
                            ->where('categories.name', $name_category)
                            ->where('cities.name', $name_city)
                            ->select('events.name as eventName', 'events.description as description', 'events.value as value', 'helds.date as date', 'places.name as placeName', 'cities.name as cityName')
                            ->paginate(self::PAGINATE_SIZE);
            }
            elseif ($name_category && $name_city == null && $name_date){
                $name_date = $this->FormatteDate($request);
                $events = DB::table('events')
                            ->join('categories', 'events.idCategory', '=', 'categories.id')
                            ->join('helds', 'helds.idEvent', '=', 'events.id')
                            ->join('places', 'helds.idPlace', '=', 'places.id')
                            ->join('cities', 'places.idCity', '=', 'cities.id')
                            ->where('categories.name', $name_category)
                            ->where('helds.date', $name_date)
                            ->select('events.name as eventName', 'events.description as description', 'events.value as value', 'helds.date as date', 'places.name as placeName', 'cities.name as cityName')
                            ->paginate(self::PAGINATE_SIZE);
            }
            elseif ($name_category == null && $name_city && $name_date == null){
                $events = DB::table('events')
                            ->join('categories', 'events.idCategory', '=', 'categories.id')
                            ->join('helds', 'helds.idEvent', '=', 'events.id')
                            ->join('places', 'helds.idPlace', '=', 'places.id')
                            ->join('cities', 'places.idCity', '=', 'cities.id')
                            ->where('cities.name', $name_city)
                            ->select('events.name as eventName', 'events.description as description', 'events.value as value', 'helds.date as date', 'places.name as placeName', 'cities.name as cityName')
                            ->paginate(self::PAGINATE_SIZE);
            }
            elseif ($name_category == null && $name_city && $name_date){
                $name_date = $this->FormatteDate($request);
                $events = DB::table('events')
                            ->join('categories', 'events.idCategory', '=', 'categories.id')
                            ->join('helds', 'helds.idEvent', '=', 'events.id')
                            ->join('places', 'helds.idPlace', '=', 'places.id')
                            ->join('cities', 'places.idCity', '=', 'cities.id')
                            ->where('cities.name', $name_city)
                            ->where('helds.date', $name_date)
                            ->select('events.name as eventName', 'events.description as description', 'events.value as value', 'helds.date as date', 'places.name as placeName', 'cities.name as cityName')
                            ->paginate(self::PAGINATE_SIZE);
            }
            elseif ($name_category == null && $name_city == null && $name_date){
                $name_date = $this->FormatteDate($request);
                $events = DB::table('events')
                            ->join('categories', 'events.idCategory', '=', 'categories.id')
                            ->join('helds', 'helds.idEvent', '=', 'events.id')
                            ->join('places', 'helds.idPlace', '=', 'places.id')
                            ->join('cities', 'places.idCity', '=', 'cities.id')
                            ->where('helds.date', $name_date)
                            ->select('events.name as eventName', 'events.description as description', 'events.value as value', 'helds.date as date', 'places.name as placeName', 'cities.name as cityName')
                            ->paginate(self::PAGINATE_SIZE);
            }
        }
        if ($events == null && $name_event == null && $name_category == null && $name_city == null && $name_date == null) {
            $events = DB::table('events')
                        ->join('categories', 'events.idCategory', '=', 'categories.id')
                        ->join('helds', 'helds.idEvent', '=', 'events.id')
                        ->join('places', 'helds.idPlace', '=', 'places.id')
                        ->join('cities', 'places.idCity', '=', 'cities.id')
                        ->select('events.name as eventName', 'events.description as description', 'events.value as value', 'helds.date as date', 'helds.time as time', 'places.name as placeName', 'cities.name as cityName')
                        ->paginate(self::PAGINATE_SIZE);
        }
        return view('search', ['events' => $events, 'name_category' => $name_category, 'name_city' => $name_city, 'name_date' => $name_date,
                               'name_event' => $name_event, 'name_place' => $name_place, 'price' => $priceArray, 'name_language' => $name_language, 
                               'dateFrom' => $dateFrom, 'dateTo' => $dateTo]);
    }

    public function filter (Request $request){

        $cadena = '';
        $events = null;
        $name_event = null;
        $name_category = null;
        $name_city = null;
        $name_place = null;
        $priceArray = null;
        $name_language = null;
        $dateFrom = null;
        $dateTo = null;
        if ($request->has('name_event') || $request->has('name_category') || $request->has('name_cit') || $request->has('date')){
            $cadena = '';
            $events = null;
            $name_event = $request->name_event;
            $name_category = $request->name_category;
            $name_city = $request->name_city;
            $name_place = $request->name_place;
            $name_language = $request->name_language;
            if ($request->price){
                $priceArray = $this->FormattePrice($request->price);
            }
            if ($request->ovaem_date_from){
                $dateFrom = $this->FormatteDate($request->ovaem_date_from);
            }
            if ($request->ovaem_date_to){
                $dateTo = $this->FormatteDate($request->ovaem_date_to);
            }
            if ($name_event){
                $cadena = $cadena." and events.name like "."'%".$name_event."%'";
            }
            if ($name_category) {
                $cadena = $cadena. ' and categories.name = '."'".$name_category."'";
            }
            if ($name_city) {
                $cadena = $cadena. ' and cities.name = '."'".$name_city."'";
            }
            if ($name_place) {
                $cadena = $cadena. ' and places.name = '."'".$name_place."'";
            }
            if ($priceArray) {
                $cadena = $cadena. ' and events.value > '.$priceArray[0]. ' and events.value < '.$priceArray[1];
            }
            if ($name_language) {
                $cadena = $cadena. ' and languages.name = '."'".$name_language."'";
            }
            if ($dateFrom) {
                $cadena = $cadena. ' and helds.date > '."'".$dateFrom."'";
            }
            if ($dateTo) {
                $cadena = $cadena. ' and helds.date < '."'".$dateTo."'";
            }
            $cadena = substr($cadena, 4);
            $events = DB::table('events')
                ->join('categories', 'events.idCategory', '=', 'categories.id')
                ->join('helds', 'helds.idEvent', '=', 'events.id')
                ->join('places', 'helds.idPlace', '=', 'places.id')
                ->join('cities', 'places.idCity', '=', 'cities.id')
                ->join('availables', 'availables.idEvent', '=', 'events.id')
                ->join('languages', 'availables.idLanguage', '=', 'languages.id')
                ->whereRaw($cadena)
                ->select('events.name as eventName', 'events.description as description', 'events.value as value', 'helds.date as date', 
                        'places.name as placeName', 'cities.name as cityName', 'languages.name as LanguageName')
                ->groupBy('events.name', 'helds.date')
                ->get();
        }
        return view('search', ['events' => $events, 'name_event' => $name_event, 'name_category' => $name_category, 'name_city' => $name_city, 
                               'name_place' => $name_place, 'price' => $priceArray, 'name_language' => $name_language, 'dateFrom' => $dateFrom,
                               'dateTo' => $dateTo]);
    }

    public function Featured (){

        $events = null;
        $name_event = null;
        $name_category = null;
        $name_city = null;
        $name_place = null;
        $priceArray = null;
        $name_language = null;
        $dateFrom = null;
        $dateTo = null;
        $date = date('Y-m-d');
        $events = DB::table('events')
                ->join('categories', 'events.idCategory', '=', 'categories.id')
                ->join('helds', 'helds.idEvent', '=', 'events.id')
                ->join('places', 'helds.idPlace', '=', 'places.id')
                ->join('cities', 'places.idCity', '=', 'cities.id')
                ->join('availables', 'availables.idEvent', '=', 'events.id')
                ->join('languages', 'availables.idLanguage', '=', 'languages.id')
                ->where('helds.date', '>', $date)
                ->select('events.name as eventName', 'events.description as description', 'events.value as value', 'helds.date as date', 
                        'places.name as placeName', 'cities.name as cityName', 'languages.name as LanguageName')
                ->groupBy('events.name')
                ->get();
        return view('search', ['events' => $events, 'name_event' => $name_event, 'name_category' => $name_category, 'name_city' => $name_city, 
        'name_place' => $name_place, 'price' => $priceArray, 'name_language' => $name_language, 'dateFrom' => $dateFrom,
        'dateTo' => $dateTo]);
    }

    public function All (){

        $events = null;
        $name_event = null;
        $name_category = null;
        $name_city = null;
        $name_place = null;
        $priceArray = null;
        $name_language = null;
        $dateFrom = null;
        $dateTo = null;
        $events = DB::table('events')
                ->join('categories', 'events.idCategory', '=', 'categories.id')
                ->join('helds', 'helds.idEvent', '=', 'events.id')
                ->join('places', 'helds.idPlace', '=', 'places.id')
                ->join('cities', 'places.idCity', '=', 'cities.id')
                ->join('availables', 'availables.idEvent', '=', 'events.id')
                ->join('languages', 'availables.idLanguage', '=', 'languages.id')
                ->select('events.name as eventName', 'events.description as description', 'events.value as value', 'helds.date as date', 
                        'places.name as placeName', 'cities.name as cityName', 'languages.name as LanguageName')
                ->groupBy('events.name')
                ->get();
        return view('search', ['events' => $events, 'name_event' => $name_event, 'name_category' => $name_category, 'name_city' => $name_city, 
        'name_place' => $name_place, 'price' => $priceArray, 'name_language' => $name_language, 'dateFrom' => $dateFrom,
        'dateTo' => $dateTo]);
    }

    public function Past (){

        $events = null;
        $name_event = null;
        $name_category = null;
        $name_city = null;
        $name_place = null;
        $priceArray = null;
        $name_language = null;
        $dateFrom = null;
        $dateTo = null;
        $events = DB::table('events')
                ->join('categories', 'events.idCategory', '=', 'categories.id')
                ->join('helds', 'helds.idEvent', '=', 'events.id')
                ->join('places', 'helds.idPlace', '=', 'places.id')
                ->join('cities', 'places.idCity', '=', 'cities.id')
                ->join('availables', 'availables.idEvent', '=', 'events.id')
                ->join('languages', 'availables.idLanguage', '=', 'languages.id')
                ->where('helds.date', '<', $date = date('Y-m-d'))
                ->select('events.name as eventName', 'events.description as description', 'events.value as value', 'helds.date as date', 
                        'places.name as placeName', 'cities.name as cityName', 'languages.name as LanguageName')
                ->groupBy('events.name')
                ->get();
        return view('search', ['events' => $events, 'name_event' => $name_event, 'name_category' => $name_category, 'name_city' => $name_city, 
        'name_place' => $name_place, 'price' => $priceArray, 'name_language' => $name_language, 'dateFrom' => $dateFrom,
        'dateTo' => $dateTo]);
    }

    public function Zoom (){

        $events = null;
        $name_event = null;
        $name_category = null;
        $name_city = null;
        $name_place = null;
        $priceArray = null;
        $name_language = null;
        $dateFrom = null;
        $dateTo = null;
        $events = DB::table('events')
                ->join('categories', 'events.idCategory', '=', 'categories.id')
                ->join('helds', 'helds.idEvent', '=', 'events.id')
                ->join('places', 'helds.idPlace', '=', 'places.id')
                ->join('cities', 'places.idCity', '=', 'cities.id')
                ->join('availables', 'availables.idEvent', '=', 'events.id')
                ->join('languages', 'availables.idLanguage', '=', 'languages.id')
                ->where('helds.idPlace', '=', 11)
                ->select('events.name as eventName', 'events.description as description', 'events.value as value', 'helds.date as date', 
                        'places.name as placeName', 'cities.name as cityName', 'languages.name as LanguageName')
                ->groupBy('events.name')
                ->get();
        return view('search', ['events' => $events, 'name_event' => $name_event, 'name_category' => $name_category, 'name_city' => $name_city, 
        'name_place' => $name_place, 'price' => $priceArray, 'name_language' => $name_language, 'dateFrom' => $dateFrom,
        'dateTo' => $dateTo]);
    }

    public function Free (){

        $events = null;
        $name_event = null;
        $name_category = null;
        $name_city = null;
        $name_place = null;
        $priceArray = null;
        $name_language = null;
        $dateFrom = null;
        $dateTo = null;
        $events = DB::table('events')
                ->join('categories', 'events.idCategory', '=', 'categories.id')
                ->join('helds', 'helds.idEvent', '=', 'events.id')
                ->join('places', 'helds.idPlace', '=', 'places.id')
                ->join('cities', 'places.idCity', '=', 'cities.id')
                ->join('availables', 'availables.idEvent', '=', 'events.id')
                ->join('languages', 'availables.idLanguage', '=', 'languages.id')
                ->where('events.value', '=', 0)
                ->select('events.name as eventName', 'events.description as description', 'events.value as value', 'helds.date as date', 
                        'places.name as placeName', 'cities.name as cityName', 'languages.name as LanguageName')
                ->groupBy('events.name')
                ->get();
        return view('search', ['events' => $events, 'name_event' => $name_event, 'name_category' => $name_category, 'name_city' => $name_city, 
        'name_place' => $name_place, 'price' => $priceArray, 'name_language' => $name_language, 'dateFrom' => $dateFrom,
        'dateTo' => $dateTo]);
    }

    public function Category (Request $request){

        $cadena = '';
        $events = null;
        $name_event = null;
        $name_category = null;
        $name_city = null;
        $name_place = null;
        $priceArray = null;
        $name_language = null;
        $dateFrom = null;
        $dateTo = null;
        if ($request->has('menu_category') || $request->has('menu_city') || $request->has('menu_place')){
            $name_category = $request->menu_category;
            $name_city = $request->menu_city;
            $name_place = $request->menu_place;
            if ($name_category){
                $cadena = $cadena.' and categories.name = '."'".$name_category."'";
            }
            if ($name_city){
                $cadena = $cadena.' and cities.name = '."'".$name_city."'";
            }
            if ($name_place){
                $cadena = $cadena.' and places.name = '."'".$name_place."'";
            }
            $cadena = substr($cadena, 4);
            if ($name_category || $name_city || $name_place){
                $events = DB::table('events')
                    ->join('categories', 'events.idCategory', '=', 'categories.id')
                    ->join('helds', 'helds.idEvent', '=', 'events.id')
                    ->join('places', 'helds.idPlace', '=', 'places.id')
                    ->join('cities', 'places.idCity', '=', 'cities.id')
                    ->join('availables', 'availables.idEvent', '=', 'events.id')
                    ->join('languages', 'availables.idLanguage', '=', 'languages.id')
                    ->whereRaw($cadena)
                    ->select('events.name as eventName', 'events.description as description', 'events.value as value', 'helds.date as date', 
                            'places.name as placeName', 'cities.name as cityName', 'languages.name as LanguageName')
                    ->groupBy('events.name')
                    ->get();
            }
        }
        return view('search', ['events' => $events, 'name_event' => $name_event, 'name_category' => $name_category, 'name_city' => $name_city, 
        'name_place' => $name_place, 'price' => $priceArray, 'name_language' => $name_language, 'dateFrom' => $dateFrom,
        'dateTo' => $dateTo]);
    }

    public function FormatteDate (String $date) {
        if ($date){
            list($day, $month, $year) = explode(" ", $date);
            switch ($month) {
                case 'Jan': $month = 01 ; break;
                case 'Feb': $month = 02 ; break;
                case 'Mar': $month = 03 ; break;
                case 'Apr': $month = 04 ; break;
                case 'May': $month = 05 ; break;
                case 'Jun': $month = 06 ; break;
                case 'Jul': $month = 07 ; break;
                case 'Ago': $month = 8 ; break;
                case 'Sep': $month = 9 ; break;
                case 'Oct': $month = 10 ; break;
                case 'Nov': $month = 11 ; break;
                case 'Dec': $month = 12 ; break;
            }
            $name_date = $year.'-'.$month.'-'.$day;
            return $name_date;
        }
    }

    public function FormattePrice (String $price) {
        $priceArray = explode("-", $price);
        return $priceArray;
    }
}
