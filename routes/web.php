<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/mec-resume', [MainController::class, 'mec'])->name('mec.landing');

    Route::get('/header/create', [HeaderController::class, 'create'])->name('header.create');
    Route::post('/header', [HeaderController::class, 'store'])->name('header.store');
    Route::get('/header/edit', [HeaderController::class, 'edit'])->name('header.edit');
    Route::post('/header/update', [HeaderController::class, 'update'])->name('header.update');
    Route::delete('/header/{id}', [HeaderController::class, 'destroy'])->name('header.destroy');


    Route::get('/skills/create', [SkillController::class, 'create'])->name('skills.create');
    Route::post('/skills', [SkillController::class, 'store'])->name('skills.store');
    Route::get('/skills/edit', [SkillController::class, 'edit'])->name('skills.edit');
    Route::put('/skills/update', [SkillController::class, 'update'])->name('skills.update');


    Route::get('/references/create', [ReferenceController::class, 'create'])->name('references.create');
    Route::post('/references', [ReferenceController::class, 'store'])->name('references.store');
    Route::get('/references/{id}/edit', [ReferenceController::class, 'edit'])->name('references.edit');
    Route::put('/references/{id}', [ReferenceController::class, 'update'])->name('references.update');
    Route::delete('/references/{id}', [ReferenceController::class, 'destroy'])->name('references.destroy');

    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');

    Route::get('/education/create', [EducationController::class, 'create'])->name('education.create');
    Route::post('/education', [EducationController::class, 'store'])->name('education.store');
    Route::get('/education/{id}/edit', [EducationController::class, 'edit'])->name('education.edit');
    Route::put('/education/{id}', [EducationController::class, 'update'])->name('education.update');
    Route::delete('/education/{id}', [EducationController::class, 'destroy'])->name('education.destroy');

  
    Route::get('/achievements/create', [AchievementController::class, 'create'])->name('achievements.create');
    Route::post('/achievements', [AchievementController::class, 'store'])->name('achievements.store');
    Route::get('/achievements/{achievement}/edit', [AchievementController::class, 'edit'])->name('achievements.edit');
    Route::put('/achievements/{achievement}', [AchievementController::class, 'update'])->name('achievements.update');
    Route::delete('/achievements/{achievement}', [AchievementController::class, 'destroy'])->name('achievements.destroy');

    Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
    Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
    Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
    Route::put('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
    Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');
});

require __DIR__.'/auth.php';
