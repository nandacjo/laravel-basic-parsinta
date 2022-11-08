<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $attributs =   $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // $credentials = [
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ];

        // $credentials = $request->only(['email', 'password']);
        // dd($credentials);
        $credentials = $attributs;

        if (Auth::attempt($credentials)) {
            return redirect('/')->with('success', 'Your are now Logged in');
        };

        // $user = User::whereEmail($request->email)->first();

        // if ($user) {
        //     if (Hash::check($request->password, $user->password)) {
        //         Auth::login($user);
        //         return redirect('/')->with('success', 'Your are now Logged in');
        //     }
        // }

        throw ValidationException::withMessages([
            'email' => 'Your provide credentilas does not match our records',
        ]);
    }
}
