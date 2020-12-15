<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class WorkoutController extends Controller
{
    public function main()
    {
        return Inertia::render('Workout/Main');
    }

    public function current()
    {
        return Inertia::render('Workout/Current');
    }

    public function custom()
    {
        return Inertia::render('Workout/Custom');
    }
}
