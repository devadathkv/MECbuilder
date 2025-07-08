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

    
    <div class="section">
        <h2>Header</h2>
        <p><strong>Name:</strong> <?php echo e($header->name ?? ''); ?></p>
        <p><strong>Email:</strong> <?php echo e($header->email ?? ''); ?></p>
        <p><strong>Phone:</strong> <?php echo e($header->phone ?? ''); ?></p>
        <p><strong>LinkedIn:</strong> <?php echo e($header->linkedin ?? ''); ?></p>
        <p><strong>Address:</strong> <?php echo e($header->address ?? ''); ?></p>
    </div>

    
    <div class="section">
        <h2>Skills</h2>
        <p><strong>Technical:</strong> <?php echo e($skills->technical ?? ''); ?></p>
        <p><strong>Soft Skills:</strong> <?php echo e($skills->soft ?? ''); ?></p>
        <p><strong>Interests:</strong> <?php echo e($skills->interests ?? ''); ?></p>
    </div>


    
    <div class="section">
        <h2>Education</h2>
        <ul>
            <?php $__currentLoopData = $education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <strong><?php echo e($edu->degree); ?></strong> from <?php echo e($edu->institution); ?> (<?php echo e($edu->year); ?>) - Grade:
                    <?php echo e($edu->grade); ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>

    
    <div class="section">
        <h2>Projects</h2>
        <ul>
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <strong><?php echo e($project->title); ?></strong>: <?php echo e($project->description); ?>

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