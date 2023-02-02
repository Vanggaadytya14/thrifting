<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Models\Category;

class IndexController extends Controller
{
    //Menampilkan Halaman Utama 
    public function index()
    {
        $category = DB::table('categories')->get();
        return view('index', [
            'title' => 'Home', 
            'category' => $category,
        ]);
    }

    //Menampilkan Notif
    public function notif()
    {
        return view('notif', [
            'title' => 'Notification',    
        ]);
    }

    //Menampilkan Home
    public function home()
    {
        return view('home', [
            'title' => 'Home',    
        ]);
    }
}
