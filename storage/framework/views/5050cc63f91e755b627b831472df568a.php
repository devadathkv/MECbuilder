

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Edit Education</h2>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('education.update', $education->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label for="degree" class="form-label">Degree</label>
            <input type="text" name="degree" id="degree" class="form-control"
                value="<?php echo e(old('degree', $education->degree)); ?>" required>
        </div>

        <div class="mb-3">
            <label for="institution" class="form-label">Institution</label>
            <input type="text" name="institution" id="institution" class="form-control"
                value="<?php echo e(old('institution', $education->institution)); ?>" required>
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Year of Completion</label>
            <input type="number" name="year" id="year" class="form-control"
                value="<?php echo e(old('year', $education->year)); ?>" min="1900" max="<?php echo e(now()->year); ?>" required>
        </div>

        <div class="mb-3">
            <label for="grade" class="form-label">Grade/Percentage</label>
            <input type="text" name="grade" id="grade" class="form-control"
                value="<?php echo e(old('grade', $education->grade)); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Education</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\resume_builder\resources\views/mec/education/edit.blade.php ENDPATH**/ ?>