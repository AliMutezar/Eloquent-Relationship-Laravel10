<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('user.index', compact('users'));
    }

    public function show()
    {
        $user_role = User::all();
        return view('role_user.index', compact('user_role'));
    }
}
