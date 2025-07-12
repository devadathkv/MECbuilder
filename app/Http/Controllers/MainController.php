<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Achievement;
use App\Models\Reference;
use App\Models\Course;
use App\Models\Education;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Spatie\Browsershot\Browsershot;
use App\Services\GeminiService;


class MainController extends Controller
{
    public function mec() {
    $userId = auth()->id();

    $header = Header::where('user_id', $userId)->first();
    $skills = Skill::where('user_id', $userId)->first();
    $educations = Education::where('user_id', $userId)->get();
    $projects = Project::where('user_id', $userId)->get();
    $courses = Course::where('user_id', $userId)->get();
    $references = Reference::where('user_id', $userId)->get();
    $achievements = Achievement::where('user_id', $userId)->get();

    return view('mec.landing', compact(
        'header',
        'skills',
        'educations',
        'projects',
        'courses',
        'references',
        'achievements'
    ));

    }

    
public function downloadPDF()
{
    $user = auth()->user();

    $data = [
        'header'      => $user->header,
        'skills'      => $user->skills,
        'courses'     => $user->courses,
        'achievements'=> $user->achievements,
        'references'  => $user->references,
        'educations'   => $user->education,
        'projects'    => $user->projects,
    ];

    $html = view('mec.pdf.resume', $data)->render();

    return response()->streamDownload(function () use ($html) {
        echo Browsershot::html($html)
            ->setOption('no-sandbox', true)
            ->format('A4')
            ->pdf();
    }, 'Devadath_KV_Resume.pdf');
}

    public function index(){
        return view('dashboard');
    }

public function fetchSuggestions(Request $request, GeminiService $geminiService)
{
    $userId = auth()->id();

    // 📝 Fetch resume data from DB
    $achievements = \App\Models\Achievement::where('user_id', $userId)->pluck('title')->implode("\n");
    $projects = \App\Models\Project::where('user_id', $userId)->pluck('description')->implode("\n");
    $skillsModel = \App\Models\Skill::where('user_id', $userId)->first();

    $skills = $skillsModel
        ? "Technical Skills: {$skillsModel->technical}\nSoft Skills: {$skillsModel->soft}\nInterests: {$skillsModel->interests}"
        : "Technical Skills: PHP, Laravel\nSoft Skills: Communication\nInterests: AI";

    $resumeContent = <<<EOT
Skills:
$skills

Projects:
$projects

Achievements:
$achievements
EOT;

    // 🧠 Call Gemini API
    $suggestions = $geminiService->analyzeResume($resumeContent);

    // 🛡 Fallback suggestions if API fails
    if (str_starts_with($suggestions, '❌ Error')) {
        $suggestions = <<<EOT
✅ Add measurable achievements (e.g., "Increased efficiency by 20%").
✅ Highlight relevant projects with technologies used.
✅ Emphasize your soft skills in team roles and communication.
✅ Keep formatting clean and consistent.
EOT;
    }

    return view('dashboard', [
        'suggestions' => $suggestions
    ]);
}



}
