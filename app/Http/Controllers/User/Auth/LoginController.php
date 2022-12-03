<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public static function Routes()
    {
        Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('user.login');
    }

    public function login(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            return 'Login page';
        }

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors(['error' => 'Login failed']);
        }
        $credentials = $request->only(['username', 'password']);
        if (auth()->attempt($credentials, $request->remember_me == 'on')) {
            $user = auth()->user();
            dd($user);
        } else {
            return back()->withErrors(['error' => 'Your username and password are wrong']);
        }
    }
}
