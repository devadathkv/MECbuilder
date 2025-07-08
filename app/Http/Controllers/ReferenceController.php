<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReferenceController extends Controller
{
    public function create()
    {
        $references = Auth::user()->references;
        return view('mec.references.create', compact('references'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'email' => 'nullable|email',
        ]);

        Reference::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'institution' => $request->institution,
            'email' => $request->email,
        ]);

        return redirect()->route('mec.landing')->with($this->getLandingData())->with('success', 'Reference added!');
    }

    public function edit($id)
    {
        $reference = Reference::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        return view('mec.references.edit', compact('reference'));
    }

    public function update(Request $request, $id)
    {
        $reference = Reference::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $request->validate([
            'name' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'email' => 'nullable|email',
        ]);

        $reference->update([
            'name' => $request->name,
            'institution' => $request->institution,
            'email' => $request->email,
        ]);

        return redirect()->route('mec.landing')->with($this->getLandingData())->with('success', 'Reference updated!');
    }

    public function destroy($id)
    {
        $reference = Reference::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $reference->delete();

        return redirect()->route('mec.landing')->with($this->getLandingData())->with('success', 'Reference deleted!');
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
