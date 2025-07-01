<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <section class="dashboard-section">
        <div class="container">
            <h1 class="dashboard-title">Choose a Resume Template</h1>

            <div class="template-grid">
                <!-- MEC Resume Template -->
                <div class="template-card">
                    <h3 class="template-name">MEC Resume Template</h3>
                    <p class="template-desc">A clean and professional format tailored for MEC students.</p>
                    <a href="<?php echo e(route('mec.landing')); ?>" class="template-btn">Use Template</a>
                </div>

                <!-- Modern Template -->
                <div class="template-card">
                    <h3 class="template-name">Modern Resume</h3>
                    <p class="template-desc">Sleek and modern layout for tech and design roles.</p>
                    
                </div>

                <!-- Classic Template -->
                <div class="template-card">
                    <h3 class="template-name">Classic Resume</h3>
                    <p class="template-desc">Traditional layout suitable for all industries.</p>
                    
                </div>

                <!-- Creative Template -->
                <div class="template-card">
                    <h3 class="template-name">Creative Resume</h3>
                    <p class="template-desc">Stand out with a visually engaging creative template.</p>
                    
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\resume_builder\resources\views\dashboard.blade.php ENDPATH**/ ?>