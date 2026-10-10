<?php

namespace App\Http\Controllers;

use App\Models\PaketTravel;
use Illuminate\Http\Request;

class PaketTravelController extends Controller
{
    //
    public function index()
    {
        $paket_travels = PaketTravel::paginate(4);

        return view('page.travel', compact('paket_travels',));
    }
    public function show($id)
    {
        $paket_travels = PaketTravel::findOrFail($id);

        return view('page.paket-detail', compact('paket_travels'));
    }
}
