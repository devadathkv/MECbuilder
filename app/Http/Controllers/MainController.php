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

}
