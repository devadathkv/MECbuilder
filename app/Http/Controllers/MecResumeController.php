<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Skill;
use Illuminate\Http\Request;

class MecResumeController extends Controller
{
    public function index()
    {
        return view('mec.landing');
    }

    public function showheader(){
        return view('mec.header');
    }
    public function showskills(){
        return view('mec.skills');
    }
    public function showeducation(){
        return view('mec.education');
    }
    public function showcourses(){
        return view('mec.courses');
    }
    public function showachievements(){
        return view('mec.achievements');
    }
    public function showprojects(){
        return view('mec.projects');
    }
    public function showreferences(){
        return view('mec.references');
    }


     public function header(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string',
        'dob' => 'required|date',
        'linkedin' => 'nullable|url',
        'github' => 'nullable|url',
        'portfolio' => 'nullable|url'
    ]);

    Header::updateOrCreate(
        ['user_id' => auth()->id()],
        array_merge($validated, ['user_id' => auth()->id()])
    );


    return redirect()->back()->with('success', 'Header updated successfully!');
}
    

    public function skills(Request $request)
{
    $validated = $request->validate([
        'skills.0.technical' => 'required|string',
        'skills.0.soft' => 'required|string',
        'skills.0.interests' => 'required|string',
    ]);

    $data = $validated['skills'][0];

    Skill::updateOrCreate(
        ['user_id' => auth()->id()],
        array_merge($data, ['user_id' => auth()->id()])
    );

    return redirect()->back()->with('success', 'Skills updated successfully!');
}


    public function education(Request $request)
{
    $validated = $request->validate([
        'education' => 'required|array', 
        'education.*.degree' => 'required|string',
        'education.*.institution' => 'required|string',
        'education.*.year' => 'required|numeric|min:1900|max:' . now()->year,
        'education.*.grade' => 'required|string',
    ]);

    // Clear existing entries
    auth()->user()->education()->delete();

    // Create new ones
    foreach ($validated['education'] as $edu) {
        auth()->user()->education()->create([
            'degree' => $edu['degree'],
            'institution' => $edu['institution'],
            'year' => $edu['year'],
            'grade' => $edu['grade'],
        ]);
    }

    return redirect()->back()->with('success', 'Education updated successfully!');
}



    public function projects(Request $request)
{
    $validated = $request->validate([
        'projects' => 'required|array',
        'projects.*.title' => 'required|string|max:255',
        'projects.*.role' => 'required|string|max:255',
        'projects.*.technologies' => 'required|string',
        'projects.*.description' => 'required|string',
        'projects.*.team_size' => 'nullable|integer|min:1',
        'projects.*.duration' => 'nullable|string|max:255',
    ]);

    // Clear old entries
    auth()->user()->projects()->delete();

    // Create new ones
    foreach ($validated['projects'] as $proj) {
        auth()->user()->projects()->create([
            'title' => $proj['title'],
            'role' => $proj['role'],
            'technologies' => $proj['technologies'],
            'description' => $proj['description'],
            'team_size' => $proj['team_size'] ?? null,
            'duration' => $proj['duration'] ?? null,
        ]);
    }

    return redirect()->back()->with('success', 'Projects updated successfully!');
}



     public function courses(Request $request)
{
        $validated = $request->validate([
            'courses' => 'required|array', 
            'courses.*.title' => 'required|string|max:255',
        ]);

        // Delete old entries to avoid duplicates
        auth()->user()->courses()->delete();

        foreach ($validated['courses'] as $course) {
            auth()->user()->courses()->create($course);
        }

        return redirect()->back()->with('success', 'Courses updated successfully!');

}



    public function achievements(Request $request)
{
        $validated = $request->validate([
            'achievements' => 'required|array',
            'achievements.*.title' => 'required|string|max:1000',
        ]);

        // Delete old achievements before saving new ones
        auth()->user()->achievements()->delete();

        foreach ($validated['achievements'] as $achievement) {
            auth()->user()->achievements()->create($achievement);
        }

        return redirect()->back()->with('success', 'Achievements updated successfully!');
}


    public function references(Request $request)
{
        $validated = $request->validate([
            'references' => 'required|array',
            'references.*.name' => 'required|string|max:255',
            'references.*.institution' => 'required|string|max:255',
            'references.*.email' => 'required|email|max:255',
        ]);

        // Clear old references before saving new ones
        auth()->user()->references()->delete();

        foreach ($validated['references'] as $ref) {
            auth()->user()->references()->create($ref);
        }

        return redirect()->back()->with('success', 'References saved successfully!');
}

}
