<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view("client.index");
    }

    public function blog()
    {
        return view('client.media.description');
    }
}
