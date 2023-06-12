<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Event::all());
        return view('events.index', [

            'events' => Event::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        dd($request->all());
        $path = $request->file('thumbnail')->store('images');
        return 'Done ' . $path;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->file('thumbnail'));
        $formFields = $request->validate([
            'title' => "required",
            'location' => 'required',
            'event_time' => 'required',
            'thumbnail' => 'required|image',
            'event_date' => 'required',
            'description' => "required"
        ]);

        $formFields['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
        $formFields['published_on'] = Carbon::now();

        // $timeForHumans = CarbonInterval::createFromFormat('Y:m', $request->event_date->toTimeString())->forHumans();
        // $formFilds['event_date'] = $timeForHumans;
        // dd($timeForHumans);
        Event::create($formFields);


        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {

        return view('events.show', [
            'event' => $event
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
