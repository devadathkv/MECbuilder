

<?php $__env->startSection('content'); ?>
    <style>
        .form-container {
            max-width: 700px;
            margin: 40px auto;
            background-color: #0d1117;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(255, 255, 255, 0.05);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #c9d1d9;
        }

        .form-container h2 {
            margin-bottom: 30px;
            color: #58a6ff;
            text-align: center;
            border-bottom: 2px solid #58a6ff;
            padding-bottom: 10px;
        }

        .form-label {
            font-weight: bold;
            color: #c9d1d9;
        }

        .form-control {
            background-color: #161b22;
            color: #c9d1d9;
            border: 1px solid #30363d;
            border-radius: 8px;
            padding: 10px 15px;
            font-size: 16px;
            transition: border-color 0.3s ease, background-color 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: #58a6ff;
            background-color: #0d1117;
            box-shadow: 0 0 0 0.2rem rgba(88, 166, 255, 0.25);
        }

        .mb-3 {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #238636;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #2ea043;
        }

        .alert-danger {
            background-color: #3c0d0d;
            color: #f85149;
            border: 1px solid #f85149;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .alert-danger ul {
            margin: 0;
            padding-left: 20px;
        }

        input::placeholder,
        textarea::placeholder {
            color: #8b949e;
        }
    </style>

    <div class="form-container">
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
                    value="<?php echo e(old('degree', $education->degree)); ?>" placeholder="Enter degree or course" required>
            </div>

            <div class="mb-3">
                <label for="institution" class="form-label">Institution</label>
                <input type="text" name="institution" id="institution" class="form-control"
                    value="<?php echo e(old('institution', $education->institution)); ?>" placeholder="Enter institution name" required>
            </div>

            <div class="mb-3">
                <label for="board" class="form-label">Board/University</label>
                <input type="text" name="board" id="board" class="form-control"
                    value="<?php echo e(old('board', $education->board)); ?>" placeholder="Enter board/university name" required>
            </div>

            <div class="mb-3">
                <label for="year" class="form-label">Year of Completion</label>
                <input type="number" name="year" id="year" class="form-control"
                    value="<?php echo e(old('year', $education->year)); ?>" min="1900" max="<?php echo e(now()->year); ?>" placeholder="e.g., 2025" required>
            </div>

            <div class="mb-3">
                <label for="grade" class="form-label">Grade/Percentage</label>
                <input type="text" name="grade" id="grade" class="form-control"
                    value="<?php echo e(old('grade', $education->grade)); ?>" placeholder="e.g., 85% or 8.5 CGPA" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Education</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\resume_builder\resources\views\mec\education\edit.blade.php ENDPATH**/ ?>