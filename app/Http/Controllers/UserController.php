<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();

        return view('user.index', compact('users'));
    }

    public function check(User $user)
    {
        $farmer = $user->farmer;
        return view('user.check', compact('farmer'));
    }

    public function verify(User $user)
    {
        $id = $user->id;

        User::where('id', $id)->update(['is_kyc' => 'success']);

        return redirect()->route('user');
    }
}
