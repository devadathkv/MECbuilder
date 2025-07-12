<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background: linear-gradient(135deg, #0d1117, #1a1f2a);
            color: #e6edf3;
        }

        .auth-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .auth-card {
            background: #161b22;
            border: 1px solid #30363d;
            border-radius: 12px;
            padding: 40px 30px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.7);
            width: 100%;
            max-width: 420px;
            animation: fadeIn 0.8s ease-in-out;
        }

        .auth-card input[type="email"],
        .auth-card input[type="password"],
        .auth-card input[type="text"] {
            background: #0d1117;
            border: 1px solid #30363d;
            color: #e6edf3;
            border-radius: 8px;
            padding: 10px 14px;
            margin-top: 8px;
            margin-bottom: 15px;
            width: 100%;
        }

        .auth-card input:focus {
            border-color: #58a6ff;
            outline: none;
            box-shadow: 0 0 0 2px rgba(88, 166, 255, 0.3);
        }

        .auth-logo img {
            width: 80px;
            height: auto;
            margin-bottom: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.9rem;
            color: #c9d1d9;
        }

        .checkbox-label input[type="checkbox"] {
            accent-color: #58a6ff;
            width: 18px;
            height: 18px;
            border-radius: 4px;
        }

        .primary-btn {
            display: block;
            width: 100%;
            background: #2ea043;
            color: #fff;
            text-align: center;
            border-radius: 8px;
            padding: 10px 0;
            font-weight: 600;
            margin-top: 15px;
            transition: background 0.3s ease;
        }

        .primary-btn:hover {
            background: #238636;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="auth-container">
        <div class="auth-card">
            <!-- College Logo -->
            <div class="auth-logo">
                <img src="https://www.mec.ac.in/static/media/collegelogohollow.f2e70403.png" alt="MEC Logo">
            </div>

            <!-- Auth Slot -->
            <?php echo e($slot); ?>

        </div>
    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\resume_builder\resources\views/layouts/guest.blade.php ENDPATH**/ ?>