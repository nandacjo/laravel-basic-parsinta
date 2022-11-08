<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegistrationRequest $request)
    {
        User::create($request->all());
        return redirect('/')->with('success', 'Thank you, you are now registered');
        // $attr = $request->all();
        // $attr[' password'] = Hash::make($request->password);

        // $user = User::where('email', $request->email)
        //     ->orWhere('username', $request->username);

        // if ($user) {
        //     dd('user sudah ada');
        // }

        // User::create([
        //     'username' => $request->username,
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        // session()->put('key', 'value'); sessionnya tidak hilang ketika ganti tab
        // session()->flush('success', 'Thank you, you are now registered');


    }
}
