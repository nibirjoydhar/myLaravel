<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class SiteController extends Controller
{
    //
    function home()
    {
        return view('home');
    }
    function index()
    {
        $numbers = [1, 2, 3, 4, 5, 6];
        $id = 10;
        $name = "Nibir";
        $data = array(
            'numbers' => $numbers,
            'id' => $id,
            'name' => $name
        );

        $contacts = Contact::all();  // fetch all contacts from DB

        return view('index',array_merge($data, ['contacts' => $contacts]) );
    }
    function form_submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            // 'number' => 'required|string|regex:/^\+?\d{11,14}$/',
            'number' => ['required', 'string', 'regex:/^(\+\d{13}|\d{11})$/'],
            'message' => 'required'
        ]);
        // echo "ok";
        // echo "<br>";
        // echo $request->name;
        // echo "<br>";
        // echo $request->number;
        // echo "<br>";
        // echo $request->message;
        // echo "<br>";
        // echo $request->input('message');

        // return $request;

        Contact::create([
            'name' => $request->name,
            'number' => $request->number,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Message sent successfully!');
    }
    public function showMessages()
    {
        $contacts = Contact::all();  // fetch all contacts from DB
        return view('messages', ['contacts' => $contacts]);
    }
}
