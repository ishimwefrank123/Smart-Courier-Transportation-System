<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>

    {{-- Vite includes --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Alpine.js for dropdown --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="body">

    <!-- Header / Navigation -->
    <header class="site-header">
        <nav class="navbar">
            <div class="logo">
                <a href="{{ route('posts.index') }}" class="brand-name">{{ env('APP_NAME') }}</a>
            </div>

            <ul class="nav-links">
                <li><a href="{{ route('posts.index') }}" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Track Order</a></li>
                <li><a href="#" class="nav-link">Price</a></li>
                <li><a href="#" class="nav-link">About</a></li>
            </ul>

            <div class="auth-section">
                @auth
                    <div x-data="{ open: false }" class="user-menu">
                        <button @click="open = !open" class="avatar-btn">
                            <img src="https://picsum.photos/40" alt="User Avatar" class="avatar-img">
                        </button>

                        <div x-show="open" @click.outside="open = false" class="dropdown-menu">
                            <p class="username">{{ auth()->user()->username }}</p>
                            <a href="{{ route('dashboard') }}" class="dropdown-link">Dashboard</a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-link logout-btn">Logout</button>
                            </form>
                        </div>
                    </div>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="btn-link">Login</a>
                    <a href="{{ route('register') }}" class="btn-register">Register</a>
                @endguest
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="site-main">
        {{ $slot }}
    </main>

</body>
</html>
