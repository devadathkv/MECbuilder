<header class="header">
    <div class="container">
        <div class="logo">
            <img src="https://www.mec.ac.in/static/media/collegelogohollow.f2e70403.png" alt="MEC Logo"
                style="height: 45px; vertical-align: middle; margin-right: 5px;">
            <a class="logo-text" href="<?php echo e(url('/')); ?>">MECbuilder</a>

        </div>
        <nav class="nav">
            <div class="nav-links">
                <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(url('/dashboard')); ?>" class="nav-btn">Dashboard</a>

                    <!-- Logout Form -->
                    <form method="POST" action="<?php echo e(route('logout')); ?>" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="nav-btn logout-btn">Logout</button>
                    </form>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="nav-btn login-btn">Log in</a>

                    <?php if(Route::has('register')): ?>
                        <a href="<?php echo e(route('register')); ?>" class="nav-btn register-btn">Register</a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </nav>

    </div>
</header>
<?php /**PATH C:\xampp\htdocs\resume_builder\resources\views/partials/navbar.blade.php ENDPATH**/ ?>