<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create()
    {
        return view('mec.courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
        ]);

        Course::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
        ]);

        return redirect()->route('mec.landing')->with('success', 'Course added.');
    }

    public function edit(Course $course)
    {
        // Optional: authorize only if course belongs to user
        // if ($course->user_id !== auth()->id()) abort(403);

        return view('mec.courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|string',
        ]);

        // Optional: secure update
        // if ($course->user_id !== auth()->id()) abort(403);

        $course->update([
            'title' => $request->title,
        ]);

        return redirect()->route('mec.landing')->with('success', 'Course updated.');
    }

    public function destroy(Course $course)
    {
        // Optional: secure delete
        // if ($course->user_id !== auth()->id()) abort(403);

        $course->delete();

        return redirect()->route('mec.landing')->with('success', 'Course deleted.');
    }
}
