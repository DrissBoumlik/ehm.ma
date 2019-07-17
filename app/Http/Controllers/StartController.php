<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{

    public function index()
    {
        // TODO - Store events and retrieve theme
        return view('index');
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
