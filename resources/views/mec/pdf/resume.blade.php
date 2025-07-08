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
    {{-- HEADER --}}
    <table width="100%" style="font-family: DejaVu Sans, sans-serif; font-size: 12px;">
        <tr valign="top">
            {{-- Left side --}}
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

            {{-- Right side --}}
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



    {{-- Education --}}
    @if ($education && count($education) > 0)
        <div class="section">
            <h2>Education</h2>
            @foreach ($education as $edu)
                <table width="100%" style="margin-bottom: 12px; font-size: 12px;">
                    <tr>
                        {{-- Left: Degree, Institution, Location --}}
                        <td style="width: 70%;">
                            <strong>{{ $edu->degree }}</strong><br>
                            {{ $edu->institution }}<br>
                            @if (!empty($edu->location))
                                <span style="font-style: italic;">{{ $edu->location }}</span>
                            @endif
                        </td>

                        {{-- Right: Year and Grade --}}
                        <td style="width: 30%; text-align: right;">
                            <strong>{{ $edu->year }}</strong><br>
                            <strong>{{ $edu->grade }}</strong>
                        </td>
                    </tr>
                </table>
            @endforeach
        </div>
    @endif



    {{-- Projects --}}
    <div class="section">
        <h2 style="border-bottom: 1px solid #000; padding-bottom: 4px; font-size: 13px; text-transform: uppercase;">
            Projects</h2>
        <ul style="list-style-position: inside; padding-left: 0; margin: 0;">
            @foreach ($projects as $project)
                <li style="margin: 0 0 4px 0; font-size: 10.5pt; line-height: 1.2;">
                    <div style="display: flex; justify-content: space-between;">
                        <strong>{{ $project->title }}</strong>
                        <div style="font-size: 10pt; text-align: right;">
                            <div><em>Team Size:</em> {{ $project->team_size }}</div>
                            <div>{{ $project->duration }}</div>
                        </div>
                    </div>
                    <div style="font-style: italic;">
                        {{ $project->role }}
                    </div>
                    <div style="font-style: italic;">
                        <span style="font-weight: normal; color: #444;">Technologies Used:</span>
                        {{ $project->technologies }}
                    </div>
                    <div>{{ $project->description }}</div>
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
