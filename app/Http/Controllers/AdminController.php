<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('dashboard.home');
    }


    public function events_sales($id)
    {   
        $event = \App\Models\Event::find($id);

        return view('dashboard.events-sales', compact('event'));
    }


    public function current_notifications()
    {
        return view('dashboard.current-notifications');
    }

   


    public function users()
    {   
        $users = \App\Models\User::all();

        return view('dashboard.users', compact('users'));
    }

}
