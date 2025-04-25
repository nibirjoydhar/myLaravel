<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    function home()
    {
        return view('home');
    }
    function index()
    {
        $numbers = [1, 2, 3, 4, 5];
        $id = 10;
        $name = "Nibir";
        $data = array(
            'numbers' => $numbers,
            'id' => $id,
            'name' => $name
        );
        return view('index', $data);
    }
    function form_submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'number' => 'required | numeric | digits:11',
            'message' => 'required'
        ]);
        echo "ok";
        echo "<br>";
        echo $request->name;
        echo "<br>";
        echo $request->number;
        echo "<br>";
        echo $request->message;
        echo "<br>";
        // echo $request->input('message');

        // return $request;
    }
}
