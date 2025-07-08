

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Add Project</h2>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('projects.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="title" class="form-label">Project Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Your Role</label>
            <input type="text" name="role" id="role" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="technologies" class="form-label">Technologies Used (comma-separated)</label>
            <input type="text" name="technologies" id="technologies" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Project Description</label>
            <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="team_size" class="form-label">Team Size</label>
            <input type="number" name="team_size" id="team_size" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label">Duration (e.g., "2 Weeks", "1 Month")</label>
            <input type="text" name="duration" id="duration" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save Project</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\resume_builder\resources\views/mec/projects/create.blade.php ENDPATH**/ ?>