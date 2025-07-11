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
                        | <a href="<?php echo e($header->github); ?>" style="color: #007bff; text-decoration: none;">GitHub</a>
                    <?php endif; ?>
                    <?php if($header->portfolio): ?>
                        | <a href="<?php echo e($header->portfolio); ?>"
                            style="color: #007bff; text-decoration: none;">Portfolio</a>
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
    
    <hr style="border: 2px solid #000; margin: 8px 0 14px 0;">
    
    <div class="section" style="margin: 2px 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
        <h2
            style="border-bottom: 0.5px solid #000; margin: 1px 0 2px 0; font-size: 12px; font-weight: bold; text-transform: uppercase;">
            SKILLS & INTERESTS
        </h2>
        <table style="width: 100%; border-collapse: collapse; margin: 0; padding: 0;">
            <?php if($skills->technical): ?>
                <tr>
                    <td style="width: 130px; vertical-align: top; font-weight: bold; padding: 0;">• Technical Skills:
                    </td>
                    <td style="padding: 0;"><?php echo e($skills->technical); ?></td>
                </tr>
            <?php endif; ?>
            <?php if($skills->soft): ?>
                <tr>
                    <td style="width: 130px; vertical-align: top; font-weight: bold; padding: 0;">• Soft Skills:</td>
                    <td style="padding: 0;"><?php echo e($skills->soft); ?></td>
                </tr>
            <?php endif; ?>
            <?php if($skills->interests): ?>
                <tr>
                    <td style="width: 130px; vertical-align: top; font-weight: bold; padding: 0;">• Interests:</td>
                    <td style="padding: 0;"><?php echo e($skills->interests); ?></td>
                </tr>
            <?php endif; ?>
        </table>
    </div>
    <div style="height: 2px;"></div>
    
    <?php if($educations && count($educations) > 0): ?>
        <div class="section" style="margin: 2px 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
            <h2
                style="border-bottom: 0.5px solid #888; margin: 1px 0 3px 0; font-size: 12px; font-weight: bold; text-transform: uppercase;">
                EDUCATION
            </h2>

            <?php $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <table width="100%" style="margin: 0 0 3px 5px; border-collapse: collapse; font-size: 11.5px;">
                    <tr>
                        <td style="font-weight: bold; padding: 0;">
                            • <?php echo e($edu->institution); ?>

                        </td>
                        <td align="right" style="font-weight: bold; padding: 0;">
                            <?php echo e($edu->year); ?>

                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0;">
                            <span style="font-weight: bold;"><?php echo e($edu->board); ?>,</span> <?php echo e($edu->degree); ?>

                        </td>
                        <td align="right" style="font-style: italic; padding: 0;"><?php echo e($edu->grade); ?></td>
                    </tr>
                </table>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
<div style="height: 2px;"></div>

    
    <?php if($projects && count($projects) > 0): ?>
        <div class="section" style="margin: 0; font-family: Arial, Helvetica, sans-serif; font-size: 11.5px;">
            <h2
                style="border-bottom: 0.5px solid #888; margin: 2px 0 4px 0; font-size: 12px; font-weight: bold; text-transform: uppercase;">
                PROJECTS
            </h2>

            <ul style="padding-left: 15px; margin: 0;">
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li style="margin-bottom: 3px;">
                        <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                            <div style="line-height: 1.2;">
                                <strong><?php echo e($project->title); ?></strong><br>
                                <em><?php echo e($project->role); ?></em>
                            </div>
                            <div style="text-align: right; line-height: 1.2;">
                                <em>TeamSize:</em> <?php echo e($project->team_size); ?><br>
                                <em><?php echo e($project->duration); ?></em>
                            </div>
                        </div>
                        <div style="font-style: italic; color: #333; margin-top: 1px; line-height: 1.2;">
                            Technologies Used: <?php echo e($project->technologies); ?>

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
                style="border-bottom: 0.5px solid #888; margin: 2px 0 4px 0; font-size: 12px; font-weight: bold; text-transform: uppercase;">
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
                style="border-bottom: 0.5px solid #888; margin: 2px 0 4px 0; font-size: 12px; font-weight: bold; text-transform: uppercase;">
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
                style="border-bottom: 0.5px solid #888; margin: 2px 0 4px 0; font-size: 12px; font-weight: bold; text-transform: uppercase;">
                REFERENCES
            </h2>

            <ul style="list-style-type: disc; padding-left: 18px; margin: 0;">
                <?php $__currentLoopData = $references; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li style="margin-bottom: 2px; line-height: 1.2;">
                        <strong><?php echo e($ref->name); ?></strong>,
                        <?php echo e($ref->position); ?>,
                        <?php echo e($ref->institution); ?>,
                        Email ID: <a href="mailto:<?php echo e($ref->email); ?>" style="color: #000; text-decoration: none;">
                            <?php echo e($ref->email); ?>

                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\resume_builder\resources\views/mec/pdf/resume.blade.php ENDPATH**/ ?>