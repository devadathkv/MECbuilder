<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="https://unpkg.com/trix@2.0.0/dist/trix.css"> <!-- ✅ move here -->
    <script src="https://cdn.tailwindcss.com"></script>
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>


<body>
    <div class="page-container">
        <!-- Header/Navigation -->

        <?php echo $__env->make('partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <div class="nav-spacer"></div>

        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>

        <!-- Footer -->
        <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
    <script src="script.js"></script>
    <script src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\resume_builder\resources\views\layouts\app.blade.php ENDPATH**/ ?>