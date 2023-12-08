<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RahimController extends Controller
{
    function show()
    {
        $location = [
            'name'=>"abdur rahim",
            'age'=>32,
            'city'=>'Dhaka'
        ];
        $seasons = [
            'summar', 'automon', 'winter', 'spring'
        ]; 

        return view('rahim', ['location'=>$location, 'seasons'=>$seasons]);
    }
    function getData(string $id)
    {
        return 'All '.$id;
    }

    function displayWeather()
    {
        $weather = [
            "City"=>"Dhaka",
            "Country" => "Bangladesh",
            "Population" => "2000000",
            "TimeZone" => "GMT+6"
        ];

        return $weather;
    }

    function displayGetRequest(Request $requesst)
    {
        return view('viewForm');
    }

    function displayPostRequest(Request $requesst)
    {
        // return "Post Request";
        return $requesst->input("person");
    }



}
