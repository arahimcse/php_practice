<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
