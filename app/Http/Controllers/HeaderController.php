<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use Illuminate\Support\Facades\Auth;

class HeaderController extends Controller
{
    public function create()
    {
        $header = Auth::user()->header;
        return view('mec.header.create', compact('header'));
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'linkedin' => 'nullable|url',
        'github' => 'nullable|url',
        'portfolio' => 'nullable|url',
        'email' => 'nullable|email',
        'phone' => 'nullable|string|max:20',
        'dob' => 'nullable|date',
    ]);

    $header = Header::create([
        'user_id' => Auth::id(),
        'name' => $request->name,
        'github' => $request->github,
        'linkedin' => $request->linkedin,
        'portfolio' => $request->portfolio,
        'email' => $request->email,
        'phone' => $request->phone,
        'dob' => $request->dob,
    ]);

    return view('mec.landing', $this->getLandingData());
}


    public function edit()
    {
        $header = Auth::user()->header;
        return view('mec.header.edit', compact('header'));
    }

    public function update(Request $request)
{
    $header = Auth::user()->header;

    $request->validate([
        'name' => 'required|string|max:255',
        'linkedin' => 'nullable|url',
        'github' => 'nullable|url',
        'portfolio' => 'nullable|url',
        'email' => 'nullable|email',
        'phone' => 'nullable|string|max:20',
        'dob' => 'nullable|date',
    ]);

    $header->update([
        'name' => $request->name,
        'linkedin' => $request->linkedin,
        'github' => $request->github,
        'portfolio' => $request->portfolio,
        'email' => $request->email,
        'phone' => $request->phone,
        'dob' => $request->dob,
    ]);

    return view('mec.landing', $this->getLandingData());
}

        public function destroy()
    {
        $header = Auth::user()->header;

        if ($header) {
            $header->delete();
        }

        return view('mec.landing', $this->getLandingData());
    }

    private function getLandingData()
{
    return [
        'header' => Auth::user()->header,
        'references' => Auth::user()->references,
        'courses' => Auth::user()->courses,
        'skills' => Auth::user()->skills,
        'educations'=>Auth::user()->education,
        'projects'     => Auth::user()->projects, 
        'achievements' => Auth::user()->achievements,
    ];
}



}
