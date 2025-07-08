

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Edit header info</h2>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('header.update')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" name="name" id="name" class="form-control" 
               value="<?php echo e(old('name', $header->name)); ?>" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" name="email" id="email" class="form-control"
               value="<?php echo e(old('email', $header->email)); ?>" required>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="text" name="phone" id="phone" class="form-control"
               value="<?php echo e(old('phone', $header->phone)); ?>" required>
    </div>

    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="date" name="dob" id="dob" class="form-control"
               value="<?php echo e(old('dob', $header->dob)); ?>" required>
    </div>

    <div class="mb-3">
        <label for="linkedin" class="form-label">LinkedIn Profile Link</label>
        <input type="url" name="linkedin" id="linkedin" class="form-control"
               value="<?php echo e(old('linkedin', $header->linkedin)); ?>" required>
    </div>

    <div class="mb-3">
        <label for="github" class="form-label">GitHub Profile Link</label>
        <input type="url" name="github" id="github" class="form-control"
               value="<?php echo e(old('github', $header->github)); ?>" required>
    </div>

    <div class="mb-3">
        <label for="portfolio" class="form-label">Portfolio Link</label>
        <input type="url" name="portfolio" id="portfolio" class="form-control"
               value="<?php echo e(old('portfolio', $header->portfolio)); ?>">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\resume_builder\resources\views/mec/header/edit.blade.php ENDPATH**/ ?>