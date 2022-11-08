<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class LogoutController extends Controller
{
    public function __invoke(Request $request)
    {
        Auth::logout();
        return redirect(RouteServiceProvider::HOME)->with('success', 'Sampai jumpa kembali');
    }
}
