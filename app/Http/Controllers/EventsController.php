<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Event::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
            'begin_time' => 'date_format:H:i',
            'end_time' => 'date_format:H:i|after:begin_time',
            'location' => 'required|string',
        ]);

        $event = Event::create($data);
        
        return response($event, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Event  $event
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Event $event)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        // if ($todo->user_id !== auth()->user()->id) {
        //     return response()->json('Unauthorized', 401);
        // }

        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
            'begin_time' => 'date_format:H:i',
            'end_time' => 'date_format:H:i|after:begin_time',
            'location' => 'required|string',
        ]);

        $event->update($data);

        return response($event, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        // if ($todo->user_id !== auth()->user()->id) {
        //     return response()->json('Unauthorized', 401);
        // }

        $event->delete();

        return response()->json('Deleted event.', 200);
    }
}
