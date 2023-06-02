<?php

namespace App\Http\Controllers;

use App\Models\Advertisements;
use App\Models\CareRequests;
use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    public function deleteUsers($userId) {
        $user = User::where('id', '=', e($userId));
        $user->delete();

        return redirect()->back();
    }

    public function usersTable() {
        $user = User::all();
        return view("admin.users", ["user" => $user]);
    }

    public function advertisementsTable() {
        $advertisements = Advertisements::all();
        return view("admin.advertisements", ["advertisements" => $advertisements]);
    }

    public function deleteAdvertisements($advertisementsId) {
        $advertisements = Advertisements::where('id', '=', e($advertisementsId));
        $advertisements->delete();

        return redirect()->back();
    }

    public function careRequestsTable() {
        $careRequests = CareRequests::all();
        return view("admin.requests", ["careRequests" => $careRequests]);
    }

    public function deleteRequests($careRequestsId) {
        $careRequests = CareRequests::find($careRequestsId);
        if ($careRequests) {
            $careRequests->delete();
        }

        return redirect()->back();
    }
}
