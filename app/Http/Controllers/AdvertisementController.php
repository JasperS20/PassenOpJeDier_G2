<?php

namespace App\Http\Controllers;

use App\Models\CareRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Advertisements;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class AdvertisementController extends Controller
{
    public function show() {
        // $userID = auth::user()->id; //ID van de geathenticeerde gebruiker| bv 2
        // $advertisements = Advertisements::find($userID)::all()->where('user_id', '=', $userID); //Alle ads
        // dd($userID);
        // dd($advertisements);
        // dd(count($advertisements));
        return view('advertenties.mijn-advertenties', [
            "advertisements" => auth()->user()->advertisements()->get(),
        ]);
    }

    public function edit(Advertisements $advertisements) {
        // dd($advertisements);
        return view('advertenties.edit', [
            'advertisements' => $advertisements
        ]);
    }

    public function showRequests(CareRequests $careRequests) {
        $userID = auth::user()->id;
        return view('advertenties.requests', [
            "careRequests" => $careRequests->get()->where('user_id', '==', $userID)
        ]);
    }

    public function create() {
        return view('advertenties.create');
    }

    public function store(Request $request) {
        $advertisement = new Advertisements;
        $advertisement->user_id = auth()->id();
        $advertisement->user_name = auth::user()->name;
        $advertisement->name = $request->name;
        $advertisement->animal = $request->animal;
        $advertisement->price = $request->price;
        $advertisement->date_start = $request->date_start;
        $advertisement->date_end = $request->date_end;
        $advertisement->description = $request->description;
        $advertisement->img = $request->file('img')->store('animals', 'public');
        $advertisement->save();

        $image_path = $request->file('img')->store('img', 'public');

        return redirect('/advertenties')->with('message', 'Succesvol aangemaakt!');
    }

    public function update(Request $request, Advertisements $advertisements) {
        if ($advertisements->user_id !== auth()->id()) {
            abort(403, 'unauthorized');
        }

        $formFields = $request->validate([
            $advertisements->name = $request->name,
            $advertisements->animal = $request->animal,
            $advertisements->price = $request->price,
            $advertisements->date_start = $request->date_start,
            $advertisements->date_end = $request->date_end,
            $advertisements->description = $request->description,
        ]);

        $advertisements->update($formFields);

        return redirect('/advertenties');
    }

    public function destroy(Advertisements $advertisements) {
        if($advertisements->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $advertisements->delete();
        return redirect()->back();
    }
}
