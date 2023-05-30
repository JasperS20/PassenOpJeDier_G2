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

        $all_users = User::all();

        if ($user->is_admin) {
            return view('admin.index', ["user" => $user, "all_users" => $all_users]);
        } else {
            return view('oppassen.dashboard', ["user" => $user]);
        }
    }
}
