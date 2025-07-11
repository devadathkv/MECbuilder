

<?php $__env->startSection('content'); ?>
    <div class="container mx-auto mt-8 max-w-lg bg-gray-900 text-white rounded-2xl shadow-lg p-6">
        <h2 class="text-2xl font-bold mb-4 text-center text-blue-400">Add Course</h2>

        
        <?php if($errors->any()): ?>
            <div class="bg-red-600 text-white rounded-lg p-4 mb-4">
                <ul class="list-disc list-inside">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/2.0.0/trix.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/2.0.0/trix.min.js"></script>

        <form action="<?php echo e(route('courses.store')); ?>" method="POST" class="space-y-4">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="title" class="block text-sm font-semibold text-gray-300 mb-2">Course / Certification</label>
                <input id="title" type="hidden" name="title">
                <trix-editor input="title"
                    class="trix-content bg-gray-800 text-gray-200 border border-gray-700 rounded-lg focus:ring focus:ring-blue-500"></trix-editor>
            </div>

            <button type="submit"
                class="w-full py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                Save
            </button>
        </form>
    </div>

    <style>
        /* Dark mode adjustments for Trix editor */
        .trix-content {
            background-color: #1f2937;
            /* gray-800 */
            color: #e5e7eb;
            /* gray-200 */
        }

        .trix-button-group button {
            background-color: #374151;
            /* gray-700 */
            color: #f3f4f6;
            /* gray-100 */
        }

        .trix-button-group button.trix-active {
            background-color: #2563eb;
            /* blue-600 */
            color: white;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\resume_builder\resources\views/mec/courses/create.blade.php ENDPATH**/ ?>