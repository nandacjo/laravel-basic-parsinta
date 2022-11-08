<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::middleware('auth')->group(function () {
  Route::resource('tasks', TaskController::class);
  Route::post('logout', LogoutController::class)->name('logout');
});


Route::middleware('guest')->group(function () {
  Route::get('register', [RegistrationController::class, 'create'])->name('register');
  Route::post('register', [RegistrationController::class, 'store']); // valid jika di panggil di name
  // route di from nya

  Route::get('login', [LoginController::class, 'create'])->name('login');
  Route::post('login', [LoginController::class, 'store'])->name('login');
});

Route::get('users', [UserController::class, 'index']);
Route::get('users/{user:username}', [UserController::class, 'show'])->name('user.show');

// Route::get('tasks', [TaskController::class, 'index']);
// Route::post('tasks', [TaskController::class, 'store']);
// Route::get('tasks/{id}/edit', [TaskController::class, 'edit']);
// Route::put('tasks/{id}', [TaskController::class, 'update']);
// Route::delete('tasks/{id}', [TaskController::class, 'destroy']);

// Route::Get('profile/{identifier}', [ProfileInformationController::class, '__invoke']);
// Route::get('contact', [ContactController::class, 'create']);
// Route::post('contact', [ContactController::class, 'store']);


































// Route::view('/', 'home');
// Route::get('/contact', fn () => view('contact'));
// Route::get('/posts/first-post', fn () => view('posts.posts'));
// Route::get('/about', fn () => view('about'));
// Route::get('/profile/{username}', function ($username = 'Profile') {

  // $name = $request->get("name");
  // $name = $request->query("name");
  // $name = $request->input("name");
  // $name = $request->name;
  // $name = request('name');

//   return view('profile', [
//     "username" => $username,
//   ]);
// });
