<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('dashboard.home');
    }



    public function users()
    {   
        $users = \App\Models\User::all();

        return view('dashboard.users', compact('users'));
    }

}
