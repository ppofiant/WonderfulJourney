<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;

class UserController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('profile', ['users' => $user]);
    }

    public function edit(Request $request, $userid) {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|min:5'
        ]);
        
        $user = User::find($userid);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        return redirect('/profile')->with('success', 'Update Profile Successfully!');;
    }

    public function destroy($usersid) {
        User::destroy($usersid);
        return redirect('/home')->with('success'. 'User Account Deleted Successfully');
    }
}