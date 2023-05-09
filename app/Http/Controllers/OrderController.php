<?php

namespace App\Http\Controllers;

use App\Models\Order;
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
        $formFieds = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'message' => 'max:500',
            'session_type' => 'array|required|max:3',
            'datepicker' => ['required', 'date']
        ]);

        $sessionType = $request->session_type;
        $session_type_string = "";

        foreach ($sessionType as $type) {
            $session_type_string . ", " . $type;
        }

        $order = new Order();
        $order->name = $request->name;
        $order->session_type = $session_type_string;
        $order->email = $request->email;
        $order->message = $request->message;


        $order->save();

        //TODO: send a confirmation email

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
