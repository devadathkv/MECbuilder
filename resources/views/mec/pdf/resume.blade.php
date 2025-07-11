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



        */ .project-table {
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
    <table width="100%" style="margin-bottom: 10px;">
        <tr valign="top">
            <td align="left" style="width: 60%;">
                <div style="font-size: 20px; font-weight: bold;">{{ $header->name ?? '' }}</div>

                <div style="margin-top: 4px; font-size: 12px;">
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
                    <div style="margin-top: 5px; font-size: 12px;">
                        <strong>DOB –</strong> {{ \Carbon\Carbon::parse($header->dob)->format('d/m/Y') }}
                    </div>
                @endif
            </td>

            <td align="right" style="width: 40%;">
                @if ($header->email)
                    <div style="margin-bottom: 2px; font-size: 12px;">{{ $header->email }}</div>
                @endif
                @if ($header->phone)
                    <div style="font-size: 12px;">{{ $header->phone }}</div>
                @endif
            </td>
        </tr>
    </table>

    {{-- Thick Divider Below Header --}}
    <hr style="border: 2px solid #000; margin: 8px 0 14px 0;">

    {{-- SKILLS & INTERESTS --}}
    <div class="section" style="margin-bottom: 15px;">
        <h2 style="border-bottom: 0.8px solid #888; margin-bottom: 8px; font-size: 14px;">SKILLS & INTERESTS</h2>

        <ul style="list-style-type: disc; padding-left: 20px; margin-top: 5px;">
            @if ($skills->technical)
                <li style="margin-bottom: 4px;">
                    <strong>Technical Skills:</strong> {{ $skills->technical }}
                </li>
            @endif
            @if ($skills->soft)
                <li style="margin-bottom: 4px;">
                    <strong>Soft Skills:</strong> {{ $skills->soft }}
                </li>
            @endif
            @if ($skills->interests)
                <li>
                    <strong>Interests:</strong> {{ $skills->interests }}
                </li>
            @endif
        </ul>
    </div>
    {{-- EDUCATION --}}
    @if ($educations && count($educations) > 0)
        <div class="section">
            <h2 style="border-bottom: 0.8px solid #888; margin-bottom: 8px; font-size: 14px;">EDUCATION</h2>
            <ul style="list-style-type: disc; padding-left: 20px;">
                @foreach ($educations as $edu)
                    <li style="margin-bottom: 10px;">
                        <table width="100%">
                            <tr>
                                <td style="font-weight: bold;">{{ $edu->institution }}</td>
                                <td align="right">{{ $edu->year }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <span style="font-weight: bold;">{{ $edu->board }}</span>
                                    {{ $edu->degree }}
                                </td>
                                <td align="right" style="font-weight: bold;">{{ $edu->grade }}</td>
                            </tr>
                        </table>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- PROJECTS --}}
    @if ($projects && count($projects) > 0)
        <div class="section">
            <h2 style="border-bottom: 0.8px solid #888; margin-bottom: 8px; font-size: 14px;">PROJECTS</h2>
            <ul style="padding-left: 15px;">
                @foreach ($projects as $project)
                    <li style="margin-bottom: 10px;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <strong>{{ $project->title }}</strong><br>
                                <em>{{ $project->role }}</em>
                            </div>
                            <div style="text-align: right;">
                                <em>TeamSize:</em> {{ $project->team_size }}<br>
                                {{ $project->duration }}
                            </div>
                        </div>
                        <div style="font-style: italic; color: #333; margin-top: 2px;">
                            Technologies Used: {{ $project->technologies }}
                        </div>
                        <div style="margin-top: 2px;">
                            {{ $project->description }}
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- COURSES & CERTIFICATIONS --}}
    @if ($courses && count($courses) > 0)
        <div class="section">
            <h2 style="border-bottom: 0.8px solid #888; margin-bottom: 8px; font-size: 14px;">COURSES & CERTIFICATIONS
            </h2>
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
            <h2 style="border-bottom: 0.8px solid #888; margin-bottom: 8px; font-size: 14px;">ACHIEVEMENTS & ACTIVITIES
            </h2>
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
            <h2 style="border-bottom: 0.8px solid #888; margin-bottom: 8px; font-size: 14px;">REFERENCES</h2>
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
