

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2><?php echo e($skill ? 'Edit' : 'Add'); ?> Skills & Interests</h2>

    <form action="<?php echo e($skill ? route('skills.update') : route('skills.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php if($skill): ?>
            <?php echo method_field('PUT'); ?>
        <?php endif; ?>

        <div class="form-group mb-3">
            <label for="technical">Technical Skills</label>
            <textarea name="technical" class="form-control" required><?php echo e(old('technical', $skill->technical ?? '')); ?></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="soft">Soft Skills</label>
            <textarea name="soft" class="form-control" required><?php echo e(old('soft', $skill->soft ?? '')); ?></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="interests">Interests</label>
            <textarea name="interests" class="form-control" required><?php echo e(old('interests', $skill->interests ?? '')); ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary"><?php echo e($skill ? 'Update' : 'Save'); ?></button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\resume_builder\resources\views/mec/skills/create.blade.php ENDPATH**/ ?>