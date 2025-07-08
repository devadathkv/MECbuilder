<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
     public function create()
    {
        $educations= Auth::user()->educations;
        return view('mec.education.create', compact('educations'));
    }

    public function store(Request $request)
    { 
        $data = $request->validate([
            'degree' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . now()->year,
            'grade' => 'required|string|max:255',
        ]);

        $data['user_id'] = Auth::id();

        Education::create($data);

        return redirect()->route('mec.landing')->with('success', 'Education added!');
    }
    
public function edit($id)
{
    $education = Education::where('user_id', Auth::id())->findOrFail($id);
    return view('mec.education.edit', compact('education'));
}

public function update(Request $request, $id)
{
    $education = Education::where('user_id', Auth::id())->findOrFail($id);

    $data = $request->validate([
        'degree' => 'required|string|max:255',
        'institution' => 'required|string|max:255',
        'year' => 'required|integer|min:1900|max:' . now()->year,
        'grade' => 'required|string|max:100',
    ]);

    $education->update($data);

    return redirect()->route('mec.landing')->with('success', 'Education updated!');
}

public function destroy($id)
{
    $education = Education::where('user_id', Auth::id())->findOrFail($id);
    $education->delete();

    return redirect()->route('mec.landing')->with('success', 'Education deleted.');
}

 private function getLandingData()
{
    return [
        'header' => Auth::user()->header,
        'references' => Auth::user()->references,
        'courses' => Auth::user()->courses,
        'skills' => Auth::user()->skills,
        'education'=>Auth::user()->education,
    ];
}

}
