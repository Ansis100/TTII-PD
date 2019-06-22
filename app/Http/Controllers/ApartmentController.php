<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;

class ApartmentController extends Controller
{
    public function returnAllApartments () {
        $apartments=Apartment::all();
	    return view('home',['apartments'=>$apartments]);
    }
}
