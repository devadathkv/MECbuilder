<x-guest-layout>
    <style>
        body {
            background: linear-gradient(135deg, #0d1117, #1a1f2a);
            font-family: 'Poppins', sans-serif;
            color: #e6edf3;
        }

        .login-container {
            max-width: 400px;
            margin: 80px auto;
            background: #161b22;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.6);
        }

        .login-title {
            text-align: center;
            font-size: 1.8rem;
            color: #58a6ff;
            margin-bottom: 20px;
            font-weight: 600;
        }

        label {
            color: #c9d1d9;
            font-size: 0.95rem;
            font-weight: 500;
        }

        input[type="email"],
        input[type="password"] {
            background-color: #0d1117;
            border: 1px solid #30363d;
            border-radius: 8px;
            width: 100%;
            padding: 10px 15px;
            margin-top: 6px;
            margin-bottom: 15px;
            color: #e6edf3;
            font-size: 0.95rem;
        }

        input:focus {
            outline: none;
            border-color: #58a6ff;
            box-shadow: 0 0 0 2px rgba(88, 166, 255, 0.3);
        }

        .checkbox-label {
            color: #8b949e;
            font-size: 0.9rem;
        }

        .forgot-password {
            display: block;
            text-align: right;
            color: #58a6ff;
            font-size: 0.85rem;
            margin-bottom: 15px;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: #1f6feb;
        }

        .btn-login {
            background: linear-gradient(135deg, #238636, #2ea043);
            color: #ffffff;
            padding: 10px 0;
            width: 100%;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn-login:hover {
            background: linear-gradient(135deg, #2ea043, #45d96e);
        }

        .error-message {
            color: #f85149;
            font-size: 0.85rem;
            margin-top: -10px;
            margin-bottom: 10px;
        }
    </style>

    <div class="login-container">
        <h2 class="login-title">Log in to MECbuilder</h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus
                    autocomplete="username" />
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" />
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <!-- Remember Me -->
            <div style="margin-bottom: 15px;">
                <label class="checkbox-label">
                    <input type="checkbox" name="remember" style="margin-right: 5px;"> Remember me
                </label>
            </div>

            <!-- Forgot Password -->
            @if (Route::has('password.request'))
                <a class="forgot-password" href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
            @endif

            <!-- Login Button -->
            <button type="submit" class="btn-login">
                Log In
            </button>
        </form>
    </div>
</x-guest-layout>
