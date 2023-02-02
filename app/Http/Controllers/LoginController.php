<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function _constuct()
    {
    }

    public function indexlogin()
    {
        return view('Login.login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->verify === 0) {
                Auth::logout();
                return redirect('/notif')->with('loginError');
            }
            if (auth()->user()->role == 'admin')
                return redirect()->intended('/dashboard');
            else
                return redirect()->intended('/index');
        }

        return back()->with('loginError', 'Login Gagal! Anda Belum Registrasi');
}

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerate();

        return redirect('/login');
    }

    public function verify(Request $request, User $user)
    {

        $user = User::find($request)->first();
        if ($user) {
            $user->verify = '1';
            $user->save();
        }

        return redirect('/usershow');
    }

    public function block(Request $request)
    {

        $user = User::find($request)->first();
        if ($user) {
            $user->verify = '0';
            $user->save();
        }

        return redirect('/usershow');
}
}