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

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->get('name');
        $user->surname = $request->get('surname');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        //$user->badge = $request->get('badge');
        $user->email_verified_at = $request->get('email_verified_at');

        $user->save();
        return redirect()->route('users.show');
    }

    public function show($userid)
        //     public function show($userMail)
    {
        $user = User::where('id', $userid)->first();
        return view('users.show', compact('user'));
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user', 'id'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'    =>  'required',
            'surname'     =>  'required',
            'email' => 'required'
        ]);
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->surname = $request->get('surname');
        $user->email = $request->get('email');
        $user->save();
        return redirect()->route('users.index')->with('success', 'User Updated');
    }

    public function destroy($id)

    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Data Deleted');

    }


}
