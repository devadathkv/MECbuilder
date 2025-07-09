a<!DOCTYPE html>
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
    
    <table width="100%">
        <tr valign="top">
            <td align="left" style="width: 60%;">
                <div style="font-size: 14px; font-weight: bold;"><?php echo e($header->name ?? ''); ?></div>

                <div style="margin-top: 4px;">
                    <?php if($header->linkedin): ?>
                        <a href="<?php echo e($header->linkedin); ?>" style="color: #007bff; text-decoration: none;"
                            target="_blank">LinkedIn</a>
                    <?php endif; ?>
                    <?php if($header->github): ?>
                        |
                        <a href="<?php echo e($header->github); ?>" style="color: #007bff; text-decoration: none;"
                            target="_blank">GitHub</a>
                    <?php endif; ?>
                    <?php if($header->portfolio): ?>
                        |
                        <a href="<?php echo e($header->portfolio); ?>" style="color: #007bff; text-decoration: none;"
                            target="_blank">Portfolio</a>
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
        <ul style="list-style-type: '● '; padding-left: 20px;">
            <li><strong>Technical Skills:</strong> <?php echo e($skills->technical ?? ''); ?></li>
            <li><strong>Soft Skills:</strong> <?php echo e($skills->soft ?? ''); ?></li>
            <li><strong>Interests:</strong> <?php echo e($skills->interests ?? ''); ?></li>
        </ul>
    </div>

    
    <?php if($education && count($education) > 0): ?>
        <div class="section">
            <h2>Education</h2>
            <?php $__currentLoopData = $education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <table width="100%" style="margin-bottom: 10px;">
                    <tr>
                        <td style="font-weight: bold;"><?php echo e($edu->degree); ?></td>
                        <td align="right"><?php echo e($edu->year); ?></td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo e($edu->institution); ?><br>
                            <?php if(!empty($edu->location)): ?>
                                <i><?php echo e($edu->location); ?></i>
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
            <h2>Projects</h2>
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <table width="100%" style="margin-bottom: 10px; font-size: 11px;">
                    <tr>
                        <td colspan="2" style="font-weight: bold;"><?php echo e($project->title); ?></td>
                        <td align="right" style="font-size: 10pt;">
                            <div><em>Team Size:</em> <?php echo e($project->team_size); ?></div>
                            <div><?php echo e($project->duration); ?></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="font-style: italic;"><?php echo e($project->role); ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="font-style: italic;">
                            <span style="font-weight: normal; color: #444;">Technologies Used:</span>
                            <?php echo e($project->technologies); ?>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><?php echo e($project->description); ?></td>
                    </tr>
                </table>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>




    
    
    <?php if($courses && count($courses) > 0): ?>
        <div class="section">
            <h2>Courses / Certifications</h2>
            <ul>
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo $course->title; ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    
    
    <?php if($achievements && count($achievements) > 0): ?>
        <div class="section">
            <h2>Achievements</h2>
            <ul>
                <?php $__currentLoopData = $achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achieve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo $achieve->title; ?></li> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    
    <?php if($references && count($references) > 0): ?>
        <div class="section">
            <h2>References</h2>
            <ul>
                <?php $__currentLoopData = $references; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <?php echo e($ref->email); ?>

                        <?php if($ref->position): ?>
                            - <?php echo e($ref->position); ?>

                        <?php endif; ?>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\resume_builder\resources\views/mec/pdf/resume.blade.php ENDPATH**/ ?>