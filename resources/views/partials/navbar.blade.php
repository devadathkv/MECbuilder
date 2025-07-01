<header class="header">
    <div class="container">
        <div class="logo">
            <span class="logo-icon"><i class="fas fa-file-alt"></i></span>
            <span class="logo-text">MECbuilder</span>
        </div>
        =<nav class="nav">
            <div class="nav-links">
                @auth
                    <a href="{{ url('/dashboard') }}" class="nav-btn">Dashboard</a>

                    <!-- Logout Form -->
                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit" class="nav-btn logout-btn">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="nav-btn login-btn">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-btn register-btn">Register</a>
                    @endif
                @endauth
            </div>
        </nav>

    </div>
</header>
