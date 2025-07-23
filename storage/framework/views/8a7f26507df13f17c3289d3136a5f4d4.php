

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
            display: block;
            /* Ensure label is above input */
            font-weight: bold;
            color: #c9d1d9;
            margin-bottom: 6px;
        }

        .form-control {
            display: block;
            /* Full width */
            width: 100%;
            /* Ensures textareas align properly */
            background-color: #161b22;
            color: #c9d1d9;
            border: 1px solid #30363d;
            border-radius: 8px;
            padding: 10px 15px;
            font-size: 16px;
            transition: border-color 0.3s ease, background-color 0.3s ease;
            box-sizing: border-box;
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

        .button-group {
            display: flex;
            justify-content: center;
            /* Center buttons */
            gap: 15px;
            /* Spacing between buttons */
            margin-top: 20px;
        }

        .btn-success {
            background-color: #238636;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-success:hover {
            background-color: #2ea043;
        }

        .btn-secondary {
            background-color: #30363d;
            color: #c9d1d9;
            padding: 10px 20px;
            border-radius: 8px;
            border: 1px solid #6e7681;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #484f58;
        }
    </style>

    <div class="form-container">
        <h2>Edit Skills & Interests</h2>

        <form action="<?php echo e(route('skills.update')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="mb-3">
                <label for="technical" class="form-label">Technical Skills</label>
                <textarea name="technical" id="technical" class="form-control" rows="3" required><?php echo e(old('technical', $skill->technical)); ?></textarea>
            </div>

            <div class="mb-3">
                <label for="soft" class="form-label">Soft Skills</label>
                <textarea name="soft" id="soft" class="form-control" rows="3" required><?php echo e(old('soft', $skill->soft)); ?></textarea>
            </div>

            <div class="mb-3">
                <label for="interests" class="form-label">Interests</label>
                <textarea name="interests" id="interests" class="form-control" rows="3" required><?php echo e(old('interests', $skill->interests)); ?></textarea>
            </div>

            <div class="button-group">
                <button type="submit" class="btn-success">Update Skills</button>
                <a href="<?php echo e(route('mec.landing')); ?>" class="btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\resume_builder\resources\views\mec\skills\edit.blade.php ENDPATH**/ ?>