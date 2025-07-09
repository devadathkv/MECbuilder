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
    
    <table width="100%">
        <tr valign="top">
            <td align="left" style="width: 60%;">
                <div style="font-size: 14px; font-weight: bold;"><?php echo e($header->name ?? ''); ?></div>

                <div style="margin-top: 4px;">
                    <?php if($header->linkedin): ?>
                        <a href="<?php echo e($header->linkedin); ?>" style="color: #000; text-decoration: none;">LinkedIn</a> |
                    <?php endif; ?>
                    <?php if($header->github): ?>
                        <a href="<?php echo e($header->github); ?>" style="color: #000; text-decoration: none;">GitHub</a> |
                    <?php endif; ?>
                    <?php if($header->portfolio): ?>
                        <a href="<?php echo e($header->portfolio); ?>" style="color: #000; text-decoration: none;">Portfolio</a>
                    <?php endif; ?>
                </div>

                <?php if($header->dob): ?>
                    <div style="margin-top: 5px;"><strong>DOB –</strong>
                        <?php echo e(\Carbon\Carbon::parse($header->dob)->format('d/m/Y')); ?></div>
                <?php endif; ?>
            </td>

            <td align="right" style="width: 40%;">
                <?php if($header->email): ?>
                    <div style="margin-bottom: 2px;"><?php echo e($header->email); ?></div>
                <?php endif; ?>
                <?php if($header->phone): ?>
                    <div><?php echo e($header->phone); ?></div>
                <?php endif; ?>
            </td>
        </tr>
    </table>

    
    <div class="section">
        <h2>SKILLS & INTERESTS</h2>
        <ul style="list-style-type: none; padding-left: 0;">
            <?php if($skills->technical): ?>
                <li><strong>Technical Skills:</strong> <?php echo e($skills->technical); ?></li>
            <?php endif; ?>
            <?php if($skills->soft): ?>
                <li><strong>Soft Skills:</strong> <?php echo e($skills->soft); ?></li>
            <?php endif; ?>
            <?php if($skills->interests): ?>
                <li><strong>Interests:</strong> <?php echo e($skills->interests); ?></li>
            <?php endif; ?>
        </ul>
    </div>

    
    <?php if($education && count($education) > 0): ?>
        <div class="section">
            <h2>EDUCATION</h2>
            <?php $__currentLoopData = $education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <table width="100%" style="margin-bottom: 10px;">
                    <tr>
                        <td style="font-weight: bold;"><?php echo e($edu->institution); ?></td>
                        <td align="right"><?php echo e($edu->year); ?></td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo e($edu->degree); ?><br>
                            <?php if($edu->board): ?>
                                <?php echo e($edu->board); ?>,
                            <?php endif; ?>
                        </td>
                        <td align="right" style="font-weight: bold;"><?php echo e($edu->grade); ?></td>
                    </tr>
                </table>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>

    
    <?php if($projects && count($projects) > 0): ?>
        <div class="section">
            <h2>PROJECTS</h2>
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <table width="100%" class="project-table">
                    <tr>
                        <td class="project-title"><?php echo e($project->title); ?></td>
                        <td align="right"><em>TeamSize:</em> <?php echo e($project->team_size); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><?php echo e($project->role); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><?php echo e($project->duration); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="project-details">Technologies Used: <?php echo e($project->technologies); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><?php echo e($project->description); ?></td>
                    </tr>
                </table>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>

    
    <?php if($courses && count($courses) > 0): ?>
        <div class="section">
            <h2>COURSES & CERTIFICATIONS</h2>
            <ul style="list-style-type: none; padding-left: 0;">
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>- <?php echo e($course->title); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    
    <?php if($achievements && count($achievements) > 0): ?>
        <div class="section">
            <h2>ACHIEVEMENTS & ACTIVITIES</h2>
            <ul style="list-style-type: none; padding-left: 0;">
                <?php $__currentLoopData = $achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achieve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>- <?php echo $achieve->title; ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    
    <?php if($references && count($references) > 0): ?>
        <div class="section">
            <h2>REFERENCES</h2>
            <ul style="list-style-type: none; padding-left: 0;">
                <?php $__currentLoopData = $references; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <?php echo e($ref->name); ?>, <?php echo e($ref->position); ?>, <?php echo e($ref->institution); ?>, Email:
                        <?php echo e($ref->email); ?>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if($education && count($education) > 0): ?>
        <div style="text-align: center; margin-top: 20px;">
            <?php echo e($education[0]->institution ?? ''); ?>

        </div>
    <?php endif; ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\resume_builder\resources\views/mec/pdf/resume.blade.php ENDPATH**/ ?>