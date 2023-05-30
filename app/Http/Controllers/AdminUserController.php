<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    public function deleteUsers($userId) {
        $user = User::where('id', '=', e($userId));
        $user->delete();

        return redirect()->back();
    }
}
