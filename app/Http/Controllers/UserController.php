<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->nom = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->email_verified_at = $request->get('email_verified_at');
        $user->save();
        return redirect()->route('users.show');
    }

    public function show($userMail)
    {
        $user = User::where('mail', $userMail)->first();
        return view('users.show', compact('user'));
    }
}
