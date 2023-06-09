<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        // dd($request->all());

        // Validate Form fieds
        $sessionType = $request->session_type;
        $session_type_string = "";

        if ($request->session_type != null) {
            foreach ($sessionType as $type) {
                $session_type_string = $session_type_string  . " " . $type;
            }
        }

        if (auth()->check()) {

            $formFiedsAuth = $request->validate([
                'message' => 'max:500',
                'session_type' => 'array|required|max:3',
                'datepicker' => ['required'],
                'message' => 'max:500',
            ]);

            $order = new Order($formFiedsAuth);

            $order->name = auth()->user()->name;
            $order->email = auth()->user()->email;
            $order->user_id = auth()->id();
            $order->submitted_on = Carbon::now();


            if ($request->send_message_copy) {
                $order->send_message_copy = 1;
            } else {
                $order->send_message_copy = 0;
            }

            $order->session_type = $session_type_string;
            $order->save();
        } else {

            $formFieds = $request->validate([
                'name' => 'required',
                'email' => ['required', 'email'],
                'message' => 'max:500',
                'session_type' => 'array|required|max:3',
                'datepicker' => ['required']
            ]);


            $order = new Order($formFieds);

            if ($request->send_message_copy) {
                $order->send_message_copy = 1;
            } else {
                $order->send_message_copy = 0;
            }

            $order->submitted_on = Carbon::now();
            $order->session_type = $session_type_string;
            // var_dump($formFieds);

            // dd($request->all());
            $order->save();
        }


        $attachment = public_path('storage/contract.txt');
        $email = $order->email;
        //TODO: send a confirmation email
        Mail::to($email)->send(new OrderShipped($order, $attachment));


        return redirect()->route('confirm', [$order]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
        return view('/confirm', [
            'order' => $order
        ]);
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
