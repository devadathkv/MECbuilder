

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="mb-4">Your Resume Overview</h1>

        
        <div class="mb-5">
            <h3>Header</h3>
            <?php if($header): ?>
                <p><strong>Name:</strong> <?php echo e($header->name); ?></p>
                <p><strong>Email:</strong> <?php echo e($header->email); ?></p>
                <p><strong>GitHub:</strong> <?php echo e($header->github); ?></p>
                <p><strong>LinkedIn:</strong> <?php echo e($header->linkedin); ?></p>
                <p><strong>Portfolio:</strong> <?php echo e($header->portfolio); ?></p>
                <p><strong>Date of Birth:</strong> <?php echo e($header->dob); ?></p>
                <p><strong>Phone:</strong> <?php echo e($header->phone); ?></p>

                <a href="<?php echo e(route('header.edit')); ?>" class="btn btn-primary btn-sm">Edit</a>
                <form action="<?php echo e(route('header.destroy', $header->id)); ?>" method="POST" class="d-inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            <?php else: ?>
                <a href="<?php echo e(route('header.create')); ?>" class="btn btn-success btn-sm">Add Header</a>
            <?php endif; ?>
        </div>

        
        <br>
        <br>
        <div class="mb-5">
            <h4 class="fw-bold border-bottom pb-1">SKILLS & INTERESTS</h4>

            <div class="border p-3 rounded shadow-sm">
                <ul class="list-unstyled">
                    <li>
                        <strong>Technical Skills:</strong>
                        <span><?php echo e($skills->technical ?? 'Not added'); ?></span>
                    </li>
                    <li>
                        <strong>Soft Skills:</strong>
                        <span><?php echo e($skills->soft ?? 'Not added'); ?></span>
                    </li>
                    <li>
                        <strong>Interests:</strong>
                        <span><?php echo e($skills->interests ?? 'Not added'); ?></span>
                    </li>
                </ul>

                <div class="mt-3">
                    <?php if($skills): ?>
                        <a href="<?php echo e(route('skills.edit')); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('skills.create')); ?>" class="btn btn-sm btn-success">Add Skills</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>





        <br>
        <br>
        <div class="mb-5">
            <h3>References</h3>

            <?php if($references && $references->count()): ?>
                <?php $__currentLoopData = $references; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reference): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="mb-3 border rounded p-2">
                        <p><strong>Name:</strong> <?php echo e($reference->name); ?></p>
                        <p><strong>Email:</strong> <a href="mailto:<?php echo e($reference->email); ?>"><?php echo e($reference->email); ?></a>
                        </p>
                        <p><strong>Institution:</strong> <?php echo e($reference->institution); ?></p>

                        <a href="<?php echo e(route('references.edit', $reference->id)); ?>" class="btn btn-primary btn-sm">Edit</a>

                        <form action="<?php echo e(route('references.destroy', $reference->id)); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <p>No references added yet.</p>
            <?php endif; ?>

            
            <a href="<?php echo e(route('references.create')); ?>" class="btn btn-success btn-sm mt-3">Add Another Reference</a>
        </div>

        <br>
        <br>


        <div class="mb-5">
            <h3>Projects</h3>

            <?php if($projects && $projects->count()): ?>
                <ul class="list-unstyled">
                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="mb-4">
                            <div>
                                <strong><?php echo e($project->title); ?></strong><br>
                                <span><?php echo e($project->role); ?></span><br>

                                <em>Technologies Used:</em> <?php echo e($project->technologies); ?><br>

                                <p><?php echo e($project->description); ?></p>

                                <div class="d-flex justify-content-between">
                                    <div><em>Team Size:</em> <?php echo e($project->team_size); ?></div>
                                    <div><em><?php echo e($project->duration); ?></em></div>
                                </div>

                                <a href="<?php echo e(route('projects.edit', $project->id)); ?>"
                                    class="btn btn-primary btn-sm mt-2">Edit</a>

                                <form action="<?php echo e(route('projects.destroy', $project->id)); ?>" method="POST"
                                    class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger btn-sm mt-2">Delete</button>
                                </form>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php else: ?>
                <p>No projects added yet.</p>
            <?php endif; ?>

            <a href="<?php echo e(route('projects.create')); ?>" class="btn btn-success btn-sm mt-3">Add Another Project</a>
        </div>


        <br>
        <br>

        <div class="mb-5">
            <h3>Education</h3>

            <?php if($educations && $educations->count()): ?>
                <ul class="list-unstyled">
                    <?php $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="mb-4">
                            <div>
                                <strong><?php echo e($education->degree); ?></strong><br>
                                <span><?php echo e($education->institution); ?></span><br>
                                <em>Year:</em> <?php echo e($education->year); ?><br>
                                <em>Grade:</em> <?php echo e($education->grade); ?>


                                <div class="mt-2">
                                    <a href="<?php echo e(route('education.edit', $education->id)); ?>"
                                        class="btn btn-primary btn-sm">Edit</a>

                                    <form action="<?php echo e(route('education.destroy', $education->id)); ?>" method="POST"
                                        class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php else: ?>
                <p>No education details added yet.</p>
            <?php endif; ?>

            <a href="<?php echo e(route('education.create')); ?>" class="btn btn-success btn-sm mt-3">Add Education</a>
        </div>

        <br>
        <br>

        <div class="mb-5">
            <h3>Achievements</h3>

            <?php if($achievements && $achievements->count()): ?>
                <ul class="list-unstyled">
                    <?php $__currentLoopData = $achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achievement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="mb-3">
                            <div class="border p-3 rounded shadow-sm">
                                <?php echo $achievement->title; ?>


                                <div class="mt-2">
                                    <a href="<?php echo e(route('achievements.edit', $achievement->id)); ?>"
                                        class="btn btn-sm btn-warning">Edit</a>

                                    <form action="<?php echo e(route('achievements.destroy', $achievement->id)); ?>" method="POST"
                                        class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php else: ?>
                <p>No achievements added yet.</p>
            <?php endif; ?>

            <a href="<?php echo e(route('achievements.create')); ?>" class="btn btn-success btn-sm mt-3">Add Achievement</a>
        </div>

        <br>
        <br>

        <div class="mb-5">
            <h3>Courses & Certifications</h3>

            <?php if($courses && $courses->count()): ?>
                <ul class="list-unstyled">
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="mb-3">
                            <div class="border p-3 rounded shadow-sm">
                                <?php echo $course->title; ?>


                                <div class="mt-2">
                                    <a href="<?php echo e(route('courses.edit', $course->id)); ?>"
                                        class="btn btn-sm btn-warning">Edit</a>

                                    <form action="<?php echo e(route('courses.destroy', $course->id)); ?>" method="POST"
                                        class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php else: ?>
                <p>No courses added yet.</p>
            <?php endif; ?>

            <a href="<?php echo e(route('courses.create')); ?>" class="btn btn-success btn-sm mt-3">Add Course</a>
        </div>










        
        


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\resume_builder\resources\views/mec/landing.blade.php ENDPATH**/ ?>