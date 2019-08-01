<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class StartController extends Controller
{

    public function index()
    {
        $lang = Session::get('locale') ?? 'fr';
        $events = DB::table('events')
        ->select('id', 'title_' . $lang . ' as title', 'description_' . $lang . ' as description',
        'image', 'start_date', 'end_date')->orderBy('created_at')
        ->take(3)->get();

        $products = DB::table('products')
        ->select('name_' . $lang . ' as name', 'description_' . $lang . ' as description',
                'image', 'city')->take(9)->get();

        return view('index', ['products' => $products, 'events' => $events]);
    }

    public function switchLang($locale)
    {
        \Session::put('locale', $locale);
        return redirect()->back();
    }

    public function getCities()
    {
        $regions_json_file = file_get_contents(storage_path('app\public') . '\json\region.json', true);
        $cities_json_file = file_get_contents(storage_path('app\public') . '\json\ville.json', true);
        $regions = json_decode($regions_json_file)->region;
        $cities = json_decode($cities_json_file)->ville;
        $cities = collect($cities)->groupBy('region')->sortKeys();
        $regions = collect($regions)->groupBy('id')->sortKeys();
        // dd($cities['6']);
        // dd($cities['6'][0]);
        // dd($regions['1'][0]->region);

        return view('cities/index', ['cities' => $cities, 'regions' => $regions]);

    }
}
