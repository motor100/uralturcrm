<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::limit(10)->get();

        return view('dashboard.clients', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.clients-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:6|max:250|unique:App\Models\Client,name',
        ]);

        $name = $request->input('name');
        $phone = $request->input('phone');
        $note = $request->input('note');

        $slug = Str::slug($name);

        $now = date('Y-m-d H:i:s');

        // Проверка на уникальный slug
        $have_slug = Client::where('slug', $slug)
                            ->get();
        if (count($have_slug) > 0) {
            $newslug = $slug . '-%';
            $slugs = Client::where('slug', 'like', $newslug)
                            ->get();
            $count_slugs = count($slugs) + 1;
            $slug = $slug . '-' . $count_slugs;
        }

        $client = new Client([
            'name' => $name,
            'slug' => $slug,
            'phone' => $phone,
            'note' => $note,
            'created_at' => $now,
            'updated_at' => $now
        ]);

        $client->save();

        return redirect('/dashboard/clients');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        $client = Client::find($id);
        
        return view('dashboard.clients-show', compact('client'));
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
