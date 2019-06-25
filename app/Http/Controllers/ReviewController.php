<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atsauksme;
use Auth;

class ReviewController extends Controller
{
    public function destroy(int $id, int $id2)
    {
        $review = Atsauksme::find($id2)->delete();
        return redirect('/apartment/' . $id);
    }

    public function change(int $id, int $id2)
    {
        $review = Atsauksme::find($id2);
        $iretajs = Atsauksme::where('atsauksme.id', $id2)
            ->leftJoin('iretajs', 'iretajs_id', '=', 'iretajs.id')
            ->first();
        $isPrivileged = ($iretajs->email == Auth::user()->email);
        return view('update-review', ['apartmentID' => $id, 'review' => $review, 'isPrivileged' => $isPrivileged]);
    }

    public function update(int $id, int $id2)
    {
        $review = Atsauksme::find($id2);
        $review->review = request('review');
        $review->rating = request('rating');
        $review->save();
        return redirect('/apartment/' . $id);
    }
}
