<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    function displayWeatherData()
    {
        $location = [
            "name"=> "Dhaka",
            "country"=>"Bangladesh",
            "population"=>"200000",
            "timezone"=>"GMT+6.00"
        ];

        $seasons=["automan", "spring", "winter","Summar"];

        // return view('WeatherView',["name"=> "Dhaka",
        // "country"=>"Bangladesh",
        // "population"=>"200000",
        // "timezone"=>"GMT+6.00"]);

        // return view("WeatherView", $location);

        // return view("WeatherView", ["location"=>$location, "seasons"=>$seasons]);
        return view("WeatherView", compact('location', 'seasons'));

    }

    function weatherDetails($location)
    {
        $weatherDetails = Http::get("https://wttr.in/{$location}?format=j1")->json();
        $current_Temperature = $weatherDetails['current_condition'][0]['temp_C'];
        $currentCity = $weatherDetails['current_condition'][0]['temp_C'];
        return view('WV', compact('current_Temperature'));
    }

}
