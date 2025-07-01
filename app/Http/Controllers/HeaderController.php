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
        return view('header.create', compact('header'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'job_title' => 'nullable|string|max:255',
            'linkedin' => 'nullable|url',
            'github' => 'nullable|url',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:20',
            'dob' => 'nullable|date',
        ]);

        Header::create([
            'user_id' => Auth::id(),
            'full_name' => $request->full_name,
            'job_title' => $request->job_title,
            'linkedin' => $request->linkedin,
            'github' => $request->github,
            'email' => $request->email,
            'phone' => $request->phone,
            'dob' => $request->dob,
        ]);

        return redirect()->route('skills.create');
    }

    public function edit()
    {
        $header = Auth::user()->header;
        return view('header.create', compact('header'));
    }

    public function update(Request $request)
    {
        $header = Auth::user()->header;

        $request->validate([
            'full_name' => 'required|string|max:255',
            'job_title' => 'nullable|string|max:255',
            'linkedin' => 'nullable|url',
            'github' => 'nullable|url',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:20',
            'dob' => 'nullable|date',
        ]);

        $header->update([
            'full_name' => $request->full_name,
            'job_title' => $request->job_title,
            'linkedin' => $request->linkedin,
            'github' => $request->github,
            'email' => $request->email,
            'phone' => $request->phone,
            'dob' => $request->dob,
        ]);

        return redirect()->route('skills.create');
    }
}
