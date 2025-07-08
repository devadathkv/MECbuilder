

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Edit Project</h2>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('projects.update', $project->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label for="title" class="form-label">Project Title</label>
            <input type="text" name="title" id="title" class="form-control"
                value="<?php echo e(old('title', $project->title)); ?>" required>
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <input type="text" name="role" id="role" class="form-control"
                value="<?php echo e(old('role', $project->role)); ?>" required>
        </div>

        <div class="mb-3">
            <label for="technologies" class="form-label">Technologies Used</label>
            <input type="text" name="technologies" id="technologies" class="form-control"
                value="<?php echo e(old('technologies', $project->technologies)); ?>" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Project Description</label>
            <textarea name="description" id="description" class="form-control" rows="3"><?php echo e(old('description', $project->description)); ?></textarea>
        </div>

        <div class="mb-3">
            <label for="team_size" class="form-label">Team Size</label>
            <input type="number" name="team_size" id="team_size" class="form-control"
                value="<?php echo e(old('team_size', $project->team_size)); ?>" required>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label">Duration</label>
            <input type="text" name="duration" id="duration" class="form-control"
                value="<?php echo e(old('duration', $project->duration)); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Project</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\resume_builder\resources\views/mec/projects/edit.blade.php ENDPATH**/ ?>