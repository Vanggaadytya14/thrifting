<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdminController extends Controller
{
    // Show Admin
    public function adminshow()
    {
        return view('admin.index', [
            'title' => 'Admin',
            'user' => DB::table('users')->where('role', 'admin')->get()
        ]);
    }

    // Add Admin
    public function adminadd()
    {
        return view('admin.addindex', [
            'title' => 'Add'
        ]);
    }

    public function adminstore(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|min:5|unique:users',
            'phonenumber' => 'required|unique:users',
            'password' => 'required|min:8'
        ]);
        

        $request['password'] = bcrypt($request['password']);
        $request['role'] = 'admin';
        $request['verify'] = 1;

        //fungsi eloquent untuk menambah data
        User::create($request->all());
        return redirect('/adminshow')->with(['success' => 'Data Admin Berhasil Ditambahkan']);
    }

    // Edit Admin
    public function adminedit($id)
    {
        return view("admin.editindex", [
            'title' => 'Edit Admin',
            'user' => User::find($id)
        ]);
    }

    public function adminupdate(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|min:5|unique:users',
            'phonenumber' => 'required|unique:users',
        ]);

        $user = User::find($id);
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;
        $user->save();

        return redirect('/adminshow')->with(['success' => 'Data Admin Berhasil Diperbarui']);
    }

    // Delete Admin
    public function admindelete(Request $request)
    {
        User::destroy($request->id);
        return redirect()->back()
            ->with(['success' => 'Data Admin Berhasil Dihapus']);
}
}
