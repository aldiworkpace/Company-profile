<?php

namespace App\Http\Controllers;

//use\App\Models\Home;

use App\Models\PaketTravel;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $paket_travels = PaketTravel::paginate(4);
        $homes = Home::first();
        return view('page.home', compact('paket_travels', 'homes'));
    }
}
