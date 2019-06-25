<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;

class ApartmentController extends Controller
{
    public function returnAllApartments()
    {
        $apartments = Apartment::all();
        return view('home', ['apartments' => $apartments]);
    }

    public function apartment(int $id)
    {
        $apartment = Apartment::select('dzivoklis.city', 'street', 'floor', 'rooms', 'apartment_no', 'description', 'first_name', 'users.id as userID', 'phone', 'users.email')
            ->where('dzivoklis.id', $id)
            ->leftJoin('iziretajs', 'iziretajs_id', '=', 'iziretajs.id')
            ->leftJoin('users', 'iziretajs.email', '=', 'users.email')
            ->first();
        return view('apartment', ['apartment' => $apartment]);
    }
}
