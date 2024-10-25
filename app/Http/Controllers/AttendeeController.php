<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\Event;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendees = Attendee::with('event')->get();
        return view('attendees.index', compact('attendees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::all(); 
        return view('attendees.create', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:attendees,email',
            'event_id' => 'required|exists:events,id'
        ]);
    
        Attendee::create([
            'name' => $request->name,
            'email' => $request->email,
            'event_id' => $request->event_id
        ]);
    
        // Redirect back to the index page with a success message
        return redirect()->route('attendees.index')
            ->with('success', 'Attendee created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attendee = Attendee::findOrFail($id);
        $events = Event::all(); 
        return view('attendees.edit', compact('attendee', 'events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attendee = Attendee::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:attendees,email,' . $attendee->id,
            'event_id' => 'required|exists:events,id'
        ]);

        $attendee->update($request->all());

        return redirect()->route('attendees.index')
            ->with('success', 'Attendee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attendee = Attendee::findOrFail($id);
        $attendee->delete();

        return redirect()->route('attendees.index')
            ->with('success', 'Attendee deleted successfully.');
    }
}
