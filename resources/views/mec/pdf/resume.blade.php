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
        }

        .section {
            margin-bottom: 18px;
        }

        ul {
            padding-left: 18px;
        }

        li {
            margin-bottom: 4px;
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
                        <a href="{{ $header->linkedin }}" style="color: #007bff; text-decoration: none;"
                            target="_blank">LinkedIn</a>
                    @endif
                    @if ($header->github)
                        |
                        <a href="{{ $header->github }}" style="color: #007bff; text-decoration: none;"
                            target="_blank">GitHub</a>
                    @endif
                    @if ($header->portfolio)
                        |
                        <a href="{{ $header->portfolio }}" style="color: #007bff; text-decoration: none;"
                            target="_blank">Portfolio</a>
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
        <ul style="list-style-type: '● '; padding-left: 20px;">
            <li><strong>Technical Skills:</strong> {{ $skills->technical ?? '' }}</li>
            <li><strong>Soft Skills:</strong> {{ $skills->soft ?? '' }}</li>
            <li><strong>Interests:</strong> {{ $skills->interests ?? '' }}</li>
        </ul>
    </div>

    {{-- EDUCATION --}}
    @if ($education && count($education) > 0)
        <div class="section">
            <h2>Education</h2>
            @foreach ($education as $edu)
                <table width="100%" style="margin-bottom: 10px;">
                    <tr>
                        <td style="font-weight: bold;">{{ $edu->degree }}</td>
                        <td align="right">{{ $edu->year }}</td>
                    </tr>
                    <tr>
                        <td>
                            {{ $edu->institution }}<br>
                            @if (!empty($edu->location))
                                <i>{{ $edu->location }}</i>
                            @endif
                        </td>
                        <td align="right" style="font-weight: bold;">{{ $edu->grade }}</td>
                    </tr>
                </table>
            @endforeach
        </div>
    @endif




    {{-- Projects --}}
    {{-- PROJECTS --}}
    @if ($projects && count($projects) > 0)
        <div class="section">
            <h2>Projects</h2>
            @foreach ($projects as $project)
                <table width="100%" style="margin-bottom: 10px; font-size: 11px;">
                    <tr>
                        <td colspan="2" style="font-weight: bold;">{{ $project->title }}</td>
                        <td align="right" style="font-size: 10pt;">
                            <div><em>Team Size:</em> {{ $project->team_size }}</div>
                            <div>{{ $project->duration }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="font-style: italic;">{{ $project->role }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="font-style: italic;">
                            <span style="font-weight: normal; color: #444;">Technologies Used:</span>
                            {{ $project->technologies }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">{{ $project->description }}</td>
                    </tr>
                </table>
            @endforeach
        </div>
    @endif




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
                    <li>{!! $achieve->title !!}</li> {{-- Trix formatting support --}}
                @endforeach
            </ul>
        </div>
    @endif

    {{-- References --}}
    @if ($references && count($references) > 0)
        <div class="section">
            <h2>References</h2>
            <ul>
                @foreach ($references as $ref)
                    <li>
                        {{ $ref->email }}
                        @if ($ref->position)
                            - {{ $ref->position }}
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

</body>

</html>
