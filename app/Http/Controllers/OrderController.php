<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // show all orders

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('/contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate Form fieds

        // dd($request->all());
        // $formFieds = $request->validate([
        //     'name' => 'required',
        //     'email' => ['required', 'email'],
        //     // 'message' => 'min:5|max:500',
        //     // 'session_type' => 'array|required|max:3',
        // ]);

        return redirect('/confirm');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        return view('/components/confirmation');
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
