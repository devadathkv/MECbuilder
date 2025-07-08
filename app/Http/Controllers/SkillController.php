<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    public function create()
    {
        $skills = Skill::where('user_id', Auth::id())->first(); // not get()
        return view('mec.skills.create', ['skill' => null]);
    }   

    public function store(Request $request) 
    {
        $request->validate([
            'technical' => 'required|string',
            'soft' => 'required|string',
            'interests' => 'required|string',
        ]);

        Skill::create([
            'user_id' => Auth::id(),
            'technical' => $request->technical,
            'soft' => $request->soft,
            'interests' => $request->interests,
        ]);

        return redirect()->route('mec.landing')
                         ->with($this->getLandingData())
                         ->with('success', 'Skills added successfully!');
    }

    public function edit()
    {
        $skill = Skill::where('user_id', Auth::id())->firstOrFail();
        return view('mec.skills.edit', compact('skill'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'technical' => 'required|string',
            'soft' => 'required|string',
            'interests' => 'required|string',
        ]);

        $skill = Skill::where('user_id', Auth::id())->firstOrFail();
        $skill->update($request->only(['technical', 'soft', 'interests']));

        return redirect()->route('mec.landing')
                         ->with($this->getLandingData())
                         ->with('success', 'Skills updated successfully!');
    }

    private function getLandingData()
    {
        $user = Auth::user();

        return [
            'header' => $user->header,
            'references' => $user->references,
            'courses' => $user->courses,
            'skills' => $user->skills,
            'projects' => $user->projects,
            'achievements' => $user->achievements,
            'educations' => $user->education,
        ];
    }
}
