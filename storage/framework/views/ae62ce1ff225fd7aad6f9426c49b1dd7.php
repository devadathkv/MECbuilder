<header class="header">
    <div class="container">
        <div class="logo">
            <span class="logo-icon"><i class="fas fa-file-alt"></i></span>
            <span class="logo-text">MECbuilder</span>
        </div>
        =<nav class="nav">
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
<?php /**PATH C:\xampp\htdocs\resume_builder\resources\views\partials\navbar.blade.php ENDPATH**/ ?>