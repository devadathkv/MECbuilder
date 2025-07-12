<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0d1117 0%, #1a1f2a 100%);
            color: #e6edf3;
            margin: 0;
            padding: 0;
        }

        .dashboard-section {
            padding: 60px 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .welcome-card,
        .ai-suggestions-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 25px 35px;
            margin-bottom: 40px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            animation: fadeInDown 0.8s ease forwards;
        }

        .welcome-card h1 {
            font-size: 2rem;
            color: #8ab4f8;
            margin-bottom: 10px;
        }

        .welcome-card p {
            font-size: 1.1rem;
            color: #c9d1d9;
        }

        .ai-suggestions-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 25px 35px;
            margin-bottom: 40px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .ai-suggestions-card h2 {
            font-size: 1.8rem;
            color: #58a6ff;
            margin-bottom: 15px;
        }

        .ai-suggestions-card pre {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            color: #c9d1d9;
            font-size: 1rem;
            text-align: left;
            padding: 15px;
            border-radius: 15px;
            line-height: 1.6;
            white-space: pre-wrap;
        }

        .suggestions-btn {
            background: linear-gradient(135deg, #238636, #2ea043);
            color: #ffffff;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
            border: none;
        }

        .suggestions-btn:hover {
            background: linear-gradient(135deg, #2ea043, #45d96e);
        }

        .dashboard-title {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 50px;
            text-align: center;
            color: #8ab4f8;
            letter-spacing: 0.5px;
        }

        .template-grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
        }

        .template-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            padding: 30px;
            border-radius: 20px;
            width: 520px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
            transition: all 0.4s ease;
            opacity: 0;
            animation: fadeInUp 1s ease forwards;
        }

        .template-card:hover {
            transform: scale(1.03);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
            background: rgba(255, 255, 255, 0.05);
        }

        .template-name {
            font-size: 1.4rem;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 12px;
        }

        .template-desc {
            font-size: 1rem;
            color: #c9d1d9;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .template-btn {
            display: inline-block;
            padding: 12px 24px;
            background: linear-gradient(135deg, #238636, #2ea043);
            color: #ffffff;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            font-size: 0.95rem;
            transition: transform 0.3s ease, background 0.3s ease;
            box-shadow: 0 5px 15px rgba(34, 197, 94, 0.3);
        }

        .template-btn:hover {
            background: linear-gradient(135deg, #2ea043, #45d96e);
            transform: translateY(-2px);
        }

        @keyframes fadeInUp {
            0% {
                transform: translateY(40px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeInDown {
            0% {
                transform: translateY(-40px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>

    <section class="dashboard-section">
        <div class="container">
            <!-- 👋 Welcome User -->
            <div class="welcome-card">
                <h1 class="template-name">Welcome, <?php echo e(Auth::user()->name); ?> 👋</h1>
                <p>Glad to see you back on your dashboard!</p>
            </div>

            <!-- 🤖 AI Resume Suggestions -->
            <div class="ai-suggestions-card">
                <h2 class="template-name">AI Resume Suggestions</h2>

                <form action="<?php echo e(route('dashboard.suggestions')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="suggestions-btn">Get Suggestions</button>
                </form>

                <?php if(isset($suggestions)): ?>
                    <div class="ai-suggestions"
                        style="background:#161b22; color:#e6edf3; padding:20px; border-radius:8px; margin-top:20px;">
                        <h3 style="color:#58a6ff;">💡 AI Suggestions for Your Resume:</h3>
                        <p><?php echo nl2br(e($suggestions)); ?></p>
                    </div>
                <?php endif; ?>

            </div>

            <!-- 📝 Resume Templates -->
            <div class="template-grid">
                <div class="template-card">
                    <h3 class="template-name">MEC Resume Template</h3>
                    <p class="template-desc">A clean and professional format tailored for MEC students.</p>
                    <a href="<?php echo e(route('mec.landing')); ?>" class="template-btn">Use Template</a>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\resume_builder\resources\views/dashboard.blade.php ENDPATH**/ ?>