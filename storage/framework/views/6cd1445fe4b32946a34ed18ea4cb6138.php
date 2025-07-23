

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

        textarea.form-control {
            resize: vertical;
        }

        input::placeholder,
        textarea::placeholder {
            color: #8b949e;
        }
    </style>

    <div class="form-container">
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
                <textarea name="description" id="description" class="form-control" rows="3" required><?php echo e(old('description', $project->description)); ?></textarea>
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

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\resume_builder\resources\views\mec\projects\edit.blade.php ENDPATH**/ ?>