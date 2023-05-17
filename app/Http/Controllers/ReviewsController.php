<?php

namespace App\Http\Controllers;

use App\Models\Advertisements;
use App\Models\Reviews;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{
    public function show(Reviews $reviews, User $user) {
        $care_taker_ID = $user->id;
        return view('reviews.show', [
            "reviews" => $reviews->get()->where('care_taker_id', '=', $care_taker_ID)
        ]);
    }

    public function store(Request $request, User $user) {
        $reviews = new Reviews;
        $reviews->user_id = auth()->id();
        $reviews->username = auth::user()->name;
        $reviews->care_taker_id = $user->id;
        $reviews->care_taker_name = $user->name;
        $reviews->description = $request->description;
        $reviews->save();
        return redirect()->back();
    }
}
