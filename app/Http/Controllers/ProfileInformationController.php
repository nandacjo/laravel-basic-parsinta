<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileInformationController extends Controller
{
  public function __invoke(Request $request, $identifier)
  {
    // $username = $request->username;
    // $username = $request->get('username');
    // $username = $request->input('username');
    // $username = $request->query('username');
    return view('profile', ['username' => $identifier]);
  }
}