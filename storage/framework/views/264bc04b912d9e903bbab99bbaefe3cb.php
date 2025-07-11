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
                        <strong>DOB –</strong> <?php echo e(\Carbon\Carbon::parse($header->dob)->format('d/m/Y')); ?>

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

    
    <div class="section" style="margin-bottom: 15px;">
        <h2 style="border-bottom: 0.8px solid #888; margin-bottom: 8px; font-size: 14px;">SKILLS & INTERESTS</h2>

        <ul style="list-style-type: disc; padding-left: 20px; margin-top: 5px;">
            <?php if($skills->technical): ?>
                <li style="margin-bottom: 4px;">
                    <strong>Technical Skills:</strong> <?php echo e($skills->technical); ?>

                </li>
            <?php endif; ?>
            <?php if($skills->soft): ?>
                <li style="margin-bottom: 4px;">
                    <strong>Soft Skills:</strong> <?php echo e($skills->soft); ?>

                </li>
            <?php endif; ?>
            <?php if($skills->interests): ?>
                <li>
                    <strong>Interests:</strong> <?php echo e($skills->interests); ?>

                </li>
            <?php endif; ?>
        </ul>
    </div>
    
    <?php if($educations && count($educations) > 0): ?>
        <div class="section">
            <h2 style="border-bottom: 0.8px solid #888; margin-bottom: 8px; font-size: 14px;">EDUCATION</h2>
            <ul style="list-style-type: disc; padding-left: 20px;">
                <?php $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li style="margin-bottom: 6px;">
                        <table width="100%">
                            <tr>
                                <td style="font-weight: bold;"><?php echo e($edu->institution); ?></td>
                                <td align="right"><?php echo e($edu->year); ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <span style="font-weight: bold;"><?php echo e($edu->board); ?></span>
                                    <?php echo e($edu->degree); ?>

                                </td>
                                <td align="right" style="font-weight: bold;"><?php echo e($edu->grade); ?></td>
                            </tr>
                        </table>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    
    <?php if($projects && count($projects) > 0): ?>
        <div class="section">
            <h2 style="border-bottom: 0.8px solid #888; margin-bottom: 8px; font-size: 14px;">PROJECTS</h2>
            <ul style="padding-left: 15px;">
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li style="margin-bottom: 6px;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <strong><?php echo e($project->title); ?></strong><br>
                                <em><?php echo e($project->role); ?></em>
                            </div>
                            <div style="text-align: right;">
                                <em>TeamSize:</em> <?php echo e($project->team_size); ?><br>
                                <?php echo e($project->duration); ?>

                            </div>
                        </div>
                        <div style="font-style: italic; color: #333; margin-top: 2px;">
                            Technologies Used: <?php echo e($project->technologies); ?>

                        </div>
                        <div style="margin-top: 2px;">
                            <?php echo e($project->description); ?>

                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    
    <?php if($courses && count($courses) > 0): ?>
        <div class="section">
            <h2 style="border-bottom: 0.8px solid #888; margin-bottom: 8px; font-size: 14px;">
                COURSES & CERTIFICATIONS
            </h2>
            <ul style="list-style-type: disc; padding-left: 20px; margin: 0;">
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo $course->title; ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    
    <?php if($achievements && count($achievements) > 0): ?>
        <div class="section">
            <h2 style="border-bottom: 0.8px solid #888; margin-bottom: 8px; font-size: 14px;">ACHIEVEMENTS & ACTIVITIES
            </h2>
            <ul style="list-style-type: disc; padding-left: 20px;">
                <?php $__currentLoopData = $achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achieve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo $achieve->title; ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    
    <?php if($references && count($references) > 0): ?>
        <div class="section">
            <h2 style="border-bottom: 0.8px solid #888; margin-bottom: 8px; font-size: 14px;">REFERENCES</h2>
            <ul style="list-style-type: disc; padding-left: 20px;">
                <?php $__currentLoopData = $references; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li style="margin-bottom: 6px;">
                        <strong><?php echo e($ref->name); ?></strong>,
                        <?php echo e($ref->position); ?>,
                        <?php echo e($ref->institution); ?>,
                        Email ID: <a href="mailto:<?php echo e($ref->email); ?>"><?php echo e($ref->email); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\resume_builder\resources\views/mec/pdf/resume.blade.php ENDPATH**/ ?>