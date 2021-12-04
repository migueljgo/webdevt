<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function store(Request $request)
    {
        Activity::create([
            'activity_name' => $request->activity_name,
            'description' => $request->description,
        ]);
        
        return redirect()->route('home');
    }

    public function show($id)
    {
        $activity = Activity::find($id);
        
        return view('edit', compact('activity'));
    }

    public function edit(Request $request)
    {
        $activity = Activity::find($request->id);
        $activity->activity_name = $request->activity_name;
        $activity->description = $request->description;
        $activity->save();  

        return redirect()->route('home');
    }

    public function destroy(Request $request)
    {
        $activity = Activity::find($request->id);

        $activity->delete();

        return redirect()->route('home');
    }
}
