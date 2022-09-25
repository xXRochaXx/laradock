<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user, Request $request)
    {
        dd($user, $request->header());
        return $user;
    }
}
