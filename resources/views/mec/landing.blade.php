@extends('layouts.app')

@section('content')
    <div class="container bg-gray-900 text-gray-100 py-8 px-4 rounded-lg">
        <h1 class="text-3xl font-bold mb-6 text-blue-400 border-b border-blue-700 pb-2">Your Resume Overview</h1>

        {{-- Header Section --}}
        <div class="mb-8 bg-gray-800 p-6 rounded-lg shadow-lg">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-blue-300">Personal Information</h3>
                <div class="flex space-x-2">
                    @if ($header)
                        <a href="{{ route('header.edit') }}" class="btn-edit">Edit</a>
                        <form action="{{ route('header.destroy', $header->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn-delete">Delete</button>
                        </form>
                    @else
                        <a href="{{ route('header.create') }}" class="btn-primary">Add Header</a>
                    @endif
                </div>
            </div>

            @if ($header)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="info-card">
                        <p class="info-label">Name</p>
                        <p class="info-value">{{ $header->name }}</p>
                    </div>
                    <div class="info-card">
                        <p class="info-label">Email</p>
                        <p class="info-value">{{ $header->email }}</p>
                    </div>
                    <div class="info-card">
                        <p class="info-label">Phone</p>
                        <p class="info-value">{{ $header->phone }}</p>
                    </div>
                    <div class="info-card">
                        <p class="info-label">Date of Birth</p>
                        <p class="info-value">{{ $header->dob }}</p>
                    </div>
                    @if ($header->github)
                        <div class="info-card">
                            <p class="info-label">GitHub</p>
                            <a href="{{ $header->github }}" target="_blank" class="info-link">{{ $header->github }}</a>
                        </div>
                    @endif
                    @if ($header->linkedin)
                        <div class="info-card">
                            <p class="info-label">LinkedIn</p>
                            <a href="{{ $header->linkedin }}" target="_blank" class="info-link">{{ $header->linkedin }}</a>
                        </div>
                    @endif
                    @if ($header->portfolio)
                        <div class="info-card">
                            <p class="info-label">Portfolio</p>
                            <a href="{{ $header->portfolio }}" target="_blank"
                                class="info-link">{{ $header->portfolio }}</a>
                        </div>
                    @endif
                </div>
            @else
                <div class="empty-state">
                    <svg xmlns="http://www.w3.org/2000/svg" class="empty-icon" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <p class="empty-text">No personal information added yet</p>
                    <a href="{{ route('header.create') }}" class="btn-primary">Add Personal Information</a>
                </div>
            @endif
        </div>

        {{-- Skills Section --}}
        <div class="mb-8 bg-gray-800 p-6 rounded-lg shadow-lg">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-blue-300">Skills & Interests</h3>
                <div class="flex space-x-2">
                    @if ($skills)
                        <a href="{{ route('skills.edit') }}" class="btn-edit">Edit</a>
                    @else
                        <a href="{{ route('skills.create') }}" class="btn-primary">Add Skills</a>
                    @endif
                </div>
            </div>

            @if ($skills)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="skill-card border-l-blue-500">
                        <div class="skill-icon bg-blue-500/20 text-blue-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h4 class="skill-title">Technical Skills</h4>
                        <p class="skill-value">{{ $skills->technical ?? 'Not specified' }}</p>
                    </div>

                    <div class="skill-card border-l-green-500">
                        <div class="skill-icon bg-green-500/20 text-green-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                            </svg>
                        </div>
                        <h4 class="skill-title">Soft Skills</h4>
                        <p class="skill-value">{{ $skills->soft ?? 'Not specified' }}</p>
                    </div>

                    <div class="skill-card border-l-purple-500">
                        <div class="skill-icon bg-purple-500/20 text-purple-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <h4 class="skill-title">Interests</h4>
                        <p class="skill-value">{{ $skills->interests ?? 'Not specified' }}</p>
                    </div>
                </div>
            @else
                <div class="empty-state">
                    <svg xmlns="http://www.w3.org/2000/svg" class="empty-icon" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                    <p class="empty-text">No skills information added yet</p>
                    <a href="{{ route('skills.create') }}" class="btn-primary">Add Skills</a>
                </div>
            @endif
        </div>

        {{-- Education Section --}}
        <div class="mb-8 bg-gray-800 p-6 rounded-lg shadow-lg">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-blue-300">Education</h3>
                <a href="{{ route('education.create') }}" class="btn-primary">Add Education</a>
            </div>

            @if ($educations && $educations->count())
                <div class="space-y-4">
                    @foreach ($educations as $education)
                        <div class="education-card">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="education-degree">{{ $education->degree }}</h4>
                                    <p class="education-institution">{{ $education->institution }}</p>
                                </div>
                                <div class="education-year">{{ $education->year }}</div>
                            </div>
                            <div class="education-grade">Grade: {{ $education->grade }}</div>
                            <div class="education-actions">
                                <a href="{{ route('education.edit', $education->id) }}" class="btn-edit">Edit</a>
                                <form action="{{ route('education.destroy', $education->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-delete">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty-state">
                    <svg xmlns="http://www.w3.org/2000/svg" class="empty-icon" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>
                    <p class="empty-text">No education details added yet</p>
                </div>
            @endif
        </div>

        {{-- Projects Section --}}
        <div class="mb-8 bg-gray-800 p-6 rounded-lg shadow-lg">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-blue-300">Projects</h3>
                <a href="{{ route('projects.create') }}" class="btn-primary">Add Project</a>
            </div>

            @if ($projects && $projects->count())
                <div class="space-y-4">
                    @foreach ($projects as $project)
                        <div class="project-card">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="project-title">{{ $project->title }}</h4>
                                    <p class="project-role">{{ $project->role }}</p>
                                </div>
                                <div class="project-duration">{{ $project->duration }}</div>
                            </div>
                            <p class="project-description">{{ $project->description }}</p>
                            <div class="project-details">
                                <div class="project-tech">Technologies: {{ $project->technologies }}</div>
                                <div class="project-team">Team Size: {{ $project->team_size }}</div>
                            </div>
                            <div class="project-actions">
                                <a href="{{ route('projects.edit', $project->id) }}" class="btn-edit">Edit</a>
                                <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-delete">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty-state">
                    <svg xmlns="http://www.w3.org/2000/svg" class="empty-icon" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <p class="empty-text">No projects added yet</p>
                </div>
            @endif
        </div>

        {{-- Achievements Section --}}
        <div class="mb-8 bg-gray-800 p-6 rounded-lg shadow-lg">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-blue-300">Achievements</h3>
                <a href="{{ route('achievements.create') }}" class="btn-primary">Add Achievement</a>
            </div>

            @if ($achievements && $achievements->count())
                <div class="space-y-3">
                    @foreach ($achievements as $achievement)
                        <div class="achievement-card">
                            <div class="achievement-content">
                                {!! $achievement->title !!}
                            </div>
                            <div class="achievement-actions">
                                <a href="{{ route('achievements.edit', $achievement->id) }}" class="btn-edit">Edit</a>
                                <form action="{{ route('achievements.destroy', $achievement->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-delete">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty-state">
                    <svg xmlns="http://www.w3.org/2000/svg" class="empty-icon" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                    <p class="empty-text">No achievements added yet</p>
                </div>
            @endif
        </div>

        {{-- Courses & Certifications Section --}}
        <div class="mb-8 bg-gray-800 p-6 rounded-lg shadow-lg">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-blue-300">Courses & Certifications</h3>
                <a href="{{ route('courses.create') }}" class="btn-primary">Add Course</a>
            </div>

            @if ($courses && $courses->count())
                <div class="space-y-3">
                    @foreach ($courses as $course)
                        <div class="course-card">
                            <div class="course-content">
                                {!! $course->title !!}
                            </div>
                            <div class="course-actions">
                                <a href="{{ route('courses.edit', $course->id) }}" class="btn-edit">Edit</a>
                                <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-delete">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty-state">
                    <svg xmlns="http://www.w3.org/2000/svg" class="empty-icon" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>
                    <p class="empty-text">No courses added yet</p>
                </div>
            @endif
        </div>

        {{-- References Section --}}
        <div class="mb-8 bg-gray-800 p-6 rounded-lg shadow-lg">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-blue-300">References</h3>
                <a href="{{ route('references.create') }}" class="btn-primary">Add Reference</a>
            </div>

            @if ($references && $references->count())
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach ($references as $reference)
                        <div class="reference-card">
                            <div class="reference-field">
                                <span class="reference-label">Name:</span>
                                <span class="reference-value">{{ $reference->name }}</span>
                            </div>
                            <div class="reference-field">
                                <span class="reference-label">Email:</span>
                                <a href="mailto:{{ $reference->email }}"
                                    class="reference-link">{{ $reference->email }}</a>
                            </div>
                            <div class="reference-field">
                                <span class="reference-label">Institution:</span>
                                <span class="reference-value">{{ $reference->institution }}</span>
                            </div>
                            <div class="reference-actions">
                                <a href="{{ route('references.edit', $reference->id) }}" class="btn-edit">Edit</a>
                                <form action="{{ route('references.destroy', $reference->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-delete">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty-state">
                    <svg xmlns="http://www.w3.org/2000/svg" class="empty-icon" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                    <p class="empty-text">No references added yet</p>
                </div>
            @endif
        </div>

        {{-- Download Button --}}
        <div class="text-center mt-8">
            <a href="{{ route('resume.download') }}" class="btn-download">
                <svg xmlns="http://www.w3.org/2000/svg" class="download-icon" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                </svg>
                Download Resume PDF
            </a>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        /* Base Styles */
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Background Colors */
        .bg-gray-900 {
            background-color: #111827;
        }

        .bg-gray-800 {
            background-color: #1f2937;
        }

        .bg-gray-700 {
            background-color: #374151;
        }

        /* Text Colors */
        .text-gray-100 {
            color: #f3f4f6;
        }

        .text-gray-300 {
            color: #d1d5db;
        }

        .text-gray-400 {
            color: #9ca3af;
        }

        .text-blue-300 {
            color: #93c5fd;
        }

        .text-blue-400 {
            color: #60a5fa;
        }

        /* Borders */
        .border-blue-700 {
            border-color: #1d4ed8;
        }

        /* Shadows */
        .shadow-lg {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        /* Buttons */
        .btn-primary {
            background-color: #3b82f6;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-weight: 500;
            transition: all 0.2s;
        }

        .btn-primary:hover {
            background-color: #2563eb;
        }

        .btn-edit {
            background-color: #4b5563;
            color: #d1d5db;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-weight: 500;
            transition: all 0.2s;
        }

        .btn-edit:hover {
            background-color: #374151;
        }

        .btn-delete {
            background-color: #ef4444;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-weight: 500;
            transition: all 0.2s;
        }

        .btn-delete:hover {
            background-color: #dc2626;
        }

        .btn-download {
            background-color: #3b82f6;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
        }

        .btn-download:hover {
            background-color: #2563eb;
            transform: translateY(-1px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .download-icon {
            width: 1.25rem;
            height: 1.25rem;
            margin-right: 0.5rem;
        }

        /* Cards */
        .info-card {
            background-color: #374151;
            padding: 1rem;
            border-radius: 0.5rem;
        }

        .info-label {
            font-size: 0.875rem;
            font-weight: 500;
            color: #9ca3af;
        }

        .info-value {
            font-size: 1.125rem;
            font-weight: 500;
            color: white;
        }

        .info-link {
            font-size: 1.125rem;
            font-weight: 500;
            color: #60a5fa;
            transition: color 0.2s;
        }

        .info-link:hover {
            color: #3b82f6;
        }

        .skill-card {
            background-color: #374151;
            padding: 1.25rem;
            border-radius: 0.5rem;
            border-left-width: 4px;
        }

        .skill-icon {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 9999px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0.75rem;
        }

        .skill-title {
            font-weight: 500;
            color: white;
            margin-bottom: 0.25rem;
        }

        .skill-value {
            color: #d1d5db;
        }

        .education-card {
            background-color: #374151;
            padding: 1.25rem;
            border-radius: 0.5rem;
            border-left: 4px solid #3b82f6;
        }

        .education-degree {
            font-size: 1.125rem;
            font-weight: 500;
            color: white;
        }

        .education-institution {
            color: #93c5fd;
        }

        .education-year {
            background-color: #1e3a8a;
            color: #bfdbfe;
            font-size: 0.875rem;
            padding: 0.25rem 0.5rem;
            border-radius: 9999px;
        }

        .education-grade {
            color: #9ca3af;
            margin-top: 0.5rem;
        }

        .education-actions {
            display: flex;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .project-card {
            background-color: #374151;
            padding: 1.25rem;
            border-radius: 0.5rem;
            border-left: 4px solid #8b5cf6;
        }

        .project-title {
            font-size: 1.125rem;
            font-weight: 500;
            color: white;
        }

        .project-role {
            color: #a78bfa;
        }

        .project-duration {
            /* background-color: #581c87; */
            color: #d8b4fe;
            font-size: 0.875rem;
            padding: 0.25rem 0.5rem;
            border-radius: 9999px;
        }

        .project-description {
            color: #d1d5db;
            margin-top: 0.75rem;
        }

        .project-details {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.5rem;
            margin-top: 0.75rem;
        }

        .project-tech,
        .project-team {
            color: #9ca3af;
        }

        .project-actions {
            display: flex;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        /* Empty States */
        .empty-state {
            padding: 2.5rem;
            text-align: center;
        }

        .empty-icon {
            width: 3rem;
            height: 3rem;
            color: #6b7280;
            margin: 0 auto 1rem;
        }

        .empty-text {
            color: #9ca3af;
            margin-bottom: 1.5rem;
        }

        /* Utility Classes */
        .rounded-lg {
            border-radius: 0.5rem;
        }

        .py-8 {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .mb-6 {
            margin-bottom: 1.5rem;
        }

        .pb-2 {
            padding-bottom: 0.5rem;
        }

        .mb-8 {
            margin-bottom: 2rem;
        }

        .p-6 {
            padding: 1.5rem;
        }

        .flex {
            display: flex;
        }

        .justify-between {
            justify-content: space-between;
        }

        .items-center {
            align-items: center;
        }

        .space-x-2>*+* {
            margin-left: 0.5rem;
        }

        .grid {
            display: grid;
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr));
        }

        .md\:grid-cols-2 {
            @media (min-width: 768px) {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        .md\:grid-cols-3 {
            @media (min-width: 768px) {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        .gap-4 {
            gap: 1rem;
        }

        .space-y-4>*+* {
            margin-top: 1rem;
        }

        .text-center {
            text-align: center;
        }

        .mt-8 {
            margin-top: 2rem;
        }

        .inline-flex {
            display: inline-flex;
        }

        .align-items-center {
            align-items: center;
        }
    </style>
@endpush
