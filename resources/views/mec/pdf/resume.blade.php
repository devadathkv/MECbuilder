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
            font-family: Calibre, sans-serif;
            font-size: 10px !important;
            line-height: 1.1;
            color: #000;
        }


        h2 {
            font-size: 10.7px !important;
            text-transform: uppercase;
            border-bottom: 1px solid #000;
            padding-bottom: 1px;
            margin-top: 17px;
            margin-bottom: 6px;
        }

        .section {
            margin-bottom: 12px;
            font-size: 10px !important;
        }

        ul {
            list-style-position: outside;
            /* Keep bullet outside the text block */
            padding-left: 16px;
            /* Controls distance from left edge */
            margin: 0;
        }

        li {
            margin-left: 4px;
            /* Small extra indent from bullet to text */
            padding-left: 4px;
            /* Space between bullet and text */
            text-indent: 0;
            /* Ensure no unwanted indent */
            margin-bottom: 3px;
            /* Optional: spacing between list items */
            line-height: 1.3;
            /* Better readability */
        }

        table {
            width: 100%;
            bord er-collapse: collapse;
        }

        pre,
        code {
            font-family: inherit;
            /* Override monospace if used accidentally */
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

        ul {
            margin: 0;
            padding-left: 16px;
            /* tighten bullets spacing */
        }

        ul.aligned-bullets {
            list-style-type: disc;
            list-style-position: outside;
            padding-left: 16px;
            margin: 0;
        }

        ul.aligned-bullets li {
            display: list-item;
            /* <- Important: keeps the bullet */
            margin-bottom: 2px;
            line-height: 1.1;
        }

        ul.aligned-bullets li .label {
            min-width: 130px;
            display: inline-block;
        }

        @media print {
            .resume-footer {
                position: fixed;
                bottom: 0;
                width: 100%;
                text-align: center;
                color: #000;
                font-size: 11px;
                padding: 8px 0;
            }
        }

        .section a {
            color: #000 !important;
            /* Force link text to black */
            /* font-weight: bold !important; */
            /* Make it bold */
            text-decoration: none !important;
            /* Remove underline */
        }
    </style>
</head>

<body>
    {{-- HEADER --}}
    <table width="100%" style="font-family: Calibre, sans-serif; margin: 0; padding: 0; border-collapse: collapse;">
        <tr>
            <!-- Left Side: Name, Links, DOB -->
            <td style="text-align: left; vertical-align: top;">
                <div style="font-size: 20px; font-weight: bold; margin-bottom: 2px;">
                    {{ $header->name ?? '' }}
                </div>
                <div style="height: 2.5px;"></div>


                <div style="font-size: 12px; color: #2f4f71;; margin-bottom: 2px;">
                    @if ($header->linkedin)
                        <a href="{{ $header->linkedin }}" style="color: #2f4f71; text-decoration: none;">LinkedIn</a>
                    @endif
                    @if ($header->github)
                        <span style="color: #000;"> | </span>
                        <a href="{{ $header->github }}" style="color: #2f4f71; text-decoration: none;">GitHub</a>
                    @endif
                    @if ($header->portfolio)
                        <span style="color: #000;"> | </span>
                        <a href="{{ $header->portfolio }}" style="color: #2f4f71; text-decoration: none;">Portfolio</a>
                    @endif
                </div>
                <div style="height: 2.5px;"></div>
                @if ($header->dob)
                    <div style="font-size: 12px;">
                        DOB –{{ \Carbon\Carbon::parse($header->dob)->format('d/m/Y') }}
                    </div>
                @endif
            </td>

            <!-- Right Side: Email and Phone - now vertically padded -->
            <td style="text-align: right; vertical-align: bottom; padding-top: 0;">

                <div style="font-size: 12px; margin-bottom: 2px;">
                    {{ $header->email ?? '' }}
                </div>
                <div style="height: 2.5px;"></div>
                <div style="font-size: 12px;">
                    {{ $header->phone ?? '' }}
                </div>
            </td>
        </tr>
    </table>
    {{-- Thick Divider Below Header --}}
    <hr style="border: 2px solid #000; margin: 2px 0 4px 0;">
    <div style="height: 3px;"></div>

    {{-- SKILLS & INTERESTS --}}
    <div class="section" style="margin: 2px 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
        <h2
            style="border-bottom: 0.5px solid #000; margin: 1px 0 2px 0; font-size: 10.5px; font-weight: bold; text-transform: uppercase;">
            SKILLS & INTERESTS
        </h2>
        <ul class="aligned-bullets">
            @if ($skills->technical)
                <li><span class="label"><strong>Technical Skills:</strong></span> {{ $skills->technical }}</li>
            @endif
            @if ($skills->soft)
                <li><span class="label"><strong>Soft Skills:</strong></span> {{ $skills->soft }}</li>
            @endif
            @if ($skills->interests)
                <li><span class="label"><strong>Interests:</strong></span> {{ $skills->interests }}</li>
            @endif
        </ul>
    </div>

    <div style="height: 3.4px;"></div>
    {{-- EDUCATION --}}
    @if ($educations && count($educations) > 0)
        <div class="section" style="margin: 2px 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
            <h2
                style="border-bottom: 0.5px solid #000; margin: 1px 0 2px 0; font-size: 10.5px; font-weight: bold; text-transform: uppercase;">
                EDUCATION
            </h2>

            <ul style="list-style-type: disc; padding-left: 18px; margin: 0;">
                @foreach ($educations as $edu)
                    <li style="margin-bottom: 3px; line-height: 1.2;">
                        <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                            <div>
                                <strong>{{ $edu->institution }}</strong>
                                <div>
                                    <span style="font-weight: bold;">{{ $edu->board }}</span>, {{ $edu->degree }}
                                </div>
                            </div>
                            <div style="text-align: right;">
                                {{ $edu->year }}<br>
                                <em>{{ $edu->grade }}</em>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div style="height: 3px;"></div>

    {{-- PROJECTS --}}
    @if ($projects && count($projects) > 0)
        <div class="section" style="margin: 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
            <h2
                style="border-bottom: 0.5px solid #000; margin: 1px 0 2px 0; font-size: 10.5px; font-weight: bold; text-transform: uppercase;">
                PROJECTS
            </h2>


            <ul style="padding-left: 15px; margin: 0;">
                @foreach ($projects as $project)
                    <li style="margin-bottom: 3px;">
                        <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                            <div style="line-height: 1.2;">
                                <strong>{{ $project->title }}</strong><br>
                                <strong><em>{{ $project->role }}</em></strong>
                            </div>
                            <div style="text-align: right; line-height: 1.2;">
                                <strong><em>TeamSize:</em></strong> <em>{{ $project->team_size }}</em><br>
                                <em>{{ $project->duration }}</em>
                            </div>
                        </div>
                        <div style="font-style: italic; color: #333; margin-top: 1px; line-height: 1.2;">
                            <strong>Technologies Used:</strong> {{ $project->technologies }}
                        </div>
                        <div style="margin-top: 1px; line-height: 1.2;">
                            {{ $project->description }}
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <div style="height: 3px;"></div>
    {{-- COURSES & CERTIFICATIONS --}}
    @if ($courses && count($courses) > 0)
        <div class="section" style="margin: 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
            <h2
                style="border-bottom: 0.5px solid #000; margin: 1px 0 2px 0; font-size: 10.5px; font-weight: bold; text-transform: uppercase;">
                COURSES & CERTIFICATIONS
            </h2>

            <ul style="list-style-type: disc; padding-left: 18px; margin: 0;">
                @foreach ($courses as $course)
                    <li style="margin-bottom: 2px; line-height: 1.2;">{!! $course->title !!}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div style="height: 3px;"></div>

    {{-- ACHIEVEMENTS & ACTIVITIES --}}
    @if ($achievements && count($achievements) > 0)
        <div class="section" style="margin: 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
            <h2
                style="border-bottom: 0.5px solid #000; margin: 1px 0 2px 0; font-size: 10.5px; font-weight: bold; text-transform: uppercase;">
                ACHIEVEMENTS & ACTIVITIES
            </h2>
            <ul style="list-style-type: disc; padding-left: 18px; margin: 0;">
                @foreach ($achievements as $achieve)
                    <li style="margin-bottom: 2px; line-height: 1.2;">{!! $achieve->title !!}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div style="height: 3px;"></div>
    {{-- REFERENCES --}}
    @if ($references && count($references) > 0)
        <div class="section" style="margin: 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
            <h2
                style="border-bottom: 0.5px solid #000; margin: 1px 0 2px 0; font-size: 10.5px; font-weight: bold; text-transform: uppercase;">
                REFERENCES
            </h2>

            <ul style="list-style-type: disc; padding-left: 18px; margin: 0; color: #000;">
                @foreach ($references as $ref)
                    <li style="margin-bottom: 2px; line-height: 1.2;">
                        <strong>{{ $ref->name }}</strong>,
                        {{ rtrim($ref->position, ',') }} {{ rtrim($ref->institution, ',') }},
                        Email:
                        <a href="mailto:{{ $ref->email }}"
                            style="color: #2f4f71 !important; text-decoration: !important;">
                            <strong>{{ $ref->email }}</strong>
                        </a>

                    </li>
                @endforeach
            </ul>

        </div>
    @endif
    <div style="height: 3px;"></div>

    <div class="resume-footer">
        Govt. Model Engineering College, Kochi
    </div>



</body>

</html>
