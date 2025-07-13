

<?php $__env->startSection('content'); ?>
    <div class="container mx-auto mt-8 max-w-lg bg-gray-900 text-white rounded-2xl shadow-lg p-6">
        <h2 class="text-2xl font-bold mb-4 text-center text-blue-400">Add Reference</h2>

        <?php if($errors->any()): ?>
            <div class="bg-red-600 text-white rounded-lg p-4 mb-4">
                <ul class="list-disc list-inside">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('references.store')); ?>" method="POST" class="space-y-4">
            <?php echo csrf_field(); ?>

            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-300 mb-2">Full Name</label>
                <input type="text" name="name" id="name"
                    class="w-full bg-gray-800 text-gray-200 border border-gray-700 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="<?php echo e(old('name')); ?>" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-gray-300 mb-2">Email Address</label>
                <input type="email" name="email" id="email"
                    class="w-full bg-gray-800 text-gray-200 border border-gray-700 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="<?php echo e(old('email')); ?>">
            </div>

            <div class="mb-4">
                <label for="institution" class="block text-sm font-semibold text-gray-300 mb-2">Institution</label>
                <input type="text" name="institution" id="institution"
                    class="w-full bg-gray-800 text-gray-200 border border-gray-700 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="<?php echo e(old('institution')); ?>">
            </div>

            <button type="submit"
                class="w-full py-2 px-4 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                Add Reference
            </button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\resume_builder\resources\views/mec/references/create.blade.php ENDPATH**/ ?>