@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Your Resume Overview</h1>

        {{-- Header Section --}}
        <div class="mb-5">
            <h3>Header</h3>
            @if ($header)
                <p><strong>Name:</strong> {{ $header->name }}</p>
                <p><strong>Email:</strong> {{ $header->email }}</p>
                <p><strong>GitHub:</strong> {{ $header->github }}</p>
                <p><strong>LinkedIn:</strong> {{ $header->linkedin }}</p>
                <p><strong>Portfolio:</strong> {{ $header->portfolio }}</p>
                <p><strong>Date of Birth:</strong> {{ $header->dob }}</p>
                <p><strong>Phone:</strong> {{ $header->phone }}</p>

                <a href="{{ route('header.edit') }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('header.destroy', $header->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            @else
                <a href="{{ route('header.create') }}" class="btn btn-success btn-sm">Add Header</a>
            @endif
        </div>

        {{--    //////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
        <br>
        <br>
        <div class="mb-5">
            <h4 class="fw-bold border-bottom pb-1">SKILLS & INTERESTS</h4>

            <div class="border p-3 rounded shadow-sm">
                <ul class="list-unstyled">
                    <li>
                        <strong>Technical Skills:</strong>
                        <span>{{ $skills->technical ?? 'Not added' }}</span>
                    </li>
                    <li>
                        <strong>Soft Skills:</strong>
                        <span>{{ $skills->soft ?? 'Not added' }}</span>
                    </li>
                    <li>
                        <strong>Interests:</strong>
                        <span>{{ $skills->interests ?? 'Not added' }}</span>
                    </li>
                </ul>

                <div class="mt-3">
                    @if ($skills)
                        <a href="{{ route('skills.edit') }}" class="btn btn-sm btn-warning">Edit</a>
                    @else
                        <a href="{{ route('skills.create') }}" class="btn btn-sm btn-success">Add Skills</a>
                    @endif
                </div>
            </div>
        </div>





        <br>
        <br>
        <div class="mb-5">
            <h3>References</h3>

            @if ($references && $references->count())
                @foreach ($references as $reference)
                    <div class="mb-3 border rounded p-2">
                        <p><strong>Name:</strong> {{ $reference->name }}</p>
                        <p><strong>Email:</strong> <a href="mailto:{{ $reference->email }}">{{ $reference->email }}</a>
                        </p>
                        <p><strong>Institution:</strong> {{ $reference->institution }}</p>

                        <a href="{{ route('references.edit', $reference->id) }}" class="btn btn-primary btn-sm">Edit</a>

                        <form action="{{ route('references.destroy', $reference->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                @endforeach
            @else
                <p>No references added yet.</p>
            @endif

            {{-- ✅ Always show Add button --}}
            <a href="{{ route('references.create') }}" class="btn btn-success btn-sm mt-3">Add Another Reference</a>
        </div>

        <br>
        <br>


        <div class="mb-5">
            <h3>Projects</h3>

            @if ($projects && $projects->count())
                <ul class="list-unstyled">
                    @foreach ($projects as $project)
                        <li class="mb-4">
                            <div>
                                <strong>{{ $project->title }}</strong><br>
                                <span>{{ $project->role }}</span><br>

                                <em>Technologies Used:</em> {{ $project->technologies }}<br>

                                <p>{{ $project->description }}</p>

                                <div class="d-flex justify-content-between">
                                    <div><em>Team Size:</em> {{ $project->team_size }}</div>
                                    <div><em>{{ $project->duration }}</em></div>
                                </div>

                                <a href="{{ route('projects.edit', $project->id) }}"
                                    class="btn btn-primary btn-sm mt-2">Edit</a>

                                <form action="{{ route('projects.destroy', $project->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm mt-2">Delete</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No projects added yet.</p>
            @endif

            <a href="{{ route('projects.create') }}" class="btn btn-success btn-sm mt-3">Add Another Project</a>
        </div>


        <br>
        <br>

        <div class="mb-5">
            <h3>Education</h3>

            @if ($educations && $educations->count())
                <ul class="list-unstyled">
                    @foreach ($educations as $education)
                        <li class="mb-4">
                            <div>
                                <strong>{{ $education->degree }}</strong><br>
                                <span>{{ $education->institution }}</span><br>
                                <em>Year:</em> {{ $education->year }}<br>
                                <em>Grade:</em> {{ $education->grade }}

                                <div class="mt-2">
                                    <a href="{{ route('education.edit', $education->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>

                                    <form action="{{ route('education.destroy', $education->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No education details added yet.</p>
            @endif

            <a href="{{ route('education.create') }}" class="btn btn-success btn-sm mt-3">Add Education</a>
        </div>

        <br>
        <br>

        <div class="mb-5">
            <h3>Achievements</h3>

            @if ($achievements && $achievements->count())
                <ul class="list-unstyled">
                    @foreach ($achievements as $achievement)
                        <li class="mb-3">
                            <div class="border p-3 rounded shadow-sm">
                                {!! $achievement->title !!}

                                <div class="mt-2">
                                    <a href="{{ route('achievements.edit', $achievement->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>

                                    <form action="{{ route('achievements.destroy', $achievement->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No achievements added yet.</p>
            @endif

            <a href="{{ route('achievements.create') }}" class="btn btn-success btn-sm mt-3">Add Achievement</a>
        </div>

        <br>
        <br>

        <div class="mb-5">
            <h3>Courses & Certifications</h3>

            @if ($courses && $courses->count())
                <ul class="list-unstyled">
                    @foreach ($courses as $course)
                        <li class="mb-3">
                            <div class="border p-3 rounded shadow-sm">
                                {!! $course->title !!}

                                <div class="mt-2">
                                    <a href="{{ route('courses.edit', $course->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>

                                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No courses added yet.</p>
            @endif

            <a href="{{ route('courses.create') }}" class="btn btn-success btn-sm mt-3">Add Course</a>
        </div>










        {{-- Skills Section --}}
        {{-- <div class="mb-5">
        <h3>Skills</h3>
        @forelse($skills as $skill)
            <div>
                • {{ $skill->name }}
                <a href="{{ route('skills.edit', $skill->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        @empty
            <p>No skills added yet.</p>
        @endforelse
        <a href="{{ route('skills.create') }}" class="btn btn-success btn-sm">Add Skill</a>
    </div> --}}


    </div>
@endsection
