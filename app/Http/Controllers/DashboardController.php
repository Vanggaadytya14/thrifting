<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    //Halaman Dashboard
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
   ]);
}
}
