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

        $saved = $user->save();

        if(!$saved) {
            $resultmsg = "Didn't save";
        } else {
            $resultmsg = "Saved";
        }

        return view("useradd", ["result" => $resultmsg]);
    }
}
