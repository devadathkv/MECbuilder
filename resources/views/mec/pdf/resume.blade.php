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
            line-height: 1.3;
            color: #000;
        }

        h2 {
            font-size: 13px;
            text-transform: uppercase;
            border-bottom: 1px solid #000;
            padding-bottom: 1px;
            margin-top: 17px;
            margin-bottom: 6px;
        }

        .section {
            margin-bottom: 12px;
        }

        ul {
            padding-left: 16px;
            margin-top: 0;
            margin-bottom: 0;
        }

        li {
            margin-bottom: 2px;
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
    <table width="100%" style="font-family: Arial, sans-serif; margin-bottom: 5px;">
        <tr>
            <!-- Left Side: Name, Links, DOB -->
            <td style="text-align: left; vertical-align: top;">
                <div style="font-size: 20px; font-weight: bold; margin-bottom: 2px;">
                    {{ $header->name ?? '' }}
                </div>

                <div style="font-size: 12px; color: #007bff; margin-bottom: 2px;">
                    @if ($header->linkedin)
                        <a href="{{ $header->linkedin }}" style="color: #007bff; text-decoration: none;">LinkedIn</a>
                    @endif
                    @if ($header->github)
                        | <a href="{{ $header->github }}" style="color: #007bff; text-decoration: none;">GitHub</a>
                    @endif
                    @if ($header->portfolio)
                        | <a href="{{ $header->portfolio }}"
                            style="color: #007bff; text-decoration: none;">Portfolio</a>
                    @endif
                </div>

                @if ($header->dob)
                    <div style="font-size: 12px;">
                        DOB –{{ \Carbon\Carbon::parse($header->dob)->format('d/m/Y') }}
                    </div>
                @endif
            </td>

            <!-- Right Side: Email and Phone - now vertically padded -->
            <td style="text-align: right; vertical-align: top; padding-top: 30px;">
                <div style="font-size: 12px; margin-bottom: 2px;">
                    {{ $header->email ?? '' }}
                </div>
                <div style="font-size: 12px;">
                    {{ $header->phone ?? '' }}
                </div>
            </td>
        </tr>
    </table>
    {{-- Thick Divider Below Header --}}
    <hr style="border: 2px solid #000; margin: 8px 0 14px 0;">
    {{-- SKILLS & INTERESTS --}}
    <div class="section" style="margin: 2px 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
        <h2
            style="border-bottom: 0.5px solid #000; margin: 1px 0 2px 0; font-size: 12px; font-weight: bold; text-transform: uppercase;">
            SKILLS & INTERESTS
        </h2>
        <table style="width: 100%; border-collapse: collapse; margin: 0; padding: 0;">
            @if ($skills->technical)
                <tr>
                    <td style="width: 130px; vertical-align: top; font-weight: bold; padding: 0;">• Technical Skills:
                    </td>
                    <td style="padding: 0;">{{ $skills->technical }}</td>
                </tr>
            @endif
            @if ($skills->soft)
                <tr>
                    <td style="width: 130px; vertical-align: top; font-weight: bold; padding: 0;">• Soft Skills:</td>
                    <td style="padding: 0;">{{ $skills->soft }}</td>
                </tr>
            @endif
            @if ($skills->interests)
                <tr>
                    <td style="width: 130px; vertical-align: top; font-weight: bold; padding: 0;">• Interests:</td>
                    <td style="padding: 0;">{{ $skills->interests }}</td>
                </tr>
            @endif
        </table>
    </div>
    <div style="height: 2px;"></div>
    {{-- EDUCATION --}}
    @if ($educations && count($educations) > 0)
        <div class="section" style="margin: 2px 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
            <h2
                style="border-bottom: 0.5px solid #888; margin: 1px 0 3px 0; font-size: 12px; font-weight: bold; text-transform: uppercase;">
                EDUCATION
            </h2>

            @foreach ($educations as $edu)
                <table width="100%" style="margin: 0 0 3px 5px; border-collapse: collapse; font-size: 11.5px;">
                    <tr>
                        <td style="font-weight: bold; padding: 0;">
                            • {{ $edu->institution }}
                        </td>
                        <td align="right" style="font-weight: bold; padding: 0;">
                            {{ $edu->year }}
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0;">
                            <span style="font-weight: bold;">{{ $edu->board }},</span> {{ $edu->degree }}
                        </td>
                        <td align="right" style="font-style: italic; padding: 0;">{{ $edu->grade }}</td>
                    </tr>
                </table>
            @endforeach
        </div>
    @endif
<div style="height: 2px;"></div>

    {{-- PROJECTS --}}
    @if ($projects && count($projects) > 0)
        <div class="section" style="margin: 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
            <h2
                style="border-bottom: 0.5px solid #888; margin: 2px 0 4px 0; font-size: 12px; font-weight: bold; text-transform: uppercase;">
                PROJECTS
            </h2>

            <ul style="padding-left: 15px; margin: 0;">
                @foreach ($projects as $project)
                    <li style="margin-bottom: 3px;">
                        <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                            <div style="line-height: 1.2;">
                                <strong>{{ $project->title }}</strong><br>
                                <em>{{ $project->role }}</em>
                            </div>
                            <div style="text-align: right; line-height: 1.2;">
                                <em>TeamSize:</em> {{ $project->team_size }}<br>
                                <em>{{ $project->duration }}</em>
                            </div>
                        </div>
                        <div style="font-style: italic; color: #333; margin-top: 1px; line-height: 1.2;">
                            Technologies Used: {{ $project->technologies }}
                        </div>
                        <div style="margin-top: 1px; line-height: 1.2;">
                            {{ $project->description }}
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
<div style="height: 2px;"></div>
    {{-- COURSES & CERTIFICATIONS --}}
    @if ($courses && count($courses) > 0)
        <div class="section" style="margin: 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
            <h2
                style="border-bottom: 0.5px solid #888; margin: 2px 0 4px 0; font-size: 12px; font-weight: bold; text-transform: uppercase;">
                COURSES & CERTIFICATIONS
            </h2>

            <ul style="list-style-type: disc; padding-left: 18px; margin: 0;">
                @foreach ($courses as $course)
                    <li style="margin-bottom: 2px; line-height: 1.2;">{!! $course->title !!}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div style="height: 2px;"></div>

    {{-- ACHIEVEMENTS & ACTIVITIES --}}
    @if ($achievements && count($achievements) > 0)
        <div class="section" style="margin: 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
            <h2
                style="border-bottom: 0.5px solid #888; margin: 2px 0 4px 0; font-size: 12px; font-weight: bold; text-transform: uppercase;">
                ACHIEVEMENTS & ACTIVITIES
            </h2>

            <ul style="list-style-type: disc; padding-left: 18px; margin: 0;">
                @foreach ($achievements as $achieve)
                    <li style="margin-bottom: 2px; line-height: 1.2;">{!! $achieve->title !!}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div style="height: 2px;"></div>
    {{-- REFERENCES --}}
    @if ($references && count($references) > 0)
        <div class="section" style="margin: 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
            <h2
                style="border-bottom: 0.5px solid #888; margin: 2px 0 4px 0; font-size: 12px; font-weight: bold; text-transform: uppercase;">
                REFERENCES
            </h2>

            <ul style="list-style-type: disc; padding-left: 18px; margin: 0;">
                @foreach ($references as $ref)
                    <li style="margin-bottom: 2px; line-height: 1.2;">
                        <strong>{{ $ref->name }}</strong>,
                        {{ $ref->position }},
                        {{ $ref->institution }},
                        Email ID: <a href="mailto:{{ $ref->email }}" style="color: #000; text-decoration: none;">
                            {{ $ref->email }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif


</body>

</html>
