<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = \App\Models\Event::all();
        // Все будущие события начиная с текущей даты

        return view('dashboard.events', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.events-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:6|max:250',
            'date' => 'required',
            'quantity' => 'required|numeric',
        ]);

        $title = $request->input('title');
        $date = $request->input('date');
        $text = $request->input('text');
        $quantity = $request->input('quantity');

        $now = date('Y-m-d H:i:s');

        $event = new Event([
            'title' => $title,
            'date' => $date,
            'text' => $text,
            'quantity' => $quantity,
            'clients' => '',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        $event->save();

        return redirect('/dashboard/events');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
