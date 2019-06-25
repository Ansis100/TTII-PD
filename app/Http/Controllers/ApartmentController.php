<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;
use App\User;
use App\Iretajs;
use App\Atsauksme;
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
        $isIretajs = (User::where('email', Auth::user()->email)->first()->type == 'iretajs');
        $apartment = Apartment::select('dzivoklis.id', 'dzivoklis.city', 'street', 'floor', 'rooms', 'apartment_no', 'description', 'first_name', 'users.id as userID', 'phone', 'users.email')
            ->where('dzivoklis.id', $id)
            ->leftJoin('iziretajs', 'iziretajs_id', '=', 'iziretajs.id')
            ->leftJoin('users', 'iziretajs.email', '=', 'users.email')
            ->first();
        $reviews = Apartment::select('atsauksme.id', 'review', 'rating', 'dzivoklis_id', 'users.id as userID', 'first_name')
            ->where('dzivoklis_id', $id)
            ->leftJoin('atsauksme', 'dzivoklis_id', '=', 'dzivoklis.id')
            ->leftJoin('iretajs', 'iretajs.id', '=', 'atsauksme.iretajs_id')
            ->leftJoin('users', 'iretajs.email', '=', 'users.email')
            ->get();
        return view('apartment', ['apartment' => $apartment, 'reviews' => $reviews, 'isIretajs' => $isIretajs]);
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

    public function newReview(int $id)
    {
        $user = Iretajs::select('id')->where('email', Auth::user()->email)->first();

        $review = new Atsauksme;

        $review->review = request('review');
        $review->rating = request('rating');
        $review->iretajs_id = $user->id;
        $review->dzivoklis_id = $id;
        $review->save();
        return redirect('/apartment/' . $id);
    }
}
