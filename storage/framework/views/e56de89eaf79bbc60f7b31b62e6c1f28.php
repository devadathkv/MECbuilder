

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Edit Skills & Interests</h2>

    <form action="<?php echo e(route('skills.update')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group mb-3">
            <label for="technical">Technical Skills</label>
            <textarea name="technical" id="technical" class="form-control" rows="3" required><?php echo e(old('technical', $skill->technical)); ?></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="soft">Soft Skills</label>
            <textarea name="soft" id="soft" class="form-control" rows="3" required><?php echo e(old('soft', $skill->soft)); ?></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="interests">Interests</label>
            <textarea name="interests" id="interests" class="form-control" rows="3" required><?php echo e(old('interests', $skill->interests)); ?></textarea>
        </div>

        <button type="submit" class="btn btn-success">Update Skills</button>
        <a href="<?php echo e(route('mec.landing')); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\resume_builder\resources\views/mec/skills/edit.blade.php ENDPATH**/ ?>