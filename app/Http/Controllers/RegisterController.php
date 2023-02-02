<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //Menampilkan Halaman Utama 
    public function indexregister()
    {
        return view('Register.register', [
            'title' => 'Register',    
        ]);
    }

    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|min:5|unique:users',
            'phonenumber' => 'required|unique:users',
            'password' => 'required|min:8'
        ]);

        $ValidatedData['password'] = bcrypt($ValidatedData['password']);

        User::create($ValidatedData);

        return redirect('/notif')->with('success');
}
}
