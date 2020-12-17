<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Workout;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WorkoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function main()
    {
        $workouts = auth()->user()->userWorkouts();
        return Inertia::render('Workout/Main', [
            'workouts' => $workouts
        ]);
    }

    public function create()
    {
        return Inertia::render('Workout/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'purpose' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096'
        ]);

        Workout::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'purpose' => $request->purpose,
            'img' => $request->file('img') ? $request->file('img')->store('img', 'public') : null
        ]);

        return redirect()->route('workouts')->with('success', 'Workout was successfully added.');
    }

    public function edit(Workout $workout)
    {
        return Inertia::render('Workout/Edit', [
            'workout' => $workout
        ]);
    }

    public function update(Workout $workout, Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'purpose' => 'required',

        ]);

        $workout->update([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'purpose' => $request->purpose,
            'img' => $request->file('img') ? $request->file('img')->store('img', 'public') : $workout->img
        ]);

        return redirect()->route('workouts')->with('success', 'Workout was successfully added.');
    }
}
