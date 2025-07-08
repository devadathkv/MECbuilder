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
    
    <table width="100%" style="font-family: DejaVu Sans, sans-serif; font-size: 12px;">
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
                <table width="100%" style="margin-bottom: 12px; font-size: 12px;">
                    <tr>
                        
                        <td style="width: 70%;">
                            <strong><?php echo e($edu->degree); ?></strong><br>
                            <?php echo e($edu->institution); ?><br>
                            <?php if(!empty($edu->location)): ?>
                                <span style="font-style: italic;"><?php echo e($edu->location); ?></span>
                            <?php endif; ?>
                        </td>

                        
                        <td style="width: 30%; text-align: right;">
                            <strong><?php echo e($edu->year); ?></strong><br>
                            <strong><?php echo e($edu->grade); ?></strong>
                        </td>
                    </tr>
                </table>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>



    
    <div class="section">
        <h2 style="border-bottom: 1px solid #000; padding-bottom: 4px; font-size: 13px; text-transform: uppercase;">
            Projects</h2>
        <ul style="list-style-position: inside; padding-left: 0; margin: 0;">
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li style="margin: 0 0 4px 0; font-size: 10.5pt; line-height: 1.2;">
                    <div style="display: flex; justify-content: space-between;">
                        <strong><?php echo e($project->title); ?></strong>
                        <div style="font-size: 10pt; text-align: right;">
                            <div><em>Team Size:</em> <?php echo e($project->team_size); ?></div>
                            <div><?php echo e($project->duration); ?></div>
                        </div>
                    </div>
                    <div style="font-style: italic;">
                        <?php echo e($project->role); ?>

                    </div>
                    <div style="font-style: italic;">
                        <span style="font-weight: normal; color: #444;">Technologies Used:</span>
                        <?php echo e($project->technologies); ?>

                    </div>
                    <div><?php echo e($project->description); ?></div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>




    
    
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

    
    <div class="section">
        <h2>References</h2>
        <ul>
            <?php $__currentLoopData = $references; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($ref->email); ?> - <?php echo e($ref->position); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\resume_builder\resources\views/mec/pdf/resume.blade.php ENDPATH**/ ?>