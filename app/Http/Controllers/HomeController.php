<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class HomeController extends Controller
{

    public function index()
    {
        $cars = Cars::all();

        return view('index', [
            "cars" => $cars 
        ]);
    }
}
