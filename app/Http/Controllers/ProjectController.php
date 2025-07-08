<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function create()
    {
        $projects = Auth::user()->projects;
        return view('mec.projects.create', compact('projects'));
    }

     public function store(Request $request)
{
    $data = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string', // ✅ use string, not "text"
        'technologies' => 'required|string', // ✅ use string, not "text"
        'role' => 'required|string|max:255',
        'team_size' => 'required|integer|min:1',
        'duration' => 'required|string|max:100', // assuming you want to save "2 weeks", "1 month", etc.
    ]);

    $data['user_id'] = Auth::id(); // Attach the currently logged in user

    Project::create($data); // Save all at once

    return redirect()->route('mec.landing')->with('success', 'Project added!');
}

    public function edit($id)
{
    $project = Project::findOrFail($id);

    // Optional: check if the user owns the project
    if ($project->user_id !== Auth::id()) {
        abort(403, 'Unauthorized');
    }

    return view('mec.projects.edit', compact('project'));
}
    public function update(Request $request, $id)
{
    $project = Project::findOrFail($id);

    // Optional: ensure the authenticated user is the owner
    if ($project->user_id !== Auth::id()) {
        abort(403, 'Unauthorized');
    }

    $data = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'technologies' => 'required|string',
        'role' => 'required|string|max:255',
        'team_size' => 'required|integer|min:1',
        'duration' => 'required|string|max:100',
    ]);

    $project->update($data);

    return redirect()->route('mec.landing')->with('success', 'Project updated!');
}

    public function destroy($id)
{
    $project = Project::findOrFail($id);

    $project->delete();

    return redirect()->route('mec.landing')->with('success', 'Project deleted!');
}




}
