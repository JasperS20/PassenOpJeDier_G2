<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index() {
        dd(Auth::user());
    }

    public function edit () {
        $userID = auth::user()->id;
        $user = User::find($userID);
        return view('account.edit', ["user" => $user]);
    }

    public function view() {
        $userID = auth::user() -> id;
        $user = User::find($userID);
        return view('account.view', ["user" => $user]);
    }

    public function update (Request $request, User $user) {
        // dd($request);
        if ($user->id !== auth()->id()) {
            abort(403, 'unauthorized');
        }
        
        // validatie
        $formFields = $request->validate([
            $user->name = $request->name,
            $user->surname = $request->surname,
            $user->lastname = $request->lastname,
            $user->address = $request->address,
            $user->streetname = $request->streetname,
            $user->housenumber = $request->housenumber,
            $user->phonenumber = $request->phonenumber,
            $user->img = $request->file('img')->store('user', 'public'),
            $user->age = $request->age,
        ]);

        // update
        $user->update($formFields);

        return redirect('/account');
    }  

    public function show(User $user) {
        return view('account.show', [
            "user" => $user
        ]);
    }

    public function logout(Request $request) {
        auth()->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}