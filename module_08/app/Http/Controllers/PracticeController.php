<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    function show(Request $request, $name=null)
    {
        $display = $request->input("a", "nothing");
       //$all= $request->all();
       return view('PracticeView', compact('name', 'display'));
    // return "Hello ".$name;
    }
    function showId(Request $request, $id)
    {
        return "Hello World ".$id; 
    }

    function personForm()
    {
        return view('person');
    }
    function createAPerson(Request $request)
    {
        $name = $request->input("name");
        $email = $request->input("email");
        $image = $request->file('image');
        if($image)
        {
            $imageName = time()."_".$image->getClientOriginalName();
            $image->move(public_path("images"), $imageName);
        } else 
        {
            $imageName = null;
        }
        return view('info', compact('name', 'email', 'imageName'));
    }
}
