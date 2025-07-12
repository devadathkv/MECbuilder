<header class="header">
    <div class="container">
        <div class="logo">
            <img src="https://www.mec.ac.in/static/media/collegelogohollow.f2e70403.png" alt="MEC Logo"
                style="height: 45px; vertical-align: middle; margin-right: 5px;">
            <a class="logo-text" href="{{ url('/') }}">MECbuilder</a>

        </div>
        <nav class="nav">
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
