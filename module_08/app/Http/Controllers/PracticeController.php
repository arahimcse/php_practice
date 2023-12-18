<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    function show(Request $request, $name=null)
    {
       $all= $request->all();
       print_r($all);
        die();
       //return view('PracticeView', compact('name'));
    // return "Hello ".$name;
    }
    function showId(Request $request, $id)
    {
        return "Hello World ".$id; 
    }
}
