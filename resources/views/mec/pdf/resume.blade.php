<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Resume</title>
    <style>
        @page {
            margin: 25px 35px;
        }

        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 11.5px;
            line-height: 1.45;
            color: #000;
        }

        h2 {
            font-size: 13px;
            text-transform: uppercase;
            border-bottom: 1px solid #000;
            padding-bottom: 3px;
            margin-top: 22px;
            margin-bottom: 8px;
        }

        .section {
            margin-bottom: 18px;
        }

        ul {
            padding-left: 18px;
            margin-top: 0;
            margin-bottom: 0;
        }

        li {
            margin-bottom: 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .project-table {
            margin-bottom: 12px;
        }

        .project-title {
            font-weight: bold;
        }

        .project-details {
            font-style: italic;
            color: #444;
        }
    </style>
</head>

<body>
    {{-- HEADER --}}
    <table width="100%">
        <tr valign="top">
            <td align="left" style="width: 60%;">
                <div style="font-size: 14px; font-weight: bold;">{{ $header->name ?? '' }}</div>

                <div style="margin-top: 4px;">
                    @if ($header->linkedin)
                        <a href="{{ $header->linkedin }}" style="color: #007bff; text-decoration: none;">LinkedIn</a> |
                    @endif
                    @if ($header->github)
                        <a href="{{ $header->github }}" style="color: #007bff; text-decoration: none;">GitHub</a> |
                    @endif
                    @if ($header->portfolio)
                        <a href="{{ $header->portfolio }}" style="color: #007bff; text-decoration: none;">Portfolio</a>
                    @endif
                </div>

                @if ($header->dob)
                    <div style="margin-top: 5px;"><strong>DOB –</strong>
                        {{ \Carbon\Carbon::parse($header->dob)->format('d/m/Y') }}</div>
                @endif
            </td>

            <td align="right" style="width: 40%;">
                @if ($header->email)
                    <div style="margin-bottom: 2px;">{{ $header->email }}</div>
                @endif
                @if ($header->phone)
                    <div>{{ $header->phone }}</div>
                @endif
            </td>
        </tr>
    </table>

    {{-- SKILLS & INTERESTS --}}
    <div class="section">
        <h2>SKILLS & INTERESTS</h2>
        <ul style="list-style-type: none; padding-left: 0;">
            @if ($skills->technical)
                <li><strong>Technical Skills:</strong> {{ $skills->technical }}</li>
            @endif
            @if ($skills->soft)
                <li><strong>Soft Skills:</strong> {{ $skills->soft }}</li>
            @endif
            @if ($skills->interests)
                <li><strong>Interests:</strong> {{ $skills->interests }}</li>
            @endif
        </ul>
    </div>

    {{-- EDUCATION --}}
    @if ($educations && count($educations) > 0)
        <div class="section">
            <h2>EDUCATION</h2>
            @foreach ($educations as $edu)
                <table width="100%" style="margin-bottom: 10px;">
                    <tr>
                        <td style="font-weight: bold;">{{ $edu->institution }}</td>
                        <td align="right">{{ $edu->year }}</td>
                    </tr>
                    <tr>
                        <td>
                            {{ $edu->degree }}<br>
                            @if ($edu->board)
                                {{ $edu->board }},
                            @endif
                        </td>
                        <td align="right" style="font-weight: bold;">{{ $edu->grade }}</td>
                    </tr>
                </table>
            @endforeach
        </div>
    @endif

    {{-- PROJECTS --}}
    @if ($projects && count($projects) > 0)
        <div class="section">
            <h2>PROJECTS</h2>
            @foreach ($projects as $project)
                <table width="100%" class="project-table">
                    <tr>
                        <td class="project-title">{{ $project->title }}</td>
                        <td align="right"><em>TeamSize:</em> {{ $project->team_size }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">{{ $project->role }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">{{ $project->duration }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="project-details">Technologies Used: {{ $project->technologies }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">{{ $project->description }}</td>
                    </tr>
                </table>
            @endforeach
        </div>
    @endif

    {{-- COURSES & CERTIFICATIONS --}}
    @if ($courses && count($courses) > 0)
        <div class="section">
            <h2>COURSES & CERTIFICATIONS</h2>
            <ul style="list-style-type: none; padding-left: 0;">
                @foreach ($courses as $course)
                    <li>- {{ $course->title }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- ACHIEVEMENTS & ACTIVITIES --}}
    @if ($achievements && count($achievements) > 0)
        <div class="section">
            <h2>ACHIEVEMENTS & ACTIVITIES</h2>
            <ul style="list-style-type: none; padding-left: 0;">
                @foreach ($achievements as $achieve)
                    <li>- {!! $achieve->title !!}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- REFERENCES --}}
    @if ($references && count($references) > 0)
        <div class="section">
            <h2>REFERENCES</h2>
            <ul style="list-style-type: none; padding-left: 0;">
                @foreach ($references as $ref)
                    <li>
                        {{ $ref->name }}, {{ $ref->position }}, {{ $ref->institution }}, Email:
                        {{ $ref->email }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($educations && count($educations) > 0)
        <div style="text-align: center; margin-top: 20px;">
            {{ $educations[0]->institution ?? '' }}
        </div>
    @endif
</body>

</html>
