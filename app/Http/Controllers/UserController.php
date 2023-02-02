<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    // Tampil user
    public function usershow()
    {
        return view('admin.user.index', [
            'title' => 'User',
            'user' => DB::table('users')->where('role', 'user')->get()
        ]);
    }

    // Tambah user
    public function useradd()
    {
        return view('admin.user.addindex', [
            'title' => 'Tambah User'
        ]);
    }

    // Store User
    public function userstore(Request $request)
    {
        $ValidatedData = $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|min:5|unique:users',
            'phonenumber' => 'required|unique:users',
            'password' => 'required|min:8'
        ]);

        $ValidatedData['password'] = bcrypt($ValidatedData['password']);
        $ValidatedData['role'] = 'user';
        $ValidatedData['verify'] = 1;

        User::create($ValidatedData);

        return redirect('/showuser')->with(['success' => 'Data User Berhasil Ditambahkan']);
    }

    // Edit Admin
    public function useredit($id)
    {
        return view("admin.user.editindex", [
            'title' => 'Edit User',
            'user' => User::find($id)
        ]);
    }

    // Store Update User
    public function userupdate(Request $request, $id)
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

        return redirect('/showuser')->with(['success' => 'Data User Berhasil Diperbarui']);
    }

    // Store Delete User
    public function userdelete(Request $request)
    {
        User::destroy($request->id);
        return redirect()->back()
            ->with(['success' => 'Data User Berhasil Dihapus']);
}
}
