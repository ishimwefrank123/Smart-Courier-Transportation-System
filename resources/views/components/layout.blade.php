<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>

 <header >
  <nav>
  <a href="{{route('posts.index')}}" class="nav-link">Home</a>
  @auth
    <div x-data="{open: false}">
      {{-- Dropdown menu button --}}
      <button @click="open= !open"><img src="https://picsum.photos/200" alt=""></button>

    {{-- Dropdown menu --}}
    <div x-show="open" @click.outside="open=false">
      <p class="username">{{ auth()->user()->username }}</p>
      <a href="{{ route('dashboard') }}">dashboard</a>

      <form action="{{ route('logout') }}" method="post">
        @csrf
        <button>Logout</button>
      </form>
    </div>
    </div>
  @endauth

  @guest
  <div>
   <a href="{{ route('login') }}" class="nav-link">Login</a>
    <a href="{{route('register')}}" class="nav-link">Register</a>
  </div>
   
  @endguest
  
 
  </nav>
 </header>

 <main class="mainClass">
  {{$slot}}
 </main>
</body>

</html>
