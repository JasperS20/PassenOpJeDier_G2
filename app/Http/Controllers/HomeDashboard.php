<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeDashboard extends Controller
{
    public function viewUser() {
        $userID = auth::user() -> id;
        $user = User::find($userID);
        return view('oppassen.dashboard', ["user" => $user]);
    }
}
