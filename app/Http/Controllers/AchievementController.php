<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    
    public function create()
    {
        return view('mec.achievements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
        ]);

        Achievement::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
        ]);

        return redirect()->route('mec.landing')->with('success', 'Achievement added.');
    }

    public function edit(Achievement $achievement)
    {
        return view('mec.achievements.edit', compact('achievement'));
    }

    public function update(Request $request, Achievement $achievement)
    {
        $request->validate([
            'title' => 'required|string',
        ]);

        $achievement->update([
            'title' => $request->title,
        ]);

        return redirect()->route('mec.landing')->with('success', 'Achievement updated.');
    }

    public function destroy(Achievement $achievement)
    {
        $this->authorize('delete', $achievement); // Optional: if using policies
        $achievement->delete();
        return redirect()->route('mec.landing')->with('success', 'Achievement deleted.');
    }

}
