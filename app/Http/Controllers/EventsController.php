<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $events = Events::all();
        return response()->json($events);
    }

    public function show(Events $event)
    {
        return response()->json($event);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'required|max:255',
        ]);

        $event = Events::create($validated);

        return response()->json([
            'message' => 'Event created successfully.',
            'Event' => $event,
        ], 201);
    }

    public function update(Request $request, Events $event)
    {
        $validated = $request->validate([
            'name' => 'string|max:255',
            'date' => 'date',
            'description' => 'text|max:255',
        ]);

        $event->update($validated);

        return response()->json([
            'message' => 'Event updated successfully.',
            'book' => $event,
        ]);
    }

    public function destroy(Events $event)
    {
        $event->delete();

        return response()->json(['message' => 'Event deleted successfully.']);
    }
}
