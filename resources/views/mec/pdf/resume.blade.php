<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Resume</title>
    <style>
        @page {
            margin: 30px 40px;
        }

        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            line-height: 1.5;
        }

        h2 {
            border-bottom: 1px solid #000;
            padding-bottom: 4px;
            margin-top: 25px;
        }

        .section {
            margin-bottom: 20px;
        }

        ul {
            padding-left: 20px;
        }

        li {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>

    {{-- Header --}}
    <div class="section">
        <h2>Header</h2>
        <p><strong>Name:</strong> {{ $header->name ?? '' }}</p>
        <p><strong>Email:</strong> {{ $header->email ?? '' }}</p>
        <p><strong>Phone:</strong> {{ $header->phone ?? '' }}</p>
        <p><strong>LinkedIn:</strong> {{ $header->linkedin ?? '' }}</p>
        <p><strong>Address:</strong> {{ $header->address ?? '' }}</p>
    </div>

    {{-- Skills --}}
    <div class="section">
        <h2>Skills</h2>
        <p><strong>Technical:</strong> {{ $skills->technical ?? '' }}</p>
        <p><strong>Soft Skills:</strong> {{ $skills->soft ?? '' }}</p>
        <p><strong>Interests:</strong> {{ $skills->interests ?? '' }}</p>
    </div>


    {{-- Education --}}
    <div class="section">
        <h2>Education</h2>
        <ul>
            @foreach ($education as $edu)
                <li>
                    <strong>{{ $edu->degree }}</strong> from {{ $edu->institution }} ({{ $edu->year }}) - Grade:
                    {{ $edu->grade }}
                </li>
            @endforeach
        </ul>
    </div>

    {{-- Projects --}}
    <div class="section">
        <h2>Projects</h2>
        <ul>
            @foreach ($projects as $project)
                <li>
                    <strong>{{ $project->title }}</strong>: {{ $project->description }}
                </li>
            @endforeach
        </ul>
    </div>

    {{-- Courses --}}
    {{-- <pre>{{ print_r($courses, true) }}</pre> --}}
    @if ($courses && count($courses) > 0)
        <div class="section">
            <h2>Courses / Certifications</h2>
            <ul>
                @foreach ($courses as $course)
                    <li>{!! $course->title !!}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Achievements --}}
{{-- <pre>{{ print_r($achievements, true) }}</pre> --}}
    @if ($achievements && count($achievements) > 0)
        <div class="section">
            <h2>Achievements</h2>
            <ul>
                @foreach ($achievements as $achieve)
                    <li>{!! $achieve->title !!}</li> {{-- Renders bold/unbold formatting from Trix --}}
                @endforeach
            </ul>
        </div>
    @endif

    {{-- References --}}
    <div class="section">
        <h2>References</h2>
        <ul>
            @foreach ($references as $ref)
                <li>{{ $ref->email }} - {{ $ref->position }}</li>
            @endforeach
        </ul>
    </div>


</body>

</html>
