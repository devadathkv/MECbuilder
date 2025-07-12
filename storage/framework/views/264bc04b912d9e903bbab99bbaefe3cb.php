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
            font-size: 10.7px;
            line-height: 1.1;
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
            line-height: 1.3;
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
    
    <table width="100%" style="font-family: Arial, sans-serif; margin-bottom: 5px;">
        <tr>
            <!-- Left Side: Name, Links, DOB -->
            <td style="text-align: left; vertical-align: top;">
                <div style="font-size: 20px; font-weight: bold; margin-bottom: 2px;">
                    <?php echo e($header->name ?? ''); ?>

                </div>

                <div style="font-size: 12px; color: #007bff; margin-bottom: 2px;">
                    <?php if($header->linkedin): ?>
                        <a href="<?php echo e($header->linkedin); ?>" style="color: #007bff; text-decoration: none;">LinkedIn</a>
                    <?php endif; ?>
                    <?php if($header->github): ?>
                        <span style="color: #000;"> | </span>
                        <a href="<?php echo e($header->github); ?>" style="color: #007bff; text-decoration: none;">GitHub</a>
                    <?php endif; ?>
                    <?php if($header->portfolio): ?>
                        <span style="color: #000;"> | </span>
                        <a href="<?php echo e($header->portfolio); ?>" style="color: #007bff; text-decoration: none;">Portfolio</a>
                    <?php endif; ?>
                </div>


                <?php if($header->dob): ?>
                    <div style="font-size: 12px;">
                        DOB –<?php echo e(\Carbon\Carbon::parse($header->dob)->format('d/m/Y')); ?>

                    </div>
                <?php endif; ?>
            </td>

            <!-- Right Side: Email and Phone - now vertically padded -->
            <td style="text-align: right; vertical-align: top; padding-top: 30px;">
                <div style="font-size: 12px; margin-bottom: 2px;">
                    <?php echo e($header->email ?? ''); ?>

                </div>
                <div style="font-size: 12px;">
                    <?php echo e($header->phone ?? ''); ?>

                </div>
            </td>
        </tr>
    </table>
    
    <hr style="border: 2px solid #000; margin: 4px 0 10px 0;">
    
    <div class="section" style="margin: 2px 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
        <h2
            style="border-bottom: 0.5px solid #000; margin: 1px 0 2px 0; font-size: 10.5px; font-weight: bold; text-transform: uppercase;">
            SKILLS & INTERESTS
        </h2>
        <ul class="aligned-bullets">
            <?php if($skills->technical): ?>
                <li><span class="label"><strong>Technical Skills:</strong></span> <?php echo e($skills->technical); ?></li>
            <?php endif; ?>
            <?php if($skills->soft): ?>
                <li><span class="label"><strong>Soft Skills:</strong></span> <?php echo e($skills->soft); ?></li>
            <?php endif; ?>
            <?php if($skills->interests): ?>
                <li><span class="label"><strong>Interests:</strong></span> <?php echo e($skills->interests); ?></li>
            <?php endif; ?>
        </ul>
    </div>



    <div style="height: 2px;"></div>
    
    <?php if($educations && count($educations) > 0): ?>
        <div class="section" style="margin: 2px 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
            <h2
                style="border-bottom: 0.5px solid #000; margin: 1px 0 2px 0; font-size: 10.5px; font-weight: bold; text-transform: uppercase;">
                EDUCATION
            </h2>

            <ul style="list-style-type: disc; padding-left: 18px; margin: 0;">
                <?php $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li style="margin-bottom: 3px; line-height: 1.2;">
                        <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                            <div>
                                <strong><?php echo e($edu->institution); ?></strong>
                                <div>
                                    <span style="font-weight: bold;"><?php echo e($edu->board); ?></span>, <?php echo e($edu->degree); ?>

                                </div>
                            </div>
                            <div style="text-align: right;">
                                <?php echo e($edu->year); ?><br>
                                <em><?php echo e($edu->grade); ?></em>
                            </div>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <div style="height: 2px;"></div>

    
    <?php if($projects && count($projects) > 0): ?>
        <div class="section" style="margin: 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
            <h2
                style="border-bottom: 0.5px solid #000; margin: 1px 0 2px 0; font-size: 10.5px; font-weight: bold; text-transform: uppercase;">
                PROJECTS
            </h2>


            <ul style="padding-left: 15px; margin: 0;">
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li style="margin-bottom: 3px;">
                        <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                            <div style="line-height: 1.2;">
                                <strong><?php echo e($project->title); ?></strong><br>
                                <strong><em><?php echo e($project->role); ?></em></strong>
                            </div>
                            <div style="text-align: right; line-height: 1.2;">
                                <strong><em>TeamSize:</em></strong> <em><?php echo e($project->team_size); ?></em><br>
                                <em><?php echo e($project->duration); ?></em>
                            </div>
                        </div>
                        <div style="font-style: italic; color: #333; margin-top: 1px; line-height: 1.2;">
                            <strong>Technologies Used:</strong> <?php echo e($project->technologies); ?>

                        </div>
                        <div style="margin-top: 1px; line-height: 1.2;">
                            <?php echo e($project->description); ?>

                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <div style="height: 2px;"></div>
    
    <?php if($courses && count($courses) > 0): ?>
        <div class="section" style="margin: 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
            <h2
                style="border-bottom: 0.5px solid #000; margin: 1px 0 2px 0; font-size: 10.5px; font-weight: bold; text-transform: uppercase;">
                COURSES & CERTIFICATIONS
            </h2>

            <ul style="list-style-type: disc; padding-left: 18px; margin: 0;">
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li style="margin-bottom: 2px; line-height: 1.2;"><?php echo $course->title; ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <div style="height: 2px;"></div>

    
    <?php if($achievements && count($achievements) > 0): ?>
        <div class="section" style="margin: 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
            <h2
                style="border-bottom: 0.5px solid #000; margin: 1px 0 2px 0; font-size: 10.5px; font-weight: bold; text-transform: uppercase;">
                ACHIEVEMENTS & ACTIVITIES
            </h2>
            <ul style="list-style-type: disc; padding-left: 18px; margin: 0;">
                <?php $__currentLoopData = $achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achieve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li style="margin-bottom: 2px; line-height: 1.2;"><?php echo $achieve->title; ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <div style="height: 2px;"></div>
    
    <?php if($references && count($references) > 0): ?>
        <div class="section" style="margin: 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
            <h2
                style="border-bottom: 0.5px solid #000; margin: 1px 0 2px 0; font-size: 10.5px; font-weight: bold; text-transform: uppercase;">
                REFERENCES
            </h2>


            <ul style="list-style-type: disc; padding-left: 18px; margin: 0;">
                <?php $__currentLoopData = $references; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li style="margin-bottom: 2px; line-height: 1.2;">
                        <strong><?php echo e($ref->name); ?></strong>
                        <?php echo e(rtrim($ref->position, ',')); ?> at <?php echo e(rtrim($ref->institution, ',')); ?>

                        Email: <a href="mailto:<?php echo e($ref->email); ?>" style="color: #004ffb; text-decoration: none;">
                            <?php echo e($ref->email); ?>

                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="resume-footer">
        Govt. Model Engineering College, Kochi
    </div>



</body>

</html>
<?php /**PATH C:\xampp\htdocs\resume_builder\resources\views/mec/pdf/resume.blade.php ENDPATH**/ ?>