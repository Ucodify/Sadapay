<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index()
    {
        return view('signup');
    }
    /**
     * Handle signup.
     */
    public function signup(Request $request)
    {
        $credentials = $request->validate([
            'full_name' => ['required'],
            'email' => ['required', 'email', "unique:users,email"],
            'password' => ['required'],
        ]);

        $data['name'] = $request->get("full_name");
        $data['email'] = $request->get("email");
        $data['password'] = Hash::make($request->get("password"));

        if (User::create($data)) {
            return redirect()->intended('login');
        }

        return back()->withInput();
    }
}
