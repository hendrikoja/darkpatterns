<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = new User;
        $user->username = $request->username;
        $user->start = date("Y-m-d H:i:s", strtotime($request->start));
        $user->stop = date("Y-m-d H:i:s", strtotime($request->stop));
        $user->points = $request->points;
        $user->correct_answers = $request->correct_answers;

        $saved = $user->save();

        return view("useradd");
    }

    public function getLeaderboard(Request $request)
    {
        $users = User::orderBy("points", "desc")
        -> take(10)
        -> get();

        return response() -> json($users);
    }
}
