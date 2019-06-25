<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;
use App\User;
use Auth;

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
        $reviews = Apartment::select('review', 'users.id as userID', 'first_name')
            ->where('dzivoklis_id', $id)
            ->leftJoin('atsauksme', 'dzivoklis_id', '=', 'dzivoklis.id')
            ->leftJoin('iretajs', 'iretajs.id', '=', 'atsauksme.iretajs_id')
            ->leftJoin('users', 'iretajs.email', '=', 'users.email')
            ->get();
        return view('apartment', ['apartment' => $apartment, 'reviews' => $reviews]);
    }

    public function new()
    {
        $user = User::select('id', 'type')->where('email', Auth::user()->email)->first();
        return view('new-apartment', ['user' => $user]);
    }

    public function store()
    {
        $user = User::select('id')->where('email', Auth::user()->email)->first();

        $apartment = new Apartment;

        $apartment->street = request('street');
        $apartment->city = request('city');
        $apartment->floor = request('floor');
        $apartment->rooms = request('rooms');
        $apartment->apartment_no = request('apartment_no');
        $apartment->description = request('description');
        $apartment->iziretajs_id = $user->id;
        $apartment->save();
        $apartment = Apartment::where('street', $apartment->street)->first();
        return redirect('/apartment/' . $apartment->id);
    }
}
